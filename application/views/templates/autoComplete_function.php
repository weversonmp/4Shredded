<script>
	<?php if (count($foodSeted["foodIndex"]) > 0) : ?>
		<?php foreach ($foodSeted["foodIndex"] as $food) : ?>

			$("#food_name_<?= $food ?>").keyup(function() {
				$("#food_name_<?= $food ?>]").autocomplete({
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
						console.log(ui);
						$('#food_name_<?= $food ?>').val(ui.item.label);
						$('#id_food_<?= $food ?>').val(ui.item.value);
						$('#food_carb_<?= $food ?>').val(ui.item.carb);
						$('#food_prot_<?= $food ?>').val(ui.item.prot);
						$('#food_fat_<?= $food ?>').val(ui.item.fat);
						$('#food_kcal_<?= $food ?>').val(ui.item.kcal);
						return false;
					}
				});

			});

		<?php endforeach ?>
	<?php endif ?>
</script>