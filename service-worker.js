const staticCacheName = 'creinartz-v2';
const staticFilesToCache = [
  './',
  './index.php'
];
const dynamicCacheName = 'creinartz-v2';

self.addEventListener('install', e => {
  console.log('[ServiceWorker] Installed Service Worker');
  console.log(e);
  e.waitUntil(
    caches.open(staticCacheName).then(cache => {
      console.log('[ServiceWorker] Caching app shell in', staticCacheName);
      return cache.addAll(staticFilesToCache);
    }).then(() => {
      console.log('[ServiceWorker] Skip waiting on install');
      return self.skipWaiting();
    })
  );
});

self.addEventListener('activate', e => {
  console.log('[ServiceWorker] Activate');
  e.waitUntil(
    caches.keys().then(keyList => {
      return Promise.all(keyList.map(key => {
        console.log('[ServiceWorker] Removing old cache', key);
        if (key !== staticCacheName && key !== dynamicCacheName) {
          return caches.delete(key);
        }
      }));
    })
  );
});

self.addEventListener('fetch', e => {
  const requestUrl = e.request.url;
  console.log('[ServiceWorker] Fetch', requestUrl);
  e.respondWith(
    caches.match(e.request).then(response => {
      if (response) {
        console.log('[ServiceWorker] Cache hit for ', requestUrl);
        return response;
      }
      console.log('[ServiceWorker] Cache miss for ', requestUrl);
      return fetch(e.request).then(response => {
        if (/.*?\/static\//.test(requestUrl)) {
          console.log('[ServiceWorker] Caching dynamic file', requestUrl,
              'in', dynamicCacheName);
          return caches.open(dynamicCacheName).then(cache => {
            cache.put(requestUrl, response.clone());
            return response;
          });
        }
        console.log('[ServiceWorker] Not caching', requestUrl);
        return response;
      }).catch(err => {
        console.log('[ServiceWorker]', err);
        return response;
      });
    }).catch(err => {
      if (/.*?\/static\//.test(requestUrl)) {
        console.log('[ServiceWorker] Returning fallback for ', requestUrl, err);
        return caches.match('./static/yellow.gif');
      }
    })
  );
});
