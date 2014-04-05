<?php
namespace\hamiyoca\server\services;

/**
 * FileSystemStatus
 * @see FileSystemStatus enum class
 */
abstract class FileSystemStatus {
	const NONE = - 1;
	const CREATED = 0;
	const SUCCESS = 1;
	const OPEN_SUCCESS = 2;
	const WRITE_SUCCESS = 3;
	const READ_SUCCESS = 4;
	const APPEND_SUCCESS = 5;
	const FAILED = 255;
}