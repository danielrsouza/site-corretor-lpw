<div class="col-md-9">
<h3 class= "page-header align-center text-center titulos">Agenda</h3>
    <table class="table table-striped"> <!-- Inicio table -->
        <thead class="bg-dark text-center"> <!-- Inicio thead -->
            <tr>
                <th style="text-align:center; color: white;">Assunto</th>
                <th style="text-align:center; color: white;" >Data</th>
                <th style="text-align:center; color: white;">Horario</th>
                <th style="text-align:center; color: white;">Cliente</th>
                <th style="text-align:center; color: white;"></th>
                <th style="text-align:center; color: white;">Editar/Excluir</th>
            </tr>
        </thead> <!-- Fim thead -->
        <?php foreach($agenda as $age) : ?>
        <tbody> <!-- Inicio tbody -->
            <tr class="text-center">
                <td><?=$age['assunto']?></td>
                <td><?=date('d/m/y',strtotime($age['data']))?></td>
                <td><?=$age['horario']?></td>
                <td><strong><?=$age['nome']?></strong></td>
                <td></td>
                <td>
                    <a href="editar/<?=$age['id']?>"><span><img class="icons" src="../public/icons/icon-editar.png" alt="Editar"></span></a>
                    <a href="excluir/<?=$age['id']?>"><img class="icons" src="../public/icons/icon-excluir.png" alt="Editar"></a>
                </td>
            </tr>
        </tbody> <!-- Fim tbody -->
        <?php endforeach ?>
    </table> <!-- Fim Table -->
