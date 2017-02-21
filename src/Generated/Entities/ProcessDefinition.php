<?php
namespace SamIT\Rancher\Generated\Entities;

class ProcessDefinition extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'extensionBased',
		'id',
		'name',
		'postProcessListeners',
		'preProcessListeners',
		'processHandlers',
		'resourceType',
		'stateTransitions',
	];

	/** @var boolean */
	public $extensionBased;

	/** @var string */
	public $id;

	/** @var string */
	public $name;

	/** @var extensionPoint */
	public $postProcessListeners;

	/** @var extensionPoint */
	public $preProcessListeners;

	/** @var extensionPoint */
	public $processHandlers;

	/** @var string */
	public $resourceType;

	/** @var stateTransition[] */
	public $stateTransitions = [];

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/processdefinition',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/processdefinitions',
	];

}
