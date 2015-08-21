<?php 
  $section = 'inner';
?>
<?php include '../part/head.php'; ?>
<body>
<?php include '../part/helper/no-js.php'; ?>
<?php include '../part/helper/browsehappy.php'; ?>
<?php include '../part/header.php'; ?>

<div class="container">
  <section class="section">
    <h3 class="h3"><?php echo $pagename; ?></h3>
    <div class="video">
      <div class="flex-video">
        <video controls="controls" height="720" width="1280">
          <source src="../video/startpoint.mp4" type="video/mp4">
          <object data="../video/startpoint.mp4" height="400" width="900">
            <embed src="../video/startpoint.mp4" height="400" width="900">
          </object>
        </video>
      </div>
      <div class="content">
        <p>Startpoint: <a target="_blank" href="https://github.com/ganlanyuan/startpoint">github</a></p>
        <p>Bower: <a target="_blank" href="http://bower.io/">website</a>, <a target="_blank" href="https://www.evernote.com/shard/s249/sh/72eb6145-894f-4365-947d-f2fc64a4ccb9/efdcfa741cfc4639">install</a></p>
        <p>Respond.js: <a target="_blank" href="https://github.com/scottjehl/Respond">github</a>. Selectivizr: <a target="_blank" href="http://selectivizr.com/">website</a>. Browsehappy: <a target="_blank" href="http://browsehappy.com/">website</a>. Enable-javascript: <a target="_blank" href="http://enable-javascript.com/">website</a></p>
      </div>
    </div>
  </section>
</div>


<?php include '../part/footer.php'; ?>
<!-- scripts -->
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
<script src="assets/js/script.js"></script>
</body>
</html>