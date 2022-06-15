<?php

class Dispatcher {

    private ?string $page=null;
    private ?string $id=null;
    private ?string $action=null;

    public function __construct() {
        if (isset($_GET['page'])) {
            $this->page = $_GET['page'];
        }
        if (isset($_GET['id'])) {
            $this->page = $_GET['id'];
        }
        if (isset($_GET['action'])) {
            $this->page = $_GET['action'];
        }
    }

    public function Dispatch() {
        if(isset($_GET['page'])) {
            switch ($_GET['page']){
                case "compte":
                    include("pages/comptes.php");
                    break;
                
                case "compteCourant":
                    include("pages/compteCourant.php");
                    break;
                
                case "compteEpargne":
                    include("pages/compteEpargne.php");
                    break;
                
                default: 
                include('pages/error.php');
                break;
            }
        } else {
            include("pages/comptes.php");
            }
    }



}