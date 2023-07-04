<?php declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'coin',
        'coin_name',
        'amount',
        'currency',
        'bought_for',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function coins(): HasMany
    {
        return $this->hasMany(Coin::class, );
    }

    public function currency(): HasOne
    {
        return $this->hasOne(Currency::class);
    }
}
