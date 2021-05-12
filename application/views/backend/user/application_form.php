<?php 

$social_links = json_decode($user_details['social_links'], true);
?>

<h4 class="header-title mb-3"><?php echo get_phrase('instructor_application_form'); ?></h4>
<div class="alert alert-info" role="alert">
    <!-- <h4 class="alert-heading"><?php echo get_phrase('heads_up'); ?>!</h4> -->
    <p><?php echo get_settings('instructor_application_note'); ?></p>
</div>
<form class="required-form" action="<?php echo site_url('user/become_an_instructor'); ?>" method="post"
    enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $this->session->userdata('user_id'); ?>">
    <div class="form-group">
        <label for="name"><?php echo get_phrase('name'); ?></label>
        <input type="text" class="form-control" name="name" id="name" aria-describedby="name-help"
            placeholder="<?php echo get_phrase('your_name_will_go_here'); ?>"
            value="<?php echo $user_details['first_name'].' '.$user_details['last_name']; ?>" readonly required>
        <small id="name-help" class="form-text text-muted"><?php echo get_phrase('your_name_is_required'); ?></small>
    </div>
    <div class="form-group">
        <label for="email"><?php echo get_phrase('email_address'); ?></label>
        <input type="email" class="form-control" name="email" id="email" aria-describedby="email-help"
            placeholder="<?php echo get_phrase('your_email_will_go_here'); ?>"
            value="<?php echo $user_details['email']; ?>" readonly required>
        <small id="email-help" class="form-text text-muted"><?php echo get_phrase('your_email_is_required'); ?></small>
    </div>
    <!-- <div class="form-group">
        <label for="address"><?php echo get_phrase('address'); ?></label>
        <textarea name="address" id="address" class="form-control" required></textarea>
        <small id="address-help"
            class="form-text text-muted"><?php echo get_phrase('your_address_is_required'); ?></small>
    </div> -->
    <div class="form-group">
        <label for="phone"><?php echo get_phrase('phone_number'); ?></label>
        <input type="text" class="form-control" name="phone" value="<?=$user_details['mob_no']?>" id="phone" aria-describedby="phone-help"
            placeholder="<?php echo get_phrase('your_phone_number_will_go_here'); ?>" required>
        <small id="phone-help"
            class="form-text text-muted"><?php echo get_phrase('your_phone_number_is_required'); ?></small>
    </div>
    <div class="form-group">
        <label for="linkedin"><?php echo get_phrase('linkedin_profile'); ?></label>
        <input type="text" class="form-control" name="linkedin" id="linkedin" value="<?=$social_links['linkedin']?>" aria-describedby="linkedin-help"
            placeholder="<?php echo get_phrase('your_linkedin_profile_url_will_go_here'); ?>" required>
        <small id="linkedin-help" class="form-text text-muted"><?php echo get_phrase('your_linkedin_profile_url_is_required'); ?></small>
    </div>
    <!-- <div class="form-group">
        <label for="message"><?php echo get_phrase('any_message'); ?></label>
        <textarea name="message" id="message" class="form-control"></textarea>
        <small id="message-help"
            class="form-text text-muted"><?php echo get_phrase('if_any_message_you_want_to_share'); ?></small>
    </div> -->
    <div class="form-group">
        <label for="que1">Why do you want to be a Hospitality Influencer?</label>
        <input type="text" class="form-control" name="que1" id="que1" aria-describedby="que1-help"
            placeholder="<?php echo get_phrase('your_answer_will_go_here'); ?>" required>
        <small id="que1-help" class="form-text text-muted"><?php echo get_phrase('your_answer_is_required'); ?></small>
    </div>
    <div class="form-group">
        <label for="que2">Tell us about your Field of Interest and teaching experience.</label>
        <input type="text" class="form-control" name="que2" id="que2" aria-describedby="que2-help"
            placeholder="<?php echo get_phrase('your_answer_will_go_here'); ?>" required>
        <small id="que2-help" class="form-text text-muted"><?php echo get_phrase('your_answer_is_required'); ?></small>
    </div>
    <div class="form-group">
        <label for="que3">How many hours can you invest weekly for this opportunity?</label>
        <input type="number" min="0" class="form-control" name="que3" id="que3" aria-describedby="que3-help"
            placeholder="<?php echo get_phrase('your_answer_will_go_here'); ?>" required>
        <small id="que3-help" class="form-text text-muted"><?php echo get_phrase('your_answer_is_required'); ?></small>
    </div>
    <div class="form-group">
        <label> <?php echo get_phrase('document'); ?><br>
        <small id="attachment-help"
            class="form-text text-muted"><?php echo get_phrase('if_any_document_you_want_to_share'); ?> ( .doc, .docs,
            .pdf, .txt, .png, .jpg, jpeg ) <?php echo get_phrase('are_accepted'); ?></small></label>
        <div class="input-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="document" name="document"
                    onchange="changeTitleOfImageUploader(this)" required>
                <label class="custom-file-label" for="document"><?php echo get_phrase('document'); ?></label>
            </div>
        </div>
        <small id="attachment-help"
            class="form-text text-muted">Resume for Individuals / Company Profile for Institutions</small>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="text-center">
                <div class="mb-3 mt-3">
                    <button type="button" class="btn btn-primary text-center"
                        onclick="checkRequiredFields()"><?php echo get_phrase('apply'); ?></button>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
</form>

