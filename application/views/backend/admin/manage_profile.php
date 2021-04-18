<div class="row ">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i>
                    <?php echo get_phrase('manage_profile'); ?></h4>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>

<div class="row ">
    <div class="col-xl-7">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3"><?php echo get_phrase('basic_info'); ?></h4>
                <?php
				foreach($edit_data as $row):
					$social_links = json_decode($row['social_links'], true);?>
                <?php echo form_open(site_url('admin/manage_profile/update_profile_info/'.$row['id']) , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top' , 'enctype' => 'multipart/form-data'));?>

                <div class="form-group">
                    <label><?php echo get_phrase('first_name');?></label>
                    <input type="text" class="form-control" name="first_name" value="<?php echo $row['first_name'];?>"
                        required />
                </div>

                <div class="form-group">
                    <label><?php echo get_phrase('last_name');?></label>
                    <input type="text" class="form-control" name="last_name" value="<?php echo $row['last_name'];?>"
                        required />
                </div>

                <div class="form-group">
                    <label><?php echo get_phrase('email');?></label>
                    <input type="email" class="form-control" name="email" value="<?php echo $row['email'];?>"
                        required />
                </div>

                <div class="form-group">
                    <label><?php echo get_phrase('facebook_link');?></label>
                    <input type="text" class="form-control" name="facebook_link"
                        value="<?php echo $social_links['facebook'];?>" required />
                </div>

                <div class="form-group">
                    <label><?php echo get_phrase('twitter_link');?></label>
                    <input type="text" class="form-control" name="twitter_link"
                        value="<?php echo $social_links['twitter'];?>" required />
                </div>

                <div class="form-group">
                    <label><?php echo get_phrase('linkedin_link');?></label>
                    <input type="text" class="form-control" name="linkedin_link"
                        value="<?php echo $social_links['linkedin'];?>" required />
                </div>

                <div class="form-group">
                    <label><?php echo get_phrase('a_short_title_about_yourself'); ?></label>
                    <textarea rows="5" id="short-title" class="form-control" name="title"
                        placeholder="<?php echo get_phrase('a_short_title_about_yourself'); ?>"
                        required><?php echo $row['title']; ?></textarea>
                </div>

                <div class="form-group">
                    <label><?php echo get_phrase('biography'); ?></label>
                    <textarea rows="5" class="form-control" name="biography" id="biography"
                        placeholder="<?php echo get_phrase('biography'); ?>"
                        required><?php echo $row['biography']; ?></textarea>
                </div>

                <div class="form-group ">
                    <label  for="address"><?php echo get_phrase('address'); ?><span
                            class="required">*</span></label>
					<input type="text" class="form-control" id="address" name="address"
						value="<?php echo $row['address']; ?>">
                </div>
                <div class="form-group ">
                    <label  for="pincode"><?php echo get_phrase('pincode'); ?><span
                            class="required">*</span></label>
                        <input type="text" class="form-control" id="pincode" name="pincode"
                            value="<?php echo $row['pincode']; ?>">
                </div>
                <div class="form-group ">
                    <label  for="state"><?php echo get_phrase('state'); ?><span
                            class="required">*</span></label>
					<input type="text" class="form-control" id="state" name="state"
						value="<?php echo $row['state']; ?>">
                </div>
                <div class="form-group ">
                    <label  for="country"><?php echo get_phrase('country'); ?><span
                            class="required">*</span></label>
                        <input type="text" class="form-control" id="country" name="country"
                            value="<?php echo $row['country']; ?>">
                </div>
                <div class="form-group ">
                    <label  for="mob_no"><?php echo get_phrase('mobile_no'); ?><span
                            class="required">*</span></label>
                        <input type="text" class="form-control" id="mob_no" name="mob_no"
                            value="<?php echo $row['mob_no']; ?>">
                </div>
                <div class="form-group ">
                    <label ><?php echo get_phrase('gender'); ?><span
                            class="required">*</span></label><br>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="male_radio" value="male" name="gender"
                                required <?php  echo $row['gender'] == 'male'?'checked':''; ?>>
                            <label class="custom-control-label"
                                for="male_radio"><?php echo get_phrase('male'); ?></label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="female_radio" value="female"
                                name="gender" required <?php  echo $row['gender'] == 'female'?'checked':''; ?>>
                            <label class="custom-control-label"
                                for="female_radio"><?php echo get_phrase('female'); ?></label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="other_radio" value="other"
                                name="gender" required <?php  echo $row['gender'] == 'other'?'checked':''; ?>>
                            <label class="custom-control-label"
                                for="other_radio"><?php echo get_phrase('other'); ?></label>
                        </div>
                </div>
                <div class="form-group">
                    <label> <?php echo get_phrase('photo'); ?>
                        <small>(<?php echo get_phrase('the_image_size_should_be_any_square_image'); ?>)</small> </label>
                    <div class="d-flex mt-2">
                        <div class="">
                            <img class="rounded-circle img-thumbnail"
                                src="<?php echo $this->user_model->get_user_image_url($this->session->userdata('user_id')); ?>"
                                alt="" style="height: 50px; width: 50px;">
                        </div>
                        <div class="flex-grow-1 pl-2">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="user_image" id="user_image"
                                        onchange="changeTitleOfImageUploader(this)" accept="image/*">
                                    <label class="custom-file-label ellipsis"
                                        for=""><?php echo get_phrase('choose_file'); ?></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <button type="submit" class="btn btn-primary"><?php echo get_phrase('update_profile');?></button>
                </div>
                </form>
                <?php
			endforeach;
			?>
                </form>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div>
    <div class="col-xl-5">
        <div class="card">
            <div class="card-body">
                <?php foreach($edit_data as $row): ?>
                <?php echo form_open(site_url('admin/manage_profile/change_password/'.$row['id']) , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                <div class="form-group">
                    <label><?php echo get_phrase('current_password');?></label>
                    <input type="password" class="form-control" name="current_password" value="" required />
                </div>
                <div class="form-group">
                    <label><?php echo get_phrase('new_password');?></label>
                    <input type="password" class="form-control" name="new_password" value="" required />
                </div>
                <div class="form-group">
                    <label><?php echo get_phrase('confirm_new_password');?></label>
                    <input type="password" class="form-control" name="confirm_password" value="" required />
                </div>
                <div class="row justify-content-center">
                    <button type="submit" class="btn btn-info"><?php echo get_phrase('update_password');?></button>
                </div>
                </form>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    initSummerNote(['#biography']);
});
</script>