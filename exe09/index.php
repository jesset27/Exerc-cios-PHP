<?php require('../partials/header.php') ?>
<body>
    <?php require('../partials/navbar.php') ?>
    <div class="container">
    <div class="card text-center">
    <div class="card-header">
        Exercicio 9
    </div>
    <div class="card-body">
        <h5 class="card-title">do While - Apresentar o total da soma obtida dos 100 primeiros números inteiros</h5><br>   
        <div class="alert alert-success" role="alert">
            <?php
            $number = 0;
            $sum = 0;
               do {
                $sum = $sum + $number;
                $number++;
               }while($number <= 100);
               echo "<h5>A soma total será: " . $sum . "</h5>";
            ?>  
        </div>
    </div>
    </div>
</body>