$(document).ready(function()
{
function thirty_pc() {
    var height = $(window).height();
    var thirtypc = (45 * height) / 100;
	var forthypc = (55 * height) / 100;
	var fifthypc = (48 * height) / 100;
    thirtypc = parseInt(thirtypc) + 'px';
	forthypc = parseInt(forthypc) + 'px';
	fifthypc = parseInt(fifthypc) + 'px';
	
    $("#content").css('height',thirtypc);
    $("#div_tab").css('height',forthypc);
    $("#panel").css('height',fifthypc);
	
	
}


    thirty_pc();
    $(window).bind('resize', thirty_pc);



});

    


