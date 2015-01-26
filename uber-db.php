<?php

class UberDb {
    
    protected $_mysqli;
    protected $host;
    protected $user;
    protected $pass;
    protected $db;

    public function __construct($host = NULL, $user = NULL, $pass = NULL, $db = NULL) {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->db   = $db;
    }
    
    private function connect() {
        $this->_mysqli = new mysqli($this->host, $this->user, $this->pass, $this->db);
    }
}

?>