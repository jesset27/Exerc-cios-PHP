<?php require('../partials/header.php') ?>
<body>
    <?php require('../partials/navbar.php') ?>
    <div class="container">
    <div class="card text-center">
    <div class="card-header">
        Exercicio 8
    </div>
    <div class="card-body">
        <h5 class="card-title">While 15 à 200</h5><br>   

            <?php
            $number = 15;
                while ($number <= 200) 
                {
                    echo "<h5>" . $number . "</h5><br>";
                    $number++;
                }    
            ?>
    </div>
    </div>
    </div>
        <?php require('../partials/footer.php') ?>
</body>