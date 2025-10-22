const CACHE_NAME = 'zimatech-cache-v1';
const OFFLINE_URL = '/home/offline';

const urlsToCache = [
  '/',
  '/home/offline',
  '/css/style.css',
  '/js/style.js',
  '/files/layout/zimmermann-logo-192.png',
  '/files/layout/zimmermann-logo-512.png'
];

self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CACHE_NAME).then(cache => {
      return cache.addAll(urlsToCache);
    })
  );
  self.skipWaiting();
});

self.addEventListener('fetch', event => {
  event.respondWith(
    fetch(event.request).catch(() => caches.match(event.request).then(response => {
      return response || caches.match(OFFLINE_URL);
    }))
  );
});

self.addEventListener('activate', event => {
  event.waitUntil(
    caches.keys().then(keys => {
      return Promise.all(
        keys.filter(k => k !== CACHE_NAME).map(k => caches.delete(k))
      );
    })
  );
});
