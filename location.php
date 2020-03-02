<?php require('elements/header.php'); ?>

<section class="location">

  <div class="map-container">
    <?php
      $a = new Area("Google Map");
      $a->display();
    ?>

  </div>

</section>

<?php require('elements/footer.php'); ?>
