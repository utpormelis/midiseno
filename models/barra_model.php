<?php 

class barra{

    public static function mtbarra(){
        return
        '
        <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><i class="bi bi-cart-check">&nbsp;Alquileres Robbie </i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="autos.php">Autos Disponibles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disable" href="#">Cotizar-Reservar</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Otros
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">N.A</a></li>
                            <li><a class="dropdown-item" href="#">N.A</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="https://www.instagram.com/oaib_2510/">Visitame en IG</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>';
    }

    public static function centro(){
        return
        'style="text-align: center" class="align-middle"';
    }

}
