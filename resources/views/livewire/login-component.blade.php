<div>

  <h2 class="text-xl font-semibold text-center text-gray-700 mb-3">Welcome Back</h2>

        <form wire:submit.prevent="submit" class="space-y-4">
            <!-- Email Field -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email address*</label>
                <input id="email" type="email" wire:model="email" required
                    class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <!-- Password Field -->
            <div>
                <div class="flex justify-between items-center">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password*</label>
                    <a wire:navigate href="{{route('forgot_password')}}" class="text-blue-600 text-sm hover:underline">Forgot Password?</a>
                </div>
                <input id="password" type="password" wire:model="password" required
                    class="w-full mt-1 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <!-- Remember Me Checkbox -->
            <div class="flex items-center space-x-2">
                <input id="remember" type="checkbox" wire:model="remember"
                    class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                <label for="remember" class="text-sm text-gray-700">Remember this device</label>
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full bg-yellow-400 text-dark py-3 px-4   hover:bg-yellow-700 transition font-medium">
                Continue
            </button>

            <!-- Sign Up Link -->
            <p class="text-center text-sm text-gray-600 mt-4">
                Don't have an account?
                <a href="{{ route('register') }}" class="text-blue-600 hover:underline font-medium">Sign up</a>
            </p>
        </form>

    {{-- <style>
        .main-wrapper{
            background: temp('assets/img/bg1.svg');
        }
    </style>
    <div class="d-flex mt-5 mb-5 align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3 auth-card">
            <div class="card mb-0">
              <div class="card-body">
                <a href="index.html" class="text-nowrap logo-img text-center d-block mb-5 w-100">
                  <img src="logo.png" style="height:40px;" alt="Logo-light" style="display: none;">
                </a>
             
                <div class="position-relative text-center my-4">
                  <p class="mb-0 fs-4 px-3 d-inline-block bg-body text-dark z-index-5 position-relative">
                    Enter your credentials
                  </p>
                  <span class="border-top w-100 position-absolute top-50 start-50 translate-middle"></span>
                </div>
                <form wire:submit.prevent="submit">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input required wire:model="email" placeholder="Enter Email" type="email" class="form-control">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input required wire:model="password" type="password" placeholder="Enter Password" class="form-control">
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                      <input wire:model="remember" class="form-check-input primary" type="checkbox" value="">
                      <label class="form-check-label text-dark" for="flexCheckChecked">
                        Remeber this Device
                      </label>
                    </div>
                    <a class="text-primary fw-medium" wire:navigate href="{{route('forgot_password')}}">Forgot
                      Password?</a>
                  </div>
                  <button type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Sign In</button>
                  <div class="d-flex align-items-center justify-content-center">
    
                    <a class="text-primary fw-medium ms-2" wire:navigate href="{{route('register')}}">Create an
                      account</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

     --}}
    
    </div>
