$(document).ready(function() {
    $('.button').click(function () {
        let element = $(this).data("src");
        if (typeof element === "string" && element.length > 0) {
            scroll(element);
        } else {
            return 0;
        }
    });

    $('.nav-item a').click(function () {
        scroll($(this).data("src"));
    });

    $("#home").animate({}, 1000, function () {
        $("#greeting-text").animate({
            opacity: '1'
        }, 2000, function () {
            $("#slogan").animate({
                opacity: '1',
                'padding-left': '60px'
            }, 2000);
        });
    });
});

function scroll(e){
    $('html, body').animate({
        scrollTop: $(e).offset().top
    }, 500, 'swing');
}


let navbar = document.getElementById("nav-navbar");
let sticky = $('#nav-navbar').height();

window.onscroll = function() {
    set_sticky();
};

function set_sticky() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky-top");
    } else {
        navbar.classList.remove("sticky-top");
    }
}

set_sticky();

function loadNewData(button, target){
    let url = button.data("url");

    $.ajax(url, {
        success: function(result){
            target.append(result);
            button.hide();
        }
    });
}

function on(){
    document.getElementById('overlay').style.display = 'block';
    document.body.style.overflow = 'hidden';
}

function off(){
    document.getElementById('overlay').style.display = 'none';
    document.body.style.overflowY = 'scroll';
}