<div>
    <style>
         .player {
            width: auto;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.1); /* Transparent Background */
            backdrop-filter: blur(10px);
        }
        .controls {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 15px;
        }
        .controls button {
            background: transparent;
            border: none;
            color: white;
            font-size: 18px;
            cursor: pointer;
        }
        input[type="range"] {
            width: 100%;
            margin-top: 10px;
            appearance: none;
            height: 5px;
            background: #fff;
            border-radius: 5px;
            outline: none;
        }
        </style>
    <section 
        class="flex-grow">
        <div
            class="container mx-auto xs:p-4 xs:grid-cols-4 xs:gap-4 sm:p-4 sm:grid-cols-4 sm:gap-4 md:p-6 md:grid-cols-8 md:gap-6 lg:p-6 lg:grid-cols-12 lg:gap-6 xl:p-6 xl:grid-cols-16 xl:gap-6">
            <h1 class="text-[0px]">
                {{ $podcast->title }}
            </h1>
            <div>
                <div style="height: 379px;">
                    <div class="absolute left-0 right-0  bg-hamburger-menu text-white w-full ">
                        <div class="flex justify-center items-center h-full p-2 md:p-12 lg:p-12">
                            <div class="relative flex flex-col md:flex-row lg:flex-row max-w-[1160px] ">
                                <div class="flex flex-row md:flex-col lg:flex-col md:w-1/3 lg:w-1/3 p-2"><img
                                        width="1200" height="800"
                                        class="w-full h-auto object-cover"
                                        style="color: transparent;"
                                        src="{{ asset($podcast->image) }}">
                                </div>
                                <div class="flex-1 w-full p-2 flex-row md:flex-col lg:flex-col lg:w-2/3 md:w-2/3 self-start text-white">
                                    {{-- <h2 class="font-headline mb-2">
                                        {{ $podcast->title }}
                                    </h2>
                                    <span class="font-body">
                                        {!! \Illuminate\Support\Str::limit($podcast->description, 200, '..') !!}
                                    </span> --}}
                                     <h2 class="font-headline mb-2 mt-3">
                                        {{ $first->title }}
                                    </h2>
                                    <span class="font-body">
                                        {!! \Illuminate\Support\Str::limit($first->description, 200, '..') !!}
                                    </span>
                                                                      
                                    <div class="flex flex-col lg:flex-row py-4 bg-hamburger-menu space-y-4 lg:space-y-0 flex-start ">
                                        <div class="flex align-middle">
                                            <div class="player">
                                                <audio controls style="width:100%;">
                                                    <source src="{{ $first->link }}" type="audio/mpeg">
                                                  Your browser does not support the audio element.
                                                  </audio> 
                                            </div> 
                                            <span
                                                class="text-white font-sans font-medium lg:mb-0 mb-2 px-2 lg:self-center text-lg md:text-lg lg:text-sm lg:px-3 md:mb-0 md:px-2 self-center">Listen
                                                on:</span>
                                            </div>
                                        <div class="grid grid-cols-6 gap-2 md:gap-4 lg:gap-2 md:grid-cols-9 lg:grid-cols-9 space-x-0 lg:self-center">
                                            
                                            <a href="{{asset($first->spotify) }}"
                                                target="_blank" rel="noreferrer"
                                                class="hover:opacity-80 transition-opacity">
                                                <img width="24" height="24"
                                                    style="color: transparent;"
                                                    src="https://img.icons8.com/?size=100&id=G9XXzb9XaEKX&format=png&color=000000">
                                            </a>
                                            <a href="{{ $first->castbox }}"
                                                target="_blank" rel="noreferrer"
                                                class="hover:opacity-80 transition-opacity">
                                                <img width="24" height="24"
                                                    style="color: transparent;"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAMAAABF0y+mAAAAUVBMVEVHcEz/cTf/l1H/jkv/cTb/cTb/l1H/hkX/f0H/cTb/fED/djn/cTf/nFX/bTL/bjT/Yiv/lW//+PX/2s3/WCT/wa//////hl7/Tgb/Tx7/UB/+pY21AAAAG3RSTlMAfP7/Tg7A/8CL//8nyP/I/////////////8NLEf4cAAAA8UlEQVR4AW3RB5KEMAxEUXKwSc4w9z/otlxSoZ2aT+aRaXRt17fN74aup4YfNE7V5nlexm9bu44IGWPWryuKGWStfa+97WIIho5zk2dkewldLdmoTeE1MopZGJOgmHUO8h/ZjD28P4JjumJFMlDKxvuSUySBCeK81KfsKppUTRDmckoZBVqW+46CMONIks+e0IQAfRSGkAtdltD7Oz6MBgWXXnTueRTa40rZFXclcxVAFCSzFljwlE+MNCJB2HFYx+/HxkiGmGCREbVirASo5Z99ir3nfbZGGpTVhka3alu1UOOHTV1RNVxkUV9R18ozcn98kx7AXW2G8AAAAABJRU5ErkJggg==">
                                            </a> 
                                            <a href="{{ $first->itunes }}"
                                                target="_blank" rel="noreferrer"
                                                class="hover:opacity-80 transition-opacity">
                                                <img width="24" height="24"
                                                    style="color: transparent;"
                                                    src="https://img.icons8.com/?size=100&id=63304&format=png&color=000000">
                                            </a>
                                        <a href="{{ $first->podchaser }}"
                                                target="_blank" rel="noreferrer"
                                                class="hover:opacity-80 transition-opacity">
                                                <img width="24" height="24"
                                                    style="color: transparent;"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAMAAABF0y+mAAAAilBMVEVHcEwwPngvPnf///9sKoEvPnh/I3ZeMH5sKoBhL4VmLoU9OXx4JnsdGEMzKl0zO3o/M2tdMIUpIlBsKoJ9JHhLNYD9L4ZxJ3xVMoMCAzD9EmT+JXnjMn/ENYSeNYN7NIOOLoD/4uzCwsv+UYr/x9r/k7VhWYL/fKX/q8l9eZLi4ei2s8XPzdixsLrhtC+bAAAACnRSTlMA5or/iLLlPLHmisKLoAAAAY1JREFUKJFV0+mWojAQBeDMxB4wimFLCIRFkU27ff/X61sVx7YvR37wnRsglEKI6OOP1vrAMRzn3D6OBPJX6x+DOrIM2aH3Mm0ypTIukikViY9gWg9da5G2G4xjU7EI99MKsm7bNq/edsHUXpBp3Vu7yZDL7O3AqAT3en+VP5mgoKIQZEOwz9uy3L6o7D1ZIeg5W4sr4yFNU5Omyx3dpssC6r6ZUDulKTF+0NUPz2aLRe95+sqChZtOMbpmlnI5veyUf0p5bVVRAQdaNTm9BdW1KapKmMO5ucivd8wTKefm+MIxyfkyn/I64FEYQ8uOdf4eWjagwgP9wuRGD1QcCQ1eZayTJMfBp/pOr1IROoNNIPyf+kabcD4yusxf35Ds0rQVIWbC9b6tExycB/bZ2xJWCpoJ19muRmN8PPijWH9GsQTSvEDbcnl+Tnzsnq0Ue54Jh1G4ztM0bSvGKPTKfyIO86JUjynymLCOamRlLKKnFUoNZwRb+rQSY71jCqkqpmA7Gvko3qtfxPejv8M35xw29Dnj7MgAAAAASUVORK5CYII=">
                                            </a>
                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-20 pb-20 border-b border-b-gray-300">
                    <div class="flex flex-wrap items-center">
                        <div class="flex space-x-16 w-full justify-start md:justify-center lg:justify-center">
                            <div class="flex flex-col md:flex-row space-y-4 space-x-4 lg:space-x-16 md:space-y-0">
                                <div class="mb-4 md:mb-0 self-start md:self-center lg:self-center px-4">
                                    <h2 class="font-sans font-bold text-2xl text-color-black ">Host</h2>
                                </div>
                                <div class="flex items-center space-x-4"><a
                                        href="{{ route('author_detail', $podcast->user->id) }}">
                                        <img class="rounded-full cursor-pointer hover:opacity-80 object-cover"
                                            style="width: 84px; height: 84px;"
                                            src="{{  asset($podcast->user->image) }}"></a>
                                     <a href="{{ route('author_detail', $podcast->user->id) }}">
                                        <div class=" hover:underline">
                                            <span
                                                class="font-sans font-bold text-xl text-color-black ">{{ $podcast->user->first_name.' '.$podcast->user->last_name}}</span>
                                        </div>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-20 pb-20  border-b border-t-gray-300">
                    <div class="flex flex-wrap items-center">
                        <div class="flex space-x-16 w-full justify-start md:justify-center lg:justify-center">
                            <div class="w-full md:w-auto flex flex-col space-y-4">
                                <h2 class="font-headline mb-4 md:mb-0 self-start md:self-start lg:self-start px-4">
                                    Episodes
                                </h2>
                                <div class="flex flex-col max-w-auto lg:max-w-[730px]">
                                   
                                    @foreach ($podcasts as $data)
                                    <div class="bg-white py-4 mb-4 flex justify-start"><a
                                            href="{{  route('podcast_detail', $data->podcast_id).'?episode='.$data->id }}">
                                            <img
                                                height="600"  
                                                class="max-w-48 h-48 rounded mr-4" style="color: transparent;"
                                                src="{{ $data->image }}">
                                            </a>
                                        <div>
                                            <a class="mb-4 hover:underline"
                                                href="{{  route('podcast_detail', $data->podcast_id).'?episode='.$data->id }}">
                                                <h3 class="font-headline-2xs">
                                                    {{ $data->title }}
                                                </h3>
                                            </a>
                                            <div class="">
                                                <span class="font-metadata-lg">
                                                    {{ \Carbon\Carbon::parse($data->created_at)->format('M d, Y, g:i a') }}
                     
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                      
                                </div>
                                @if($podcasts->hasMorePages())
                                <div  class="flex justify-center self-center">
                                    <a href="{{ $podcasts->nextPageUrl() }}" class="bg-coindeskyellow-primarycolorhover:opacity-80 cursor-pointer border border-color-yellow-900 border-solid rounded-lg mb-8 text-color-charcoal-700 font-label font-medium py-1 px-4 h-10 flex items-center justify-center">More
                                    Show More
                                    </a>
                                </div>
                                @endif
                                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <script>
        const audio = document.getElementById('audio');
        const progress = document.getElementById('progress');

        function togglePlayPause() {
            if (audio.paused) {
                audio.play();
            } else {
                audio.pause();
            }
        }

        audio.addEventListener('timeupdate', () => {
            progress.value = (audio.currentTime / audio.duration) * 100;
        });

        progress.addEventListener('input', () => {
            audio.currentTime = (progress.value / 100) * audio.duration;
        });
    </script>
</div>