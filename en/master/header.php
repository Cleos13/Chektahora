<div class="menuFixed relative">
    <div class="cell">
        <div class="row purple promo ">
            <!-- <div><img class="regalo" alt="promocion" src="../css/img/iconos/regalo.svg" /></div> -->
            <p style="text-align:center;font-size: 12px;">
                <?php
                $get = $conn->query("SELECT * FROM banner WHERE id=1");
                $data = $get->fetch_all(MYSQLI_ASSOC);
                echo $data[0]['banner_ingles'];
                $get_items = $conn->query("SELECT * FROM products WHERE store=1");
                $items = $get_items->fetch_all(MYSQLI_ASSOC);
                ?>
            </p>
        </div>
    </div>
    <div class="grid-x large-12 hide-for-small-only show-for-medium relative header-web" id="header-web" style="">
        <a class="large-3 d-flex align-height-center justify-content-center" href="../index"><img class="" src="../css/img/logoChektahora.svg" width="200px" /></a>
        <div class="large-7 d-flex">
            <a href="nosotros" role="menuitem" class="menuAnimado text-morado svg fw-medium">US</a>
            <div class="d-flex">
                <a href="its" menu-pruebas="its" class="subMenu text-morado d-flex align-height-center fw-medium">SEXUAL INFECTIONS
                    <div class="pl-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4F2D83" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                            <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                        </svg>
                    </div>
                </a>
                <div class="absolute menu-pruebas display-none menu-its" menu="active" menu-pruebas="its">
                    <div class="submenu-opciones-sm submenu-its" menu-action="its" style="height:500px; overflow-y: auto !important; overflow-x: hidden">
                        <div class="grid-x d-flex align-height-center large-12 pruebas fw-medium">
                            <?php
                            foreach ($items as $item){
                                if($item['category'] === 'its'){
                                    echo '<a class="large-12" href="producto?_ref='. $item['id'] .'"><img src="../css/img/menu/itss.png" alt="" width="35px">'. ucwords(mb_strtolower($item['name'], 'UTF-8')) .'</a>';
                                }
                            }
                            ?>
                            <!--<a class="large-12" href="producto?_ref=135bab4d-4515-4395-b5O6-8879T700p09977"><img src="../css/img/menu/itss.png" alt="" width="35px">Kit Black</a>
                            <a class="large-12" href="producto?_ref=135bab4d-4015-4395-0586-8879T700p09977"><img src="../css/img/menu/itss.png" alt="" width="35px">Kit Gold</a>
                            <a class="large-12" href="producto?_ref=135bab4d-4015-4305-0586-8879T700I09977"><img src="../css/img/menu/itss.png" alt="" width="35px">Kit Platinum</a>
                            <a class="large-12" href="producto?_ref=135bab4d-4015-4305-0586-8879T70ODI09977"><img src="../css/img/menu/itss.png" alt="" width="35px">Kit VPH</a>-->
                        </div>
                        <!-- <div class="text-center">
                            <a class="btn-banner-2 text-white text-center" href="its">LEARN MORE</a>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="d-flex">
                <a href="covid-19" menu-pruebas="covid" class="subMenu text-morado d-flex align-height-center fw-medium">COVID-19
                    <div class="pl-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4F2D83" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                            <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                        </svg>
                    </div>
                </a>
                <div class="absolute menu-pruebas display-none menu-covid" menu="active" menu-pruebas="covid">
                    <div class="submenu-opciones-sm submenu-covid" menu-action="covid" style="height:500px; overflow-y: auto !important; overflow-x: hidden">
                        <div class="grid-x d-flex align-height-center large-12 pruebas fw-medium">
                            <?php
                            foreach ($items as $item){
                                if($item['category'] === 'covid'){
                                    echo '<a class="large-12" href="producto?_ref='. $item['id'] .'"><img src="../css/img/menu/covidd.png" alt="" width="35px">'. ucwords(mb_strtolower($item['name'], 'UTF-8')) .'</a>';
                                }
                            }
                            ?>
                        </div>
                        <!-- <div class="text-center">
                            <a class="btn-banner-2 text-white text-center" href="covid-19">LEARN MORE</a>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="d-flex">
                <a href="clinicos" menu-pruebas="clinicos" class="subMenu text-morado d-flex align-height-center fw-medium">CLINICS
                    <div class="pl-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4F2D83" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                            <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                        </svg>
                    </div>
                </a>
                <div class="absolute menu-pruebas display-none menu-clinicos" menu="active" menu-pruebas="clinicos">
                    <div class="submenu-opciones-lg" menu-action="clinicos" style="height:500px; overflow-y: auto !important; overflow-x: hidden">
                        <div class="grid-x d-flex align-height-center large-12 pruebas fw-medium text-blue">
                            <?php
                            foreach ($items as $item){
                                if($item['category'] === 'clinicos'){
                                    echo '<a class="d-flex large-3 py-1 align-height-center" href="producto?_ref='. $item['id'] .'"><img src="../css/img/menu/clinicoss.png" alt="" width="30px">'. ucwords(mb_strtolower($item['name'], 'UTF-8')) .'</a>';
                                }
                            }
                            ?>
                        </div>
                        <!-- <div class="text-center">
                            <a class="btn-banner-2 text-white text-center" style="margin-bottom: 25px !important;" href="clinicos">LEARN MORE</a>
                        </div> -->
                    </div>
                </div>
            </div>
            <a href="blog" role="menuitem" class="menuAnimado text-morado svg fw-medium">BLOG</a>
        </div>
        <div class="large-1 d-flex align-height-center" style="justify-content: space-evenly;">
            <a href="../es/" class="lenguaje" style="background-image: url(../css/img/mx.png);"></a>
            <div class="shopingCart">
                <a href="detalle-compra" class="float" space="button-cart">
                    <div class="num-products" space="num-products">0</div>
                    <img alt="carrito" src="../css/img/iconos/carrito.svg" width="35px" />
                </a>
                <div class="card display-none pop-up" id="pop-up">
                    <div class="card-title py-2 grid-x cell">
                        <div class="large-1 text-right">
                            <img class="cerrar" alt="cerrar" src="../css/img/iconos/cerrar.png" id="close-pop-up" />
                        </div>
                        <h6 class="text-morado fw-bold fs-6 large-10 text-center">Products in your cart</h6>
                        <div class="large-1"></div>
                    </div>
                    <div class="card-body text-morado" id="list-products" style="overflow-y: scroll; height: 100%;">
                    </div>
                    <div class="display-none py-2 grid-x cell" id="space-total">
                        <div class="large-6 flex-center">
                            <a href="detalle-compra" class="btn-banner-2 text-white">Pay</a>
                        </div>
                        <div id="total-parcial" class="text-morado fw-bold large-6 d-flex align-height-center flex-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-mobile" style="top: 50px;">
        <a href="#" button="menu-mobile" style="margin-left: 15px; z-index: 101; position:absolute; left:0; width: 80px;">
            <svg width="35" height="35" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="35" height="40" fill="white" fill-opacity="0.01" />
                <path d="M7.94977 11.9498H39.9498" stroke="#4F2D83" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M7.94977 23.9498H39.9498" stroke="#4F2D83" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M7.94977 35.9498H39.9498" stroke="#4F2D83" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </a>
        <a class="logo-blog text-center" href="index"><img src="../css/img/blog/chektahora-iso.svg" style="width: 40px;"></a>
        <a href="detalle-compra" class="float" space="button-cart">
            <div class="num-products" space="num-products">0</div>
            <img alt="carrito" src="../css/img/iconos/carrito.svg" width="35px" />
        </a>
    </div>
    <div space="menu" class="grid-x small-8 hide-for-large align-self-middle menu-mobile">
        <div class="p-header relative d-flex">
            <div class="relative">
                <button class="absolute" id="delete-search-menu" style="left: 20px; top: 13px; width: 30px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                    </svg>
                </button>
                <input class="search-products-header" id="search-product">
                <span class="absolute" style="right: 20px; top: 13px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </span>
            </div>
            <div class="menu-pruebas pruebas-mobile relative">
                <div class="menu-opciones-search text-morado display-none" id="products-list-menu">
                    <?php
                    $get_images = $conn->query("SELECT * FROM images_product");
                    $images = $get_images->fetch_all(MYSQLI_ASSOC);
                    foreach ($items as $item){
                        $img = '';
                        foreach ($images as $image){
                            if($image['id_product'] === $item['id']){
                                $img = $image['img'];
                            }
                        }
                        echo '<div class="mb-2 display-none">
                                        <a href="producto?_ref='. $item['id'] .'" class="fs-3">
                                            <img src="../img/products/'. $img .'" alt="" width="25px" class="mx-2">'. strtoupper($item['name']) .'</span>
                                        </a>
                                    </div>';

                    }
                    ?>
                </div>
                <div class="menu-opciones" id="menu-mobile">
                    <a href="nosotros" class="d-flex align-height-center fw-bold">US</a>
                    <a class="fw-bold" space="submenu-pruebas-mobile" id="sexual-m">
                        SEXUAL INFECTIONS
                    </a>
                    <a class="fw-bold" space="submenu-pruebas-mobile" id="clinicos-m">
                        CLINICAL TESTS</a>
                    <a class="fw-bold" space="submenu-pruebas-mobile" id="covid-m">
                        COVID-19</a>
                    <a href="blog" class="d-flex align-height-center fw-bold">BLOG</a>
                </div>
                <div class="submenu-opciones display-none" space="sexual-m">
                    <div class="title-section text-morado">SEXUAL INFECTIONS</div>
                    <div class="grid-x d-flex align-height-center small-12 pruebas-sexual fw-medium" style="height: 255px;overflow-y: auto !important;overflow-x: hidden;margin-top: 50px;">
                        <?php
                        foreach ($items as $item){
                            if($item['category'] === 'its'){
                                echo '<a class="small-12 py-1" href="producto?_ref='. $item['id'] .'"><img src="../css/img/menu/itss.png" alt="" width="30px">'. ucwords(mb_strtolower($item['name'], 'UTF-8')) .'</a>';
                            }
                        }
                        ?>
                    </div>
                    <a class="footer-section text-morado" style="margin-top: 25px !important;" href="its">LEARN MORE</a>
                </div>
                <div class="submenu-opciones display-none" space="clinicos-m">
                    <div class="title-section text-morado">CLINICAL TESTS</div>
                    <div class="grid-x d-flex align-height-center small-12 pruebas-clinicos fw-medium" style="height: 255px;overflow-y: auto !important;overflow-x: hidden;margin-top: 50px;">
                        <?php
                        foreach ($items as $item){
                            if($item['category'] === 'clinicos'){
                                echo ' <a class="d-flex small-12 py-1 align-height-center" href="producto?_ref='. $item['id'] .'"><img src="../css/img/menu/clinicoss.png" alt="" width="30px">'. ucwords(mb_strtolower($item['name'], 'UTF-8')) .'</a>';
                            }
                        }
                        ?>
                    </div>
                    <a class="footer-section text-morado" style="margin-top: 25px !important;" href="clinicos">LEARN MORE</a>
                </div>
                <div class="submenu-opciones display-none" space="covid-m">
                    <div class="title-section text-morado">COVID-19</div>
                    <div class="grid-x d-flex align-height-center small-12 pruebas-sexual fw-medium" style="height: 255px;overflow-y: auto !important;overflow-x: hidden;margin-top: 50px;">
                        <?php
                        foreach ($items as $item){
                            if($item['category'] === 'covid'){
                                echo '<a class="small-12 py-1 d-flex" href="producto?_ref='. $item['id'] .'">
                                        <div style="margin-right: 5px;">
                                            <img src="../css/img/menu/covidd.png" alt="" width="30px"> 
                                        </div>
                                        <div>'. ucwords(mb_strtolower($item['name'], 'UTF-8')) .'</div>
                                     </a>';
                            }
                        }
                        ?>
                    </div>
                    <a class="footer-section text-morado" href="covid-19">LEARN MORE</a>
                </div>
                <div class="footer-opciones">
                    <button id="back" class="invisible btn-back">Return</button>
                    <a href="../es/" class="lenguaje" style="background-image: url(../css/img/mx.png);"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="message-add-product" class="message-add-cart">
    <div class="text-center text-message-add-cart">
        ¡Producto agregado al carrito!
    </div>
</div>