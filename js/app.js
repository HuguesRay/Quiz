// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
//$(document).foundation();
var objJson = {
    "nombreDeQuestions": "2",
    "pointageTotal": "5",
    "retroactions": {
        "positive": "Bonne réponse!",
        "negative": "hum... ce n'est pas tout à fait ça!"
    },
    "explications": [
        "Shining (The Shining) est un film d'horreur britannico-américain réalisé par Stanley Kubrick en 1980, avec Jack Nicholson, Shelley Duvallet Danny Lloyd dans les rôles principaux. Il est sorti en salles aux États-Unis le 23 mai 1980.",
        "Adapté du roman d'Anthony Burgess, L'Orange mécanique. Il est à classer dans les films d'anticipation, mais peut également se voir comme une satire de la société moderne.",
        "Eyes Wide Shut est un film américain réalisé, produit et coécrit par Stanley Kubrick, dont ce sera le dernier film, sorti en 1999.",
        "Spartacus est un film américain de Stanley Kubrick sorti en 1960 adapté du roman éponyme de Howard Fast."
    ],
    "bonnesReponses": [
        "Q1B",
        "Q2C"
    ],
    "messages": {
        "pasDeReponse": "Veuillez d'abord répondre à la question!",
        "statusDebut": "Vous avez complété ",
        "statusFin": " questions.",
        "resultatsDebut": "Bravo vous avez obtenu ",
        "resultatsFin": " %!"
    }
}

$('.velocity').removeClass('hidden');
$('.score').hide();
$('#validerQuizTypo').hide();
$('.retro').hide();
$('#Q2').hide();
$('#Q3').hide();
$('#Q4').hide();
$('.second').hide();
$('.third').hide();
$('.fourth').hide();

var currentQ = 1;
$('.next').on('click', afficherQuestion);
$( document ).ready(function() {
	
	//déclanchement au clic d'un radio
	$(':radio').click(function() {
		var val = $(this).val();
		var fieldset = $('#Q'+currentQ);
		fieldset.children('ul').fadeOut();
		$('.retro').prepend("<p class='volatile'>"+objJson.explications[currentQ-1]+"</p>");
		if(val == 2) {
			$('.retro').prepend("<h2 class='good volatile'>"+objJson.retroactions.positive+"</h2>");
		}
		else {
			$('.retro').prepend("<h2 class='bad volatile'>"+objJson.retroactions.negative+"</h2>");
		}
		$('.retro').slideDown();
	});

	
    

});

function afficherQuestion(event) {
	currentQ == 1 ? progress('.second'): null;
	currentQ == 2 ? progress('.third'): null;
	currentQ == 3 ? progress('.fourth'): null;
	if(currentQ<4) {
		var page = "#Q"+currentQ;
		var nextPage = "#Q"+(currentQ+1);
		$('.retro').hide();
		$('.volatile').remove();
		$(page).hide();
		$(nextPage).slideDown();
		currentQ++;
		if (currentQ==4) {
			$('.next').slideUp();
			$('#validerQuizTypo').show();
		}
	}
}

//bar progression
function progress(dot){
	if ($(dot).hasClass('first')){
		console.log("class first");
			$(dot).fadeIn();
	        $('#progress-bar').val('0');
	        $(dot).nextAll().removeClass('border-change');  
	        $('.percent').html("0%");
	       }else if ($(dot).hasClass('second')){
			$(dot).fadeIn();
	        $(dot).nextAll().removeClass('border-change');  
	        $('#progress-bar').val('34');
	        $(dot).prevAll().addClass('border-change');  
	        $(dot).addClass('border-change');
	         $('.percent').html("33%");
	       }else if ($(dot).hasClass('third')){
			$(dot).fadeIn();
	        $(dot).nextAll().removeClass('border-change');  
	        $('#progress-bar').val('67');
	        $(dot).prevAll().addClass('border-change'); 
	        $(dot).addClass('border-change');
	        $('.percent').html("66%");
	       } else{
			$(dot).fadeIn();
	        $('#progress-bar').val('100');
	         $(dot).addClass('border-change');
	        $(dot).prevAll().addClass('border-change');
	         $('.percent').html("100%");
	       }
}

