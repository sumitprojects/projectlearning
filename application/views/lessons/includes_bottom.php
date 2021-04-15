<script src="<?php echo base_url().'assets/frontend/default/js/vendor/modernizr-3.5.0.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/frontend/default/js/vendor/jquery-3.2.1.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/frontend/default/js/popper.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/frontend/default/js/bootstrap.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/frontend/default/js/slick.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/frontend/default/js/select2.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/frontend/default/js/tinymce.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/frontend/default/js/multi-step-modal.js'; ?>"></script>
<script src="<?php echo base_url().'assets/frontend/default/js/jquery.webui-popover.min.js'; ?>"></script>
<script src="https://content.jwplatform.com/libraries/O7BMTay5.js"></script>
<script src="<?php echo base_url().'assets/frontend/default/js/main.js'; ?>"></script>
<script src="<?php echo base_url().'assets/global/toastr/toastr.min.js'; ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/nestable2/1.6.0/jquery.nestable.min.js" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"
    integrity="sha384-FzT3vTVGXqf7wRfy8k4BiyzvbNfeYjK+frTVqZeNDFl8woCbF0CYG6g2fMEFFo/i" crossorigin="anonymous">
</script>
<script src="<?php echo base_url().'assets/frontend/default/js/bootstrap-tagsinput.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/frontend/default/js/custom.js'; ?>"></script>
<script src="<?php echo base_url().'assets/lessons/js/custom.js'; ?>"></script>
<script src="<?php echo base_url().'assets/lessons/js/pdf.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/lessons/js/jquery.ipages.min.js'; ?>"></script>

<script>
function toggle_lesson_view() {
    $('#lesson-container').toggleClass('justify-content-center');
    $("#video_player_area").toggleClass("order-md-1");
    $("#lesson_list_area").toggleClass("col-lg-5 order-md-1");
}

$('.ipgs-flipbook').ipages({

    responsive: true, // Sets the book scaling depending on the size of the container
    autoFit: false, // If true, the book fill all available space
    autoHeight: true, // If true, the book container with automatically adjusted height

    pageWidth: 300, // Sets the book page width in px
    pageHeight: 360, // Sets the book page height in px
    padding: 10,
    toolbar: true, // Show/hide the toolbar control
    toolbarControls: [{
            type: 'share',
            active: false,
            title: 'share',
            icon: 'ipgs-icon-share',
            optional: true
        },
        {
            type: 'outline',
            active: false,
            title: 'toggle outline/bookmarks',
            icon: 'ipgs-icon-outline',
            optional: true
        },
        {
            type: 'thumbnails',
            active: false,
            title: 'toggle thumbnails',
            icon: 'ipgs-icon-thumbnails',
            optional: true
        },
        {
            type: 'gotofirst',
            active: true,
            title: 'goto first page',
            icon: 'ipgs-icon-gotofirst',
            optional: false
        },
        {
            type: 'prev',
            active: true,
            title: 'prev page',
            icon: 'ipgs-icon-prev',
            optional: false
        },
        {
            type: 'pagenumber',
            active: true,
            title: 'goto page number',
            icon: 'ipgs-icon-pagenumber',
            optional: false
        },
        {
            type: 'next',
            active: true,
            title: 'next page',
            icon: 'ipgs-icon-next',
            optional: false
        },
        {
            type: 'gotolast',
            active: true,
            title: 'goto last page',
            icon: 'ipgs-icon-gotolast',
            optional: false
        },
        {
            type: 'zoom-in',
            active: true,
            title: 'zoom in',
            icon: 'ipgs-icon-zoom-in',
            optional: false
        },
        {
            type: 'zoom-out',
            active: true,
            title: 'zoom out',
            icon: 'ipgs-icon-zoom-out',
            optional: false
        },
        {
            type: 'zoom-default',
            active: true,
            title: 'zoom default',
            icon: 'ipgs-icon-zoom-default',
            optional: true
        },
        {
            type: 'optional',
            active: true,
            title: 'optional',
            icon: 'ipgs-icon-optional',
            optional: false
        },
        {
            type: 'fullscreen',
            active: true,
            title: 'toggle fullscreen',
            icon: 'ipgs-icon-fullscreen',
            optional: true
        },
        {
            type: 'sound',
            active: true,
            title: 'turn on/off flip sound',
            icon: 'ipgs-icon-sound',
            optional: true
        },
        {
            type: 'download',
            active: false,
            title: 'download pdf',
            icon: 'ipgs-icon-download',
            optional: true
        },
    ],

});
</script>