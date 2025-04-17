<div>
  <section  class="flex-grow container">
    <div class="pt-8 grid grid-cols-4 gap-2 md:grid-cols-8 md:gap-4 lg:grid-cols-12 xl:grid-cols-16 items-stretch">
      <div class="flex"></div>
      <div
        class="article-content-wrapper font-title_5 text-charcoal-600 tracking-normal flex justify-between m-auto items-center row-start-1">
        <div class="flex gap-2 font-title">
          <a class="uppercase" href="<?php echo e(route('category_detail', $article->category_id)); ?>">
            <?php echo $article->article_category->title; ?>

          </a>
        </div>
        <div class="relative">
          <button wire:click="toggleShare" class="share-dialog-button flex gap-1 items-center outline-0 text-charcoal-600 font-title font-medium"><svg
              xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
              <mask id="mask0_5141_6895" maskUnits="userSpaceOnUse" x="0" y="0" width="20" height="20">
                <rect width="20" height="20" fill="#D9D9D9"></rect>
              </mask>
              <g mask="url(#mask0_5141_6895)">
                <path
                  d="M5.51324 18.3334C5.12963 18.3334 4.80935 18.205 4.55241 17.948C4.29546 17.6911 4.16699 17.3708 4.16699 16.9872V8.84636C4.16699 8.46275 4.29546 8.14247 4.55241 7.88553C4.80935 7.62858 5.12963 7.50011 5.51324 7.50011H7.27595V8.33344H5.51324C5.38491 8.33344 5.26734 8.38685 5.16053 8.49365C5.05373 8.60046 5.00033 8.71803 5.00033 8.84636V16.9872C5.00033 17.1155 5.05373 17.2331 5.16053 17.3399C5.26734 17.4467 5.38491 17.5001 5.51324 17.5001H14.4874C14.6157 17.5001 14.7333 17.4467 14.8401 17.3399C14.9469 17.2331 15.0003 17.1155 15.0003 16.9872V8.84636C15.0003 8.71803 14.9469 8.60046 14.8401 8.49365C14.7333 8.38685 14.6157 8.33344 14.4874 8.33344H12.7247V7.50011H14.4874C14.871 7.50011 15.1913 7.62858 15.4482 7.88553C15.7052 8.14247 15.8337 8.46275 15.8337 8.84636V16.9872C15.8337 17.3708 15.7052 17.6911 15.4482 17.948C15.1913 18.205 14.871 18.3334 14.4874 18.3334H5.51324ZM9.58366 12.9168V3.84469L7.83366 5.59469L7.24387 5.00011L10.0003 2.24365L12.7568 5.00011L12.167 5.59469L10.417 3.84469V12.9168H9.58366Z"
                  fill="#262626"></path>
              </g>
            </svg>Share
          </button>
          <?php if($open): ?>
          <div class="fixed left-0 top-auto h-[300px] right-0 bottom-0 md:absolute md:bottom-auto md:left-auto md:top-[calc(100%_+_8px)] md:h-max md:right-[-3px] md:transition-none z-[100] bg-[#fff] p-8 shadow rounded-lg translate-x-0 transition-transform translate-y-0 <?php echo e($open ? '' : 'md:hidden'); ?>">
           <button wire:click="toggleShare" class="absolute top-4 right-4">
            <svg height="24" viewBox="0 0 24 24" width="24"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M6.40001 18.3076L5.69226 17.5999L11.2923 11.9999L5.69226 6.39989L6.40001 5.69214L12 11.2921L17.6 5.69214L18.3078 6.39989L12.7078 11.9999L18.3078 17.5999L17.6 18.3076L12 12.7076L6.40001 18.3076Z">
                </path>
              </svg>
            </button>
            <span class="block mb-6 text-charcoal-900 font-title">Share this article</span>
            <div class="dialog grid grid-cols-[repeat(3,_minmax(64px,_1fr))] xxs_smax:gap-x-6 gap-x-12 gap-y-6 font-normal tracking-wide text-xs [&amp;_.share-button]:text-charcoal-900 [&amp;_.share-button]:flex [&amp;_.share-button]:flex-col [&amp;_.share-button]:gap-2 [&amp;_.share-button]:shadow-none [&amp;_.share-button]:items-center [&amp;_span]:flex [&amp;_span]:justify-center [&amp;_span]:items-center [&amp;_span]:w-10 [&amp;_span]:h-10 [&amp;_span]:rounded-full [&amp;_span]:bg-charcoal-25">
              
              <button id="share-button" class="share-button">
                <span>
                <svg width="24" height="24" fill="none" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M17 7H14C13.45 7 13 7.45 13 8C13 8.55 13.45 9 14 9H17C18.65 9 20 10.35 20 12C20 13.65 18.65 15 17 15H14C13.45 15 13 15.45 13 16C13 16.55 13.45 17 14 17H17C19.76 17 22 14.76 22 12C22 9.24 19.76 7 17 7ZM8 12C8 12.55 8.45 13 9 13H15C15.55 13 16 12.55 16 12C16 11.45 15.55 11 15 11H9C8.45 11 8 11.45 8 12ZM10 15H7C5.35 15 4 13.65 4 12C4 10.35 5.35 9 7 9H10C10.55 9 11 8.55 11 8C11 7.45 10.55 7 10 7H7C4.24 7 2 9.24 2 12C2 14.76 4.24 17 7 17H10C10.55 17 11 16.55 11 16C11 15.45 10.55 15 10 15Z"
                        fill="#262626"></path>
                    </svg>
                  </svg>
                </span>Copy link
              </button>
             <a class="share-button" target="_blank"
                href="https://x.com/intent/tweet?utm_source=twitter&amp;text=<?php echo e(route('article_detail', [$article->slug, $article->id])); ?>"><span><svg
                    width="16" height="16" viewBox="0 0 1400 1027" fill="none" xmlns="http://www.w3.org/2000/svg"
                    aria-labelledby="twitter-svg-a11y-label-id">
                    <title id="twitter-svg-a11y-label-id">X icon</title>
                    <path
                      d="M714.163 519.284L1160.89 0H1055.03L667.137 450.887L357.328 0H0L468.492 681.821L0 1226.37H105.866L515.491 750.218L842.672 1226.37H1200L714.137 519.284H714.163ZM569.165 687.828L521.697 619.934L144.011 79.6944H306.615L611.412 515.685L658.88 583.579L1055.08 1150.3H892.476L569.165 687.854V687.828Z"
                      fill="#262626"></path>
                  </svg></span>X (Twitter)</a>
                  <a class="share-button" target="_blank"
                href="https://www.linkedin.com/shareArticle?utm_source=linkedin&amp;mini=true&amp;summary=<?php echo e($article->slug); ?>&amp;url=<?php echo e(route('article_detail', [$article->slug, $article->id])); ?>"><span><svg
                    width="24" height="24" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M2.25362 9.21772H6.53986V22.1164H2.25362V9.21772ZM4.42543 3C2.95843 3 2 3.9631 2 5.22719C2 6.46529 2.93038 7.45638 4.36933 7.45638H4.39667C5.89171 7.45638 6.82276 6.46524 6.82276 5.22719C6.79471 3.9631 5.89176 3 4.42543 3ZM17.0638 8.91471C14.7886 8.91471 13.7693 10.1661 13.2007 11.0438V9.21772H8.91314C8.9699 10.4278 8.91314 22.1164 8.91314 22.1164H13.2007V14.9129C13.2007 14.527 13.2287 14.1427 13.3415 13.8663C13.652 13.0961 14.3574 12.2985 15.5407 12.2985C17.0931 12.2985 17.7131 13.4819 17.7131 15.2151V22.1163H22V14.72C22 10.7581 19.8856 8.91471 17.0638 8.91471Z"
                      fill="#262626"></path>
                  </svg></span>LinkedIn
                </a>
                <a class="share-button" target="_blank"
                href="https://www.facebook.com/sharer/sharer.php?utm_source=facebook&amp;u=<?php echo e(route('article_detail', [$article->slug, $article->id])); ?>"><span><svg
                    width="24" height="24" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M16.3447 13.6068L16.863 10.1942H13.621V7.9796C13.621 7.04596 14.0739 6.13593 15.526 6.13593H17V3.2306C17 3.2306 15.6623 3 14.3834 3C11.7132 3 9.96805 4.63437 9.96805 7.59321V10.1942H7V13.6068H9.96805V21.8566C10.5632 21.9509 11.1732 22 11.7945 22C12.4159 22 13.0259 21.9509 13.621 21.8566V13.6068H16.3447Z"
                      fill="#262626"></path>
                  </svg></span>Facebook
                </a>
                  <a class="share-button" target="_blank"
                href="mailto:%20?subject=<?php echo e($article->slug.' view full story at '.route('article_detail', [$article->slug, $article->id])); ?>"><span><svg
                    width="16" height="16" fill="#262626" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 75.294 75.294">
                    <g>
                      <path
                        d="M66.097,12.089h-56.9C4.126,12.089,0,16.215,0,21.286v32.722c0,5.071,4.126,9.197,9.197,9.197h56.9   c5.071,0,9.197-4.126,9.197-9.197V21.287C75.295,16.215,71.169,12.089,66.097,12.089z M61.603,18.089L37.647,33.523L13.691,18.089   H61.603z M66.097,57.206h-56.9C7.434,57.206,6,55.771,6,54.009V21.457l29.796,19.16c0.04,0.025,0.083,0.042,0.124,0.065   c0.043,0.024,0.087,0.047,0.131,0.069c0.231,0.119,0.469,0.215,0.712,0.278c0.025,0.007,0.05,0.01,0.075,0.016   c0.267,0.063,0.537,0.102,0.807,0.102c0.001,0,0.002,0,0.002,0c0.002,0,0.003,0,0.004,0c0.27,0,0.54-0.038,0.807-0.102   c0.025-0.006,0.05-0.009,0.075-0.016c0.243-0.063,0.48-0.159,0.712-0.278c0.044-0.022,0.088-0.045,0.131-0.069   c0.041-0.023,0.084-0.04,0.124-0.065l29.796-19.16v32.551C69.295,55.771,67.86,57.206,66.097,57.206z">
                      </path>
                    </g>
                  </svg></span>Email</a></div>
          </div>
          <?php endif; ?>
        </div>
      </div>
      <div  class="article-content-wrapper flex flex-col gap-4 row-start-2">
        <div class="flex flex-col gap-4">
          <h1 class="font-headline-lg font-medium <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?>">
            <?php echo $article->title; ?>

          </h1>
          <h2 class="font-headline-xs <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-600' : 'text-color-white'); ?>">
            <?php echo $article->info; ?>

          </h2>
          <div class="uppercase <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> font-metadata font-medium">By 
            <?php for($i = 0; $i < count($article->article_creators); $i++): ?>
            <?php
              $item = $article->article_creators[$i];
            ?>
            <?php if($i > 0): ?>
                ,
            <?php endif; ?>
            <span class="mr-2">
              <a class="<?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> hover:underline"
                href="<?php echo e(route('author_detail', $item->user->id)); ?>"> <?php echo e($item->user->first_name.' '.$item->user->last_name); ?></a></span>
              </span>
            <?php endfor; ?>
            </div>

          <div class="font-metadata flex gap-4 <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-600' : 'text-color-white'); ?> flex-col md:block">
            <span>Updated <?php echo e(\Carbon\Carbon::parse($article->updated_at, 'UTC')->format('M d, Y')); ?> <?php echo e(\Carbon\Carbon::parse($article->updated_at, 'UTC')->format('g a')); ?>  UTC</span>      
            <span class="md:ml-2"> Published <?php echo e(\Carbon\Carbon::parse($article->created_at, 'UTC')->format('M d, Y')); ?> <?php echo e(\Carbon\Carbon::parse($article->updated_at, 'UTC')->format('g a')); ?></span>
          </div>
      
        </div>
        <div class="article-content-wrapper <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> flex flex-col justify-end gap-4 row-start-3 empty:hidden">
          <?php echo $article->content; ?>

        </div>
        <form action="<?php echo e(route('subscribe', 'test')); ?>" method="post" class="flex flex-col gap-2">
          <?php echo csrf_field(); ?>
          <div
            class="border p-6 md:p-10 lg:p-6">
            <span
              class="<?php echo e($setting->theme == 'white' ? 'text-color-dark-grey' : 'text-color-white'); ?> font-headline-xs font-medium ">Don't miss another story.</span><span
              class="block font-headline-3xs font-normal <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?>">Subscribe to the <?php echo e($article->newsletter->title); ?> Newsletter
              today
              <!-- -->.
              <!-- --> 
              <a class="font-medium <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?>" href="<?php echo e(route('newsletters')); ?>">See all newsletters</a>
            </span>
            <div class="flex flex-col md:flex-row gap-4 justify-start items-center pt-2">
              <div class="group flex flex-col data-[hidden=true]:hidden w-full relative justify-end data-[has-label=true]:mt-[calc(theme(fontSize.small)_+_10px)]">
                <div class="h-full flex flex-col">
                  <div
                    class="relative w-full inline-flex tap-highlight-transparent flex-row items-center shadow-sm px-3 gap-3 border-medium border-default-200 data-[hover=true]:border-default-400 group-data-[focus=true]:border-default-foreground h-10 min-h-10 rounded-small transition-background !duration-150 transition-colors motion-reduce:transition-none !h-12"
                    style="cursor:text">
                    <div class="inline-flex w-full items-center h-full box-border">
                      <input value="<?php echo e($article->newsletter_id); ?>" name="letter_id[]" hidden/>
                      <input
                        class="w-full font-normal bg-transparent !outline-none placeholder:text-foreground-500 focus-visible:outline-none data-[has-start-content=true]:ps-1.5 data-[has-end-content=true]:pe-1.5 file:cursor-pointer file:bg-transparent file:border-0 autofill:bg-transparent bg-clip-text text-small border-transparent focus:border-transparent focus:ring-0 focus:outline-none font-label"
                        aria-label="Enter your Email" type="email" placeholder="Enter your Email" name="email"
                       ></div>
                  </div>
                </div>
              </div>
            <button type="submit"
            class="z-0 group relative inline-flex items-center justify-center box-border appearance-none select-none whitespace-nowrap font-normal subpixel-antialiased overflow-hidden tap-highlight-transparent data-[pressed=true]:scale-[0.97] outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 px-6 min-w-24 h-12 text-medium gap-3 rounded-large [&amp;>svg]:max-w-[theme(spacing.8)] transition-transform-colors-opacity motion-reduce:transition-none text-default-foreground data-[hover=true]:opacity-hover w-full md:w-auto bg-new-yellow">
            <div class="flex gap-2 p-4 pl-6 items-center">
              <span class="<?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-900' : 'text-color-white'); ?> font-label font-medium">Sign me
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
            <span class="pt-4 font-metadata <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-600' : 'text-color-white'); ?>"><span class="text-color-dark-grey ">By signing up, you will
                receive emails about 100xinsider's products and you agree to our </span>
                <a
                class="border-b-[1px] border-black !no-underline" href="<?php echo e(route('terms')); ?>">
                <span class="<?php echo e($setting->theme == 'white' ? 'text-color-dark-grey' : 'text-color-white'); ?>">terms of
                  use</span>
                </a>
                <span class="<?php echo e($setting->theme == 'white' ? 'text-color-dark-grey ' : 'text-color-white'); ?> "> and </span>
                <a
                class="border-b-[1px] border-black !no-underline" href="<?php echo e(route('privacy')); ?>">
                <span class="<?php echo e($setting->theme == 'white' ? 'text-color-dark-grey' : 'text-color-white'); ?>">privacy
                  policy</span>
                </a>
                <span class=" font-metadata <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-600' : 'text-color-white'); ?>">.</span></span>
          </div>
        </form>

        <?php for($i = 0; $i < count($article->article_creators); $i++): ?>
        <?php
          $item = $article->article_creators[$i];
        ?>
          <div class="article-content-wrapper mt-6 flex gap-8 justify-between">
            <div class="flex flex-col">
              <h5 class="font-headline-sm font-medium <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey' : 'text-color-white'); ?>">
                <a class="hover:underline" href="<?php echo e(route('author_detail', $item->user->id)); ?>"> 
                 <?php echo e($item->user->first_name.' '.$item->user->last_name); ?>

                </a>
              </h5>
              <p class="my-2 line-clamp-3 <?php echo e($setting->theme == 'white' ? 'text-color-dark-grey text-charcoal-600' : 'text-color-white'); ?> font-body">
                 <?php echo $item->user->info; ?>

              </p>
              <div class="mt-2 flex flex-wrap gap-2 items-center [&amp;_svg]:w-3 [&amp;_svg]:h-3">
               <?php if($item->user->twitter): ?>
                <a target="_blank"
                  title="X"
                  class="w-6 h-6 rounded-full bg-charcoal-25 cursor-pointer inline-flex justify-center items-center"
                  href="<?php echo e($item->user->twitter); ?>">
                  <svg width="16" height="16" viewBox="0 0 1400 1027" fill="none"
                    xmlns="http://www.w3.org/2000/svg" aria-labelledby="twitter-svg-a11y-label-id">
                    <title id="twitter-svg-a11y-label-id">X icon</title>
                    <path
                      d="M714.163 519.284L1160.89 0H1055.03L667.137 450.887L357.328 0H0L468.492 681.821L0 1226.37H105.866L515.491 750.218L842.672 1226.37H1200L714.137 519.284H714.163ZM569.165 687.828L521.697 619.934L144.011 79.6944H306.615L611.412 515.685L658.88 583.579L1055.08 1150.3H892.476L569.165 687.854V687.828Z"
                      fill="#262626"></path>
                  </svg>
                </a>
                <?php endif; ?>
                <?php if( $item->user->linkedin): ?>
                <a target="_blank" title="LinkedIn"
                  class="w-6 h-6 rounded-full bg-charcoal-25 cursor-pointer inline-flex justify-center items-center"
                  href="<?php echo e($item->user->linkedin); ?>">
                  <svg width="24" height="24" fill="none" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M2.25362 9.21772H6.53986V22.1164H2.25362V9.21772ZM4.42543 3C2.95843 3 2 3.9631 2 5.22719C2 6.46529 2.93038 7.45638 4.36933 7.45638H4.39667C5.89171 7.45638 6.82276 6.46524 6.82276 5.22719C6.79471 3.9631 5.89176 3 4.42543 3ZM17.0638 8.91471C14.7886 8.91471 13.7693 10.1661 13.2007 11.0438V9.21772H8.91314C8.9699 10.4278 8.91314 22.1164 8.91314 22.1164H13.2007V14.9129C13.2007 14.527 13.2287 14.1427 13.3415 13.8663C13.652 13.0961 14.3574 12.2985 15.5407 12.2985C17.0931 12.2985 17.7131 13.4819 17.7131 15.2151V22.1163H22V14.72C22 10.7581 19.8856 8.91471 17.0638 8.91471Z"
                      fill="#262626"></path>
                  </svg>
                </a>
                <?php endif; ?>
                <?php if($item->user->email): ?>
                <a target="_blank" title="Email"
                  class="w-6 h-6 rounded-full bg-charcoal-25 cursor-pointer inline-flex justify-center items-center"
                  href="mailto:<?php echo e($item->user->email); ?>">
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
            <a href="<?php echo e(route('author_detail', $item->user->id)); ?>"> 
              <img  class="rounded-full min-w-16 min-h-16 w-16 h-16" style="color: transparent;"
                 src="<?php echo e($item->user->image); ?>"></a>
          </div>
        <?php endfor; ?>
    </div>
    <?php if($advert): ?>
    <div class="col-span-4 px-6 flex-col h-full row-start-2 row-end-5 justify-between hidden lg:flex lg:col-start-9 xl:col-start-13">
      <div class="relative">
       
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('widget.advert-component', ['type'=> 'article_detail'])->html();
} elseif ($_instance->childHasBeenRendered('l1405812359-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1405812359-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1405812359-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1405812359-0');
} else {
    $response = \Livewire\Livewire::mount('widget.advert-component', ['type'=> 'article_detail']);
    $html = $response->html();
    $_instance->logRenderedChild('l1405812359-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

      </div>
    </div>
    <?php endif; ?>
    
    <script>
      document.addEventListener("click", function (event) {
    const shareButton = event.target.closest("#share-button");

    if (shareButton) {
        const url = "<?php echo e(route('article_detail', [$article->slug, $article->id])); ?>"; // Laravel Blade inside JS

            navigator.clipboard.writeText(url)
                .then(() => {
                    alert("✅ Link copied to clipboard!");
                })
                .catch(err => {
                    console.error("❌ Failed to copy:", err);
                });
        }
    });

      </script>
      
  </section>
<?php /**PATH C:\xampp\htdocs\CoinCrypto\resources\views/livewire/news-detail-component.blade.php ENDPATH**/ ?>