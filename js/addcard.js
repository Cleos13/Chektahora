function addCart() {
    let popItems = JSON.parse(localStorage.getItem("cart_update"));
    let num = 0;
    let results_2 = popItems.map(pop => {
        num += pop.cant;
        return `<span class="grid-x large-12 d-flex justify-content-center rounded-3 my-1 shadow-lg py-3 mx-0" item="${pop.id}"><div class="col-6 col-md-2"><div class="text-center"><img src="../img/products/${pop.img}" alt="" class="w-75 rounded-3"></div></div><div class="col-6 col-md-4 fs-6 d-flex align-items-center justify-content-center fw-bold"><a class="link-baterrey text-dark" href="product?u_ref=${pop.id}">${pop.name}</a></div><div class="col-6 col-md-3 d-flex align-items-center justify-content-center px-0"><div class="row d-flex align-items-center justify-content-center px-0"><div class="col-4 col-md-2 d-flex justify-content-center px-0"><button class="btn fs-5" delete-cart="${pop.id}">-</button></div><div class="col-4 col-md-4 d-flex justify-content-center"><input type="text" class="form-control bg-transparent border text-center border-dark text-dark" disabled space="cant-${pop.id}" placeholder="${pop.cant}" value="${pop.cant}"></div><div class="col-4 col-md-2 d-flex justify-content-center px-0"><button class="btn fs-5" plus-cart="${pop.id}">+</button></div></div></div><div class="col-6 col-md-2 fs-6 d-flex align-items-center justify-content-center" space="total-${pop.id}">$ ${number_format((pop.price)*(pop.cant), 2)}</div><div class="col-6 col-md-1 d-flex align-items-center justify-content-center"><button class="btn fs-4 fw-bold" remove-item="${pop.id}"><img class="cerrar" alt="cerrar" src="css/img/iconos/cerrar.png"/></button></div></span>`;
    })
    $('[space="num-products"]').html(num);
    if (results_2.length != 0) {
        $('[space="btn-pay"]').removeClass('d-none');
        $('#list-products').html(results_2);
    } else {
        document.getElementById('list-products').innerHTML = '<div class="py-3 text-center">No tienes ningun producto agregado</div>';
    }
    $('[space="paint-total"]').html(paintTotal(pop))
}
addCart();
$('[action="add-card"]').on('click', function() {
    addCart();
})