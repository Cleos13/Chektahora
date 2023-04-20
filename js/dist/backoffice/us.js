let validate_img_desktop = false;
let id = '';
let name = '';
$(document).ready(function(){
    $('#close-modal').on('click', function (){
        $('.modal').removeClass('is-visible')
    })
    $.post('api/change_us.php', {name : 'all'}, function (get) {
        let images = JSON.parse(get);
        let post = '';
        for (const x of images) {
            if(x.name === 'imagen_1'){
                img('imagen_1', x.img)
            }
            if(x.name === 'imagen_2'){
                img('imagen_2', x.img)
            }
            if(x.name === 'realizamos'){
                img('realizamos', x.img)
            }
            if(x.name === 'blaine'){
                img('blaine', x.img)
            }
            if(x.name === 'rodrigo'){
                img('rodrigo', x.img)
            }
            if(x.name === 'post'){
                post += `<div class="banner-item">
                                <div>
                                    <img src="../img/us/${x.img}" width="150px">
                                </div>
                                <div>
                                    <button class="btn-delete-banner" delete="${x.id}" name_delete="${x.img}">Eliminar</button>
                                </div>
                            </div>`;
            }
        }
        $('#images_posts').html(post)
        function img(id, img) {
            $('#'+ id).attr({
                'style': 'background-image: url(../img/us/'+ img +')'
            })
        }
        $('[change]').on('click', function () {
            $('.modal').addClass('is-visible')
            name = $(this).attr('name');
            id = $(this).attr('change');
            let text = '';
            if(name === 'imagen_1' || name === 'imagen_2'){
                text = '*Las dimensiones son 600x1200 px, con medida maxima de 400KB para no sobrecargar la web.'
            }
            if(name === 'realizamos'){
                text = '*Las dimensiones son 1200x1200 px, con medida maxima de 400KB para no sobrecargar la web.'
            }
            if(name === 'rodrigo' || name === 'blaine'){
                text = '*Las dimensiones son 800x800 px, con medida maxima de 400KB para no sobrecargar la web.'
            }
            if(name === 'post'){
                text = '*Las dimensiones son 600x1200 px, con medida maxima de 400KB para no sobrecargar la web.'
            }
            $('#size-img').html(text)
            $('#change_img').on('click', function(){
                changeImage(id);
            })
        })
        $('[delete]').on('click', function () {
            let id_delete = $(this).attr('delete');
            let name_delete = $(this).attr('name_delete');
            $.post('api/changeImgUs.php?delete', {id_delete, name_delete}, function(e) {
                location.reload();
            })
        })
    })
})




function changeImage(id){
    let desktop = document.getElementById('space_img_desktop').files[0];
    if(validate_img_desktop === true){
        $('#change_img').addClass('display-none')
        $('#loading').removeClass('display-none')
        let formData = new FormData();
        formData.append('desktop', desktop);
        let xhttp_us = new XMLHttpRequest();
        xhttp_us.open("POST", 'api/changeImgUs.php?id=' + id, true);
        xhttp_us.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                let response = this.responseText;
                setTimeout(function () {
                    $('#loading').addClass('display-none')
                    location.reload();
                },1000)
            }
        };
        xhttp_us.send(formData);
    }
}

$('#space_img_desktop').on('change', function(){
    $('[for="space_img_desktop"]').removeClass('error', 'active')
    let imagen = document.getElementById("space_img_desktop").files[0];
    let _URL = window.URL || window.webkitURL;
    let img = new Image();
    img.src = _URL.createObjectURL(imagen);
    img.onload = function () {
        let medidas = img.height +'x'+img.width;
        let medidas_type = '';
        if(name === 'imagen_1' || name === 'imagen_2'){
            medidas_type = '600x1200';
        }
        if(name === 'realizamos'){
            medidas_type = '600x1200';
        }
        if(name === 'realizamos'){
            medidas_type = '1200x1200';
        }
        if(name === 'rodrigo' || name === 'blaine'){
            medidas_type = '800x800';
        }
        if(name === 'post'){
            medidas_type = '600x1200';
        }
        if(medidas === medidas_type){
            $('[for="space_img_desktop"]').addClass('active')
            $('[space="space_img_desktop"]').attr({
                'fill':'#00c900'
            })
            validate_img_desktop = true;
        }else{
            $('[for="space_img_desktop"]').addClass('error')
            $('[space="space_img_desktop"]').attr({
                'fill':'red'
            })
            validate_img_desktop = false;
        }
    }
})