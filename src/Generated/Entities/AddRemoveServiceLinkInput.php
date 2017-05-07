<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class AddRemoveServiceLinkInput extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['serviceLink'];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type serviceLink
	 * @var ServiceLink
	 */
	protected $serviceLink;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/addremoveservicelinkinput',
	];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(\ServiceLink $serviceLink)
	{
		$result = new static();
		$result->serviceLink = $serviceLink;
		return $result;
	}


	/**
	 * @simple-getter
	 * @return ServiceLink
	 */
	public function getServiceLink(): ServiceLink
	{
		return $this->serviceLink;
	}

}
