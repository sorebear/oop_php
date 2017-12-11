<?php 

require_once("new_config.php");

class Database {

    public $connection;

    function __construct() {
        $this->open_db_connection();
    }

    public function open_db_connection() {
        $this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        
        if (mysqli_connect_errno()) {

            die("Database connected failed" . mysqli_error());

        }

        if ($this->connection) {
            echo "True";
        }
    }

    public function query($sql) {

        $result = mysqli_query($this->connection, $sql);
        if (!$result) {
            die("Query Failed");
        }

        return $result;

    }
}

$database = new Database();

?>