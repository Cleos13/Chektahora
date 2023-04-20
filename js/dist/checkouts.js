$('#btnStripe').on('click', function(e) {
    $('#loading').removeClass('display-none');
    let lenguaje = $(this).attr('lenguaje');
    $.post('../api/carrito/stripe.php', {lenguaje}, function (get) {
        window.location.href = get;

    })
})
