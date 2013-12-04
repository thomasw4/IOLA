function changeText(idElement) {
	var element = document.getElementById('element' + idElement);
	if (idElement === 1 || idElement === 2) {
		if (element.innerHTML === 'Contact Us') element.innerHTML = '<a href="mailto:mwawro@vt.edu">mwawro@vt.edu</a>';
		else {
			element.innerHTML = 'Contact Us';
		}
	}
}