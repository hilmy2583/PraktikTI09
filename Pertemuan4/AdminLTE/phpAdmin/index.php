<?php

include_once 'top.php';
include_once 'menu.php';

?>

<div>
  <main>
    <?php
    error_reporting(0);
    $ar_menu = [
      'home' => 'index.php',
      'index1' => 'index1.php',
      'index2' => 'index2.php',
      'index3' => 'index3.php',
      'calender' => 'calender.php',
      'gallery' => 'gallery.php',
      'kanban' => 'kanban.php',
      'widgets' => 'widgets.php'
    ];
    $hal = $_GET['hal'];
    echo $hal;
    // if(isset($_GET['hal'])){
    //   foreach($ar_menu as $menu => $link){
    //     $menu = $menu['$hal'];
    //     include_once $link;
    //   }
    // }
    if(!empty($hal)){
      include_once $ar_menu[$hal];
    }
    ?>
  </main>
</div>

<?php

include_once 'bottom.php';

?>