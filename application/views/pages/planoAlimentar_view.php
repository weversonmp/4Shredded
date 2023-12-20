<?php
// echo '<pre>';
// $this->food_name = 'ovo';
// $ovo = $this->alimentos->getAutocompleteFood($this->food_name);
// print_r($ovo);
// exit;
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title ?></title>

	<!-- Bootstrap 5.0.2 CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<!-- FontAwesome 6 -->
	<link rel="stylesheet" href="<?= base_url() ?>vendor/fontawesome/css/all.min.css">
	<!-- <link rel="stylesheet" href="<?= base_url() ?>vendor/fontawesome/css/fontawesome.css">
	<link rel="stylesheet" href="<?= base_url() ?>vendor/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>vendor/fontawesome/css/brands.css">
	<link rel="stylesheet" href="<?= base_url() ?>vendor/fontawesome/css/regular.css"> -->

	<link rel="stylesheet" href="<?= base_url() ?>css/jquery-ui.css">

	<!-- Local CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>css/styles.css">

	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

</head>

<body d-flex">
	<header class="d-flex flex-column position-absolute  vh-100 flex-shrink-0 navbar-dark-gray" style="width: 4.5rem;" id="idheader">
		<nav class="d-flex flex-column text-center h-100 my-4 justify-content-between">
			<div class="d-flex flex-column">
				<div class="mb-5 mt-3">
					<a href="#">
						<img id="img-brand" src="<?= base_url() ?>img/brand11.jpeg" alt="">
					</a>
				</div>
				<div class="d-flex flex-column mt-5 gap-4">
					<a href="#">
						<i class="fa-solid fa-pizza-slice" navbar-icon-on-focus></i>
					</a>
					<a href="#">
						<i class="fa-solid fa-pizza-slice" navbar-icon-off-focus></i>
					</a>
					<a href="#">
						<i class="fa-solid fa-pizza-slice" navbar-icon-off-focus></i>
					</a>
					<a href="#">
						<i class="fa-solid fa-pizza-slice" navbar-icon-off-focus></i>
					</a>
					<a href="#">
						<i class="fa-solid fa-pizza-slice" navbar-icon-off-focus></i>
					</a>
				</div>
			</div>

			<div class=" d-flex justify-content-center align-items-end">
				<i class="fa-solid fa-right-to-bracket navbar-icon-off-focus"></i>
			</div>
		</nav>
	</header>

	<main class="m-auto pt-4">
		<h2 class="">Refeições</h2>

		<?php if (!$alimentosAdicionados) : ?>
			<div class="mt-3" id="foodCard">
				<div class=" card-body">
					<input type="text" id="food_name" class="mb-2">
					<input type="text" id="id_food" class="mb-2" hidden>
					<div class="d-flex gap-4">
						<h6 class="card-subtitle mb-2 text-muted">C: </h6>
						<h6 class="card-subtitle mb-2 text-muted">P: </h6>
						<h6 class="card-subtitle mb-2 text-muted">G: </h6>
						<h6 class="card-subtitle mb-2 text-muted">Kcal: </h6>
					</div>
					<!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
					<a href="#" class="card-link">Info</a>
					<a href="#" class="card-link">Remover</a>
				</div>
			</div>
		<?php endif ?>

	</main>











	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

	<!-- Font Awesome -->
	<!-- <script src="https://kit.fontawesome.com/d412feebf6.js" crossorigin="anonymous"></script> -->


	<script defer>
		$(document).ready(function() {

			// Initialize
			$("#food_name").autocomplete({
				source: function(request, response) {
					// Fetch data
					$.ajax({
						url: "<?= base_url() ?>planoalimentar/foodsAutoComplete",
						type: 'post',
						dataType: "json",
						data: {
							search: request.term
						},
						success: function(data) {
							response(data);
						}
					});
				},
				select: function(event, ui) {
					// Set selection

					$('#food_name').val(ui.item.label); // display the selected text
					$('#id_food').val(ui.item.value); // save selected id to input
					return false;
				}
			});

		});

		// const teste = document.querySelector('#testelink')
		// if (teste.attributes['navbar-icon-off-focus']) {
		// 	console.log('existe');
		// } else {console.log('n existe')}

		// teste.attributes.removeNamedItem('navbar-icon-off-focus')

		// if (teste.attributes['navbar-icon-off-focus']) {
		// 	console.log('existe');
		// } else {console.log('n existe')}



		// const input = document.querySelector('#ovo1');

		// input.addEventListener('keyup', (ev) => {
		// 	sessionStorage.setItem("inputValueToAdd", input.value);
		// 	if (input.value.length > 2) {
		// 		let values = sessionStorage.getItem("inputValueToAdd")
		// 		console.log(values)

		// 	}
		// });
	</script>
</body>

</html>