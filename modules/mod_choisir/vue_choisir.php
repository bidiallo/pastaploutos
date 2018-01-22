<?php

class VueChoisir extends VueGenerique {

	function __construct() {
		parent::__construct();
	}


	function vue_form_choisir() {

		echo "

		<section class='header' style='background: transparent url(images/ingredients.jpg) no-repeat scroll 0% 0%;  width: 100%; '>
			<h1 style='color:#771A22; margin-left: 100px;'><strong>Choisir un ingrédient</strong></h1>
			<div class='input-group' id='pagerecherche'>
			 	<form method='POST' class='cont' style='margin-left:100px;'>
			  		<input type='text' class='srchFld' id='search' ng-model='search' placeholder='Choisissez un ingrédient' aria-describedby='basic-addon1'>
			  		<p  style='color:#FFFFFF; font-weight:bold; padding-right:125px' class='input-choisir' id='r'></p>
			  		<p id_recette='r'></p>

			  		<div class='entypo-search ico'></div>
			  	</form>
			</div>


		</section>

		<div>
			<script src='jquery-3.1.1.min.js'></script>
			<script>
				$('#search').on('input', function() {
					var recherche=$('#search').val();
					$.ajax({
						url : 'recherche.php',
						data : 'mot='+recherche,
						type : 'POST',
						dataType : 'html',
						success : function (code_html) {
							console.log(code_html);
							$('#r').html(code_html);
						}
					});
				});
			</script>
		</div>

		";
	}


	
}
?>
