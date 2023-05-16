<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fas fa-user-tag"></i>Clientes
          <button class="btn btn-primary" type="button" onclick="openModal();"><i class="fa-solid fa-circle-plus">
          </i> Nuevo</button>
          </h1>
          
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="<?= base_url(); ?>/clientes">Clientes</a></li>
        </ul>
      </div>
        <div class="row">
          <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="tableClientes">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nombres</th>
                      <th>Apellidos</th>
                      <th>DNI</th>  
                      <th>Telefono</th> 
                      <th>Sexo</th> 
                      <th>Correo</th> 
                      <th>Dirección</th>
                      <th>Acciones</th>             
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          </div>
      </div>
    </main>
    <?php include "modal.php" ?> <!-- llamar al modal (incluir)  -->
    <script src="<?= base_url()?>/js/clientes/clientes.js"></script>
