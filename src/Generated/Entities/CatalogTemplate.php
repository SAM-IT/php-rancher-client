<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

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
	 * @var SamIT\Rancher\Types\JsonMap
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


	public static function create(\JsonMap $answers, \Binding $binding, string $description, string $dockerCompose, string $name, string $rancherCompose, string $templateId, string $templateVersionId)
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
	 * @return SamIT\Rancher\Types\JsonMap
	 */
	public function getAnswers(): SamIT\Rancher\Generated\Entities\JsonMap
	{
		return $this->answers;
	}


	/**
	 * @simple-getter
	 * @return Binding
	 */
	public function getBinding(): Binding
	{
		return $this->binding;
	}


	/**
	 * @simple-getter
	 */
	public function getDescription(): string
	{
		return $this->description;
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
	public function getName(): string
	{
		return $this->name;
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
	public function getTemplateId(): string
	{
		return $this->templateId;
	}


	/**
	 * @simple-getter
	 */
	public function getTemplateVersionId(): string
	{
		return $this->templateVersionId;
	}

}
