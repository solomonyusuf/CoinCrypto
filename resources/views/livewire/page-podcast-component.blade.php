<div>
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
                                    <h2 class="font-headline mb-2">
                                        {{ $podcast->title }}
                                    </h2>
                                    <span class="font-body">
                                        {!! \Illuminate\Support\Str::limit($podcast->description, 200, '..') !!}
                                    </span>
                                     <h2 class="font-headline mb-2 mt-3">
                                        {{ $first->title }}
                                    </h2>
                                    <span class="font-body">
                                        {!! \Illuminate\Support\Str::limit($first->description, 200, '..') !!}
                                    </span>
                                    <div class="flex flex-col lg:flex-row py-4 bg-hamburger-menu space-y-4 lg:space-y-0 flex-start ">
                                        <div class="flex align-middle">
                                            <div class="inline-flex items-center bg-hamburger-menu py-2 px-2 text-white text-center border border-white hover:underline rounded-sm mb-2 md:mb-0 transition duration-150 ease-in-out max-w-[225px] min-w-[225px]"
                                                >
                                                <svg
                                                    class="w-6 h-6 font-sans stroke-white-900 fill-white-900 mr-2"
                                                    width="48" height="48" viewBox="0 0 48 48" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path id="play_circle_2"
                                                        d="M18.7641 33.2308L33.2308 24L18.7641 14.7692V33.2308ZM24.0089 48C20.7004 48 17.5939 47.3702 14.6893 46.1107C11.7848 44.8512 9.24073 43.1307 7.05727 40.9493C4.87384 38.7678 3.15178 36.2262 1.89107 33.3244C0.630355 30.4226 0 27.3174 0 24.0089C0 20.6901 0.629756 17.5699 1.88927 14.6483C3.14882 11.7266 4.86931 9.18518 7.05073 7.02393C9.23216 4.86273 11.7738 3.15178 14.6756 1.89107C17.5774 0.630357 20.6826 0 23.9911 0C27.3099 0 30.4301 0.629755 33.3517 1.88927C36.2734 3.14882 38.8148 4.8582 40.9761 7.0174C43.1373 9.1766 44.8482 11.7156 46.1089 14.6345C47.3696 17.5535 48 20.6723 48 23.9911C48 27.2996 47.3702 30.4061 46.1107 33.3107C44.8512 36.2152 43.1418 38.7593 40.9826 40.9427C38.8234 43.1262 36.2844 44.8482 33.3655 46.1089C30.4465 47.3697 27.3277 48 24.0089 48ZM24 45.9487C30.106 45.9487 35.2906 43.8145 39.5539 39.5461C43.8171 35.2778 45.9487 30.0957 45.9487 24C45.9487 17.894 43.8171 12.7094 39.5539 8.44613C35.2906 4.18289 30.106 2.05127 24 2.05127C17.9043 2.05127 12.7222 4.18289 8.45387 8.44613C4.18547 12.7094 2.05127 17.894 2.05127 24C2.05127 30.0957 4.18547 35.2778 8.45387 39.5461C12.7222 43.8145 17.9043 45.9487 24 45.9487Z"
                                                        fill="#676767"></path>
                                                </svg>
                                                <span class="font-label font-medium">
                                                    Listen to this
                                                    Episode
                                                </span>
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
        <nav class="hidden"><a aria-label="Go to first page" href="?page=1">first page</a><a href="?page=1">1</a><a
                href="?page=2">2</a><a href="?page=3">3</a><a href="?page=4">4</a><a href="?page=5">5</a><a
                href="?page=6">6</a><a href="?page=7">7</a><a href="?page=8">8</a><a href="?page=9">9</a><a
                href="?page=10">10</a><a aria-label="Go to page 2" href="?page=2">next page</a><a
                aria-label="Go to last page (132)" href="?page=132">last page</a></nav>
    </section>
</div>