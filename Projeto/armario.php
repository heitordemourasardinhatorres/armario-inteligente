<!DOCTYPE HTML>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="format.css">
	<link rel="stylesheet" href="responsivo.css">
	<a href="https://lordicon.com/"></a>
	<link rel="icon" href="imagens/logo.png" type="image/x-icon">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
	<title>Armário Inteligente</title>
</head>

<body>

	<font size="7" class="tit_armario"> Armário Inteligente</font>

	<hr class="linha">

	<div class="registro">
		<a href="form.php"><button><p>Cadastro</p></button></a>
	</div>

	<div class="registro">
		<a href="login.php"><button><p>Login</p></button></a>
	</div>

	<nav class="menu">
        <article class="fundo_menu">
            <ul>
                <li>
                    <p>Home</p><a href="index.html" target="_self"><img src="imagens/casa.png" width="50"
                            height="50"></a>
                </li>
                <li>
                    <p>Armário</p><a href="armario.php" target="_self"><img src="imagens/armario.png" width="50"
                            height="50"></a>
                </li>
                <li>
                    <p>Estilos</p><a href="estilos.html" target="_self"><img src="imagens/camisa.png" width="50"
                            height="50"></a>
                </li>
                <li>
                    <p>Loja</p><a href="lojas.html" target="_self"><img src="imagens/bolsa.png" width="50"
                            height="50"></a>
                </li>
            </ul>
        </article>
    </nav>



	<div id="minhapecas">
		<ul>
			<li class="titulo">
				<font size="7"> Minhas peças</font>
			</li>
			<div id="peças">
				<details>
					<summary>
						Chapéus
					</summary>

					<div class="peca" id="peca_chapeus">
						<ul>
							<a class="input_add_peca" href="add_peca.php"> <img src="https://cdn-icons-png.flaticon.com/512/6048/6048657.png"></a>
							<li><img class="peca_style" src="peças/chap1.png"></li>
							<li><img class="peca_style" src="peças/chap2.png"></li>
							<li><img class="peca_style" src="peças/chap3.jpg"></li>
							<li><img class="peca_style" src="peças/chap4.png"></li>
							<li><img class="peca_style" src="peças/chap5.png"></li>
							<!-- As imagens serão carregadas dinamicamente aqui -->
							<?php
							// Defina o diretório onde as imagens estão armazenadas
							$pasta = "uploads/";

							// Abra o diretório e percorra os arquivos
							if (is_dir($pasta)) {
								if ($diretorio = opendir($pasta)) {
									while (($arquivo = readdir($diretorio)) !== false) {
										// Verifica se o arquivo é uma imagem (jpg, png, gif, etc.)
										$extensao = pathinfo($arquivo, PATHINFO_EXTENSION);
										// Verifica se o nome do arquivo corresponde ao padrão "_categoria_(numero)_"
										if (in_array(strtolower($extensao), ['jpg', 'jpeg', 'png', 'gif']) && preg_match("/_categoria_1_/", $arquivo)) {
											// Exibe a imagem em uma tag <img> dentro de uma tag <li>
											echo "<li><img class='peca_style'src='" . $pasta . $arquivo . "' alt='" . $arquivo . "'></li>";
										}
									}
									closedir($diretorio);
								}
							} else {
								echo "A pasta não foi encontrada.";
							}
							?>
						</ul>
					</div>
				</details>


				<details>
					<summary>Jóias </summary>
					<div class="peca">
						<ul>
							<a class="input_add_peca" href="add_peca.php"> <img src="https://cdn-icons-png.flaticon.com/512/6048/6048657.png"></a>
							<li><img class="peca_style" src="peças/joi1.png"></li>
							<li><img class="peca_style" src="peças/joi2.png"></li>
							<li><img class="peca_style" src="peças/joi3.png"></li>
							<li><img class="peca_style" src="peças/joi4.png"></li>
							<li><img class="peca_style" src="peças/joi5.png"></li>
							<!-- As imagens serão carregadas dinamicamente aqui -->
							<?php
							// Defina o diretório onde as imagens estão armazenadas
							$pasta = "uploads/";

							// Abra o diretório e percorra os arquivos
							if (is_dir($pasta)) {
								if ($diretorio = opendir($pasta)) {
									while (($arquivo = readdir($diretorio)) !== false) {
										// Verifica se o arquivo é uma imagem (jpg, png, gif, etc.)
										$extensao = pathinfo($arquivo, PATHINFO_EXTENSION);
										// Verifica se o nome do arquivo corresponde ao padrão "_categoria_(numero)_"
										if (in_array(strtolower($extensao), ['jpg', 'jpeg', 'png', 'gif']) && preg_match("/_categoria_2_/", $arquivo)) {
											// Exibe a imagem em uma tag <img> dentro de uma tag <li>
											echo "<li><img class='peca_style'src='" . $pasta . $arquivo . "' alt='" . $arquivo . "'></li>";
										}
									}
									closedir($diretorio);
								}
							} else {
								echo "A pasta não foi encontrada.";
							}
							?>
						</ul>
					</div>
				</details>

				<details>
					<summary>Óculos</summary>
					<div class="peca">
						<ul>
							<a class="input_add_peca" href="add_peca.php"> <img src="https://cdn-icons-png.flaticon.com/512/6048/6048657.png"></a>
							<li><img class="peca_style" src="peças/oc1.png"></li>
							<li><img class="peca_style" src="peças/oc2.png"></li>
							<li><img class="peca_style" src="peças/oc3.png"></li>
							<li><img class="peca_style" src="peças/oc4.png"></li>
							<li><img class="peca_style" src="peças/oc5.png"></li>
							<!-- As imagens serão carregadas dinamicamente aqui -->
							<?php
							// Defina o diretório onde as imagens estão armazenadas
							$pasta = "uploads/";

							// Abra o diretório e percorra os arquivos
							if (is_dir($pasta)) {
								if ($diretorio = opendir($pasta)) {
									while (($arquivo = readdir($diretorio)) !== false) {
										// Verifica se o arquivo é uma imagem (jpg, png, gif, etc.)
										$extensao = pathinfo($arquivo, PATHINFO_EXTENSION);
										// Verifica se o nome do arquivo corresponde ao padrão "_categoria_(numero)_"
										if (in_array(strtolower($extensao), ['jpg', 'jpeg', 'png', 'gif']) && preg_match("/_categoria_3_/", $arquivo)) {
											// Exibe a imagem em uma tag <img> dentro de uma tag <li>
											echo "<li><img class='peca_style'src='" . $pasta . $arquivo . "' alt='" . $arquivo . "'></li>";
										}
									}
									closedir($diretorio);
								}
							} else {
								echo "A pasta não foi encontrada.";
							}
							?>
						</ul>
					</div>


				</details>

				<details>
					<summary>Saia</summary>
					<div class="peca">
						<ul>
							<a class="input_add_peca" href="add_peca.php"> <img src="https://cdn-icons-png.flaticon.com/512/6048/6048657.png"></a>
							<li><img class="peca_style" src="peças/sai1.png"></li>
							<li><img class="peca_style" src="peças/sai2.png"></li>
							<li><img class="peca_style" src="peças/sai3.png"></li>
							<li><img class="peca_style" src="peças/sai4.png"></li>
							<li><img class="peca_style" src="peças/sai5.png"></li>
							<!-- As imagens serão carregadas dinamicamente aqui -->
							<?php
							// Defina o diretório onde as imagens estão armazenadas
							$pasta = "uploads/";

							// Abra o diretório e percorra os arquivos
							if (is_dir($pasta)) {
								if ($diretorio = opendir($pasta)) {
									while (($arquivo = readdir($diretorio)) !== false) {
										// Verifica se o arquivo é uma imagem (jpg, png, gif, etc.)
										$extensao = pathinfo($arquivo, PATHINFO_EXTENSION);
										// Verifica se o nome do arquivo corresponde ao padrão "_categoria_(numero)_"
										if (in_array(strtolower($extensao), ['jpg', 'jpeg', 'png', 'gif']) && preg_match("/_categoria_4_/", $arquivo)) {
											// Exibe a imagem em uma tag <img> dentro de uma tag <li>
											echo "<li><img class='peca_style'src='" . $pasta . $arquivo . "' alt='" . $arquivo . "'></li>";
										}
									}
									closedir($diretorio);
								}
							} else {
								echo "A pasta não foi encontrada.";
							}
							?>
						</ul>
					</div>


				</details>

				<details>
					<summary>Calça</summary>
					<div class="peca">
						<ul>
							<a class="input_add_peca" href="add_peca.php"> <img src="https://cdn-icons-png.flaticon.com/512/6048/6048657.png"></a>
							<li><img class="peca_style" src="peças/cal1.png"></li>
							<li><img class="peca_style" src="peças/cal2.png"></li>
							<li><img class="peca_style" src="peças/cal3.png"></li>
							<li><img class="peca_style" src="peças/cal4.png"></li>
							<li><img class="peca_style" src="peças/cal6.jpeg"></li>
							<!-- As imagens serão carregadas dinamicamente aqui -->
							<?php
							// Defina o diretório onde as imagens estão armazenadas
							$pasta = "uploads/";

							// Abra o diretório e percorra os arquivos
							if (is_dir($pasta)) {
								if ($diretorio = opendir($pasta)) {
									while (($arquivo = readdir($diretorio)) !== false) {
										// Verifica se o arquivo é uma imagem (jpg, png, gif, etc.)
										$extensao = pathinfo($arquivo, PATHINFO_EXTENSION);
										// Verifica se o nome do arquivo corresponde ao padrão "_categoria_(numero)_"
										if (in_array(strtolower($extensao), ['jpg', 'jpeg', 'png', 'gif']) && preg_match("/_categoria_5_/", $arquivo)) {
											// Exibe a imagem em uma tag <img> dentro de uma tag <li>
											echo "<li><img class='peca_style'src='" . $pasta . $arquivo . "' alt='" . $arquivo . "'></li>";
										}
									}
									closedir($diretorio);
								}
							} else {
								echo "A pasta não foi encontrada.";
							}
							?>
						</ul>
					</div>


				</details>

				<details>
					<summary>Bermuda </summary>
					<div class="peca">
						<ul>
							<a class="input_add_peca" href="add_peca.php"> <img src="https://cdn-icons-png.flaticon.com/512/6048/6048657.png"></a>
							<li><img class="peca_style" src="peças/berm1.png"></li>
							<li><img class="peca_style" src="peças/berm2.png"></li>
							<li><img class="peca_style" src="peças/berm3.png"></li>
							<li><img class="peca_style" src="peças/berm4.png"></li>
							<li><img class="peca_style" src="peças/berm5.png"></li>
							<!-- As imagens serão carregadas dinamicamente aqui -->
							<?php
							// Defina o diretório onde as imagens estão armazenadas
							$pasta = "uploads/";

							// Abra o diretório e percorra os arquivos
							if (is_dir($pasta)) {
								if ($diretorio = opendir($pasta)) {
									while (($arquivo = readdir($diretorio)) !== false) {
										// Verifica se o arquivo é uma imagem (jpg, png, gif, etc.)
										$extensao = pathinfo($arquivo, PATHINFO_EXTENSION);
										// Verifica se o nome do arquivo corresponde ao padrão "_categoria_(numero)_"
										if (in_array(strtolower($extensao), ['jpg', 'jpeg', 'png', 'gif']) && preg_match("/_categoria_6_/", $arquivo)) {
											// Exibe a imagem em uma tag <img> dentro de uma tag <li>
											echo "<li><img class='peca_style'src='" . $pasta . $arquivo . "' alt='" . $arquivo . "'></li>";
										}
									}
									closedir($diretorio);
								}
							} else {
								echo "A pasta não foi encontrada.";
							}
							?>
						</ul>
					</div>


				</details>

				<details>
					<summary>Camisa</summary>
					<div class="peca">
						<ul>
							<a class="input_add_peca" href="add_peca.php"> <img src="https://cdn-icons-png.flaticon.com/512/6048/6048657.png"></a>
							<li><img class="peca_style" src="peças/cam1.png"></li>
							<li><img class="peca_style" src="peças/cam2.png"></li>
							<li><img class="peca_style" src="peças/cam3.png"></li>
							<li><img class="peca_style" src="peças/cam4.jpeg"></li>
							<li><img class="peca_style" src="peças/cam5.jpeg"></li>
<!-- As imagens serão carregadas dinamicamente aqui -->
<?php
							// Defina o diretório onde as imagens estão armazenadas
							$pasta = "uploads/";

							// Abra o diretório e percorra os arquivos
							if (is_dir($pasta)) {
								if ($diretorio = opendir($pasta)) {
									while (($arquivo = readdir($diretorio)) !== false) {
										// Verifica se o arquivo é uma imagem (jpg, png, gif, etc.)
										$extensao = pathinfo($arquivo, PATHINFO_EXTENSION);
										// Verifica se o nome do arquivo corresponde ao padrão "_categoria_(numero)_"
										if (in_array(strtolower($extensao), ['jpg', 'jpeg', 'png', 'gif']) && preg_match("/_categoria_7_/", $arquivo)) {
											// Exibe a imagem em uma tag <img> dentro de uma tag <li>
											echo "<li><img class='peca_style'src='" . $pasta . $arquivo . "' alt='" . $arquivo . "'></li>";
										}
									}
									closedir($diretorio);
								}
							} else {
								echo "A pasta não foi encontrada.";
							}
							?>
						</ul>
					</div>


				</details>

				<details>
					<summary>Blusa/Jaqueta</summary>
					<div class="peca">
						<ul>
							<a class="input_add_peca" href="add_peca.php"> <img src="https://cdn-icons-png.flaticon.com/512/6048/6048657.png"></a>
							<li><img class="peca_style" src="peças/jaq1.png"></li>
							<li><img class="peca_style" src="peças/jaq2.png"></li>
							<li><img class="peca_style" src="peças/jaq3.png"></li>
							<li><img class="peca_style" src="peças/jaq4.png"></li>
							<li><img class="peca_style" src="peças/jaq5.png"></li>
							<!-- As imagens serão carregadas dinamicamente aqui -->
							<?php
							// Defina o diretório onde as imagens estão armazenadas
							$pasta = "uploads/";

							// Abra o diretório e percorra os arquivos
							if (is_dir($pasta)) {
								if ($diretorio = opendir($pasta)) {
									while (($arquivo = readdir($diretorio)) !== false) {
										// Verifica se o arquivo é uma imagem (jpg, png, gif, etc.)
										$extensao = pathinfo($arquivo, PATHINFO_EXTENSION);
										// Verifica se o nome do arquivo corresponde ao padrão "_categoria_(numero)_"
										if (in_array(strtolower($extensao), ['jpg', 'jpeg', 'png', 'gif']) && preg_match("/_categoria_8_/", $arquivo)) {
											// Exibe a imagem em uma tag <img> dentro de uma tag <li>
											echo "<li><img class='peca_style'src='" . $pasta . $arquivo . "' alt='" . $arquivo . "'></li>";
										}
									}
									closedir($diretorio);
								}
							} else {
								echo "A pasta não foi encontrada.";
							}
							?>
						</ul>
					</div>


				</details>

			</div>

	</div>
	<footer>
		<di<fov class="footer__alto">
			<ul class="footer__alto__categorias">
				<li class="footer__alto__categorias__colunas">
					<h1 class="footer__alto__titulo">SUPORTE</h1>
					<ul class="footer__alto__categorias__colunas__lista">
						<li class="footer__alto__categorias__colunas__lista__item">
							<a href="ajuda/faq.html" target="_self">Dúvidas Frequentes</a>
						</li>
						<li class="footer__alto__categorias__colunas__lista__item">
							<a href="ajuda/faq.html" target="_self">Atendimento ao Cliente</a>
						</li>
						<li class="footer__alto__categorias__colunas__lista__item">
							<a href="ajuda/entregas_fretes.html" target="_self">Entregas e Fretes</a>
						</li>
						<li class="footer__alto__categorias__colunas__lista__item">
							<a href="pessoal/pedidos.html" target="_self">Pedidos</a>
						</li>
						<li class="footer__alto__categorias__colunas__lista__item">
							<a href="ajuda/troca.html" target="_self">Trocas e Devoluções</a>
						</li>
						<li class="footer__alto__categorias__colunas__lista__item">
							<a href="ajuda/pagamentos.html" target="_self">Pagamentos</a>
						</li>
					</ul>
				</li>
				<li class="footer__alto__categorias__colunas">
					<h1 class="footer__alto__titulo">INFORMAÇÕES</h1>
					<ul class="footer__alto__categorias__colunas__lista">
						<li class="footer__alto__categorias__colunas__lista__item">
							<a href="index.html" target="_self">Sobre Nós</a>
						</li>
					</ul>
					<h1 class="footer__alto__titulo">Certificados<br>de Segurança</h1>
					<ul class="footer__alto__categorias__colunas__lista">
						<li class="footer__alto__categorias__colunas__lista__item">
							<img class="footer__alto__categorias__colunas__lista__item__certificado"
								src="certificados/certificado_generico.png">
						</li>
						<li class="footer__alto__categorias__colunas__lista__item">
							<img class="footer__alto__categorias__colunas__lista__item__certificado"
								src="certificados/certificado_google.png">
						</li>
					</ul>
				</li>
				<li class="footer__alto__categorias__colunas">
					<h1 class="footer__alto__titulo">SIGA-NOS</h1>
					<ul class="footer__alto__categorias__colunas__lista">
						<li class="footer__alto__categorias__colunas__lista__item">
							<ul class="footer__alto__categorias__colunas__lista__item__linha">
								<li><a href="https://whatsapp.com" target="_self"><img
											src="icons_redes_sociais/whatsapp.png"></a></li>
								<li><a href="https://instagram.com" target="_self"><img
											src="icons_redes_sociais/instagram.png"></a></li>
							</ul>
							<ul class="footer__alto__categorias__colunas__lista__item__linha">
								<li><a href="https://youtube.com" target="_self"><img
											src="icons_redes_sociais/youtube.png"></a></li>
								<li><a href="https://facebook.com" target="_self"><img
											src="icons_redes_sociais/facebook.png"></a></li>
							</ul>
						</li>
						<li class="footer__alto__categorias__colunas__lista__item">
							<ul class="footer__alto__categorias__colunas__lista__item__linha">
								<li><img class="footer__alto__categorias__colunas__lista__item__bandeira"
										src="bandeiras/bandeira_visa.png"></li>
								<li><img class="footer__alto__categorias__colunas__lista__item__bandeira"
										src="bandeiras/bandeira_elo.png"></li>
							</ul>
							<ul class="footer__alto__categorias__colunas__lista__item__linha">
								<li><img class="footer__alto__categorias__colunas__lista__item__bandeira"
										src="bandeiras/bandeira_mastercard.png"></li>
								<li><img class="footer__alto__categorias__colunas__lista__item__bandeira"
										src="bandeiras/bandeira_american_express.png"></li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
			</div>
			<div class="footer__baixo">
				<ul>
					<li><a href="cookies.html" target="_self">Configuração de Cookies</a></li>
					<li>|</li>
					<li><a href="/ajuda/dados_pessoais.html" target="_self">Requisições de dados pessoais</a></li>
					<li>|</li>
					<li><a href="/ajuda/termos_do_usuario.html" target="_self">Termos e Condições de Navegação</a></li>
					<li>|</li>
					<li><a href="/ajuda/faq.html" target="_self">Dúvidas Frequentes</a></li>
					<li>|</li>
					<li><a href="/ajuda/politica_de_privacidade" target="_self">Política de Privacidade</a></li>
				</ul>
			</div>
	</footer>
</body>

</html>







<!--	<details>
					<summary>Chapéus</summary>
					<div class="peca">
						<ul>	
							<a class="input_add_peca" href="add_peca.php"> <img src="https://cdn-icons-png.flaticon.com/512/6048/6048657.png"></a>
							<li><img class="peca_style" src="peças/chap1.png"></li>
							<li><img class="peca_style" src="peças/chap2.png"></li>
							<li><img class="peca_style" src="peças/chap3.jpg"></li>
							<li><img class="peca_style" src="peças/chap4.png"></li>
							<li><img class="peca_style" src="peças/chap5.png"></li>
						</ul>
					</div>
				</details>-->
