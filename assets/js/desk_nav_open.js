var initial = true;
var media = window.matchMedia('(min-width: 768px)');
var first = true;
openDeskNav();
function openDeskNav() {
	const handle = document.querySelector('#nav-handle');
	const icon = handle.querySelector('ion-icon');
	const nav = document.querySelector('#header-nav');
	const container = nav.querySelector('#menu');

	if (initial) {
		handle.addEventListener('click', openDeskNav);

	} else if (first) {
		find_active_tab(container);
		first = false;
		nav.classList.add('open');
		icon.name = 'apps-outline';
	} else if (nav.classList.contains('open')) {
		nav.classList.remove('open');
		icon.src = icon.src.replace('-outline.svg', '.svg');
	} else {
		nav.classList.add('open');
		icon.src = icon.src.replace('.svg', '-outline.svg');
	}
}
initial = false;
