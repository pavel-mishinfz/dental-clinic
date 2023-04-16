
let center = [55.10776337928515, 38.74434368650815];
ymaps.ready(init);

function init() {
    let map = new ymaps.Map('map', {
        center: center,
        zoom: 17,
        controls: ['routePanelControl']
    });

    let placemark = new ymaps.Placemark(center, {}, {
        iconLayout: 'default#image',
        iconImageHref: 'dental-clinic/public/img/contacts/icon-mark.svg',
        iconImageSize: [40, 40],
        iconImageOffset: [-20, -30]
    });

    map.controls.remove('geolocationControl'); // удаляем геолокацию
    map.controls.remove('searchControl'); // удаляем поиск
    map.controls.remove('trafficControl'); // удаляем контроль трафика
    map.controls.remove('typeSelector'); // удаляем тип
    map.controls.remove('fullscreenControl'); // удаляем кнопку перехода в полноэкранный режим
    map.controls.remove('zoomControl'); // удаляем контрол зуммирования
    map.controls.remove('rulerControl'); // удаляем контрол правил
    // map.behaviors.disable(['scrollZoom']); // отключаем скролл карты (опционально)

    let control = map.controls.get('routePanelControl');
    let location = ymaps.geolocation.get();

    location.then(function (res) {
        let locationText = res.geoObjects.get(0).properties.get('text');
        control.routePanel.state.set({
            type: 'pedestrian',
            fromEnabled: true,
            from: locationText,
            toEnabled: false,
            to: 'г. Коломна, ул. Октябрьской революции д. 161'
        });
    });


    map.geoObjects.add(placemark);
}

let mapPopupClose = document.querySelector('.popup__close--map');
let map = document.querySelector('.contacts__map');
let mapPopup = document.querySelector('.contacts__map--popup');
let route = document.querySelector('#route');
console.log(route);
route.addEventListener("click", function(e) {
    e.preventDefault();
    map.style.cssText = 'display: block; position: fixed; transform: translateY(25%); z-index: 100; height: 70%;';
    mapPopup.style.cssText = 'display: block;';
    body.style.cssText = 'overflow: hidden;';
});
mapPopupClose.addEventListener("click", function (e) {
    e.preventDefault();
    map.style.cssText = 'position: absolute; transform: none; z-index: none; height: 100%;';
    mapPopup.style.cssText = 'display: none;';
    body.style.cssText = 'overflow: none;';
})
