$('a[href^="#quisommesnous"]').click(function(){
    var id = $(this).attr("href");
    var offset = $(id).offset().top
    $('html, body').animate({scrollTop: offset}, 'slow');
    return false;
});

$('a[href^="#presentation"]').click(function(){
    var id = $(this).attr("href");
    var offset = $(id).offset().top
    $('html, body').animate({scrollTop: offset}, 'slow');
    return false;
});

$('a[href^="#edi"]').click(function(){
    var id = $(this).attr("href");
    var offset = $(id).offset().top
    $('html, body').animate({scrollTop: offset}, 'slow');
    return false;
});

$('a[href^="#carte"]').click(function(){
    var id = $(this).attr("href");
    var offset = $(id).offset().top
    $('html, body').animate({scrollTop: offset}, 'slow');
    return false;
});

$('a[href^="#page"]').click(function(){
    var id = $(this).attr("href");
    var offset = $(id).offset().top
    $('html, body').animate({scrollTop: offset}, 'slow');
    return false;
});

$('a[href^="#nouscontacter"]').click(function(){
    var id = $(this).attr("href");
    var offset = $(id).offset().top
    $('html, body').animate({scrollTop: offset}, 'slow');
    return false;
});

$('a[href^="#petitsdejeuner"]').click(function(){
    var id = $(this).attr("href");
    var offset = $(id).offset().top
    $('html, body').animate({scrollTop: offset}, 'slow');
    return false;
});

$('a[href^="#presse"]').click(function(){
    var id = $(this).attr("href");
    var offset = $(id).offset().top
    $('html, body').animate({scrollTop: offset}, 'slow');
    return false;
});

$('a[href^="#partenaires"]').click(function(){
    var id = $(this).attr("href");
    var offset = $(id).offset().top
    $('html, body').animate({scrollTop: offset}, 'slow');
    return false;
});

function imagegalerie()
{
var active = $("#citations .active");
var next = (active.next().length > 0) ? active.next() : $('#citations img:first');
  active.fadeOut(function(){
  active.removeClass('active');
  next.fadeIn().addClass('active');
  });
}

setInterval('imagegalerie()', 8000);
imagegalerie();

var carte = L.map('carte').setView([48.86, 2.35], 13);
L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(carte);

L.marker([48.86, 2.35]).addTo(carte)
    .bindPopup('Voici où a eu lieu notre dernière maraude !')
    .openPopup();

  function adpaterALaTailleDeLaFenetre(){
    var largeur = document.documentElement.clientWidth,
    hauteur = document.documentElement.clientHeight;

    var source = document.getElementById('entete'); // récupère l'id source
    source.style.height = hauteur+'px'; // applique la hauteur de la page
    source.style.width = largeur+'px'; // la largeur
  }

  // Une fonction de compatibilité pour gérer les évènements
  function addEvent(element, type, listener){
    if(element.addEventListener){
      element.addEventListener(type, listener, false);
    }else if(element.attachEvent){
      element.attachEvent("on"+type, listener);
    }
  }

  // On exécute la fonction une première fois au chargement de la page
  addEvent(window, "load", adpaterALaTailleDeLaFenetre);
  // Puis à chaque fois que la fenêtre est redimensionnée
  addEvent(window, "resize", adpaterALaTailleDeLaFenetre);

  function adpaterALaTailleDeLaFenetre1(){
    var largeur = document.documentElement.clientWidth,
    hauteur = document.documentElement.clientHeight;

    var source = document.getElementById('carte'); // récupère l'id source
    source.style.height = hauteur+'px'; // applique la hauteur de la page
    source.style.width = largeur+'px'; // la largeur
  }

  // Une fonction de compatibilité pour gérer les évènements
  function addEvent1(element, type, listener){
    if(element.addEventListener){
      element.addEventListener(type, listener, false);
    }else if(element.attachEvent){
      element.attachEvent("on"+type, listener);
    }
  }

  // On exécute la fonction une première fois au chargement de la page
  addEvent1(window, "load", adpaterALaTailleDeLaFenetre1);
  // Puis à chaque fois que la fenêtre est redimensionnée
  addEvent1(window, "resize", adpaterALaTailleDeLaFenetre1);

  function adpaterALaTailleDeLaFenetre2(){
    var largeur = document.documentElement.clientWidth,
    hauteur = document.documentElement.clientHeight;

    var source = document.getElementById('presentation'); // récupère l'id source
    source.style.height = hauteur+'px'; // applique la hauteur de la page
    source.style.width = largeur+'px'; // la largeur
  }

  // Une fonction de compatibilité pour gérer les évènements
  function addEvent2(element, type, listener){
    if(element.addEventListener){
      element.addEventListener(type, listener, false);
    }else if(element.attachEvent){
      element.attachEvent("on"+type, listener);
    }
  }

  // On exécute la fonction une première fois au chargement de la page
  addEvent2(window, "load", adpaterALaTailleDeLaFenetre2);
  // Puis à chaque fois que la fenêtre est redimensionnée
  addEvent2(window, "resize", adpaterALaTailleDeLaFenetre2);

  function adpaterALaTailleDeLaFenetre3(){
    var largeur = document.documentElement.clientWidth,
    hauteur = document.documentElement.clientHeight;

    var source = document.getElementById('petitsdejeuner'); // récupère l'id source
    source.style.height = hauteur+'px'; // applique la hauteur de la page
    source.style.width = largeur+'px'; // la largeur
  }

  // Une fonction de compatibilité pour gérer les évènements
  function addEvent3(element, type, listener){
    if(element.addEventListener){
      element.addEventListener(type, listener, false);
    }else if(element.attachEvent){
      element.attachEvent("on"+type, listener);
    }
  }

  // On exécute la fonction une première fois au chargement de la page
  addEvent3(window, "load", adpaterALaTailleDeLaFenetre3);
  // Puis à chaque fois que la fenêtre est redimensionnée
  addEvent3(window, "resize", adpaterALaTailleDeLaFenetre3);
