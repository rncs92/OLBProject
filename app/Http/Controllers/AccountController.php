<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\View\View;

class AccountController extends Controller
{

    public function index(): View
    {
        $accounts = Account::all();
        return view('accounts', compact('accounts'));
    }

    public function create(Request $request): RedirectResponse
    {
        $user = Auth::user();

        // Create a new currency account
        $account = new Account([
            'account_number' => strtoupper(Str::random(16)),
            'type' => ucfirst($request['type']),
            'currency' => strtoupper($request['currency']),
            'balance' => 0,
        ]);

        $user->account()->save($account);

        return Redirect::to('accounts');
    }

    public function show()
    {
        $userId = (int)Auth::user()->getAuthIdentifier();
        $accounts = Account::all()->where('user_id', $userId);

        return view('accounts.accounts', compact('accounts'));
    }

    public function destroy(Account $account): RedirectResponse
    {
        $account->delete();

        return Redirect::to('accounts');
    }
}
