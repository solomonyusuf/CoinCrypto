<div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

    @if($advert)
            <div>
             
                <div style="height:auto"></div>
                @if($adminRole)
                  <div class="relative py-2">
                    <div class="sm:flex hidden justify-center items-center mb-4">
                        <button id="toggleAccordion6" class="flex h-10 min-w-[152px] font-label font-medium justify-center items-center bg-[--bg] hover:bg-[--bgHover] text-[--textColor] rounded-[--radius]"
                            style="--bg: #000000; --bgHover: #000000; --textColor: #FFFFFF; --radius: 1px;">
                            Edit Section
                        </button>
                    </div>
                    <style>
                      span{
                          .select2{
                          width:100%;
                        }
                      }
                     
                      </style>
                        <!-- Accordion Content -->
                        <div id="accordionContent6" class="accordion-content shadow fixed left-0 top-auto h-[300px] right-20 bottom-0 md:absolute md:bottom-auto md:left-auto md:top-[calc(100%_+_8px)] md:h-max md:right-[-3px] md:transition-none z-[100] bg-[#fff] p-8 shadow rounded-lg translate-x-0 transition-transform translate-y-0"
                            style="width:400px; display: none;">
                            
                            <button id="closeAccordion6" class="absolute top-4 right-4">
                                <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.40001 18.3076L5.69226 17.5999L11.2923 11.9999L5.69226 6.39989L6.40001 5.69214L12 11.2921L17.6 5.69214L18.3078 6.39989L12.7078 11.9999L18.3078 17.5999L17.6 18.3076L12 12.7076L6.40001 18.3076Z"></path>
                                </svg>
                            </button>
                    
                            <span class="block mb-6 text-charcoal-900 font-title">Modify this section</span>
                    
                            <form method="post" action="{{ route('set_category') }}"  class="dialog flex flex-col gap-6 font-normal tracking-wide text-xs">
                              @csrf
                              <label>First Category</label>
                              <div id="dropdownContainer" class="w-full">
                              
                                <select id="d2" required  name="first" class="w-full p-2 border border-gray-300 rounded-md">
                                    <option value="">Select a category</option>
                                    @foreach ($categories as $data)
                                    @if($data->id == $tab->first)
                                    <option selected value="{{ $data->id }}">{{ $data->title }}</option>
                                    @else
                                    <option value="{{ $data->id }}">{{ $data->title }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            
                            <label>Second Category</label>
                                
                            <div id="dropdownContainer" class="w-full">
                                <select id="d1" required  name="second" class="w-full p-2 border border-gray-300 rounded-md">
                                    <option value="">Select a category</option>
                                    @foreach ($categories as $data)
                                    @if($data->id == $tab->second)
                                    <option selected value="{{ $data->id }}">{{ $data->title }}</option>
                                    @else
                                    <option value="{{ $data->id }}">{{ $data->title }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                    
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
                       $('#d1').select2({
                        placeholder: "Search for info...",
                        allowClear: true
                    });
                    $('#d2').select2({
                        placeholder: "Search for info...",
                        allowClear: true
                    });
                    </script>
                @endif
                @if($tab?->first && $tab->second)
                <div class="{{ $setting->theme == 'white' ? 'bg-white' : 'bg-black' }} w-full max-w-screen-md mx-auto px-4 py-6">
                  <div class="flex border-b mb-4">
                    @if($tab?->first)
                      <button wire:click="toggleFirst" class="{{ $first ? 'font-bold' : '' }} {{ $setting->theme == 'white' ? 'text-grey-600' : 'text-color-white' }} border-b-2  px-3 py-2">{{\App\Models\ArticleCategory::find($tab->first)?->title}}</button>
                     @endif
                     @if($tab?->second)
                      <button wire:click="toggleSecond" class="{{ $second ? 'font-bold' : '' }} {{ $setting->theme == 'white' ? 'text-grey-600' : 'text-color-white' }} px-3 py-2">{{ \App\Models\ArticleCategory::find($tab->second)?->title }}</button>
                      @endif
                  </div>
              
                  @php
                        $articles1 = \App\Models\ArticleCategory::find($tab->first)?->latest;
                        $articles2 = \App\Models\ArticleCategory::find($tab->second)?->latest;
                      @endphp
                  @if($first )
                  <div>
                      @if($articles1)
                      @foreach($articles1 as $data)    
                      <a href="{{ route('article_detail', [$data->slug, $data->id])}}"
                        target="_self">
                            <div class="min-w-[300px] md:min-w-full flex pb-4 items-start gap-4 self-stretch  border-gray-200">
                                <div class="flex flex-col items-start gap-1 flex-1 ">
                                    <div class="flex">
                                        <span class="flex {{ $setting->theme == 'white' ? 'text-color-charcoal-600' : 'text-color-white' }} uppercase font-metadata">
                                        {{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}
                                    </span>
                                    </div>
                                    <div class=" {{ $setting->theme == 'white' ? '' : 'text-color-white' }} font-metadata-lg hover:underline"> 
                                    {{  \Illuminate\Support\Str::limit($data->title, 80, '..') }}  
                                    </div>
                                </div>
                            </div>
                        </a>
                          <div class="py-2">
                            <hr class="shrink-0 border-none w-full h-divider {{ $setting->theme == 'white' ? 'bg-black' : 'bg-white' }}" role="separator" />
                          </div>
                      @endforeach
                      @endif
                  </div>
                  @endif
                  @if($second)
                  <div>
                      
                       @if($articles2)
                      @foreach($articles2 as $data)    
                      <a href="{{ route('article_detail', [$data->slug, $data->id])}}"
                        target="_self">
                            <div class="min-w-[300px] md:min-w-full flex pb-4 items-start gap-4 self-stretch   border-gray-200">
                                <div class="flex flex-col items-start gap-1 flex-1 ">
                                    <div class="flex">
                                        <span class="flex {{ $setting->theme == 'white' ? 'text-color-charcoal-600' : 'text-color-white' }} uppercase font-metadata">
                                        {{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}
                                    </span>
                                    </div>
                                    <div class=" {{ $setting->theme == 'white' ? '' : 'text-color-white' }} font-metadata-lg hover:underline"> 
                                    {{  \Illuminate\Support\Str::limit($data->title, 80, '..') }}  
                                    </div>
                                </div>
                            </div>
                        </a>
                          <div class="py-2">
                            <hr class="shrink-0 border-none w-full h-divider {{ $setting->theme == 'white' ? 'bg-black' : 'bg-white' }}" role="separator" />
                          </div>
                      @endforeach
                      @endif
                  </div>
                  @endif
              
                </div>
                @endif
                <div class="">
                  
                    @if($type == 'article_detail')
                    <div class="color-black relative flex items-start justify-center stickyad top-0 aw336px ah600px"
                    style="height: 600px;">
                    <div style="width:100%;height:100%" class="min-w-full absolute mb-0 ml-auto mr-auto mt-0 flex items-center justify-center  bg-[length:200%_100%] opacity-100 aw100% ah100%">
                      <a id="adLink1" href="" target="_blank"> 
                        <img id="adImage1" src="">
                    </a>  
                    </div>
                  </div>
                    @else
                    <div class="color-black relative flex items-start justify-center aw1440px ah280px" style="height:280px">
                        <div class=" md:flex flex-col justify-center items-center order-2 pt-2">
                            <div class="min-w-full min-h-full justify-center items-center">
                              <div class="color-black relative flex items-start justify-center aw970px ah250px" style="height:250px">
                                <div id="homepage_mid_desktop_0" data-freestar-ad="true" class="transition-box duration-250 align-center background-repeat relative flex items-start justify-center ease-in [&amp;>iframe]:m-auto bg-inherit opacity-100 aw970px ah250px">
                                  <div style="width:100%;height:100%" class="min-w-full absolute mb-0 ml-auto mr-auto mt-0 flex items-center justify-center bg-[length:200%_100%] opacity-100 aw100% ah100%">
                                    <a id="adLink1" href="" target="_blank"> 
                                        <img id="adImage1" src="" style="height:270px;">
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
