<?php
namespace SamIT\Rancher\Generated\Entities;

class ProcessExecution extends \SamIT\Rancher\Types\Entity
{
	/** @var date */
	public $created;

	/** @var int */
	public $id;

	/** @var JsonMap */
	public $log = [];

	/**
	 * @var string
	 * @api-type reference[processInstance]
	 */
	public $processInstanceId;

	/** @var string */
	public $uuid;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/processexecution',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/processexecutions',
	];


	public function getProcessInstance(): ProcessInstance
	{
	}

}