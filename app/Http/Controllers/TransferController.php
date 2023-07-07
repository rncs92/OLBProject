<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Currency;
use App\Models\Transaction;
use App\Rules\DifferentAccounts;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\View\View;

class TransferController extends Controller
{
    public function show(): View
    {
        $userId = (int)Auth::user()->getAuthIdentifier();
        $accounts = Account::all()->where('user_id', $userId);

        return view('transfer', compact('accounts'));
    }

    public function transfer(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'amount' => 'required|numeric',
            'transfer_from' => new DifferentAccounts($request->input(['transfer_to'])),
        ]);

        $user = Auth::user();

        $fromAccount = $user->account()->findOrFail($request->input(['transfer_from']));
        $toAccount = $user->account()->findOrFail($request->input(['transfer_to']));
        $amount = $request->input(['amount']);

        $fromAccount->balance += -$amount;
        $toAccount->balance += Currency::exchange($fromAccount->currency, $toAccount->currency, $amount);
        $transactionId = strtoupper(Str::random(8));


        $fromTransaction = new Transaction([
            'user_id' => $user->getAuthIdentifier(),
            'account_number' => $fromAccount->account_number,
            'receiver_account_number' => $toAccount->account_number,
            'transaction_id' => $transactionId,
            'from_user' => $user->getAuthIdentifier(),
            'to_user' => $user->getAuthIdentifier(),
            'amount' => -$amount,
            'currency' => $fromAccount->currency,
            'when' => Carbon::now(),
            'message' => 'Transfer'
        ]);

        $toTransaction = new Transaction([
            'user_id' => $user->getAuthIdentifier(),
            'account_number' => $fromAccount->account_number,
            'receiver_account_number' => $toAccount->account_number,
            'transaction_id' => $transactionId,
            'from_user' => $user->getAuthIdentifier(),
            'to_user' => $user->getAuthIdentifier(),
            'amount' => Currency::exchange($fromAccount->currency, $toAccount->currency, $amount),
            'currency' => $toAccount->currency,
            'when' => Carbon::now(),
            'message' => 'Transfer'
        ]);

        $fromAccount->save();
        $toAccount->save();
        $fromTransaction->save();
        $toTransaction->save();

        return Redirect::to('accounts');
    }
}
