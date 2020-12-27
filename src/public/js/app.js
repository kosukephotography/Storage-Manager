$(function(){
    $('#is_delete').change(function () {
    
        const isDelete = $(this).prop('value');
    
        if (isDelete == '有効') {
            $('#reason').prop('disabled', false);
        } else {
            $('#reason').prop('disabled', true);
        }
    
    });
});