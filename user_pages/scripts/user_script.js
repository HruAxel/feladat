$(window).ready(function () {
    let width = $(window).width();
    if (width < 1024) {
        $("#main_text").off('click');
        $("#main_text").on('click', function () {
            $(".item").slideToggle(500);
        })
        
    }
});
// let width = $(window).width();
//     if (width > 1024) {
// $(document).ready(function() {
//         $('.item').fadeIn(1000);
//         $('#main_text').fadeIn(500);
//          }
// )};