<?php require('../partials/header.php') ?>
<body>
    <?php require('../partials/navbar.php') ?>
    <div class="container">
    <div class="card text-center">
    <div class="card-header">
        Exercicio 4
    </div>
    <div class="card-body">
        <img src="./img/nadador.jpg" width="400px" class="img-fluid"> 
        <h5 class="card-title">Verificar Categoria do Nadador</h5><br>   
        <form action="#" method="GET">
            <div class="row">
                <div class="col col-md-4-mb-3">
                <input type="number" name="age" class="form-control" placeholder="Insira a idade do nadador" required>
                </div>
            </div>
            <br>    
            <button type="submit" class="btn btn-outline-success btn-lg">Verificar</button>
        </form>
        <br>
        <?php    
            if (isset($_GET["age"])) {
                $age = $_GET["age"];
                echo $age < 5 ? "Categoria Inexistente" : "";
                echo $age >= 5 && $age <= 7 ? "Categoria Infantil A" : "";
                echo $age >= 8 && $age <= 11 ? "Categoria Intantil B" : "";
                echo $age >= 12 && $age <= 13 ? "Categoria Juvenil A" : "";
                echo $age >= 14 && $age <= 17 ? "Categoria Juvenil B" : "";
                echo $age >= 18 ? "Maior de 18 anos" : "";
            }
        ?>
    </div>
    </div>
    </div>
        <?php require('../partials/footer.php') ?>
</body>