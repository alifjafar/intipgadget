$(document).ready(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('#scroll').fadeIn();
        } else {
            $('#scroll').fadeOut();
        }
    });
    $('#scroll').click(function() {
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });

    $('#search-form').click(function() {
        $(".search-box").toggle();

        $("input[type='search']").focus();
    });



    window.onclick = function(event) {
        var x = document.getElementById("search-box");
        if (x.css.display != "none") {
            $(".search-box").css('display', 'none');
        }
    }
});