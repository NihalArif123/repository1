<?php
include_once "Facade.php";

    //include("Facade.php");
    include("database.php");
    //$busno=$_POST['busno'];
    //$route=$_POST['route'];
    //$date=$_POST['date'];
    //$time=$_POST['time'];
   /* class Route {

        private $number;
        private $source;
        private $destination;
      
         public function __construct( $n, $s, $d) {
       
          $this->number = $n;
            $this->source = $s;
            $this->destination = $d;
        }
        public function getSource(){
          return $this->source;
        }
      
        public function getDestination(){
          return $this->destination;
        }
       public function getno(){
        return this->number;
      }
      
        function insert($route)
        {
          $db = new Facade();
          $id = $db->insert_route($this);
        }  
      }*/
class Schedule {

  private $bus;
  private $date;
  private $time;
   private $route;

  function __construct() {
 
    $this->bus = "";
  	$this->date = "";
    $this->route= "";
    $this->time="";
  }
    function getBus(){
    return $this->bus;
  }

    function getDate(){
    return $this->date;
  }
    function gettime(){
    return $this->time;
  }
  function getroute(){
    return $this->route;
  }
    function insert($b, $d, $routeObject,$tim)
        {
          $db = new Facadee();
          $id = $db->insert_sch($b, $d, $routeObject,$tim);

        }  
        /*public function joinn(){
        $my_query2='ALTER TABLE schedule (

            PRIMARY KEY (Bus.no);
            FOREIGN KEY (destination) REFERENCES route(destination);'  );
      
         $my_query3='SELECT schedule.Bus.no,schedule.date,schedule.time,schedule.route;
        FROM schedule;
        RIGHT JOIN route ON schedule.destination=route.destination;'}*/
        function get($b, $d, $routeObject,$tim)
        {
          $db = new Facadee();
          $id = $db->get_sch();
          return $id;

        }  
}

?>