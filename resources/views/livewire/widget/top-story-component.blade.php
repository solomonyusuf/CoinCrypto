<div>
    @for ($i = 0; $i < count($top); $i *= 3)
    <div class="flex">
        <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-9 xl:grid-cols-2 gap-6">
          <div class="col-span-1 lg:col-span-5 xl:col-span-1">
            <div class="flex gap-4 false  ">
              <div class="bg-white flex gap-6 w-full shrink">
                <div class="flex flex-col"><a class="text-color-charcoal-900 mb-4 hover:underline"
                    href="/sponsored-content/platon-paving-the-way-to-become-the-visa-of-web-3-0">
                    <h2 class="font-headline-2xs font-medium">
                        {{ $top[$i]->title }}
                    </h2>
                  </a>
                
                  <p class="font-body text-color-charcoal-600 mb-4 line-clamp-3">
                    {!!  \Illuminate\Support\Str::limit($top[$i]->content, 60, '..') !!}
                
                  </p>
                  <p class="flex gap-2 flex-col">
                    <span class="font-metadata text-color-charcoal-600 uppercase">
                        {{ \Carbon\Carbon::parse($top[$i]->created_at)->diffForHumans()  }}            
                    </span>
                </p>
                </div>
                <a title="PlatON: Paving the Way to Become the Visa of Web 3.0" class="flex shrink-0 flex-col"
                  href="/sponsored-content/platon-paving-the-way-to-become-the-visa-of-web-3-0">
                  <img  width="1280" height="960" class="lg:w-[9.5rem] lg:h-[9.5rem] sm:w-16 sm:h-16 xs:w-16 xs:h-16 rounded align-self-end object-cover"
                    style="color:transparent;background-size:cover;background-position:50% 50%;background-repeat:no-repeat;background-image:url(&quot;data:image/jpeg;base64,/9j/2wBDAAYEBQYFBAYGBQYHBwYIChAKCgkJChQODwwQFxQYGBcUFhYaHSUfGhsjHBYWICwgIyYnKSopGR8tMC0oMCUoKSj/2wBDAQcHBwoIChMKChMoGhYaKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCj/wAARCAAPABQDASIAAhEBAxEB/8QAFwAAAwEAAAAAAAAAAAAAAAAAAAQGB//EACMQAAIBBAEDBQAAAAAAAAAAAAECAwAEBRIRBiFRIiMxQWH/xAAWAQEBAQAAAAAAAAAAAAAAAAAEAwb/xAAbEQACAwADAAAAAAAAAAAAAAAAAQIDERMhMf/aAAwDAQACEQMRAD8AyfGYV2yKWtx7Z2CsfnirK/wT9O3IXYPCyhhIPsGncb02LPCxX0km8kq7keKWyeRSS1eKUSPKVCAlvSqjwK3NdazUHblKXXguxiY87r3/AGip+Ujc8c0UpUluM//Z&quot;)"
                    src="{{ $top[$i]->image }}" /></a>
              </div>
            </div>
          </div>
          <div class="flex col-span-1 lg:hidden">
            <hr class="shrink-0 bg-divider border-none w-full h-divider" role="separator" />
          </div>
          <div class="col-span-1 md:col-span-1 lg:col-span-4 xl:col-span-1 grid grid-cols-1 xl:grid-cols-2 xl:gap-6">
            <div>
              <div class="flex gap-4 false ">
                <div class="bg-white flex gap-6 w-full shrink">
                  <div class="flex flex-col"><a class="text-color-charcoal-900 mb-4 hover:underline"
                      href="/business/2025/03/20/tether-ranks-among-top-foreign-buyers-of-u-s-treasuries-in-2024-firm-says">
                      <h2 class="font-headline-2xs font-medium">Tether Ranks Among
                        Top Buyers of U.S. Treasuries in 2024, Firm Says</h2>
                    </a>
                    <p class="flex gap-2 flex-col"><span class="font-metadata text-color-charcoal-600 uppercase">12
                        hours ago</span></p>
                  </div>
                </div>
              </div>
              <div class="py-4 xl:hidden">
                <hr class="shrink-0 bg-divider border-none w-full h-divider" role="separator" />
              </div>
            </div>
            <div>
              <div class=" flex gap-4 false ">
                <div class="bg-white flex gap-6 w-full shrink">
                  <div class="flex flex-col"><a class="text-color-charcoal-900 mb-4 hover:underline"
                      href="/markets/2025/03/20/bitcoin-miners-feel-squeeze-as-hashprice-erases-post-election-gains">
                      <h2 class="font-headline-2xs font-medium">Bitcoin Miners
                        Feel Squeeze as Hashprice Erases Post-Election Gains
                      </h2>
                    </a>
                    <p class="flex gap-2 flex-col"><span class="font-metadata text-color-charcoal-600 uppercase">12
                        hours ago</span></p>
                  </div>
                </div>
              </div>
              <div class="hidden xl:hidden">
                <hr class="shrink-0 bg-divider border-none w-full h-divider" role="separator" />
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="py-4">
      <hr class="shrink-0 bg-divider border-none w-full h-divider" role="separator" />
    </div>
    @endfor 
    
</div>
