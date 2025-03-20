<div>
    @if($show)
    <div class="bg-primary mb-3">
        <div class="container-fluid shadow-md position-relative d-flex flex-column align-items-center">
            <div class="row w-100 d-flex justify-content-center align-items-center pt-1 pb-1">
                <div class="col-md-5 col-sm-12 text-center text-md-start">
                    <h3 class="text-white fw-semibold mt-4 mb-1">
                        {{ $event->title }}
                    </h3>
                </div>
                <div class="col-md-7 col-sm-12 d-flex flex-column align-items-center">
                    <div class="countdown-container d-flex flex-wrap gap-2 justify-content-center">
                        <div class="countdown-box">
                            <span id="days">03</span>
                            <span class="countdown-label">DAY</span>
                        </div>
                        <div class="countdown-box">
                            <span id="hours">08</span>
                            <span class="countdown-label">HOUR</span>
                        </div>
                        <div class="countdown-box">
                            <span id="minutes">02</span>
                            <span class="countdown-label">MIN</span>
                        </div>
                        <div class="countdown-box">
                            <span id="seconds">58</span>
                            <span class="countdown-label">SEC</span>
                        </div>
                        <a href="{{ $event->category }}" class="register-btn mt-2">Register</a>
                
                    </div>
                </div>
            </div>
            <button wire:click="showEvent" style="background:transparent; border:0;" class="close-btn mt-2 position-absolute top-0 end-0">
                <svg fill="#FFFFFF" height="30" viewBox="0 0 24 24" width="30" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.40001 18.3076L5.69226 17.5999L11.2923 11.9999L5.69226 6.39989L6.40001 5.69214L12 11.2921L17.6 5.69214L18.3078 6.39989L12.7078 11.9999L18.3078 17.5999L17.6 18.3076L12 12.7076L6.40001 18.3076Z" fill="#FFFFFF"></path>
                </svg>
            </button>
        </div>
    </div>
    @endif
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
    
                if (countdown > 0) countdown--;
            }, 1000);
        }
        startCountdown({{ $countdownSeconds }});
    </script>
</div>
