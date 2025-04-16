<div>
     
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

    <div class="container-fluid">
        <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
          <div class="card-body px-4 py-3">
            <div class="row align-items-center">
              <div class="col-9">
                <h4 class="fw-semibold mb-8">App Settings</h4>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a class="text-muted text-decoration-none">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">Settings</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>


        <form action="{{ route('update_setting') }}" method="POST">
            @csrf
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link d-flex active" data-bs-toggle="tab" href="#item1" role="tab">
                        <span><i class="ti ti-home-2 fs-4"></i>
                        </span>
                        <span class="d-none d-md-block ms-2">General</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex" data-bs-toggle="tab" href="#item2" role="tab">
                        <span><i class="ti ti-phone fs-4"></i>
                        </span>
                        <span class="d-none d-md-block ms-2">Contact</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex" data-bs-toggle="tab" href="#item3" role="tab">
                        <span><i class="ti ti-cookie"></i> </span>
                        <span class="d-none d-md-block ms-2">Cookies</span>
                    </a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link d-flex" data-bs-toggle="tab" href="#item4" role="tab">
                        <span><i class="ti ti-layout"></i> </span>
                        <span class="d-none d-md-block ms-2">Footer</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex" data-bs-toggle="tab" href="#item5" role="tab">
                        <span><i class="ti ti-eye"></i> </span>
                        <span class="d-none d-md-block ms-2">Allowable</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex" data-bs-toggle="tab" href="#item6" role="tab">
                        <span><i class="ti ti-brand-facebook"></i> </span>
                        <span class="d-none d-md-block ms-2">Socical</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex" data-bs-toggle="tab" href="#item7" role="tab">
                        <span><i class="ti ti-accessible"></i> </span>
                        <span class="d-none d-md-block ms-2">Terms</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex" data-bs-toggle="tab" href="#item8" role="tab">
                        <span><i class="ti ti-ad-2"></i> </span>
                        <span class="d-none d-md-block ms-2">Privacy</span>
                    </a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link d-flex" data-bs-toggle="tab" href="#item9" role="tab">
                        <span><i class="ti ti-ad-2"></i> </span>
                        <span class="d-none d-md-block ms-2">Do not sell</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex" data-bs-toggle="tab" href="#item10" role="tab">
                        <span><i class="ti ti-sitemap"></i> </span>
                        <span class="d-none d-md-block ms-2">Sitemap</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex" data-bs-toggle="tab" href="#item11" role="tab">
                        <span><i class="ti ti-alert-square"></i> </span>
                        <span class="d-none d-md-block ms-2">Ethics</span>
                    </a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link d-flex" data-bs-toggle="tab" href="#item12" role="tab">
                        <span><i class="ti ti-adjustments-cog"></i> </span>
                        <span class="d-none d-md-block ms-2">Accessibility</span>
                    </a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link d-flex" data-bs-toggle="tab" href="#item13" role="tab">
                        <span><i class="ti ti-pencil"></i> </span>
                        <span class="d-none d-md-block ms-2">About</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex" data-bs-toggle="tab" href="#item14" role="tab">
                        <span><i class="ti ti-book"></i> </span>
                        <span class="d-none d-md-block ms-2">Masthead</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex" data-bs-toggle="tab" href="#item15" role="tab">
                        <span><i class="ti ti-ad"></i> </span>
                        <span class="d-none d-md-block ms-2">Advertising</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex" data-bs-toggle="tab" href="#item16" role="tab">
                        <span><i class="ti ti-home"></i> </span>
                        <span class="d-none d-md-block ms-2">Homepage</span>
                    </a>
                </li>
               
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="item1" role="tabpanel">
                    <div class="row mt-2">
                        <div class="col-lg-6">
                          <div class="card">
                            <div class="px-4 py-3 border-bottom">
                              <h4 class="card-title mb-0">App Info</h4>
                            </div>
                            <div class="card-body p-4">
                                @if($setting?->logo)
                                <div class="mb-3">
                                  <img src="{{ asset($setting?->logo) }}" style="height:50px;" />
                                  </div>
                                @endif
                                <div class="mb-3">
                                  <label  class="form-label">Image</label>
                                  <input name="image"  type="file" class="form-control">
                                </div>
                                <div class="mb-3">
                                  <label  class="form-label">Theme</label>
                                  <select required name="theme" class="form-control">
                                    @if ($setting->theme == 'black')
                                    <option selected value="black"> Black</option>
                                    <option value="white">White</option>
                                    @else 
                                    <option value="black"> Black</option>
                                    <option selected value="white">White</option>
                                    @endif
                                  </select>
                                </div>
                              <div class="mb-3">
                                <label for="exampleInputname" class="form-label">Name</label>
                                <input name="name" value="{{ $setting?->name }}"  type="text" class="form-control" id="exampleInputname" placeholder="">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputtext1" class="form-label">Email</label>
                                <input name="email" value="{{ $setting?->email }}"  type="text" class="form-control" id="exampleInputtext1" placeholder="">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputtext1" class="form-label">Address</label>
                                <input name="address" value="{{ $setting?->address }}"  type="text" class="form-control" id="exampleInputtext1" placeholder="">
                              </div>
                               <div class="mb-3">
                                <label for="exampleInputtext1" class="form-label">Default Event Text Color</label>
                                <input name="default_event_color" value="{{ $setting?->default_event_color }}"  type="text" class="form-control" id="exampleInputtext1" placeholder="">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputtext1" class="form-label">Default Event Background</label>
                                <input name="default_event_background" value="{{ $setting?->default_event_background }}"  type="text" class="form-control" id="exampleInputtext1" placeholder="">
                              </div>
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="card">
                            <div class="px-4 py-3 border-bottom">
                              <h4 class="card-title mb-0"> Sidebar</h4>
                            </div>
                            <div class="card-body p-4">
                              <div class="mb-3">
                                <div class="input-group">
                                  <span class="input-group-text px-6" id="basic-addon1">
                                    <i class="ti ti-link fs-6"></i>
                                  </span>
                                  <input name="news" value="{{ $setting?->news }}" type="text"  class="form-control ps-2" placeholder="">
                                </div>
                              </div>
                              <div class="mb-3">
                                <div class="input-group">
                                  <span class="input-group-text px-6" id="basic-addon1">
                                    <i class="ti ti-link fs-6"></i>
                                  </span>
                                  <input name="prices" value="{{ $setting?->prices }}"  type="text" class="form-control ps-2" placeholder="">
                                </div>
                              </div>
                               <div class="mb-3">
                                <div class="input-group">
                                  <span class="input-group-text px-6" id="basic-addon1">
                                    <i class="ti ti-link fs-6"></i>
                                  </span>
                                  <input name="concensus" value="{{ $setting?->concensus }}"  type="text" class="form-control ps-2" placeholder="">
                                </div>
                              </div>
                              <div class="mb-3">
                                <div class="input-group">
                                  <span class="input-group-text px-6" id="basic-addon1">
                                    <i class="ti ti-link fs-6"></i>
                                  </span>
                                  <input name="sponsored" value="{{ $setting?->sponsored }}"  type="text" class="form-control ps-2" placeholder="">
                                </div>
                              </div>
                              <div class="mb-3">
                                <div class="input-group">
                                  <span class="input-group-text px-6" id="basic-addon1">
                                    <i class="ti ti-link fs-6"></i>
                                  </span>
                                  <input name="videos" value="{{ $setting?->videos }}"  type="text" class="form-control ps-2" placeholder="">
                                </div>
                              </div>
                              <div class="mb-3">
                                <div class="input-group">
                                  <span class="input-group-text px-6" id="basic-addon1">
                                    <i class="ti ti-link fs-6"></i>
                                  </span>
                                  <input name="podcasts" value="{{ $setting?->podcasts }}"  type="text" class="form-control ps-2" placeholder="">
                                </div>
                              </div>
                              <div class="mb-3">
                                <div class="input-group">
                                  <span class="input-group-text px-6" id="basic-addon1">
                                    <i class="ti ti-link fs-6"></i>
                                  </span>
                                  <input name="newsletters" value="{{ $setting?->newsletters }}"  type="text" class="form-control ps-2" placeholder="">
                                </div>
                              </div>
                              <div class="mb-3">
                                <div class="input-group">
                                  <span class="input-group-text px-6" id="basic-addon1">
                                    <i class="ti ti-link fs-6"></i>
                                  </span>
                                  <input name="webinar" value="{{ $setting?->webinar }}"  type="text" class="form-control ps-2" placeholder="">
                                </div>
                              </div>
                             
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                          </div>
                        </div>
                       
                      </div>
                
                </div>
                <div class="tab-pane p-3" id="item2" role="tabpanel">
                    <h6>Contact Page</h6>
                    <div class="mb-3 mt-2">
                        <textarea name="contact" value=""  type="text" class="form-control" id="exampleInputtext1" placeholder="">{{ $setting?->contact }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                            
                </div>
                <div class="tab-pane p-3" id="item3" role="tabpanel">
                    <h6>Cookies</h6>
                    <div class="mb-3 mt-2">
                        <textarea name="cookie" value=""  type="text" class="form-control" id="exampleInputtext1" placeholder="">{{ $setting?->cookie }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                      
                </div>
                <div class="tab-pane p-3" id="item4" role="tabpanel">
                    <div class="row mt-2" >
                        <div class="col-12">
                            <div class="card">
                              <div class="px-4 py-3 border-bottom">
                                <h4 class="card-title mb-0">Footer Info</h4>
                              </div>
                              <div class="card-body p-4 border-bottom">
                                <div class="row">
                                  <div class="col-lg-12">
                                   
                                    <div class="mb-3">
                                        <label for="exampleInputname" class="form-label">Footer Name</label>
                                        <input name="footer_name" value="{{ $setting?->footer_name }}"  type="text" class="form-control" id="exampleInputname" placeholder="">
                                      </div>

                                      <div class="mb-3 mt-2">
                                        <textarea name="footer_info" value=""  type="text" class="form-control" id="exampleInputtext1" placeholder="">{{ $setting?->footer_info }}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                     
                                   </div>
                                </div>
                              </div>
                             
                            </div>
                          </div>
                    </div>
                    
                </div>
                <div class="tab-pane p-3" id="item5" role="tabpanel">
                    <div class="row justify-content-center mt-2" >
                        <div class="col-lg-7">
                            <div class="card">
                              <div class="px-4 py-3 border-bottom">
                                <h4 class="card-title mb-0">Allowable</h4>
                              </div>
                              <div class="card-body p-4 border-bottom">
                                <div class="row">
                                  <div class="col-lg-12">
                                   
                                    
                                       <div class="mb-3">
                                        <label  class="form-label">First Section</label>
                                        <select required name="first" class="form-control">
                                          @if ($setting->first == true)
                                          <option selected value="1"> true</option>
                                          <option value="0"> false</option>
                                          @elseif($setting->first == false)
                                          <option  value="1"> true</option>
                                          <option selected value="0"> false</option>
                                          @else 
                                          <option  value="1"> true</option>
                                          <option value="0"> false</option>
                                          @endif
                                        </select>
                                      </div>
                                      <div class="mb-3">
                                        <label  class="form-label">Langugage Section</label>
                                        <select required name="language" class="form-control">
                                          @if ($setting->language == true)
                                          <option selected value="1"> true</option>
                                          <option value="0"> false</option>
                                          @elseif($setting->language == false)
                                          <option  value="1"> true</option>
                                          <option selected value="0"> false</option>
                                          @else 
                                          <option  value="1"> true</option>
                                          <option value="0"> false</option>
                                          @endif
                                        </select>
                                      </div>

                                      <div class="mb-3">
                                        <label  class="form-label">Top Ticker Section</label>
                                        <select required name="top_ticker" class="form-control">
                                          @if ($setting->top_ticker == true)
                                          <option selected value="1"> true</option>
                                          <option value="0"> false</option>
                                          @elseif($setting->top_ticker == false)
                                          <option  value="1"> true</option>
                                          <option selected value="0"> false</option>
                                          @else 
                                          <option  value="1"> true</option>
                                          <option value="0"> false</option>
                                          @endif
                                        </select>
                                      </div>
                                      
                                      <div class="mb-3">
                                        <label  class="form-label">Advert Section</label>
                                        <select required name="advert" class="form-control">
                                          @if ($setting->advert == true)
                                          <option selected value="1"> true</option>
                                          <option value="0"> false</option>
                                          @elseif($setting->advert == false)
                                          <option  value="1"> true</option>
                                          <option selected value="0"> false</option>
                                          @else 
                                          <option  value="1"> true</option>
                                          <option value="0"> false</option>
                                          @endif
                                        </select>
                                      </div>
                                      
                                      <div class="mb-3">
                                        <label  class="form-label">Top Event Section</label>
                                        <select required name="top_event" class="form-control">
                                          @if ($setting->top_event == true)
                                          <option selected value="1"> true</option>
                                          <option value="0"> false</option>
                                          @elseif($setting->top_event == false)
                                          <option  value="1"> true</option>
                                          <option selected value="0"> false</option>
                                          @else 
                                          <option  value="1"> true</option>
                                          <option value="0"> false</option>
                                          @endif
                                        </select>
                                      </div>
                                      
                                      <div class="mb-3">
                                        <label  class="form-label">Page Event Section</label>
                                        <select required name="event_section" class="form-control">
                                          @if ($setting->event_section == true)
                                          <option selected value="1"> true</option>
                                          <option value="0"> false</option>
                                          @elseif($setting->event_section == false)
                                          <option  value="1"> true</option>
                                          <option selected value="0"> false</option>
                                          @else 
                                          <option  value="1"> true</option>
                                          <option value="0"> false</option>
                                          @endif
                                        </select>
                                      </div>
                                      <div class="mb-3">
                                        <label  class="form-label"> Podcast Section</label>
                                        <select required name="podcast" class="form-control">
                                          @if ($setting->podcast == true)
                                          <option selected value="1"> true</option>
                                          <option value="0"> false</option>
                                          @elseif($setting->podcast == false)
                                          <option  value="1"> true</option>
                                          <option selected value="0"> false</option>
                                          @else 
                                          <option  value="1"> true</option>
                                          <option value="0"> false</option>
                                          @endif
                                        </select>
                                      </div>
                                      
                                      <div class="mb-3">
                                        <label  class="form-label"> Most Read Section</label>
                                        <select required name="most_read" class="form-control">
                                          @if ($setting->most_read == true)
                                          <option selected value="1"> true</option>
                                          <option value="0"> false</option>
                                          @elseif($setting->most_read == false)
                                          <option  value="1"> true</option>
                                          <option selected value="0"> false</option>
                                          @else 
                                          <option  value="1"> true</option>
                                          <option value="0"> false</option>
                                          @endif
                                        </select>
                                      </div>
                                       <div class="mb-3">
                                        <label  class="form-label"> Newsletter Section</label>
                                        <select required name="newsletter" class="form-control">
                                          @if ($setting->newsletter == true)
                                          <option selected value="1"> true</option>
                                          <option value="0"> false</option>
                                          @elseif($setting->newsletter == false)
                                          <option  value="1"> true</option>
                                          <option selected value="0"> false</option>
                                          @else 
                                          <option  value="1"> true</option>
                                          <option value="0"> false</option>
                                          @endif
                                        </select>
                                      </div>
                                      
                                      <button type="submit" class="btn btn-primary">Submit</button>
                          

                                   
                                    
                                   </div>
                                </div>
                              </div>
                            
                            </div>
                          </div>
                    </div>
                    
                </div>
                <div class="tab-pane p-3" id="item6" role="tabpanel">
                    <div class="col-lg-12">
                        <div class="card">
                          <div class="px-4 py-3 border-bottom">
                            <h4 class="card-title mb-0">Social Links</h4>
                          </div>
                          <div class="card-body p-4">
                            <div class="mb-3">
                              <div class="input-group">
                                <span class="input-group-text px-6" id="basic-addon1">
                                  <i class="ti ti-link fs-6"></i>
                                </span>
                                <input name="twitter" value="{{ $setting?->twitter }}" placeholder="twitter" type="text"  class="form-control ps-2" >
                              </div>
                            </div>
                            <div class="mb-3">
                              <div class="input-group">
                                <span class="input-group-text px-6" id="basic-addon1">
                                  <i class="ti ti-link fs-6"></i>
                                </span>
                                <input name="linkedin" value="{{ $setting?->linkedin }}"  type="text" class="form-control ps-2" placeholder="linkedin">
                              </div>
                            </div>
                             <div class="mb-3">
                              <div class="input-group">
                                <span class="input-group-text px-6" id="basic-addon1">
                                  <i class="ti ti-link fs-6"></i>
                                </span>
                                <input name="facebook" value="{{ $setting?->facebook }}"  type="text" class="form-control ps-2" placeholder="facebook">
                              </div>
                            </div>
                            <div class="mb-3">
                              <div class="input-group">
                                <span class="input-group-text px-6" id="basic-addon1">
                                  <i class="ti ti-link fs-6"></i>
                                </span>
                                <input name="instagram" value="{{ $setting?->instagram }}"  type="text" class="form-control ps-2" placeholder="instagram">
                              </div>
                            </div>
                            <div class="mb-3">
                              <div class="input-group">
                                <span class="input-group-text px-6" id="basic-addon1">
                                  <i class="ti ti-link fs-6"></i>
                                </span>
                                <input name="youtube" value="{{ $setting?->youtube }}"  type="text" class="form-control ps-2" placeholder="youtube">
                              </div>
                            </div>
                            <div class="mb-3">
                              <div class="input-group">
                                <span class="input-group-text px-6" id="basic-addon1">
                                  <i class="ti ti-link fs-6"></i>
                                </span>
                                <input name="tiktok" value="{{ $setting?->tiktok }}"  type="text" class="form-control ps-2" placeholder="tiktok">
                              </div>
                            </div>
                            <div class="mb-3">
                              <div class="input-group">
                                <span class="input-group-text px-6" id="basic-addon1">
                                  <i class="ti ti-link fs-6"></i>
                                </span>
                                <input name="discord" value="{{ $setting?->discord }}"  type="text" class="form-control ps-2" placeholder="discord">
                              </div>
                            </div>
                            <div class="mb-3">
                              <div class="input-group">
                                <span class="input-group-text px-6" id="basic-addon1">
                                  <i class="ti ti-link fs-6"></i>
                                </span>
                                <input name="telegram" value="{{ $setting?->telegram }}"  type="text" class="form-control ps-2" placeholder="telegram">
                              </div>
                            </div>
                            <div class="px-4 py-3 border-bottom">
                              <h4 class="card-title mb-0">Mobile Store Links</h4>
                            </div>
                            <div class="mb-3">
                              <div class="input-group">
                                <span class="input-group-text px-6" id="basic-addon1">
                                  <i class="ti ti-link fs-6"></i>
                                </span>
                                <input name="google" value="{{ $setting?->google }}"  type="text" class="form-control ps-2" placeholder="google store">
                              </div>
                            </div>
                            <div class="mb-3">
                              <div class="input-group">
                                <span class="input-group-text px-6" id="basic-addon1">
                                  <i class="ti ti-link fs-6"></i>
                                </span>
                                <input name="apple" value="{{ $setting?->apple }}"  type="text" class="form-control ps-2" placeholder="apple store">
                              </div>
                            </div>
                           
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </div>
                      </div>
                </div>
                
               <div class="tab-pane p-3" id="item7" role="tabpanel">
                    <h6>Terms & Condition</h6>
                    <div class="mb-3 mt-2">
                        <textarea name="terms" value=""  type="text" class="form-control" id="exampleInputtext1" placeholder="">{{ $setting?->terms }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                      
                </div>
                <div class="tab-pane p-3" id="item8" role="tabpanel">
                    <h6>Privacy</h6>
                    <div class="mb-3 mt-2">
                        <textarea name="privacy" value=""  type="text" class="form-control" id="exampleInputtext1" placeholder="">{{ $setting?->privacy }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                       
                </div>
                 <div class="tab-pane p-3" id="item9" role="tabpanel">
                    <h6>Do Not Sell</h6>
                    <div class="mb-3 mt-2">
                        <textarea name="do_not_sell" value=""  type="text" class="form-control" id="exampleInputtext1" placeholder="">{{ $setting?->do_not_sell }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                       
                </div>
                 <div class="tab-pane p-3" id="item10" role="tabpanel">
                    <h6>Sitemap</h6>
                    <div class="mb-3 mt-2">
                        <textarea name="sitemap" value=""  type="text" class="form-control" id="exampleInputtext1" placeholder="">{{ $setting?->sitemap }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                       
                </div>
                 <div class="tab-pane p-3" id="item11" role="tabpanel">
                    <h6>Ethics</h6>
                    <div class="mb-3 mt-2">
                        <textarea name="ethics" value=""  type="text" class="form-control" id="exampleInputtext1" placeholder="">{{ $setting?->ethics }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                       
                </div>
                <div class="tab-pane p-3" id="item12" role="tabpanel">
                    <h6>Accessibility</h6>
                    <div class="mb-3 mt-2">
                        <textarea name="accessibility" value=""  type="text" class="form-control" id="exampleInputtext1" placeholder="">{{ $setting?->accessibility }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                       
                </div>
                 <div class="tab-pane p-3" id="item13" role="tabpanel">
                    <h6>About</h6>
                    <div class="mb-3 mt-2">
                        <textarea name="about" value=""  type="text" class="form-control" id="exampleInputtext1" placeholder="">{{ $setting?->about }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                       
                </div>
                <div class="tab-pane p-3" id="item14" role="tabpanel">
                    <h6>Masthead</h6>
                    <div class="mb-3 mt-2">
                        <textarea name="masthead" value=""  type="text" class="form-control" id="exampleInputtext1" placeholder="">{{ $setting?->masthead }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                       
                </div>
                 <div class="tab-pane p-3" id="item15" role="tabpanel">
                    <h6>Advertising</h6>
                    <div class="mb-3 mt-2">
                        <textarea name="advertising" value=""  type="text" class="form-control" id="exampleInputtext1" placeholder="">{{ $setting?->advertising }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                       
                </div>
                <div class="tab-pane p-3" id="item16" role="tabpanel">
                    <h6>Homepage</h6>
                    <div class="mt-3">
                       <div class="row">
                        <a target="__blank" href="{{ route('admin_home') }}" class="btn btn-primary mb-5">Visit Homepage</a>
                     

                          <div class="col-md-6">
                              <div class="form-group mb-3">
                                <label>Top Left Article</label>
                                <select name="top_left_article" id="top-left" class="form-control">
                                  @foreach ($articles as $data)
                                  @if($setting->top_left_article == $data->id)
                                  <option selected value="{{ $data->id }}">{{ $data->title }}</option>
                                  @else
                                  <option value="{{ $data->id }}">{{ $data->title }}</option>
                                  @endif
                                  @endforeach
                                </select>
                              </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group mb-3">
                              <label>Top Right Video </label>
                              <select name="top_right_article" id="top-right" class="form-control">
                                @foreach ($videos as $data)
                                @if($setting->top_right_article == $data->id)
                                  <option selected value="{{ $data->id }}">{{ $data->title }}</option>
                                  @else
                                  <option value="{{ $data->id }}">{{ $data->title }}</option>
                                  @endif
                                @endforeach
                              </select>
                            </div>
                          </div>
                       </div>
                       <div class="row">
                          <div class="col-md-6">
                              <div class="form-group mb-3">
                                <label>Second Section Left Category</label>
                                <select name="second_left" id="second-left" class="form-control">
                                  @foreach ($categories as $data)
                                  @if($setting->second_left == $data->id)
                                  <option selected value="{{ $data->id }}">{{ $data->title }}</option>
                                  @else
                                  <option value="{{ $data->id }}">{{ $data->title }}</option>
                                  @endif
                                  @endforeach
                                </select>
                              </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group mb-3">
                              <label>Second Section Right Category </label>
                              <select name="second_right" id="second-right" class="form-control">
                                @foreach ($categories as $data)
                                @if($setting->second_right == $data->id)
                                  <option selected value="{{ $data->id }}">{{ $data->title }}</option>
                                  @else
                                  <option value="{{ $data->id }}">{{ $data->title }}</option>
                                  @endif
                                @endforeach
                              </select>
                            </div>
                          </div>
                           <div class="col-md-12">
                            <div class="form-group mb-3">
                              <label>Third Section Category </label>
                              <select name="third_section" id="third_section" class="form-control">
                                @foreach ($categories as $data)
                                @if($setting->third_section == $data->id)
                                  <option selected value="{{ $data->id }}">{{ $data->title }}</option>
                                  @else
                                  <option value="{{ $data->id }}">{{ $data->title }}</option>
                                  @endif
                                @endforeach
                              </select>
                            </div>
                          </div>
                           <div class="col-md-6">
                            <div class="form-group mb-3">
                              <label>Fourth Section Category </label>
                              <select name="fourth_section" id="fourth_section" class="form-control">
                                @foreach ($categories as $data)
                                @if($setting->fourth_section == $data->id)
                                  <option selected value="{{ $data->id }}">{{ $data->title }}</option>
                                  @else
                                  <option value="{{ $data->id }}">{{ $data->title }}</option>
                                  @endif
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group mb-3">
                              <label>Fifth Section Category </label>
                              <select name="fifth_section" id="fifth_section" class="form-control">
                                @foreach ($categories as $data)
                                @if($setting->fifth_section == $data->id)
                                  <option selected value="{{ $data->id }}">{{ $data->title }}</option>
                                  @else
                                  <option value="{{ $data->id }}">{{ $data->title }}</option>
                                  @endif
                                @endforeach
                              </select>
                            </div>
                          </div>
                       </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                       
                </div>
                
            </div>
        </div>

        </div>

 <!-- Place the first <script> tag in your HTML's <head> -->
  <script src="https://cdn.tiny.cloud/1/ufodp51yzkdxnwn7iuy3jpvy44tny3sh01l177peomy36arf/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
    tinymce.init({
    selector: 'textarea',
    height: 600, 
    plugins: [
        // Core editing features
        'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
        // Your account includes a free trial of TinyMCE premium features
        // Try the most popular premium features until Apr 6, 2025:
        'checklist', 'mediaembed', 'casechange', 'export', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'editimage', 'advtemplate', 'ai', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown','importword', 'exportword', 'exportpdf'
    ],
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),
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
</div>
 