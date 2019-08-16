(function($) {

    $('#articleFilter').on('change', 'input, select', function() {

        var $form = $(this).closest('form');
        $form.request();

    });




})(jQuery);


var currentCard = 1;

function changeCard() {

    var cards = $('.card');
    cards[currentCard - 1].style.display = "block";
    var cardfrontCurrent = $('.cardFront' + currentCard);
    var cardbackCurrent = $('.cardBack' + currentCard);
    //console.log(cardfrontCurrent);
    cardfrontCurrent[0].style.display = "block";
    cardbackCurrent[0].style.display = "block";

    currentCard++;
}