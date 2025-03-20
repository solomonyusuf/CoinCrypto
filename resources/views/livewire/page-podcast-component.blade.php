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
    @livewire('top-event')
    @if(count($podcasts) > 0)
    <div class="container mt-3">
        <div class="col-md-12 col-lg-12">
            <div class="col-md-5 mb-4">
                <h4 class="fw-semibold mb-1 mt-3">Podcasts</h4>
                <p class="card-text pt-2">
                    CoinCrypto's podcast episodes
                 </p>
                </div>
            <div class="row justify-content-center gap-1">
                <div id="music-player" class="mb-3"></div>
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


<script src="https://cdn.jsdelivr.net/npm/aplayer/dist/APlayer.min.js"></script>
<script>
    const podcastData = @json($podcasts);

    const audioList = podcastData.map(podcast => ({
        name: podcast.title || 'Unknown Title',
        artist: podcast.host || 'Unknown Artist',
        url: podcast.link || 'https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3',
        cover: podcast.image || 'https://source.unsplash.com/200x200/?music'
    }));

    const ap = new APlayer({
        container: document.getElementById('music-player'),
        autoplay: false,
        theme: '#FF5733',
        loop: 'all',
        preload: 'auto',
        audio: audioList
    });
</script>
</div>
