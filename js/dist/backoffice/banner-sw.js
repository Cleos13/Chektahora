$(document).ready(function(){
    function getBanners(page){
        console.log(page)
        $.post('api/getBanners.php', {page}, function(e) {
            var a = JSON.parse(e);
            let results;
            if(a.length != 0){
                results = a.map(function(d) {
                    return `<div class="banner-item">
                                <div>
                                    <img src="../img/banners/mobile/${d.img_mobile}" width="50px">
                                </div>
                                <div>
                                    <img src="../img/banners/desktop/${d.img_desktop}" width="100px">
                                </div>
                                <div>
                                    <button class="btn-delete-banner" img_name_desktop="${d.img_desktop}" img_name_mobile="${d.img_mobile}" ref_banner="${d.id}" delete>Eliminar</button>
                                </div>
                            </div>`;
                })
                $('#' + page).html(results)
                $('[delete]').on('click', function(){
                    let delete_id = $(this).attr('ref_banner');
                    let desktop = $(this).attr('img_name_desktop');
                    let mobile = $(this).attr('img_name_mobile');
                    $.post('api/getBanners.php?delete', {delete_id, desktop, mobile}, function(e) {
                        console.log(e)
                        if(e == 1){
                            getBanners('home');
                            getBanners('nosotros');
                            getBanners('its');
                            getBanners('covid');
                            getBanners('clinicos');
                        }
                    })
                })
            }else{
                results = `<div class="banner-item">
                                <div class="fw-bold text-morado">Sin banners activos</div>
                            </div>`;
                            $('#' + page).html(results)
            }
        })
    }
    getBanners('home');
    getBanners('nosotros');
    getBanners('its');
    getBanners('covid');
    getBanners('clinicos');
    let validate_img_desktop = false;
    let validate_img_mobile = false;
    $('#space_img_desktop').on('change', function(){
        let space = $(this).attr('id');
        console.log(space);
        $('[for="'+ space +'"]').removeClass('error', 'active')
        var imagen = document.getElementById("space_img_desktop").files[0];
        var _URL = window.URL || window.webkitURL;
        var img = new Image();
        img.src = _URL.createObjectURL(imagen);
        img.onload = function () {
            console.log(img.height +' '+img.width);
            var medidas = img.height +'x'+img.width;
            if(medidas == '1552x3840'){
                $('[for="'+ space +'"]').addClass('active')
                $('[space="'+ space +'"]').attr({
                    'fill':'#00c900'
                })
                validate_img_desktop = true;
            }else{
                $('[for="'+ space +'"]').addClass('error')
                $('[space="'+ space +'"]').attr({
                    'fill':'red'
                })
                validate_img_desktop = false;
                alertBanner('La imagen no tiene las medidas correctas para desktop (1552x3840)');
            }
        }
    })
    $('#space_img_mobile').on('change', function(){
        let space = $(this).attr('id');
        console.log(space);
        $('[for="'+ space +'"]').removeClass('error', 'active')
        var imagen = document.getElementById("space_img_mobile").files[0];
        var _URL = window.URL || window.webkitURL;
        var img = new Image();
        img.src = _URL.createObjectURL(imagen);
        img.onload = function () {
            console.log(img.height +' '+img.width);
            var medidas = img.height +'x'+img.width;
            if(medidas == '1552x1164'){
                $('[for="'+ space +'"]').addClass('active')
                $('[space="'+ space +'"]').attr({
                    'fill':'#00c900'
                })
                validate_img_mobile = true;
            }else{
                $('[for="'+ space +'"]').addClass('error')
                $('[space="'+ space +'"]').attr({
                    'fill':'red'
                })
                validate_img_mobile = false;
                alertBanner('La imagen no tiene las medidas correctas para mobile (1552x1164)');
            }
        }
    })
    $('[add="modal"]').on('click', function(){
        let page = $(this).attr('page');
        $('#shadow-add-banner').addClass('is-visible');
        $('[for="space_img_desktop"]').removeClass('active')
        $('[space="space_img_desktop"]').attr({
            'fill':''
        })
        $('[for="space_img_mobile"]').removeClass('active')
        $('[space="space_img_mobile"]').attr({
            'fill':''
        })
        $('[type="file"]').val('')
        console.log(page)
        $('#add_banner').on('click', function(){
            addBanner(page);
        })
    })
    function addBanner(page){
        var desktop = document.getElementById('space_img_desktop').files[0];
        var mobile = document.getElementById('space_img_mobile').files[0];
        if(validate_img_desktop == true && validate_img_mobile == true){
            $('#add_banner').addClass('display-none')
            $('#loading').removeClass('display-none')
            var formData = new FormData();
            formData.append('desktop', desktop);
            formData.append('mobile', mobile);
            var xhttp = new XMLHttpRequest();
                xhttp.open("POST", 'api/addBanner.php?page=' + page, true);
                xhttp.onreadystatechange = function() {
                   if (this.readyState == 4 && this.status == 200) {
                     var response = this.responseText;
                     console.log(response);
                     if(response == true){
                        location.reload();
                     }else{
                        alertBanner('Sucedio un problema');
                     }
                   }
                };
                xhttp.send(formData);
        }
    }
    function alertBanner(text){
        $('.alert-banner').html(text).addClass('active');
        setTimeout(function(){
            $('.alert-banner').removeClass('active')
        }, 4000)
    }
    $('#close-modal').on('click', function(){
        $('#shadow-add-banner').removeClass('is-visible')
    })
})