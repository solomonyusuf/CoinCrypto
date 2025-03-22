<div>
  <section class="flex-grow">
    <div class="container mx-auto xs:p-4 xs:grid-cols-4 xs:gap-4 sm:p-4 sm:grid-cols-4 sm:gap-4 md:p-6 md:grid-cols-8 md:gap-6 lg:p-6 lg:grid-cols-12 lg:gap-6 xl:p-6 xl:grid-cols-16 xl:gap-6">
      <h1 class="text-[0px]">CoinCrypto: Bitcoin, Ethereum, Crypto News and Price Data</h1>
      <!--$-->
      
      <div class="grid gap-4 md:gap-6 grid-cols-4 md:grid-cols-8 lg:grid-cols-12">
        <div class="col-start-1 col-span-full row-start-1 lg:col-end-8 xl:col-end-9">
          <div class="flex flex-col gap-1 md:flex-row xlmax:w-full ">
            <div class="bg-white flex gap-6 w-full shrink flex-col md:flex-row lg:flex-col-reverse xl:flex-row-reverse">
              <div class="flex flex-col">
                <a class="text-color-charcoal-900 mb-4 hover:underline"
                  href="{{ route('article_detail', [$latest->slug, $latest->id])}}">
                  <h3 class="font-headline">
                    {{ $latest->title }}
                    </h3>
                </a>
                <p class="font-body text-color-charcoal-600 mb-4 line-clamp-2 lg:hidden xl:flex">
                 {!! \Illuminate\Support\Str::limit($latest->content, 50, '..') !!}
                </p>
                <p class="flex gap-2 flex-col lg:flex-row items-center"><span
                    class="font-metadata-lg font-medium text-color-charcoal-900 uppercase "><span class="mr-2">By
                      <!-- --> 
                      @for ($i = 0; $i < count($latest->article_creators); $i++)
                        @if($i > 0)
                        ,
                        @endif
                        <a title="" class="text-color-charcoal-900 hover:underline"
                        href="">{{ $latest->article_creators[$i]->user->first_name.' '.$latest->article_creators[$i]->user->last_name }}
                      </a>
                      @endfor
                    
                    </span>
                  </span>
                    <span class="font-metadata text-color-charcoal-600 uppercase">
                        {{ \Carbon\Carbon::parse($latest->created_at)->diffForHumans() }}
                      </span>
                    </p>
              </div><a  
                class="flex shrink-0 flex-col"
                href="{{ route('article_detail', [$latest->slug, $latest->id])}}">
                <img
                  alt="{{ $latest->title }}"
                  width="416" height="234" decoding="async" data-nimg="1"
                  class="w-full md:w-60 lg:w-full xl:w-[503px] rounded align-self-end aspect-video object-cover"
                  style="color:transparent;background-size:cover;background-position:50% 50%;background-repeat:no-repeat;background-image:temp(&quot;data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAALABQDASIAAhEBAxEB/8QAGAAAAwEBAAAAAAAAAAAAAAAAAAUHAwb/xAAhEAACAQMEAwEAAAAAAAAAAAABAgMABBEFBhIxFBUhIv/EABUBAQEAAAAAAAAAAAAAAAAAAAME/8QAGhEBAAMBAQEAAAAAAAAAAAAAAQACAxIxEf/aAAwDAQACEQMRAD8AiO3/AEUWi2sl7BHNcfouCfvzoV1bx7Y1DU4wLC2sYUgGUbt2NR+KV1jwrECtXu7iSTm8rs2MZJoNMe62Pvsoz0rUBPIw3jFZw69Olhw8cYxx6opK7EtknJopqnIEnZ//2Q==&quot;)"
                  src="{{ asset($latest->image) }}" /></a>
            </div>
          </div>
        </div>
        <div class="row-start-2 col-span-full md:col-start-4 lg:row-start-1 lg:col-start-8 -lg:col-end-1 xl:col-start-9 [&amp;_.jw-related-btn]:hidden">
          <div class="flex flex-col lg:flex-row h-full">
            <div class="lg:hidden pb-6">
              <hr class="shrink-0 border-none w-full h-divider bg-black" role="separator" />
            </div>
            <div class="lgmax:hidden mr-6">
              <div class="shrink-0 bg-divider border-none h-full w-divider" role="separator" data-orientation="vertical"
                aria-orientation="vertical"></div>
            </div>
            <div
              class=" w-full">
              <div class="grid">
                <div class="plyr__video-embed" id="player">
                  <iframe src="{{ $video->link }}"
                          allow="autoplay"></iframe>
                </div>
         
              </div>
              <h3 class="font-headline-2xs font-medium tracking-[0.1px] mt-6">
                {{ $video->title }}
              </h3>
              <div class="font-body-sm leading-normal text-color-charcoal-600 hidden lg:block lg:pt-4 xl:hidden">
              {!!  \Illuminate\Support\Str::limit($video->description, 400, '..') !!}
              </div>
            </div>
          </div>
        </div>
        <div class="col-span-full -col-end-1 row-start-4 md:col-start-1 md:row-start-2 md:col-end-4 md:row-end-4">
          <div class="flex flex-col h-full">
            <div class="pb-6">
              <hr class="shrink-0 border-none w-full h-divider bg-black" role="separator" />
            </div>
            <!--$-->

           @livewire('widget.crypto-component')

            <!--/$-->
            <div class="py-4">
              <hr class="shrink-0 border-none w-full h-divider bg-black" role="separator" />
            </div>
            <div class="flex flex-col min-h-[228px]">
              <div class="min-w-full min-h-full">
                <div class="color-black relative flex items-start justify-center aw100% ah100%" style="height:100%">
                  <div id="nativehp_desktop" style="width:100%;height:100%"
                    class="transition-box duration-250 align-center background-repeat relative flex items-start justify-center ease-in [&amp;&gt;iframe]:m-auto aw100% ah100%">
                  </div>
                  <div style="width:100%;height:100%"
                    class="min-w-full animate-shimmer will-change-background-position via-18% to-33% from-8% absolute mb-0 ml-auto mr-auto mt-0 flex items-center justify-center bg-gradient-to-r from-[#f6f7f8] via-[#edeef1] to-[#f6f7f8] bg-[length:200%_100%] opacity-100 aw100% ah100%">
                     
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-span-full md:row-start-2 md:col-start-4 lg:row-start-2 lg:col-start-4 -lg:col-end-1 md:row-start-3">
          <div class="pb-6">
            <hr class="shrink-0 border-none w-full h-divider bg-black" role="separator" />
          </div>
          <div class="flex pb-6 items-center">
            <h2 class="text-color-dark-grey font-title text-charcoal-600 uppercase">Top Stories</h2>
          </div>
          
          @for ($i = 0; $i < count($top); $i += 3)
            <div class="flex">
                <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-9 xl:grid-cols-2 gap-6">
                    <div class="col-span-1 lg:col-span-5 xl:col-span-1">
                        <div class="flex gap-4 false">
                            <div class="bg-white flex gap-6 w-full shrink">
                                <div class="flex flex-col">
                                    @if(isset($top[$i]))
                                        <a class="text-color-charcoal-900 mb-4 hover:underline"
                                          href="{{ route('article_detail', [$top[$i]->slug, $top[$i]->id]) }}">
                                            <h2 class="font-headline-2xs font-medium">
                                                {{ $top[$i]->title }}
                                            </h2>
                                        </a>
                                        <p class="font-body text-color-charcoal-600 mb-4 line-clamp-3">
                                            {!! \Illuminate\Support\Str::limit($top[$i]->content, 60, '..') !!}
                                        </p>
                                        <p class="flex gap-2 flex-col">
                                            <span class="font-metadata text-color-charcoal-600 uppercase">
                                                {{ \Carbon\Carbon::parse($top[$i]->created_at)->diffForHumans() }}
                                            </span>
                                        </p>
                                    @endif
                                </div>
                                @if(isset($top[$i]) && !empty($top[$i]->image))
                                    <a title="{{ $top[$i]->title }}" class="flex shrink-0 flex-col"
                                      href="{{ route('article_detail', [$top[$i]->slug, $top[$i]->id]) }}">
                                        <img width="1280" height="960" class="lg:w-[9.5rem] lg:h-[9.5rem] sm:w-16 sm:h-16 xs:w-16 xs:h-16 rounded align-self-end object-cover"
                                            src="{{ $top[$i]->image }}" />
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-span-1 md:col-span-1 lg:col-span-4 xl:col-span-1 grid grid-cols-1 xl:grid-cols-2 xl:gap-6">
                        @if(isset($top[$i+1]))
                            <div>
                                <div class="flex gap-4 false">
                                    <div class="bg-white flex gap-6 w-full shrink">
                                        <div class="flex flex-col">
                                            <a class="text-color-charcoal-900 mb-4 hover:underline"
                                              href="{{ route('article_detail', [$top[$i+1]->slug, $top[$i+1]->id]) }}">
                                                <h2 class="font-headline-2xs font-medium">
                                                    {{ $top[$i+1]->title }}
                                                </h2>
                                            </a>
                                            <p class="flex gap-2 flex-col">
                                                <span class="font-metadata text-color-charcoal-600 uppercase">
                                                    {{ \Carbon\Carbon::parse($top[$i+1]->created_at)->diffForHumans() }}
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        
                        @if(isset($top[$i+2]))
                            <div>
                                <div class="flex gap-4 false">
                                    <div class="bg-white flex gap-6 w-full shrink">
                                        <div class="flex flex-col">
                                            <a class="text-color-charcoal-900 mb-4 hover:underline"
                                              href="{{ route('article_detail', [$top[$i+2]->slug, $top[$i+2]->id]) }}">
                                                <h2 class="font-headline-2xs font-medium">
                                                    {{ $top[$i+2]->title }}
                                                </h2>
                                            </a>
                                            <p class="flex gap-2 flex-col">
                                                <span class="font-metadata text-color-charcoal-600 uppercase">
                                                    {{ \Carbon\Carbon::parse($top[$i+2]->created_at)->diffForHumans() }}
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="py-4">
                <hr class="shrink-0 bg-divider border-none w-full h-divider" role="separator" />
            </div>
        @endfor

         
                </div>
                <div class="hidden xl:hidden">
                  <hr class="shrink-0 bg-divider border-none w-full h-divider" role="separator" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="grid">
        <div class="order-1"></div>
        <div class="hidden md:flex flex-col justify-center items-center order-2 pt-5">
          <div class="min-w-full min-h-full justify-center items-center">
            <div class="color-black relative flex items-start justify-center aw970px ah250px" style="height:250px">
              <div id="homepage_mid_desktop_0" data-freestar-ad="true" style="width:970px;height:250px"
                class="transition-box duration-250 align-center background-repeat relative flex items-start justify-center ease-in [&amp;>iframe]:m-auto bg-inherit opacity-100 aw970px ah250px">
                <div style="width:100%;height:100%" class="min-w-full animate-shimmer will-change-background-position via-18% to-33% from-8% absolute mb-0 ml-auto mr-auto mt-0 flex items-center justify-center bg-gradient-to-r from-[#f6f7f8] via-[#edeef1] to-[#f6f7f8] bg-[length:200%_100%] opacity-100 aw100% ah100%">
                     
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="flex"></div>
   <div class="container mx-auto xs:p-4 xs:grid-cols-4 xs:gap-4 sm:p-4 sm:grid-cols-4 sm:gap-4 md:p-6 md:grid-cols-8 md:gap-6 lg:p-6 lg:grid-cols-12 lg:gap-6 xl:p-6 xl:grid-cols-16 xl:gap-6">
      <div class="grid">
        <div class="flex md:hidden flex-col justify-center items-center order-1"></div>
        <div class="order-2">
          <div class="flex flex-col gap-6">
            <div class="flex">
              <hr class="shrink-0 border-none w-full h-divider bg-black" role="separator">
            </div>
            <div class="uppercase"><a target="" class="flex gap-2 items-center z-50 hover:z-50 " href="/newsletters">
                <h2 class="text-color-dark-grey font-title text-charcoal-600 hover:underline">Newsletters</h2><svg class=""
                  fill="none" height="24" viewBox="0 0 25 24" width="25" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M5.5 13H16.67L11.79 17.88C11.4 18.27 11.4 18.91 11.79 19.3C12.18 19.69 12.81 19.69 13.2 19.3L19.79 12.71C20.18 12.32 20.18 11.69 19.79 11.3L13.21 4.69997C12.82 4.30997 12.19 4.30997 11.8 4.69997C11.41 5.08997 11.41 5.71997 11.8 6.10997L16.67 11H5.5C4.95 11 4.5 11.45 4.5 12C4.5 12.55 4.95 13 5.5 13Z"
                    fill="#676767"></path>
                </svg>
              </a></div>
            <form action="{{ route('subscribe', 'test') }}" method="post" class="grid gap-6 grid-cols-4 md:grid-cols-8 lg:grid-cols-16 xl:grid-cols-16">
              @csrf
              <div class="col-span-4 md:col-span-8 lg:col-span-5 xl:col-span-6 pb-6">
                <div data-module-name="newsletter-sign-up-module" data-module-version="1.0.0" data-module-instance="default"
                  class="border p-6 md:p-10 lg:p-6"><span
                    class="text-color-dark-grey font-headline-xs font-medium text-charcoal-900">Don't miss another
                    story.</span><span class="block font-headline-3xs font-normal text-charcoal-900">Subscribe to the
                    CoinCrypto Newsletter today
                    <!-- -->.
                  </span>
                  <div class="flex flex-col md:flex-row lg:flex-col xl:flex-row gap-4 justify-start items-center pt-2">
                    <div class="group flex flex-col data-[hidden=true]:hidden w-full relative justify-end data-[has-label=true]:mt-[calc(theme(fontSize.small)_+_10px)]"
                      data-slot="base" data-filled="true" data-filled-within="true">
                      <div data-slot="main-wrapper" class="h-full flex flex-col">
                        <div  class="relative w-full inline-flex tap-highlight-transparent flex-row items-center shadow-sm px-3 gap-3 border-medium border-default-200 data-[hover=true]:border-default-400 group-data-[focus=true]:border-default-foreground h-10 min-h-10 rounded-small transition-background !duration-150 transition-colors motion-reduce:transition-none !h-12"
                          style="cursor:text">
                          <div data-slot="inner-wrapper" class="inline-flex w-full items-center h-full box-border"><input
                              data-slot="input"
                              class="w-full font-normal bg-transparent !outline-none placeholder:text-foreground-500 focus-visible:outline-none data-[has-start-content=true]:ps-1.5 data-[has-end-content=true]:pe-1.5 file:cursor-pointer file:bg-transparent file:border-0 autofill:bg-transparent bg-clip-text text-small border-transparent focus:border-transparent focus:ring-0 focus:outline-none font-label"
                               name="email" type="email" placeholder="Enter your Email"
                               value=""></div>
                        </div>
                      </div>
                    </div>
                   <button type="submit"
                      class="z-0 group relative inline-flex items-center justify-center box-border appearance-none select-none whitespace-nowrap font-normal subpixel-antialiased overflow-hidden tap-highlight-transparent data-[pressed=true]:scale-[0.97] outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 px-6 min-w-24 h-12 text-medium gap-3 rounded-large [&amp;>svg]:max-w-[theme(spacing.8)] transition-transform-colors-opacity motion-reduce:transition-none text-default-foreground data-[hover=true]:opacity-hover w-full md:w-auto lg:w-full xl:w-auto bg-new-yellow">
                      <div class="flex gap-2 p-4 pl-6 items-center"><span class="text-color-dark-grey font-label font-medium">Sign me
                          up</span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                          <mask id="mask0_2411_93" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="16" height="16">
                            <rect x="0.5" y="0.50061" width="16" height="16" fill="#D9D9D9"></rect>
                          </mask>
                          <g mask="url(#mask0_2411_93)">
                            <path
                              d="M3.16669 12.834V4.1673L13.4487 8.50063L3.16669 12.834ZM3.83335 11.834L11.7334 8.50063L3.83335 5.1673V7.75696L7.06419 8.50063L3.83335 9.2443V11.834Z"
                              fill="#262626"></path>
                          </g>
                        </svg></div>
                    </button>
                  </div><span class="pt-4 font-metadata text-charcoal-600"><span class="text-color-dark-grey ">By signing
                      up, you will receive emails about CoinCrypto products and you agree to our </span>
                      <a class="border-b-[1px] border-black !no-underline" href="/terms"><span
                        class="text-color-dark-grey ">terms of use</span>
                      </a>
                      <span class="text-color-dark-grey "> and
                    </span>
                    <a class="border-b-[1px] border-black !no-underline" href="/privacy"><span
                        class="text-color-dark-grey ">privacy policy</span>
                      </a>
                      <span  class="text-color-dark-grey font-metadata text-charcoal-600">.</span></span>
                </div>
              </div>
              <div class="col-span-4 md:col-span-8 lg:col-span-11 xl:col-span-10">
                <div class="gap-4 grid flex-col grid-cols-1 md:grid-cols-2 xl:grid-cols-3">
                  
                  @foreach ($newsletters as $data)
                  <div class="flex">
                    <div class="w-full">
                      <div class="pt-4 md:pt-0 grid grid-cols-[1fr_5fr] h-[100%] md:h-[130px] lg:h-[120px] xl:h-[130px]">
                        
                        <div class="col-span-1 flex justify-center relative">
                          <span
                            class="cursor-[inherit] top-2 absolute">
                            <label
                              class="group relative max-w-fit inline-flex items-center justify-start cursor-pointer tap-highlight-transparent p-2 -m-2 select-none">
                              <input 
                                class="font-inherit text-[100%] leading-[1.15] m-0 p-0 overflow-visible box-border absolute top-0 w-full h-full opacity-[0.0001] z-[1] cursor-pointer"
                                type="checkbox" name="letter_id[]" value="{{ $data->id }}">
                                <span class="relative inline-flex items-center justify-center w-5 h-5 border-2 border-gray-500 rounded">
                                  <svg
                                      aria-hidden="true" fill="none" role="presentation" stroke="white"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      viewBox="0 0 17 18"
                                      class="w-4 h-3 opacity-0 transition-opacity">
                                      <polyline points="1 9 7 14 15 4"></polyline>
                                  </svg>
                              </span>
                            </label>
                          </span>
                        </div>
                        <div class="col-start-2 col-span-3 flex flex-col gap-1">
                          <div><a class="hover:underline" href="{{  route('newsletter_detail', $data->id) }}">
                              <h3 class="font-headline-2xs font-normal">{{ $data->title }}</h3>
                            </a></div>
                          <div>
                            <span class="text-color-grey font-body-sm leading-6 text-charcoal-600 line-clamp-2">
                            {!! $data->description !!}
                          </span>
                          </div>
                          {{-- <div>
                            <span class="text-color-grey font-metadata text-charcoal-600 uppercase">Every Weekday</span>
                          </div> --}}
                        </div>
                      </div>
                      <div class="pt-4 md:pt-0"></div>
                      <hr class="shrink-0 bg-divider border-none w-full h-divider" role="separator">
                    </div>
                  </div>
                  @endforeach
                  

                 
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="order-3">
          <div class="grid gap-4 grid-cols-4 md:gap-6 md:grid-cols-8 lg:grid-cols-12 xl:grid-cols-16">
            <div class="order-1 col-span-4 md:col-span-8 lg:col-span-12 xl:order-2 xl:col-span-12 xl:row-span-2">
              <div class="pb-6">
                <hr class="shrink-0 border-none w-full h-divider bg-black" role="separator">
              </div>
              <div class="flex pb-6 items-center">
                <h2 class="text-color-dark-grey font-title text-charcoal-600 uppercase">Most Read</h2>
              </div>
              <div class="hidden md:flex">
                
                <div class=" flex flex-col gap-1 md:flex-row false ">
                  <div class="relative inline-block h-12 w-[60px]">
                    <img alt="elipse" loading="lazy" width="20" height="20"
                      class="h-8 min-h-8 w-8 min-w-8" style="color:transparent"
                      src="/img/elipse.png"><span
                      class="absolute bottom-0 right-0 font-body text-color-charcoal-900 uppercase">{{ sprintf('%02d', 1) }}
                      <!-- -->.
                    </span>
                  </div>
                  <div class="bg-white flex gap-6 w-full shrink flex-col md:flex-row">
                    <div class="flex flex-col"><a class="text-color-charcoal-900 mb-4 hover:underline"
                        href="{{ route('article_detail', [$articles[0]->slug, $articles[0]->id]) }}">
                        <h3 class="font-headline font-medium">
                          {{ $articles[0]->title }}
                        </h3>
                      </a>
                      <p class="font-body text-color-charcoal-600  mb-4 line-clamp-3">
                        {!! \Illuminate\Support\Str::limit($articles[0]->content, 60, '..') !!}
                      </p>

                      <p class="flex gap-2 flex-col">
                        @for ($i = 0; $i < count($articles[0]->article_creators); $i++)
                         @php
                          $data = $articles[0]->article_creators[$i];
                         @endphp
                         @if($i > 0)
                            ,
                         @endif
                        <span
                        class="font-metadata-lg font-medium text-color-charcoal-900 uppercase "><span class="mr-2">By <a
                           class="text-color-charcoal-900 hover:underline"
                            href="{{ route('author_detail', $data->user->id) }}">
                            {{ $data->user->first_name.' '.$data->user->lastt_name }}
                          </a>
                        </span>
                        @endfor
                        </span>
                      <span class="font-metadata text-color-charcoal-600 uppercase">
                        {{ \Carbon\Carbon::parse($articles[0]->created_at)->diffForHumans() }}
                                                
                      </span>
                      </p>
                    </div>
                    <a 
                      class="flex shrink-0 flex-col"
                      href="{{ route('article_detail', [$articles[0]->slug, $articles[0]->id]) }}">
                      <img
                        alt="{{ $articles[0]->slug }}" width="416" height="234" 
                        class="w-full md:w-60 md:h-[335px] lg:w-[416px] lg:h-[334px] rounded align-self-end object-cover"
                        style="color: transparent;"
                        src="{{ asset($articles[0]->article_creators[0]->user->image) }}"></a>
                  </div>
                </div>

              </div>
              <div class="flex md:hidden">

                <div class="flex flex-col gap-1 md:flex-row false">
                  <div class="relative inline-block h-12 w-[60px]">
                    <img alt="elipse" loading="lazy" width="20" height="20"
                      class="h-8 min-h-8 w-8 min-w-8" style="color:transparent"
                      src="/img/elipse.png"><span
                      class="absolute bottom-0 right-0 font-body text-color-charcoal-900 uppercase">
                      {{ sprintf('%02d', 1) }}
                      <!-- -->.
                    </span>
                  </div>
                  
                    <div class="bg-white flex gap-6 w-full shrink flex-col md:flex-row">
                    <div class="flex flex-col">
                      <a class="text-color-charcoal-900 mb-4 hover:underline"
                        href="{{ route('article_detail', [$articles[0]->slug, $articles[0]->id]) }}">
                        <h3 class="font-headline font-medium">
                          {{ $articles[0]->title }}
                        </h3>
                      </a>
                      <p class="font-body text-color-charcoal-600  mb-4 line-clamp-3">
                        {!! \Illuminate\Support\Str::limit($articles[0]->content, 60, '..') !!}
                      </p>
                      <p class="flex gap-2 flex-col">
                        @for ($i = 0; $i < count($articles[0]->article_creators); $i++)
                         @php
                          $data = $articles[0]->article_creators[$i];
                         @endphp
                         @if($i > 0)
                            ,
                         @endif
                        <span
                          class="font-metadata-lg font-medium text-color-charcoal-900 uppercase "><span class="mr-2">By <a
                              class="text-color-charcoal-900 hover:underline"
                              href="{{ route('author_detail', $data->user->id) }}">
                              {{ $data->user->first_name.' '.$data->user->lastt_name }}
                            </a>
                            </span>
                        @endfor
                        </span><span
                          class="font-metadata text-color-charcoal-600 uppercase">
                          {{ \Carbon\Carbon::parse($articles[0]->created_at)->diffForHumans() }}
                        </span></p>
                    </div>
                    <a class="flex shrink-0 flex-col"
                      href="{{ route('article_detail', [$articles[0]->slug, $articles[0]->id]) }}">
                      <img width="416" height="234" class="w-full md:w-60 md:h-[335px] lg:w-[416px] lg:h-[334px] rounded align-self-end object-cover"
                        src="{{ asset($articles[0]->article_creators[0]->user->image) }}"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="order-2 col-span-4 md:order-3 md:col-span-8 lg:col-span-12 xl:order-3 xl:col-span-12 xl:row-span-6">
              <div class="pb-6">
                <hr class="shrink-0 bg-divider border-none w-full h-divider" role="separator">
              </div>
             
              
              <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach ($articles as $data)
                @if($articles[0]->title != $data->title)
                <div class="flex flex-col">
                  <div class="min-h-[103px]">
                    <div class="flex gap-4 false">
                      <div class="relative inline-block h-[30px] w-9">
                        <img alt="elipse" loading="lazy" width="20"
                          height="20" decoding="async" data-nimg="1" class="h-5 min-h-5 w-5 min-w-5"
                          style="color: transparent;"
                          src="img/elipse.png">
                          <span class="absolute bottom-0 right-0 font-body-sm text-color-charcoal-900 uppercase">{{ sprintf('%02d', $num++) }}.</span></div>
                      <div class="bg-white flex gap-6 w-full shrink">
                        <div class="flex flex-col">
                          <a class="text-color-charcoal-900 mb-4 hover:underline"
                            href="{{ route('article_detail', [$data->slug, $data->id]) }}">
                            <h2 class="font-headline-2xs font-medium">
                              {{ $data->title }}
                            </h2>
                          </a>
                          <p class="flex gap-2 flex-col">
                            <span class="font-metadata-lg font-medium text-color-charcoal-900 uppercase ">
                              @for ($i = 0; $i < count($data->article_creators); $i++)
                         @php
                          $item = $data->article_creators[$i];
                         @endphp
                         @if($i > 0)
                            ,
                         @endif
                         <span class="mr-2">By
                          <a title="Helene Braun" class="text-color-charcoal-900 hover:underline"
                            href="{{ route('author_detail', $item->user->id) }}"> {{ $item->user->first_name.' '.$item->user->lastt_name }}</a></span>
                          </span>
                        @endfor
                              
                                
                              </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="py-4">
                    <hr class="shrink-0 bg-divider border-none w-full h-divider" role="separator">
                  </div>
                </div>
                @endif
                @endforeach
                
              </div>
            </div>
            <div class="order-3 col-span-full">
              <div class="color-black relative flex items-start justify-center aw970px ah250px" style="height:250px">
                <div id="homepage_mid_dynamic_1" data-freestar-ad="true" style="width:970px;height:250px"
                  class="transition-box duration-250 align-center background-repeat relative flex items-start justify-center ease-in [&amp;>iframe]:m-auto bg-inherit opacity-100 aw970px ah250px"
                  name="coindesk_homepage_desktop_leaderboard_2">
                  <div id="google_ads_iframe_/22031491390/cddesktop/homepage_3__container__" style="border: 0pt;"></div>
                </div>
              </div>
            </div>
            <div
              class="grid order-4 xl:order-1 md:order-3 col-span-4 md:col-span-8 lg:col-span-12 xl:col-span-4 xl:row-span-8 gap-6">
              <div class="grid grid-cols-1 lg:grid-cols-3 xl:grid-cols-1 gap-6">
                <div class="flex flex-col col-span-1 lg:col-span-2 xl:col-span-1">
                  <div class="pb-6">
                    <hr class="shrink-0 border-none w-full h-divider bg-black" role="separator">
                  </div>
                  <div class="pb-6 uppercase"><a target="" class="flex gap-2 items-center z-50 hover:z-50 " href="/opinion">
                      <h2 class="text-color-dark-grey font-title text-charcoal-600 hover:underline">Opinion</h2><svg
                        class="" fill="none" height="24" viewBox="0 0 25 24" width="25" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M5.5 13H16.67L11.79 17.88C11.4 18.27 11.4 18.91 11.79 19.3C12.18 19.69 12.81 19.69 13.2 19.3L19.79 12.71C20.18 12.32 20.18 11.69 19.79 11.3L13.21 4.69997C12.82 4.30997 12.19 4.30997 11.8 4.69997C11.41 5.08997 11.41 5.71997 11.8 6.10997L16.67 11H5.5C4.95 11 4.5 11.45 4.5 12C4.5 12.55 4.95 13 5.5 13Z"
                          fill="#676767"></path>
                      </svg>
                    </a></div>
                  <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-1  gap-4">
                    <div>
                      <div class="
    			  flex gap-4
    				false
    			">
                        <div class="bg-white flex gap-6 w-full shrink justify-between">
                          <div class="flex flex-col-reverse gap-2"><a class="text-color-charcoal-900 mb-4 hover:underline"
                              href="/opinion/2025/03/21/now-is-the-time-to-rally-to-web3-gaming">
                              <h3 class="font-headline-2xs font-normal">Now Is the Time to Rally to Web3 Gaming</h3>
                            </a>
                            <p class="flex gap-2 flex-col"><span
                                class="font-metadata-lg font-medium text-color-charcoal-900 uppercase "><span
                                  class="mr-2">By <a title="Gabby Dizon" class="text-color-charcoal-900 hover:underline"
                                    href="/author/gabby-dizon">Gabby Dizon</a></span></span></p>
                          </div><a title="Gabby Dizon" class="flex shrink-0 flex-col" href="/author/gabby-dizon"><img
                              alt="Gabby Dizon" loading="lazy" width="128" height="128" decoding="async" data-nimg="1"
                              class="w-16 h-16 object-cover rounded-full max-w-full max-h-full object-cover"
                              style="color: transparent; background-size: cover; background-position: 50% 50%; background-repeat: no-repeat; background-image: url(&quot;data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAUABQDASIAAhEBAxEB/8QAGAABAQADAAAAAAAAAAAAAAAAAAcBBQb/xAAnEAABAwMDAwQDAAAAAAAAAAABAgMEAAURBhIxByFRExQiMlOBkf/EABUBAQEAAAAAAAAAAAAAAAAAAAQD/8QAHREAAgIBBQAAAAAAAAAAAAAAAAECAzERIzNxgf/aAAwDAQACEQMRAD8AofWTUdwt9tj2yyK9KdPUUB78aRyamtjmat0NJiTZF2Nyt7riRIaUc4BPNUfqXGS66xIcQFpQCjae3Nc5bLYi4yGIymSN4AHyyOfFTstlGaSwKpohOpyeS3sOh5ht1P1WkKH7FKzGbDTDbY4SkJ/lKQE0I71ElOzUR2nVYbWvBCO2e1a7QjPsZjLjTrqlhZwXFbsUpRbeZLobSth+lsgSFvRkrXjcfFKUpQFH/9k=&quot;);"
                              srcset="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F6c8ec4675e39fdf4ec128840b78a0ce16a4dba2c-225x225.jpg%3Fauto%3Dformat&amp;w=128&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F6c8ec4675e39fdf4ec128840b78a0ce16a4dba2c-225x225.jpg%3Fauto%3Dformat&amp;w=256&amp;q=75 2x"
                              src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F6c8ec4675e39fdf4ec128840b78a0ce16a4dba2c-225x225.jpg%3Fauto%3Dformat&amp;w=256&amp;q=75"></a>
                        </div>
                      </div>
                      <div class="py-4 py-4">
                        <hr class="shrink-0 bg-divider border-none w-full h-divider" role="separator">
                      </div>
                    </div>
                    <div>
                      <div class="
    			  flex gap-4
    				false
    			">
                        <div class="bg-white flex gap-6 w-full shrink justify-between">
                          <div class="flex flex-col-reverse gap-2"><a class="text-color-charcoal-900 mb-4 hover:underline"
                              href="/opinion/2025/03/18/crypto-for-humans-lessons-from-the-bybit-hack">
                              <h3 class="font-headline-2xs font-normal">Crypto for Humans: Lessons from the Bybit Hack</h3>
                            </a>
                            <p class="flex gap-2 flex-col"><span
                                class="font-metadata-lg font-medium text-color-charcoal-900 uppercase "><span
                                  class="mr-2">By <a title="Ben Charoenwong" class="text-color-charcoal-900 hover:underline"
                                    href="/author/ben-charoenwong">Ben Charoenwong</a></span></span></p>
                          </div><a title="Ben Charoenwong" class="flex shrink-0 flex-col"
                            href="/author/ben-charoenwong"><img alt="Ben Charoenwong" loading="lazy" width="128"
                              height="128" decoding="async" data-nimg="1"
                              class="w-16 h-16 object-cover rounded-full max-w-full max-h-full object-cover"
                              style="color: transparent; background-size: cover; background-position: 50% 50%; background-repeat: no-repeat; background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAVCAIAAADJt1n/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAETUlEQVR4nE3TaVNaZxQHcL5KU22MgsYNxY0oqIkaE0frhEYLehFQEEEUBBFlkbK4IBI2RUFQQRQQhHtZlHvZnXY60/ZFmzadtt+kg5jozP/NM3N+c+Y8z3NQ0VQ+mspDSA6Es5Fk5jKWPDz1ylRa9oKAxeXxlyUancHh8QWiyfBNBoSzIJwD4TwIFwmqiJE8BOfAZMYPXRttDgZrrrOLUF9X31Bf34rD9fX1MZhsvcXmAxMlDCFF+Rhng7GkYe9wEqB1tLTgqqsI9c9ft2LftDURsc/xOCxlYvLDvj2UQEA4e4fzEFJAxYo4F0Vy7kCYsyDofvGC1I2XASTbEvtMIXJLF7eY45SX+P4uvEAk9oagUs8vuFAa++jMD0zRR3oIuxwgv6f9w+/8O+L96LPnLEoTd+L9qy4ajX505nvAqQIqni7EUvlYKu88888wZ+fejwa14t881r/A83+vg79futIWtUM4Mz3cB1AoNpcbQnKlZtF7fJfji6CAvyRhTHqUwuCWAjRsIAeGK53SymetU0nTw/1MKrDvcIFw9gGXZCxdOA9G1DKpfAbY5U0beUzTPNO0wNxiUX+gjovHhmdHBngA2Wo2h6+RaLo0aeHutu8SAWMew7ZjhXuytuCWCk4lC84Vno0/a19k7fPoiokR8QRpb0cXjsOPcGkGJB9LwNceF2xSZy2arGUzY9JmzNqIShxY5fkkXB39O+nU2KHZFLlOQak8VMJQ8dGLicKZRPAS3t8pmNU/WTZuzRuwXuld4R7zGKf8aS3wTsGZPnadgMnMff09/uxBMBq2mW908qxegewoIa3cLZy3c+iHnCnV1Pi2QuYLgZ+f6h5noeKny0JILpKA/S5XQCNPaNdSelVqdzOuVvglixY2VcYALEbTVQJ+hPOou+96n0gy7XV7D2RrHjE/qVP9eGC6te4G5MtyCmmJRj10OCPJ4m484NIZTBbjiySs+0e7UsWeYPFUIgpvqUIbym0WnTbQy56g2OzOcLE492U3ip0jN+lgDD4JRNQ7Vg5fuq3V+8xWx9rqLndWRZvkDA2Se4gz35MVqk3byfn5VTyUSJU86jwct3v8Gr2VLZAOjgLdr8flKn0eyaYufHaJSE0mib99KwYmBfMCCm2OTOcsite1hj27238ejqOEUi3A5Pe+GWts68M0dNe1DFBZongy98+fn25Dl2eyZbtw/tho1H2wDY8x6nBEbHtvz+A7Mp27uKJEtRKGaptfVtTgy6pan1bj0Q29PYNkg/X446f/fv35l1OTeU+jdp96LS4feYZfje36qqKhrKoJ3dCJ7ehHVdYRntUSKmo6yzHt32DaK2uJje1vmfNrV7FUKIqsKnSsOaFGZzpwB0XrO23EoSfPGp9UNpWhW8rQOBQG+wrT2FtVR3xa3VGObq+sI9Y09w+O0rfNzhMftCzXUei89S3TBYgYD739w5SyquYydEs5pvXrqub/AdnnyPd4jO42AAAAAElFTkSuQmCC&quot;);"
                              srcset="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F65511a3b2528b20ffefa3c49224dbc311f842bdc-1451x1558.png%3Fauto%3Dformat&amp;w=128&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F65511a3b2528b20ffefa3c49224dbc311f842bdc-1451x1558.png%3Fauto%3Dformat&amp;w=256&amp;q=75 2x"
                              src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2F65511a3b2528b20ffefa3c49224dbc311f842bdc-1451x1558.png%3Fauto%3Dformat&amp;w=256&amp;q=75"></a>
                        </div>
                      </div>
                      <div class="py-4 py-4">
                        <hr class="shrink-0 bg-divider border-none w-full h-divider" role="separator">
                      </div>
                    </div>
                    <div>
                      <div class="
    			  flex gap-4
    				false
    			">
                        <div class="bg-white flex gap-6 w-full shrink justify-between">
                          <div class="flex flex-col-reverse gap-2"><a class="text-color-charcoal-900 mb-4 hover:underline"
                              href="/opinion/2025/03/18/how-funding-fragmentation-holds-ethereum-back">
                              <h3 class="font-headline-2xs font-normal">How Funding Fragmentation Holds Ethereum Back</h3>
                            </a>
                            <p class="flex gap-2 flex-col"><span
                                class="font-metadata-lg font-medium text-color-charcoal-900 uppercase "><span
                                  class="mr-2">By <a title="Meg Lister" class="text-color-charcoal-900 hover:underline"
                                    href="/author/meg-lister">Meg Lister</a></span></span></p>
                          </div><a title="Meg Lister" class="flex shrink-0 flex-col" href="/author/meg-lister"><img
                              alt="CoinDesk placeholder image" loading="lazy" width="1056" height="594" decoding="async"
                              data-nimg="1" class="w-16 h-16 object-cover rounded-full max-w-full max-h-full object-cover"
                              style="color: transparent;"
                              srcset="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fac6bf763b67c66aeb40bc1b8d64de9e4fea8527f-2000x1500.png%3Fw%3D328%26auto%3Dformat&amp;w=1080&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fac6bf763b67c66aeb40bc1b8d64de9e4fea8527f-2000x1500.png%3Fw%3D328%26auto%3Dformat&amp;w=3840&amp;q=75 2x"
                              src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fac6bf763b67c66aeb40bc1b8d64de9e4fea8527f-2000x1500.png%3Fw%3D328%26auto%3Dformat&amp;w=3840&amp;q=75"></a>
                        </div>
                      </div>
                      <div class="py-4 md:hidden xl:flex">
                        <hr class="shrink-0 bg-divider border-none w-full h-divider" role="separator">
                      </div>
                    </div>
                    <div>
                      <div class="
    			  flex gap-4
    				false
    			">
                        <div class="bg-white flex gap-6 w-full shrink justify-between">
                          <div class="flex flex-col-reverse gap-2"><a class="text-color-charcoal-900 mb-4 hover:underline"
                              href="/opinion/2025/03/17/the-u-s-deserves-better-crypto-etfs-let-s-start-with-solana">
                              <h3 class="font-headline-2xs font-normal">The U.S. Deserves Better Crypto ETFs. Let's Start
                                With Solana</h3>
                            </a>
                            <p class="flex gap-2 flex-col"><span
                                class="font-metadata-lg font-medium text-color-charcoal-900 uppercase "><span
                                  class="mr-2">By <a title="Hadley Stern" class="text-color-charcoal-900 hover:underline"
                                    href="/author/hadley-stern">Hadley Stern</a></span></span></p>
                          </div><a title="Hadley Stern" class="flex shrink-0 flex-col" href="/author/hadley-stern"><img
                              alt="Hadley Stern" loading="lazy" width="128" height="128" decoding="async" data-nimg="1"
                              class="w-16 h-16 object-cover rounded-full max-w-full max-h-full object-cover"
                              style="color: transparent; background-size: cover; background-position: 50% 50%; background-repeat: no-repeat; background-image: url(&quot;data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAUABQDASIAAhEBAxEB/8QAGQABAAMBAQAAAAAAAAAAAAAAAAIDBQQH/8QAJhAAAgEEAQIGAwAAAAAAAAAAAQIDAAQFERIGIQcTFCIxYUFCgf/EABcBAQEBAQAAAAAAAAAAAAAAAAMEBQb/xAAeEQACAQQDAQAAAAAAAAAAAAABAgADERIxBDJBkf/aAAwDAQACEQMRAD8Aj09PFc5deUi6Lb477kAVZfZL1OUlVQIuPwQ3YVk2VhBjcgjeeAre4MR7tfVcPUV+MdM9w0Y4TgrGNa/prJThs6ZBb3ipVUKQdyc900krOtsXB/YfmlX9PXFpHiohLfQK57kb+KVIy1FNsT8MPIH2ZMszvkJnY7ZX4j6FaniAiy43DsyjbISTSldmvRpCdieYXMrpPIqnQB0KUpUpiT//2Q==&quot;);"
                              srcset="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fd527a648d6f10920f32e13580162d6bc5a25bfa2-400x400.jpg%3Fauto%3Dformat&amp;w=128&amp;q=75 1x, /_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fd527a648d6f10920f32e13580162d6bc5a25bfa2-400x400.jpg%3Fauto%3Dformat&amp;w=256&amp;q=75 2x"
                              src="/_next/image?url=https%3A%2F%2Fcdn.sanity.io%2Fimages%2Fs3y3vcno%2Fproduction%2Fd527a648d6f10920f32e13580162d6bc5a25bfa2-400x400.jpg%3Fauto%3Dformat&amp;w=256&amp;q=75"></a>
                        </div>
                      </div>
                      <div class="hidden py-4">
                        <hr class="shrink-0 bg-divider border-none w-full h-divider" role="separator">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="flex flex-col col-span-1">
                  <div class="pb-6">
                    <hr class="shrink-0 border-none w-full h-divider bg-black" role="separator">
                  </div>
                  <div class="pb-6 uppercase"><a target="" class="flex gap-2 items-center z-50 hover:z-50 "
                      href="/press-release">
                      <h2 class="text-color-dark-grey font-title text-charcoal-600 hover:underline">Press Releases</h2><svg
                        class="" fill="none" height="24" viewBox="0 0 25 24" width="25" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M5.5 13H16.67L11.79 17.88C11.4 18.27 11.4 18.91 11.79 19.3C12.18 19.69 12.81 19.69 13.2 19.3L19.79 12.71C20.18 12.32 20.18 11.69 19.79 11.3L13.21 4.69997C12.82 4.30997 12.19 4.30997 11.8 4.69997C11.41 5.08997 11.41 5.71997 11.8 6.10997L16.67 11H5.5C4.95 11 4.5 11.45 4.5 12C4.5 12.55 4.95 13 5.5 13Z"
                          fill="#676767"></path>
                      </svg>
                    </a></div>
                  <div class="flex flex-col gap-6">
                    <div class="relative">
                      <div>
                        <div class="transition-opacity duration-300 min-h-[130px] hidden">
                          <div class="
    			  flex gap-4
    				false
    			">
                            <div class="bg-white flex gap-6 w-full shrink">
                              <div class="flex flex-col"><a class="text-color-charcoal-900 mb-4 hover:underline"
                                  href="/press-release/2025/03/12/lbank-launches-usd100m-futures-protection-fund-for-traders">
                                  <h2 class="font-headline-2xs font-medium">LBank Launches $100M Futures Protection Fund for
                                    Traders</h2>
                                </a>
                                <p class="flex gap-2 flex-col"><span
                                    class="font-metadata-lg font-medium text-color-charcoal-900 uppercase "><span
                                      class="mr-2">Paid for by <span>LBank</span></span></span><span
                                    class="font-metadata text-color-charcoal-600 uppercase">Mar 12, 2025</span></p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="transition-opacity duration-300 min-h-[130px] hidden">
                          <div class="
    			  flex gap-4
    				false
    			">
                            <div class="bg-white flex gap-6 w-full shrink">
                              <div class="flex flex-col"><a class="text-color-charcoal-900 mb-4 hover:underline"
                                  href="/press-release/2025/02/24/saga-launches-liquidity-integration-layer-lil-revolutionizing-cross-chain-liquidity">
                                  <h2 class="font-headline-2xs font-medium">Saga Launches Liquidity Integration Layer (LIL),
                                    Revolutionizing Cross Chain Liquidity</h2>
                                </a>
                                <p class="flex gap-2 flex-col"><span
                                    class="font-metadata-lg font-medium text-color-charcoal-900 uppercase "><span
                                      class="mr-2">Paid for by <span>Saga</span></span></span><span
                                    class="font-metadata text-color-charcoal-600 uppercase">Feb 27, 2025</span></p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="transition-opacity duration-300 min-h-[130px] hidden">
                          <div class="
    			  flex gap-4
    				false
    			">
                            <div class="bg-white flex gap-6 w-full shrink">
                              <div class="flex flex-col"><a class="text-color-charcoal-900 mb-4 hover:underline"
                                  href="/press-release/2025/02/18/web3port-foundation-commits-usd100m-to-boost-liquidity-on-novastro-the-first-rwa-project-on-movement">
                                  <h2 class="font-headline-2xs font-medium">Web3Port Foundation Commits $100M to Boost
                                    Liquidity on Novastro, the First RWA Project on Movement</h2>
                                </a>
                                <p class="flex gap-2 flex-col"><span
                                    class="font-metadata-lg font-medium text-color-charcoal-900 uppercase "><span
                                      class="mr-2">Paid for by <span>Novastro</span></span></span><span
                                    class="font-metadata text-color-charcoal-600 uppercase">Feb 18, 2025</span></p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="transition-opacity duration-300 min-h-[130px] hidden">
                          <div class="
    			  flex gap-4
    				false
    			">
                            <div class="bg-white flex gap-6 w-full shrink">
                              <div class="flex flex-col"><a class="text-color-charcoal-900 mb-4 hover:underline"
                                  href="/press-release/2025/02/18/ltp-secures-hong-kong-sfc-licenses-expanding-regulated-virtual-asset-prime-brokerage-services">
                                  <h2 class="font-headline-2xs font-medium">LTP Secures Hong Kong SFC Licenses, Expanding
                                    Regulated Virtual Asset Prime Brokerage Services</h2>
                                </a>
                                <p class="flex gap-2 flex-col"><span
                                    class="font-metadata-lg font-medium text-color-charcoal-900 uppercase "><span
                                      class="mr-2">Paid for by <span>LTP</span></span></span><span
                                    class="font-metadata text-color-charcoal-600 uppercase">Feb 18, 2025</span></p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="transition-opacity duration-300 min-h-[130px] block">
                          <div class="
    			  flex gap-4
    				false
    			">
                            <div class="bg-white flex gap-6 w-full shrink">
                              <div class="flex flex-col"><a class="text-color-charcoal-900 mb-4 hover:underline"
                                  href="/press-release/2025/02/14/oracle-red-bull-racing-and-gate-io-expand-blockchain-s-global-reach-with-announcement-of-multi-year-partnership">
                                  <h2 class="font-headline-2xs font-medium">ORACLE RED BULL RACING AND GATE.IO EXPAND
                                    BLOCKCHAIN’S GLOBAL REACH WITH ANNOUNCEMENT OF MULTI-YEAR PARTNERSHIP</h2>
                                </a>
                                <p class="flex gap-2 flex-col"><span
                                    class="font-metadata-lg font-medium text-color-charcoal-900 uppercase "><span
                                      class="mr-2">Paid for by <span>Gate.io</span></span></span><span
                                    class="font-metadata text-color-charcoal-600 uppercase">Feb 14, 2025</span></p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="flex flex-col justify-center items-center">
                        <div class="flex flex-row justify-between">
                          <div
                            class="flex justify-center space-x-2 md:space-x-2 lg:space-x-4 px-12 md:px-18 lg:px-18 items-center">
                            <button
                              class="w-2 h-2 bg-black border bg-opacity-20 border-[rgba(255,255,255,0.3)] rounded-full"></button><button
                              class="w-2 h-2 bg-black border bg-opacity-20 border-[rgba(255,255,255,0.3)] rounded-full"></button><button
                              class="w-2 h-2 bg-black border bg-opacity-20 border-[rgba(255,255,255,0.3)] rounded-full"></button><button
                              class="w-2 h-2 bg-black border bg-opacity-20 border-[rgba(255,255,255,0.3)] rounded-full"></button><button
                              class="w-2 h-2 bg-black border bg-opacity-60 border-transparent rounded-full"></button></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>