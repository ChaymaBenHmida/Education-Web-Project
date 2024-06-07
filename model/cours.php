<?php
	class cours{
		private $contenu;
		private $image;
		private $url;
		private $date_c;
		private $date_modification;
		private $id_cours;
		private $titre_c;
		private $categorie_c;
		private $statu;
		
		function __construct($contenu, $image, $date_c, $date_modification,$titre_c,$categorie_c,$statu){
		    $this->contenu=$contenu;
			$this->image=$image;
			/*$this->url=$url;*/
			$this->date_c=$date_c;
			$this->date_modification=$date_modification;
			$this->titre_c=$titre_c;
			$this->categorie_c=$categorie_c;
			$this->statu=$statu;
		}

		function getcontenu(){
			return $this->contenu;
		}
		function getimage(){
			return $this->image;
		}
		/*function geturl(){
			return $this->url;
		}*/
		function getdate_c(){
			return $this->date_c;
		}
		function getdate_modifi(){
			return $this->date_modification;
		}
        function gettitre_c(){
			return $this->titre_c;
		}
		function getcategorie_c(){
			return $this->categorie_c;
		}
		function getstatu(){
			return $this->statu;
		}


		
		function setcontenu(string $contenu){
			$this->contenu=$contenu;
		}
		function setimage(string $image){
			$this->image=$image;
		}
		/*function seturl(string $url){
			$this->url=$url;
		}*/
		function setdate_c(date $date_c){
			$this->date_c=$date_c;
		}
		function setdatemodifi(date $date_modification){
			$this->date_modification=$date_modification;
		}

		function setidcours(int $id_cours){
			$this->id_cours=$id_cours;
		}
		function settitre_c(string $titre_c){
			$this->titre_c=$titre_c;
		}
		function setcategorie_c(string $categorie_c){
			$this->categorie_c=$categorie_c;
		}
		function setstatu(string $statu){
			$this->statu=$statu;
		}

		
	}


?>
