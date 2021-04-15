<section>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center topbar">
        <span class="mr-3">
            <span class="navbar-text text-white mx-3 font-weight-bold d-sm-none d-lg-inline-block">
                <i class="fa fa-phone"></i> <?=get_settings('phone')?>
            </span>
            <span class="navbar-text text-white mx-3 font-weight-bold d-sm-none d-lg-inline-block">
                <i class="far fa-envelope"></i> <?=get_settings('system_email')?>
            </span>
            <span class="navbar-text text-white mx-3 font-weight-bold d-sm-none d-lg-inline-block">
                <i class="far fa-clock"></i> <?=get_settings('support_time')?>
            </span>
            <span class="navbar-text mx-3">
                <a class="navbar-text text-white mr-2" href="<?=get_settings('facebook_link')?>"><i class="fab fa-facebook"></i></a>
                <a class="navbar-text text-white mr-2" href="<?=get_settings('linkedin_link')?>"><i class="fab fa-linkedin"></i></a>
                <a class="navbar-text text-white mr-2" href="<?=get_settings('instagram_link')?>"><i class="fab fa-instagram"></i></a>
                <a class="navbar-text text-white mr-2" href="<?=get_settings('youtube_link')?>"><i class="fab fa-youtube"></i></a>
                <a class="navbar-text text-white mr-2" href="<?=get_settings('twitter_link')?>"><i class="fab fa-twitter"></i></a>
                <a class="navbar-text text-white mr-2" href="<?=get_settings('whatsapp_link')?>"><i class="fab fa-whatsapp"></i></a>
            </span>
        </span>
    </nav>
</section>