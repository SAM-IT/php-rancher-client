<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class Password extends Credential
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'created',
		'data',
		'description',
		'id',
		'kind',
		'name',
		'publicValue',
		'removeTime',
		'removed',
		'secretValue',
		'state',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
		'uuid',
	];

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/password',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/passwords',
	];


	public function getAccount(): \SamIT\Rancher\Generated\Collections\AccounCollection
	{
		return $this->client->retrieveEntities($this->links['account']);
	}


	public function getImages(): \SamIT\Rancher\Generated\Collections\ImageCollection
	{
		return $this->client->retrieveEntities($this->links['images']);
	}


	public function getInstances(): \SamIT\Rancher\Generated\Collections\InstanceCollection
	{
		return $this->client->retrieveEntities($this->links['instances']);
	}

}
