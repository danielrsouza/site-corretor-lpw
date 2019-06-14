<div class="col-md-9">
    <h3  class= "page-header align-center text-center titulos">Editar o compromisso</h3>
        <form action=<?= base_url('agenda/cadastrarAction')?>>
            <div class="form-group">
                <label for="assunto">Assunto</label>
                <input type="text" class="form-control" id="assunto" name="assunto">
            </div>
            <div class="form-group">
                <label for="data">Data</label>
                <input type="date" class="form-control" id="data" name="data">
            </div>
            <div class="form-group">
                <label for="horario">Horario</label>
                <input type="time" class="form-control" id="horario" name="horario">
            </div>
            <div class="form-group">
                <label for="clientesDisponiveis">Marcar com Cliente</label>
                <select class="form-control" id="clientesDisponiveis" name="codcliente">
                    <?php foreach($clientes as $cliente){ ?>
                        <option value="<?=$cliente['id']?>"><?= $cliente['nome']?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                    <button class="btn btn-success">Editar</button>
            </div>
        </form>