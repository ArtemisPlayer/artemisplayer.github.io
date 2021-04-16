var texte = document.getElementById("one");
texte.innerHTML = "Start";

var vapidPublic = new Uint8Array([4, 8, 191, 84, 173, 203, 74, 164, 200, 144, 125, 97, 11, 233, 1, 220, 230, 27, 68, 222, 114, 8, 200, 54, 254, 51, 130, 103, 92, 99, 144, 203, 74, 75, 201, 47, 33, 233, 244, 42, 126, 20, 40, 39, 188, 126, 184, 179, 170, 135, 106, 97, 89, 49, 165, 111, 229, 149, 45, 180, 23, 240, 177, 222, 98]);


function startWorker(){// démarre le service worker
  if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/dev/sw.js')
    .then(function(registration) {
      console.log('Registration successful, scope is:', registration.scope);
    })
    .catch(function(error) {
      console.log('Service worker registration failed, error:', error);
    });
  }
}

function ask(){ //demande la permission d'afficher des notifications
  Notification.requestPermission();
}

function displayNotification() {// affiche une notification, nécéssite le service worker
  if (Notification.permission == 'granted') {
    navigator.serviceWorker.getRegistration().then(function(reg) {
      reg.showNotification('Hello world!');
    });
  }
}

function subscribeUser() {//essaie de souscrie à un service de push, mais sous google 
  //il faut passer par firebase qui semble bien relou à mettre en place
  //on peut quand meme tester de trigger un event push avec les dev tools de chrome (mais 
  // pas de firefox)
    navigator.serviceWorker.ready.then(function(reg) {

      reg.pushManager.subscribe({ 
        userVisibleOnly: true,
        applicationServerKey: vapidPublic
      }).then(function(sub) {
        console.log(sub);
        console.log(sub.toJSON());
        texte.innerHTML = sub.toJSON().endpoint + "<br>AUTH: "+ sub.toJSON().keys.auth + "<br>p256dh : "+sub.toJSON().keys.p256dh;
      }).catch(function(e) {
        if (Notification.permission === 'denied') {
          console.warn('Permission for notifications was denied');
        } else {
          console.error('Unable to subscribe to push', e);
        }
      });
    });

}

function tester(){
  serviceWorkerRegistration.pushManager.getSubscription()  
    .then(function(subscription) {  
      var pushButton = document.querySelector('.js-push-button');  
      pushButton.disabled = false;

      if (!subscription) {  
        console.log('subscription error '); 
        return;  
      }
      console.log('subscriptioned ');

      // Keep your server in sync with the latest subscriptionId
      sendSubscriptionToServer(subscription);

      // Set your UI to show they have subscribed for  
      // push messages  
      pushButton.textContent = 'Disable Push Messages';  
      isPushEnabled = true;  
    })  
    .catch(function(err) {  
      console.warn('Error during getSubscription()', err);  
    });
}
  



