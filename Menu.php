<?php
function generateMenu($pages) {
    echo "<header>";
    foreach($pages as $page => $fileName) {
        if(array_key_exists("page", $_GET) && $page == $_GET["page"]) {
            echo "<a href='?page=$page' class='selected'>".(ucfirst($page))."</a>";
        } else {
            echo "<a href='?page=$page'>".(ucfirst($page))."</a>";
        }
    }
    echo "</header>";
}
?>