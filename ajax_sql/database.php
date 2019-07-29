<?php
class Database{
    public static $connection=null;
    public function __construct()
    {
        if(self:: $connection){
            return self::$connection;
        }
        $this->connect();
        return self::$connection;
    }
    public function connect(){
        $serverName="localhost";
        $userName="root";
        $password="";
        $dbName="ajax_sql";
        self::$connection= new mysqli($serverName,$userName,$password,$dbName);
        if (self::$connection->connect_error){
            die("Khong the ket noi den csdl");
        }
    }
    public function disconnect(){
        if (self::$connection){
            self::$connection->close();
        }
    }
}