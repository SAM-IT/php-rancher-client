<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\Certificate;

class CertificateMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = Certificate::class;
	}


	public function get(string $key): ?Certificate
	{
		return $this->data[0];
	}

}
