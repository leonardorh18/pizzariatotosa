



<div id='area-principal'>

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
            <?php
            // $conexao = mysqli_connect("localhost", "admpizza", "12345", "pizza");
            // $sql = "select * from sabor";
            // $resultado = mysqli_query($conexao, $sql);
            // mysqli_close($conexao);            
            // while($array = mysqli_fetch_assoc($resultado)){ // para cada sabor

            require_once "classes/SaborDAO.php";
            $obj = new SaborDAO();
            $lista = $obj->listar(); 
            if(count($lista) == 0){
                echo "Nenhum sabor encontrado.";
            }
            else{
                foreach ($lista as $sabor){
                ?>            
                <div class="sabor">
                    <label>
                        <input type="checkbox" name="sabores[]" value="<?=$sabor->getCodigo()?>" onchange="updateCount()">
                        <div class="sabor_img">
                            <img src="imagens/<?=$sabor->getNomeImagem()?>" alt="<?=$sabor->getNome()?>">
                        </div>
                        <div class="sabor_descricao">
                            <strong><?=$sabor->getNome()?></strong>
                            <?=$sabor->getIngredientes()?>
                        </div>
                    </label>
                </div>
                <?php
                }
            }
            ?>
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
            <input type="submit" value="Adicionar ao carrinho" class= 'button-pedido' name="adicionar">
        </div>
    </form>

</div>
</div>
	


<script src="../js/pedido.js"></script>

