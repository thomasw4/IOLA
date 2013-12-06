function expandside() {
	var newstate = $("#arrow").attr('state') ^ 1,
	icon = newstate ? "left" : "right";
	$("#arrow").html("<span class=\"glyphicon glyphicon-chevron-" + icon + "\"></span> " );
	$("#arrow").attr('state',newstate)
}