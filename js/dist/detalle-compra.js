const currencyMXN = function(number){
    return new Intl.NumberFormat('es-MX', {style: 'currency',currency: 'MXN', minimumFractionDigits: 2}).format(number);
};
function alerta(input, text, checkbox = ''){
        if(checkbox == true){
            $('[name="'+input+'"]').parent().append(`<div class="alert-error-mobile-dc" error="${input}"><div class="absolute camp"><img src="../css/img/roja.png" alt="" width="35px"></div></div>`)
        }else{
            $('[name="'+input+'"]').parent().append(`<div class="alert-error-dc" error="${input}"><div class="absolute camp"><img src="../css/img/roja.png" alt="" width="35px"></div>${text}</div>`)
        }
    setTimeout(function() {
        $('[error="'+ input +'"]').remove();
    }, 8000)
}
var sexo = '';
var its = '';
var clinicos = '';
var z12 = 0;
var sintomas = '';
var conoce = '';
var coupon = 'Sin cupón';
var envio = 0;
var discount = 0;
var covid = '';
var num_c = 0;
var pasaporte = '';
var covid_hora = '';
var validate_sexo = true;
var isset_its = false;
var isset_covid = false;
var isset_clinicos = false;
var validate_conoce = false;
var validate_email = false;
var validate_covid = false;
var validate_its = true;
var validate_name = false;
var validate_cp = false;
var validate_tel = false;
var validate_street = false;
var validate_municipality = false;
var validate_suburb = false;
var validate_state = false;
var validate_ne = false;
var validate_date = false;
var pasa_clic = true;
var sint_clic = true;
var valid_covid_num = true;
var validate_antibiotics = true;
var valid_covid = false;
var valid_clinicos = false;
var validate_terms = false;


const set_products = localStorage.getItem("cart_update");
const finalCart = JSON.parse(set_products);
let results = finalCart.map(function(finalCart) {
    if (finalCart.id == 9) {
        return `<li class="text-left"><div><img class="cerrar" alt="cerrar" src="../css/img/iconos/cerrar.png" onclick="deleteItem('${finalCart.id}')"/></div><div class="kitsCart"><div style="margin-right: 65px;margin-left: 10px;"><img class="img-products-car py-1" src="../img/products/${finalCart.img}"></div><div class="descripcion text-left large-8 small-7"><p class="px-1 fw-bold">${finalCart.name}</p></div></div><div class="grid-x small-12"><div class="buttons-carrito small-6"><!--input type="button" value="-" onclick="del(${finalCart.id},1)"/><input type="text" value=${finalCart.cant} /><input type="button" value="+" onclick="add(${finalCart.id},1)"/--></div><div class="cantidad small-6"><p>${currencyMXN(finalCart.price*finalCart.cant)}</p></div></div></li>`;
    } else {
        return `<li class="text-left"><div class="cerrar"><img class="cerrar" alt="cerrar" src="../css/img/iconos/cerrar.png" onclick="deleteItem('${finalCart.id}')"/></div><div class="kitsCart"><div><img class="img-products-car py-1" src="../img/products/${finalCart.img}" /></div><div class="descripcion text-left large-8 small-7"><p class="px-1 fw-bold">${finalCart.name}</p></div></div><div class="grid-x small-12"><div class="buttons-carrito small-6"><input type="button" value="-" onclick="del('${finalCart.id}',1)"/><input type="text" value=${finalCart.cant} /><input type="button" value="+" onclick="add('${finalCart.id}',1)"/></div><div class="cantidad small-6"><p>${currencyMXN(finalCart.price*finalCart.cant)}</p></div></div></li>`;
    }
})
if (results.length != 0) {
    document.getElementById('carritoList').innerHTML = results.join('');
} else {
    document.getElementById('carritoList').innerHTML = '<div class="mb-3">No tienes ningun producto agregado</div>';
}




var tp = total(finalCart);
var sum = 0;
verifyPromotions(set_products)
updateTotals(0);
function updateTotals(discount){
    $('#descuento').html('<p><strong>' + currencyMXN(discount) + '</strong></p>')
    document.getElementById('total-parcial').innerHTML = '<p><strong>' + currencyMXN(total(finalCart)) + '</strong></p>';
    sum = parseFloat(tp) + parseInt(envio) - discount;
    console.log('- ' + sum)
    $('#total').html('<p><strong>' + currencyMXN(sum) + '</strong></p>');
}


finalCart.map(function(d) {
    if (d.cat == 'covid') {
        num_c += d.cant;
        isset_covid = true;
    } else if(d.cat == 'its') {
        $('[space="servicio-visita"]').removeClass('display-none');
        $('[space="sexo-option"]').removeClass('display-none');
        $('[space="its-option"]').removeClass('display-none');
        validate_its = false;
        isset_its = true;
        validate_sexo = false;
        isset_its = true;
    } else if(d.cat == 'clinicos') {
        $('#clinicos').removeClass('display-none');
        validate_antibiotics = false;
        isset_clinicos = true;
    }
})

if (num_c != 0) {
    $('#covid-input-sintomas').removeClass('display-none')
    $('#covid-input-pasaporte').removeClass('display-none')
    var validate_covid = false;
    var validate_covid_date = false;
    var validate_covid_hora = false;
    var validate_medi = false;
    var validate_pasa = true;
    var validate_sint = true;
} else {
    $('#covid-input-sintomas').addClass('display-none')
    $('#covid-input-pasaporte').addClass('display-none')
    var validate_covid_date = true;
    var validate_covid = true;
    var validate_covid_hora = true;
    var validate_medi = true;
    var validate_sint = true;
    var validate_pasa = true;
}

$('[name="cp_service"]').on('keyup', function() {
    var format_cp = /^([0-9]{4,5})+$/;
    var cp = $(this).val();
    if (format_cp.test(cp)) {
        $('[name="cp_service"]').removeClass('invalid')
    } else {
        $('[name="cp_service"]').addClass('invalid')
    }
})
$('[action="verify-cp"]').on('click', function(e) {
    var format_cp = /^([0-9]{4,5})+$/;
    e.preventDefault();
    var cp = $('[name="cp_service"]').val();
    if (format_cp.test(cp)) {
        $('[name="cp_service"]').removeClass('invalid');
        $('[space="verify_cp_service"]').removeClass('display-none');
        grecaptcha.ready(function() {
            grecaptcha.execute('6LeRAI8eAAAAAGYdXRWWmQ3V6XqzSjeZ3LCLXJwh', { action: 'submit' }).then(function(token) {
                $.post('../api/carrito/zona.php', { cp, token }, function(r) {
                    if (r != 3) {
                        $('[space="invalid_cp_service"]').addClass('display-none');
                        $('#service-its').foundation('close');
                        add(9, 1);
                    } else {
                        $('[space="verify_cp_service"]').addClass('display-none');
                        $('[space="invalid_cp_service"]').removeClass('display-none');
                    }
                })
            })
        })
    } else {
        $('[name="cp_service"]').addClass('invalid')
    }
})
$('[name="cp_covid"]').on('keyup', function() {
    var format_cp = /^([0-9]{4,5})+$/;
    var cp = $(this).val();
    if (format_cp.test(cp)) {
        $('[name="cp_covid"]').removeClass('invalid')
    } else {
        $('[name="cp_covid"]').addClass('invalid')
    }
})
$('[action="new-cp"]').click(function() {
    if ($('[space="verify_cp_covid"]').hasClass('display-none')) {
        $('[space="verify_cp_covid"]').removeClass('display-none');
        $('[space="invalid_cp_covid"]').addClass('display-none');
    } else {
        $('[space="verify_cp_covid"]').addClass('display-none');
        $('[space="invalid_cp_covid"]').removeClass('display-none');
    }
})
$('[action="verify-cp-covid"]').on('click', function(e) {
    var format_cp = /^([0-9]{4,5})+$/;
    e.preventDefault();
    var cp = $('[name="cp_covid"]').val();
    $('[space="date-covid"]').addClass('display-none');
    if (format_cp.test(cp)) {
        $('[name="cp_covid"]').removeClass('invalid');
        $('[space="verify_cp_covid"]').removeClass('display-none');
        grecaptcha.ready(function() {
            grecaptcha.execute('6LeRAI8eAAAAAGYdXRWWmQ3V6XqzSjeZ3LCLXJwh', { action: 'submit' }).then(function(token) {
                $.post('../api/carrito/zona.php', { cp, token}, function(r) {
                    if (r != 3) {
                        valid_covid = true;
                        valid_clinicos = true;
                        $('html, body').animate({
                            scrollTop: $('#data-customer').offset().top
                        }, 500);
                        if(isset_covid == true){
                            $('[space="date-covid"]').removeClass('display-none');
                        }
                        $('[space="card-resume-order"]').addClass('display-none');
                        $('[space="cart-background"]').removeClass('fondoMorado');
                        $('[space="invalid_cp_covid"]').addClass('display-none');
                        $('#alert-covid').foundation('close');
                        $('[action="next"]').addClass('display-none');
                        $('[space="car"]').addClass('display-none');
                        $('[space="plus"]').addClass('display-none');
                        $('[space="form-data"]').removeClass('display-none');
                        $('[action="pay"]').removeClass('display-none');
                        $('[space="cart-empty"]').addClass('display-none');
                    } else {
                        if (validateCovid() == true) {
                            $('html, body').animate({
                                scrollTop: $('#data-customer').offset().top
                            }, 500);
                            $('[space="card-resume-order"]').addClass('display-none');
                            $('[space="cart-background"]').removeClass('fondoMorado');
                            valid_covid = true;
                            valid_clinicos = true;
                            if(isset_covid == true){
                                $('[space="date-covid"]').removeClass('display-none');
                            }
                            $('#alert-covid').foundation('close');
                            $('[action="next"]').addClass('display-none');
                            $('[space="car"]').addClass('display-none');
                            $('[space="plus"]').addClass('display-none');
                            $('[space="form-data"]').removeClass('display-none');
                            $('[action="pay"]').removeClass('display-none');
                            $('[space="cart-empty"]').addClass('display-none');
                        } else {
                            $('[space="verify_cp_covid"]').addClass('display-none');
                            $('[space="invalid_cp_covid"]').removeClass('display-none');
                        }
                    }
                })
            })
        })
    } else {
        $('[name="cp_service"]').addClass('invalid')
    }
})
$('[action="next"]').on('click', function(e) {
    e.preventDefault();
    var num_product = 0;
    finalCart.map(function(d) {
        num_product += d.cant;
    })
    if (num_product != 0) {
        $('[space="cart-empty"]').addClass('display-none');
        if (validateCovid() == true) {
            $('html, body').animate({
                scrollTop: $('#data-customer').offset().top
            }, 500);
            $('[space="card-resume-order"]').addClass('display-none');
            $('[space="cart-background"]').removeClass('fondoMorado');
            $('[space="car"]').addClass('display-none');
            $('[space="plus"]').addClass('display-none');
            $('[space="form-data"]').removeClass('display-none');
            $('[action="pay"]').removeClass('display-none');
            $('[space="cart-empty"]').addClass('display-none');
        } else {
            $('#alert-covid').foundation('open');
        }
    } else {
        $('[space="cart-empty"]').removeClass('display-none');
    }
})
function validateCovid() {
    var num_covid = 0;
    var num_clinicos = 0;
    var covid = false;
    finalCart.map(function(d) {
        if (d.cat == 'covid') {
            num_covid += d.cant;
        }
        if (d.cat == 'clinicos') {
            num_clinicos += d.cant;
        }
    })
    if (num_covid == 0 || num_covid >= 5) {
        valid_covid_num = true;
        covid = true;
    } else {
        valid_covid_num = false;
        covid = false;
    }
    if (num_clinicos == 0 || num_clinicos >= 5) {
        valid_clinicos_num = true;
        clinicos = true;
    } else {
        valid_clinicos_num = false;
        clinicos = false;
    }
    if(clinicos == true && covid == true){
        return true
    }else{
        return false
    }
}
$('[name="cupon"]').on('change', function() {
    coupon = $('[name="cupon"]').val();
    grecaptcha.ready(function() {
        grecaptcha.execute('6LeRAI8eAAAAAGYdXRWWmQ3V6XqzSjeZ3LCLXJwh', { action: 'submit' }).then(function(token) {
            $.post('../api/carrito/descuento.php', { coupon, tp, set_products, token }, function(e) {
                discount = tp - e;
                z12 = e;
                $('#descuento').html('<p><strong>' + currencyMXN(e) + '</strong></p>')
                $('#total-parcial').html('<p><strong>' + currencyMXN(tp) + '</strong></p>')
                tp = discount;
                $('#total').html('<p><strong>' + currencyMXN(tp) + '</strong></p>');
                if (parseInt(e) !== 0) {
                    $('[space="cupon"]').remove();
                }
            })
        })
    })
})
$('input[name=codigo_postal]').on('change', function() {
    var format_cp = /^([0-9]{4,5})+$/;
    var cp = $(this).val();
    if (cp != '' && format_cp.test(cp)) {
        validate_cp = true;
        $(this).removeClass('invalid');
        grecaptcha.ready(function() {
            grecaptcha.execute('6LeRAI8eAAAAAGYdXRWWmQ3V6XqzSjeZ3LCLXJwh', { action: 'submit' }).then(function(token) {
                $.post('../api/carrito/zona.php', { cp, token }, function(r) {
                    var env;
                    if (parseInt(r) == 1) {
                        env = 0;
                    } else {
                        env = 300;
                    }
                    envio = parseInt(env);
                    $('#envio').html('<p><strong>$ ' + env + '</strong></p>');
                    total_con_envio = parseInt(tp) + parseInt(env)
                    $('#total').html('<p><strong>$ ' + total_con_envio + '</strong></p>');
                    $('[action="error-envio"]').addClass('display-none');
                })
            })
        })
    } else {
        validate_cp = false;
        $(this).addClass('invalid');
    }
})
$('form input').on('keyup change paste', function() {
    if ($('[name="terms"]').is(':checked') && validateData() === true) {
        validate_terms = true;
        $('[action="pay"]').removeClass('display-none');
        $('[action="pay"]').prop('disabled', false);
        $('[action="error-empty"]').addClass('display-none');
    } else {
        $('[action="pay"]').removeClass('display-none');
        $('[action="pay"]').prop('disabled', true);
        $('[action="error-empty"]').removeClass('display-none');

    }
})
$('#dp2').on('keyup', function() {
    var fecha = $(this).val();
    var validate_today_date = false;
    var format_date = /^([0-9]{2})+\/([0-9]{2})+\/([0-9]{4})+$/;
    if (fecha != '' && format_date.test(fecha)) {
        var date = new Date();
        var day;
        var day_c;
        var month;
        if (date.getDate() < 10) {
            day = '0' + date.getDate();
        } else {
            day = date.getDate();
        }
        if (date.getMonth() < 10) {
            month = '0' + (date.getMonth() + 1);
        } else {
            month = date.getMonth() + 1;
        }
        if (date.getDate() < 10) {
            day_c = '0' + (date.getDate() + 1);
        } else {
            day_c = date.getDate() + 1;
        }
        var date_today = day + '/' + month + '/' + date.getFullYear();
        var dia_ingresado = fecha.substr(0,2)
        if(dia_ingresado < 10){
            dia_ingresado = parseInt(dia_ingresado.substr(1,1))
        }
        var mes_ingresado = fecha.substr(3,2)
        if(mes_ingresado < 10){
            mes_ingresado = parseInt(mes_ingresado.substr(1,1)) - 1
        }else{
            mes_ingresado = parseInt(mes_ingresado) - 1
        }
        var año_ingresado = fecha.substr(6,4)
        var f1 = new Date(año_ingresado, mes_ingresado, dia_ingresado); //31 de diciembre de 2015
        var f2 = new Date(date.getFullYear(), date.getMonth(), date.getDate());
        f1.setHours(0,0,0,0);
        f2.setHours(0,0,0,0);
        if(f1.getTime() == f2.getTime() || f1.getTime() >= f2.getTime()){
            validate_today_date = true;
        }else{
            validate_today_date = false
        }
        const day_date = new Date(año_ingresado, mes_ingresado, dia_ingresado).getDay();
        if(validate_today_date == true){
            if(day_date === 0){
                $('#domingo').removeClass('display-none');
            }else{
                $('#domingo').addClass('display-none');
                validate_covid = true;
                $('#date-message-covid').html(fecha)
                $('[name="agenda-covid"]').removeClass('invalid');
                $('#horarios-agenda label').removeClass('active');
                $('#horarios-agenda label').removeClass('invalid');
                $('[name="agenda-hora-covid"]').prop('disabled', false);
                covid_hora = '';
                $.post('../api/datos/validateDate.php', { fecha }, function(e) {
                    var c = JSON.parse(e);
                    if (c != null) {
                        $('#horarios-agenda input').prop('disabled', false);
                        if (date_today == fecha) {
                            $('#message-covid-hours').addClass('display-none');
                            var minutes = 0;
                            if (date.getMinutes() < 10) {
                                minutes = '0' + date.getMinutes();
                            } else {
                                minutes = date.getMinutes();
                            }
                            var horas = date.getHours() + ':' + minutes;
                            console.log(horas)
                            if(horas >= '8:00' && horas < '8:30'){
                                $('#8_00').prop('disabled', true).removeAttr('name'); $('[for="8_00"]').addClass('invalid')
                                $('#8_30').prop('disabled', true).removeAttr('name'); $('[for="8_30"]').addClass('invalid')
                                $('#9_00').prop('disabled', true).removeAttr('name'); $('[for="9_00"]').addClass('invalid')
                                $('#9_30').prop('disabled', true).removeAttr('name'); $('[for="9_30"]').addClass('invalid')
                                covid = fecha;
                            }else if(horas >= '8:30' && horas < '9:00'){
                                $('#8_00').prop('disabled', true).removeAttr('name'); $('[for="8_00"]').addClass('invalid')
                                $('#8_30').prop('disabled', true).removeAttr('name'); $('[for="8_30"]').addClass('invalid')
                                $('#9_00').prop('disabled', true).removeAttr('name'); $('[for="9_00"]').addClass('invalid')
                                $('#9_30').prop('disabled', true).removeAttr('name'); $('[for="9_30"]').addClass('invalid')
                                $('#10_00').prop('disabled', true).removeAttr('name'); $('[for="10_00"]').addClass('invalid')
                                covid = fecha;
                            }else if(horas >= '9:00' && horas < '9:30'){
                                $('#8_00').prop('disabled', true).removeAttr('name'); $('[for="8_00"]').addClass('invalid')
                                $('#8_30').prop('disabled', true).removeAttr('name'); $('[for="8_30"]').addClass('invalid')
                                $('#9_00').prop('disabled', true).removeAttr('name'); $('[for="9_00"]').addClass('invalid')
                                $('#9_30').prop('disabled', true).removeAttr('name'); $('[for="9_30"]').addClass('invalid')
                                $('#10_00').prop('disabled', true).removeAttr('name'); $('[for="10_00"]').addClass('invalid')
                                $('#10_30').prop('disabled', true).removeAttr('name'); $('[for="10_30"]').addClass('invalid')
                                covid = fecha;
                            }else if(horas >= '9:30' && horas < '10:00'){
                                $('#8_00').prop('disabled', true).removeAttr('name'); $('[for="8_00"]').addClass('invalid')
                                $('#8_30').prop('disabled', true).removeAttr('name'); $('[for="8_30"]').addClass('invalid')
                                $('#9_00').prop('disabled', true).removeAttr('name'); $('[for="9_00"]').addClass('invalid')
                                $('#9_30').prop('disabled', true).removeAttr('name'); $('[for="9_30"]').addClass('invalid')
                                $('#10_00').prop('disabled', true).removeAttr('name'); $('[for="10_00"]').addClass('invalid')
                                $('#10_30').prop('disabled', true).removeAttr('name'); $('[for="10_30"]').addClass('invalid')
                                $('#11_00').prop('disabled', true).removeAttr('name'); $('[for="11_00"]').addClass('invalid')
                                covid = fecha;
                            }else if(horas >= '10:00' && horas < '10:30'){
                                $('#8_00').prop('disabled', true).removeAttr('name'); $('[for="8_00"]').addClass('invalid')
                                $('#8_30').prop('disabled', true).removeAttr('name'); $('[for="8_30"]').addClass('invalid')
                                $('#9_00').prop('disabled', true).removeAttr('name'); $('[for="9_00"]').addClass('invalid')
                                $('#9_30').prop('disabled', true).removeAttr('name'); $('[for="9_30"]').addClass('invalid')
                                $('#10_00').prop('disabled', true).removeAttr('name'); $('[for="10_00"]').addClass('invalid')
                                $('#10_30').prop('disabled', true).removeAttr('name'); $('[for="10_30"]').addClass('invalid')
                                $('#11_00').prop('disabled', true).removeAttr('name'); $('[for="11_00"]').addClass('invalid')
                                $('#11_30').prop('disabled', true).removeAttr('name'); $('[for="11_30"]').addClass('invalid')
                                covid = fecha;
                            }else if(horas >= '10:30' && horas < '11:00'){
                                $('#8_00').prop('disabled', true).removeAttr('name'); $('[for="8_00"]').addClass('invalid')
                                $('#8_30').prop('disabled', true).removeAttr('name'); $('[for="8_30"]').addClass('invalid')
                                $('#9_00').prop('disabled', true).removeAttr('name'); $('[for="9_00"]').addClass('invalid')
                                $('#9_30').prop('disabled', true).removeAttr('name'); $('[for="9_30"]').addClass('invalid')
                                $('#10_00').prop('disabled', true).removeAttr('name'); $('[for="10_00"]').addClass('invalid')
                                $('#10_30').prop('disabled', true).removeAttr('name'); $('[for="10_30"]').addClass('invalid')
                                $('#11_00').prop('disabled', true).removeAttr('name'); $('[for="11_00"]').addClass('invalid')
                                $('#11_30').prop('disabled', true).removeAttr('name'); $('[for="11_30"]').addClass('invalid')
                                $('#12_00').prop('disabled', true).removeAttr('name'); $('[for="12_00"]').addClass('invalid')
                                covid = fecha;
                            }else if(horas >= '11:00' && horas < '11:30'){
                                $('#8_00').prop('disabled', true).removeAttr('name'); $('[for="8_00"]').addClass('invalid')
                                $('#8_30').prop('disabled', true).removeAttr('name'); $('[for="8_30"]').addClass('invalid')
                                $('#9_00').prop('disabled', true).removeAttr('name'); $('[for="9_00"]').addClass('invalid')
                                $('#9_30').prop('disabled', true).removeAttr('name'); $('[for="9_30"]').addClass('invalid')
                                $('#10_00').prop('disabled', true).removeAttr('name'); $('[for="10_00"]').addClass('invalid')
                                $('#10_30').prop('disabled', true).removeAttr('name'); $('[for="10_30"]').addClass('invalid')
                                $('#11_00').prop('disabled', true).removeAttr('name'); $('[for="11_00"]').addClass('invalid')
                                $('#11_30').prop('disabled', true).removeAttr('name'); $('[for="11_30"]').addClass('invalid')
                                $('#12_00').prop('disabled', true).removeAttr('name'); $('[for="12_00"]').addClass('invalid')
                                $('#12_30').prop('disabled', true).removeAttr('name'); $('[for="12_30"]').addClass('invalid')
                                covid = fecha;
                            }else if(horas >= '11:30' && horas < '12:00'){
                                $('#8_00').prop('disabled', true).removeAttr('name'); $('[for="8_00"]').addClass('invalid')
                                $('#8_30').prop('disabled', true).removeAttr('name'); $('[for="8_30"]').addClass('invalid')
                                $('#9_00').prop('disabled', true).removeAttr('name'); $('[for="9_00"]').addClass('invalid')
                                $('#9_30').prop('disabled', true).removeAttr('name'); $('[for="9_30"]').addClass('invalid')
                                $('#10_00').prop('disabled', true).removeAttr('name'); $('[for="10_00"]').addClass('invalid')
                                $('#10_30').prop('disabled', true).removeAttr('name'); $('[for="10_30"]').addClass('invalid')
                                $('#11_00').prop('disabled', true).removeAttr('name'); $('[for="11_00"]').addClass('invalid')
                                $('#11_30').prop('disabled', true).removeAttr('name'); $('[for="11_30"]').addClass('invalid')
                                $('#12_00').prop('disabled', true).removeAttr('name'); $('[for="12_00"]').addClass('invalid')
                                $('#12_30').prop('disabled', true).removeAttr('name'); $('[for="12_30"]').addClass('invalid')
                                $('#1_00').prop('disabled', true).removeAttr('name'); $('[for="1_00"]').addClass('invalid')
                                covid = fecha;
                            }else if(horas >= '12:00' && horas < '12:30'){
                                $('#8_00').prop('disabled', true).removeAttr('name'); $('[for="8_00"]').addClass('invalid')
                                $('#8_30').prop('disabled', true).removeAttr('name'); $('[for="8_30"]').addClass('invalid')
                                $('#9_00').prop('disabled', true).removeAttr('name'); $('[for="9_00"]').addClass('invalid')
                                $('#9_30').prop('disabled', true).removeAttr('name'); $('[for="9_30"]').addClass('invalid')
                                $('#10_00').prop('disabled', true).removeAttr('name'); $('[for="10_00"]').addClass('invalid')
                                $('#10_30').prop('disabled', true).removeAttr('name'); $('[for="10_30"]').addClass('invalid')
                                $('#11_00').prop('disabled', true).removeAttr('name'); $('[for="11_00"]').addClass('invalid')
                                $('#11_30').prop('disabled', true).removeAttr('name'); $('[for="11_30"]').addClass('invalid')
                                $('#12_00').prop('disabled', true).removeAttr('name'); $('[for="12_00"]').addClass('invalid')
                                $('#12_30').prop('disabled', true).removeAttr('name'); $('[for="12_30"]').addClass('invalid')
                                $('#1_00').prop('disabled', true).removeAttr('name'); $('[for="1_00"]').addClass('invalid')
                                $('#1_30').prop('disabled', true).removeAttr('name'); $('[for="1_30"]').addClass('invalid')
                                covid = fecha;
                            }else if(horas >= '12:30' && horas < '13:00'){
                                $('#8_00').prop('disabled', true).removeAttr('name'); $('[for="8_00"]').addClass('invalid')
                                $('#8_30').prop('disabled', true).removeAttr('name'); $('[for="8_30"]').addClass('invalid')
                                $('#9_00').prop('disabled', true).removeAttr('name'); $('[for="9_00"]').addClass('invalid')
                                $('#9_30').prop('disabled', true).removeAttr('name'); $('[for="9_30"]').addClass('invalid')
                                $('#10_00').prop('disabled', true).removeAttr('name'); $('[for="10_00"]').addClass('invalid')
                                $('#10_30').prop('disabled', true).removeAttr('name'); $('[for="10_30"]').addClass('invalid')
                                $('#11_00').prop('disabled', true).removeAttr('name'); $('[for="11_00"]').addClass('invalid')
                                $('#11_30').prop('disabled', true).removeAttr('name'); $('[for="11_30"]').addClass('invalid')
                                $('#12_00').prop('disabled', true).removeAttr('name'); $('[for="12_00"]').addClass('invalid')
                                $('#12_30').prop('disabled', true).removeAttr('name'); $('[for="12_30"]').addClass('invalid')
                                $('#1_00').prop('disabled', true).removeAttr('name'); $('[for="1_00"]').addClass('invalid')
                                $('#1_30').prop('disabled', true).removeAttr('name'); $('[for="1_30"]').addClass('invalid')
                                $('#2_00').prop('disabled', true).removeAttr('name'); $('[for="2_00"]').addClass('invalid')
                                covid = fecha;
                            }else if(horas >= '13:00' && horas < '13:30'){
                                $('#8_00').prop('disabled', true).removeAttr('name'); $('[for="8_00"]').addClass('invalid')
                                $('#8_30').prop('disabled', true).removeAttr('name'); $('[for="8_30"]').addClass('invalid')
                                $('#9_00').prop('disabled', true).removeAttr('name'); $('[for="9_00"]').addClass('invalid')
                                $('#9_30').prop('disabled', true).removeAttr('name'); $('[for="9_30"]').addClass('invalid')
                                $('#10_00').prop('disabled', true).removeAttr('name'); $('[for="10_00"]').addClass('invalid')
                                $('#10_30').prop('disabled', true).removeAttr('name'); $('[for="10_30"]').addClass('invalid')
                                $('#11_00').prop('disabled', true).removeAttr('name'); $('[for="11_00"]').addClass('invalid')
                                $('#11_30').prop('disabled', true).removeAttr('name'); $('[for="11_30"]').addClass('invalid')
                                $('#12_00').prop('disabled', true).removeAttr('name'); $('[for="12_00"]').addClass('invalid')
                                $('#12_30').prop('disabled', true).removeAttr('name'); $('[for="12_30"]').addClass('invalid')
                                $('#1_00').prop('disabled', true).removeAttr('name'); $('[for="1_00"]').addClass('invalid')
                                $('#1_30').prop('disabled', true).removeAttr('name'); $('[for="1_30"]').addClass('invalid')
                                $('#2_00').prop('disabled', true).removeAttr('name'); $('[for="2_00"]').addClass('invalid')
                                $('#2_30').prop('disabled', true).removeAttr('name'); $('[for="2_30"]').addClass('invalid')
                                covid = fecha;
                            }else if(horas >= '13:30' && horas < '14:00'){
                                $('#8_00').prop('disabled', true).removeAttr('name'); $('[for="8_00"]').addClass('invalid')
                                $('#8_30').prop('disabled', true).removeAttr('name'); $('[for="8_30"]').addClass('invalid')
                                $('#9_00').prop('disabled', true).removeAttr('name'); $('[for="9_00"]').addClass('invalid')
                                $('#9_30').prop('disabled', true).removeAttr('name'); $('[for="9_30"]').addClass('invalid')
                                $('#10_00').prop('disabled', true).removeAttr('name'); $('[for="10_00"]').addClass('invalid')
                                $('#10_30').prop('disabled', true).removeAttr('name'); $('[for="10_30"]').addClass('invalid')
                                $('#11_00').prop('disabled', true).removeAttr('name'); $('[for="11_00"]').addClass('invalid')
                                $('#11_30').prop('disabled', true).removeAttr('name'); $('[for="11_30"]').addClass('invalid')
                                $('#12_00').prop('disabled', true).removeAttr('name'); $('[for="12_00"]').addClass('invalid')
                                $('#12_30').prop('disabled', true).removeAttr('name'); $('[for="12_30"]').addClass('invalid')
                                $('#1_00').prop('disabled', true).removeAttr('name'); $('[for="1_00"]').addClass('invalid')
                                $('#1_30').prop('disabled', true).removeAttr('name'); $('[for="1_30"]').addClass('invalid')
                                $('#2_00').prop('disabled', true).removeAttr('name'); $('[for="2_00"]').addClass('invalid')
                                $('#2_30').prop('disabled', true).removeAttr('name'); $('[for="2_30"]').addClass('invalid')
                                $('#3_00').prop('disabled', true).removeAttr('name'); $('[for="3_00"]').addClass('invalid')
                                covid = fecha;
                            }else if(horas >= '14:00' && horas < '14:30'){
                                $('#8_00').prop('disabled', true).removeAttr('name'); $('[for="8_00"]').addClass('invalid')
                                $('#8_30').prop('disabled', true).removeAttr('name'); $('[for="8_30"]').addClass('invalid')
                                $('#9_00').prop('disabled', true).removeAttr('name'); $('[for="9_00"]').addClass('invalid')
                                $('#9_30').prop('disabled', true).removeAttr('name'); $('[for="9_30"]').addClass('invalid')
                                $('#10_00').prop('disabled', true).removeAttr('name'); $('[for="10_00"]').addClass('invalid')
                                $('#10_30').prop('disabled', true).removeAttr('name'); $('[for="10_30"]').addClass('invalid')
                                $('#11_00').prop('disabled', true).removeAttr('name'); $('[for="11_00"]').addClass('invalid')
                                $('#11_30').prop('disabled', true).removeAttr('name'); $('[for="11_30"]').addClass('invalid')
                                $('#12_00').prop('disabled', true).removeAttr('name'); $('[for="12_00"]').addClass('invalid')
                                $('#12_30').prop('disabled', true).removeAttr('name'); $('[for="12_30"]').addClass('invalid')
                                $('#1_00').prop('disabled', true).removeAttr('name'); $('[for="1_00"]').addClass('invalid')
                                $('#1_30').prop('disabled', true).removeAttr('name'); $('[for="1_30"]').addClass('invalid')
                                $('#2_00').prop('disabled', true).removeAttr('name'); $('[for="2_00"]').addClass('invalid')
                                $('#2_30').prop('disabled', true).removeAttr('name'); $('[for="2_30"]').addClass('invalid')
                                $('#3_00').prop('disabled', true).removeAttr('name'); $('[for="3_00"]').addClass('invalid')
                                $('#3_30').prop('disabled', true).removeAttr('name'); $('[for="3_30"]').addClass('invalid')
                                covid = fecha;
                            }else if(horas >= '14:30' && horas < '15:00'){
                                $('#8_00').prop('disabled', true).removeAttr('name'); $('[for="8_00"]').addClass('invalid')
                                $('#8_30').prop('disabled', true).removeAttr('name'); $('[for="8_30"]').addClass('invalid')
                                $('#9_00').prop('disabled', true).removeAttr('name'); $('[for="9_00"]').addClass('invalid')
                                $('#9_30').prop('disabled', true).removeAttr('name'); $('[for="9_30"]').addClass('invalid')
                                $('#10_00').prop('disabled', true).removeAttr('name'); $('[for="10_00"]').addClass('invalid')
                                $('#10_30').prop('disabled', true).removeAttr('name'); $('[for="10_30"]').addClass('invalid')
                                $('#11_00').prop('disabled', true).removeAttr('name'); $('[for="11_00"]').addClass('invalid')
                                $('#11_30').prop('disabled', true).removeAttr('name'); $('[for="11_30"]').addClass('invalid')
                                $('#12_00').prop('disabled', true).removeAttr('name'); $('[for="12_00"]').addClass('invalid')
                                $('#12_30').prop('disabled', true).removeAttr('name'); $('[for="12_30"]').addClass('invalid')
                                $('#1_00').prop('disabled', true).removeAttr('name'); $('[for="1_00"]').addClass('invalid')
                                $('#1_30').prop('disabled', true).removeAttr('name'); $('[for="1_30"]').addClass('invalid')
                                $('#2_00').prop('disabled', true).removeAttr('name'); $('[for="2_00"]').addClass('invalid')
                                $('#2_30').prop('disabled', true).removeAttr('name'); $('[for="2_30"]').addClass('invalid')
                                $('#3_00').prop('disabled', true).removeAttr('name'); $('[for="3_00"]').addClass('invalid')
                                $('#3_30').prop('disabled', true).removeAttr('name'); $('[for="3_30"]').addClass('invalid')
                                $('#4_00').prop('disabled', true).removeAttr('name'); $('[for="4_00"]').addClass('invalid')
                                covid = fecha;
                            }else if(horas >= '15:00' && horas < '15:30'){
                                $('#8_00').prop('disabled', true).removeAttr('name'); $('[for="8_00"]').addClass('invalid')
                                $('#8_30').prop('disabled', true).removeAttr('name'); $('[for="8_30"]').addClass('invalid')
                                $('#9_00').prop('disabled', true).removeAttr('name'); $('[for="9_00"]').addClass('invalid')
                                $('#9_30').prop('disabled', true).removeAttr('name'); $('[for="9_30"]').addClass('invalid')
                                $('#10_00').prop('disabled', true).removeAttr('name'); $('[for="10_00"]').addClass('invalid')
                                $('#10_30').prop('disabled', true).removeAttr('name'); $('[for="10_30"]').addClass('invalid')
                                $('#11_00').prop('disabled', true).removeAttr('name'); $('[for="11_00"]').addClass('invalid')
                                $('#11_30').prop('disabled', true).removeAttr('name'); $('[for="11_30"]').addClass('invalid')
                                $('#12_00').prop('disabled', true).removeAttr('name'); $('[for="12_00"]').addClass('invalid')
                                $('#12_30').prop('disabled', true).removeAttr('name'); $('[for="12_30"]').addClass('invalid')
                                $('#1_00').prop('disabled', true).removeAttr('name'); $('[for="1_00"]').addClass('invalid')
                                $('#1_30').prop('disabled', true).removeAttr('name'); $('[for="1_30"]').addClass('invalid')
                                $('#2_00').prop('disabled', true).removeAttr('name'); $('[for="2_00"]').addClass('invalid')
                                $('#2_30').prop('disabled', true).removeAttr('name'); $('[for="2_30"]').addClass('invalid')
                                $('#3_00').prop('disabled', true).removeAttr('name'); $('[for="3_00"]').addClass('invalid')
                                $('#3_30').prop('disabled', true).removeAttr('name'); $('[for="3_30"]').addClass('invalid')
                                $('#4_00').prop('disabled', true).removeAttr('name'); $('[for="4_00"]').addClass('invalid')
                                $('#4_30').prop('disabled', true).removeAttr('name'); $('[for="4_30"]').addClass('invalid')
                                covid = fecha;
                            }else if(horas >= '15:30' && horas < '16:00'){
                                $('#8_00').prop('disabled', true).removeAttr('name'); $('[for="8_00"]').addClass('invalid')
                                $('#8_30').prop('disabled', true).removeAttr('name'); $('[for="8_30"]').addClass('invalid')
                                $('#9_00').prop('disabled', true).removeAttr('name'); $('[for="9_00"]').addClass('invalid')
                                $('#9_30').prop('disabled', true).removeAttr('name'); $('[for="9_30"]').addClass('invalid')
                                $('#10_00').prop('disabled', true).removeAttr('name'); $('[for="10_00"]').addClass('invalid')
                                $('#10_30').prop('disabled', true).removeAttr('name'); $('[for="10_30"]').addClass('invalid')
                                $('#11_00').prop('disabled', true).removeAttr('name'); $('[for="11_00"]').addClass('invalid')
                                $('#11_30').prop('disabled', true).removeAttr('name'); $('[for="11_30"]').addClass('invalid')
                                $('#12_00').prop('disabled', true).removeAttr('name'); $('[for="12_00"]').addClass('invalid')
                                $('#12_30').prop('disabled', true).removeAttr('name'); $('[for="12_30"]').addClass('invalid')
                                $('#1_00').prop('disabled', true).removeAttr('name'); $('[for="1_00"]').addClass('invalid')
                                $('#1_30').prop('disabled', true).removeAttr('name'); $('[for="1_30"]').addClass('invalid')
                                $('#2_00').prop('disabled', true).removeAttr('name'); $('[for="2_00"]').addClass('invalid')
                                $('#2_30').prop('disabled', true).removeAttr('name'); $('[for="2_30"]').addClass('invalid')
                                $('#3_00').prop('disabled', true).removeAttr('name'); $('[for="3_00"]').addClass('invalid')
                                $('#3_30').prop('disabled', true).removeAttr('name'); $('[for="3_30"]').addClass('invalid')
                                $('#4_00').prop('disabled', true).removeAttr('name'); $('[for="4_00"]').addClass('invalid')
                                $('#4_30').prop('disabled', true).removeAttr('name'); $('[for="4_30"]').addClass('invalid')
                                $('#5_00').prop('disabled', true).removeAttr('name'); $('[for="5_00"]').addClass('invalid')
                                covid = fecha;
                            }else if(horas >= '16:00' && horas < '23:59'){
                                $('#8_00').prop('disabled', true).removeAttr('name'); $('[for="8_00"]').addClass('invalid')
                                $('#8_30').prop('disabled', true).removeAttr('name'); $('[for="8_30"]').addClass('invalid')
                                $('#9_00').prop('disabled', true).removeAttr('name'); $('[for="9_00"]').addClass('invalid')
                                $('#9_30').prop('disabled', true).removeAttr('name'); $('[for="9_30"]').addClass('invalid')
                                $('#10_00').prop('disabled', true).removeAttr('name'); $('[for="10_00"]').addClass('invalid')
                                $('#10_30').prop('disabled', true).removeAttr('name'); $('[for="10_30"]').addClass('invalid')
                                $('#11_00').prop('disabled', true).removeAttr('name'); $('[for="11_00"]').addClass('invalid')
                                $('#11_30').prop('disabled', true).removeAttr('name'); $('[for="11_30"]').addClass('invalid')
                                $('#12_00').prop('disabled', true).removeAttr('name'); $('[for="12_00"]').addClass('invalid')
                                $('#12_30').prop('disabled', true).removeAttr('name'); $('[for="12_30"]').addClass('invalid')
                                $('#1_00').prop('disabled', true).removeAttr('name'); $('[for="1_00"]').addClass('invalid')
                                $('#1_30').prop('disabled', true).removeAttr('name'); $('[for="1_30"]').addClass('invalid')
                                $('#2_00').prop('disabled', true).removeAttr('name'); $('[for="2_00"]').addClass('invalid')
                                $('#2_30').prop('disabled', true).removeAttr('name'); $('[for="2_30"]').addClass('invalid')
                                $('#3_00').prop('disabled', true).removeAttr('name'); $('[for="3_00"]').addClass('invalid')
                                $('#3_30').prop('disabled', true).removeAttr('name'); $('[for="3_30"]').addClass('invalid')
                                $('#4_00').prop('disabled', true).removeAttr('name'); $('[for="4_00"]').addClass('invalid')
                                $('#4_30').prop('disabled', true).removeAttr('name'); $('[for="4_30"]').addClass('invalid')
                                $('#5_00').prop('disabled', true).removeAttr('name'); $('[for="5_00"]').addClass('invalid')
                                covid = fecha;
                            }else{
                                covid = fecha;
                            }
                        } else {
                            covid = fecha;
                        }
                        /* if(fecha === '27/08/2022'){
                            $('#8_00').prop('disabled', true).removeAttr('name'); $('[for="8_00"]').addClass('invalid')
                                $('#8_30').prop('disabled', true).removeAttr('name'); $('[for="8_30"]').addClass('invalid')
                                $('#9_00').prop('disabled', true).removeAttr('name'); $('[for="9_00"]').addClass('invalid')
                                $('#9_30').prop('disabled', true).removeAttr('name'); $('[for="9_30"]').addClass('invalid')
                                $('#10_00').prop('disabled', true).removeAttr('name'); $('[for="10_00"]').addClass('invalid')
                                $('#10_30').prop('disabled', true).removeAttr('name'); $('[for="10_30"]').addClass('invalid')
                                $('#11_00').prop('disabled', true).removeAttr('name'); $('[for="11_00"]').addClass('invalid')
                                $('#11_30').prop('disabled', true).removeAttr('name'); $('[for="11_30"]').addClass('invalid')
                                $('#12_00').prop('disabled', true).removeAttr('name'); $('[for="12_00"]').addClass('invalid')
                                $('#12_30').prop('disabled', true).removeAttr('name'); $('[for="12_30"]').addClass('invalid')
                                $('#1_00').prop('disabled', true).removeAttr('name'); $('[for="1_00"]').addClass('invalid')
                                $('#1_30').prop('disabled', true).removeAttr('name'); $('[for="1_30"]').addClass('invalid')
                                $('#2_00').prop('disabled', true).removeAttr('name'); $('[for="2_00"]').addClass('invalid')
                                $('#2_30').prop('disabled', true).removeAttr('name'); $('[for="2_30"]').addClass('invalid')
                                $('#3_00').prop('disabled', true).removeAttr('name'); $('[for="3_00"]').addClass('invalid')
                                $('#3_30').prop('disabled', true).removeAttr('name'); $('[for="3_30"]').addClass('invalid')
                                $('#4_00').prop('disabled', true).removeAttr('name'); $('[for="4_00"]').addClass('invalid')
                                $('#4_30').prop('disabled', true).removeAttr('name'); $('[for="4_30"]').addClass('invalid')
                                $('#5_00').prop('disabled', true).removeAttr('name'); $('[for="5_00"]').addClass('invalid')
                        } */
                        if(day_date == 6){
                            $('#2_30').prop('disabled', true).removeAttr('name'); $('[for="2_30"]').addClass('invalid')
                            $('#3_00').prop('disabled', true).removeAttr('name'); $('[for="3_00"]').addClass('invalid')
                            $('#3_30').prop('disabled', true).removeAttr('name'); $('[for="3_30"]').addClass('invalid')
                            $('#4_00').prop('disabled', true).removeAttr('name'); $('[for="4_00"]').addClass('invalid')
                            $('#4_30').prop('disabled', true).removeAttr('name'); $('[for="4_30"]').addClass('invalid')
                            $('#5_00').prop('disabled', true).removeAttr('name'); $('[for="5_00"]').addClass('invalid')
                        }
                        var horarios = c.length;
                        for (let i = 0; i < horarios; i++) {
                            console.log(c[i].hora_covid)
                            if(c[i].hora_covid === '8:00 AM'){$('#8_00').prop('disabled', true).removeAttr('name'); $('[for="8_00"]').addClass('invalid')};
                            if(c[i].hora_covid === '8:30 AM'){$('#8_30').prop('disabled', true).removeAttr('name'); $('[for="8_30"]').addClass('invalid')};
                            if(c[i].hora_covid === '9:00 AM'){$('#9_00').prop('disabled', true).removeAttr('name'); $('[for="9_00"]').addClass('invalid')};
                            if(c[i].hora_covid === '9:30 AM'){$('#9_30').prop('disabled', true).removeAttr('name'); $('[for="9_30"]').addClass('invalid')};
                            if(c[i].hora_covid === '10:00 AM'){$('#10_00').prop('disabled', true).removeAttr('name'); $('[for="10_00"]').addClass('invalid')};
                            if(c[i].hora_covid === '10:30 AM'){$('#10_30').prop('disabled', true).removeAttr('name'); $('[for="10_30"]').addClass('invalid')};
                            if(c[i].hora_covid === '11:00 AM'){$('#11_00').prop('disabled', true).removeAttr('name'); $('[for="11_00"]').addClass('invalid')};
                            if(c[i].hora_covid === '11:30 AM'){$('#11_30').prop('disabled', true).removeAttr('name'); $('[for="11_30"]').addClass('invalid')};
                            if(c[i].hora_covid === '12:00 PM'){$('#12_00').prop('disabled', true).removeAttr('name'); $('[for="12_00"]').addClass('invalid')};
                            if(c[i].hora_covid === '12:30 PM'){$('#12_30').prop('disabled', true).removeAttr('name'); $('[for="12_30"]').addClass('invalid')};
                            if(c[i].hora_covid === '1:00 PM'){$('#1_00').prop('disabled', true).removeAttr('name'); $('[for="1_00"]').addClass('invalid')};
                            if(c[i].hora_covid === '1:30 PM'){$('#1_30').prop('disabled', true).removeAttr('name'); $('[for="1_30"]').addClass('invalid')};
                            if(c[i].hora_covid === '2:00 PM'){$('#2_00').prop('disabled', true).removeAttr('name'); $('[for="2_00"]').addClass('invalid')};
                            if(c[i].hora_covid === '2:30 PM'){$('#2_30').prop('disabled', true).removeAttr('name'); $('[for="2_30"]').addClass('invalid')};
                            if(c[i].hora_covid === '3:00 PM'){$('#3_00').prop('disabled', true).removeAttr('name'); $('[for="3_00"]').addClass('invalid')};
                            if(c[i].hora_covid === '3:30 PM'){$('#3_30').prop('disabled', true).removeAttr('name'); $('[for="3_30"]').addClass('invalid')};
                            if(c[i].hora_covid === '4:00 PM'){$('#4_00').prop('disabled', true).removeAttr('name'); $('[for="4_00"]').addClass('invalid')};
                            if(c[i].hora_covid === '4:30 PM'){$('#4_30').prop('disabled', true).removeAttr('name'); $('[for="4_30"]').addClass('invalid')};
                            if(c[i].hora_covid === '5:00 PM'){$('#5_00').prop('disabled', true).removeAttr('name'); $('[for="5_00"]').addClass('invalid')};
                        }
                        $('#espacio-horarios-covid').removeClass('display-none');
                    } else {
                        $('#espacio-horarios-covid').removeClass('display-none');
                        $('#horarios-agenda input').prop('disabled', false);
                        $('#horarios-agenda label').addClass('invalid');
                    }
                })
            }
        }else{
            $('#domingo').addClass('display-none');
            $('#message-covid').addClass('display-none')
            $('#espacio-horarios-covid').addClass('display-none');
            validate_covid = false;
        }
    } else {
        $('#domingo').addClass('display-none');
        $('#message-covid').addClass('display-none')
        $('#espacio-horarios-covid').addClass('display-none');
        $('[name="agenda-covid"]').addClass('invalid');
        validate_covid = false;
    }
})
$('[name="agenda-hora-covid"]').on('change', function() {
    covid_hora = $(this).val();
    if ($(this).is(':checked')) {
        validate_covid_date == true;
    }
})
var num = 0;
finalCart.map(function(d) {
    if(d.id != 9){
        num += d.cant;
    }
});
if(num < 2){
    $('#space-peoples').addClass('display-none');
}
var options_cant = '<option value="1" selected disabled>¿Tu compra es para alguien más?</option>';
var cantidad_kits = num + 1;
for (var i = 0; i < cantidad_kits; i++) {
    if (i != 0 && i != 1) {
        options_cant += '<option value="' + i + '">Para ' + i + ' personas</option>';
    }
}
var cantidad_personas = 0;
$('#cantidad-personas').html(options_cant);
$('#cantidad-personas').on('change', function() {
    $('#data_persona_ext').removeClass('display-none')
    cantidad_personas = parseInt($(this).val());
    var template = '';
    if (cantidad_personas >= 2) {
        for (var i = 1; i < cantidad_personas; ++i) {
            num_persona = i + 1;
            template += ` <div class="large-4 small-12 px-1"><input type="text" name="nombre_persona_` + num_persona + `" placeholder="Nombre de la persona ` + num_persona + `" class="input" maxlength="80"></div><div class="large-4 small-12 px-1"><input type="text" space="persona" name="fecha_persona_` + num_persona + `" placeholder="Fecha nacimiento persona ` + num_persona + `" class="input" maxlength="50"></div><div class="large-4 small-12 px-1"><input type="text" name="pasaporte_persona_` + num_persona + `" placeholder="Pasaporte de la persona ` + num_persona + `" class="input" maxlength="50"></div><div class="large-12 small-12 px-1 mb-3"><input type="text" name="email_persona_` + num_persona + `" placeholder="Email de la persona ` + num_persona + `" class="input" maxlength="50"></div>`;
        }
        $('#data_persona_ext').removeClass('display-none')
        $('#data_persona_ext').html(template)
        $('[space="persona"]').fdatepicker({
            initialDate: '',
            format: 'dd/mm/yyyy',
            disableDblClickSelection: true,
            leftArrow: '<<',
            rightArrow: '>>',
            closeIcon: 'X',
            closeButton: true
        });
    } else {
        $('#data_persona_ext').addClass('display-none')
        $('#data_persona_ext').html('')
    }
})
var informacion_personas_extra = [];
$('[name="agenda-hora-covid"]').click(function(){
    var in_hora = $(this).attr('id');
    covid_hora = $(this).val();
    $('#horarios-agenda label').removeClass('active');
    $('[for="'+ in_hora +'"]').addClass('active');
    $('#hora-message-covid').html(covid_hora)
    $('#message-covid').removeClass('display-none')
})
$('[name="agenda-hora-covid"]').attr('checked', false);
var date_input = document.getElementById('dp1');
var format = {mask: '00/00/0000'};
var mask = IMask(date_input, format);
var date_input_2 = document.getElementById('dp2');
var mask_2 = IMask(date_input_2, format);
if(isset_clinicos == true){
    $('[name="clinicos-option"]').on('click change', function(){
        clinicos = $(this).val();
        if ($('#clinicos_true').is(':checked')) {
            $('#clinicos_true_').addClass('checkbox_p_a').removeClass('checkbox_p_d');
            $('#clinicos_false_').addClass('checkbox_p_d').removeClass('checkbox_p_a');
        } else {
            $('#clinicos_false_').addClass('checkbox_p_a').removeClass('checkbox_p_d');
            $('#clinicos_true_').addClass('checkbox_p_d').removeClass('checkbox_p_a');
        }
    })
}
console.log(isset_its)
if(isset_its == true){
    $('input[name=sexo]').on('click change', function(){
        if ($(this).is(':checked')) {
            if ($('#checkbox1').is(':checked')) {
                $('#vulva').addClass('checkbox_p_a');
                $('#pene').removeClass('checkbox_p_a');
            } else {
                $('#pene').addClass('checkbox_p_a');
                $('#vulva').removeClass('checkbox_p_a');
            }
            sexo = $(this).val();
            validate_sexo = true;
        } else {
            validate_sexo = false;
        }
    })
    $('[name="its"]').on('click change', function(){
        console.log('entra')
            if ($(this).is(':checked')) {
                its = $(this).val();
                validate_its = true;
                if ($('#its_no').is(':checked')) {
                    $('#checkbox_its_2').addClass('checkbox_p_a').removeClass('checkbox_p_d');
                    $('#checkbox_its_1').addClass('checkbox_p_d').removeClass('checkbox_p_a');
                } else {
                    $('#checkbox_its_1').addClass('checkbox_p_a').removeClass('checkbox_p_d');
                    $('#checkbox_its_2').addClass('checkbox_p_d').removeClass('checkbox_p_a');
                }
            }
        })
}
$('input[name=terms]').click(function(){
    if ($('#checkbox10').is(':checked')) {
        validate_terms = true;
        $('#checkbox_terms').addClass('checkbox_p_a').removeClass('checkbox_p_d');
    } else {
        validate_terms = false;
        $('#checkbox_terms').addClass('checkbox_p_d').removeClass('checkbox_p_a');
    }
})

$('input[name=sintomas-option]').on('click change', function(){
    if ($('#checkbox_sint_2').is(':checked')) {
        $('[name="sintomas"]').val('');
        $('[space="input-sintomas"]').addClass('display-none');
        sint_clic = false;
        sintomas = 'No tiene sintomas';
        $('#checkbox_sint_2_').addClass('checkbox_p_a').removeClass('checkbox_p_d');
        $('#checkbox_sint_1_').addClass('checkbox_p_d').removeClass('checkbox_p_a');
    } else {
        $('[space="input-sintomas"]').removeClass('display-none');
        sint_clic = true;
        $('#checkbox_sint_1_').addClass('checkbox_p_a').removeClass('checkbox_p_d');
        $('#checkbox_sint_2_').addClass('checkbox_p_d').removeClass('checkbox_p_a');
    }
})

$('input[name=pasaporte-option]').on('click change', function(){
    if ($('#checkbox_pasa_2').is(':checked')) {
        $('[name="pasaporte"]').val('');
        $('[space="input-pasaporte"]').addClass('display-none');
        pasa_clic = false;
        pasaporte = 'No es para viaje';
        $('#checkbox_pasa_2_').addClass('checkbox_p_a').removeClass('checkbox_p_d');
        $('#checkbox_pasa_1_').addClass('checkbox_p_d').removeClass('checkbox_p_a');
    } else {
        $('[space="input-pasaporte"]').removeClass('display-none');
        pasa_clic = true;
        $('#checkbox_pasa_1_').addClass('checkbox_p_a').removeClass('checkbox_p_d');
        $('#checkbox_pasa_2_').addClass('checkbox_p_d').removeClass('checkbox_p_a');
    }
})



function validateData() {
    var validate_cp = false;
    var format_text = /^([a-zA-Z0-9.À-ÿ\u00f1\u00d1 ])+$/;
    var format_email = /^([a-zA-Z0-9 À-ÿ\u00f1\u00d1_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z 0-9]{2,4})+$/;
    var format_date = /^([0-9]{2})+\/([0-9]{2})+\/([0-9]{4})+$/;
    var format_tel = /^([0-9]{5,11})+$/;
    var format_cp = /^([0-9]{4,5})+$/;
    var format_num = /^([0-9]{1,20})+$/;
    var name = $('[name="nombre"]').val();
    var medi = $('[name="medicamentos"]').val();
    var pasa = $('[name="pasaporte"]').val();
    var sint = $('[name="sintomas"]').val();
    var tel = $('[name="telefono"]').val();
    var email = $('[name="email"]').val();
    var date = $('[name="fecha"]').val();
    var calle = $('[name="calle"]').val();
    var municipio = $('[name="municipio"]').val();
    var estado = $('[name="estado"]').val();
    var cp = $('[name="codigo_postal"]').val();
    var no_ext = $('[name="no_ext"]').val();
    var no_int = $('[name="no_int"]').val();
    var colonia = $('[name="colonia"]').val();
    var covid_fecha = $('[name="agenda-covid"]').val();
    if (num_c != 0) {
        if (covid_fecha != '' && format_date.test(covid_fecha)) {
            $('[name="agenda-covid"]').removeClass('invalid');
            validate_covid = true;
        } else {
            $('[name="agenda-covid"]').addClass('invalid');
            validate_covid = false;
        }
        if ($('[name="agenda-hora-covid"]').is(':checked')) {
            validate_covid_hora = true;
        } else {
            validate_covid_hora = false;
        }
        if (medi == '' || format_text.test(medi)) {
            if(($('[name="medicamentos"]').length < 60 && $('[name="medicamentos"]').length > 0) || $('[name="medicamentos"]').length == 0){
                $('[name="medicamentos"]').removeClass('invalid');
                validate_medi = true;
            }else{
                $('[name="medicamentos"]').addClass('invalid');
                validate_medi = false;
            }
        } else {
            $('[name="medicamentos"]').addClass('invalid');
            validate_medi = false;
        }
        if ($('#checkbox_pasa_1').is(':checked')) {
            if (pasa != '') {
                if (format_text.test(pasa) && pasa.length < 15) {
                    $('[name="pasaporte"]').removeClass('invalid');
                    console.log('true')
                    validate_pasa = true;
                } else {
                    console.log('false')
                    validate_pasa = false;
                    $('[name="pasaporte"]').addClass('invalid');
                }
            }else{
                console.log('true')
                $('[name="pasaporte"]').removeClass('invalid');
                validate_pasa = true;
            }
        }else{
            $('[name="pasaporte"]').removeClass('invalid');
            validate_pasa = true;
        }
        if ($('#checkbox_sint_1').is(':checked')) {
            if(sint != '' && $('[name="sintomas"]').length < 80){
                if (format_text.test(sint)) {
                    $('[name="sintomas"]').removeClass('invalid');
                    validate_sint = true;
                } else {
                    $('[name="sintomas"]').addClass('invalid');
                    validate_sint = false;
                }
            }else {
                $('[name="sintomas"]').removeClass('invalid');
                validate_sint = true;
            }
        }else{
            $('[name="sintomas"]').removeClass('invalid');
            validate_sint = true;
        }
    }
    if(isset_clinicos == true){
        if ($('[name="clinicos-option"]').is(':checked')) {
            validate_antibiotics = true;
        }else{
            validate_antibiotics = false;
        }
    }
    if (name != '' && format_text.test(name)) {
        if($('[name="nombre"]').length > 0 && $('[name="nombre"]').length < 80){
            $('[name="nombre"]').removeClass('invalid');
            validate_name = true;
        }else{
            $('[name="nombre"]').addClass('invalid');
            validate_name = false;
        }
    } else {
        $('[name="nombre"]').addClass('invalid');
        validate_name = false;
    }
    if (($('[name="telefono"]').length > 0 && $('[name="telefono"]').length < 15) && format_tel.test(tel)) {
        $('[name="telefono"]').removeClass('invalid');
        validate_tel = true;
    } else {
        $('[name="telefono"]').addClass('invalid');
        validate_tel = false;
    }
    if (($('[name="calle"]').length > 0 && $('[name="calle"]').length < 50) && format_text.test(calle)) {
        $('[name="calle"]').removeClass('invalid');
        validate_street = true;
    } else {
        $('[name="calle"]').addClass('invalid');
        validate_street = false;
    }
    if (($('[name="municipio"]').length > 0 && $('[name="municipio"]').length < 50) && format_text.test(municipio)) {
        $('[name="municipio"]').removeClass('invalid');
        validate_municipality = true;
    } else {
        $('[name="municipio"]').addClass('invalid');
        validate_municipality = false;
    }
    if (($('[name="estado"]').length > 0 && $('[name="estado"]').length < 50) && format_text.test(estado)) {
        $('[name="estado"]').removeClass('invalid');
        validate_state = true;
    } else {
        $('[name="estado"]').addClass('invalid');
        validate_state = false;
    }
    if (($('[name="no_ext"]').length > 0 && $('[name="estado"]').length < 10) && format_num.test(no_ext)) {
        $('[name="no_ext"]').removeClass('invalid');
        validate_ne = true;
    } else {
        $('[name="no_ext"]').addClass('invalid');
        validate_ne = false;
    }
    if (colonia != '' && format_text.test(colonia)) {
        if($('[name="colonia"]').length < 50){
            $('[name="colonia"]').removeClass('invalid');
            validate_suburb = true;
        }else{
            $('[name="colonia"]').addClass('invalid');
            validate_suburb = false;
        }
    } else {
        $('[name="colonia"]').addClass('invalid');
        validate_suburb = false;
    }
    if (cp != '' && format_cp.test(cp) && (cp.length == 5 || cp.length == 4)) {
        validate_cp = true;
        $('[name="codigo_postal"]').removeClass('invalid');
    } else {
        validate_cp = false;
        $('[name="codigo_postal"]').addClass('invalid');
    }
    if (date != '' && format_date.test(date)) {
        $('[name="fecha"]').removeClass('invalid');
        validate_date = true;
    } else {
        $('[name="fecha"]').addClass('invalid');
        validate_date = false;
    }

    if (!format_email.test(email) || email == '') {
        $('[name="email"]').addClass('invalid');
        validate_email = false;
    } else {
        if($('[name="email"]').length < 55){
            $('[name="email"]').removeClass('invalid');
            validate_email = true;
        }else{
            $('[name="email"]').addClass('invalid');
            validate_email = false;
        }
    }
    console.log(validate_antibiotics)
    console.log(validate_sexo)
    if (validate_pasa == true && validate_medi == true && validate_name == true && validate_sexo == true && validate_tel == true && validate_email == true && validate_street == true && validate_municipality == true && validate_state == true && validate_cp == true && validate_ne == true && validate_suburb == true && validate_date == true && validate_covid == true && validate_covid_hora == true && validate_antibiotics == true && validate_its == true) {
        return true;
    } else {
        return false;
    }
}
function validateDataAlert() {
    var validate_cp = false;
    var format_text = /^([a-zA-Z0-9.À-ÿ\u00f1\u00d1 ])+$/;
    var format_email = /^([a-zA-Z0-9 À-ÿ\u00f1\u00d1_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z 0-9]{2,4})+$/;
    var format_date = /^([0-9]{2})+\/([0-9]{2})+\/([0-9]{4})+$/;
    var format_tel = /^([0-9]{5,11})+$/;
    var format_cp = /^([0-9]{4,5})+$/;
    var format_num = /^([0-9]{1,20})+$/;
    var name = $('[name="nombre"]').val();
    var tel = $('[name="telefono"]').val();
    var email = $('[name="email"]').val();
    var date = $('[name="fecha"]').val();
    var calle = $('[name="calle"]').val();
    var municipio = $('[name="municipio"]').val();
    var estado = $('[name="estado"]').val();
    var cp = $('[name="codigo_postal"]').val();
    var no_ext = $('[name="no_ext"]').val();
    var colonia = $('[name="colonia"]').val();
    var covid_fecha = $('[name="agenda-covid"]').val();
    if(isset_clinicos == true){
        if ($('[name="clinicos-option"]').is(':checked') == false) {
            alerta('clinicos-option', '', true)
        }
    }
    if(isset_its == true){
        if($('input[name=sexo]').is(':checked') == false){
            alerta('sexo', '', true)
        }
        if($('[name="its"]').is(':checked') == false){
            alerta('its-alert', '', true)
        }
    }
    if(isset_covid == true){
        if($('input[name=sexo]').is(':checked') == false){
            alerta('sexo', '', true)
        }
        if($('[name="sintomas-option"]').is(':checked') == false){
            alerta('sintomas-option', '', true)
        }
        if($('[name="pasaporte-option"]').is(':checked') == false){
            alerta('pasaporte-option', '', true)
        }
        if (covid_fecha == '' && !format_date.test(covid_fecha)) {
            alerta('agenda-covid', 'La fecha es incorrecta')
        }
        if ($('[name="agenda-hora-covid"]').is(':checked') == false) {
            alerta('agenda-hora-covid', 'Porfavor selecciona una horario')
        }
    }
    if (name == '' && !format_text.test(name)) {
        alerta('nombre', 'Ingresa el nombre de forma correcta')
    }
    if (tel == '' || !format_tel.test(tel)) {
        alerta('telefono', 'Ingresalo de forma correcta')
    }
    if (calle == '' || !format_text.test(calle)) {
        alerta('calle', 'Ingresa la calle de forma correcta')
    }
    if (municipio == '' || !format_text.test(municipio)) {
        alerta('municipio', 'Ingresa el municipio de forma correcta')
    }
    if (estado == '' || !format_text.test(estado)) {
        alerta('estado', 'Ingresa el municipio de forma correcta')
    }
    if ($('[name="no_ext"]').length == 0 || !format_num.test(no_ext)) {
        alerta('no_ext', 'Ingresalo de forma correcta')
    }
    if (colonia == '' && !format_text.test(colonia)) {
        alerta('colonia', 'Ingresa la colonia de forma correcta')
    }
    if (cp == '' || !format_cp.test(cp)) {
        alerta('codigo_postal', 'Ingresa el cp de forma correcta')
    }
    if (date == '' && !format_date.test(date)) {
        alerta('fecha', '', true)
    }
    if (!format_email.test(email) || email == '') {
        alerta('email', 'Ingresa el email de forma correcta')
    }
}
$('[name="conoce"]').on('change', function(){
    conoce = $(this).val();
})



$('[action="pay"]').on('click', function(e) {
    e.preventDefault()
    console.log(clinicos)
    var id = $('[name="id"]').val();
    var name = $('[name="nombre"]').val();
    var tel = $('[name="telefono"]').val();
    var ext = $('#lada').val();
    tel = ext + tel;
    console.log(tel)
    var email = $('[name="email"]').val();
    var date = $('[name="fecha"]').val();
    var street = $('[name="calle"]').val();
    var municipality = $('[name="municipio"]').val();
    var state = $('[name="estado"]').val();
    var cp = $('[name="codigo_postal"]').val();
    var no_ext = $('[name="no_ext"]').val();
    var no_int = $('[name="no_int"]').val();
    var suburb = $('[name="colonia"]').val();
    var medicamento = $('[name="medicamentos"]').val();
    if (sint_clic == true) {
        sintomas = $('[name="sintomas"]').val();
    }else{
        sintomas = 'No tiene sintomas';
    }
    if (pasa_clic == true) {
        pasaporte = $('[name="pasaporte"]').val();
    }else{
        pasaporte = 'No es para viaje';
    }
    var total_parcial = tp;
    var total = parseInt(total_parcial) + parseInt(envio);

    var cantidad_personas = $('[name="cantidad_personas"]').val();
    var num = 0;
    finalCart.map(function(d) {
        num += d.cant;
    });
    if (cantidad_personas >= 2) {
        for (var i = 1; i < cantidad_personas; ++i) {
            num_persona = i + 1;
            informacion_personas_extra[i] = [{
                'nombre': $('[name="nombre_persona_' + num_persona + '"]').val(),
                'correo': $('[name="correo_persona_' + num_persona + '"]').val(),
                'fecha': $('[name="fecha_persona_' + num_persona + '"]').val(),
                'pasaporte': $('[name="pasaporte_persona_' + num_persona + '"]').val()
            }]
        }
    }

    if (validateData() === true) {
        descuento = z12;
        covid = $('[name="agenda-covid"]').val();
        console.log(covid_hora)
        if(validate_terms === true){
            grecaptcha.ready(function() {

                grecaptcha.execute('6LeRAI8eAAAAAGYdXRWWmQ3V6XqzSjeZ3LCLXJwh', { action: 'submit' }).then(function(token) {
                $(this).addClass('display-none');
                    $.post('../api/datos/addData.php', {token, cantidad_personas, informacion_personas_extra, id, num_c, num, medicamento, pasaporte, sintomas, covid, clinicos, covid_hora, set_products, coupon, descuento, name, tel, email, date, street, municipality, state, cp, no_ext, no_int, suburb, conoce, sexo, its, envio, total_parcial, total }, function(e) {
                        if(parseInt(e) == 1){
                            $.post('../api/rappi/addData.php', { set_products, coupon, descuento, id, name, tel, email, date, street, municipality, state, cp, no_ext, no_int, suburb, conoce, sexo, its, total }, function() {
                                window.location.href = "checkouts";
                            })
                        }else{
                            $('#alert-error-back').foundation('open');
                            setTimeout(function(){
                                window.location.href = "detalle-compra";
                            }, 6000)
                        }
                    })
               });
            });
        }else{
            if(screen.width >= 800){
            }else{
                $('#alert-mobile').removeClass('display-none');
                setTimeout(function(){
                    $('#alert-mobile').addClass('display-none');
                }, 4500)
            }
            $(this).removeClass('display-none');
        }
    } else {
        $('#alert-mobile').removeClass('display-none');
        setTimeout(function(){
            validateDataAlert();
    if(screen.width <= 800){
        $('html, body').animate({
            scrollTop: $('#data-customer').offset().top - 300
        }, 500);
    }else{
        $('html, body').animate({
            scrollTop: $('#data-customer').offset().top + 200
        }, 500);
    }
        },2000)
        setTimeout(function(){
            $('#alert-mobile').addClass('display-none');
        }, 4500)
        $(this).removeClass('display-none');
    }
})

$('#close-error').on('click', function(){
    window.location.href = "detalle-compra";
})

   $("#lada").CcPicker({
    "countryCode":"mx",
    'countryFilter': true,
    'searchPlaceHolder': 'Busca',
    'dialCodeFieldName': false
  });
  $("#lada").on("countrySelect", function(e, i){
    $('#lada').val(i.phoneCode)
});

  function verifyPromotions(cart){
      let total_promo = total(finalCart);
      $.post('../api/get/getPromotions.php?get=promotion', {cart, total_promo}, function (e) {
          console.log(e);
          let promotion = JSON.parse(e);
          if(promotion.length !== 0){
              console.log('entra')
              setTimeout(function () {
                  $('#pop-up-promo').foundation('open');
              }, 3000)

              $('#promo-active').html(promotion.name)
              $('#promo-active-gift').addClass('display-none')

              if(promotion.type === '2x1' || promotion.type === '3x2' || promotion.type === '4x3'){
                  updateTotals(promotion.amount_discount)
              }
              if(promotion.type === 'discount-total'){
                  $('#promo-active-discount').removeClass('display-none')
                  if(promotion.type_discount === 'porcent'){
                    let discount_total = total(finalCart) * (promotion.porcent_discount/100);
                    $('#promo-active-discount').html('-' + promotion.porcent_discount + '%')
                    updateTotals(discount_total)
                  }else{
                      $('#promo-active-discount').html('- ' + currencyMXN(promotion.amount_discount))
                      updateTotals(promotion.amount_discount)
                  }
              }
              if(promotion.type === 'discount-product-seleted'){
                  let items = JSON.parse(cart);
                      items.map(item => {
                          if(item.id === promotion.product){
                              if(promotion.type_discount === 'porcent'){
                                  $('#promo-active-discount').html('-' + promotion.porcent_discount + '%')
                                  let discount_total = item.price * (promotion.porcent_discount/100);
                                  updateTotals(discount_total)
                              }else{
                                  $('#promo-active-discount').html('- ' + currencyMXN(promotion.amount_discount))
                                  updateTotals(promotion.amount_discount)
                              }
                          }
                      })

              }
              if(promotion.type === 'free'){
                  let items = JSON.parse(cart);
                  items.map(item => {
                      if(item.id === promotion.product){
                          if(promotion.type_discount === 'porcent'){
                              let discount_total = item.price * (promotion.porcent_discount/100);
                              updateTotals(discount_total * promotion.amount)
                          }else{
                              updateTotals(promotion.amount_discount)
                          }
                      }
                  })
              }
              if(promotion.type === 'gift'){
                  console.log('entra promo')
                  $('#promo-active-gift').removeClass('display-none')
                  $('#promo-active-gift').html('¡Al recibir tu compra, recibirás un obsequio de nuestra parte!')
              }
          }else{
              console.log('entra')
          }
      })
  }