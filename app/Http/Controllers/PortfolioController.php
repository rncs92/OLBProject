<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Coin;
use App\Models\InvestingTransaction;
use App\Models\Portfolio;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    public function buy(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'amount' => 'required|min:1|max:255|numeric',
        ]);

        $userId = (int)Auth::user()->getAuthIdentifier();
        $user = User::find(Auth::user()->getAuthIdentifier());
        $coin = Coin::fetchBySymbol($request['coin_symbol']);
        $account = Account::findOrFail($request->input(['investing_account']));

        $account->balance -= $request['amount'];
        $coinAmount = $request['amount'] / $coin->getPrice();
        $portfolio = $user->portfolio()
            ->where('coin', $coin->getSymbol())
            ->where('user_id', $userId)
            ->first();

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
            $portfolio->amount += $request['amount'] / $coin->getPrice();
            $portfolio->bought_for += $request['amount'];

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

    public function sell(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'amount' => 'required|min:1|max:255|numeric',
        ]);

        $userId = (int)Auth::user()->getAuthIdentifier();
        $account = Account::findOrFail($request->input(['investing_account']));
        $portfolio = Portfolio::findOrFail($request->input(['portfolio']));
        $transactionId = strtoupper(Str::random(8));
        $coin = Coin::fetchBySymbol($portfolio->coin);
        $coinAmount = $request['amount'] / $coin->getPrice();
        $soldFor = $coinAmount * $coin->getPrice();
        $averagePrice = $portfolio->bought_for / $portfolio->amount;
        $totalCoinValue = $coinAmount * $averagePrice;

        $portfolio->amount -= $coinAmount;
        $account->balance += (int)$soldFor;
        $portfolio->bought_for -= $totalCoinValue;

        $investingTransaction = new InvestingTransaction([
            'user_id' => $userId,
            'account_number' => $account->account_number,
            'transaction_id' => $transactionId,
            'sold_for'=> $soldFor,
            'currency' => $account->currency,
            'coin_symbol' => $portfolio->coin,
            'coin_name' => $portfolio->coin_name,
            'coin_amount' => $coinAmount,
            'net_gains' => number_format($soldFor - ($coinAmount * $averagePrice), 4) . $portfolio->currency,
            'message' => 'Sell',
        ]);

        $investingTransaction->save();
        $portfolio->save();
        $account->save();

        return Redirect::to('/investing');
    }

}
