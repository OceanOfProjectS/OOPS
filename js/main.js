

function open_details(e){
 $('#details'+e).toggle(1000);
}
var temp=0;
function op_menu(){
	if(temp%2==0){
		$('#menu_icon').removeClass();
		$('#menu_icon').attr('class','fa fa-close');
		$('.menu,.search_layer').fadeIn(500);
	}
	else{
		$('#menu_icon').removeClass();
		$('#menu_icon').attr('class','fa fa-bars');
		$('.menu,.search_layer').fadeOut(500);
	}
	temp++;
}
function op_project(){
	alert("SORRY! YOU ARE NOT ALLOWED TO VIEW THIS PROJECT")
}