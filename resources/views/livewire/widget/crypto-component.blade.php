<div>
    <div class="flex flex-col items-center gap-4 relative overflow-y-auto&quot;">
        <div class="flex w-full uppercase"><a target="" class="flex gap-2 items-center z-50 hover:z-50 "
            href="/latest-crypto-news">
            <h2 class="text-color-dark-grey font-title text-charcoal-600 hover:underline">
              Latest Crypto News
            </h2>
            <svg class="" fill="none" height="24" viewBox="0 0 25 24" width="25"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M5.5 13H16.67L11.79 17.88C11.4 18.27 11.4 18.91 11.79 19.3C12.18 19.69 12.81 19.69 13.2 19.3L19.79 12.71C20.18 12.32 20.18 11.69 19.79 11.3L13.21 4.69997C12.82 4.30997 12.19 4.30997 11.8 4.69997C11.41 5.08997 11.41 5.71997 11.8 6.10997L16.67 11H5.5C4.95 11 4.5 11.45 4.5 12C4.5 12.55 4.95 13 5.5 13Z"
                fill="#676767"></path>
            </svg>
          </a></div>
        <div class="flex flex-col w-full h-full md:h-[1130px] md:max-h-[1130px] lg:h-[470px] lg:max-h-[470px] xl:h-[340px] xl:max-h-[340px]">
            <div class="grid grid-rows-2 grid-flow-col grid-cols-[repeat(auto-fill,minmax(300px,1fr))] md:grid-cols-1 md:grid-rows-none md:grid-flow-row pt-6 gap-4 no-scrollbar overflow-x-auto overflow-y-hidden md:overflow-auto md:overflow-y-scroll">
               @foreach ($crypto as $data)
               <a href="{{ route('article_detail', [$data->slug, $data->id])}}"
               target="_self">
                    <div class="min-w-[300px] md:min-w-full flex pb-4 items-start gap-4 self-stretch border-b border-gray-200">
                        <div class="flex flex-col items-start gap-1 flex-1 ">
                            <div class="flex">
                                <span class="flex text-charcoal-600 uppercase font-metadata">
                                {{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}
                            </span>
                            </div>
                            <div class="line-clamp-2 font-metadata-lg hover:underline"> 
                            {{  \Illuminate\Support\Str::limit($data->title, 80, '..') }}  
                            </div>
                        </div>
                    </div>
                </a>
               @endforeach
                
               
            </div>
        </div>
    </div>
</div>
