
    <?php $this->load->view('layout/sidebar')?>
    
    
    <!-- Main Content -->
    <div iv id="content">
        
        <?php $this->load->view('layout/navbar')?>
        
        <!-- Begin Page Content -->
        <div class="container-fluid">

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('/')?>">Usuários</a></li>
            <li class="breadcrumb-item acive"><?=$titulo?><a href="#"></a></li>
          </ol>
        </nav>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">

            <div class="card-header py-3">
                <a title="Voltar" href="<?= base_url('/usuarios')?>" class="btn btn-success btn-sm float-right"><i class="fas fa-arrow-left">&nbsp;</i>Voltar</a>              
            </div>

            <div class="card-header py-3">
            </div>
            <div class="card-body">
                <form method="POST" name="form_edit">
                <div class="form-group row">

                      <div class="col-md-4">
                        <label>Nome</label>
                          <input type="text" class="form-control" name="first_name"   placeholder="Seu nome" value="<?= $usuario->first_name?>">
                          <?= form_error('first_name', '<small class="form-text text-danger">','</small>')?>
                      </div>

                      <div class="col-md-4">
                        <label>Sobrenome</label>
                          <input type="text" class="form-control" name="last_name"   placeholder="Seu apelido" value="<?= $usuario->last_name?>">
                          <?= form_error('last_name', '<small class="form-text text-danger">','</small>')?>

                      </div>

                      <div class="col-md-4">
                        <label>Email &nbsp; (Login)</label>
                          <input type="email" class="form-control" name="email"   placeholder="Seu email" value="<?= $usuario->email?>">
                          <?= form_error('email', '<small class="form-text text-danger">','</small>')?>

                      </div>
                </div>

                <div class="form-group row">
                       <div class="col-md-4">
                        <label>Usuário </label>
                          <input type="text" class="form-control" name="username"   placeholder="Seu usuário" value="<?= $usuario->username?>">
                          <?= form_error('username', '<small class="form-text text-danger">','</small>')?>

                      </div>

                      <div class="col-md-4">
                          <label>Activo</label>
                          <select class="form-control" name="active">
                                <option value="0" <?= ($usuario->active==0)?'selected': ''?> >Não</option>
                                <option value="1"  <?= ($usuario->active==1)?'selected':''?>  >Sim</option>
                          </select>

                      </div>

                      <div class="col-md-4">
                          <label>Perfil de acesso</label>
                          <select class="form-control" name="perfil_usuario">
                                <option value="2" <?= ($perfil_usuario->id==2)?'selected': ''?> >Vendedor</option>
                                <option value="1"  <?= ($perfil_usuario->id==1)?'selected':''?>  >Admnistrador</option>
                          </select>
                      </div>

                      
                </div>

                <div class="form-group row">
                       <div class="col-md-6">
                        <label>Senha </label>
                          <input type="password" class="form-control" name="password"   placeholder="Sua senha">
                          <?= form_error('password', '<small class="form-text text-danger">','</small>')?>

                      </div>

                      <div class="col-md-6">
                        <label>Senha </label>
                          <input type="password" class="form-control" name="confirm_password"   placeholder="Confirme a sua senha">
                          <?= form_error('confirm_password', '<small class="form-text text-danger">','</small>')?>

                      </div>

                      <input type="hidden" name="usuario_id" value="<?=$usuario->id?>"/>
                </div>

                <button type="submit" class="btn btn-sm btn-primary">Salvar</button>
                </form>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

    </div>
      <!-- End of Main Content -->

     