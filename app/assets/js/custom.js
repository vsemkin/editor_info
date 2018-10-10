(function() {
 "use strict";

 // Misc methods
 var addEventsListener = function(o, t, e) {
  var n, i = t.split(" ");
  for (n in i) o.addEventListener(i[n], e)
 }

 // Page vars
 var $body = document.querySelector('body');

 // Background selector
 var $bgSel = document.getElementById('bgSel'),
     $bgSelToggle = document.querySelector('a1[href="#bgSel"]');

 // Event: hide on body click/touch
 addEventsListener($body, 'click touchend', function(event) {
  $bgSel.classList.remove('visible');
 });

 // Event: toggle on click
 $bgSelToggle.addEventListener('click', function(event) {
  event.preventDefault();
  event.stopPropagation();

  $bgSel.classList.toggle('visible');
 });

 // Event: Hide on ESC.
 window.addEventListener('keydown', function(event) {
  if (event.keyCode == 27)
   $bgSel.classList.remove('visible');
 });

 // Language selector
 var $langSel = document.getElementById('langSel'),
  $langSelToggle = document.querySelector('a1[href="#langSel"]');

 // Event: hide on body click/touch
 addEventsListener($body, 'click touchend', function(event) {
  $langSel.classList.remove('visible');
 });

 // Event: toggle on click
 $langSelToggle.addEventListener('click', function(event) {
  event.preventDefault();
  event.stopPropagation();

  $langSel.classList.toggle('visible');
 });

 // Event: Hide on ESC.
 window.addEventListener('keydown', function(event) {
  if (event.keyCode == 27)
   $langSel.classList.remove('visible');
 });

 // Background video
 //Vars
 var storedopt = localStorage.getItem("bgvid"),
     src1 = "https://a.pomf.cat/agwpbl.mp4",
     src2 = "https://a.pomf.cat/oymzdb.mp4",
     $option1 = document.querySelector('a1[href="#bg1"]'), 
     $option2 = document.querySelector('a1[href="#bg2"]'), 
     $option3 = document.querySelector('a1[href="#nobg"]');
     
 //Methods
 function processvid(source){
 var bgvid = document.getElementById('bgvid'),
     vidsource = document.getElementById('source');
     
   vidsource.setAttribute("src", source);
    
   bgvid.load();
   bgvid.play();
    
   localStorage.setItem("bgvid", source);
 }
 
 $option1.addEventListener('click', function(event) {
  processvid(src1);
 });
 $option2.addEventListener('click', function(event) {
  processvid(src2);
 });
 $option3.addEventListener('click', function(event) {
  processvid("novid");
 });


 if (storedopt == null) {
  processvid(src2); //Default to slow
 } else {
  processvid(storedopt);
 }


})();

//TODO - Finish porting to new code

/*
$(document).ready(function(){
    
    // script for changing pages

    var canclick = 1;
    $("#essentialslink").click(function(){
        if(canclick) {
		canclick = 0;
		$("#essentialspage").fadeIn("250", function() {
			canclick = 1;
			});
		$("#creditspage").fadeOut("250");
		$("#ytpmverspage").fadeOut("250");
		$("#formpage").fadeOut("250");
        }
    });
    $("#creditslink").click(function(){
        if(canclick) {
		canclick = 0;
		$("#essentialspage").fadeOut("250");
		$("#creditspage").fadeIn("250", function() {
			canclick = 1;
			});
		$("#ytpmverspage").fadeOut("250");
		$("#formpage").fadeOut("250");
        }
    });
    $("#ytpmverslink").click(function(){
        if(canclick) {
		canclick = 0;
		$("#essentialspage").fadeOut("250");
		$("#creditspage").fadeOut("250");
		$("#ytpmverspage").fadeIn("250", function() {
			canclick = 1;
			});
		$("#formpage").fadeOut("250");
        }
    });
    $("#formlink").click(function(){
        if(canclick) {
		canclick = 0;
		$("#essentialspage").fadeOut("250");
		$("#creditspage").fadeOut("250");
		$("#ytpmverspage").fadeOut("250");
		$("#formpage").fadeIn("250", function() {
			canclick = 1;
			});
        }
    });

}); */