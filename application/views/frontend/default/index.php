<!DOCTYPE html>

<html lang="en">

<head>



    <?php if ($page_name == 'course_page'):

		$title = $this->crud_model->get_course_by_id($course_id)->row_array()?>

    <title><?php echo $title['title'].' | '.get_settings('system_name'); ?></title>
    <meta property="og:title" content="<?php echo $title['title'].' | '.get_settings('system_name'); ?>">
    <meta name="twitter:card" content="<?php echo $title['title'].' | '.get_settings('system_name'); ?>">
    <meta name="twitter:image:alt" content="<?php echo $title['title'].' | '.get_settings('system_name'); ?>">
    <meta property="og:image" content="<?php echo $this->crud_model->get_course_thumbnail_url($title['id']); ?>">

    <?php else: ?>

    <meta property="og:image" content="<?=base_url()?>/uploads/system/hospitalityconnaisseur_placeholder.jpg">
    <meta name="twitter:card" content="<?php echo ucwords($page_title).' | '.get_settings('system_name'); ?>">
    <meta name="twitter:image:alt" content="<?php echo ucwords($page_title).' | '.get_settings('system_name'); ?>">
    <meta property="og:title" content="<?php echo ucwords($page_title).' | '.get_settings('system_name'); ?>">
    <title><?php echo get_settings('system_name').' | '.ucwords($page_title); ?></title>

    <?php endif; ?>





    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="author" content="<?php echo get_settings('author') ?>" />

    <meta property="og:url" content="<?=current_url()?>">

    <?php



	if(get_frontend_settings('google_site_verification')){

		echo get_frontend_settings('google_site_verification');

	}





	$seo_pages = array('course_page');

	if (in_array($page_name, $seo_pages)):

	$course_details = $this->crud_model->get_course_by_id($course_id)->row_array();?>

    <meta name="keywords" content="<?php echo $course_details['meta_keywords']; ?>" />

    <meta property="og:description" content="<?php echo $course_details['meta_description']; ?>">
    <meta name="description" content="<?php echo $course_details['meta_description']; ?>" />

    <?php else: ?>

    <meta name="keywords" content="<?php echo get_settings('website_keywords'); ?>" />

    <meta property="og:description" content="<?php echo get_settings('website_description'); ?>">
    <meta name="description" content="<?php echo get_settings('website_description'); ?>" />

    <?php endif; ?>



    <link name="favicon" type="image/x-icon"
        href="<?php echo base_url('uploads/system/'.get_frontend_settings('favicon')); ?>" rel="shortcut icon" />

    <?php include 'includes_top.php';?>



</head>

<body class="gray-bg">



    <?php

	if ($this->session->userdata('user_login')) {

		include 'logged_in_header.php';

	}else {

		include 'logged_out_header.php';

	}



	if(get_frontend_settings('cookie_status') == 'active'):

    	include 'eu-cookie.php';

  	endif;

  	

  	if($page_name === null){

  		include $path;

  	}else{

		include $page_name.'.php';

	}

	include 'footer.php';

	include 'includes_bottom.php';

	include 'modal.php';

	include 'common_scripts.php';





	if(get_frontend_settings('google_adsence_plugin')){

		echo get_frontend_settings('google_adsence_plugin');

	}



	if(get_frontend_settings('google_analytics_code')){

		echo get_frontend_settings('google_analytics_code');

	}



	if(get_frontend_settings('tawk_plugin')){

		echo get_frontend_settings('tawk_plugin');

	}

	?>
    <script type='text/javascript'
        src='https://platform-api.sharethis.com/js/sharethis.js#property=606feed86f7ab900129cee27&product=sticky-share-buttons'
        async='async'></script>
</body>
<?php 
$popup_settings = json_decode(get_frontend_settings('popup_settings'));
?>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="card">
				<?php if(!empty($popup_settings->image_link)):?>
                <img src="<?=base_url('uploads/system/'.$popup_settings->image_link)?>" class="card-img-top" alt="Hospitality Connaisseur">
				<?php endif; ?>
                <div class="card-body">
                    <h2 class="card-title"><?=$popup_settings->popup_title?></h2>
                    <a href="<?=$popup_settings->popup_link?>" class="btn btn-primary"><?=get_phrase('learn_more')?></a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
	$(document).ready(function(){
	    setTimeout(function () {
    	            $('.bd-example-modal-lg').modal('show');
        }, <?=$popup_settings->popup_timer?>);
	});
</script>


</html>