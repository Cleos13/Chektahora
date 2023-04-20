var validate_name = false;
var validate_email = false;
var validate_text = false;
function validateData() {
    var format_text = /^([a-zA-Z0-9. ])+$/;
    var format_email = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var name = $('#name-message').val();
    var email = $('#email-message').val();
    var text = $('#text-message').val();

    if (name != '' && format_text.test(name)) {
        $('#name-message').removeClass('invalid');
        validate_name = true;
    } else {
        $('#name-message').addClass('invalid');
        validate_name = false;
    }
    if (text != '' && format_text.test(text)) {
        $('#text-message').removeClass('invalid');
        validate_text = true;
    } else {
        $('#text-message').addClass('invalid');
        validate_text = false;
    }
    if (!format_email.test(email) || email == '') {
        $('#email-message').addClass('invalid');
        validate_email = false;
    } else {
        $('#email-message').removeClass('invalid');
        validate_email = true;
    }
    if (validate_email == true && validate_text == true && validate_name == true) {
        return true;
    } else {
        return false;
    }
}
$('#submit-message').on('click', function() {
    var name = $('#name-message').val();
    var email = $('#email-message').val();
    var text = $('#text-message').val();
    if(validateData() == true){
        grecaptcha.ready(function() {
            grecaptcha.execute('6LeRAI8eAAAAAGYdXRWWmQ3V6XqzSjeZ3LCLXJwh', {action: 'submit'}).then(function(token) {
                $.post('api/contacto/submit-message.php', {name,email,text,token}, function(e) {
                    console.log(e)
                    $('#name-message').val('');
                    $('#email-message').val('');
                    $('#text-message').val('');
                    $('#alert-message').removeClass('display-none');
                    setTimeout(function() {
                        $('#alert-message').addClass('display-none');
                    }, 3500)
                })
            })
        })
    }
})
$('#form-message').on('keyup', function(){
    var format_text = /^([a-zA-Z0-9. ]{5,40})+$/;
    var format_email = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var name = $('#name-message');
    var email = $('#email-message');
    var text = $('#text-message');
    if(name.val().length >= 5){
        if (format_text.test(name.val())) {
            name.removeClass('invalid');
        } else {
            console.log('entra')
            name.addClass('invalid');
        }
    }
    if(text.val().length >= 10){
        if (format_text.test(text.val())) {
            text.removeClass('invalid');
        } else {
            text.addClass('invalid');
        }
    }
    if(email.val().length >= 10){
        if (!format_email.test(email.val())) {
            email.addClass('invalid');
        } else {
            email.removeClass('invalid');
        }
    }
})