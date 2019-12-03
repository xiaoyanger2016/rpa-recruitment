<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2019/12/3
 * Time: 18:30
 */
if(is_file("MyGreeter/Client.php")){
    include_once("MyGreeter/Client.php");
}else{
    echo '文件不存在';
}