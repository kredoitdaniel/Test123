<?php
    class Average {
        private $num1;
        private $num2;
        private $sum;
        public $result_average;

        // setters
        public function setNum1($new_num1)
        {
            $this->num1 = $new_num1;
        }

        public function setNum2($new_num2)
        {
            $this->num2 = $new_num2;
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



        public function add()
        {
            $this->sum = $this->num1 + $this->num2;
        }

        public function displayAverage()
        {
            $this->result_average = ($this->sum / 2);
        }

    }



    $resultAverage = new Average;
    $resultAverage->setNum1(80);
    $resultAverage->setNum2(90);

    echo $resultAverage->getNum1() . "<br>";
    echo $resultAverage->getNum2() . "<br>";

    echo $resultAverage->result_average;
    // echo $resultAverage->displayAverage();
?>