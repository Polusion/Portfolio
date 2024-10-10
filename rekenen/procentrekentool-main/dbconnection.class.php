<?php
class Dbconnection extends PDO
{
    private $host = "davidportfolio.nl.mysql";
    private $dbname = "davidportfolio_nlrekenen";
    private $user = "davidportfolio_nlrekenen";
    private $pass = "davidof1";
    public function __construct()
    {
        parent::__construct("mysql:host=".$this->host.";dbname=".$this->dbname."; charset=utf8", $this->user, $this->pass);
        $this->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
}