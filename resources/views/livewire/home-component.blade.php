<div>
  <div class="container-fluid mt-4">

    @if(count($latests) > 0)
    <div class="row">

      <div class="card data-shadow rounded-3 mb-7">
        <div class="row">
          <h4 class="fw-semibold mb-4">Latest News</h4>
          @foreach ($latests as $latest)
          <style>
            .blog-bg {
              background:url({{ asset($latest->image)}});
            }
            
          </style>
          <div class="col-lg-6 pe-lg-0 mb-3">
            <a href="{{ route('article_detail', [$latest->slug, $latest->id]) }}">

              <div class="blog-bg d-flex flex-column justify-content-between p-9 h-100 rounded-start-3 flex-grow-1">
                <img
                  src="{{ $latest?->article_creators->where(['originator'=> true])->first()?->user?->image ?? $latest?->article_creators->first()?->user?->image}}"
                  alt="user" width="44" height="44" class="rounded-circle">
              </div>
            </a>
          </div>
          <div class="col-lg-6 ps-lg-0 mb-3">
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


          @endforeach
        </div>
      </div>
    </div>
    @endif
     
    <div class="row">
      <h4 class="fw-semibold mb-4">Top Stories</h4>
      @foreach ($top as $data)
      <div class="col-md-6 col-lg-6">
        <div style="background:url('{{ asset($data->image) }}');"
          class="card blog blog-img-one position-relative overflow-hidden hover-img">
          <div class="card-body position-relative">
            <div class="d-flex flex-column justify-content-between h-100">
              <div class="d-flex align-items-start justify-content-between">
                <div class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="author">
                  <img src="{{ $data?->article_creators->where(['originator'=> true])->first()?->user?->image }}"
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
    </div>

    <div class="row">
      @if($categories)
      @if(count($categories) > 0)
      @foreach ($categories as $category)
      @if(count($category?->articles) > 0)
      <div class="col-md-6 col-lg-4">
        <h4 class="mb-1 fs-4 fw-semibold mb-3">Latest {{ $category->title }} News</h4>
        <?php
            $list = \App\Models\Article::orderByDesc('created_at')->where(['category_id'=> $category->id])->limit(10)->get();
        ?>
        <div class="position-relative mb-2 mt-2">
          @foreach ($list as $data)
          <div class="d-flex align-items-center justify-content-between mb-7">
            <div class="d-flex">
              <div>
                <p class="fs-3 mb-0">
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

    <div class="row">
      <h4 class="fw-semibold mb-4 mt-2">All Stories</h4>
      @foreach ($articles as $data)
      <div class="col-md-6 col-lg-4">
        <div class="card overflow-hidden hover-img">
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
        </div>
      </div>
      @endforeach
      {{ $articles->links() }}
    </div>
    
    {{-- <nav aria-label="...">
      <ul class="pagination justify-content-center mb-0 mt-4">
        <li class="page-item">
          <a class="page-link border-0 rounded-circle text-dark round-32 d-flex align-items-center justify-content-center"
            href="javascript:void(0)">
            <i class="ti ti-chevron-left"></i>
          </a>
        </li>
        <li class="page-item active" aria-current="page">
          <a class="page-link border-0 rounded-circle round-32 mx-1 d-flex align-items-center justify-content-center"
            href="javascript:void(0)">1</a>
        </li>
        <li class="page-item">
          <a class="page-link border-0 rounded-circle text-dark round-32 mx-1 d-flex align-items-center justify-content-center"
            href="javascript:void(0)">2</a>
        </li>
        <li class="page-item">
          <a class="page-link border-0 rounded-circle text-dark round-32 mx-1 d-flex align-items-center justify-content-center"
            href="javascript:void(0)">3</a>
        </li>
        <li class="page-item">
          <a class="page-link border-0 rounded-circle text-dark round-32 mx-1 d-flex align-items-center justify-content-center"
            href="javascript:void(0)">4</a>
        </li>
        <li class="page-item">
          <a class="page-link border-0 rounded-circle text-dark round-32 mx-1 d-flex align-items-center justify-content-center"
            href="javascript:void(0)">5</a>
        </li>
        <li class="page-item">
          <a class="page-link border-0 rounded-circle text-dark round-32 mx-1 d-flex align-items-center justify-content-center"
            href="javascript:void(0)">...</a>
        </li>
        <li class="page-item">
          <a class="page-link border-0 rounded-circle text-dark round-32 mx-1 d-flex align-items-center justify-content-center"
            href="javascript:void(0)">10</a>
        </li>
        <li class="page-item">
          <a class="page-link border-0 rounded-circle text-dark round-32 d-flex align-items-center justify-content-center"
            href="javascript:void(0)">
            <i class="ti ti-chevron-right"></i>
          </a>
        </li>
      </ul>
    </nav> --}}
  </div>
</div>