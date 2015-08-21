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
          <source src="../video/rocket-4.mp4" type="video/mp4">
          <object data="../video/rocket-4.mp4" height="400" width="900">
            <embed src="../video/rocket-4.mp4" height="400" width="900">
          </object>
        </video>
      </div>
      <div class="content">
        <!-- <p>Rocket: <a target="_blank" href="https://github.com/ganlanyuan/rocket">github</a></p> -->
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