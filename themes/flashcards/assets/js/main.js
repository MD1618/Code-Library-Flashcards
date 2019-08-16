(function($) {

    $('#articleFilter').on('change', 'input, select', function() {

        var $form = $(this).closest('form');
        $form.request();

    });




})(jQuery);


var currentCard = 1;

function changeCard() {

    // get cards
    var cards = $('.card');

    //show first card
    cards[currentCard - 1].style.display = "block";

    //get current cards
    var cardfrontCurrent = $('.cardFront' + currentCard);
    var cardbackCurrent = $('.cardBack' + currentCard);
    var cardCount = parseInt(cards.length);
    console.log(cardCount, currentCard);

    //console.log(cards);
    //onsole.log(cards[cardCount - 1]);
    if (currentCard == 1) { //if first card show it
        cardfrontCurrent[0].style.display = "block";
        cardbackCurrent[0].style.display = "block";
        cards[cardCount - 1].style.display = "none";
    } else if (currentCard > 1) { // if not first card then hide previous card and show current card
        cards[currentCard - 2].style.display = "none";
        var cardfrontCurrentprev = $('.cardFront' + (currentCard - 1));
        var cardbackCurrentprev = $('.cardBack' + (currentCard - 1));
        cardfrontCurrentprev[0].style.display = "none";
        cardbackCurrentprev[0].style.display = "none";
        cardfrontCurrent[0].style.display = "block";
        cardbackCurrent[0].style.display = "block";
    }

    currentCard++;
    if (currentCard > cards.length) {
        currentCard = 1;
    }
}