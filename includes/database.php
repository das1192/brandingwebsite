<?php
  require_once("config.php");

  /**
  * 
  */
  class MysqlDatabase
  {
  	private $connection;
  	function __construct()
  	{
  		
  		$this->open_connection();



  		}
  		function open_connection(){

  			$this->connection = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);
  			if(mysqli_connect_errno()){


  				die("Database connection failed : " . mysqli_connect_error() . "( " . mysqli_connect_errno() . " )" );
  			}
 
  		}



  		function query($sql){

  			$result = mysqli_query($this->connection,$sql);
  			$this->confirm_query($result);
  			return $result;


  		}


  		private function confirm_query($result){

  			if(!$result){

  				die("DATABAE QUERY FAILED");

  			}

  		}
  		public function escape_values($string){

  			$escaped_string = mysqli_real_escape_string($this->connection,$string);

  			return $escaped_string;

  		}

      public function escape_value($string){

        $escaped_string = mysqli_real_escape_string($this->connection,$string);

        return $escaped_string;

      }
  		

  // "database neutral" functions
  
  public function fetch_array($result_set) {
    return mysqli_fetch_array($result_set);
  }

  public function num_rows($result_set) {
    return mysqli_num_rows($result_set);
  }

  public function insert_id() {
    // get the last id inserted over the current db connection
    return mysqli_insert_id($this->connection);
  }

  public function affected_rows() {
    return mysqli_affected_rows($this->connection);
  }
  




  		function close_connection(){

  			if (isset($this->connection)) {
  				mysqli_close($this->connection);
  				unset($this->connection);
  			}

  			
  		}

  	
  }


$database = new MysqlDatabase();
$db=& $da;

?>