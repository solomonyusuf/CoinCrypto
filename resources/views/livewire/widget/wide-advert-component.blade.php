<div>
    @if($advert)
            <div>
                <div style="height:auto"></div>
                <div class="">
                  
                    <div class="color-black relative flex items-start justify-center aw970px ah250px" style="height:250px">
                        <div id="homepage_mid_desktop_0" data-freestar-ad="true" class="transition-box duration-250 align-center background-repeat relative flex items-start justify-center ease-in [&amp;>iframe]:m-auto bg-inherit opacity-100 aw970px ah250px">
                          <div class="min-w-full absolute mb-0 ml-auto mr-auto mt-0 flex items-center justify-center bg-[length:200%_100%] opacity-100 aw100% ah100%">
                            <a id="adLink1" href="" target="_blank"> 
                                <img id="adImage1" src="" style="height:270px;">
                            </a>
                          </div>
                        </div>
                      </div>
                  
                </div>
            </div>
            @endif
            <script>
                (function () {
                let adImages1 =  @json(collect($adImages)->pluck('image'));
            
                let adLinks1 = @json(collect($adLinks)->pluck('link')); 


                let currentAd1 = 0;
                let imageElement1 = document.getElementById('adImage1');
                let linkElement1 = document.getElementById('adLink1');
            
                if (adImages1.length > 0) {
                        imageElement1.src = adImages1[0];
                        linkElement1.href = adLinks1[0];
                    }

                
            function rotateAd1() {
                if (adImages1.length <= 1) return;

                imageElement1.style.opacity = 0;

                setTimeout(() => {
                    currentAd1 = (currentAd1 + 1) % adImages1.length;
                    imageElement1.src = adImages1[currentAd1];
                    linkElement1.href = adLinks1[currentAd1];
                    imageElement1.style.opacity = 1;
                }, 1000);
            }
            
                setInterval(rotateAd1, 5000);
        })();
            </script>
            
</div>
