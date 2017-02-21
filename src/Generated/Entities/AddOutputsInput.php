<?php
namespace SamIT\Rancher\Generated\Entities;

class AddOutputsInput extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['outputs'];

	/** @var StringMap */
	public $outputs = [];

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/addoutputsinput'];

}
