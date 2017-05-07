<?php
namespace SamIT\Rancher\Generated\Entities;

use DateTimeInterface;
use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class RegistryCredential extends Credential
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'created',
		'description',
		'id',
		'kind',
		'name',
		'publicValue',
		'registryId',
		'removed',
		'secretValue',
		'state',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
		'uuid',
	];

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $publicValue;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type reference[registry]
	 * @var string
	 */
	protected $registryId;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type password
	 * @var Password
	 */
	protected $secretValue;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/registrycredential',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/registrycredentials',
	];


	public function setPublicValue(string $value = NULL)
	{
		$this->publicValue = $value;
	}


	/**
	 * @simple-getter
	 * @return string
	 */
	public function getRegistryId(): string
	{
		return $this->registryId;
	}


	/**
	 * --> getter from reference: reference[registry]
	 */
	public function getRegistry(): ?Registry
	{
		return $this->client()->getRegistry($this->registryId);
	}


	public function setSecretValue(Password $value = NULL)
	{
		$this->secretValue = $value;
	}

}
