validate_name = false;
validate_password = false;
validate_password_c = false;
validate_email = false;
validate_type = true;
var format_email = /^([a-zA-Z0-9_\.\-\+])+\@((chektahora|glowdx)+\.)+(com)+$/;


function validateData(){
        var email = $('[name="email"]').val();
        var name = $('[name="name"]').val();
        var type = $('[name="type"]').val();
        var password = $('[name="password"]').val();
        var password_c = $('[name="password-confirm"]').val();

        if(name != ''){
            $('[name="name"]').removeClass('invalid');
            validate_name = true;
            }else{
            $('[name="name"]').addClass('invalid');
            validate_name = false;
        }
        if(email != '' && format_email.test(email)){
            $('[name="email"]').removeClass('invalid');
            validate_email = true;
            }else{
            $('[name="email"]').addClass('invalid');
            validate_email = false;
        }
        if(type != ''){
            $('[name="type"]').removeClass('invalid');
            validate_type = true;
            }else{
            $('[name="type"]').addClass('invalid');
            validate_type = false;
        }
        if(password != ''){
                $('[name="password"]').removeClass('invalid');
                validate_password = true;
            }else{
                $('[name="password"]').addClass('invalid');
                validate_password = false;
        }
        if(password_c === password && password_c != ''){
                $('[name="password-confirm"]').removeClass('invalid');
                validate_password_c = true;
            }else{
                $('[name="password-confirm"]').addClass('invalid');
                validate_password_c = false;
        }
        if(validate_name == true && validate_email == true && validate_type == true && validate_password == true  && validate_password_c == true){
            return true;
        }else{
            return false;
        }
    }

$('[name="name"]').on('keyup', function(){
    var name = $(this).val();
    if (name == '') {
        $(this).addClass('invalid');
        validate_email = false;
    } else {
        $(this).removeClass('invalid');
        validate_email = true;
    }
})
$('[name="email"]').on('keyup', function(){
    var email = $(this).val();
    if (!format_email.test(email)) {
        $(this).addClass('invalid');
        validate_email = false;
    } else {
        $(this).removeClass('invalid');
        validate_email = true;
    }
})
$('[name="password-confirm"]').on('keyup', function(){
    var password_c = $(this).val();
    var password = $('[name="password"]').val();
    if(password_c === password){
        validate_password_c = true;
        $(this).removeClass('invalid');
    }else{
        validate_password_c = false;
        $(this).addClass('invalid');
    }
})
$('[name="register-user"]').on('click', function(){
    if(validateData() == true){
        $('form').submit();
    }
})