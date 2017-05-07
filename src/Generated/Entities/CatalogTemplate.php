<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Types\JsonMap;

class CatalogTemplate extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'answers',
		'binding',
		'description',
		'dockerCompose',
		'name',
		'rancherCompose',
		'templateId',
		'templateVersionId',
	];

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
	 * @api-type binding
	 * @var Binding
	 */
	protected $binding;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $description;

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
	protected $name;

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
	protected $templateId;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $templateVersionId;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/catalogtemplate'];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(JsonMap $answers, \Binding $binding, string $description, string $dockerCompose, string $name, string $rancherCompose, string $templateId, string $templateVersionId)
	{
		$result = new static();
		$result->answers = $answers;
		$result->binding = $binding;
		$result->description = $description;
		$result->dockerCompose = $dockerCompose;
		$result->name = $name;
		$result->rancherCompose = $rancherCompose;
		$result->templateId = $templateId;
		$result->templateVersionId = $templateVersionId;
		return $result;
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
	 * @api-type binding
	 * @return Binding
	 */
	public function getBinding(): Binding
	{
		return $this->binding;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getDescription(): string
	{
		return $this->description;
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
	public function getName(): string
	{
		return $this->name;
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
	public function getTemplateId(): string
	{
		return $this->templateId;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getTemplateVersionId(): string
	{
		return $this->templateVersionId;
	}

}
