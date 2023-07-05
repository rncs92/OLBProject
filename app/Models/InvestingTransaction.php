<?php declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class InvestingTransaction extends Model
{
    use HasFactory;

    protected $table = 'investing_transaction';
    protected $fillable = [
        'user_id',
        'account_number',
        'transaction_id',
        'bought_for',
        'sold_for',
        'currency',
        'coin_symbol',
        'coin_name',
        'coin_amount',
        'net_gains',
        'message'
    ];

    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function coins(): HasMany
    {
        return $this->hasMany(Coin::class);
    }
}
