$(document).ready(function() {
	$('#simple-menu').sidr();
	$('#float2').sidr();
	$('#float').sidr();
	$('#simple').sidr({ speed : 50 });
});

function expandside() {
	var newstate = $("#arrow").attr('state') ^ 1,
	icon = newstate ? "left" : "right";
	$("#arrow").html("<span class=\"glyphicon glyphicon-chevron-" + icon + "\"></span> " );
	$("#arrow").attr('state',newstate)
}