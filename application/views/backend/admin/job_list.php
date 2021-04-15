<?php 

$job = isset($job)?$job : NULL;

?>



<div class="row ">

    <div class="col-xl-12">

        <div class="card">

            <div class="card-body">

                <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i>

                    <?php echo get_phrase('jobs_list'); ?></h4>

            </div> <!-- end card body-->

        </div> <!-- end card -->

    </div><!-- end col-->

</div>

<div class="row justify-content-center">

    <div class="col-xl-12">

        <div class="card">

            <div class="card-body">

                <h4 class="mb-3 header-title"><?php echo get_phrase('add_job'); ?></h4>

                <?=validation_errors()?>



                <form action="<?=site_url('admin/manage_jobs/add')?>" method="post">

                    <?php if(!empty($job)):?>

                    <input type="hidden" name="id" value="<?=$job['id']?>">

                    <?php endif; ?>

                    <div class="form-group mb-3">

                        <label for="title"><?php echo get_phrase('title'); ?></label>

                        <input type="text" id="title" name="title" class="form-control" placeholder="Eg. Contamination" value="<?=!empty($job)? $job['title']:''?>">

                    </div>

                    <div class="form-group mb-3">

                        <label for="job_type"><?php echo get_phrase('job_type'); ?></label>

                        <select class="form-control select2" data-toggle="select2" name="job_type" id="job_type"

                            required>

                            <option value="">

                                <?php echo get_phrase('select_a_job_type'); ?></option>

                            <option value="full" <?= !empty($job)? ($job['job_type'] == 'full'? 'selected' : ''):''?>>

                                <?php echo get_phrase("FULL_TIME"); ?></option>

                            <option value="part" <?= !empty($job)? ($job['job_type'] == 'part'? 'selected' : ''):''?>>

                                <?php echo get_phrase("part_TIME"); ?></option>

                            <option value="freelance" <?= !empty($job)? ($job['job_type'] == 'freelance'? 'selected' : ''):''?>>

                                <?php echo get_phrase("freelance"); ?></option>

                        </select>

                    </div>

                    <div class="form-group mb-3">

                        <label for="description"><?php echo get_phrase('description'); ?></label>

                        <textarea name="description" id="description" class="form-control" rows="5">

                        <?php if(!empty($job)):?>

                            <?=$job['description']?>

                        <?php else:?>



                        <div class="container text-center">

        <h3 class="font-italic font-weight-bold">

            Do you know ‘Hospitality Connaisseur’?

        </h3>

        <p>

            ‘Hospitality Connaisseur’ is Media and Technology Company, who has Hospitality Domain Expertise. As the Company’s core is Hospitality Education Centric and Fully Committed towards the Development of Hospitality Individuals, Institutions and Organizations.

        </p>

        <p>

            The Technology Unit is our Digital Segment Focused on Providing Knowledge Enriched Hospitality Management Online Courses as a Learning Solution to all the Hospitality Enthusiasts for their Learning and Development Needs.

        </p>

        <p>

            The Media Unit is Focused on Publishing a Monthly Hospitality centric Magazine, to Distribute Insider Insights to all the Hospitality Individuals and Organizations.

        </p>

        <hr>

    </div>

    <div class="container">

        <h2 class="text-center py-2">Job Title : <span class="font-weight-bold">BUSINESS DEVELOPMENT MANAGER</span></h2>

        <h4 class="font-italic">"Job Responsibities"</h4>

        <ul class="my-4">

            <li>Sharing Information about Hospitality Connaisseur’s Mission, Vision and Subscription Packages.</li>

            <li>Generating Sales of Online Courses and Magazine of Hospitality Connaisseur.</li>

            <li>Generation of new leads with the intention of creating more Sales.</li>

            <li>Lead and Post-sale follow-up.</li>

            <li>Maintaining positive customer relationships.</li>

            <li>Customer Feedback Management.</li>

            <li>Work closely with the designated sales team to Strategize more effective sales methods.</li>

            <li>When appropriate, Pitch business development ideas and strategies at boardroom level.</li>

        </ul>

        <h4 class="font-italic">"Skills Needed"</h4>

        <ul class="my-4">

            <li>Excellent customer service and Communication skills</li>

            <li>Motivation, Perseverance and Determination qualities</li>

            <li>Strong knowledge related to Hospitality Industry</li>

            <li>The ability to close deals with clients, including cold leads</li>

            <li>An aptitude for Research and Analysis</li>

            <li>Good Network &amp; Networking abilities for Hospitality industry</li>

            <li>Proficient in Time management and Personal organization</li>

            <li>Must needed background of Hospitality Industry (Hotels, Tourism or Aviation)</li>

        </ul>

        <p><span class="font-weight-bold font-italic">Work Hours:</span> You are the Boss aka Work from Home.</p>

        <p><span class="font-weight-bold font-italic">Work Type:</span> Part Time.</p>

        <p><span class="font-weight-bold font-italic">Salary:</span> Up to INR 15,000/Month.</p>

        <p><span class="font-weight-bold font-italic">Location:</span> Anywhere in India.</p>

        <hr>

        <p class="text-center font-weight-bold">We are a Mission driven Company. We don’t Mind your Educational Qualification as long as you have right ‘Skillset’ and ‘Mindset’. Feel free to Apply if you are a ‘Hospitality Student or Fresher’. Do carry ‘Learning Attitude’ if you get selected.</p>

    </div>

<?php endif;?>

                        </textarea>

                    </div>



                    <div class="form-group mb-3">

                        <label for="location"><?php echo get_phrase('location'); ?></label>

                        <input type="text" id="location" name="location" class="form-control" value="<?= !empty($job)? $job['location']:''?>"

                            placeholder="Eg. Contamination">

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

                    <table id="jobs" class="table table-striped table-centered mb-0">

                        <thead>

                            <tr>

                                <th>#</th>

                                <th><?php echo get_phrase('title'); ?></th>

                                <th><?php echo get_phrase('job_type'); ?></th>

                                <th><?php echo get_phrase('location'); ?></th>

                                <th><?php echo get_phrase('date_added'); ?></th>

                                <th><?php echo get_phrase('status'); ?></th>

                                <th><?php echo get_phrase('action'); ?></th>

                            </tr>

                        </thead>

                        <tbody>

                            <?php foreach ($jobs as $key => $news):?>

                            <tr class="gradeU">

                                <td>

                                    <?php echo ++$key; ?>

                                </td>

                                <td>

                                    <span><?=$news['title']?></span>

                                </td>

                                <td>

                                    <?php echo $news['job_type']; ?>

                                </td>

                                <td>

                                    <?php echo $news['location']; ?>

                                </td>

                                <td>

                                    <?php echo $news['date_added']; ?>

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
                                        <?php if ($news['status'] == 0): ?>

                                            <li>

                                                <a class="dropdown-item" href="#"

                                                    onclick="confirm_modal('<?php echo site_url();?>admin/manage_jobs/approve/<?php echo $news['id']; ?>');">

                                                    <?php echo get_phrase('approve');?>

                                                </a>

                                            </li>
                                        <?php elseif($news['status'] == 1): ?>

                                            <li>

                                                <a class="dropdown-item" href="<?php echo site_url();?>admin/manage_jobs/edit/<?php echo $news['id']; ?>">

                                                    <?php echo get_phrase('edit');?>

                                                </a>

                                            </li>

                                            <li>

                                                <a class="dropdown-item" href="#"

                                                    onclick="confirm_modal('<?php echo site_url();?>admin/manage_jobs/delete/<?php echo $news['id']; ?>');">

                                                    <?php echo get_phrase('delete'); ?>

                                                </a>

                                            </li>

                                            <li>
                                                <a class="dropdown-item" href="<?php echo site_url();?>admin/manage_applicants/job/<?php echo $news['id']; ?>">
                                                    <?php echo get_phrase('applicants'); ?>
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

    initDataTable(['#jobs']);

    initSummerNote(['#description'])

});

</script>