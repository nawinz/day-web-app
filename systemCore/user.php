<?php
require_once("./config.php");
// print_r($_REQUEST);
if(!is_dir($config["databaseFolderName"])){
    mkdir($config["databaseFolderName"]);
}
if(@$_GET["check"] == true){
    if(file_exists($config["databaseUserFilenamePattern"])){
        echo "EXIST";
    }else{
        echo "NOT_EXIST";
    }
}
?>