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

				if (a_icon.src != null) {	//If src is not null the icon is being taken from the website itself and therefore can have a unique title

					if (a_icon.name == 'open') {

						a_icon.name = 'close';
						a_icon.src = a_icon.src.replace('.svg', '-outline.svg');
					} else {

						a_icon.name = 'open';
						a_icon.src = a_icon.src.replace('-outline.svg', '.svg');
					}
				} else {	//If Icon does not use src attribute it is collecting the icon from the official website

					a_icon.name += '-outline';
				}
			}
			return;
		}
	});
}
