$(document).ready(function()
{

$("#EditProfile").addClass('select');
$("#ChangePasswordI").slideUp();
	
$(".tab").click(function()
{
var X=$(this).attr('id');
 
if(X=='EditProfile')
{
$("#EditProfile").addClass('select');
$("#ChangePassword").removeClass('select');

$("#EditProfileI").slideDown();
$("#ChangePasswordI").slideUp();

}
if(X=='ChangePassword')
{

$("#ChangePassword").addClass('select');
$("#EditProfile").removeClass('select');

$("#ChangePasswordI").slideDown();
$("#EditProfileI").slideUp();

}

});


$("#personalnext").click(function(){

	$("#EditProfile").removeClass('select');
	$("#ChangePassword").addClass('select');
	$("#EditProfileI").slideUp();
	$("#ChangePasswordI").slideDown();
	
});


});