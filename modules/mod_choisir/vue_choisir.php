<?php

class VueChoisir extends VueGenerique {

	function __construct() {
		parent::__construct();
	}


	function vue_form_choisir($idingredient1, $idingredient2, $idingredient3) {

		?>

		<div class="input-group">
		  <span class="input-group-addon" id="basic-addon1">@</span>
		  <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
		</div>
	}

}
?>
