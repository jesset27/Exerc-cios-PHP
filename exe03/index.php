<?php require('../partials/header.php') ?>
<body>
    <?php require('../partials/navbar.php') ?>
    <div class="container">
    <div class="card text-center">
    <div class="card-header">
        Exercicio 3
    </div>
    <div class="card-body">
        <img src="./img/talao.png" class="img-fluid"> 
        <h5 class="card-title">Calculo de Prestações</h5><br>   
        <form action="#" method="POST">
            <div class="row">
                <div class="col col-md-4-mb-3">
                <input type="number" name="total_installments" class="form-control" placeholder="Total de Prestações" required>
                </div>
                <div class="col">
                <input type="number" name="paid_installments" class="form-control" placeholder="Total de Prestações Pagas" required>
                </div>
                <div class="col">
                <input type="number" name="value_installments" class="form-control" placeholder="Valor Atual da Prestação" required>
                </div>
            </div>
            <br>    
            <button type="submit" class="btn btn-outline-success btn-lg">Calcular</button>
        </form>
        <br>
        <?php    
            $total_installments = $paid_installments = $value_installments = 0;
            if (isset($_POST["total_installments"]) && isset($_POST["paid_installments"]) && isset($_POST["value_installments"])){
                $total_installments = $_POST["total_installments"];
                $paid_installments = $_POST["paid_installments"];
                $value_installments = $_POST["value_installments"];
                
                
                $saldo_devedor = ($total_installments - $paid_installments) * $value_installments;
                $prestacoes_sem_pagar = $total_installments - $paid_installments;
                

                echo "<div class='container'>
                        <div class='row'>
                            <div class='col-sm'>" 
                            . "Prestações Restantes: " . $prestacoes_sem_pagar .
                            "</div>";
                    echo "<div class='col-sm'>" 
                            . "Saldo Devedor: " . $saldo_devedor . 
                            " </div>
                    </div>
                </div>";
            }
        ?>
    </div>
    </div>
    </div>
        <?php require('../partials/footer.php') ?>
    </body>