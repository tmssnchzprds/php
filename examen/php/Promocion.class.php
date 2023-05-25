<?php
require_once ("AuxDB.class.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Articulo
 *
 * @author jose
 */
class Promocion {
    private $nombre;
    private $descripcion;
    private $foto;
    private $provincia;
    private $codigo;
    
    function getNombre() {
        return $this->nombre;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getFoto() {
        return $this->foto;
    }

    function getProvincia() {
        return $this->provincia;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    function setProvincia($provincia) {
        $this->provincia = $provincia;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    
        public function visualizar($cod_promocion) {
        $objAuxDB=new AuxDB();
        $objAuxDB->conectar();
        $sql="SELECT nombre,descripcion,FotoPromocion,cod_provincia,cod_promocion FROM promociones WHERE cod_promocion=".$cod_promocion;
        $resultado=$objAuxDB->ejecutarSQL($sql);
        $objAuxDB->desconectar();
        if ($objAuxDB->numeroFilas($resultado)==1)
        {
        $registro_actual=$objAuxDB->siguienteFila($resultado);
        $this->nombre=$registro_actual["nombre"];
        $this->descripcion=$registro_actual["descripcion"];
        $this->foto=$registro_actual["FotoPromocion"];
        $this->provincia=$registro_actual["cod_provincia"];
        $this->codigo=$registro_actual["cod_promocion"];
        return true;
        } else {
        return false;    
        }
    }    
    public function actualizar($nombre,$descripcion,$foto,$provincia,$codigo) {
        $objAuxDB=new AuxDB();
        $objAuxDB->conectar();
        $sql="UPDATE promociones SET nombre='".$nombre."',descripcion='".$descripcion."',FotoPromocion='".$foto."',cod_provincia='".$provincia."' WHERE (cod_promocion='".$codigo."');";
         $resultado=$objAuxDB->ejecutarSQL($sql);
         $objAuxDB->desconectar();
        if ($resultado==true)
        {
            return true;
        } else{
            return false;
        }
    }
    public function listar() {
        $promociones=array();
        $objAuxDB=new AuxDB();
        $objAuxDB->conectar();
        $sql="SELECT nombre,descripcion,FotoPromocion,cod_provincia,cod_promocion FROM promociones";
        $resultado=$objAuxDB->ejecutarSQL($sql);
        while ($registro=$objAuxDB->siguienteFila($resultado))
        {
            $promociones[]=$registro;
        }
        $objAuxDB->desconectar();
        return $promociones;
    }
}
