var slideIndex1 = 1;
var slideIndex2 = 1;
var slideIndex3 = 1;

showDivs('slideChange1', slideIndex1);
showDivs('slideChange2', slideIndex2);
showDivs('slideChange3', slideIndex3);
slideHeight('slideChange1');
slideHeight('slideChange2');
slideHeight('slideChange3');

function plusDivs(name, n) {
	if (name == 'slideChange1') {
		showDivs(name, slideIndex1 += n); 
	} else if (name == 'slideChange2') {
		showDivs(name, slideIndex2 += n); 
	} else {
		showDivs(name, slideIndex3 += n); 
	} 
}

function slideHeight(name) {
  var height = 0;
  var slide = $('.' + name);
  slide.each(function() {
    if ( height < $(this).height() ) {
       height = $(this).height();
    }
  });
  slide.css('min-height', height);
};	

function showDivs(name, n) {
    var slide = $('.' + name);
    if (n > slide.length) {
		if (name == 'slideChange1') {
			slideIndex1 = 1;
		} else if (name == 'slideChange2') {
			slideIndex2 = 1;
		} else {
			slideIndex3 = 1;
		}
	} 
    if (n < 1) {
		if (name == 'slideChange1') {
			slideIndex1 = slide.length;
		} else if (name == 'slideChange2') {
			slideIndex2 = slide.length;
		} else {
			slideIndex3 = slide.length;
		}
	}
    for (let i = 0; i < slide.length; i++) {
        slide[i].style.display = "none";
    }
	if (name == 'slideChange1') {
		slide[slideIndex1-1].style.display = "block";
	} else if (name == 'slideChange2') {
		slide[slideIndex2-1].style.display = "block";
	} else {
		slide[slideIndex3-1].style.display = "block";
	}  
}
	
function showForm() {
var div = $('.rowForm');
div.stop().slideToggle();
$('#buttonShow').css("display"," none");
}

function hiddenForm() {
	var div = $('.rowForm');
	div.css("display","none");
	$('#buttonShow').css("display","block");
}
	
$(document).ready(function(){
	
	$('a[href^="#"]').on('click', function(event) {
	
		var target = $( $(this).attr('href') );
	
		if( target.length ) {
			event.preventDefault();
			$('html, body').animate({
				scrollTop: target.offset().top
			}, 1000);
		}
	
	});
	
	
});
