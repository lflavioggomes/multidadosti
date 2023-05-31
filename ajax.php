<?php
    require('DataRequest.php');

    $data = new DataRequest();

    if($_GET['tabela'] == "cliente")
    {
        $cliente = $data->dadosClientes();

    }else if($_GET['tabela'] == "usuario")
    {
        $cliente = $data->dadosFornecedores();

    }else if($_GET['tabela'] == "fornecedor")
    {
        $cliente = $data->dadosUsuarios();
    }else{
        $cliente = '';
    }
?>
    <div class="table-responsive">
    <table class="table table-hover">
    <thead>
    <tr>
        <th>
            Nome
        </th>
        <th>
            CPF
        </th>
        <th>
            Endereco
        </th>
        <th>
            Telefone
        </th>
        <th>
            Email
        </th>
    </tr>
    </thead>
    <tbody>
        <?php foreach($cliente as $valor): ?>
    <tr>
        <td>
           <?php echo $valor['nome']; ?>
        </td>
        <td>
        <?php echo $valor['cpf']; ?>
        </td>
        <td>
            <?php if($valor['endereco'] != ''): ?>
                <?php echo $valor['endereco']; ?>
            <?php else: ?>    
                <?php echo $valor['cidade']; ?>
            <?php endif; ?>    
        </td>
        <td>
        <?php echo $valor['telefone']; ?>
        </td>
        <td>
        <?php echo $valor['email']; ?>
            <!-- <span class="label label-sm label-success">
                Aprovado
            </span> -->
        </td>
    </tr>
    <?php endforeach; ?>
   
    </tbody>
    </table>
</div>

