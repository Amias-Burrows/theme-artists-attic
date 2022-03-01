//Find Active Tab

const container = document.querySelector('nav').querySelector('#menu');

find_active_tab(container);
function find_active_tab(container) {
	const items = container.querySelectorAll('li');
	items.forEach(function (item) {
		const anchor = item.querySelector('a');
		if (anchor.href == window.location.href) {
			item.classList.add ('active');
			const exists = !!anchor.querySelector('ion-icon');
			if (exists) {
				const a_icon = anchor.querySelector('ion-icon');
				if (a_icon.name == 'open') {
					a_icon.name = 'close';
					a_icon.src = a_icon.src.replace('.svg', '-outline.svg');
				} else {
					a_icon.name = 'open';
					a_icon.src = a_icon.src.replace('-outline.svg', '.svg');
				}
			}
			return;
		}
	});
}
