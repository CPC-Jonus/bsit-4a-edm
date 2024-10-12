<?php
class database
{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbname = "edma";
    private $con = null;
    private $status = false;

    function __construct()
    {
        $this->con = $this->initDatabase();
    }
    // establish connection
    public function getCon(){
        return $this->con;
    }
    // check database status
    public function getStatus(){
        return $this->status;
    }
    // initialize database connection
    private function initDatabase(){
        try {
            echo "success";
            $this->status = true;
            return $this->con = null;
        } catch (PDOException $th) {
            return null;
        }
    }
}
