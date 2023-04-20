        if(localStorage.getItem('menu-estatus') == 'close' || localStorage.getItem('menu-estatus') == null){
            $('.menu-backoffice').hide();
                $('#menu-backoffice').attr({
                    'style': 'width: 1.4%;'
                }).addClass('menu-close')
        }
        if(localStorage.getItem('menu-estatus-mobile') == 'close' || localStorage.getItem('menu-estatus-mobile') == null){
            $('.menu-backoffice-mobile').hide();
                $('.menu-mobile-options').hide().addClass('menu-close')
        }
        $('#btn-backoffice').click(function(){
            if(!$('#menu-backoffice').hasClass('menu-close')){
                localStorage.setItem('menu-estatus', 'close');
                $('.menu-backoffice').hide();
                $('#menu-backoffice').attr({
                    'style': 'width: 1.4%; transition: width 0.5s;'
                }).addClass('menu-close')
            }else{
                localStorage.setItem('menu-estatus', 'open');
                $('.menu-backoffice').show(200);
                $('#menu-backoffice').attr({
                    'style': 'width: 450px !important; transition: width 0.6s;'
                }).removeClass('menu-close')
            }
        })
        $('#menu-mobile-backoffice, #close-mobile-backoffice').click(function(){
            if(!$('.menu-mobile-options').hasClass('menu-close')){
                localStorage.setItem('menu-estatus-mobile', 'close');
                $('.menu-backoffice-mobile').hide();
                $('.menu-mobile-options').hide().addClass('menu-close')
            }else{
                localStorage.setItem('menu-estatus-mobile', 'open');
                $('.menu-backoffice-mobile').show();
                $('.menu-mobile-options').show(100).removeClass('menu-close')
            }
        })