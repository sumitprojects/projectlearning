<?php if(get_frontend_settings('recaptcha_status')): ?>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<?php endif; ?>

<section class="category-course-list-area">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-9">

                <div class="user-dashboard-box mt-3">

                    <div class="user-dashboard-content w-100 login-form hidden">

                        <div class="content-title-box">

                            <div class="title">
                                <h2 class="text-uppercase"><?php echo site_phrase('login'); ?></h2>
                            </div>

                            <div class="subtitle"><?php echo site_phrase('start_learning'); ?>.</div>

                        </div>
                        <?php if ($this->session->flashdata('error_message')):?>
                                        <div class="alert alert-danger" role="alert">
                                        <?php echo $this->session->flashdata("error_message");?>
                                    </div>
                                    <?php endif;?>

                        <form action="<?php echo site_url('login/validate_login/user'); ?>" method="post" id="login">

                            <div class="content-box">

                                <div class="basic-group">

                                    <div class="form-group">

                                        <label for="login-email"><span class="input-field-icon"><i
                                                    class="fas fa-envelope"></i></span>
                                            <?php echo site_phrase('email'); ?>:</label>

                                        <input type="email" class="form-control" name="email" id="login-email"
                                            placeholder="<?php echo site_phrase('email'); ?>" required>

                                    </div>

                                    <div class="form-group">

                                        <label for="login-password"><span class="input-field-icon"><i
                                                    class="fas fa-lock"></i></span>
                                            <?php echo site_phrase('password'); ?>:</label>

                                        <input type="password" class="form-control" name="password"
                                            placeholder="<?php echo site_phrase('password'); ?>" required>

                                    </div>

                                    <?php if(get_frontend_settings('recaptcha_status')): ?>

                                    <div class="form-group">

                                        <div class="g-recaptcha"
                                            data-sitekey="<?php echo get_frontend_settings('recaptcha_sitekey'); ?>">
                                        </div>

                                    </div>

                                    <?php endif; ?>

                                </div>

                            </div>

                            <div class="content-update-box">

                                <button class="btn btn-primary text-uppercase"
                                    type="submit"><?php echo site_phrase('login'); ?></button>

                            </div>

                            <div class="forgot-pass text-center">

                                <span>or</span>

                                <a href="javascript:;" onclick="toggoleForm('forgot_password')"
                                    class="text-theme"><?php echo site_phrase('forgot_password'); ?></a>

                            </div>

                            <div class="account-have text-center">

                                <?php echo site_phrase('do_not_have_an_account'); ?>? <a href="javascript:;"
                                    onclick="toggoleForm('registration')"
                                    class="text-theme"><?php echo site_phrase('sign_up'); ?></a>

                            </div>

                        </form>

                    </div>



                    <div class="user-dashboard-content w-100 register-form">

                        <div class="content-title-box">

                            <div class="title">
                                <h2 class="text-uppercase"><?php echo site_phrase('sign_up'); ?></h2>
                            </div>

                            <div class="subtitle"><?php echo site_phrase('be_the_part_of_revolution'); ?>.</div>

                        </div>

                        <form action="<?php echo site_url('login/register'); ?>" method="post" id="sign_up">

                            <div class="content-box">

                                <div class="basic-group">

                                    <div class="form-group">

                                        <label for="first_name"><span class="input-field-icon"><i
                                                    class="fas fa-user"></i></span>
                                            <?php echo site_phrase('first_name'); ?>:</label>

                                        <input type="text" class="form-control" name="first_name" id="first_name"
                                            placeholder="<?php echo site_phrase('first_name'); ?>" value="" required>

                                    </div>

                                    <div class="form-group">

                                        <label for="last_name"><span class="input-field-icon"><i
                                                    class="fas fa-user"></i></span>
                                            <?php echo site_phrase('last_name'); ?>:</label>

                                        <input type="text" class="form-control" name="last_name" id="last_name"
                                            placeholder="<?php echo site_phrase('last_name'); ?>" value="" required>

                                    </div>

                                    <div class="form-group">

                                        <label for="address"><span class="input-field-icon"><i
                                                    class="fa fa-address-book"></i></span>
                                            <?php echo site_phrase('address'); ?>:</label>

                                        <input type="text" class="form-control" name="address" id="address"
                                            placeholder="<?php echo site_phrase('address'); ?>" value="" required>

                                    </div>

                                    <div class="form-group">

                                        <label for="city"><span class="input-field-icon"><i
                                                    class="fa fa-map-signs"></i></span>
                                            <?php echo site_phrase('city'); ?>:</label>

                                        <input type="text" class="form-control" name="city" id="city"
                                            placeholder="<?php echo site_phrase('city'); ?>" value="" required>

                                    </div>

                                    <div class="form-group">

                                        <label for="pincode"><span class="input-field-icon"><i
                                                    class="fa fa-map-marker-alt"></i></span>
                                            <?php echo site_phrase('pincode'); ?>:</label>

                                        <input type="text" class="form-control" name="pincode" id="pincode"
                                            placeholder="<?php echo site_phrase('pincode'); ?>" value="" required>

                                    </div>


                                    <div class="form-group">

                                        <label for="state"><span class="input-field-icon"><i
                                                    class="fa fa-map"></i></span>
                                            <?php echo site_phrase('state'); ?>:</label>

                                        <input type="text" class="form-control" name="state" id="state"
                                            placeholder="<?php echo site_phrase('state'); ?>" value="" required>

                                    </div>

                                    <div class="form-group">

                                        <label for="country"><span class="input-field-icon"><i
                                                    class="fa fa-globe"></i></span>
                                            <?php echo site_phrase('country'); ?>:</label>

                                        <input type="text" class="form-control" name="country" id="country"
                                            placeholder="<?php echo site_phrase('country'); ?>" value="" required>

                                    </div>

                                    <div class="form-group">

                                        <label for="mob_no"><span class="input-field-icon"><i
                                                    class="fa fa-mobile-alt"></i></span>
                                            <?php echo site_phrase('mob_no'); ?>:</label>

                                        <input type="text" class="form-control" name="mob_no" id="mob_no"
                                            placeholder="<?php echo site_phrase('mob_no'); ?>" value="" required>

                                    </div>

                                    <div class="form-group">

                                        <label for="dob"><span class="input-field-icon"><i
                                                    class="fa fa-calendar-check"></i></span>
                                            <?php echo site_phrase('dob'); ?>:</label>

                                        <input type="date" class="form-control" name="dob" id="dob"
                                            placeholder="<?php echo site_phrase('dob'); ?>" value="" required>

                                    </div>

                                    <div class="form-group">

                                        <label for="gender"><span class="input-field-icon"><i
                                                    class="fa fa-venus-mars"></i></span>
                                            <?php echo site_phrase('gender'); ?>:</label><br>
                                            <?php echo site_phrase('male'); ?>
                                            <input type="radio" class="form-control-inline" name="gender" value="male" required>
                                            <?php echo site_phrase('female'); ?>
                                            <input type="radio" class="form-control-inline" name="gender" value="female" required>
                                            <?php echo site_phrase('other'); ?>
                                            <input type="radio" class="form-control-inline" name="gender" value="other" required>
                                    </div>

                                    <div class="form-group">

                                        <label for="registration-email"><span class="input-field-icon"><i
                                                    class="fas fa-envelope"></i></span>
                                            <?php echo site_phrase('email'); ?>:</label>

                                        <input type="email" class="form-control" name="email" id="registration-email"
                                            placeholder="<?php echo site_phrase('email'); ?>" value="" required>

                                    </div>

                                    <div class="form-group">

                                        <label for="registration-password"><span class="input-field-icon"><i
                                                    class="fas fa-lock"></i></span>
                                            <?php echo site_phrase('password'); ?>:</label>

                                        <input type="password" class="form-control" name="password"
                                            id="registration-password"
                                            placeholder="<?php echo site_phrase('password'); ?>" value="" required>

                                    </div>

                                    <?php if(get_frontend_settings('recaptcha_status')): ?>

                                    <div class="form-group">

                                        <div class="g-recaptcha"
                                            data-sitekey="<?php echo get_frontend_settings('recaptcha_sitekey'); ?>">
                                        </div>

                                    </div>

                                    <?php endif; ?>

                                </div>

                            </div>

                            <div class="content-update-box">

                                <button class="btn btn-primary text-uppercase"
                                    type="submit"><?php echo site_phrase('sign_up'); ?></button>

                            </div>

                            <div class="account-have text-center">

                                <?php echo site_phrase('already_have_an_account'); ?>? <a href="javascript:;"
                                    onclick="toggoleForm('login')"
                                    class="text-theme"><?php echo site_phrase('login'); ?></a>

                            </div>

                        </form>

                    </div>



                    <div class="user-dashboard-content w-100 forgot-password-form hidden">

                        <div class="content-title-box">

                            <div class="title">
                                <h2 class="text-uppercase"><?php echo site_phrase('forgot_password'); ?></h2>
                            </div>

                            <div class="subtitle">
                                <?php echo site_phrase('provide_your_email_address_to_get_password'); ?>.</div>

                        </div>

                        <form action="<?php echo site_url('login/forgot_password/frontend'); ?>" method="post"
                            id="forgot_password">

                            <div class="content-box">

                                <div class="basic-group">

                                    <div class="form-group">

                                        <label for="forgot-email"><span class="input-field-icon"><i
                                                    class="fas fa-envelope"></i></span>
                                            <?php echo site_phrase('email'); ?>:</label>

                                        <input type="email" class="form-control" name="email" id="forgot-email"
                                            placeholder="<?php echo site_phrase('email'); ?>" value="" required>

                                        <small
                                            class="form-text text-muted"><?php echo site_phrase('provide_your_email_address_to_get_password'); ?>.</small>

                                    </div>

                                    <?php if(get_frontend_settings('recaptcha_status')): ?>

                                    <div class="form-group">

                                        <div class="g-recaptcha"
                                            data-sitekey="<?php echo get_frontend_settings('recaptcha_sitekey'); ?>">
                                        </div>

                                    </div>

                                    <?php endif; ?>

                                </div>

                            </div>

                            <div class="content-update-box">

                                <button class="btn btn-primary text-uppercase"
                                    type="submit"><?php echo site_phrase('reset_password'); ?></button>

                            </div>

                            <div class="forgot-pass text-center">

                                <?php echo site_phrase('want_to_go_back'); ?>? <a href="javascript:;"
                                    onclick="toggoleForm('login')"
                                    class="text-theme"><?php echo site_phrase('login'); ?></a>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>





<script type="text/javascript">
function toggoleForm(form_type) {

    if (form_type === 'login') {

        $('.login-form').show();

        $('.forgot-password-form').hide();

        $('.register-form').hide();

    } else if (form_type === 'registration') {

        $('.login-form').hide();

        $('.forgot-password-form').hide();

        $('.register-form').show();

    } else if (form_type === 'forgot_password') {

        $('.login-form').hide();

        $('.forgot-password-form').show();

        $('.register-form').hide();

    }

}
</script>