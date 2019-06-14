<div class="col-md-9">
<h3 class= "page-header align-center text-center titulos">Editar o imovel</h3>
        <?php
            echo form_open_multipart("imoveis/editarImovelAction");
            echo form_label("ID", "id");
            echo form_input(array(
                "name" => "id",
                "id" => "id",
                "class" => "form-control",
                "readonly" => "true",
                "value" => $imoveis['id']
            ));
            echo form_label("Nome", "nome");
            echo form_input(array(
                "name" => "nome",
                "id" => "nome",
                "class" => "form-control",
                "type" => "text",
                "value" => $imoveis['nome']
            ));
            echo form_label("Valor", "valor");
            echo form_input(array(
                "name" => "valor",
                "id" => "valor",
                "class" => "form-control",
                "type" => "number",
                "value" => $imoveis['valor']
            ));

            echo form_label("Dormitorios", "dormitorios");
            echo form_input(array(
                "name" => "dormitorios",
                "id" => "dormitorios",
                "class" => "form-control",
                "type" => "number",
                "value" => $imoveis['dormitorios']

            ));
            echo form_label("Descrição do apto", "descricao");
            echo form_textarea(array(
                "name" => "descricao",
                "id" => "descricao",
                "cols" => 20,
                "rows" => 5,
                "class" => "form-control",
                "max-length" => 250,
                "value" => $imoveis['descricao']
            ));
            echo form_label("Foto", "foto");
            echo form_input(array(
                "name" => "foto",
                "id" => "foto", 
                "type" => "file"
            ));
            echo form_button(array(
                "class" => "btn btn-success mt-2",
                "content" => "Editar",
                "type" => "submit",
            ));
            echo form_close();
        ?>
