<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Types\JsonMap;
use SamIT\Rancher\Types\StringMap;

class StackUpgrade extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'dockerCompose',
		'rancherCompose',
		'externalId',
		'environment',
		'answers',
		'templates',
	];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $dockerCompose;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $rancherCompose;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $externalId;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type map[string]
	 * @var \\SamIT\Rancher\Types\StringMap
	 */
	protected $environment = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type map[json]
	 * @var \\SamIT\Rancher\Types\JsonMap
	 */
	protected $answers = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type map[string]
	 * @var \\SamIT\Rancher\Types\StringMap
	 */
	protected $templates = [];

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/stackupgrade'];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(string $dockerCompose, string $rancherCompose, string $externalId, StringMap $environment, JsonMap $answers, StringMap $templates)
	{
		$result = new static();
		$result->dockerCompose = $dockerCompose;
		$result->rancherCompose = $rancherCompose;
		$result->externalId = $externalId;
		$result->environment = $environment;
		$result->answers = $answers;
		$result->templates = $templates;
		return $result;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getDockerCompose(): string
	{
		return $this->dockerCompose;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getRancherCompose(): string
	{
		return $this->rancherCompose;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getExternalId(): string
	{
		return $this->externalId;
	}


	/**
	 * @simple-getter
	 * @api-type map[string]
	 * @return \\SamIT\Rancher\Types\StringMap
	 */
	public function getEnvironment(): \SamIT\Rancher\Types\StringMap
	{
		return $this->environment;
	}


	/**
	 * @simple-getter
	 * @api-type map[json]
	 * @return \\SamIT\Rancher\Types\JsonMap
	 */
	public function getAnswers(): \SamIT\Rancher\Types\JsonMap
	{
		return $this->answers;
	}


	/**
	 * @simple-getter
	 * @api-type map[string]
	 * @return \\SamIT\Rancher\Types\StringMap
	 */
	public function getTemplates(): \SamIT\Rancher\Types\StringMap
	{
		return $this->templates;
	}

}
