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
                    <a wire:navigate href="<?php echo e(route('forgot_password')); ?>" class="text-blue-600 text-sm hover:underline">Forgot Password?</a>
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
                <a href="<?php echo e(route('register')); ?>" class="text-blue-600 hover:underline font-medium">Sign up</a>
            </p>
        </form>

    
    
    </div>
<?php /**PATH C:\xampp\htdocs\CoinCrypto\resources\views/livewire/login-component.blade.php ENDPATH**/ ?>