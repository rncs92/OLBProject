<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class TransactionController extends Controller
{
    public function show(): View
    {
        $user = User::find(Auth::user()->getAuthIdentifier());
        $transactions = $user->transactions;

        return view('payments.transactions', compact('transactions'));
    }
}
