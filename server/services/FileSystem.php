<?php

/**
 * FileSystem
 * @see implementation of FileSystem with support of replication to disk filesystem
 * @author Juraj Puchký
 */

namespace hamiyoca\server\services;

class FileSystem implements IFileSystem {
	
	private $diskFs;
	private $shmFs;
	
	function _construct($rootDir = $_SERVER["DOCUMENT_ROOT"]."/data") {
		if(!file_exists($rootDir)) {
			mkdir($rootDir);
		}
		
		$this->diskFs = new DiskFileSystem($rootDir);
		$this->shmFs = new ShmFileSystem($rootDir);
		switch($this->shmFs->lastStatus) {
			case FileSystemStatus::CREATED:
				$this->diskFs->replicateFileSystemTo($this->shmFs);
			break;
			case FileSystemStatus::SUCCESS:
				
			break;
			case FileSystemStatus::FAILED:
				
			break;
		} 
	}
	
	function _destruct() {
		$this->shmFs->replicateFileSystemTo($this->diskFs);
	}
}