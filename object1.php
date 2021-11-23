<?php
    //Define class
    class Countries {
        //Propertries
        public $province;
        public $hit;

        //Methods
        function set_Province($province){
            $this->province = $province;
        }
        function get_Province(){
            return $this->province;
        }
    }
    //Define object
    $newTour = new Countries();
    $newHit = new Countries();
    $newTour->set_Province('Trat');
    $newHit->set_Province('Koh Chang');
    echo $newTour->get_Province();
    echo "<br />";
    echo $newHit->get_Province();

?>