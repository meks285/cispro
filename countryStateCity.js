/* This script and many more are available free online at
The JavaScript Source!! http://www.javascriptsource.com
Created by: Michael J. Damato | http://developing.damato.net/ */
// lga lists
var states = new Array();

states['Lagos'] = new Array('Alimosho','Ajeromi-Ifelodun','Kosofe','Mushin','Oshodi-Isolo','Ojo','Ikorodu','Surulere','Agege','Ifako-Ijaye','Shomolu','Amuwo-Odofin','Lagos Mainland','Ikeja','Eti-Osa','Badagry','Apapa','Lagos Island','Epe','Ibeju-Lekki');
states['Oyo'] = new Array('Akinyele','Afijio','Egbeda','Ibadan North','Ibadan North-East','Ibadan North-West','Ibadan South-West','Ibadan South-East','Ibarapa Central','Ibarapa East','Ido','Irepo','Iseyin','Kajola','Lagelu','Ogbomosho North','Ogbomosho South','Oyo West','Atiba','Atisbo','Saki West','Saki East','Itesiwaju','Iwajowa','Ibarapa North','Olorunsogo','Oluyole','Ogo Oluwa','Surulere','Orelope','Ori Ire','Oyo East','Ona Ara');
states['Plateau'] = new Array('Barkin Ladi','Bassa','Bokkos','Jos East','Jos North','Jos South','Kanam','Kanke','Langtang North','Langtang South','Mangu','Mikang','Pankshin','Qua\'an Pan','Riyom','Shendam','Wase');


// City lists
var cities = new Array();



function setStates() {
  cntrySel = document.getElementById('state');
  stateList = states[cntrySel.value];
  changeSelect('lga', stateList, stateList);
  setCities();
}

function setCities() {
  cntrySel = document.getElementById('state');
  stateSel = document.getElementById('lga');
  cityList = cities[cntrySel.value][stateSel.value];
  changeSelect('city', cityList, cityList);
}

function changeSelect(fieldID, newOptions, newValues) {
  selectField = document.getElementById(fieldID);
  selectField.options.length = 0;
  for (i=0; i<newOptions.length; i++) {
    selectField.options[selectField.length] = new Option(newOptions[i], newValues[i]);
  }
}

// Multiple onload function created by: Simon Willison
// http://simonwillison.net/2004/May/26/addLoadEvent/
function addLoadEvent(func) {
  var oldonload = window.onload;
  if (typeof window.onload != 'function') {
    window.onload = func;
  } else {
    window.onload = function() {
      if (oldonload) {
        oldonload();
      }
      func();
    }
  }
}

addLoadEvent(function() {
  setStates();
});
