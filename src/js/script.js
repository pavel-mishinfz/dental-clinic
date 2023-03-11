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
        iconImageHref: 'http://127.0.0.1:5500/src/img/contacts/icon-mark.svg',
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