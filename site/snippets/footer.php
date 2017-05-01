  <footer class="footer cf">

    <div class="copyright">
      <?php echo $site->copyright()->kirbytext() ?>
    </div>

    <div class="colophon">
      <a href="<?php echo url('imprint') ?>">Imprint</a>
    </div>

  </footer>
  <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-46686300-1', 'creinartz.de');
      ga('send', 'pageview');
  </script>
  <!--
  <script>
  (() => {
    // Register Service Worker
    (() => {
      if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('./service-worker.js')
        .then(serviceWorkerRegistration => {
          console.log('[Main] Service Worker registered');
          console.log(serviceWorkerRegistration);
        }).catch(err => {
          console.log('[Main]', err);
        });
      }
    })();
  })();
  </script>
  -->
</body>
</html>
