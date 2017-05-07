<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class ActiveSetting extends Setting
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['activeValue', 'id', 'name', 'value'];

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type json
	 * @var \array
	 */
	protected $activeValue;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $id;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $name;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $value;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/activesetting'];

}
