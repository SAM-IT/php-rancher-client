<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class DockerBuild extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['context', 'dockerfile', 'forcerm', 'nocache', 'remote', 'rm'];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $context;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $dockerfile;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $forcerm;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $nocache;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $remote;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $rm;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/dockerbuild'];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(\boolean $forcerm, \boolean $nocache, \boolean $rm)
	{
		$result = new static();
		$result->forcerm = $forcerm;
		$result->nocache = $nocache;
		$result->rm = $rm;
		return $result;
	}


	/**
	 * @simple-getter
	 */
	public function getContext(): string
	{
		return $this->context;
	}


	/**
	 * @simple-getter
	 */
	public function getDockerfile(): string
	{
		return $this->dockerfile;
	}


	/**
	 * @simple-getter
	 */
	public function getForcerm(): \boolean
	{
		return $this->forcerm;
	}


	/**
	 * @simple-getter
	 */
	public function getNocache(): \boolean
	{
		return $this->nocache;
	}


	/**
	 * @simple-getter
	 */
	public function getRemote(): string
	{
		return $this->remote;
	}


	/**
	 * @simple-getter
	 */
	public function getRm(): \boolean
	{
		return $this->rm;
	}

}
