(function($) {

    $('#articleFilter').on('change', 'input, select', function() {

        var $form = $('#formCheckboxes');
        $form.request();

    });




})(jQuery);


var currentCard = 1;

//---------------------------------------------------------------------
// Show Answer. Show current card
//---------------------------------------------------------------------
function showAnswer() {

    var cardbackCurrent = $('.cardBack' + (currentCard));

    cardbackCurrent[0].style.display = "block";

    $('#showButton').css("display", "none");
    $('#rateButtons').css("display", "flex");

}


//---------------------------------------------------------------------
// Card change. Hide the previous card and show the current card
//---------------------------------------------------------------------
function changeCard() {
    $('#showButton').css("display", "flex");
    $('#rateButtons').css("display", "none");
    currentCard++;
    var cards = $('.card');
    var cardCount = parseInt(cards.length);
    var cardbackCurrent = $('.cardBack' + (cardCount));

    if (cards.length > 1) {
        if (currentCard > cards.length) {
            currentCard = 1;
        }

        cards[currentCard - 1].style.display = "block";

        if (currentCard == 1) { //if first card show it
            cards[cardCount - 1].style.display = "none";
            cardbackCurrent[0].style.display = "none";

        } else if (currentCard > 1) { // if not first card then hide previous card and show current card
            cards[currentCard - 2].style.display = "none";
            cardbackCurrent[0].style.display = "none";
        }
    }


}