validate_coupon = false;
validate_coupon_c = false;
validate_value = false;
validate_type = false;
validate_date = false;
var pagina;
function validateData(){
        var coupon = $('#cupon').val();
        var coupon_c = $('#confirmar-cupon').val();
        var t_discount = $('#tipo-descuento').val();
        var amount = $('#cantidad').val();
        var porcent = $('#porcentaje').val();
        var date = $('#vencimiento').val();

        if(coupon != ''){
            $('#cupon').removeClass('invalid');
            validate_coupon = true;
            }else{
            $('#cupon').addClass('invalid');
            validate_coupon = false;
        }
        if(date != ''){
            $('#vencimiento').removeClass('invalid');
            validate_date = true;
            }else{
            $('#vencimiento').addClass('invalid');
            validate_date = false;
        }
        if(coupon_c != '' && coupon_c === coupon){
            $('#confirmar-cupon').removeClass('invalid');
            validate_coupon_c = true;
            }else{
            $('#confirmar-cupon').addClass('invalid');
            validate_coupon_c = false;
        }
        if(t_discount == 'Cantidad'){
            if(amount != ''){
                $('#cantidad').removeClass('invalid');
                validate_value = true;
            }else{
                $('#cantidad').addClass('invalid');
                validate_value = false;
            }
        }else{
            if(porcent != ''){
                $('#porcentaje').removeClass('invalid');
                validate_value = true;
            }else{
                $('#porcentaje').addClass('invalid');
                validate_value = false;
            }
        }
        if(validate_coupon == true && validate_coupon_c == true && validate_value == true && validate_date == true){
            return true;
        }else{
            return false;
        }
    }

$('#cupon').on('keyup', function(){
    var name = $(this).val();
    if (name == '') {
        $(this).addClass('invalid');
        validate_coupon = false;
    } else {
        $(this).removeClass('invalid');
        validate_coupon = true;
    }
})

$('#vencimiento').on('change', function(){
    var name = $(this).val();
    if (name == '') {
        $(this).addClass('invalid');
        validate_date = false;
    } else {
        $(this).removeClass('invalid');
        validate_date = true;
    }
})
$('#confirmar-cupon').on('keyup', function(){
    var coupon_c = $(this).val();
    var coupon = $('#cupon').val();
    if (coupon_c === coupon) {
        $(this).removeClass('invalid');
        validate_coupon_c = true;
    } else {
        $(this).addClass('invalid');
        validate_coupon_c = false;
    }
})
var format_data = /^([0-9]{1,20})+$/;
$('#cantidad').on('keyup', function(){
    var a = $(this).val();
    if(a != '' && format_data.test(a)){
        validate_value = true;
        $(this).removeClass('invalid');
    }else{
        validate_value = false;
        $(this).addClass('invalid');
    }
})
$('#porcentaje').on('keyup', function(){
    var p = $(this).val();
    if(p != '' && format_data.test(p) && p <= 100){
        validate_value = true;
        $(this).removeClass('invalid');
    }else{
        validate_value = false;
        $(this).addClass('invalid');
    }
})
$(function(){
    $('#vencimiento').fdatepicker({
        format: 'yyyy-mm-dd',
        disableDblClickSelection: true,
        minDate: 'today',
        leftArrow:'<<',
        rightArrow:'>>',
        closeIcon:'X',
        closeButton: true
    });
});
$('#pagina').on('change', function(){
    pagina = $(this).val()
    var tipo = $('#tipo_cupon');
    $('#tipo_cupon').html('<option disabled selected>Aplica a</option>').prop('disabled', false);
    $('#aplica').html('<option selected disabled>Selecciona</option>').prop('disabled', true);
    console.log(pagina)
    if(pagina == 'Inmunocheck'){
        tipo.append(`<option value="Producto">Producto</option>`)
    }else{
        tipo.append(`<option value="Producto">Producto</option><option value="Categoria">Categoria</option>`)
    }
})
$('#tipo_cupon').on('change', function(){
    tipo_aplica = $(this).val()
    var aplica = $('#aplica');
    $('#aplica').html('<option selected disabled>Selecciona</option>').prop('disabled', false);
    if(tipo_aplica == 'Producto'){
        var productos;
        if(pagina == 'Inmunocheck'){
            productos = `<option value="influenza">Influenza</option><option value="Hepatitis B">Antihepatits A Y B</option><option value="VPH">VPH</option><option value="Neumococo">Neumococo</option><option value="HERPES ZÓSTER">Herpes Zóster</option>`;
            aplica.html(productos);
        }else{
            $.post('../api/datos/precios_front.php', {}, function (e) {
                let template = '';
                let products_chektahora = JSON.parse(e);
                for (const item of products_chektahora) {
                    template += `<option value="${item.name}">${item.name}</option>`;
                }
                aplica.html(template);
            })

        }
    }else{
        aplica.append(`<option value="covid">Categoria covid</option><option value="its">Categoria its</option><option value="clinicos">Categoria clinicos</option>`)
    }
})
$('#tipo-descuento').on('change', function(){
    var tipo_descuento = $(this).val();
    if(tipo_descuento == 'Cantidad'){
        $('#cantidad').removeClass('display-none');
        $('#porcentaje').addClass('display-none');
    }else{
        $('#cantidad').addClass('display-none');
        $('#porcentaje').removeClass('display-none');
    }
})
$('#crear-cupon').on('click', function(){
    var cupon = $('#confirmar-cupon').val();
    var tipo_descuento = $('#tipo-descuento').val();
    var tipo_cupon = $('#tipo_cupon').val();
    var aplica = $('#aplica').val();
    var cantidad = $('#cantidad').val();
    var porcentaje = $('#porcentaje').val();
    var vencimiento = $('#vencimiento').val();
    if(validateData() == true && pagina != ''){
        var url;
        if(pagina == 'Inmunocheck'){
            url = 'https://www.inmunochek.com/api/crear-cupon.php';
        }else{
            url = 'api/add-coupon.php';
        }
        console.log(url);
        $.post(url, {cupon, tipo_descuento, tipo_cupon, aplica, cantidad, porcentaje, vencimiento}, function(data){
            console.log(data)
            if(parseInt(data) == 1){
                $("#message-1").removeClass("display-none");
                setTimeout(function(){
                    $("#message-1").addClass("display-none");
                    window.location.reload();
                },4000)
            }else{
                $("#message-2").removeClass("display-none");
                setTimeout(function(){
                    $("#message-2").addClass("display-none");
                    window.location.reload();
                },4000)
            }
            console.log(data)
        })
    }
})