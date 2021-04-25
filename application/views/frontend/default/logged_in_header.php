<?php
$user_details = $this->user_model->get_user($this->session->userdata('user_id'))->row_array();
?>
<section class="menu-area">
    <?php include 'top_bar.php'; ?>
    <div class="container-xl  main-menu">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <ul class="mobile-header-buttons">
                        <li><a class="mobile-nav-trigger" href="#mobile-primary-nav"><?=site_phrase('Menu')?><span></span></a></li>
                        <!--<li><a class="mobile-search-trigger" href="#mobile-search"><?=site_phrase('Search')?><span></span></a></li>-->
                    </ul>

                    <a href="<?php echo site_url(''); ?>" class="navbar-brand" href="#">
                        <img src="<?php echo base_url('uploads/system/'.get_frontend_settings('dark_logo')); ?>" alt="" class="main-logo">
                    </a>

                    <?php include 'menu.php'; ?>
                    <?php if (get_settings('allow_instructor') == 1): ?>
                    <!--<div class="instructor-box menu-icon-box">-->
                    <!--    <div class="icon">-->
                    <!--        <a href="<?php echo site_url('user'); ?>"-->
                    <!--            style="border: 1px solid transparent; margin: 10px 10px; width: 100%; border-radius: 0;"><?php echo site_phrase('instructor'); ?></a>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <?php endif; ?>

                    <!--<div class="instructor-box menu-icon-box">-->
                    <!--    <div class="icon">-->
                    <!--        <a href="<?php echo site_url('my-courses'); ?>"-->
                    <!--            style="border: 1px solid transparent; margin: 10px 10px; width: 100%; border-radius: 0; min-width: 100px;"><?php echo site_phrase('my_courses'); ?></a>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <div class="wishlist-box menu-icon-box" id="wishlist_items">
                        <?php include 'wishlist_items.php'; ?>
                    </div>
                    <div class="menu-icon-box">
                        <div class="icon">
                            <a href="#" onclick="openSearch()">
                                <span class="text-dark"><i class="fas fa-search text-dark"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="cart-box menu-icon-box" id="cart_items">
                        <?php include 'cart_items.php'; ?>
                    </div>

                    <?php //include 'notifications.php'; ?>


                    <div class="user-box menu-icon-box ml-2">
                        <div class="icon">
                            <a href="javascript::">
                                <img src="<?php echo $this->user_model->get_user_image_url($this->session->userdata('user_id')); ?>"
                                    alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="dropdown user-dropdown corner-triangle top-right">
                            <ul class="user-dropdown-menu">

                                <li class="dropdown-user-info">
                                    <a href="<?php echo site_url('profile/user-profile'); ?>">
                                        <div class="clearfix">
                                            <div class="user-image float-left">
                                                <img src="<?php echo $this->user_model->get_user_image_url($this->session->userdata('user_id')); ?>"
                                                    alt="">
                                            </div>
                                            <div class="user-details">
                                                <div class="user-name">
                                                    <span class="hi"><?php echo site_phrase('hi'); ?>,</span>
                                                    <?php echo $user_details['first_name'].' '.$user_details['last_name']; ?>
                                                </div>
                                                <div class="user-email">
                                                    <span class="email"><?php echo $user_details['email']; ?></span>
                                                    <span
                                                        class="welcome"><?php echo site_phrase("welcome_back"); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li class="user-dropdown-menu-item"><a
                                        href="<?php echo site_url('my-courses'); ?>"><i
                                            class="far fa-gem"></i><?php echo site_phrase('my_courses'); ?></a></li>
                                <li class="user-dropdown-menu-item"><a
                                        href="<?php echo site_url('my-wishlist'); ?>"><i
                                            class="far fa-heart"></i><?php echo site_phrase('my_wishlist'); ?></a></li>
                                <li class="user-dropdown-menu-item"><a
                                        href="<?php echo site_url('my-messages'); ?>"><i
                                            class="far fa-envelope"></i><?php echo site_phrase('my_messages'); ?></a>
                                </li>
                                <li class="user-dropdown-menu-item"><a
                                        href="<?php echo site_url('purchase-history'); ?>"><i
                                            class="fas fa-shopping-cart"></i><?php echo site_phrase('purchase_history'); ?></a>
                                </li>
                                <li class="user-dropdown-menu-item"><a
                                        href="<?php echo site_url('profile/user-profile'); ?>"><i
                                            class="fas fa-user"></i><?php echo site_phrase('user_profile'); ?></a></li>
                                <li class="dropdown-user-logout user-dropdown-menu-item"><a
                                        href="<?php echo site_url('login/logout/user'); ?>" class="text-white"><?php echo site_phrase('log_out'); ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>



                    <span class="signin-box-move-desktop-helper"></span>
                    <div class="sign-in-box btn-group d-none">

                        <button type="button" class="btn btn-sign-in btn-outline-dark my-2 mr-2 my-sm-0" data-toggle="modal" data-target="#signInModal">Log
                            In</button>

                        <button type="button" class="btn btn-sign-up btn-primary my-2 mr-2 my-sm-0" data-toggle="modal"
                            data-target="#signUpModal">Sign Up</button>

                    </div> <!--  sign-in-box end -->


                </nav>
            </div>
        </div>
    </div>

<div id="myOverlay" class="overlay">
  <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
  <div class="overlay-content">
    <form class="inline-form" action="<?php echo site_url('home/search'); ?>" method="get" style="width: 100%;">
    <div class="input-group mb-3">
        <input type="text" name='query' class="form-control"
            placeholder="<?php echo site_phrase('search_for_courses'); ?>">
        <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
      </div>
    </form>
  </div>
</div>

<script>
function openSearch() {
  document.getElementById("myOverlay").style.display = "block";
}

function closeSearch() {
  document.getElementById("myOverlay").style.display = "none";
}
</script>
</section>