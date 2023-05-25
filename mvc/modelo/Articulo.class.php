<?php
require_once ("Categoria.class.php");
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
class Articulo {
    private $cod_articulo;
    private $nombre;
    private $descripcion;
    private $pvp;
    private $stock;
    private $oferta;
    private $novedad;
    private $foto;
    private $_categoria;
    
    function getCod_articulo() {
        return $this->cod_articulo;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getPvp() {
        return $this->pvp;
    }

    function getStock() {
        return $this->stock;
    }

    function getOferta() {
        return $this->oferta;
    }

    function getNovedad() {
        return $this->novedad;
    }

    function getFoto() {
        return $this->foto;
    }

    function get_categoria() {
        return $this->_categoria;
    }

        public function ver($cod_art) {
        $objMysqlDao=new MysqlDao();
        $objMysqlDao->conectar();
        $sql="SELECT * FROM articulos WHERE cod_articulo=".$cod_art;
        $resultado=$objMysqlDao->ejecutarSQL($sql);
        $objMysqlDao->desconectar();
        if ($objMysqlDao->numeroFilas($resultado)==1)
        {
        $registro_actual=$objMysqlDao->leerFila($resultado);
        $this->cod_articulo=$registro_actual["cod_articulo"];
        $this->nombre=$registro_actual["nombre"];
        $this->descripcion=$registro_actual["descripcion"];
        $this->pvp=$registro_actual["pvp"];
        $this->stock=$registro_actual["stock"];
        $this->oferta=$registro_actual["oferta"];
        $this->novedad=$registro_actual["novedad"];
        $this->foto=$registro_actual["foto"];
        
        $objCategoria=new Categoria();
        $objCategoria->ver($registro_actual["cod_categoria"]);
        $this->_categoria=$objCategoria;
        return true;
        } else {
        return false;    
        }
    }    
    public function buscar($pmin,$pmax,$cat=-1) {
        $articulos=array();
        $objMysqlDao=new MysqlDao();
        $objMysqlDao->conectar();
        $sql="CALL buscador(".$cat.",".$pmin.",".$pmax.");";
         $resultado=$objMysqlDao->ejecutarSQL($sql);
         $objMysqlDao->desconectar();
        if ($objMysqlDao->numeroFilas($resultado)!=0)
        {
            while ($filas=$objMysqlDao->leerFila($resultado)){
                $articulos[]=$filas;
            }
            return $articulos;
        } else{
            return false;
        }
    }
    public function listar($categoria=-1,$oferta=false,$novedad=false) {
        $articulos=array();
        $objMysqlDao=new MysqlDao();
        $objMysqlDao->conectar();
        $sql="SELECT * FROM articulos ";
        if($categoria!=-1)
        {
            $sql.="WHERE cod_categoria=".$categoria;
        }
        if($oferta==true)
        {
            $sql.="WHERE oferta=1";
        }
        if($novedad==true)
        {
            $sql.="WHERE novedad=1";
        }
         $resultado=$objMysqlDao->ejecutarSQL($sql);
         $objMysqlDao->desconectar();
        if ($objMysqlDao->numeroFilas($resultado)!=0)
        {
            while ($filas=$objMysqlDao->leerFila($resultado)){
                $articulos[]=$filas;
            }
            return $articulos;
        } else{
            return false;
        }
    }
}
