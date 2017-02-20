<?php
namespace SamIT\Rancher\Generated\Entities;

class LbConfig extends \SamIT\Rancher\Types\Entity
{
	/** @var string */
	public $config;

	/** @var portRule[] */
	public $portRules = [];

	/** @var reference[certificate][] */
	public $certificateIds = [];

	/**
	 * @var string
	 * @api-type reference[certificate]
	 */
	public $defaultCertificateId;

	/** @var loadBalancerCookieStickinessPolicy */
	public $stickinessPolicy;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/lbconfig'];


	public function getDefaultCertificate(): DefaultCertificate
	{
	}

}
