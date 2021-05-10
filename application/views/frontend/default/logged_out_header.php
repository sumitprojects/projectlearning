<section class="menu-area">
    <?php include 'top_bar.php'; ?>

</section>
<section class="menu-area sticky-top">




    <div class="main-menu">

        <div class="row">

            <div class="col">

                <nav class="navbar navbar-expand-lg navbar-light bg-light font-weight-bold">

                    <ul class="mobile-header-buttons">

                        <li><a class="mobile-nav-trigger" href="#mobile-primary-nav"><?=site_phrase('Menu')?><span></span></a></li>

                        <!--<li><a class="mobile-search-trigger" href="#mobile-search"><?=site_phrase('Search')?><span></span></a></li>-->

                    </ul>

                    <a href="<?php echo site_url(''); ?>" class="navbar-brand" href="#"><img

                            src="<?php echo base_url('uploads/system/'.get_frontend_settings('dark_logo')); ?>" alt="" class="main-logo"></a>


                    <?php include 'menu.php'; ?>

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



                    <span class="signin-box-move-desktop-helper"></span>

                    <div class="sign-in-box btn-group">



                        <a href="<?php echo site_url('login'); ?>"

                            class="btn btn-sign-in btn-outline-dark my-2 mr-2 my-sm-0"><?php echo site_phrase('log_in'); ?></a>



                        <a href="<?php echo site_url('sign-up'); ?>"

                            class="btn btn-sign-up btn-primary my-2 mr-2 my-sm-0"><?php echo site_phrase('sign_up'); ?></a>



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
