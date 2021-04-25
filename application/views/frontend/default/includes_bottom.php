<script src="<?php echo base_url().'assets/frontend/default/js/vendor/modernizr-3.5.0.min.js'; ?>"></script>
<script src="https://unpkg.com/isotope-layout@3.0.6/dist/isotope.pkgd.min.js"></script>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/nestable2/1.6.0/jquery.nestable.min.js" charset="utf-8" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"  integrity="sha384-FzT3vTVGXqf7wRfy8k4BiyzvbNfeYjK+frTVqZeNDFl8woCbF0CYG6g2fMEFFo/i" crossorigin="anonymous"></script>
<script src="<?php echo base_url().'assets/frontend/default/js/bootstrap-tagsinput.min.js'; ?>"> defer</script>
<script src="<?php echo base_url().'assets/frontend/default/js/custom.js'; ?>"></script>


<!-- SHOW TOASTR NOTIFIVATION -->
<?php if ($this->session->flashdata('flash_message') != ""):?>

<script type="text/javascript">
	toastr.success('<?php echo $this->session->flashdata("flash_message");?>');
</script>

<?php endif;?>

<?php if ($this->session->flashdata('error_message') != ""):?>

<script type="text/javascript">
	toastr.error('<?php echo $this->session->flashdata("error_message");?>');
</script>

<?php endif;?>

<?php if ($this->session->flashdata('info_message') != ""):?>

<script type="text/javascript">
	toastr.info('<?php echo $this->session->flashdata("info_message");?>');
</script>

<?php endif;?>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

<script>
var _alphabetSearch = '';

$.fn.dataTable.ext.search.push(function(settings, searchData) {
    if (!_alphabetSearch) {
        return true;
    }

    if (searchData[0].charAt(0) === _alphabetSearch) {
        return true;
    }

    return false;
});


$(document).ready(function() {
    var table = $('#front-dict').DataTable();

    var alphabet = $('<div class="alphabet"/>').append('Search: ');

    $('<span class="clear active"/>')
        .data('letter', '')
        .html('None')
        .appendTo(alphabet);

    for (var i = 0; i < 26; i++) {
        var letter = String.fromCharCode(65 + i);

        $('<span/>')
            .data('letter', letter)
            .html(letter)
            .appendTo(alphabet);
    }

    alphabet.insertBefore(table.table().container());

    alphabet.on('click', 'span', function() {
        alphabet.find('.active').removeClass('active');
        $(this).addClass('active');

        _alphabetSearch = $(this).data('letter');
        table.draw();
    });
});
</script>