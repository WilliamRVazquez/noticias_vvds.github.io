<?php 
require 'header.php';
require 'navbar.php';
?>
    <div class="container-fluid">
      <div class="row">
        <?php require 'sidebar.php'; ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="sub-header">Lista de Post</h2>
          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Autor</th>
                  <th>Fecha</th>
                  <th>Titulo</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>
              </thead>
              <tbody id="articles">
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
<?php require 'footer.php'; ?>