<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

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
	 * @var string[]
	 */
	protected $environment = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type map[json]
	 * @var SamIT\Rancher\Types\JsonMap
	 */
	protected $answers = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type map[string]
	 * @var string[]
	 */
	protected $templates = [];

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/stackupgrade'];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(string $dockerCompose, string $rancherCompose, string $externalId, array $environment, \JsonMap $answers, array $templates)
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
	 */
	public function getDockerCompose(): string
	{
		return $this->dockerCompose;
	}


	/**
	 * @simple-getter
	 */
	public function getRancherCompose(): string
	{
		return $this->rancherCompose;
	}


	/**
	 * @simple-getter
	 */
	public function getExternalId(): string
	{
		return $this->externalId;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getEnvironment(): array
	{
		return $this->environment;
	}


	/**
	 * @simple-getter
	 * @return SamIT\Rancher\Types\JsonMap
	 */
	public function getAnswers(): SamIT\Rancher\Generated\Entities\JsonMap
	{
		return $this->answers;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getTemplates(): array
	{
		return $this->templates;
	}

}
