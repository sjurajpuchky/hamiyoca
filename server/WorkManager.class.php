<?php 

class WorkManager {
	private $minimumWorkersForInitiateJob;
	private $clients;
	private $job;
	
	function _construct($minimumWorkersForInitiateJob = 0) {
		if(isset($_SERVER['hamiyoca_WorkManager'])) {
		  $_SERVER['hamiyoca_WorkManager'] = $this;
		}
		
		return $_SERVER['hamiyoca_WorkManager'];
	}
	
	public function join() {
		$this->clients++;
	}
	
	public function initiate() {
		
	}
	
	private function updateState() {
		
	}
	
}

?>