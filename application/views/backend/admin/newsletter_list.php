<div class="row ">

    <div class="col-xl-12">

        <div class="card">

            <div class="card-body">

                <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i>

                    <?php echo get_phrase('newsletter_list'); ?></h4>

            </div> <!-- end card body-->

        </div> <!-- end card -->

    </div><!-- end col-->

</div>



<div class="row justify-content-center">

    <div class="col-xl-12">

        <div class="card">

            <div class="card-body">

                <h4 class="mb-3 header-title"><?php echo get_phrase('list_of_emails'); ?></h4>

                <div class="table-responsive-sm mt-4">

                    <table id="newsletter" class="table table-striped table-centered mb-0">

                        <thead>

                            <tr>

                                <th>#</th>

                                <th><?php echo get_phrase('email'); ?></th>

                                <th><?php echo get_phrase('ip'); ?></th>

                                <th><?php echo get_phrase('time'); ?></th>

                                <th><?php echo get_phrase('status'); ?></th>

                                <th><?php echo get_phrase('action'); ?></th>

                            </tr>

                        </thead>

                        <tbody>

                            <?php foreach ($newsletters as $key => $news):?>

                            <tr class="gradeU">

                                <td>

                                    <?php echo ++$key; ?>

                                </td>

                                <td>

                                    <?php echo $news['email']; ?>

                                </td>

                                <td>

                                    <?php echo $news['ip_address']; ?>

                                </td>

                                <td>

                                    <?php echo date('d-M-Y',strtotime($news['timestamp'])); ?>

                                </td>

                                <td style="text-align: center;">

                                    <?php if ($news['status'] == 0): ?>

                                    <div class="badge badge-danger"><?php echo get_phrase('pending'); ?></div>

                                    <?php elseif($news['status'] == 1): ?>

                                    <div class="badge badge-success"><?php echo get_phrase('approved'); ?></div>

                                    <?php endif; ?>

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

                                                    onclick="confirm_modal('<?php echo site_url();?>admin/manage_newsletter/approve/<?php echo $news['id']; ?>');">

                                                    <?php echo get_phrase('approve');?>

                                                </a>

                                            </li>

                                            <li>

                                                <a class="dropdown-item" href="#"

                                                    onclick="confirm_modal('<?php echo site_url();?>admin/manage_newsletter/delete/<?php echo $news['id']; ?>');">

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

    initDataTable(['#newsletter']);

});

</script>