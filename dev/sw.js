
self.addEventListener('activate', function(event) {//notifie l'activation
  console.log("Service Worker activé");
});

self.addEventListener('push', function(e) {// à la reception d'un event push , notifie
    console.log("AAAAAAAAA");
    self.registration.showNotification('Hello world!');

});