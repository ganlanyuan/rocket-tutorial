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
          <source src="../video/<?php echo $pagename; ?>.mp4" type="video/mp4">
          <object data="../video/<?php echo $pagename; ?>.mp4" height="400" width="900">
            <embed src="../video/<?php echo $pagename; ?>.mp4" height="400" width="900">
          </object>
        </video>
      </div>
      <div class="content">
        <p>Sublime Text: <a target="_blank" href="http://www.sublimetext.com/">website</a>, <a target="_blank" href="https://packagecontrol.io/">package website</a>, <a target="_blank" href="https://www.evernote.com/shard/s249/sh/fa42bda2-3837-459f-b2a7-2a3052e7b196/462d346c60307cbd">my packages</a>, <a target="_blank" href="https://www.evernote.com/shard/s249/sh/1ff1d20e-3ecb-490c-b882-6be9e590e95e/4c9701268717bebc">Shortcuts</a></p>
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