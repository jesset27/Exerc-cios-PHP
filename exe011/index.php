<?php require('../partials/header.php') ?>
<body>
    <?php require('../partials/navbar.php') ?>
    <div class="container">
    <div class="card text-center">
    <div class="card-header">
        Exercicio 11
    </div>
    <div class="card-body">
        <h5 class="card-title">Tatuada do 1 ao 100</h5><br>   
            <?php
            $count = 0;
            
            // echo $tabuada2 . " x " . $tabuada . " = " . $count . "<br>";
                    for ($tabuada2 = 1; $tabuada2 <= 100; $tabuada2++) {
                        $count = 0;
                        echo "<br>";
                        echo "<h5> Taduada do: " . $tabuada2 . "<h5>";
                        for ($tabuada = 1; $tabuada <= 10; $tabuada++) {
                            $count = $tabuada * $tabuada2;
                            echo $tabuada2 . " x " . $tabuada . " = " . $count . "<br>";
                        }
                    }
            
            ?>  
    </div>
    </div>
    </div>
    <?php require('../partials/footer.php') ?>
</body>