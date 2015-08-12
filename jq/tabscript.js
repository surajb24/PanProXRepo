$(document).ready(function()
{
$("#Tab1").addClass('select');

$("#Tab8").addClass('select');

$(".tab").click(function()
{
    var X=$(this).attr('id');

    if(X=='Tab1')
    {
            $("#Tab1").addClass('select');
            $("#Tab2").removeClass('select');
            $("#Tab3").removeClass('select');
            $("#Tab4").removeClass('select');
            $("#Tab5").removeClass('select');
            $("#Tab6").removeClass('select');
            $("#Tab7").removeClass('select');
            $("#Tab1I").slideDown();
            $("#Tab2I").slideUp();
            $("#Tab3I").slideUp();
            $("#Tab4I").slideUp();
            $("#Tab5I").slideUp();
            $("#Tab6I").slideUp();
            $("#Tab7I").slideUp();
    }

    if(X=='Tab2')
    {
            $("#Tab2").addClass('select');
            $("#Tab1").removeClass('select');
            $("#Tab3").removeClass('select');
            $("#Tab4").removeClass('select');
            $("#Tab5").removeClass('select');
            $("#Tab6").removeClass('select');
            $("#Tab7").removeClass('select');
            $("#Tab2I").slideDown();
            $("#Tab1I").slideUp();
            $("#Tab3I").slideUp();
            $("#Tab4I").slideUp();
            $("#Tab5I").slideUp();
            $("#Tab6I").slideUp();
            $("#Tab7I").slideUp();

    }

    if(X=='Tab3')
    {
            $("#Tab3").addClass('select');
            $("#Tab1").removeClass('select');
            $("#Tab2").removeClass('select');
            $("#Tab4").removeClass('select');
            $("#Tab5").removeClass('select');
            $("#Tab6").removeClass('select');
            $("#Tab7").removeClass('select');
            $("#Tab3I").slideDown();
            $("#Tab1I").slideUp();
            $("#Tab2I").slideUp();
            $("#Tab4I").slideUp();
            $("#Tab5I").slideUp();
            $("#Tab6I").slideUp();
            $("#Tab7I").slideUp();
    } 

    if(X=='Tab4')
    {
            $("#Tab4").addClass('select');
            $("#Tab1").removeClass('select');
            $("#Tab2").removeClass('select');
            $("#Tab3").removeClass('select');
            $("#Tab5").removeClass('select');
            $("#Tab6").removeClass('select');
            $("#Tab7").removeClass('select');
            $("#Tab4I").slideDown();
            $("#Tab1I").slideUp();
            $("#Tab2I").slideUp();
            $("#Tab3I").slideUp();
            $("#Tab5I").slideUp();
            $("#Tab6I").slideUp();
            $("#Tab7I").slideUp();
    } 

    if(X=='Tab5')
    {
            $("#Tab5").addClass('select');
            $("#Tab1").removeClass('select');
            $("#Tab2").removeClass('select');
            $("#Tab3").removeClass('select');
            $("#Tab4").removeClass('select');
            $("#Tab6").removeClass('select');
            $("#Tab7").removeClass('select');
            $("#Tab5I").slideDown();
            $("#Tab1I").slideUp();
            $("#Tab2I").slideUp();
            $("#Tab3I").slideUp();
            $("#Tab4I").slideUp();
            $("#Tab6I").slideUp();
            $("#Tab7I").slideUp();
    } 

    if(X=='Tab6')
    {
            $("#Tab6").addClass('select');
            $("#Tab1").removeClass('select');
            $("#Tab2").removeClass('select');
            $("#Tab3").removeClass('select');
            $("#Tab4").removeClass('select');
            $("#Tab5").removeClass('select');
            $("#Tab7").removeClass('select');
            $("#Tab6I").slideDown();
            $("#Tab1I").slideUp();
            $("#Tab2I").slideUp();
            $("#Tab3I").slideUp();
            $("#Tab4I").slideUp();
            $("#Tab5I").slideUp();
            $("#Tab7I").slideUp();
    }
   if(X=='Tab7')
    {
            $("#Tab7").addClass('select');
            $("#Tab1").removeClass('select');
            $("#Tab2").removeClass('select');
            $("#Tab3").removeClass('select');
            $("#Tab4").removeClass('select');
            $("#Tab5").removeClass('select');
            $("#Tab6").removeClass('select');
            $("#Tab7I").slideDown();
            $("#Tab1I").slideUp();
            $("#Tab2I").slideUp();
            $("#Tab3I").slideUp();
            $("#Tab4I").slideUp();
            $("#Tab5I").slideUp();
            $("#Tab6I").slideUp();
    }
 
 /*level2 to tab slide up slide down */
     if(X=='Tab8')
    {
            $("#Tab8").addClass('select');
            $("#Tab9").removeClass('select');
            $("#Tab10").removeClass('select');
            $("#Tab8I").slideDown();
            $("#Tab9I").slideUp();
            $("#Tab10I").slideUp();
           
    }
    
    if(X=='Tab9')
    {
            $("#Tab9").addClass('select');
            $("#Tab8").removeClass('select');
            $("#Tab10").removeClass('select');
            $("#Tab9I").slideDown();
            $("#Tab8I").slideUp();
            $("#Tab10I").slideUp();
           
    }
    
    if(X=='Tab10')
    {
            $("#Tab10").addClass('select');
            $("#Tab8").removeClass('select');
            $("#Tab9").removeClass('select');
            $("#Tab10I").slideDown();
            $("#Tab8I").slideUp();
            $("#Tab9I").slideUp();
           
    }
  
});  
     /*level 1 next previous events */
    
    
    $("#appnext").click(function(){

	$("#Tab1").removeClass('select');
	$("#Tab2").addClass('select');
	$("#Tab1I").slideUp();
	$("#Tab2I").slideDown();
	
	});


    $("#apppre").click(function(){

            $("#Tab1").removeClass('select');
            $("#Tab6").addClass('select');
            $("#Tab1I").slideUp();
            $("#Tab6I").slideDown();

    });

    

    
    $("#Personalnext").click(function(){

	$("#Tab2").removeClass('select');
	$("#Tab3").addClass('select');
	$("#Tab2I").slideUp();
	$("#Tab3I").slideDown();
	
    });


    $("#Personalpre").click(function(){

            $("#Tab2").removeClass('select');
            $("#Tab1").addClass('select');
            $("#Tab2I").slideUp();
            $("#Tab1I").slideDown();

    });
    
    
    $("#Contactnext").click(function(){

	$("#Tab3").removeClass('select');
	$("#Tab4").addClass('select');
	$("#Tab3I").slideUp();
	$("#Tab4I").slideDown();
	
      });


    $("#Contactpre").click(function(){

            $("#Tab3").removeClass('select');
            $("#Tab2").addClass('select');
            $("#Tab3I").slideUp();
            $("#Tab2I").slideDown();

    });


    $("#Othernext").click(function(){

	$("#Tab4").removeClass('select');
	$("#Tab5").addClass('select');
	$("#Tab4I").slideUp();
	$("#Tab5I").slideDown();
	
      });


    $("#Otherpre").click(function(){

            $("#Tab4").removeClass('select');
            $("#Tab3").addClass('select');
            $("#Tab4I").slideUp();
            $("#Tab3I").slideDown();

    });
    
     $("#Ranext").click(function(){

	$("#Tab5").removeClass('select');
	$("#Tab6").addClass('select');
	$("#Tab5I").slideUp();
	$("#Tab6I").slideDown();
	
      });


    $("#Rapre").click(function(){

            $("#Tab5").removeClass('select');
            $("#Tab4").addClass('select');
            $("#Tab5I").slideUp();
            $("#Tab4I").slideDown();

    });


    $("#Verificationnext").click(function(){

	$("#Tab6").removeClass('select');
	$("#Tab1").addClass('select');
	$("#Tab6I").slideUp();
	$("#Tab1I").slideDown();
	
      });


    $("#VerificationPre").click(function(){

            $("#Tab6").removeClass('select');
            $("#Tab5").addClass('select');
            $("#Tab6I").slideUp();
            $("#Tab5I").slideDown();

    });



     /*level1 next previous events STOP */
    
    /*level 2 next previous events */
    
    $("#Level2appnext").click(function(){

	$("#Tab8").removeClass('select');
	$("#Tab9").addClass('select');
	$("#Tab8I").slideUp();
	$("#Tab9I").slideDown();
	
	});


    $("#Level2appprevious").click(function(){

            $("#Tab1").removeClass('select');
            $("#Tab10").addClass('select');
            $("#Tab8I").slideUp();
            $("#Tab10I").slideDown();

    });


    $("#Level2pernext").click(function(){

	$("#Tab9").removeClass('select');
	$("#Tab10").addClass('select');
	$("#Tab9I").slideUp();
	$("#Tab10I").slideDown();
	
      });


    $("#Level2perprevious").click(function(){

            $("#Tab9").removeClass('select');
            $("#Tab8").addClass('select');
            $("#Tab9I").slideUp();
            $("#Tab8I").slideDown();

    });
 
 
   $("#Level2contactnext").click(function(){

	$("#Tab10").removeClass('select');
	$("#Tab8").addClass('select');
	$("#Tab10I").slideUp();
	$("#Tab8I").slideDown();
	
      });


    $("#Level2contactprevious").click(function(){

            $("#Tab10").removeClass('select');
            $("#Tab9").addClass('select');
            $("#Tab10I").slideUp();
            $("#Tab9I").slideDown();

    }); 
    

});


