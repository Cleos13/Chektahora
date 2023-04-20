var email_valid = false;
        $('[name="email"]').on('keyup', function(){
            var format_true = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            var email = $('[name="email"]').val();
            if(!format_true.test(email) || email == ''){
                $('[name="email"]').addClass('invalid');
                email_valid = false;
            }else{
                email_valid = true;
                $('[name="email"]').removeClass('invalid');
            }
        })
        $('[button="add_user"]').on('click', function(a){
            a.preventDefault();
            var u = $('[name="email"]').val();
            if(email_valid == true){
                $('.register-success').removeClass('display-none');
                setTimeout(function(){
                    $('.register-success').addClass('display-none');
                }, 2500);
                grecaptcha.ready(function() {
                    grecaptcha.execute('6LeRAI8eAAAAAGYdXRWWmQ3V6XqzSjeZ3LCLXJwh', {action: 'submit'}).then(function(token) {
                        $.post('api/blog/add_user.php', {u, token}, function(e){
                        })
                    })
                })
                $('[name="email"]').val('');
            }else{
                email_valid = false;
                $('[name="email"]').addClass('invalid');
            }
        })
        $('[select-blog="categoy"]').on('change', function(){
            var category = $(this).val();
            if(category == 'all'){
                window.location.href = "blog";
            }else{
                window.location.href = "blog?category=" + encodeURIComponent(category);
            }
        });