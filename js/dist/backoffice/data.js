let pay = 'Conekta';
function getOrderData(id){
    $('[data-shadow]').html('');
    $('#estatus_green_data').removeClass('active')
    $('#estatus_yellow_data').removeClass('active')
    $('[space="data_covid"]').addClass('display-none')
    $('[space="data_its"]').addClass('display-none')
    $('[space="data_clinicos"]').addClass('display-none')
    $.post('api/getOrders.php?get=data_user', {id}, function(d) {
        var a = JSON.parse(d);
        $('#promotion').html(a['data'][0].promotion);
        $('#date_pay_data').html(a['data'][0].fecha_pago);
        $('#hours_pay_data').html(a['data'][0].hora_pago);
        $('#name_data').html(a['data'][0].nombre);
        $('#tel_data').html(a['data'][0].tel);
        $('#email_data').html(a['data'][0].email);
        $('#sex_data').html(a['data'][0].sexo);
        $('#fn_data').html(a['data'][0].fecha_nacimiento);
        $('#con_data').html(a['data'][0].conoce);
        $('#street_data').html(a['data'][0].calle);
        $('#no_ext_data').html(a['data'][0].no_ext);
        $('#no_int_data').html(a['data'][0].no_int);
        $('#cp_data').html(a['data'][0].cp);
        $('#suburb_data').html(a['data'][0].colonia);
        $('#municipality_data').html(a['data'][0].municipio);
        $('#state_data').html(a['data'][0].estado);
        $('#id__order').html(a['data'][0].ID_compra);
        $('#date_covid_data').html(a['data'][0].fecha_covid);
        $('#hora_covid_data').html(a['data'][0].hora_covid);
        $('#number_order').html('#' + a['data'][0].orden);
        $.post('api/getOrders.php?get=products_user', {id}, function(r) {
            var p = JSON.parse(r);
            var num_c = 0;
            var num_cli = 0;
            var num_i = 0;
            let template = p.map(function(p) {
                if(p.categoria == 'covid'){
                    num_c += 1;
                }else if(p.categoria == 'its'){
                    num_i += 1;
                }else if(p.categoria == 'clinicos'){
                    num_cli += 1;
                }
                return `<div>- ${p.nombre} (${p.cantidad})</div>`;
            })
            $('#products_order').prepend(template);
            if(num_c >= 1){
                $('#med_data').html(a['data'][0].medicamentos);
                $('#sin_data').html(a['data'][0].sintomas);
                $('#pas_data').html(a['data'][0].pasaporte);
                $('[space="data_covid"]').removeClass('display-none')
            }
            if(num_i >= 1){
                $('#its_data').html(a['data'][0].its);
                $('[space="data_its"]').removeClass('display-none')
            }
            if(num_cli >= 1){
                $('#clinicos_data').html(a['data'][0].clinicos);
                $('[space="data_clinicos"]').removeClass('display-none')
            }
            if($('#id_order').length != 0){
                $('#id_order').attr({
                    'href' : 'order?order=' + a['data'][0].ID
                })
            }
            if(a['data'][0].estatus_customer == 1){
                $('#estatus_green_data').addClass('active')
            }
            if(a['data'][0].estatus_logistica == 1){
                $('#estatus_yellow_data').addClass('active')
            }
            $('.change-estatus').attr({
                'ref': a['data'][0].ID
            })
            $('#estatus_logistica').click(function(){
                let ref = $(this).attr('ref');
                updateEstatusL(ref);
            })
            $('#estatus_customer').click(function(){
                let ref = $(this).attr('ref');
                updateEstatusC(ref);
            })
        })
        if(a['data'][0].personas_extras == 1){
            $.post('api/getOrders.php?get=people_plus', {id}, function(r) {
                let p = JSON.parse(r);
                let template_plus = '<br><div><h4 class="fw-bold">Personas extras </h4></div>';
                for (const d of p) {
                    template_plus += `
                                        <div>
                                            <span class="fw-bold">Nombre y apellidos: </span>
                                            <span>${d.nombre}</span>
                                        </div>
                                        <div>
                                            <span class="fw-bold">Email: </span>
                                            <span>${d.email}</span>
                                        </div>
                                        <div>
                                            <span class="fw-bold">Pasaporte: </span>
                                            <span>${d.pasaporte}</span>
                                        </div>
                                        <div>
                                            <span class="fw-bold">Fecha de nacimiento: </span>
                                            <span>${d.fecha_nacimiento}</span>
                                        </div><br>`
                }
                $('#people_plus').html(template_plus)
            })
        }
        $('#data-shadow').show(200).animate({
            opacity: 1
        });
    })
}

function orderTypePay(type, date = ''){
    pay = type;
    if(date != ''){
        date = date.split(' - ');
    }
    $.post('api/getOrders.php?get=orders&type='+ type, {date}, function(e) {
        var a = JSON.parse(e);
        let results = a.map(function(d) {
            if(url == 'all'){
                let estatus_green= '';
                let estatus_yellow= '';
                if(d.estatus_customer == 1){
                    estatus_green = 'active';
                }
                if(d.estatus_logistica == 1){
                    estatus_yellow = 'active';
                }
                return `<tr class="d-flex align-height-center"><td class="px-3 fw-bold">${d.orden}</td><td class="t-name">${d.nombre}</td><td class="t-date"><div class="fw-bold">${d.fecha_pago}</div><div>${d.hora_pago}</div></td><td class="t-estatus"><div><img src="../css/img/backoffice/completed.png" alt="" width="40px;"><span style="font-size: 14px;">Completado</span></div></td><td class="t-products" id="${d.ID}"></td><td class="t-estatus-control d-flex"><div class="estatus_red active"></div><div class="estatus_green ${estatus_green}"></div><div class="estatus_yellow ${estatus_yellow}"></div></td><td class="t-icon"><button view-data onclick="getOrderData('${d.ID}')"><img src="../css/img/backoffice/arrow-right.png" alt="" width="17px;"></button></td></tr>`;
            }
        })
        $.post('api/getOrders.php?get=products', function(e) {
            var a = JSON.parse(e);
            a.map(function(d) {
                if(url == 'all'){
                    let id = d.id;
                    $('#' + id).prepend(`<div>${d.nombre} (${d.cantidad})</div>`);
                }
            })
        })
        $('#orders').html(results)
    })
}

$('#close-data-shadow').on('click', function(){
    $('#data-shadow').hide().animate({
        opacity: 0
    });
})
$(document).ready(function() {
    if(url == 'general'){
        $.post('api/getOrders.php?get=orders', function(e) {
            var a = JSON.parse(e);
            let results = a.map(function(d) {
                if(url == 'general'){
                    return `<tr class="d-flex align-height-center"><td class="fw-bold">${d.orden}</td><td class="t-estatus d-flex align-height-center justify-content-center"><img src="../css/img/backoffice/completed.png" alt="" width="40px;"></td><td class="t-date"><div>${d.fecha_pago}</div><div class="fw-bold">${d.hora_pago}</div></td><td class="t-name">${d.nombre}</td><td class="t-products" id="${d.ID}"></td><td class="t-icon"><button view-data onclick="getOrderData('${d.ID}')"><img src="../css/img/backoffice/arrow-right.png" alt="" width="17px;"></button></td></tr>`;
                }
            })
            $.post('api/getOrders.php?get=products', function(e) {
                var a = JSON.parse(e);
                a.map(function(d) {
                    if(url == 'general'){
                        let id = d.id;
                        $('#' + id).prepend(`<div>${d.nombre} (${d.cantidad})</div>`);
                    }
                })
            })
            $('#orders').html(results)
        })
    }
    if(url == 'all'){
        let type = 'Conekta';
        let date = '';
        $('#date-orders').on('change', function(){
            date = $(this).val();
            orderTypePay(type, date);
        })
        orderTypePay('Conekta', date);
        $('.t-conekta button').on('click', function(){
            type = 'Conekta';
            $('.head-pay button').removeClass('active')
            $(this).addClass('active')
            orderTypePay('Conekta', date);
        })
        $('.t-rappi button').on('click', function(){
            type = 'Rappi';
            $('.head-pay button').removeClass('active')
            $(this).addClass('active')
            orderTypePay('Rappi', date);
        })
        $('.t-stripe button').on('click', function(){
            type = 'Stripe';
            $('.head-pay button').removeClass('active')
            $(this).addClass('active')
            orderTypePay('Stripe', date);
        })

    }
})

$('#date-orders').daterangepicker({
    minYear: 2022,
    maxYear: parseInt(moment().format('YYYY'),10),
    "locale": {
        "format": "DD/MM/YYYY",
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

$('#download-pay').click(function () {
    let date_range = $('#date-orders').val()
    if(date_range != ''){
        date_range = date_range.split(' - ');
        console.log(pay)
        window.location.href = 'api/report?start=' + date_range[0] + '&end=' + date_range[1] + '&pay=' + pay;
    }
})
$('#download-general').click(function () {
    let date_range = $('#date-orders').val()
    if(date_range != ''){
        date_range = date_range.split(' - ');
        window.location.href = 'api/report?start=' + date_range[0] + '&end=' + date_range[1];
    }
})

function updateEstatusL(ref){
    $.post('api/getOrders.php?get=update&type=logistica', {ref}, function(e) {
        if(e == true){
            $("#alert").removeClass("display-none");
            $("#alert").html('Actualizado correctamente');
            if(url == 'all'){
                let date = '';
                orderTypePay('Conekta', date);
                $('#data-shadow').hide().animate({
                    opacity: 0
                });
                setTimeout(function(){
                    $("#alert").addClass("display-none");
                }, 4000)
            }else{
                $.post('api/getOrders.php?get=orders', function(e) {
                    var a = JSON.parse(e);
                    let results = a.map(function(d) {
                        return `<tr class="d-flex align-height-center"><td class="fw-bold">${d.orden}</td><td class="t-estatus d-flex align-height-center justify-content-center"><img src="../css/img/backoffice/completed.png" alt="" width="40px;"></td><td class="t-date"><div>${d.fecha_pago}</div><div class="fw-bold">${d.hora_pago}</div></td><td class="t-name">${d.nombre}</td><td class="t-products" id="${d.ID}"></td><td class="t-icon"><button view-data onclick="getOrderData('${d.ID}')"><img src="../css/img/backoffice/arrow-right.png" alt="" width="17px;"></button></td></tr>`;
                    })
                    $.post('api/getOrders.php?get=products', function(e) {
                        var a = JSON.parse(e);
                        a.map(function(d) {
                            if(url == 'general'){
                                let id = d.id;
                                $('#' + id).prepend(`<div>${d.nombre} (${d.cantidad})</div>`);
                            }
                        })
                    })
                    $('#orders').html(results)
                    $('#data-shadow').hide().animate({
                        opacity: 0
                    });
                    setTimeout(function(){
                        $("#alert").addClass("display-none");
                    }, 4000)
                })
            }
        }
    })
}
function updateEstatusC(ref){
    $.post('api/getOrders.php?get=update&type=customer', {ref}, function(e) {
        if(e == true){
            $("#alert").removeClass("display-none");
            $("#alert").html('Actualizado correctamente');
            if(url == 'all'){
                let date = '';
                orderTypePay('Conekta', date);
                $('#data-shadow').hide().animate({
                    opacity: 0
                });
                setTimeout(function(){
                    $("#alert").addClass("display-none");
                }, 4000)
            }else{
                $.post('api/getOrders.php?get=orders', function(e) {
                    var a = JSON.parse(e);
                    let results = a.map(function(d) {
                        return `<tr class="d-flex align-height-center"><td class="fw-bold">${d.orden}</td><td class="t-estatus d-flex align-height-center justify-content-center"><img src="../css/img/backoffice/completed.png" alt="" width="40px;"></td><td class="t-date"><div>${d.fecha_pago}</div><div class="fw-bold">${d.hora_pago}</div></td><td class="t-name">${d.nombre}</td><td class="t-products" id="${d.ID}"></td><td class="t-icon"><button view-data onclick="getOrderData('${d.ID}')"><img src="../css/img/backoffice/arrow-right.png" alt="" width="17px;"></button></td></tr>`;
                    })
                    $.post('api/getOrders.php?get=products', function(e) {
                        var a = JSON.parse(e);
                        a.map(function(d) {
                            if(url == 'general'){
                                let id = d.id;
                                $('#' + id).prepend(`<div>${d.nombre} (${d.cantidad})</div>`);
                            }
                        })
                    })
                    $('#orders').html(results)
                    $('#data-shadow').hide().animate({
                        opacity: 0
                    });
                    setTimeout(function(){
                        $("#alert").addClass("display-none");
                    }, 4000)
                })
            }
        }
    })
}