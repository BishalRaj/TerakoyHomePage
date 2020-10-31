<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo admin_url(); ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Terakoya</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item<?php echo (current_url() == base_url('admin')) ? ' active' : ''; ?>">
        <a class="nav-link" href="<?php echo admin_url(); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Heading -->

    <!-- Nav Item - Pages Collapse Menu -->


    <li class="nav-item">
        <a class="nav-link<?php echo (current_url() == admin_url('site')) ? ' active' : ' collapsed'; ?>" href="#"
            data-toggle="collapse" data-target="#collapseSite" aria-expanded="true" aria-controls="collapseSite">
            <i class="fas fa-book-reader"></i>
            <span>Site</span>
        </a>
        <div id="collapseSite"
            class="collapse<?php echo (strpos('a' . current_url(), admin_url('site'))) ? ' show' : ''; ?>"
            aria-labelledby="headingSite" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item<?php echo (current_url() == admin_url('site')) ? ' active' : ''; ?>"
                    href="<?php echo admin_url('site'); ?>">List Site</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link<?php echo (current_url() == admin_url('gallery')) ? ' active' : ' collapsed'; ?>" href="#"
            data-toggle="collapse" data-target="#collapseGallery" aria-expanded="true" aria-controls="collapseGallery">
            <i class="fas fa-book-reader"></i>
            <span>Gallery</span>
        </a>
        <div id="collapseGallery"
            class="collapse<?php echo (strpos('a' . current_url(), admin_url('gallery'))) ? ' show' : ''; ?>"
            aria-labelledby="headingGallery" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item<?php echo (current_url() == admin_url('gallery/add')) ? ' active' : ''; ?>"
                    href="<?php echo admin_url('gallery/add'); ?>">Add Gallery</a>
                <a class="collapse-item<?php echo (current_url() == admin_url('gallery')) ? ' active' : ''; ?>"
                    href="<?php echo admin_url('gallery'); ?>">List Gallery</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link<?php echo (current_url() == admin_url('products')) ? ' active' : ' collapsed'; ?>" href="#"
            data-toggle="collapse" data-target="#collapseProducts" aria-expanded="true"
            aria-controls="collapseProducts">
            <i class="fas fa-book-reader"></i>
            <span>Blogs</span>
        </a>
        <div id="collapseProducts"
            class="collapse<?php echo (strpos('a' . current_url(), admin_url('blogs'))) ? ' show' : ''; ?>"
            aria-labelledby="headingProducts" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item<?php echo (current_url() == admin_url('blogs/add')) ? ' active' : ''; ?>"
                    href="<?php echo admin_url('blogs/add'); ?>">Add Blog</a>
                <a class="collapse-item<?php echo (current_url() == admin_url('blogs')) ? ' active' : ''; ?>"
                    href="<?php echo admin_url('blogs'); ?>">List Blogs</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link<?php echo (current_url() == admin_url('team')) ? ' active' : ' collapsed'; ?>" href="#"
            data-toggle="collapse" data-target="#collapseTeam" aria-expanded="true" aria-controls="collapseTeam">
            <i class="fas fa-book-reader"></i>
            <span>Teams</span>
        </a>
        <div id="collapseTeam"
            class="collapse<?php echo (strpos('a' . current_url(), admin_url('team'))) ? ' show' : ''; ?>"
            aria-labelledby="headingTeam" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item<?php echo (current_url() == admin_url('team/add')) ? ' active' : ''; ?>"
                    href="<?php echo admin_url('team/add'); ?>">Add Team</a>
                <a class="collapse-item<?php echo (current_url() == admin_url('team')) ? ' active' : ''; ?>"
                    href="<?php echo admin_url('team'); ?>">List Teams</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link<?php echo (current_url() == admin_url('testimonial')) ? ' active' : ' collapsed'; ?>"
            href="#" data-toggle="collapse" data-target="#collapseTestimonial" aria-expanded="true"
            aria-controls="collapseTestimonial">
            <i class="fas fa-book-reader"></i>
            <span>Testimonials</span>
        </a>
        <div id="collapseTestimonial"
            class="collapse<?php echo (strpos('a' . current_url(), admin_url('testimonial'))) ? ' show' : ''; ?>"
            aria-labelledby="headingTestimonial" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item<?php echo (current_url() == admin_url('testimonial/add')) ? ' active' : ''; ?>"
                    href="<?php echo admin_url('testimonial/add'); ?>">Add Testimonial</a>
                <a class="collapse-item<?php echo (current_url() == admin_url('testimonial')) ? ' active' : ''; ?>"
                    href="<?php echo admin_url('testimonial'); ?>">List Testimonial</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link<?php echo (current_url() == admin_url('contact')) ? ' active' : ' collapsed'; ?>" href="#"
            data-toggle="collapse" data-target="#collapseContact" aria-expanded="true" aria-controls="collapseContact">
            <i class="fas fa-book-reader"></i>
            <span>Contacts</span>
        </a>
        <div id="collapseContact"
            class="collapse<?php echo (strpos('a' . current_url(), admin_url('contact'))) ? ' show' : ''; ?>"
            aria-labelledby="headingContact" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item<?php echo (current_url() == admin_url('contact')) ? ' active' : ''; ?>"
                    href="<?php echo admin_url('contact'); ?>">List Contact</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link<?php echo (current_url() == admin_url('career')) ? ' active' : ' collapsed'; ?>" href="#"
            data-toggle="collapse" data-target="#collapseCareer" aria-expanded="true" aria-controls="collapseCareer">
            <i class="fas fa-book-reader"></i>
            <span>Careers</span>
        </a>
        <div id="collapseCareer"
            class="collapse<?php echo (strpos('a' . current_url(), admin_url('career'))) ? ' show' : ''; ?>"
            aria-labelledby="headingCareer" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item<?php echo (current_url() == admin_url('career')) ? ' active' : ''; ?>"
                    href="<?php echo admin_url('career'); ?>">List Career</a>
            </div>
        </div>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Extras
    </div>

    <!-- Nav Item - Pages Collapse Menu -->




    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->