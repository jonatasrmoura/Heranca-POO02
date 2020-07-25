<?php
    class Tecnico extends Aluno
    {
        private $registroProfissional;

        public function praticar()
        {

        }

        public function getRegistroProfissional()
        {
            return $this->registroProfissional;
        }

        public function setRegistroProfissional($reg)
        {
            $this->registroProfissional = $reg;
        }
    }
?>