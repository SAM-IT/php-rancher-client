<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class LbConfig extends LbTargetConfig
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'config',
		'portRules',
		'certificateIds',
		'defaultCertificateId',
		'stickinessPolicy',
	];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $config;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type array[portRule]
	 * @var PortRule[]
	 */
	protected $portRules = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type array[reference[certificate]]
	 * @var string[][]
	 */
	protected $certificateIds = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type reference[certificate]
	 * @var string
	 */
	protected $defaultCertificateId;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type loadBalancerCookieStickinessPolicy
	 * @var LoadBalancerCookieStickinessPolicy
	 */
	protected $stickinessPolicy;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/lbconfig'];


	/**
	 * @simple-getter
	 */
	public function getConfig(): string
	{
		return $this->config;
	}


	/**
	 * @simple-getter
	 * @return string[][]
	 */
	public function getCertificateIds(): array
	{
		return $this->certificateIds;
	}


	/**
	 * @simple-getter
	 * @return string
	 */
	public function getDefaultCertificateId(): string
	{
		return $this->defaultCertificateId;
	}


	/**
	 * --> getter from reference: reference[certificate]
	 */
	public function getDefaultCertificate(): ?DefaultCertificate
	{
		return $this->client()->getDefaultCertificate($this->defaultCertificateId);
	}


	/**
	 * @simple-getter
	 * @return LoadBalancerCookieStickinessPolicy
	 */
	public function getStickinessPolicy(): LoadBalancerCookieStickinessPolicy
	{
		return $this->stickinessPolicy;
	}

}
