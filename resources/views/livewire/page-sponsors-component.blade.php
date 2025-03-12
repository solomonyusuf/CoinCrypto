<div>
  <div class="container mt-3">
    <div>
        <h4 class="fw-semibold mb-3">Sponsored Articles</h4>
        @if(count($articles) == 0)
        <div class="container d-flex justify-content-center align-items-center min-vh-100">
            <div class="text-center">
                <img src="https://img.icons8.com/?size=100&id=45967&format=png&color=000000" alt="No Data Icon" class="mb-3">
                <h4 class="fw-bold text-muted">No Data Available</h4>
                <p class="text-secondary">It looks like there's nothing to show here yet.</p>
            </div>
        </div>
        @endif
      <div class="row">
        @foreach ($articles as $data)
        <div class="col-md-6 col-lg-4">
          <div class="card overflow-hidden hover-img">
            <div class="position-relative">
              <a href="{{ route('article_detail', [$data->slug, $data->id]) }}">
              <img src="{{ asset($data->image) }}" class="card-img-top" alt="modernize-img">
              </a>
              
              <img src="{{ $data?->article_creators->where(['originator'=> true])->first()?->user?->image ?? $data?->article_creators->first()?->user?->image }}" alt="modernize-img" class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9" width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top" >
            </div>
            <div class="card-body p-4">
              <span class="badge text-bg-light fs-2 py-1 px-2 lh-sm  mt-3">
                {{ $data?->article_category?->title }}
              </span>
              <a href="{{ route('article_detail', [$data->slug, $data->id]) }}" class="d-block my-4 fs-5 text-dark fw-semibold link-primary">
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
      </div>
      {{ $articles->links() }}
  </div>
  
</div>

</div>
