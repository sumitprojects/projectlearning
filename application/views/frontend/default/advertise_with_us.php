<!-- Nirmita code start -->

<section>

    <form action="<?=site_url('advertise-with-us')?>" method="post">

    <div class="container">

        <div class="row py-4">

            <div class="col-12">

                <h1 class="py-3">What benefits we Provide along with your Ad-campaign?</h1>

                <div class="lead">

                    <p><i class="far fa-thumbs-up text-theme"></i> Audience size of 25,000 + Hospitality People.</p>

                <p><i class="far fa-thumbs-up text-theme"></i> Strong Industry B2B2C Network.</p>

                <p><i class="far fa-thumbs-up text-theme"></i> Direct Reach to Hospitality Industry Decision Makers.</p>

                <p><i class="far fa-thumbs-up text-theme"></i> Competitive Rates.</p>

                <p><i class="far fa-thumbs-up text-theme"></i> Guaranteed Outcome.</p>

                <p><i class="far fa-thumbs-up text-theme"></i> Web-Mag Dual Ad-Release Facility Available.</p>                    

                </div>

            </div>



            <div class="col-12 mt-3">

                <h2 class="py-3">Simply Send us your Query for Most Competitive Rates in the Market</h2>

                <div class="row">

                    <div class="col">

                        <div class="form-group">

                            <label for="FirstName">First Name</label>

                            <input type="text" class="form-control" id="FirstName" name="first_name" placeholder="First Name">

                        </div>

                    </div>

                    <div class="col">

                        <div class="form-group">

                            <label for="LastName">Last Name</label>

                            <input type="text" class="form-control" id="LastName" name="last_name" placeholder="Last Name">

                        </div>

                    </div>

                </div>

                <div class="form-group">

                    <label for="email">Email*:</label>

                    <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">

                </div>

                <div class="form-group">

                    <label for="CompanyName">Company Name*:</label>

                    <input type="text" class="form-control" id="CompanyName" placeholder="Company Name" name="company_name">

                </div>

                <div class="form-group">

                    <label for="Phone">Mobile No*:</label>

                    <input type="text" class="form-control" id="Phone" placeholder="Mobile No" name="Phone">

                </div>



                <div class="form-group">

                    <label for="">Comment or Message*</label>

                    <textarea class="form-control" id="" rows="5" name="message"></textarea>

                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </div>

    </div>

    </form>

</section>

<!-- Nirmita code end -->

<section class="category-course-list-area">

    <div class="container">

         <h2 class="py-4">Reputed Advertisers</h2>

        <div class="row">

            <div class="col">

                <div class="row text-center">
                    <?php foreach($reputed_advertisers as $key => $reputed_advertiser):?>
                    <div class="col-3">

                        <img src="<?=base_url().'uploads/system/'.$reputed_advertiser['image']?>" height="150" width="150" class="img-fluid" title="<?=$reputed_advertiser['title']?>" alt="<?=$reputed_advertiser['title']?>">
                    </div>
                    <?php endforeach; ?>
                </div>        

            </div>

        </div>

    </div>

</section>