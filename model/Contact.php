<?php


class Contact
{
    public static function setContacts(string $name, string $email, string $text):bool{

        $db=Db::connect();
        $query=$db->prepare("INSERT INTO contact (name,email,text) VALUES (:name , :email, :text)");
        $query->bindParam(':name', $name, PDO::PARAM_STR);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':text', $text, PDO::PARAM_STR);
        $result=$query->execute();
        return $result;
    }
}