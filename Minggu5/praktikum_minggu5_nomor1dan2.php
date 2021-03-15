<?php
    interface car {
        public function setModel($name);
        public function getModel();
    }

    class minicar implements car {
        private $model;

        public function setModel($name)
        {
            $this->model = $name;
        }

        public function getModel()
        {
            return $this->model;
        }
    }
    $minicar1 = new minicar();
    $minicar2 = new minicar();
    $minicar3 = new minicar();

    $minicar1->setModel("multi-purpose vehicle");
    $minicar2->setModel("sedan");
    $minicar3->setModel("hatchback");

    echo $minicar1->getModel();
    echo "<br/>";
    echo $minicar2->getModel();
    echo "<br/>";
    echo $minicar3->getModel();
?>