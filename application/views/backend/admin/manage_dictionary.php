<div class="row ">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i>
                    <?php echo get_phrase('manage_dictionary_'.(isset($edit_profile)?$edit_profile:'')); ?></h4>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs nav-bordered mb-3">
                    <?php if(isset($edit_profile)):?>
                    <li class="nav-item">
                        <a href="#edit" data-toggle="tab" aria-expanded="true" class="nav-link active">
                            <?php echo get_phrase('edit_phrase');?>
                        </a>
                    </li>
                    <?php endif;?>
                    <li class="nav-item">
                        <a href="#list" data-toggle="tab" aria-expanded="false"
                            class="nav-link <?php if(!isset($edit_profile) && !isset($edit_lang))echo 'active';?>">
                            <i class="mdi mdi-home-variant d-lg-none d-block mr-1"></i>
                            <span class="d-none d-lg-block"><?php echo get_phrase('language_list');?></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#add_lang" data-toggle="tab" aria-expanded="false" class="nav-link <?php if(isset($edit_lang))echo 'active';?>">
                            <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                            <span class="d-none d-lg-block"><?php echo get_phrase('add_language');?></span>
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <!----PHRASE EDITING TAB STARTS-->
                    <?php if (isset($edit_profile) && !isset($edit_lang)):
						$current_editing_language	=	$edit_profile;
					?>
                    <div class="tab-pane show active" id="edit" style="padding: 30px">
                        <div class="row">
                            <div class="col-xl-6">
                                <form class="" id="phraseForm" method="post">
                                    <input type="hidden" name="lang_key" value="<?=$lang_key?>">
                                    <div class="form-group mb-3">
                                        <label for="phrase"><?php echo get_phrase('add_new_phrase'); ?></label>
                                        <input type="text" id="phrase" name="phrase" class="form-control"
                                            placeholder="Eg. Contamination">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="meaning"><?php echo get_phrase('meaning'); ?></label>
                                        <input type="text" id="meaning" name="meaning" class="form-control"
                                            placeholder="Eg. Contamination">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="pronounce"><?php echo get_phrase('pronounce'); ?></label>
                                        <input type="text" id="pronounce" name="pronounce" class="form-control"
                                            placeholder="Eg. Contamination">
                                    </div>
                                    <button type="button" class="btn btn-primary" onclick="addPhrase()"
                                        name="button"><?php echo get_phrase('save'); ?></button>
                                </form>
                            </div>
                        </div>


                        <div class="row mt-5">
                            <div class="col-xl-12 col-lg-12">
                            <h4 class="page-title"><?php echo get_phrase('phrase_list'); ?></h4>
                                <table id="manage-dict" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Phrase</th>
                                            <th>Meaning</th>
                                            <th>Pronounce</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Phrase</th>
                                            <th>Meaning</th>
                                            <th>Pronounce</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                    <?php endif;?>
                    <!----PHRASE EDITING TAB ENDS-->

                    <!----TABLE LISTING STARTS-->
                    <div class="tab-pane <?php if(!isset($edit_profile) && !isset($edit_lang))echo 'show active';?>" id="list">

                        <div class="table-responsive-sm">
                            <table class="table table-bordered table-centered mb-0">
                                <thead>
                                    <tr>
                                        <th><?php echo get_phrase('language');?></th>
                                        <th><?php echo get_phrase('option');?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
									foreach($languages as $language):?>
                                    <tr>
                                        <td><?php echo ucwords($language['language']);?></td>
                                        <td>
                                            <?php if($language['status'] == 1):?>
                                            <a href="<?php echo site_url('admin/manage_dictionary/edit_phrase/'.$language['slug'].'/'.$language['dlid']);?>"
                                                class="btn btn-info">
                                                <?php echo get_phrase('edit_phrase');?>
                                            </a>
                                            <a href="<?php echo site_url('admin/manage_dictionary/edit_language/'.$language['slug'].'/'.$language['dlid']);?>"
                                                class="btn btn-info">
                                                <?php echo get_phrase('edit_language');?>
                                            </a>
                                            <a href="javascript::"
                                                onclick="confirm_modal('<?php echo site_url('admin/manage_dictionary/delete_language/'.$language['slug'].'/'.$language['dlid']);?>')"
                                                class="btn btn-danger">
                                                <?php echo get_phrase('delete_language');?>
                                            </a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <!----TABLE LISTING ENDS--->

                    <!----PHRASE CREATION FORM STARTS---->
                    <div class="tab-pane" id="add" style="padding: 30px">
                        <div class="row">
                            <div class="col-xl-6">
                                <form class="" action="<?php echo site_url('admin/manage_dictionary/add_phrase') ?>"
                                    method="post">
                                    <div class="form-group mb-3">
                                        <label for="addphrase"><?php echo get_phrase('add_new_phrase'); ?></label>
                                        <input type="text" id="addphrase" name="phrase" class="form-control"
                                            placeholder="Eg. Contamination">
                                    </div>
                                    <button type="submit" class="btn btn-primary"
                                        name="button"><?php echo get_phrase('save'); ?></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!----PHRASE CREATION FORM ENDS--->
                    <!----ADD/EDIT NEW LANGUAGE---->
                    <div class="tab-pane <?php if(isset($edit_lang))echo 'show active';?>" id="add_lang" style="padding: 30px">
                        <div class="row">
                            <div class="col-xl-6">
                                <form class="" action="<?php echo site_url('admin/manage_dictionary/add_language'); ?>"
                                    method="post">
                                    <?php if(isset($edit_lang)): ?>
                                        <input type="hidden" name="dlid" value="<?=$lang_id?>">
                                    <?php endif; ?>
                                    <div class="form-group mb-3">
                                        <?php if(isset($edit_lang)): ?>
                                        <label for="language"><?php echo get_phrase('edit_language'); ?></label>
                                        <?php else: ?>
                                        <label for="language"><?php echo get_phrase('add_new_language'); ?></label>
                                        <?php endif; ?>
                                        <input type="text" id="language" name="language" class="form-control" value="<?=isset($edit_lang)? $language['language']:''?>"
                                            placeholder="<?php echo get_phrase('no_special_character_or_space_is_allowed').'. '.get_phrase('valid_examples').' : French, Spanish, Bengali etc'; ?>">
                                    </div>
                                    <button type="submit" class="btn btn-primary"
                                        name="button"><?php echo get_phrase('save'); ?></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!----LANGUAGE ADDING FORM ENDS-->
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    // initDataTable(['#manage-dict']);
});

function updatePhrase(key, lang_key) {
    $('#btn-' + key).text('...');
    var phrase = $('#phrase-' + key).val();
    var meaning = $('#meaning-' + key).val();
    var pronounce = $('#pronounce-' + key).val();
    var currentEditingLanguage = '<?php echo $current_editing_language; ?>';
    $.ajax({
        type: "POST",
        url: "<?php echo site_url('admin/update_dic_phrase_with_ajax'); ?>",
        data: {
            currentEditingLanguage: currentEditingLanguage,
            key: key,
            lang_key: lang_key,
            phrase: phrase,
            meaning: meaning,
            pronounce: pronounce
        },
        success: function(response) {
            $('#btn-' + key).html('<i class = "mdi mdi-check-circle"></i>');
            success_notify('<?php echo get_phrase('phrase_updated');?>');
        }
    });
}
</script>