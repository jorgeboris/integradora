<?php require_once 'templates/headerrr.php';?>
<?php 
	$conexion=mysqli_connect('localhost','root','','exardb');
?>
 

<div class="container">
	<div class="starter-template">
		<br>
		<br>
		<br>
		<div class="jumbotron">
			<div class="container text-center">
				<h1><strong>Canalización</strong></h1>
				
			</div>
			<br>
			<table class="table table-striped">
				<tr>
					<td>Id</td>
					<td>Nombre</td>
					<td>Materia</td>
					<td>Calificacion</td>
				</tr>

				<?php

				$sql="SELECT * from calificaciones WHERE calificacion<8";
				$result=mysqli_query($conexion,$sql);

				while($mostrar=mysqli_fetch_array($result)){
					
				?>

				<tr>
					<td><?php echo $mostrar['id']?></td>
					<td><?php echo $mostrar['nombre']?></td>
					<td><?php echo $mostrar['materia']?></td>
					<td><?php echo $mostrar['calificacion']?></td>
				</tr>
				<?php
				}
				?>
			</table>
		</div>
	</div>
</div>

<?php include 'partials/footer.php';?>