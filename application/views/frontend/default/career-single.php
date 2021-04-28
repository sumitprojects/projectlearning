<section class="d-sm-none d-md-block">

    <img src="<?=base_url()?>assets/frontend/default/img/web everything hospitality.jpg" alt="" class="w-100 h-100">

</section>

<section class="d-sm-block d-md-none">

    <img src="<?=base_url()?>assets/frontend/default/img/mobile everything hospitality.jpg" alt="" class="w-100 h-100">

</section>

<section>

    <div class="container py-5">

        <h2 class="text-dark font-weight-bold">
            <?=strtoupper($job['title'])?>
        </h2>

        <p>

            <i class="fa fa-briefcase"></i>&nbsp;
            <?php if($job['job_type'] == 'full'):?>
                <span class="text-theme"><?=ucwords(get_phrase('full_time'))?></span>
            <?php elseif($job['job_type'] == 'part'):?>
                <span class="text-theme"><?=ucwords(get_phrase('part_time'))?></span>
            <?php else:?>
                <span class="text-theme"><?=get_phrase('freelance')?></span>
            <?php endif;?>
        </p>

        <p>

            <i class="fa fa-map-marker-alt"></i>&nbsp;

            <span class="text-theme"><?=$job['location']?></span>

        </p>

        <p>

            <i class="fa fa-calendar-check"></i>&nbsp;

            <span class="text-theme"><?=date('d-m-Y',strtotime($job['date_added']))?></span>
        </p>

    </div>

    <div class="container">
        <?=$job['description']?>
    </div>

    <div class="container py-5">
        <?=validation_errors()?>
        <form class="mb-5" action="<?=site_url('jobs/apply')?>" method="post" enctype="multipart/form-data">

            <input type="hidden" name="job_id" value="<?=$job['id']?>">
            <h3 class="text-theme font-weight-bold py-3">Apply Online</h3>

            <div class="form-group row">

                <label for="" class="col-lg-2 col-form-label">Name<span class="text-danger">*</span></label>

                <div class="col-lg-10">

                    <input type="text" name="name" required class="form-control">

                </div>

            </div>

            <div class="form-group row">

                <label for="" class="col-lg-2 col-form-label">Email<span class="text-danger">*</span></label>

                <div class="col-lg-10">
                    <input type="email" name='email' required class="form-control">
                </div>

            </div>

            <div class="form-group row">

                <label for="" class="col-lg-2 col-form-label">Phone<span class="text-danger">*</span></label>

                <div class="col-lg-10">

                    <input type="text" name="phone" required class="form-control">

                </div>

            </div>

            <div class="form-group row">

                <label for="" class="col-lg-2 col-form-label">Salary Expectations<span class="text-danger">*</span></label>

                <div class="col-lg-10">

                    <input type="number" name="expected_sal" required class="form-control">

                </div>

            </div>

            <div class="form-group row">

                <label for="" class="col-lg-2 col-form-label">Address<span class="text-danger">*</span></label>

                <div class="col-lg-10">

                    <input type="text" name="address" required class="form-control">

                </div>

            </div>

            <div class="form-group row">

                <label for="" class="col-lg-2 col-form-label">Joining Date<span class="text-danger">*</span></label>

                <div class="col-lg-10">

                    <input type="date" name="joining_date" min="<?=date('Y-m-d')?>" required class="form-control">

                </div>

            </div>

            <fieldset class="form-group">

                <div class="row">

                    <legend class="col-form-label col-lg-2 pt-0">Gender</legend>

                    <div class="col-lg-10">

                        <div class="form-check-inline">

                            <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="male" checked>

                            <label class="form-check-label" for="gridRadios1">

                                Male

                            </label>

                        </div>

                        <div class="form-check-inline">

                            <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="female">

                            <label class="form-check-label" for="gridRadios2">

                                Female

                            </label>

                        </div>

                    </div>

                </div>

            </fieldset>

            <div class="form-group row">

                <label for="" class="col-lg-2 col-form-label">How did you get to know the company?<span class="text-danger">*</span></label>

                <div class="col-lg-10">

                    <input type="text" name="how_know" required class="form-control">

                </div>

            </div>

            <div class="form-group row">

                <label class="col-lg-2 col-form-label">Language Spoken</label>

                <div class="col-lg-10">

                    <div class="form-check-inline">

                        <input class="form-check-input" type="checkbox" value="Hindi" name="language[]" id="gridCheck1">

                        <label class="form-check-label" for="gridCheck1">

                            Hindi

                        </label>

                    </div>

                    <div class="form-check-inline">

                        <input class="form-check-input" type="checkbox" value="English" name="language[]" id="gridCheck12">

                        <label class="form-check-label" for="">

                            English

                        </label>

                    </div>

                    <div class="form-check-inline">

                        <input class="form-check-input" type="checkbox" value="Gujarati" name="language[]" id="gridCheck13">

                        <label class="form-check-label" for="">

                            Gujarati

                        </label>

                    </div>

                </div>

            </div>

            <div class="form-group row">

                <label class="col-lg-2 col-form-label">Attach Resume</label>

                <div class="col-lg-10">

                    <div class="custom-file">

                        <input type="file" class="custom-file-input" name="resume" id="customFile">

                        <label class="custom-file-label" for="customFile">Choose file</label>
                        <span class="text-muted">Only Doc, Docx, PDF file accepted.</span>
                    </div>

                </div>

            </div>

            <button class="btn btn-primary" type="submit">Submit form</button>

        </form>

    </div>

</section>
<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>