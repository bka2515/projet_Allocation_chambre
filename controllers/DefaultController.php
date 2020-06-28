<?php
class DefaultController{
    public function index(){
        $path="./vues/Layouts/DefaultLayout.php";
        $vue="./vues/etudiants/ajout_etudiant.php";
       
        ob_start();
        require_once('$vue');
        $dynamic_view= ob_get_clean();
        require_once('$path');

    }
}