<div class="col-md-9">
<h3 class= "page-header align-center text-center titulos">Lista de Imoveis</h3>
   <table class="table table-striped"> <!-- Inicio table -->
        <thead class="bg-dark text-center"> <!-- Inicio thead -->
            <tr>
                <th style="text-align:center; color: white;">Nome</th>
                <th style="text-align:center; color: white;" >Valor</th>
                <th style="text-align:center; color: white;">Dormitorios</th>
                <th style="text-align:center; color: white;">Descrição do Apto</th>
                <th style="text-align:center; color: white;">Foto</th>
                <th style="text-align:center; color: white;"></th>
                <th style="text-align:center; color: white;">Editar/Excluir</th>
            </tr>
        </thead> <!-- Fim thead -->
        <?php foreach($imoveis as $imovel) : ?>
        <tbody> <!-- Inicio tbody -->
            <tr class="text-center">
                <td class="align-middle"><?=$imovel['nome']?></td>
                <td class="align-middle"><?="R$".number_format($imovel['valor'],2,",",".")?></td>
                <td class="align-middle"><?=$imovel['dormitorios']?></td>
                <td class="align-middle"><?=$imovel['descricao']?></td>
                <td><img id="foto-imovel" src="<?= base_url("public/imgsImoveis/").$imovel['image']?>" alt=""></td>
                <td></td>
                <td class="align-middle">
                    <a href="editar/<?=$imovel['id']?>"><span><img class="icons" src="../public/icons/icon-editar.png" alt="Editar"></span></a>
                    <a href="excluir/<?=$imovel['id']?>"><span><img class="icons" src="../public/icons/icon-excluir.png" alt="Excluir"></span></a>
                </td>
            </tr>
        </tbody> <!-- Fim tbody -->
        <?php endforeach ?>
    </table> <!-- Fim Table -->
