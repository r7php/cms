<?php 
    /**
     * 
     */
    class homeController extends controller{

        
        public function index(){  
    //        session_destroy();

            // $u = new Usuarios();
            // $u->verificar_login();

            $dados = array(
                'tpl'=>'default'
            );
                
            $this->loadTemplate('home', $dados);
        }

    
     }




?>