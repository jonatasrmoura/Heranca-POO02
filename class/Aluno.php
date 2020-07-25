<?php
    require_once "class/Pessoa.php";
    class Aluno extends Pessoa
    {
        protected $matricula;
        protected $curso;

        public function pagarMensalidade()
        {
            if ($this->sexo === "F")
            {
                echo "<h3>Pagando mensalidade da aluna " .$this->getNome() ."</h3>";
            }
            else if ($this->sexo === "M")
            {
                echo "<h3>Pagando mensalidade do aluno " .$this->getNome() ."</h3>";
            }
            else
            {
                echo "<h4>ERRO: Sexo do(a) aluno(a) " .$this->nome ." invalido ou Vázio</h4>";
            }
        }


        public function getMatricula()
        {
            return $this->matricula;
        }

        public function getCurso()
        {
            return $this->curso;
        }

        public function setMatricula($m)
        {
            $this->matricula = $m;
        }

        public function setCurso($c)
        {
            $this->curso = $c;
        }
    }
?>