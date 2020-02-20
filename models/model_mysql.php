<?php


class model_mysql
{
    // Подключение к БД Mysql
    function connect($host='localhost', $user='newuser', $password='PASSWORD', $db='hvo'){
        $mysqli = new mysqli($host, $user, $password, $db);
        if ($mysqli->connect_errno) {
            echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        return $mysqli;
    }

    // Забираем данные
    function get_info(){
        $mysqli = $this->connect();
        $res = $mysqli->query("Select `name`, `info` from momo");
        $res->data_seek(0);
        $result = array();
        while ($r = $res->fetch_assoc()){
            $result[] = $r;
        }
        $mysqli->close();
        return $result;
    }

    function insert_info(){

//        $mysqli = $this->connect();
//        $mysqli->query("Insert into momo (`name`, `info`) VALUES ");
//        $mysqli->close();
    }

    // YOUTUBE
    function insert_youtube(){
        if(isset($_POST['link'])){
            $mysqli = $this->connect();
            $link = htmlspecialchars($_POST['link']);

            $mysqli->query("Insert into links_youtube(`link`) VALUES('$link')");

            $_POST = null;
        }
    }

    function get_links(){
        $mysqli = $this->connect();
        $res = $mysqli->query("Select `link` from links_youtube");
        $res->data_seek(0);
        $result = array();
        while ($r = $res->fetch_assoc()){
            $result[] = $r;
        }
        return $result;
    }
}