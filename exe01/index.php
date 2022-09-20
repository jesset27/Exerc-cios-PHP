<?php require("../partials/header.php") ?>
<body>
    <?php require("../partials/navbar.php"); ?>
    <div class="container">
    <div class="card text-center">
    <div class="card-header">
        Exercicio 1
    </div>
    <div class="card-body">
        <img src="./img/km.jpg" class="img-fluid"> 
        <h5 class="card-title">Calculo de Quilometragem</h5><br>   
        <form action="#" method="POST">
            <div class="row">
                <div class="col col-md-4-mb-3">
                <input type="number" name="km_start" class="form-control" placeholder="Quilometragem Inicial" required>
                </div>
                <div class="col">
                <input type="number" name="km_final" class="form-control" placeholder="Quilometragem Final" required>
                </div>
                <div class="col">
                <input type="number" name="litros" class="form-control" placeholder="Litros Consumidos" required>
                </div>
                <div class="col">
                <input type="text" name="valor_litro" class="form-control" placeholder="Preço do Litro do Combustivel" required>
                </div>
            </div>
            <br>    
            <button type="submit" class="btn btn-outline-success btn-lg">Calcular</button>
        </form>
        <br>
        <?php    
            if (isset($_POST["km_start"]) && isset($_POST["km_final"]) && isset($_POST["litros"]) && isset($_POST["valor_litro"])) {
                $km_start = $km_final = $litros = $valor_litro = 0;
                $distancia = $total_gasto = $consumo = 0;   
                $km_start = $_POST["km_start"];
                $km_final = $_POST["km_final"];
                $litros = $_POST["litros"];
                $valor_litro = $_POST["valor_litro"];
                $distancia = $km_final - $km_start; // Distancia Percorrida
                $total_gasto = $valor_litro * $distancia; // Total Gasto
                $consumo = $distancia / $litros; // Consumo por litro
                echo "<div class='container'>
                        <div class='row'>
                            <div class='col-sm'>" 
                            . "Distancia Percorrida: " . $distancia .
                            " KM </div>";
                    echo "<div class='col-sm'>" 
                            . "Valor Total Gasto: R$" . number_format($total_gasto, 2, ',') . 
                            " reais</div>";
                    echo "<div class='col-sm'>" 
                        . "Consumo do Carro: " . number_format($consumo, 2, ',') . 
                        " KM P/L</div>
                    </div>
                </div>";
            }
        ?>
    </div>
    </div>
    </div>
    <?php include("../partials/footer.php"); ?>
</body>