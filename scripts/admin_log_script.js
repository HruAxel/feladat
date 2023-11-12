$("#nav_btn").click(function (e) {
    e.preventDefault();
    $(".form_area").fadeToggle(500)
    $(".form_area").css("display", "flex")

});

$("#nav_btn").click(function () {
    $("h3").fadeToggle(500);
});