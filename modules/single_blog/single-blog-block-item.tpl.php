
<div class="<?php print $classes;?>">

  <div class="date"><?php print $date; ?></div>
  
  <h4><?php print render($title);?></h4>
  
  <div class="name"><?php print t('by !username', array('!username' => $name));?></div>

</div>