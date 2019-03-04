<div class="row">
	<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
              <?php echo " Usuario :" . $this->session->userdata('s_usuario'); ?>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?php echo base_url();?>cpersona/actualizarDatos" method="POST" class="form-horizontal">
	           	<div class="box-body">
	                <div class="form-group">
	                  <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
	                  <div class="col-sm-10">
	                    <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre">
	                  </div>
	                </div>
	                <div class="form-group">
	                  <label for="inputEmail3" class="col-sm-2 control-label">Apellido Paterno</label>
	                  <div class="col-sm-10">
	                    <input type="text" class="form-control" id="txtApPaterno" name="txtApPaterno" placeholder="txtApPaterno">
	                  </div>
	                </div>
	                <div class="form-group">
	                  <label for="inputEmail3" class="col-sm-2 control-label">Apellido Materno</label>
	                  <div class="col-sm-10">
	                    <input type="text" class="form-control" id="txtApMaterno" name="txtApMaterno" placeholder="txtApMaterno">
	                  </div>
	                </div>
	                <div class="form-group">
	                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
	                  <div class="col-sm-10">
	                    <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Escriba Email">
	                  </div>
	                </div>
	                <div class="form-group">
	                 <div class="col-sm-10 pull-right">
	                    <button type="submit" class="btn btn-primary">Actualizar</button>
	                  </div>
	                </div>

				</div>
	              <!-- /.box-body -->
	          
            </form>

            <form action="<?php echo base_url();?>cpersona/eliminarPersona" method="POST" class="form-horizontal">
	           	<div class="box-body">
	                <div class="form-group">
	                  <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
	                  <div class="col-sm-10">
	                    <input type="text" class="form-control" id="inputEmail3" name="txtNombre" placeholder="Nombre">
	                  </div>
	                </div>
	                <div class="form-group">
	                  <label for="inputEmail3" class="col-sm-2 control-label">Id de Persona</label>
	                  <div class="col-sm-10">
	                    <input type="text" class="form-control" id="txtIdPersona" name="txtIdPersona" placeholder="ID">
	                  </div>
	                </div>
	               <div class="form-group">
	                 <div class="col-sm-10 pull-right">
	                    <button type="submit" class="btn btn-danger">eliminar</button>
	                  </div>
	                </div>

				</div>
	              <!-- /.box-body -->
	            
            </form>
          </div>
          <!-- /.box -->
	</div>         
</div>
