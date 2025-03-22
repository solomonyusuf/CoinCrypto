<div>
    <div class="col-start-1 col-span-full row-start-1 lg:col-end-8 xl:col-end-9">
        <div class="flex flex-col gap-1 md:flex-row xlmax:w-full ">
          <div class="bg-white flex gap-6 w-full shrink flex-col md:flex-row lg:flex-col-reverse xl:flex-row-reverse">
            <div class="flex flex-col"><a class="text-color-charcoal-900 mb-4 hover:underline"
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
                style="color:transparent;background-size:cover;background-position:50% 50%;background-repeat:no-repeat;background-image:url(&quot;data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAALABQDASIAAhEBAxEB/8QAGAAAAwEBAAAAAAAAAAAAAAAAAAUHAwb/xAAhEAACAQMEAwEAAAAAAAAAAAABAgMABBEFBhIxFBUhIv/EABUBAQEAAAAAAAAAAAAAAAAAAAME/8QAGhEBAAMBAQEAAAAAAAAAAAAAAQACAxIxEf/aAAwDAQACEQMRAD8AiO3/AEUWi2sl7BHNcfouCfvzoV1bx7Y1DU4wLC2sYUgGUbt2NR+KV1jwrECtXu7iSTm8rs2MZJoNMe62Pvsoz0rUBPIw3jFZw69Olhw8cYxx6opK7EtknJopqnIEnZ//2Q==&quot;)"
                src="{{ asset($latest->image) }}" /></a>
          </div>
        </div>
      </div>
      <div
        class="row-start-2 col-span-full md:col-start-4 lg:row-start-1 lg:col-start-8 -lg:col-end-1 xl:col-start-9 [&amp;_.jw-related-btn]:hidden">
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
                        allowfullscreen
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
</div>
