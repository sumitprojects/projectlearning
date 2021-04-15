<div class="col-lg-9  order-md-1 course_col" id="video_player_area">
    <!-- <div class="" style="background-color: #333;"> -->
    <div class="" style="text-align: center;">
        <?php
        $lesson_details = $this->crud_model->get_lessons('lesson', $lesson_id)->row_array();
        $lesson_thumbnail_url = $this->crud_model->get_lesson_thumbnail_url($lesson_id);
        $opened_section_id = $lesson_details['section_id'];
        // If the lesson type is video
        // i am checking the null and empty values because of the existing users does not have video in all video lesson as type
                ?>
        <div class="mt-5">
            <div class="ipgs-flipbook"
                data-pdf-src="<?php echo base_url().'uploads/lesson_files/'.$lesson_details['attachment']; ?>"
                data-book-engine="onepageswipe"></div>
        </div>
    </div>
</div>