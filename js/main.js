// LOADED TRANSITION



 $(window).load(function() {
 	// start up after 2sec no matter what
 window.setTimeout(function(){
     $('body').removeClass("loading").addClass('loaded');
  }, 1000);
 });

 $(window).load(function() {
 	// start up after 2sec no matter what
 window.setTimeout(function(){
     $('body').removeClass("doing").addClass('done');
  }, 2500);



	$("#chap1_3 .perso2" ).click(function() {
		$(this).next().fadeToggle();
		$(this).next().next().fadeToggle();
	});






	$("#chap3_5 .elite" ).click(function() {
		$(this).next().toggle();
	});	






	$("#chap4_9 .rien" ).click(function() {
		$(this).next().toggle();
	});





	$("#chap4_6 .faim" ).click(function() {
		$(this).next().toggle();
	});







	         $("#chap3_2 .lettre2" ).click(function() {
  			$( this ).toggleClass("front");

			});

			$( "#chap3_2 .lettre1" ).click(function() {
  			$( this ).next().removeClass("front");
			});





			 $("#chap3_4 .lettre4" ).click(function() {
  			$( this ).toggleClass("front");
			});

			$( "#chap3_4 .lettre3" ).click(function() {
  			$( this ).next().removeClass("front");
			});





			 $("#chap4_8 .enveloppe1" ).click(function() {
  			$( this ).toggleClass("front");
			});






	         $("#chap4_6 .perso1" ).click(function() {
  			$(this).prev().prev().fadeToggle();
  			$(this).prev().fadeToggle();
			});





	$("#os-phrases > h1").lettering('words').children("span").lettering().children("span").lettering();



 $(".menu").click(function() {
  	$(this).next().toggleClass("open");
});

  $("nav li").click(function() {
  	$(this).children().slideToggle("open");
  	$(this).toggleClass("sub-menu");
});

 $("#chap1_1 .select").hover(function() {
  	$(this).parent().toggleClass("visible");
});

  $("#chap1_1 .select").hover(function() {
  	$(this).next().next().fadeToggle();
});


 });
