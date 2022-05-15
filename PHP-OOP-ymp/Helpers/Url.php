<?php
namespace Helpers;

class Url {

	public static function getBaseUrl($path) {
		return BASE_URL  . $path;
	}
}