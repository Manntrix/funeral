
//HOME PAGE CAROUSEL
 
$(document).ready(function() {
//  $('.itemSlide').owlCarousel({
//    loop: true,
//    margin: 10,
//    responsiveClass: true,
//    responsive: {
//      0: {
//        items: 1,
//        nav: true,
//        dots: false
//      },
//      600: {
//        items: 3,
//        nav: true,
//        dots: false
//      },
//      1000: {
//        items: 4,
//        nav: true,
//        dots: false,
//        loop: false,
//        margin: 30
//      }
//    }
//  });
 $('#banner-Carousel').owlCarousel({
    items: 1,
    //animateOut: 'fadeOut',
    nav: false,
    dots: true,
    loop: false,
    margin: 4,
  });
   
});

//EQUALHEIGHT IN SERVICE AND GET IN TOUCH SECTION

equalheight = function(container){

var currentTallest = 0,
		currentRowStart = 0,
		rowDivs = new Array(),
		$el,
		topPosition = 0;
	$(container).each(function() {

	$el = $(this);
	$($el).height('auto')
	topPostion = $el.position().top;

	if (currentRowStart != topPostion) {
		for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
		rowDivs[currentDiv].height(currentTallest);
		}
		rowDivs.length = 0; // empty the array
		currentRowStart = topPostion;
		currentTallest = $el.height();
		rowDivs.push($el);
	} else {
		rowDivs.push($el);
		currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
	}
	for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
		rowDivs[currentDiv].height(currentTallest);
	}
	});
}

$(window).load(function() {
	equalheight('.iconitem');
	equalheight('.ft-cmn-info');
});


$(window).resize(function(){
	equalheight('.iconitem');
	equalheight('.ft-cmn-info');
});



(function($){
$(document).ready(function(){
    $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
        event.preventDefault(); 
        event.stopPropagation(); 
        $(this).parent().siblings().removeClass('open');
        $(this).parent().toggleClass('open');
    });
});
})(jQuery);

 $(document).ready(function(){
    var submitIcon = $('.searchbox-icon');
    var inputBox = $('.searchbox-input');
    var searchBox = $('.searchbox');
    var isOpen = false;
    submitIcon.click(function(){
        if(isOpen == false){
            searchBox.addClass('searchbox-open');
            inputBox.focus();
            isOpen = true;
        } else {
            searchBox.removeClass('searchbox-open');
            inputBox.focusout();
            isOpen = false;
        }
    });  
     submitIcon.mouseup(function(){
            return false;
        });
    searchBox.mouseup(function(){
            return false;
        });
    $(document).mouseup(function(){
            if(isOpen == true){
                $('.searchbox-icon').css('display','block');
                submitIcon.click();
            }
        });
});
    function buttonUp(){
        var inputVal = $('.searchbox-input').val();
        inputVal = $.trim(inputVal).length;
        if( inputVal !== 0){
            $('.searchbox-icon').css('display','none');
        } else {
            $('.searchbox-input').val('');
            $('.searchbox-icon').css('display','block');
        }
    }