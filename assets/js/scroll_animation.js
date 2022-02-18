var initial = true;
var media = window.matchMedia('(min-width: 768px)');
window.onscroll = function() {
	const header = document.querySelector('header');
	const main = document.querySelector('main');
	if (media.matches) {
		var scroll = 'scroll-desktop';
		if (header.classList.contains('scroll-mobile')) {
			header.classList.remove('scroll-mobile');
			header.classList.add('scroll-desktop');
		}

	} else {
		var scroll = 'scroll-mobile';
		if (header.classList.contains('scroll-desktop')) {
			header.classList.remove('scroll-desktop');
			header.classList.add('scroll-mobile');
		}
	}

	if (window.scrollY > 0 && !header.classList.contains(scroll)) {
		header.classList.add(scroll);
		main.classList.add(scroll);
	} else if (window.scrollY <= 0) {
		header.classList.remove(scroll);
		main.classList.remove(scroll);
	}
}
initial = false;
