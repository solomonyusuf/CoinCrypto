<div>
    <div class="container-fluid">
        <div class="col-md-5">
        <h4 class="fw-semibold mb-4 mt-3">Top Cryptocurrency Prices and Market Cap</h4>
        <p class="card-text pt-2">
            CoinCrypto's Top Cryptocurrency Price and Market Cap list uses real-time market data to highlight the top 15 cryptocurrencies by market capitalization.
         </p>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="table-responsive mb-4 border rounded-1">

                <table id="myTable" class="table text-nowrap mb-0 align-middle">
                  <thead class="text-dark fs-4">
                    <tr>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Coin</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">USD Price</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Price change 24h</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">High 24h</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Low 24h</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Volume 24h</h6>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @for($i = 0; $i < count($coins); $i++)
                    <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <img src="../assets/images/profile/user-3.jpg" class="rounded-circle" width="40" height="40">
                            <div class="ms-3">
                              <h6 class="fs-4 fw-semibold mb-0">{{ $coins[$i]}}</h6>
                              <span class="fw-normal">Web Designer</span>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="mb-0 fw-normal fs-4">Elite Admin</p>
                        </td>
                        <td>
                          <div class="d-flex align-items-center">
                            <a href="javascript:void(0)" class="text-bg-secondary text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                              S
                            </a>
                            <a href="javascript:void(0)" class="text-bg-danger text-white fs-6 round-40 rounded-circle me-n2 card-hover border border-2 border-white d-flex align-items-center justify-content-center">
                              D
                            </a>
                          </div>
                        </td>
                        <td>
                          <span class="badge bg-success-subtle text-success">Active</span>
                        </td>
                        <td>
                          <h6 class="fs-4 fw-semibold mb-0">$3.9k</h6>
                        </td>
                      </tr>
                    @endforeach
                    
                   </tbody>
                </table>

            
                </div>
              </div>
            
              
        </div>
    </div>

    <script>
        let table = new DataTable('#myTable',[]);
        document.addEventListener('livewire:load', function () {
            setInterval(() => {
                Livewire.emit('fetchPrice'); // Auto refresh every 60s
            }, 60000); // 60,000 ms = 60 seconds
        });
    </script>
</div>
