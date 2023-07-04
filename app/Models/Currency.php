<?php declare(strict_types=1);

namespace App\Models;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Currency extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'rate'];

    public function transaction(): BelongsTo
    {
        return $this->belongsTo(Transaction::class);
    }

    public function portfolio(): BelongsTo
    {
        return $this->belongsTo(Portfolio::class);
    }

    public static function fetch(string $base, string $transfer)
    {
        $client = new Client();
        $apiKey = config('services.exchange.key');
        $apiUrl = config('services.exchange.url');

        $response = $client->request('GET', $apiUrl, [
            'query' => [
                'apikey' => $apiKey,
                'base_currency' => $base,
                'currencies' => $transfer,
            ]
        ]);
        $jsonData = json_decode($response->getBody()->getContents());
        return $jsonData->data;
    }

    public static function exchange($fromCurrency, $toCurrency, $amount)
    {
        $data = self::fetch($fromCurrency, $toCurrency);
        $value = $data->{$toCurrency}->value;

        return $amount * $value;
    }
}
