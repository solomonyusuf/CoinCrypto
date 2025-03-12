<div>
    <div class="container-fluid">
        <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
          <div class="card-body px-4 py-3">
            <div class="row align-items-center">
              <div class="col-9">
                <h4 class="fw-semibold mb-8">{{$article?->title}}</h4>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a class="text-muted text-decoration-none">Home</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">Article</li>
                  </ol>
                </nav>
              </div>
             
          </div>
        </div>

       

    </div>
    {!! $article?->content !!}
</div>
