    <section class="">

        <div class="">

            <div class="marquee p-2 bg-dark">

                <span><?php echo get_frontend_settings('heading_line'); ?></span>

            </div>

        </div>

    </section>

    <section style="height:2px; background:linear-gradient(-45deg, #f12711, #f5af19);"></section>

    <?php if(get_settings('notification_bar')):?>

    <section>

        <div class="alert alert-warning alert-dismissible bg-gradient border-0 text-dark fade show mb-0 rounded-0 py-3"
            role="alert">

            <h3 class="font-weight-bold font-inter mb-0"> <?=get_settings('notification_bar')?>

                <a class="btn btn-outline-dark ml-3" href="<?=get_settings('notification_link')?>">Get It Now</a>

            </h3>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                <span aria-hidden="true">&times;</span>

            </button>

        </div>

    </section>

    <?php endif; ?>
    <?php if(!$this->agent->is_mobile()): ?>
    <section class="d-sm-none d-md-block">

        <img src="<?php echo base_url(); ?>assets/frontend/default/img/web main.jpg" data-src="<?php echo base_url(); ?>assets/frontend/default/img/web main.jpg" alt="" class="lazyloaded w-100 h-100 d-block">

    </section>
    <?php else:?>
    <section class="d-sm-block d-md-none">

        <img src="<?php echo base_url(); ?>assets/frontend/default/img/mobile main.jpg" data-src="<?php echo base_url(); ?>assets/frontend/default/img/mobile main.jpg" alt=""
            class="w-100 h-100 d-block lazyloaded">

    </section>
    <?php endif; ?>

    <section style="height:2px; background:linear-gradient(-45deg, #f12711, #f5af19);"></section>

    <section class="home-fact-area">

        <div class="container-lg">

            <div class="row">

                <div class="col-lg-4 d-flex">

                    <div class="home-fact-box mr-md-auto mr-auto">

                        <i class="float-left"><img src="<?php echo base_url(); ?>assets/frontend/default/img/onlineCoursesFactBox.png" data-src="<?php echo base_url(); ?>assets/frontend/default/img/onlineCoursesFactBox.png" class="lazyloaded"></i>

                        <div class="text-box">

                            <h3 class="text-uppercase text-white">

                                <?php

                        $status_wise_courses = $this->crud_model->get_status_wise_courses();

                        $number_of_courses = $status_wise_courses['active']->num_rows();

                        echo $number_of_courses.' - '.site_phrase('ONLINE_COURSES'); ?>

                            </h3>

                            <p class="text-capitalize">

                                Digitally Comprehensive <b>Learning & Development</b> with Effective Training
                                Management.

                            </p>

                        </div>

                    </div>

                </div>



                <div class="col-lg-4 d-flex">

                    <div class="home-fact-box mr-md-auto mr-auto">

                        <i class="float-left"><img class="lazyloaded" data-src="<?php echo base_url(); ?>assets/frontend/default/img/magazineFactBox.png"
                                src="<?php echo base_url(); ?>assets/frontend/default/img/magazineFactBox.png"></i>

                        <div class="text-box">

                            <h3 class="text-uppercase text-white">

                                <?php

                        $status_wise_courses = $this->crud_model->get_status_wise_courses('','magazine');

                        $number_of_courses = $status_wise_courses['active']->num_rows();

                        echo $number_of_courses.' - '.site_phrase('MAGAZINES'); ?>

                            </h3>

                            <p class="text-capitalize">

                                A Curated <b>Hospitality & Travel Connaisseur Magazine.</b>

                            </p>

                        </div>

                    </div>

                </div>



                <div class="col-lg-4 d-flex">

                    <div class="home-fact-box mr-md-auto mr-auto">

                        <!--<i class="far fa-clock float-left"></i>-->

                        <i class="float-left">
                        <img class="lazyloaded" data-src="<?php echo base_url(); ?>assets/frontend/default/img/industryUpdatesFactBox.png"
                                src="<?php echo base_url(); ?>assets/frontend/default/img/industryUpdatesFactBox.png"></i>

                        <div class="text-box">

                            <h3 class="text-uppercase text-white">

                                <?php echo site_phrase('INDUSTRY UPDATES'); ?>

                            </h3>

                            <p>

                                Explore free <b>Articles, Podcasts and Latest NEWS</b> on Indian Hospitality Segment.

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- magazine section start -->

    <section class="course-carousel-area py-5">

        <div class="container-lg py-3">

            <div class="row">

                <div class="col">

                    <h2 class="course-carousel-title d-none">

                        <?php echo site_phrase('all_magezines'); ?>

                    </h2>

                    <div class="text-center py-3">

                        <h1 class="font-weight-bold">

                            Hospitality & Travel Connaisseur Magazine

                        </h1>

                        <p style="font-size:18px;" class="py-4">

                            Hospitality Knowledge under One Roof.</br>News | Interviews | Stories

                        </p>

                    </div>

                    <div class="row js-slick-carousel">

                        <?php $courses = $this->crud_model->get_top_magazines(); ?>

                        <?php foreach ($courses->result_array() as $course): ?>

                        <div class="col">

                            <div class="card">
                                <a href="<?php echo site_url('magazines/'.rawurlencode(slugify($course['title'])).'/'.$course['id']); ?>"
                                    title="<?=$course['title']?>" target="_blank" rel="noopener noreferrer">

                                    <?php if(!empty($this->crud_model->get_course_thumbnail_url($course['id']))):?>

                                    <img class="card-img-top lazyloaded"
                                        src="<?php echo $this->crud_model->get_course_thumbnail_url($course['id']); ?>"
                                        data-src="<?php echo $this->crud_model->get_course_thumbnail_url($course['id']); ?>"
                                        alt="" />

                                    <?php else: ?>

                                    <img class="card-img-top lazyloaded"
                                        src="<?=base_url()?>/uploads/system/hospitalityconnaisseur_placeholder.jpg"
                                        data-src="<?=base_url()?>/uploads/system/hospitalityconnaisseur_placeholder.jpg"
                                        alt="hospitality connaisseur" />

                                    <?php endif; ?>
                                </a>
                                <div class="card-body" style="height:6em; overflow:hidden;">

                                    <div class="card-body-content">

                                        <a href="<?php echo site_url('magazines/'.rawurlencode(slugify($course['title'])).'/'.$course['id']); ?>"
                                            title="<?=$course['title']?>" target="_blank" rel="noopener noreferrer">

                                            <h5 class="card-title font-weight-bold"><?=$course['title']?></h5>

                                        </a>

                                    </div>

                                </div>
                                <div class="card-footer bg-white">
                                    <small class="text-muted">Published on:<?=date( 'd-m-Y', $course['date_added'])?>
                                    </small>
                                </div>
                            </div>

                        </div>

                        <?php endforeach; ?>


                        <!-- second half cards -->

                    </div>

                    <!-- row -->

                </div>

            </div>

        </div>

        <!-- container -->

    </section>
    <?php if(!$this->agent->is_mobile()): ?>

    <section class="d-sm-none d-md-block">

        <img src="<?php echo base_url(); ?>assets/frontend/default/img/web our philosophy.jpg" 
            data-src="<?php echo base_url(); ?>assets/frontend/default/img/web our philosophy.jpg"
            alt=""
            class="w-100 h-100 d-block lazyloaded">

    </section>
    <?php else: ?>

    <section class="d-sm-block d-md-none">

        <img data-src="<?php echo base_url(); ?>assets/frontend/default/img/mobile our philosophy.jpg" 
            src="<?php echo base_url(); ?>assets/frontend/default/img/mobile our philosophy.jpg" alt=""
            class="w-100 h-100 d-block lazyloaded">

    </section>
    <?php endif; ?>

    <!-- info section end -->

    <!-- course section start -->

    <section class="course-carousel-area py-5">

        <div class="container-lg">

            <div class="row">

                <div class="col">

                    <h1 class="text-dark py-4 text-center text-uppercase font-weight-bold">

                        <?php echo site_phrase('FAVOURITE_COURSES'); ?>

                    </h1>

                    <div class="course-carousel">

                        <?php $top_courses = $this->crud_model->get_top_courses()->result_array();

                    $cart_items = $this->session->userdata('cart_items');

                    foreach ($top_courses as $top_course):?>

                        <div class="course-box-wrap">

                            <a href="<?php echo site_url('courses/'.rawurlencode(slugify($top_course['title'])).'/'.$top_course['id']); ?>"
                                class="has-popover">

                                <div class="course-box">

                                    <!-- <div class="course-badge position best-seller">Best seller</div> -->

                                    <div class="course-image">

                                        <img src="<?php echo $this->crud_model->get_course_thumbnail_url($top_course['id']); ?>"
                                            data-src="<?php echo $this->crud_model->get_course_thumbnail_url($top_course['id']); ?>"
                                            alt="" class="img-fluid lazyloaded">

                                    </div>

                                    <div class="course-details">

                                        <h5 class="title">

                                            <?php echo $top_course['title']; ?>

                                        </h5>

                                        <p class="instructors">

                                            <?php echo $top_course['short_description']; ?>

                                        </p>

                                        <div class="rating">

                                            <?php

                                        $total_rating =  $this->crud_model->get_ratings('course', $top_course['id'], true)->row()->rating;

                                        $number_of_ratings = $this->crud_model->get_ratings('course', $top_course['id'])->num_rows();

                                        if ($number_of_ratings > 0) {

                                            $average_ceil_rating = ceil($total_rating / $number_of_ratings);

                                        }else {

                                            $average_ceil_rating = 0;

                                        }



                                        for($i = 1; $i < 6; $i++):?>

                                            <?php if ($i <= $average_ceil_rating): ?>

                                            <i class="fas fa-star filled"></i>

                                            <?php else: ?>

                                            <i class="fas fa-star"></i>

                                            <?php endif; ?>

                                            <?php endfor; ?>

                                            <span
                                                class="d-inline-block average-rating"><?php echo $average_ceil_rating; ?></span>

                                        </div>

                                        <?php if ($top_course['is_free_course'] == 1): ?>

                                        <p class="price text-right">

                                            <?php echo site_phrase('free'); ?>

                                        </p>

                                        <?php else: ?>

                                        <?php if ($top_course['discount_flag'] == 1): ?>

                                        <p class="price text-right">

                                            <small><?php echo currency($top_course['price']); ?></small>

                                            <?php echo currency($top_course['discounted_price']); ?>

                                        </p>

                                        <?php else: ?>

                                        <p class="price text-right">

                                            <?php echo currency($top_course['price']); ?>

                                        </p>

                                        <?php endif; ?>

                                        <?php endif; ?>

                                    </div>

                                </div>

                            </a>



                            <div class="webui-popover-content">

                                <div class="course-popover-content">

                                    <?php if ($top_course['last_modified'] == ""): ?>

                                    <div class="last-updated">

                                        <?php echo site_phrase('last_updater').' '.date('D, d-M-Y', $top_course['date_added']); ?>

                                    </div>

                                    <?php else: ?>

                                    <div class="last-updated">

                                        <?php echo site_phrase('last_updater').' '.date('D, d-M-Y', $top_course['last_modified']); ?>

                                    </div>

                                    <?php endif; ?>



                                    <div class="course-title">

                                        <a
                                            href="<?php echo site_url('courses/'.rawurlencode(slugify($top_course['title'])).'/'.$top_course['id']); ?>">

                                            <?php echo $top_course['title']; ?>

                                        </a>

                                    </div>

                                    <div class="course-meta">

                                        <?php if($top_course['course_type'] == 'general'): ?>

                                        <span class=""><i class="fas fa-play-circle"></i>

                                            <?php echo $this->crud_model->get_lessons('course', $top_course['id'])->num_rows().' '.site_phrase('lessons'); ?>

                                        </span>

                                        <span class=""><i class="far fa-clock"></i>

                                            <?php

                                        $total_duration = 0;

                                        $lessons = $this->crud_model->get_lessons('course', $top_course['id'])->result_array();

                                        foreach ($lessons as $lesson) {

                                            if ($lesson['lesson_type'] != "other") {

                                                $time_array = explode(':', $lesson['duration']);

                                                $hour_to_seconds = $time_array[0] * 60 * 60;

                                                $minute_to_seconds = $time_array[1] * 60;

                                                $seconds = $time_array[2];

                                                $total_duration += $hour_to_seconds + $minute_to_seconds + $seconds;

                                            }

                                        }

                                        echo gmdate("H:i:s", $total_duration).' '.site_phrase('hours');

                                        ?>

                                        </span>

                                        <?php elseif($top_course['course_type'] == 'scorm'): ?>

                                        <span class="badge badge-light"><?= site_phrase('scorm_course'); ?></span>

                                        <?php endif; ?>

                                        <span class=""><i
                                                class="fas fa-closed-captioning"></i><?php echo ucfirst($top_course['language']); ?></span>

                                    </div>

                                    <div class="course-subtitle">

                                        <?php echo $top_course['short_description']; ?>

                                    </div>

                                    <div class="what-will-learn">

                                        <ul>

                                            <?php

                                    $outcomes = json_decode($top_course['outcomes']);

                                    foreach ($outcomes as $outcome):?>

                                            <li>

                                                <?php echo $outcome; ?>

                                            </li>

                                            <?php endforeach; ?>

                                        </ul>

                                    </div>

                                    <div class="popover-btns">

                                        <?php if (is_purchased($top_course['id'])): ?>

                                        <div class="purchased">

                                            <a href="<?php echo site_url('my-courses'); ?>">

                                                <?php echo site_phrase('already_purchased'); ?>

                                            </a>

                                        </div>

                                        <?php else: ?>

                                        <?php if ($top_course['is_free_course'] == 1):

                                    if($this->session->userdata('user_login') != 1) {

                                        $url = "#";

                                    }else {

                                        $url = site_url('home/get_enrolled_to_free_course/'.$top_course['id']);

                                    }?>

                                        <a href="<?php echo $url; ?>" class="btn add-to-cart-btn big-cart-button"
                                            onclick="handleEnrolledButton()">

                                            <?php echo site_phrase('get_enrolled'); ?>

                                        </a>

                                        <?php else: ?>

                                        <button type="button"
                                            class="btn add-to-cart-btn <?php if(in_array($top_course['id'], $cart_items)) echo 'addedToCart'; ?> big-cart-button-<?php echo $top_course['id'];?>"
                                            id="<?php echo $top_course['id']; ?>" onclick="handleCartItems(this)">

                                            <?php

                                        if(in_array($top_course['id'], $cart_items))

                                        echo site_phrase('added_to_cart');

                                        else

                                        echo site_phrase('add_to_cart');

                                        ?>

                                        </button>

                                        <?php endif; ?>

                                        <button type="button"
                                            class="wishlist-btn <?php if($this->crud_model->is_added_to_wishlist($top_course['id'])) echo 'active'; ?>"
                                            title="Add to wishlist" onclick="handleWishList(this)"
                                            id="<?php echo $top_course['id']; ?>"><i class="fas fa-heart"></i></button>

                                        <?php endif; ?>



                                    </div>

                                </div>

                            </div>

                        </div>

                        <?php endforeach; ?>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- course section end -->

    <!-- Services Section start -->

    <section class="bg-dark">

        <div class="container-lg">

            <div class="row text-white justify-content-center text-center">

                <div class="col-sm-6 col-md-3 service-box py-3">
                    <a href="<?=site_url('dictionary/english')?>">
                        <img src="<?php echo base_url(); ?>assets/frontend/default/img/englishDictionary.png"
                            class="img-fluid">

                        <h3 class="text-white text-capitalize">English</br>Dictionary</h3>
                    </a>
                </div>

                <div class="col-sm-6 col-md-3 service-box py-3">
                    <a href="<?=site_url('dictionary/hospitality-keywords')?>">
                        <img src="<?php echo base_url(); ?>assets/frontend/default/img/hospitalityKeywords.png"
                            class="img-fluid">

                        <h3 class="text-white text-capitalize">Hositality</br>Keywords</h3>
                    </a>
                </div>

                <div class="col-sm-6 col-md-3 service-box py-3">
                    <a href="<?=site_url('dictionary/french')?>">
                        <img src="<?php echo base_url(); ?>assets/frontend/default/img/frenchDictionary.png"
                            class="img-fluid">

                        <h3 class="text-white text-capitalize">French</br>Dictionary</h3>
                    </a>
                </div>

                <div class="col-sm-6 col-md-3 service-box py-3">
                    <a href="<?=site_url('question-papers')?>">
                        <img src="<?php echo base_url(); ?>assets/frontend/default/img/questionPapers.png"
                            class="img-fluid">

                        <h3 class="text-white text-capitalize">Question</br>Papers</h3>
                    </a>
                </div>

            </div>

        </div>

    </section>

    <!-- Services Section end -->

    <?php if(!empty($reviews)):?>

    <!-- student testimonial section start -->

    <section class="py-5 bg-gradient">

        <!-- Testimonial Carousel -->

        <h1 class="text-white text-center py-4">WHAT HOTELIERS SAY</h1>

        <div class="testimonial-reel">

            <!-- Testimonial -->

            <?php foreach ($reviews as $review) :?>

            <div>

                <div class="box">

                    <!-- Testimonial Image -->

                    <figure class="image">

                        <img src="<?php echo $this->user_model->get_user_image_url($review('user_id')); ?>"
                        data-src="<?php echo $this->user_model->get_user_image_url($review('user_id')); ?>"
                            alt="user-image" height="42" class="img-fluid rounded-circle shadow-sm lazyloaded">

                    </figure>

                    <!-- / Testimonial Image -->

                    <div class="test-component">

                        <!-- Title -->

                        <article class="test-title">

                            <h4>

                                <?=$review['full_name']?>

                            </h4>

                        </article>

                        <!-- / Title -->

                        <article class="test-content">

                            <p>

                                <?=$review['review']?>

                            </p>

                        </article>

                    </div>

                </div>

            </div>

            <?php endforeach;?>

            <!-- / Testimonial -->

        </div>

        <!-- / Testimonial Carousel -->

    </section>

    <!-- student testimonial section end -->

    <?php endif; ?>



    <!-- course filter section start -->

    <section class="course-carousel-area  py-5">

        <div class="container-lg">
            <?php 
$latest_courses = $this->crud_model->get_all_courses();
$allcategory = array_column($latest_courses,'category','c_slug');    
?>

            <div class="row">
                <div class="col">
                    <h1 class="text-black text-center font-weight-bold py-3 text-uppercase">
                        <?php echo site_phrase('all_courses'); ?></h1>
                    <div class="filters-button-group py-4">
                        <a href="<?php echo site_url('faq'); ?>"
                            class="btn btn-outline-dark text-uppercase"><?php echo site_phrase('explore_FAQ'); ?></a>

                        <button class="btn btn-outline-dark" data-filter="*">Show All</button>

                        <?php foreach($allcategory as $key=> $cat):?>

                        <button class="btn btn-outline-dark" data-filter=".<?=strtolower($key)?>"><?=$cat?></button>

                        <?php endforeach; ?>

                    </div>
                
                <div class="col">

                    <!-- AkshayFilter start -->

                    <div class="grid mt-2">

                        <?php foreach ($latest_courses as $latest_course):?>


                        <div class="element-item transition <?=strtolower($latest_course['c_slug'])?>"
                            data-category="<?=strtolower($latest_course['c_slug'])?>">

                            <div class="course-box-wrap">

                                <a class="has-popover"
                                    href="<?php echo site_url('courses/'.rawurlencode(slugify($latest_course['title'])).'/'.$latest_course['id']); ?>">

                                    <div class="course-box">

                                        <div class="course-image">

                                            <img src="<?php echo $this->crud_model->get_course_thumbnail_url($latest_course['id']); ?>"
                                                alt="" class="img-fluid">

                                        </div>

                                        <div class="course-details">

                                            <h5 class="title">

                                                <?php echo $latest_course['title']; ?>

                                            </h5>

                                            <p class="instructors">

                                                <?php

                                        $instructor_details = $this->user_model->get_all_user($latest_course['user_id'])->row_array();

                                        echo $instructor_details['first_name'].' '.$instructor_details['last_name']; ?>

                                            </p>

                                            <div class="rating">

                                                <?php

                                        $total_rating =  $this->crud_model->get_ratings('course', $latest_course['id'], true)->row()->rating;

                                        $number_of_ratings = $this->crud_model->get_ratings('course', $latest_course['id'])->num_rows();

                                        if ($number_of_ratings > 0) {

                                            $average_ceil_rating = ceil($total_rating / $number_of_ratings);

                                        }else {

                                            $average_ceil_rating = 0;

                                        }

                                        for($i = 1; $i < 6; $i++):?>

                                                <?php if ($i <= $average_ceil_rating): ?>

                                                <i class="fas fa-star filled"></i>

                                                <?php else: ?>

                                                <i class="fas fa-star"></i>

                                                <?php endif; ?>

                                                <?php endfor; ?>

                                                <span
                                                    class="d-inline-block average-rating"><?php echo $average_ceil_rating; ?></span>

                                            </div>

                                            <?php if ($latest_course['is_free_course'] == 1): ?>

                                            <p class="price text-right">

                                                <?php echo site_phrase('free'); ?>

                                            </p>

                                            <?php else: ?>

                                            <?php if ($latest_course['discount_flag'] == 1): ?>

                                            <p class="price text-right">

                                                <small><?php echo currency($latest_course['price']); ?></small>

                                                <?php echo currency($latest_course['discounted_price']); ?>

                                            </p>

                                            <?php else: ?>

                                            <p class="price text-right">

                                                <?php echo currency($latest_course['price']); ?>

                                            </p>

                                            <?php endif; ?>

                                            <?php endif; ?>

                                        </div>

                                    </div>

                                </a>

                                <div class="webui-popover-content">

                                    <div class="course-popover-content">

                                        <?php if ($top_course['last_modified'] == ""): ?>

                                        <div class="last-updated">

                                            <?php echo site_phrase('last_updater').' '.date('D, d-M-Y', $top_course['date_added']); ?>

                                        </div>

                                        <?php else: ?>

                                        <div class="last-updated">

                                            <?php echo site_phrase('last_updater').' '.date('D, d-M-Y', $top_course['last_modified']); ?>

                                        </div>

                                        <?php endif; ?>



                                        <div class="course-title">

                                            <a
                                                href="<?php echo site_url('courses/'.rawurlencode(slugify($top_course['title'])).'/'.$top_course['id']); ?>">

                                                <?php echo $top_course['title']; ?>

                                            </a>

                                        </div>

                                        <div class="course-meta">

                                            <?php if($top_course['course_type'] == 'general'): ?>

                                            <span class=""><i class="fas fa-play-circle"></i>

                                                <?php echo $this->crud_model->get_lessons('course', $top_course['id'])->num_rows().' '.site_phrase('lessons'); ?>

                                            </span>

                                            <span class=""><i class="far fa-clock"></i>

                                                <?php

                                        $total_duration = 0;

                                        $lessons = $this->crud_model->get_lessons('course', $top_course['id'])->result_array();

                                        foreach ($lessons as $lesson) {

                                            if ($lesson['lesson_type'] != "other") {

                                                $time_array = explode(':', $lesson['duration']);

                                                $hour_to_seconds = $time_array[0] * 60 * 60;

                                                $minute_to_seconds = $time_array[1] * 60;

                                                $seconds = $time_array[2];

                                                $total_duration += $hour_to_seconds + $minute_to_seconds + $seconds;

                                            }

                                        }

                                        echo gmdate("H:i:s", $total_duration).' '.site_phrase('hours');

                                        ?>

                                            </span>

                                            <?php elseif($top_course['course_type'] == 'scorm'): ?>

                                            <span class="badge badge-light"><?= site_phrase('scorm_course'); ?></span>

                                            <?php endif; ?>

                                            <span class=""><i
                                                    class="fas fa-closed-captioning"></i><?php echo ucfirst($top_course['language']); ?></span>

                                        </div>

                                        <div class="course-subtitle">

                                            <?php echo $top_course['short_description']; ?>

                                        </div>

                                        <div class="what-will-learn">

                                            <ul>

                                                <?php

                                    $outcomes = json_decode($top_course['outcomes']);

                                    foreach ($outcomes as $outcome):?>

                                                <li>

                                                    <?php echo $outcome; ?>

                                                </li>

                                                <?php endforeach; ?>

                                            </ul>

                                        </div>

                                        <div class="popover-btns">

                                            <?php if (is_purchased($top_course['id'])): ?>

                                            <div class="purchased">

                                                <a href="<?php echo site_url('my-courses'); ?>">

                                                    <?php echo site_phrase('already_purchased'); ?>

                                                </a>

                                            </div>

                                            <?php else: ?>

                                            <?php if ($top_course['is_free_course'] == 1):

                                    if($this->session->userdata('user_login') != 1) {

                                        $url = "#";

                                    }else {

                                        $url = site_url('home/get_enrolled_to_free_course/'.$top_course['id']);

                                    }?>

                                            <a href="<?php echo $url; ?>" class="btn add-to-cart-btn big-cart-button"
                                                onclick="handleEnrolledButton()">

                                                <?php echo site_phrase('get_enrolled'); ?>

                                            </a>

                                            <?php else: ?>

                                            <button type="button"
                                                class="btn add-to-cart-btn <?php if(in_array($top_course['id'], $cart_items)) echo 'addedToCart'; ?> big-cart-button-<?php echo $top_course['id'];?>"
                                                id="<?php echo $top_course['id']; ?>" onclick="handleCartItems(this)">

                                                <?php

                                        if(in_array($top_course['id'], $cart_items))

                                        echo site_phrase('added_to_cart');

                                        else

                                        echo site_phrase('add_to_cart');

                                        ?>

                                            </button>

                                            <?php endif; ?>

                                            <button type="button"
                                                class="wishlist-btn <?php if($this->crud_model->is_added_to_wishlist($top_course['id'])) echo 'active'; ?>"
                                                title="Add to wishlist" onclick="handleWishList(this)"
                                                id="<?php echo $top_course['id']; ?>"><i
                                                    class="fas fa-heart"></i></button>

                                            <?php endif; ?>



                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                        <?php endforeach; ?>

                    </div>
                    <!-- AkshayFilter end -->

                </div>
                </div>
            </div>

        </div>

    </section>
    <?php if(!$this->agent->is_mobile()): ?>

    <section class="d-sm-none d-md-block">

        <img src="<?php echo base_url(); ?>assets/frontend/default/img/web everything hospitality.jpg" alt=""
            class="w-100 h-100 d-block lazyloaded">

    </section>
    <?php else: ?>

    <section class="d-sm-block d-md-none">

        <img src="<?php echo base_url(); ?>assets/frontend/default/img/mobile everything hospitality.jpg" alt=""
            class="w-100 h-100 d-block lazyloaded">

    </section>
    <?php endif; ?>

    <!-- info section end -->

    <!-- podcast section start -->

    <section class="course-carousel-area py-5">

        <div class="container-lg">

            <div class="row">

                <div class="col">

                    <h1 class="text-center font-weight-bold py-4 text-uppercase">

                        <?php echo site_phrase('PODCASTS'); ?>

                    </h1>

                    <p class="py-4"><a href="https://community.hospitalityconnaisseur.com/category/podcast/"
                            target="_blank" class="btn btn-outline-dark"><?php echo site_phrase('show_all'); ?></a></p>

                    <div class="row js-slick-carousel">

                        <?php foreach ($latest_podcast->channel->item as $news) :?>

                        <div class="col">

                            <div class="card">

                                <div class="card-body" style="height:6em; overflow:hidden;">

                                    <div class="card-body-content">

                                        <a href="<?=$news->link?>" target="_blank" rel="noopener noreferrer">

                                            <h5 class="card-title font-weight-bold"><?=$news->title?></h5>

                                        </a>

                                    </div>

                                </div>

                                <div class="card-footer bg-white">
                                    <small class="text-muted">Published on:

                                        <?=date( 'd-m-Y', strtotime($news->pubDate))?></small>
                                </div>

                            </div>

                        </div>

                        <?php endforeach; ?>

                        <!-- second half cards -->

                    </div>

                    <!-- row -->

                </div>

            </div>

        </div>

        <!-- container -->

    </section>

    <!-- podcast section end -->

    <!-- newsletter start -->

    <section class="py-3">

        <div class="py-4 bg-dark">

            <div class="container">

                <!-- Row -->

                <div class="row justify-content-center">

                    <div class="col-md-6 col-sm-12">

                        <h1 class="text-white py-2">Subscribe to our Newsletter</h1>

                        <p class="text-white">

                            Simply Enter Your Email Address To Get Exclusive Access To our weekly Newsletter. We Provide
                            The

                            Best Information For Hoteliers!

                        </p>

                    </div>

                    <div class="col-md-6 col-sm-12">

                        <form class="form-row" method="post" action="<?=site_url('newsletter')?>">

                            <div class="col my-4">

                                <div class="input-group my-3">

                                    <input type="email" class="form-control" name="nw_email" required
                                        placeholder="Enter email">

                                    <div class="input-group-append">

                                        <button class="btn btn-primary rounded-0" type="submit">Subscribe</button>

                                    </div>

                                </div>

                                <small class="form-text text-white">We'll never share your email with anyone else. <a
                                        href="<?=site_url('privacy_policy')?>">T&C* apply</a></small>

                            </div>

                        </form>

                    </div>

                </div>

                <!-- Row -->

            </div>

        </div>

    </section>

    <!-- newsletter end -->

    <!-- blog feed section start  -->

    <section class="course-carousel-area py-5">

        <div class="container-lg">

            <div class="row">

                <div class="col">

                    <h1 class="text-center font-weight-bold py-4 text-uppercase">

                        <?php echo site_phrase('ARTICLES'); ?>

                    </h1>

                    <p class="py-4 filters-button-group">

                        <a href="https://community.hospitalityconnaisseur.com/category/articles/" target="_blank"
                            class="btn btn-outline-dark"><?php echo site_phrase('show_all'); ?></a>

                        <a href="https://community.hospitalityconnaisseur.com/category/hotel-management/"
                            target="_blank" class="btn btn-outline-dark"><?php echo site_phrase('hotels'); ?></a>

                        <a href="https://community.hospitalityconnaisseur.com/category/aviation-management/"
                            target="_blank" class="btn btn-outline-dark"><?php echo site_phrase('aviation'); ?></a>

                        <a href="https://community.hospitalityconnaisseur.com/category/tourism-management/"
                            target="_blank" class="btn btn-outline-dark"><?php echo site_phrase('tourism'); ?></a>

                    </p>

                    <div class="row js-slick-carousel">

                        <?php foreach ($latest_news->channel->item as $news) :?>

                        <div class="col">

                            <div class="card">

                                <!--<img class="card-img-top" src="<?=base_url()?>/uploads/system/hospitalityconnaisseur_placeholder.jpg" alt="" />-->

                                <div class="card-body" style="height:10em; overflow:hidden;">

                                    <div class="card-body-content">

                                        <a href="<?=$news->link?>" target="_blank" rel="noopener noreferrer">

                                            <h5 class="card-title font-weight-bold"><?=$news->title?></h5>

                                        </a>

                                    </div>

                                </div>
                                <div class="card-footer bg-white mt-2">
                                    <small class="text-muted">Published on:

                                        <?=date( 'd-m-Y', strtotime($news->pubDate))?></small>
                                </div>

                            </div>

                        </div>

                        <?php endforeach; ?>

                        <!-- second half cards -->

                    </div>

                    <!-- row -->

                </div>

            </div>

        </div>

        <!-- container -->

    </section>

    <!-- blog feed section end  -->

    <!-- news feed section start -->

    <section class="course-carousel-area py-5 bg-dark">

        <div class="container-lg">

            <div class="row">

                <div class="col">

                    <h1 class="text-center text-uppercase py-4 text-white">

                        <?php echo site_phrase('News'); ?>

                    </h1>

                    <p class="py-4">

                        <a href="https://community.hospitalityconnaisseur.com/category/news/" target="_blank"
                            class="btn btn-outline-light"><?php echo site_phrase('show_all'); ?></a>

                    </p>

                    <div class="row js-slick-carousel">

                        <?php foreach ($latest_news->channel->item as $news) :?>

                        <div class="col">

                            <div class="card">

                                <!--<img class="card-img-top" src="<?=base_url()?>/uploads/system/hospitalityconnaisseur_placeholder.jpg" alt="" />-->

                                <div class="card-body" style="height:10em; overflow:hidden;">

                                    <div class="card-body-content">

                                        <a href="<?=$news->link?>" target="_blank" rel="noopener noreferrer">

                                            <h5 class="card-title font-weight-bold"><?=$news->title?></h5>
                                        </a>

                                    </div>

                                </div>
                                <div class="card-footer bg-white mt-2">
                                    <small class="text-muted">Published on:

                                        <?=date( 'd-m-Y', strtotime($news->pubDate))?></small>
                                </div>
                            </div>

                        </div>

                        <?php endforeach; ?>

                        <!-- second half cards -->

                    </div>

                    <!-- row -->

                </div>

            </div>

        </div>

        <!-- container -->

    </section>

    <!-- news feed section end -->

    <section class="bg-gradient py-5">

        <h1 class="text-white text-center py-4">Certifications & Recognitions</h1>

        <!-- Testimonial Carousel -->

        <div class="testimonial-reel">

            <?php for ($i=0; $i <2 ; $i++) :?>

            <!-- Testimonial -->

            <div class="box">

                <div class="test-component">

                    <article class="test-content">

                        <img class="img-fluid lazyloaded" data-src="<?php echo base_url(); ?>/assets/frontend/default/img/India 500 Nomination.jpg"
                            src="<?php echo base_url(); ?>/assets/frontend/default/img/India 500 Nomination.jpg">

                    </article>

                </div>

            </div>

            <!-- / Testimonial -->

            <div class="box">

                <div class="test-component">

                    <article class="test-content">

                        <img class="img-fluid lazyloaded" data-src="<?php echo base_url(); ?>/assets/frontend/default/img/Startup India.jpg"
                            src="<?php echo base_url(); ?>/assets/frontend/default/img/Startup India.jpg">

                    </article>

                </div>

            </div>

            <div class="box">

                <div class="test-component">

                    <article class="test-content">

                        <img class="img-fluid lazyloaded" data-src="<?php echo base_url(); ?>/assets/frontend/default/img/UDYAM.jpg" src="<?php echo base_url(); ?>/assets/frontend/default/img/UDYAM.jpg">

                    </article>

                </div>

            </div>

            <?php endfor;?>

        </div>

        <!-- / Testimonial Carousel -->

    </section>
<?php if(!$this->agent->is_mobile()): ?>
    <section class="d-sm-none d-md-block">

        <a href="<?=site_url('advertise-with-us')?>" target="_blank" rel="noopener noreferrer">

            <img src="<?php echo base_url(); ?>assets/frontend/default/img/web footer.jpg" data-src="<?php echo base_url(); ?>assets/frontend/default/img/web footer.jpg" alt=""
                class="w-100 h-100 d-block lazyloaded">

        </a>

    </section>
<?php else: ?>
    <section class="d-sm-block d-md-none">

        <a href="<?=site_url('advertise-with-us')?>" target="_blank" rel="noopener noreferrer">

            <img src="<?php echo base_url(); ?>assets/frontend/default/img/mobile footer.jpg" data-src="<?php echo base_url(); ?>assets/frontend/default/img/mobile footer.jpg" alt=""
                class="w-100 h-100 d-block lazyloaded">
        </a>
    </section>
<?php endif; ?>
    <script type="text/javascript">
function handleWishList(elem) {



    $.ajax({

        url: '<?php echo site_url('home/handleWishList');?>',

        type: 'POST',

        data: {

            course_id: elem.id

        },

        success: function(response) {

            if (!response) {

                window.location.replace("<?php echo site_url('login'); ?>");

            } else {

                if ($(elem).hasClass('active')) {

                    $(elem).removeClass('active')

                } else {

                    $(elem).addClass('active')

                }

                $('#wishlist_items').html(response);

            }

        }

    });

}



function handleCartItems(elem) {

    url1 = '<?php echo site_url('home/handleCartItems');?>';

    url2 = '<?php echo site_url('home/refreshWishList');?>';

    $.ajax({

        url: url1,

        type: 'POST',

        data: {

            course_id: elem.id

        },

        success: function(response) {

            $('#cart_items').html(response);

            if ($(elem).hasClass('addedToCart')) {

                $('.big-cart-button-' + elem.id).removeClass('addedToCart')

                $('.big-cart-button-' + elem.id).text("<?php echo site_phrase('add_to_cart'); ?>");

            } else {

                $('.big-cart-button-' + elem.id).addClass('addedToCart')

                $('.big-cart-button-' + elem.id).text("<?php echo site_phrase('added_to_cart'); ?>");

            }

            $.ajax({

                url: url2,

                type: 'POST',

                success: function(response) {

                    $('#wishlist_items').html(response);

                    handleCartItems(elem);

                    handleEnrolledButton();

                }

            });

        }

    });

}



function handleEnrolledButton() {

    $.ajax({

        url: '<?php echo site_url('home/isLoggedIn');?>',

        success: function(response) {

            if (!response) {

                window.location.replace("<?php echo site_url('login'); ?>");

            }

        }

    });

}



function handleCartItems(elem) {

    url1 = '<?php echo site_url('home/handleCartItems');?>';

    url2 = '<?php echo site_url('home/refreshWishList');?>';

    $.ajax({

        url: url1,

        type: 'POST',

        data: {

            course_id: elem.id

        },

        success: function(response) {

            $('#cart_items').html(response);

            if ($(elem).hasClass('addedToCart')) {

                $('.big-cart-button-' + elem.id).removeClass('addedToCart')

                $('.big-cart-button-' + elem.id).text("<?php echo site_phrase('add_to_cart'); ?>");

            } else {

                $('.big-cart-button-' + elem.id).addClass('addedToCart')

                $('.big-cart-button-' + elem.id).text("<?php echo site_phrase('added_to_cart'); ?>");

            }

            $.ajax({

                url: url2,

                type: 'POST',

                success: function(response) {

                    $('#wishlist_items').html(response);

                }

            });

        }

    });

}



$(document).ready(function() {

    if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {

        if ($(window).width() >= 840) {

            $('a.has-popover').webuiPopover({

                trigger: 'hover',

                animation: 'pop',

                placement: 'horizontal',

                delay: {

                    show: 500,

                    hide: null

                },

                width: 330

            });

        } else {

            $('a.has-popover').webuiPopover({

                trigger: 'hover',

                animation: 'pop',

                placement: 'vertical',

                delay: {

                    show: 100,

                    hide: null

                },

                width: 335

            });

        }

    }

});
    </script>