<?php require('../partials/header.php') ?>
<body>
    <?php require('../partials/navbar.php') ?>
    <div class="container">
    <div class="card text-center">
    <div class="card-header">
        Exercicio 4
    </div>
    <div class="card-body">
        <img src="./img/prova.jpg" width="400px" class="img-fluid">
        <h5 class="card-title">Verificar nota do Aluno</h5><br>   
        <form action="#" method="GET">
            <div class="row">
                <div class="col col-md-4-mb-3">
                <input type="text" name="name" class="form-control" placeholder="Insira o nome " required> 
                </div>
                <div class="col col-md-4-mb-3">
                <input type="number" name="nota1" class="form-control" placeholder="Insira a nota 1" required>
                </div>
                <div class="col col-md-4-mb-3">
                <input type="number" name="nota2" class="form-control" placeholder="Insira a nota 2" required>
                </div>
                <div class="col col-md-4-mb-3">
                <input type="number" name="nota3" class="form-control" placeholder="Insira a nota 3" required>
                </div>
                <div class="col col-md-4-mb-3">
                    <input type="number" name="nota4" class="form-control" placeholder="Insira a nota 4" required>
                </div>
            </div>
            <br>    
            <button type="submit" class="btn btn-outline-success btn-lg">Verificar</button>
        </form>
            <br>
            
            <br>
            <?php    
                $media = 0;
                $display = "style='display:none;'";
                if (isset($_GET["name"]) && isset($_GET["nota1"]) && isset($_GET["nota2"]) && isset($_GET["nota3"]) && isset($_GET["nota4"])) {
                    $name = $_GET["name"];
                    $nota1 = $_GET["nota1"];
                    $nota2 = $_GET["nota2"];
                    $nota3 = $_GET["nota3"];
                    $nota4 = $_GET["nota4"];

                    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
                    if ($media >= 7) echo "O aluno " . $name . " terá a média: " . $media . " e sera aprovado";
                    else if ($media <= 6) {
                        $display = "style='display:block;'";
                    }
                }
            ?> 


        <form action="#" method="GET" <?= $display ?>>
            <div class="row">
                <div class="col col-md-4-mb-3">
                    <h5>Aluno precisará de exame</h5><br>
                    <input name="n_1" type="hidden" step=".25" value="<?= $nota1 ?>">
                    <input name="n_2" type="hidden" step=".25" value="<?= $nota2 ?>">
                    <input name="n_3" type="hidden" step=".25" value="<?= $nota3 ?>">
                    <input name="n_4" type="hidden" step=".25" value="<?= $nota4 ?>">
                    <input name="name" type="hidden" step=".25" value="<?= $name ?>">
                    <input type="text" name="exame" class="form-control" placeholder="Insira a nota do exame" value="" required>
                </div>
            </div>
            <br>    
            <button type="submit" class="btn btn-outline-success btn-lg">Verificar</button><br>
            </form><br>
        <?php 
        if (isset($_GET["n_1"]) ){
            $name = $_GET["name"];
            $n_1 = $_GET["n_1"];
            $n_2 = $_GET["n_2"];
            $n_3 = $_GET["n_3"];
            $n_4 = $_GET["n_4"];
            $exame = $_GET["exame"];
            $newMedia = ($n_1 + $n_2 + $n_3 + $n_4 + $exame) / 5;
            if ($newMedia >= 5) {
                echo "O aluno " . $name . " foi aprovodo no exame com nota: " . $newMedia;
            } else {
                echo "O aluno " . $name . " sera reprovado com a média: " . $newMedia;
            }
        }

        ?>
    </div>
    </div>
    </div>
        <?php require('../partials/footer.php') ?>
</body>