<script type="text/javascript">
function togglePriceFields(elem) {

    if ($("#" + elem).is(':checked')) {

        $('.paid-course-stuffs').slideUp();

    } else

        $('.paid-course-stuffs').slideDown();

}
</script>



<?php if ($page_name == 'courses-server-side'): ?>

<script type="text/javascript">
jQuery(document).ready(function($) {

    $.fn.dataTable.ext.errMode = 'throw';

    $('#course-datatable-server-side').DataTable({

        "processing": true,

        "serverSide": true,

        "ajax": {

            "url": "<?php echo site_url(strtolower($this->session->userdata('role')).'/get_courses') ?>",

            "dataType": "json",

            "type": "POST",

            "data": {
                selected_category_id: '<?php echo $selected_category_id; ?>',

                selected_status: '<?php echo $selected_status ?>',

                selected_instructor_id: '<?php echo $selected_instructor_id ?>',

                selected_price: '<?php echo $selected_price ?>'
            }

        },

        "columns": [

            {
                "data": "#"
            },

            {
                "data": "title"
            },

            {
                "data": "category"
            },

            {
                "data": "lesson_and_section"
            },

            {
                "data": "enrolled_student"
            },

            {
                "data": "status"
            },

            {
                "data": "price"
            },

            {
                "data": "actions"
            },

        ],

        "columnDefs": [{

            targets: "_all",

            orderable: false

        }]

    });

});
</script>

<?php endif; ?>



<?php if ($page_name == 'magazines-server-side'): ?>

<script type="text/javascript">
jQuery(document).ready(function($) {

    $.fn.dataTable.ext.errMode = 'throw';

    $('#magazine-datatable-server-side').DataTable({

        "processing": true,

        "serverSide": true,

        "ajax": {

            "url": "<?php echo site_url(strtolower($this->session->userdata('role')).'/get_magazines') ?>",

            "dataType": "json",

            "type": "POST",

            "data": {
                selected_category_id: '<?php echo $selected_category_id; ?>',

                selected_status: '<?php echo $selected_status ?>',

                selected_instructor_id: '<?php echo $selected_instructor_id ?>',

                selected_price: '<?php echo $selected_price ?>'
            }

        },

        "columns": [

            {
                "data": "#"
            },

            {
                "data": "title"
            },

            {
                "data": "category"
            },

            {
                "data": "lesson_and_section"
            },

            {
                "data": "enrolled_student"
            },

            {
                "data": "status"
            },

            {
                "data": "price"
            },

            {
                "data": "actions"
            },

        ],

        "columnDefs": [{

            targets: "_all",

            orderable: false

        }]

    });

});
</script>

<?php endif; ?>

<?php if ($page_name == 'question_paper-server-side'): ?>

<script type="text/javascript">
jQuery(document).ready(function($) {

    $.fn.dataTable.ext.errMode = 'throw';

    $('#question-paper-datatable-server-side').DataTable({

        "processing": true,

        "serverSide": true,

        "ajax": {

            "url": "<?php echo site_url(strtolower($this->session->userdata('role')).'/get_question_papers') ?>",

            "dataType": "json",

            "type": "POST",

            "data": {
                selected_category_id: '<?php echo $selected_category_id; ?>',

                selected_status: '<?php echo $selected_status ?>',

                selected_instructor_id: 'all',

                selected_price: '<?php echo $selected_price ?>'
            }

        },

        "columns": [

            {
                "data": "#"
            },

            {
                "data": "title"
            },

            {
                "data": "category"
            },

            {
                "data": "lesson_and_section"
            },

            {
                "data": "enrolled_student"
            },

            {
                "data": "status"
            },

            {
                "data": "price"
            },

            {
                "data": "actions"
            },

        ],

        "columnDefs": [{

            targets: "_all",

            orderable: false

        }]

    });

});
</script>

<?php endif; ?>

<?php if(isset($current_editing_language)): ?>
<script type="text/javascript">
var manageDict = null;
jQuery(document).ready(function($) {

    $.fn.dataTable.ext.errMode = 'throw';

    <?php if(isset($lang_key)):?>
    manageDict = $('#manage-dict').DataTable({

        "processing": true,

        "serverSide": true,

        "ajax": {

            "url": "<?php echo site_url('admin/get_dictionary') ?>",

            "dataType": "json",

            "type": "POST",

            "data": {
                lang_key: '<?php echo $lang_key; ?>',
            }

        },

        "columns": [{
                "data": "updated_phrase"
            },

            {
                "data": "updated_meaning"
            },

            {
                "data": "updated_pronounce"
            },

            {
                "data": "action"
            }
        ],

        "columnDefs": [{

            targets: "_all",

            orderable: false

        }]

    });
    <?php endif; ?>
});

function addPhrase() {
    var phrase = $('#phrase').val();
    var meaning = $('#meaning').val();
    var pronounce = $('#pronounce').val();
    var lang_key = $('[name="lang_key"]').val();
    var currentEditingLanguage = '<?php echo $current_editing_language; ?>';
    $.ajax({
        type: "POST",
        url: "<?php echo site_url('admin/manage_dictionary/add_phrase'); ?>",
        data: {
            currentEditingLanguage: currentEditingLanguage,
            lang_key: lang_key,
            phrase: phrase,
            meaning: meaning,
            pronounce: pronounce
        },
        success: function(response) {
            manageDict.ajax.reload(null, false); // user paging is not reset on reload
            success_notify('<?php echo get_phrase('phrase_added');?>');
            $('#phraseForm').trigger("reset");
        }
    });
}

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
            manageDict.ajax.reload(null, false); // user paging is not reset on reload
            $('#btn-' + key).html('<i class = "mdi mdi-check-circle"></i>');
            success_notify('<?php echo get_phrase('phrase_updated');?>');
        }
    });
}

</script>
<?php endif;?>