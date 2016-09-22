<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 29-08-16
 * Time: 12.06
 */

namespace classes;


class Query
{
    private $config = ['mysql:host=127.0.0.1;dbname=universal', 'root', ''];
    public $dbc, $query, $result, $count = 0, $error = false;
    public function __construct()
    {
        $this->connect();
    }

    public function connect()
    {
        try {
            $this->dbc = new \PDO(...$this->config);
        } catch (\PDOException $e){
            throw new \Exception($e->getMessage());
        }
    }

    public function query(string $sql): Query
    {
        $this->error = false;
        if($this->query = $this->dbc->prepare($sql)){
            if($this->query->execute()){
                $this->result = $this->query->fetchAll(\PDO::FETCH_ASSOC);
                $this->count = $this->query->rowCount();
            } else {
                $this->error = true;
            }
        }
        return $this;
    }


    public function get(string $table_name)
    {
        $sql = sprintf("SELECT * FROM %s", $table_name);
        if(!$this->query($sql)->error()){
            return $this;
        }
    }

    public function result()
    {
        return $this->result;
    }

    public function first()
    {
        return $this->result()[0];
    }

    public function error()
    {
        return $this->error;
    }

    public function count()
    {
        return $this->count;
    }


}

