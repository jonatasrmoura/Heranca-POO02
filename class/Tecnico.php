<?php
    require_once "class/Aluno.php";
    final class Tecnico extends Aluno
    {
        private $registroProfissional;

        public function estagio()
        {
            echo "<h3>A aluna " .$this->nome 
            ." está fazendo o estágio obrigatorio de " 
            .$this->getCurso() ." em uma empresa</h3>";
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