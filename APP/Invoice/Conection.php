<?php
namespace App;

use mysqli;

class InvoiceDao {
    private $user;
    private $pass;   
    private $server;
    private $db;
    private $con;

    function __construct() {
        $this->user = "root";
        $this->pass = "";
        $this->server = "localhost";
        $this->db = "invoice";
        $this->con = new mysqli($this->server, $this->user, $this->pass, $this->db);
    }
    
    public function all() {
        $datos = [];
        $resultado = $this->con->query("SELECT * FROM invoice;");
        while ($row = mysqli_fetch_array($resultado)){
            array_push($datos, new Factura($row['id'], $row['monto']));
        }
        return $datos;
    }

    public function save($invoice) {
        $this->con->query("INSERT INTO invoice(id, monto) VALUES('{$invoice->getId()}', '{$invoice->getMonto()}');");
    }

    public function close() {
        $this->con->close();
    }
 }

?>