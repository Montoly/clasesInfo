<?php


	class asadera {

		
		public $material;

		public $forma;

		private $tamanho;

		public $color; 

		protected $temperatura;

		// En el minuto 21:05 de la clase 2022-07-06 defini los metodos.
	

		public function construct($material, $forma, $tamanho, $color){
			/*
				Este metodo se encarga de construi la clase.
			*/
			$this->material 	= $material;
			$this->forma 		= $forma;
			$this->tamanho		= $tamanho;
			$this->color 		= $color;
			$this->temperatura 	= 20;

		}

		public function obtenerTemperatura(){

			$retorno = $this->temperatura;
			return $retorno;
		} 

		public function calentar(){
			/*
				Este metodo se encarga de subir la temperatura de la asadera
			*/
			$this->temperatura = $this->temperatura + 10;
		}

		public function enfriar(){
			/*
				Este metodo se encarga de bajar la temperatura de la asadera
			*/
			$this->temperatura = $this->temperatura - 10;
		}


		class asadera_pizza extends asadera {

			public function construct($material, $forma, $tamanho, $color){
				/*
					Este metodo se encarga de construi la clase.
				*/
				$this->material 	= "acero";
				$this->forma 		= $forma;
				$this->tamanho		= $tamanho;
				$this->color 		= $color;
				$this->temperatura 	= 20;
	
			}
	
		}


	}

	$objAsadera = new asadera();
	$objAsadera->construct("Acero","Rectangulo","20*20","Verde");



	$objAsadera = new asadera_pizza();
	$objAsadera->construct("Acero","Rectangulo","20*20","Verde");

	print_r($objAsaderaPizza->material);

?>