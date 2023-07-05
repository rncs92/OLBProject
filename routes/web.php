<?php declare(strict_types=1);

use App\Http\Controllers\AccountController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\CoinController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransferController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TransactionController::class, 'showInvesting'])->name('accounts')->middleware('web');


/*
//Welcome
Route::get('/', function () {
    return view('welcome');
});
*/
//Account
Route::get('/accounts', [AccountController::class, 'show'])->name('accounts')->middleware('web');
Route::post('/accounts', [AccountController::class, 'create'])->name('accounts')->middleware('web');
Route::delete('/accounts/{account}', [AccountController::class, 'destroy'])->name('accounts')->middleware('web');
//Deposit
Route::get('/accounts/deposit', [DepositController::class, 'show'])->name('deposit')->middleware('web');
Route::post('/accounts/deposit', [DepositController::class, 'deposit'])->name('deposit')->middleware('web');
//Transfer
Route::get('/accounts/transfer', [TransferController::class, 'show'])->name('transfer')->middleware('web');
Route::post('/accounts/transfer', [TransferController::class, 'transfer'])->name('transfer')->middleware('web');
//Transactions
Route::get('/transactions', [TransactionController::class, 'show'])->name('transactions')->middleware('web');
//Payments
Route::get('/payments', [PaymentController::class, 'index'])->name('payment')->middleware('web');
Route::post('/payments', [PaymentController::class, 'make'])->name('payment')->middleware('web');
//Investing
Route::get('/investing', [CoinController::class, 'index'])->name('investing')->middleware('web');
Route::get('/investing/crypto', [CoinController::class, 'showAll'])->name('crypto')->middleware('web');
Route::get('/investing/crypto/{symbol}', [CoinController::class, 'showSingle'])->name('coin')->middleware('web');
Route::post('/investing/crypto/', [PortfolioController::class, 'buy'])->name('buy')->middleware('web');

//Jetstream
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
