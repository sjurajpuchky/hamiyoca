<?php

/**
 * FileSystem class
 * 
 * @see class to store and manipulate data in shared memory on server side to provide availability of store global vars.
 * @author Juraj Puchký
 * @author Jan Biniok <jan@biniok.net>
 */

namespace \hamiyoca\server\services;

class FileSystem implements FileSystem {
	public $lastStatus = FileSystemStatus::NONE;
	
	function open($fileName, $mode) {
		 
	}
	function close($file) {
		 
	}
	function read($file) {
		 
	}
	function write($file, $data) {
		 
	}
	function append($file, $data) {
		 
	}
	function time($file) {
		 
	}
	function getallheaders($file) {
		 
	}
	function replicateFileSystemTo($fs) {
		 
	}    
}
?>