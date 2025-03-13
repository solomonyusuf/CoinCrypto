<?php
    namespace App\Models;
    use Illuminate\Database\Eloquent\Model;

    class Price  extends Model
    {
        protected $fillable = ['coin', 'usd_price', 'price_change_24h', 'market_cap', 'high_24h', 'low_24h', 'volume_24h'];
    } 
?>