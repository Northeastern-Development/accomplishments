(function ($, root, undefined) {

	$(function () {

		document.getElementsByTagName('html')[0].className+=' js';

		/*CLICK EVENT on the learning page Controls the fullwidth image and the boxes below*/


		// var red = $('.js-video-2').outerHeight();
		// console.log(red);
		// $('.js-gb').css({'height':red});

		// $('.slider div.choices div').on('touchend click', function(){
		// 	var activeBlock = $('div.choices div.active').attr("data-id");
		// 	var thisBlock = $(this).attr('data-id');
		// 	var thisPage = $("section.slider").attr("data-section");
		//
		// 	// alert(thisPage);
		//
		// 	$('div.choices div').removeClass('active');
    // 	$(this).addClass('active');
		// 	$('.slider div.background div#bgimage').css({"background":"url(../wp-content/themes/neudev/img/"+thisPage+"/slide"+ thisBlock +".png)","background-size":"cover","background-position":"center center"});
		// 	$(".slider div.wrapper p[id=slider__copy-"+activeBlock+"]").fadeOut(250,function(){
		// 		$(".slider div.wrapper p[id=slider__copy-"+thisBlock+"]").fadeIn(250);
		// 	});
		// });

		$('.slider div.choices div').on('touchend click', function(){
			var activeBlock = $('div.choices div.active').attr("data-id");
			var thisBlock = $(this).attr('data-id');
			var thisPage = $("section.slider").attr("data-section");

			// alert(thisPage);

			$('div.choices div').removeClass('active');
			$(this).addClass('active');
			$('.slider div.background div#bgimage').css({"background":"url(../wp-content/themes/neudev/img/"+thisPage+"/slide"+ thisBlock +".png)","background-size":"cover","background-position":"center center"});
			$(".slider div.wrapper p[id=slider__copy-"+activeBlock+"]").fadeOut(250,function(){
				$(".slider div.wrapper p[id=slider__copy-"+thisBlock+"]").fadeIn(250);
			});
		});


		/*CLICK EVENT that takes you back to the originating section from one of the long scroll pages*/
		$('a.js-back-page[href*=\\#]').on(' touchend click',function(e) {
	    var target = this.hash;
	    var $target = $(target);
	    var targetname = target.slice(1, target.length);
			//console.log(targetname);
			//console.log(target);
	    if(document.getElementById(targetname) != null) {
	         e.preventDefault();
	    }
	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top-100 //or the height of your fixed navigation
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	  });
	});




		/*CLICK EVENT on the learning page. Uses magnific popup to lightbox the video thumbs*/
  	// open a video lightbox
    $('.js-video').magnificPopup({
      delegate: 'a',
      type: 'iframe',
      mainClass: 'mfp-img-mobile',
      closeMarkup: '<button title="%title%" class="mfp-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3.9 4.2 12 12"><path fill="#fff" d="M15.5 4.2L9.9 9.8 4.3 4.2l-.4.4 5.6 5.6-5.6 5.6.4.4 5.6-5.6 5.6 5.6.4-.4-5.6-5.6 5.6-5.6"/></svg></button>',
      gallery: {
        enabled: true,
        navigateByImgClick: true
      }
    });

    $('.js-video-2').magnificPopup({
      delegate: 'a',
      type: 'iframe',
      mainClass: 'mfp-img-mobile',
      closeMarkup: '<button title="%title%" class="mfp-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3.9 4.2 12 12"><path fill="#fff" d="M15.5 4.2L9.9 9.8 4.3 4.2l-.4.4 5.6 5.6-5.6 5.6.4.4 5.6-5.6 5.6 5.6.4-.4-5.6-5.6 5.6-5.6"/></svg></button>',
      gallery: {
        enabled: false,
        navigateByImgClick: true
      }
    });





		// Temp fix for magnific popup close issue
		$(document).on('click touchend', '.mfp-close', function (e) {
				e.preventDefault();
				$.magnificPopup.close();
		});

		/*ACCORDION ON abby and other dudes page*/
		/*can't get the div to close though*/
		$(document).on('touchend click','.js-arrow',function(){
	    var selectedPanel = $(this).attr('data-id');
	    $(this).removeClass('fa-angle-double-down');
	    $(this).addClass('fa-angle-double-up');
	    if($('#nu__accord-'+ selectedPanel +'').css("display") === "block"){
	      $('#nu__accord-'+ selectedPanel +'').css({'display':'none'});
	      $('.nu__copy-'+ selectedPanel +'').css({'color':'#000000'});
				$(this).removeClass('fa-angle-double-up');
		    $(this).addClass('fa-angle-double-down');
	    }else{
	      $('#nu__accord-'+ selectedPanel +'').css({'display':'block'});
	      $('.nu__copy-'+ selectedPanel +'').css({'color':'#cc0000'});
	    }
		});


/*ANIMATION block on the E learning hero: TURNING THIS OFF FOR THE FIRST LAUNCH*/
// $(function() {
// var thisCell = $('#test').innerHeight();
// $('div.parent').animate({ height: thisCell }, 2000);
//         $("#1 div").delay(2000).css({
//             "display": "block",
//             "opacity": "0"
//         }).animate({
//             "opacity": "1"
//         }, 500, function() {
// 					$("#2 div").delay(250).css({
// 	            "display": "block",
// 	            "opacity": "0"
// 	        }).animate({
// 	            "opacity": "1"
// 	        }, 500, function() {
// 						$("#3 div").delay(250).css({
// 		            "display": "block",
// 		            "opacity": "0"
// 		        }).animate({
// 		            "opacity": "1"
// 		        }, 500, function() {
// 							$("div.parent").delay(0).css({
// 			            "overflow": "inherit"
// 			        }).animate({
//
// 			        }, 0, function() {
// 								$("#4 div").delay(250).css({
// 				            "display": "block",
// 				            "opacity": "0"
// 				        }).animate({
// 				            "opacity": "1"
// 				        }, 500, function() {
//
//
// 				        })
//
// 			        })
// 		        })
// 	        })
//         })
//  });



/*SEANS STUFF*/

// this is the listener for the faculty partnerships section
//$("ul.controls li a").on('click',function(e){
	$(document).on('touchend click','ul.controls li a',function(e){
	e.preventDefault();

	var images = Array(0,"../wp-content/themes/neudev/img/research/partnerships1.jpg","../wp-content/themes/neudev/img/research/partnerships2.jpg","../wp-content/themes/neudev/img/research/partnerships3.jpg","../wp-content/themes/neudev/img/research/partnerships4.jpg");

	var selected = $(this).attr("data-id").split("-")[1];

	var active = "";
	$("ul.controls li a").each(function(i) {
		if($(this).hasClass("activeoption")){
			active = $(this).attr("data-id").split("-")[1];
		}
	});

	$( "ul.controls li a[data-id=partnerships-"+active+"]" ).removeClass("activeoption");

	$(this).addClass("activeoption");

	$(".nu__facultypartnerships .content img").prop("src",images[selected]);

	$(".nu__facultypartnerships .content p[id=p-"+active+"]").fadeOut(250,function(){
		$(".nu__facultypartnerships .content p[id=p-"+selected+"]").fadeIn(250);
	});

});





// this is the click event to change the faulty bios in the research/innovation section
//$(document).on('touchend click','.theheads div',function(){
$(".theheads div").on('click',function(){
	var selected = $(this).attr("data-id");
	var active = "";
	$(".theheads div").each(function(i) {
		if($(this).hasClass("talkinghead")){
			active = $(this).attr("data-id");
		}
	});
	$( ".theheads div[data-id="+active+"]" ).removeClass("talkinghead");
	$(this).addClass("talkinghead");
	$(".chooseatalkinghead div[id="+active+"]").fadeOut(250,function(){
		$(".chooseatalkinghead div[id="+selected+"]").fadeIn(250);
	});
});


// this will handle clicking on the next and previous arrows for the resaerch/innovation section
$(".chooseatalkinghead div.prev, .chooseatalkinghead div.next").on('click',function(){
	var dir = "+"
	if($(this).hasClass("prev")){
		dir = "-";
	}

	// console.log(dir);

	var active = "";
	$(".theheads div").each(function(i) {
		if($(this).hasClass("talkinghead")){
			active = $(this).attr("data-id");
		}
	});

	if(dir === "+"){
		if(active != "talkinghead-7"){	// not at the end, keep going
			var split = (parseInt(active.split("-")[1]) + 1);
			selected = "talkinghead-"+split;
		}else{	// jump back to the beginning
			selected = "talkinghead-1";
		}
	}else{
		if(active != "talkinghead-1"){	// not at the end, keep going
			var split = (parseInt(active.split("-")[1]) - 1);
			selected = "talkinghead-"+split;
		}else{	// jump back to the beginning
			selected = "talkinghead-7";
		}
	}


	$(".theheads div[data-id="+active+"]").removeClass("talkinghead");
	$(".theheads div[data-id="+selected+"]").addClass("talkinghead");

	if($(window).width() < 800){
		$(".theheads div[data-id="+active+"]").fadeOut(250,function(){
			$(".theheads div[data-id="+selected+"]").fadeIn(250);
		});
	}

	$(".chooseatalkinghead div[id="+active+"]").fadeOut(250,function(){
		$(".chooseatalkinghead div[id="+selected+"]").fadeIn(250);
	});
});












		/*Remove the lines below once you are done testing*/
		var wi = $(window).width();
		$("p.testp").text('Screen width is currently: ' + wi + 'px.');

		$(window).resize(function() {


			/*Remove the lines below once you are done testing*/
			var wi = $(window).width();

			if (wi <= 576){
					$("p.testp").text('Screen width is less than or equal to 576px. Width is currently: ' + wi + 'px.');
					}
			else if (wi <= 680){
					$("p.testp").text('Screen width is between 577px and 680px. Width is currently: ' + wi + 'px.');
					}
			else if (wi <= 1024){
					$("p.testp").text('Screen width is between 681px and 1024px. Width is currently: ' + wi + 'px.');
					}
			else if (wi <= 1500){
					$("p.testp").text('Screen width is between 1025px and 1499px. Width is currently: ' + wi + 'px.');
					}
			else {
					$("p.testp").text('Screen width is greater than 1500px. Width is currently: ' + wi + 'px.');
					}
		});

	});

})(jQuery, this);
