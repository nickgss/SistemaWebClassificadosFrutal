$( document ).ready(function(){
	$('.sidenav').sidenav();
	$('.slider').slider({full_width: true});
	$('.dropdown-trigger').dropdown();
	$('select').formSelect();
	
 });

//  function sliderPrev(){
// 	$('.slider').pause();
// 	$('.slider').prev();
// }

// function sliderNext(){
// 	$('.slider').pause();
// 	$('.slider').next();
// }

function sliderPrev(){
	$('.slider').slider('pause');
	$('.slider').slider('prev');
}

function sliderNext(){
	$('.slider').slider('pause');
	$('.slider').slider('next');
}

//  document.addEventListener('DOMContentLoaded', function() {
//     var elems = document.querySelectorAll('.sidenav');
//     var instances = M.Sidenav.init(elems, options);
//   });

// $(document).ready(function(){
// 	$('.button-collapse').sideNav({
// 		menuWidth: 300, // Default is 300
// 		edge: 'left', // Choose the horizontal origin
// 		closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
// 		draggable: true // Choose whether you can drag to open on touch screens
// 	  }
// 	);
// 	// START OPEN
// 	$('.button-collapse').sideNav('show');
// 	$('.slider').slider({full_width: true});
//   });

	