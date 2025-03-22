<div>
    <?php if($show): ?>
    <div>
        <div class="flex relative shadow-md lg:pr-16 lg:pl-16 pr-8 pl-8 justify-center items-center bg-[--bg]"
            style="--bg: #464DFB;">
            <div
                class="flex flex-row sm:justify-between justify-center items-center pt-3 pb-3 w-[100%] xl:max-w-[1432px] lg:max-w-[1080px] md:max-w-[728px] md:pr-6 md:pl-6 sm:pr-4 sm:pl-4 pr-2 pl-2">
                <div class="flex flex-col sm:mr-6 mr-2 sm:grow justify-center ">
                    <p style="--textColor: #FFFFFF;" class="text-[--textColor] sm:flex hidden font-headline-sm text-[#262626] sm:pb-1">
                        <?php echo e($event->title); ?>

                    </p>
                    <a href="<?php echo e($event->category ?? ''); ?>" target="_blank" style="--textColor: #FFFFFF;" class="text-[--textColor] sm:hidden flex font-headline-sm text-[#262626] sm:pb-1 underline"><?php echo e($event->title); ?></a>
                </div>
                <div class="sm:hidden flex justify-center items-center sm:grow font-mono text-[18px] leading-[21px] text-[--textColor]"
                    style="--bg: #FFFFFF; --textColor: #262626; --radius: 8px;">
                    <span  id="mdays">00</span>
                    :<span  id="mhours">00</span>:
                    <span  id="mminutes">00</span>:
                    <span  id="mseconds">00</span>
                </div>
                <div class="sm:flex hidden flex-row lg:gap-2 gap-1 mr-6 grow justify-center items-center">
                    <div class="flex lg:w-[70px] h-min lg:p-2 p-1 pt-[2px] pb-[2px] flex-col justify-center items-center shadow-md bg-[--bg] text-[--textColor] rounded-[--radius]"
                        style="--bg: #FFFFFF; --textColor: #262626; --radius: 8px;">
                        <p  id="days" class="lg:h-[50px] font-headline-sm text-center lg:mb-1">00</p>
                        <p class="font-headline-xs lg:text-[12px] text-[8px] lg:leading-[16px] leading-[14px]">DAY</p>
                    </div>
                    <div class="flex lg:w-[70px] h-min lg:p-2 p-1 pt-[2px] pb-[2px] flex-col justify-center items-center shadow-md bg-[--bg] text-[--textColor] rounded-[--radius]"
                        style="--bg: #FFFFFF; --textColor: #262626; --radius: 8px;">
                        <p id="hours" class="lg:h-[50px] font-headline-sm text-center lg:mb-1">01</p>
                        <p class="font-headline-xs lg:text-[12px] text-[8px] lg:leading-[16px] leading-[14px]">HOUR</p>
                    </div>
                    <div class="flex lg:w-[70px] h-min lg:p-2 p-1 pt-[2px] pb-[2px] flex-col justify-center items-center shadow-md bg-[--bg] text-[--textColor] rounded-[--radius]"
                        style="--bg: #FFFFFF; --textColor: #262626; --radius: 8px;">
                        <p  id="minutes" class="lg:h-[50px] font-headline-sm text-center lg:mb-1">26</p>
                        <p class="font-headline-xs lg:text-[12px] text-[8px] lg:leading-[16px] leading-[14px]">MIN</p>
                    </div>
                    <div class="flex lg:w-[70px] h-min lg:p-2 p-1 pt-[2px] pb-[2px] flex-col justify-center items-center shadow-md bg-[--bg] text-[--textColor] rounded-[--radius]"
                        style="--bg: #FFFFFF; --textColor: #262626; --radius: 8px;">
                        <p id="seconds" class="lg:h-[50px] font-headline-sm text-center lg:mb-1">16</p>
                        <p class="font-headline-xs lg:text-[12px] text-[8px] lg:leading-[16px] leading-[14px]">SEC</p>
                    </div>
                </div>
                <?php if($event->category): ?>
                <div class="sm:flex hidden justify-center items-center">
                    <a href="<?php echo e($event->category); ?>"
                        target="_blank"
                        class="flex h-10 min-w-[152px] font-label font-medium justify-center items-center bg-[--bg] hover:bg-[--bgHover] text-[--textColor] rounded-[--radius]"
                        style="--bg: #000000; --bgHover: #000000; --textColor: #FFFFFF; --radius: 1px;">Register Now</a>
                </div>
                <?php endif; ?>
            </div>
            <button wire:click="showEvent" class="absolute md:top-4 right-4 top-[.7rem]"><svg fill="#FFFFFF" height="24" viewBox="0 0 24 24"
                    width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.40001 18.3076L5.69226 17.5999L11.2923 11.9999L5.69226 6.39989L6.40001 5.69214L12 11.2921L17.6 5.69214L18.3078 6.39989L12.7078 11.9999L18.3078 17.5999L17.6 18.3076L12 12.7076L6.40001 18.3076Z"
                        fill="#FFFFFF"></path>
                </svg>
            </button>
        </div>
    </div>
    <?php endif; ?>
  
    <script>
        function startCountdown(duration) {
            let countdown = duration;
            setInterval(() => {
                let days = Math.floor(countdown / (60 * 60 * 24));
                let hours = Math.floor((countdown % (60 * 60 * 24)) / (60 * 60));
                let minutes = Math.floor((countdown % (60 * 60)) / 60);
                let seconds = countdown % 60;
    
                document.getElementById("days").textContent = String(days).padStart(2, '0');
                document.getElementById("hours").textContent = String(hours).padStart(2, '0');
                document.getElementById("minutes").textContent = String(minutes).padStart(2, '0');
                document.getElementById("seconds").textContent = String(seconds).padStart(2, '0');
    
                document.getElementById("mdays").textContent = String(days).padStart(2, '0');
                document.getElementById("mhours").textContent = String(hours).padStart(2, '0');
                document.getElementById("mminutes").textContent = String(minutes).padStart(2, '0');
                document.getElementById("mseconds").textContent = String(seconds).padStart(2, '0');
    
                if (countdown > 0) countdown--;
            }, 1000);
        }
        startCountdown(<?php echo e($countdownSeconds); ?>);
    </script>
</div>
<?php /**PATH C:\xampp\htdocs\CoinCrypto\resources\views/livewire/top-event.blade.php ENDPATH**/ ?>