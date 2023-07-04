<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Coin;
use App\Models\Portfolio;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class PortfolioController extends Controller
{
    public function buy(Request $request): RedirectResponse
    {
        $userId = (int)Auth::user()->getAuthIdentifier();
        $coin = Coin::fetchBySymbol($request['coin_symbol']);
        $account = Account::findOrFail($request->input(['investing_account']));

        $account->balance -= $request['amount'];
        $portfolio = Portfolio::where('coin', $coin->getSymbol())->first();

        if (!$portfolio) {
            $newPortfolio = new Portfolio([
                'user_id' => $userId,
                'coin' => $coin->getSymbol(),
                'coin_name' => $coin->getName(),
                'amount' => number_format($request['amount'] / $coin->getPrice(), 2),
                'currency' => $account->currency,
                'bought_for' => $request['amount'],
            ]);

            $newPortfolio->save();
        } else {
            $portfolio['amount'] += $request['amount'] / $coin->getPrice();
            $portfolio['bought_for'] += $request['amount'];

            $portfolio->save();
        }

        $account->save();

        return Redirect::to('/investing');
    }

    public function sell()
    {

    }

}
