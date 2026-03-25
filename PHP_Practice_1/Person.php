<?php
    class Person{
        private $_name = "";
        private $_department = "";
        private $_salary = 0;

        public function __construct($name, $department, $salary) {
            echo "Создан сотрудник <br/>";
            $this->_name = $name;
            $this->_department = $department;
            $this->_salary = $salary;
        }

        public function GoToWork(){
            echo "Я - " . $this->_name . ". Я иду на работу в " . $this->_department . " чтобы получить " . $this->_salary . " за месяц";
        }

        public function GetName(){
            return $this->_name;
        }

        public function SetName($name){
            if(empty($name)){
                $this->_name = "John Doe";           
            }
            $this->_name = $name;
        }
    }
?>