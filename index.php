
<?php include "./config.php" ?>
<?php 
    ob_start();
    include "./index1.html";
    $view = ob_get_contents();
    ob_get_clean();
    echo $view;
?>