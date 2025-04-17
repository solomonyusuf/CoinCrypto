<div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>


    <section class="flex-grow">
      <div class="container mx-auto xs:p-4 xs:grid-cols-4 xs:gap-4 sm:p-4 sm:grid-cols-4 sm:gap-4 md:p-6 md:grid-cols-8 md:gap-6 lg:p-6 lg:grid-cols-12 lg:gap-6 xl:p-6 xl:grid-cols-16 xl:gap-6">
        <h1 class="text-[0px]">100xinsider: Bitcoin, Ethereum, Crypto News and Price Data</h1>
        <!--$-->
        
        
        <div class="grid gap-4 md:gap-6 grid-cols-4 md:grid-cols-8 lg:grid-cols-12">
          <?php if($setting?->first ): ?>
  
          <?php if($latest): ?>
          <div class="col-start-1 col-span-full row-start-1 lg:col-end-8 xl:col-end-9">
                    <div class="flex flex-col gap-1 md:flex-row xlmax:w-full">
                        <div class="bg-<?php echo e($setting->theme); ?> flex gap-6 w-full shrink flex-col md:flex-row lg:flex-col-reverse xl:flex-row-reverse">
                            <div class="flex flex-col">
                                <a class="<?php echo e($setting->theme == 'white' ? 'text-color-charcoal-900' : 'text-color-white'); ?> mb-4 hover:underline"
                                    href="<?php echo e(route('article_detail', [$latest?->slug ?? 'post', $latest?->id])); ?>">
                                    <h3 class="font-headline">
                                        <?php echo e($latest?->title); ?>

                                    </h3>
                                </a>
                                <p class="font-body <?php echo e($setting->theme == 'white' ? 'text-color-charcoal-600' : 'text-color-white'); ?> mb-4 line-clamp-2 lg:hidden xl:flex">
                                    <?php echo \Illuminate\Support\Str::limit($latest->content, 50, '..'); ?>

                                </p>
                                <p class="flex gap-2 flex-col lg:flex-row items-center">
                                    <span class="font-metadata-lg font-medium <?php echo e($setting->theme == 'white' ? 'text-color-charcoal-900' : 'text-color-white'); ?> uppercase">
                                        <span class="mr-2">By
                                            <?php for($i = 0; $i < count($latest->article_creators); $i++): ?>
                                                <?php if($i > 0): ?>, <?php endif; ?>
                                                <a title="" class="<?php echo e($setting->theme == 'white' ? 'text-color-charcoal-600' : 'text-color-white'); ?> hover:underline"
                                                    href="<?php echo e(route('author_detail', $latest->article_creators[$i]->user->id)); ?>">
                                                    <?php echo e($latest->article_creators[$i]->user->first_name.' '.$latest->article_creators[$i]->user->last_name); ?>

                                                </a>
                                            <?php endfor; ?>
                                        </span>
                                    </span>
                                    <span class="font-metadata <?php echo e($setting->theme == 'white' ? 'text-color-charcoal-600' : 'text-color-white'); ?> uppercase">
                                        <?php echo e(\Carbon\Carbon::parse($latest->created_at)->diffForHumans()); ?>

                                    </span>
                                </p>
                            </div>
                            
                           
                            
                            <div class="flex shrink-0 flex-col">
                            <!-- Button Above Image -->
                            <?php if($adminRole): ?>
                            <div class="relative">
                                <div class="sm:flex hidden justify-center items-center mb-4">
                                    <button wire:click="toggleArticle" class="flex h-10 min-w-[152px] font-label font-medium justify-center items-center bg-[--bg] hover:bg-[--bgHover] text-[--textColor] rounded-[--radius]"
                                        style="--bg: #000000; --bgHover: #000000; --textColor: #FFFFFF; --radius: 1px;">
                                        Edit Section
                                    </button>
                                </div>
                                <?php if($showArticle): ?>
                                
                                <div class="fixed left-0 top-auto h-[300px] right-20 bottom-0 md:absolute md:bottom-auto md:left-auto md:top-[calc(100%_+_8px)] md:h-max md:right-[-3px] md:transition-none z-[100] bg-[#fff] p-8 shadow rounded-lg translate-x-0 transition-transform translate-y-0 <?php echo e($showArticle ? '' : 'md:hidden'); ?>" style="width:500px;">
                                 <button wire:click="toggleArticle" class="absolute top-4 right-4">
                                  <svg height="24" viewBox="0 0 24 24" width="24"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <path
                                        d="M6.40001 18.3076L5.69226 17.5999L11.2923 11.9999L5.69226 6.39989L6.40001 5.69214L12 11.2921L17.6 5.69214L18.3078 6.39989L12.7078 11.9999L18.3078 17.5999L17.6 18.3076L12 12.7076L6.40001 18.3076Z">
                                      </path>
                                    </svg>
                                  </button>
                                  <span class="block mb-6 text-charcoal-900 font-title">Modify this section</span>
                                  <form action="<?php echo e(route('update_admin_home')); ?>" method="post" class="dialog flex flex-col gap-6 font-normal tracking-wide text-xs">
                                    <?php echo csrf_field(); ?>
                                    <!-- Toggle Switch -->
                                    <span class="cursor-[inherit] top-2">
                                      <label class="group relative max-w-fit inline-flex items-center justify-start cursor-pointer tap-highlight-transparent p-2 -m-2 select-none">
                                       
                                           <!-- Hidden field to submit 'off' if checkbox is unchecked -->
                                          <input type="hidden" name="top_left_article_show" value="off">

                                          <!-- Actual checkbox -->
                                          <input
                                              class="font-inherit text-[100%] leading-[1.15] m-0 p-0 overflow-visible box-border absolute top-0 w-full h-full opacity-[0.0001] z-[1] cursor-pointer"
                                              type="checkbox"
                                              name="top_left_article_show"
                                              value="on"
                                              <?php if($setting->top_left_article_show): ?> checked <?php endif; ?>
                >
                                          <span class="relative inline-flex items-center justify-center w-5 h-5 border-2 border-gray-500 rounded">
                                            <svg
                                                aria-hidden="true" fill="none" role="presentation" stroke="white"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                viewBox="0 0 17 18"
                                                class="w-4 h-3 opacity-0 transition-opacity">
                                                <polyline points="1 9 7 14 15 4"></polyline>
                                            </svg>
                                        
                                          </span>&nbsp;&nbsp;
                                          Show Section 
                                      </label>
                                    </span>
                                  
                                
                                    <!-- Select Dropdown (Hidden by Default) -->
                                    <div id="dropdownContainer" class="w-full">
                                        <select id="top-left" required  name="top_left_article" class="w-full p-2 border border-gray-300 rounded-md">
                                            <option value="">Select an option</option>
                                            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($data->id == $setting->top_left_article): ?>
                                            <option selected value="<?php echo e($data->id); ?>"><?php echo e($data->title); ?></option>
                                            <?php else: ?>
                                            <option value="<?php echo e($data->id); ?>"><?php echo e($data->title); ?></option>
                                            <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                
                                    <!-- Submit Button -->
                                    <button type="submit" class="w-full bg-black text-white p-2 rounded">Submit</button>
                                
                                  </form>
                                
                                </div>
                                <?php endif; ?>
                              </div>
                            <?php endif; ?>

                              <!-- Image -->
                              <a class=""
                                href="<?php echo e(route('article_detail', [$latest->slug, $latest->id])); ?>">
                                <img alt="<?php echo e($latest->title); ?>"
                                    width="416" height="234" decoding="async" data-nimg="1"
                                    class="w-full md:w-60 lg:w-full xl:w-[503px] rounded align-self-end aspect-video object-cover"
                                    style="color:transparent;background-size:cover;background-position:50% 50%;background-repeat:no-repeat;background-image:temp(&quot;data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAALABQDASIAAhEBAxEB/8QAGAAAAwEBAAAAAAAAAAAAAAAAAAUHAwb/xAAhEAACAQMEAwEAAAAAAAAAAAABAgMABBEFBhIxFBUhIv/EABUBAQEAAAAAAAAAAAAAAAAAAAME/8QAGhEBAAMBAQEAAAAAAAAAAAAAAQACAxIxEf/aAAwDAQACEQMRAD8AiO3/AEUWi2sl7BHNcfouCfvzoV1bx7Y1DU4wLC2sYUgGUbt2NR+KV1jwrECtXu7iSTm8rs2MZJoNMe62Pvsoz0rUBPIw3jFZw69Olhw8cYxx6opK7EtknJopqnIEnZ//2Q==&quot;)"
                                    src="<?php echo e(asset($latest->image)); ?>" />
                            </a>
                            </div>
            
                        </div>
                    </div>
                </div>
            <?php endif; ?>
      
          <?php if($video): ?>
          <div class="row-start-2 col-span-full md:col-start-4 lg:row-start-1 lg:col-start-8 -lg:col-end-1 xl:col-start-9 [&amp;_.jw-related-btn]:hidden">
            <div class="flex flex-col lg:flex-row h-full">
              <div class="lg:hidden pb-6">
                <hr class="shrink-0 border-none w-full h-divider <?php echo e($setting->theme == 'white' ? 'bg-black' : 'bg-white'); ?>" role="separator" />
              </div>
              <div class="lgmax:hidden mr-6">
                <div class="shrink-0 bg-divider border-none h-full w-divider" role="separator" data-orientation="vertical"
                  aria-orientation="vertical"></div>
              </div>
              <div
                class=" w-full">
                <div class="grid">
                  <?php if($adminRole): ?>
                  <div class="relative">
                      <div class="sm:flex hidden justify-center items-center mb-4">
                          <button wire:click="toggleVideo" class="flex h-10 min-w-[152px] font-label font-medium justify-center items-center bg-[--bg] hover:bg-[--bgHover] text-[--textColor] rounded-[--radius]"
                              style="--bg: #000000; --bgHover: #000000; --textColor: #FFFFFF; --radius: 1px;">
                              Edit Section
                          </button>
                      </div>
                      <?php if($showVideo): ?>
                      
                      <div class="fixed left-0 top-auto h-[300px] right-20 bottom-0 md:absolute md:bottom-auto md:left-auto md:top-[calc(100%_+_8px)] md:h-max md:right-[-3px] md:transition-none z-[100] bg-[#fff] p-8 shadow rounded-lg translate-x-0 transition-transform 
                      translate-y-0 <?php echo e($showVideo ? '' : 'md:hidden'); ?>" style="width:500px;">
                       <button wire:click="toggleVideo" class="absolute top-4 right-4">
                        <svg height="24" viewBox="0 0 24 24" width="24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M6.40001 18.3076L5.69226 17.5999L11.2923 11.9999L5.69226 6.39989L6.40001 5.69214L12 11.2921L17.6 5.69214L18.3078 6.39989L12.7078 11.9999L18.3078 17.5999L17.6 18.3076L12 12.7076L6.40001 18.3076Z">
                            </path>
                          </svg>
                        </button>
                        <span class="block mb-6 text-charcoal-900 font-title">Modify this section</span>
                        <form action="<?php echo e(route('update_admin_home')); ?>" method="post" class="dialog flex flex-col gap-6 font-normal tracking-wide text-xs">
                          <?php echo csrf_field(); ?>
                          <!-- Toggle Switch -->
                          <span class="cursor-[inherit] top-2">
                            <label class="group relative max-w-fit inline-flex items-center justify-start cursor-pointer tap-highlight-transparent p-2 -m-2 select-none">
                               
                                 <!-- Hidden field to submit 'off' if checkbox is unchecked -->
                                 <input type="hidden" name="top_right_article_show" value="off">

                                 <!-- Actual checkbox -->
                                 <input
                                     class="font-inherit text-[100%] leading-[1.15] m-0 p-0 overflow-visible box-border absolute top-0 w-full h-full opacity-[0.0001] z-[1] cursor-pointer"
                                     type="checkbox"
                                     name="top_right_article_show"
                                     value="on"
                                     <?php if($setting->top_right_article_show): ?> checked <?php endif; ?>>
                                <span class="relative inline-flex items-center justify-center w-5 h-5 border-2 border-gray-500 rounded">
                                  <svg
                                      aria-hidden="true" fill="none" role="presentation" stroke="white"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      viewBox="0 0 17 18"
                                      class="w-4 h-3 opacity-0 transition-opacity">
                                      <polyline points="1 9 7 14 15 4"></polyline>
                                  </svg>
                              
                                </span>&nbsp;&nbsp;
                                Show Section 
                            </label>
                          </span>
                        
                      
                          <!-- Select Dropdown (Hidden by Default) -->
                          <div id="dropdownContainer" class="w-full">
                              <select id="top-right" required  name="top_left_article" class="w-full p-2 border border-gray-300 rounded-md">
                                  <option value="">Select an option</option>
                                  <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <?php if($data->id == $setting->top_left_article): ?>
                                  <option selected value="<?php echo e($data->id); ?>"><?php echo e($data->title); ?></option>
                                  <?php else: ?>
                                  <option value="<?php echo e($data->id); ?>"><?php echo e($data->title); ?></option>
                                  <?php endif; ?>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                          </div>
                      
                          <!-- Submit Button -->
                          <button type="submit" class="w-full bg-black text-white p-2 rounded">Submit</button>
                      
                        </form>
                      
                      </div>
                      <?php endif; ?>
                    </div>
                  <?php endif; ?>
                  <div class="plyr__video-embed" id="player">
                    <iframe src="<?php echo e($video->link); ?>"
                            allow="autoplay"  tabindex="-1"></iframe>
                  </div>
                  
                </div>
                <h3 class="font-headline-2xs <?php echo e($setting->theme == 'white' ? 'text-color-charcoal-900' : 'text-color-white'); ?> font-medium tracking-[0.1px] mt-6">
                  <?php echo e($video->title); ?>

                </h3>
                <div class="font-body-sm leading-normal <?php echo e($setting->theme == 'white' ? 'text-color-charcoal-600' : 'text-color-white'); ?> hidden lg:block lg:pt-4 xl:hidden">
                <?php echo \Illuminate\Support\Str::limit($video->description, 400, '..'); ?>

                </div>
              </div>
            </div>
          </div>
          <?php endif; ?>
          <?php endif; ?>
  
          <div class="col-span-full -col-end-1 row-start-4 md:col-start-1 md:row-start-2 md:col-end-4 md:row-end-4">
            <div class="flex flex-col h-full">
            
              <div class="pb-6">
                <hr class="shrink-0 border-none w-full h-divider <?php echo e($setting->theme == 'white' ? 'bg-black' : 'bg-white'); ?>" role="separator" />
              </div>
              <!--$-->
              <?php if($adminRole): ?>
              <div class="relative">
                  <div class="sm:flex hidden justify-center items-center mb-4">
                      <button wire:click="toggleSecondLeft" class="flex h-10 min-w-[152px] font-label font-medium justify-center items-center bg-[--bg] hover:bg-[--bgHover] text-[--textColor] rounded-[--radius]"
                          style="--bg: #000000; --bgHover: #000000; --textColor: #FFFFFF; --radius: 1px;">
                          Edit Section
                      </button>
                  </div>
                  <?php if($showSecondLeft): ?>
                 
                  <div class="fixed left-0 top-auto h-[300px] right-20 bottom-0 md:absolute md:bottom-auto md:left-auto md:top-[calc(100%_+_8px)] md:h-max md:right-[-3px] md:transition-none z-[100] bg-[#fff] p-8 shadow rounded-lg translate-x-0 transition-transform 
                  translate-y-0 <?php echo e($showSecondLeft ? '' : 'md:hidden'); ?>" style="width:400px;">
                   <button wire:click="toggleSecondLeft" class="absolute top-4 right-4">
                    <svg height="24" viewBox="0 0 24 24" width="24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M6.40001 18.3076L5.69226 17.5999L11.2923 11.9999L5.69226 6.39989L6.40001 5.69214L12 11.2921L17.6 5.69214L18.3078 6.39989L12.7078 11.9999L18.3078 17.5999L17.6 18.3076L12 12.7076L6.40001 18.3076Z">
                        </path>
                      </svg>
                    </button>
                    <span class="block mb-6 text-charcoal-900 font-title">Modify this section</span>
                    <form action="<?php echo e(route('update_admin_home')); ?>" method="post" class="dialog flex flex-col gap-6 font-normal tracking-wide text-xs">
                      <?php echo csrf_field(); ?>
                      <!-- Toggle Switch -->
                      <span class="cursor-[inherit] top-2">
                        <label class="group relative max-w-fit inline-flex items-center justify-start cursor-pointer tap-highlight-transparent p-2 -m-2 select-none">
                        
                          <!-- Hidden field to submit 'off' if checkbox is unchecked -->
                          <input type="hidden" name="second_left_show" value="off">

                          <!-- Actual checkbox -->
                          <input
                              class="font-inherit text-[100%] leading-[1.15] m-0 p-0 overflow-visible box-border absolute top-0 w-full h-full opacity-[0.0001] z-[1] cursor-pointer"
                              type="checkbox"
                              name="second_left_show"
                              value="on"
                              <?php if($setting->second_left_show): ?> checked <?php endif; ?>>
                            <span class="relative inline-flex items-center justify-center w-5 h-5 border-2 border-gray-500 rounded">
                              <svg
                                  aria-hidden="true" fill="none" role="presentation" stroke="white"
                                  stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  viewBox="0 0 17 18"
                                  class="w-4 h-3 opacity-0 transition-opacity">
                                  <polyline points="1 9 7 14 15 4"></polyline>
                              </svg>
                          
                            </span>&nbsp;&nbsp;
                            Show Section 
                        </label>
                      </span>
                    
                  
                      <!-- Select Dropdown (Hidden by Default) -->
                      <div id="dropdownContainer" class="w-full">
                          <select id="second-left" required  name="second_left" class="w-full p-2 border border-gray-300 rounded-md">
                              <option value="">Select a category</option>
                              <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($data->id == $setting->second_left): ?>
                              <option selected value="<?php echo e($data->id); ?>"><?php echo e($data->title); ?></option>
                              <?php else: ?>
                              <option value="<?php echo e($data->id); ?>"><?php echo e($data->title); ?></option>
                              <?php endif; ?>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                      </div>
                  
                      <!-- Submit Button -->
                      <button type="submit" class="w-full bg-black text-white p-2 rounded">Submit</button>
                  
                    </form>
                  
                  </div>
                  <?php endif; ?>
                </div>
              <?php endif; ?>
             <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('widget.crypto-component')->html();
} elseif ($_instance->childHasBeenRendered('l1800820435-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1800820435-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1800820435-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1800820435-0');
} else {
    $response = \Livewire\Livewire::mount('widget.crypto-component');
    $html = $response->html();
    $_instance->logRenderedChild('l1800820435-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  
              <!--/$-->
              <div class="py-4">
                <hr class="shrink-0 border-none w-full h-divider <?php echo e($setting->theme == 'white' ? 'bg-black' : 'bg-white'); ?>" role="separator" />
              </div>
  
              <?php if($setting->advert): ?>
              <div class="flex flex-col min-h-[228px]">
                
                <div class="min-w-full min-h-full">
                  <div class="color-black relative flex items-start justify-center aw100% ah100%" style="height:100%">
                    <div id="nativehp_desktop" style="width:100%;height:100%"
                      class="transition-box duration-250 align-center background-repeat relative flex items-start justify-center ease-in [&amp;&gt;iframe]:m-auto aw100% ah100%">
                    </div>
                    <div style="width:100%;height:100%"
                      class="min-w-full animate-shimmer will-change-background-position via-18% to-33% from-8% absolute mb-0 ml-auto mr-auto mt-0 flex items-center justify-center bg-gradient-to-r from-[#f6f7f8] via-[#edeef1] to-[#f6f7f8] bg-[length:200%_100%] opacity-100 aw100% ah100%">
                       
                    </div>
                  </div>
                </div>
              </div>
              <?php endif; ?>
  
              
            </div>
          </div>
          
            <div class="col-span-full md:row-start-2 md:col-start-4 lg:row-start-2 lg:col-start-4 -lg:col-end-1 md:row-start-3">
                  <div class="pb-6">
                    <hr class="shrink-0 border-none w-full h-divider <?php echo e($setting->theme == 'white' ? 'bg-black' : 'bg-white'); ?>" role="separator" />
                  </div>
                  
                  <?php if($adminRole): ?>
                <div class="relative">
                    <div class="sm:flex hidden justify-center items-center mb-4">
                        <button wire:click="toggleSecondRight" class="flex h-10 min-w-[152px] font-label font-medium justify-center items-center bg-[--bg] hover:bg-[--bgHover] text-[--textColor] rounded-[--radius]"
                            style="--bg: #000000; --bgHover: #000000; --textColor: #FFFFFF; --radius: 1px;">
                            Edit Section
                        </button>
                    </div>
                    <?php if($showSecondRight): ?>
                   
                    <div class="fixed left-0 top-auto h-[300px] right-20 bottom-0 md:absolute md:bottom-auto md:left-auto md:top-[calc(100%_+_8px)] md:h-max md:right-[-3px] md:transition-none z-[100] bg-[#fff] p-8 shadow rounded-lg translate-x-0 transition-transform 
                    translate-y-0 <?php echo e($showSecondRight ? '' : 'md:hidden'); ?>" style="width:400px;">
                     <button wire:click="toggleSecondRight" class="absolute top-4 right-4">
                      <svg height="24" viewBox="0 0 24 24" width="24"
                          xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M6.40001 18.3076L5.69226 17.5999L11.2923 11.9999L5.69226 6.39989L6.40001 5.69214L12 11.2921L17.6 5.69214L18.3078 6.39989L12.7078 11.9999L18.3078 17.5999L17.6 18.3076L12 12.7076L6.40001 18.3076Z">
                          </path>
                        </svg>
                      </button>
                      <span class="block mb-6 text-charcoal-900 font-title">Modify this section</span>
                      <form action="<?php echo e(route('update_admin_home')); ?>" method="post" class="dialog flex flex-col gap-6 font-normal tracking-wide text-xs">
                        <?php echo csrf_field(); ?>
                        <!-- Toggle Switch -->
                        <span class="cursor-[inherit] top-2">
                          <label class="group relative max-w-fit inline-flex items-center justify-start cursor-pointer tap-highlight-transparent p-2 -m-2 select-none">
                            <!-- Hidden field to submit 'off' if checkbox is unchecked -->
                          <input type="hidden" name="second_right_show" value="off">

                          <!-- Actual checkbox -->
                          <input
                              class="font-inherit text-[100%] leading-[1.15] m-0 p-0 overflow-visible box-border absolute top-0 w-full h-full opacity-[0.0001] z-[1] cursor-pointer"
                              type="checkbox"
                              name="second_right_show"
                              value="on"
                              <?php if($setting->second_right_show): ?> checked <?php endif; ?>
>

                              <span class="relative inline-flex items-center justify-center w-5 h-5 border-2 border-gray-500 rounded">
                                <svg
                                    aria-hidden="true" fill="none" role="presentation" stroke="white"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    viewBox="0 0 17 18"
                                    class="w-4 h-3 opacity-0 transition-opacity">
                                    <polyline points="1 9 7 14 15 4"></polyline>
                                </svg>
                            
                              </span>&nbsp;&nbsp;
                              Show Section 
                          </label>
                        </span>
                      
                    
                        <!-- Select Dropdown (Hidden by Default) -->
                        <div id="dropdownContainer" class="w-full">
                            <select id="second-right" required  name="second_right" class="w-full p-2 border border-gray-300 rounded-md">
                                <option value="">Select a category</option>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($data->id == $setting->second_right): ?>
                                <option selected value="<?php echo e($data->id); ?>"><?php echo e($data->title); ?></option>
                                <?php else: ?>
                                <option value="<?php echo e($data->id); ?>"><?php echo e($data->title); ?></option>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    
                        <!-- Submit Button -->
                        <button type="submit" class="w-full bg-black text-white p-2 rounded">Submit</button>
                    
                      </form>
                    
                    </div>
                    <?php endif; ?>
                  </div>
                <?php endif; ?>
                
                  <div class="flex pb-6 items-center">
                    <h2 class="font-title <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey' : 'text-color-white'); ?> uppercase"><?php echo e($top_category->title); ?></h2>
                  </div>
          
                    <?php for($i = 0; $i < count($top); $i += 3): ?>
                      <div class="flex">
                          <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-9 xl:grid-cols-2 gap-6">
                              <div class="col-span-1 lg:col-span-5 xl:col-span-1">
                                  <div class="flex gap-4 false">
                                      <div class="<?php echo e($setting->theme == 'white' ? 'bg-white' : 'bg-black'); ?> flex gap-6 w-full shrink">
                                          <div class="flex flex-col">
                                              <?php if(isset($top[$i])): ?>
                                                  <a class="<?php echo e($setting->theme == 'white' ? 'text-color-charcoal-900' : 'text-color-white'); ?> mb-4 hover:underline"
                                                    href="<?php echo e(route('article_detail', [$top[$i]->slug, $top[$i]->id])); ?>">
                                                      <h2 class="font-headline-2xs font-medium">
                                                          <?php echo e($top[$i]->title); ?>

                                                      </h2>
                                                  </a>
                                                  <p class="font-body <?php echo e($setting->theme == 'white' ? 'text-color-charcoal-600' : 'text-color-white'); ?> mb-4 line-clamp-3">
                                                      <?php echo \Illuminate\Support\Str::limit($top[$i]->content, 60, '..'); ?>

                                                  </p>
                                                  <p class="flex gap-2 flex-col">
                                                      <span class="font-metadata <?php echo e($setting->theme == 'white' ? 'text-color-charcoal-600' : 'text-color-white'); ?> uppercase">
                                                          <?php echo e(\Carbon\Carbon::parse($top[$i]->created_at)->diffForHumans()); ?>

                                                      </span>
                                                  </p>
                                              <?php endif; ?>
                                          </div>
                                          <?php if(isset($top[$i]) && !empty($top[$i]->image)): ?>
                                              <a title="<?php echo e($top[$i]->title); ?>" class="flex shrink-0 flex-col"
                                                href="<?php echo e(route('article_detail', [$top[$i]->slug, $top[$i]->id])); ?>">
                                                  <img width="1280" height="960" class="lg:w-[9.5rem] lg:h-[9.5rem] sm:w-16 sm:h-16 xs:w-16 xs:h-16 rounded align-self-end object-cover"
                                                      src="<?php echo e($top[$i]->image); ?>" />
                                              </a>
                                          <?php endif; ?>
                                      </div>
                                  </div>
                              </div>
                              
                              <div class="col-span-1 md:col-span-1 lg:col-span-4 xl:col-span-1 grid grid-cols-1 xl:grid-cols-2 xl:gap-6">
                                  <?php if(isset($top[$i+1])): ?>
                                      <div>
                                          <div class="flex gap-4 false">
                                              <div class="<?php echo e($setting->theme == 'white' ? 'bg-white' : 'bg-black'); ?> flex gap-6 w-full shrink">
                                                  <div class="flex flex-col">
                                                      <a class="<?php echo e($setting->theme == 'white' ? 'text-color-charcoal-900' : 'text-color-white'); ?> mb-4 hover:underline"
                                                        href="<?php echo e(route('article_detail', [$top[$i+1]->slug, $top[$i+1]->id])); ?>">
                                                          <h2 class="font-headline-2xs font-medium">
                                                              <?php echo e($top[$i+1]->title); ?>

                                                          </h2>
                                                      </a>
                                                      <p class="flex gap-2 flex-col">
                                                          <span class="font-metadata <?php echo e($setting->theme == 'white' ? 'text-color-charcoal-600' : 'text-color-white'); ?>  uppercase">
                                                              <?php echo e(\Carbon\Carbon::parse($top[$i+1]->created_at)->diffForHumans()); ?>

                                                          </span>
                                                      </p>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  <?php endif; ?>
                                  
                                  <?php if(isset($top[$i+2])): ?>
                                      <div>
                                          <div class="flex gap-4 false">
                                              <div class="<?php echo e($setting->theme == 'white' ?  'bg-white' : 'bg-black'); ?> flex gap-6 w-full shrink">
                                                  <div class="flex flex-col">
                                                      <a class="<?php echo e($setting->theme == 'white' ? 'text-color-charcoal-900' : 'text-color-white'); ?>  mb-4 hover:underline"
                                                        href="<?php echo e(route('article_detail', [$top[$i+2]->slug, $top[$i+2]->id])); ?>">
                                                          <h2 class="font-headline-2xs font-medium">
                                                              <?php echo e($top[$i+2]->title); ?>

                                                          </h2>
                                                      </a>
                                                      <p class="flex gap-2 flex-col">
                                                          <span class="font-metadata <?php echo e($setting->theme == 'white' ? 'text-color-charcoal-600' : 'text-color-white'); ?>  uppercase">
                                                              <?php echo e(\Carbon\Carbon::parse($top[$i+2]->created_at)->diffForHumans()); ?>

                                                          </span>
                                                      </p>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  <?php endif; ?>
                              </div>
                          </div>
                      </div>
                      <div class="py-4">
                          <hr class="shrink-0 bg-divider  border-none w-full h-divider <?php echo e($setting->theme == 'white' ? 'bg-black' : 'bg-white'); ?>" role="separator" />
                      </div>
                  <?php endfor; ?>
  
          
                </div>
                <div class="hidden xl:hidden">
                  <hr class="shrink-0 bg-divider border-none w-full h-divider <?php echo e($setting->theme == 'white' ? 'bg-black' : 'bg-white'); ?>" role="separator" />
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
        
        <div class="grid">
          <div class="order-1"></div>
          <?php if($setting->advert): ?>
          <div class="hidden md:flex flex-col justify-center items-center order-2 pt-5">
            <div class="min-w-full min-h-full justify-center items-center">
              <div class="color-black relative flex items-start justify-center aw970px ah250px" style="height:250px">
                <div id="homepage_mid_desktop_0" data-freestar-ad="true" style="width:970px;height:250px"
                  class="transition-box duration-250 align-center background-repeat relative flex items-start justify-center ease-in [&amp;>iframe]:m-auto bg-inherit opacity-100 aw970px ah250px">
                  <div style="width:100%;height:100%" class="min-w-full animate-shimmer will-change-background-position via-18% to-33% from-8% absolute mb-0 ml-auto mr-auto mt-0 flex items-center justify-center bg-gradient-to-r from-[#f6f7f8] via-[#edeef1] to-[#f6f7f8] bg-[length:200%_100%] opacity-100 aw100% ah100%">
                       
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="flex"></div>
  
     <div class="container mx-auto xs:p-4 xs:grid-cols-4 xs:gap-4 sm:p-4 sm:grid-cols-4 sm:gap-4 md:p-6 md:grid-cols-8 md:gap-6 lg:p-6 lg:grid-cols-12 lg:gap-6 xl:p-6 xl:grid-cols-16 xl:gap-6">
       
      <div class="grid">
          <div class="flex md:hidden flex-col justify-center items-center order-1"></div>
           
          <div class="order-2">
           
            <div class="flex flex-col gap-6">
              <div class="flex">
                <hr class="shrink-0 border-none w-full h-divider  <?php echo e($setting->theme == 'white' ? 'bg-black' : 'bg-white'); ?>" role="separator">
              </div>
                  <?php if($adminRole): ?>
                  <div class="relative py-2">
                    <div class="sm:flex hidden justify-center items-center mb-4">
                        <button id="toggleAccordion6" class="flex h-10 min-w-[152px] font-label font-medium justify-center items-center bg-[--bg] hover:bg-[--bgHover] text-[--textColor] rounded-[--radius]"
                            style="--bg: #000000; --bgHover: #000000; --textColor: #FFFFFF; --radius: 1px;">
                            Edit Section
                        </button>
                    </div>
                    
                        <!-- Accordion Content -->
                        <div id="accordionContent6" class="accordion-content fixed left-0 top-auto h-[300px] right-20 bottom-0 md:absolute md:bottom-auto md:left-auto md:top-[calc(100%_+_8px)] md:h-max md:right-[-3px] md:transition-none z-[100] bg-[#fff] p-8 shadow rounded-lg translate-x-0 transition-transform translate-y-0"
                            style="width:400px; display: none;">
                            
                            <button id="closeAccordion6" class="absolute top-4 right-4">
                                <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.40001 18.3076L5.69226 17.5999L11.2923 11.9999L5.69226 6.39989L6.40001 5.69214L12 11.2921L17.6 5.69214L18.3078 6.39989L12.7078 11.9999L18.3078 17.5999L17.6 18.3076L12 12.7076L6.40001 18.3076Z"></path>
                                </svg>
                            </button>
                    
                            <span class="block mb-6 text-charcoal-900 font-title">Modify this section</span>
                    
                            <form action="<?php echo e(route('update_admin_home')); ?>" method="post" class="dialog flex flex-col gap-6 font-normal tracking-wide text-xs">
                              <?php echo csrf_field(); ?>
                
                              <!-- Toggle Switch -->
                              <span class="cursor-[inherit] top-2">
                                <label class="group relative max-w-fit inline-flex items-center justify-start cursor-pointer tap-highlight-transparent p-2 -m-2 select-none">
                                    <!-- Hidden field to submit 'off' if checkbox is unchecked -->
                              <input type="hidden" name="newsletter" value="off">

                              <!-- Actual checkbox -->
                              <input
                                  class="font-inherit text-[100%] leading-[1.15] m-0 p-0 overflow-visible box-border absolute top-0 w-full h-full opacity-[0.0001] z-[1] cursor-pointer"
                                  type="checkbox"
                                  name="newsletter"
                                  value="on"
                                  <?php if($setting->newsletter): ?> checked <?php endif; ?>>
                                
                                    <span class="relative inline-flex items-center justify-center w-5 h-5 border-2 border-gray-500 rounded">
                                      <svg
                                          aria-hidden="true" fill="none" role="presentation" stroke="white"
                                          stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          viewBox="0 0 17 18"
                                          class="w-4 h-3 opacity-0 transition-opacity">
                                          <polyline points="1 9 7 14 15 4"></polyline>
                                      </svg>
                                  
                                    </span>&nbsp;&nbsp;
                                    Show Section 
                                </label>
                              </span>
                              
                    
                              <!-- Submit Button -->
                              <button type="submit" class="w-full bg-black text-white p-2 rounded">Submit</button>
                            </form>
                        </div>
                    </div>
                    
                    <script>
                        // Get the button and content elements
                        const toggleButton6 = document.getElementById('toggleAccordion6');
                        const accordionContent6 = document.getElementById('accordionContent6');
                        const closeButton6 = document.getElementById('closeAccordion6');
                    
                        // Function to toggle the accordion visibility
                        function toggleAccordion6() {
                            // Toggle visibility of the accordion content
                            if (accordionContent6.style.display === "none" || accordionContent6.style.display === "") {
                                accordionContent6.style.display = "block"; // Show the content
                            } else {
                                accordionContent6.style.display = "none"; // Hide the content
                            }
                        }
                    
                        // Event listener for the toggle button
                        toggleButton6.addEventListener('click', toggleAccordion6);
                    
                        // Event listener for the close button inside the accordion
                        closeButton6.addEventListener('click', () => {
                            accordionContent6.style.display = "none"; // Hide the content when clicked
                        });
                    </script>
                <?php endif; ?>
              <div class="uppercase">
                <?php
                  $title = isset($newsletters[0]) ? $newsletters[0]->id : null;

                  $url = $title ?  route('newsletter_detail', $title) : '';
                ?>
                <a target="" class="flex gap-2 items-center z-50 hover:z-50 " href="<?php echo e($url); ?>">
                  <h2 class="<?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-600' : 'text-color-white'); ?> font-title  hover:underline">Newsletters</h2><svg class=""
                    fill="none" height="24" viewBox="0 0 25 24" width="25" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M5.5 13H16.67L11.79 17.88C11.4 18.27 11.4 18.91 11.79 19.3C12.18 19.69 12.81 19.69 13.2 19.3L19.79 12.71C20.18 12.32 20.18 11.69 19.79 11.3L13.21 4.69997C12.82 4.30997 12.19 4.30997 11.8 4.69997C11.41 5.08997 11.41 5.71997 11.8 6.10997L16.67 11H5.5C4.95 11 4.5 11.45 4.5 12C4.5 12.55 4.95 13 5.5 13Z"
                      fill="<?php echo e($setting->theme == 'white' ? 'black' : 'white'); ?>"></path>
                  </svg>
                </a></div>
              <form id="form" action="<?php echo e(route('subscribe', 'test')); ?>" method="post" class="grid gap-6 grid-cols-4 md:grid-cols-8 lg:grid-cols-16 xl:grid-cols-16">
                <?php echo csrf_field(); ?>
                <div class="col-span-4 md:col-span-8 lg:col-span-5 xl:col-span-6 pb-6">
                  <div class="border p-6 md:p-10 lg:p-6"><span
                      class="<?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> font-headline-xs font-medium ">Don't miss another
                      story.</span>
                      <span class="block font-headline-3xs font-normal <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?>">
                        Subscribe to the
                      100xinsider Newsletter today
                      <!-- -->.
                    </span>
                    <div class="flex flex-col md:flex-row lg:flex-col xl:flex-row gap-4 justify-start items-center pt-2">
                      <div class="group flex flex-col data-[hidden=true]:hidden w-full relative justify-end data-[has-label=true]:mt-[calc(theme(fontSize.small)_+_10px)]"
                        data-slot="base" data-filled="true" data-filled-within="true">
                        <div data-slot="main-wrapper" class="h-full flex flex-col">
                          <div  class="relative w-full inline-flex tap-highlight-transparent flex-row items-center shadow-sm px-3 gap-3 border-medium border-default-200 data-[hover=true]:border-default-400 group-data-[focus=true]:border-default-foreground h-10 min-h-10 rounded-small transition-background !duration-150 transition-colors motion-reduce:transition-none !h-12"
                            style="cursor:text">
                            <div data-slot="inner-wrapper" class="inline-flex w-full items-center h-full box-border"><input
                                data-slot="input"
                                class="w-full font-normal bg-transparent !outline-none placeholder:text-foreground-500 focus-visible:outline-none data-[has-start-content=true]:ps-1.5 data-[has-end-content=true]:pe-1.5 file:cursor-pointer file:bg-transparent file:border-0 autofill:bg-transparent bg-clip-text text-small border-transparent focus:border-transparent focus:ring-0 focus:outline-none font-label"
                                 name="email" type="email" placeholder="Enter your Email"
                                 value=""></div>
                          </div>
                        </div>
                      </div>
                     <button type="submit"
                        class="z-0 group relative inline-flex items-center justify-center box-border appearance-none select-none whitespace-nowrap font-normal subpixel-antialiased overflow-hidden tap-highlight-transparent data-[pressed=true]:scale-[0.97] outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 px-6 min-w-24 h-12 text-medium gap-3 rounded-large [&amp;>svg]:max-w-[theme(spacing.8)] transition-transform-colors-opacity motion-reduce:transition-none text-default-foreground data-[hover=true]:opacity-hover w-full md:w-auto lg:w-full xl:w-auto bg-new-yellow">
                        <div class="flex gap-2 p-4 pl-6 items-center"><span class="text-color-dark-grey font-label font-medium">Sign me
                            up</span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <mask id="mask0_2411_93" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="16" height="16">
                              <rect x="0.5" y="0.50061" width="16" height="16" fill="#D9D9D9"></rect>
                            </mask>
                            <g mask="url(#mask0_2411_93)">
                              <path
                                d="M3.16669 12.834V4.1673L13.4487 8.50063L3.16669 12.834ZM3.83335 11.834L11.7334 8.50063L3.83335 5.1673V7.75696L7.06419 8.50063L3.83335 9.2443V11.834Z"
                                fill="#262626"></path>
                            </g>
                          </svg></div>
                      </button>
                    </div>
                    <span class="pt-4 font-metadata <?php echo e($setting->theme == 'white' ? 'text-charcoal-600' : 'text-color-white'); ?>">
                      <span class="<?php echo e($setting->theme == 'white' ? 'text-color-dark-grey' : 'text-color-white'); ?> ">By signing
                        up, you will receive emails about 100xinsider products and you agree to our 
                      </span>
                        <a class="border-b-[1px] border-black !no-underline" href="/terms">
                          <span class="<?php echo e($setting->theme == 'white' ? 'text-color-dark-grey' : 'text-color-white'); ?>">
                            terms of use
                          </span>
                        </a>
                        <span class="<?php echo e($setting->theme == 'white' ? 'text-color-dark-grey' : 'text-color-white'); ?>"> and
                      </span>
                      <a class="border-b-[1px] border-black !no-underline" href="/privacy"><span
                          class="<?php echo e($setting->theme == 'white' ? 'text-color-dark-grey' : 'text-color-white'); ?>">privacy policy</span>
                        </a>
                        <span  class="<?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-600' : 'text-color-white'); ?> font-metadata ">.</span></span>
                  </div>
                </div>
                <div class="col-span-4 md:col-span-8 lg:col-span-11 xl:col-span-10">
                  <div class="gap-4 grid flex-col grid-cols-1 md:grid-cols-2 xl:grid-cols-3">
                    
                    <?php $__currentLoopData = $newsletters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="flex">
                      <div class="w-full">
                        <div class="pt-4 md:pt-0 grid grid-cols-[1fr_5fr] h-[100%] md:h-[130px] lg:h-[120px] xl:h-[130px]">
                          
                          <div class="col-span-1 flex justify-center relative">
                            <span class="cursor-[inherit] top-2 absolute">
                              <label class="group relative max-w-fit inline-flex items-center justify-start cursor-pointer tap-highlight-transparent p-2 -m-2 select-none">
                                <input  class="font-inherit text-[100%] leading-[1.15] m-0 p-0 overflow-visible box-border absolute top-0 w-full h-full opacity-[0.0001] z-[1] cursor-pointer"
                                  type="checkbox" name="letter_id[]" value="<?php echo e($data->id); ?>">
                                  <span class="relative inline-flex items-center justify-center w-5 h-5 border-2 border-gray-500 rounded">
                                    <svg
                                        aria-hidden="true" fill="none" role="presentation" stroke="white"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        viewBox="0 0 17 18"
                                        class="w-4 h-3 opacity-0 transition-opacity">
                                        <polyline points="1 9 7 14 15 4"></polyline>
                                    </svg>
                                </span>
                              </label>
                            </span>
                          </div>
                          <div class="col-start-2 col-span-3 flex flex-col gap-1">
                            <div><a class="hover:underline" href="<?php echo e(route('newsletter_detail', $data->id)); ?>">
                                <h3 class="font-headline-2xs font-normal <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey' : 'text-color-white'); ?>"><?php echo e(\Illuminate\Support\Str::limit($data->title, 25, '..')); ?></h3>
                              </a></div>
                            <div>
                              <span class="text-color-grey font-body-sm leading-6 <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey  text-charcoal-600' : 'text-color-white'); ?> line-clamp-2">
                              <?php echo \Illuminate\Support\Str::limit($data->description, 60, '..'); ?>

                            </span>
                            </div>
                            
                          </div>
                        </div>
                        <div class="pt-4 md:pt-0"></div>
                        <hr class="shrink-0 bg-divider border-none w-full h-divider <?php echo e($setting->theme == 'white' ? 'bg-black' : 'bg-white'); ?>" role="separator">
                      </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
  
                   
                  </div>
                </div>
              </form>
              <script>
                document.addEventListener("DOMContentLoaded", function() {
                    document.querySelector("#form").addEventListener("submit", function(event) {
                        let checkboxes = document.querySelectorAll("input[name='letter_id[]']");
                        let isChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);
                        
                        if (!isChecked) {
                            alert("Please select at least one newsletter before subscribing.");
                            event.preventDefault(); // Prevent form submission
                        }
                    });
                });
                </script>
                
            </div>
           
          </div>
          
  
          <?php if(count($articles) > 0): ?>
          <div class="order-3">
            
            <div class="grid gap-4 grid-cols-4 md:gap-6 md:grid-cols-8 lg:grid-cols-12 xl:grid-cols-16">
              <div class="order-1 col-span-4 md:col-span-8 lg:col-span-12 xl:order-2 xl:col-span-12 xl:row-span-2">
                <div class="pb-6">
                  <hr class="shrink-0 border-none w-full h-divider  <?php echo e($setting->theme == 'white' ? 'bg-black' : 'bg-white'); ?>" role="separator">
                </div>
   

              <?php if($adminRole): ?>
              <div class="relative">
                <div class="sm:flex hidden justify-center items-center mb-4">
                    <button id="toggleAccordion" class="flex h-10 min-w-[152px] font-label font-medium justify-center items-center bg-[--bg] hover:bg-[--bgHover] text-[--textColor] rounded-[--radius]"
                        style="--bg: #000000; --bgHover: #000000; --textColor: #FFFFFF; --radius: 1px;">
                        Edit Section
                    </button>
                </div>
            
                <!-- Accordion Content -->
                <div id="accordionContent" class="accordion-content fixed left-0 top-auto h-[300px] right-20 bottom-0 md:absolute md:bottom-auto md:left-auto md:top-[calc(100%_+_8px)] md:h-max md:right-[-3px] md:transition-none z-[100] bg-[#fff] p-8 shadow rounded-lg translate-x-0 transition-transform translate-y-0"
                    style="width:400px; display: none;">
                    
                    <button id="closeAccordion" class="absolute top-4 right-4">
                        <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.40001 18.3076L5.69226 17.5999L11.2923 11.9999L5.69226 6.39989L6.40001 5.69214L12 11.2921L17.6 5.69214L18.3078 6.39989L12.7078 11.9999L18.3078 17.5999L17.6 18.3076L12 12.7076L6.40001 18.3076Z"></path>
                        </svg>
                    </button>
            
                    <span class="block mb-6 text-charcoal-900 font-title">Modify this section</span>
            
                    <form action="<?php echo e(route('update_admin_home')); ?>" method="post" class="dialog flex flex-col gap-6 font-normal tracking-wide text-xs">
                      <?php echo csrf_field(); ?>
        
                      <!-- Toggle Switch -->
                      <span class="cursor-[inherit] top-2">
                        <label class="group relative max-w-fit inline-flex items-center justify-start cursor-pointer tap-highlight-transparent p-2 -m-2 select-none">
                                <!-- Hidden field to submit 'off' if checkbox is unchecked -->
                                <input type="hidden" name="third_section_show" value="off">

                                <!-- Actual checkbox -->
                                <input
                                    class="font-inherit text-[100%] leading-[1.15] m-0 p-0 overflow-visible box-border absolute top-0 w-full h-full opacity-[0.0001] z-[1] cursor-pointer"
                                    type="checkbox"
                                    name="third_section_show"
                                    value="on"
                                    <?php if($setting->third_section_show): ?> checked <?php endif; ?>>
                                  
                            <span class="relative inline-flex items-center justify-center w-5 h-5 border-2 border-gray-500 rounded">
                              <svg
                                  aria-hidden="true" fill="none" role="presentation" stroke="white"
                                  stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  viewBox="0 0 17 18"
                                  class="w-4 h-3 opacity-0 transition-opacity">
                                  <polyline points="1 9 7 14 15 4"></polyline>
                              </svg>
                          
                            </span>&nbsp;&nbsp;
                            Show Section 
                        </label>
                      </span>
                      
                      <!-- Select Dropdown (Hidden by Default) -->
                        <select id="third_section" required name="third_section" class=" p-2 border border-gray-300 rounded-md">
                          <option value="">Select a category</option>
                          <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($data->id == $setting->third_section ): ?>
                            <option selected value="<?php echo e($data->id); ?>">
                              <?php echo e($data->title); ?>

                            </option>
                            <?php else: ?>
                            <option value="<?php echo e($data->id); ?>">
                              <?php echo e($data->title); ?>

                            </option>
                            <?php endif; ?>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                      
            
                      <!-- Submit Button -->
                      <button type="submit" class="w-full bg-black text-white p-2 rounded">Submit</button>
                    </form>
                </div>
            </div>
            
            <script>
                // Get the button and content elements
                const toggleButton = document.getElementById('toggleAccordion');
                const accordionContent = document.getElementById('accordionContent');
                const closeButton = document.getElementById('closeAccordion');
            
                // Function to toggle the accordion visibility
                function toggleAccordion() {
                    // Toggle visibility of the accordion content
                    if (accordionContent.style.display === "none" || accordionContent.style.display === "") {
                        accordionContent.style.display = "block"; // Show the content
                    } else {
                        accordionContent.style.display = "none"; // Hide the content
                    }
                }
            
                // Event listener for the toggle button
                toggleButton.addEventListener('click', toggleAccordion);
            
                // Event listener for the close button inside the accordion
                closeButton.addEventListener('click', () => {
                    accordionContent.style.display = "none"; // Hide the content when clicked
                });
            </script>
            <?php endif; ?>
            
              
                 
                <div class="flex pb-6 items-center">
                  
                  <h2 class=" font-title <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-600' : 'text-color-white'); ?> uppercase">
                    <?php echo e($articles[0]?->article_category->title); ?>

                  </h2>
                </div>
                
                <div class="hidden md:flex">
                  
                  <div class=" flex flex-col gap-1 md:flex-row false ">
                    <div class="relative inline-block h-12 w-[60px]">
                      
                      <img alt="elipse" loading="lazy" width="20" height="20"
                        class="h-8 min-h-8 w-8 min-w-8" style="color:transparent"
                        src="/img/elipse.png"><span
                        class="absolute bottom-0 right-0 font-body <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> uppercase"><?php echo e(sprintf('%02d', 1)); ?>

                        <!-- -->.
                      </span>
                    </div>
                    <div class=" <?php echo e($setting->theme == 'white' ?  'bg-white' : 'bg-black'); ?> flex gap-6 w-full shrink flex-col md:flex-row">
                      <div class="flex flex-col">
                        <a class="<?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> mb-4 hover:underline"
                          href="<?php echo e(route('article_detail', [$articles[0]->slug, $articles[0]->id])); ?>">
                          <h3 class="font-headline font-medium">
                            <?php echo e($articles[0]->title); ?>

                          </h3>
                        </a>
                        <p class="font-body  <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?>  mb-4 line-clamp-3">
                          <?php echo \Illuminate\Support\Str::limit($articles[0]->content, 60, '..'); ?>

                        </p>
  
                        <p class="flex gap-2 flex-col">
                         <span
                          class="font-metadata-lg font-medium <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> uppercase ">
                          <span class="mr-2">  By 
                            <?php for($i = 0; $i < count($articles[0]->article_creators); $i++): ?>
                            <?php
                             $data = $articles[0]->article_creators[$i];
                            ?>
                            <?php if($i > 0): ?>
                               ,
                            <?php endif; ?>
                           
                            <a
                             class="<?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> hover:underline"
                              href="<?php echo e(route('author_detail', $data->user->id)); ?>">
                              <?php echo e($data->user->first_name.' '.$data->user->last_name); ?>

                            </a>
                            <?php endfor; ?>
                          </span>
                         
                          </span>
                        <span class="font-metadata <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-600' : 'text-color-white'); ?> uppercase">
                          <?php echo e(\Carbon\Carbon::parse($articles[0]->created_at)->diffForHumans()); ?>

                                                  
                        </span>
                        </p>
                      </div>
                      <a 
                        class="flex shrink-0 flex-col"
                        href="<?php echo e(route('article_detail', [$articles[0]->slug, $articles[0]->id])); ?>">
                        <img
                          alt="<?php echo e($articles[0]->slug); ?>" width="416" height="234" 
                          class="w-full md:w-60 md:h-[335px] lg:w-[416px] lg:h-[334px] rounded align-self-end object-cover"
                          style="color: transparent;"
                          src="<?php echo e(asset($articles[0]->image)); ?>"></a>
                    </div>
                  </div>
  
                </div>
                <div class="flex md:hidden">
  
                  <div class="flex flex-col gap-1 md:flex-row false">
                    
                    <div class="relative inline-block h-12 w-[60px]">
                     
                      <img alt="elipse" loading="lazy" width="20" height="20"
                        class="h-8 min-h-8 w-8 min-w-8" style="color:transparent"
                        src="/img/elipse.png"><span
                        class="absolute bottom-0 right-0 font-body text-color-charcoal-900 uppercase">
                        <?php echo e(sprintf('%02d', 1)); ?>

                        <!-- -->.
                      </span>
                    </div>
                    
                      <div class=" <?php echo e($setting->theme == 'white' ?   'bg-white' :'bg-black'); ?> flex gap-6 w-full shrink flex-col md:flex-row">
                     
                        <div class="flex flex-col">
                        <a class="<?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> mb-4 hover:underline"
                          href="<?php echo e(route('article_detail', [$articles[0]->slug, $articles[0]->id])); ?>">
                          <h3 class="font-headline font-medium">
                            <?php echo e($articles[0]->title); ?>

                          </h3>
                        </a>
                        <p class="font-body <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?>  mb-4 line-clamp-3">
                          <?php echo \Illuminate\Support\Str::limit($articles[0]->content, 60, '..'); ?>

                        </p>
                        <p class="flex gap-2 flex-col">
                          <?php for($i = 0; $i < count($articles[0]->article_creators); $i++): ?>
                           <?php
                            $data = $articles[0]->article_creators[$i];
                           ?>
                           <?php if($i > 0): ?>
                              ,
                           <?php endif; ?>
                          <span
                            class="font-metadata-lg font-medium <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> uppercase "><span class="mr-2">By <a
                                class="<?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> hover:underline"
                                href="<?php echo e(route('author_detail', $data->user->id)); ?>">
                                <?php echo e($data->user->first_name.' '.$data->user->last_name); ?>

                              </a>
                              </span>
                          <?php endfor; ?>
                          </span><span
                            class="font-metadata <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> uppercase">
                            <?php echo e(\Carbon\Carbon::parse($articles[0]->created_at)->diffForHumans()); ?>

                          </span></p>
                      </div>
                      <a class="flex shrink-0 flex-col"
                        href="<?php echo e(route('article_detail', [$articles[0]->slug, $articles[0]->id])); ?>">
                        <img width="416" height="234" class="w-full md:w-60 md:h-[335px] lg:w-[416px] lg:h-[334px] rounded align-self-end object-cover"
                          src="<?php echo e(asset($articles[0]->article_creators[0]->user->image)); ?>"></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="order-2 col-span-4 md:order-3 md:col-span-8 lg:col-span-12 xl:order-3 xl:col-span-12 xl:row-span-6">
                <div class="pb-6">
                  <hr class="shrink-0 bg-divider border-none w-full h-divider  <?php echo e($setting->theme == 'white' ? 'bg-black' : 'bg-white'); ?>" role="separator">
                </div>
               
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                  <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php if($articles[0]->id != $data->id): ?>
                  <div class="flex flex-col">
                    <div class="min-h-[103px]">
                      <div class="flex gap-4 false">
                        <div class="relative inline-block h-[30px] w-9">
                          <img alt="elipse" loading="lazy" width="20"
                            height="20" decoding="async" data-nimg="1" class="h-5 min-h-5 w-5 min-w-5"
                            style="color: transparent;"
                            src="img/elipse.png">
                            <span class="absolute bottom-0 right-0 font-body-sm <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> uppercase"><?php echo e(sprintf('%02d', $num++)); ?>.</span></div>
                        <div class=" <?php echo e($setting->theme == 'white' ?  'bg-white' : 'bg-black'); ?> flex gap-6 w-full shrink">
                          <div class="flex flex-col">
                            <a class="<?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> mb-4 hover:underline"
                              href="<?php echo e(route('article_detail', [$data->slug, $data->id])); ?>">
                              <h2 class="font-headline-2xs <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> font-medium">
                                <?php echo e($data->title); ?>

                              </h2>
                            </a>
                            <p class="flex gap-2 flex-col">
                              <span class="font-metadata-lg font-medium <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> uppercase ">
                                By
                                <?php for($i = 0; $i < count($data->article_creators); $i++): ?>
                                  <?php
                                    $item = $data->article_creators[$i];
                                  ?>
                                  <?php if($i > 0): ?>
                                      ,
                                  <?php endif; ?>
                                  <span class="mr-2">
                                    <a class="<?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> hover:underline"
                                      href="<?php echo e(route('author_detail', $item->user->id)); ?>"> <?php echo e($item->user->first_name.' '.$item->user->last_name); ?></a></span>
                                    </span>
                                  <?php endfor; ?>
                                
                                  
                                </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="py-4">
                      <hr class="shrink-0 bg-divider border-none w-full h-divider  <?php echo e($setting->theme == 'white' ? 'bg-black' : 'bg-white'); ?>" role="separator">
                    </div>
                  </div>
                  <?php endif; ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
                </div>
              </div>
  
              <?php if($setting->advert): ?>
              <div class="order-3 col-span-full">
                <div class="color-black relative flex items-start justify-center aw970px ah250px" style="height:250px">
                  <div id="homepage_mid_dynamic_1"  style="width:970px;height:250px"
                    class="transition-box duration-250 align-center background-repeat relative flex items-start justify-center ease-in [&amp;>iframe]:m-auto bg-inherit opacity-100 aw970px ah250px"
                    name="coindesk_homepage_desktop_leaderboard_2">
                   
                  </div>
                </div>
              </div>
              <?php endif; ?>
  
              <div class="grid order-4 xl:order-1 md:order-3 col-span-4 md:col-span-8 lg:col-span-12 xl:col-span-4 xl:row-span-8 gap-6">
                
                <div class="grid grid-cols-1 lg:grid-cols-3 xl:grid-cols-1 gap-6">
                  <?php
                    $categories = collect($categories);
                    $cat1 = $categories->where('id', '=', $setting->fourth_section)->first();
                    $opinion = \App\Models\Article::where([ 'category_id'=> $cat1->id])->limit(4)->get();
                  ?>
                  <div class="flex flex-col col-span-1 lg:col-span-2 xl:col-span-1">
                    <div class="pb-6">
                      <hr class="shrink-0 border-none w-full h-divider <?php echo e($setting->theme == 'white' ? 'bg-black' : 'bg-white'); ?>" role="separator">
                    </div>
                   <?php if($adminRole): ?>
                      <div class="relative">
                        <div class="sm:flex hidden justify-center items-center mb-4">
                            <button id="toggleAccordion2" class="flex h-10 min-w-[152px] font-label font-medium justify-center items-center bg-[--bg] hover:bg-[--bgHover] text-[--textColor] rounded-[--radius]"
                                style="--bg: #000000; --bgHover: #000000; --textColor: #FFFFFF; --radius: 1px;">
                                Edit Section
                            </button>
                        </div>
                        
                            <!-- Accordion Content -->
                            <div id="accordionContent2" class="accordion-content fixed left-0 top-auto h-[300px] right-20 bottom-0 md:absolute md:bottom-auto md:left-auto md:top-[calc(100%_+_8px)] md:h-max md:right-[-3px] md:transition-none z-[100] bg-[#fff] p-8 shadow rounded-lg translate-x-0 transition-transform translate-y-0"
                                style="width:400px; display: none;">
                                
                                <button id="closeAccordion2" class="absolute top-4 right-4">
                                    <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.40001 18.3076L5.69226 17.5999L11.2923 11.9999L5.69226 6.39989L6.40001 5.69214L12 11.2921L17.6 5.69214L18.3078 6.39989L12.7078 11.9999L18.3078 17.5999L17.6 18.3076L12 12.7076L6.40001 18.3076Z"></path>
                                    </svg>
                                </button>
                        
                                <span class="block mb-6 text-charcoal-900 font-title">Modify this section</span>
                        
                                <form action="<?php echo e(route('update_admin_home')); ?>" method="post" class="dialog flex flex-col gap-6 font-normal tracking-wide text-xs">
                                  <?php echo csrf_field(); ?>
                    
                                  <!-- Toggle Switch -->
                                  <span class="cursor-[inherit] top-2">
                                    <label class="group relative max-w-fit inline-flex items-center justify-start cursor-pointer tap-highlight-transparent p-2 -m-2 select-none">
                                       <!-- Hidden field to submit 'off' if checkbox is unchecked -->
                                      <input type="hidden" name="fourth_section_show" value="off">

                                      <!-- Actual checkbox -->
                                      <input
                                          class="font-inherit text-[100%] leading-[1.15] m-0 p-0 overflow-visible box-border absolute top-0 w-full h-full opacity-[0.0001] z-[1] cursor-pointer"
                                          type="checkbox"
                                          name="fourth_section_show"
                                          value="on"
                                          <?php if($setting->fourth_section_show): ?> checked <?php endif; ?>>
                                        
                                        <span class="relative inline-flex items-center justify-center w-5 h-5 border-2 border-gray-500 rounded">
                                          <svg
                                              aria-hidden="true" fill="none" role="presentation" stroke="white"
                                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              viewBox="0 0 17 18"
                                              class="w-4 h-3 opacity-0 transition-opacity">
                                              <polyline points="1 9 7 14 15 4"></polyline>
                                          </svg>
                                      
                                        </span>&nbsp;&nbsp;
                                        Show Section 
                                    </label>
                                  </span>
                                  
                                  <!-- Select Dropdown (Hidden by Default) -->
                                    <select id="fourth_section" required name="fourth_section" class=" p-2 border border-gray-300 rounded-md">
                                      <option value="">Select a category</option>
                                      <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($data->id == $setting->fourth_section ): ?>
                                        <option selected value="<?php echo e($data->id); ?>">
                                          <?php echo e($data->title); ?>

                                        </option>
                                        <?php else: ?>
                                        <option value="<?php echo e($data->id); ?>">
                                          <?php echo e($data->title); ?>

                                        </option>
                                        <?php endif; ?>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                  
                        
                                  <!-- Submit Button -->
                                  <button type="submit" class="w-full bg-black text-white p-2 rounded">Submit</button>
                                </form>
                            </div>
                        </div>
                        
                        <script>
                            // Get the button and content elements
                            const toggleButton2 = document.getElementById('toggleAccordion2');
                            const accordionContent2 = document.getElementById('accordionContent2');
                            const closeButton2 = document.getElementById('closeAccordion2');
                        
                            // Function to toggle the accordion visibility
                            function toggleAccordion2() {
                                // Toggle visibility of the accordion content
                                if (accordionContent2.style.display === "none" || accordionContent2.style.display === "") {
                                    accordionContent2.style.display = "block"; // Show the content
                                } else {
                                    accordionContent2.style.display = "none"; // Hide the content
                                }
                            }
                        
                            // Event listener for the toggle button
                            toggleButton2.addEventListener('click', toggleAccordion2);
                        
                            // Event listener for the close button inside the accordion
                            closeButton2.addEventListener('click', () => {
                                accordionContent2.style.display = "none"; // Hide the content when clicked
                            });
                        </script>
                   <?php endif; ?>
                    <div class="pb-6 uppercase">
                      <a target="__blank" class="flex gap-2 items-center z-50 hover:z-50 " href="<?php echo e(route('category_detail', $cat1->id)); ?>">
                        <h2 class="<?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> font-title  hover:underline"><?php echo e($cat1->title); ?></h2><svg
                          class="" fill="none" height="24" viewBox="0 0 25 24" width="25" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M5.5 13H16.67L11.79 17.88C11.4 18.27 11.4 18.91 11.79 19.3C12.18 19.69 12.81 19.69 13.2 19.3L19.79 12.71C20.18 12.32 20.18 11.69 19.79 11.3L13.21 4.69997C12.82 4.30997 12.19 4.30997 11.8 4.69997C11.41 5.08997 11.41 5.71997 11.8 6.10997L16.67 11H5.5C4.95 11 4.5 11.45 4.5 12C4.5 12.55 4.95 13 5.5 13Z"
                            fill="<?php echo e($setting->theme == 'white' ? '#676767' : 'white'); ?>"></path>
                        </svg>
                      </a>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-1  gap-4">
                      <?php $__currentLoopData = $opinion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div>
                        <div class="flex gap-4 false ">
                          <div class="<?php echo e($setting->theme == 'white' ? 'bg-white' :'bg-black'); ?> flex gap-6 w-full shrink justify-between">
                            <div class="flex flex-col-reverse gap-2">
                              <a class="<?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> mb-4 hover:underline"
                                href="<?php echo e(route('article_detail', [$data->slug, $data->id])); ?>">
                                <h3 class="font-headline-2xs font-normal">
                                 <?php echo e($data->title); ?>

                                </h3>
                              </a>
                              <p class="flex gap-2 flex-col"><span
                                  class="font-metadata-lg font-medium <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> uppercase "><span
                                    class="mr-2">By 
                                    <?php for($i = 0; $i < count($data->article_creators); $i++): ?>
                                  <?php
                                    $item = $data->article_creators[$i];
                                  ?>
                                  <?php if($i > 0): ?>
                                      ,
                                  <?php endif; ?>
                                  <span class="mr-2">
                                    <a class="<?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> hover:underline"
                                      href="<?php echo e(route('author_detail', $item->user->id)); ?>"> <?php echo e($item->user->first_name.' '.$item->user->last_name); ?></a></span>
                                    </span>
                                  <?php endfor; ?>
                                    </p>
                            </div>
                            <a class="flex shrink-0 flex-col" href="<?php echo e(route('author_detail', $data->article_creators[0]->user->id)); ?>"><img
                                 width="128" height="128"  
                                class="w-16 h-16 object-cover rounded-full max-w-full max-h-full object-cover"
                                style="color: transparent; background-size: cover; background-position: 50% 50%;"
                                src="<?php echo e(asset($data->article_creators[0]->user->image)); ?>"></a>
                          </div>
                        </div>
                        <div class="py-4 py-4">
                          <hr class="shrink-0 bg-divider border-none w-full h-divider <?php echo e($setting->theme == 'white' ? 'bg-black' : 'bg-white'); ?>" role="separator">
                        </div>
                      </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                      
                      
                    </div>
                  </div>
  
                  <?php
                    $cat2 = $categories->where('id', '=', $setting->fifth_section)->first();
                    $press = \App\Models\Article::where([ 'category_id'=> $cat2->id])->limit(4)->get();
                    $transition = $press[0]->id;
                  ?>
                  <div class="flex flex-col col-span-1">
                    <div class="pb-6">
                      <hr class="shrink-0 border-none w-full h-divider <?php echo e($setting->theme == 'white' ? 'bg-black' : 'bg-white'); ?>" role="separator">
                    </div>
                    <?php if($adminRole): ?>
                    <div class="relative">
                      <div class="sm:flex hidden justify-center items-center mb-4">
                          <button id="toggleAccordion3" class="flex h-10 min-w-[152px] font-label font-medium justify-center items-center bg-[--bg] hover:bg-[--bgHover] text-[--textColor] rounded-[--radius]"
                              style="--bg: #000000; --bgHover: #000000; --textColor: #FFFFFF; --radius: 1px;">
                              Edit Section
                          </button>
                      </div>
                      
                          <!-- Accordion Content -->
                          <div id="accordionContent3" class="accordion-content fixed left-0 top-auto h-[300px] right-20 bottom-0 md:absolute md:bottom-auto md:left-auto md:top-[calc(100%_+_8px)] md:h-max md:right-[-3px] md:transition-none z-[100] bg-[#fff] p-8 shadow rounded-lg translate-x-0 transition-transform translate-y-0"
                              style="width:400px; display: none;">
                              
                              <button id="closeAccordion3" class="absolute top-4 right-4">
                                  <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M6.40001 18.3076L5.69226 17.5999L11.2923 11.9999L5.69226 6.39989L6.40001 5.69214L12 11.2921L17.6 5.69214L18.3078 6.39989L12.7078 11.9999L18.3078 17.5999L17.6 18.3076L12 12.7076L6.40001 18.3076Z"></path>
                                  </svg>
                              </button>
                      
                              <span class="block mb-6 text-charcoal-900 font-title">Modify this section</span>
                      
                              <form action="<?php echo e(route('update_admin_home')); ?>" method="post" class="dialog flex flex-col gap-6 font-normal tracking-wide text-xs">
                                <?php echo csrf_field(); ?>
                  
                                <!-- Toggle Switch -->
                                <span class="cursor-[inherit] top-2">
                                  <label class="group relative max-w-fit inline-flex items-center justify-start cursor-pointer tap-highlight-transparent p-2 -m-2 select-none">
                                     <!-- Hidden field to submit 'off' if checkbox is unchecked -->
                                <input type="hidden" name="fifth_section_show" value="off">

                                <!-- Actual checkbox -->
                                <input
                                    class="font-inherit text-[100%] leading-[1.15] m-0 p-0 overflow-visible box-border absolute top-0 w-full h-full opacity-[0.0001] z-[1] cursor-pointer"
                                    type="checkbox"
                                    name="fifth_section_show"
                                    value="on"
                                    <?php if($setting->fifth_section_show): ?> checked <?php endif; ?>>
                                  
                                      <span class="relative inline-flex items-center justify-center w-5 h-5 border-2 border-gray-500 rounded">
                                        <svg
                                            aria-hidden="true" fill="none" role="presentation" stroke="white"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            viewBox="0 0 17 18"
                                            class="w-4 h-3 opacity-0 transition-opacity">
                                            <polyline points="1 9 7 14 15 4"></polyline>
                                        </svg>
                                    
                                      </span>&nbsp;&nbsp;
                                      Show Section 
                                  </label>
                                </span>
                                
                                <!-- Select Dropdown (Hidden by Default) -->
                                  <select id="fifth_section" required name="fifth_section" class=" p-2 border border-gray-300 rounded-md">
                                    <option value="">Select a category</option>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <?php if($data->id == $setting->fifth_section ): ?>
                                      <option selected value="<?php echo e($data->id); ?>">
                                        <?php echo e($data->title); ?>

                                      </option>
                                      <?php else: ?>
                                      <option value="<?php echo e($data->id); ?>">
                                        <?php echo e($data->title); ?>

                                      </option>
                                      <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>
                                
                      
                                <!-- Submit Button -->
                                <button type="submit" class="w-full bg-black text-white p-2 rounded">Submit</button>
                              </form>
                          </div>
                      </div>
                      
                      <script>
                          // Get the button and content elements
                          const toggleButton3 = document.getElementById('toggleAccordion3');
                          const accordionContent3 = document.getElementById('accordionContent3');
                          const closeButton3 = document.getElementById('closeAccordion3');
                      
                          // Function to toggle the accordion visibility
                          function toggleAccordion3() {
                              // Toggle visibility of the accordion content
                              if (accordionContent3.style.display === "none" || accordionContent3.style.display === "") {
                                  accordionContent3.style.display = "block"; // Show the content
                              } else {
                                  accordionContent3.style.display = "none"; // Hide the content
                              }
                          }
                      
                          // Event listener for the toggle button
                          toggleButton3.addEventListener('click', toggleAccordion3);
                      
                          // Event listener for the close button inside the accordion
                          closeButton3.addEventListener('click', () => {
                              accordionContent3.style.display = "none"; // Hide the content when clicked
                          });
                      </script>
                   <?php endif; ?>
                    <div class="pb-6 uppercase">
                      <a target="" class="flex gap-2 items-center z-50 hover:z-50 "
                        href="<?php echo e(route('category_detail', $cat2->id)); ?>">
                        <h2 class="text-color-dark-grey font-title <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> hover:underline"><?php echo e($cat2->title); ?></h2><svg
                          class="" fill="none" height="24" viewBox="0 0 25 24" width="25" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M5.5 13H16.67L11.79 17.88C11.4 18.27 11.4 18.91 11.79 19.3C12.18 19.69 12.81 19.69 13.2 19.3L19.79 12.71C20.18 12.32 20.18 11.69 19.79 11.3L13.21 4.69997C12.82 4.30997 12.19 4.30997 11.8 4.69997C11.41 5.08997 11.41 5.71997 11.8 6.10997L16.67 11H5.5C4.95 11 4.5 11.45 4.5 12C4.5 12.55 4.95 13 5.5 13Z"
                            fill="<?php echo e($setting->theme == 'white' ? '#676767' : 'white'); ?>"></path>
                        </svg>
                      </a></div>
                    <div class="flex flex-col gap-6">
                      <div class="relative">
                        <div>
                          <?php $__currentLoopData = $press; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <div class="transition-opacity duration-300 min-h-[130px] <?php echo e($transition == $data->id ? 'block' : 'hidden'); ?>">
                            <div class="">
                              <div class="<?php echo e($setting->theme == 'white' ? 'bg-white' : 'bg-black'); ?> flex gap-6 w-full shrink">
                                <div class="flex flex-col">
                                  <a class="<?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> mb-4 hover:underline"
                                    href="<?php echo e(route('article_detail', [$data->slug, $data->id])); ?>">
                                    <h2 class="font-headline-2xs <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> font-medium">
                                      <?php echo e($data->title); ?>

                                    </h2>
                                  </a>
                                  <p class="flex gap-2 flex-col">
                                    <span
                                      class="font-metadata-lg font-medium <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> uppercase ">
                                      <?php if($data->info): ?>
                                      <span class="mr-2">
                                        <?php echo e($data->info); ?>

                                      </span>
                                      <?php endif; ?>
                                    </span>
                                    <span class="font-metadata <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> uppercase">
                                      <?php echo e(\Carbon\Carbon::parse($data->created_at)->diffForHumans()); ?>

                          
                                    </span></p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         
                          
                        </div>
                        
                      </div>
                    </div>
                  </div>
  
                </div>
              </div>
            </div>
          </div>
          <?php endif; ?>
        </div>
      </div>
     
    
          <div>
          <?php if($event): ?>
            <div class="container mx-auto xs:p-4 xs:grid-cols-4 xs:gap-4 sm:p-4 sm:grid-cols-4 sm:gap-4 md:p-6 md:grid-cols-8 md:gap-6 lg:p-6 lg:grid-cols-12 lg:gap-6 xl:p-6 xl:grid-cols-16 xl:gap-6">
              <div class="flex py-6">
                <hr class="shrink-0 border-none w-full h-divider <?php echo e($setting->theme == 'white' ? 'bg-black' : 'bg-white'); ?>" role="separator">
              </div>
              <?php if($adminRole): ?>
              <div class="relative">
                <div class="sm:flex hidden justify-center items-center mb-4">
                    <button id="toggleAccordion4" class="flex h-10 min-w-[152px] font-label font-medium justify-center items-center bg-[--bg] hover:bg-[--bgHover] text-[--textColor] rounded-[--radius]"
                        style="--bg: #000000; --bgHover: #000000; --textColor: #FFFFFF; --radius: 1px;">
                        Edit Section
                    </button>
                </div>
                
                    <!-- Accordion Content -->
                    <div id="accordionContent4" class="accordion-content fixed left-0 top-auto h-[300px] right-20 bottom-0 md:absolute md:bottom-auto md:left-auto md:top-[calc(100%_+_8px)] md:h-max md:right-[-3px] md:transition-none z-[100] bg-[#fff] p-8 shadow rounded-lg translate-x-0 transition-transform translate-y-0"
                        style="width:400px; display: none;">
                        
                        <button id="closeAccordion4" class="absolute top-4 right-4">
                            <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.40001 18.3076L5.69226 17.5999L11.2923 11.9999L5.69226 6.39989L6.40001 5.69214L12 11.2921L17.6 5.69214L18.3078 6.39989L12.7078 11.9999L18.3078 17.5999L17.6 18.3076L12 12.7076L6.40001 18.3076Z"></path>
                            </svg>
                        </button>
                
                        <span class="block mb-6 text-charcoal-900 font-title">Modify this section</span>
                
                        <form action="<?php echo e(route('update_admin_home')); ?>" method="post" class="dialog flex flex-col gap-6 font-normal tracking-wide text-xs">
                          <?php echo csrf_field(); ?>
            
                          <!-- Toggle Switch -->
                          <span class="cursor-[inherit] top-2">
                            <label class="group relative max-w-fit inline-flex items-center justify-start cursor-pointer tap-highlight-transparent p-2 -m-2 select-none">
                               <!-- Hidden field to submit 'off' if checkbox is unchecked -->
                               <input type="hidden" name="event_section" value="off">

                               <!-- Actual checkbox -->
                               <input
                                   class="font-inherit text-[100%] leading-[1.15] m-0 p-0 overflow-visible box-border absolute top-0 w-full h-full opacity-[0.0001] z-[1] cursor-pointer"
                                   type="checkbox"
                                   name="event_section"
                                   value="on"
                                   <?php if($setting->event_section): ?> checked <?php endif; ?>>
                                 
                                <span class="relative inline-flex items-center justify-center w-5 h-5 border-2 border-gray-500 rounded">
                                  <svg
                                      aria-hidden="true" fill="none" role="presentation" stroke="white"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      viewBox="0 0 17 18"
                                      class="w-4 h-3 opacity-0 transition-opacity">
                                      <polyline points="1 9 7 14 15 4"></polyline>
                                  </svg>
                              
                                </span>&nbsp;&nbsp;
                                Show Section 
                            </label>
                          </span>
                          
                
                          <!-- Submit Button -->
                          <button type="submit" class="w-full bg-black text-white p-2 rounded">Submit</button>
                        </form>
                    </div>
                </div>
                
                <script>
                    // Get the button and content elements
                    const toggleButton4 = document.getElementById('toggleAccordion4');
                    const accordionContent4= document.getElementById('accordionContent4');
                    const closeButton4 = document.getElementById('closeAccordion4');
                
                    // Function to toggle the accordion visibility
                    function toggleAccordion4() {
                        // Toggle visibility of the accordion content
                        if (accordionContent4.style.display === "none" || accordionContent4.style.display === "") {
                            accordionContent4.style.display = "block"; // Show the content
                        } else {
                            accordionContent4.style.display = "none"; // Hide the content
                        }
                    }
                
                    // Event listener for the toggle button
                    toggleButton4.addEventListener('click', toggleAccordion4);
                
                    // Event listener for the close button inside the accordion
                    closeButton4.addEventListener('click', () => {
                        accordionContent4.style.display = "none"; // Hide the content when clicked
                    });
                </script>
             <?php endif; ?>
              <a target="_blank" class="flex gap-2 items-center z-50 hover:z-50 "
                href="<?php echo e($event->category); ?>">
                <h2 class="<?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> font-title  hover:underline uppercase">
                  <?php echo e($event->title); ?>

                </h2>
                <svg class=""
                  fill="none" height="24" viewBox="0 0 25 24" width="25" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M5.5 13H16.67L11.79 17.88C11.4 18.27 11.4 18.91 11.79 19.3C12.18 19.69 12.81 19.69 13.2 19.3L19.79 12.71C20.18 12.32 20.18 11.69 19.79 11.3L13.21 4.69997C12.82 4.30997 12.19 4.30997 11.8 4.69997C11.41 5.08997 11.41 5.71997 11.8 6.10997L16.67 11H5.5C4.95 11 4.5 11.45 4.5 12C4.5 12.55 4.95 13 5.5 13Z"
                    fill="<?php echo e($setting->theme == 'white' ? '#676767' : 'white'); ?>"></path>
                </svg>
              </a>
              
            </div>
  
            <div class="w-full overflow-hidden relative flex flex-col">
              <div class="relative">
                <div class="flex flex-col gap-4 self-stretch pt-4 lg:py-4">
                  <div class="flex bg-[#000] py-8 flex-col justify-center items-center self-stretch h-[580px] md:h-[665px] lg:h-[281px] xl:h-[368px]">
                    <div class="container mx-auto xs:p-4 xs:grid-cols-4 xs:gap-4 sm:p-4 sm:grid-cols-4 sm:gap-4 md:p-6 md:grid-cols-8 md:gap-6 lg:p-6 lg:grid-cols-12 lg:gap-6 xl:p-6 xl:grid-cols-16 xl:gap-6">
                      <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <div
                          class="transition-opacity duration-300 order-1 lg:order-2  flex gap-6 w-full shrink items-center justify-center">
                          <div class="flex flex-col shrink-0 items-center justify-center w-full">
                            <img width="585" height="329" 
                              class="object-cover h-[300px] w-full  md:h-[383px] lg:w-[585px] lg:h-[329px] xl:w-[728px] xl:h-[432px] rounded align-self-end"
                              style="color: transparent;"
                              src="<?php echo e(asset($event->image)); ?>">
                          </div>
                        </div>
                        <div
                          class="transition-opacity duration-300 order-2 lg:order-1 justify-start lg:justify-center flex flex-col gap-6 h-[290px] md:h-[290px] lg:h-full">
                          <div class="flex flex-col gap-2">
                            <h3 class="text-color-black font-headline-sm font-medium text-[#fff]">
                            <?php echo e($event->title); ?>  
                            </h3><span
                              class="text-color-black font-body font-medium text-[#D4D4D4]">
                            <?php echo $event->content; ?>

                            </span>
                          </div>
                          <?php if($event->category): ?>
                          <a href="<?php echo e($event->category); ?>"  class="z-0 group relative inline-flex items-center justify-center box-border appearance-none select-none whitespace-nowrap font-normal subpixel-antialiased overflow-hidden tap-highlight-transparent data-[pressed=true]:scale-[0.97] outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 px-4 min-w-20 text-small gap-2 rounded-small [&amp;>svg]:max-w-[theme(spacing.8)] transition-transform-colors-opacity motion-reduce:transition-none bg-default text-default-foreground data-[hover=true]:opacity-hover h-10 w-[140px] border border-[#FFD200]"><span
                              class="text-color-black font-label font-medium leading-6">Learn More</span><svg class="" fill="none"
                              height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M5.5 13H16.67L11.79 17.88C11.4 18.27 11.4 18.91 11.79 19.3C12.18 19.69 12.81 19.69 13.2 19.3L19.79 12.71C20.18 12.32 20.18 11.69 19.79 11.3L13.21 4.69997C12.82 4.30997 12.19 4.30997 11.8 4.69997C11.41 5.08997 11.41 5.71997 11.8 6.10997L16.67 11H5.5C4.95 11 4.5 11.45 4.5 12C4.5 12.55 4.95 13 5.5 13Z"
                                fill="#262626"></path>
                            </svg>
                          </a>
                          <?php endif; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="container">
                  <div class="flex flex-row justify-center lg:justify-start"></div>
                </div>
              </div>
            </div>
            <?php endif; ?>
          
          </div>
             
            <div class="container mx-auto xs:p-4 xs:grid-cols-4 xs:gap-4 sm:p-4 sm:grid-cols-4 sm:gap-4 md:p-6 md:grid-cols-8 md:gap-6 lg:p-6 lg:grid-cols-12 lg:gap-6 xl:p-6 xl:grid-cols-16 xl:gap-6">
              <div class="grid">
                <div class="flex flex-col justify-center items-center order-1 lg:order-2 xl:hidden"></div>
                
                <div class="order-2 lg:order-1">
                  <div class="flex flex-col">
        
                    <hr class="shrink-0 border-none w-full h-divider <?php echo e($setting->theme == 'white' ? 'bg-black' : 'bg-white'); ?>" role="separator">
                    <?php if($adminRole): ?>
                      <div class="relative py-6">
                        <div class="sm:flex hidden justify-center items-center mb-4">
                            <button id="toggleAccordion5" class="flex h-10 min-w-[152px] font-label font-medium justify-center items-center bg-[--bg] hover:bg-[--bgHover] text-[--textColor] rounded-[--radius]"
                                style="--bg: #000000; --bgHover: #000000; --textColor: #FFFFFF; --radius: 1px;">
                                Edit Section
                            </button>
                        </div>
                        
                            <!-- Accordion Content -->
                            <div id="accordionContent5" class="accordion-content fixed left-0 top-auto h-[300px] right-20 bottom-0 md:absolute md:bottom-auto md:left-auto md:top-[calc(100%_+_8px)] md:h-max md:right-[-3px] md:transition-none z-[100] bg-[#fff] p-8 shadow rounded-lg translate-x-0 transition-transform translate-y-0"
                                style="width:400px; display: none;">
                                
                                <button id="closeAccordion5" class="absolute top-4 right-4">
                                    <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.40001 18.3076L5.69226 17.5999L11.2923 11.9999L5.69226 6.39989L6.40001 5.69214L12 11.2921L17.6 5.69214L18.3078 6.39989L12.7078 11.9999L18.3078 17.5999L17.6 18.3076L12 12.7076L6.40001 18.3076Z"></path>
                                    </svg>
                                </button>
                        
                                <span class="block mb-6 text-charcoal-900 font-title">Modify this section</span>
                        
                                <form action="<?php echo e(route('update_admin_home')); ?>" method="post" class="dialog flex flex-col gap-6 font-normal tracking-wide text-xs">
                                  <?php echo csrf_field(); ?>
                    
                                  <!-- Toggle Switch -->
                                  <span class="cursor-[inherit] top-2">
                                    <label class="group relative max-w-fit inline-flex items-center justify-start cursor-pointer tap-highlight-transparent p-2 -m-2 select-none">
                                       <!-- Hidden field to submit 'off' if checkbox is unchecked -->
                                <input type="hidden" name="podcast" value="off">

                                <!-- Actual checkbox -->
                                <input
                                    class="font-inherit text-[100%] leading-[1.15] m-0 p-0 overflow-visible box-border absolute top-0 w-full h-full opacity-[0.0001] z-[1] cursor-pointer"
                                    type="checkbox"
                                    name="podcast"
                                    value="on"
                                    <?php if($setting->podcast): ?> checked <?php endif; ?>>
                                  
                                        <span class="relative inline-flex items-center justify-center w-5 h-5 border-2 border-gray-500 rounded">
                                          <svg
                                              aria-hidden="true" fill="none" role="presentation" stroke="white"
                                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              viewBox="0 0 17 18"
                                              class="w-4 h-3 opacity-0 transition-opacity">
                                              <polyline points="1 9 7 14 15 4"></polyline>
                                          </svg>
                                      
                                        </span>&nbsp;&nbsp;
                                        Show Section 
                                    </label>
                                  </span>
                                  
                        
                                  <!-- Submit Button -->
                                  <button type="submit" class="w-full bg-black text-white p-2 rounded">Submit</button>
                                </form>
                            </div>
                        </div>
                        
                        <script>
                            // Get the button and content elements
                            const toggleButton5 = document.getElementById('toggleAccordion5');
                            const accordionContent5= document.getElementById('accordionContent5');
                            const closeButton5 = document.getElementById('closeAccordion5');
                        
                            // Function to toggle the accordion visibility
                            function toggleAccordion5() {
                                // Toggle visibility of the accordion content
                                if (accordionContent5.style.display === "none" || accordionContent5.style.display === "") {
                                    accordionContent5.style.display = "block"; // Show the content
                                } else {
                                    accordionContent4.style.display = "none"; // Hide the content
                                }
                            }
                        
                            // Event listener for the toggle button
                            toggleButton5.addEventListener('click', toggleAccordion5);
                        
                            // Event listener for the close button inside the accordion
                            closeButton5.addEventListener('click', () => {
                                accordionContent5.style.display = "none"; // Hide the content when clicked
                            });
                        </script>
                    <?php endif; ?>
                    <div class="py-6 uppercase">
                      
                      <a target="" class="flex gap-2 items-center z-50 hover:z-50 "href="<?php echo e(isset($podcasts[0]) ? route('podcast_detail', $podcasts[0]->podcast_id).'?episode='.$podcasts[0]->id : ''); ?>">
                        <h2 class="<?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> font-title <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> hover:underline">Podcasts</h2><svg class=""
                          fill="none" height="24" viewBox="0 0 25 24" width="25" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M5.5 13H16.67L11.79 17.88C11.4 18.27 11.4 18.91 11.79 19.3C12.18 19.69 12.81 19.69 13.2 19.3L19.79 12.71C20.18 12.32 20.18 11.69 19.79 11.3L13.21 4.69997C12.82 4.30997 12.19 4.30997 11.8 4.69997C11.41 5.08997 11.41 5.71997 11.8 6.10997L16.67 11H5.5C4.95 11 4.5 11.45 4.5 12C4.5 12.55 4.95 13 5.5 13Z"
                            fill="<?php echo e($setting->theme == 'white' ? '#676767' : 'white'); ?>"></path>
                        </svg>
                      </a>
                    </div>
                    <div class="grid gap-6 grid-cols-4 md:grid-cols-8 lg:grid-cols-12 xl:grid-cols-16">
                      
                      <div class="hidden lg:flex lg:flex-col order-1 lg:order-1 col-span-4 lg:col-span-3 xl:col-span-4">
                        <?php for($i = 0; $i < min(3, count($podcasts)); $i++): ?>
                        <div class="flex flex-col gap-2 min-w-[300px] md:min-w-full">
                            <a class="hover:underline" href="<?php echo e(route('podcast_detail', $podcasts[$i]->podcast_id).'?episode='.$podcasts[$i]->id); ?>">
                                <h3 class="<?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> font-headline-2xs font-normal">
                                    <?php echo e($podcasts[$i]->title); ?>

                                </h3>
                            </a>
                            <span class="<?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> font-body-sm line-clamp-2 ">
                                <?php echo $podcasts[$i]->description; ?>

                            </span>
                            <div class="hidden md:flex md:py-4 lg:py-6 ">
                                <hr class="shrink-0 bg-divider border-none w-full h-divider <?php echo e($setting->theme == 'white' ? 'bg-black' : 'bg-white'); ?>" role="separator">
                            </div>
                        </div>
                      <?php endfor; ?>
                    </div>
  
                  
                    <div class="hidden lg:flex lg:flex-col order-2 col-span-4 lg:col-span-3 xl:col-span-4">
                      
                        <?php for($i = 3; $i < min(6, count($podcasts)); $i++): ?>
                        <div class="flex flex-col gap-2 min-w-[300px] md:min-w-full">
                            <a class="hover:underline" href="<?php echo e(route('podcast_detail', $podcasts[$i]->podcast_id).'?episode='.$podcasts[$i]->id); ?>">
                                <h3 class="<?php echo e($setting->theme == 'white' ? 'text-color-black text-charcoal-900' : 'text-color-white'); ?>  font-headline-2xs font-normal">
                                    <?php echo e($podcasts[$i]->title); ?>

                                </h3>
                            </a>
                            <span class="<?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> font-body-sm line-clamp-2 ">
                                <?php echo $podcasts[$i]->description; ?>

                            </span>
                            <div class="hidden md:flex md:py-4 lg:py-6 ">
                                <hr class="shrink-0 bg-divider border-none w-full h-divider <?php echo e($setting->theme == 'white' ? 'bg-black' : 'bg-white'); ?>" role="separator">
                            </div>
                        </div>
                        <?php endfor; ?>
                         
                      </div>
                      <div class="hidden lg:flex lg:flex-col order-0 col-span-4 lg:col-span-3 xl:col-span-4">
                      
                        <?php for($i = 6; $i < min(9, count($podcasts)); $i++): ?>
                        <div class="flex flex-col gap-2 min-w-[300px] md:min-w-full">
                            <a class="hover:underline" href="<?php echo e(route('podcast_detail', $podcasts[$i]->podcast_id).'?episode='.$podcasts[$i]->id); ?>">
                                <h3 class="font-headline-2xs font-normal <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> ">
                                    <?php echo e($podcasts[$i]->title); ?>

                                </h3>
                            </a>
                            <span class="<?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> font-body-sm line-clamp-2">
                                <?php echo $podcasts[$i]->description; ?>

                            </span>
                            <div class="hidden md:flex md:py-4 lg:py-6 ">
                                <hr class="shrink-0 bg-divider border-none w-full h-divider <?php echo e($setting->theme == 'white' ? 'bg-black' : 'bg-white'); ?>" role="separator">
                            </div>
                        </div>
                        <?php endfor; ?>
                         
                      </div>
                      
      
                      <div class="order-4 col-span-4 lg:col-span-6 xl:col-span-4 pb-6 md:pb-0
                                    grid grid-rows-1 grid-flow-col grid-cols-[repeat(auto-fill,minmax(300px,1fr))]
                                    md:grid-cols-1 md:grid-rows-none md:grid-flow-row gap-4
                                    no-scrollbar overflow-x-auto overflow-y-hidden md:overflow-auto md:overflow-y-scroll
                                    lg:hidden">
  
                        <?php for($i = 0; $i < min(0, count($podcasts)); $i++): ?>
                        <div class="flex flex-col gap-2 min-w-[300px] md:min-w-full">
                            <a class="hover:underline" href="<?php echo e(route('podcast_detail', $podcasts[$i]->podcast_id).'?episode='.$podcasts[$i]->id); ?>">
                                <h3 class="<?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> font-headline-2xs font-normal">
                                    <?php echo e($podcasts[$i]->title); ?>

                                </h3>
                            </a>
                            <span class="<?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> font-body-sm line-clamp-2 ">
                                <?php echo $podcasts[$i]->description; ?>

                            </span>
                            <div class="hidden md:flex md:py-4 lg:py-6 ">
                                <hr class="shrink-0 bg-divider border-none w-full h-divider <?php echo e($setting->theme == 'white' ? 'bg-black' : 'bg-white'); ?>" role="separator">
                            </div>
                        </div>
                       <?php endfor; ?>
                         
                      </div>
                    </div>
                  </div>
                </div>
              
  
  
                <div class="order-3">
                  <div class="flex flex-col">
                    <div>
                      <div class="hidden lg:grid lg:grid-cols-2 gap-6 pt-8">
                        <hr class="shrink-0 border-none w-full h-divider <?php echo e($setting->theme == 'white' ? 'bg-black' : 'bg-white'); ?>" role="separator">
                        <hr class="shrink-0 border-none w-full h-divider <?php echo e($setting->theme == 'white' ? 'bg-black' : 'bg-white'); ?>" role="separator">
                      </div>
                      <div class="grid grid-col-1 lg:grid-cols-2 gap-0 md:gap-6">
                        
                        <?php $__currentLoopData = $breakdown; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(count($category?->articles) > 0): ?>
                        <?php
                            $first = $category?->articles?->first();
                            ?>
                        <div>
                          <div class="flex pt-8 lg:hidden md:pt-8">
                            <hr class="shrink-0 border-none w-full h-divider <?php echo e($setting->theme == 'white' ? 'bg-black' : 'bg-white'); ?>" role="separator">
                          </div>
                         <?php if($adminRole): ?>
                         <div class="sm:flex py-4 hidden justify-center items-center mb-4">
                            <a href="<?php echo e(route('update_category_status', $category->id)); ?>" class="flex h-10 min-w-[152px] font-label font-medium justify-center items-center bg-[--bg] hover:bg-[--bgHover] text-[--textColor] rounded-[--radius]"
                                style="--bg: #000000; --bgHover: #000000; --textColor: #FFFFFF; --radius: 1px;">
                               <?php if($category->visible): ?>
                                Click to Hide
                                <?php else: ?>
                                Click to Show
                                <?php endif; ?>
                             </a>
                        </div>
                         <?php endif; ?>
                          <div class="flex flex-col">
                            <div class="flex py-2 uppercase">
                              <a target="" class="flex gap-2 items-center z-50 hover:z-50 "
                                href="<?php echo e(route('category_detail', $category->id)); ?>">
                                <h2 class="<?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> font-title hover:underline"><?php echo e($category->title); ?></h2>
                                <svg
                                  class="" fill="none" height="24" viewBox="0 0 25 24" width="25"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <path
                                    d="M5.5 13H16.67L11.79 17.88C11.4 18.27 11.4 18.91 11.79 19.3C12.18 19.69 12.81 19.69 13.2 19.3L19.79 12.71C20.18 12.32 20.18 11.69 19.79 11.3L13.21 4.69997C12.82 4.30997 12.19 4.30997 11.8 4.69997C11.41 5.08997 11.41 5.71997 11.8 6.10997L16.67 11H5.5C4.95 11 4.5 11.45 4.5 12C4.5 12.55 4.95 13 5.5 13Z"
                                    fill="<?php echo e($setting->theme == 'white' ? '#676767' : 'white'); ?>"></path>
                                </svg>
                              </a>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-2 gap-6">
                              
                              <div class="col-span-1">
  
                                <?php if($first): ?>
                                <div class=" flex gap-4 false ">
                                  <div class="<?php echo e($setting->theme == 'white' ? 'bg-white' :'bg-black'); ?> flex gap-6 w-full shrink flex-col">
                                    <div class="flex flex-col">
                                      <a class="<?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> mb-4 hover:underline"
                                        href="<?php echo e(route('article_detail', [$first->slug ?? '', $first->id])); ?>">
                                        <h2 class="font-headline-xs <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> font-normal">
                                          <?php echo e($first['title']); ?>

                                        </h2>
                                      </a>
                                      <p class="font-body-sm <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-600' : 'text-color-white'); ?> mb-4 line-clamp-3 flex md:hidden">
                                        <?php echo \Illuminate\Support\Str::limit($first['content'], 50, '..'); ?>

                                      </p>
                                      <p class="flex gap-2 flex-col"><span
                                          class="font-metadata-lg font-medium <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> uppercase flex md:hidden"><span
                                            class="mr-2">By
                                            
                                            <?php for($i = 0; $i < count($first->article_creators); $i++): ?>
                                            <?php
                                             $creator = $first->article_creators[$i];
                                            ?>
                                            <?php if($i > 0): ?>
                                               ,
                                            <?php endif; ?>
                                           <span
                                           class="font-metadata-lg font-medium <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> uppercase "><span class="mr-2"> 
                                            <a
                                              class="<?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> hover:underline"
                                               href="<?php echo e(route('author_detail', $creator->user->id)); ?>">
                                               <?php echo e($creator->user['first_name'].' '.$creator->user['last_name']); ?>

                                             </a>
                                           </span>
                                           <?php endfor; ?>
                                           </div>
                                         <a
                                      class="flex shrink-0 flex-col"
                                      href="<?php echo e(route('article_detail', [$first['slug'], $first['id']])); ?>">
                                      <img
                                        width="1920" height="1080" decoding="async"
                                        class="w-full md:w-60 md:h-[135px] lg:w-[416px] lg:h-[234px] rounded align-self-end aspect-video object-cover object-cover"
                                        style="color: transparent;"
                                        src="<?php echo e(asset($first['image'])); ?>"></a>
                                  </div>
                                </div>
                                <?php endif; ?>
  
                              </div>
  
                              <div class="col-span-1 md:col-span-2 lg:col-span-1">
                                
                                <?php $__currentLoopData = $category->articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if( $first->id != $article->id): ?>
                                <div>
                                  <div class="flex gap-4 false ">
                                    <div class="<?php echo e($setting->theme == 'white' ?  'bg-white' :'bg-black'); ?> flex gap-6 w-full shrink">
                                      <div class="flex flex-col">
                                        <a class="<?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> mb-4 hover:underline"
                                          href="<?php echo e(route('article_detail', [$article->slug, $article->id])); ?>">
                                          <h2 class="font-headline-2xs <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> font-medium">
                                            <?php echo e($article->title); ?>

                                          </h2>
                                        </a>
                                        <p class="flex gap-2 flex-col"><span
                                            class="font-metadata <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-600' : 'text-color-white'); ?> uppercase">
                                            <?php echo e(\Carbon\Carbon::parse($article->created_at)->diffForHumans()); ?>

                                          </span></p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="py-4">
                                    <hr class="shrink-0 bg-divider border-none w-full h-divider <?php echo e($setting->theme == 'white' ? 'bg-black' : 'bg-white'); ?>" role="separator">
                                  </div>
                                </div>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                                 
                                
                              </div>
                            </div>
                          </div>
                          <div class="flex md:hidden justify-center items-center"></div>
                          <div class="hidden justify-center items-center"></div>
                          <div class="hidden justify-center items-center"></div>
                        </div>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </div>
                       
                    </div>
                    
                     
                  
                     
                    <div class="flex pt-6">
                      <hr class="shrink-0 border-none w-full h-divider <?php echo e($setting->theme == 'white' ? 'bg-black' : 'bg-white'); ?>" role="separator">
                    </div>
                  </div>
                </div>
              </div>
            </div>     
            
            </section>

            <script>
              document.addEventListener("DOMContentLoaded", function () {
                  const toggleSwitch = document.getElementById("toggleSwitch");
                  const toggleIndicator = document.getElementById("toggleIndicator");
                  const toggleLabel = document.getElementById("toggleLabel");
                  const dropdownContainer = document.getElementById("dropdownContainer");
          
                  toggleSwitch.addEventListener("change", function () {
                      if (this.checked) {
                          toggleIndicator.style.transform = "translateX(24px)";
                          toggleLabel.textContent = "Enabled";
                          dropdownContainer.classList.remove("hidden");
                      } else {
                          toggleIndicator.style.transform = "translateX(0)";
                          toggleLabel.textContent = "Disabled";
                          dropdownContainer.classList.add("hidden");
                      }
                  });
                 

              });
          </script>
          <script>
            $('#top-left').select2({
                    placeholder: "Search for info...",
                    allowClear: true
                });
                $('#top-right').select2({
                    placeholder: "Search for info...",
                    allowClear: true
                });
                $('#second-right').select2({
                    placeholder: "Search for info...",
                    allowClear: true
                });
                 $('#second-left').select2({
                    placeholder: "Search for info...",
                    allowClear: true
                });
                  $('#third_section').select2({
                    placeholder: "Search for info...",
                    allowClear: true
                });
                 $('#fourth_section').select2({
                    placeholder: "Search for info...",
                    allowClear: true
                });
                 $('#fifth_section').select2({
                    placeholder: "Search for info...",
                    allowClear: true
                });
        </script>
            <script>
              document.addEventListener('livewire:load', function () {
                  Livewire.hook('message.processed', (message, component) => {
                      if (document.querySelector("#player")) {
                          new Plyr("#player"); // Reinitialize Plyr when popup opens
                      }
                $('#top-left').select2({
                    placeholder: "Search for info...",
                    allowClear: true
                });
                $('#top-right').select2({
                    placeholder: "Search for info...",
                    allowClear: true
                });
                $('#second-right').select2({
                    placeholder: "Search for category...",
                    allowClear: true
                });
                 $('#second-left').select2({
                    placeholder: "Search for category...",
                    allowClear: true
                });
                  $('#third_section').select2({
                    placeholder: "Search for category...",
                    allowClear: true
                });
                 $('#fourth_section').select2({
                    placeholder: "Search for category...",
                    allowClear: true
                });
                 $('#fifth_section').select2({
                    placeholder: "Search for category...",
                    allowClear: true
                });
              

                  });
              });
          </script>


            </div><?php /**PATH C:\xampp\htdocs\100xinsider\resources\views/livewire/admin/admin-home-component.blade.php ENDPATH**/ ?>