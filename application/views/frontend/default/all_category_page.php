<?php

    $category_name        = site_phrase('all_category');

    $sub_category_name    = site_phrase('all_sub_category');

    $per_page = $per_page ?? 5;

?>

<section class="category-course-list-area">

    <div class="container">

        <div class="row">

            <div class="col">

                <div class="category-filter-box filter-box clearfix">

                    <a href = "<?php echo site_url('courses'); ?>" class="btn btn-outline-secondary all-btn"><?php echo site_phrase('all'); ?></a>

                </div>

                <div class="category-course-list">

                    <ul>

                        <?php

                            $this->db->where('status', 'active');

                            $courses = $this->db->get('course', $per_page, $this->uri->segment(3));

                            foreach($courses->result_array() as $course):

                            $instructor_details = $this->user_model->get_all_user($course['user_id'])->row_array();?>

                        <li>

                            <div class="course-box-2">

                                <div class="course-image">

                                    <a href="<?php echo site_url('courses/'.slugify($course['title']).'/'.$course['id']) ?>">

                                        <img src="<?php echo $this->crud_model->get_course_thumbnail_url($course['id']); ?>" alt="" class="img-fluid">

                                    </a>

                                </div>

                                <div class="course-details">

                                    <a href="<?php echo site_url('courses/'.slugify($course['title']).'/'.$course['id']); ?>" class="course-title"><?php echo $course['title']; ?></a>

                                    <a href="<?php echo site_url('home/instructor_page/'.$instructor_details['id']) ?>" class="course-instructor">

                                        <span class="instructor-name"><?php echo $instructor_details['first_name'].' '.$instructor_details['last_name']; ?></span> -

                                    </a>

                                    <div class="course-subtitle">

                                        <?php echo $course['short_description']; ?>

                                    </div>

                                    <div class="course-meta">

                                        <span class=""><i class="fas fa-play-circle"></i>

                                            <?php

                                                $number_of_lessons = $this->crud_model->get_lessons('course', $course['id'])->num_rows();

                                                echo $number_of_lessons.' '.site_phrase('lessons');

                                             ?>

                                        </span>

                                        <span class=""><i class="far fa-clock"></i>

                                            <?php echo $this->crud_model->get_total_duration_of_lesson_by_course_id($course['id']); ?>

                                        </span>

                                        <span class=""><i class="fas fa-closed-captioning"></i><?php echo ucfirst($course['language']); ?></span>

                                    </div>

                                </div>

                                <div class="course-price-rating">

                                    <div class="course-price">

                                        <?php if ($course['is_free_course'] == 1): ?>

                                            <span class="current-price"><?php echo site_phrase('free'); ?></span>

                                        <?php else: ?>

                                          <?php if($course['discount_flag'] == 1): ?>

                                              <span class="current-price"><?php echo currency($course['discounted_price']); ?></span>

                                              <span class="original-price"><?php echo currency($course['price']); ?></span>

                                          <?php else: ?>

                                              <span class="current-price"><?php echo currency($course['price']); ?></span>

                                          <?php endif; ?>

                                        <?php endif; ?>

                                    </div>

                                    <div class="rating">

                                        <?php

                                            $total_rating =  $this->crud_model->get_ratings('course', $course['id'], true)->row()->rating;

                                            $number_of_ratings = $this->crud_model->get_ratings('course', $course['id'])->num_rows();

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

                                        <span class="d-inline-block average-rating"><?php echo $average_ceil_rating; ?></span>

                                    </div>

                                    <div class="rating-number">

                                        <?php echo $this->crud_model->get_ratings('course', $course['id'])->num_rows().' '.site_phrase('ratings'); ?>

                                    </div>

                                </div>

                            </div>

                        </li>

                    <?php endforeach; ?>

                    </ul>

                </div>

                <nav>

                    <?php echo $this->pagination->create_links(); ?>

                </nav>

            </div>

        </div>

    </div>

</section>

