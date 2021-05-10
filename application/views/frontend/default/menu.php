<div class="main-nav-wrap">

    <div class="mobile-overlay"></div>
    <ul class="mobile-main-nav">

        <div class="mobile-menu-helper-top"></div>

        <li>

            <a href="<?=site_url('about-us')?>">

                <span><?php echo site_phrase('about_us'); ?></span>

                <span class="has-sub-category"><i class="fas fa-angle-right"></i></span>

            </a>

        </li>

        <li class="has-children">

            <a href="<?=site_url('courses')?>">

                <span><?php echo site_phrase('courses'); ?></span>

                <span class="has-sub-category"><i class="fas fa-angle-right"></i></span>

            </a>



            <ul class="category corner-triangle top-left is-hidden">

                <li class="go-back"><a href=""><i class="fas fa-angle-left"></i>Menu</a></li>



                <?php

      $categories = $this->crud_model->get_categories('','general')->result_array();
      foreach ($categories as $key => $category):?>


                <?php

$sub_categories = $this->crud_model->get_sub_categories($category['id']);

foreach ($sub_categories as $sub_category): ?>

                <li><a
                        href="<?php echo site_url('courses?category='.$sub_category['slug']); ?>"><?php echo $sub_category['name']; ?></a>

                </li>

                <?php endforeach; ?>


                <?php endforeach; ?>

                <li class="all-category-devided mt-2 mb-0 p-0">

                    <a href="<?php echo site_url('courses'); ?>">

                        <span><?php echo site_phrase('all_courses'); ?></span>

                    </a>

                </li>

                <?php if(addon_status('course_bundle')): ?>

                <li class="all-category-devided m-0 p-0">

                    <a href="<?php echo site_url('course_bundles'); ?>">

                        <span><?php echo site_phrase('course_bundles'); ?></span>

                    </a>

                </li>

                <?php endif; ?>

            </ul>

        </li>

        <li class="has-children">

            <a href="<?=site_url('magazines')?>">

                <span><?php echo site_phrase('magazines'); ?></span>

                <span class="has-sub-category"><i class="fas fa-angle-right"></i></span>

            </a>



            <ul class="category corner-triangle top-left is-hidden pb-0">
                <li class="go-back"><a href=""><i class="fas fa-angle-left"></i>Menu</a></li>

                <li>

                    <a href="<?=site_url('advertise-with-us')?>">

                        <span><?php echo site_phrase('advertise_with_us'); ?></span>

                    </a>

                </li>

                <li>

                    <a href="<?=site_url('magazines')?>">

                        <span><?php echo site_phrase('latest_issue'); ?></span>

                    </a>

                </li>

            </ul>

        </li>

        <li>

            <a href="<?=site_url('jobs')?>">

                <span><?php echo site_phrase('Career'); ?></span>

                <span class="has-sub-category"><i class="fas fa-angle-right"></i></span>

            </a>

        </li>

        <li>

            <a href="<?=site_url('contact-us')?>">

                <span><?php echo site_phrase('contact_us'); ?></span>

                <span class="has-sub-category"><i class="fas fa-angle-right"></i></span>
            </a>
        </li>
        <!--<li>-->
        <!--    <a href="#" onclick="openSearch()">-->
        <!--        <span class="text-dark"><i class="fas fa-search text-dark"></i></span>-->
        <!--    </a>-->
        <!--</li>-->
        <div class="mobile-menu-helper-bottom"></div>
    </ul>
</div>