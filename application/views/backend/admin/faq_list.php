<?php 

$faq = isset($faq)?$faq : NULL;

?>



<div class="row ">

    <div class="col-xl-12">

        <div class="card">

            <div class="card-body">

                <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i>

                    <?php echo get_phrase('faqs_list'); ?></h4>

            </div> <!-- end card body-->

        </div> <!-- end card -->

    </div><!-- end col-->

</div>

<div class="row justify-content-center">

    <div class="col-xl-12">

        <div class="card">

            <div class="card-body">

                <h4 class="mb-3 header-title"><?php echo get_phrase('add_faq'); ?></h4>

                <?=validation_errors()?>



                <form action="<?=site_url('admin/manage_faq/add')?>" method="post">

                    <?php if(!empty($faq)):?>

                    <input type="hidden" name="id" value="<?=$faq['id']?>">

                    <?php endif; ?>

                    <div class="form-group mb-3">

                        <label for="title"><?php echo get_phrase('question'); ?></label>

                        <input type="text" id="question" name="question" class="form-control" placeholder="Eg. question"
                            value="<?=!empty($faq)? $faq['question']:''?>">

                    </div>

                    <div class="form-group mb-3">

                        <label for="answer"><?php echo get_phrase('answer'); ?></label>

                        <textarea name="answer" id="answer" class="form-control" rows="5">

                        <?php if(!empty($faq)):?>
                            <?=$faq['answer']?>
                        <?php endif;?>

                        </textarea>

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

                <h4 class="mb-3 header-title"><?php echo get_phrase('list_of_jobs'); ?></h4>

                <div class="table-responsive-sm mt-4">

                    <table id="faq" class="table table-striped table-centered mb-0">

                        <thead>

                            <tr>

                                <th>#</th>

                                <th><?php echo get_phrase('question'); ?></th>

                                <th><?php echo get_phrase('answer'); ?></th>

                                <th><?php echo get_phrase('action'); ?></th>

                            </tr>

                        </thead>

                        <tbody>

                            <?php foreach ($faqs as $key => $news):?>

                            <tr class="gradeU">

                                <td>

                                    <?php echo ++$key; ?>

                                </td>

                                <td>

                                    <span><?=$news['question']?></span>

                                </td>

                                <td>

                                    <?php echo $news['answer']; ?>

                                </td>

                                <td>

                                    <div class="dropright dropright">

                                        <button type="button"
                                            class="btn btn-sm btn-outline-primary btn-rounded btn-icon"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                            <i class="mdi mdi-dots-vertical"></i>

                                        </button>

                                        <ul class="dropdown-menu">
                                            <?php if($news['status'] == 1): ?>

                                            <li>

                                                <a class="dropdown-item"
                                                    href="<?php echo site_url();?>admin/manage_faq/edit/<?php echo $news['id']; ?>">
                                                    <?php echo get_phrase('edit');?>

                                                </a>

                                            </li>

                                            <li>

                                                <a class="dropdown-item" href="#"
                                                    onclick="confirm_modal('<?php echo site_url();?>admin/manage_faq/delete/<?php echo $news['id']; ?>');">

                                                    <?php echo get_phrase('delete'); ?>

                                                </a>

                                            </li>
                                            <?php endif; ?>

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

    initDataTable(['#faq']);

    initSummerNote(['#answer'])

});
</script>