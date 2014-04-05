<?php 

class WorkManager {
	private $minimumWorkersForInitiateJob;
	private $clients;
	private $jobs=array();
	
	function _construct($minimumWorkersForInitiateJob = 0) {
		if(isset($_SERVER['hamiyoca_WorkManager'])) {
		  $_SERVER['hamiyoca_WorkManager'] = $this;
		}
		
		return $_SERVER['hamiyoca_WorkManager'];
	}
	
	public function join() {
		$_SESSION[""]
	}
	
	public function initiate() {
		
	}
	
}

?>