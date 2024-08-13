

<div class="d-xl-flex">
     
     <!-- Right -->
     <div class="flex-grow-1 align-items-center position-relative">
      
       <!-- Main -->
       <main class="dashboard-main min-vh-100">
         <div class="d-flex flex-column gap-4">
           <!-- Page Header -->
           <div class="d-flex gap-4 flex-column flex-md-row align-items-md-center justify-content-between">
             <div>
               <h3 class="text-24 fw-bold text-dark-300 mb-2">Projects</h3>
               
             </div>
             <div>
               <a href="<?=base_url('add-project')?>" class="w-btn-secondary-lg">
                 Create a New Project</a>
             </div>
           </div>
           
           <!-- Content -->
           <div>
             <!-- Table -->
             <div class="overflow-x-auto">
               <div class="w-100">
                 <table class="w-100 dashboard-table">
                   <thead class="pb-3">
                     <tr>
                       <th scope="col" class="ps-4">Project Name</th>
                       <th scope="col">Budget</th>
                       <th scope="col">Duration Time</th>
                       <th scope="col" class="text-start">Dimensions</th>
                       <th scope="col" class="text-start">Action</th>
                     </tr>
                   </thead>
                   <tbody>
                    <?php
                    foreach($projects as $project){
                    ?>
                     <tr>
                       <td>
                         <div class="d-flex gap-3 align-items-center project-name">
                           <div class="order-img">
                             <img src="assets/img/projects/<?=$project['images']?>" alt="">
                           </div>
                           <div>
                             <a href="service-details.html" class="project-link">
                             <?=$project['project_title']?>
                             </a>
                             <ul class="d-flex gap-1 order-category">
                               <li class="text-dark-200"><?=$project['location']?></li>
                               <li class="text-dark-200">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="5" height="10" viewBox="0 0 5 10" fill="none">
                                   <path d="M1 9L4 5L1 1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                 </svg>
                               </li>
                               <li class="text-dark-200">Creative</li>
                             </ul>
                           </div>
                         </div>
                       </td>
                       <td class="text-dark-200"><?=$project['customer_budget']?></td>
                       <td class="text-dark-200"><?=$project['time_duration']?></td>
                       <td class="text-start">
                       <?=$project['area_length']?>x<?=$project['area_breadth']?>
                       </td>
                       <td class="text-start">
                        <a href="<?=base_url('edit-project/')?><?=$project['id']?>"
                       <button class="dashboard-action-btn">
                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 10V15.4C19 17.3882 17.3882 19 15.4 19H4.6C2.61177 19 1 17.3882 1 15.4V4.6C1 2.61177 2.61177 1 4.6 1H10M13.3177 2.82047C13.3177 2.82047 13.3177 4.10774 14.605 5.39501C15.8923 6.68228 17.1795 6.68228 17.1795 6.68228M7.43921 13.5906L10.1425 13.2044C10.5324 13.1487 10.8938 12.968 11.1723 12.6895L18.4668 5.39501C19.1777 4.68407 19.1777 3.53141 18.4668 2.82047L17.1795 1.5332C16.4686 0.822266 15.3159 0.822265 14.605 1.5332L7.31048 8.82772C7.03195 9.10624 6.85128 9.4676 6.79557 9.85753L6.40939 12.5608C6.32357 13.1615 6.83848 13.6764 7.43921 13.5906Z" stroke="#5B5B5B" stroke-width="1.5" stroke-linecap="round"></path>
                              </svg>
                            </button></a>
                       </td>
                     </tr>
                     <?php
                    }
                    ?>
                    
                   </tbody>
                 </table>
               </div>
             </div>
           </div>
         </div>
       </main>
     </div>
   </div>

   <!-- Logout Modal -->
   <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
       <div class="modal-content">
         <div class="modal-body">
           <div class="d-flex flex-column align-items-center rounded-3 p-5 mx-auto">
             <span class="mb-30">
               <svg xmlns="http://www.w3.org/2000/svg" width="136" height="136" viewBox="0 0 136 136" fill="none">
                 <circle cx="68" cy="68" r="68" fill="#FF3838"></circle>
                 <path d="M69.8829 35.7891C71.1574 36.0357 72.4554 36.1967 73.7029 36.5423C81.5433 38.7098 87.2691 45.5378 87.956 53.6156C88.5098 60.1147 86.3061 65.6006 81.5029 70.0195C79.8344 71.5545 78.0482 72.9604 76.3394 74.4534C76.1256 74.6397 75.9639 75.0037 75.9589 75.2872C75.9269 77.2752 75.9421 79.2649 75.9421 81.2965C70.888 81.2965 65.8743 81.2965 60.79 81.2965C60.79 81.0616 60.79 80.8385 60.79 80.6137C60.79 76.5454 60.7984 72.4772 60.7782 68.4106C60.7765 67.9392 60.9297 67.649 61.2816 67.3537C64.5628 64.5957 67.8256 61.8175 71.1018 59.0545C72.2601 58.0781 72.9201 56.8702 72.9066 55.3419C72.8864 52.916 70.8594 50.9146 68.4216 50.8911C65.9686 50.8693 63.913 52.8053 63.8305 55.2328C63.8069 55.8988 63.8271 56.5665 63.8271 57.2695C58.7731 57.2695 53.7729 57.2695 48.6902 57.2695C48.6902 56.3149 48.6448 55.3385 48.697 54.3655C49.2205 44.699 56.7427 36.8745 66.4316 35.8914C66.5747 35.8763 66.7128 35.8243 66.8525 35.7891C67.8626 35.7891 68.8728 35.7891 69.8829 35.7891Z" fill="white"></path>
                 <path d="M67.485 100.209C66.1617 99.9258 64.9041 99.5081 63.803 98.6777C61.3804 96.8474 60.2877 93.7689 61.0386 90.7878C61.7726 87.8737 64.2138 85.6693 67.2089 85.2147C71.273 84.599 75.2024 87.3671 75.8135 91.276C76.4937 95.6143 73.8202 99.3773 69.544 100.102C69.4429 100.119 69.3487 100.171 69.2527 100.208C68.6635 100.209 68.0742 100.209 67.485 100.209Z" fill="white"></path>
               </svg>
             </span>
             <h4 class="text-18 fw-normal text-center mb-2">
               Are you sure you want to Logout
             </h4>
             <p class="text-dark-300">Workzone.</p>
             <div class="d-flex gap-3 mt-30">
               <button class="w-btn-secondary-lg" data-bs-dismiss="modal" aria-label="Close">
                 Yes Logout
               </button>
               <button class="text-decoration-underline text-danger" data-bs-dismiss="modal" aria-label="Close">
                 Cancel
               </button>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>

