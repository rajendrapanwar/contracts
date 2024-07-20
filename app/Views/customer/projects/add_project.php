
        <!-- Main -->
        <main class="dashboard-main min-vh-100 ">
          <div class="d-flex flex-column gap-4 pb-110 container">
            <!-- Page Header -->
            <div>
              <h3 class="text-24 fw-bold text-dark-300 mb-2">Add Project</h3>
              
            </div>
            <!-- Content -->
            <div >
              <div class="row justify-content-center">
                <div class="col-xl-12">
                  <form>
                    <div class="d-flex flex-column gap-4">
                      <!-- Project Info -->
                      <div class="gig-info-card">
                        <!-- Header -->
                        <div class="gig-info-header">
                          <h4 class="text-18 fw-semibold text-dark-300">
                            Project Info
                          </h4>
                        </div>
                        <div class="gig-info-body bg-white">
                          <div class="row g-4">
                            <div class="col-12">
                              <div class="form-container">
                                <label for="title" class="form-label">Project Title
                                  <span class="text-lime-300">*</span></label>
                                <input type="text" name="title" id="title" class="form-control shadow-none" placeholder="Title name here">
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="form-container">
                                <label for="author" class="form-label">Area Length
                                  <span class="text-lime-300">*</span></label>
                                <input type="text" id="area_length" name="area_length" class="form-control shadow-none" placeholder="Length">
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="form-container">
                              <label for="author" class="form-label">Area Breadth
                              <span class="text-lime-300">*</span></label>
                                <input type="text" id="area_breadth" nane="area_breadth" class="form-control shadow-none" placeholder="Breadth">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-container">
                                <label for="jobDuration" class="form-label">
                                  Floors<span class="text-lime-300">*</span>
                                </label>
                                <select id="floors" name="floors" autocomplete="off" class="form-select shadow-none">
                                  <option >Select</option>
                                  <option value="1">01</option>
                                  <option value="2">02</option>
                                  <option value="3">03</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-container">
                                <label for="jobType" class="form-label">Material Type</label>
                                <select id="material_type" name="material_type" autocomplete="off" class="form-select shadow-none">
                                  <option >Select</option>
                                  <option value="Own">Own</option>
                                  <option value="Contractors">Contractors</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="form-container">
                                <label for="budget" class="form-label">Estimated Budget</label>
                                <input id="estimated_budget" name="estimated_budget" type="text" class="form-control shadow-none" placeholder="Estimated Budget">
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="form-container">
                                <label for="location" class="form-label">Your Budget
                                  <span class="text-lime-300">*</span></label>
                                <input id="budget" name="budget" type="text" class="form-control shadow-none" placeholder="Your Budget">
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="form-container">
                                <label for="budget" class="form-label">Time Duration</label>
                                <input id="duration" name="duration" type="text" class="form-control shadow-none" placeholder="Time Duration">
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="form-container">
                                <label for="location" class="form-label">Location
                                  <span class="text-lime-300">*</span></label>
                                <input id="location" name="location" type="text" class="form-control shadow-none" placeholder="Location here">
                              </div>
                            </div>
                            <div class="col-12">
                              <label for="description" class="form-label">Notes</label>
                              <div class="w-editor-wrapper">
                                <div id="toolbar"></div>
                                <div class="ql-toolbar ql-snow"><span class="ql-formats"><span class="ql-header ql-picker"><span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-0"><svg viewBox="0 0 18 18"> <polygon class="ql-stroke" points="7 11 9 13 11 11 7 11"></polygon> <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"></polygon> </svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-0"><span tabindex="0" role="button" class="ql-picker-item" data-value="1"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="2"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="3"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="4"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="5"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="6"></span><span tabindex="0" role="button" class="ql-picker-item ql-selected"></span></span></span><select class="ql-header" style="display: none;"><option value="1"></option><option value="2"></option><option value="3"></option><option value="4"></option><option value="5"></option><option value="6"></option><option selected="selected"></option></select></span><span class="ql-formats"><button type="button" class="ql-bold"><svg viewBox="0 0 18 18"> <path class="ql-stroke" d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z"></path> <path class="ql-stroke" d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z"></path> </svg></button><button type="button" class="ql-italic"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"></line> <line class="ql-stroke" x1="5" x2="11" y1="14" y2="14"></line> <line class="ql-stroke" x1="8" x2="10" y1="14" y2="4"></line> </svg></button><button type="button" class="ql-underline"><svg viewBox="0 0 18 18"> <path class="ql-stroke" d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3"></path> <rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="12" x="3" y="15"></rect> </svg></button><button type="button" class="ql-link"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="7" x2="11" y1="7" y2="11"></line> <path class="ql-even ql-stroke" d="M8.9,4.577a3.476,3.476,0,0,1,.36,4.679A3.476,3.476,0,0,1,4.577,8.9C3.185,7.5,2.035,6.4,4.217,4.217S7.5,3.185,8.9,4.577Z"></path> <path class="ql-even ql-stroke" d="M13.423,9.1a3.476,3.476,0,0,0-4.679-.36,3.476,3.476,0,0,0,.36,4.679c1.392,1.392,2.5,2.542,4.679.36S14.815,10.5,13.423,9.1Z"></path> </svg></button></span><span class="ql-formats"><button type="button" class="ql-list" value="ordered"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="7" x2="15" y1="4" y2="4"></line> <line class="ql-stroke" x1="7" x2="15" y1="9" y2="9"></line> <line class="ql-stroke" x1="7" x2="15" y1="14" y2="14"></line> <line class="ql-stroke ql-thin" x1="2.5" x2="4.5" y1="5.5" y2="5.5"></line> <path class="ql-fill" d="M3.5,6A0.5,0.5,0,0,1,3,5.5V3.085l-0.276.138A0.5,0.5,0,0,1,2.053,3c-0.124-.247-0.023-0.324.224-0.447l1-.5A0.5,0.5,0,0,1,4,2.5v3A0.5,0.5,0,0,1,3.5,6Z"></path> <path class="ql-stroke ql-thin" d="M4.5,10.5h-2c0-.234,1.85-1.076,1.85-2.234A0.959,0.959,0,0,0,2.5,8.156"></path> <path class="ql-stroke ql-thin" d="M2.5,14.846a0.959,0.959,0,0,0,1.85-.109A0.7,0.7,0,0,0,3.75,14a0.688,0.688,0,0,0,.6-0.736,0.959,0.959,0,0,0-1.85-.109"></path> </svg></button><button type="button" class="ql-list" value="bullet"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="6" x2="15" y1="4" y2="4"></line> <line class="ql-stroke" x1="6" x2="15" y1="9" y2="9"></line> <line class="ql-stroke" x1="6" x2="15" y1="14" y2="14"></line> <line class="ql-stroke" x1="3" x2="3" y1="4" y2="4"></line> <line class="ql-stroke" x1="3" x2="3" y1="9" y2="9"></line> <line class="ql-stroke" x1="3" x2="3" y1="14" y2="14"></line> </svg></button></span><span class="ql-formats"><span class="ql-align ql-picker ql-icon-picker"><span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-1"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="3" x2="15" y1="9" y2="9"></line> <line class="ql-stroke" x1="3" x2="13" y1="14" y2="14"></line> <line class="ql-stroke" x1="3" x2="9" y1="4" y2="4"></line> </svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-1"><span tabindex="0" role="button" class="ql-picker-item ql-selected"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="3" x2="15" y1="9" y2="9"></line> <line class="ql-stroke" x1="3" x2="13" y1="14" y2="14"></line> <line class="ql-stroke" x1="3" x2="9" y1="4" y2="4"></line> </svg></span><span tabindex="0" role="button" class="ql-picker-item" data-value="center"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="15" x2="3" y1="9" y2="9"></line> <line class="ql-stroke" x1="14" x2="4" y1="14" y2="14"></line> <line class="ql-stroke" x1="12" x2="6" y1="4" y2="4"></line> </svg></span><span tabindex="0" role="button" class="ql-picker-item" data-value="right"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="15" x2="3" y1="9" y2="9"></line> <line class="ql-stroke" x1="15" x2="5" y1="14" y2="14"></line> <line class="ql-stroke" x1="15" x2="9" y1="4" y2="4"></line> </svg></span><span tabindex="0" role="button" class="ql-picker-item" data-value="justify"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="15" x2="3" y1="9" y2="9"></line> <line class="ql-stroke" x1="15" x2="3" y1="14" y2="14"></line> <line class="ql-stroke" x1="15" x2="3" y1="4" y2="4"></line> </svg></span></span></span><select class="ql-align" style="display: none;"><option selected="selected"></option><option value="center"></option><option value="right"></option><option value="justify"></option></select></span></div><div id="editor" class="ql-container ql-snow"><div class="ql-editor ql-blank" data-gramm="false" contenteditable="true"><p><br></p></div><div class="ql-clipboard" contenteditable="true" tabindex="-1"></div><div class="ql-tooltip ql-hidden"><a class="ql-preview" target="_blank" href="about:blank"></a><input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL"><a class="ql-action"></a><a class="ql-remove"></a></div></div>
                              </div>
                            </div>
                            
                          </div>
                        </div>
                      </div>

                      <!-- Upload  Img -->
                      <div class="gig-info-card">
                        <!-- Header -->
                        <div class="gig-info-header">
                          <h4 class="text-18 fw-semibold text-dark-300">
                            Upload Images
                          </h4>
                        </div>
                        <div class="gig-info-body bg-white">
                          <p class="text-dark-200 mb-2">Location Image</p>
                          <div class="d-flex flex-wrap gap-3">
                            <div>
                              <label for="gig-img" class="border text-center gig-file-upload">
                                <img src="assets/img/dashboard/gigs/gallery-icon.png" alt="">
                                <p class="text-dark-200">Max.Size 10MB</p>
                                <input class="d-none" type="file" name="location_image" id="gig-img">
                              </label>
                            </div>
                            <div class="position-relative gig-media-thumb">
                              <img src="assets/img/dashboard/job/icon-1.png" class="img-fluid" alt="">
                              <button class="gig-img-delete-btn">
                                <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M7.85995 5.03223C7.69026 5.03223 7.55273 5.16976 7.55273 5.33945V11.1459C7.55273 11.3155 7.69026 11.4531 7.85995 11.4531C8.02965 11.4531 8.16718 11.3155 8.16718 11.1459V5.33945C8.16718 5.16976 8.02965 5.03223 7.85995 5.03223Z" fill="white"></path>
                                  <path d="M4.23593 5.03223C4.06624 5.03223 3.92871 5.16976 3.92871 5.33945V11.1459C3.92871 11.3155 4.06624 11.4531 4.23593 11.4531C4.40562 11.4531 4.54315 11.3155 4.54315 11.1459V5.33945C4.54315 5.16976 4.40562 5.03223 4.23593 5.03223Z" fill="white"></path>
                                  <path d="M1.59326 4.18476V11.754C1.59326 12.2014 1.75731 12.6216 2.04389 12.923C2.32915 13.2253 2.72613 13.3969 3.1416 13.3976H8.95431C9.3699 13.3969 9.76688 13.2253 10.052 12.923C10.3386 12.6216 10.5027 12.2014 10.5027 11.754V4.18476C11.0723 4.03355 11.4415 3.48319 11.3653 2.89863C11.2889 2.31419 10.791 1.877 10.2016 1.87688H8.62861V1.49286C8.63041 1.16992 8.50272 0.859816 8.2741 0.631681C8.04549 0.403665 7.73491 0.276697 7.41197 0.279337H4.68394C4.361 0.276697 4.05042 0.403665 3.82181 0.631681C3.59319 0.859816 3.4655 1.16992 3.4673 1.49286V1.87688H1.89436C1.30488 1.877 0.806967 2.31419 0.730642 2.89863C0.654437 3.48319 1.02358 4.03355 1.59326 4.18476ZM8.95431 12.7832H3.1416C2.61633 12.7832 2.2077 12.332 2.2077 11.754V4.21176H9.88821V11.754C9.88821 12.332 9.47958 12.7832 8.95431 12.7832ZM4.08174 1.49286C4.0797 1.33289 4.14259 1.17892 4.25612 1.06599C4.36952 0.953062 4.52385 0.891018 4.68394 0.893778H7.41197C7.57206 0.891018 7.72639 0.953062 7.83979 1.06599C7.95332 1.1788 8.01621 1.33289 8.01416 1.49286V1.87688H4.08174V1.49286ZM1.89436 2.49132H10.2016C10.507 2.49132 10.7545 2.7389 10.7545 3.04432C10.7545 3.34974 10.507 3.59732 10.2016 3.59732H1.89436C1.58894 3.59732 1.34136 3.34974 1.34136 3.04432C1.34136 2.7389 1.58894 2.49132 1.89436 2.49132Z" fill="white"></path>
                                  <path d="M6.04794 5.03223C5.87825 5.03223 5.74072 5.16976 5.74072 5.33945V11.1459C5.74072 11.3155 5.87825 11.4531 6.04794 11.4531C6.21763 11.4531 6.35516 11.3155 6.35516 11.1459V5.33945C6.35516 5.16976 6.21763 5.03223 6.04794 5.03223Z" fill="white"></path>
                                </svg>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Submit Btn -->
                      <div>
                        <button type="submit" class="w-btn-secondary-lg">
                          Add Project
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="10" viewBox="0 0 14 10" fill="none">
                            <path d="M9 9L13 5M13 5L9 1M13 5L1 5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>


