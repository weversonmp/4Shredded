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

<body class="d-flex">
	<header class="d-flex flex-column position-fixed vh-100 flex-shrink-0 navbar-dark-gray" style="width: 4.5rem;" id="idheader">
		<nav class="d-flex flex-column text-center h-100 my-4 justify-content-between">
			<div class="d-flex flex-column">
				<div class="mb-5 pt-3">
					<a href="#">
						<img id="img-brand" src="<?= base_url() ?>img/brand11.jpeg" alt="">
					</a>
				</div>
				<div class="d-flex flex-column pt-5 gap-4">
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

	<main class="">
		<div class="d-flex gap-5">
			<h2 class="align-self-center mb-0">Refeições</h2>
			<button id="addNewFood">
				<i class="fa-solid fa-circle-plus align-self-center" style="color: #ffffff; font-size: 2.5em;"></i>
			</button>
		</div>

		<div class="d-flex row">

			<?php if (count($foodSeted["foodIndex"]) >= 0) : ?>
				<?php foreach ($foodSeted["foodIndex"] as $food) : ?>

					<div class="d-flex justify-content-between border-1 mt-2 btn-collapse" id="ref_<?= $food ?>">
						<h5>Ref <?= $food ?></h5>
						<hr>
						<a href="#" class="d-flex flex-column justify-content-center ms-3">
							<i class="fa-solid fa-square-plus" style="color: white"></i>
						</a>
						<button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFood_<?= $food ?>" aria-expanded="false" aria-controls="collapseExample" onclick="teste()">
							<i class="fa-solid fa-circle-chevron-right" style="color: white"></i>
						</button>
					</div>

					<div class="collapse" id="collapseFood_<?= $food ?>" data-collapse>
						<div class="" id="foodCard">
							<div class=" card-body d-flex gap-2" id="card_body">
								<span class="number-wrapper"><input class="mb-2 me-1 text-center " type="number" name="input_qnt_<?= $food ?>" id="input_qnt_<?= $food ?>" value="1" data-food_qnt max="99"></span>
								<span>x</span>
								<input type="text" id="food_name_<?= $food ?>" class="mb-2 me-3" data-food_name>
								<input type="text" id="id_food_<?= $food ?>" class="mb-2" hidden>
								<div class="d-flex align-items-center align-content-center gap-2 my-2">
									<h6 class=" card-subtitle text-muted m-0">C:</h6>
									<input type="text" id="food_carb_<?= $food ?>" class="food_macro_kcal_input" readonly>
									<h6 class="card-subtitle text-muted m-0">P:</h6>
									<input type="text" id="food_prot_<?= $food ?>" class="food_macro_kcal_input" readonly>
									<h6 class="card-subtitle text-muted m-0">G:</h6>
									<input type="text" id="food_fat_<?= $food ?>" class="food_macro_kcal_input" readonly>
								</div>
								<div class="d-flex align-items-center gap-2">
									<h6 class="card-subtitle text-muted m-0">Kcal:</h6>
									<input type="text" id="food_kcal_<?= $food ?>" class="food_macro_kcal_input me-3" readonly>
								</div>
								<!-- <div class="dropdown font-sans-serif">
										<a class="btn btn-outline-secondary dropdown-toggle" id="dropdownMenuLink" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
										<div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="dropdownMenuLink">
											<a class="dropdown-item" href="#">Info</a>
											<a class="dropdown-item" href="#">Remove</a>
										</div>
									</div> -->
							</div>
						</div>
					</div>

				<?php endforeach ?>
			<?php endif ?>
		</div>

	</main>

	<div class="d-flex flex-column vh-100 w-25 flex-shrink-0 navbar-dark-gray" style="width: 4.5rem;" id="idheader">
		<div class="d-flex flex-column text-center h-100 my-4 justify-content-between">
			<h3>Relatório</h3>
		</div>
	</div>










	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

	<!-- Font Awesome -->
	<!-- <script src="https://kit.fontawesome.com/d412feebf6.js" crossorigin="anonymous"></script> -->

	<script>
		let teste = () => {

		}
	</script>

</body>

</html>