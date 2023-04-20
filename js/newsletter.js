$(document).foundation();
        var valid = false;
        $('[data-open="newsletterModal"]').on('click', (e) => {
            e.preventDefault()
        })
        $('[name="new_user_newsletter"]').on('keyup', function (){
            var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (!regex.test(this.value)) {
                if (this.value == '') {
                    valid = true;
                    $('[alert="validate"]').addClass("display-none");
                } else {
                    $('[alert="validate"]').removeClass("display-none");
                    $('.alert-validate').html("No es un correo electrónico válido");
                    valid = false;
                }
            } else {
                $('[alert="validate"]').addClass("display-none");
                valid = true;
            }
        })
        $('[action="add_user_newsletter"]').on('click', (e) => {
            e.preventDefault();
            var new_user = $('[name="new_user_newsletter"]').val();
            $(this).prop('disabled', true);
            if (new_user != '' && valid == true) {
                grecaptcha.ready(function() {
                    grecaptcha.execute('6LeRAI8eAAAAAGYdXRWWmQ3V6XqzSjeZ3LCLXJwh', {action: 'submit'}).then(function(token) {
                        $.post('api/newsletter/newsletter.php', {new_user, token}, function(){
                        });
                    })
                })
                $('[alert="success"]').removeClass("display-none");
                $('[name="new_user_newsletter"]').val('');
                setTimeout(function () {
                    $('[alert="success"]').addClass("display-none");
                    $(this).prop('disabled', false);
                }, 7000);
            } else {
                $('[alert="validate"]').removeClass("display-none");
                $('.alert-validate').html("el correo electrónico es obligatorio");
                setTimeout(function(){
                    $('[alert="validate"]').addClass("display-none");
                    $(this).prop('disabled', false);
                }, 3000);
            }
        });
