
	<h1>cargo persona</h1>
	<form action="<?php echo base_url(); ?>cpersona/guardar" method="POST">
		<table>
			<tr>
				<td><label>DNI</label></td>
				<td><input type="text" name="txtDNI"></td>
			</tr>
			<tr>
				<td><label>Nombre</label></td>
				<td><input type="text" name="txtNombre"></td>
			</tr>
			<tr>
				<td><label>ApPaterno</label></td>
				<td><input type="text" name="txtApPaterno"></td>
			</tr>
			<tr>
				<td><label>ApMaterno</label></td>
				<td><input type="text" name="txtApMaterno"></td>
			</tr>
			<tr>
				<td><label>Email</label></td>
				<td><input type="email" name="txtEmail"></td>
			</tr>
			<tr>
				<td><label>Fec.nac</label></td>
				<td><input type="date" name="txtFecNac"></td>
			</tr>
				
			
			<tr>
				<td><label>Ciudad</label></td>
				<td>
					<div class="form-group">
						<select name="cboCiudad" id="cboCiudades" class="form-control">
							<option value="">::Elija</option>

						</select>
					</div>
				</td>
			</tr>
			
			<tr>
				<td colspan="2"> <center><label for="">Usuario</label></center></td>
			</tr>
			
			<tr>
				<td><label>Usuario</label></td>
				<td><input type="tet" name="txtUsuario"></td>
			</tr>
			<tr>
				<td><label>Contraseña.</label></td>
				<td><input type="password" name="txtClave"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="guardar"></td>
			</tr>

		</table>
	</form>
		<a href="<?php echo base_url(); ?>clogin"> loguearse </a>

		<br><br><br>
	<button type="button" id="btnGetPersonas" class="btn bt-flat"><i class="fa fa-search"></i> Buscar</button>
	<div class="col-sm-5">
		<div class="box box-primary ">
		  	<table id="tblPersonas" class="table table-bordered">
	            <tr>
	              <th style="width: 10px">#</th>
	              <th>Nombre</th>
	              <th>Paterno</th>
	              <th>Materno</th>
	              <th>DNI</th>
	              <th>Ciudad</th>
	               
	            </tr>
	            
	        </table>
		</div>
	</div>
<script type="text/javascript">
	var baseurl = "<?php echo base_url(); ?>";
</script>