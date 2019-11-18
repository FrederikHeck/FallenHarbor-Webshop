<?php
# to include: $db = DB::getInstance();
class DB extends mysqli{
    const HOST = "localhost";
    const USER = "root";
    const PW = "";
    const DB_NAME = "fallen_harbor";
    static private $instance;
    public function __construct() {
        parent::__construct(
            self::HOST, self::USER, self::PW,self::DB_NAME);
    }

    static public function getInstance() {
        if ( !self::$instance ) {
            @self::$instance = new DB();
            if(self::$instance->connect_errno > 0){
                die("Unable to connect to database [".
                    self::$instance->connect_error."]");
            }
        }
        return self::$instance;
    }

    static public function doQuery($sql) {
        $res = self::getInstance()->query($sql);
        if ($res)
            return $res;
        return null;
    }
}