<?php
	include_once 'D:\xampp\htdocs\TESSSSSSSSSSSSSSSSSSSST\config.php' ;
	include_once 'D:\xampp\htdocs\TESSSSSSSSSSSSSSSSSSSST\model\cours.php';

	class coursC {
		function afficherCours(){
			$sql="SELECT * FROM cours where statu='encours' or statu='acceptée' ";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function afficherCourss($categ){
			$sql="SELECT * FROM cours where categorie_c='$categ' and statu='acceptée' ";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimerCours($id_cours){
			$sql="DELETE FROM cours WHERE id_cours=:id_cours";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_cours', $id_cours);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
/*zedt statu fl insert into values w fl ekhr aka getstatu
nahit l*/
		function ajouterCours($cours){
			$sql="INSERT INTO cours(contenu,image,date_c,date_modification,titre_c,categorie_c,statu) 
			VALUES (:contenu,:image,:date_c,:date_modification,:titre_c,:categorie_c,:statu)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					
					'contenu' => $cours->getcontenu(),
					'image' => $cours->getimage(),
					/*'url' => $cours->geturl(),*/
					'date_c' => $cours->getdate_c(),
					'date_modification' => $cours->getdate_modifi(),
					'titre_c' => $cours->gettitre_c(),
					'categorie_c' => $cours->getcategorie_c(),
					'statu' => $cours->getstatu(),
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		function recuperer($id_cours){
			$sql="SELECT * from cours where id_cours=$id_cours";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$cours=$query->fetch();
				return $cours;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function affichercoursss($tem){
        $sql="SELECT * FROM cours WHERE titre_c = '$tem' ";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur:' . $e->getMessage());
        }
    }

    function modifierstatutA($id_cours,$cours){
    try{
     $db = config::getConnexion();
$query = $db->prepare('UPDATE cours SET statu = "acceptée" WHERE id_cours= :id_cours');
$query->execute([
 
 'id_cours'=> $id_cours
]);
 } catch (Exception $e){
     $e->getMessage();
}}
function modifierstatutR($id_cours,$cours){
    try{
     $db = config::getConnexion();
$query = $db->prepare('UPDATE cours SET statu = "refusée" WHERE id_cours= :id_cours');
$query->execute([
 
 'id_cours'=> $id_cours
]);
 } catch (Exception $e){
     $e->getMessage();
}}
		/*url nahitou wzedt statu */
		function modifierCours($cours, $id_cours){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					"UPDATE cours SET contenu=:contenu,image=:image,date_c=:date_c,date_modification=:date_modification,titre_c=:titre_c,categorie_c=:categorie_c,statu=:statu WHERE id_cours=:id_cours;"
				);
				$query->execute([
				
					'contenu' =>$cours->getcontenu(),
					'image' =>$cours->getimage(),
					/*'url' =>$cours->geturl(),*/
					'date_c' =>$cours->getdate_c(),
					'date_modification' =>$cours->getdate_modifi(),
					'titre_c' =>$cours->gettitre_c(),
					'categorie_c' =>$cours->getcategorie_c(),
					'statu' =>$cours->getstatu(),
					'id_cours' =>$id_cours
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
//////////////////////////////////TRI///////////////////////////////////////////
		function afficherevent_tridatecroissant(){
			$sql="SELECT * FROM cours WHERE statu = 'acceptée' order by 'date_c' ";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function afficherevent_tridatedecroissante(){
			$sql="SELECT * FROM cours WHERE statu = 'acceptée' order by 'date_c' desc";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function afficherevent_nomcroissant(){
			
			$sql="SELECT * FROM cours WHERE statu = 'acceptée' order by titre_c";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function afficherevent_nomdecroissante(){
			
			$sql="SELECT * FROM cours WHERE statu = 'acceptée' order by 'titre_c' desc";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
///////////////////////////////////////////////////////////////////////////////////////////////////////
		//Afficher contenu cours :
		function afficherContenu($id){
			$sql="SELECT contenu FROM cours where id_cours=$id";
			$db = config::getConnexion();
			try{
				$content = $db->query($sql);
				return $content;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
////////////////////////////////////////////////////////////////////////////////////////////////////////

	}
?>