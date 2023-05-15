<div class="menuFixed relative">
    <div class="cell">
        <div class="row purple promo ">
            <!-- <div><img class="regalo" alt="promocion" src="../css/img/iconos/regalo.svg" /></div> -->
            <p style="text-align:center; font-size: 12px;">
                <?php
                $get = $conn->query("SELECT * FROM banner WHERE id=1");
                $data = $get->fetch_all(MYSQLI_ASSOC);
                echo $data[0]['banner_espanol'];
                $get_items = $conn->query("SELECT * FROM products WHERE store=1 ORDER BY order_list ASC");
                $items = $get_items->fetch_all(MYSQLI_ASSOC);
                ?>
            </p>
        </div>
    </div>
    <div class="grid-x large-12 hide-for-small-only show-for-medium relative header-web" id="header-web" style="">
        <a class="large-3 d-flex align-height-center justify-content-center" href="../index"><img class="" src="../css/img/logoChektahora.svg" width="150px" /></a>
        <div class="large-6 d-flex">
           <!-- <a href="nosotros" role="menuitem" class="menuAnimado text-morado fw-medium">NOSOTROS</a>-->
            <div class="d-flex">
               <a href="its" menu-pruebas="its" class="subMenu text-morado d-flex align-height-center fw-medium">DIAGNÓSTICO DE INFECCIONES SEXUALES
                    <div class="pl-5">
                       
                    </div>
                </a>
                
            </div>
            <div class="d-flex">
                <a href="covid-19" menu-pruebas="covid" class="subMenu text-morado d-flex align-height-center fw-medium">COVID-19
                    <div class="pl-5">
                        
                    </div>
                </a>
                
            </div>
            <div class="d-flex">
                <a href="clinicos" menu-pruebas="clinicos" class="subMenu text-morado d-flex align-height-center fw-medium">CLÍNICOS
                    <div class="pl-5">
                       
                    </div>
                </a>
               
            </div>
           
            <a href="blog" role="menuitem" class="menuAnimado text-morado svg fw-medium">BLOG</a>
           <!--  <div class="d-flex">
                <button id="menu-pruebasa" class="subMenu text-morado d-flex align-height-center fw-medium">INFECCIONES SEXUALES
                    <div class="pl-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4F2D83" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                            <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                        </svg>
                    </div>
                </button>
                <div class="absolute menu-pruebass display-none" menu="actives">
                    <div class="menu-opcioness">
                        <a href="its" class="d-flex align-height-center fw-bold text-morado" space="submenu-pruebas" id="sexual">
                            <img src="../css/img/menu/ITS.png" alt="">
                            INFECCIONES SEXUALES
                        </a>
                        <a href="clinicos" class="d-flex align-height-center fw-bold" space="submenu-pruebas" id="clinicos">
                            <img src="../css/img/menu/clinicos.png" alt="">
                            ANALISIS CLINICOS</a>
                        <a href="covid-19" class="d-flex align-height-center fw-bold" space="submenu-pruebas" id="covid"> <img src="../css/img/menu/Covid.png" alt="">
                            COVID-19</a>
                    </div>
                    <div class="submenu-opciones display-none" style="opacity: 0" space="sexual">
                        <div class="grid-x d-flex align-height-center large-12 py-3 pruebas-sexual fw-medium">
                            <a class="large-3" href="producto?_ref=135bab4d-4515-4395-b5O6-8879T700p09977"><img src="../css/img/menu/itss.png" alt="" width="30px">Kit Black</a>
                            <a class="large-3" href="producto?_ref=135bab4d-4015-4395-0586-8879T700p09977"><img src="../css/img/menu/itss.png" alt="" width="30px">Kit Gold</a>
                            <a class="large-3" href="producto?_ref=135bab4d-4015-4305-0586-8879T700I09977"><img src="../css/img/menu/itss.png" alt="" width="30px">Kit Platinum</a>
                            <a class="large-3" href="producto?_ref=135bab4d-4015-4305-0586-8879T70ODI09977"><img src="../css/img/menu/itss.png" alt="" width="30px">Kit VPH</a>
                        </div>
                    </div>
                    <div class="submenu-opciones display-none" style="opacity: 0" space="clinicos">
                        <div class="grid-x d-flex align-height-center large-12 pruebas-clinicos fw-medium text-blue">
                            <a class="d-flex large-3 py-1 align-height-center" href="producto?_ref=8a4aac4d-e29d-43aa-b930-5149b7f709c3"><img src="../css/img/menu/clinicoss.png" alt="" width="30px">
                                <div>Química Sanguínea De<br>32 Elementos</div>
                            </a>
                            <a class="d-flex large-3 py-1 align-height-center" href="producto?_ref=8a4aac4d-e29d-43aa-b930-5849b70709c3"><img src="../css/img/menu/clinicoss.png" alt="" width="30px">Perfil Hepático</a>
                            <a class="d-flex large-3 py-1 align-height-center" href="producto?_ref=4a4aac4d-e24d-43aa-b930-5849b70709c3"><img src="../css/img/menu/clinicoss.png" alt="" width="30px">Perfil De Lípidos</a>
                            <a class="d-flex large-3 py-1 align-height-center" href="producto?_ref=3a4aac4d-r24d-43aa-b960-5849b70709c3"><img src="../css/img/menu/clinicoss.png" alt="" width="30px">Perfil Pancreático</a>
                            <a class="d-flex large-3 py-1 align-height-center" href="producto?_ref=425aac4d-r24d-43aa-b960-5849b707094c7"><img src="../css/img/menu/clinicoss.png" alt="" width="30px">Perfil Enzimas Cardíaco</a>
                            <a class="d-flex large-3 py-1 align-height-center" href="producto?_ref=425aac4d-r24d-43aa-b960-5849b7070937"><img src="../css/img/menu/clinicoss.png" alt="" width="30px">Depuración De Creatinina</a>
                            <a class="d-flex large-3 py-1 align-height-center" href="producto?_ref=345aac4d-r24d-43aa-b960-5849b708094c7"><img src="../css/img/menu/clinicoss.png" alt="" width="30px">Depuración De Urea</a>
                            <a class="d-flex large-3 py-1 align-height-center" href="producto?_ref=345aac4d-r24d-43aa-b960-584956708094c7"><img src="../css/img/menu/clinicoss.png" alt="" width="30px">Perfil Prenatal I</a>
                            <a class="d-flex large-3 py-1 align-height-center" href="producto?_ref=345aac4d-4245-43aa-b960-584956708094c7"><img src="../css/img/menu/clinicoss.png" alt="" width="30px">Perfil Prenatal II</a>
                            <a class="d-flex large-3 py-1 align-height-center" href="producto?_ref=345aac4d-4245-43aa-b960-584956708784c7"><img src="../css/img/menu/clinicoss.png" alt="" width="30px">Perfil Prenatal III</a>
                            <a class="d-flex large-3 py-1 align-height-center" href="producto?_ref=235aac4d-4245-43aa-b560-584967708094c7"><img src="../css/img/menu/clinicoss.png" alt="" width="30px">Perfil Prenatal IV</a>
                            <a class="d-flex large-3 py-1 align-height-center" href="producto?_ref=135aac4d-4245-43aa-b560-58496780809477"><img src="../css/img/menu/clinicoss.png" alt="" width="30px">Check-up Básico</a>
                            <a class="d-flex large-3 py-1 align-height-center" href="producto?_ref=135aac4d-4245-43aa-b560-58496780809477"><img src="../css/img/menu/clinicoss.png" alt="" width="30px">Check-up Completo</a>
                            <a class="d-flex large-3 py-1 align-height-center" href="producto?_ref=135aac4d-4245-43aa-b566-58496785809477"><img src="../css/img/menu/clinicoss.png" alt="" width="30px">Perfil De Drogas 3 Analitos</a>
                            <a class="d-flex large-3 py-1 align-height-center" href="producto?_ref=135aac4d-4245-43aa-b366-58496785809477"><img src="../css/img/menu/clinicoss.png" alt="" width="30px">Perfil De Drogas 5 Analitos</a>
                            <a class="d-flex large-3 py-1 align-height-center" href="producto?_ref=135aac4d-4245-43va-b366-58496785809477"><img src="../css/img/menu/clinicoss.png" alt="" width="30px">Química Sanguínea De 3 Elementos</a>
                            <a class="d-flex large-3 py-1 align-height-center" href="producto?_ref=135aac4d-4245-43va-b366-5879j785809477"><img src="../css/img/menu/clinicoss.png" alt="" width="30px">Química Sanguínea De 3 Elementos modificada</a>
                            <a class="d-flex large-3 py-1 align-height-center" href="producto?_ref=135aac4d-4245-43va-b3k6-5879j785809477"><img src="../css/img/menu/clinicoss.png" alt="" width="30px">Química Sanguínea De 6 Elementos</a>
                            <a class="d-flex large-3 py-1 align-height-center" href="producto?_ref=135aac4d-4245-43va-b3k6-5879j785i09477"><img src="../css/img/menu/clinicoss.png" alt="" width="30px">Química Sanguínea De 15 Elementos</a>
                            <a class="d-flex large-3 py-1 align-height-center" href="producto?_ref=135bac4d-4545-43v0-b3O6-8879j765p09U77"><img src="../css/img/menu/clinicoss.png" alt="" width="30px">Perfil Tiroideo</a>
                            <a class="d-flex large-3 py-1 align-height-center" href="producto?_ref=135bab4d-4545-43v0-b3O6-8879j765p09U77"><img src="../css/img/menu/clinicoss.png" alt="" width="30px">Grupo Sanguíneos</a>
                            <a class="d-flex large-3 py-1 align-height-center" href="producto?_ref=135bab4d-4515-43v0-b3O6-8879j765p09U77"><img src="../css/img/menu/clinicoss.png" alt="" width="30px">Marcadores Tumorales<br>(AFP, CA125, ACE, CA153)</a>
                            <a class="d-flex large-3 py-1 align-height-center" href="producto?_ref=135bab4d-4415-43v0-b3O6-8879j760p09U77"><img src="../css/img/menu/clinicoss.png" alt="" width="30px">Antígeno De Próstata (PSA)</a>
                            <a class="d-flex large-3 py-1 align-height-center" href="producto?_ref=135bab4d-4515-43v0-b5O6-8879j760p09U77"><img src="../css/img/menu/clinicoss.png" alt="" width="30px">Insulina</a>
                            <a class="d-flex large-3 py-1 align-height-center" href="producto?_ref=135bab4d-4515-43O0-b5O6-8879j760p09U71"><img src="../css/img/menu/clinicoss.png" alt="" width="30px">Urocultivo</a>
                            <a class="d-flex large-3 py-1 align-height-center" href="producto?_ref=135bab4d-4515-4325-b5O6-8879j760p09U72"><img src="../css/img/menu/clinicoss.png" alt="" width="30px">Perfil Hormonal</a>
                            <a class="d-flex large-3 py-1 align-height-center" href="producto?_ref=135bab4d-4515-4325-b5O6-8879H760p09977"><img src="../css/img/menu/clinicoss.png" alt="" width="30px">Prueba De Embarazo</a>
                            <a class="d-flex large-3 py-1 align-height-center" href="producto?_ref=135bab4d-4515-4325-b5O6-8879j760p09977"><img src="../css/img/menu/clinicoss.png" alt="" width="30px">Homoglobina Glicosilada</a>
                            <a class="d-flex large-3 py-1 align-height-center" href="producto?_ref=135bab4d-4515-4325-b5O6-8879T700p09977"><img src="../css/img/menu/clinicoss.png" alt="" width="30px">Electrocardiograma En Reposo</a>
                            <a class="d-flex large-3 py-1 align-height-center" href="producto?_ref=135aac4d-4245-43v0-b3O6-5879j785i09U77"><img src="../css/img/menu/clinicoss.png" alt="" width="30px">TP</a>
                            <a class="d-flex large-3 py-1 align-height-center" href="producto?_ref=135vac4d-4545-43v0-b3O6-8879j765i09U77"><img src="../css/img/menu/clinicoss.png" alt="" width="30px">TPT</a>
                            <a class="d-flex large-3 py-1 align-height-center" href="producto?_ref=135aac4d-4245-43va-b3k6-5879j785i09U77"><img src="../css/img/menu/clinicoss.png" alt="" width="30px">EGO</a>
                        </div>
                    </div>
                    <div class="submenu-opciones display-none" style="opacity: 0" space="covid">
                        <div class="grid-x d-flex align-height-center large-12 py-3 pruebas-sexual fw-medium">
                            <a class="large-3" href="producto?_ref=135Fab4Q-4002-4300-0580-8879T79OPI09977"><img src="../css/img/menu/covidd.png" alt="" width="30px">Prueba PCR</a>
                            <a class="large-3" href="producto?_ref=135bab4G-4015-4305-0586-8879T79ODI09977"><img src="../css/img/menu/covidd.png" alt="" width="30px">Prueba Anticuerpos</a>
                            <a class="large-3" href="producto?_ref=135Fab4Q-4905-4300-0580-8879T79ODI09977"><img src="../css/img/menu/covidd.png" alt="" width="30px">Influenza+COVID-19</a>
                            <a class="large-3" href="producto?_ref=135Fab4Q-4005-4305-0586-8879T79ODI09977"><img src="../css/img/menu/covidd.png" alt="" width="30px">Prueba de Antígeno</a>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="large-1 d-flex align-height-center" style="justify-content: space-evenly;">
            <!--<a href="../en/" class="lenguaje" style="background-image: url(../css/img/usa.png);"></a>-->
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
                        <h6 class="text-morado fw-bold fs-6 large-10 text-center">Productos de tu carrito</h6>
                        <div class="large-1"></div>
                    </div>
                    <div class="card-body text-morado" id="list-products" style="overflow-y: scroll; height: 100%;">
                    </div>
                    <div class="display-none py-2 grid-x cell" id="space-total">
                        <div class="large-6 flex-center">
                            <a href="detalle-compra" class="btn-banner-2 text-white">Pagar</a>
                        </div>
                        <div id="total-parcial" class="text-morado fw-bold large-6 d-flex align-height-center flex-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-mobile" style="top: 50px;">
        <a href="#" button="menu-mobile" style="margin-left: 15px; z-index: 101; position:absolute; left:0;width: 80px;">
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
    <div space="menu" class="grid-x small-8 hide-for-large align-self-middle menu-mobile display-none">
        <div class="p-header d-flex">
            <div class="relative">
                <span class="absolute" id="delete-search-menu" style="left: 20px; top: 13px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                    </svg>
                </span>
                <input class="search-products-header" id="search-product">
                <span class="absolute" style="right: 20px; top: 13px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </span>
            </div>
                <div class="menu-pruebas pruebas-mobile">
                    <div class="menu-opciones-search text-morado display-none" id="products-list-menu" >
                        <?php
                        $get_images = $conn->query("SELECT * FROM images_product");
                        $images = $get_images->fetch_all(MYSQLI_ASSOC);
                        foreach ($items as $item){
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
                        <!--<div class="mb-2 display-none">
                            <a href="producto?_ref=8a4aac4d-e29d-43aa-b930-5149b7f709c3" class="fs-3">
                                <img src="../css/img/pruebas/clinicos/32-elementos.webp" alt="" width="25px" class="mx-2">QUÍMICA SANGUÍNEA DE <span>32 ELEMENTOS</span>
                            </a>
                        </div><div class="mb-2 display-none">
                            <a href="producto?_ref=8a4aac4d-e29d-43aa-b930-5849b70709c3" class="fs-3">
                                <img src="../css/img/pruebas/clinicos/perfil-hepatico.webp" alt="" width="25px" class="mx-2">
                                PERFIL <span>HEPÁTICO</span>
                            </a>
                        </div><div class="mb-2 display-none">
                            <a href="producto?_ref=4a4aac4d-e24d-43aa-b930-5849b70709c3" class="fs-3">
                                <img src="../css/img/pruebas/clinicos/lipidos.webp" alt="" width="25px" class="mx-2">
                                PERFIL DE <span>LÍPIDOS</span>
                            </a>
                        </div><div class="mb-2 display-none">
                            <a href="producto?_ref=3a4aac4d-r24d-43aa-b960-5849b70709c3" class="fs-3">
                                <img src="../css/img/pruebas/clinicos/pancreatico.webp" alt="" width="25px" class="mx-2">
                                PERFIL <span>PANCREÁTICO</span>
                            </a>
                        </div><div class="mb-2 display-none">
                            <a href="producto?_ref=425aac4d-r24d-43aa-b960-5849b707094c7" class="fs-3">
                                <img src="../css/img/pruebas/clinicos/enzimas.webp" alt="" width="25px" class="mx-2">
                                PERFIL <span>ENZIMAS CARDÍACO</span>
                            </a>
                        </div><div class="mb-2 display-none">
                            <a href="producto?_ref=425aac4d-r24d-43aa-b960-5849b7070937" class="fs-3">
                                <img src="../css/img/pruebas/clinicos/creatinina.webp" alt="" width="25px" class="mx-2">
                                DEPURACIÓN DE <span>CREATININA</span>
                            </a>
                        </div><div class="mb-2 display-none">
                            <a href="producto?_ref=345aac4d-r24d-43aa-b960-5849b708094c7" class="fs-3">
                                <img src="../css/img/pruebas/clinicos/urea.webp" alt="" width="25px" class="mx-2">
                                DEPURACIÓN DE <span>UREA</span>
                            </a>
                        </div><div class="mb-2 display-none">
                            <a href="producto?_ref=345aac4d-r24d-43aa-b960-584956708094c7" class="fs-3">
                                <img src="../css/img/pruebas/clinicos/prenatal-1.webp" alt="" width="25px" class="mx-2">
                                PERFIL <span>PRENATAL I</span>
                            </a>
                        </div><div class="mb-2 display-none">
                            <a href="producto?_ref=345aac4d-4245-43aa-b960-584956708094c7" class="fs-3">
                                <img src="../css/img/pruebas/clinicos/prenatal-2.webp" alt="" width="25px" class="mx-2">
                                PERFIL <span>PRENATAL II</span>
                            </a>
                        </div><div class="mb-2 display-none">
                            <a href="producto?_ref=345aac4d-4245-43aa-b960-584956708784c7" class="fs-3">
                                <img src="../css/img/pruebas/clinicos/prenatal-3.webp" alt="" width="25px" class="mx-2">
                                PERFIL <span>PRENATAL III</span>
                            </a>
                        </div><div class="mb-2 display-none">
                            <a href="producto?_ref=235aac4d-4245-43aa-b560-584967708094c7" class="fs-3">
                                <img src="../css/img/pruebas/clinicos/prenatal-4.webp" alt="" width="25px" class="mx-2">
                                PERFIL <span>PRENATAL IV</span>
                            </a>
                        </div><div class="mb-2 display-none">
                            <a href="producto?_ref=135aac4d-4245-43aa-b560-58496780809477" class="fs-3">
                                <img src="../css/img/pruebas/clinicos/checkup-basico.webp" alt="" width="25px" class="mx-2">
                                CHECK-UP <span>BÁSICO</span>
                            </a>
                        </div><div class="mb-2 display-none">
                            <a href="producto?_ref=135aac4d-4245-43aa-b560-58496780809477" class="fs-3">
                                <img src="../css/img/pruebas/clinicos/checkup-completo.webp" alt="" width="25px" class="mx-2">
                                CHECK-UP <span>COMPLETO</span>
                            </a>
                        </div><div class="mb-2 display-none">
                            <a href="producto?_ref=135aac4d-4245-43aa-b566-58496785809477" class="fs-3">
                                <img src="../css/img/pruebas/clinicos/perfil-3-analitos.webp" alt="" width="25px" class="mx-2">
                                PERFIL DE DROGAS <span>3 ANALITOS</span>
                            </a>
                        </div><div class="mb-2 display-none">
                            <a href="producto?_ref=135aac4d-4245-43aa-b366-58496785809477" class="fs-3">
                                <img src="../css/img/pruebas/clinicos/perfil-5-analitos.webp" alt="" width="25px" class="mx-2">
                                PERFIL DE DROGAS <span>5 ANALITOS</span>
                            </a>
                        </div><div class="mb-2 display-none">
                            <a href="producto?_ref=135aac4d-4245-43va-b366-58496785809477" class="fs-3">
                                <img src="../css/img/pruebas/clinicos/3-elementos.webp" alt="" width="25px" class="mx-2">
                                QUÍMICA SANGUÍNEA DE <span>3 ELEMENTOS</span>
                            </a>
                        </div><div class="mb-2 display-none">
                            <a href="producto?_ref=135aac4d-4245-43va-b366-5879j785809477" class="fs-3">
                                <img src="../css/img/pruebas/clinicos/3-elementos-modificada.webp" alt="" width="25px" class="mx-2">
                                QUÍMICA SANGUÍNEA DE <span>3 ELEMENTOS MODIFICADA</span>
                            </a>
                        </div><div class="mb-2 display-none">
                            <a href="producto?_ref=135aac4d-4245-43va-b3k6-5879j785809477" class="fs-3">
                                <img src="../css/img/pruebas/clinicos/6-elementos.webp" alt="" width="25px" class="mx-2">
                                QUÍMICA SANGUÍNEA DE <span>6 ELEMENTOS</span>
                            </a>
                        </div><div class="mb-2 display-none">
                            <a href="producto?_ref=135aac4d-4245-43va-b3k6-5879j785i09477" class="fs-3">
                                <img src="../css/img/pruebas/clinicos/15-elementos.webp" alt="" width="25px" class="mx-2">
                                QUÍMICA SANGUÍNEA DE <span>15 ELEMENTOS</span>
                            </a>
                        </div><div class="mb-2 display-none">
                            <a href="producto?_ref=135aac4d-4245-43va-b3k6-5879j785i09U77" class="fs-3">
                                <img src="../css/img/pruebas/clinicos/ego.webp" alt="" width="25px" class="mx-2">
                                <span>EGO</span>
                            </a>
                        </div><div class="mb-2 display-none">
                            <a href="producto?_ref=135aac4d-4245-43v0-b3O6-5879j785i09U77" class="fs-3">
                                <img src="../css/img/pruebas/clinicos/tp.webp" alt="" width="25px" class="mx-2">
                                    <span>TP</span>
                            </a>
                        </div><div class="mb-2 display-none">
                            <a href="producto?_ref=135vac4d-4545-43v0-b3O6-8879j765i09U77" class="fs-3">
                                <img src="../css/img/pruebas/clinicos/tpt.webp" alt="" width="25px" class="mx-2">
                                    <span>TPT</span>
                            </a>
                        </div><div class="mb-2 display-none">
                            <a href="producto?_ref=135bac4d-4545-43v0-b3O6-8879j765p09U77" class="fs-3">
                                <img src="../css/img/pruebas/clinicos/perfil-tiroideo.webp" alt="" width="25px" class="mx-2">
                                PERFIL <span>TIROIDEO</span>
                            </a>
                        </div><div class="mb-2 display-none">
                            <a href="producto?_ref=135bab4d-4545-43v0-b3O6-8879j765p09U77" class="fs-3">
                                <img src="../css/img/pruebas/clinicos/grupo-sanguineo.webp" alt="" width="25px" class="mx-2">
                                GRUPO <span>SANGUÍNEOS</span>
                            </a>
                        </div><div class="mb-2 display-none">
                            <a href="producto?_ref=135bab4d-4515-43v0-b3O6-8879j765p09U77" class="fs-3">
                                <img src="../css/img/pruebas/clinicos/marcadores-tumorales.webp" alt="" width="25px" class="mx-2">
                                MARCADORES TUMORALES <br><span>(AFP, CA125, ACE, CA153)</span>
                            </a>
                        </div><div class="mb-2 display-none">
                            <a href="producto?_ref=135bab4d-4415-43v0-b3O6-8879j760p09U77" class="fs-3">
                                <img src="../css/img/pruebas/clinicos/antigeno-prostata.webp" alt="" width="25px" class="mx-2">
                                ANTÍGENO DE <br><span>PRÓSTATA (PSA)</span>
                            </a>
                        </div><div class="mb-2 display-none">
                            <a href="producto?_ref=135bab4d-4515-43v0-b5O6-8879j760p09U77" class="fs-3">
                                <img src="../css/img/pruebas/clinicos/insulina.webp" alt="" width="25px" class="mx-2">
                                <span>INSULINA</span>
                            </a>
                        </div><div class="mb-2 display-none">
                            <a href="producto?_ref=135bab4d-4515-43O0-b5O6-8879j760p09U71" class="fs-3">
                                <img src="../css/img/pruebas/clinicos/urocultivo.webp" alt="" width="25px" class="mx-2">
                                <span>UROCULTIVO</span>
                            </a>
                        </div><div class="mb-2 display-none">
                            <a href="producto?_ref=135bab4d-4515-4325-b5O6-8879j760p09U72" class="fs-3">
                                <img src="../css/img/pruebas/clinicos/perfil-hormonal.webp" alt="" width="25px" class="mx-2">
                                PERFIL <span>HORMONAL</span>
                            </a>
                        </div><div class="mb-2 display-none">
                            <a href="producto?_ref=135bab4d-4515-4325-b5O6-8879H760p09977" class="fs-3">
                                <img src="../css/img/pruebas/clinicos/embarazo.webp" alt="" width="25px" class="mx-2">
                                PRUEBA DE <span>EMBARAZO</span>
                            </a>
                        </div><div class="mb-2 display-none">
                            <a href="producto?_ref=135bab4d-4515-4325-b5O6-8879j760p09977" class="fs-3">
                                <img src="../css/img/pruebas/clinicos/hemoglobina.webp" alt="" width="25px" class="mx-2">
                                HEMOGLOBINA <span>GLICOSILADA</span>
                            </a>
                        </div><div class="mb-2 display-none">
                            <a href="producto?_ref=135bab4d-4515-4325-b5O6-8879T700p09977" class="fs-3">
                                <img src="../css/img/pruebas/clinicos/electro.webp" alt="" width="25px" class="mx-2">
                                ELECTROCARDIOGRAMA EN <span>REPOSO</span>
                            </a>
                        </div><div class="mb-2 display-none">
                            <a href="producto?_ref=135bab4d-4515-4395-b5O6-8879T700p09977" class="fs-3">
                                <img src="../css/img/gallery/Black-1.jpg" alt="" width="25px" class="mx-2">
                                BLACK KIT
                            </a>
                        </div><div class="mb-2 display-none">
                            <a href="producto?_ref=135bab4d-4015-4395-0586-8879T700p09977" class="fs-3">
                                <img src="../css/img/gallery/Gold-1.jpg" alt="" width="25px" class="mx-2">
                                KIT GOLD
                            </a>
                        </div><div class="mb-2 display-none">
                            <a href="producto?_ref=135bab4d-4015-4305-0586-8879T700I09977" class="fs-3">
                                <img src="../css/img/gallery/platinum-1.jpg" alt="" width="25px" class="mx-2">
                                KIT PLATINUM
                            </a>
                        </div><div class="mb-2 display-none">
                            <a href="producto?_ref=135bab4d-4015-4305-0586-8879T70ODI09977" class="fs-3">
                                <img src="../css/img/gallery/vph-1.jpg" alt="" width="25px" class="mx-2">
                                KIT VPH
                            </a>
                        </div><div class="mb-2 display-none">
                            <a href="producto?_ref=135bab4G-4015-4305-0586-8879T79ODI09977" class="fs-3">
                                <img src="../css/img/pruebas/anticuerpos.png" alt="" width="25px" class="mx-2">
                                ANTICUERPOS KIT
                            </a>
                        </div><div class="mb-2 display-none">
                            <a href="producto?_ref=135Fab4Q-4005-4305-0586-8879T79ODI09977" class="fs-3">
                                <img src="../css/img/pruebas/antigenos.png" alt="" width="25px" class="mx-2">
                                ANTIGENOS
                            </a>
                        </div><div class="mb-2 display-none">
                            <a href="producto?_ref=135Fab4Q-4905-4300-0580-8879T79ODI09977" class="fs-3">
                                <img src="../css/img/pruebas/influenza-covid.png" alt="" width="25px" class="mx-2">
                                INFLUENZA + COVID-19
                            </a>
                        </div><div class="mb-2 display-none">
                            <a href="producto?_ref=135Fab4Q-4002-4300-0580-8879T79OPI09977" class="fs-3">
                                <img src="../css/img/pruebas/pcr.png" alt="" width="25px" class="mx-2">
                                PCR COVID-19
                            </a>
                        </div>  -->
                    </div>
                <div class="menu-opciones" id="menu-mobile">
                    <a href="nosotros" class="d-flex align-height-center fw-bold">NOSOTROS</a>
                    <a class="fw-bold" space="submenu-pruebas-mobile" id="sexual-m">
                        INFECCIONES SEXUALES
                    </a>
                    <a class="fw-bold" space="submenu-pruebas-mobile" id="clinicos-m">
                        ANALISIS CLINICOS</a>
                    <a class="fw-bold" space="submenu-pruebas-mobile" id="covid-m">
                        COVID-19</a>
                    <a href="blog" class="d-flex align-height-center fw-bold">BLOG</a>
                </div>
                <div class="submenu-opciones display-none" space="sexual-m">
                    <div class="title-section text-morado">INFECCIONES SEXUALES</div>
                    <div class="grid-x d-flex align-height-center small-12 pruebas-sexual fw-medium" style="height: 255px;overflow-y: auto !important;overflow-x: hidden;margin-top: 50px;">
                        <?php
                        foreach ($items as $item){
                            if($item['category'] === 'its'){
                                echo '<a class="small-12 py-1" href="producto?_ref='. $item['id'] .'"><img src="../css/img/menu/itss.png" alt="" width="30px">'. ucwords(mb_strtolower($item['name'], 'UTF-8')) .'</a>';
                            }
                        }
                        ?>
                    </div>
                    <a class="footer-section text-morado" style="margin-top: 25px !important;" href="its">CONOCE MÁS</a>
                </div>
                <div class="submenu-opciones display-none" space="clinicos-m">
                    <div class="title-section text-morado">ANALISIS CLÍNICOS</div>
                    <div class="grid-x d-flex align-height-center small-12 pruebas-clinicos fw-medium" style="height: 255px;overflow-y: auto !important;overflow-x: hidden;margin-top: 50px;">
                        <?php
                        foreach ($items as $item){
                            if($item['category'] === 'clinicos'){
                                echo ' <a class="d-flex small-12 py-1 align-height-center" href="producto?_ref='. $item['id'] .'"><img src="../css/img/menu/clinicoss.png" alt="" width="30px">'. ucwords(mb_strtolower($item['name'], 'UTF-8')) .'</a>';
                            }
                        }
                        ?>
                    </div>
                    <a class="footer-section text-morado" style="margin-top: 25px !important;" href="clinicos">CONOCE MÁS</a>
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
                    <a class="footer-section text-morado" href="covid-19">CONOCE MÁS</a>
                </div>
                <div class="footer-opciones">
                    <button id="back" class="invisible btn-back">Volver</button>
                    <a href="../en/" class="lenguaje" style="background-image: url(../css/img/usa.png);"></a>
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
