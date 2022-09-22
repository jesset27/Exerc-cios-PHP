<?php require('../partials/header.php') ?>
<body>
    <?php require('../partials/navbar.php') ?>
    <div class="container">
    <div class="card text-center">
    <div class="card-header">
        Exercicio 10
    </div>
    <div class="card-body">
        <h5 class="card-title">Série de Fibonacci</h5><br>   
            <?php
                $num1 = 0;
                $num2 = 1;
                $termo = 1;
                for($num = 0; $num < 25; $num++) {
                    echo "<br><h5>" . $termo . "° Termo: " . $num1 . "</h5></br>";
                    $num1 = $num1 + $num2;
                    $num2 = $num1 - $num2;
                    $termo++;
                }
            ?>  
    </div>
    </div>
    </div>
    <?php require('../partials/footer.php') ?>
</body>