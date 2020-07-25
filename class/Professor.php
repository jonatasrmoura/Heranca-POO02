<?php
    require_once "class/Pessoa.php";
    class Professor extends Pessoa
    {
        private $especialidade;
        private $salario;
        private $cargoHorario;
        private $intervalo;

        public function receberAumento($aum)
        {
            $this->salario += $aum;
        }

        public function darAula($hh)
        {
            if ($hh >= 9 && $hh <= 17)
            {
                echo "<h3>O professor " .$this->nome ." está dando aula agora</h3>";
            }
            else if ($hh == 12 || $hh == 13)
            {
                echo "<h3>Professor " .$this->nome ." está em hórario de almoço</h3>";
            }
            else
            {
                echo "<h3>O professor " .$this->nome ." não dá aula nesse hórario!</h3>";
            }
        }

        public function getEspecialidade()
        {
            return $this->especialidade;
        }

        public function getSalario()
        {
            return $this->salario;
        }

        public function getCargoHorario()
        {
            return $this->cargoHorario;
        }

        public function getIntervalo()
        {
            return $this->intervalo;
        }

        public function setEspecialidade($e)
        {
            $this->especialidade = $e;
        }

        public function setSalario($s)
        {
            $this->salario = $s;
        }

        public function setCargoHorario($ch)
        {
            $this->cargoHorario = $ch;
        }

        public function setIntervalo($in)
        {
            $this->intervalo = $in;
        }
    }
?>