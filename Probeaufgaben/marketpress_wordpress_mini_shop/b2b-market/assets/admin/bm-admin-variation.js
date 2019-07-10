jQuery(document).ready(function( $ ) {

    $.each(variation_groups, function (i) {
        $.each(variation_groups[i], function (key, val) {
        
            $('#add-row-' + key + '_' + val).on('click', function () {
                var row = $('#repeatable-fieldset-' + key + '_' + val + ' .empty-row.screen-reader-text').clone(true);
                row.removeClass('empty-row screen-reader-text');
                row.insertBefore('#repeatable-fieldset-' + key + '_' + val + ' tbody>tr:last');
                return false;
            }); 
        });
    });    
});    


