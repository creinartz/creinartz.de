this.addEventListener('install', function(event) {
  event.waitUntil(
    caches.open('v2').then(function(cache) {
      return cache.addAll([
        '/',
        '/index.php',
        '/assets/css/site.css',
        '/assets/js/app.js',
        '/articles/',
        '/talks/',
        '/interviews/'
       ]);
    })
  );
});

this.addEventListener('fetch', function(event) {
  event.respondWith(
    caches.match(event.request)
  );
});