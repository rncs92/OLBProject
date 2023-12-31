<?php declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('account_number')->nullable();
            $table->string('receiver_account_number')->nullable();
            $table->string('transaction_id');
            $table->foreignId('from_user');
            $table->foreignId('to_user');
            $table->float('amount', 20);
            $table->string('currency');
            $table->dateTime('when');
            $table->string('message')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
}
