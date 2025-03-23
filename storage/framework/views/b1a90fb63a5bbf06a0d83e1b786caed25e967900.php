<div>
    <section
        class="flex-grow flex justify-center w-full">
        <div class="container mx-auto xs:p-4 xs:grid-cols-4 xs:gap-4 sm:p-4 sm:grid-cols-4 sm:gap-4 md:p-6 md:grid-cols-8 md:gap-6 lg:p-6 lg:grid-cols-12 lg:gap-6 xl:p-6 xl:grid-cols-16 xl:gap-6">
            <div class="mt-8 w-full lg:max-w-[1032px] items-center mx-auto">
                <div class="grid gap-4 grid-cols-4 md:gap-6 md:grid-cols-8 lg:grid-cols-12 xl:grid-cols-16">
                    <div class="order-2 md:order-1 col-span-4 md:col-span-6 lg:col-span-9 xl:col-span-12 items-center ">
                        <div class="flex justify-center md:justify-start">
                            <h1 class="text-color-black font-headline">   <?php echo e($author->first_name.' '.$author->last_name); ?></h1>
                        </div>
                        <div class="pt-2 flex justify-center md:justify-start">
                            <span class="font-metadata-lg font-medium text-[#676767] uppercase">
                                <?php echo e($author->title); ?>

                            </span></div>
                        <div class="[&amp;>label]:cursor-pointer [&amp;>label]:font-sans [&amp;>label]:text-sm [&amp;>label]:text-[#676767] [&amp;>label]:font-semibold">
                            <input type="checkbox" id="toggle-text" class="peer hidden">
                            <div style="display: -webkit-box; -moz-box-orient: vertical; -webkit-line-clamp: 3;"
                                class="overflow-hidden mt-4 font-serif text-[#676767] mb-4 peer-checked:!line-clamp-none pt-8">
                                <div
                                    class="text-color-charcoal-600 font-body lg:text-xl lg:leading-normal tracking-[0.15px] author-header">
                                    <div class="document-body  font-body-lg">
                                        <p><?php echo $author->info; ?></p>
                                    </div>
                                </div>
                            </div>
                            <label for="toggle-text"
                                class="peer-checked:hidden inline-flex gap-2 items-center">Read more <svg
                                    class="undefined mt-[2px]" width="9" height="4" viewBox="0 0 9 4" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.50004 3.94346L0.653442 0.0968628H8.34664L4.50004 3.94346Z"
                                        fill="#676767"></path>
                                </svg></label><label for="toggle-text"
                                class="hidden peer-checked:inline-flex gap-2 items-center">Read less <svg
                                    class="rotate-180 mt-[2px]" width="9" height="4" viewBox="0 0 9 4" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.50004 3.94346L0.653442 0.0968628H8.34664L4.50004 3.94346Z"
                                        fill="#676767"></path>
                                </svg></label>
                        </div>
                        <div class="pt-6 flex flex-wrap gap-6">
                            <?php if($author->twitter): ?>
                                <a target="_blank"
                                title="X"
                                class="w-6 h-6 rounded-full bg-charcoal-25 cursor-pointer inline-flex justify-center items-center"
                                href="<?php echo e($author->twitter); ?>">
                                <svg width="16" height="16" viewBox="0 0 1400 1027" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" aria-labelledby="twitter-svg-a11y-label-id">
                                    <title id="twitter-svg-a11y-label-id">X icon</title>
                                    <path
                                    d="M714.163 519.284L1160.89 0H1055.03L667.137 450.887L357.328 0H0L468.492 681.821L0 1226.37H105.866L515.491 750.218L842.672 1226.37H1200L714.137 519.284H714.163ZM569.165 687.828L521.697 619.934L144.011 79.6944H306.615L611.412 515.685L658.88 583.579L1055.08 1150.3H892.476L569.165 687.854V687.828Z"
                                    fill="#262626"></path>
                                </svg>
                                </a>
                                <?php endif; ?>
                                <?php if( $author->linkedin): ?>
                                <a target="_blank" title="LinkedIn"
                                class="w-6 h-6 rounded-full bg-charcoal-25 cursor-pointer inline-flex justify-center items-center"
                                href="<?php echo e($author->linkedin); ?>">
                                <svg width="24" height="24" fill="none" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                    d="M2.25362 9.21772H6.53986V22.1164H2.25362V9.21772ZM4.42543 3C2.95843 3 2 3.9631 2 5.22719C2 6.46529 2.93038 7.45638 4.36933 7.45638H4.39667C5.89171 7.45638 6.82276 6.46524 6.82276 5.22719C6.79471 3.9631 5.89176 3 4.42543 3ZM17.0638 8.91471C14.7886 8.91471 13.7693 10.1661 13.2007 11.0438V9.21772H8.91314C8.9699 10.4278 8.91314 22.1164 8.91314 22.1164H13.2007V14.9129C13.2007 14.527 13.2287 14.1427 13.3415 13.8663C13.652 13.0961 14.3574 12.2985 15.5407 12.2985C17.0931 12.2985 17.7131 13.4819 17.7131 15.2151V22.1163H22V14.72C22 10.7581 19.8856 8.91471 17.0638 8.91471Z"
                                    fill="#262626"></path>
                                </svg>
                                </a>
                                <?php endif; ?>
                                <?php if($author->email): ?>
                                <a target="_blank" title="Email"
                                class="w-6 h-6 rounded-full bg-charcoal-25 cursor-pointer inline-flex justify-center items-center"
                                href="mailto:<?php echo e($author->email); ?>">
                                <svg width="16" height="16" fill="#262626" version="1.1" id="Capa_1"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75.294 75.294">
                                    <g>
                                    <path
                                        d="M66.097,12.089h-56.9C4.126,12.089,0,16.215,0,21.286v32.722c0,5.071,4.126,9.197,9.197,9.197h56.9   c5.071,0,9.197-4.126,9.197-9.197V21.287C75.295,16.215,71.169,12.089,66.097,12.089z M61.603,18.089L37.647,33.523L13.691,18.089   H61.603z M66.097,57.206h-56.9C7.434,57.206,6,55.771,6,54.009V21.457l29.796,19.16c0.04,0.025,0.083,0.042,0.124,0.065   c0.043,0.024,0.087,0.047,0.131,0.069c0.231,0.119,0.469,0.215,0.712,0.278c0.025,0.007,0.05,0.01,0.075,0.016   c0.267,0.063,0.537,0.102,0.807,0.102c0.001,0,0.002,0,0.002,0c0.002,0,0.003,0,0.004,0c0.27,0,0.54-0.038,0.807-0.102   c0.025-0.006,0.05-0.009,0.075-0.016c0.243-0.063,0.48-0.159,0.712-0.278c0.044-0.022,0.088-0.045,0.131-0.069   c0.041-0.023,0.084-0.04,0.124-0.065l29.796-19.16v32.551C69.295,55.771,67.86,57.206,66.097,57.206z">
                                    </path>
                                    </g>
                                </svg>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div
                        class="order-1 md:order-3 col-span-4 md:col-span-2 lg:col-span-3 xl:col-span-4 md:col-start-7 lg:col-start-10 xl:col-start-13 row-start-1 flex justify-center md:justify-end items-start">
                        <div class="w-[152px] h-[152px] lg:w-60 lg:h-60 flex-shrink-0">
                            <img width="747" height="747" 
                                class="w-full h-full object-cover rounded-full max-w-full max-h-full"
                                style="color:transparent"
                                src="<?php echo e(asset($author->image)); ?>">
                        </div>
                    </div>
                </div>
                
                <div  class="w-full flex flex-wrap justify-center flex-col border-0 md:gap-6 mdmax:gap-4 md:mt-8 mdmax:mt-4  border-solid border-t border-charcoal-600">
                    <p class="font-title text-color-charcoal-600 pt-6 uppercase">
                        Latest from  <?php echo e($author->first_name.' '.$author->last_name); ?>

                    </p>
                    
                   
                    <div class="flex flex-col w-full gap-4">
                       
                        <hr class="py-6 last:mb-0">
                        <?php $__currentLoopData = $creation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                         $article = $data->article;
                         $category = \App\Models\ArticleCategory::find($article->category_id);
                        ?>
                        <div class="flex flex-col gap-4">
                            <div class=" flex gap-4 false ">
                                <div class="bg-white flex gap-6 w-full shrink justify-between">
                                    <div class="flex flex-col">
                                        <p class="mb-4">
                                      <a class="font-title text-charcoal-600 uppercase"
                                                href="<?php echo e(route('category_detail', $category->id)); ?>">
                                                <?php echo e($category->title); ?>

                                            </a>
                                        </p>
                                        <a
                                            class="text-color-charcoal-900 mb-4 hover:underline"
                                            href="<?php echo e(route('article_detail', [$article->slug, $article->id])); ?>">
                                            <h2 class="font-headline-xs font-medium">
                                                <?php echo e($article->title); ?>

                                            </h2>
                                        </a>
                                        <p class="font-body text-charcoal-600 mb-4">
                                            <?php echo \Illuminate\Support\Str::limit($article->content, 60, '..'); ?>

                                        </p>
                                        <p class="flex gap-2 flex-col">
                                            <span
                                                class="font-metadata text-color-charcoal-600 uppercase">
                                                <?php echo e(\Carbon\Carbon::parse($article->created_at)->diffForHumans()); ?>

                                            </span>
                                        </p>
                                    </div>
                                    <a class="flex shrink-0 flex-col"
                                        href="<?php echo e(route('article_detail', [$article->slug, $article->id])); ?>">
                                        <img
                                            width="416" height="234"
                                            class="content-card-image--default rounded align-self-end object-cover object-cover"
                                            style="color: transparent;"
                                            src="<?php echo e(asset($article->image)); ?>"></a>
                                </div>
                            </div>
                            <hr class="my-4">
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                        </div>
                        <?php if(count($creation) > 10): ?>
                        <div class="flex gap-4 items-center justify-center my-12 font-[100] text-[#676767] font-sans text-[12px]">
                            <?php if($creation->onFirstPage()): ?>
                            <a href="<?php echo e($creation->previousPageUrl()); ?>">
                                <svg width="11" height="20" viewBox="0 0 11 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.50001 19.3077L0.192261 10L9.50001 0.692245L10.5635 1.75574L2.31926 10L10.5635 18.2442L9.50001 19.3077Z"
                                        fill="#676767"></path>
                                </svg>
                            </a>
                            <?php endif; ?>
                            <div class="flex gap-4 items-center"><span>Page</span>
                                <button
                                    wire:click='togglePaginate'
                                    class="rounded-lg bg-light-grey-1 hover:bg-light-dark-grey focus:bg-light-yellow-1 cursor-pointer relative"
                                    style="box-shadow:inset 0px 2px 4px 0px rgba(0, 0, 0, 0.06)">
                                    <div style="width:7rem;" class="flex py-2 px-4 gap-2 focus:bg-light-yellow-1">
                                        <div class="focus:bg-light-yellow-1">
                                            <input type="number" class="w-full p-0 border-none bg-inherit focus:border-none focus:bg-light-yellow-1 focus:ring-0 outline-offset-[-1px] focus:outline-offset-[-1px] text-[12px] text-center pagination_page_input__wZ8VL"
                                            value="<?php echo e($creation->currentPage()); ?>">
                                            </div>
                                        <div class="w-[1px] bg-light-grey"></div>
                                        <div class="flex justify-center items-center">
                                            <svg width="9" height="4"
                                                viewBox="0 0 9 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.50004 3.94346L0.653442 0.0968628H8.34664L4.50004 3.94346Z"
                                                    fill="#676767"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <nav class="absolute left-0 h-[360px] overflow-y-scroll rounded-lg shadow-md bg-white <?php echo e($paginate ? '' :  'hidden'); ?>"
                                        role="navigation">
                                        <?php $__currentLoopData = range(1, $creation->lastPage()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a class="block py-2 px-4 text-start hover:bg-light-yellow-1 cursor-pointer first:rounded-t-lg last:rounded-b-lg"
                                        href="<?php echo e(route('author_detail', $author->id) . '?page=' . $page); ?>"
                                        >
                                           <?php echo e($page); ?>

                                        </a>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            
                                    </nav>
                                     
                                </button>
                                <span>of <?php echo e($creation->lastPage()); ?>

                                </span>
                            </div>
                            <?php if($creation->hasMorePages()): ?>
                            <a href="<?php echo e($creation->nextPageUrl()); ?>">
                                <svg width="11" height="20"
                                    viewBox="0 0 11 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1.50576 19.3078L0.442261 18.2443L8.68651 10L0.442261 1.75576L1.50576 0.692261L10.8135 10L1.50576 19.3078Z"
                                        fill="#676767"></path>
                                </svg>
                            </a>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php if($advert): ?>
                    <div class="hidden md:flex flex-col justify-center items-center order-2 pt-5">
                        <div class="min-w-full min-h-full justify-center items-center">
                          <div class="color-black relative flex items-start justify-center aw970px ah250px" style="height:250px">
                            <div id="homepage_mid_desktop_0" data-freestar-ad="true" style="width:970px;height:250px" class="transition-box duration-250 align-center background-repeat relative flex items-start justify-center ease-in [&amp;>iframe]:m-auto bg-inherit opacity-100 aw970px ah250px">
                              <div style="width:100%;height:100%" class="min-w-full animate-shimmer will-change-background-position via-18% to-33% from-8% absolute mb-0 ml-auto mr-auto mt-0 flex items-center justify-center bg-gradient-to-r from-[#f6f7f8] via-[#edeef1] to-[#f6f7f8] bg-[length:200%_100%] opacity-100 aw100% ah100%">
                                   
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php endif; ?>
                    
                </div>
            </div>
        </div>
    </section>
</div><?php /**PATH C:\xampp\htdocs\CoinCrypto\resources\views/livewire/author-component.blade.php ENDPATH**/ ?>