<?php 
$rating = isset($rating)?$rating : NULL;
?>



<div class="row ">

    <div class="col-xl-12">

        <div class="card">

            <div class="card-body">

                <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i>

                    <?php echo get_phrase('rating_list'); ?></h4>

            </div> <!-- end card body-->

        </div> <!-- end card -->

    </div><!-- end col-->

</div>

<div class="row justify-content-center">

    <div class="col-xl-12">

        <div class="card">

            <div class="card-body">

                <h4 class="mb-3 header-title"><?php echo get_phrase('add_rating'); ?></h4>

                <?=validation_errors()?>

                <form action="<?=site_url('admin/manage_ratings/add')?>" method="post">
                    <?php if(!empty($rating)):?>
                    <input type="hidden" name="id" value="<?=$rating['id']?>">
                    <?php endif; ?>

                    <div class="form-group mb-3">
                        <label for="full_name"><?php echo get_phrase('full_name'); ?></label>
                        <?php if(isset($rating['user'])):?>
                        <input type="text" class="form-control" placeholder="Eg. John Doe"
                            value="<?=ucwords($rating['user'])?>" disabled>
                        <?php else: ?>
                        <input type="text" id="full_name" name="full_name" class="form-control" placeholder="Eg. John Doe"
                        value="<?=!empty($rating)? $rating['full_name']:''?>" required>
                        <?php endif; ?>
                    </div>

                    <div class="form-group mb-3">

                    <label for="rating"><?php echo get_phrase('rating'); ?></label>

                    <input type="number" id="rating" name="rating" class="form-control"
                        value="<?=!empty($rating)? $rating['rating']:''?>" required min="0" max="5">
                    </div>
                    <div class="form-group mb-3">
                        <label for="course_id"><?php echo get_phrase('course'); ?><span
                                class="required">*</span> </label>
                        <select class="form-control select2" data-toggle="select2" name="course_id" id="course_id"
                            required>
                            <option value=""><?php echo get_phrase('select_a_course'); ?></option>
                            <?php foreach ($courses as $course):
                                if ($course['status'] != 'active') continue;?>
                            <option value="<?php echo $course['id'] ?>"><?php echo ucwords($course['course_type']) . ' - ' .$course['title']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="review"><?php echo get_phrase('review'); ?></label>
                        <textarea name="review" id="review" class="form-control" required maxlength="255" rows="5"><?php if(!empty($rating)):?><?=$rating['review']?><?php endif;?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary"
                        name="button"><?php echo get_phrase('save'); ?></button>
                </form>
            </div>
        </div>
    </div>
</div>



<div class="row justify-content-center">

    <div class="col-xl-12">

        <div class="card">

            <div class="card-body">

                <h4 class="mb-3 header-title"><?php echo get_phrase('list_of_ratings'); ?></h4>

                <div class="table-responsive-sm mt-4">

                    <table id="ratings" class="table table-striped table-centered mb-0">

                        <thead>

                            <tr>

                                <th>#</th>

                                <th><?php echo get_phrase('full_name'); ?></th>

                                <th><?php echo get_phrase('rating_type'); ?></th>

                                <th><?php echo get_phrase('rating'); ?></th>

                                <th><?php echo get_phrase('date_added'); ?></th>

                                <th><?php echo get_phrase('review'); ?></th>

                                <th><?php echo get_phrase('action'); ?></th>
                            </tr>

                        </thead>

                        <tbody>

                            <?php foreach ($ratings as $key => $news):?>

                            <tr class="gradeU">

                                <td>
                                    <?php echo ++$key; ?>
                                </td>

                                <td>
                                    <span><?=ucwords($news['user']??$news['full_name'])?></span>
                                </td>

                                <td>
                                    <?php echo $news['title']; ?><br>
                                    <span class="text-muted"><?php echo ucwords($news['ratable_type']); ?></span>
                                </td>

                                <td>
                                    <span><?=$news['rating']?></span>
                                </td>
                                <td>
                                    <?php echo date('d-m-Y', $news['date_added']); ?>

                                </td>

                                <td style="text-align: left;">
                                    <?php echo substr($news['review'],0,10).' ...'; ?>
                                </td>

                                <td>

                                    <div class="dropright dropright">

                                        <button type="button"
                                            class="btn btn-sm btn-outline-primary btn-rounded btn-icon"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                            <i class="mdi mdi-dots-vertical"></i>

                                        </button>

                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item"
                                                    href="<?php echo site_url();?>admin/manage_ratings/get/<?php echo $news['id']; ?>">
                                                    <?php echo get_phrase('edit');?>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#"
                                                    onclick="confirm_modal('<?php echo site_url();?>admin/manage_ratings/delete/<?php echo $news['id']; ?>');">
                                                    <?php echo get_phrase('delete'); ?>
                                                </a>
                                            </li>
                                        </ul>

                                    </div>

                                </td>

                            </tr>

                            <?php endforeach; ?>

                        </tbody>

                    </table>

                </div>

            </div>

        </div> <!-- end card-body-->

    </div> <!-- end card-->

</div>

</div>



<script type="text/javascript">
$(document).ready(function() {
    <?php if(isset($rating)):?>
        $('#course_id').val(<?=$rating['ratable_id']?>); 
        $('#course_id').trigger('change'); 
    <?php endif; ?>
    initDataTable(['#ratings']);
});
</script>