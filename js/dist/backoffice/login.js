validate_password = false;
validate_email = false;
    var format_email = /^([a-zA-Z0-9 À-ÿ\u00f1\u00d1_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z 0-9]{2,4})+$/;
    $('[name="email"]').on('keyup', function(){
        var email = $(this).val();
        console.log(email);
        if (!format_email.test(email)) {
            $(this).addClass('invalid');
            validate_email = false;
        } else {
            $(this).removeClass('invalid');
            validate_email = true;
        }
    })
    setTimeout(function(){})
    $('[name="password"]').on('change', function(){
        var password = $(this).val().length;
        if(password == 0 || password < 2) {
            validate_password = false;
            $(this).addClass('invalid');
        }else{
            validate_password = true;
            $(this).removeClass('invalid');
        }
    })
    $('#login').on('click', function(e){
        e.preventDefault();
        var email = $('[name="email"]').val();
        var password = $('[name="password"]').val();
        if(password != '' && validate_password == true && email != '' && validate_email == true){
            /* grecaptcha.ready(function() {
                grecaptcha.execute('6LeRAI8eAAAAAGYdXRWWmQ3V6XqzSjeZ3LCLXJwh', {action: 'submit'}).then(function(token) { */
                    var r = [{
                        o : btoa(email),
                        i : btoa(password)
                    }]
                    $.post('api/verify.php', {r}, function(s) {
                        var a = s;
                        console.log(a)
                        if(a == 1){
                            window.location.href = "index";
                        }else if(a == 2){
                            window.location.href = "login?a=null";
                        }else if(a == 3){
                            window.location.href = "login?a=user";
                        }else if(a == 4){
                            window.location.href = "login?a=password";
                        }
                    })
                /* });
            }); */
        }else{
            if(password != 0 || password > 6) {
                validate_password = false;
                $('[name="password"]').removeClass('invalid')
            }else{
                validate_password = true;
                $('[name="password"]').addClass('invalid')
            }
            if (!format_email.test(email)) {
                $('#invalid-email').addClass('invalid')
                validate_email = false;
            } else {
                $('#invalid-email').removeClass('invalid')
                validate_email = true;
            }
        }
    })