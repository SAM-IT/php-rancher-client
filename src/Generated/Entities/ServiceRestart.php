<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class ServiceRestart extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['rollingRestartStrategy'];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type rollingRestartStrategy
	 * @var RollingRestartStrategy
	 */
	protected $rollingRestartStrategy;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/servicerestart'];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(\RollingRestartStrategy $rollingRestartStrategy)
	{
		$result = new static();
		$result->rollingRestartStrategy = $rollingRestartStrategy;
		return $result;
	}


	/**
	 * @simple-getter
	 * @api-type rollingRestartStrategy
	 * @return RollingRestartStrategy
	 */
	public function getRollingRestartStrategy(): RollingRestartStrategy
	{
		return $this->rollingRestartStrategy;
	}

}
