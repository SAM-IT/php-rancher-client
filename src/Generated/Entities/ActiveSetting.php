<?php
namespace SamIT\Rancher\Generated\Entities;

class ActiveSetting extends Setting
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['activeValue', 'id', 'inDb', 'name', 'source', 'value'];

	/** @var json */
	public $activeValue;

	/** @var string */
	public $id;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/activesetting'];

}
