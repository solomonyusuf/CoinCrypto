<?php

namespace App\Http\Livewire;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Price;

class PriceTable extends DataTableComponent
{
    public Collection $prices;

    public function mount()
    {
        $this->fetchPrices();
    }

    public function fetchPrices()
    {
        $key = env('GECO_KEY');
        $coins = 'bitcoin,ethereum,dogecoin,solana,cardano,polkadot,chainlink,binancecoin,ripple,stellar,
        litecoin,tron,uniswap,vechain,cosmos,tezos,monero,bitcoin-cash,eos,theta-token';

        $response = Http::withHeaders([
            'x-cg-demo-api-key' => $key  
        ])->get('https://api.coingecko.com/api/v3/simple/price', [
            'ids' =>  $coins, 
            'vs_currencies' => 'usd',
            'include_24hr_change' => 'true',
            'include_market_cap' => 'true',   
            'include_24hr_vol' => 'true',    
            'include_24hr_high' => 'true',   
            'include_24hr_low' => 'true',     
        ]);

        if ($response->successful()) {
            $this->prices = collect($response->json());   
        } 
    }

    public function rows(): Collection
    {
        return $this->prices;
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setSortingEnabled();
        $this->setPaginationEnabled();
        $this->setSearchEnabled();
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Coin", "coin")
                ->sortable(),
            Column::make("Usd price", "usd_price")
                ->sortable(),
            Column::make("Price change 24h", "price_change_24h")
                ->sortable(),
            Column::make("Market cap", "market_cap")
                ->sortable(),
            Column::make("High 24h", "high_24h")
                ->sortable(),
            Column::make("Low 24h", "low_24h")
                ->sortable(),
            Column::make("Volume 24h", "volume_24h")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
