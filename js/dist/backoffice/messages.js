$('[action="messages"]').on('click', function(e){
    e.preventDefault();
    var space_chekt = $('[space="messages_chektahora"]');
    var space_inmuno = $('[space="messages_inmunochek"]');
    if(space_chekt.hasClass('display-none')){
        $('[action="messages"]').html('Mensajes inmunochek');
        space_chekt.removeClass('display-none');
        space_inmuno.addClass('display-none');
    }else{
        $('[action="messages"]').html('Mensajes chektahora');
        space_chekt.addClass('display-none');
        space_inmuno.removeClass('display-none');
    }
})