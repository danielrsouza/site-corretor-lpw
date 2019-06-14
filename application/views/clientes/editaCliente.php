<div class="col-md-9">
    <h3 class= "page-header align-center text-center titulos">Editar o Cliente</h3>
        <?php
            echo form_open("clientes/editarClienteAction");
            echo form_label("ID", "id");
            echo form_input(array(
                "name" => "id",
                "id" => "id",
                "class" => "form-control",
                "readonly" => "true",
                "value" => $cliente['id']
            ));
            echo form_label("Nome", "nome");
            echo form_input(array(
                "name" => "nome",
                "id" => "nome",
                "class" => "form-control",
                "type" => "text",
                "value" => $cliente['nome']
            ));
            echo form_label("Telefone", "telefone");
            echo form_input(array(
                "name" => "telefone",
                "id" => "telefone",
                "class" => "form-control",
                "type" => "number",
                "value" => $cliente['telefone']
            ));
            echo form_label("Email", "email");
            echo form_input(array(
                "name" => "email",
                "id" => "email",
                "class" => "form-control",
                "type" => "email",
                "value" => $cliente['email']
            ));
            echo form_label("Descrição de gostos do cliente", "descricao");
            echo form_textarea(array(
                "name" => "descricao",
                "id" => "descricao",
                "cols" => 20,
                "rows" => 5,
                "class" => "form-control",
                "max-length" => 250,
                "value" => $cliente['descricao']
            ));
            echo form_button(array(
                "class" => "btn btn-success mt-2",
                "content" => "Editar",
                "type" => "submit",
            ));
            echo form_close();
        ?>