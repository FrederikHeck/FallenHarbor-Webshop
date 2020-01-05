<?php
class User {
    private $id;
    private $username;
    private $password;
    private $email;
    private $firstname;
    private $lastname;
    private $street;
    private $street_number;
    private $city;
    private $postal;
    private $country;


    static public function deleteUser($uid) {
        $uid = (int) $uid;
        $res = DB::doQuery("DELETE FROM user WHERE uid = $uid");
        return $res != null;
    }

    static public function getUserById($uid) {
        $uid = (int) $uid;
        $res = DB::doQuery("SELECT * FROM user WHERE uid = $uid");
        if ($res) {
            if ($user = $res->fetch_object('User')) {
                return $user;
            }
        }
        return null;
    }

    static public function getUserByUsername($username) {
        $res = DB::doQuery("SELECT * FROM user WHERE username = '$username'");
        if ($res) {
            if ($user = $res->fetch_object('User')) {
                return $user;
            }
        }
        return null;
    }

    # create new user, all data is escaped in here
    public function createUser($username, $password, $firstname="", $lastname="", $street="", $street_number="", $city="", $postal="", $country="", $email=""){
        $db = DB::getInstance();

        $this->username = $db->escape_string($username);
        $this->password = $db->escape_string($password);
        $this->firstname = $db->escape_string($firstname);
        $this->lastname = $db->escape_string($lastname);
        $this->street = $db->escape_string($street);
        $this->street_number = $db->escape_string($street_number);
        $this->city = $db->escape_string($city);
        $this->postal = $db->escape_string($postal);
        $this->country = $db->escape_string($country);
        $this->email = $db->escape_string($email);
    }

    public function addUserToDB(){
        $sql = "INSERT INTO user (username, password, firstname, lastname, street, street_number, city, postal, country, email)
                VALUES ('$this->username', '$this->password', '$this->firstname', '$this->lastname', '$this->street',
                '$this->street_number', '$this->city', '$this->postal', '$this->country', '$this->email')";

        $res = DB::doQuery($sql);
        return $res != null;
    }

    public function saveUser(){
        $sql = sprintf("UPDATE user SET username='%s', password='%s', firstname='%s', lastname='%s',
             street='%s', streetnumber='%s', city='%s', postal='%s', country='%s', email='%s' WHERE id = %d;",$this->username, $this->password, $this->firstname,
            $this->lastname, $this->street, $this->street_number, $this->city, $this->postal, $this->country, $this->id
        );
        $res = DB::doQuery($sql);
        return $res != null;
    }

    public function getFullName() {
        return $this->firstname . " " . $this->lastname;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function getStreetNumber()
    {
        return $this->street_number;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getPostal()
    {
        return $this->postal;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function getPassword()
    {
        return $this->password;
    }
    public function getEmail()
    {
        return $this->email;
    }



}
