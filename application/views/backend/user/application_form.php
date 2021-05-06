<?php 

$social_links = json_decode($user_details['social_links'], true);
?>

<h4 class="header-title mb-3"><?php echo get_phrase('instructor_application_form'); ?></h4>
<div class="alert alert-info" role="alert">
    <h4 class="alert-heading"><?php echo get_phrase('heads_up'); ?>!</h4>
    <p><?php echo get_settings('instructor_application_note'); ?></p>
    <div>
        <h2>Who are we?</h2>
        <p>Hospitality Connaisseur is India’s 1st Hospitality centric Media and Technology Company,
            believes to connect each hospitality individual to the vast &amp; various amount of knowledge by
            providing Boost, Backup and Motivation for their professional growth journey.
            As the Company’s core is Hospitality Education centric and Fully Committed towards the
            Development of Hospitality Individuals, Institutions and Organizations.
            ‘Hospitality Connaisseur’ + ‘Hospitality &amp; Travel Connaisseur Magazine’ both are the brands of
            Connaisseur Futuretech Private Limited. Registered, Trademarked and a Government of India
            recognized Startup | Proudly Made in India.
            To know more, Please visit : <a href="https://www.hospitalityconnaisseur.com/about-us"
                target="_blank">https://www.hospitalityconnaisseur.com/about-us</a><a
                href="https://www.hospitalityconnaisseur.com/about-us" target="_blank"></a></p>
        <p></p>
        <h2>What is Hospitality Influencer?&nbsp;</h2>
        <p>Well… It is a curated programme designed by us to empower the Faculties and Mentors to
            share their knowledge with our wide range of worldwide audience and earn money by making
            courses online. We will assist them with our Technology, Network, Guidance and Marketing to
            sell their courses and make them empowered</p>
        <h3>The Benefits.&nbsp;</h3>
        <ul>
            <li>Work from Home as per your convenience. </li>
            <li>Audience size of 25,000 + Hospitality People. </li>
            <li>Modern Working Environment with everyday learning!</li>
            <li>We will Support you with our <b>Technology</b> : You will get your own Dashboard through
                which you can keep track of your Earnings, Students, Course Management, Payouts and
                Sales, as well as Reviews and Ratings of your Courses. Our Dashboard is easy to use
                and quick process oriented. </li>
            <li>We will Support you with our <b>Network</b> : Currently, We have an audience size of more
                than 25,000 people worldwide who are knowledge seekers, and we are growing
                everyday. It’s a chance for you to leverage this network and monetise your knowledge! </li>
            <li>We will Support you with <b>Guidance</b> : We have an Online Team to support and guide you
                24x7 365. Our work environment is people friendly. Simply convert your knowledge intoonline courses and
                start earning. To make courses, You can select your own topics or
                get help from us to analyze, create or improvise the content. We will also help you to
                select topics as per your field of Interest.</li>
            <li>We will Support you with <b>Marketing</b> : Your work is done once your Course is uploaded
                and approved. We will take care of Marketing, paid promotions and sales, to monetise
                your course and that’s the kick start of your new journey with Hospitality Connaisseur.&nbsp;</li>
        </ul>
        <h3>Your Responsibilities.&nbsp;</h3>
        <ul>
            <li>Design Academic Courses related to Hospitality Management – Field of Interest.
            </li>
            <li>Design informative content for Hospitality Students and Working Professionals.</li>
            <li>Conduct research on a variety of topics related to Hospitality Industry.</li>
            <li>Ensure accuracy and objectiveness in all content &amp; assignments.</li>
            <li>Draft and maintain notes for all assignments.</li>
            <li>Collaborate with Hospitality Connaisseur Team to identify future content topics.</li>
            <li>Remain up-to-date with National and International Hospitality Industry affairs.&nbsp;</li>
        </ul>
        <h3>Skills Needed.</h3>
        <ul>
            <li>Energetic and Optimistic Personality </li>
            <li>Firm understanding of the English language with an ability to express thoughts and ideas
                in both written and verbal formats</li>
            <li>Sharp Teaching skills as per Field of Interest</li>
            <li>Basic knowledge about Online Content Creation and Teaching Methods</li>
            <li>Sharp Educational content designing skills</li>
            <li>Must have basic knowledge about All four Major departments of the Hotel Industry</li>
            <li>Must have knowledge of using Web browsers, Internet, MS WORD, MS EXCEL &amp; MS
                POWERPOINT</li>
            <li>Know Editing as well? Do it and make yourself a creative hospitality influencer!&nbsp;</li>
        </ul>
        <p>*The Best time to start this was yesterday. The Next best time is Now! Fill the below given form
            and let’s hope for the best!
            Note : Once approved, you will be further instructed with the Course Creation Process and How
            frequently you can earn from it. Our team member will contact you soon with details. For any
            query please email on <a href="mailto:support@hospitalityconnaisseur.com"
                target="_blank">support@hospitalityconnaisseur.com </a>; please note that it’s totally work
            from home opportunity.<br></p>
    </div>
</div>
<form class="required-form" action="<?php echo site_url('user/become_an_instructor'); ?>" method="post"
    enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $this->session->userdata('user_id'); ?>">
    <div class="form-group">
        <label for="name"><?php echo get_phrase('name'); ?></label>
        <input type="text" class="form-control" name="name" id="name" aria-describedby="name-help"
            placeholder="<?php echo get_phrase('your_name_will_go_here'); ?>"
            value="<?php echo $user_details['first_name'].' '.$user_details['last_name']; ?>" readonly required>
        <small id="name-help" class="form-text text-muted"><?php echo get_phrase('your_name_is_required'); ?></small>
    </div>
    <div class="form-group">
        <label for="email"><?php echo get_phrase('email_address'); ?></label>
        <input type="email" class="form-control" name="email" id="email" aria-describedby="email-help"
            placeholder="<?php echo get_phrase('your_email_will_go_here'); ?>"
            value="<?php echo $user_details['email']; ?>" readonly required>
        <small id="email-help" class="form-text text-muted"><?php echo get_phrase('your_email_is_required'); ?></small>
    </div>
    <!-- <div class="form-group">
        <label for="address"><?php echo get_phrase('address'); ?></label>
        <textarea name="address" id="address" class="form-control" required></textarea>
        <small id="address-help"
            class="form-text text-muted"><?php echo get_phrase('your_address_is_required'); ?></small>
    </div> -->
    <div class="form-group">
        <label for="phone"><?php echo get_phrase('phone_number'); ?></label>
        <input type="text" class="form-control" name="phone" value="<?=$user_details['mob_no']?>" id="phone" aria-describedby="phone-help"
            placeholder="<?php echo get_phrase('your_phone_number_will_go_here'); ?>" required>
        <small id="phone-help"
            class="form-text text-muted"><?php echo get_phrase('your_phone_number_is_required'); ?></small>
    </div>
    <div class="form-group">
        <label for="linkedin"><?php echo get_phrase('linkedin_profile'); ?></label>
        <input type="text" class="form-control" name="linkedin" id="linkedin" value="<?=$social_links['linkedin']?>" aria-describedby="linkedin-help"
            placeholder="<?php echo get_phrase('your_linkedin_profile_url_will_go_here'); ?>" required>
        <small id="linkedin-help" class="form-text text-muted"><?php echo get_phrase('your_linkedin_profile_url_is_required'); ?></small>
    </div>
    <!-- <div class="form-group">
        <label for="message"><?php echo get_phrase('any_message'); ?></label>
        <textarea name="message" id="message" class="form-control"></textarea>
        <small id="message-help"
            class="form-text text-muted"><?php echo get_phrase('if_any_message_you_want_to_share'); ?></small>
    </div> -->
    <div class="form-group">
        <label for="que1">Why do you want to be a Hospitality Influencer?</label>
        <input type="text" class="form-control" name="que1" id="que1" aria-describedby="que1-help"
            placeholder="<?php echo get_phrase('your_answer_will_go_here'); ?>" required>
        <small id="que1-help" class="form-text text-muted"><?php echo get_phrase('your_answer_is_required'); ?></small>
    </div>
    <div class="form-group">
        <label for="que2">Tell us about your Field of Interest and teaching experience.</label>
        <input type="text" class="form-control" name="que2" id="que2" aria-describedby="que2-help"
            placeholder="<?php echo get_phrase('your_answer_will_go_here'); ?>" required>
        <small id="que2-help" class="form-text text-muted"><?php echo get_phrase('your_answer_is_required'); ?></small>
    </div>
    <div class="form-group">
        <label for="que3">How many hours can you invest weekly for this opportunity?</label>
        <input type="number" min="0" class="form-control" name="que3" id="que3" aria-describedby="que3-help"
            placeholder="<?php echo get_phrase('your_answer_will_go_here'); ?>" required>
        <small id="que3-help" class="form-text text-muted"><?php echo get_phrase('your_answer_is_required'); ?></small>
    </div>
    <div class="form-group">
        <label> <?php echo get_phrase('document'); ?><br>
        <small id="attachment-help"
            class="form-text text-muted"><?php echo get_phrase('if_any_document_you_want_to_share'); ?> ( .doc, .docs,
            .pdf, .txt, .png, .jpg, jpeg ) <?php echo get_phrase('are_accepted'); ?></small></label>
        <div class="input-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="document" name="document"
                    onchange="changeTitleOfImageUploader(this)" required>
                <label class="custom-file-label" for="document"><?php echo get_phrase('document'); ?></label>
            </div>
        </div>
        <small id="attachment-help"
            class="form-text text-muted">Resume for Individuals / Company Profile for Institutions</small>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="text-center">
                <div class="mb-3 mt-3">
                    <button type="button" class="btn btn-primary text-center"
                        onclick="checkRequiredFields()"><?php echo get_phrase('apply'); ?></button>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
</form>