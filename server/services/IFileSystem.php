<?php

/**
 * IFileSystem
 * @see interface for FileSystem accessing class
 * @author Juraj Puchký
 * 
 */

namespace \hamiyoca\server\services;

interface IFileSystem {
	 function open($fileName, $mode);
	 function close($file);
	 function read($file);
	 function write($file, $data);
	 function append($file, $data);
	 function time($file);
	 function getallheaders($file);
	 function replicateFileSystemTo($fs);
}
