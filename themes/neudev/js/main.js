function goBack() {
	window.history.back();
}

var thisPage = new Array();
thisPage = ($("body").attr("class"));
(function ($, root, undefined) {

	$(function () {



		//console.log(thisPage);






/*HOME PAGE*/
if ( $('body').hasClass('page-id-5') ) {
		/*HANDLES ANIMATION ON THE HOME PAGE WITH THE RED CIRCLE STAT*/
		var value = 92
		$("#test-circle").circliful({
	    animationStep: 5,
	    foregroundColor: "#cc0000",
	    backgroundColor: "rgba(255, 255, 255, .1)",
	    foregroundBorderWidth: 1,
	    backgroundBorderWidth: 1,
	    percentageTextSize: 24,
	    fontColor: '#cc0000',
			textAdditionalCss: 'font-weight:300;',
	    textStyle: 'font-size: 7px; font-weight:300;color: #000;',
	    percent: value,
	    text: '  <tspan y="103" x="99">of grads employed</tspan>  <tspan y="113" x="78">full time</tspan> <tspan y="113" x="98">or in</tspan> <tspan  y="113" x="120" >graduate</tspan> <tspan y="123" x="69">school</tspan> <tspan y="123" x="109">within nine months </tspan><tspan y="133" x="99">of graduation</tspan><tspan y="143" x="99"> (10-year average)</tspan>'
	  });
	  $(".circliful text:eq(0)").attr("y",94)
	  $(".circliful text:eq(1)").attr("y",92)
	  $(".circliful text:eq(1)").attr("x",100)
		$(".circliful g").css({'display':'none'});
}




/*RESEARCH PAGE*/
if ( $('body').hasClass('page-id-26') ) {

			var data = {
				items:[
					 {"count":8,"text":Array('from the Defense Advanced Research Projects','Agency, supporting the work of William ','Lincoln Smith Chair Professor of Electrical', 'and Computer Engineering Vince Harris',  'to make radar systems lighter,', 'smaller, and more powerful.  ' ),"startPos":Array(100,100),"r":100}
					,{"count":4.6,"text":Array('from the National Science Foundation to', 'support 34 Northeastern students pursuing', 'cybersecurity-related degrees, preparing', 'them for service with federal agencies', 'and U.S.-funded R&D centers.'),"startPos":Array(100,300),"r":80}
					,{"count":4.4,"text":Array('from the National Institutes of Health', 'to advance Professor of Psychology', 'Charles Hillman’s research on the', 'impact of physical exercise on cognition', 'and brain health.'),"startPos":Array(240,140),"r":60}
					,{"count":3.6,"text":Array('from the National Institutes of Health to fund', ' research by Associate Professor of', 'Physical Therapy, Movement, and Rehabilitation', 'Sciences Eugene Tunik on the use of', 'virtual reality as a rehabilitation tool for', 'stroke victims.'),"startPos":Array(110,520),"r":50}
					,{"count":3.5,"text":Array('from the National Science Foundation to lead ', 'international research experiences for Louis Stokes', 'Alliances for Minority Participation Scholars, ', 'including seven Northeastern', 'engineering undergraduates.'),"startPos":Array(600,150),"r":40}
				]
			}

			var current = "0";




			// build out each of the circles
			$.each(data.items,function(j,v){



				var setActive = "";
				var pos = this.startPos;
				var r = this.r;
				if(j===0){
					setActive = "active";
					r = 250;
					pos = getCenter(r);
				}

				var count = this.count;
				var content = '<text class="text" style="text-anchor: middle; fill: white;" x="'+pos[0]+'" y="'+pos[1]+'">';
				for(var i = 0; i<this.text.length;i++){
					content += '<tspan x="'+pos[0]+'" dy="'+(i===0?40:32)+'">'+this.text[i]+'</tspan>';
				}
				content += '</text>';

				$("svg").append('<g data-id="'+j+'" class="'+setActive+'"><circle r="'+r+'" cx="'+pos[0]+'" cy="'+pos[1]+'" style="fill: rgb(0, 0, 0);" opacity="1.0" stroke-width="4" stroke="rgba(204, 0, 0, 1.0)"></circle><text class="count" style="text-anchor: middle; " x="'+pos[0]+'" y="'+(pos[1] + 8)+'">$'+count+'M</text>'+content+'</g>');
			});



			// refresh the svg to have it appear properly
			$("div.stat-container").html($("div.stat-container").html());



			// listen for the user to click on one of the groups to animate that one to the active position

			$("svg").on("click","g",function(e){
				e.preventDefault();




				var selected = $(this).attr("data-id");
				//console.log(selected);
				//console.log(current);


				// reset values in the array to keep movign the data around to the larger and smaller circles
				data.items[current].r = data.items[selected].r;
				data.items[current].startPos[0] = data.items[selected].startPos[0];
				data.items[current].startPos[1] = data.items[selected].startPos[1];

				$("g[data-id="+current+"]").attr("class","");
				$("g[data-id="+current+"]").children("circle").velocity({ r:data.items[current].r, cx:data.items[current].startPos[0], cy:data.items[current].startPos[1] });
				$("g[data-id="+current+"]").children("text").velocity({ x:data.items[current].startPos[0], y:data.items[current].startPos[1] + 8 });
				$("g[data-id="+current+"]").children("text").children("tspan").velocity({ x:data.items[current].startPos[0] });

				r = 250;

				pos = getCenter(r);
				$("g[data-id="+selected+"]").attr("class","active");
				$("g[data-id="+selected+"]").children("circle").velocity({ r:r, cx:pos[0], cy:pos[1] });
				$("g[data-id="+selected+"]").children("text").velocity({ x:pos[0], y:pos[1] });
				$("g[data-id="+selected+"]").children("text").children("tspan").velocity({ x:pos[0] });
				current = selected;
			});





			// find the center of the svg container for the active group
			function getCenter(r){
				var offset = (r / 2);
				return Array(480,480);
			}


			// this is the listener for the faculty partnerships section
			//$("ul.controls li a").on('click',function(e){
				$(document).on('touchend click','ul.controls li a',function(e){
				e.preventDefault();

				var images = Array(0,"../wp-content/themes/neudev/img/research/partnerships1.jpg","../wp-content/themes/neudev/img/research/partnerships2.jpg","../wp-content/themes/neudev/img/research/partnerships3.jpg","../wp-content/themes/neudev/img/research/partnerships4.jpg","../wp-content/themes/neudev/img/research/partnerships5.jpg","../wp-content/themes/neudev/img/research/partnerships6.jpg","../wp-content/themes/neudev/img/research/partnerships7.jpg");

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
				console.log(selected);
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






			// this is the click event to change the faulty bios in the research/innovation section
			$('section.nu__earlycareer').on('touchend click','.theheadss div',function(){
			//$(".theheadss div").on('click',function(){
				var selected = $(this).attr("data-id");
				var active = "";

				$(".theheadss div").each(function(i) {
					if($(this).hasClass("talkingheads")){
						active = $(this).attr("data-id");
					}
				});
				$( ".theheadss div[data-id="+active+"]" ).removeClass("talkingheads");
				$(this).addClass("talkingheads");
				$(".chooseatalkingheads div[id="+active+"]").fadeOut(250,function(){
					$(".chooseatalkingheads div[id="+selected+"]").fadeIn(250);
				});
			});


			// this will handle clicking on the next and previous arrows for the resaerch/innovation section
			$('section.nu__earlycareer').on('touchend click','.chooseatalkingheads div.prev, .chooseatalkingheads div.next',function(){
			//$(".chooseatalkingheads div.prev, .chooseatalkingheads div.next").on('click',function(){
				var dir = "+"
				if($(this).hasClass("prev")){
					dir = "-";
				}

				//console.log(dir);

				var active = "";
				$(".theheadss div").each(function(i) {
					if($(this).hasClass("talkingheads")){
						active = $(this).attr("data-id");
					}
				});

				//console.log(active);

				if(dir === "+"){
					if(active != "talkingheads-5"){	// not at the end, keep going
						var split = (parseInt(active.split("-")[1]) + 1);
						selected = "talkingheads-"+split;
					}else{	// jump back to the beginning
						selected = "talkingheads-1";
					}
				}else{
					if(active != "talkingheads-1"){	// not at the end, keep going
						var split = (parseInt(active.split("-")[1]) - 1);
						selected = "talkingheads-"+split;
					}else{	// jump back to the beginning
						selected = "talkingheads-5";
					}
				}


				$(".theheadss div[data-id="+active+"]").removeClass("talkingheads");
				$(".theheadss div[data-id="+selected+"]").addClass("talkingheads");

				if($(window).width() < 800){
					$(".theheadss div[data-id="+active+"]").fadeOut(250,function(){
						$(".theheadss div[data-id="+selected+"]").fadeIn(250);
					});
				}

				$(".chooseatalkingheads div[id="+active+"]").fadeOut(250,function(){
					$(".chooseatalkingheads div[id="+selected+"]").fadeIn(250);
				});
			});

}




/*LEARNING OR RESEARCH PAGE*/
if ($('body').hasClass('page-id-23') || $('body').hasClass('page-id-26')) {

	$('.slider div.choices div').on('touchend click', function(){
		var activeBlock = $('div.choices div.active').attr("data-id");
		var thisBlock = $(this).attr('data-id');
		var thisPage = $("section.slider").attr("data-section");

		// alert(thisPage);

		$('div.choices div').removeClass('active');
		$(this).addClass('active');
		$('.slider div.background div#bgimage').css({"background":"url(../wp-content/themes/neudev/img/"+thisPage+"/slide"+ thisBlock +".jpg)","background-size":"cover","background-position":"center center"});
		$(".slider div.wrapper p[id=slider__copy-"+activeBlock+"]").fadeOut(250,function(){
			$(".slider div.wrapper p[id=slider__copy-"+thisBlock+"]").fadeIn(250);
		});
	});


	/*animation in hero on the learning and research page - function is below*/
	if ($(window).width() < 760) {
		 $('section.hero .wrapper .parent').css({'height':'inherit'});
	}
	else if ($('body').hasClass('page-id-23') || $('body').hasClass('page-id-26')) {//learning or research page
		heroAnimation();
	}

	function heroAnimation(){
		var thisCell = $('#talleststat').innerHeight();
		$('div.parent').animate({ height: thisCell }, 2000);
	    $("#1 div").delay(2000).css({
	        "display": "block",
	        "opacity": "0"
	    }).animate({
	        "opacity": "1"
	    }, 150, function() {
				$("#2 div").delay(250).css({
	          "display": "block",
	          "opacity": "0"
	      }).animate({
	          "opacity": "1"
	      }, 150, function() {
					$("#3 div").delay(250).css({
	            "display": "block",
	            "opacity": "0"
	        }).animate({
	            "opacity": "1"
	        }, 150, function() {
						$("div.parent").delay(0).css({
		            "overflow": "inherit"
		        }).animate({

		        }, 0, function() {
							$("#4 div").delay(250).css({
			            "display": "block",
			            "opacity": "0"
			        }).animate({
			            "opacity": "1"
			        }, 150, function() {


			        })

		        })
	        })
	      })
	    })
	}
}




/*LEARNING OR RESEARCH OR EMPOWER PAGES*/
if ($('body').hasClass('page-id-23') || $('body').hasClass('page-id-26') || $('body').hasClass('page-id-76')) {

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

		$('.js-video-1').magnificPopup({
			delegate: 'a',
			type: 'iframe',
			mainClass: 'mfp-img-mobile',
			closeMarkup: '<button title="%title%" class="mfp-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="3.9 4.2 12 12"><path fill="#fff" d="M15.5 4.2L9.9 9.8 4.3 4.2l-.4.4 5.6 5.6-5.6 5.6.4.4 5.6-5.6 5.6 5.6.4-.4-5.6-5.6 5.6-5.6"/></svg></button>',
			gallery: {
				enabled: false,
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

		$('.js-video-3').magnificPopup({
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

}


$(document).on('touchend click','.js-recognition > ul > li > span',function(e){
	e.preventDefault();


	var selectedGroup = $(this).attr('data-id').split("-")[1];
	$('.js-recognition > ul > li> span').removeClass('selected');//removes active red underline before adding new one to active state
	$(this).addClass('selected');//adds active state to selected group
	$.get("../wp-content/themes/neudev/_includes/recognition"+selectedGroup+".php", function(data){
    //console.log("Data: " + data + "\nStatus: " + status);
		$( "div.js-recognition-content" ).html( data );
  });
	//$("div.js-recognition-content").load("http://accomplishments.edu/wp-content/themes/neudev/_includes/recognition"+selectedGroup+".php");//loads in content thats located in the _includes directory.
});


// <?php require_once(dirname(__FILE__)."/_includes/navigation.php"); ?>

/*HOME OR LEARNING OR RESEARCH OR EMPOWER PAGES*/
if ($('body').hasClass('page-id-5') || $('body').hasClass('page-id-23') || $('body').hasClass('page-id-26') || $('body').hasClass('page-id-76')) {

	function stepNum () {
		$({someValue1: 0}).animate({someValue1: 229}, {
		duration: 3000,
		easing:'swing', // can be anything
			step: function() { // called on every step
					// Update the element's text with rounded-up value:
					$('.js-count1h').text(commaSeparateNumber(Math.round(this.someValue1)));
			},
			complete: function() {
				var number = 229;
				var num = number.toLocaleString();
				$('.js-count1h').html(num);
			}
		});
		$({someValue2: 0}).animate({someValue2: 50}, {
		duration: 3000,
		easing:'swing', // can be anything
			step: function() { // called on every step
					// Update the element's text with rounded-up value:
					$('.js-count2').text(commaSeparateNumber(Math.round(this.someValue2)));
			},
			complete: function() {
				var number = 50;
				var num = number.toLocaleString();
				$('.js-count2').html(num);
			}
		});

	}


	function stepNum1 () {//Experiential learning grows globally stats
		$({someValue1: 0}).animate({someValue1: 3820}, {
		duration: 3000,
		easing:'swing', // can be anything
			step: function() { // called on every step
					// Update the element's text with rounded-up value:
					$('.js-count1').text(commaSeparateNumber(Math.round(this.someValue1)));
			},
			complete: function() {
				var number = 3820;
				var num = number.toLocaleString();
				$('.js-count1').html(num);
			}
		});
		$({someValue2: 0}).animate({someValue2: 11188}, {
		duration: 3000,
		easing:'swing', // can be anything
			step: function() { // called on every step
					// Update the element's text with rounded-up value:
					$('.js-count2').text(commaSeparateNumber(Math.round(this.someValue2)));
			},
			complete: function() {
				var number = 11188;
				var num = number.toLocaleString();
				$('.js-count2').html(num);
			}
		});
		$({someValue3: 0}).animate({someValue3: 2943}, {
		duration: 3000,
		easing:'swing', // can be anything
			step: function() { // called on every step
					// Update the element's text with rounded-up value:
					$('.js-count3').text(commaSeparateNumber(Math.round(this.someValue3)));
			},
			complete: function() {
				var number = 2943;
				var num = number.toLocaleString();
				$('.js-count3').html(num);
			}
		});
	}




	function stepNum2 () {//Experiential learning - Partnerships for lifelong learning stats
		$({someValue1: 0}).animate({someValue1: 3000}, {
		duration: 3000,
		easing:'swing', // can be anything
			step: function() { // called on every step
					// Update the element's text with rounded-up value:
					$('.js-count4').text(commaSeparateNumber(Math.round(this.someValue1)));
			},
			complete: function() {
				var number = 3000;
				var num = number.toLocaleString();
				$('.js-count4').html(num);
			}
		});
		$({someValue2: 0}).animate({someValue2: 38}, {
		duration: 3000,
		easing:'swing', // can be anything
			step: function() { // called on every step
					// Update the element's text with rounded-up value:
					$('.js-count5').text(commaSeparateNumber(Math.round(this.someValue2)));
			},
			complete: function() {
				var number = 38;
				var num = number.toLocaleString();
				$('.js-count5').html(num);
			}
		});
	}




	function stepNum3 () {// Experiential learning - Commitment to academic excellence and innovation on campus and around the globe stat
		$({someValue1: 0}).animate({someValue1: 1469}, {
		duration: 3000,
		easing:'swing', // can be anything
			step: function() { // called on every step
					// Update the element's text with rounded-up value:
					$('.js-count6').text((Math.round(this.someValue1)));
			},
			complete: function() {
				var number = 1469;
				var num = number.replace(/,/g, "");
				$('.js-count6').html(num);
			}
		});
		$({someValue2: 0}).animate({someValue2: 45}, {
		duration: 3000,
		easing:'swing', // can be anything
			step: function() { // called on every step
					// Update the element's text with rounded-up value:
					$('.js-count7').text(commaSeparateNumber(Math.round(this.someValue2)));
			},
			complete: function() {
				var number = 45;
				var num = number.toLocaleString();
				$('.js-count7').html(num);
			}
		});
	}


	function stepNum4 () {//Research - Widening the network of faculty innovation stats
		$({someValue1: 0}).animate({someValue1: 656}, {
		duration: 3000,
		easing:'swing', // can be anything
			step: function() { // called on every step
					// Update the element's text with rounded-up value:
					$('.js-count1').text(commaSeparateNumber(Math.round(this.someValue1)));
			},
			complete: function() {
				var number = 656;
				var num = number.toLocaleString();
				$('.js-count1').html(num);
			}
		});
		$({someValue2: 0}).animate({someValue2: 186}, {
		duration: 3000,
		easing:'swing', // can be anything
			step: function() { // called on every step
					// Update the element's text with rounded-up value:
					$('.js-count2').text(commaSeparateNumber(Math.round(this.someValue2)));
			},
			complete: function() {
				var number = 186;
				var num = number.toLocaleString();
				$('.js-count2').html(num);
			}
		});
	}

	function stepNum5 () {//EMPOWER - An expanding global network stats
		$({someValue1: 0}).animate({someValue1: 378}, {
		duration: 2000,
		easing:'swing', // can be anything
			step: function() { // called on every step
					// Update the element's text with rounded-up value:
					$('.js-count3e').text(commaSeparateNumber(Math.round(this.someValue1)));
			},
			complete: function() {
				var number = 378;
				var num = number.toLocaleString();
				$('.js-count3e').html(num);
			}
		});
		$({someValue2: 0}).animate({someValue2: 43}, {
		duration: 2000,
		easing:'swing', // can be anything
			step: function() { // called on every step
					// Update the element's text with rounded-up value:
					$('.js-count4e').text(commaSeparateNumber(Math.round(this.someValue2)));
			},
			complete: function() {
				var number = 43;
				var num = number.toLocaleString();
				$('.js-count4e').html(num);
			}
		});
	}

	function stepNum6 () {//EMPOWER - Record-breaking engagement stats
		$({someValue1: 0}).animate({someValue1: 2100}, {
		duration: 2000,
		easing:'swing', // can be anything
			step: function() { // called on every step
					// Update the element's text with rounded-up value:
					$('.js-count2e').text(commaSeparateNumber(Math.round(this.someValue1)));
			},
			complete: function() {
				var number = 2100;
				var num = number.toLocaleString();
				$('.js-count2e').html(num);
			}
		});
	}

	function stepNum7 () {//EMPOWER - Record-breaking engagement stats
		$({someValue1: 0}).animate({someValue1: 252}, {
		duration: 2000,
		easing:'swing', // can be anything
			step: function() { // called on every step
					// Update the element's text with rounded-up value:
					$('.js-count1rr').text(commaSeparateNumber(Math.round(this.someValue1)));
			},
			complete: function() {
				var number = 252;
				var num = number.toLocaleString();
				$('.js-count1rr').html(num);
			}
		});
	}

	function stepNum8 () {//EMPOWER - Record-breaking engagement stats
		$({someValue1: 0}).animate({someValue1: 229}, {
		duration: 2000,
		easing:'swing', // can be anything
			step: function() { // called on every step
					// Update the element's text with rounded-up value:
					$('.js-count1rh').text(commaSeparateNumber(Math.round(this.someValue1)));
			},
			complete: function() {
				var number = 229;
				var num = number.toLocaleString();
				$('.js-count1rh').html(num);
			}
		});
	}

	function stepNum9 () {//EMPOWER - Record-breaking engagement stats
		$({someValue1: 0}).animate({someValue1: 127}, {
		duration: 2000,
		easing:'swing', // can be anything
			step: function() { // called on every step
					// Update the element's text with rounded-up value:
					$('.js-count1lh').text(commaSeparateNumber(Math.round(this.someValue1)));
			},
			complete: function() {
				var number = 127;
				var num = number.toLocaleString();
				$('.js-count1lh').html(num);
			}
		});
	}


	function commaSeparateNumber(val){
		while (/(\d+)(\d{3})/.test(val.toString())){
			val = val.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
		}
		return val;
	}

		var waypoints = $('.js-hero-learning').waypoint(function(direction) {
			stepNum9()
			this.destroy()
		}, {
			offset: '90%'
		})

		var waypoints = $('.js-hero-research').waypoint(function(direction) {
			stepNum8()
			this.destroy()
		}, {
			offset: '90%'
		})

		var waypoints = $('.js-home1').waypoint(function(direction) {
		  stepNum()
			this.destroy()
		}, {
		  offset: '90%'
		})


		var waypoints = $('.js-learning1').waypoint(function(direction) {
		  stepNum1()
			this.destroy()
		}, {
		  offset: '90%'
		})

		var waypoints = $('.js-learning2').waypoint(function(direction) {
		  stepNum2()
			this.destroy()
		}, {
		  offset: '60%'
		})

		var waypoints = $('.js-learning3').waypoint(function(direction) {
		  stepNum3()
			this.destroy()
		}, {
		  offset: '60%'
		})

		var waypoints = $('.js-research1').waypoint(function(direction) {
		  stepNum7()
			this.destroy()
		}, {
		  offset: '60%'
		})


		var waypoints = $('.js-research2').waypoint(function(direction) {
		  stepNum4()
			this.destroy()
		}, {
		  offset: '60%'
		})


		var waypoints = $('.js-empower2').waypoint(function(direction) {
		  stepNum5()
			this.destroy()
		}, {
		  offset: '60%'
		})

		var waypoints = $('.js-empower1').waypoint(function(direction) {
			stepNum6()
			this.destroy()
		}, {
			offset: '60%'
		})



}


		//document.getElementsByTagName('html')[0].className+=' js';


/*TITCOMB OR IAN PAGES*/
if ($('body').hasClass('page-id-48') || $('body').hasClass('page-id-45')) {
	/*ACCORDION ON abby and other dudes page*/
	/*can't get the div to close though*/
	$(document).on('touchend click','.js-arrow',function(event){
		event.stopPropagation();
    event.preventDefault();
		//$(".faq-question").click(function(){
    //var target = $(this).parent().children(".nu__accord-hidden");
		//alert(target);
		//console.log();
    //$(target).slideToggle();
  //});
    var selectedPanel = $(this).attr('data-id');
    $(this).removeClass('fa-angle-double-down');
    $(this).addClass('fa-angle-double-up');
    if($('#nu__accord-'+ selectedPanel +'').css("display") === "block"){
      //$('#nu__accord-'+ selectedPanel +'').css({'display':'none'});
			$('#nu__accord-'+ selectedPanel +'').slideToggle();
      $('.nu__copy-'+ selectedPanel +'').css({'color':'#000000'});
			$(this).removeClass('fa-angle-double-up');
	    $(this).addClass('fa-angle-double-down');
    }else{
      //$('#nu__accord-'+ selectedPanel +'').css({'display':'block'});
			$('#nu__accord-'+ selectedPanel +'').slideToggle();
      $('.nu__copy-'+ selectedPanel +'').css({'color':'#cc0000'});
    }
	});
}




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
