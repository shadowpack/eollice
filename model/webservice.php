<?php
if(!class_exists('db_core'))
{
	require_once('db_core.php');
}
class webservice{
	function returnData($data){
		$auxiliar = array();
		foreach ($data as $key => $value) {
			$auxiliar[utf8_encode($key)] = utf8_encode($value);
		}
		echo json_encode((object)$auxiliar);
	}
	function getToken($uc=TRUE,$n=TRUE,$sc=TRUE,$table,$campo)
	{
		$db = new db_core();
	    $source = 'abcdefghijklmnopqrstuvwxyz';
	    if($uc==1) $source .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    if($n==1) $source .= '1234567890';
	    if($sc==1) $source .= '|@#~$%()=^*+[]{}-_';
	    if($length>0){
	    	while(true)
	    	{
		        $rstr = "";
		        $source = str_split($source,1);
		        for($i=1; $i<=15; $i++){
		            mt_srand((double)microtime() * 1000000);
		            $num = mt_rand(1,count($source));
		            $rstr .= $source[$num-1];
		        }
		        if(!$db->isExists('users','opeToken',$rstr))
		        {
		        	break;
		        }
	    	}
	 
	    }
	    return $rstr;
	}
}
?>