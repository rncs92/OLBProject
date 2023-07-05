<?php declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Account extends Model
{
    use HasFactory;
    protected $fillable = ['account_number', 'type', 'currency', 'balance'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function transaction(): HasMany
    {
        return $this->hasMany(Transaction::class, 'account_number', 'account_number');
    }

    public function investingTransaction(): HasMany
    {
        return $this->hasMany(InvestingTransaction::class, 'account_number', 'account_number');
    }
}
