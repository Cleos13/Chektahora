<div class="outer-loader d-flex align-height-center justify-content-center">
    <div class="spinner"></div>
</div>
<div class="menu-mobile-backoffice">
    <button id="menu-mobile-backoffice">
        <svg width="55" height="45" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="35" height="40" fill="white" fill-opacity="0.01" />
            <path d="M7.94977 11.9498H39.9498" stroke="#4F2D83" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M7.94977 23.9498H39.9498" stroke="#4F2D83" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M7.94977 35.9498H39.9498" stroke="#4F2D83" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </button>
</div>

<div class="menu-mobile-options">
    <div class="menu-backoffice-mobile">
        <div class="flex-center align-height-center menu-logo">
            <img src="../css/img/logoChektahora.svg">
        </div>
        <div class="d-flex flex-col align-height-center text-start menu-options">
            <a href="index" class="d-flex option">
                <div class="flex-center align-height-center">
                    <img src="../css/img/blog/chektahora-iso.svg">
                </div>
                Pacientes
            </a>
            <?php
            if ($data[0]['type'] == 'Customers') {
                echo '<a href="coupons" class="d-flex option">
                                <div class="flex-center align-height-center">
                                    <img src="../css/img/blog/chektahora-iso.svg">
                                </div>
                            Cupones</a>';
            }
            if ($data[0]['type'] == 'Admin') {
                echo '<a href="coupons" class="d-flex option">
                                <div class="flex-center align-height-center">
                                    <img src="../css/img/blog/chektahora-iso.svg">
                                </div>
                            Cupones</a>
                            <a href="users" class="d-flex option">
                                <div class="flex-center align-height-center">
                                    <img src="../css/img/blog/chektahora-iso.svg">
                                </div>
                            Usuarios</a>
                            <a href="mensajes" class="d-flex option">
                                <div class="flex-center align-height-center">
                                    <img src="../css/img/blog/chektahora-iso.svg">
                                </div>
                            Mensajes</a>
                            <a href="banner" class="d-flex option">
                                <div class="flex-center align-height-center">
                                    <img src="../css/img/blog/chektahora-iso.svg">
                                </div>
                            Banner flotante</a>
                            <a href="banner-sw" class="d-flex option">
                                <div class="flex-center align-height-center">
                                    <img src="../css/img/blog/chektahora-iso.svg">
                                </div>
                            Banner de SW</a>
                            <a href="change-us" class="d-flex option">
                                <div class="flex-center align-height-center">
                                    <img src="../css/img/blog/chektahora-iso.svg">
                                </div>
                            Sección nosotros</a>
                             <a href="products" class="d-flex option">
                                <div class="flex-center align-height-center">
                                    <img src="../css/img/blog/chektahora-iso.svg">
                                </div>
                            Productos</a>
                            <a href="promotions" class="d-flex option">
                                <div class="flex-center align-height-center">
                                    <img src="../css/img/blog/chektahora-iso.svg">
                                </div>
                            Promociones</a>';
            }
            ?>
        </div>
        <div class="d-flex menu-footer">
            <div class="flex-center align-height-center icono">
                <img src="../css/img/backoffice/user.png" width="50px">
            </div>
            <div>
                <div class="name-user"><?php echo $data[0]['name']; ?></div>
                <div class="position-user"><?php echo $data[0]['rol']; ?></div>
                <a href="api/logout" class="text-morado">Cerrar sesión</a>
            </div>
        </div>
    </div>
    <button class="absolute btn-menu" id="close-mobile-backoffice" style="left: 0px;bottom: 300px;">
        <img src="../css/img/backoffice/menu.png" alt="" style="width:20px">
    </button>
</div>











<div class="relative" id="menu-backoffice">
    <div class="menu-backoffice">
        <div class="flex-center align-height-center menu-logo">
            <img src="../css/img/logoChektahora.svg">
        </div>
        <div class="d-flex flex-col align-height-center text-start menu-options">
            <a href="index" class="d-flex option">
                <div class="flex-center align-height-center">
                    <img src="../css/img/blog/chektahora-iso.svg">
                </div>
                Pacientes
            </a>
            <?php
            if ($data[0]['type'] == 'Customers') {
                echo '<a href="coupons" class="d-flex option">
                                <div class="flex-center align-height-center">
                                    <img src="../css/img/blog/chektahora-iso.svg">
                                </div>
                            Cupones</a>';
            }
            if ($data[0]['type'] == 'Admin') {
                echo '<a href="coupons" class="d-flex option">
                                <div class="flex-center align-height-center">
                                    <img src="../css/img/blog/chektahora-iso.svg">
                                </div>
                            Cupones</a>
                            <a href="users" class="d-flex option">
                                <div class="flex-center align-height-center">
                                    <img src="../css/img/blog/chektahora-iso.svg">
                                </div>
                            Usuarios</a>
                            <a href="mensajes" class="d-flex option">
                                <div class="flex-center align-height-center">
                                    <img src="../css/img/blog/chektahora-iso.svg">
                                </div>
                            Mensajes</a>
                            <a href="banner" class="d-flex option">
                                <div class="flex-center align-height-center">
                                    <img src="../css/img/blog/chektahora-iso.svg">
                                </div>
                            Banner flotante</a>
                            <a href="banner-sw" class="d-flex option">
                                <div class="flex-center align-height-center">
                                    <img src="../css/img/blog/chektahora-iso.svg">
                                </div>
                            Banner de SW</a>
                            <a href="change-us" class="d-flex option">
                                <div class="flex-center align-height-center">
                                    <img src="../css/img/blog/chektahora-iso.svg">
                                </div>
                            Sección nosotros</a>
                            <a href="products" class="d-flex option">
                                <div class="flex-center align-height-center">
                                    <img src="../css/img/blog/chektahora-iso.svg">
                                </div>
                            Productos</a>
                            <a href="promotions" class="d-flex option">
                                <div class="flex-center align-height-center">
                                    <img src="../css/img/blog/chektahora-iso.svg">
                                </div>
                            Promociones</a>';
            }
            ?>
        </div>
        <div class="d-flex menu-footer">
            <div class="flex-center align-height-center icono">
                <img src="../css/img/backoffice/user.png" width="50px">
            </div>
            <div>
                <div class="name-user"><?php echo $data[0]['name']; ?></div>
                <div class="position-user"><?php echo $data[0]['rol']; ?></div>
                <a href="api/logout" class="text-morado">Cerrar sesión</a>
            </div>
        </div>
    </div>
    <button class="absolute btn-menu" id="btn-backoffice">
        <img src="../css/img/backoffice/menu.png" alt="" style="width:20px">
    </button>
</div>