<div class="menuFixed">
                            <div class="header-mobile py-1" style="height:50px;">
                                <a class="logo-blog text-center" href="index"><img src="../css/img/blog/chektahora-iso.svg" style="width: 40px;"></a>
                                <a href="#" button="menu-mobile" style="margin-right: 15px; z-index: 101; position:absolute; right:0;">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="48" height="48" fill="white" fill-opacity="0.01"/>
                                        <path d="M7.94977 11.9498H39.9498" stroke="#4F2D83" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M7.94977 23.9498H39.9498" stroke="#4F2D83" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M7.94977 35.9498H39.9498" stroke="#4F2D83" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                            <div space="menu" class="cell text-center menuR align-self-middle">
                                <a class="logoWebsite py-1" href="index"><img class="show-for-medium" src="../css/img/logoChektahora.svg" /></a>
                                <div class="topnav p-header responsive d-flex justify-content-end py-3 px-3">
                                    <?php 
                                        if($data->type == 'Admin'){
                                            echo '<a href="crear-posts" role="menuitem" class="menuAnimado text-morado svg">BLOG</a>';
                                        }
                                    ?>
                                <a href="index" role="menuitem" class="menuAnimado text-morado svg">DATOS</a>
                                    <div class="btn-login">
                                        <a href="api/logout" class="btnPurpleSesion">
                                        <img src="../css/img/iconos/Profile.png" class="icon-login">CERRAR SESIÓN</a>
                                    </div>
                                </div>
                            </div>
                        </div>