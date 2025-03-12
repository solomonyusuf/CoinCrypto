<div>
      <!-- Plyr.js CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/plyr@3.7.2/dist/plyr.css" />
    
    <style>
        body {
            background-color: #f8f9fa;
        }
        .album-card {
            max-width: 400px;
            margin: auto;
            border-radius: 15px;
            overflow: hidden;
             
        }
        .album-cover {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
        .album-info {
            padding: 15px;
            text-align: center;
        }
        .music-controls {
            display: flex;
            justify-content: space-around;
            padding: 10px;
        }
        .music-controls button {
            border: none;
            background: none;
            font-size: 24px;
            cursor: pointer;
        }
        .music-controls button:hover {
            color: #321dff;
        }
    </style>
    @if(count($podcasts) > 0)
    <div class="container mt-3">
        <div class="row justify-content-center">
            @if($podcast)
            <div class="col-md-4 col-xl-4">
                <div class="card album-card" style="border: thin solid #2525d4;">
                    <img src="{{ $podcast->image }}" class="album-cover" alt="Album Cover">
                    
                    <div class="album-info">
                        <h5 class="album-title">{{ $podcast->title}}</h5>
                        <p class="artist-name text-muted">{{ $podcast->host}}</p>
                    </div>
            
                    <div class="p-3">
                        <audio id="audio-player" controls>
                            <source src="{{ $podcast->link }}" type="audio/mp3">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
            
                    <div class="music-controls">
                        <button id="prev"><i class="ti ti-step-backward"></i></button>
                        <button id="play-pause"><i class="ti ti-play"></i></button>
                        <button id="next"><i class="ti ti-step-forward"></i></button>
                    </div>
                </div>
            </div>
            @endif
            <div class="col-md-8 col-xl-8">
                <div class="card">
                  <div class="card-body p-4">
                    <div class="d-flex align-items-center">
                      <div>
                        <h4 class="card-title fw-semibold">Recent Podcast</h4>
                        <p class="card-subtitle">Based on the latest</p>
                      </div>
                       
                    </div>
                    <div class="overflow-auto card mt-4 mb-0 shadow-none border h-450 simplebar-scrollable-y" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px;">
                      @foreach ($podcasts as $data)
                      <div class="hstack p-3 bg-hover-light-black position-relative border-bottom">
                        <button wire:click="play('{{ $data->id }}')" style="background: transparent;border:0;" href="javascript:void(0)">
                          <i class="ti ti-player-play fs-5"></i>
                        </button>
                        <img src="{{ asset($data->image) }}" alt="top-1" width="40" class="rounded ms-3">
                        <div class="ms-3">
                          <h6 class="mb-0">{{ $data->title }}</h6>
                          <span class="fs-3">{{$data->host}}</span>
                        </div>
                      
                      </div>
                      @endforeach
                        
                      
                    </div></div></div></div><div class="simplebar-placeholder" style="width: 289px; height: 504px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 398px; transform: translate3d(0px, 6px, 0px); display: block;"></div></div></div>
                  </div>
                </div>
  
  
              </div>
        </div>
    </div>
    @endif
    @if(count($podcasts) == 0)
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="text-center">
            <img src="https://img.icons8.com/?size=100&id=45967&format=png&color=000000" alt="No Data Icon" class="mb-3">
            <h4 class="fw-bold text-muted">No Data Available</h4>
            <p class="text-secondary">It looks like there's nothing to show here yet.</p>
        </div>
    </div>
    @endif
    <!-- Plyr.js -->
<script src="https://cdn.jsdelivr.net/npm/plyr@3.7.2/dist/plyr.polyfilled.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const player = new Plyr('#audio-player');
        const playPauseBtn = document.getElementById('play-pause');
        const prevBtn = document.getElementById('prev');
        const nextBtn = document.getElementById('next');

        playPauseBtn.addEventListener('click', function () {
            if (player.paused) {
                player.play();
                playPauseBtn.innerHTML = '<i class="fas fa-pause"></i>';
            } else {
                player.pause();
                playPauseBtn.innerHTML = '<i class="fas fa-play"></i>';
            }
        });

        prevBtn.addEventListener('click', function () {
            player.currentTime -= 10; // Rewind 10 seconds
        });

        nextBtn.addEventListener('click', function () {
            player.currentTime += 10; // Fast-forward 10 seconds
        });

        player.on('ended', function () {
            playPauseBtn.innerHTML = '<i class="fas fa-play"></i>';
        });
    });
</script>
</div>
