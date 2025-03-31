<div>
    <section
        class="flex-grow flex flex-wrap justify-center flex-col items-center md:pt-6 mdmax:pt-4">
        <div  class="container mx-auto xs:p-4 xs:grid-cols-4 xs:gap-4 sm:p-4 sm:grid-cols-4 sm:gap-4 md:p-6 md:grid-cols-8 md:gap-6 lg:p-6 lg:grid-cols-12 lg:gap-6 xl:p-6 xl:grid-cols-16 xl:gap-6">
            <div class="flex flex-wrap flex-col justify-center mdmax:ml-0 mdmax:mr-0 mb-8 container-tablet-medium container-desktop-lg container-desktop-xl">
                <h1 class="font-title {{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white' }} mb-12 uppercase">{{ $category->title }}</h1>
                <div class="grid xl:grid-cols-3 sm:grid-cols-4 xs:grid-cols-2 gap-4 grid-flow-row-dense">
                    <div class="row-span-2 col-span-2 xl:col-span-2 lg:col-span-4 sm:col-span-4 xs:col-span-2">
                        <div class=" flex flex-col gap-1 md:flex-row false  ">
                            <div class="{{ $setting->theme == 'white' ? 'bg-white': 'bg-black'  }} flex gap-6 w-full shrink mdmax:flex-col justify-between">
                               
                                <div class="flex flex-col">
                                    <a class="{{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white' }}mb-4 hover:underline"
                                        href="{{ route('article_detail', [$latest?->first ?? 'post', $first?->id]) }}">
                                        <h2 class="font-headline font-medium {{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white' }}">
                                            {{  $first->title }}
                                        </h2>
                                    </a>
                                    <p class="font-body {{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-600' : 'text-color-white' }} mdmax:hidden mb-4 line-clamp-3">
                                        {{ \Illuminate\Support\Str::limit($first->title, 60, '..') }}
                                        
                                    </p>
                                    <p class="flex gap-2 flex-col">
                                        <span class="font-metadata-lg font-medium {{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white' }} uppercase ">
                                            <span lass="mr-2">By 
                                                @for ($i = 0; $i < count($first->article_creators); $i++)
                                                @if($i > 0)
                                                ,
                                                @endif
                                                <a title="" class="{{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white' }} hover:underline"
                                                href="{{ route('author_detail', $first->article_creators[$i]->user->id) }}">{{ $first->article_creators[$i]->user->first_name.' '.$first->article_creators[$i]->user->last_name }}
                                            </a>
                                            @endfor
                                            </span>
                                        </span>
                                        <span class="font-metadata {{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-600' : 'text-color-white' }} uppercase">
                                            {{ \Carbon\Carbon::parse($first->created_at)->diffForHumans() }}
                                        </span>
                                    </p>
                                </div>
                                <a class="flex shrink-0 flex-col"
                                        href="{{ route('article_detail', [$first?->slug ?? 'post', $first?->id]) }}">
                                        <img width="1920" height="1080"
                                        class="lg:w-[26rem] lg:h-[14.625rem] md:w-60 md:h-32 xs:w-88 xs:h-48 rounded align-self-end object-cover"
                                        style="color: transparent;"
                                        src="{{ $first->image }}"></a>
                            </div>
                        </div>
                        <div class="border-solid border-t mt-6 mb-6 border-charcoal-50 undefined {{ $setting->theme == 'white' ? 'bg-black' : 'bg-white' }}"></div>
                    </div>
                    
                    @foreach ($second as $data)
                    <div class="row-span-2 xl:col-span-1 xl:col-start-1 md:col-span-2 sm:col-span-4 xs:col-span-2 md:flex md:flex-col md:justify-between">
                        <div class=" flex gap-4 false ">
                            <div class="{{ $setting->theme == 'white' ? 'bg-white' : 'bg-black'  }} flex gap-6 w-full shrink justify-between">
                                <div class="flex flex-col">
                                    <a class="{{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white' }} mb-4 hover:underline"
                                        href="{{ route('article_detail', [$data?->first ?? 'post', $data?->id]) }}">
                                        <h2 class="font-headline-2xs font-medium {{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white' }}">
                                            {{ $data->title }}
                                        </h2>
                                    </a>
                                    <p class="font-body {{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-600' : 'text-color-white' }} mb-4 line-clamp-3">
                                        {{ \Illuminate\Support\Str::limit($data->content, 60, '..') }}
                                        
                                    </p>
                                    <p class="flex gap-2 flex-col">
                                        <span class="font-metadata {{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-600' : 'text-color-white' }} uppercase">
                                            {{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}
                      
                                        </span>
                                    </p>
                                </div>
                                <a class="flex shrink-0 flex-col"
                                    href="{{ route('article_detail', [$data?->first ?? 'post', $data?->id]) }}"><img
                                       width="1920"
                                        height="1080"  
                                        class="lg:w-[9.5rem] lg:h-[9.5rem] sm:w-16 sm:h-16 xs:w-16 xs:h-16 rounded align-self-end object-cover"
                                        style="color: transparent;"
                                        src="{{ asset($data->image) }}"></a>
                            </div>
                        </div>
                        <div class="border-solid border-t mt-6 mb-6 border-charcoal-50 xl:hidden"></div>
                    </div>
                    @endforeach
                    
                    


                    @foreach ($third as $data)
                    <div class="row-span-1 col-span-1">
                        <div class=" flex gap-4 false ">
                            <div class="{{ $setting->theme == 'white' ? 'bg-white' : 'bg-black'  }} flex gap-6 w-full shrink justify-between">
                                <div class="flex flex-col">
                                    <a class="{{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white' }} mb-4 hover:underline"
                                        href="{{ route('article_detail', [$data?->first ?? 'post', $data?->id]) }}">
                                        <h2 class="font-headline-2xs font-medium {{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white' }}">
                                            {{ $data->title }}
                                        </h2>
                                    </a>
                                    <p class="font-body {{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white' }} mb-4 line-clamp-3">
                                        {{ \Illuminate\Support\Str::limit($data->content, 60, '..') }}
                                        
                                    </p>
                                    <p class="flex gap-2 flex-col">
                                        <span class="font-metadata {{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white' }} uppercase">
                                            {{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}
                      
                                        </span>
                                    </p>
                                </div>
                                <a class="flex shrink-0 flex-col"
                                    href="{{ route('article_detail', [$data?->first ?? 'post', $data?->id]) }}"><img
                                       width="1920"
                                        height="1080"  
                                        class="lg:w-[9.5rem] lg:h-[9.5rem] sm:w-16 sm:h-16 xs:w-16 xs:h-16 rounded align-self-end object-cover"
                                        style="color: transparent;"
                                        src="{{ asset($data->image) }}"></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    
                    
                </div>
            </div>
          
            <div class="flex flex-col justify-center mdmax:ml-0 mdmax:mr-0 mb-8 container-mobile-md container-tablet-medium container-desktop-lg container-desktop-xl">
                <div class="flex gap-4 mdmax:flex-col justify-start items-start mdmax:w-full">
                   @foreach ($categories as $data)
                   <div class="flex flex-wrap gap-4 justify-start items-start mdmax:w-full">
                    <div class="basis-full border-solid border-t border-charcoal-600 h-0"></div>
                    <div class="basis-full {{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white' }} text-sm font-semibold uppercase h-min"><a
                            class="font-title {{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-600' : 'text-color-white' }} uppercase flex"
                             href="{{ route('category_detail', $data->id) }}">
                             {{ $data->title }}
                        </a>
                    </div>
                    <?php
                     $list = \App\Models\Article::orderByDesc('created_at')
                            ->where([ 'category_id' => $data->id])->limit(2)->get();
                    ?>

                    @foreach ($list as $item)
                    <div class="flex flex-col flex-1 gap-4 content-card-image--story-card h-auto"><a
                        class="flex flex-col shrink-0"
                        href="{{ route('article_detail', [$item?->first ?? 'post', $item?->id]) }}">
                        <img width="1920" height="1080"  
                            class="content-card-image--story-card object-cover rounded"
                            style="color: transparent;"
                            src="{{ asset($item->image) }}">
                        </a>
                        <a
                        class="hover:underline {{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white' }}"
                        href="{{ route('article_detail', [$item?->first ?? 'post', $item?->id]) }}">
                        <h2 class="{{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white' }} font-headline-2xs font-medium">
                            {{ $item->title }}
                        </h2>
                    </a>
                    <p><span class="mr-2 font-metadata font-medium {{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white' }} uppercase">By 
                        
                        @for ($i = 0; $i < count($item->article_creators); $i++)
                        @if($i > 0)
                        ,
                        @endif
                        <a  class="{{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white' }} hover:underline"
                        href="{{ route('author_detail', $item->article_creators[$i]->user->id) }}">{{ $item->article_creators[$i]->user->first_name.' '.$item->article_creators[$i]->user->last_name }}
                        </a>
                        @endfor
                        </span>
                        <span class="font-metadata font-normal text-color-charcoal-600 uppercase lgmax:block lgmax:mt-2">
                            {{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                      
                        </span>
                    </p>
                    </div>
                    @endforeach
                   </div>
               @endforeach
                      
                </div>
            </div>

            @if($advert)
            <div class="color-black relative flex items-start justify-center aw970px ah250px" style="height: 250px;">
                <div id="leaderboard_0" data-freestar-ad="true" style="width: 970px; height: 250px;"
                    class="transition-box duration-250 align-center background-repeat relative flex items-start justify-center ease-in [&amp;>iframe]:m-auto bg-inherit opacity-100 aw970px ah250px"
                    name="coindesk_article_desktop_leaderboard">
                    <div style="width:100%;height:100%" class="min-w-full animate-shimmer will-change-background-position via-18% to-33% from-8% absolute mb-0 ml-auto mr-auto mt-0 flex items-center justify-center bg-gradient-to-r from-[#f6f7f8] via-[#edeef1] to-[#f6f7f8] bg-[length:200%_100%] opacity-100 aw100% ah100%">
                   
                    </div>
                </div>
            </div>
            @endif

            <div>
                
                <div class="flex flex-wrap justify-center flex-col border-0 md:gap-6 mdmax:gap-4 container-mobile-md container-tablet-medium container-desktop-lg md:mt-8 mdmax:mt-6 mdmax:mx-0">
                    @foreach($groupedArticles as $date => $group)
                    <div class="flex flex-col {{ $setting->theme == 'white' ? 'text-color-black' : 'text-color-white' }} border-solid border-0 border-b border-t border-charcoal-50 gap-6 md:pb-6 mdmax:pb-4 md:pt-6 mdmax:pt-4 w-full">
                      <div  class="font-metadata text-color-charcoal-600 uppercase flex flex-row justify-start border-solid border-0 gap-6">
                        <svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none">
                          <mask id="a" width="24" height="24" x="0" y="0" maskUnits="userSpaceOnUse" style="mask-type: alpha;">
                            <path fill="#D9D9D9" d="M0 0h24v24H0z"></path>
                          </mask>
                          <g mask="url(#a)">
                            <path fill="{{ $setting->theme == 'white' ? '#676767' : 'white' }}"
                              d="M5.615 21c-.46 0-.844-.154-1.152-.462A1.565 1.565 0 0 1 4 19.385V6.615c0-.46.154-.844.463-1.152A1.565 1.565 0 0 1 5.615 5h1.77V2.77h1.077V5h7.153V2.77h1V5h1.77c.46 0 .844.154 1.152.463.309.308.463.692.463 1.152v12.77c0 .46-.154.844-.462 1.152a1.565 1.565 0 0 1-1.153.463H5.615Zm0-1h12.77a.588.588 0 0 0 .423-.192.588.588 0 0 0 .192-.423v-8.77H5v8.77c0 .153.064.294.192.423.129.128.27.192.423.192ZM5 9.615h14v-3a.588.588 0 0 0-.192-.423.588.588 0 0 0-.423-.192H5.615a.588.588 0 0 0-.423.192.588.588 0 0 0-.192.423v3Zm7 4.539a.739.739 0 0 1-.54-.23.738.738 0 0 1-.23-.54c0-.206.077-.386.23-.539a.738.738 0 0 1 .54-.23c.206 0 .386.077.54.23.153.153.23.333.23.54a.738.738 0 0 1-.23.539.739.739 0 0 1-.54.23Zm-4 0a.739.739 0 0 1-.54-.23.738.738 0 0 1-.23-.54c0-.206.077-.386.23-.539a.738.738 0 0 1 .54-.23c.206 0 .386.077.54.23.153.153.23.333.23.54a.738.738 0 0 1-.23.539.739.739 0 0 1-.54.23Zm8 0a.739.739 0 0 1-.54-.23.738.738 0 0 1-.23-.54c0-.206.077-.386.23-.539a.738.738 0 0 1 .54-.23c.206 0 .386.077.54.23.153.153.23.333.23.54a.738.738 0 0 1-.23.539.739.739 0 0 1-.54.23ZM12 18a.738.738 0 0 1-.54-.23.738.738 0 0 1-.23-.54c0-.206.077-.385.23-.539a.738.738 0 0 1 .54-.23c.206 0 .386.077.54.23.153.154.23.333.23.54a.738.738 0 0 1-.23.54A.738.738 0 0 1 12 18Zm-4 0a.738.738 0 0 1-.54-.23.738.738 0 0 1-.23-.54c0-.206.077-.385.23-.539a.738.738 0 0 1 .54-.23c.206 0 .386.077.54.23.153.154.23.333.23.54a.738.738 0 0 1-.23.54A.738.738 0 0 1 8 18Zm8 0a.738.738 0 0 1-.54-.23.738.738 0 0 1-.23-.54c0-.206.077-.385.23-.539a.738.738 0 0 1 .54-.23c.206 0 .386.077.54.23.153.154.23.333.23.54a.738.738 0 0 1-.23.54A.738.738 0 0 1 16 18Z">
                            </path>
                          </g>
                        </svg> 
                        <span class="flex self-center ml-2 {{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white' }}">{{ $date }}</span></div>
                    </div>
                    @foreach($group as $article)
                    <div class="flex gap-4 false ">
                      <div class="{{ $setting->theme == 'white' ? 'bg-white' : 'bg-black'  }} flex gap-6 w-full shrink justify-between">
                        <div class="flex flex-col">
                          <a class="{{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white' }} mb-4 hover:underline"
                            href="{{ route('article_detail', [$article->slug, $article->id]) }}">
                            <h2 class="font-headline-xs font-normal {{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white' }}">
                            {{ $article->title }}  
                            </h2>
                          </a>
                          <p class="flex gap-2 flex-col">
                            <span
                              class="font-metadata-lg font-medium {{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white' }} uppercase ">
                              <span class="mr-2">
                               {{ $article->info }}
                                </span>
                              </span>
                              <span class="font-metadata {{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-600' : 'text-color-white' }} uppercase">
                                {{ \Carbon\Carbon::parse($article->created_at)->diffForHumans() }}
                              </span>
                            </p>
                        </div>
                        <a class="flex shrink-0 flex-col"
                          href="{{ route('article_detail', [$article->slug, $article->id]) }}">
                          <img  width="1920" height="1080" 
                            class="content-card-image--livewire rounded align-self-end object-cover" style="color: transparent;"
                            src="{{ $article->image }}">
                          </a>
                      </div>
                    </div>
                    @endforeach
                    @endforeach
          
                    
                  </div>
                  @if($articles->hasMorePages())
                  <div  class="flex justify-center self-center">
                    <a href="{{ $articles->nextPageUrl() }}" class="bg-white hover:opacity-80 cursor-pointer border border-color-yellow-900 border-solid rounded-lg mb-8 text-color-charcoal-700 font-label font-medium py-1 px-4 h-10 flex items-center justify-center">More
                      stories
                    </a>
                  </div>
                  @endif
            </div>
            </div>
    </section>
</div>