<div>


  @if($tab?->first && $tab->second)
  <div class="{{ $setting->theme == 'white' ? 'bg-white' : 'bg-black' }} w-full max-w-screen-md mx-auto px-4 py-6">
    <div class="flex border-b mb-4">
      @if($tab?->first)
        <button wire:click="toggleFirst" class="{{ $first ? 'font-bold' : '' }} {{ $setting->theme == 'white' ? 'text-grey-600' : 'text-color-white' }} border-b-2  px-3 py-2">{{\App\Models\ArticleCategory::find($tab->first)?->title}}</button>
       @endif
       @if($tab?->second)
        <button wire:click="toggleSecond" class="{{ $second ? 'font-bold' : '' }} {{ $setting->theme == 'white' ? 'text-grey-600' : 'text-color-white' }} px-3 py-2">{{ \App\Models\ArticleCategory::find($tab->second)?->title }}</button>
        @endif
    </div>

    @php
          $articles1 = \App\Models\ArticleCategory::find($tab->first)?->latest;
          $articles2 = \App\Models\ArticleCategory::find($tab->second)?->latest;
        @endphp
    @if($first )
    <div>
        @if($articles1)
        @foreach($articles1 as $data)    
        <a href="{{ route('article_detail', [$data->slug, $data->id])}}"
          target="_self">
              <div class="min-w-[300px] md:min-w-full flex pb-4 items-start gap-4 self-stretch  border-gray-200">
                  <div class="flex flex-col items-start gap-1 flex-1 ">
                      <div class="flex">
                          <span class="flex {{ $setting->theme == 'white' ? 'text-color-charcoal-600' : 'text-color-white' }} uppercase font-metadata">
                          {{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}
                      </span>
                      </div>
                      <div class=" {{ $setting->theme == 'white' ? '' : 'text-color-white' }} font-metadata-lg hover:underline"> 
                      {{  \Illuminate\Support\Str::limit($data->title, 80, '..') }}  
                      </div>
                  </div>
              </div>
          </a>
            <div class="py-2">
              <hr class="shrink-0 border-none w-full h-divider {{ $setting->theme == 'white' ? 'bg-black' : 'bg-white' }}" role="separator" />
            </div>
        @endforeach
        @endif
    </div>
    @endif
    @if($second)
    <div>
        
         @if($articles2)
        @foreach($articles2 as $data)    
        <a href="{{ route('article_detail', [$data->slug, $data->id])}}"
          target="_self">
              <div class="min-w-[300px] md:min-w-full flex pb-4 items-start gap-4 self-stretch   border-gray-200">
                  <div class="flex flex-col items-start gap-1 flex-1 ">
                      <div class="flex">
                          <span class="flex {{ $setting->theme == 'white' ? 'text-color-charcoal-600' : 'text-color-white' }} uppercase font-metadata">
                          {{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}
                      </span>
                      </div>
                      <div class=" {{ $setting->theme == 'white' ? '' : 'text-color-white' }} font-metadata-lg hover:underline"> 
                      {{  \Illuminate\Support\Str::limit($data->title, 80, '..') }}  
                      </div>
                  </div>
              </div>
          </a>
            <div class="py-2">
              <hr class="shrink-0 border-none w-full h-divider {{ $setting->theme == 'white' ? 'bg-black' : 'bg-white' }}" role="separator" />
            </div>
        @endforeach
        @endif
    </div>
    @endif

  </div>
  @endif
</div>
