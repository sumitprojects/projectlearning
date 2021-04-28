<div class="row ">

    <div class="col-xl-12">

        <div class="card">

            <div class="card-body">

                <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i>

                    <?php echo get_phrase('reputed_advertiser_list'); ?></h4>

            </div> <!-- end card body-->

        </div> <!-- end card -->

    </div><!-- end col-->

</div>



<div class="row justify-content-center">

    <div class="col-xl-12">

        <div class="card">

            <div class="card-body">

                <h4 class="mb-3 header-title"><?php echo get_phrase('add_reputed_advertiser'); ?></h4>

                <?=validation_errors()?>



                <form action="<?=site_url('admin/reputed_advertisers/add')?>" method="post" enctype="multipart/form-data">

                    <?php if(!empty($advertiser)):?>

                    <input type="hidden" name="id" value="<?=$advertiser['id']?>">

                    <?php endif; ?>

                    <div class="form-group mb-3">

                        <label for="title"><?php echo get_phrase('title'); ?></label>

                        <input type="text" id="title" name="title" class="form-control" placeholder="Eg. title"
                            value="<?=!empty($advertiser)? $advertiser['title']:''?>">

                    </div>
                    <div class="form-group mb-3">

                        <label for="title"><?php echo get_phrase('url'); ?></label>

                        <input type="text" id="url" name="url" class="form-control" placeholder="Eg. url"
                            value="<?=!empty($advertiser)? $advertiser['url']:''?>">

                    </div>

                    <div class="form-group mb-3">

                        <label for="image"><?php echo get_phrase('image'); ?></label>

                        <input type="file" id="image" name="image" class="form-control"
                            value="<?=!empty($advertiser)? $advertiser['image']:''?>">
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

                <h4 class="mb-3 header-title"><?php echo get_phrase('list_of_advertisers'); ?></h4>

                <div class="table-responsive-sm mt-4">

                    <table id="advertisers" class="table table-striped table-centered mb-0">

                        <thead>

                            <tr>

                                <th>#</th>

                                <th><?php echo get_phrase('title'); ?></th>

                                <th><?php echo get_phrase('image'); ?></th>

                                <th><?php echo get_phrase('action'); ?></th>

                            </tr>

                        </thead>

                        <tbody>

                            <?php foreach ($advertisers as $key => $news):?>

                            <tr class="gradeU">

                                <td>

                                    <?php echo ++$key; ?>

                                </td>

                                <td>
                                    <span><?=$news['title']?></span><br>
                                </td>

                                <td>
                                    <img src="<?php echo base_url().'uploads/system/'.$news['image']?>" alt=""
                                        height="50" width="50" class="img-fluid rounded-circle img-thumbnail">
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

                                                <a class="dropdown-item" href="#"
                                                    onclick="confirm_modal('<?php echo site_url();?>admin/reputed_advertisers/edit/<?php echo $news['id']; ?>');">

                                                    <?php echo get_phrase('edit');?>

                                                </a>

                                            </li>

                                            <li>

                                                <a class="dropdown-item" href="#"
                                                    onclick="confirm_modal('<?php echo site_url();?>admin/reputed_advertisers/delete/<?php echo $news['id']; ?>');">

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

    initDataTable(['#advertisers']);

});
</script>