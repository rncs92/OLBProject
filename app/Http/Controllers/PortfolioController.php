<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Coin;
use App\Models\InvestingTransaction;
use App\Models\Portfolio;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    public function buy(Request $request): RedirectResponse
    {
        $userId = (int)Auth::user()->getAuthIdentifier();
        $coin = Coin::fetchBySymbol($request['coin_symbol']);
        $account = Account::findOrFail($request->input(['investing_account']));

        $account->balance -= $request['amount'];
        $coinAmount = number_format($request['amount'] / $coin->getPrice(), 2);
        $portfolio = Portfolio::where('coin', $coin->getSymbol())->first();

        if (!$portfolio) {
            $newPortfolio = new Portfolio([
                'user_id' => $userId,
                'coin' => $coin->getSymbol(),
                'coin_name' => $coin->getName(),
                'amount' => $coinAmount,
                'currency' => $account->currency,
                'bought_for' => $request['amount'],
            ]);

            $newPortfolio->save();
        } else {
            $portfolio['amount'] += $request['amount'] / $coin->getPrice();
            $portfolio['bought_for'] += $request['amount'];

            $portfolio->save();
        }

        $transactionId = strtoupper(Str::random(8));

        $investingTransaction = new InvestingTransaction([
            'user_id' => $userId,
            'account_number' => $account->account_number,
            'transaction_id' => $transactionId,
            'bought_for'=> $request['amount'],
            'currency' => $account->currency,
            'coin_symbol' => $coin->getSymbol(),
            'coin_name' => $coin->getName(),
            'coin_amount' => $coinAmount,
            'message' => 'Buy',
        ]);

        $account->save();
        $investingTransaction->save();

        return Redirect::to('/investing');
    }

    public function sell()
    {

    }

}
