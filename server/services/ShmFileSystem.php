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
	public  $lastStatus = FileSystemStatus::NONE;
	private $objects        = array();
	private $fileSystemSize = 0;
	private $rootDir;
		
	 function create($fileName) {
	 	
	 }
	
	function file_exists($fileName) {
		 
	}
	
	function file_size($fileName) {
		 
	}
			
	function open($fileName, $mode) {
		switch($mode) {
			case "c":
				break;
			case "r":
				break;
			case "w":
				break;
			case "rw":
				break;
			case "a":
				break
			default:
				throw new Excpetion("Unsupported mode");
		}		 
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