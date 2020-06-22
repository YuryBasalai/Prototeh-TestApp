let span = document.createElement('span');
span.innerHTML = "Example";
example.append(span);




color = () => {
	switch (event.toElement) {
		case span:
			modal_color.style.display = "block";
			modal_color.getElementsByTagName("p")[0].innerHTML = 'Цвет фона: ' + RgbToHex(window.getComputedStyle(example, null).getPropertyValue("background-color"))
			break;
		case example:
			example.style.background = "#0000FF";
			break;
	}
}

example.addEventListener('click', {
	handleEvent(event) {
		color();
	}
});