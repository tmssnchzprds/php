<?php
require_once ("Dao.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MysqlDao
 *
 * @author jose
 */
class MysqlDao implements Dao {
    private $servidor="localhost";
    private $usuario="root";
    private $password="tomas";
    private $basedatos="tienda-virtual";
    private $idConexion;

    public function conectar() {
        $this->idConexion=mysql_connect($this->servidor, $this->usuario, $this->password);
        mysql_select_db($this->basedatos);
        
    }

    public function desconectar() {
        mysql_close($this->idConexion);
    }

    public function ejecutarSQL($consulta) {
        return mysql_query($consulta);
    }

    public function numeroFilas($resultado) {
        return mysql_num_rows($resultado);
    }

    public function leerFila($resultado) {
        return mysql_fetch_array($resultado);
    }

}
