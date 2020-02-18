<div id="footer">

    <?php 
    if (file_exists($filename)) {
          echo "<br>Last modified: " . date ("l, F d Y h:ia", filemtime($filename));

      }
    ?>
</div>
