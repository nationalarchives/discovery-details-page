$(document).ready(function(){
    $("#feedback-widget-row").hide();
    $(".tagForm").hide();
    $("#suggest-a-correction-form").hide();
    $("#sign-in-or-register").hide();

    $("#show-tag-form").on( "click", function(e) {
        e.preventDefault();
        $(".tagForm").toggle();
    });
    $("#show-suggestion-form").on( "click", function(e) {
        e.preventDefault();
        $("#suggest-a-correction-form").toggle();
    });
    $("#show-feedback-form").on( "click", function(e) {
        e.preventDefault();
        $("#feedback-widget-row").toggle();
    });
});

document.addEventListener('DOMContentLoaded', function() {
    // When the event DOMContentLoaded occurs, it is safe to access the DOM

    // When the user scrolls the page, execute myFunction
    window.addEventListener('scroll', myFunctionForSticky);

    // Get the navbar
    var navbar = document.getElementById("summary");

    // Get the offset position of the navbar
    var sticky = navbar.offsetHeight + 130;

    // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunctionForSticky() {
        if (window.pageYOffset > sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }
});

