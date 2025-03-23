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
        <!-- Play/Pause Button -->
        <div class="bg-charcoal-25 absolute left-0 top-0 z-20 flex h-full items-center">
            <button id="togglePlay" class="flex h-full cursor-pointer items-center px-4 lg:px-6">
                <svg id="playIcon" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 17.6923V7.30768L17.1538 12.5L9 17.6923ZM10 15.85L15.2885 12.5L10 9.15V15.85Z" fill="#515151"></path>
                </svg>
            </button>
        </div>
    
        <!-- Sliding Content -->
        <div id="slider" class="slide-animation paused absolute left-[52px] flex h-full items-center lg:left-[72px]">
            <?php $__currentLoopData = $price; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a title="View price details"
                    class="align-center bg-charcoal-25 flex h-full flex-shrink-0 cursor-pointer text-xs"
                    href="/price/<?php echo e($data['symbol']); ?>">
                    <span class="font-sans font-semibold text-3xs text-color-black">
                        <div class="flex h-full min-w-0 items-center whitespace-nowrap px-4">
                            <div class="text-charcoal-600">
                                <?php echo e(strtoupper($data['symbol'])); ?>

                            </div>
                            <svg id="indicator-<?php echo e($data['id']); ?>" class="h-[20px] w-[20px]"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" height="20"
                                width="20" fill="<?php echo e($data['price_change_24h'] > 0 ? '#00FF00' : '#FF0000'); ?>">
                                <path d="M9.60482 12.1042L6.64401 9.14179C6.60316 9.10095 6.57253 9.05668 6.55211 9.009C6.53169 8.96133 6.52148 8.91319 6.52148 8.86458C6.52148 8.76736 6.55586 8.68229 6.62461 8.60938C6.69336 8.53646 6.78398 8.5 6.89648 8.5H13.1048C13.2173 8.5 13.3079 8.5375 13.3767 8.6125C13.4454 8.6875 13.4798 8.775 13.4798 8.875C13.4798 8.88889 13.439 8.97758 13.3573 9.14106L10.3965 12.1042C10.3409 12.1597 10.2784 12.2014 10.209 12.2292C10.1395 12.2569 10.0701 12.2708 10.0007 12.2708C9.93121 12.2708 9.86176 12.2569 9.79232 12.2292C9.72287 12.2014 9.66037 12.1597 9.60482 12.1042Z"></path>
                            </svg>
                            <div id="price-<?php echo e($data['id']); ?>" class="text-charcoal-600 font-mono">$<?php echo e(number_format($data['current_price'], 2)); ?></div>
                            <div class="ml-1 inline-flex items-center justify-center gap-1">
                                <div id="change-<?php echo e($data['id']); ?>" class="text-charcoal-600 <?php echo e($data['price_change_24h'] > 0 ? 'text-success' : 'text-danger'); ?> flex truncate font-mono font-normal">
                                    <?php echo e(number_format($data['price_change_24h'], 2)); ?>%
                                </div>
                            </div>
                        </div>
                    </span>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        
        </div>
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
     <script>
         $(document).ready(function () {
             function fetchUpdatedPrices() {
                 $.ajax({
                     url: "/fetch-prices",
                     type: "GET",
                     success: function (response) {
                         if (!Array.isArray(response)) {
                             console.error("Unexpected API response format:", response);
                             return;
                         }
     
                         response.forEach(function (item) {
                             let priceElement = $(`#price-${item.id}`);
                             let changeElement = $(`#change-${item.id}`);
                             let indicatorElement = $(`#indicator-${item.id}`);
     
                             if (priceElement.length && changeElement.length) {
                                 let newPrice = `$${item.current_price.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",")}`;
                                 let newChange = `${item.price_change_percentage_24h.toFixed(2)}%`;
     
                                 // ✅ Update Price and Percentage Change
                                 priceElement.text(newPrice);
                                 changeElement.text(newChange);
     
                                 // ✅ Change Color Based on Price Trend
                                 if (item.price_change_percentage_24h > 0) {
                                     changeElement.removeClass("text-danger").addClass("text-success");
                                     indicatorElement.attr("fill", "#00FF00"); // Green for positive change
                                 } else {
                                     changeElement.removeClass("text-success").addClass("text-danger");
                                     indicatorElement.attr("fill", "#FF0000"); // Red for negative change
                                 }
                             }
                         });
                     },
                     error: function (xhr, status, error) {
                         console.error("Error fetching prices:", error);
                     }
                 });
             }
     
             
             setInterval(fetchUpdatedPrices, 10000);
         });
     </script>
     
    
    
     
</div>
<?php /**PATH C:\xampp\htdocs\CoinCrypto\resources\views/livewire/top-ticker-component.blade.php ENDPATH**/ ?>