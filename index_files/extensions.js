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
    $(".container-details").hide();

    $("#first-call").on( "click", function(e) {
        e.preventDefault();
        $("#panel-1").slideToggle('fast');
        $(this).parent().toggleClass('on');
    });
    $("#second-call").on( "click", function(e) {
        e.preventDefault();
        $("#panel-2").slideToggle('fast');
        $(this).parent().toggleClass('on');
    });
    $("#third-call").on( "click", function(e) {
        e.preventDefault();
        $("#panel-3").slideToggle('fast');
        $(this).parent().toggleClass('on');
    });
    $("#fourth-call").on( "click", function(e) {
        e.preventDefault();
        $("#panel-4").slideToggle('fast');
        $(this).parent().toggleClass('on');
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

