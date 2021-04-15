<footer class="footer-area d-print-none p-0">

    <!--<section>

        <div class="text-center" style="background-image: url('<?=base_url()?>/assets/frontend/default/img/Footer.png');background-repeat: no-repeat;background-size: cover;    background-size: 100vw 100%;

        padding: 150px 0 130px;

        ">

            <h1 class="font-weight-bold">"Advertise with Us."</h1>

            <h3 class="py-3 font-inter">Explore the Details about AdPackages & benefits We Provide.</h3>

            <a class="btn btn-primary btn-lg p-3" href="<?=site_url('home/advertise_with_us')?>">Request Quote</a>

        </div>

    </section>-->

    <section style="height:2px; background:linear-gradient(-45deg, #f12711, #f5af19);"></section>

    <section class="bg-dark mt-5">

        <div class="row w-100 px-sm-1 px-md-5 text-left mx-0">

            <div class="col-lg-3 col-sm-12  text-capitalize">

                <h3 class="text-light">

                    Discover

                </h3>

                <ul style="list-style-type: none;margin: 0;padding: 15px 0px;">

                    <li>

                        <a class="nav-link" href="https://community.hospitality.com" target="_blank"

                            rel="noopener noreferrer">

                            <?php echo site_phrase('Free Knowledge Base'); ?>

                        </a>

                    </li>

                    <li>

                        <a class="nav-link" href="<?=site_url('magazines')?>"

                            target="_blank" rel="noopener noreferrer">

                            <?php echo site_phrase('Digital Magazine'); ?>

                        </a>

                    </li>

                    <li>

                        <a class="nav-link" href="https://community.hospitalityconnaisseur.com/category/podcast/"

                            target="_blank" rel="noopener noreferrer">

                            <?php echo site_phrase('Podcasts'); ?>

                        </a>

                    </li>

                    <li>

                        <a class="nav-link" href="<?=site_url('courses')?>" target="_blank"

                            rel="noopener noreferrer">

                            <?php echo site_phrase('Keynote Courses'); ?>

                        </a>

                    </li>

                    <li>

                        <a class="nav-link" href="<?=site_url('contact-us')?>" target="_blank"

                            rel="noopener noreferrer">

                            <?php echo site_phrase('Benefits of Hospitality Connaisseur'); ?>

                        </a>

                    </li>

                </ul>

            </div>

            <div class="col-lg-3 col-sm-12  text-capitalize">

                <h3 class="text-light">

                    Categories

                </h3>

                <ul style="list-style-type: none;margin: 0;padding: 15px 0px;">

                    <li class="">

                        <a class="nav-link"

                            href="<?=site_url('courses?category=all&price=all&level=all&language=all&rating=all')?>"

                            target="_blank" rel="noopener noreferrer">

                            <?php echo site_phrase('All Category'); ?>

                        </a>

                    </li>

                    <?php

                      $categories = $this->crud_model->get_categories()->result_array();

                      foreach ($categories as $category): ?>

                    <li class="">

                        <a class="nav-link"

                            href="<?=site_url('courses?category='.$category['slug'].'&price=all&level=all&language=all&rating=all')?>"

                            target="_blank" rel="noopener noreferrer">

                            <?php echo site_phrase($category['name']); ?>

                        </a>

                    </li>

                    <?php endforeach; ?>

                </ul>

            </div>

            <div class="col-lg-3 col-sm-12  text-capitalize">

                <h3 class="text-light">

                    Pages

                </h3>

                <ul style="list-style-type: none;margin: 0;padding: 15px 0px;" class="text-white">

                    <li class="nav-item">

                        <a class="nav-link"

                            href="<?php echo site_url('about-us'); ?>"><?php echo site_phrase('About Us'); ?></a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link"

                            href="<?php echo site_url('privacy-policy'); ?>"><?php echo site_phrase('Privacy Policy'); ?></a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link"

                            href="<?php echo site_url('terms-and-condition'); ?>"><?php echo site_phrase('Terms and Condition'); ?></a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link"

                            href="<?php echo site_url('refund-policy'); ?>"><?php echo site_phrase('Refund Policy'); ?></a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link text-upper" href="<?php echo site_url('faq'); ?>">

                            <?php echo site_phrase('FAQ'); ?>

                        </a>

                    </li>
                    <?php 
                        $dictionary = $this->db->get('dictionary_lang')->result_array();

                        foreach($dictionary as $dic):
                    ?>
                    <li class="nav-item">

                        <a class="nav-link" href="<?php echo site_url('dictionary/'.slugify($dic['language'])); ?>">

                            <?php echo site_phrase($dic['language']); ?>
                        </a>

                    </li>
                        <?php endforeach; ?>

                    <!-- <li class="nav-item">

                        <a class="nav-link" href="<?php echo site_url('home/hospitality_keywords'); ?>">

                            <?php echo site_phrase('Hospitality Keywords'); ?>

                        </a>

                    </li> -->

                    <li class="nav-item">

                        <a class="nav-link" href="<?php echo site_url('question-papers'); ?>">

                            <?php echo site_phrase('Question Papers'); ?>

                        </a>
                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="<?php echo site_url('home/login'); ?>">

                            <?php echo site_phrase('login'); ?>

                        </a>

                    </li>

                    <li class="nav-item d-none">

                        <select class="language_selector" onchange="switch_language(this.value)">

                            <?php

                 $languages = $this->crud_model->get_all_languages();

                 foreach ($languages as $language): ?>

                            <?php if (trim($language) != ""): ?>

                            <option value="<?php echo strtolower($language); ?>"

                                <?php if ($this->session->userdata('language') == $language): ?>selected<?php endif; ?>>

                                <?php echo ucwords($language);?></option>

                            <?php endif; ?>

                            <?php endforeach; ?>

                        </select>

                    </li>

                </ul>

            </div>

            <div class="col-lg-3 col-sm-12">

                <h3 class="text-light">

                    Contact Us

                </h3>

                <div class="text-left">

                    <p><span class="navbar-text text-white my-1 font-weight-bold">

                        <i class="far fa-envelope"></i> <?=get_settings('system_email')?>

                    </span>

                    </p>

                    <p>

                    <span class="navbar-text text-white my-1 font-weight-bold">

                        <i class="far fa-clock"></i> <?=get_settings('support_time')?>

                    </span>

                    </p>

                    <p>

                        <span class="navbar-text text-white my-1 font-weight-bold">

                            <i class="fa fa-phone"></i> <?=get_settings('phone')?>

                        </span>

                    </p>

                    <p>

                        <span class="navbar-text my-1">

                            <a class="navbar-text text-white mr-2" href="<?=get_settings('facebook_link')?>"><i

                                    class="fab fa-facebook"></i></a>

                            <a class="navbar-text text-white mr-2" href="<?=get_settings('linkedin_link')?>"><i

                                    class="fab fa-linkedin"></i></a>

                            <a class="navbar-text text-white mr-2" href="<?=get_settings('instagram_link')?>"><i

                                    class="fab fa-instagram"></i></a>

                            <a class="navbar-text text-white mr-2" href="<?=get_settings('youtube_link')?>"><i

                                    class="fab fa-youtube"></i></a>

                            <a class="navbar-text text-white mr-2" href="<?=get_settings('twitter_link')?>"><i

                                    class="fab fa-twitter"></i></a>

                            <a class="navbar-text text-white mr-2" href="<?=get_settings('whatsapp_link')?>"><i

                                    class="fab fa-whatsapp"></i></a>

                        </span>

                    </p>

                </div>

            </div>

        </div>

        <section class="mt-5" style="height:2px; background:linear-gradient(-45deg, #f12711, #f5af19);"></section>

        <div class="row w-100 px-md-5 px-sm-0 mx-0 text-white text-justify mt-5">

            <div class="col">

                <p class="font-weight-bold">

                    About Us.

                </p>

                <p>

                    <b>Hospitality Connaisseur – Accelerating Hospitality, Empowering Hoteliers.</b> India’s 1st

                    Hospitality

                    centric Media and Technology Company, believes to connect each hospitality individual to the vast &

                    various amount of knowledge by providing Boost, Backup and Motivation for their professional growth

                    journey via Online Courses, Magazines, Podcasts, News and Daily relevant Articles on The Hospitality

                    Industry.

                </p>

                <p class="font-weight-bold">

                    What's New?

                </p>

                <p>

                    <b>1. Free Knowledge Repository :</b> Visit <a href="https://community.hospitalityconnaisseur.com"

                        class="text-theme" target="_blank">community.hospitalityconnaisseur.com</a> and explore wide

                    range

                    of free yet relevant content like Podcasts, Daily industry News, Articles and Interviews of Industry

                    Leaders to keep you updated and knowledgable.

                </p>

                <p>

                    <b>2. Online Courses :</b> Our Online Courses are not just another online courses! We are Industry

                    Experts, bring you the most relevant Online Courses made with the help of Edutainment, which is a

                    mix of

                    Education & Entertainment. Our Courses won’t bore you! If you had a hard working day or a boring

                    college

                    day, Get into our Curated and Comprehensive online courses and calm your appetite for knowledge. We

                    simply provide Digitally Comprehensive Learning & Development with Effective Training Management.

                </p>

                <p>

                    <b>3. Hospitality & Travel Connaisseur Magazine :</b> An E-Magazine, brings you the trends of Hotel,

                    Tourism and Aviation Industry with Detailed Industry Insights. News | Interviews | Stories at the

                    most

                    affordable price!

                </p>

                <p class="small font-italic">

                    Whatever we do. We do it with passion and for the betterment of the people of Hospitality Industry

                    by

                    making their lives easier and by providing trusted and informative content. That’s why we are

                    Hospitality Connaisseur.

                </p>

                <p class="font-weight-bold">

                    Tech-enabled Learning.

                </p>

                <p>Everything Hospitality! We believe to accelerate the Indian Hospitality Industry with the help of

                    Digitally comprehensive Edutainment by using finest Technology possible. As we provide all the

                    relevant

                    content online with the help of Technology, so that you can learn anytime, anywhere, on any device,

                    simply as per your convenience! <a href="<?php echo base_url(); ?>/home/login"

                        class="text-theme">LOGIN</a> to start learning or <a

                        href="<?php echo base_url(); ?>/home/sign_up" class="text-theme">SIGN-UP</a> to be the part of

                    revolution.</p>

                <p class="font-weight-bold">

                    Be The Part of Hospitality Connaisseur.

                </p>

                <p><b>1. Become ‘Hospitality Influencer’ :</b> A Curated programme designed by us to empower the

                    Faculties

                    and Mentors to share their knowledge with our wide range of worldwide audience and earn money by

                    making

                    courses online. We will assist them with our Technology, Network, Guidance and Marketing to sell

                    their

                    courses and make them empowered.</p>

                <p><a href="<?php echo base_url();?>/home/jobs" class="text-theme">Explore other Jobs.</a></p>

                <p class="font-weight-bold">

                    Buy Courses & Magazine Subscription.

                </p>

                <p>Hospitality Connaisseur offers you multiple payment methods. Our Payment gateway partners use secure

                    encryption technology to keep your transaction details confidential at all times or You may use

                    Internet

                    Banking, Wallet and QR Support to make your purchase.</p>

                <div class="home-payments-icon mt-5 mb-5 text-center">

                    <img src="https://cdn1.byjus.com/home/Payment-icons/paytm-icon.svg"

                        data-src="https://cdn1.byjus.com/home/Payment-icons/paytm-icon.svg" alt="Paytm"

                        class=" lazyloaded">

                    <img src="https://cdn1.byjus.com/home/Payment-icons/pay-u-icon.svg"

                        data-src="https://cdn1.byjus.com/home/Payment-icons/pay-u-icon.svg" alt="PayU"

                        class=" lazyloaded">

                    <img src="https://cdn1.byjus.com/home/Payment-icons/amazon-pay-icon.svg"

                        data-src="https://cdn1.byjus.com/home/Payment-icons/amazon-pay-icon.svg" alt="Amazon Pay"

                        class=" lazyloaded">

                    <img src="https://cdn1.byjus.com/home/Payment-icons/upi-pay-icon.svg"

                        data-src="https://cdn1.byjus.com/home/Payment-icons/upi-pay-icon.svg" alt="UPI"

                        class=" lazyloaded">

                    <img src="https://cdn1.byjus.com/home/Payment-icons/bhim-pay-icon.svg"

                        data-src="https://cdn1.byjus.com/home/Payment-icons/bhim-pay-icon.svg" alt="BHIM"

                        class=" lazyloaded">

                    <img src="https://cdn1.byjus.com/home/Payment-icons/rupay-icon.svg"

                        data-src="https://cdn1.byjus.com/home/Payment-icons/rupay-icon.svg" alt="RUPAY"

                        class=" lazyloaded">

                    <img src="https://cdn1.byjus.com/home/Payment-icons/Razorpay.svg" alt="Razorpay" class="lazyloaded">

                    <img src="<?=base_url()?>/assets/payment/phonepe.svg" alt="Razorpay" class=" lazyloaded">

                    <img src="<?=base_url()?>/assets/payment/airtel-money.svg" alt="Razorpay" class=" lazyloaded">

                    <img src="<?=base_url()?>/assets/payment/mastercard.svg" alt="Razorpay" class=" lazyloaded">

                    <img src="<?=base_url()?>/assets/payment/visa.svg" alt="Razorpay" class=" lazyloaded">

                    <img src="<?=base_url()?>/assets/payment/stripe.svg" alt="Stripe" class=" lazyloaded">

                </div>

                <p>

                    Copyright © 2020 – 2021, All Rights Reserved. ‘Hospitality Connaisseur’ + ‘Hospitality & Travel

                    Connaisseur Magazine’ both are the brands of Connaisseur Futuretech Private Limited. Registered,

                    Trademarked and a Government of India recognized Startup | Proudly Made in India.

                </p>

                <p>Kindly update your Email ID with us to receive regular updates / insights on Indian Hospitality

                    Sector.

                    SIGN-UP NOW.</p>

                <p>

                    CIN : U80902GJ2019PTC108774 | Startup India : DIPP73257 | GST : 24AAICC2399F1ZM | UDYAM :

                    UDYAM-GJ-22-0033771

                </p>

            </div>

        </div>

    </section>

</footer>



<!-- PAYMENT MODAL -->

<!-- Modal -->

<?php

$paypal_info = json_decode(get_settings('paypal'), true);

$stripe_info = json_decode(get_settings('stripe_keys'), true);

if ($paypal_info[0]['active'] == 0) {

  $paypal_status = 'disabled';

}else {

  $paypal_status = '';

}

if ($stripe_info[0]['active'] == 0) {

  $stripe_status = 'disabled';

}else {

  $stripe_status = '';

}

?>



<!-- Modal -->

<div class="modal fade multi-step" id="EditRatingModal" tabindex="-1" role="dialog" aria-hidden="true"

    reset-on-close="true">

    <div class="modal-dialog modal-lg" role="document">

        <div class="modal-content edit-rating-modal">

            <div class="modal-header">

                <h5 class="modal-title step-1" data-step="1"><?php echo site_phrase('step').' 1'; ?></h5>

                <h5 class="modal-title step-2" data-step="2"><?php echo site_phrase('step').' 2'; ?></h5>

                <h5 class="m-progress-stats modal-title">

                    &nbsp;of&nbsp;<span class="m-progress-total"></span>

                </h5>



                <button type="button" class="close" data-dismiss="modal">

                    <span aria-hidden="true">&times;</span>

                </button>

            </div>

            <div class="m-progress-bar-wrapper">

                <div class="m-progress-bar">

                </div>

            </div>

            <div class="modal-body step step-1">

                <div class="container-fluid">

                    <div class="row">

                        <div class="col-md-6">

                            <div class="modal-rating-box">

                                <h4 class="rating-title">

                                    <?php echo site_phrase('how_would_you_rate_this_course_overall'); ?>?</h4>

                                <fieldset class="your-rating">



                                    <input type="radio" id="star5" name="rating" value="5" />

                                    <label class="full" for="star5"></label>



                                    <!-- <input type="radio" id="star4half" name="rating" value="4 and a half" />

                  <label class="half" for="star4half"></label> -->



                                    <input type="radio" id="star4" name="rating" value="4" />

                                    <label class="full" for="star4"></label>



                                    <!-- <input type="radio" id="star3half" name="rating" value="3 and a half" />

                  <label class="half" for="star3half"></label> -->



                                    <input type="radio" id="star3" name="rating" value="3" />

                                    <label class="full" for="star3"></label>



                                    <!-- <input type="radio" id="star2half" name="rating" value="2 and a half" />

                  <label class="half" for="star2half"></label> -->



                                    <input type="radio" id="star2" name="rating" value="2" />

                                    <label class="full" for="star2"></label>



                                    <!-- <input type="radio" id="star1half" name="rating" value="1 and a half" />

                  <label class="half" for="star1half"></label> -->



                                    <input type="radio" id="star1" name="rating" value="1" />

                                    <label class="full" for="star1"></label>



                                    <!-- <input type="radio" id="starhalf" name="rating" value="half" />

                  <label class="half" for="starhalf"></label> -->



                                </fieldset>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="modal-course-preview-box">

                                <div class="card">

                                    <img class="card-img-top img-fluid" id="course_thumbnail_1" alt="">

                                    <div class="card-body">

                                        <h5 class="card-title" class="course_title_for_rating" id="course_title_1"></h5>

                                        <p class="card-text" id="instructor_details">



                                        </p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>



            </div>

            <div class="modal-body step step-2">

                <div class="container-fluid">

                    <div class="row">

                        <div class="col-md-6">

                            <div class="modal-rating-comment-box">

                                <h4 class="rating-title"><?php echo site_phrase('write_a_public_review'); ?></h4>

                                <textarea id="review_of_a_course" name="review_of_a_course"

                                    placeholder="<?php echo site_phrase('describe_your_experience_what_you_got_out_of_the_course_and_other_helpful_highlights').'. '.site_phrase('what_did_the_instructor_do_well_and_what_could_use_some_improvement') ?>?"

                                    maxlength="65000" class="form-control"></textarea>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="modal-course-preview-box">

                                <div class="card">

                                    <img class="card-img-top img-fluid" id="course_thumbnail_2" alt="">

                                    <div class="card-body">

                                        <h5 class="card-title" class="course_title_for_rating" id="course_title_2"></h5>

                                        <p class="card-text">

                                            -

                                            <?php

                      $admin_details = $this->user_model->get_admin_details()->row_array();

                      echo $admin_details['first_name'].' '.$admin_details['last_name'];

                      ?>

                                        </p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <input type="hidden" name="course_id" id="course_id_for_rating" value="">

            <div class="modal-footer">

                <button type="button" class="btn btn-primary next step step-1" data-step="1"

                    onclick="sendEvent(2)"><?php echo site_phrase('next'); ?></button>

                <button type="button" class="btn btn-primary previous step step-2 mr-auto" data-step="2"

                    onclick="sendEvent(1)"><?php echo site_phrase('previous'); ?></button>

                <button type="button" class="btn btn-primary publish step step-2"

                    onclick="publishRating($('#course_id_for_rating').val())"

                    id=""><?php echo site_phrase('publish'); ?></button>

            </div>

        </div>

    </div>

</div><!-- Modal -->



<script type="text/javascript">

function switch_language(language) {

    $.ajax({

        url: '<?php echo site_url('home/site_language'); ?>',

        type: 'post',

        data: {

            language: language

        },

        success: function(response) {

            setTimeout(function() {

                location.reload();

            }, 500);

        }

    });

}

</script>