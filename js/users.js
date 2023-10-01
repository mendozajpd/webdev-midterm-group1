$(document).on('click', '.delete-user', function(){
    var id = $(this).data('id');
    $('.delete-user').removeClass('hide');
    $(this).addClass('hide');
    $('.delete-options').addClass('hide');
    $('#options'+id).removeClass('hide');
});

$(document).on('click', '.delete-submit', function(){
    var id = $(this).data('id');
    var val = $(this).data('val');
    if(val=='No'){
        $('.delete-user').removeClass('hide');
        $('.delete-options').addClass('hide');
    }else{
        $.ajax({
            url:"./users_submit.php",
            method:"POST",
            data:{id:id,submit_delete:'Yes'},
            success:function(data){              
                $('#user'+id).remove();
            }
        });
    }
});