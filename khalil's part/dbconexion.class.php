<?php
class base{
    private $dbname = 'resto';
    private $user = 'root';
    private $pwd = '';
    private $host = 'localhost';
    public $pdo=null;

    public function connectDB(){
        try{
            $this->pdo= new PDO('mysql:host='.$this->host.';dbname='.$this->dbname,$this->user,$this->pwd);
        }
        catch (PDOException $e){
          echo  $e->getMessage();
        }
        return $this->pdo;
    }
}
?>
