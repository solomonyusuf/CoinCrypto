<div>
    @if($advert)
            <div>
                <div style="height:auto"></div>
                <div class="">
                    @if($type == 'article_detail')
                    <div class="color-black relative flex items-start justify-center stickyad top-0 aw336px ah600px"
                    style="height: 600px;">
                    <div style="width:100%;height:100%" class="min-w-full animate-shimmer will-change-background-position via-18% to-33% from-8% absolute mb-0 ml-auto mr-auto mt-0 flex items-center justify-center bg-gradient-to-r from-[#f6f7f8] via-[#edeef1] to-[#f6f7f8] bg-[length:200%_100%] opacity-100 aw100% ah100%">
                             
                    </div>
                  </div>
                    @else
                    <div class="color-black relative flex items-start justify-center aw1440px ah280px" style="height:280px">
                        <div class=" md:flex flex-col justify-center items-center order-2 pt-5">
                            <div class="min-w-full min-h-full justify-center items-center">
                              <div class="color-black relative flex items-start justify-center aw970px ah250px" style="height:250px">
                                <div id="homepage_mid_desktop_0" data-freestar-ad="true" style="width:970px;height:250px" class="transition-box duration-250 align-center background-repeat relative flex items-start justify-center ease-in [&amp;>iframe]:m-auto bg-inherit opacity-100 aw970px ah250px">
                                  <div style="width:100%;height:100%" class="min-w-full absolute mb-0 ml-auto mr-auto mt-0 flex items-center justify-center bg-[length:200%_100%] opacity-100 aw100% ah100%">
                                    <a id="adLink" href="" target="_blank"> 
                                        <img id="adImage" src="" style="height:300px;">
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    @endif
                </div>
            </div>
            @endif
            <script>
                (function () {
                let adImages =  @json(collect($adImages)->pluck('image'));
            
                let adLinks = @json(collect($adLinks)->pluck('link')); 


                let currentAd = 0;
                let imageElement = document.getElementById('adImage');
                let linkElement = document.getElementById('adLink');
            
                if (adImages.length > 0) {
                        imageElement.src = adImages[0];
                        linkElement.href = adLinks[0];
                    }

                
            function rotateAd() {
                if (adImages.length <= 1) return;

                imageElement.style.opacity = 0;

                setTimeout(() => {
                    currentAd = (currentAd + 1) % adImages.length;
                    imageElement.src = adImages[currentAd];
                    linkElement.href = adLinks[currentAd];
                    imageElement.style.opacity = 1;
                }, 1000);
            }
            
                setInterval(rotateAd, 5000);
        })();
            </script>
            
</div>
