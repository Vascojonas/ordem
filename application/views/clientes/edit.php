
    <?php $this->load->view('layout/sidebar')?>
    
    
    <!-- Main Content -->
    <div iv id="content">
        
        <?php $this->load->view('layout/navbar')?>
        
        <!-- Begin Page Content -->
        <div class="container-fluid">

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('/')?>">clientes</a></li>
            <li class="breadcrumb-item acive"><?=$titulo?><a href="#"></a></li>
          </ol>
        </nav>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">

            <div class="card-header py-3">
                <a title="Voltar" href="<?= base_url('/clientes')?>" class="btn btn-success btn-sm float-right"><i class="fas fa-arrow-left">&nbsp;</i>Voltar</a>              
            </div>

            <div class="card-header py-3">
            </div>
            <div class="card-body">
                <form class="use" method="POST" name="form_edit">
                <div class="form-group row">

                      <div class="col-md-4">
                        <label>Nome</label>
                          <input type="text" class="form-control form-control-user" name="cliente_nome"   placeholder="Seu nome" value="<?= $cliente->cliente_nome?>">
                          <?= form_error('cliente_nome', '<small class="form-text text-danger">','</small>')?>
                      </div>

                      <div class="col-md-4">
                        <label>Sobrenome</label>
                          <input type="text" class="form-control form-control-user" name="cliente_sobrenome"   placeholder="Seu apelido" value="<?= $cliente->cliente_sobrenome?>">
                          <?= form_error('cliente_sobrenome', '<small class="form-text text-danger">','</small>')?>

                      </div>

                      <div class="col-md-2">
                        <label>CPF ou CNPJ</label>
                          <input type="text" class="form-control form-control-user" name="cliente_cpf_cnpj"   placeholder="Seu apelido" value="<?= $cliente->cliente_cpf_cnpj?>">
                          <?= form_error('cliente_cpf_cnpj', '<small class="form-text text-danger">','</small>')?>

                      </div>

                      <div class="col-md-2">
                        <label>RG ou I.E</label>
                          <input type="text" class="form-control form-control-user" name="cliente_rg_ie"   placeholder="Seu CPF ou CNPJ" value="<?= $cliente->cliente_rg_ie?>">
                          <?= form_error('cliente_rg_ie', '<small class="form-text text-danger">','</small>')?>
                      </div>
                </div>
                <div class="form-group row">

                      <div class="col-md-4">
                        <label>Email</label>
                          <input type="email" class="form-control form-control-user" name="cliente_email"   placeholder="Seu nome" value="<?= $cliente->cliente_email?>">
                          <?= form_error('cliente_email', '<small class="form-text text-danger">','</small>')?>
                      </div>

                      <div class="col-md-2">
                        <label>Telefone fixo</label>
                          <input type="text" class="form-control form-control-user" name="cliente_telefone"   placeholder="Telefone fixo" value="<?= $cliente->cliente_telefone?>">
                          <?= form_error('cliente_telefone', '<small class="form-text text-danger">','</small>')?>

                      </div>

                      <div class="col-md-2">
                        <label>Telefone movel</label>
                          <input type="text" class="form-control form-control-user" name="cliente_celular"   placeholder=" Telefone movel" value="<?= $cliente->cliente_celular?>">
                          <?= form_error('cliente_celular', '<small class="form-text text-danger">','</small>')?>
                      </div>

                      <div class="col-md-4">
                        <label>Data nascimento</label>
                          <input type="date" class="form-control form-control-user" name="cliente_data_nascimento"   placeholder="Seu apelido" value="<?= $cliente->cliente_data_nascimento?>">
                          <?= form_error('cliente_data_nascimento', '<small class="form-text text-danger">','</small>')?>

                      </div>

                </div>
                <div class="form-group row">
                  
                    <div class="col-md-2">
                      <label>CEP</label>
                        <input type="text" class="form-control form-control-user" name="cliente_cep"   placeholder="seu CEP" value="<?= $cliente->cliente_cep?>">
                        <?= form_error('cliente_cep', '<small class="form-text text-danger">','</small>')?>

                    </div>

                      <div class="col-md-4">
                        <label>Endereço</label>
                          <input type="email" class="form-control form-control-user" name="cliente_endereco"   placeholder="Seu endereço" value="<?= $cliente->cliente_endereco?>">
                          <?= form_error('cliente_endereco', '<small class="form-text text-danger">','</small>')?>
                      </div>


                      <div class="col-md-2">
                        <label>Número</label>
                          <input type="text" class="form-control form-control-user" name="cliente_numero_endereco"   placeholder=" Telefone movel" value="<?= $cliente->cliente_numero_endereco?>">
                          <?= form_error('cliente_numero_endereco', '<small class="form-text text-danger">','</small>')?>
                      </div>

                      <div class="col-md-4">
                        <label>Bairro</label>
                          <input type="text" class="form-control form-control-user" name="cliente_bairro"   placeholder="Seu apelido" value="<?= $cliente->cliente_bairro?>">
                          <?= form_error('cliente_bairro', '<small class="form-text text-danger">','</small>')?>

                      </div>

                </div>
                <div class="form-group row">
                  
                    <div class="col-md-3">
                      <label>Cidade</label>
                        <input type="text" class="form-control form-control-user" name="cliente_cidade"   placeholder="seu CEP" value="<?= $cliente->cliente_cidade?>">
                        <?= form_error('cliente_cidade', '<small class="form-text text-danger">','</small>')?>

                    </div>

                      <div class="col-md-1">
                        <label>UF</label>
                          <input type="email" class="form-control form-control-user" name="cliente_estado"   placeholder="Estado" value="<?= $cliente->cliente_endereco?>">
                          <?= form_error('cliente_endereco', '<small class="form-text text-danger">','</small>')?>
                      </div>


                      <div class="col-md-8">
                        <label>Observações</label>
                          <textarea type="text" class="form-control form-control-user" name="cliente_obs"   placeholder="Suas observações"><?= $cliente->cliente_obs?></textarea>
                          <?= form_error('cliente_obs', '<small class="form-text text-danger">','</small>')?>
                      </div>


              

                </div>

                
                <button type="submit" class="btn btn-sm btn-primary">Salvar</button>
                </form>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

    </div>
      <!-- End of Main Content -->

     