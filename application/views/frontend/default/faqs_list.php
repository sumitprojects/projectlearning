<section class="category-course-list-area">
    
    <div class="container">
        <h1><?=strtoupper($page_title)?></h1>
        <div class="row">

            <div class="col" style="padding: 35px;">
                <div class="accordion" id="accordionExample">
                <?php foreach ($faqs as $key => $faq):?>
                    <div class="card">
                        <div class="card-header" id="heading<?=$key?>">
                            <h2 class="mb-0">
                                <a class="text-dark" href="#" data-toggle="collapse"
                                    data-target="#collapse<?=$key?>" aria-expanded="true" aria-controls="collapse<?=$key?>">
                                    <?=$faq['question']?>
                                </a>
                            </h2>
                        </div>

                        <div id="collapse<?=$key?>" class="collapse show" aria-labelledby="heading<?=$key?>"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <?=$faq['answer']?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
              </div>
            </div>
        </div>
    </div>
</section>