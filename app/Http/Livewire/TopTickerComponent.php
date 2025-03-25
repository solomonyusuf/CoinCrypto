<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Log;

class TopTickerComponent extends Component
{
    public $price;

    public function mount()
    {
        try
        {
           // $this->fetchPrice();
          //dd($this->price);
        }  
        catch(\Exception $ex)
        {
           Log::error($ex);
        }
       
         
    }

    public function fetchAPIPrice()
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
            return response()->json($response->json());
        } else {
            return response()->json(['error' => 'Error fetching data'], 500);
        }
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
        return view('livewire.top-ticker-component');
    }
}
