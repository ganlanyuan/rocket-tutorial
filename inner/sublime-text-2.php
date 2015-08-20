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
          <source src="video/sublime-text-2.mp4" type="video/mp4">
          <object data="video/sublime-text-2.mp4" height="400" width="900">
            <embed src="video/sublime-text-2.mp4" height="400" width="900">
          </object>
        </video>
      </div>
      <div class="content">
        <p>Emmet: <a target="_blank" href="http://emmet.io/">website</a>, <a target="_blank" href="http://docs.emmet.io/cheat-sheet/">cheat-sheet</a>, <a target="_blank" href="https://www.evernote.com/shard/s249/sh/f1c4af46-065c-406a-8345-9af8b694b01f/64418db0fe236991">Shortcuts</a></p>
        <p>Vim: <a target="_blank" href="http://www.vim.org/">Vim</a>, <a target="_blank" href="https://www.evernote.com/shard/s249/sh/1113debb-6935-4ddb-8e0a-8b85e47e1269/fdf699c327740862">Shortcuts</a></p>
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