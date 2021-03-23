<?php
session_start();

?>



<!DOCTYPE html>
<html>
<head>
	<title>Bem-vindo</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style_mod_v3.css">
	<link rel="stylesheet" type="text/css" href="css/bulma.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />

	<!-- aqui são os links dos favicon -->
	<link rel="icon" type="image/png" href="imagem/favicon.ico">

</head>
<body>
		
<header class="bg-primary fixed-top">

<div class="menu-phone">
	
	<img src="imagem/menu-abrir.png" id="img-1">
	<img src="imagem/menu.png" class="hidden" id="img-2">

</div>

<div class="aparecer-menu-phone" id="menu-aparecer">
	<li><a href="#">Inicio</a></li>
	<li><a href="#">Sobre</a></li>
	<li><a href="#">Fale conosco</a></li>
	<img src="imagem/trevo.png" width="100">
</div>

<div class="col-lg-12 central">
	<div class="col-sm-6 logo">
		<h4>GERADOR LOTO</h4>
		<img src="imagem/trevo.png" id="folha">
	</div>
</div>
  
</header>

<div class="col-lg-12 central-body">
	<div class="logo-login col-sm-6">
		
     <div class="icone-central" id="div-icone-central"> 
     	<img src="imagem/login.ico">
     	<h1>Login</h1>
     </div>
    
     <form action="cadastrar.php" method="POST" class="formulario" id="formulario">
			<span>Nome:</span>
			<input type="text" name="nome" class="form-control" placeholder="Por favor um nome">
			<span>Nome de usuario:</span>
			<input type="text" name="usuario" class="form-control" placeholder="Por favor crie um nome de usuario">
			<span>Senha:</span>
			<input type="password" name="senha" class="form-control" placeholder="Por favor Crie uma Senha">
			<button type="submit" class="button btn btn-dark" data-toggle="modal" data-target="#myModal" >cadastrar</button>
			</br>
            </br>
            </br>
	 </form>

	</div>

	<div class="form-login col-sm-6">
	
		<form action="login.php" method="POST">
			<span>Usuario:</span>
			<input type="text" name="usuario" class="form-control" placeholder="Nome de Usuario">
			<span>Senha:</span>
			<input type="password" name="senha" class="form-control" placeholder="Senha Cadastrada">
			<button type="submit" class="button btn btn-dark">Logar</button>
			</br>
            <span>Caso você não tenha uma conta:</span>
            <a href="#" id="Cadastre-se">Cadastre-se</a>
            </br>
            </br>

            <?php
            if(isset($_SESSION['nao_autenticado'])):
            ?>
            <div class="notification is-danger">
            <p>ERRO: Usuário ou senha inválidos.</p>
            </div>
            <?php
            endif;
            unset($_SESSION['nao_autenticado']);
            ?>

            <?php
             if (isset($_SESSION['status_cadastro'])):
            ?>
             <div class="notification is-success">
               <p>Cadastro efetuado!</p>
               <p>Faça login informando o seu usuário e senha <a href="login.php">aqui</a></p>
             </div>
             <?php
              endif; unset($_SESSION['status_cadastro']);
             ?>  
             <?php
              if (isset($_SESSION['usuario_existe'])):
             ?>
             <div class="notification is-info">
               <p>O usuário escolhido já existe. Informe outro e tente novamente.</p>
             </div>
             <?php
              endif; unset($_SESSION['usuario_existe']);
             ?>
		</form>
		
	</div>
</div>

<div class="col-lg-12 central-imagens">

    <div class="bg-primary anuncio-gif">
    	<p class="letras">
    		Vamos lá aqui vamos falar como funciona o gerador loto Muito simples usar você terá que se cadastra
    		feito isso vai aparecer os quatros jogos com 1 botão de gerar Sua chance de ganha é muito alta por que aqui nos fazemos comparação com os jogos anteriores para gerar um resultado. atenção será cobrado uma taxa de 1 real para poder usar o gerador
    	</p>
        <img src="imagem/trevo.gif">
    </div>

	<div class="col-lg-4 anuncio">
		<h3>Jogos que podemos gerar um resultado 80% estrategia 20% sorte não perca seu tempo e consulte o seu resultado</h3>
	</div>

	<div class="megasena">
		<img src="imagem/megasena.png" width="150">
		<span class="divulgacao">Carro dinheiro mansão ja penso nisso creio que sim então vamos lá você pode realizar seus sonhos</span>
	</div>

	<div class="lotofacil ">
		<img src="imagem/lotofacil.png" width="150">
		<span class="divulgacao">já penso em abri sua propria empresa então vamos lá você pode realizar seus sonhos</span>
	</div>

	<div class="quina">
		<img src="imagem/quina.png" width="150">
		<span class="divulgacao">Casas de aluguel e então só ficar de boa e então no final do mes pega sua grana</span>
	</div>

	<div class="lotomania">
		<img src="imagem/lotomania.png" width="150">
		<span class="divulgacao">Já penso em depositar sua grana em uma poupança para gerar mais dinheiro</span>
	</div>
    
</div>

<div class="col-lg-12 footer bg-primary">
	<div class="fale-conosco">
		<h1>Fale conosco</h1>
	</div>
	<div class="formulario-faleconosco">
		<h1>Email: xxxx.xx@xxxxxxx.com</h1>
        <h1>Tel: xxxxx-xxxx</h1>
        <h1 class="whats">Whatsapp</h1>
	</div>
	<div class="logo-whatsapp" id="bola">
		
	</div>
	<div class="bg-primary bola-blue">
			<img src="imagem/whats.png" width="300">
    </div>
</div>






<script type="text/javascript">
	
 

 function animar(){
 	let img_1 = document.getElementById("img-1");
    let img_2 = document.getElementById("img-2");
    let menu_phone = document.getElementById("menu-aparecer");

    img_1.addEventListener("click",function(){
    	img_1.style.display = "none";
    	img_2.style.display = "block";
    	menu_phone.style.display = "block";
    })

    img_2.addEventListener("click",function(){
    	img_2.style.display = "none";
    	img_1.style.display = "block";
    	menu_phone.style.display = "none";
    })
 }

 animar();


 function formulario(){
 	let pega_id = document.getElementById("Cadastre-se");
 	let pega_id_2 = document.getElementById("div-icone-central");
 	let pega_id_formulario = document.getElementById("formulario");
 	pega_id.addEventListener("click",function(){
    pega_id_2.style.display = "none";
    pega_id_formulario.style.display = "block";
 	})
 }

 formulario();

function lg_folha(){
	let pega_folha = document.getElementById("folha");
	let pega_img_one = document.getElementById("img-1");
	let pega_img_two = document.getElementById("img-2");
    
    pega_img_one.addEventListener("click",function(){
    	pega_folha.style.display = "none";
    })

    pega_img_two.addEventListener("click",function(){
    	pega_folha.style.display = "block";
    })

}

lg_folha();



</script>

</body>
</html>