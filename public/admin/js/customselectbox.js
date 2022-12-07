$(".custom-selectbox #day").on("click", function (e) {
    $(this).parent().toggleClass("open");
    return false;
});
/* This click event on document to detect outside click */
$(document).on("click", function (e) {
    var $selectBoxContainer = $(".custom-selectbox");
    if ($selectBoxContainer.hasClass("open")) {
        $selectBoxContainer.removeClass("open");
    } else {
        return false;
    }
});
