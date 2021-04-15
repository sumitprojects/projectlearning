<div class="row ">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i>
                    <?php echo get_phrase('course_subscription_settings'); ?></h4>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>

<div class="row justify-content-center">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="col-lg-12">
                    <form class="required-form" action="<?php echo site_url('addons/course_subscription/settings/update'); ?>"
                        method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <!-- offline-erp -->
                            <div class="form-group">
                                <label><?php echo get_phrase('course_expiry_notice'); ?><span
                                        class="required">*</span></label><br>
                                <input type="radio" id="course_expiry_notice_active" value="1" name="course_expiry_notice"
                                    <?php if(get_frontend_settings('course_expiry_notice') == 1) echo 'checked'; ?>> <label
                                    for="course_expiry_notice_active"><?php echo get_phrase('active'); ?></label>
                                &nbsp;&nbsp;
                                <input type="radio" id="course_expiry_notice_inactive" value="0" name="course_expiry_notice"
                                    <?php if(get_frontend_settings('course_expiry_notice') == 0) echo 'checked'; ?>> <label
                                    for="course_expiry_notice_inactive"><?php echo get_phrase('inactive'); ?></label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary"><?php echo get_phrase('save'); ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>