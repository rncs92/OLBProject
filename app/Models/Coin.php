<?php declare(strict_types=1);

namespace App\Models;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Coin extends Model
{
    use HasFactory;

    public function portfolio(): BelongsTo
    {
        return $this->belongsTo(Portfolio::class);
    }

    private $name;
    private $symbol;
    private $price;
    private $supply;
    private $priceChange24h;
    private $priceChange7d;
    private $priceChange30d;
    private $maxSupply;
    private $priceChange1h;
    private $volume24h;
    private $marketCap;
    private $volumeChange24h;

    public function __construct(
        string $name,
        string $symbol,
        float $price,
        string $supply,
        string $maxSupply,
        float $priceChange1h,
        float $priceChange24h,
        float $priceChange7d,
        float $priceChange30d,
        string $volume24h,
        string $volumeChange24h,
        string $marketCap,
        array $attributes = [])
    {
        parent::__construct($attributes);
        $this->name = $name;
        $this->symbol = $symbol;
        $this->price = $price;
        $this->supply = $supply;
        $this->priceChange24h = $priceChange24h;
        $this->priceChange7d = $priceChange7d;
        $this->priceChange30d = $priceChange30d;
        $this->maxSupply = $maxSupply;
        $this->priceChange1h = $priceChange1h;
        $this->volume24h = $volume24h;
        $this->marketCap = $marketCap;
        $this->volumeChange24h = $volumeChange24h;
        $this->attributes = $attributes;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSymbol(): string
    {
        return $this->symbol;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getSupply(): string
    {
        return $this->supply;
    }

    public function getMaxSupply(): string
    {
        return $this->maxSupply;
    }

    public function getPriceChange1h(): float
    {
        return $this->priceChange1h;
    }

    public function getPriceChange24h(): float
    {
        return $this->priceChange24h;
    }

    public function getPriceChange7d(): float
    {
        return $this->priceChange7d;
    }

    public function getPriceChange30d(): float
    {
        return $this->priceChange30d;
    }

    public function getVolume24h(): string
    {
        return $this->volume24h;
    }

    public function getVolumeChange24h(): string
    {
        return $this->volumeChange24h;
    }

    public function getMarketCap(): string
    {
        return $this->marketCap;
    }

    private static function fetchAll(): array
    {
        $client = new Client();
        $apiKey = config('services.crypto.key');
        $apiUrl = config('services.crypto.url');

        $parameters = [
            'start' => '1',
            'convert' => 'EUR'
        ];

        $response = $client->get($apiUrl, [
            'headers' => [
                'X-CMC_PRO_API_KEY' => $apiKey,
                'Accept' => 'application/json',
            ],
            'query' => $parameters
        ]);
        $cryptoData = json_decode($response->getBody()->getContents());

        return $cryptoData->data;
    }

    public static function fetchBySymbol(string $symbol): Coin
    {
        $client = new Client();
        $apiKey = config('services.crypto.key');
        $apiUrl = config('services.crypto.singleCoin');

        $parameters = [
            'symbol' => $symbol,
            'convert' => 'EUR',
        ];

        $response = $client->get($apiUrl, [
            'headers' => [
                'X-CMC_PRO_API_KEY' => $apiKey,
                'Accept' => 'application/json',
            ],
            'query' => $parameters
        ]);
        $cryptoData = json_decode($response->getBody()->getContents());
        $coin = $cryptoData->data->{$symbol};

        return self::createModel($coin);
    }

    public static function createCollection(): array
    {
        $coins = self::fetchAll();
        $coinsCollection = [];

        foreach($coins as $coin) {
            $coinsCollection[] = self::createModel($coin);
        }

        return $coinsCollection;
    }

    private static function createModel(\stdClass $coin): Coin
    {
        return new Coin(
            $coin->name,
            $coin->symbol,
            round($coin->quote->EUR->price, 5),
            number_format($coin->total_supply, 0, '.', ','),
            (string)$coin->max_supply,
            round($coin->quote->EUR->percent_change_1h, 2),
            round($coin->quote->EUR->percent_change_24h, 2),
            round($coin->quote->EUR->percent_change_7d, 2),
            round($coin->quote->EUR->percent_change_30d, 2),
            number_format($coin->quote->EUR->volume_24h, 0, '.', ','),
            number_format($coin->quote->EUR->volume_change_24h, 0, '.', ','),
            number_format($coin->quote->EUR->market_cap),
        );
    }
}
