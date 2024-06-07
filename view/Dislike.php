<?php
 $mysqli = new mysqli("localhost", "root", "", "mindbenders") or die(mysqli_error($mysqli));
 $id_searchL= $mysqli->query("SELECT Id_User FROM likes");
 $id_searchD= $mysqli->query("SELECT Id_User FROM dislikes");
 $id_user=5;
 $titre_c=0;  
 $i=0; 
 $v=0;
    if(isset($_POST['save'])){  
        $titre_c = $_POST['titre_c'];
        while($row=$id_searchD->fetch_assoc()){
            if($id_user!=$row['Id_User']){
                $i+=1;
            }
        }
        while($row2=$id_searchL->fetch_assoc()){
            if($id_user!=$row2['Id_User']){
                $v+=1;
            }
        }
            if($i>=$id_searchD->num_rows && $v>=$id_searchL->num_rows ){
            $mysqli->query("INSERT INTO dislikes (titre_c,Id_User) VALUES('$titre_c','$id_user')") or die($mysqli->error);
            header("location: profile.php");
            }
            if($i<$id_searchD->num_rows){
            $mysqli->query("DELETE FROM  dislikes where Id_User=$id_user") or die($mysqli->error);
            header("location: profile.php");
            }
            if($v<$id_searchL->num_rows){
                $mysqli->query("DELETE FROM  likes where Id_User=$id_user") or die($mysqli->error);
                $mysqli->query("INSERT INTO dislikes (titre_c,Id_User) VALUES('$titre_c','$id_user')") or die($mysqli->error);
                header("location: profile.php");
                }
    }          
        ?>