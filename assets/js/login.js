$('.login').click(function(){
    $.ajax({
        url:'router/router.php?ind=login',
        type:'POST',
        data:$('#login').serialize(),
        beforeSend:function(){
            $('#preloader').css({'display':'block'})
        },
        success:function(e){
            if(e == 'success'){
                $('#login_status').html('<p class="alert alert-success">Successfully Logged In</p>')
                window.location.href = 'profile.php';
            }else if(e == 'Invalid Username or Password'){
                $('#login_status').html('<p class="alert alert-danger">Invalid Username or Passworx</p>')
            }
            $('#preloader').css({'display':'none'})
        }
    })
})
$('.register').click(function(){
    $ajax({
        url:'router/router.php?ind=register',
        
    })

})