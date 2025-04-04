<div>
  <section class="flex-grow flex justify-center w-full">
    <div class="flex flex-col gap-[60px] w-full">
      <div class="relative bg-black h-full w-full flex flex-col items-center">
        <div
          class="grid grid-cols-4 md:grid-cols-8 lg:grid-cols-12 xl:grid-cols-16 gap-x-[35px] lg:gap-x-[70px] container">
          <div class="col-span-4 md:col-span-5 lg:col-span-6 xl:col-span-8 "><span
              class="text-color-white font-headline-xs font-medium"> Newsletters</span>
            <h1 class="text-color-white font-headline py-8">{{ $newsletter->title }}</h1>
            <p class="text-color-white font-body-lg italic tracking-[0.15px] pb-5">
              {!! $newsletter->description !!}
            </p>

            <?php
              $author = \App\Models\User::find($newsletter->user_id);
            
            ?>
            <div class="flex pb-10 gap-6 items-center">
              <a href="{{ route('author_detail', $author->id) }}">
                <img width="84" height="84"  
                  class="object-cover rounded-full max-w-full max-h-full" style="color: transparent;"
                  src="{{ $author->image }}"></a>
                  
                  <a href="{{ route('author_detail', $author->id) }}"><span
                  class="text-color-white font-body-lg hover:underline decoration-white">
                  {{ $author->first_name.' '.$author->last_name }}
                </span>
              </a>
            </div>
            <form action="{{ route('subscribe', $newsletter->id) }}" method="POST" class="pb-6">
              @csrf
              <div class="flex justify-start items-center p-[10px] md:p-[10px] lg:p-[10px] w-full">
                <div class="group flex flex-col data-[hidden=true]:hidden w-full relative justify-end data-[has-label=true]:mt-[calc(theme(fontSize.small)_+_10px)]">
                  <div class="h-full flex flex-col">
                    <div  class="w-full inline-flex tap-highlight-transparent flex-row items-center px-3 gap-3 !gap-0 relative box-border border-b-medium shadow-[0_1px_0px_0_rgba(0,0,0,0.05)] border-default-200 !rounded-none hover:border-default-300 after:content-[''] after:w-0 after:origin-center after:absolute after:left-1/2 after:-translate-x-1/2 after:-bottom-[2px] after:h-[2px] group-data-[focus=true]:after:w-full h-10 min-h-10 rounded-medium transition-background motion-reduce:transition-none !duration-150 after:transition-width motion-reduce:after:transition-none !p-0 !m-0 !border-none decoration-white text-white placeholder-white !shadow-white focus:shadow-none after:bg-transparent"
                      style="cursor: text;">
                      <div class="inline-flex w-full items-center h-full box-border pb-1.5">
                        <input data-slot="input"
                          class="w-full font-normal bg-transparent !outline-none focus-visible:outline-none data-[has-start-content=true]:ps-1.5 data-[has-end-content=true]:pe-1.5 file:cursor-pointer file:bg-transparent file:border-0 autofill:bg-transparent bg-clip-text text-small group-data-[has-value=true]:text-foreground pt-5 border-transparent focus:border-transparent focus:ring-0 decoration-white text-white placeholder:text-white focus:outline-none !font-label"
                          placeholder="Enter your Email" id="react-aria3863246277-:r1:" style="color: white;"
                          type="email"
                          name="email">
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="p-[10px] md:p-[10px] lg:p-[10px] w-full">
                <button type="submit"  class="z-0 group relative inline-flex items-center justify-center box-border appearance-none select-none whitespace-nowrap font-normal subpixel-antialiased overflow-hidden tap-highlight-transparent data-[pressed=true]:scale-[0.97] outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 px-4 min-w-20 h-10 text-small gap-2 rounded-none [&amp;>svg]:max-w-[theme(spacing.8)] transition-transform-colors-opacity motion-reduce:transition-none text-default-foreground data-[hover=true]:opacity-hover w-full bg-new-yellow"><span class="text-color-black font-metadata">Subscribe</span></button>
                </div>
              </form>
            <span>
              <span class="text-color-white font-label italic">By signing up, you will receive emails about
                our products and you agree to our </span><a href="{{ route('terms') }}" class="underline decoration-white"><span
                  class="text-color-white font-label italic">terms of use</span></a><span
                class="text-color-white font-label italic"> and </span><a href="{{ route('privacy') }}"
                class="underline decoration-white"><span class="text-color-white font-label italic">privacy
                  policy</span></a><span class="text-color-white font-label">.</span></span>
          </div>
        </div>
      </div>

      <div class="container mx-auto xs:p-4 xs:grid-cols-4 xs:gap-4 sm:p-4 sm:grid-cols-4 sm:gap-4 md:p-6 md:grid-cols-8 md:gap-6 lg:p-6 lg:grid-cols-12 lg:gap-6 xl:p-6 xl:grid-cols-16 xl:gap-6">
        <div class="w-full flex flex-wrap justify-center flex-col border-0 md:gap-6 mdmax:gap-4 md:mt-8 mdmax:mt-4 ">
          <div class="flex flex-col w-full gap-4">
            @foreach ($opinions as $data)
            <div class="flex flex-col gap-4">
              <div class=" flex gap-4 false ">
                <div class="{{ $setting->theme == 'white' ? 'bg-white' : 'bg-black' }}flex gap-6 w-full shrink justify-between">
                  
                  <div class="flex flex-col">
                    <p class="mb-4">
                      <a class="font-title {{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-600' : 'text-color-white' }} uppercase"
                        href="{{ route('category_detail', $data->category_id) }}">
                        {{ $data->article_category->title }}
                      </a>
                      </p>
                      <a class="{{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white' }} mb-4 hover:underline"
                      href="{{ route('article_detail', [$data->slug, $data->id]) }}">
                      <h2 class="font-headline-xs medium">
                        {{ $data->title }}
                      </h2>
                    </a>
                    <p class="font-body {{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-600' : 'text-color-white' }} mb-4">
                      {!! \Illuminate\Support\Str::limit($data->content, 60, '..') !!}
                    </p>
                    <p class="flex gap-2 flex-col">
                      <span class="font-metadata-lg font-medium {{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white' }} uppercase ">
                        <span class="mr-2">By 
                       @for ($i = 0; $i < count($data->article_creators); $i++)
                        @if($i > 0)
                        ,
                        @endif
                        <a  class="{{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-600' : 'text-color-white' }} hover:underline"
                        href="{{ route('author_detail', $data->article_creators[$i]->user->id) }}">{{ $data->article_creators[$i]->user->first_name.' '.$data->article_creators[$i]->user->last_name }}
                        </a>
                        @endfor
                        </span>
                        </span>
                        <span class="font-metadata {{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-600' : 'text-color-white' }} uppercase">
                          {{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}
                      
                        </span>
                      </p>
                  </div>
                  <a  href="{{ route('article_detail', [$data->slug, $data->id]) }}">
                    <img
                       width="416" height="234" 
                      class="content-card-image--default rounded align-self-end object-cover object-cover"
                      style="color: transparent;"
                      src="{{ asset($data->image) }}"></a>
                </div>
              </div>
              <hr class="my-4">
            </div>
            @endforeach
            
           
            <div class="flex gap-4 items-center justify-center my-12 font-[100] text-[#676767] font-sans text-[12px]">
              @if($opinions->hasMorePages())
              <div  class="flex justify-center self-center">
                <a href="{{ $opinions->nextPageUrl() }}" class="bg-white hover:opacity-80 cursor-pointer border border-color-yellow-900 border-solid rounded-lg mb-8 text-color-charcoal-700 font-label font-medium py-1 px-4 h-10 flex items-center justify-center">More
                  stories
                </a>
              </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>