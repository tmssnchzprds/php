<?php
require_once ("MysqlDao.class.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Categoria
 *
 * @author jose
 */
class Categoria {
    private $id_categoria;
    private $nombre;
    private $imagen;
    
            function getId_categoria() {
        return $this->id_categoria;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setId_categoria($id_categoria) {
        $this->id_categoria = $id_categoria;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    function getImagen() {
        return $this->imagen;
    }

    function setImagen($imagen) {
        $this->imagen = $imagen;
    }

        public function ver($id_cat) {
        $objMysqlDao=new MysqlDao();
        $objMysqlDao->conectar();
        $sql="SELECT * FROM categorias WHERE cod_categorias=".$id_cat;
        $resultado=$objMysqlDao->ejecutarSQL($sql);
        $objMysqlDao->desconectar();
        $registro_actual=$objMysqlDao->leerFila($resultado);
        $this->nombre=$registro_actual["nombre"];
        $this->id_categoria=$registro_actual["cod_categorias"];
        $this->imagen=$registro_actual["imagen"];
        
    }
    
    public function getCategorias() {
        $categorias=array();
        $objMysqlDao=new MysqlDao();
        $objMysqlDao->conectar();
        $sql="SELECT * FROM categorias";
        $resultado=$objMysqlDao->ejecutarSQL($sql);
        while ($registro=$objMysqlDao->leerFila($resultado))
        {
            $categorias[]=$registro;
        }
        $objMysqlDao->desconectar();
        return $categorias;
    }
}
