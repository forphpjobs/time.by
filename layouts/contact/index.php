<?php include_once "layouts/layout/header.php" ?>
<?php
if (isset($_POST['submit'])){
    if(!empty($_POST['name']) and !empty($_POST['email']) and !empty($_POST['text'])){
        $name=htmlentities(strip_tags($_POST['name']),ENT_QUOTES);
        $email=htmlentities(strip_tags($_POST['email']), ENT_QUOTES);
        $text=htmlentities(strip_tags($_POST['text']));
        include_once "model/Contact.php";
        $result=Contact::setContacts($name,$email,$text);
        if($result){
                        echo "<center><h3>SENDED YOUR MESSAGE</h3></center>";
                        header('location: /contact');
        }else{

            echo "NE RABOTAET";
        }

    }

}


?>




<h3>Обратная связь</h3>

<form action="" method="post">
    <p><label for="name">Name:</label><br><input id="name" type="text" name="name" placeholder="Your name" required></p>
    <p><label for="email">E-mail:</label><br><input id="email" type="email" name="email" placeholder="Your e-mail" required></p>
    <p><label for="text">E-mail:</label><br><textarea id="text" name="text" placeholder="Your message" rows="5" cols="22"></textarea></p>
    <p> <input type="submit" name="submit"></p>
</form>



<?php include_once "layouts/layout/footer.php" ?>
