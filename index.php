<?php
require_once 'modelo/claseProducto.php';
require_once 'modelo/claseProveedor.php';

#Instanciar Proveedor
$j1 = new Proveedor();
$j1->Id = 1;
$j1->Nombre = 'Bart';
$j1->Cuil = '12325434';
$j1->Direccion = 'Avenida Siempreviva 742';
$j1->Telefono = '3563663453';

$j2 = new Proveedor();
$j2->Id = 2;
$j2->Nombre = 'Homero';
$j2->Cuil = '6443536';
$j2->Direccion = 'Avenida Siempreviva 742';
$j2->Telefono = '123945';


#Instanciar clase producto
$claseProd = new Producto();
$claseProd->Id = 1;
$claseProd->Nombre = 'Patineta';
$claseProd->Codigo = "UHV435";
$claseProd->Precio = 546 . "$";
$claseProd->Marca = 'Hot-Wheels';
$claseProd->ListaProveedores[] = $j1;
$claseProd->ListaProveedores[] = $j2;
$claseProd->MostrarInformacion();
