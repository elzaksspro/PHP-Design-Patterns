<?php
/**
 * Created by PhpStorm.
 * User: xenonus
 * Date: 9/23/2016
 * Time: 2:48 PM
 */

namespace classes;


abstract class Database
{
    public function __construct(string $driver, $host, string $username, string $password, string $name)
    {
        $this->setDriver($driver);
        $this->connect($host, $username, $password, $name);
    }

    private function setDriver(string $driver)
    {
        printf("Setting the Driver Path, %s", $driver);
    }

    private function connect(string $host, string $username, string $password, string $name)
    {
        printf("Connecting Host = %s, Username = %s, Password = %s, Database Name = %s", $host, $username, $password, $name);
    }


    abstract public function prepareStatement(string $sql);
    abstract public function execute();
    abstract public function close();

}