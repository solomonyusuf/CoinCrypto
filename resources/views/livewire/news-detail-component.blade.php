<div>
  @push('meta')
<!-- Meta Description -->
<meta name="description" content="{{ $article?->meta_description }}">

<!-- Meta Keywords (optional, not heavily used anymore) -->
<meta name="keywords" content="{{ $article?->meta_tags }}">

<!-- Canonical URL -->
<link rel="canonical" href="{{ url()->current() }}">

<!-- Open Graph for Facebook -->
<meta property="og:title" content="{{ $article->title }}">
<meta property="og:description" content="{{ $article?->meta_description }}">
<meta property="og:image" content="{{ asset($article?->image) }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:type" content="website">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $article?->title }}">
<meta name="twitter:description" content="{{ $article?->meta_description }}">
<meta name="twitter:image" content="{{ asset($article?->image) }}">
@endpush
  <section  class="flex-grow container">
    <div class="pt-8 grid grid-cols-4 gap-2 md:grid-cols-8 md:gap-4 lg:grid-cols-12 xl:grid-cols-16 items-stretch">
      <div class="flex"></div>
      <div
        class="article-content-wrapper font-title_5 text-charcoal-600 tracking-normal flex justify-between m-auto items-center row-start-1">
        <div class="flex gap-2 font-title">
          <a class="uppercase" href="{{ route('category_detail', $article->category_id) }}">
            {!! $article->article_category->title !!}
          </a>
        </div>
        <div class="relative">
          <button wire:click="toggleShare" class="share-dialog-button flex gap-1 items-center outline-0 text-charcoal-600 font-title font-medium"><svg
              xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
              <mask id="mask0_5141_6895" maskUnits="userSpaceOnUse" x="0" y="0" width="20" height="20">
                <rect width="20" height="20" fill="#D9D9D9"></rect>
              </mask>
              <g mask="url(#mask0_5141_6895)">
                <path
                  d="M5.51324 18.3334C5.12963 18.3334 4.80935 18.205 4.55241 17.948C4.29546 17.6911 4.16699 17.3708 4.16699 16.9872V8.84636C4.16699 8.46275 4.29546 8.14247 4.55241 7.88553C4.80935 7.62858 5.12963 7.50011 5.51324 7.50011H7.27595V8.33344H5.51324C5.38491 8.33344 5.26734 8.38685 5.16053 8.49365C5.05373 8.60046 5.00033 8.71803 5.00033 8.84636V16.9872C5.00033 17.1155 5.05373 17.2331 5.16053 17.3399C5.26734 17.4467 5.38491 17.5001 5.51324 17.5001H14.4874C14.6157 17.5001 14.7333 17.4467 14.8401 17.3399C14.9469 17.2331 15.0003 17.1155 15.0003 16.9872V8.84636C15.0003 8.71803 14.9469 8.60046 14.8401 8.49365C14.7333 8.38685 14.6157 8.33344 14.4874 8.33344H12.7247V7.50011H14.4874C14.871 7.50011 15.1913 7.62858 15.4482 7.88553C15.7052 8.14247 15.8337 8.46275 15.8337 8.84636V16.9872C15.8337 17.3708 15.7052 17.6911 15.4482 17.948C15.1913 18.205 14.871 18.3334 14.4874 18.3334H5.51324ZM9.58366 12.9168V3.84469L7.83366 5.59469L7.24387 5.00011L10.0003 2.24365L12.7568 5.00011L12.167 5.59469L10.417 3.84469V12.9168H9.58366Z"
                  fill="#262626"></path>
              </g>
            </svg>Share
          </button>
          @if($open)
          <div class="fixed left-0 top-auto h-[300px] right-0 bottom-0 md:absolute md:bottom-auto md:left-auto md:top-[calc(100%_+_8px)] md:h-max md:right-[-3px] md:transition-none z-[100] bg-[#fff] p-8 shadow rounded-lg translate-x-0 transition-transform translate-y-0 {{ $open ? '' : 'md:hidden' }}">
           <button wire:click="toggleShare" class="absolute top-4 right-4">
            <svg height="24" viewBox="0 0 24 24" width="24"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M6.40001 18.3076L5.69226 17.5999L11.2923 11.9999L5.69226 6.39989L6.40001 5.69214L12 11.2921L17.6 5.69214L18.3078 6.39989L12.7078 11.9999L18.3078 17.5999L17.6 18.3076L12 12.7076L6.40001 18.3076Z">
                </path>
              </svg>
            </button>
            <span class="block mb-6 text-charcoal-900 font-title">Share this article</span>
            <div class="dialog grid grid-cols-[repeat(3,_minmax(64px,_1fr))] xxs_smax:gap-x-6 gap-x-12 gap-y-6 font-normal tracking-wide text-xs [&amp;_.share-button]:text-charcoal-900 [&amp;_.share-button]:flex [&amp;_.share-button]:flex-col [&amp;_.share-button]:gap-2 [&amp;_.share-button]:shadow-none [&amp;_.share-button]:items-center [&amp;_span]:flex [&amp;_span]:justify-center [&amp;_span]:items-center [&amp;_span]:w-10 [&amp;_span]:h-10 [&amp;_span]:rounded-full [&amp;_span]:bg-charcoal-25">
              
              <button id="share-button" class="share-button">
                <span>
                <svg width="24" height="24" fill="none" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M17 7H14C13.45 7 13 7.45 13 8C13 8.55 13.45 9 14 9H17C18.65 9 20 10.35 20 12C20 13.65 18.65 15 17 15H14C13.45 15 13 15.45 13 16C13 16.55 13.45 17 14 17H17C19.76 17 22 14.76 22 12C22 9.24 19.76 7 17 7ZM8 12C8 12.55 8.45 13 9 13H15C15.55 13 16 12.55 16 12C16 11.45 15.55 11 15 11H9C8.45 11 8 11.45 8 12ZM10 15H7C5.35 15 4 13.65 4 12C4 10.35 5.35 9 7 9H10C10.55 9 11 8.55 11 8C11 7.45 10.55 7 10 7H7C4.24 7 2 9.24 2 12C2 14.76 4.24 17 7 17H10C10.55 17 11 16.55 11 16C11 15.45 10.55 15 10 15Z"
                        fill="#262626"></path>
                    </svg>
                  </svg>
                </span>Copy link
              </button>
             <a class="share-button" target="_blank"
                href="https://x.com/intent/tweet?utm_source=twitter&amp;text={{ route('article_detail', [$article->slug, $article->id]) }}"><span><svg
                    width="16" height="16" viewBox="0 0 1400 1027" fill="none" xmlns="http://www.w3.org/2000/svg"
                    aria-labelledby="twitter-svg-a11y-label-id">
                    <title id="twitter-svg-a11y-label-id">X icon</title>
                    <path
                      d="M714.163 519.284L1160.89 0H1055.03L667.137 450.887L357.328 0H0L468.492 681.821L0 1226.37H105.866L515.491 750.218L842.672 1226.37H1200L714.137 519.284H714.163ZM569.165 687.828L521.697 619.934L144.011 79.6944H306.615L611.412 515.685L658.88 583.579L1055.08 1150.3H892.476L569.165 687.854V687.828Z"
                      fill="#262626"></path>
                  </svg></span>X (Twitter)</a>
                  <a class="share-button" target="_blank"
                href="https://www.linkedin.com/shareArticle?utm_source=linkedin&amp;mini=true&amp;summary={{ $article->slug }}&amp;url={{ route('article_detail', [$article->slug, $article->id]) }}"><span><svg
                    width="24" height="24" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M2.25362 9.21772H6.53986V22.1164H2.25362V9.21772ZM4.42543 3C2.95843 3 2 3.9631 2 5.22719C2 6.46529 2.93038 7.45638 4.36933 7.45638H4.39667C5.89171 7.45638 6.82276 6.46524 6.82276 5.22719C6.79471 3.9631 5.89176 3 4.42543 3ZM17.0638 8.91471C14.7886 8.91471 13.7693 10.1661 13.2007 11.0438V9.21772H8.91314C8.9699 10.4278 8.91314 22.1164 8.91314 22.1164H13.2007V14.9129C13.2007 14.527 13.2287 14.1427 13.3415 13.8663C13.652 13.0961 14.3574 12.2985 15.5407 12.2985C17.0931 12.2985 17.7131 13.4819 17.7131 15.2151V22.1163H22V14.72C22 10.7581 19.8856 8.91471 17.0638 8.91471Z"
                      fill="#262626"></path>
                  </svg></span>LinkedIn
                </a>
                <a class="share-button" target="_blank"
                href="https://www.facebook.com/sharer/sharer.php?utm_source=facebook&amp;u={{ route('article_detail', [$article->slug, $article->id]) }}"><span><svg
                    width="24" height="24" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M16.3447 13.6068L16.863 10.1942H13.621V7.9796C13.621 7.04596 14.0739 6.13593 15.526 6.13593H17V3.2306C17 3.2306 15.6623 3 14.3834 3C11.7132 3 9.96805 4.63437 9.96805 7.59321V10.1942H7V13.6068H9.96805V21.8566C10.5632 21.9509 11.1732 22 11.7945 22C12.4159 22 13.0259 21.9509 13.621 21.8566V13.6068H16.3447Z"
                      fill="#262626"></path>
                  </svg></span>Facebook
                </a>
                  <a class="share-button" target="_blank"
                href="mailto:%20?subject={{ $article->slug.' view full story at '.route('article_detail', [$article->slug, $article->id]) }}"><span><svg
                    width="16" height="16" fill="#262626" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 75.294 75.294">
                    <g>
                      <path
                        d="M66.097,12.089h-56.9C4.126,12.089,0,16.215,0,21.286v32.722c0,5.071,4.126,9.197,9.197,9.197h56.9   c5.071,0,9.197-4.126,9.197-9.197V21.287C75.295,16.215,71.169,12.089,66.097,12.089z M61.603,18.089L37.647,33.523L13.691,18.089   H61.603z M66.097,57.206h-56.9C7.434,57.206,6,55.771,6,54.009V21.457l29.796,19.16c0.04,0.025,0.083,0.042,0.124,0.065   c0.043,0.024,0.087,0.047,0.131,0.069c0.231,0.119,0.469,0.215,0.712,0.278c0.025,0.007,0.05,0.01,0.075,0.016   c0.267,0.063,0.537,0.102,0.807,0.102c0.001,0,0.002,0,0.002,0c0.002,0,0.003,0,0.004,0c0.27,0,0.54-0.038,0.807-0.102   c0.025-0.006,0.05-0.009,0.075-0.016c0.243-0.063,0.48-0.159,0.712-0.278c0.044-0.022,0.088-0.045,0.131-0.069   c0.041-0.023,0.084-0.04,0.124-0.065l29.796-19.16v32.551C69.295,55.771,67.86,57.206,66.097,57.206z">
                      </path>
                    </g>
                  </svg></span>Email</a></div>
          </div>
          @endif
        </div>
      </div>
      <div  class="article-content-wrapper flex flex-col gap-4 row-start-2">
        <div class="flex flex-col gap-4">
          <h1 class="font-headline-lg font-medium {{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white' }}">
            {!! $article->title !!}
          </h1>
          <h2 class="font-headline-xs {{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-600' : 'text-color-white' }}">
            {!! $article->info !!}
          </h2>
          <div class="uppercase {{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white' }} font-metadata font-medium">By 
            @for ($i = 0; $i < count($article->article_creators); $i++)
            @php
              $item = $article->article_creators[$i];
            @endphp
            @if($i > 0)
                ,
            @endif
            <span class="mr-2">
              <a class="{{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white' }} hover:underline"
                href="{{ route('author_detail', $item->user->id) }}"> {{ $item->user->first_name.' '.$item->user->last_name }}</a></span>
              </span>
            @endfor
            </div>

          <div class="font-metadata flex gap-4 {{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-600' : 'text-color-white' }} flex-col md:block">
            <span>Updated {{ \Carbon\Carbon::parse($article->updated_at, 'UTC')->format('M d, Y')}} {{ \Carbon\Carbon::parse($article->updated_at, 'UTC')->format('g a')}}  UTC</span>      
            <span class="md:ml-2"> Published {{ \Carbon\Carbon::parse($article->created_at, 'UTC')->format('M d, Y')}} {{ \Carbon\Carbon::parse($article->updated_at, 'UTC')->format('g a')}}</span>
          </div>
          @if($socical)
          <div class="social-icons flex h-full w-full items-center">
            <div class="flex  flex-col">
                <div  class="flex gap-3 flex-row items-center justify-between">
                    @if($socical?->twitter)
                    <a class="lg:pl-4 xl:pl-6"
                        target="_blank" href="{{ $socical->twitter }}">
                        <svg width="16" height="16"
                            viewBox="0 0 1400 1027" fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            aria-labelledby="twitter-svg-a11y-label-id">
                            <title id="twitter-svg-a11y-label-id">X icon</title>
                            <path
                                d="M714.163 519.284L1160.89 0H1055.03L667.137 450.887L357.328 0H0L468.492 681.821L0 1226.37H105.866L515.491 750.218L842.672 1226.37H1200L714.137 519.284H714.163ZM569.165 687.828L521.697 619.934L144.011 79.6944H306.615L611.412 515.685L658.88 583.579L1055.08 1150.3H892.476L569.165 687.854V687.828Z"
                                fill="#676767"></path>
                        </svg>
                    </a>
                    @endif
                    @if($socical?->facebook)
                        <a  class="lg:pl-4 xl:pl-6" target="_blank" href="{{ $socical->facebook }}"><svg width="24"
                            height="24" fill="none" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.3447 13.6068L16.863 10.1942H13.621V7.9796C13.621 7.04596 14.0739 6.13593 15.526 6.13593H17V3.2306C17 3.2306 15.6623 3 14.3834 3C11.7132 3 9.96805 4.63437 9.96805 7.59321V10.1942H7V13.6068H9.96805V21.8566C10.5632 21.9509 11.1732 22 11.7945 22C12.4159 22 13.0259 21.9509 13.621 21.8566V13.6068H16.3447Z"
                                fill="#676767"></path>
                        </svg>
                    </a>
                    @endif

                        @if($socical?->instagram)
                        <a  class="lg:pl-4 xl:pl-6" target="_blank" href="{{ $socical->instagram }}"><svg width="22"
                            height="22" fill="none" viewBox="0 0 22 21"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15.6837 4.55102C16.8149 4.55102 17.8998 5.0004 18.6997 5.8003C19.4996 6.6002 19.949 7.6851 19.949 8.81633V16.1837C19.949 17.3149 19.4996 18.3998 18.6997 19.1997C17.8998 19.9996 16.8149 20.449 15.6837 20.449H8.31633C7.1851 20.449 6.1002 19.9996 5.3003 19.1997C4.5004 18.3998 4.05102 17.3149 4.05102 16.1837V8.81633C4.05102 7.6851 4.5004 6.6002 5.3003 5.8003C6.1002 5.0004 7.1851 4.55102 8.31633 4.55102H15.6837ZM15.6837 3H8.31633C6.77516 3.0046 5.29842 3.61887 4.20865 4.70865C3.11887 5.79842 2.5046 7.27516 2.5 8.81633V16.1837C2.5046 17.7248 3.11887 19.2016 4.20865 20.2914C5.29842 21.3811 6.77516 21.9954 8.31633 22H15.6837C17.2248 21.9954 18.7016 21.3811 19.7914 20.2914C20.8811 19.2016 21.4954 17.7248 21.5 16.1837V8.81633C21.4954 7.27516 20.8811 5.79842 19.7914 4.70865C18.7016 3.61887 17.2248 3.0046 15.6837 3Z"
                                fill="#676767"></path>
                            <path
                                d="M17.0294 6.35297C16.8083 6.35297 16.5923 6.41852 16.4085 6.54132C16.2247 6.66413 16.0814 6.83868 15.9968 7.04291C15.9122 7.24713 15.8901 7.47185 15.9332 7.68865C15.9763 7.90546 16.0828 8.1046 16.2391 8.26091C16.3954 8.41721 16.5945 8.52366 16.8113 8.56678C17.0282 8.60991 17.2529 8.58778 17.4571 8.50318C17.6613 8.41859 17.8359 8.27534 17.9587 8.09154C18.0815 7.90775 18.147 7.69166 18.147 7.47061C18.147 7.32384 18.1181 7.17851 18.062 7.04291C18.0058 6.90731 17.9235 6.7841 17.8197 6.68032C17.7159 6.57653 17.5927 6.49421 17.4571 6.43804C17.3215 6.38187 17.1762 6.35297 17.0294 6.35297Z"
                                fill="#676767"></path>
                            <path
                                d="M11.9902 9.03738C12.6752 9.037 13.3449 9.2398 13.9147 9.62012C14.4844 10.0005 14.9285 10.5412 15.1908 11.174C15.4531 11.8068 15.5219 12.5032 15.3883 13.175C15.2548 13.8469 14.925 14.4641 14.4406 14.9484C13.9562 15.4328 13.3391 15.7626 12.6672 15.8962C11.9953 16.0297 11.299 15.961 10.6662 15.6987C10.0334 15.4363 9.49261 14.9922 9.11228 14.4225C8.73196 13.8528 8.52916 13.183 8.52954 12.498C8.5311 11.5807 8.8962 10.7014 9.54486 10.0527C10.1935 9.40404 11.0729 9.03894 11.9902 9.03738ZM11.9902 7.47059C10.9958 7.47253 10.0243 7.76919 9.19848 8.32309C8.37264 8.87699 7.72954 9.66327 7.35043 10.5826C6.97133 11.5018 6.87324 12.5129 7.06856 13.4879C7.26389 14.4629 7.74386 15.3582 8.44782 16.0605C9.15178 16.7628 10.0481 17.2407 11.0236 17.4337C11.9991 17.6268 13.0099 17.5263 13.9283 17.1451C14.8467 16.7638 15.6315 16.1189 16.1834 15.2917C16.7354 14.4646 17.0298 13.4924 17.0294 12.498C17.0291 11.8369 16.8985 11.1823 16.6451 10.5717C16.3916 9.9611 16.0202 9.40646 15.5522 8.93951C15.0841 8.47257 14.5286 8.10248 13.9174 7.85043C13.3062 7.59838 12.6513 7.4693 11.9902 7.47059Z"
                                fill="#676767"></path>
                        </svg>
                    </a>
                    @endif
                    @if($socical?->youtube)
                    <a class="lg:pl-4 xl:pl-6" target="_blank" href="{{ $socical->youtube }}"><svg width="24"
                            height="24" fill="none" viewBox="0 0 24 19"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M23.4986 5.65459C23.2227 4.60964 22.4095 3.78682 21.3768 3.50753C19.505 3 12 3 12 3C12 3 4.49499 3 2.62318 3.50753C1.59071 3.78682 0.777377 4.60964 0.501423 5.65459C0 7.5485 0 11.5001 0 11.5001C0 11.5001 0 15.4517 0.501423 17.3454C0.777377 18.3904 1.59071 19.2134 2.62318 19.4927C4.49499 20 12 20 12 20C12 20 19.505 20 21.3768 19.4927C22.4095 19.2134 23.2227 18.3904 23.4986 17.3454C24 15.4517 24 11.5001 24 11.5001C24 11.5001 24 7.5485 23.4986 5.65459ZM9.59988 15.143V7.85719L15.8352 11.5001L9.59988 15.143Z"
                                fill="#676767"></path>
                        </svg>
                    </a>
                    @endif
                    @if($socical?->tiktok)
                    <a class="lg:pl-4 xl:pl-6" target="_blank" href="{{ $setting->tiktok }}"><svg width="24"
                            height="24" fill="none" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.78998 17.745C11.2577 17.745 12.4475 16.61 12.4475 14.8745V2H15.6346C15.4559 4.34796 17.6168 6.61603 20 6.56415V9.80125C17.9619 9.80125 16.2288 8.87041 15.6256 8.35382V14.8745C15.6256 17.745 13.5349 21 9.78998 21C6.04501 21 4 17.745 4 14.8745C4 10.8231 7.96936 8.47349 10.5984 9.04778V12.3449C10.4661 12.2944 10.125 12.2197 9.83453 12.2197C8.35462 12.1608 7.13245 13.4572 7.13245 14.8745C7.13245 16.4598 8.32227 17.745 9.78998 17.745Z"
                                fill="#676767"></path>
                        </svg>
                    </a>
                    @endif
                    
                        @if($socical?->telegram)
                        <a aria-label="Telegram" data-position="Telegram"
                        class="lg:pl-4 xl:pl-6" target="_blank" href="{{ $setting->telegram }}"><svg width="24"
                            height="24" viewBox="0 0 27 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.5 21L23.5 12L2.5 3V10L17.5 12L2.5 14V21Z"
                                fill="#676767"></path>
                        </svg>
                    </a>
                  
                    @endif
                </div>
            </div>
          </div>
          @endif
        </div>
        <div class="article-content-wrapper {{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white' }} flex flex-col justify-end gap-4 row-start-3 empty:hidden">
          {!! $article->content !!}
        </div>
        <div class="mt-6 border-t pt-4">
          <div class="flex flex-wrap gap-3">
            @foreach ($reactions as $emoji => $label)
              @php
                $count = \App\Models\ArticleReaction::where(['article_id'=> $article->id])->where(['type'=>  $label])->count() ?? 0;
              @endphp
              <button wire:click="react_post('{{ $label }}')" type="button" class="flex items-center px-3 py-2 border rounded-full hover:bg-gray-100 transition text-sm">
                <span class="text-xl mr-1">{{ $emoji }}</span>
                <span class="{{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white' }}">{{ $count }}</span>
              </button>
            @endforeach
            </div>
        </div>
        
        <div class="py-2 mt-3">
          <hr class="shrink-0 border-none w-full h-divider {{ $setting->theme == 'white' ? 'bg-black' : 'bg-white' }}" role="separator" />
        </div>
        <form action="{{ route('subscribe', 'test') }}" method="post" class="flex flex-col gap-2 " style="background: #f9f9f9;">
          @csrf
          <div
            class="border p-6 md:p-10 lg:p-6">
            <span
              class="{{ $setting->theme == 'white' ? 'text-color-dark-grey' : 'text-color-white' }} font-headline-xs font-medium ">Don't miss another story.</span><span
              class="block font-headline-3xs font-normal {{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white' }}">Subscribe to the {{ $article->newsletter->title }} Newsletter
              today
              <!-- -->.
              <!-- --> 
              <a class="font-medium {{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white' }}" href="{{ route('newsletters') }}">See all newsletters</a>
            </span>
            <div class="flex flex-col md:flex-row gap-4 justify-start items-center pt-2">
              <div class="group flex flex-col data-[hidden=true]:hidden w-full relative justify-end data-[has-label=true]:mt-[calc(theme(fontSize.small)_+_10px)]">
                <div class="h-full flex flex-col">
                  <div
                    class="relative w-full inline-flex tap-highlight-transparent flex-row items-center shadow-sm px-3 gap-3 border-medium border-default-200 data-[hover=true]:border-default-400 group-data-[focus=true]:border-default-foreground h-10 min-h-10 rounded-small transition-background !duration-150 transition-colors motion-reduce:transition-none !h-12"
                    style="cursor:text">
                    <div class="inline-flex w-full items-center h-full box-border">
                      <input value="{{ $article->newsletter_id }}" name="letter_id[]" hidden/>
                      <input
                        class="w-full font-normal bg-transparent !outline-none placeholder:text-foreground-500 focus-visible:outline-none data-[has-start-content=true]:ps-1.5 data-[has-end-content=true]:pe-1.5 file:cursor-pointer file:bg-transparent file:border-0 autofill:bg-transparent bg-clip-text text-small border-transparent focus:border-transparent focus:ring-0 focus:outline-none font-label"
                        aria-label="Enter your Email" type="email" placeholder="Enter your Email" name="email"
                       ></div>
                  </div>
                </div>
              </div>
            <button type="submit"
            class="z-0 group relative inline-flex items-center justify-center box-border appearance-none select-none whitespace-nowrap font-normal subpixel-antialiased overflow-hidden tap-highlight-transparent data-[pressed=true]:scale-[0.97] outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 px-6 min-w-24 h-12 text-medium gap-3 rounded-large [&amp;>svg]:max-w-[theme(spacing.8)] transition-transform-colors-opacity motion-reduce:transition-none text-default-foreground data-[hover=true]:opacity-hover w-full md:w-auto bg-new-yellow">
            <div class="flex gap-2 p-4 pl-6 items-center">
              <span class="{{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white' }} font-label font-medium">Sign me
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
            </div>
            <span class="pt-4 font-metadata {{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-600' : 'text-color-white' }}"><span class="text-color-dark-grey ">By signing up, you will
                receive emails about 100xinsider's products and you agree to our </span>
                <a
                class="border-b-[1px] border-black !no-underline" href="{{ route('terms') }}">
                <span class="{{ $setting->theme == 'white' ? 'text-color-dark-grey' : 'text-color-white' }}">terms of
                  use</span>
                </a>
                <span class="{{ $setting->theme == 'white' ? 'text-color-dark-grey ' : 'text-color-white' }} "> and </span>
                <a
                class="border-b-[1px] border-black !no-underline" href="{{ route('privacy') }}">
                <span class="{{ $setting->theme == 'white' ? 'text-color-dark-grey' : 'text-color-white' }}">privacy
                  policy</span>
                </a>
                <span class=" font-metadata {{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-600' : 'text-color-white' }}">.</span></span>
          </div>
        </form>

        @for ($i = 0; $i < count($article->article_creators); $i++)
        @php
          $item = $article->article_creators[$i];
        @endphp
          <div class="article-content-wrapper mt-6 flex gap-8 justify-between">
            <div class="flex flex-col">
              <h5 class="font-headline-sm font-medium {{ $setting->theme == 'white' ? 'text-color-dark-grey' : 'text-color-white' }}">
                <a class="hover:underline" href="{{ route('author_detail', $item->user->id) }}"> 
                 {{ $item->user->first_name.' '.$item->user->last_name }}
                </a>
              </h5>
              <p class="my-2 line-clamp-3 {{ $setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-600' : 'text-color-white' }} font-body">
                 {!! $item->user->info !!}
              </p>
              <div class="mt-2 flex flex-wrap gap-2 items-center [&amp;_svg]:w-3 [&amp;_svg]:h-3">
               @if($item->user->twitter)
                <a target="_blank"
                  title="X"
                  class="w-6 h-6 rounded-full bg-charcoal-25 cursor-pointer inline-flex justify-center items-center"
                  href="{{ $item->user->twitter }}">
                  <svg width="16" height="16" viewBox="0 0 1400 1027" fill="none"
                    xmlns="http://www.w3.org/2000/svg" aria-labelledby="twitter-svg-a11y-label-id">
                    <title id="twitter-svg-a11y-label-id">X icon</title>
                    <path
                      d="M714.163 519.284L1160.89 0H1055.03L667.137 450.887L357.328 0H0L468.492 681.821L0 1226.37H105.866L515.491 750.218L842.672 1226.37H1200L714.137 519.284H714.163ZM569.165 687.828L521.697 619.934L144.011 79.6944H306.615L611.412 515.685L658.88 583.579L1055.08 1150.3H892.476L569.165 687.854V687.828Z"
                      fill="#262626"></path>
                  </svg>
                </a>
                @endif
                @if( $item->user->linkedin)
                <a target="_blank" title="LinkedIn"
                  class="w-6 h-6 rounded-full bg-charcoal-25 cursor-pointer inline-flex justify-center items-center"
                  href="{{ $item->user->linkedin }}">
                  <svg width="24" height="24" fill="none" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M2.25362 9.21772H6.53986V22.1164H2.25362V9.21772ZM4.42543 3C2.95843 3 2 3.9631 2 5.22719C2 6.46529 2.93038 7.45638 4.36933 7.45638H4.39667C5.89171 7.45638 6.82276 6.46524 6.82276 5.22719C6.79471 3.9631 5.89176 3 4.42543 3ZM17.0638 8.91471C14.7886 8.91471 13.7693 10.1661 13.2007 11.0438V9.21772H8.91314C8.9699 10.4278 8.91314 22.1164 8.91314 22.1164H13.2007V14.9129C13.2007 14.527 13.2287 14.1427 13.3415 13.8663C13.652 13.0961 14.3574 12.2985 15.5407 12.2985C17.0931 12.2985 17.7131 13.4819 17.7131 15.2151V22.1163H22V14.72C22 10.7581 19.8856 8.91471 17.0638 8.91471Z"
                      fill="#262626"></path>
                  </svg>
                </a>
                @endif
                @if($item->user->email)
                <a target="_blank" title="Email"
                  class="w-6 h-6 rounded-full bg-charcoal-25 cursor-pointer inline-flex justify-center items-center"
                  href="mailto:{{ $item->user->email }}">
                  <svg width="16" height="16" fill="#262626" version="1.1" id="Capa_1"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75.294 75.294">
                    <g>
                      <path
                        d="M66.097,12.089h-56.9C4.126,12.089,0,16.215,0,21.286v32.722c0,5.071,4.126,9.197,9.197,9.197h56.9   c5.071,0,9.197-4.126,9.197-9.197V21.287C75.295,16.215,71.169,12.089,66.097,12.089z M61.603,18.089L37.647,33.523L13.691,18.089   H61.603z M66.097,57.206h-56.9C7.434,57.206,6,55.771,6,54.009V21.457l29.796,19.16c0.04,0.025,0.083,0.042,0.124,0.065   c0.043,0.024,0.087,0.047,0.131,0.069c0.231,0.119,0.469,0.215,0.712,0.278c0.025,0.007,0.05,0.01,0.075,0.016   c0.267,0.063,0.537,0.102,0.807,0.102c0.001,0,0.002,0,0.002,0c0.002,0,0.003,0,0.004,0c0.27,0,0.54-0.038,0.807-0.102   c0.025-0.006,0.05-0.009,0.075-0.016c0.243-0.063,0.48-0.159,0.712-0.278c0.044-0.022,0.088-0.045,0.131-0.069   c0.041-0.023,0.084-0.04,0.124-0.065l29.796-19.16v32.551C69.295,55.771,67.86,57.206,66.097,57.206z">
                      </path>
                    </g>
                  </svg>
                </a>
              @endif
            </div> 
                </div>
            <a href="{{ route('author_detail', $item->user->id) }}"> 
              <img  class="rounded-full min-w-16 min-h-16 w-16 h-16" style="color: transparent;"
                 src="{{ $item->user->image }}"></a>
          </div>
        @endfor
    </div>
    @if($advert)
    <div class="col-span-4 px-6 flex-col h-full row-start-2 row-end-5 justify-between hidden lg:flex lg:col-start-9 xl:col-start-13">
      <div class="relative">
       
        @livewire('widget.wide-advert-component', ['type'=> 'article_detail'])

      </div>
    </div>
    @endif
    
    <script>
      document.addEventListener("click", function (event) {
    const shareButton = event.target.closest("#share-button");

    if (shareButton) {
        const url = "{{ route('article_detail', [$article->slug, $article->id]) }}"; // Laravel Blade inside JS

            navigator.clipboard.writeText(url)
                .then(() => {
                    alert("✅ Link copied to clipboard!");
                })
                .catch(err => {
                    console.error("❌ Failed to copy:", err);
                });
        }
    });

      </script>
      
  </section>
