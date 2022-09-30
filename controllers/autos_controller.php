<?php
require_once("models/autos_model.php");


class autos_controller{

    public static function mostrar(){
        $autos[]=new autos(1,"Audi","RS 3",65.00,5,"../img/carro1.jpg");
        $autos[]=new autos(2,"BMW","X2 M35!",56.00,7,"../img/carro2.jpg");
        $autos[]=new autos(3,"Toyota","RAV 4",47.00,5,"../img/carro3.jpg");
        $autos[]=new autos(4,"Honda","Pilot",44.00,8,"../img/carro4.jpg");
        $autos[]=new autos(5,"Toyota","Land Cruiser 300 VX",44.00,8,"../img/carro5.jpg");
        $autos[]=new autos(6,"Honda","2022 Civic Hatchback",44.00,8,"../img/carro6.jpg");
        $autos[]=new autos(7,"Audi","R8 Coué V10 2023",44.00,8,"../img/carro7.jpg");
        $autos[]=new autos(8,"Toyota","Hilux de Trabajo",44.00,8,"../img/carro8.jpg");
        $autos[]=new autos(9,"Audi","S7",44.00,8,"../img/carro9.jpg");
        $autos[]=new autos(10,"BMW","Serie 7",44.00,8,"../img/carro10.jpg");
        return $autos;
    }

}


?>