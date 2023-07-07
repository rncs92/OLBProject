<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Currency;
use App\Models\Transaction;
use App\Models\User;
use App\Rules\DifferentAccounts;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\View\View;

class PaymentController extends Controller
{
    public function index(): View
    {
        $user = User::find(Auth::user()->getAuthIdentifier());
        $accounts = $user->account;

        return view('payment', compact('accounts'));
    }

    public function make(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|min:2|max:255',
            'surname' => 'required|min:2|max:255',
            'receiver' => 'required|min:16|max:16|exists:accounts,account_number',
            'amount' => 'required|numeric',
            'account' => new DifferentAccounts($request->input(['receiver'])),
        ]);

        $senderAccount = Account::where('account_number', $request->input(['account']))->first();
        $receiverAccount = Account::where('account_number', $request->input(['receiver']))->first();
        $amount = $request->input(['amount']);

        $senderAccount->balance += -$amount;
        $receiverAccount->balance += Currency::exchange($senderAccount->currency, $receiverAccount->currency, $amount);
        $transactionId = strtoupper(Str::random(8));

        $fromTransaction = new Transaction([
            'user_id' => $senderAccount->user_id,
            'account_number' => $senderAccount->account_number,
            'receiver_account_number' => $receiverAccount->account_number,
            'transaction_id' => $transactionId,
            'from_user' => $senderAccount->user_id,
            'to_user' => $receiverAccount->user_id,
            'amount' => -$amount,
            'currency' => $senderAccount->currency,
            'when' => Carbon::now(),
            'message' => 'Payment'
        ]);

        $toTransaction = new Transaction([
            'user_id' => $receiverAccount->user_id,
            'account_number' => $senderAccount->account_number,
            'receiver_account_number' => $receiverAccount->account_number,
            'transaction_id' => $transactionId,
            'from_user' => $senderAccount->user_id,
            'to_user' => $receiverAccount->user_id,
            'amount' => Currency::exchange($senderAccount->currency, $receiverAccount->currency, $amount),
            'currency' => $receiverAccount->currency,
            'when' => Carbon::now(),
            'message' => 'Payment'
        ]);

        $senderAccount->save();
        $receiverAccount->save();
        $fromTransaction->save();
        $toTransaction->save();

        return Redirect::to('/accounts');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
