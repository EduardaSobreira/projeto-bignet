<?php

use Database\Database;

require_once "../src/model/Database.php";
$db = new Database();


$db ->insert(
    "INSERT INTO usuarios(nome, email, senha)
    values ('Eduarda' , 'eduardasobreira13@gmail.com' , '1234'); "
);

?>

<?php require_once "../src/views/header.php"; ?>


    <div class="login-central">
    <h1 style="color:red">\NETBIG/</h1>    
        <form method="post" action="receba.php">
            <div class= "form-group">
                <div class="row"> 
                    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-12">
                        <input type="email" class="form-control" name="email" placeholder="digite seu email" required/>
                        <br>
                        <input type="password" class="form-control" name="pass" placeholder="digite seu código" required />
                        <br><br>
                  </div>
                </div>
                <div class="row">
                        <input type="submit" value="Entrar" class="btn btn-outline-danger col-lg-5 offset-lg-1 col-sm-10" style="color:white" />&nbsp;
                        <input type="reset" value="Limpar" class="btn btn-outline-danger col-lg-5 col-sm-10" style="color:white"/>
                        <br><br>
                        <a href="receba.php"> entrar como visitante </a>
                    </div>
                </div>
            </div>
        </form>
    
<?php require_once "../src/views/footer.php";?>
