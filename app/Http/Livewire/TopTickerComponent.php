<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class TopTickerComponent extends Component
{
    public $price;

    public function mount()
    {
        $this->fetchPrice();
         
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
            'include_24hr_change' => 'true'
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
        return view('livewire.top-ticker-component');
    }
}
