<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Coin;
use App\Models\Portfolio;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CoinController extends Controller
{
    public function index(): View
    {
        $userId = (int)Auth::user()->getAuthIdentifier();
        $user = User::find(Auth::user()->getAuthIdentifier());
        $accounts = Account::all()->where('user_id', $userId)->where('type', 'Investing');
        $portfolios = Portfolio::all()->where('user_id', $userId);
        $totalSum = number_format(array_sum(DB::table('portfolios')
            ->where('user_id', $userId)
            ->pluck('bought_for')
            ->all()), 2);

        $boughtFor = [];
        $realTimeValues = [];
        foreach ($portfolios as $portfolio) {
            $boughtFor[] = $portfolio->bought_for;
            $realTimeValues[] = number_format(Coin::fetchBySymbol($portfolio->coin)->getPrice() * $portfolio->amount, 2);
        }

        $difference = [];
        for($i = 0; $i < count($boughtFor); $i++) {
            $difference[] = number_format(($realTimeValues[$i] - $boughtFor[$i]) / $boughtFor[$i] * 100, 2);
        }

        $totalSumRealTime = number_format(array_sum($realTimeValues), 2);


        $investingTransactions = $user->investingTransactions;

        return view('investing', compact(
            'accounts',
            'portfolios',
            'totalSum',
            'realTimeValues',
            'totalSumRealTime',
            'difference',
            'investingTransactions'
        ));
    }

    public function showAll(): View
    {
        $coins = Coin::createCollection();

        return view('crypto', compact('coins'));
    }

    public function showSingle(string $symbol): View
    {
        $coin = Coin::fetchBySymbol($symbol);
        $userId = (int)Auth::user()->getAuthIdentifier();
        $accounts = Account::all()->where('user_id', $userId)->where('type', 'Investing');

        return view('coin', compact('coin', 'accounts'));
    }

    public function showSingleSell(string $symbol): View
    {
        $coin = Coin::fetchBySymbol($symbol);
        $userId = (int)Auth::user()->getAuthIdentifier();
        $user = User::find($userId);
        $accounts = Account::all()->where('user_id', $userId)->where('type', 'Investing');
        $portfolio = $user->portfolio
            ->where('coin', $symbol)
            ->where('user_id', $userId)
            ->first();

        $realTimeValue = number_format($coin->getPrice() * $portfolio->amount, 2);

        return view('sell-coin', compact(
            'coin',
            'accounts',
            'portfolio',
            'realTimeValue'
        ));
    }

    public function showBought(): View
    {
        $userId = Auth::user()->getAuthIdentifier();
        $user = User::find($userId);
        $portfolios = $user->portfolio->where('user_id', $userId)->get();

        $boughtFor = [];
        $realTimeValues = [];
        foreach ($portfolios as $portfolio) {
            $boughtFor[] = $portfolio->bought_for;
            $realTimeValues[] = number_format(Coin::fetchBySymbol($portfolio->coin)->getPrice() * $portfolio->amount, 2);
        }

        $differences = [];
        for($i = 0; $i < count($boughtFor); $i++) {
            $differences[] = number_format(($realTimeValues[$i] - $boughtFor[$i]) / $boughtFor[$i] * 100, 2);
        }

        return view('sell', compact('portfolios', 'differences', 'realTimeValues'));
    }
}
