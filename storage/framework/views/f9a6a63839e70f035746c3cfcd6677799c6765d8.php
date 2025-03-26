<div>
  <div class="max-w-2xl mx-auto mt-4 mb-4 bg-white shadow-lg rounded-lg p-6">
    <form enctype="multipart/form-data" action="<?php echo e(route('update_profile')); ?>" method="post" class="space-y-6">
        <?php echo csrf_field(); ?>
        
        <div class="space-y-4">
            <!-- Profile Image Preview -->
            <?php if($data->image): ?>
            <div class="mb-3">
                <img src="<?php echo e(asset($data->image)); ?>" class="h-16 w-16 rounded-full object-cover" />
            </div>
            <?php endif; ?>
            
            <!-- Image Upload -->
            <div>
              <label class="block text-gray-700 font-medium mb-1">Image</label>
              <button type="button" class="z-0 group relative inline-flex items-center justify-center box-border appearance-none select-none whitespace-nowrap subpixel-antialiased overflow-hidden tap-highlight-transparent data-[pressed=true]:scale-[0.97] outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 px-4 min-w-20 h-10 text-small gap-2 [&amp;>svg]:max-w-[theme(spacing.8)] transition-transform-colors-opacity motion-reduce:transition-none data-[hover=true]:opacity-hover w-fit rounded-lg bg-new-yellow text-coindesk-black font-bold cursor-pointer">
                <label>
                Choose Image
                <input id="image-upload" name="image" type="file" class="hidden">
                </label>
              </button>
            </div>
          

            <!-- First Name -->
            <div>
                <label class="block text-gray-700 font-medium mb-1">First Name *</label>
                <input name="first_name" value="<?php echo e($data->first_name); ?>" type="text" class="w-full p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Last Name -->
            <div>
                <label class="block text-gray-700 font-medium mb-1">Last Name *</label>
                <input name="last_name" value="<?php echo e($data->last_name); ?>" type="text" class="w-full p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Info -->
            <div>
                <label class="block text-gray-700 font-medium mb-1">Info</label>
                <textarea name="info" class="w-full p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"><?php echo $data->info; ?></textarea>
            </div>

            <!-- Email (Disabled) -->
            <div>
                <label class="block text-gray-700 font-medium mb-1">Email *</label>
                <input name="email" value="<?php echo e($data->email); ?>" type="email" disabled class="w-full p-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-500 cursor-not-allowed">
            </div>

            <!-- New Password -->
            <div>
                <label class="block text-gray-700 font-medium mb-1">New Password</label>
                <input name="password" placeholder="Enter Password" type="password" class="w-full p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>
        </div>

        <!-- Submit Button -->
        <div class="mt-4">
          <button type="submit" class="z-0 group relative inline-flex items-center justify-center box-border appearance-none select-none whitespace-nowrap subpixel-antialiased overflow-hidden tap-highlight-transparent data-[pressed=true]:scale-[0.97] outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 px-4 min-w-20 h-10 text-small gap-2 [&amp;>svg]:max-w-[theme(spacing.8)] transition-transform-colors-opacity motion-reduce:transition-none data-[hover=true]:opacity-hover w-fit rounded-lg bg-new-yellow text-coindesk-black font-bold cursor-pointer">Submit</button>
        </div>
    </form>
</div>

</div>
<?php /**PATH C:\xampp\htdocs\CoinCrypto\resources\views/livewire/profile-component.blade.php ENDPATH**/ ?>