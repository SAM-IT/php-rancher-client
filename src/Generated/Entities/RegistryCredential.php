<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Collections\AccounCollection;
use SamIT\Rancher\Generated\Collections\ImageCollection;
use SamIT\Rancher\Generated\Collections\InstanceCollection;
use SamIT\Rancher\Generated\Collections\RegistrCollection;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class RegistryCredential extends Credential
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
		'registryId',
		'removeTime',
		'removed',
		'secretValue',
		'state',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
		'uuid',
		'email',
	];

	/**
	 * @var string
	 * @api-type reference[registry]
	 */
	public $registryId;

	/** @var string */
	public $email;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/registrycredential',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/registrycredentials',
	];


	public function getAccount(): AccounCollection
	{
		return $this->client->retrieveEntities($this->links['account']);
	}


	public function getRegistry(): RegistrCollection
	{
		return $this->client->retrieveEntities($this->links['registry']);
	}


	public function getImages(): ImageCollection
	{
		return $this->client->retrieveEntities($this->links['images']);
	}


	public function getInstances(): InstanceCollection
	{
		return $this->client->retrieveEntities($this->links['instances']);
	}

}
