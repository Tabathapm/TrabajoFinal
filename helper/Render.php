<?php

class Render{

	function location($page){
		
		header("location:$page");
		exit();
		
	}

}