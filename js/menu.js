/* function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
} */
var menu = $('[space="menu"]');
$('[button="menu-mobile"]').click(function(e){
    e.preventDefault();
    if(menu.hasClass('display-none') ){
        menu.removeClass('display-none');
    }else{
        menu.addClass('display-none');
    }
})
if(window.innerWidth < 890){
    menu.addClass('display-none');
}else{
    menu.removeClass('display-none');
}

$('#maindiv').width($('#div1').width());

// cerrar video
$('#cerrarVideo').on("click", function() {
    videoStopper("videoContainer"); //this will stop the video

});

let videoStopper = function(id) {
    let containerElement = document.getElementById(id);
    let iframe_tag = containerElement.querySelector('iframe');
    let video_tag = containerElement.querySelector('video');
    if (iframe_tag) {
        let iframeSrc = iframe_tag.src;
        iframe_tag.src = iframeSrc;
    }
    if (video_tag) {
        video_tag.pause();
    }
}