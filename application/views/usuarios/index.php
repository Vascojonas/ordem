
    <?php $this->load->view('layout/sidebar')?>
    
    
    <!-- Main Content -->
    <div iv id="content">
        
        <?php $this->load->view('layout/navbar')?>
        
        <!-- Begin Page Content -->
        <div class="container-fluid">

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('/')?>">Home</a></li>
            <li class="breadcrumb-item acive"><?=$titulo?><a href="#"></a></li>
          </ol>
        </nav>

        <?php
              if($message=$this->session->flashdata('error')): ?>

                <div class="row">
                    <div class="col-md-12 ">
                      <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong><i class="fas fa-exclamation-triangle"></i>&nbsp; <?=$message?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>

                       
                    </div>
                </div>

        <?php endif ?>

        <?php
              if($message=$this->session->flashdata('success')): ?>

                <div class="row">
                    <div class="col-md-12 ">
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><i class="fas fa-smile-wink"></i>&nbsp; <?=$message?></strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>

                       
                    </div>
                </div>

        <?php endif ?>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">

            <div class="card-header py-3">
                <a title="Cadastrar novo ususário" href="<?=base_url('usuarios/add ')?>" class="btn btn-success btn-sm float-right"><i class="fas fa-user-plus">&nbsp;</i>Novo</a>              
            </div>

            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered dataTable"  width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Usuário</th>
                      <th>Login</th>
                      <th class="text-center pl'2">Ativo</th>
                      <th class="text-right no-sort">Ações</th>
                    </tr>
                  </thead>
                  
                  <tbody>

                    <?php foreach ($usuarios as  $u) { ?>
                      <tr>
                          <td><?= $u->id?></td>
                          <td><?= $u->username?></td>
                          <td><?= $u->email?></td>
                          <td class="text-center pr-4"><?= ($u->active==1)?'<span class="badge badge-info btn-small">Sim</span>':'<span class="badge badge-warning btn-small">Não</span>'?></td>
                          <td class="text-right ">
                            <a title="Editar" href="<?= base_url('usuarios/edit/'.$u->id)?>" class="btn btn-sm btn-primary"><i class="fas fa-user-edit"></i></a>
                            <a title="Exluir" href="" class="btn btn-sm btn-danger"><i class="fas fa-user-times"></ </a>
                          </td>
                        </tr>
                    <?php } ?>
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

    </div>
      <!-- End of Main Content -->

     