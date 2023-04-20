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

$('[close-modal]').on('click', function () {
    $('.modal').removeClass('is-visible')
})
$('button[open-pop-n]').on('click', function () {
    //$('#new input').val('')
    $('#new').toggleClass('is-visible')
})
let now = moment().format("YYYY-MM-DD");
$('#date-orders').daterangepicker({
    minDate: now,
    singleDatePicker: true,
    maxYear: parseInt(moment().format('YYYY'),10),
    "locale": {
        "format": "YYYY-MM-DD",
        "separator": " - ",
        "applyLabel": "Aplicar",
        "cancelLabel": "Cancelar",
        "fromLabel": "De",
        "toLabel": "a",
        "customRangeLabel": "Custom",
        "weekLabel": "S",
        "daysOfWeek": [
            "Do",
            "Lu",
            "Ma",
            "Mi",
            "Ju",
            "Vi",
            "Sa"
        ],
        "monthNames": [
            "Enero",
            "Febrero",
            "Marzo",
            "Abril",
            "Mayo",
            "Junio",
            "Julio",
            "Agosto",
            "Septiembre",
            "Octubre",
            "Noviembre",
            "Diciembre"
        ],
        "firstDay": 1,
        cancelLabel: 'Clear'
    },
});

function getPromotionsAll(){
    $.post('api/promotions.php?get=promotions-all', {}, function (e) {
        let promotions = JSON.parse(e);
        let tmp = '';
        for (const promotion of promotions) {
            tmp += `<tr>
                        <td style="padding: 20px 30px;">${promotion['name']}</td>
                        <td style="padding: 20px 30px;">${promotion['type']}</td>
                        <td style="padding: 20px 30px;">${promotion['amount_discount']}</td>
                        <td style="padding: 20px 30px;">${promotion['porcent_discount']}%</td>
                        <td style="padding: 20px 30px;">${promotion['type_discount']}</td>
                        <td style="padding: 20px 30px;">${promotion['date']}</td>
                        <td><button class="btn-products px-3" products-promotion="${promotion['id']}">CONDICIONES</button></td>
                        <td>
                            <button class="px-3" type="button" style="cursor: pointer;" delete-promotion="${promotion['id']}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                </svg>
                            </button>
                        </td>
                    </tr>`
        }

        $('#promotions').html(tmp)
        $('[delete-promotion]').on('click', function(){
            let id = $(this).attr('delete-promotion')
            $.post('api/promotions?action=delete', {id}, function () {
                location.reload();
            })
        })

        $('[products-promotion]').on('click', function(){
            $('#view-products').addClass('is-visible')
            let id = $(this).attr('products-promotion');
            $.post('api/promotions?get=items', {id}, function (p) {
                let products = JSON.parse(p)
                let tmp = '';
                for (const prod of products) {
                    tmp += `<tr>
                        <td style="padding: 20px 30px;">${prod[0]}</td>
                        <td style="padding: 20px 30px;">${prod[1]}</td>
                    </tr>`
                }
                $('#products-promotion').html(tmp)
            })
        })
    })
}
getPromotionsAll()


function getProductsAll(){
    $.post('api/promotions.php?get=products-all', {}, function (e) {
        let products = JSON.parse(e);
        let tmp = '';
        for (const product of products) {
            tmp += `<option value="${product['id']}">${product['name']}</option>`
        }
        $('[products-list-promotion]').html(tmp)
    })
}


getProductsAll()

function promotionSelect(promotion){
    let amount_require = $('[amount-required]')
    let product_include = $('#promotion-include-product')
    let discount_include = $('#promotion-include-discount')
    let discount_product_include = $('#promotion-include-product-and-discount')
    let promo_for = $('#promotion-include-product-for')

    promo_for.addClass('display-none');
    discount_include.addClass('display-none');
    product_include.addClass('display-none');
    amount_require.addClass('display-none');
    discount_product_include.addClass('display-none');
    if(promotion === '1'){
        amount_require.removeClass('display-none');
        promo_for.removeClass('display-none');
    }
    if(promotion === '2'){
        amount_require.removeClass('display-none');
        product_include.removeClass('display-none');
    }
    if(promotion === '3'){
        amount_require.removeClass('display-none');
        discount_include.removeClass('display-none');
    }
    if(promotion === '4'){
        amount_require.removeClass('display-none');
        discount_product_include.removeClass('display-none');
    }
    if(promotion === '5'){
        amount_require.removeClass('display-none');
    }
}

$('#promotions-options').on('change', function () {
    let promotion = $('[promotion]:selected').attr('promotion');
    promotionSelect(promotion)
})

$('#add-item-promotion').on('click', function () {
    let k = Math.floor(Math.random() * 1000000);
    let questions = $("[item-promotion]").length;
    if(questions === 0){
        $('#items-promotion').html('');
    }
    $('#items-promotion').append(`<div id="${k}" item-promotion>
                            <div class="grid-x">
                                <div class="large-7 grid-x">
                                    <label class="large-12 mb-2">Compra</label>
                                    <select class="large-8" products-list-promotion="${k}"></select>
                                    <select class="large-3 mx-2 display-none" amount-required="${k}">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                                <div class="large-1 flex-center mt-2">
                                    <button class="px-3" type="button" style="cursor: pointer;" delete-item="${k}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                             class="bi bi-trash3" viewBox="0 0 16 16">
                                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>`)
    let promotion = $('[promotion]:selected').attr('promotion');
    promotionSelect(promotion)
    $('#promotions-options').on('change', function () {
        let promotion = $('[promotion]:selected').attr('promotion');
        promotionSelect(promotion)
    })
    $('[delete-item]').on('click', function (){
        let id = $(this).attr('delete-item');
        console.log(id)
        $('#' + id).remove()
        let items = $("[item-promotion]").length;
        if(items === 0){
            $('#items-promotion').append(`<h5 class="grid-x text-morado text-center fw-bold">Agrega contenido, eliminaste todo.</h5>`)
        }
    })
    getProductsAll();
})

$('#type-discount').on('change', function () {
    let type = $(this).val()
    $('[discount-input]').addClass('display-none')
    $('#' + type + '-total').removeClass('display-none')
})
$('#type-discount-product').on('change', function () {
    let type = $(this).val()
    $('[discount-input-product]').addClass('display-none')
    $('#' + type + '-total-product').removeClass('display-none')
})

$('#save-new-promotion').on('click', function () {
    let name = $('#name-new').val()
    let date = $('#date-orders').val()
    let type = $('#promotions-options').val()

    let product_1 = $('#product-apply-for').val()

    let product_2 = $('#product-apply-free').val()
    let amount_product_2 = $('#amount-product-apply-free').val()

    let product_4 = $('#product-apply-and-discount').val()
    let porcent_4 = $('#porcent-total-product').val()
    let amount_4 = $('#amount-total-product').val()
    let type_discount_4 = $('#type-discount-product').val()

    let porcent_3 = $('#porcent-total').val()
    let amount_3 = $('#amount-total').val()
    let type_discount_3 = $('#type-discount').val()


    let items = [];
    let get_items = document.querySelectorAll("[item-promotion]")
    get_items.forEach((elemento) => {
        items.push([$('[products-list-promotion="' + elemento.id + '"]').val(), $('[amount-required="' + elemento.id+'"]').val()])
    })

    let promotion = $('[promotion]:selected').attr('promotion');

    $.post('api/promotions?action=add', {promotion, name, date, type, product_1, product_2, amount_product_2, product_4, porcent_4, amount_4, type_discount_4, porcent_3, amount_3, type_discount_3, items}, function () {
        location.reload();
    })
})