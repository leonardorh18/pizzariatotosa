



<main id = 'principal'>

<div id = 'area-principal'>
    <h2></h2>
    <hr>
    <br><br>
    <p>| <a href="clienteController.php?acao=cadastra">inserir novo</a> |</p>
    <table>
    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Endereco</th>
        <th>Nascimento</th>
    </tr>

    <?php
    if(count($lista) == 0){
        echo "<p>Nenhum sabor encontrado.</p>";
    }
    else{
        foreach ($lista as $cliente){
        ?>     
            <tr>
                <td><?=$cliente->getCodigo() ?></td>
                <td><?=$cliente->getNome() ?></td>
                <td><?=$cliente->getEmail() ?></td>
                <td><?=$cliente->getTelefone() ?></td>
                <td><?=$cliente->getEndereco() ?></td>
                <td><?=$cliente->getDataNascimento() ?></td>
                <td>
                <a href="clienteController.php?acao=altera&cod=<?=$cliente->getCodigo() ?>">alterar</a> 
                | 
                <a href="clienteController.php?acao=exclui&cod=<?=$cliente->getCodigo() ?>" 
                onclick="return confirm('Tem certeza de que deseja excluir este cliente?')">excluir</td>
            </tr>
        <?php
        }
    }
    ?>
    </table>
    </div>
</main>




