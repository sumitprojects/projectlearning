<div class="row ">

    <div class="col-xl-12">

        <div class="card">

            <div class="card-body">

                <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i>

                    <?php echo get_phrase('add_new_magazine'); ?></h4>

            </div> <!-- end card body-->

        </div> <!-- end card -->

    </div><!-- end col-->

</div>



<div class="row">

    <div class="col-xl-12">

        <div class="card">

            <div class="card-body">

                <h4 class="header-title mb-3"><?php echo get_phrase('magazine_adding_form'); ?>

                    <a href="<?php echo site_url('admin/magazines'); ?>"

                        class="alignToTitle btn btn-outline-secondary btn-rounded btn-sm"> <i

                            class=" mdi mdi-keyboard-backspace"></i>

                        <?php echo get_phrase('back_to_magazine_list'); ?></a>

                </h4>

                <div class="row w-100">

                    <div class="col-xl-12">

                        <form class="required-form" action="<?php echo site_url('admin/magazine_actions/add'); ?>"

                            method="post" enctype="multipart/form-data">

                            <div id="basicwizard">



                                <ul class="nav nav-pills nav-justified form-wizard-header">

                                    <li class="nav-item">

                                        <a href="#basic" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">

                                            <i class="mdi mdi-fountain-pen-tip mr-1"></i>

                                            <span class="d-none d-sm-inline"><?php echo get_phrase('basic'); ?></span>

                                        </a>

                                    </li>

                                    <li class="nav-item">

                                        <a href="#pricing" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">

                                            <i class="mdi mdi-currency-cny mr-1"></i>

                                            <span class="d-none d-sm-inline"><?php echo get_phrase('pricing'); ?></span>

                                        </a>

                                    </li>

                                    <li class="nav-item">

                                        <a href="#media" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">

                                            <i class="mdi mdi-library-video mr-1"></i>

                                            <span class="d-none d-sm-inline"><?php echo get_phrase('media'); ?></span>

                                        </a>

                                    </li>

                                    <li class="nav-item">

                                        <a href="#seo" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">

                                            <i class="mdi mdi-tag-multiple mr-1"></i>

                                            <span class="d-none d-sm-inline"><?php echo get_phrase('seo'); ?></span>

                                        </a>

                                    </li>

                                    <li class="nav-item">

                                        <a href="#finish" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">

                                            <i class="mdi mdi-checkbox-marked-circle-outline mr-1"></i>

                                            <span class="d-none d-sm-inline"><?php echo get_phrase('finish'); ?></span>

                                        </a>

                                    </li>

                                    <li class="w-100 bg-white pb-3">

                                        <!--ajax page loader-->

                                        <div class="ajax_loader w-100">

                                            <div class="ajax_loaderBar"></div>

                                        </div>

                                        <!--end ajax page loader-->

                                    </li>

                                </ul>



                                <div class="tab-content b-0 mb-0">

                                    <div class="tab-pane" id="basic">

                                        <div class="row justify-content-center">

                                            <div class="col-xl-8">

                                                <input type="hidden" name="course_type" value="magazine">

                                                <div class="form-group row mb-3">

                                                    <label class="col-md-2 col-form-label"

                                                        for="magazine_title"><?php echo get_phrase('magazine_title'); ?>

                                                        <span class="required">*</span> </label>

                                                    <div class="col-md-10">

                                                        <input type="text" class="form-control" id="magazine_title"

                                                            name="title"

                                                            placeholder="<?php echo get_phrase('enter_magazine_title'); ?>"

                                                            required>

                                                    </div>

                                                </div>

                                                <?php if (addon_status('course_subscription')): ?>

                                                <div class="form-group row mb-3">

                                                    <label class="col-md-2 col-form-label"

                                                        for="course_expiry"><?php echo get_phrase('magazine_expiry'); ?><span

                                                            class="required">*</span></label>

                                                    <div class="col-md-10">

                                                        <input name="course_expiry" id="course_expiry" type="number"

                                                            min="0" value="999999" class="form-control" required />

                                                    </div>

                                                </div>

                                                <?php endif; ?>

                                                <div class="form-group row mb-3">

                                                    <label class="col-md-2 col-form-label"

                                                        for="short_description"><?php echo get_phrase('short_description'); ?></label>

                                                    <div class="col-md-10">

                                                        <textarea name="short_description" id="short_description"

                                                            class="form-control"></textarea>

                                                    </div>

                                                </div>

                                                <div class="form-group row mb-3">

                                                    <label class="col-md-2 col-form-label"

                                                        for="description"><?php echo get_phrase('description'); ?></label>

                                                    <div class="col-md-10">

                                                        <textarea name="description" id="description"

                                                            class="form-control"></textarea>

                                                    </div>

                                                </div>

                                                <div class="form-group row mb-3">

                                                    <label class="col-md-2 col-form-label"

                                                        for="sub_category_id"><?php echo get_phrase('category'); ?><span

                                                            class="required">*</span></label>

                                                    <div class="col-md-10">

                                                        <select class="form-control select2" data-toggle="select2"

                                                            name="sub_category_id" id="sub_category_id" required>

                                                            <option value="">

                                                                <?php echo get_phrase('select_a_category'); ?></option>

                                                            <?php foreach ($categories->result_array() as $category): ?>

                                                            <optgroup label="<?php echo $category['name']; ?>">

                                                                <?php $sub_categories = $this->crud_model->get_sub_categories($category['id']);

                                                                    foreach ($sub_categories as $sub_category): ?>

                                                                <option value="<?php echo $sub_category['id']; ?>">

                                                                    <?php echo $sub_category['name']; ?></option>

                                                                <?php endforeach; ?>

                                                            </optgroup>

                                                            <?php endforeach; ?>

                                                        </select>

                                                        <small

                                                            class="text-muted"><?php echo get_phrase('select_sub_category'); ?></small>

                                                    </div>

                                                </div>

                                                <div class="form-group row mb-3">

                                                    <label class="col-md-2 col-form-label"

                                                        for="language_made_in"><?php echo get_phrase('language_made_in'); ?></label>

                                                    <div class="col-md-10">

                                                        <select class="form-control select2" data-toggle="select2"

                                                            name="language_made_in" id="language_made_in">

                                                            <?php foreach ($languages as $language): ?>

                                                            <option value="<?php echo $language; ?>">

                                                                <?php echo ucfirst($language); ?></option>

                                                            <?php endforeach; ?>

                                                        </select>

                                                    </div>

                                                </div>

                                                <div class="form-group row mb-3">

                                                    <div class="offset-md-2 col-md-10">

                                                        <div class="custom-control custom-checkbox">

                                                            <input type="checkbox" class="custom-control-input"

                                                                name="is_top_course" id="is_top_course" value="1">

                                                            <label class="custom-control-label"

                                                                for="is_top_course"><?php echo get_phrase('check_if_this_magazine_is_top_magazine'); ?></label>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div> <!-- end col -->

                                        </div> <!-- end row -->

                                    </div> <!-- end tab pane -->

                                    <div class="tab-pane" id="pricing">

                                        <div class="row justify-content-center">

                                            <div class="col-xl-8">

                                                <div class="form-group row mb-3">

                                                    <div class="offset-md-2 col-md-10">

                                                        <div class="custom-control custom-checkbox">

                                                            <input type="checkbox" class="custom-control-input"

                                                                name="is_free_course" id="is_free_course" value="1"

                                                                onclick="togglePriceFields(this.id)">

                                                            <label class="custom-control-label"

                                                                for="is_free_course"><?php echo get_phrase('check_if_this_is_a_free_magazine'); ?></label>

                                                        </div>

                                                    </div>

                                                </div>



                                                <div class="paid-magazine-stuffs">

                                                    <div class="form-group row mb-3">

                                                        <label class="col-md-2 col-form-label"

                                                            for="price"><?php echo get_phrase('magazine_price').' ('.currency_code_and_symbol().')'; ?></label>

                                                        <div class="col-md-10">

                                                            <input type="number" class="form-control" id="price"

                                                                name="price"

                                                                placeholder="<?php echo get_phrase('enter_magazine_price'); ?>"

                                                                min="0">

                                                        </div>

                                                    </div>



                                                    <div class="form-group row mb-3">

                                                        <div class="offset-md-2 col-md-10">

                                                            <div class="custom-control custom-checkbox">

                                                                <input type="checkbox" class="custom-control-input"

                                                                    name="discount_flag" id="discount_flag" value="1">

                                                                <label class="custom-control-label"

                                                                    for="discount_flag"><?php echo get_phrase('check_if_this_magazine_has_discount'); ?></label>

                                                            </div>

                                                        </div>

                                                    </div>



                                                    <div class="form-group row mb-3">

                                                        <label class="col-md-2 col-form-label"

                                                            for="discounted_price"><?php echo get_phrase('discounted_price').' ('.currency_code_and_symbol().')'; ?></label>

                                                        <div class="col-md-10">

                                                            <input type="number" class="form-control"

                                                                name="discounted_price" id="discounted_price"

                                                                onkeyup="calculateDiscountPercentage(this.value)"

                                                                min="0">

                                                            <small

                                                                class="text-muted"><?php echo get_phrase('this_magazine_has'); ?>

                                                                <span id="discounted_percentage"

                                                                    class="text-danger">0%</span>

                                                                <?php echo get_phrase('discount'); ?></small>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div> <!-- end col -->

                                        </div> <!-- end row -->

                                    </div> <!-- end tab-pane -->

                                    <div class="tab-pane" id="media">

                                        <div class="row justify-content-center">

                                            <div class="col-xl-8">

                                                <div class="form-group row mb-3">

                                                    <label class="col-md-2 col-form-label"

                                                        for="magazine_overview_provider"><?php echo get_phrase('magazine_overview_provider'); ?></label>

                                                    <div class="col-md-10">

                                                        <select class="form-control select2" data-toggle="select2"

                                                            name="course_overview_provider"

                                                            id="magazine_overview_provider">

                                                            <option value="youtube"><?php echo get_phrase('youtube'); ?>

                                                            </option>

                                                            <option value="vimeo"><?php echo get_phrase('vimeo'); ?>

                                                            </option>

                                                            <option value="html5"><?php echo get_phrase('HTML5'); ?>

                                                            </option>

                                                        </select>

                                                    </div>

                                                </div>

                                            </div> <!-- end col -->



                                            <div class="col-xl-8">

                                                <div class="form-group row mb-3">

                                                    <label class="col-md-2 col-form-label"

                                                        for="magazine_overview_url"><?php echo get_phrase('magazine_overview_url'); ?></label>

                                                    <div class="col-md-10">

                                                        <input type="text" class="form-control"

                                                            name="course_overview_url" id="magazine_overview_url"

                                                            placeholder="E.g: https://www.youtube.com/watch?v=oBtf8Yglw2w">

                                                    </div>

                                                </div>

                                            </div> <!-- end col -->

                                            <!-- this portion will be generated theme wise from the theme-config.json file Starts-->

                                            <?php include 'course_media_add.php'; ?>

                                            <!-- this portion will be generated theme wise from the theme-config.json file Ends-->



                                        </div> <!-- end row -->

                                    </div>

                                    <div class="tab-pane" id="seo">

                                        <div class="row justify-content-center">

                                            <div class="col-xl-8">

                                                <div class="form-group row mb-3">

                                                    <label class="col-md-2 col-form-label"

                                                        for="website_keywords"><?php echo get_phrase('meta_keywords'); ?></label>

                                                    <div class="col-md-10">

                                                        <input type="text" class="form-control bootstrap-tag-input"

                                                            id="meta_keywords" name="meta_keywords"

                                                            data-role="tagsinput" style="width: 100%;"

                                                            placeholder="<?php echo get_phrase('write_a_keyword_and_then_press_enter_button'); ?>"

                                                            . />

                                                    </div>

                                                </div>

                                            </div> <!-- end col -->

                                            <div class="col-xl-8">

                                                <div class="form-group row mb-3">

                                                    <label class="col-md-2 col-form-label"

                                                        for="meta_description"><?php echo get_phrase('meta_description'); ?></label>

                                                    <div class="col-md-10">

                                                        <textarea name="meta_description"

                                                            class="form-control"></textarea>

                                                    </div>

                                                </div>

                                            </div> <!-- end col -->

                                        </div> <!-- end row -->

                                    </div>

                                    <div class="tab-pane" id="finish">

                                        <div class="row">

                                            <div class="col-12">

                                                <div class="text-center">

                                                    <h2 class="mt-0"><i class="mdi mdi-check-all"></i></h2>

                                                    <h3 class="mt-0"><?php echo get_phrase("thank_you"); ?> !</h3>



                                                    <p class="w-75 mb-2 mx-auto">

                                                        <?php echo get_phrase('you_are_just_one_click_away'); ?></p>



                                                    <div class="mb-3 mt-3">

                                                        <button type="button" class="btn btn-primary text-center"

                                                            onclick="checkRequiredFields()"><?php echo get_phrase('submit'); ?></button>

                                                    </div>

                                                </div>

                                            </div> <!-- end col -->

                                        </div> <!-- end row -->

                                    </div>



                                    <ul class="list-inline mb-0 wizard text-center">

                                        <li class="previous list-inline-item">

                                            <a href="javascript::" class="btn btn-info"> <i

                                                    class="mdi mdi-arrow-left-bold"></i> </a>

                                        </li>

                                        <li class="next list-inline-item">

                                            <a href="javascript::" class="btn btn-info"> <i

                                                    class="mdi mdi-arrow-right-bold"></i> </a>

                                        </li>

                                    </ul>



                                </div> <!-- tab-content -->

                            </div> <!-- end #progressbarwizard-->

                        </form>

                    </div>

                </div><!-- end row-->

            </div> <!-- end card-body-->

        </div> <!-- end card-->

    </div>

</div>



<script type="text/javascript">

$(document).ready(function() {

    initSummerNote(['#description']);

});

</script>



<script type="text/javascript">

function priceChecked(elem) {

    if (jQuery('#discountCheckbox').is(':checked')) {



        jQuery('#discountCheckbox').prop("checked", false);

    } else {



        jQuery('#discountCheckbox').prop("checked", true);

    }

}



function topCourseChecked(elem) {

    if (jQuery('#isTopCourseCheckbox').is(':checked')) {



        jQuery('#isTopCourseCheckbox').prop("checked", false);

    } else {



        jQuery('#isTopCourseCheckbox').prop("checked", true);

    }

}



function isFreeCourseChecked(elem) {



    if (jQuery('#' + elem.id).is(':checked')) {

        $('#price').prop('required', false);

    } else {

        $('#price').prop('required', true);

    }

}



function calculateDiscountPercentage(discounted_price) {

    if (discounted_price > 0) {

        var actualPrice = jQuery('#price').val();

        if (actualPrice > 0) {

            var reducedPrice = actualPrice - discounted_price;

            var discountedPercentage = (reducedPrice / actualPrice) * 100;

            if (discountedPercentage > 0) {

                jQuery('#discounted_percentage').text(discountedPercentage.toFixed(2) + '%');



            } else {

                jQuery('#discounted_percentage').text('<?php echo '0%'; ?>');

            }

        }

    }

}

</script>



<style media="screen">

body {

    overflow-x: hidden;

}

</style>