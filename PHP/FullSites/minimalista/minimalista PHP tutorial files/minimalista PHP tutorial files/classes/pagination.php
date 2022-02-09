<?php

Class Pagination
{
	private $URL = "";

	public function __construct()
	{
		$this->URL = $_GET;
	}

	public function current_page_number()
	{
		$page = isset($this->URL['page']) ? (int)$this->URL['page'] : 1;
		return $page;
	}

	public function generate_link($number)
	{
		$url = isset($this->URL['url']) ? $this->URL['url'] : "";
		
		$num = 0;
		foreach ($this->URL as $key => $value) {
			# code...
			$num++;
			if($num == 1)
			{
 				$url .= "?";
 				if($key != "url")
				{
 					$url .= $key . "=" . $value;
					
				}
				continue;
			}

			if($key == "url")
			{
				continue;
			}

			if($key == "page")
			{
				$url .= "&" . $key . "=" . $number;
				continue;
			}
  
			$url .= "&" . $key . "=" . $value;
		}

		if(!strstr($url, "page=")){
			return ROOT . $url . "page=" . $number;
		}
		return ROOT . $url;
	}

}