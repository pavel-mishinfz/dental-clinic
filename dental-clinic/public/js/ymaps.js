/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./resources/js/ymaps.js ***!
  \*******************************/
var center = [55.10776337928515, 38.74434368650815];
ymaps.ready(init);
function init() {
  var map = new ymaps.Map('map', {
    center: center,
    zoom: 17,
    controls: ['routePanelControl']
  });
  var placemark = new ymaps.Placemark(center, {}, {
    iconLayout: 'default#image',
    iconImageHref: '/img/contacts/icon-mark.svg',
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

  var control = map.controls.get('routePanelControl');
  var location = ymaps.geolocation.get();
  location.then(function (res) {
    var locationText = res.geoObjects.get(0).properties.get('text');
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
/******/ })()
;
