$(function(){
    $('#deleted_at').change(function () {
    
        const deleted_at = $(this).prop('value');
    
        if (deleted_at == '1') {
            $('#reason').prop('disabled', false);
        } else {
            $('#reason').prop('disabled', true);
        }
    
    });
})