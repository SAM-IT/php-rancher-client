<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\ServiceBinding;

class ServiceBindingMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = ServiceBinding::class;
	}


	public function get(string $key): ?ServiceBinding
	{
		return $this->data[0];
	}

}
