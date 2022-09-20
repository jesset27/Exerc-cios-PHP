<?php require('../partials/header.php'); ?>
<body>
    <?php require('../partials/navbar.php'); ?>
    <div class="container">
    <div class="card text-center">
    <div class="card-header">
        Exercicio 3
    </div>
    <div class="card-body">
        <img src="./img/triangulos.webp" class="img-fluid"> 
        <h5 class="card-title">Verificar Tipo de Triângulo</h5><br>   
        <form action="#" method="POST">
            <div class="row">
                <div class="col col-md-4-mb-3">
                <input type="number" name="lado_a" class="form-control" placeholder="Lado A" required>
                </div>
                <div class="col">
                <input type="number" name="lado_b" class="form-control" placeholder="Lado B" required>
                </div>
                <div class="col">
                <input type="number" name="lado_c" class="form-control" placeholder="Lado C" required>
                </div>
            </div>
            <br>    
            <button type="submit" class="btn btn-outline-success btn-lg">Calcular</button>
        </form>
        <br>
        <?php    
            if (isset($_POST["lado_a"]) && isset($_POST["lado_b"]) && isset($_POST["lado_c"])) {
                $lado_a = $_POST["lado_a"];
                $lado_b = $_POST["lado_b"];
                $lado_c = $_POST["lado_c"];
                if ($lado_a + $lado_b > $lado_c && $lado_a + $lado_c > $lado_b && $lado_b + $lado_c > $lado_a) {
                    if ($lado_a == $lado_b && $lado_a == $lado_c) {
                        echo "Triângulo Equilátero";
                    } else {
                        if ($lado_a == $lado_b || $lado_a == $lado_c || $lado_b == $lado_c) {
                            echo "Triângulo Isóceles"; 
                        } else {
                            echo "Triângulo Escaleno";
                        }
                    }
                } else {
                    echo "Não forma triângulo";
                }
            }
        ?>
    </div>
    </div>
    </div>
        <?php require('../partials/footer.php') ?>
</body>