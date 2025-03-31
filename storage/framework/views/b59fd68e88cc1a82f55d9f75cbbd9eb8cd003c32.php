<div>
  <section class="flex-grow flex flex-wrap justify-center flex-col items-center md:pt-6 mdmax:pt-4">
    <div class="container mx-auto xs:p-4 xs:grid-cols-4 xs:gap-4 sm:p-4 sm:grid-cols-4 sm:gap-4 md:p-6 md:grid-cols-8 md:gap-6 lg:p-6 lg:grid-cols-12 lg:gap-6 xl:p-6 xl:grid-cols-16 xl:gap-6">
      <div class="w-full lg:max-w-[1032px] items-center mt-8 mx-auto">
        <h1 class="self-start font-headline-lg font-medium capitalize <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?>">Sponsored Content</h1>
      </div>
      <div>
        <div class="flex flex-wrap justify-center flex-col border-0 md:gap-6 mdmax:gap-4 container-mobile-md container-tablet-medium container-desktop-lg md:mt-8 mdmax:mt-6 mdmax:mx-0">
          <?php $__currentLoopData = $groupedArticles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date => $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="flex flex-col<?php echo e($setting->theme == 'white' ? 'text-color-black' : 'text-color-white'); ?> border-solid border-0 border-b border-t border-charcoal-50 gap-6 md:pb-6 mdmax:pb-4 md:pt-6 mdmax:pt-4 w-full">
            <div  class="font-metadata <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-600' : 'text-color-white'); ?> uppercase flex flex-row justify-start border-solid border-0 gap-6">
              <svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none">
                <mask id="a" width="24" height="24" x="0" y="0" maskUnits="userSpaceOnUse" style="mask-type: alpha;">
                  <path fill="#D9D9D9" d="M0 0h24v24H0z"></path>
                </mask>
                <g mask="url(#a)">
                  <path fill="<?php echo e($setting->theme == 'white' ? '#676767' : 'white'); ?>"
                    d="M5.615 21c-.46 0-.844-.154-1.152-.462A1.565 1.565 0 0 1 4 19.385V6.615c0-.46.154-.844.463-1.152A1.565 1.565 0 0 1 5.615 5h1.77V2.77h1.077V5h7.153V2.77h1V5h1.77c.46 0 .844.154 1.152.463.309.308.463.692.463 1.152v12.77c0 .46-.154.844-.462 1.152a1.565 1.565 0 0 1-1.153.463H5.615Zm0-1h12.77a.588.588 0 0 0 .423-.192.588.588 0 0 0 .192-.423v-8.77H5v8.77c0 .153.064.294.192.423.129.128.27.192.423.192ZM5 9.615h14v-3a.588.588 0 0 0-.192-.423.588.588 0 0 0-.423-.192H5.615a.588.588 0 0 0-.423.192.588.588 0 0 0-.192.423v3Zm7 4.539a.739.739 0 0 1-.54-.23.738.738 0 0 1-.23-.54c0-.206.077-.386.23-.539a.738.738 0 0 1 .54-.23c.206 0 .386.077.54.23.153.153.23.333.23.54a.738.738 0 0 1-.23.539.739.739 0 0 1-.54.23Zm-4 0a.739.739 0 0 1-.54-.23.738.738 0 0 1-.23-.54c0-.206.077-.386.23-.539a.738.738 0 0 1 .54-.23c.206 0 .386.077.54.23.153.153.23.333.23.54a.738.738 0 0 1-.23.539.739.739 0 0 1-.54.23Zm8 0a.739.739 0 0 1-.54-.23.738.738 0 0 1-.23-.54c0-.206.077-.386.23-.539a.738.738 0 0 1 .54-.23c.206 0 .386.077.54.23.153.153.23.333.23.54a.738.738 0 0 1-.23.539.739.739 0 0 1-.54.23ZM12 18a.738.738 0 0 1-.54-.23.738.738 0 0 1-.23-.54c0-.206.077-.385.23-.539a.738.738 0 0 1 .54-.23c.206 0 .386.077.54.23.153.154.23.333.23.54a.738.738 0 0 1-.23.54A.738.738 0 0 1 12 18Zm-4 0a.738.738 0 0 1-.54-.23.738.738 0 0 1-.23-.54c0-.206.077-.385.23-.539a.738.738 0 0 1 .54-.23c.206 0 .386.077.54.23.153.154.23.333.23.54a.738.738 0 0 1-.23.54A.738.738 0 0 1 8 18Zm8 0a.738.738 0 0 1-.54-.23.738.738 0 0 1-.23-.54c0-.206.077-.385.23-.539a.738.738 0 0 1 .54-.23c.206 0 .386.077.54.23.153.154.23.333.23.54a.738.738 0 0 1-.23.54A.738.738 0 0 1 16 18Z">
                  </path>
                </g>
              </svg> 
              <span class="flex self-center ml-2"><?php echo e($date); ?></span></div>
          </div>
          <?php $__currentLoopData = $group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="flex gap-4 false ">
            <div class="<?php echo e($setting->theme == 'white' ?  'bg-white'  :'bg-black'); ?> flex gap-6 w-full shrink justify-between">
              <div class="flex flex-col">
                <a class="<?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> mb-4 hover:underline"
                  href="<?php echo e(route('article_detail', [$article->slug, $article->id])); ?>">
                  <h2 class="font-headline-xs font-normal">
                  <?php echo e($article->title); ?>  
                  </h2>
                </a>
                <p class="flex gap-2 flex-col">
                  <span
                    class="font-metadata-lg font-medium <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> uppercase ">
                    <span class="mr-2">
                     <?php echo $article->info; ?>

                      </span>
                    </span>
                    <span class="font-metadata <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-600' : 'text-color-white'); ?> uppercase">
                      <?php echo e(\Carbon\Carbon::parse($article->created_at)->diffForHumans()); ?>

                    </span>
                  </p>
              </div>
              <a class="flex shrink-0 flex-col"
                href="<?php echo e(route('article_detail', [$article->slug, $article->id])); ?>">
                <img  width="1920" height="1080" 
                  class="content-card-image--livewire rounded align-self-end object-cover" style="color: transparent;"
                  src="<?php echo e($article->image); ?>">
                </a>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          
        </div>
        <?php if($articles->hasMorePages()): ?>
        <div  class="flex justify-center self-center">
          <a href="<?php echo e($articles->nextPageUrl()); ?>" class="bg-white hover:opacity-80 cursor-pointer border border-color-yellow-900 border-solid rounded-lg mb-8 text-color-charcoal-700 font-label font-medium py-1 px-4 h-10 flex items-center justify-center">More
            stories
          </a>
        </div>
        <?php endif; ?>
      </div>
       </div>
  </section>
  
</div><?php /**PATH C:\xampp\htdocs\CoinCrypto\resources\views/livewire/page-sponsors-component.blade.php ENDPATH**/ ?>