$('.register').click(function(){
    $.ajax({
        url:'router/router.php?ind=register',
        type:'POST',
        data:$('#registration').serialize(),
        beforeSend:function(){
            $('#preloader').css({'display':'block'})
        },
        success:function(e){
            if(e == 'success'){
                $('#registration_status').html('<p class="alert alert-success">Successfully Registered In</p>')
                //window.location.href = 'profile.php';
                $('#username').val('')
                $('#name').val()
                $('#password').val()
            }else if(e == 'Username alreadt exist'){
                $('#registration_status').html('<p class="alert alert-danger">Username already exist!</p>')
            }
            $('#preloader').css({'display':'none'})
        }
    })
})