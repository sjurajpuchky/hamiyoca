<?php

/**
 * NonceJob
 * 
 * @version 1.0a
 * @see NonceJob for devide work load to currently active clients
 * @author Jan Biniok <jan@biniok.net>
 * @author Juraj Puchký <sjurajpuchky@seznam.cz>
 * 
 */
class NonceJob {
	public $nonceLoLimit = 0;
	public $nonceHiLimit = 0xFFFFFFFF;
	public $nonceMaximumParts = 0xFFFF;
	public $nonceRange = array();
	public $nonceResults = array();
	
	function _construct($to = 0, $from = 0, $numberOfWorkers = 0) {
		
		if($to > 0) {
			$this->nonceHiLimit = $to;
		}
		
		if($from > 0) {
			$this->nonceLoLimit = $from;
		}
		
		if($numberOfWorkers > 0) {
			$this->numberOfWorkers = $numberOfWorkers;
			$detectedStep = ($this->nonceHiLimit - $this->nonceLoLimit) / $this->numberOfWorkers;
			if($detectedStep => 0 || $detectedStep <= 1) {
				$this->nonceMaximumParts = $this->nonceHiLimit - $this->nonceLoLimit;
			} else {
				$this->nonceMaximumParts = $this->numberOfWorkers;
			}
		}		
		
		$step = ($this->nonceHiLimit - $this->nonceLoLimit) / $this->nonceMaximumParts;
		$low = 0;
		$hi = 0;
		for($n = $this->nonceLoLimit;$n <= $this->nonceHiLimit;$upperLimit += $step) {
			$hi = $n;
			$this->nonceRange[] = array("low" => $low, "hi" => $hi);
			$low = $n;
		}
		
	}
}

?>