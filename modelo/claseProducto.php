<?php

class Producto
{
    public $Id;
    public $Nombre;
    public $Codigo;
    public $Precio;
    public $Marca;
    public $ListaProveedores = array();

    public function MostrarInformacion()
    {
        echo '<hr>';
        echo '<--- Producto ---> <br>';
        echo '<hr>';
        echo 'ID: ' . $this->Id . '<br>';
        echo 'Nombre: ' . $this->Nombre . '<br>';
        echo 'Codigo: ' . $this->Codigo . '<br>';
        echo 'Precio: ' . $this->Precio . '<br>';
        echo 'Marca: ' . $this->Marca . '<br>';
        echo '<hr>';
        echo '<-- Lista proveedores: --> <br>';
        echo '<hr>';
        foreach ($this->ListaProveedores as $j) {
            echo 'ID: ' . $j->Id
                . '<br>' . 'Nombre: '
                . $j->Nombre . '<br>'
                . 'Cuil: ' . $j->Cuil . '<br>'
                . 'Direccion: ' . $j->Direccion . '<br>'
                . 'Telefono: ' . $j->Telefono . '<br> <hr>';
        }
    }
}
