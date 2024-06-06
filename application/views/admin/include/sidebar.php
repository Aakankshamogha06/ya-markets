<nav class="pcoded-navbar  ">
    <?php
	$cur_tab = $this->uri->segment(2) == '' ? 'dashboard' : $this->uri->segment(2);
	?>
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div ">

            <div>
                <div class="main-menu-header">
                    <i class="fa fa-user"></i>
                    <div class="user-details">
                        <span>
                            <?= ucwords($this->session->userdata('name')); ?>
                        </span>
                        <div id="more-details">
                            <?= ucwords($this->session->userdata('role_name')); ?><i
                                class="fa fa-chevron-down m-l-5"></i>
                        </div>
                    </div>
                </div>
                <div class="collapse" id="nav-user-link">
                    <ul class="list-unstyled">
                        <li class="list-group-item"><a href="<?= site_url('admin/auth/logout'); ?>"><i
                                    class="feather icon-log-out m-r-5"></i>Logout</a></li>
                    </ul>
                </div>
            </div>

            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item">
                    <a href="<?= site_url('admin/dashboard'); ?>" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                </li>
                <?php if ($this->session->userdata('role') === '1'): ?>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-users"></i></span><span class="pcoded-mtext">User</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="<?= base_url('admin/users/add'); ?>">Add User</a></li>
                        <li><a href="<?= base_url('admin/users'); ?>">View User</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-users"></i></span><span class="pcoded-mtext">NFP Winner</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="<?= base_url('admin/NFP/add_nfp'); ?>">Add NFP Winner</a></li>
                        <li><a href="<?= base_url('admin/NFP/nfp_view'); ?>">View NFP Winner</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-users"></i></span><span class="pcoded-mtext">Awards</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="<?= base_url('admin/awards/add_awards'); ?>">Add Awards</a></li>
                        <li><a href="<?= base_url('admin/awards/awards_view'); ?>">View Awards</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-users"></i></span><span class="pcoded-mtext">Video Category</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="<?= base_url('admin/Video_Category/add_video_category'); ?>">Add video category</a></li>
                        <li><a href="<?= base_url('admin/Video_Category/video_category_view'); ?>">View video category</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-users"></i></span><span class="pcoded-mtext">Video</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="<?= base_url('admin/Video/add_video'); ?>">Add video</a></li>
                        <li><a href="<?= base_url('admin/Video/video_view'); ?>">View video</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-users"></i></span><span class="pcoded-mtext">Expo</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="<?= base_url('admin/expo/add_expo'); ?>">Add Expo</a></li>
                        <li><a href="<?= base_url('admin/expo/expo_view'); ?>">View Expo</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-users"></i></span><span class="pcoded-mtext">Slider</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="<?= base_url('admin/slider/add_slider'); ?>">Add Slider Image</a></li>
                        <li><a href="<?= base_url('admin/slider/slider_view'); ?>">View Slider Image</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-credit-card"></i></span><span class="pcoded-mtext">Blog</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="<?= base_url('admin/blog/add_blog'); ?>"><span class="pcoded-micon"><i
                                        class="feather icon-plus"></i></span><span class="pcoded-mtext">Add
                                    Blog</span></a></li>
                        <li><a href="<?= base_url('admin/blog/blog_view'); ?>"><span class="pcoded-micon"><i
                                        class="feather icon-eye"></i></span><span class="pcoded-mtext">View
                                    Blog</span></a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-credit-card"></i></span><span class="pcoded-mtext">Seminar</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="<?= base_url('admin/seminar/add_seminar'); ?>"><span class="pcoded-micon"><i
                                        class="feather icon-plus"></i></span><span class="pcoded-mtext">Add
                                    Seminar</span></a></li>
                        <li><a href="<?= base_url('admin/seminar/seminar_view'); ?>"><span class="pcoded-micon"><i
                                        class="feather icon-eye"></i></span><span class="pcoded-mtext">View
                                    Seminar</span></a></li>
                    </ul>
                </li>               
                <li class="nav-item pcoded-hasmenu">
                    <a href="<?= base_url('admin/contact/contact_view'); ?>" class="nav-link "><span
                            class="pcoded-micon"><i class="feather icon-credit-card"></i></span><span
                            class="pcoded-mtext">Contact</span></a>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-credit-card"></i></span><span class="pcoded-mtext">Seo</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="<?= base_url('admin/seo/add_seo'); ?>"><span class="pcoded-micon"><i
                                        class="feather icon-plus"></i></span><span class="pcoded-mtext">Add
                                    Seo</span></a></li>
                        <li><a href="<?= base_url('admin/seo/seo_view'); ?>"><span class="pcoded-micon"><i
                                        class="feather icon-eye"></i></span><span class="pcoded-mtext">View
                                    Seo</span></a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-credit-card"></i></span><span class="pcoded-mtext">Career</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="<?= base_url('admin/Career_Details/add_career_details'); ?>"><span class="pcoded-micon"><i
                                        class="feather icon-plus"></i></span><span class="pcoded-mtext">Add
                                    Career Details</span></a></li>
                        <li><a href="<?= base_url('admin/Career_Details/career_details_view'); ?>"><span class="pcoded-micon"><i
                                        class="feather icon-eye"></i></span><span class="pcoded-mtext">View
                                    Career Details</span></a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-credit-card"></i></span><span class="pcoded-mtext">Webinar</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="<?= base_url('admin/webinar/add_webinar'); ?>"><span class="pcoded-micon"><i
                                        class="feather icon-plus"></i></span><span class="pcoded-mtext">Add
                                    Webinar</span></a></li>
                        <li><a href="<?= base_url('admin/webinar/webinar_view'); ?>"><span class="pcoded-micon"><i
                                        class="feather icon-eye"></i></span><span class="pcoded-mtext">View
                                    Webinar</span></a></li>
                                    
                    </ul>
                </li>   
                
                 <li class="nav-item pcoded-hasmenu">
                    <a href="#" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-credit-card"></i></span><span class="pcoded-mtext">Contest</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="<?= base_url('admin/contest/contest_view'); ?>"><span class="pcoded-micon"><i
                                        class="feather icon-plus"></i></span><span class="pcoded-mtext">view 
                                        Contest</span></a></li>
                        
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-users"></i></span><span class="pcoded-mtext">One To One Session</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="<?= base_url('admin/OnetoOne_Session/add_session'); ?>">Add Session Details</a></li>
                        <li><a href="<?= base_url('admin/OnetoOne_Session/session_data_view'); ?>">View User's Data</a></li>
                    </ul>
                </li>   
                <?php endif; ?>
                <?php if ($this->session->userdata('role') === '4'): ?>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-credit-card"></i></span><span class="pcoded-mtext">Blog</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="<?= base_url('admin/blog/add_blog'); ?>"><span class="pcoded-micon"><i
                                        class="feather icon-plus"></i></span><span class="pcoded-mtext">Add
                                    Blog</span></a></li>
                        <li><a href="<?= base_url('admin/blog/blog_view'); ?>"><span class="pcoded-micon"><i
                                        class="feather icon-eye"></i></span><span class="pcoded-mtext">View
                                    Blog</span></a></li>
                    </ul>
                </li>
                 <li class="nav-item pcoded-hasmenu">
                    <a href="#" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-credit-card"></i></span><span class="pcoded-mtext">Seo</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="<?= base_url('admin/seo/add_seo'); ?>"><span class="pcoded-micon"><i
                                        class="feather icon-plus"></i></span><span class="pcoded-mtext">Add
                                    Seo</span></a></li>
                        <li><a href="<?= base_url('admin/seo/seo_view'); ?>"><span class="pcoded-micon"><i
                                        class="feather icon-eye"></i></span><span class="pcoded-mtext">View
                                    Seo</span></a></li>
                    </ul>
                </li>
                <?php endif; ?>
                <?php if ($this->session->userdata('role') === '3'): ?>
                    <li class="nav-item pcoded-hasmenu">
                    <a href="#" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-credit-card"></i></span><span class="pcoded-mtext">Webinar</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="<?= base_url('admin/webinar/add_webinar'); ?>"><span class="pcoded-micon"><i
                                        class="feather icon-plus"></i></span><span class="pcoded-mtext">Add
                                    Webinar</span></a></li>
                        <li><a href="<?= base_url('admin/webinar/webinar_view'); ?>"><span class="pcoded-micon"><i
                                        class="feather icon-eye"></i></span><span class="pcoded-mtext">View
                                    Webinar</span></a></li>
                                    
                    </ul>
                </li>
                <?php endif; ?>   
            </ul>
        </div>
    </div>
</nav>