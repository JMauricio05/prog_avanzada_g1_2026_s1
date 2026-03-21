<?php
namespace app\models\config;

use mysqli;

class ConnectionDB
{
    private $host_db = "localhost";
    private $user_db = "root";
    private $pwd_db = "";
    private $name_db = "prueba_db";
    private $conx_db = null;

    public function __construct()
    {
        $this->conx_db = new mysqli(
            $this->host_db,
            $this->user_db,
            $this->pwd_db,
            $this->name_db
        );
    }

    public function execute($sql, $params = null)
    {
        $stm = $this->conx_db->prepare($sql);
        $stm->execute();
        return $stm->get_result();
    }

    public function close()
    {
        $this->conx_db->close();
    }
}
