$(document).ready(function(){

})



// update password
$('#btn_update_pass').click(function (event) {
    event.preventDefault();

    if($('#changePasswordForm #new_password').val()!=$('#changePasswordForm #confirm_password').val()){
        alert("error");
        return;
    }
    else{
        $('#changePasswordForm').submit();
    }

});