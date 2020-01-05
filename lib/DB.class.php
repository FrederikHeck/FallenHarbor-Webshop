<?php
# to include: $db = DB::getInstance();
class DB extends mysqli{

    //todo: read in from xml

    /*
    const HOST = "localhost";
    const USER = "root";
    const PW = "";
    const DB_NAME = "hafen";
    //*/


    private $HOST;
    private $USER;
    private $PW;
    private $DB_NAME;

    static private $instance;
    public function __construct() {
        $db_credentials = simplexml_load_file(dirname(__DIR__) . "/xml/db.xml") or die("Error: Cannot create XML-object");
        $this->HOST = $db_credentials->HOST;
        $this->USER = $db_credentials->USER;
        $this->PW = $db_credentials->PW;
        $this->DB_NAME = $db_credentials->DB_NAME;
        parent::__construct(
            "$this->HOST", "$this->USER", "$this->PW","$this->DB_NAME");
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