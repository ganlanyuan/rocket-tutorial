<header class="site-head">
  <div class="container">
    <div class="logo"><a href="<?php if ($section == 'inner') {echo '../'; } ?>index.php"><img src="<?php if ($section == 'inner') {echo '../'; } ?>assets/img/logo.png" alt="Rocket Tutorial"></a></div>
    <div class="head-nav">
      <label for="nav-toggle" class="nav-toggle"><img src="<?php if ($section == 'inner') {echo '../'; } ?>assets/img/icon-nav.png" alt=""></label>
      <input type="checkbox" id="nav-toggle" class="hidden-checkbox">
      <nav class="site-nav">
        <ul>
          <li><?php if ($section == 'inner') {echo '<a href="../index.php#sublime-text">'; } ?>Sublime Text<?php if ($section == 'inner') {echo '</a>'; } ?></li>
          <li><?php if ($section == 'inner') {echo '<a href="../index.php#codekit">'; } ?>Codekit<?php if ($section == 'inner') {echo '</a>'; } ?></li>
          <li><?php if ($section == 'inner') {echo '<a href="../index.php#startpoint">'; } ?>Startpoint<?php if ($section == 'inner') {echo '</a>'; } ?></li>
          <li><?php if ($section == 'inner') {echo '<a href="../index.php#rocket">'; } ?>Rocket<?php if ($section == 'inner') {echo '</a>'; } ?></li>
        </ul>
      </nav>
    </div>
  </div>
</header>