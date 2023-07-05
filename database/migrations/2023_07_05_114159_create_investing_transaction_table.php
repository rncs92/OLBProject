<?php declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestingTransactionTable extends Migration
{
    public function up(): void
    {
        Schema::create('investing_transaction', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('account_number');
            $table->string('transaction_id');
            $table->string('bought_for')->nullable();
            $table->string('sold_for')->nullable();
            $table->string('currency');
            $table->string('coin_symbol');
            $table->string('coin_name');
            $table->string('coin_amount');
            $table->string('net_gains')->nullable();
            $table->string('message');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('investing_transaction');
    }
}
