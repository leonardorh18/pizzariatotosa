<!DOCTYPE html>
<html>
	
<head>
	<title>Pedidos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Pizzaria Totosa">
	<meta name="keywords" content="Pizza, totosa, Pizzaria">
	<meta name="author" content="Leonardo H. Rocha">

</head>
<body>

	<?php include "header.php"?>
	<div id='area-principal'>

	<?php include "aside.php"?>
	<div id="principal-pedido"> 
    <form action="carrinho.php" method="post" onsubmit="return addToCart()">
            <label for="tamanho">Selecione o tamanho da pizza:</label>
            <select name="tamanho" id="tamanho" onchange="selectPizzaSize()">
                <option value="">---- Selecione ----</option>
                <option value="b">Broto</option>
                <option value="p">Pequena</option>
                <option value="m">Média</option>
                <option value="g">Grande</option>
                <option value="gg">Gigante</option>
            </select>
            <br>
            <br>
            <div id="opcoes_pedido">
                <p>Você selecionou <strong id="numSabores">0</strong> de <strong id="limiteSabores">0</strong> sabores</p>
                <div id="lista_sabores">
                    <!-- container -->
                    <div class="sabor">
                        <label>
                            <input type="checkbox" name="sabores[]" value="" onchange="updateCount()">
                            <div class="sabor_img">
                                <img src="imagens/calabresa.jpg" alt="calabresa">
                            </div>
                            <div class="sabor_descricao">
                                <strong>Calabresa</strong>
                                Molho, calabresa e mussarela
                            </div>
                        </label>
                    </div>

                    <div class="sabor">
                        <label>
                            <input type="checkbox" name="sabores[]" value="" onchange="updateCount()">
                            <div class="sabor_img">
                                <img src="imagens/alho.jpg" alt="alho e óleo">
                            </div>
                            <div class="sabor_descricao">
                                <strong>Alho e Óleo</strong>
                                Molho, alho, óleo e mussarela
                            </div>
                        </label>
                    </div>

                    <div class="sabor">
                        <label>
                            <input type="checkbox" name="sabores[]" value="" onchange="updateCount()">
                            <div class="sabor_img">
                                <img src="imagens//atum.jpg" alt="atum">
                            </div>
                            <div class="sabor_descricao">
                                <strong>Atum</strong>
                                Molho, Atum, cebola e mussarela
                            </div>
                        </label>
                    </div>

                    <div class="sabor selecionado">
                        <label>
                            <input type="checkbox" name="sabores[]" value="" onchange="updateCount()">
                            <div class="sabor_img">
                                <img src="imagens/marguerita.jpg" alt="marguerita">
                            </div>
                            <div class="sabor_descricao">
                                <strong>Marguerita</strong>
                                Molho, mussarela, manjericão, tomate
                            </div>
                        </label>
                    </div>

                    <div class="sabor selecionado">
                        <label>
                            <input type="checkbox" name="sabores[]" value="" onchange="updateCount()">
                            <div class="sabor_img">
                                <img src="imagens//milho.jpg" alt="milho">
                            </div>
                            <div class="sabor_descricao">
                                <strong>Milho</strong>
                                Molho, milho e mussarela
                            </div>
                        </label>
                    </div>

                    <div class="sabor">
                        <label>
                            <input type="checkbox" name="sabores[]" value="" onchange="updateCount()">
                            <div class="sabor_img">
                                <img src="imagens/vegetariana.jpg" alt="vegetariana">
                            </div>
                            <div class="sabor_descricao">
                                <strong>Vegetariana</strong>
                                Molho, rúcula, tomate seco e mussarela
                            </div>
                        </label>
                    </div>

                    <div class="sabor">
                        <label>
                            <input type="checkbox" name="sabores[]" value="" onchange="updateCount()">
                            <div class="sabor_img">
                                <img src="imagens/mussarela.jpg" alt="mussarela">
                            </div>
                            <div class="sabor_descricao">
                                <strong>Mussarela</strong>
                                Molho, mussarela e orégano
                            </div>
                        </label>
                    </div>

                    <div class="sabor">
                        <label>
                            <input type="checkbox" name="sabores[]" value="" onchange="updateCount()">
                            <div class="sabor_img">
                                <img src="imagens/strogonoff.jpg" alt="strogonoff">
                            </div>
                            <div class="sabor_descricao">
                                <strong>Strogonoff</strong>
                                Molho, strogonoff e batata palha
                            </div>
                        </label>
                    </div>

                    <div class="sabor selecionado">
                        <label>
                            <input type="checkbox" name="sabores[]" value="" onchange="updateCount()">
                            <div class="sabor_img">
                                <img src="imagens/frango.jpg" alt="frango">
                            </div>
                            <div class="sabor_descricao">
                                <strong>Frango</strong>
                                Molho, frango, catupiry e mussarela
                            </div>
                        </label>
                    </div>
                </div> <!-- fim container -->
                <br><br>
                <fieldset>
                    <legend>Selecione a opção de borda:</legend>
                    <label><input type="radio" name="borda" value="" checked>Sem borda</label><br>
                    <label><input type="radio" name="borda" value="">Catupiry</label><br>
                    <label><input type="radio" name="borda" value="">Cheddar</label><br>
                    <label><input type="radio" name="borda" value="">Chocolate</label><br>
                </fieldset>
                <br><br>
                <input type="submit" value="Adicionar ao carrinho" name="adicionar">
            </div>
        </form>

	</div>
	</div>
	<?php include "footer.php"?>

</body>
<script src="js/pedido.js"></script>
</html>