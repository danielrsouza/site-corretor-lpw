<div class="col-md-9">
<h3 class= "page-header align-center text-center titulos">Lista de Clientes</h3>
    <table class="table table-striped"> <!-- Inicio table -->
        <thead class="bg-dark text-center"> <!-- Inicio thead -->
            <tr>
                <th style="text-align:center; color: white;">Nome</th>
                <th style="text-align:center; color: white;" >Telefone</th>
                <th style="text-align:center; color: white;">Email</th>
                <th style="text-align:center; color: white;">Descrição</th>
                <th style="text-align:center; color: white;"></th>
                <th style="text-align:center; color: white;">Editar/Excluir</th>
            </tr>
        </thead> <!-- Fim thead -->
        <?php foreach($clientes as $cliente) : ?>
        <tbody> <!-- Inicio tbody -->
            <tr class="text-center">
                <td><?=$cliente['nome']?></td>
                <td><?=$cliente['telefone']?></td>
                <td><?=$cliente['email']?></td>
                <td><?=$cliente['descricao']?></td>
                <td></td>
                <td>
                    <a href="editar/<?=$cliente['id']?>"><span><img class="icons" src="../public/icons/icon-editar.png" alt="Editar"></span></a>
                    <a href="excluir/<?=$cliente['id']?>"><img class="icons" src="../public/icons/icon-excluir.png" alt="Editar"></a>
                </td>
            </tr>
        </tbody> <!-- Fim tbody -->
        <?php endforeach ?>
    </table> <!-- Fim Table -->

