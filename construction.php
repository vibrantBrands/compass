<?php require('elements/header.php'); ?>


<div class="internal_content_wrapper">
  <div class="internal_content_container content">
    <div class="construction">
      <div>
        <h1>This page is under construction.</h1>
        <div class="contact-box">
          <h2>Get in touch</h2>
          <div id="wufoo-ka7iy7l140c7mq"> Fill out my <a href="https://vibrantcreative.wufoo.com/forms/ka7iy7l140c7mq">online form</a>. </div> <script type="text/javascript"> var ka7iy7l140c7mq; (function(d, t) { var s = d.createElement(t), options = { 'userName':'vibrantcreative', 'formHash':'ka7iy7l140c7mq', 'autoResize':true, 'height':'320', 'async':true, 'host':'wufoo.com', 'header':'show', 'ssl':true }; s.src = ('https:' == d.location.protocol ?'https://':'http://') + 'secure.wufoo.com/scripts/embed/form.js'; s.onload = s.onreadystatechange = function() { var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return; try { ka7iy7l140c7mq = new WufooForm(); ka7iy7l140c7mq.initialize(options); ka7iy7l140c7mq.display(); } catch (e) { } }; var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr); })(document, 'script'); </script>
        </div>
      </div>
      <div>
        <img src="<?php echo $this->getThemePath(); ?>/images/crane-graphic.svg" alt="Construction Crane" />
      </div>
    </div>
  </div>
</div>

<?php require('elements/footer.php'); ?>

