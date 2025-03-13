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
        ])->get('https://api.coingecko.com/api/v3/simple/price', [
            'ids' =>  $coins, 
            'vs_currencies' => 'usd',
            'include_24hr_change' => 'true',
            'include_market_cap' => 'true',   
            'include_24hr_vol' => 'true',    
            'include_24hr_high' => 'true',   
            'include_24hr_low' => 'true',     
    
        ]);

        $marketResponse = Http::withHeaders([
            'x-cg-demo-api-key' => $key  
        ])->get('https://api.coingecko.com/api/v3/coins/markets', [
            'vs_currency' => 'usd',
            'ids' => $coins,
        ]);

        if ($response->successful()) {
            $this->price = $response->json();
            $this->coins = $marketResponse->json();

         
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
