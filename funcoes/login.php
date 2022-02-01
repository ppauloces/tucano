<?php
require("conn.php");

$login = $_POST['username'];
$senha = $_POST['password'];


$verifica = $pdo->prepare("SELECT * FROM usuarios WHERE nome_usuario = :login AND senha_usuario = :senha");
$verifica->bindParam(':login', $login);
$verifica->bindParam(':senha', $senha);
$verifica->execute();
$res_verifica = $verifica->rowCount();
$row_verifica = $verifica->fetch(PDO::FETCH_ASSOC);



if(empty($_POST['username']) || empty($_POST['password'])){
    echo "<script>
	Swal.fire({
		  icon: 'warning',
		  title: 'Oops...',
		  text: 'Você precisa preencher todos os campos!',
		  footer: ''
		})
	</script>";

    die;
        
} else if($res_verifica > 0){
    echo "<script>Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Logado com sucesso!',
        showConfirmButton: true,
        showCancelButton: false,
        confirmButtonText: 'Entrar',
        confirmButtonColor: '#3085d6',
        timer: 3500
      })</script>";
      echo "<script>setTimeout(function() { window.location.href = 'painel/index.php'; }, 800);</script>";
   
  if (!isset($_SESSION)) {
		session_start();
	}


$_SESSION['username'] = $login;

    //$verificar = $pdo->query("SELECT * from usuarios");
  

}else{
  echo "<script>Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: 'Usuário ou senha inválidos!',
    })</script>"; 
}
    
    //CRIA SESSAO SE FOR MAIOR QUE 0
    
	/*if (!isset($_SESSION)) {
		session_start();
	}


	$loginUsername=$login;
	$password=md5($senha);
	$MM_fldUserAuthorization = "";
	$MM_redirectLoginSuccess = "painel/index.php";
	$MM_redirectLoginFailed = "index.php?err";
	$MM_redirecttoReferrer = false;
  
    $loginStrGroup = "";
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $loginUsername = $_SESSION['email'];
    //$_SESSION['MM_UserGroup'] = $loginStrGroup;	    
   
    echo "<script>
    Swal.fire({
        icon: 'success',	
        title: 'Logado com sucesso.',
        text: 'Redirecionando...',
        showDenyButton: false,
        showCancelButton: false,
        confirmButtonText: 'Entrar',
        confirmButtonColor: '#3085d6',
      });
      </script>";
      echo "<script>setTimeout(function() { window.location.href = 'painel/index.php'; }, 1000);</script>";
}else{
    echo "<script>
	
	Swal.fire({
		  icon: 'error',
		  title: 'Oops...',
		  text: 'Dados não conferem ou usuário não cadastrado. Tente novamente!',
		  footer: ''
		});
	</script>";

    die;
    }*/




?>
