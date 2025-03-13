<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use MedicOneSystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use MedicOneSystems\LivewireDatatables\Column;

class PricesTable extends LivewireDatatable
{
    public function builder()
    {
        $data = $this->fetchPrices();

        return collect($data);
    }

    public function columns()
    {
        return [
            Column::name("id")->label("ID")->sortable(),
            Column::name("coin")->label("Coin")->sortable(),
            Column::name("usd_price")->label("USD Price")->sortable(),
            Column::name("price_change_24h")->label("Price Change 24H")->sortable(),
            Column::name("market_cap")->label("Market Cap")->sortable(),
            Column::name("high_24h")->label("High 24H")->sortable(),
            Column::name("low_24h")->label("Low 24H")->sortable(),
            Column::name("volume_24h")->label("Volume 24H")->sortable(),
            Column::name("created_at")->label("Created At")->sortable(),
            Column::name("updated_at")->label("Updated At")->sortable(),
        ];
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

        return $response->json();
    }
    public function render()
    {
        return view('livewire.prices-table', [
            'data' => $this->fetchPrices()
        ]);
    }
}


