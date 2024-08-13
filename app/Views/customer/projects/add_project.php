<!-- Main -->
<main class="dashboard-main min-vh-100 ">
  <div class="d-flex flex-column gap-4 pb-110 container">
    <!-- Page Header -->
    <div>
      <h3 class="text-24 fw-bold text-dark-300 mb-2">Add Project</h3>

    </div>
    <!-- Content -->
    <?php if(session()->has('validation_errors')): ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach(session('validation_errors') as $error): ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach ?>
            </ul>
        </div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('message')): ?>
      <div class="alert alert-success">
        <p><?= session()->getFlashdata('message') ?></p>
      </div>
    <?php endif; ?>
    <div>
      <div class="row justify-content-center">
        <div class="col-xl-12">
          <form name="add_project" method="post" action="<?=base_url("add-project")?>" enctype="multipart/form-data">
            <?= csrf_field() ?>
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
                        <input type="text" name="project_title" id="title" class="form-control shadow-none"
                          placeholder="Title name here">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-container">
                        <label for="author" class="form-label">Area Length
                          <span class="text-lime-300">*</span></label>
                        <input type="number" id="area_length" name="area_length" class="form-control shadow-none"
                          placeholder="Length">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-container">
                        <label for="author" class="form-label">Area Breadth
                          <span class="text-lime-300">*</span></label>
                        <input type="number" id="area_breadth" name="area_breadth" class="form-control shadow-none"
                          placeholder="Breadth">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-container">
                        <label for="jobDuration" class="form-label">
                          Floors<span class="text-lime-300">*</span>
                        </label>
                        <select id="floors" name="floors" autocomplete="off" class="form-select shadow-none">
                          <option>Select</option>
                          <option value="1">01</option>
                          <option value="2">02</option>
                          <option value="3">03</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-container">
                        <label for="jobType" class="form-label">Material Type</label>
                        <select id="material_type" name="material_type" autocomplete="off"
                          class="form-select shadow-none">
                          <option>Select</option>
                          <option value="Own">Own</option>
                          <option value="Contractors">Contractors</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-container">
                        <label for="budget" class="form-label">Estimated Budget</label>
                        <input id="estimated_budget" name="estimated_budget" type="decimal"
                          class="form-control shadow-none" placeholder="Estimated Budget">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-container">
                        <label for="location" class="form-label">Your Budget
                          <span class="text-lime-300">*</span></label>
                        <input id="budget" name="budget" type="number" step="0.01" min="0" class="form-control shadow-none"
                          placeholder="Your Budget">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-container">
                        <label for="budget" class="form-label">Time Duration</label>
                        <input id="duration" name="duration" type="text" class="form-control shadow-none"
                          placeholder="Time Duration">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-container">
                        <label for="location" class="form-label">Location
                          <span class="text-lime-300">*</span></label>
                        <input id="location" name="location" type="text" class="form-control shadow-none"
                          placeholder="Location here">
                      </div>
                    </div>
                    <div class="col-12">
                      <label for="description" class="form-label">Notes</label>
                      <div class="w-editor-wrapper">
                        <div id="toolbar"></div>
                        <div id="editor" class="ql-container ql-snow" name="notes">
                          <div class="ql-editor ql-blank" data-gramm="false" contenteditable="true">
                            <p><br></p>
                          </div>
                          <div class="ql-clipboard" contenteditable="true" tabindex="-1"></div>
                          <div class="ql-tooltip ql-hidden"><a class="ql-preview" target="_blank"
                              href="about:blank"></a><input type="text" data-formula="e=mc^2"
                              data-link="https://quilljs.com" data-video="Embed URL"><a class="ql-action"></a><a
                              class="ql-remove"></a></div>
                        </div>
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
                   
                  </div>
                </div>
              </div>

              <!-- Submit Btn -->
              <div>
                <button type="submit" class="w-btn-secondary-lg">
                  Add Project
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="10" viewBox="0 0 14 10" fill="none">
                    <path d="M9 9L13 5M13 5L9 1M13 5L1 5" stroke="white" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round"></path>
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