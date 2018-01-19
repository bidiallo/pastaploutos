<?php

class VueChoisir extends VueGenerique {

	function __construct() {
		parent::__construct();
	}


	function vue_form_choisir() {

		echo "

		<div class='input-group' id='pagerecherche'>
		 	<form method='POST'>
		  		<input type='text' class='form-control' id='search' placeholder='Choisissez un ingrédient' aria-describedby='basic-addon1'>
		  		<p id='r'></p>
		  		<p id_recette='r'></p>
		  	</form>
		</div>

		<button type='submit'>Rechercher</button>

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

		";
	}


	
}
?>
