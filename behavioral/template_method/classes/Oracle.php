<?php
/**
 * Created by PhpStorm.
 * User: xenonus
 * Date: 9/23/2016
 * Time: 2:55 PM
 */

namespace classes;


class Oracle extends Database
{
    public function __construct($driver, $host, $username, $password, $name)
    {
        parent::__construct($driver, $host, $username, $password, $name);
    }

    public function prepareStatement(string $sql)
    {
        printf("Preparing the Sql Query %s,", $sql);
    }

    public function execute()
    {
        printf("Executing the Sql");
    }

    public function close()
    {
        printf("Closing the Connection");
    }
}