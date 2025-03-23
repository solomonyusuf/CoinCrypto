<div>

  <section class="flex-grow">
    <div class="w-full pt-8 pb-[64px] bottom-0 flex flex-col items-center">
      <div class=" w-full flex justify-center items-center">
        <div class="w-full overflow-hidden relative md:py-8 mdmax:py-4 bg-[#1b232a]">
          <div
            class="container mx-auto xs:p-4 xs:grid-cols-4 xs:gap-4 sm:p-4 sm:grid-cols-4 sm:gap-4 md:p-6 md:grid-cols-8 md:gap-6 lg:p-6 lg:grid-cols-12 lg:gap-6 xl:p-6 xl:grid-cols-16 xl:gap-6">
            <h1 class="text-white font-headline-lg font-medium mb-10">
              <?php echo e($category->title); ?>

            </h1>
            <?php
              $first = request()->video ? \App\Models\AppVideo::find(request()->video) :  $top->first();
            ?>
            <div class="flex flex-col lg:flex-row lg:items-stretch z-2 relative gap-6">
              <div class="aspect-video w-full lg:h-max">
                <div class="w-full">
                  <div class="grid">
                    <div class="plyr__video-embed" id="player">
                      <iframe src="<?php echo e($first->link); ?>"
                              allow="autoplay"></iframe>
                    </div>
                  </div>
                </div>
                <h3 class="text-center text-white font-headline font-medium text-balance mdmax:mt-4 md:mt-6"> 
                  <?php echo e($first->title); ?>

                </h3>
                <p class="text-center font-body font-normal text-charcoal-100 mt-4"> 
                  <?php echo \Illuminate\Support\Str::limit($first->description, 30, '..'); ?>

                </p>
              </div>
              <div class="min-w-[416px] text-charcoal-100">
                <hr class="mt-4 mb-4 border-[#515151] lg:hidden"><span class="uppercase mb-6 block font-title">Up
                  Next</span>
                <div class="relative lg:h-[calc(100%-40px)] w-full lg:overflow-x-hidden">
                  <div class="w-full flex gap-6 lg:pr-6 lgmax:video-list-gradient-right lg:video-list-gradient-bottom pr-16 lg:pb-16 lg:absolute lg:top-0 lg:bottom-0 lg:-right-6 lg:overflow-y-scroll lgmax:overflow-x-scroll lg:block items-baseline">
                    <?php $__currentLoopData = $top; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="cursor-pointer flex gap-2 lg:gap-6 py-2 select-none lgmax:flex-col-reverse lgmax:justify-evenly">
                      <a href="<?php echo e(route('video_detail', $data->category_id).'?video='.$data->id); ?>" class="w-[136px] lg:w-[calc(100%-152px)] font-headline-3xs font-medium"> 
                        <?php echo e($data->title); ?>

                      </a>
                      <div class="relative">
                        <div style="width:13rem;" >
                          <iframe src="<?php echo e($data->link); ?>"
                                  allow="autoplay"></iframe>
                        </div>
                      </div>
                    </div>
                    <hr class="mt-4 mb-4 border-[#515151] lgmax:hidden">
                   
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <svg width="901" height="821" viewBox="0 0 901 821" fill="none" xmlns="http://www.w3.org/2000/svg"
            class="video-player-bg-left z-0 pointer-events-none">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M563.031 -312.47C591.21 -304.787 615.758 -287.293 632.261 -263.134C641.72 -249.194 648.216 -233.458 651.34 -216.909C654.465 -200.361 654.152 -183.356 650.422 -166.954C646.692 -150.553 639.623 -135.109 629.658 -121.585C619.695 -108.062 607.048 -96.7494 592.508 -88.3548C578.529 -80.2714 563.076 -75.0578 547.048 -73.0164C531.02 -70.9761 514.738 -72.1489 499.148 -76.468C486.337 -80.1446 472.931 -81.2361 459.711 -79.6796C446.491 -78.1241 433.719 -73.9514 422.137 -67.4038L414.719 -63.1208C403.254 -56.3571 393.249 -47.3768 385.285 -36.7026C377.32 -26.0277 371.552 -13.8704 368.317 -0.932328C364.282 14.7367 357.165 29.4327 347.381 42.2951C337.598 55.1579 325.347 65.9284 311.343 73.9761C297.362 82.0602 281.909 87.2737 265.882 89.3151C249.854 91.3554 233.572 90.1826 217.982 85.8635C205.171 82.1783 191.765 81.0813 178.543 82.6374C165.322 84.1935 152.55 88.3716 140.971 94.9277L132.713 99.6954C121.281 106.367 111.302 115.262 103.361 125.862C95.4211 136.46 89.6798 148.548 86.4753 161.414L86.1807 162.52L85.8663 163.7C82.2543 176.457 81.2246 189.816 82.8378 202.992C84.4526 216.169 88.6782 228.898 95.2661 240.431L100.024 248.671C106.804 260.192 115.799 270.255 126.485 278.275C137.171 286.295 149.335 292.113 162.271 295.39C177.909 299.477 192.588 306.637 205.454 316.454C218.32 326.271 229.116 338.548 237.213 352.569C245.33 366.601 250.58 382.104 252.658 398.172C254.736 414.24 253.6 430.553 249.316 446.156C245.682 458.988 244.635 472.422 246.232 485.679C247.83 498.936 252.043 511.75 258.624 523.376L264.031 532.74C270.807 544.207 279.781 554.223 290.434 562.206C301.087 570.189 313.208 575.982 326.096 579.251L327.275 579.568C340.023 583.07 353.332 583.995 366.424 582.289C379.517 580.582 392.132 576.279 403.531 569.629L413.423 563.918C436.352 550.427 452.965 528.35 459.609 502.542C463.729 487.047 470.867 472.528 480.611 459.82C490.357 447.112 502.517 436.465 516.394 428.491C530.93 420.099 547.044 414.805 563.734 412.935C580.422 411.068 597.327 412.665 613.392 417.631C629.458 422.595 644.339 430.822 657.108 441.795C669.876 452.768 680.259 466.252 687.607 481.407C700.388 507.872 703.301 538.019 695.818 566.388C688.334 594.756 670.95 619.473 646.812 636.061C631.939 646.234 614.988 652.968 597.182 655.778C579.376 658.588 561.158 657.404 543.839 652.312C531.355 648.487 518.234 647.237 505.269 648.637C492.305 650.038 479.767 654.06 468.415 660.46L459.083 665.848C447.845 672.457 438.068 681.283 430.344 691.796C422.619 702.307 417.106 714.286 414.14 727.007C410.119 743.784 402.585 759.504 392.036 773.128C381.487 786.752 368.164 797.968 352.949 806.035C325.73 820.344 294.106 823.87 264.346 815.913C234.587 807.957 208.864 789.099 192.277 763.077C183.103 748.583 177.072 732.325 174.578 715.362C172.084 698.399 173.181 681.109 177.799 664.62C181.454 652.137 182.566 639.037 181.07 626.099C179.574 613.161 175.5 600.648 169.09 589.302L163.008 578.767C156.225 567.252 147.226 557.197 136.536 549.19C125.845 541.182 113.678 535.38 100.742 532.122C85.0909 528.024 70.4025 520.847 57.5336 511.009C44.6653 501.171 33.8741 488.869 25.7905 474.822C17.6708 460.788 12.4124 445.285 10.3222 429.215C8.23191 413.145 9.35139 396.829 13.6156 381.216C17.2685 368.416 18.3486 355.009 16.7936 341.773C15.2386 328.537 11.0786 315.733 4.55507 304.103L-0.0135762 296.19C-6.5617 284.704 -15.3567 274.656 -25.8697 266.651C-36.3826 258.645 -48.3968 252.845 -61.1893 249.603C-61.9448 249.35 -62.6822 249.045 -63.3958 248.691C-79.5534 244.338 -94.6581 236.711 -107.774 226.284C-120.889 215.857 -131.738 202.851 -139.647 188.071C-147.556 173.291 -152.358 157.051 -153.756 140.357C-155.154 123.663 -153.117 106.869 -147.773 91.0153C-138.501 63.731 -119.926 40.6172 -95.3043 25.7286C-70.6827 10.8398 -41.5882 5.12707 -13.124 9.59237C-7.96227 10.5297 -2.86556 11.7994 2.13503 13.3933C14.6985 16.961 27.8475 17.9372 40.7833 16.2635C53.7191 14.59 66.1727 10.3011 77.3888 3.65718L85.4613 -1.00346C96.9353 -7.76355 106.945 -16.7477 114.907 -27.4326C122.868 -38.1169 128.624 -50.2886 131.836 -63.2376C135.876 -78.9171 142.996 -93.6236 152.782 -106.498C162.569 -119.373 174.822 -130.156 188.831 -138.221C202.816 -146.322 218.283 -151.545 234.326 -153.582C250.369 -155.62 266.665 -154.431 282.264 -150.088C295.095 -146.399 308.521 -145.301 321.763 -146.858C335.004 -148.416 347.797 -152.597 359.395 -159.159L367.887 -164.062C379.072 -170.652 388.815 -179.43 396.539 -189.873C404.263 -200.317 409.811 -212.213 412.853 -224.859C417.229 -242.257 425.385 -258.464 436.739 -272.324C448.091 -286.184 462.363 -297.357 478.538 -305.046C504.891 -317.52 534.852 -320.152 563.031 -312.47ZM448.798 230.521C460.085 250.07 453.442 275.036 433.96 286.284C414.479 297.531 389.536 290.801 378.25 271.252C366.962 251.702 373.605 226.736 393.087 215.488C412.568 204.241 437.511 210.971 448.798 230.521ZM716.598 123.103C736.08 111.855 742.723 86.8888 731.436 67.3398C720.149 47.7898 695.206 41.0597 675.725 52.3073C656.244 63.5548 649.601 88.5209 660.888 108.071C672.174 127.62 697.117 134.35 716.598 123.103ZM895.425 351.378C906.713 370.928 900.07 395.894 880.588 407.141C861.107 418.389 836.164 411.659 824.877 392.109C813.59 372.56 820.233 347.594 839.715 336.346C859.196 325.098 884.139 331.829 895.425 351.378Z"
              fill="white" fill-opacity="0.03"></path>
          </svg>
          <svg width="685" height="538" viewBox="0 0 685 538" fill="none" xmlns="http://www.w3.org/2000/svg"
            class="video-player-bg-right left-auto z-0 pointer-events-none">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M717.461 -595.042C745.64 -587.36 770.188 -569.866 786.691 -545.707C796.151 -531.767 802.646 -516.03 805.77 -499.482C808.895 -482.933 808.582 -465.928 804.852 -449.527C801.122 -433.126 794.053 -417.681 784.089 -404.158C774.125 -390.635 761.478 -379.322 746.938 -370.928C732.959 -362.844 717.506 -357.631 701.479 -355.589C685.45 -353.549 669.169 -354.722 653.578 -359.041C640.767 -362.717 627.361 -363.809 614.141 -362.252C600.921 -360.697 588.149 -356.524 576.567 -349.977L569.149 -345.694C557.684 -338.93 547.679 -329.95 539.715 -319.275C531.75 -308.6 525.982 -296.443 522.747 -283.505C518.712 -267.836 511.595 -253.14 501.811 -240.278C492.028 -227.415 479.777 -216.644 465.773 -208.597C451.792 -200.513 436.34 -195.299 420.312 -193.258C404.284 -191.217 388.002 -192.39 372.412 -196.709C359.602 -200.394 346.195 -201.491 332.974 -199.935C319.752 -198.379 306.98 -194.201 295.401 -187.645L287.143 -182.877C275.711 -176.206 265.732 -167.31 257.792 -156.711C249.851 -146.113 244.11 -134.025 240.906 -121.159L240.611 -120.053L240.296 -118.873C236.685 -106.116 235.655 -92.7565 237.268 -79.5803C238.883 -66.4036 243.108 -53.6747 249.696 -42.1415L254.454 -33.9013C261.234 -22.3807 270.229 -12.3176 280.916 -4.29803C291.601 3.72211 303.765 9.54015 316.701 12.817C332.339 16.9042 347.019 24.0644 359.884 33.8812C372.75 43.6979 383.547 55.9749 391.643 69.9964C399.76 84.0287 405.011 99.531 407.088 115.599C409.167 131.667 408.03 147.98 403.746 163.583C400.112 176.415 399.065 189.85 400.662 203.106C402.26 216.363 406.473 229.177 413.054 240.803L418.461 250.167C425.237 261.634 434.211 271.65 444.864 279.633C455.517 287.616 467.638 293.41 480.526 296.678L481.705 296.996C494.453 300.498 507.762 301.423 520.854 299.716C533.947 298.01 546.562 293.706 557.961 287.056L567.853 281.345C590.782 267.854 607.395 245.777 614.039 219.969C618.16 204.474 625.297 189.955 635.041 177.248C644.787 164.54 656.947 153.893 670.824 145.918C685.36 137.526 701.474 132.232 718.164 130.363C734.853 128.495 751.757 130.093 767.822 135.058C783.888 140.023 798.769 148.249 811.538 159.222C824.307 170.195 834.689 183.679 842.037 198.834C854.818 225.299 857.731 255.446 850.248 283.815C842.765 312.183 825.38 336.9 801.242 353.488C786.369 363.661 769.418 370.395 751.612 373.205C733.806 376.015 715.588 374.831 698.269 369.739C685.785 365.914 672.664 364.664 659.7 366.065C646.735 367.465 634.197 371.487 622.845 377.888L613.513 383.275C602.275 389.884 592.498 398.711 584.774 409.223C577.049 419.734 571.536 431.713 568.57 444.434C564.549 461.211 557.015 476.932 546.466 490.555C535.918 504.179 522.594 515.395 507.38 523.463C480.16 537.771 448.536 541.298 418.777 533.341C389.017 525.384 363.295 506.526 346.707 480.505C337.533 466.011 331.502 449.752 329.008 432.789C326.514 415.826 327.611 398.536 332.229 382.047C335.884 369.564 336.996 356.464 335.5 343.526C334.005 330.589 329.93 318.075 323.521 306.729L317.438 296.194C310.655 284.68 301.656 274.625 290.966 266.617C280.276 258.609 268.108 252.807 255.172 249.55C239.521 245.452 224.833 238.274 211.964 228.436C199.095 218.598 188.304 206.296 180.221 192.249C172.101 178.216 166.843 162.712 164.752 146.642C162.662 130.572 163.782 114.256 168.046 98.6431C171.699 85.843 172.779 72.4367 171.224 59.2006C169.669 45.9644 165.509 33.16 158.985 21.53L154.417 13.6168C147.868 2.13154 139.074 -7.91626 128.56 -15.9222C118.048 -23.9282 106.033 -29.7273 93.2409 -32.9701C92.4854 -33.2228 91.748 -33.5276 91.0344 -33.8822C74.8768 -38.2348 59.7721 -45.8619 46.6565 -56.2886C33.5409 -66.7154 22.6924 -79.7218 14.7833 -94.5015C6.87398 -109.282 2.07198 -125.521 0.674241 -142.216C-0.723464 -158.91 1.31273 -175.704 6.65721 -191.558C15.9288 -218.842 34.5045 -241.956 59.1259 -256.844C83.7475 -271.733 112.842 -277.446 141.306 -272.98C146.468 -272.043 151.565 -270.773 156.565 -269.179C169.129 -265.612 182.278 -264.636 195.213 -266.309C208.149 -267.983 220.603 -272.272 231.819 -278.916L239.891 -283.576C251.365 -290.336 261.375 -299.32 269.337 -310.005C277.298 -320.69 283.054 -332.861 286.266 -345.81C290.306 -361.49 297.427 -376.196 307.212 -389.071C316.999 -401.945 329.252 -412.729 343.261 -420.794C357.246 -428.895 372.713 -434.117 388.756 -436.155C404.799 -438.193 421.096 -437.004 436.694 -432.66C449.525 -428.972 462.951 -427.874 476.193 -429.431C489.435 -430.989 502.227 -435.17 513.825 -441.732L522.317 -446.635C533.502 -453.225 543.246 -462.003 550.97 -472.446C558.694 -482.889 564.241 -494.786 567.283 -507.431C571.659 -524.83 579.815 -541.037 591.169 -554.897C602.522 -568.757 616.794 -579.929 632.968 -587.619C659.321 -600.093 689.282 -602.725 717.461 -595.042ZM603.228 -52.0517C614.515 -32.5027 607.872 -7.53658 588.391 3.71093C568.909 14.9584 543.966 8.22838 532.68 -11.3206C521.393 -30.8706 528.036 -55.8368 547.517 -67.0843C566.998 -78.3318 591.941 -71.6017 603.228 -52.0517ZM871.029 -159.47C890.51 -170.718 897.153 -195.684 885.866 -215.233C874.579 -234.783 849.636 -241.513 830.155 -230.265C810.674 -219.018 804.031 -194.052 815.318 -174.502C826.605 -154.953 851.547 -148.223 871.029 -159.47ZM1049.86 68.8048C1061.14 88.3548 1054.5 113.321 1035.02 124.568C1015.54 135.816 990.594 129.086 979.307 109.536C968.021 89.9869 974.664 65.0207 994.145 53.7732C1013.63 42.5257 1038.57 49.2558 1049.86 68.8048Z"
              fill="white" fill-opacity="0.03"></path>
          </svg>
        </div>
      </div>
      <div
        class="container mx-auto xs:p-4 xs:grid-cols-4 xs:gap-4 sm:p-4 sm:grid-cols-4 sm:gap-4 md:p-6 md:grid-cols-8 md:gap-6 lg:p-6 lg:grid-cols-12 lg:gap-6 xl:p-6 xl:grid-cols-16 xl:gap-6">
        <hr class="my-6 border-charcoal-600">
        <div class="flex gap-6 w-full lgmax:flex-col lg:flex-row mb-8">
          <div class="flex flex-1 flex-col">
            <div class="font-title text-color-charcoal-600 mb-6 uppercase">
              About
            </div>
            <div class="font-body-lg flex flex-col gap-6">
              <div>
                <?php echo $category->description; ?>

              </div>
            </div>
          </div>
        </div>
      </div>
      <?php if($advert): ?>
      <div class="container mx-auto xs:p-4 xs:grid-cols-4 xs:gap-4 sm:p-4 sm:grid-cols-4 sm:gap-4 md:p-6 md:grid-cols-8 md:gap-6 lg:p-6 lg:grid-cols-12 lg:gap-6 xl:p-6 xl:grid-cols-16 xl:gap-6">
        <div class="color-black relative flex items-start justify-center aw970px ah250px" style="height: 250px;">
          <div style="width:100%;height:100%" class="min-w-full animate-shimmer will-change-background-position via-18% to-33% from-8% absolute mb-0 ml-auto mr-auto mt-0 flex items-center justify-center bg-gradient-to-r from-[#f6f7f8] via-[#edeef1] to-[#f6f7f8] bg-[length:200%_100%] opacity-100 aw100% ah100%">
                   
          </div>
        </div>
      </div>
      <?php endif; ?>
      <div class="container mx-auto xs:p-4 xs:grid-cols-4 xs:gap-4 sm:p-4 sm:grid-cols-4 sm:gap-4 md:p-6 md:grid-cols-8 md:gap-6 lg:p-6 lg:grid-cols-12 lg:gap-6 xl:p-6 xl:grid-cols-16 xl:gap-6">
        <div  class="bg-white flex flex-wrap flex-col flex-start container-desktop-large mt-8 gap-6 content-card-section">
          <h2
            class="w-full flex flex-row align-middle justify-start border-t-[1px] border-charcoal-600 pt-6 uppercase font-title text-color-charcoal-600">
            <?php echo e($category->title); ?> Series</h2>
          <div class="flex flex-row justify-start gap-6 content-card-section mdmax:overflow-x-auto pb-1">
            <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bg-white flex gap-6 flex-col  content-card-image--video-container"><a
              href="<?php echo e(route('video_detail', $data->category_id).'?video='.$data->id); ?>">
              <div class="relative visible content-card-image--videoseries mdmax:top-3">
                <div class="video-card-shadow--light"></div>
                <div class="video-card-shadow--dark"></div>
                <div class="absolute left-1 flex items-center bg-[#1B2329] py-[2px] pl-[4px] pr-[8px] rounded z-[5] w-[110px] justify-start"
                  style="bottom: 4px;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                    class="mr-1">
                    <mask id="a" width="24" height="24" x="0" y="0" maskUnits="userSpaceOnUse"
                      style="mask-type: alpha;">
                      <path fill="#D9D9D9" d="M0 0h24v24H0z"></path>
                    </mask>
                    <g mask="url(#a)">
                      <path fill="#F8BF1E"
                        d="M11.5 13.577 17.077 10 11.5 6.423v7.154ZM8.116 17c-.46 0-.845-.154-1.153-.462a1.565 1.565 0 0 1-.463-1.154V4.616c0-.46.154-.845.463-1.153A1.565 1.565 0 0 1 8.116 3h10.768c.46 0 .845.154 1.154.462.308.309.462.693.462 1.153v10.77c0 .46-.154.844-.462 1.153a1.565 1.565 0 0 1-1.154.462H8.116Zm0-1h10.768a.588.588 0 0 0 .424-.192.588.588 0 0 0 .192-.424V4.616a.588.588 0 0 0-.192-.424.588.588 0 0 0-.424-.192H8.116a.588.588 0 0 0-.424.192.588.588 0 0 0-.192.423v10.77c0 .154.064.295.192.423s.27.192.424.192Zm-3 4c-.46 0-.845-.154-1.153-.462a1.564 1.564 0 0 1-.463-1.153V6.615h1v11.77c0 .154.064.295.192.423s.27.192.423.192h11.77v1H5.114Z">
                      </path>
                    </g>
                  </svg>
                  <div class="font-metadata text-white text-[0.625rem] uppercase">0 episodes</div>
                </div>
                <img class="z-10 relative content-card-image--videoseries bg-[#D4D4D4]"
                  src="<?php echo e(asset($data->image)); ?>">
              </div>
            </a>
            <div class="flex flex-col h-auto mdmax:flex-shrink"><a
                class="md:mb-4 mdmax:mb-1 hover:underline text-color-charcoal-900"
                href="<?php echo e(route('video_detail', $data->category_id).'?video='.$data->id); ?>">
                <h3 class="font-headline-2xs font-medium text-color-charcoal-900 ">
                <?php echo e($data->title); ?>

                </h3>
              </a>
              <p class="md:mb-4 mdmax:mb-1 text-color-charcoal-600 font-body-sm"> 
                <?php echo \Illuminate\Support\Str::limit($data->description, 60, '..'); ?>

                
              </p>
              <p><span class="font-metadata font-normal text-color-charcoal-600 uppercase">
                <?php echo e(\Carbon\Carbon::parse($data->created_at)->diffForHumans()); ?>

                     
              </span>
            </p>
            </div>
          </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            
          </div>

          <div>
             
            <hr class="my-6 border-charcoal-50">
            <?php if(count($videos) > 1): ?>
              <div class="flex gap-4 items-center justify-center my-12 font-[100] text-[#676767] font-sans text-[12px]">
                  <?php if($videos->onFirstPage()): ?>
                  <a href="<?php echo e($videos->previousPageUrl()); ?>">
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
                                  value="<?php echo e($videos->currentPage()); ?>">
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
                              <?php $__currentLoopData = range(1, $videos->lastPage()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <a class="block py-2 px-4 text-start hover:bg-light-yellow-1 cursor-pointer first:rounded-t-lg last:rounded-b-lg"
                              href="<?php echo e(route('video_detail', $category->id) . '?page=' . $page); ?>"
                              >
                                  <?php echo e($page); ?>

                              </a>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  
                          </nav>
                            
                      </button>
                      <span>of <?php echo e($videos->lastPage()); ?>

                      </span>
                  </div>
                  <?php if($videos->hasMorePages()): ?>
                  <a href="<?php echo e($videos->nextPageUrl()); ?>">
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

          </div>
          
      </div>
    </div>
  </section>
  
  

</div><?php /**PATH C:\xampp\htdocs\CoinCrypto\resources\views/livewire/page-video-component.blade.php ENDPATH**/ ?>