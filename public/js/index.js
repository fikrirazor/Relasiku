	$(document).ready(function(){
		$('.sidenav').sidenav();
	  });
	  
  $('#login').webuiPopover({url:'#login-form'});

  $(document).ready(function(){
    $('.scrollspy').scrollSpy();
  });
  
  $(document).ready(function(){
    $('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
  });