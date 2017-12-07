<?php

require_once('../../include/vue_generique.php');

class VueInscription extends VueGenerique{
	 
	function __construct(){
		parent::__construct();
	}
	function vue_form_inscription(/*askip token*/){
		?> 
		<form action = "index.php?module=inscription&action=form_inscription" method="POST">

			<!-- <input id="" type="" name=""/><br/> -->
			<input id="nom" type="text" name="nom"/><br/>
			<input id="prenom" type="text" name="prenom"/><br/>
			<input id="pseudo" type="text" name="pseudo"/><br/>
			<input id="email" type="email" name="email"><br/>
			<input id="mdp" type="password" name="mdp"/><br/>
			<input id="mdp2" type="password" name="mdp2"/><br/>
			<input id="age" type="date" name="age"/><br/>
			
			<input type="submit" value="Envoyer"/>

		</form><?php
	}
}

?>