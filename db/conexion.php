<?php
class Conexion{
    static public function infoDataBase(){
        $infoDB = [
            "database" => "",
            "user" => "root",
            "contasennia" => ""
        ];
    }
    static public function getConexion(){
        try{
            $rutaDB = new PDO(
                "mysql:host=localhost;dbname=" . Conexion::infoDataBase()["databese"],
                Conexion::infoDataBase()["user"],
                Conexion::infoDataBase()["contasennia"]
            );
            $rutaDB -> exec("set names utf8");

        } catch(PDOException $e){
            die("Error: " . $e->getMessage());
        }
        return $rutaDB;
    }
}
?>