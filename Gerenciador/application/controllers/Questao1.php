<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questao1 extends CI_Controller {

	public function index(){
		for($numeros = 1;$numeros <=100; $numeros++){
			if($numeros % 3 == 0 && $numeros % 5 == 0){
				echo "<br> Tres e Cinco";
			}elseif($numeros % 3 == 0){
				echo "<br> Tres";
			}elseif($numeros % 5 == 0){
				echo "<br> Cinco";
			}else{
				echo "<br> $numeros";
			}
		}
	}
}