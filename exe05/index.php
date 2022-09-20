<?php require("../partials/header.php") ?>
<body>
    <?php require('../partials/navbar.php') ?>
    <div class="container">
    <div class="card text-center">
    <div class="card-header">
        Exercicio 4
    </div>
    <div class="card-body">
        <img src="./img/number.jpg" class="img-fluid"> 
        <h5 class="card-title">Verificar Tipo de Número</h5><br>   
        <form action="#" method="GET">
            <div class="row">
                <div class="col col-md-4-mb-3">
                <input type="number" name="number" class="form-control" placeholder="Insira seu número aqui" required>
                </div>
            </div>
            <br>    
            <button type="submit" class="btn btn-outline-success btn-lg">Verificar</button>
        </form>
        <br>
        <?php    
            if (isset($_GET["number"])) {
                $number = $_GET["number"];
                
                echo $number % 2 == 0 ? "O número inserido é par" : "O número inserido é impar";
                echo $number > 0 ? " e é positivo!" : " e é negativo!";
            }
        ?>
    </div>
    </div>
    </div>
        <?php require('../partials/footer.php') ?>
</body>