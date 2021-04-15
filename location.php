<?php require('elements/header.php'); ?>

<div class="internal_content_wrapper">
  <div class="internal_content_container content">
<section class="location">

  <div class="map-container">
    <?php
      $a = new Area("Google Map");
      $a->display();
    ?>
  </div>
  <div class="content">
    <div>
      <?php
      $a = new Area("Location");
      $a->display();
    ?>
    </div>
    <div class="info">
      <?php
      $a = new Area("Address");
      $a->display();
    ?>
    </div>
  </div>

</section>

</div>
</div>

<?php require('elements/footer.php'); ?>
