<div class="col-md-9">
    <h3 class= "page-header align-center text-center titulos">Cadastre um novo Imovel</h3>
        <?php
            echo form_open_multipart("imoveis/cadastraImoveisAction");
            echo form_label("Nome", "nome");
            echo form_input(array(
                "name" => "nome",
                "id" => "nome",
                "class" => "form-control",
                "type" => "text"
            ));
            echo form_label("Valor", "valor");
            echo form_input(array(
                "name" => "valor",
                "id" => "valor",
                "class" => "form-control",
                "type" => "number"
            ));

            echo form_label("Dormitorios", "dormitorios");
            echo form_input(array(
                "name" => "dormitorios",
                "id" => "dormitorios",
                "class" => "form-control",
                "type" => "number"
            ));
            echo form_label("Descrição do apto", "descricao");
            echo form_textarea(array(
                "name" => "descricao",
                "id" => "descricao",
                "cols" => 20,
                "rows" => 5,
                "class" => "form-control",
                "max-length" => 250
            ));
            echo form_label("Foto", "image");
            echo form_input(array(
                "name" => "image",
                "id" => "image", 
                "type" => "file"
            ));
            echo form_button(array(
                "class" => "btn btn-primary mt-2",
                "content" => "Cadastrar",
                "type" => "submit",
            ));
            echo "<br/>";
            echo form_close();
            echo "<br/>";
        ?>