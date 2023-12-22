<script>
	<?php if (count($foodSeted) > 0) : ?>

		$("[data-food_name]").keyup(function() {
			$("[data-food_name]").autocomplete({
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

					$('[data-food_name]').val(ui.item.label);
					$('#id_food').val(ui.item.value);
					$('#food_carb').val(ui.item.carb);
					$('#food_prot').val(ui.item.prot);
					$('#food_fat').val(ui.item.fat);
					$('#food_kcal').val(ui.item.kcal);
					return false;
				}
			});

		});

	<?php endif ?>
</script>