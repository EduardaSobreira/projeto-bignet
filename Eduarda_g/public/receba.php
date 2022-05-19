<?php

use Database\Database;

    if(isset($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $email = null;
    }

    if(isset($_POST['pass'])) {
        $pass = $_POST['pass'];
    } else {
        $pass = null;
    }

//////////////////////////////////////////////////////////////////////

require_once "../src/model/Database.php";
$db  = new Database();

$resultDb = $db->select(
    "SELECT * FROM usuarios WHERE email = '$email'; "
);

if( isset($resultDb[0]) ) {
    $emailDb = $resultDb[0]->email;
    $senhaDb = $resultDb[0]->senha;
} else {
    $emailDb = null;
    $senhaDb = null;
}

//var_dump($resultDb[0]);

/////////////////////////////////////////////////////////////////////

    if($email != null && $pass != null) {
        if($email == $emailDb && $pass == $senhaDb) {
            $msg = 'Bem vindo!';
            $redirect = "<meta http-equiv='refresh' content='3; url=https://qi.edu.br' />";
        } else {
            $msg = 'Acesso negado!';
            $redirect = "<meta http-equiv='refresh' content='3; url=../index.php'/>";
        }
    }

require_once "../src/views/header_nav.php";
?>

<div class="container mt-3">

    <div class="text-center">
    <h1> <?= isset($msg) ? $msg : "Visitante" ?> </h1>
        <?= isset($redirect) ? $redirect : "<hr>" ?>
    </div>

        <form method="get" action="pedido.php">
            <b> Itens: </b><br>
            <div class="form-check form-switch">
                <input type="checkbox" class="form-check-input" name="ingrediente[]" value="Pão"/> Pão <br>
                <input type="checkbox" class="form-check-input" name="ingrediente[]" value="Alface"/> Alface <br>
                <input type="checkbox" class="form-check-input" name="ingrediente[]" value="Queijo"/> Queijo <br>
                <input type="checkbox" class="form-check-input" name="ingrediente[]" value="Molho especial"/> Molho especial <br>
                <input type="checkbox" class="form-check-input" name="ingrediente[]" value="Cebola"/> Cebola <br>
                <input type="checkbox" class="form-check-input" name="ingrediente[]" value="Picles"/> Picles <br>
                <input type="checkbox" class="form-check-input" name="ingrediente[]" value="Hamburguer"/> Hamburguer <br>
            </div>

            <hr> Quantidade: <br>
            <div class="row">
                <div class="col-1 col-lg-1 col-sm-6">
                    <input type="number" class="form-control" name="qtde" value="1" min="1"/>
                </div>
            </div>

            <hr> Pagamento: <br>
            <div class="d-flex">
                <div class="col-lg-2 col-sm-4 form-check">
                    <input type="radio" class="form-check-input" name="pgto" value="Dinheiro" checked/> Dinheiro
                </div>
                <div class="col-lg-2 col-sm-4 form-check">
                    <input type="radio" class="form-check-input" name="pgto" value="Pix" /> Pix
                </div>
                <div class="col-lg-2 col-sm-4 form-check">
                    <input type="radio" class="form-check-input" name="pgto" value="Cartão" /> Cartão
                </div>
            </div>
           
            <hr> Entrega: <br>
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <select name="entrega" required class="form-select">
                        <option value=""> Selecione... </option>
                        <option value="Intersul"> Intersul </option>
                        <option value="Stª Bárbara"> Stª Bárbara </option>
                        <option value="Umbu"> Umbu </option>
                        <option value="Salomé"> Salomé </option>
                        <option value="Centro"> Centro </option>
                    </select>
                </div>
            </div>

            <br>
            <br>
            <div class="row">
                <input type="submit" class="col-lg-4 offset-lg-2 btn btn-success" value="Enviar pedido"/>
                &nbsp;
                <input type="reset" class="col-lg-4 btn btn-danger" value="Apagar"/>
            </div>
           
        </form>
     
</div>        

<?php require_once "../src/views/footer.php" ?>