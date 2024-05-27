<?php

class Member_model{
    private $dbh;
    private $stmt;
    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=hfav';
        try{
            $this->dbh = new PDO($dsn,'root','');

        } catch(PDOException $e){
            die($e->getMessage());
        }
    }
/*
    private $member = [
[
        "name"=>"Canon Siri",
        "address"=>"wesdeco ward 3",
        "phone"=>"92929911",
        "position"=>"coach"
],
[
    "name"=>"Atung Weo",
    "address"=>"wesdeco nambis ward 3",
    "phone"=>"92299911",
    "position"=>"GK coach"
],
[
    "name"=>"Thimoty Tommy",
    "address"=>"Palai ward 3",
    "phone"=>"00002311",
    "position"=>"Forward coach"
],
[
    "name"=>"Sumill Aria",
    "address"=>"transmiter ward 4",
    "phone"=>"72272277",
    "position"=>"defence coach"
]

];
*/

public function getAllMember()
{
    $this->stmt=$this->dbh->prepare('SELECT * FROM member');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
}
}