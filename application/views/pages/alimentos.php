<body>
	<div class="main-content">
		<div class="container mt-7">
			<!-- Table -->
			<div class="row">

				<div class="col">
					<div class="card shadow">
						<div class="card-header border-0 d-flex justify-content-between">
							<h2 class="mb-0 ">Alimentos</h3>
							<button class="btn btn-outline-success" type="button">+Alimento</button>
						</div>
						<div class="table-responsive">
							<table class="table align-items-center table-flush">
								<thead class="thead-light">
									<tr>
										<th scope="col">id</th>
										<th scope="col">Alimento</th>
										<th scope="col">Carboidratos</th>
										<th scope="col">Proteínas</th>
										<th scope="col">Gorduras</th>
										<th scope="col">Calorias</th>
									</tr>
								</thead>
								<tbody>
									<tr>
									<?php foreach ($alimentos as $alimento) : ?>
										<td><?= $alimento['id'] ?></td>
										<td><?= $alimento['alimento'] ?></td>
										<td><?= $alimento['carboidratos'] ?></td>
										<td><?= $alimento['proteinas'] ?></td>
										<td><?= $alimento['gorduras'] ?></td>
										<td><?= $alimento['calorias'] ?></td>
										<?php endforeach; ?>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
