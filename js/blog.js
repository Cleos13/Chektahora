var email_valid = false;
/* var menu = $('[space="menu"]');
        $('[button="menu-mobile"]').click(function(e){
            e.preventDefault();
            console.log(window.innerWidth);
            if(menu.hasClass('display-none') ){
                menu.removeClass('display-none');
            }else{
                menu.addClass('display-none');
            }
        })
        if(window.innerWidth < 890){
            menu.addClass('display-none');
        }else{
            menu.removeClass('display-none');
        } */
        $('.input-search-blog').on('keyup', function(){
            var data = $('.posts');
            var _this = this;
            $.each($('.posts .post-blog'), function(){
                if($(this).html().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1){
                    $(this).addClass('display-none');
                }else{
                    $(this).removeClass('display-none');
                }
            })
        });
        $('[name="email-blog"]').on('keyup', function(){
            var format_true = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            var email = $('[name="email-blog"]').val();
            if(!format_true.test(email) || email == ''){
                $('[name="email-blog"]').addClass('invalid');
                email_valid = false;
            }else{
                $('[name="email-blog"]').removeClass('invalid');
                email_valid = true;
            }
        })
        $('[button="add_user"]').on('click', function(a){
            a.preventDefault();
            var u = $('[name="email-blog"]').val();
            if(email_valid == true){
                $('.register-success').removeClass('display-none');
                setTimeout(function(){
                    $('.register-success').addClass('display-none');
                }, 2500);
                console.log(u)
                grecaptcha.ready(function() {
                    grecaptcha.execute('6LeRAI8eAAAAAGYdXRWWmQ3V6XqzSjeZ3LCLXJwh', {action: 'submit'}).then(function(token) {
                        $.post('api/blog/add_user.php', {u, token}, function(e){
                            console.log(e)
                        })
                    })
                })
                $('[name="email-blog"]').val('');
            }else{
                email_valid = false;-blog
                $('[name="email-blog"]').addClass('invalid');
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