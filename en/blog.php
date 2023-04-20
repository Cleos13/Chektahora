<?php
include '../lib/global.php';
include '../lib/db.php';
$db = new DB();
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NNR8MBT');
    </script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog | ChektAhora</title>
    <?php include 'template/favicon.php'; ?>
    <link rel="stylesheet" href="../css/app.css?update=<?php echo constant('UPDATE'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;800&display=swap" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js?render=6LeRAI8eAAAAAGYdXRWWmQ3V6XqzSjeZ3LCLXJwh"></script>
    <style>
        .invalid {
            border: #f76060 2px !important;
            border-style: solid !important;
        }

        .back-blog {
            position: relative;
            top: 25px;
            left: 10px;
            font-size: 15px;
        }

        @media screen and (max-width: 800px) {
            .back-blog {
                top: -10px !important;
                bottom: 15px !important;
                left: 15px !important;
                font-size: 16px !important;
            }
        }
    </style>

</head>

<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NNR8MBT" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <div class="off-canvas-wrapper">
        <div class="grid-x" data-off-canvas-wrapper>
            <div class="header-mobile">
                <a class="logo-blog text-center" href="/"><img src="../css/img/blog/chektahora-iso.svg" style="width: 30px;"></a>
                <a href="#" button="menu-mobile" style="margin-right: 15px; z-index: 101;">
                    <svg viewBox="0 0 100 80" width="40" height="40" fill="#4F2D83">
                        <rect width="100" height="20"></rect>
                        <rect y="30" width="100" height="20"></rect>
                        <rect y="60" width="100" height="20"></rect>
                    </svg>
                </a>
            </div>
            <div space="menu" class="large-3 small-12 reveal-for-large is-transition-push menu-blog">
                <div class="row column text-center header-menu">
                    <a href="/"><img src="../css/img/blog/logo.svg" class="img-header"></a>
                    <p class="fs-3 text-white fw-normal">Eon the blog of <span class="fw-bold">ChektAhora</span> You will find topics of interest about your health care</p>
                </div>
                <div class="row column text-center leftMenu px-3 category-blog">
                    <div class="flex-center hide-for-small-only">
                        <span><img src="../css/img/blog/categorias.svg" style="width: 30px;"></span>
                        <select class="text-white pe fw-bold fs-6 select-category" aria-label="Categorias" select-blog="categoy" style="background-color: #4f2d83 !important; color: white !important;">
                            <option value="all">Categories</option>
                            <option value="Covid">COVID-19</option>
                            <option value="Its">ITS</option>
                        </select>
                    </div>
                    <div class="flex-center py-1">
                        <span><img src="../css/img/blog/conoce.svg" style="width: 30px;"></span>
                        <span class="text-white pe fw-bold fs-6 select-category"><a href="nosotros" class="link-white">know us</a></span>
                    </div>
                    <!-- <img src="../css/img/logoBlanco.png">
                                    <p>Categorias</p>-->

                </div>
                <div class="row column text-center leftMenu px-3 newsletter-blog">
                    <div class="text-white fs-2 text-start py-1">Receive news about your health care</div>
                    <input type="text" name="email-blog" class="px-3 input-blog" placeholder="Email" maxlength="65" />
                    <div class="register-success display-none">Registered Successfully!</div>
                    <div class="text-center">
                        <a href="#" button="add_user" class="btnPurple4">Send</a>
                    </div>
                </div>
                <div class="row px-1 footer-blog">
                    <span class="text-white fs-2 text-start py-1 px-1">Follow our networks</span>
                    <div class="text-end w-30 d-flex align-height-center">
                        <div class="px-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-instagram text-white" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                            </svg>
                        </div>
                        <div class="px-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-twitter text-white" viewBox="0 0 16 16">
                                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                            </svg>
                        </div>
                        <div class="px-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-facebook text-white" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="large-9 small-12 me-26-lg">
                <div class="header-blog">
                    <a href="index" class="back-blog text-morado hide-for-small-only">Exit the blog</a>
                    <div class="space-search grid-x flex-center">
                        <input placeholder="Search" class="input-search-blog text-morado small-10" />
                        <div class="icon-search-input">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search text-morado" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="space-search grid-x hide-for-large flex-center py-1">
                        <select class="input-search-blog text-morado small-10" aria-label="Categorias" select-blog="categoy" style="margin-right: 14px;">
                            <option value="all">Categorías</option>
                            <option value="Covid">Covid</option>
                            <option value="Its">Its</option>
                        </select>
                    </div>
                </div>
                <div class="posts">
                    <?php
                    if (isset($_GET['category'])) {
                        $category = urldecode($_GET['category']);
                        $category = stripslashes($category);
                        $category = strip_tags($category);
                        $category = htmlentities($category);
                        echo '<div class="flex-center mb-2 py-1 fs-7 fw-bold" style="color: #4F2D83; border-bottom: 2px solid #4F2D83 !important;">' . $category . '</div>';
                        $get = $db->connect()->query("SELECT * FROM post WHERE categoria_1='$category' OR categoria_2='$category' ORDER BY fecha DESC");
                        $posts = $get->fetchAll(PDO::FETCH_OBJ);
                    } else {
                        $get = $db->connect()->query("SELECT * FROM post ORDER BY fecha DESC");
                        $posts = $get->fetchAll(PDO::FETCH_OBJ);
                    }
                    if ($posts != null) {
                        echo '<div class="grid-x large-12 small-12 justify-content-center">';
                        foreach ($posts as $post) {
                            echo '
                                    <div class="post-blog">
                                        <div class="card-post">
                                            <div class="header-posts" style="background: url(../img/posts/' . $post->imagen . ')no-repeat 0 top;">
                                            </div>
                                            <div class="card-section">
                                                <div class="py-1">
                                                    <h4 class="title-post">' . $post->titulo . '</h4>
                                                    <div class="display-none">' . $post->category_1 . '</div>
                                                    <div class="display-none">' . $post->category_2 . '</div>
                                                </div>
                                                <div class="body-post">
                                                ' . $post->descripción . '
                                                </div>
                                                <div class="text-center">
                                                    <a href="post?ref=' . $post->titulo . '" class="btnPurple4">Leer más</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>';
                        }
                        echo '</div>';
                    } else {
                        echo '<div class="flex-center py-3">No existe ninguna publicación</div>';
                    }
                    ?>
                </div>
                <div class="cell py-3 text-center">
                    <a href="index" class="text-bold text-morado hide-for-large">Salir del blog</a>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/main.min.js?update=<?php echo constant('UPDATE'); ?>"></script>
    <script src="../js/blog.js"></script>
</body>

</html>