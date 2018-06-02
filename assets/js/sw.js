this.addEventListener('install', function(event) {
  event.waitUntil(
    caches.open('v1').then(function(cache) {
      return cache.addAll([
        '/',
        '/index.php',
        '/assets/css/site.css',
        '/assets/js/app.js',
        '/articles/',
        '/talks/',
        '/interviews/',
        'https://fonts.googleapis.com/css?family=Noto+Sans%3A400italic%2C700italic%2C400%2C700%7CNoto+Serif%3A400italic%2C700italic%2C400%2C700%7CInconsolata%3A400%2C700&#038;subset=latin%2Clatin-ext'
      ]);
    })
  );
});

this.addEventListener('fetch', function(event) {
  event.respondWith(
    caches.match(event.request)
  );
});