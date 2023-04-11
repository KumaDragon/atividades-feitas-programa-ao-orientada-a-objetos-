<?php
    class ModificadorDeAcesso{
        public $atributoPublic ="Atributo Público - Public";
        protected $atributoProtected = "Atributo Protegido - Protected";
        private $atributoPrivate = "Atributo Privado - Private";
    }

    $teste = new ModificadorDeAcesso();
    echo $teste->atributoPublic;
    echo $teste->atributoProtected;
    echo $teste->atributoPrivate;


?>