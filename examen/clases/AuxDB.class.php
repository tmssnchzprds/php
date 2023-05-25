<?php
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
class AuxDB {
    private $servidor="192.168.2.220";
    private $usuario="root";
    private $password="sexpe2010";
    private $basedatos="inmobiliaria-profesor_dbo";
    private $strcon;

    public function conectar() {
        $this->strcon=mysql_connect($this->servidor, $this->usuario, $this->password);
        mysql_select_db($this->basedatos);
        
    }

    public function desconectar() {
        mysql_close($this->strcon);
    }

    public function ejecutarSQL($consulta) {
        return mysql_query($consulta);
    }

    public function numeroFilas($resultado) {
        return mysql_num_rows($resultado);
    }

    public function siguienteFila($resultado) {
        return mysql_fetch_array($resultado);
    }

}
