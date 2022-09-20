<?php require("../partials/header.php") ?>
<body>
    <?php require("../partials/navbar.php"); ?>
    <div class="container">
    <div class="card text-center">
    <div class="card-header">
        Exercicio 2
    </div>
    <div class="card-body">
        <img src="./img/urna.jpeg" class="img-fluid"> 
        <h5 class="card-title">Calculo de Votos</h5><br>   
        <form action="#" method="POST">
            <div class="row">
                <div class="col col-md-4-mb-3">
                <input type="number" name="white_votes" class="form-control" placeholder="Total de Votos Brancos" required>
                </div>
                <div class="col">
                <input type="number" name="null_votes" class="form-control" placeholder="Total de Votos Nulos" required>
                </div>
                <div class="col">
                <input type="number" name="votes" class="form-control" placeholder="Total de Votos Válidos" required>
                </div>
            </div>
            <br>    
            <button type="submit" class="btn btn-outline-success btn-lg">Calcular</button>
        </form>
        <br>
        <?php    
            $white_votes = $null_votes = $votes = 0;
            if (isset($_POST["white_votes"]) && isset($_POST["null_votes"]) && isset($_POST["votes"])) {
                $white_votes = $_POST["white_votes"];
                $null_votes = $_POST["null_votes"];
                $votes = $_POST["votes"];

                $total_voters = $white_votes + $null_votes + $votes;
                
                $percent_white_votes = ($white_votes / $total_voters) * 100; // Porcentagem em branco
                $percent_null_votes = ($null_votes / $total_voters) * 100; // Porcentagem nulo
                $percent_votes_valid = ($votes / $total_voters) * 100; // Porcentagem validos

                echo "<div class='container'>
                        <div class='row'>
                            <div class='col-sm'>" 
                            . "Porcentagem de votos brancos: " . number_format($percent_white_votes, 2) .
                            " %</div>";
                    echo "<div class='col-sm'>" 
                            . "Porcentagem de votos nulos: " . number_format($percent_null_votes, 2) . 
                            " %</div>";
                    echo "<div class='col-sm'>" 
                        . "Porcentagem de votos validos: " . number_format($percent_votes_valid, 2) . 
                        " %</div>
                    </div>
                </div>";
                
                
            }
        ?>
    </div>
    </div>
    </div>
    <?php include("../partials/footer.php"); ?>
</body>