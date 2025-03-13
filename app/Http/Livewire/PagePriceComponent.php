<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class PagePriceComponent extends Component
{
    public $price;
    public $coins;

    public function mount()
    {
        $this->fetchPrice();
       //dd($this->price);
    }

    public function fetchPrice()
    {
        $key = env('GECO_KEY');
        $coins = 'bitcoin,ethereum,dogecoin,solana,cardano,polkadot,chainlink,binancecoin,ripple,stellar,
        litecoin,tron,uniswap,vechain,cosmos,tezos,monero,bitcoin-cash,eos,theta-token';

        $response = Http::withHeaders([
            'x-cg-demo-api-key' => $key  
        ])->get('https://api.coingecko.com/api/v3/coins/markets', [
            'vs_currency' => 'usd',   
            'ids' => $coins,  
            'order' => 'market_cap_desc',   
            'per_page' => 100,  
            'page' => 1,  
            'sparkline' => false,  
            'price_change_percentage' => '24h'
        ]);


        if ($response->successful()) {
            $this->price = $response->json();

        } else {
            $this->price = 'Error fetching data';
        }
    }
    protected $listeners = ['fetchPrice'];
    public function render()
    {
        return view('livewire.page-price-component');
    }
}
