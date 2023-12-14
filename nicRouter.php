<?php

/*
* Setup base values
*/
$page = $_GET['page'];

/*
 * Setup paths
 */
$pages = BASE_PATH.'app/pages/';
$auth = $pages.'auth/';

if(isset($_GET['page'])) {

    /*
    * Include requested page
    */
    include(BASE_PATH."app/pages/auth/".$_GET['page'].".php");

    if($currPage == NULL) {
        include(BASE_PATH."nic/out/404.html");
    }

    /*
    * Include different footers
    */
    if(strpos($currPage,'front_') == true) {
        include BASE_PATH.'storage/assets/front/footer.php';
    }

    if(strpos($currPage,'back_') == true) {
        include BASE_PATH.'storage/assets/back/footer.php';
    }

    if(strpos($currPage,'auth_') == true) {
        include BASE_PATH.'storage/assets/auth/footer.php';
    }

} else {
    $console->callError(true, "nicRoter.php", "The Router couldnt be loaded, please enable .httaccess or check it for errors");
}