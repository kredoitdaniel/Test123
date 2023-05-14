<?php
    class Calculator {
        private $num1;
        private $num2;
        private $operator;


        // setters
        public function setNum1($new_num1)
        {
            $this->num1 = $new_num1;
        }

        public function setNum2($new_num2)
        {
            $this->num2 = $new_num2;
        }

        public function setOperator($new_operator)
        {
            $this->operator = $new_operator;
        }


        // getters
        public function getNum1()
        {
            return $this->num1;
        }

        public function getNum2()
        {
            return $this->num2;
        }

        public function getOperator()
        {
            return $this->operator;
        }


        // computation
        public function compute()
        {
            if($this->operator == '+'){
                $ans = $this->num1 + $this->num2;
            }
            elseif($this->operator == '-'){
                $ans = $this->num1 - $this->num2;
            }
            elseif($this->operator == '*'){
                $ans = $this->num1 * $this->num2;
            }
            else{
                $ans = $this->num1 / $this->num2;
            }

            return $ans;
        }
    }
?>