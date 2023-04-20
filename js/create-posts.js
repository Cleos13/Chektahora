let theEditor;
ClassicEditor.create(document.querySelector("#post_body"))
  .then((editor) => {
    theEditor = editor;
  })
  .catch((error) => {
    console.error(error);
  });
function getDataFromTheEditor() {
  return theEditor.getData();
}
var validate_img_1 = true;
var validate_img_2 = true;
var validate_img = false;
var validate_title = false;
var validate_autor = false;
var validate_small = false;
var validate_post = false;
var validate_one = false;
var validate_two = false;
var validate_video = true;

$('[name="img-data"]').on("change", function () {
  var imagen = document.getElementById("file").files[0];
  var _URL = window.URL || window.webkitURL;
  var img = new Image();
  img.src = _URL.createObjectURL(imagen);
  img.onload = function () {
    if (img.width > "1064" && img.height > "608 ") {
      $("#file_invalid").addClass("display-none");
      validate_img = true;
    } else {
      $("#file_invalid").removeClass("display-none");
      validate_img = false;
    }
  };
});
$('[name="img-data-one"]').on("change", function () {
  var imagen_e_1 = document.getElementById("file-1").files[0];
  var _URL_1 = window.URL_1 || window.webkitURL;
  var img_1 = new Image();
  img_1.src = _URL_1.createObjectURL(imagen_e_1);
  img_1.onload = function () {
    if (img.width > "720" && img.height > "720") {
      $("#file_1_invalid").addClass("display-none");
      validate_img_1 = true;
    } else {
      $("#file_1_invalid").removeClass("display-none");
      validate_img_1 = false;
    }
  };
});

$('[name="img-data-two"]').on("change", function () {
  var imagen_e_2 = document.getElementById("file-2").files[0];
  var _URL_2 = window.URL_2 || window.webkitURL;
  var img_2 = new Image();
  img_2.src = _URL_2.createObjectURL(imagen_e_2);
  img_2.onload = function () {
    if (img.width > "720" && img.height > "720") {
      $("#file_2_invalid").addClass("display-none");
      validate_img_2 = true;
    } else {
      $("#file_2_invalid").removeClass("display-none");
      validate_img_2 = false;
    }
  };
});
$('[name="video"]').on("keyup paste", function () {
  var url = $(this).val();
  var format_url_true =
    /^(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:embed\/))+([a-zA-Z0-9_-]{1,25})+$/;
  if (format_url_true.test(url) || url == "") {
    $("#url_invalid").addClass("display-none");
    validate_video = true;
  } else {
    $("#url_invalid").removeClass("display-none");
    validate_video = false;
  }
});

function validateData() {
  var title = $('[name="title"]').val();
  var autor = $('[name="autor"]').val();
  var small = $('[name="description_small"]').val();
  var text = theEditor.getData();
  var post = $('[name="description"]').val(text);
  var one = $('[name="category_one"]').val();
  var two = $('[name="category_two"]').val();

  if (title != "") {
    validate_title = true;
  } else {
    validate_title = false;
  }
  if (autor != "") {
    validate_autor = true;
  } else {
    validate_autor = false;
  }
  if (small != "") {
    validate_small = true;
  } else {
    validate_small = false;
  }
  if (text != "") {
    validate_post = true;
  } else {
    validate_post = false;
  }
  if (one != "") {
    validate_one = true;
  } else {
    validate_one = false;
  }
  if (two != "") {
    validate_one = true;
  } else {
    validate_one = false;
  }
  if (
    validate_title == true &&
    validate_img == true &&
    validate_video == true &&
    validate_img_1 == true &&
    validate_img_2 == true &&
    validate_autor == true &&
    validate_small == true &&
    validate_post == true
  ) {
    return true;
  } else {
    return false;
  }
}

$("#add_publication").on("click", function () {
  if (validateData() == true) {
    $("#invalid").addClass("display-none");
    var t = $('[name="title"]').val();
    $.post("blog/verify_post.php", { t }, function (data) {
      if (data == 1) {
        $("#post_exist").removeClass("display-none");
        setTimeout(function () {
          $("#post_exist").addClass("display-none");
        }, 4000);
      } else {
        $("#post_exist").addClass("display-none");
        $("#data_publication").submit();
      }
    });
  } else {
    $("#invalid").removeClass("display-none");
  }
});
