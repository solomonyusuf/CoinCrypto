<div>
    <div class="topbar-image py-1 rounded-0 mb-0 alert alert-dismissible fade show" role="alert">
        <div class="slide-container">
          <div class="slide-animation1 d-flex justify-content-center align-items-center">
            @forelse ($price as $coin => $data)
            <div class="col-md-3 mb-1">
                <div class="card text-dark p-1">
                    <a title="View price details" class="d-flex align-items-center text-decoration-none text-dark px-3">
                        <div class="d-flex align-items-center">
                            <span class="fw-bolder text-uppercase">{{ strtoupper($coin) }}</span>
                            <svg class="ms-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" height="20" width="20" fill="none">
                                <path d="M9.60482 12.1042L6.64401 9.14179C6.60316 9.10095 6.57253 9.05668 6.55211 9.009C6.53169 8.96133 6.52148 8.91319 6.52148 8.86458C6.52148 8.76736 6.55586 8.68229 6.62461 8.60938C6.69336 8.53646 6.78398 8.5 6.89648 8.5H13.1048C13.2173 8.5 13.3079 8.5375 13.3767 8.6125C13.4454 8.6875 13.4798 8.775 13.4798 8.875C13.4798 8.88889 13.439 8.97758 13.3573 9.14106L10.3965 12.1042C10.3409 12.1597 10.2784 12.2014 10.209 12.2292C10.1395 12.2569 10.0701 12.2708 10.0007 12.2708C9.93121 12.2708 9.86176 12.2569 9.79232 12.2292C9.72287 12.2014 9.66037 12.1597 9.60482 12.1042Z" 
                                fill="{{ $data['usd_24h_change'] > 0 ? '#00FF00' : '#FF0000' }}"></path>
                            </svg>
                        </div>
                        <div class="ms-2">
                            <span class="fw-monospace fs-6">${{ number_format($data['usd'], 2) }}</span>
                            <span class="{{ $data['usd_24h_change'] > 0 ? 'text-success' : 'text-danger' }} ms-2">
                                {{ number_format($data['usd_24h_change'], 2) }}%
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        @empty
            <p class="text-white">No data available</p>
        @endforelse
               
    
               
            </div>
         </div>
        </div>
     </div>
     <script>
        document.addEventListener('livewire:load', function () {
            setInterval(() => {
                Livewire.emit('fetchPrice'); // Auto refresh every 60s
            }, 60000); // 60,000 ms = 60 seconds
        });
    </script>
</div>
