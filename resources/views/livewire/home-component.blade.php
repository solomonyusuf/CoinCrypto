<div>
  @if($show)
  <div class="bg-primary">
    <div class="d-flex relative shadow-md container-fluid justify-center items-center">
      <div class="row d-flex justify-content-between justify-content-center items-center pt-1 pb-1 w-100">
        <div class="col-md-5 col-sm-12 justify-content-center ">
          <h3 class="text-white fw-semibold mt-4 mb-1">
            {{ $event->title }}
          </h3>
        </div>
        <div class="col-md-7 col-sm-12 justify-content-center ">
          <div class="countdown-container gap-2">
            <div class="d-flex gap-2">
                <div class="countdown-box">
                    <span id="days">03</span>
                    <span class="countdown-label">DAY</span>
                </div>
                <div class="countdown-box">
                    <span id="hours">08</span>
                    <span class="countdown-label">HOUR</span>
                </div>
                <div class="countdown-box">
                    <span id="minutes">02</span>
                    <span class="countdown-label">MIN</span>
                </div>
                <div class="countdown-box">
                    <span id="seconds">58</span>
                    <span class="countdown-label">SEC</span>
                </div>
            </div>
            <a href="{{ $event->category }}" class="register-btn ms-3">Register Now</a>
            
        </div>
        </div>

      </div>
      <button wire:click="showEvent" style="background:transparent; border:0;" class="close-btn mt-2">
        <svg fill="#FFFFFF" height="30" viewBox="0 0 24 24" width="30" xmlns="http://www.w3.org/2000/svg"><path d="M6.40001 18.3076L5.69226 17.5999L11.2923 11.9999L5.69226 6.39989L6.40001 5.69214L12 11.2921L17.6 5.69214L18.3078 6.39989L12.7078 11.9999L18.3078 17.5999L17.6 18.3076L12 12.7076L6.40001 18.3076Z" fill="#FFFFFF"></path></svg>
      </button>
     </div>
  </div>
  @endif
  <div class="container mt-4">
    <div class="row justify-content-between">
      <div class="col-md-8 border-bottom">
        <a {{ route('article_detail', [$latest->slug, $latest->id]) }} class="card">
          <img class="card-img-top img-responsive" src="{{ asset($latest->image) }}" alt="Card image cap">
          <div class="card-body">
            <h3 class="card-title">
              {{ $latest->title }}
            </h3>
           <div class="d-flex gap-2">
            <span class="text-uppercase d-flex align-items-center">
              By
              @for ($i = 0; $i < count($latest?->article_creators); $i++)
              @if($i != 0)
              ,
              @endif  
              {{ $latest?->article_creators[$i]->user->first_name.' '.$latest?->article_creators[$i]->user->last_name  }}
              @endfor
             </span>
             <span>
              {{ \Carbon\Carbon::parse($latest->created_at)->diffForHumans() }}
             </span>
           </div>
           
            
          </div>
        </a>
      </div>
      <div class="col-md-4 border-bottom">
        <div  class="card">
          <div class="video-container">
            @if (Str::contains($video->link, 'youtube.com') || Str::contains($data->link, 'vimeo.com'))
                <!-- YouTube/Vimeo Embed -->
                <iframe src="{{ $video->link }}" frameborder="0" allowfullscreen></iframe>
            @else
                <!-- Direct MP4 Player -->
                <video controls>
                    <source src="{{ $video->link }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            @endif
        </div>
          <div class="card-body">
            <h3 class="card-title">
             {{ $video->title }}
            </h3>
           <div class="d-flex gap-2">
            <span class="d-flex align-items-center">
              {!! $video->description !!}
            </span>
           </div>
           
            
          </div>
        </div>
      </div>
    </div>
    @if(count($latests) > 0)
    <div class="row">
      <div class="card data-shadow rounded-3 mb-7">
        <div class="row">
          <h4 class="fw-semibold mb-4">Latest News</h4>
          @foreach ($latests as $latest)

          <div class="row">
            <div class="col-lg-6 mb-3">
              <a href="{{ route('article_detail', [$latest->slug, $latest->id]) }}">
  
                <div style="background:url('{{ asset($latest->image)}}')" class="blog-bg d-flex flex-column justify-content-between p-9 h-100 rounded-start-3 flex-grow-1">
                  <img
                    src="{{ $latest?->article_creators->where(['originator'=> true])->first()?->user?->image ?? $latest?->article_creators->first()?->user?->image}}"
                    alt="user" width="44" height="44" class="rounded-circle">
                </div>
              </a>
            </div>
            <div class="col-lg-6 mb-3">
              <div class="p-7 p-lg-5 border flex-grow-1 rounded-end-3">
                <div class="py-4 d-flex flex-column gap-3">
                  <div class="d-flex">
  
                    <p class="fs-2 px-2 rounded-pill bg-muted bg-opacity-25 text-dark mb-0">
                      {{ $latest?->article_category?->title }}
                    </p>
                  </div>
                  <a href="{{ route('article_detail', [$latest->slug, $latest->id]) }}">
  
                    <h2 class="fw-bolder fs-14 mb-0">
                      {{ $latest->title }}
                    </h2>
                  </a>
                  <p class="mb-0">
                    {!! \Illuminate\Support\Str::limit($latest->content, '150', '...') !!}
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex gap-9">
                      <div class="d-flex gap-2">
                        <i class="ti ti-eye fs-5 text-dark"></i>
                        <p class="mb-0 fs-2 fw-semibold text-dark">{{ $latest->views }}</p>
                      </div>
                      <div class="d-flex gap-2">
                        <i class="ti ti-user fs-5 text-dark"></i>
                        <p class="mb-0 fs-2 fw-semibold text-dark">{{ count($latest?->article_creators)}}</p>
                      </div>
                    </div>
                    <div class="d-flex gap-2">
                      <i class="ti ti-circle"></i>
                      <p class="mb-0 fs-2 fw-semibold text-dark">
                        {{ \Carbon\Carbon::parse($latest->created_at)->toFormattedDateString()}}&nbsp;
                        {{ \Carbon\Carbon::parse($latest->created_at)->diffForHumans() }}
  
                      </p>
                    </div>
                  </div>
                  <p class="mb-0 fs-2 fw-semibold text-dark text-uppercase">by
                    @foreach ($latest?->article_creators as $item)
  
                    @if($item != $latest?->article_creators[0])
                    ,
                    @endif
                    {{$item?->user?->first_name.' '.$item?->user?->last_name}}
  
                    @endforeach
                  </p>
                </div>
              </div>
            </div>
          </div>


          @endforeach
        </div>
    </div>
  
    @endif
     
    {{-- <div class="row">
      <h4 class="fw-semibold mb-4">Top Stories</h4>
      @foreach ($top as $data)
      <div class="col-md-6 col-lg-6">
        <div style="background:url('{{ asset($data->image) }}');"
          class="card blog blog-img-one position-relative overflow-hidden hover-img">
          <div class="card-body position-relative">
            <div class="d-flex flex-column justify-content-between h-100">
              <div class="d-flex align-items-start justify-content-between">
                <div class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="author">
                  <img src="{{ $data?->article_creators->where(['originator'=> true])->first()?->user?->image ??  $data?->article_creators->first()?->user?->image}}"
                    class="rounded-circle img-fluid" width="40" height="40">
                </div>
                <span class="badge text-bg-primary fs-2 fw-semibold">{{ $data->article_category?->title}}</span>
              </div>
              <div>
                <a href="{{ route('article_detail', [$data->slug, $data->id]) }}"
                  class="fs-7 my-4 fw-semibold text-white d-block lh-sm text-primary">
                  {{ $data->title }}
                </a>
                <div class="d-flex align-items-center gap-4">
                  <div class="d-flex align-items-center gap-2 text-white fs-3 fw-normal">
                    <i class="ti ti-eye fs-5"></i>
                    {{ $data->views }}
                  </div>
                  <div class="d-flex align-items-center gap-2 text-white fs-3 fw-normal">
                    <i class="ti ti-user fs-5"></i>
                    {{ count($data?->article_creators)}}
                  </div>
                  <div class="d-flex align-items-center gap-1 text-white fw-normal ms-auto">
                    <i class="ti ti-point"></i>
                    <small>
                      {{ \Carbon\Carbon::parse($data->created_at)->toFormattedDateString()}}&nbsp;
                      {{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}

                    </small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div> --}}

    <div class="row mt-4 border-bottom">
      <div class="col-md-4">
        @if($categories)
        @if(count($categories) > 0)
        @foreach ($categories as $category)
        @if(count($category?->articles) > 0)
        <div class="row">
          <h4 class="mb-1 fs-4 fw-semibold mb-3">Latest {{ $category->title }} News</h4>
          <?php
              $list = \App\Models\Article::orderByDesc('created_at')->where(['category_id'=> $category->id])->limit(10)->get();
          ?>
          <div class="position-relative mb-2 mt-2">
            @foreach ($list as $data)
            <div class="d-flex align-items-center justify-content-between mb-7 border-bottom">
              <div class="d-flex py-2">
                <div>
                  <p class="fs-3 mb-2">
                    {{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}
                  </p>
                  <a href="{{ route('article_detail', [$data->slug, $data->id]) }}">
                    <h6 class="mb-1 fs-4 fw-semibold">{{ $data->title }}</h6>
                  </a>
                </div>
              </div>
            </div>
            @endforeach
  
  
          </div>
        </div>
        @endif
        @endforeach
  
        @endif
        @endif
      </div>
      <div class="col-md-8 col-lg-8">
        <h4 class="fw-semibold fs-4 mb-4 mt-2">Top Stories</h4>
        <div class="row justify-content-center">
        @foreach ($top as $data)
        <div class="col-md-6 col-sm-12 border-bottom">
          <a href="{{ route('article_detail', [$data->slug, $data->id]) }}" class="gap-1 border-0 shadow-0 d-flex py-2">
            <div class="card-body d-flex gap-2">
              <div class="text-warning round-48 rounded-1  justify-content-center">
                <img src="{{ asset($data->image) }}" style="height:50px;width:50px;border-radius:25px;" alt="">
              </div>
              <div class="">
                <h4 class="fs-4 mb-0">{{ $data->title }}</h4>
                <p class="mb-0 mt-2">
                  {{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}
    
                </p>
              </div>
            </div>
          </a>
          {{-- <div class="card overflow-hidden hover-img">
            <div class="position-relative">
              <a href="{{ route('article_detail', [$data->slug, $data->id]) }}">
                <img src="{{ asset($data->image) }}" class="card-img-top" alt="">
              </a>
  
              <img
                src="{{ $data?->article_creators->where(['originator'=> true])->first()?->user?->image ?? $data?->article_creators->first()?->user?->image }}"
                alt="modernize-img" class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9"
                width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top">
            </div>
            <div class="card-body p-4">
              <span class="badge text-bg-light fs-2 py-1 px-2 lh-sm  mt-3">
                {{ $data?->article_category?->title }}
              </span>
              <a href="{{ route('article_detail', [$data->slug, $data->id]) }}"
                class="d-block my-4 fs-5 text-dark fw-semibold link-primary">
                {{ $data->title }}
              </a>
              <div class="d-flex align-items-center gap-4">
                <div class="d-flex gap-2">
                  <i class="ti ti-eye fs-5 text-dark"></i>
                  <p class="mb-0 fs-2 fw-semibold text-dark">{{ $data->views }}</p>
                </div>
                <div class="d-flex gap-2">
                  <i class="ti ti-user fs-5 text-dark"></i>
                  <p class="mb-0 fs-2 fw-semibold text-dark">{{ count($data?->article_creators)}}</p>
                </div>
                <div class="d-flex align-items-center fs-2 ms-auto">
                  <i class="ti ti-point text-dark"></i>
                  {{ \Carbon\Carbon::parse($data->created_at)->toFormattedDateString()}}&nbsp;
                  {{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}
  
                </div>
              </div>
            </div>
          </div> --}}
        </div>
        @endforeach
      </div>
      {{ $top->links() }} 
      </div>
    </div>

    <div class="mt-4 border-bottom">
      <h5 class="fw-bold">Newsletters  </h5>
      
      <form action="{{ route('subscribe', 'test') }}" method="post" class="row mb-3">
        @csrf
          <!-- Subscription Box -->
          <div class="col-md-4">
              <div class="subscribe-box">
                  <h5><strong>Don't miss another story.</strong></h5>
                  <p>Subscribe to the CoinCrypto Newsletter today.</p>
                  <input type="email" name="email" class="form-control mb-2" placeholder="Enter your Email">
                  <button type="submit" class="btn btn-primary w-100">Sign  up  →</button>
                  <small class="d-block mt-2">
                      By signing up, you will receive emails about CoinCrypto products and you agree to our 
                      <a href="#">terms of use</a> and <a href="#">privacy policy</a>.
                  </small>
              </div>
          </div>
  
          <!-- Newsletter Options -->
          <div class="col-md-8 mt-2">
            <div class="row justify-content-between">
                
            @foreach ($newsletters as $data)
             <div class="col-md-5 border-bottom">
                    <div class="newsletter-item py-2">
                        <div class="d-flex gap-2">
                          <input name="letter_id[]" value="{{ $data->id }}" type="checkbox"> <h6 class="fw-semibold"/>{{ $data->title }}</h6>
                        </div>
                        <p>{!! $data->description !!}</p>
                    </div>
                </div>
            
            @endforeach
          </div> 
          </div>
      </form>
   </div>

  <div class="col-md-12 col-lg-12">
    <h4 class="fw-semibold fs-4 mb-4 mt-2">Most Read</h4>
    <div class="row justify-content-center gap-1">
      <div class="col-md-12 col-sm-12 border-bottom">
        <?php
          $data = $articles[0];
          $articles->shift();
          ?>
        <a href="{{ route('article_detail', [$data->slug, $data->id]) }}" class="card gap-1 border-0 shadow-0 d-flex py-2 mb-3">
          <div class="card-body d-flex gap-2">
            <div class="">
              <div class="d-flex gap-2">
                <div class="text-bg-primary rounded-pill badge justify-content-center" style="height:30px;">
                  {{ $count++ }}
                </div>
              <h4 class="fs-4 mb-0">{{ $data->title }}</h4>
              </div>
              <div class="mt-3">
                <p>
                  {!!  \Illuminate\Support\Str::limit($data->content, 300, '..') !!}
                </p>

                <span class="fw-semibold text-uppercase d-flex align-items-center">
                  By
                  @for ($i = 0; $i < count($data?->article_creators); $i++)
                  @if($i != 0)
                  ,
                  @endif  
                  {{ $data?->article_creators[$i]->user->first_name.' '.$data?->article_creators[$i]->user->last_name  }}
                  @endfor
                </span>
                
              </div>
            </div>
            <div class=" justify-content-center" >
              <img src="{{ asset($data->image) }}" style="height:300px;" class="card-img-top img-responsive"  alt="">
              
            </div>
            
          </div>
        </a>

      </div>
        @foreach ($articles as $data)
        <div class="col-md-6 col-sm-12 border-bottom">
          <a href="{{ route('article_detail', [$data->slug, $data->id]) }}" class="gap-1 border-0 shadow-0 d-flex py-2">
            <div class="card-body d-flex gap-2">
              <div class="text-bg-primary rounded-pill badge justify-content-center" style="height:30px;">
                {{ $count++ }}
              </div>
              <div class="">
                <h4 class="fs-4 mb-0">{{ $data->title }}</h4>
                <div class="mt-3">
                  <span class="fw-semibold text-uppercase d-flex align-items-center">
                    By
                    @for ($i = 0; $i < count($data?->article_creators); $i++)
                    @if($i != 0)
                    ,
                    @endif  
                    {{ $data?->article_creators[$i]->user->first_name.' '.$data?->article_creators[$i]->user->last_name  }}
                    @endfor
                  </span>
                  
                </div>
              </div>
            </div>
          </a>
          {{-- <div class="card overflow-hidden hover-img">
            <div class="position-relative">
              <a href="{{ route('article_detail', [$data->slug, $data->id]) }}">
                <img src="{{ asset($data->image) }}" class="card-img-top" alt="">
              </a>

              <img
                src="{{ $data?->article_creators->where(['originator'=> true])->first()?->user?->image ?? $data?->article_creators->first()?->user?->image }}"
                alt="modernize-img" class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9"
                width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top">
            </div>
            <div class="card-body p-4">
              <span class="badge text-bg-light fs-2 py-1 px-2 lh-sm  mt-3">
                {{ $data?->article_category?->title }}
              </span>
              <a href="{{ route('article_detail', [$data->slug, $data->id]) }}"
                class="d-block my-4 fs-5 text-dark fw-semibold link-primary">
                {{ $data->title }}
              </a>
              <div class="d-flex align-items-center gap-4">
                <div class="d-flex gap-2">
                  <i class="ti ti-eye fs-5 text-dark"></i>
                  <p class="mb-0 fs-2 fw-semibold text-dark">{{ $data->views }}</p>
                </div>
                <div class="d-flex gap-2">
                  <i class="ti ti-user fs-5 text-dark"></i>
                  <p class="mb-0 fs-2 fw-semibold text-dark">{{ count($data?->article_creators)}}</p>
                </div>
                <div class="d-flex align-items-center fs-2 ms-auto">
                  <i class="ti ti-point text-dark"></i>
                  {{ \Carbon\Carbon::parse($data->created_at)->toFormattedDateString()}}&nbsp;
                  {{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}

                </div>
              </div>
            </div>
          </div> --}}
        </div>
        @endforeach
    </div>
  </div>


  </div>

 <div class="row border-bottom py-12">
  <div class="bg-primary mb-10 mt-3">
    <div class="d-flex relative shadow-md container-fluid justify-center items-center">
      <div class="row d-flex justify-content-between justify-content-center items-center pt-1 pb-1 w-100 mb-3">
        <div class="col-md-5 col-sm-12 justify-content-center ">
          <h3 class="text-white fw-semibold mt-4 mb-1">
            {{ $event->title }}
          </h3>
          <h6 class="mb-3 text-white">
            Check out the latest coverage and meet our top speakers. 
          </h6>
          <a href="{{ $event->category }}" class="register-btn mb-2 mt-2 ms-3">
            <span class="text-color-white font-label font-medium leading-6">Learn More</span>
            <svg class="" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg" fill="white">
              <path d="M5.5 13H16.67L11.79 17.88C11.4 18.27 11.4 18.91 11.79 19.3C12.18 19.69 12.81 19.69 13.2 19.3L19.79 12.71C20.18 12.32 20.18 11.69 19.79 11.3L13.21 4.69997C12.82 4.30997 12.19 4.30997 11.8 4.69997C11.41 5.08997 11.41 5.71997 11.8 6.10997L16.67 11H5.5C4.95 11 4.5 11.45 4.5 12C4.5 12.55 4.95 13 5.5 13Z" fill="white"></path>
          </svg>
          </a>
        </div>
        <div class="col-md-7 col-sm-12">
          <img src="{{ asset($event->image) }}" style="height:250px;width:250px;position:absolute;border-radius:125px;" class="card-img-top img-responsive"  alt="">
              
        </div>

      </div>
     </div>
  </div>
</div>

<div class="container">
  <div class="col-md-12 col-lg-12">
    <h4 class="fw-semibold fs-4 mb-4 mt-2">Podcasts</h4>
    <div class="row justify-content-center gap-1">

        @foreach ($podcasts as $data)
        <div class="col-md-6 col-sm-12 border-bottom">
          <a href="{{ route('podcast_detail', [$data->id]) }}" class="gap-1 border-0 shadow-0 d-flex py-2">
            <div class="card-body d-flex gap-2">
              <div class="">
                <h4 class="fs-4 mb-0">{{ $data->title }}</h4>
                <div class="mt-3">
                  {!! \Illuminate\Support\Str::limit($data->description, 50, '..')!!}
                </div>
              </div>
            </div>
          </a>
        </div>
        @endforeach
    </div>
 
  </div>

  <div class="row mt-3">
    @foreach ($categories_body as $category)
        <?php
        $list2 = \App\Models\Article::orderBy('views', 'desc')->where(['category_id'=> $category->id])->limit(4)->get();
        $item = $list2->first();  
        $list2 = $list2->slice(1); 

      
    ?>
    @if(count($list2) > 0)
    <div class="col-md-6">
      <div class="container my-2">
        <h6 class="text-uppercase fw-bold text-muted">{{ $category->title}}</h6>
    
        <div class="row">
         
            <!-- Featured Article -->
            <div class="col-md-6">
                <div class=" shadow-0 border-0">
                    <img src="{{ asset($item?->image) }}" class="card-img-top" alt="Featured News">
                    <div class="card-body shadow-0 border-0 p-0 mt-2">
                        <h2 class="news-title">{{ $item?->title}}</h2>
                        <p class="news-meta">{{ \Carbon\Carbon::parse($item?->created_at)->diffForHumans() }}</p>
                    </div>
                </div>
            </div>
    
            <!-- Side Articles -->
            <div class="col-md-6">
              @foreach ($list2 as $article)
                <div class="news-item">
                  <h5 class="news-title">{{ $article->title }}</h5>
                  <p class="news-meta">{{ \Carbon\Carbon::parse($article?->created_at)->diffForHumans() }}</p>
              </div>
              @endforeach
            </div>
        </div>
    </div>
   </div>
   @endif
    @endforeach
    
  </div>
</div>




  <script>
    function startCountdown(duration) {
        let countdown = duration;
        setInterval(() => {
            let days = Math.floor(countdown / (60 * 60 * 24));
            let hours = Math.floor((countdown % (60 * 60 * 24)) / (60 * 60));
            let minutes = Math.floor((countdown % (60 * 60)) / 60);
            let seconds = countdown % 60;

            document.getElementById("days").textContent = String(days).padStart(2, '0');
            document.getElementById("hours").textContent = String(hours).padStart(2, '0');
            document.getElementById("minutes").textContent = String(minutes).padStart(2, '0');
            document.getElementById("seconds").textContent = String(seconds).padStart(2, '0');

            if (countdown > 0) countdown--;
        }, 1000);
    }
    startCountdown({{ $countdownSeconds }});
</script>
</div>