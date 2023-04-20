$("a[menu-pruebas]").hover(
    function () {
        let menu = $(this).attr('menu-pruebas')
        $(".menu-covid").addClass("display-none");
        $(".menu-clinicos").addClass("display-none");
        $(".menu-its").addClass("display-none");
        $(".menu-" + menu).removeClass("display-none");
    },
    function () {
    }
);
$("[menu-action]").hover(
    function () {
        let menu = $(this).attr('menu-action')
        $(".menu-" + menu).removeClass("display-none");
    },
    function () {
        setTimeout(function () {
            $(".menu-covid").addClass("display-none");
            $(".menu-clinicos").addClass("display-none");
            $(".menu-its").addClass("display-none");
        }, 200)
        $("a[menu-pruebas]").hover(
            function () {
                let menu = $(this).attr('menu-action')
                $(".menu-" + menu).removeClass("display-none");
            },
            function () {
            }
        );
    }
);

/* $("[menu-pruebas]").on("click", function () {
  let menu = $(this).attr('menu-pruebas')
  if(menu == 'its'){
    $(".menu-covid").addClass("display-none");
    $(".menu-clinicos").addClass("display-none");
  }
  if(menu == 'covid'){
    $(".menu-its").addClass("display-none");
    $(".menu-clinicos").addClass("display-none");
  }
  if(menu == 'clinicos'){
    $(".menu-its").addClass("display-none");
    $(".menu-covid").addClass("display-none");
  }
  if ($(".menu-" + menu).hasClass("display-none")) {
    $(".menu-" + menu).removeClass("display-none");
  } else {
    $(".menu-" + menu).addClass("display-none");
  }
}) */

$('[space="submenu-pruebas-mobile"]').on("click", function () {
    let space = $(this).attr("id");
    $(".pruebas-mobile .submenu-opciones").addClass("display-none");
    $('[space="' + space + '"]').removeClass("display-none");
    $(".menu-opciones").addClass("display-none");
    $("#back").removeClass("invisible");
    $(".btn-back").on("click", function () {
        $(".pruebas-mobile .submenu-opciones").addClass("display-none");
        $(".menu-opciones").removeClass("display-none");
        $("#back").addClass("invisible");
    });
});
window.onscroll = function () {
    let y = window.scrollY;
    let i = 50;
    if (screen.width >= 800) {
        i -= y / 2;
        $(".menu-pruebas").addClass("display-none");
        if (y <= 115) {
            $("#header-web").attr({
                style: "top: " + i + "px",
            });
        } else {
            $("#header-web").attr({
                style: "top: 0px",
            });
        }
    } else {
        $(".menu-mobile").addClass("display-none");
    }
};
if (screen.width <= 800) {
    $(".menu-opciones").hide().attr({
        style: "border-radius: 0 0 0px 0px;",
    });
}

$("[img-footer]").hover(
    function () {
        $(this).attr({
            style: "transition: all .5s; bottom: 15px;",
        });
    },
    function () {
        $(this).attr({
            style: "transition: all .5s;",
        });
    }
);
$('#search-product').on('keyup', function () {
    var data = $('#products-list-menu div');
    var _this = this;


    if ($(this).val().length >= 2) {
        $.each($('#products-list-menu div'), function () {
            if ($(this).html().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1) {
                $(this).addClass('display-none');
            } else {
                $(this).removeClass('display-none');
            }
            if ($('#products-list-menu div').not('.display-none').length == 0) {
                $('#products-list-menu').addClass('display-none');
                $('#menu-mobile').removeClass('display-none');
            } else {
                $('#products-list-menu').removeClass('display-none');
                $('#menu-mobile').addClass('display-none');
            }
        })
    } else {
        $('#products-list-menu').addClass('display-none');
        $('#menu-mobile').removeClass('display-none');
    }
});
$('#delete-search-menu').click(function () {
    $('#search-product').val('')
    $('#products-list-menu').addClass('display-none')
    $('.submenu-opciones').addClass('display-none')
    $('#menu-mobile').removeClass('display-none')
})
$('#btn-back').click(function () {
    $('.submenu-opciones').addClass('display-none')
    $('#menu-mobile').removeClass('display-none')
})
$(document).ready(function () {
    $('.outer-loader').delay(1800).fadeOut('slow');
    $('#home').delay(1800).fadeIn('slow');


    $("#slideshow> div:gt(0)").hide();
    setInterval(function () {
        $('#slideshow > div:first').fadeOut(1000).next().fadeIn(1000).end().appendTo('#slideshow');
    }, 3000);
});
