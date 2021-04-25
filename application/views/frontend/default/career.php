<!-- Nirmita code start -->
<?php if(!$this->agent->is_mobile()): ?>

<section class="d-sm-none d-md-block">

<img src="<?php echo base_url(); ?>assets/frontend/default/img/web everything hospitality.jpg" alt="" class="w-100 h-100">

</section>

<?php else:?>

<section class="d-sm-block d-md-none">

<img src="<?php echo base_url(); ?>assets/frontend/default/img/mobile everything hospitality.jpg" alt="" class="w-100 h-100">

</section>

<?php endif;?>

<section class="mx-1">

    <div class="container py-2">

        <div class="row p-sm-2 mt-3">

            <div class="col jumbotron py-3 px-4 mb-0 ">

                <form action="" method="post">

                    <div class="row">

                        <div class="col-lg-4 col-sm-12">

                            <div class="form-group">
                                <input type="text" class="form-control" id="" name="search_term" placeholder="search_term">
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-12">

                            <div class="form-group">

                                <select class="form-control" name="job_type" id="job_type">

                                <option value="">

                                <?php echo get_phrase('select_a_job_type'); ?></option>

                            <option value="full">

                                <?php echo get_phrase("FULL_TIME"); ?></option>

                            <option value="part">

                                <?php echo get_phrase("part_TIME"); ?></option>

                            <option value="freelance">

                                <?php echo get_phrase("freelance"); ?></option>

                                </select>

                            </div>

                        </div>

                        <div class="col-lg-4 col-sm-12">

                            <div class="form-group">

                                <select class="form-control" name="location" id="location">

                                    <?php foreach($locations as $loc): ?>

                                        <option value="<?=$loc['location']?>">

                                            <?php echo $loc['location']; ?></option>

                                    <?php endforeach; ?>

                                </select>

                            </div>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col">

                            <div class="form-group">

                                <input type="submit" class="form-control btn btn-primary" id="">  
                            </div>

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>

    <div class="container mb-5">

        <div class="row p-sm-2">

            <div class="col py-3 px-4 border">

            <?php foreach($jobs as $job):?>

            <div class="row">

                <div class="col-md-12 col-lg-4">

                    <a class="text-dark" href="<?=site_url('jobs/'.$job['slug'].'/'.$job['id'])?>"><?=$job['title']?></a>

                </div>

                <div class="col-md-12 col-lg-2">

                    <i class="fa fa-briefcase"></i>&nbsp;

                    <span class="text-theme"><?=$job['job_type']?></span>

                </div>

                <div class="col-md-12 col-lg-3">

                    <i class="fa fa-map-marker-alt"></i>&nbsp;

                    <span class="text-theme"><?=$job['location']?></span>

                </div>

                <div class="col-md-12 col-lg-3">

                    <i class="fa fa-calendar-check"></i>&nbsp;

                    <span class="text-theme"><?=date('d-m-Y',strtotime($job['date_added']))?></span>

                </div>

            </div>

            <?php endforeach;?>

            </div>

        </div>

    </div>

</section>

<!-- Nirmita code end -->