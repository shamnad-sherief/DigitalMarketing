
<?php
Class Connectionclass
{
//**********************************   OPEN    **********************************
  public $bd="";  
  public function open()
   {
        $mysqli_hostname="localhost";
        $mysqli_user="root";
        $mysqli_password="";
        $mysqli_database="digitalmarketing";
        $prefix="";
        $this->bd=mysqli_connect($mysqli_hostname,$mysqli_user,$mysqli_password,$mysqli_database) or die(mysqli_error());
        //mysqli_select_db($mysqli_database,$this->bd) or die("couldn't select databse");
    }
//************************   INSERT    DELETE     UPDATE   ************************
    	public function Manipulation($qry)
		{
			$this->open();
			$response=array();
			try
			{
				$result=mysqli_query( $this->bd,$qry);
			if($result)
				$response['status']="true";
			else
				throw new Exception(mysqli_error($this->bd));
			}
			catch(Exception $e)
			{
				$response['status']="false";
				$response['message']=$e->getMessage();
			}
			mysqli_close($this->bd);
			return($response);
		}
		
//*********************   GET TABLE    ******************************
		public function GetTable($qry)
		{
			$this->open();
			try
			{
				$result=mysqli_query( $this->bd,$qry);
				if($result)
				{
					$data=array();
				while($row=mysqli_fetch_array($result))
				{
					$data[]=$row;
				}
				return $data;
				}
				else
					throw new Exception(mysqli_error($this->bd));
			}
			catch(Exception $e)
			{
				return $e->getMessage();
			}
			mysqli_close($this->bd);
		}
	
//********************   Get Single Data    ******************************
	public function GetSingleData($qry)
	{
			$this->open();
			try
			{
				$result=mysqli_query( $this->bd,$qry);
				if($result)
				{
					$row=mysqli_fetch_row($result);
					return $row[0];
				}
				else
					throw new Exception(mysqli_error($this->bd));
			}
			catch(Exception $e)
			{
				return $e->getMessage();
			}
			//mysqli_close($con);
			mysqli_close($this->bd);
	}
	
		
//***************************GET SINGLE ROW  *********************
		public function GetSingleRow($qry)
		{
			$this->open();
			try
			{
				$result=mysqli_query( $this->bd,$qry);
				if($result)
				{
					$row=mysqli_fetch_array($result);
					return $row;
				}
				else
				throw new Exception(mysqli_error($this->bd));
			}
			catch (Exception $e)
			{
				return $e->getMessage();
			}
			mysqli_close($this->bd);
		}
		
//**********************ALERT MESSAGE   ******************
		function alert($msg,$url=null)
				{
					echo "   <script type='text/javascript'>
					alert('".$msg."');
					location.href='".$url."';
					</script>";
				}
	  } 
   ?>
