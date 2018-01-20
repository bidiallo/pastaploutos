<?php

class VueChoisir extends VueGenerique {

	function __construct() {
		parent::__construct();
	}


	function vue_form_choisir() {

		echo "

		<section class='header'>
			<center><h1>Choisir Ingrédient</h1></center>
			<div class='input-group' id='pagerecherche'>
			 	<form method='POST' class='cont'>
			  		<input type='text' class='srchFld' id='search' ng-model='search' placeholder='Choisissez un ingrédient' aria-describedby='basic-addon1'>
			  		<p class='input-choisir' id='r'></p>
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
