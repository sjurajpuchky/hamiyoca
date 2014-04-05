<?php

namespace \hamiyoca\server\services;

abstract class FileSystemStatus {
	const NONE = -1;
	const CREATED = 0;
	const SUCCESS = 1;
	const FAILED = 2;
}