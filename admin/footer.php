
<!-- Footer Start -->
<footer class="footer" style = 'background-color: #141627;'>
    <div class="container-fluid" style = 'background-color: #141627;'>
        <div class="row">
            <div class="col-md-6">
                <script>document.write(new Date().getFullYear())</script> &copy; <?= self::$APP.' ';  echo getenv("Version");?> by <a href="https://www.linkedin.com/in/frankgalos/">Nehemia Mwansasu</a>
            </div>
            <div class="col-md-6">
                <div class="text-md-end footer-links d-none d-sm-block">
                    <a href="https://owesis.com/about">About Us</a>
                    <a href="mailto:frankgalos@hotmail.com">Help</a>
                    <a href="https://owesis.com/contact">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end Footer -->

</div>

</div>
<!-- END wrapper -->

<!-- Right Sidebar -->
<div class="right-bar" style = 'background-color: #141627;'>

    <div data-simplebar class="w-100 h-100"style = 'background-color: #141627;' >

        <div class="rightbar-title">
            <a href="javascript:void(0);" class="right-bar-toggle float-end">
                <i class="mdi mdi-close"></i>
            </a>
            <h4 class="font-16 m-0 text-white">Customize</h4>
        </div>

        <!-- Tab panes -->
        <div class="tab-content pt-0">

            <div class="tab-pane active" id="settings-tab" role="tabpanel">

                <div class="p-3">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, Layout, etc.
                    </div>

                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Color Scheme</h6>
              <div class="col-xl-6 ">
                    <div class="card">
                        <div class="card-body widget-user">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 avatar-lg me-3">
                                    <img src="../public/assets/images/user.png" class="img-fluid rounded-circle" alt="user">
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <h5 class="mt-0 mb-1">Chadengle</h5>
                                    <p class="text-muted mb-2 font-13 text-truncate">employee@gmail.com</p>
                                    <small class="text-warning"><b>Admin</b></small>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- end col -->


                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="layout-color" value="light"
                               id="light-mode-check" checked />
                        <label class="form-check-label" for="light-mode-check">Light Mode</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="layout-color" value="dark"
                               id="dark-mode-check" />
                        <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                    </div>

                    <!-- Width -->
                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Width</h6>
                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="layout-size" value="fluid" id="fluid" checked />
                        <label class="form-check-label" for="fluid-check">Fluid</label>
                    </div>
                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="layout-size" value="boxed" id="boxed" />
                        <label class="form-check-label" for="boxed-check">Boxed</label>
                    </div>

                    <!-- Menu positions -->
                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Menus (Leftsidebar and Topbar) Positon</h6>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="leftbar-position" value="fixed" id="fixed-check"
                               checked />
                        <label class="form-check-label" for="fixed-check">Fixed</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="leftbar-position" value="scrollable"
                               id="scrollable-check" />
                        <label class="form-check-label" for="scrollable-check">Scrollable</label>
                    </div>

                    <!-- Left Sidebar-->
                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Color</h6>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="leftbar-color" value="light" id="light" />
                        <label class="form-check-label" for="light-check">Light</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="leftbar-color" value="dark" id="dark" checked/>
                        <label class="form-check-label" for="dark-check">Dark</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="leftbar-color" value="brand" id="brand" />
                        <label class="form-check-label" for="brand-check">Brand</label>
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input" name="leftbar-color" value="gradient" id="gradient" />
                        <label class="form-check-label" for="gradient-check">Gradient</label>
                    </div>

                    <!-- size -->
                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Size</h6>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="leftbar-size" value="default"
                               id="default-size-check" checked />
                        <label class="form-check-label" for="default-size-check">Default</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="leftbar-size" value="condensed"
                               id="condensed-check" />
                        <label class="form-check-label" for="condensed-check">Condensed <small>(Extra Small size)</small></label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="leftbar-size" value="compact"
                               id="compact-check" />
                        <label class="form-check-label" for="compact-check">Compact <small>(Small size)</small></label>
                    </div>

                    <!-- User info -->
                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Sidebar User Info</h6>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="sidebar-user" value="true" id="sidebaruser-check" />
                        <label class="form-check-label" for="sidebaruser-check">Enable</label>
                    </div>


                    <!-- Topbar -->
                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Topbar</h6>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="topbar-color" value="dark" id="darktopbar-check"
                               checked />
                        <label class="form-check-label" for="darktopbar-check">Dark</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input type="checkbox" class="form-check-input" name="topbar-color" value="light" id="lighttopbar-check" />
                        <label class="form-check-label" for="lighttopbar-check">Light</label>
                    </div>

                </div>

            </div>
        </div>

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

  

<!-- Vendor -->
<script src="<?=Util::staticUrl()?>assets/libs/jquery/jquery.min.js"></script>
<script src="<?=Util::staticUrl()?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?=Util::staticUrl()?>assets/libs/simplebar/simplebar.min.js"></script>
<script src="<?=Util::staticUrl()?>assets/libs/node-waves/waves.min.js"></script>
<script src="<?=Util::staticUrl()?>assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="<?=Util::staticUrl()?>assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
<script src="<?=Util::staticUrl()?>assets/libs/feather-icons/feather.min.js"></script>

<!-- knob plugin -->
<script src="<?=Util::staticUrl()?>assets/libs/jquery-knob/jquery.knob.min.js"></script>

<!-- Plugins js -->
<script src="<?=Util::staticUrl()?>assets/libs/quill/quill.min.js"></script>

<!-- Init js-->
<!--<script src="--><?//=Util::staticUrl()?><!--assets/js/pages/form-quilljs.init.js"></script>-->
<?php if($this->route == "Home"){?>

<!--Morris Chart-->
<script src="<?=Util::staticUrl()?>assets/libs/morris.js06/morris.min.js"></script>
<script src="<?=Util::staticUrl()?>assets/libs/raphael/raphael.min.js"></script>


<!-- third party js -->
<script src="<?=Util::staticUrl()?>assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=Util::staticUrl()?>assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<!-- third party js ends -->

<!-- Datatables init -->
<script src="<?=Util::staticUrl()?>assets/js/pages/datatables.init.js"></script>


    <!-- Dashboar init js-->
    <script src="<?=Util::staticUrl()?>assets/js/pages/dashboard.init.js"></script>

<?php }?>


<script src="<?=Util::staticUrl()?>assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=Util::staticUrl()?>assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="<?=Util::staticUrl()?>assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="<?=Util::staticUrl()?>assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
<script src="<?=Util::staticUrl()?>assets/js/pages/datatables.init.js"></script>

<script src="<?=Util::staticUrl()?>assets/libs/dropify/js/dropify.min.js"></script>
<!-- Plugins js -->
<script src="<?=Util::staticUrl()?>assets/libs/dropzone/min/dropzone.min.js"></script>

<!-- Init js-->
<script src="<?=Util::staticUrl()?>assets/js/pages/form-fileuploads.init.js"></script>

<script src="<?=Util::staticUrl()?>assets/libs/selectize/js/standalone/selectize.min.js"></script>

<!-- App js-->
<script src="<?=Util::staticUrl()?>assets/js/app.js"></script>
<!--<script src="--><?//=Util::Url()?><!--assets/js/app.min.js"></script>-->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
<script type="text/javascript">
  var  typed = new Typed('.auto-type',{
    strings: ["Ads","customer","Company"],
    typeSpeed:150,
    backSpeed:150,
    loop:true
  }); 
</script>

<script>
    // Initialize carousel
    const carousel = new bootstrap.Carousel(document.getElementById('productCarousel'));

    // Size selection functionality
    document.querySelectorAll('.size-option').forEach((option, index) => {
        option.addEventListener('click', function() {
            // Remove active class from all sizes
            document.querySelectorAll('.size-option').forEach(opt => opt.classList.remove('active'));
            // Add active class to clicked size
            this.classList.add('active');
            // Slide to corresponding image
            carousel.to(index);
        });
    });

    // Update size selection when carousel slides
    carousel._element.addEventListener('slid.bs.carousel', event => {
        const activeIndex = event.to;
        document.querySelectorAll('.size-option').forEach((option, index) => {
            option.classList.toggle('active', index === activeIndex);
        });
    });
</script>


</body>
</html>