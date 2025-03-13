<div>
  <style>
    #myTable th:first-child,
    #myTable td:first-child {
        position: sticky;
        left: 0;
        background: white; /* Adjust this based on your theme */
        z-index: 10;
        box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1); /* Optional: Adds a shadow effect */
    }
    </style>
    <div class="container-fluid">
        <div class="col-md-5">
        <h4 class="fw-semibold mb-4 mt-3">Top Cryptocurrency Prices and Market Cap</h4>
        <p class="card-text pt-2">
            CoinCrypto's Top Cryptocurrency Price and Market Cap list uses real-time market data to highlight the top 15 cryptocurrencies by market capitalization.
         </p>
        </div>
        <div class="row justify-content-center mt-3">
            <div wire:ignore class="table-responsive mb-4 border rounded-1">

                <table  id="myTable" class="table text-nowrap mb-0 align-middle">
                  <thead class="text-dark fs-4">
                    <tr>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Coin</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Current Price</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Price change 24h</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Market Cap</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">High 24h</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Low 24h</h6>
                      </th>
                      <th>
                        <h6 class="fs-4 fw-semibold mb-0">Total Volume</h6>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($price as $coin)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{ $coin['image'] }}" class="rounded-circle" width="40" height="40">
                                <div class="ms-3">
                                    <h6 class="fs-4 fw-semibold mb-0">{{ ucfirst($coin['name']) }}</h6>
                                    <small class="text-muted">{{ strtoupper($coin['symbol']) }}</small>
                                </div>
                            </div>
                        </td>
                        <td>${{ number_format($coin['current_price'], 2) }}</td>
                        <td>
                            <span style="color: {{ ($coin['price_change_percentage_24h'] ?? 0) >= 0 ? 'green' : 'red' }}">
                                {{ number_format($coin['price_change_percentage_24h'] ?? 0, 2) }}%
                            </span>
                        </td>
                        <td>${{ number_format($coin['market_cap'] ?? 0, 0) }}</td>
                        <td>${{ number_format($coin['high_24h'] ?? 0, 2) }}</td>
                        <td>${{ number_format($coin['low_24h'] ?? 0, 2) }}</td>
                        <td>${{ number_format($coin['total_volume'] ?? 0, 0) }}</td>
                    </tr>@endforeach
                    
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
                new DataTable('#myTable');
              }, 10000); 
        });
    </script>
</div>
