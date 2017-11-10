<?php

namespace ShuttFW\Controllers;

class SeoController
{
	public function checkSlug($url)
	{
		$urlArray = preg_split('[/]', $url, -1, PREG_SPLIT_NO_EMPTY);
		return $urlArray;
	}
}