<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\Binding;

class BindingMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = Binding::class;
	}


	public function get(string $key): ?Binding
	{
		return $this->data[0];
	}

}
