<div class="col-md-9 p-3">
    <h3  class= "page-header align-center text-center titulos">Cadastre um novo Cliente</h3>
        <?php
            echo form_open("clientes/cadastraClienteAction");
            echo form_label("Nome", "nome");
            echo form_input(array(
                "name" => "nome",
                "id" => "nome",
                "class" => "form-control",
                "type" => "text"
            ));
            echo form_label("Telefone", "telefone");
            echo form_input(array(
                "name" => "telefone",
                "id" => "telefone",
                "class" => "form-control",
                "type" => "number"
            ));

            echo form_label("Email", "email");
            echo form_input(array(
                "name" => "email",
                "id" => "email",
                "class" => "form-control",
                "type" => "email"
            ));
            echo form_label("Descrição de gostos do cliente", "descricao");
            echo form_textarea(array(
                "name" => "descricao",
                "id" => "descricao",
                "cols" => 20,
                "rows" => 5,
                "class" => "form-control",
                "max-length" => 250
            ));
            echo form_button(array(
                "class" => "btn btn-primary mt-2",
                "content" => "Cadastrar",
                "type" => "submit",
            ));
            echo form_close();
        ?>