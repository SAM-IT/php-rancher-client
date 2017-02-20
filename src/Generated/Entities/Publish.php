<?php
namespace SamIT\Rancher\Generated\Entities;

class Publish extends \SamIT\Rancher\Types\Entity
{
	/** @var JsonMap */
	public $data = [];

	/** @var string */
	public $id;

	/** @var string */
	public $name;

	/** @var string[] */
	public $previousIds = [];

	/** @var string */
	public $publisher;

	/** @var string */
	public $resourceId;

	/** @var string */
	public $resourceType;

	/** @var int */
	public $time;

	/** @var string */
	public $transitioning;

	/** @var string */
	public $transitioningInternalMessage;

	/** @var string */
	public $transitioningMessage;

	/** @var int */
	public $transitioningProgress;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/publish'];

}
