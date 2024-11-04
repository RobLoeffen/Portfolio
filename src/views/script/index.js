/*Runs this function only after the html document has fully loaded
But before other files such as stylesheets*/
$(document).ready(function() {
    //Ajax library function that types an array of strings on repeat
    function typing() {
        var typed = new Typed(".typing", {
            strings: ["Student", "Programmeur", "Gamer"],
            typeSpeed: 100,
            backSpeed: 60,
            loop: true
        });
    }

    typing()
});