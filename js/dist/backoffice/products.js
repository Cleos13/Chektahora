let validate_img_desktop = false;
let id_product = '';
let name = '';

//Function currency
const currency = function (number) {
    return new Intl.NumberFormat('es-MX', {
        style: 'currency',
        currency: 'MXN',
        minimumFractionDigits: 2
    }).format(number);
};

//AJAX get all data products TABLE
$.post('api/products.php?get=all', {}, function (e) {
    let get = JSON.parse(e);
    let temp = '';
    for (g of get) {
        let home = 'No activo';
        let store = 'No activo';
        if (parseInt(g['home']) === 1) {
            home = 'activo';
        }
        if (parseInt(g['store']) === 1) {
            store = 'activo';
        }
        temp += `<tr>
                    <td>${g['name']}</td>
                    <td>${currency(g['price'])}</td>
                    <td>${g['category']}</td>
                    <td>${home}</td>
                    <td>${store}</td>
                    <td style="display: flex; justify-content: space-between; align-items: center">
                        <button class="btn-products px-3" open-pop-v="${g['id']}">Modificar</button>
                        <button class="btn-products px-3" open-pop-i="${g['id']}">Imagenes</button>
                    </td>
                    <td>
                        <button class="px-3" type="button" style="cursor: pointer;" delete-product="${g['id']}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                              <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                            </svg>
                        </button>
                    </td>
                </tr>`;
    }
    $('#products').html(temp)
    $('button[open-pop-v]').on('click', function () {
        $('#view').toggleClass('is-visible')
        let id = $(this).attr('open-pop-v')
        $.post('api/products.php?get=item', {id}, function (e) {
            let get = JSON.parse(e);
            console.log(get)
            let temp_qe;
            for (g of get) {
                id_product = g['id'];
                temp_qe = '';
                for (get_qe of g['pe']) {
                    let k = randomId();
                    temp_qe += `<div class="grid-x" id="${k}" questions-product>
                            <input class="large-4 mx-2" type="text" placeholder="Titulo" value="${get_qe['title']}" id="title-${k}">
                            <input class="large-6 mx-2" type="text" placeholder="Contenido" value="${get_qe['content']}" id="content-${k}">
                            <div class="large-1 flex-center">
                                <button class="px-3 mb-2" type="button" style="cursor: pointer;" delete-qe-product="${k}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                         class="bi bi-trash3" viewBox="0 0 16 16">
                                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>`;
                }
                $('#name-product-selected').val(g['name'])
                $('#price-product-selected').val(g['price'])
                $('#id-product-selected').val(g['id'])
                $('[selected-product] option').attr("selected", false);
                if(parseInt(g['home']) === 1){
                    $('#active-home-select').attr("selected", true);
                }else{
                    $('#disable-home-select').attr("selected", true);
                }
                $('#select-' + g['category']).attr("selected", true);
                if(parseInt(g['store']) === 1){
                    $('#active-store-select').attr("selected", true);
                }else{
                    $('#disable-store-select').attr("selected", true);
                }
                $('[ref-product]').attr({
                    'ref-product': g['id']
                })
            }
            $('#questions-product').html(temp_qe)
            $('#save-change-product').on('click', function () {
                $('#loading-data-product').removeClass('display-none')
                $(this).addClass('display-none')
            })
        })


    })
    $('button[open-pop-i]').on('click', function(){
        let id = $(this).attr('open-pop-i')
        $('[add-image]').attr('add-image', id)
        $('#shadow-view-img').addClass('is-visible');
        $('[type="file"]').val('')
        getImages(id);
    })
    $('[delete-product]').on('click', function () {
        let id = $(this).attr('delete-product')
        $.post('api/products?action=delete-product', {id}, function () {
            location.reload();
        })
    })
})
$('[close-modal]').on('click', function () {
    $('.modal').removeClass('is-visible')
})
$('#close-modal-img-product').on('click', function () {
    $('#shadow-add-img').removeClass('is-visible')
})
$('button[open-pop-n]').on('click', function () {
    $('#new input').val('')
    $('#new').toggleClass('is-visible')
})


//Images
function changeImage(id){
    let desktop = document.getElementById('space_img_desktop').files[0];
    if(validate_img_desktop === true){
        $('#change_img').addClass('display-none')
        $('#loading-img').removeClass('display-none')
        let formData = new FormData();
        formData.append('desktop', desktop);
        let xhttp_us = new XMLHttpRequest();
        xhttp_us.open("POST", 'api/addImgProduct.php?id_product=' + id, true);
        xhttp_us.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                let response = this.responseText;
                setTimeout(function () {
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
        console.log(medidas)
        if(medidas === '1273x1264' || medidas === '1300x1271'){
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

function deleteImages(id, id_delete, name_delete){
    $.post('api/products.php?action=delete-img', {id_delete, name_delete}, function(e) {
        getImages(id)
    })
}

function getImages(id){
    $.post('api/products.php?get=image', {id}, function (e) {
        let images = JSON.parse(e);
        let temp_img = '';
        for (get_img of images) {
            temp_img += `<div class="banner-item">
                                <div>
                                    <img src="../img/products/${get_img['img']}" width="100px">
                                </div>
                                <div>
                                    <button class="btn-delete-banner" name_delete="${get_img['img']}" delete-img="${get_img['id']}">Eliminar</button>
                                </div>
                            </div>`;
        }
        $('#images-product-select').html(temp_img)
        $('[add-image]').on('click', function(){
            $('#shadow-add-img').addClass('is-visible')
            $('#change_img').on('click', function(){
                changeImage(id);
            })
            $('#change_img').removeClass('display-none')
            $('#loading-img').addClass('display-none')
            $('[for="space_img_desktop"]').removeClass('active')
            $('[space="space_img_desktop"]').attr({
                'fill':''
            })
        })
        $('[delete-img]').on('click', function () {
            let id_delete = $(this).attr('delete-img');
            let name_delete = $(this).attr('name_delete');
            deleteImages(id, id_delete, name_delete)
        })
    })
}



//New product
$('#add-question-new-product').on('click', function(){
    let k = Math.floor(Math.random() * 1000000);
    let questions = $("[questions-new-product]").length;
    if(questions === 0){
        $('#questions-new-product').html('');
    }
    $('#questions-new-product').append(`<div class="grid-x" id="${k}" questions-new-product>
                            <input class="large-4 mx-2" type="text" placeholder="Titulo" value="" id="title-${k}">
                            <input class="large-6 mx-2" type="text" placeholder="Contenido" value="" id="content-${k}">
                            <div class="large-1 flex-center">
                                <button class="px-3 mb-2" type="button" style="cursor: pointer;" delete="${k}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                         class="bi bi-trash3" viewBox="0 0 16 16">
                                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>`)
    $('[delete]').on('click', function (){
        let id = $(this).attr('delete');
        $('#' + id).remove()
        let questions = $("[questions-new-product]").length;
        if(questions === 0){
            $('#questions-new-product').append(`<h5 class="grid-x text-morado text-center fw-bold">Agrega contenido, eliminaste todo.</h5>`)
        }
    })
})

$('#add-question-product').on('click', function(){
    let k = randomId();
    let questions = $("[questions-product]").length;
    if(questions === 0){
        $('#questions-product').html('');
    }
    $('#questions-product').append(`<div class="grid-x" id="${k}" questions-product>
                            <input class="large-4 mx-2" type="text" placeholder="Titulo" value="" id="title-${k}">
                            <input class="large-6 mx-2" type="text" placeholder="Contenido" value="" id="content-${k}">
                            <div class="large-1 flex-center">
                                <button class="px-3 mb-2" type="button" style="cursor: pointer;" delete="${k}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                         class="bi bi-trash3" viewBox="0 0 16 16">
                                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>`)
    $('[delete]').on('click', function (){
        let id = $(this).attr('delete');
        $('#' + id).remove()
        let questions = $("[questions-product]").length;
        if(questions === 0){
            $('#questions-product').append(`<h5 class="grid-x text-morado text-center fw-bold">Agrega contenido, eliminaste todo.</h5>`)
        }
    })
})

$('#save-new-product').on('click', function () {
    $('#loading-new-product').removeClass('display-none')
    $(this).addClass('display-none')
    let name = $('#name-new-product').val();
    let category = $('#category-new-product').val();
    let price = $('#price-new-product').val();
    let status_home = $('#status-home').val();
    let status_store = $('#status-store').val();
    let questions = [];
    let get_questions = document.querySelectorAll("[questions-new-product]")
    get_questions.forEach((elemento) => {
        questions.push([$('#title-' + elemento.id).val(), $('#content-' + elemento.id).val()])
    })
    $.post('api/products?action=add', {name, category, price, status_home, status_store, questions}, function () {
        location.reload();
    })
})

$('#save-change-product').on('click', function () {
    $('#loading-product').removeClass('display-none')
    $(this).addClass('display-none')
    let id = $('#id-product-selected').val();
    let name = $('#name-product-selected').val();
    let category = $('#category-product-selected').val();
    let price = $('#price-product-selected').val();
    let status_home = $('#status-home-selected').val();
    let status_store = $('#status-store-selected').val();
    let questions = [];
    let get_questions = document.querySelectorAll("[questions-product]")
    get_questions.forEach((elemento) => {
        questions.push([$('#title-' + elemento.id).val(), $('#content-' + elemento.id).val()])
    })
    $.post('api/products?action=save', {id, name, category, price, status_home, status_store, questions}, function (e) {
        location.reload();
    })
})

function randomId(){
    return Math.floor(Math.random() * 1000000);
}