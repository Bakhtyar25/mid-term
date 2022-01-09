<?php

if(isset($_POST['submit'])){
    Password_validation();
    echo $_POST['email'];
    echo "<br>";
    if(!empty($_POST['gender'])){
        echo $_POST['gender'];
    }
    echo "<br>";
    if(!empty($_POST['color'])){
        foreach($_POST['color'] as $colors){
            echo $colors." ";
        }
    }else{
        echo "“No favorite color!”.";
    }
    echo "<br>"."Registered successfully!";
}else{
    header("location:form.html");
    
}

function Password_validation(){
    if(strlen($_POST['password'])<8 || strlen($_POST['password'])>16){
        header("location:form.html?passwordShouldBeBetween8To16Characters");
    }
}

?>