<div>
    <style>
        /* Smooth Scrolling Effect */
        @keyframes slide {
            from {
                transform: translateX(0);
            }
            to {
                transform: translateX(-50%);
            }
        }
    
        .slide-animation {
            display: flex;
            white-space: nowrap;
            animation: slide 25s linear infinite;
            
        }
    
        .paused {
            animation-play-state: paused;
        }
    </style>
    
    <div class="slide-container relative box-content flex h-9 items-center justify-between overflow-hidden">
        <!-- TradingView Ticker Tape Widget -->
        <?php if( $setting->theme == 'black'): ?>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
            {
            "symbols": [
                { "proName": "COINBASE:BTCUSD", "title": "Bitcoin" },
                { "proName": "COINBASE:ETHUSD", "title": "Ethereum" },
                { "proName": "BINANCE:BNBUSDT", "title": "Binance Coin" },
                { "proName": "COINBASE:XRPUSD", "title": "XRP" }
            ],
            "theme": "dark",
            "isTransparent": false,
            "displayMode": "adaptive",
            "locale": "en"
            }
            </script>
        <?php else: ?>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
            {
            "symbols": [
                { "proName": "COINBASE:BTCUSD", "title": "Bitcoin" },
                { "proName": "COINBASE:ETHUSD", "title": "Ethereum" },
                { "proName": "BINANCE:BNBUSDT", "title": "Binance Coin" },
                { "proName": "COINBASE:XRPUSD", "title": "XRP" }
            ],
            "theme": "light",
            "isTransparent": false,
            "displayMode": "adaptive",
            "locale": "en"
            }
            </script>

        <?php endif; ?>
        
    </div>
    
    <!-- JavaScript -->
    <script>
        let slider = document.getElementById('slider');
        let playButton = document.getElementById('togglePlay');
        let playIcon = document.getElementById('playIcon');
    
        let isPlaying = false; // Animation starts running
    
        playButton.addEventListener('click', () => {
            if (isPlaying) {
                slider.classList.add('paused'); // Pause animation
                playIcon.innerHTML = '<path d="M9 17.6923V7.30768L17.1538 12.5L9 17.6923ZM10 15.85L15.2885 12.5L10 9.15V15.85Z" fill="#515151"></path>'; // Change to Pause icon
            } else {
                slider.classList.remove('paused'); // Resume animation
                playIcon.innerHTML = '<path d="M6 19h4V5H6v14zM14 5v14h4V5h-4z" fill="#515151"></path>'; // Change to Play icon
            }
            isPlaying = !isPlaying;
        });
    
        // Pause animation when hovered
        slider.addEventListener('mouseenter', () => slider.classList.add('paused'));
        slider.addEventListener('mouseleave', () => {
            if (isPlaying) slider.classList.remove('paused');
        });
    </script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    

     
    
    
     
</div>
<?php /**PATH C:\xampp\htdocs\CoinCrypto\resources\views/livewire/top-ticker-component.blade.php ENDPATH**/ ?>