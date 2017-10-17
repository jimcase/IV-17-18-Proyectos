<?php


final class IMG
{
    // Declaración de una propiedad
    public $nombre = 'empty';
    public $url = './';
    public $destination = 'uploads/';
    public $email = 'none@none.com';

    function __construct($nom, $url, $email, $destination)
    {
        $this->nombre = $nom;
        $this->url = $url;
        $this->email = $email;
        $this->destination = $destination;
    }
 

    // Declaración de un método
    public function addToDB($img_name) {
        if (move_uploaded_file($img_name, $this->destination)) {
            echo "The file ". basename($img_name). " has been uploaded.";     
            //return true;       
        } 
        else {
            echo "Sorry, there was an error uploading your file.";       
            //return false;     
        }
    }
}
?>