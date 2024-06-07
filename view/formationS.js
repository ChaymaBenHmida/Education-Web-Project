/*var mail = document.querySelector("#email");
var content = document.querySelector("#fname");
var img = document.querySelector("#lname");
var title = document.querySelector("#titre");
var categ = document.querySelector("#categ");
var select=document.querySelector("s");

var alertmail=document.querySelector(".alertEmail");
var alertcontent=document.querySelector(".alertNom");
var alertimg=document.querySelector(".alertPrenom");
var alerttitle=document.querySelector(".alerttitre");
var alertcateg = document.querySelector(".alertcateg");
var alertt = document.querySelector(".alert");
var select=document.querySelector(".s");


function verif() {
  alertt.innerHTML = ""; //returns html content

  if (content.value == "") {
   alertcontent.innerHTML += "<p style='color:red'>Champ Obligatoire!</p>";
   alert('ffffff');

  }

  if (img.value == "") {
    alertimg.innerHTML += "<p style='color:red'>Champ Obligatoire!</p>";
  }


  if (title.value == "") {
    alerttitle.innerHTML += "<p style='color:red'>Champ Obligatoire!</p>";
     alert('ffffff');

  } 

  
  if (categ.value == "") {
    alertcateg.innerHTML += "<p style='color:red'>Champ Obligatoire!</p>";
  }

   
   if (mail.value == "") {
    alertmail.innerHTML += "<p style='color:red'>Champ Obligatoire!</p>";
  }
  else if (email.value.split("@")[1] !== "gmail.com") {
    alertemail.innerHTML += "<p style='color:red'>L'email doit contenir @gmail.com</p>";

  }
  
if (categ == "select") 
{
  alertcateg.innerHTML= "<p style='color:red'>Vous devez choisir une categorie!</p>";
}


  return false;
} */ 

function validateForm()                                    
{ 
    var contenu = document.form["monFormulaire"]["fname"];               
    var image = document.form["monFormulaire"]["lname"];
    var titre = document.form["monFormulaire"]["titre"];       
    var description = document.form["monFormulaire"]["categorie"];   
   
    if (contenu.value == "")                                  
    { 
        document.getElementById('errorname').innerHTML="Champ Obligatoire!!";  
        contenu.focus(); 
        return false; 
    }else{
        document.getElementById('errorcontenu').innerHTML="";  
    }
       



    if (image.value == "")                                   
    { 
        document.getElementById('errorimage').innerHTML="Champ Obligatoire!!"; 
        image.focus(); 
        return false; 
    }else{
        document.getElementById('errorimage').innerHTML="";  
    }



        if (titre.value == "")                                  
    { 
        document.getElementById('errortitre').innerHTML="Champ Obligatoire!!";  
        titre.focus(); 
        return false; 
    }else{
        document.getElementById('errortitre').innerHTML="";  
    }


    if (categorie.value == "")                           
    {
        document.getElementById('errorcategorie').innerHTML="Champ Obligatoire"; 
        categorie.focus(); 
        return false; 
    }else{
        document.getElementById('errorcategorie').innerHTML="";  
    }
   
    return true; 
}    