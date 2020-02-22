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
    function get_info($name=null){
        $mysqli = $this->connect();

        if(strlen($name)>0){
            $res = $mysqli->query("Select `name`, `info`, `link`, `img` from momo where `name` = '$name'");
            $result = $res->num_rows;
            $mysqli->close();
        }else{
            $res = $mysqli->query("Select `name`, `info`, `link`, `img` from momo");
            $res->data_seek(0);

            while ($r = $res->fetch_assoc()){
                $result[] = $r;
            }
            $mysqli->close();
        }

        return $result;
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

    function insert_game($name, $info){
        $mysqli = $this->connect();
        $name = htmlspecialchars($name);
        $info = htmlspecialchars($info);
        if($this->get_info($name) == 0){
            $mysqli->query("Insert into momo(`name`, `info`) VALUES('$name', '$info')");
        }


    }
}