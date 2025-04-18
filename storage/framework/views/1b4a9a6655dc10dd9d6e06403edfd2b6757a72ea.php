<div>
    <?php
        $user = \App\Models\User::find(auth()->user()?->id);
        $setting = \App\Models\AppSetting::first();
    ?>
        
        
 <script>
        document.addEventListener("DOMContentLoaded", function () {
            const menuButton = document.getElementById("menu-button");
            const modal = document.getElementById("modal");
            const wrapper = document.getElementById("wrapper1");

            menuButton.addEventListener("click", function (event) {
                event.stopPropagation(); // Prevent event from bubbling up

                const isHidden = modal.classList.contains("hidden");

                if (isHidden) {
                    // Open modal and wrapper
                    modal.classList.remove("hidden");
                    wrapper.classList.remove("hidden");
                } else {
                    // Close modal and wrapper
                    modal.classList.add("hidden");
                    wrapper.classList.add("hidden");
                }
            });

            // Close when clicking the wrapper
            wrapper.addEventListener("click", function () {
                modal.classList.add("hidden");
                wrapper.classList.add("hidden");
            });
        });
        
        let activeurllate = 'default'; // Default state

        function seturllate(urllateId) {
            activeurllate = urllateId;  

            document.getElementById('default').classList.remove('hidden');


            if (activeurllate === 'videos') {
                document.getElementById('videosurllate').classList.add('hidden');
            }
        }

        
        document.getElementById('openVideos').addEventListener('click', function () {
            seturllate('videos');
        });

        document.getElementById('closeVideos').addEventListener('click', function () {
            seturllate('default');
        });


</script>

   <div class="<?php echo e($setting->theme == 'white' ? 'text-dark' : 'text-white'); ?> relative flex h-[4rem] items-center justify-between border-b border-b-gray-300 p-0 md:p-[1.25rem]">
        <div class="md:justify-unset flex h-full items-center">

            <button  id="menu-button" class="ml-2 cursor-pointer md:ml-0 xl:ml-0">
                <svg class="m-4" width="24" height="24" viewBox="0 0 18 12" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path id="menu"
                        d="M0 11.2692V10.2692H16V11.2692H0ZM0 6.49996V5.49996H16V6.49996H0ZM0 1.73071V0.730713H16V1.73071H0Z"
                        fill="<?php echo e($setting->theme == 'white' ?  '#262626' : '#ffffff'); ?>"></path>
                </svg>
            </button>
            <div class="flex h-full cursor-pointer items-center">
                <div id="wrapper1"  class="bg-hamburger-menu absolute  <?php echo e($openNav ? '' : 'hidden'); ?> left-0 top-16 h-screen w-screen cursor-auto bg-opacity-50">
                </div>
                <div id="modal" class="hamburger-modal bg-<?php echo e($setting->theme); ?> absolute left-0 flex w-screen flex-col overflow-y-auto overflow-x-hidden transition-all duration-500 ease-out sm:w-screen md:w-[328px] translate-x-0 z-20 <?php echo e($openNav ? '' : 'hidden'); ?>"
                    style="top: 65px; height: calc(-100px + 100vh);">
                    <div class="relative pb-20 p-4 md:pb-4 lg:px-4">
                        <?php if($user): ?>
                        <a
                            class="bg-new-yellow text-coindesk-black mb-8 flex h-10 w-full cursor-pointer flex-row items-center justify-center rounded p-2 font-sans text-sm font-semibold"
                            href="<?php echo e(route('profile')); ?>"><span class="font-sans font-semibold text-2xs text-color-black ">My Account</span>
                        </a>
                        <?php else: ?>
                        <a
                            class="bg-new-yellow text-coindesk-black mb-8 flex h-10 w-full cursor-pointer flex-row items-center justify-center rounded p-2 font-sans text-sm font-semibold"
                            href="<?php echo e(route('register')); ?>"><span class="font-sans font-semibold text-2xs text-color-black ">Sign Up</span>
                        </a>
                       <?php endif; ?>
                        <div class="border-b-1"></div>
                        <ul>
                            <?php if($setting->news): ?>
                            <li class="m-2 flex flex-col items-center">
                                <div class="group flex w-full flex-row justify-between">
                                    <a
                                        class="grow cursor-pointer pb-4 pl-2 hover:bg-bg-grey text-dark pt-4" target="_self"
                                        href="<?php echo e(route('home')); ?>"><span class="h-auto"><span
                                                class="font-title font-bold"><?php echo e($setting->news); ?>

                                            </span></span>
                                        </a>
                                </div>
                              
                            </li>
                            <?php endif; ?>
                            <?php if($setting->prices): ?>
                            <li class="m-2 flex flex-col items-center">
                                <div class="group flex w-full flex-row justify-between"><a
                                        class="grow cursor-pointer pb-4 pl-2 hover:bg-bg-grey pt-4" target="_self"
                                        href="<?php echo e(route('prices')); ?>"><span class="h-auto"><span
                                                class="font-title font-bold"><?php echo e($setting->prices); ?></span></span></a>
                                            </div>
                            </li>
                            <?php endif; ?>
                            <?php if($setting->concensus): ?>
                            <li class="m-2 flex flex-col items-center">
                                <div class="group flex w-full flex-row justify-between"><a
                                        class="grow cursor-pointer pb-4 pl-2 hover:bg-bg-grey pt-4" target="__blank"
                                        href="<?php echo e($event->link); ?>">
                                        <span class="h-auto">
                                            <span class="font-title font-bold"><?php echo e($setting->concensus); ?></span></span></a>
                                </div>
                            </li>
                            <?php endif; ?>

                            <?php if($setting->sponsored): ?>
                            <li class="m-2 flex flex-col items-center">
                                <div class="group flex w-full flex-row justify-between"><a
                                        class="grow cursor-pointer pb-4 pl-2 hover:bg-bg-grey pt-4" target="_self"
                                        href="<?php echo e(route('sponsored')); ?>"><span class="h-auto"><span
                                                class="font-title font-bold"><?php echo e($setting->sponsored); ?></span></span>
                                            </a>
                            </div>
                            </li>
                            <?php endif; ?>
                        </ul>
                        <div class="border-b-1"></div>
                        <ul class="pb-2 lg:pb-4" >
                            <?php if($urllate == 'default'): ?>

                            <?php if($setting->videos): ?>
                            <li class="m-2 flex flex-col items-center">
                                <div class="group flex w-full flex-row justify-between">
                                    <a
                                        class="grow cursor-pointer pb-4 pl-2 hover:bg-bg-grey pt-4" target="_self"
                                        >
                                        <span class="h-auto">
                                            <span
                                                class="font-title"><?php echo e($setting->videos); ?></span>
                                            </span>
                                        </a>
                                            <button wire:click="selecturllate('videos')" class="hover:bg-bg-grey flex w-10 cursor-pointer justify-center">
                                                <svg
                                                    class="h-full pb-2 pt-2" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g id="chevron_forward">
                                                        <mask id="mask0_2411_5870" style="mask-type:alpha"
                                                            maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                            <rect id="Bounding box" width="24" height="24" fill="#D9D9D9">
                                                            </rect>
                                                        </mask>
                                                        <g mask="url(#mask0_2411_5870)">
                                                            <path id="chevron_forward_2"
                                                                d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                                fill="<?php echo e($setting->theme == 'white' ? '#262626' : 'white'); ?>"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </button>
                                    </div>
                                
                            </li>
                            <?php endif; ?>
                            <?php if($setting->podcasts): ?>
                            <li class="m-2 flex flex-col items-center">
                                <div class="group flex w-full flex-row justify-between"><a
                                        class="grow cursor-pointer pb-4 pl-2 hover:bg-bg-grey pt-4" target="_self"
                                        href="">
                                        <span class="h-auto">
                                            <span class="font-title">
                                            <?php echo e($setting->podcasts); ?>    
                                            </span>
                                        </span>
                                    </a>
                                        <button wire:click="selecturllate('podcasts')"
                                        class="hover:bg-bg-grey flex w-10 cursor-pointer justify-center">
                                        <svg
                                            class="h-full pb-2 pt-2" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="chevron_forward">
                                                <mask id="mask0_2411_5870" style="mask-type:alpha"
                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                    <rect id="Bounding box" width="24" height="24" fill="#D9D9D9">
                                                    </rect>
                                                </mask>
                                                <g mask="url(#mask0_2411_5870)">
                                                    <path id="chevron_forward_2"
                                                        d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                        fill="<?php echo e($setting->theme == 'white' ? '#262626' : 'white'); ?>"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                                
                            </li>
                            <?php endif; ?>
                            <?php if($setting->newsletters): ?>
                            <li class="m-2 flex flex-col items-center">
                                <div class="group flex w-full flex-row justify-between"><a
                                        class="grow cursor-pointer pb-4 pl-2 hover:bg-bg-grey pt-4" target="_self"
                                        href=""><span class="h-auto">
                                            <span
                                                class="font-title"><?php echo e($setting->newsletters); ?></span></span></a>
                                        <button wire:click="selecturllate('newsletters')" class="hover:bg-bg-grey flex w-10 cursor-pointer justify-center">
                                        <svg
                                            class="h-full pb-2 pt-2" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="chevron_forward">
                                                <mask id="mask0_2411_5870" style="mask-type:alpha"
                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                    <rect id="Bounding box" width="24" height="24" fill="#D9D9D9">
                                                    </rect>
                                                </mask>
                                                <g mask="url(#mask0_2411_5870)">
                                                    <path id="chevron_forward_2"
                                                        d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                        fill="<?php echo e($setting->theme == 'white' ? '#262626' : 'white'); ?>"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                                
                            </li>
                            <?php endif; ?>
                             
                            <?php if($setting->webinar): ?>
                            <li class="m-2 flex flex-col items-center">
                                <div class="group flex w-full flex-row justify-between"><a
                                        class="grow cursor-pointer pb-4 pl-2 hover:bg-bg-grey pt-4" target="_blank"
                                        href=""><span class="h-auto"><span
                                                class="font-title">
                                                <?php echo e($setting->webinar); ?>

                                            </span></span></a>
                                    <button wire:click="selecturllate('events')"
                                        class="hover:bg-bg-grey flex w-10 cursor-pointer justify-center">
                                        <svg
                                            class="h-full pb-2 pt-2" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="chevron_forward">
                                                <mask id="mask0_2411_5870" style="mask-type:alpha"
                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                    <rect id="Bounding box" width="24" height="24" fill="#D9D9D9">
                                                    </rect>
                                                </mask>
                                                <g mask="url(#mask0_2411_5870)">
                                                    <path id="chevron_forward_2"
                                                        d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                        fill="<?php echo e($setting->theme == 'white' ? '#262626' : 'white'); ?>"></path>
                                                </g>
                                            </g>
                                        </svg></button></div>
                                
                            </li>
                            <?php endif; ?>
                             
                            <?php if($setting->news_section): ?>
                            <li class="m-2 flex flex-col items-center">
                                <div class="group flex w-full flex-row justify-between"><a
                                        class="grow cursor-pointer pb-4 pl-2 hover:bg-bg-grey pt-4" target="_self"
                                        href="/">
                                        <span class="h-auto">
                                            <span class="font-title">
                                            <?php echo e($setting->news_section); ?>

                                        </span></span></a>
                                       <button wire:click="selecturllate('sections')"  class="hover:bg-bg-grey flex w-10 cursor-pointer justify-center">
                                        <svg
                                            class="h-full pb-2 pt-2" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="chevron_forward">
                                                <mask id="mask0_2411_5870" style="mask-type:alpha"
                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                    <rect id="Bounding box" width="24" height="24" fill="#D9D9D9">
                                                    </rect>
                                                </mask>
                                                <g mask="url(#mask0_2411_5870)">
                                                    <path id="chevron_forward_2"
                                                        d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                        fill="<?php echo e($setting->theme == 'white' ? '#262626' : 'white'); ?>"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                                
                            </li>
                            <?php endif; ?>
                            <?php endif; ?>

                            <?php if($urllate == 'videos'): ?>
                            <div class="bg-<?php echo e($setting->theme); ?> absolute left-0 top-0 z-10 h-full min-h-[900px] w-full transition-transform duration-500 ease-in-out <?php echo e($urllate == 'videos' ? ' translate-x-0' : ' translate-x-full'); ?>">
                                <div class="z-1 flex flex-row items-center justify-start gap-4 p-6 pb-4">
                                    <button wire:click="selecturllate('default')"
                                        class="hover:bg-bg-grey flex h-10 w-10 items-center justify-center">
                                        <svg
                                            class="h-full rotate-180" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="chevron_forward">
                                                <mask id="mask0_2411_5870" style="mask-type:alpha"
                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                    <rect id="Bounding box" width="24" height="24" fill="#D9D9D9">
                                                    </rect>
                                                </mask>
                                                <g mask="url(#mask0_2411_5870)">
                                                    <path id="chevron_forward_2"
                                                        d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                        fill="<?php echo e($setting->theme == 'white' ? '#262626' : 'white'); ?>"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </button><span
                                        class="font-sans font-semibold text-2xs <?php echo e($setting->theme == 'white' ? 'text-color-black' : 'text-color-white'); ?>">Back to
                                        menu
                                    </span>
                                </div>
                                <div class="border-b-1 mx-8 mb-2"></div>
                                <div class="flex w-full flex-col px-8"><span
                                        class="font-title ml-2 py-4 font-bold">Videos</span>
                                    <ul>
                                        <?php $__currentLoopData = $video_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li
                                            class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                            <a target="_self" href="<?php echo e(route('video_detail', $data->id)); ?>">
                                            <?php echo e($data->title); ?>

                                            </a>
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        

                                      </ul>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if($urllate == 'podcasts'): ?>
                            <div class="<?php echo e($urllate == 'podcasts' ? ' translate-x-0' : ' translate-x-full'); ?> bg-<?php echo e($setting->theme); ?> absolute left-0 top-0 z-10 h-full min-h-[900px] w-full transition-transform duration-500 ease-in-out ">
                                <div class="z-1 flex flex-row items-center justify-start gap-4 p-6 pb-4">
                                    <button wire:click="selecturllate('default')" class="hover:bg-bg-grey flex h-10 w-10 items-center justify-center">
                                        <svg
                                            class="h-full rotate-180" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="chevron_forward">
                                                <mask id="mask0_2411_5870" style="mask-type:alpha"
                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                    <rect id="Bounding box" width="24" height="24" fill="#D9D9D9">
                                                    </rect>
                                                </mask>
                                                <g mask="url(#mask0_2411_5870)">
                                                    <path id="chevron_forward_2"
                                                        d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                        fill="<?php echo e($setting->theme == 'white' ? '#262626' : 'white'); ?>"></path>
                                                </g>
                                            </g>
                                        </svg></button><span
                                        class="font-sans font-semibold text-2xs <?php echo e($setting->theme == 'white' ? 'text-color-black' : 'text-color-white'); ?>">Back to
                                        menu</span></div>
                                <div class="border-b-1 mx-8 mb-2"></div>
                                <div class="flex w-full flex-col px-8"><span
                                        class="font-title ml-2 py-4 font-bold">Podcasts</span>
                                    <ul>
                                        <?php $__currentLoopData = $podcasts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li
                                            class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                            <a target="_self" href="<?php echo e(route('podcast_detail', $data->id)); ?>">
                                            <?php echo e($data->title); ?>    
                                            </a>
                                        </li> 
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        
                                        
                                    </ul>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if($urllate == 'newsletters'): ?>
                            <div class="<?php echo e($urllate == 'newsletters' ? ' translate-x-0' : ' translate-x-full'); ?> bg-<?php echo e($setting->theme); ?> absolute left-0 top-0 z-10 h-full min-h-[900px] w-full transition-transform duration-500 ease-in-out">
                                <div class="z-1 flex flex-row items-center justify-start gap-4 p-6 pb-4">
                                    <button wire:click="selecturllate('default')"
                                        class="hover:bg-bg-grey flex h-10 w-10 items-center justify-center"><svg
                                            class="h-full rotate-180" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="chevron_forward">
                                                <mask id="mask0_2411_5870" style="mask-type:alpha"
                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                    <rect id="Bounding box" width="24" height="24" fill="#D9D9D9">
                                                    </rect>
                                                </mask>
                                                <g mask="url(#mask0_2411_5870)">
                                                    <path id="chevron_forward_2"
                                                        d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                        fill="<?php echo e($setting->theme == 'white' ? '#262626' : 'white'); ?>"></path>
                                                </g>
                                            </g>
                                        </svg></button><span
                                        class="font-sans font-semibold text-2xs <?php echo e($setting->theme == 'white' ? 'text-color-black' : 'text-color-white'); ?>">Back to
                                        menu</span></div>
                                <div class="border-b-1 mx-8 mb-2"></div>
                                <div class="flex w-full flex-col px-8"><span
                                        class="font-title ml-2 py-4 font-bold">Newsletters</span>
                                    <ul>
                                        <?php $__currentLoopData = $newsletter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li
                                            class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                            <a target="_self" href="<?php echo e(route('newsletter_detail', $data->id)); ?>"><?php echo e($data->title); ?></a>
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                       

                                        </ul>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if($urllate == 'events'): ?>
                            <div class="<?php echo e($urllate == 'events' ? ' translate-x-0' : ' translate-x-full'); ?> bg-<?php echo e($setting->theme); ?> absolute left-0 top-0 z-10 h-full min-h-[900px] w-full transition-transform duration-500 ease-in-out">
                                    <div class="z-1 flex flex-row items-center justify-start gap-4 p-6 pb-4">
                                        <button wire:click="selecturllate('default')"
                                            class="hover:bg-bg-grey flex h-10 w-10 items-center justify-center"><svg
                                                class="h-full rotate-180" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="chevron_forward">
                                                    <mask id="mask0_2411_5870" style="mask-type:alpha"
                                                        maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                        <rect id="Bounding box" width="24" height="24" fill="#D9D9D9">
                                                        </rect>
                                                    </mask>
                                                    <g mask="url(#mask0_2411_5870)">
                                                        <path id="chevron_forward_2"
                                                            d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                            fill="<?php echo e($setting->theme == 'white' ? '#262626' : 'white'); ?>"></path>
                                                    </g>
                                                </g>
                                            </svg></button><span
                                            class="font-sans font-semibold text-2xs <?php echo e($setting->theme == 'white' ? 'text-color-black' : 'text-color-white'); ?>">Back to
                                            menu</span></div>
                                    <div class="border-b-1 mx-8 mb-2"></div>
                                    <div class="flex w-full flex-col px-8"><span
                                            class="font-title ml-2 py-4 font-bold">Webinars &amp;
                                            Events</span>
                                        <ul>
                                            <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li
                                                    class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                                    <a target="_blank" href="<?php echo e($data->category); ?>">
                                                    <?php echo e($data->title); ?>

                                                    </a>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            
                                            
                                        </ul>
                                    </div>
                            </div>
                            <?php endif; ?>

                            <?php if($urllate == 'sponsored'): ?>
                            <div class="<?php echo e($urllate == 'sponsored' ? ' translate-x-0' : ' translate-x-full'); ?> bg-<?php echo e($setting->theme); ?> absolute left-0 top-0 z-10 h-full min-h-[900px] w-full transition-transform duration-500 ease-in-out">
                                <div class="z-1 flex flex-row items-center justify-start gap-4 p-6 pb-4">
                                    <button wire:click="selecturllate('default')" 
                                        class="hover:bg-bg-grey flex h-10 w-10 items-center justify-center">
                                        <svg
                                            class="h-full rotate-180" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="chevron_forward">
                                                <mask id="mask0_2411_5870" style="mask-type:alpha"
                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                    <rect id="Bounding box" width="24" height="24" fill="#D9D9D9">
                                                    </rect>
                                                </mask>
                                                <g mask="url(#mask0_2411_5870)">
                                                    <path id="chevron_forward_2"
                                                        d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                        fill="<?php echo e($setting->theme == 'white' ? '#262626' : 'white'); ?>"></path>
                                                </g>
                                            </g>
                                        </svg></button><span
                                        class="font-sans font-semibold text-2xs <?php echo e($setting->theme == 'white' ? 'text-color-black' : 'text-color-white'); ?>">Back to
                                        menu</span></div>
                                <div class="border-b-1 mx-8 mb-2"></div>
                                <div class="flex w-full flex-col px-8"><span
                                        class="font-title ml-2 py-4 font-bold">Sponsored</span>
                                    <ul>
                                        <li
                                            class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                            <a target="_self" href="/sponsored-content">Thought Leadership</a></li>
                                        <li
                                            class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                            <a target="_self" href="/press-release">Press Releases</a></li>
                                        <li
                                            class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                            <a target="_self" href="/sponsored-content/hub/coinw">CoinW</a></li>
                                        <li
                                            class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                            <a target="_self" href="/sponsored-content/hub/MEXC">MEXC</a></li>
                                        <li
                                            class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                            <a target="_self" href="/sponsored-content/hub/Phemex">Phemex</a></li>
                                        <li
                                            class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                            <a target="_self" href="/advertise">Advertise</a></li>
                                    </ul>
                                </div>
                            </div>
                            <?php endif; ?>

                            <?php if($urllate == 'sections'): ?>
                            <div class="<?php echo e($urllate == 'sections' ? ' translate-x-0' : ' translate-x-full'); ?> bg-<?php echo e($setting->theme); ?> absolute left-0 top-0 z-10 h-full min-h-[900px] w-full transition-transform duration-500 ease-in-out">
                                <div class="z-1 flex flex-row items-center justify-start gap-4 p-6 pb-4">
                                    <button wire:click="selecturllate('default')" 
                                        class="hover:bg-bg-grey flex h-10 w-10 items-center justify-center">
                                        <svg
                                            class="h-full rotate-180" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="chevron_forward">
                                                <mask id="mask0_2411_5870" style="mask-type:alpha"
                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                    <rect id="Bounding box" width="24" height="24" fill="#D9D9D9">
                                                    </rect>
                                                </mask>
                                                <g mask="url(#mask0_2411_5870)">
                                                    <path id="chevron_forward_2"
                                                        d="M14.2924 12L9.69238 7.40001L10.4001 6.69226L15.7079 12L10.4001 17.3078L9.69238 16.6L14.2924 12Z"
                                                        fill="<?php echo e($setting->theme == 'white' ? '#262626' : 'white'); ?>"></path>
                                                </g>
                                            </g>
                                        </svg></button><span
                                        class="font-sans font-semibold text-2xs <?php echo e($setting->theme == 'white' ? 'text-color-black' : 'text-color-white'); ?>">Back to
                                        menu</span></div>
                                <div class="border-b-1 mx-8 mb-2"></div>
                                <div class="flex w-full flex-col px-8"><span
                                        class="font-title ml-2 py-4 font-bold">News
                                        Sections</span>
                                    <ul>
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li
                                            class="font-title font-normal hover:bg-bg-grey cursor-pointer rounded py-4 pl-6">
                                            <a target="_self" href="<?php echo e(route('category_detail', $data->id)); ?>">
                                                <?php echo e($data->title); ?>

                                            </a>
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        

                                        </ul>
                                </div>
                            </div>
                            <?php endif; ?>


                        </ul>
                        
                    </div>
                </div>

            </div>
            <!--/$-->
        </div>
        <div class="flex h-full items-center">
            <a class="px-4" href="/">
            <img alt="<?php echo e($setting->name); ?>" 
                    src="<?php echo e(asset($setting->logo)); ?>" style="height:100px;width:150px;" /></a>
        </div>
        <div class="flex h-full items-center md:ml-auto lg:min-w-[320px]">
           <ul class="h-full items-center justify-center gap-0 md:flex xl:gap-0">
           
            <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                <li class="<?php echo e(Request::is($data->slug) ? 'active' : ''); ?>">
                    <a target="__blank" class="hover:bg-bg-grey hidden h-full items-center justify-center px-4 lg:flex" href="<?php echo e($data->slug); ?>">
                        <span class="flex h-[2.5rem] cursor-pointer items-center justify-center font-sans text-sm <?php echo e(Request::is($data->slug) ? 'font-bold text-blue-500' : ''); ?>">
                            <?php echo e($data->name); ?>   
                        </span>
                    </a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

               
                <?php if($setting->language): ?>
                <div class="relative hidden lg:flex w-[2.5rem] h-[2.5rem] rounded-full hover:bg-bg-grey items-center justify-center">
            
                    <div class="inline-flex h-full">
                        <button
                            class="flex gap-1 uppercase items-center text-sm cursor-pointer select-none outline-0 hover:underline decoration-yellow-800"><svg
                                width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="left icon">
                                    <mask id="mask0_3490_8806" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                        width="24" height="24">
                                        <rect id="Bounding box" width="24" height="24" fill="#D9D9D9">
                                        </rect>
                                    </mask>
                                    <g mask="url(#mask0_3490_8806)">
                                        <path id="language"
                                            d="M12 21.5C10.6975 21.5 9.46833 21.2503 8.3125 20.751C7.15667 20.2517 6.14867 19.5718 5.2885 18.7115C4.42817 17.8513 3.74833 16.8433 3.249 15.6875C2.74967 14.5317 2.5 13.3025 2.5 12C2.5 10.6872 2.74967 9.45542 3.249 8.30475C3.74833 7.15408 4.42817 6.14867 5.2885 5.2885C6.14867 4.42817 7.15667 3.74833 8.3125 3.249C9.46833 2.74967 10.6975 2.5 12 2.5C13.3128 2.5 14.5446 2.74967 15.6953 3.249C16.8459 3.74833 17.8513 4.42817 18.7115 5.2885C19.5718 6.14867 20.2517 7.15408 20.751 8.30475C21.2503 9.45542 21.5 10.6872 21.5 12C21.5 13.3025 21.2503 14.5317 20.751 15.6875C20.2517 16.8433 19.5718 17.8513 18.7115 18.7115C17.8513 19.5718 16.8459 20.2517 15.6953 20.751C14.5446 21.2503 13.3128 21.5 12 21.5ZM12 19.9788C12.5103 19.3019 12.9398 18.6192 13.2885 17.9307C13.6372 17.2422 13.9212 16.4897 14.1405 15.673H9.8595C10.0917 16.5153 10.3789 17.2808 10.7213 17.9693C11.0634 18.6578 11.4897 19.3276 12 19.9788ZM10.0635 19.7038C9.68017 19.1538 9.33592 18.5285 9.03075 17.828C8.72558 17.1273 8.48842 16.409 8.31925 15.673H4.927C5.45517 16.7115 6.1635 17.584 7.052 18.2905C7.9405 18.9968 8.94433 19.4679 10.0635 19.7038ZM13.9365 19.7038C15.0557 19.4679 16.0595 18.9968 16.948 18.2905C17.8365 17.584 18.5448 16.7115 19.073 15.673H15.6807C15.4794 16.4153 15.2262 17.1368 14.921 17.8375C14.616 18.5382 14.2878 19.1602 13.9365 19.7038ZM4.298 14.173H8.0155C7.95267 13.8013 7.90708 13.4369 7.87875 13.0798C7.85058 12.7227 7.8365 12.3628 7.8365 12C7.8365 11.6372 7.85058 11.2773 7.87875 10.9202C7.90708 10.5631 7.95267 10.1987 8.0155 9.827H4.298C4.20183 10.1667 4.12817 10.5198 4.077 10.8865C4.02567 11.2532 4 11.6243 4 12C4 12.3757 4.02567 12.7468 4.077 13.1135C4.12817 13.4802 4.20183 13.8333 4.298 14.173ZM9.51525 14.173H14.4848C14.5474 13.8013 14.5929 13.4402 14.6212 13.0895C14.6494 12.7388 14.6635 12.3757 14.6635 12C14.6635 11.6243 14.6494 11.2612 14.6212 10.9105C14.5929 10.5598 14.5474 10.1987 14.4848 9.827H9.51525C9.45258 10.1987 9.40708 10.5598 9.37875 10.9105C9.35058 11.2612 9.3365 11.6243 9.3365 12C9.3365 12.3757 9.35058 12.7388 9.37875 13.0895C9.40708 13.4402 9.45258 13.8013 9.51525 14.173ZM15.9845 14.173H19.702C19.7982 13.8333 19.8718 13.4802 19.923 13.1135C19.9743 12.7468 20 12.3757 20 12C20 11.6243 19.9743 11.2532 19.923 10.8865C19.8718 10.5198 19.7982 10.1667 19.702 9.827H15.9845C16.0473 10.1987 16.0929 10.5631 16.1212 10.9202C16.1494 11.2773 16.1635 11.6372 16.1635 12C16.1635 12.3628 16.1494 12.7227 16.1212 13.0798C16.0929 13.4369 16.0473 13.8013 15.9845 14.173ZM15.6807 8.327H19.073C18.5385 7.27567 17.835 6.40317 16.9625 5.7095C16.09 5.016 15.0813 4.54167 13.9365 4.2865C14.3198 4.8685 14.6608 5.50508 14.9595 6.19625C15.2583 6.88725 15.4987 7.5975 15.6807 8.327ZM9.8595 8.327H14.1405C13.9083 7.491 13.6163 6.72075 13.2645 6.01625C12.9125 5.31175 12.491 4.64675 12 4.02125C11.509 4.64675 11.0875 5.31175 10.7355 6.01625C10.3837 6.72075 10.0917 7.491 9.8595 8.327ZM4.927 8.327H8.31925C8.50125 7.5975 8.74167 6.88725 9.0405 6.19625C9.33917 5.50508 9.68017 4.8685 10.0635 4.2865C8.91217 4.54167 7.90192 5.01767 7.03275 5.7145C6.16342 6.41117 5.4615 7.282 4.927 8.327Z"
                                            fill="#262626"></path>
                                    </g>
                                </g>
                            </svg>
                        </button>
                    </div>
                   </div>
                     <?php endif; ?>
                   <?php if(!$user): ?>
                
                   <li class="hidden h-full items-center justify-center lg:flex">
                    <a class="hover:bg-bg-grey flex h-[2.5rem] items-center justify-center rounded px-4"
                        href="<?php echo e(route('login')); ?>">
                        <span
                            class="text-black-colorcoindeskblack hidden cursor-pointer whitespace-nowrap font-sans text-sm lg:inline"><span
                                class="font-sans font-bold text-2xs text-color-black ">Sign In</span></span></a>
                </li>
                <li class="mr-2 hidden h-full items-center justify-center md:mr-0 lg:flex xl:mr-0">
                    <a href="<?php echo e(route('register')); ?>"
                        class="bg-new-yellow flex h-[2.5rem] items-center justify-center px-4 hover:bg-[#F3C00B]"><span
                            class="text-black-colorcoindeskblack hidden cursor-pointer whitespace-nowrap font-sans text-sm lg:inline"><span
                                class="font-sans font-bold text-2xs text-color-black ">Sign Up</span></span></a>
                </li>
                <?php else: ?>
                <div class="flex h-full items-center justify-center px-4">
                    <button id="avattar" wire:click='toggleAvatar'
                        class="flex relative justify-center items-center box-border overflow-hidden align-middle outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 text-tiny bg-default text-default-foreground z-10 aria-expanded:scale-[0.97] aria-expanded:opacity-70 subpixel-antialiased h-8 w-8 rounded-full"
                        type="button">
                        <img src="<?php echo e(asset($user?->image)); ?>"
                            class="flex object-cover w-full h-full transition-opacity !duration-500 opacity-1 data-[loaded=true]:opacity-100"
                            alt="Profile avatar" />
                    </button>
                </div>
                <?php if($openAvatar): ?>
                <div
                    class="z-10 inline-flex flex-col items-center justify-center subpixel-antialiased outline-none box-border text-small bg-content1 rounded-large shadow-medium w-full p-1 min-w-[200px]">
                    <span  hidden=""></span>
                    <div class="w-full relative flex flex-col gap-1 p-1 overflow-clip">
                        <ul class="w-full flex flex-col gap-0.5 outline-none" role="menu">
                            <li role="menuitem">
                                <a href="<?php echo e(route('profile')); ?>"
                                    class="flex items-center gap-2 px-2 py-1.5 w-full rounded-small cursor-pointer hover:bg-default hover:text-default-foreground">
                                    <span class="iconify text-color-black material-symbols--settings-outline h-5 w-5"></span>
                                    <span class="text-small text-color-black font-normal">My Account</span>
                                </a>
                            </li>
                            <li role="separator">
                                <hr class="bg-divider border-none w-full h-divider">
                            </li>
                            <?php if($user?->role?->title == 'superadmin'): ?>
                             <li role="menuitem">
                                <a href="<?php echo e(route('dashboard')); ?>"
                                    class="flex items-center gap-2 px-2 py-1.5 w-full rounded-small cursor-pointer hover:bg-default hover:text-default-foreground">
                                    <span class="iconify text-color-black material-symbols--exit-to-app-rounded h-5 w-5"></span>
                                    <span class="text-small text-color-black font-normal">Dashboard</span>
                                </a>
                            </li>
                            <li role="separator">
                                <hr class="bg-divider border-none w-full h-divider">
                            </li>
                            <?php endif; ?>
                            <li role="menuitem">
                                <a href="<?php echo e(route('logout')); ?>" rel="nofollow"
                                    class="flex items-center gap-2 px-2 py-1.5 w-full rounded-small cursor-pointer  hover:text-danger-foreground text-danger">
                                    <span class="iconify material-symbols--exit-to-app-rounded h-5 w-5"></span>
                                    <span class="text-small font-normal">Log out</span>
                                </a>
                            </li>
                        </ul>
            
                    </div><span data-focus-scope-end="true" hidden=""></span>
                </div>
                <?php endif; ?>
            
                <?php endif; ?>
            
            </ul>
        </div>
        
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
    const menuButton = document.getElementById("menu-button"); // Button to open modal
    const modal = document.getElementById("modal"); // The modal (side menu)
    const wrapper = document.getElementById("wrapper"); // Background overlay

    function toggleModal() {
        const isHidden = modal.classList.contains("-translate-x-[100%]");
        
        if (isHidden) {
            // Open modal
            modal.classList.remove("-translate-x-[100%]");
            wrapper.classList.remove("hidden");
        } else {
            // Close modal
            modal.classList.add("-translate-x-[100%]");
            wrapper.classList.add("hidden");
        }
    }

    menuButton.addEventListener("click", toggleModal);
    wrapper.addEventListener("click", toggleModal);

    document.addEventListener("click", function (event) {
    const videoSection = event.target.closest("#modal");

    if (videoSection) {
        videoSection.scrollTo({ top: 0, behavior: "smooth" });
    }
});


});

    </script>
</div><?php /**PATH C:\xampp\htdocs\CoinCrypto\resources\views/livewire/navmenu.blade.php ENDPATH**/ ?>