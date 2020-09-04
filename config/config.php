<?php


class database
{
    const servername = 'localhost';
    const username = 'root';
    const password = 'Thoigian1@';
    private $conn;

    public function __construct()
    {
        $this->conn = new PDO("mysql:host=localhost;dbname=mydatabase",self::username,self::password);
    }
    public function DBreturn($query){
        $stmt=$this->conn->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return	$stmt->fetchAll();
    }
}


?>