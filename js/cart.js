$.post('../api/datos/precios_front.php', {}, function (e) {
    let stock = JSON.parse(e);
    let cart = [];
    localStorage.removeItem('stock_update');
    localStorage.setItem("stock_update", JSON.stringify(stock))
    if (!JSON.parse(localStorage.getItem("cart_update"))) {
        localStorage.setItem("cart_update", JSON.stringify(cart))
    }
})

function add(id, cant) {
    let cart = JSON.parse(localStorage.getItem("cart_update"));
    let stock = JSON.parse(localStorage.getItem("stock_update"));

    if (cart.length === 0) {
        // el carro estaba vacio
        let result = stock.filter((item) => {
            return id === item.id;
        })
        localStorage.setItem("cart_update", JSON.stringify(result))
        reload();
    } else {
        let chkCart = cart.some((item) => {
            return id === item.id;
        })

        if (chkCart) {
            // ya estaba en el carro de compra
            let result = cart.filter((item) => {
                return id === item.id;
            })
            result[0].cant = result[0].cant + 1;
            localStorage.setItem('cart_update', JSON.stringify(cart));
            reload();
        } else {
            // no estaba en el carro de compra
            let itemNuevo = stock.filter((item) => {
                return id === item.id;
            })
            cart.push(itemNuevo[0]);
            localStorage.setItem("cart_update", JSON.stringify(cart))
            reload();
        }

    }
};

function del(id) {
    let cart = JSON.parse(localStorage.getItem("cart_update"));
    let result = cart.filter((item) => {
        return id === item.id;
    })
    result[0].cant = result[0].cant - 1;
    localStorage.setItem('cart_update', JSON.stringify(cart));
    reload();
}

function reload() {
    window.location.reload();
}

function total(cart) {
    let suma = 0;
    cart.map(item => {
        return suma = suma + (item.price * item.cant)
    });
    return suma;
}


function paintTotal(cart) {
    let suma = total(cart);
    let results = `<p><strong>${suma}</p></strong>`
    return results
}

function deleteItem(id) {
    let cart = JSON.parse(localStorage.getItem("cart_update"));
    let index = cart.findIndex(index => index.id === id);
    if (index >= 0) {
        cart.splice(index, 1)
    }
    localStorage.setItem('cart_update', JSON.stringify(cart));
    reload();
}