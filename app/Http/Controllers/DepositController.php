<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\View\View;

class DepositController extends Controller
{
    public function show(): View
    {
        $userId = (int)Auth::user()->getAuthIdentifier();
        $accounts = Account::all()->where('user_id', $userId);

        return view('deposit', compact('accounts'));
    }

    public function deposit(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'amount' => 'required|min:1|max:255|numeric',
        ]);

        $user = Auth::user();
        $amount = $request->input('amount');
        $selectedAccount = $request->input('account');

        $userAccount = $user->account()->findOrFail($selectedAccount);

        $userAccount->balance += $amount;
        $transaction = new Transaction([
            'user_id' => $user->getAuthIdentifier(),
            'receiver_account_number' => $userAccount->account_number,
            'transaction_id' => strtoupper(Str::random(8)),
            'from_user' => $user->getAuthIdentifier(),
            'to_user' => $user->getAuthIdentifier(),
            'amount' => $amount,
            'currency' => $userAccount->currency,
            'when' => Carbon::now(),
            'message'=> 'Deposit'
        ]);
        $userAccount->save();
        $userAccount->transaction()->save($transaction);

        return Redirect::to('accounts');
    }
}
