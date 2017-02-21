<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\HostApiProxyToken;

class HostApiProxyTokenCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = HostApiProxyToken::class;
	}


	public function first(): ?HostApiProxyToken
	{
		return $this->data[0];
	}

}
