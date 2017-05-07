<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class KubernetesStackUpgrade extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['templates', 'externalId', 'environment', 'answers'];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type map[string]
	 * @var string[]
	 */
	protected $templates = [];

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

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/kubernetesstackupgrade',
	];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(array $templates, string $externalId, array $environment, \JsonMap $answers)
	{
		$result = new static();
		$result->templates = $templates;
		$result->externalId = $externalId;
		$result->environment = $environment;
		$result->answers = $answers;
		return $result;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getTemplates(): array
	{
		return $this->templates;
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

}
