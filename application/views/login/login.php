<div class="container">
    <?php
    if(!$this->session->userdata('usuario')){
    ?>
        <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4" id="login-form"> <!-- Inicio div que o form está dentro -->
                <form method="post" action="login/autenticaLogin"> <!-- Inicio Form -->
                    <div class="form-group"> <!-- Form Group -->
                        <label for="usuario">Usuário</label>
                        <input type="text" class="form-control" id="usuario" placeholder="usuario" name="usuario">
                    </div> <!-- Fim form group -->
                    <span class="help-block"></span>
                    <div class="form-group"> <!-- Form Group -->
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" placeholder="senha" name="senha">
                    </div> <!-- Fim form group -->
                    <div>
                        <div class="form-group">
                            <button type="submit" id="btn-login" class="btn btn-primary">Logar-se</button>
                        </div>
                        <span class="help-block"></span>
                    </div>
                </form> <!-- Fim form --> 
            <div class="col-md-4"></div>
            </div> <!-- Fim div da col que o form está dentro -->
        </div> <!-- FIM ROW -->
     </div> <!-- Fim div container -->
    <?php
    }else{
        redirect("admin");
    }?>
</div>

