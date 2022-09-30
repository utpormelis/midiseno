<?php require_once("models/barra_model.php");
require_once("controllers/autos_controller.php"); 
require_once("utils/txtcentro_util.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
<!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
</head>
<body>
    <?php echo barra::mtbarra() ?>

    <div class="container-fluid">
        <br>
        <h3 <?php echo barra::centro() ?> >Bienvenidos a Car Rental ROBBIE </h3>
        <!-- Image card -->
        <center><div class="container-sm  ">
        <br>
        <div class="card text-center" style="width: 25rem; ">
            <img src="img/inicio.jpg" class="card-img-top" alt="...">
        </div></center>
    </div>

    <div class="container-sm">
            <br>
         <!-- text body -->
         <dl class="row">
            <dt class="col-sm-3">Description lists</dt>
            <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

            <dt class="col-sm-3">Term</dt>
            <dd class="col-sm-9">
                <p>Definition for the term.</p>
                <p>And some more placeholder definition text.</p>
            </dd>

            <dt class="col-sm-3">Another term</dt>
            <dd class="col-sm-9">This definition is short, so no extra paragraphs or anything.</dd>

            <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
            <dd class="col-sm-9">This can be useful when space is tight. Adds an ellipsis at the end.</dd>
        </dl>
        <!-- Button desplegable -->
        <div class="dropdown">
            <button class="btn btn-dark btn-outline-info dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-gear">&nbsp;Modifique su Busqueda</i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="index.php?mrk=Audi">Audi</a></li>
                <li><a class="dropdown-item" href="index.php?mrk=BMW">BMW</a></li>
                <li><a class="dropdown-item" href="index.php?mrk=Toyota">Toyota</a></li>
                <li><a class="dropdown-item" href="index.php?mrk=Honda">Honda</a></li>
            </ul>
            
        </div>
        <br>
    </div>

<div class="container-sm"> 
     <table class="table table-light table-striped table-hover table-bordered table-sm table-responsive-sm">
        <thead>
            <tr>
                <th scope="col" style="text-align: center">Id</th>
                <th scope="col" style="text-align: center">Marca</th>
                <th scope="col" style="text-align: center">Modelo</th>
                <th scope="col" style="text-align: center">Foto</th>
            </tr>
        </thead>
        <tbody>  
        <?php if(isset($_GET["mrk"])){?>
            <?php foreach(autos_controller::mostrar() as $actrl){ 
                $n2=$_GET["mrk"];
                if ($actrl->getmarca()==$n2){ ?>
                    <tr>
                        <th scope="row" <?php echo centro::txtcentro()?>><?php echo $actrl->getid() ?></th>
                        <td <?php echo centro::txtcentro()?>><?php echo $actrl->getmarca()?></td>
                        <td <?php echo centro::txtcentro()?>><?php echo $actrl->getmodelo()?></td>
                        <td >
                        <center><div class="card" style="width: 12rem" >
                                <img src="<?php echo $actrl->getfoto() ?>" class="card-img-top" alt="...">
                            </div></center>
                        </td>
                    </tr>
                <?php } ?>
            <?php } ?>
        <?php }  ?>
        </tbody>
    </table>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>