@extends('Plantilla.Estructura')

@section('pestanasusuario')
	@parent

		@section('contenido1')



		<div id="content">
		
		<div class="page-full-width cf">

			<div class="side-menu fl">
				




				<h3>Menu Principal</h3>
				<ul>
					<li><a href="#">Side menu link</a></li>
					<li><a href="#">Another link</a></li>
					<li><a href="#">A third link</a></li>
					<li><a href="#">Fourth link</a></li>
				</ul>
				
			</div> <!-- end side-menu -->
			
			<div class="side-content fr">
			
				<div class="content-module">
				
					<div class="content-module-heading cf">
					
						<h3 class="fl">Table design</h3>
						
					
					</div> <!-- end content-module-heading -->
					
					
					<div class="content-module-main">
					
						<table>
						
							<thead>
						
								<tr>
									<th>
									<input type="checkbox" id="table-select-all">
									</th>
									<th>
										Cursos
									</th>
									<th>
										Nivel
									</th>
									<th>
										Fecha de Inicio
									</th>
									<th>
										H. de Capacitacion
									</th>
									<th>
										Estado
									</th>
									<th>
										Tipo Escenario
									</th>
									<th>
										Tipo de Capacitacion
									</th>
									<th>
										Tipo de Capacitacion
									</th>
								</tr>
							
							</thead>
							
							<tbody>
	
								<tr>
									<td><input type="checkbox"></td>
									<td>Adrian Purdila</td>
									<td>adipurdila</td>
									<td><a href="#">adipurdila@gmail.com</a></td>
									<td>
										<a href="#" class="table-actions-button ic-table-edit"></a>
										<a href="#" class="table-actions-button ic-table-delete"></a>
									</td>
								</tr>
								
							</tbody>
							
						</table>
					
					</div> <!-- end content-module-main -->

					<div class="content-module-main cf">
						<a class="button round blue image-right ic-search text-upper" href="#">Filtrar </a>
				
					</div>
				</div> <!-- end content-module -->
				
			
		
		</div> <!-- end full-width -->
			
	</div> <!-- end content -->








				@show

@stop