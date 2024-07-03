<?php 
    /**
     * 
     */
    class criarfeedController extends controller{

 
        public function index(){    
            $dados = array('dados'=>'');
            
            $this->loadTemplate('criarfeed', $dados);
        }

      
     }




?>