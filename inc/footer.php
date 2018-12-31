<footer class="site-footer">
  <div class="container flex-wrap">

    <div class="third footer-section">
      <h2>First Column</h2>
      <a href="/" class="logo">
        <img src="/img/simpul-logo.svg" alt="<?php echo $prettyName; ?> logo">
      </a>
    </div>

    <div class="third footer-section">
      <h2>Second Column</h2>
      <p>Footer Section 2</p>
    </div>

    <div class="third footer-section">
      <h2>Third Column</h2>
      <?php include ($_SERVER["DOCUMENT_ROOT"].'/inc/socials.php'); ?>
      <div class="copyright">
        Copyright <?php echo $prettyName . ' ' . date('Y'); ?>
      </div>
    </div>

  </div>
</footer>

<script src="/assets/js/main.min.js"></script>
</body>
</html>