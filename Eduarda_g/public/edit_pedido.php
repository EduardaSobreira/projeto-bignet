<?php

use Database\Database;

if( isset($_GET['cod']) ) {
    $cod = $_GET['cod'];
} else {
    header('location: ../public/lista.php');
}

 require_once "../src/views/header_nav.php";

    require_once "../src/model/Database.php";
    $db = new Database();

    $resultDb = $db->select(
        "SELECT * FROM pedidos WHERE cod = $cod;"
    );

    //var_dump($resultDb);
?>

<form method="post" action="../src/banco/atualiza.php" onsubmit="confirm('Atualizar pedido?');">
    <h2>Atualização de dados</h2>
    <hr> Código: <br>
    <input type="text" name="cod" value="<?= $resultDb[0]->cod ?>" readonly />

    <hr> Itens: <br>
    <input type="text" name="itens" value="<?= $resultDb[0]->itens ?>" />

    <hr> Quantidade: <br>
    <input type="number" name="quant" value="<?= $resultDb[0]->quant ?>" min="1"/>
   
    <hr> Pagamento: <br>
            <div class="d-flex">
                <div class="col-lg-2 col-sm-4 form-check">
                    <input type="radio" class="form-check-input" name="pgto" value="Dinheiro" <?= ($resultDb[0]->pag == 'Dinheiro') ? 'checked' : '' ?> /> Dinheiro
                </div>
                <div class="col-lg-2 col-sm-4 form-check">
                    <input type="radio" class="form-check-input" name="pgto" value="Pix" <?= ($resultDb[0]->pag == 'Pix') ? 'checked' : '' ?>/> Pix
                </div>
                <div class="col-lg-2 col-sm-4 form-check">
                    <input type="radio" class="form-check-input" name="pgto" value="Cartão" <?= ($resultDb[0]->pag == 'Cartão') ? 'checked' : '' ?>/> Cartão
                </div>
            </div>
           
            <hr> Entrega: <br>
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <select name="entrega" required class="form-select">
                        <option value=" <?= $resultDb[0]->local ?> "> <?= $resultDb[0]->local ?> </option>
                        <option value="Intersul"> Intersul </option>
                        <option value="Stª Bárbara"> Stª Bárbara </option>
                        <option value="Umbu"> Umbu </option>
                        <option value="Salomé"> Salomé </option>
                        <option value="Centro"> Centro </option>
                    </select>
                </div>
            </div>
    <br>
    <input type="submit" value="Atualizar pedido" class="btn btn-primary" />
    <input type="reset" value="Reiniciar" class="btn btn-secondary" />
</form>

<?php require_once "../src/views/footer.php"; ?>

