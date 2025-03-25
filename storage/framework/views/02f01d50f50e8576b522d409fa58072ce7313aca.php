<div>
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


        <form action="<?php echo e(route('update_setting')); ?>" method="POST">
            <?php echo csrf_field(); ?>
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
                                <?php if($setting?->logo): ?>
                                <div class="mb-3">
                                  <img src="<?php echo e(asset($setting?->logo)); ?>" style="height:50px;" />
                                  </div>
                                <?php endif; ?>
                                <div class="mb-3">
                                  <label  class="form-label">Image</label>
                                  <input name="image"  type="file" class="form-control">
                                </div>
                              <div class="mb-3">
                                <label for="exampleInputname" class="form-label">Name</label>
                                <input name="name" value="<?php echo e($setting?->name); ?>"  type="text" class="form-control" id="exampleInputname" placeholder="">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputtext1" class="form-label">Email</label>
                                <input name="email" value="<?php echo e($setting?->email); ?>"  type="text" class="form-control" id="exampleInputtext1" placeholder="">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputtext1" class="form-label">Address</label>
                                <input name="address" value="<?php echo e($setting?->address); ?>"  type="text" class="form-control" id="exampleInputtext1" placeholder="">
                              </div>
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="card">
                            <div class="px-4 py-3 border-bottom">
                              <h4 class="card-title mb-0">Menu & Sidebar</h4>
                            </div>
                            <div class="card-body p-4">
                              <div class="mb-3">
                                <div class="input-group">
                                  <span class="input-group-text px-6" id="basic-addon1">
                                    <i class="ti ti-link fs-6"></i>
                                  </span>
                                  <input name="news" value="<?php echo e($setting?->news); ?>" type="text"  class="form-control ps-2" placeholder="">
                                </div>
                              </div>
                              <div class="mb-3">
                                <div class="input-group">
                                  <span class="input-group-text px-6" id="basic-addon1">
                                    <i class="ti ti-link fs-6"></i>
                                  </span>
                                  <input name="prices" value="<?php echo e($setting?->prices); ?>"  type="text" class="form-control ps-2" placeholder="">
                                </div>
                              </div>
                               <div class="mb-3">
                                <div class="input-group">
                                  <span class="input-group-text px-6" id="basic-addon1">
                                    <i class="ti ti-link fs-6"></i>
                                  </span>
                                  <input name="concensus" value="<?php echo e($setting?->concensus); ?>"  type="text" class="form-control ps-2" placeholder="">
                                </div>
                              </div>
                              <div class="mb-3">
                                <div class="input-group">
                                  <span class="input-group-text px-6" id="basic-addon1">
                                    <i class="ti ti-link fs-6"></i>
                                  </span>
                                  <input name="sponsored" value="<?php echo e($setting?->sponsored); ?>"  type="text" class="form-control ps-2" placeholder="">
                                </div>
                              </div>
                              <div class="mb-3">
                                <div class="input-group">
                                  <span class="input-group-text px-6" id="basic-addon1">
                                    <i class="ti ti-link fs-6"></i>
                                  </span>
                                  <input name="videos" value="<?php echo e($setting?->videos); ?>"  type="text" class="form-control ps-2" placeholder="">
                                </div>
                              </div>
                              <div class="mb-3">
                                <div class="input-group">
                                  <span class="input-group-text px-6" id="basic-addon1">
                                    <i class="ti ti-link fs-6"></i>
                                  </span>
                                  <input name="podcasts" value="<?php echo e($setting?->podcasts); ?>"  type="text" class="form-control ps-2" placeholder="">
                                </div>
                              </div>
                              <div class="mb-3">
                                <div class="input-group">
                                  <span class="input-group-text px-6" id="basic-addon1">
                                    <i class="ti ti-link fs-6"></i>
                                  </span>
                                  <input name="newsletters" value="<?php echo e($setting?->newsletters); ?>"  type="text" class="form-control ps-2" placeholder="">
                                </div>
                              </div>
                              <div class="mb-3">
                                <div class="input-group">
                                  <span class="input-group-text px-6" id="basic-addon1">
                                    <i class="ti ti-link fs-6"></i>
                                  </span>
                                  <input name="webinar" value="<?php echo e($setting?->webinar); ?>"  type="text" class="form-control ps-2" placeholder="">
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
                        <textarea name="contact" value=""  type="text" class="form-control" id="exampleInputtext1" placeholder=""><?php echo e($setting?->contact); ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                            
                </div>
                <div class="tab-pane p-3" id="item3" role="tabpanel">
                    <h6>Cookies</h6>
                    <div class="mb-3 mt-2">
                        <textarea name="cookie" value=""  type="text" class="form-control" id="exampleInputtext1" placeholder=""><?php echo e($setting?->cookie); ?></textarea>
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
                                        <input name="footer_name" value="<?php echo e($setting?->footer_name); ?>"  type="text" class="form-control" id="exampleInputname" placeholder="">
                                      </div>

                                    <div class="mb-3 mt-2">
                                        <textarea name="footer_info" value=""  type="text" class="form-control" id="exampleInputtext1" placeholder=""><?php echo e($setting?->footer_info); ?></textarea>
                                    </div>
                                    
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
                                        <label  class="form-label">Langugage Section</label>
                                        <select required name="langugage" class="form-control">
                                          <?php if($setting->langugage == true): ?>
                                          <option selected value="1"> true</option>
                                          <option value="0"> false</option>
                                          <?php elseif($setting->langugage == false): ?>
                                          <option  value="1"> true</option>
                                          <option selected value="0"> false</option>
                                          <?php else: ?> 
                                          <option  value="1"> true</option>
                                          <option value="0"> false</option>
                                          <?php endif; ?>
                                        </select>
                                      </div>

                                      <div class="mb-3">
                                        <label  class="form-label">Top Ticker Section</label>
                                        <select required name="top_ticker" class="form-control">
                                          <?php if($setting->top_ticker == true): ?>
                                          <option selected value="1"> true</option>
                                          <option value="0"> false</option>
                                          <?php elseif($setting->top_ticker == false): ?>
                                          <option  value="1"> true</option>
                                          <option selected value="0"> false</option>
                                          <?php else: ?> 
                                          <option  value="1"> true</option>
                                          <option value="0"> false</option>
                                          <?php endif; ?>
                                        </select>
                                      </div>
                                      
                                      <div class="mb-3">
                                        <label  class="form-label">Advert Section</label>
                                        <select required name="advert" class="form-control">
                                          <?php if($setting->advert == true): ?>
                                          <option selected value="1"> true</option>
                                          <option value="0"> false</option>
                                          <?php elseif($setting->advert == false): ?>
                                          <option  value="1"> true</option>
                                          <option selected value="0"> false</option>
                                          <?php else: ?> 
                                          <option  value="1"> true</option>
                                          <option value="0"> false</option>
                                          <?php endif; ?>
                                        </select>
                                      </div>
                                      
                                      <div class="mb-3">
                                        <label  class="form-label">Top Event Section</label>
                                        <select required name="top_event" class="form-control">
                                          <?php if($setting->top_event == true): ?>
                                          <option selected value="1"> true</option>
                                          <option value="0"> false</option>
                                          <?php elseif($setting->top_event == false): ?>
                                          <option  value="1"> true</option>
                                          <option selected value="0"> false</option>
                                          <?php else: ?> 
                                          <option  value="1"> true</option>
                                          <option value="0"> false</option>
                                          <?php endif; ?>
                                        </select>
                                      </div>
                                      
                                      <div class="mb-3">
                                        <label  class="form-label">Page Event Section</label>
                                        <select required name="event_section" class="form-control">
                                          <?php if($setting->event_section == true): ?>
                                          <option selected value="1"> true</option>
                                          <option value="0"> false</option>
                                          <?php elseif($setting->event_section == false): ?>
                                          <option  value="1"> true</option>
                                          <option selected value="0"> false</option>
                                          <?php else: ?> 
                                          <option  value="1"> true</option>
                                          <option value="0"> false</option>
                                          <?php endif; ?>
                                        </select>
                                      </div>
                                      <div class="mb-3">
                                        <label  class="form-label"> Podcast Section</label>
                                        <select required name="podcast" class="form-control">
                                          <?php if($setting->podcast == true): ?>
                                          <option selected value="1"> true</option>
                                          <option value="0"> false</option>
                                          <?php elseif($setting->podcast == false): ?>
                                          <option  value="1"> true</option>
                                          <option selected value="0"> false</option>
                                          <?php else: ?> 
                                          <option  value="1"> true</option>
                                          <option value="0"> false</option>
                                          <?php endif; ?>
                                        </select>
                                      </div>
                                      
                                      <div class="mb-3">
                                        <label  class="form-label"> Most Read Section</label>
                                        <select required name="most_read" class="form-control">
                                          <?php if($setting->most_read == true): ?>
                                          <option selected value="1"> true</option>
                                          <option value="0"> false</option>
                                          <?php elseif($setting->most_read == false): ?>
                                          <option  value="1"> true</option>
                                          <option selected value="0"> false</option>
                                          <?php else: ?> 
                                          <option  value="1"> true</option>
                                          <option value="0"> false</option>
                                          <?php endif; ?>
                                        </select>
                                      </div>
                                       <div class="mb-3">
                                        <label  class="form-label"> Newsletter Section</label>
                                        <select required name="newsletter" class="form-control">
                                          <?php if($setting->newsletter == true): ?>
                                          <option selected value="1"> true</option>
                                          <option value="0"> false</option>
                                          <?php elseif($setting->newsletter == false): ?>
                                          <option  value="1"> true</option>
                                          <option selected value="0"> false</option>
                                          <?php else: ?> 
                                          <option  value="1"> true</option>
                                          <option value="0"> false</option>
                                          <?php endif; ?>
                                        </select>
                                      </div>
                                

                                   
                                    
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
                                <input name="twitter" value="<?php echo e($setting?->twitter); ?>" placeholder="twitter" type="text"  class="form-control ps-2" >
                              </div>
                            </div>
                            <div class="mb-3">
                              <div class="input-group">
                                <span class="input-group-text px-6" id="basic-addon1">
                                  <i class="ti ti-link fs-6"></i>
                                </span>
                                <input name="linkedin" value="<?php echo e($setting?->linkedin); ?>"  type="text" class="form-control ps-2" placeholder="linkedin">
                              </div>
                            </div>
                             <div class="mb-3">
                              <div class="input-group">
                                <span class="input-group-text px-6" id="basic-addon1">
                                  <i class="ti ti-link fs-6"></i>
                                </span>
                                <input name="facebook" value="<?php echo e($setting?->facebook); ?>"  type="text" class="form-control ps-2" placeholder="facebook">
                              </div>
                            </div>
                            <div class="mb-3">
                              <div class="input-group">
                                <span class="input-group-text px-6" id="basic-addon1">
                                  <i class="ti ti-link fs-6"></i>
                                </span>
                                <input name="instagram" value="<?php echo e($setting?->instagram); ?>"  type="text" class="form-control ps-2" placeholder="instagram">
                              </div>
                            </div>
                            <div class="mb-3">
                              <div class="input-group">
                                <span class="input-group-text px-6" id="basic-addon1">
                                  <i class="ti ti-link fs-6"></i>
                                </span>
                                <input name="youtube" value="<?php echo e($setting?->youtube); ?>"  type="text" class="form-control ps-2" placeholder="youtube">
                              </div>
                            </div>
                            <div class="mb-3">
                              <div class="input-group">
                                <span class="input-group-text px-6" id="basic-addon1">
                                  <i class="ti ti-link fs-6"></i>
                                </span>
                                <input name="tiktok" value="<?php echo e($setting?->tiktok); ?>"  type="text" class="form-control ps-2" placeholder="tiktok">
                              </div>
                            </div>
                            <div class="mb-3">
                              <div class="input-group">
                                <span class="input-group-text px-6" id="basic-addon1">
                                  <i class="ti ti-link fs-6"></i>
                                </span>
                                <input name="discord" value="<?php echo e($setting?->discord); ?>"  type="text" class="form-control ps-2" placeholder="discord">
                              </div>
                            </div>
                            <div class="mb-3">
                              <div class="input-group">
                                <span class="input-group-text px-6" id="basic-addon1">
                                  <i class="ti ti-link fs-6"></i>
                                </span>
                                <input name="telegram" value="<?php echo e($setting?->telegram); ?>"  type="text" class="form-control ps-2" placeholder="telegram">
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
                                <input name="google" value="<?php echo e($setting?->google); ?>"  type="text" class="form-control ps-2" placeholder="google store">
                              </div>
                            </div>
                            <div class="mb-3">
                              <div class="input-group">
                                <span class="input-group-text px-6" id="basic-addon1">
                                  <i class="ti ti-link fs-6"></i>
                                </span>
                                <input name="apple" value="<?php echo e($setting?->apple); ?>"  type="text" class="form-control ps-2" placeholder="apple store">
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
                        <textarea name="terms" value=""  type="text" class="form-control" id="exampleInputtext1" placeholder=""><?php echo e($setting?->terms); ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                      
                </div>
                <div class="tab-pane p-3" id="item8" role="tabpanel">
                    <h6>Privacy</h6>
                    <div class="mb-3 mt-2">
                        <textarea name="privacy" value=""  type="text" class="form-control" id="exampleInputtext1" placeholder=""><?php echo e($setting?->privacy); ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                       
                </div>
                 <div class="tab-pane p-3" id="item9" role="tabpanel">
                    <h6>Do Not Sell</h6>
                    <div class="mb-3 mt-2">
                        <textarea name="do_not_sell" value=""  type="text" class="form-control" id="exampleInputtext1" placeholder=""><?php echo e($setting?->do_not_sell); ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                       
                </div>
                 <div class="tab-pane p-3" id="item10" role="tabpanel">
                    <h6>Sitemap</h6>
                    <div class="mb-3 mt-2">
                        <textarea name="sitemap" value=""  type="text" class="form-control" id="exampleInputtext1" placeholder=""><?php echo e($setting?->sitemap); ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                       
                </div>
                 <div class="tab-pane p-3" id="item11" role="tabpanel">
                    <h6>Ethics</h6>
                    <div class="mb-3 mt-2">
                        <textarea name="ethics" value=""  type="text" class="form-control" id="exampleInputtext1" placeholder=""><?php echo e($setting?->ethics); ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                       
                </div>
                <div class="tab-pane p-3" id="item12" role="tabpanel">
                    <h6>Accessibility</h6>
                    <div class="mb-3 mt-2">
                        <textarea name="accessibility" value=""  type="text" class="form-control" id="exampleInputtext1" placeholder=""><?php echo e($setting?->accessibility); ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                       
                </div>
            </div>
        </div>

        </div>

 <!-- Place the first <script> tag in your HTML's <head> -->
<script src="https://cdn.tiny.cloud/1/10y2nmlx6sys1h3mbly92p71sfnrb089h0bxuesa03ycudht/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

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
</div>
 <?php /**PATH C:\xampp\htdocs\CoinCrypto\resources\views/livewire/admin/app-setting-component.blade.php ENDPATH**/ ?>