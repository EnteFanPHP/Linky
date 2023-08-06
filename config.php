<?php

class Config {

    public String $salt = ""; // SOON.....

    public $domain = "localhost";

    public $domain_uri = "http";

    public array $allowed = [
        "http",
        "https"
    ];

    // DATABASE CONNECTION

    public $db_server_name = "localhost";
    public $db_username = "root";
    public $db_pwd = "";
    public $db_db = "linkshortener";
}