<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Coin;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CoinController extends Controller
{
    public function index(): View
    {
        $userId = (int)Auth::user()->getAuthIdentifier();
        $accounts = Account::all()->where('user_id', $userId)->where('type', 'Investing');
        $portfolios = Portfolio::all()->where('user_id', $userId);
        $totalSum = number_format(array_sum(DB::table('portfolios')
            ->where('user_id', $userId)
            ->pluck('bought_for')
            ->all()), 2);

        $realTimeValues = [];

        foreach ($portfolios as $portfolio) {
            $realTimeValues[] = number_format(Coin::fetchBySymbol($portfolio->coin)->getPrice() * $portfolio->amount, 2);
        }
        $totalSumRealTime = number_format(array_sum($realTimeValues), 2);

        return view('investing', compact(
            'accounts',
            'portfolios',
            'totalSum',
            'realTimeValues',
            'totalSumRealTime'
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
}
