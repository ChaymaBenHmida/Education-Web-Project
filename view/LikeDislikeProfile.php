<!-------------------------------LikeDislike------------------------->
<form action="Like.php" method="POST">
        <input type="hidden" name="titre_c" value="<?php echo $cours['titre_c'] ?>"/>   
        <!--user input<input type="hidden" name="Id_User" value="<//?php echo $result_User['Id_User'] ?>"/> -->
        <input type = "submit" name="save" value ='like' />
            </form>
            <?php $result_like=$mysqli->query("SELECT * FROM likes") or die($mysqli->error); 
            $v=0; ?>
            <?php while($row4=$result_like->fetch_assoc()): ?>
            <?php if($row4['titre_c']==$event['titre_c']): ?>
            <?php $v+=1; ?>
            <?php endif; ?>
            <?php endwhile; ?>   
            <?php echo $v ; ?>  
        <form action="Dislike.php" method="POST">
        <input type="hidden" name="titre_c" value="<?php echo $cours['titre_c'] ?>"/>    
        <input type = "submit" name="save" value ='Dislike' />
            </form>
            <?php $result_dislike=$mysqli->query("SELECT * FROM disLikes") or die($mysqli->error);  
            $i=0; ?>
            <?php while($row3=$result_dislike->fetch_assoc()): ?>
            <?php if($row3['titre_c']==$cours['titre_c']): ?>
            <?php $i+=1; ?>
            <?php endif; ?>
            <?php endwhile; ?>   
            <?php echo $i ; ?>     
           
<!-------------------------------LikeDislike------------------------->