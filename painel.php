<?php
session_start();
include('verifica_login.php');
?>

<!-- para ativar a janela modal só basta remover a tag de comentario na frente do modal(); ok -->

<!DOCTYPE html>
<html>
<head>
	<title>Gerador loto</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style_mod_v7.css">
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
		<div class="logado" id="folha">
			<h2 style="font-size: 100%; color: white;">Olá, <?php echo $_SESSION['nome'];?></h2>
			<h2><a href="logout.php" class="btn btn-danger" style="margin-top: -18px;">Sair</a></h2>
		</div>
	</div>
</div>

</header>

<div class="col-lg-12 central-jogos bg-primary">

	<div class="jogos_1">

		<div class="col-sm-6 papel-parede">
			<img src="imagem/quina.png" width="350">
		</div>
		<div class="bg-primary logo-bola">
			<img src="imagem/logo.png" width="705">
			<h1>80% Estrategia 20% sorte aqui você terá resultados estudados com uma alta posibilidade de acertos</h1>
		</div>

		<div class="col-lg-6 left" id="left">
		    
			<div class="numeracao"><span>20</span></div>
			<div class="numeracao"><span>19</span></div>
			<div class="numeracao"><span>18</span></div>
			<div class="numeracao"><span>17</span></div>
			<div class="numeracao"><span>16</span></div>
			<div class="numeracao"><span>15</span></div>
			<div class="numeracao"><span>14</span></div>
			<div class="numeracao"><span>13</span></div>
			<div class="numeracao"><span>12</span></div>
			<div class="numeracao"><span>11</span></div>
			<div class="numeracao"><span>10</span></div>
			<div class="numeracao"><span>9</span></div>
			<div class="numeracao"><span>8</span></div>
			<div class="numeracao"><span>7</span></div>
			<div class="numeracao"><span>6</span></div>
			<div class="numeracao"><span>5</span></div>
			<div class="numeracao"><span>4</span></div>
			<div class="numeracao"><span>3</span></div>
			<div class="numeracao"><span>2</span></div>
			<div class="numeracao"><span>1</span></div>
			<div class="numeracao"><span>40</span></div>
			<div class="numeracao"><span>39</span></div>
			<div class="numeracao"><span>38</span></div>
			<div class="numeracao"><span>37</span></div>
			<div class="numeracao"><span>36</span></div>
			<div class="numeracao"><span>35</span></div>
			<div class="numeracao"><span>34</span></div>
			<div class="numeracao"><span>33</span></div>
			<div class="numeracao"><span>32</span></div>
			<div class="numeracao"><span>31</span></div>
			<div class="numeracao"><span>30</span></div>
			<div class="numeracao"><span>29</span></div>
			<div class="numeracao"><span>28</span></div>
			<div class="numeracao"><span>27</span></div>
			<div class="numeracao"><span>26</span></div>
			<div class="numeracao"><span>25</span></div>
			<div class="numeracao"><span>24</span></div>
			<div class="numeracao"><span>23</span></div>
			<div class="numeracao"><span>22</span></div>
			<div class="numeracao"><span>21</span></div>
			<div class="numeracao"><span>60</span></div>
			<div class="numeracao"><span>59</span></div>
			<div class="numeracao"><span>58</span></div>
			<div class="numeracao"><span>57</span></div>
			<div class="numeracao"><span>56</span></div>
			<div class="numeracao"><span>55</span></div>
			<div class="numeracao"><span>54</span></div>
			<div class="numeracao"><span>53</span></div>
			<div class="numeracao"><span>52</span></div>
			<div class="numeracao"><span>51</span></div>
			<div class="numeracao"><span>50</span></div>
			<div class="numeracao"><span>49</span></div>
			<div class="numeracao"><span>48</span></div>
			<div class="numeracao"><span>47</span></div>
			<div class="numeracao"><span>46</span></div>
			<div class="numeracao"><span>45</span></div>
			<div class="numeracao"><span>44</span></div>
			<div class="numeracao"><span>43</span></div>
			<div class="numeracao"><span>42</span></div>
			<div class="numeracao"><span>41</span></div>
			<div class="numeracao"><span>80</span></div>
			<div class="numeracao"><span>79</span></div>
			<div class="numeracao"><span>78</span></div>
			<div class="numeracao"><span>77</span></div>
			<div class="numeracao"><span>76</span></div>
			<div class="numeracao"><span>75</span></div>
			<div class="numeracao"><span>74</span></div>
			<div class="numeracao"><span>73</span></div>
			<div class="numeracao"><span>72</span></div>
			<div class="numeracao"><span>71</span></div>
			<div class="numeracao"><span>70</span></div>
			<div class="numeracao"><span>69</span></div>
			<div class="numeracao"><span>68</span></div>
			<div class="numeracao"><span>67</span></div>
			<div class="numeracao"><span>66</span></div>
			<div class="numeracao"><span>65</span></div>
			<div class="numeracao"><span>64</span></div>
			<div class="numeracao"><span>63</span></div>
			<div class="numeracao"><span>62</span></div>
			<div class="numeracao"><span>61</span></div>

		</div>
		<div class="col-lg-6 right" id="right">
			
			<div class="numeracao_2"><span>20</span></div>
			<div class="numeracao_2"><span>19</span></div>
			<div class="numeracao_2"><span>18</span></div>
			<div class="numeracao_2"><span>17</span></div>
			<div class="numeracao_2"><span>16</span></div>
			<div class="numeracao_2"><span>15</span></div>
			<div class="numeracao_2"><span>14</span></div>
			<div class="numeracao_2"><span>13</span></div>
			<div class="numeracao_2"><span>12</span></div>
			<div class="numeracao_2"><span>11</span></div>
			<div class="numeracao_2"><span>10</span></div>
			<div class="numeracao_2"><span>9</span></div>
			<div class="numeracao_2"><span>8</span></div>
			<div class="numeracao_2"><span>7</span></div>
			<div class="numeracao_2"><span>6</span></div>
			<div class="numeracao_2"><span>5</span></div>
			<div class="numeracao_2"><span>4</span></div>
			<div class="numeracao_2"><span>3</span></div>
			<div class="numeracao_2"><span>2</span></div>
			<div class="numeracao_2"><span>1</span></div>
			<div class="numeracao_2"><span>40</span></div>
			<div class="numeracao_2"><span>39</span></div>
			<div class="numeracao_2"><span>38</span></div>
			<div class="numeracao_2"><span>37</span></div>
			<div class="numeracao_2"><span>36</span></div>
			<div class="numeracao_2"><span>35</span></div>
			<div class="numeracao_2"><span>34</span></div>
			<div class="numeracao_2"><span>33</span></div>
			<div class="numeracao_2"><span>32</span></div>
			<div class="numeracao_2"><span>31</span></div>
			<div class="numeracao_2"><span>30</span></div>
			<div class="numeracao_2"><span>29</span></div>
			<div class="numeracao_2"><span>28</span></div>
			<div class="numeracao_2"><span>27</span></div>
			<div class="numeracao_2"><span>26</span></div>
			<div class="numeracao_2"><span>25</span></div>
			<div class="numeracao_2"><span>24</span></div>
			<div class="numeracao_2"><span>23</span></div>
			<div class="numeracao_2"><span>22</span></div>
			<div class="numeracao_2"><span>21</span></div>
			<div class="numeracao_2"><span>60</span></div>
			<div class="numeracao_2"><span>59</span></div>
			<div class="numeracao_2"><span>58</span></div>
			<div class="numeracao_2"><span>57</span></div>
			<div class="numeracao_2"><span>56</span></div>
			<div class="numeracao_2"><span>55</span></div>
			<div class="numeracao_2"><span>54</span></div>
			<div class="numeracao_2"><span>53</span></div>
			<div class="numeracao_2"><span>52</span></div>
			<div class="numeracao_2"><span>51</span></div>
			<div class="numeracao_2"><span>50</span></div>
			<div class="numeracao_2"><span>49</span></div>
			<div class="numeracao_2"><span>48</span></div>
			<div class="numeracao_2"><span>47</span></div>
			<div class="numeracao_2"><span>46</span></div>
			<div class="numeracao_2"><span>45</span></div>
			<div class="numeracao_2"><span>44</span></div>
			<div class="numeracao_2"><span>43</span></div>
			<div class="numeracao_2"><span>42</span></div>
			<div class="numeracao_2"><span>41</span></div>
			<div class="numeracao_2"><span>80</span></div>
			<div class="numeracao_2"><span>79</span></div>
			<div class="numeracao_2"><span>78</span></div>
			<div class="numeracao_2"><span>77</span></div>
			<div class="numeracao_2"><span>76</span></div>
			<div class="numeracao_2"><span>75</span></div>
			<div class="numeracao_2"><span>74</span></div>
			<div class="numeracao_2"><span>73</span></div>
			<div class="numeracao_2"><span>72</span></div>
			<div class="numeracao_2"><span>71</span></div>
			<div class="numeracao_2"><span>70</span></div>
			<div class="numeracao_2"><span>69</span></div>
			<div class="numeracao_2"><span>68</span></div>
			<div class="numeracao_2"><span>67</span></div>
			<div class="numeracao_2"><span>66</span></div>
			<div class="numeracao_2"><span>65</span></div>
			<div class="numeracao_2"><span>64</span></div>
			<div class="numeracao_2"><span>63</span></div>
			<div class="numeracao_2"><span>62</span></div>
			<div class="numeracao_2"><span>61</span></div>

		</div>
		
		<div class="col-sm-6 div-button">
			<a href="#" class="botao btn-white btn-				 animate" id="animar">GERAR</a>
		</div>

		<div class="bg-primary col-lg-6 logo-bola-phone">
			<img src="imagem/logo.png" width="705">
			<span style="font-weight: 700;">80% Estrategia 20% sorte aqui você terá resultados estudados com uma alta posibilidade de acertos</span>
		</div>

	</div>
	<div class="jogos_2">

		<div class="col-sm-6 papel-parede">
			<img src="imagem/lotofacil.png" width="350">
		</div>

		<div class="bg-primary logo-bola">
			<img src="imagem/logo.png" width="705">
			<h1>80% Estrategia 20% sorte aqui você terá resultados estudados com uma alta posibilidade de acertos</h1>
		</div>

		<div class="col-lg-6 left">
			
		</div>
		<div class="col-lg-6 right">
			
		</div>
		
		<div class="col-sm-6 div-button">
			<a href="#" class="botao btn-white btn-				 animate">GERAR</a>
		</div>

		<div class="bg-primary col-lg-6 logo-bola-phone">
			<img src="imagem/logo.png" width="705">
			<span style="font-weight: 700;">80% Estrategia 20% sorte aqui você terá resultados estudados com uma alta posibilidade de acertos</span>
		</div>

	</div>
	<div class="jogos_3">

		<div class="col-sm-6 papel-parede">
			<img src="imagem/megasena.png" width="350">
		</div>

		<div class="bg-primary logo-bola">
			<img src="imagem/logo.png" width="705">
			<h1>80% Estrategia 20% sorte aqui você terá resultados estudados com uma alta posibilidade de acertos</h1>
		</div>

		<div class="col-lg-6 left">
			
		</div>
		<div class="col-lg-6 right">
			
		</div>
		
		<div class="col-sm-6 div-button">
			<a href="#" class="botao btn-white btn-				 animate">GERAR</a>
		</div>

		<div class="bg-primary col-lg-6 logo-bola-phone">
			<img src="imagem/logo.png" width="705">
			<span style="font-weight: 700;">80% Estrategia 20% sorte aqui você terá resultados estudados com uma alta posibilidade de acertos</span>
		</div>

	</div>
	<div class="jogos_4">

		<div class="col-sm-6 papel-parede">
			<img src="imagem/lotomania.png" width="350">
		</div>

		<div class="bg-primary logo-bola">
			<img src="imagem/logo.png" width="705">
			<h1>80% Estrategia 20% sorte aqui você terá resultados estudados com uma alta posibilidade de acertos</h1>
		</div>

		<div class="col-lg-6 left">
			
		</div>
		
		<div class="col-sm-6 div-button">
			<a href="#" class="botao btn-white btn-				 animate">GERAR</a>
		</div>

		<div class="bg-primary col-lg-6 logo-bola-phone">
			<img src="imagem/logo.png" width="705">
			<span style="font-weight: 700;">80% Estrategia 20% sorte aqui você terá resultados estudados com uma alta posibilidade de acertos</span>
		</div>
		
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

<!-- janela modal -->

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="bg-primary container modal-content">
    <span class="close">&times;</span>
    <img src="imagem/atencao.png" width="150">
    <h1>Atenção</h1>
    <div class="modal-body">
    	<span>Para gerar um resultado é necessário efetuar um pagamento de apenas 1 real só assim a empresa estara funcionando para efetuar o pagamento de funcionarios e assim contunuar fazendo calculos e pesquisas</span>
        </br>
        </br>
    	<span class="nodification">Ultima atualização dos resultados</span>
    	<span id="data" class="nodification"></span><span id="hora" class="nodification"></span>

    	<div class="lotos">
    		
    		<div class="wrap">
			  <button class="button">Pagar</button>
			</div>

    	</div>

    	<div class="body-footer">
    		<span>
    		Forma de pagamento e como funciona: Apos efetuar o pagamento será enviado um link da mesma plataforma
            mas com a liberação por 24 horas nosso sistema de resultado só funciona uma unica vez apos sair novos resultados
            nos estaremos atualizando nosso system-back-end para os usuarios fazer uma nova aposta vamos lá 1 real e você pode mudar
            a sua vida. 
    		</span>
    		<div class="logo-mercado-pg">
    			<img src="imagem/mercado_pago.png">
    		</div>
    	</div>

    </div>
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


<script type="text/javascript">
	
function animation(){
  

  let pega_id = document.getElementById("animar");
  pega_id.addEventListener("click",function(){

  	setTimeout(function(){

		pega_class[0].classList.add("resultado_pisca");
		pega_class[10].classList.add("resultado_pisca");
		pega_class[24].classList.add("resultado_pisca");
		pega_class[54].classList.add("resultado_pisca");
		pega_class[60].classList.add("resultado_pisca");
		pega_class[75].classList.add("resultado_pisca");
		pega_class[12].classList.add("resultado_pisca");
		pega_class[30].classList.add("resultado_pisca");
		pega_class[46].classList.add("resultado_pisca");
		pega_class[78].classList.add("resultado_pisca");
	    
	},5000)
  

  	let pega_class = document.getElementsByClassName('numeracao');
    pega_class[0].classList.add("pisca_pisca");
    pega_class[1].classList.add("pisca_pisca");
    pega_class[2].classList.add("pisca_pisca");
    pega_class[3].classList.add("pisca_pisca");
    pega_class[4].classList.add("pisca_pisca");
    pega_class[5].classList.add("pisca_pisca");
    pega_class[6].classList.add("pisca_pisca");
    pega_class[7].classList.add("pisca_pisca");
    pega_class[8].classList.add("pisca_pisca");
    pega_class[9].classList.add("pisca_pisca");
    pega_class[10].classList.add("pisca_pisca");
    pega_class[11].classList.add("pisca_pisca");
    pega_class[12].classList.add("pisca_pisca");
    pega_class[13].classList.add("pisca_pisca");
    pega_class[14].classList.add("pisca_pisca");
    pega_class[15].classList.add("pisca_pisca");
    pega_class[16].classList.add("pisca_pisca");
    pega_class[17].classList.add("pisca_pisca");
    pega_class[18].classList.add("pisca_pisca");
    pega_class[19].classList.add("pisca_pisca");
    pega_class[20].classList.add("pisca_pisca");
    pega_class[21].classList.add("pisca_pisca");
    pega_class[22].classList.add("pisca_pisca");
    pega_class[23].classList.add("pisca_pisca");
    pega_class[24].classList.add("pisca_pisca");
    pega_class[25].classList.add("pisca_pisca");
    pega_class[26].classList.add("pisca_pisca");
    pega_class[27].classList.add("pisca_pisca");
    pega_class[28].classList.add("pisca_pisca");
    pega_class[29].classList.add("pisca_pisca");
    pega_class[30].classList.add("pisca_pisca");
    pega_class[31].classList.add("pisca_pisca");
    pega_class[32].classList.add("pisca_pisca");
    pega_class[33].classList.add("pisca_pisca");
    pega_class[34].classList.add("pisca_pisca");
    pega_class[35].classList.add("pisca_pisca");
    pega_class[36].classList.add("pisca_pisca");
    pega_class[37].classList.add("pisca_pisca");
    pega_class[38].classList.add("pisca_pisca");
    pega_class[39].classList.add("pisca_pisca");
    pega_class[40].classList.add("pisca_pisca");
    pega_class[41].classList.add("pisca_pisca");
    pega_class[42].classList.add("pisca_pisca");
    pega_class[43].classList.add("pisca_pisca");
    pega_class[44].classList.add("pisca_pisca");
    pega_class[45].classList.add("pisca_pisca");
    pega_class[46].classList.add("pisca_pisca");
    pega_class[47].classList.add("pisca_pisca");
    pega_class[48].classList.add("pisca_pisca");
    pega_class[49].classList.add("pisca_pisca");
    pega_class[50].classList.add("pisca_pisca");
    pega_class[51].classList.add("pisca_pisca");
    pega_class[52].classList.add("pisca_pisca");
    pega_class[53].classList.add("pisca_pisca");
    pega_class[54].classList.add("pisca_pisca");
    pega_class[55].classList.add("pisca_pisca");
    pega_class[56].classList.add("pisca_pisca");
    pega_class[57].classList.add("pisca_pisca");
    pega_class[58].classList.add("pisca_pisca");
    pega_class[59].classList.add("pisca_pisca");
    pega_class[60].classList.add("pisca_pisca");
    pega_class[61].classList.add("pisca_pisca");
    pega_class[62].classList.add("pisca_pisca");
    pega_class[63].classList.add("pisca_pisca");
    pega_class[64].classList.add("pisca_pisca");
    pega_class[65].classList.add("pisca_pisca");
    pega_class[66].classList.add("pisca_pisca");
    pega_class[67].classList.add("pisca_pisca");
    pega_class[68].classList.add("pisca_pisca");
    pega_class[69].classList.add("pisca_pisca");
    pega_class[70].classList.add("pisca_pisca");
    pega_class[71].classList.add("pisca_pisca");
    pega_class[72].classList.add("pisca_pisca");
    pega_class[73].classList.add("pisca_pisca");
    pega_class[74].classList.add("pisca_pisca");
    pega_class[75].classList.add("pisca_pisca");
    pega_class[76].classList.add("pisca_pisca");
    pega_class[77].classList.add("pisca_pisca");
    pega_class[78].classList.add("pisca_pisca");
    pega_class[79].classList.add("pisca_pisca");
    pega_class[80].classList.add("pisca_pisca");
   
   
  })

  let pega_id_2 = document.getElementById("animar");
  pega_id_2.addEventListener("click",function(){
   
   setTimeout(function(){

		pega_class_2[0].classList.add("resultado_pisca");
		pega_class_2[15].classList.add("resultado_pisca");
		pega_class_2[30].classList.add("resultado_pisca");
		pega_class_2[77].classList.add("resultado_pisca");
		pega_class_2[19].classList.add("resultado_pisca");
		pega_class_2[22].classList.add("resultado_pisca");
		pega_class_2[8].classList.add("resultado_pisca");
		pega_class_2[3].classList.add("resultado_pisca");
		pega_class_2[4].classList.add("resultado_pisca");
		pega_class_2[44].classList.add("resultado_pisca");
	    
	},5000)


  	let pega_class_2 = document.getElementsByClassName('numeracao_2');
    pega_class_2[0].classList.add("pisca_pisca");
    pega_class_2[1].classList.add("pisca_pisca");
    pega_class_2[2].classList.add("pisca_pisca");
    pega_class_2[3].classList.add("pisca_pisca");
    pega_class_2[4].classList.add("pisca_pisca");
    pega_class_2[5].classList.add("pisca_pisca");
    pega_class_2[6].classList.add("pisca_pisca");
    pega_class_2[7].classList.add("pisca_pisca");
    pega_class_2[8].classList.add("pisca_pisca");
    pega_class_2[9].classList.add("pisca_pisca");
    pega_class_2[10].classList.add("pisca_pisca");
    pega_class_2[11].classList.add("pisca_pisca");
    pega_class_2[12].classList.add("pisca_pisca");
    pega_class_2[13].classList.add("pisca_pisca");
    pega_class_2[14].classList.add("pisca_pisca");
    pega_class_2[15].classList.add("pisca_pisca");
    pega_class_2[16].classList.add("pisca_pisca");
    pega_class_2[17].classList.add("pisca_pisca");
    pega_class_2[18].classList.add("pisca_pisca");
    pega_class_2[19].classList.add("pisca_pisca");
    pega_class_2[20].classList.add("pisca_pisca");
    pega_class_2[21].classList.add("pisca_pisca");
    pega_class_2[22].classList.add("pisca_pisca");
    pega_class_2[23].classList.add("pisca_pisca");
    pega_class_2[24].classList.add("pisca_pisca");
    pega_class_2[25].classList.add("pisca_pisca");
    pega_class_2[26].classList.add("pisca_pisca");
    pega_class_2[27].classList.add("pisca_pisca");
    pega_class_2[28].classList.add("pisca_pisca");
    pega_class_2[29].classList.add("pisca_pisca");
    pega_class_2[30].classList.add("pisca_pisca");
    pega_class_2[31].classList.add("pisca_pisca");
    pega_class_2[32].classList.add("pisca_pisca");
    pega_class_2[33].classList.add("pisca_pisca");
    pega_class_2[34].classList.add("pisca_pisca");
    pega_class_2[35].classList.add("pisca_pisca");
    pega_class_2[36].classList.add("pisca_pisca");
    pega_class_2[37].classList.add("pisca_pisca");
    pega_class_2[38].classList.add("pisca_pisca");
    pega_class_2[39].classList.add("pisca_pisca");
    pega_class_2[40].classList.add("pisca_pisca");
    pega_class_2[41].classList.add("pisca_pisca");
    pega_class_2[42].classList.add("pisca_pisca");
    pega_class_2[43].classList.add("pisca_pisca");
    pega_class_2[44].classList.add("pisca_pisca");
    pega_class_2[45].classList.add("pisca_pisca");
    pega_class_2[46].classList.add("pisca_pisca");
    pega_class_2[47].classList.add("pisca_pisca");
    pega_class_2[48].classList.add("pisca_pisca");
    pega_class_2[49].classList.add("pisca_pisca");
    pega_class_2[50].classList.add("pisca_pisca");
    pega_class_2[51].classList.add("pisca_pisca");
    pega_class_2[52].classList.add("pisca_pisca");
    pega_class_2[53].classList.add("pisca_pisca");
    pega_class_2[54].classList.add("pisca_pisca");
    pega_class_2[55].classList.add("pisca_pisca");
    pega_class_2[56].classList.add("pisca_pisca");
    pega_class_2[57].classList.add("pisca_pisca");
    pega_class_2[58].classList.add("pisca_pisca");
    pega_class_2[59].classList.add("pisca_pisca");
    pega_class_2[60].classList.add("pisca_pisca");
    pega_class_2[61].classList.add("pisca_pisca");
    pega_class_2[62].classList.add("pisca_pisca");
    pega_class_2[63].classList.add("pisca_pisca");
    pega_class_2[64].classList.add("pisca_pisca");
    pega_class_2[65].classList.add("pisca_pisca");
    pega_class_2[66].classList.add("pisca_pisca");
    pega_class_2[67].classList.add("pisca_pisca");
    pega_class_2[68].classList.add("pisca_pisca");
    pega_class_2[69].classList.add("pisca_pisca");
    pega_class_2[70].classList.add("pisca_pisca");
    pega_class_2[71].classList.add("pisca_pisca");
    pega_class_2[72].classList.add("pisca_pisca");
    pega_class_2[73].classList.add("pisca_pisca");
    pega_class_2[74].classList.add("pisca_pisca");
    pega_class_2[75].classList.add("pisca_pisca");
    pega_class_2[76].classList.add("pisca_pisca");
    pega_class_2[77].classList.add("pisca_pisca");
    pega_class_2[78].classList.add("pisca_pisca");
    pega_class_2[79].classList.add("pisca_pisca");
    pega_class_2[80].classList.add("pisca_pisca");

    // resultado da parte de baixo da tabela da quina //
  })
}
 
animation();



function modal(){

	window.addEventListener("load",function(){
		let modal = document.getElementById("myModal");
	    let span = document.getElementsByClassName("close")[0];

	    setInterval(function(){
          modal.style.display = "block";
	    },50)


// When the user clicks on <span> (x), close the modal
       span.onclick = function() {
       modal.style.display = "none";
    }

// When the user clicks anywhere outside of the modal, close it
       window.onclick = function(event) {
       if (event.target == modal) {
       modal.style.display = "none";
  }
}
	})


}

// depois tenho que desabilitar esse modal() para não ficar aparecendo o alerta janela ok //
// feito o sistema de resultado temos que abilitar novamente para aparece a janela //
//modal();


// configuração de data e horas tempo real //


function atualizaRelogio(){

			var momentoAtual = new Date();
			
			var vhora = momentoAtual.getHours();
			var vminuto = momentoAtual.getMinutes();
			var vsegundo = momentoAtual.getSeconds();
			
			var vdia = momentoAtual.getDate();
			var vmes = momentoAtual.getMonth() + 1;
			var vano = momentoAtual.getFullYear();
			
			if (vdia < 10){ vdia = "0" + vdia;}
			if (vmes < 10){ vmes = "0" + vmes;}
			if (vhora < 10){ vhora = "0" + vhora;}
			if (vminuto < 10){ vminuto = "0" + vminuto;}
			if (vsegundo < 10){ vsegundo = "0" + vsegundo;}

			dataFormat = vdia + " / " + vmes + " / " + vano;
			horaFormat = vhora + " : " + vminuto + " : " + vsegundo;

			document.getElementById("data").innerHTML = dataFormat;
			document.getElementById("hora").innerHTML = horaFormat;

			setTimeout("atualizaRelogio()",1000);
		}

		atualizaRelogio();



</script>
	
</body>
</html>

