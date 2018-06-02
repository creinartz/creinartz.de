if ('serviceWorker' in navigator) {
  navigator.serviceWorker.register('sw.js').then(function(reg) {
    console.log('sw registered');
  }).catch(function(error) {
    console.log('sw not registered');
  });
};