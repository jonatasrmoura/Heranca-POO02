<?php
    require_once "class/Aluno.php";
    final class Bolsista extends Aluno 
    {
        private $bolsa;

        public function renovarBolsa()
        {
            echo "<h3>Bolsa renovada da Aluna " .$this->nome ."</h3>";
        }

        public function pagarMensalidade()
        {
            echo "<p><strong>" .$this->nome ." é bolsista, então paga com " .$this->getBolsa() ." de desconto.</strong></p>";
        }

        public function getBolsa()
        {
            return $this->bolsa;
        }

        public function setBolsa($bo)
        {
            $this->bolsa = $bo;
        }
    }
?>