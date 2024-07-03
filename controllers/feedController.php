<?php 
    /**
     * 
     */
    class feedController extends controller{

 
        public function index(){    
            $dados = array('dados'=>'');
            
            $this->loadTemplate('feed', $dados);
        }

        // public function testar(){
        //     echo '123';
        // }
     }




?>