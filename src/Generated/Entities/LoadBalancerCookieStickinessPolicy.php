<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Generated\Enums\ModeEnum;

class LoadBalancerCookieStickinessPolicy extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['cookie', 'domain', 'indirect', 'mode', 'name', 'nocache', 'postonly'];

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $cookie;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $domain;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type boolean
	 * @var boolean
	 */
	protected $indirect;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type enum
	 * @var ModeEnum
	 */
	protected $mode;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $name;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type boolean
	 * @var boolean
	 */
	protected $nocache;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type boolean
	 * @var boolean
	 */
	protected $postonly;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/loadbalancercookiestickinesspolicy',
	];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(string $cookie, string $domain)
	{
		$result = new static();
		$result->cookie = $cookie;
		$result->domain = $domain;
		return $result;
	}


	/**
	 * @simple-getter
	 */
	public function getCookie(): string
	{
		return $this->cookie;
	}


	public function setCookie(string $value)
	{
		$this->cookie = $value;
	}


	/**
	 * @simple-getter
	 */
	public function getDomain(): string
	{
		return $this->domain;
	}


	public function setDomain(string $value)
	{
		$this->domain = $value;
	}


	/**
	 * @simple-getter
	 */
	public function getIndirect(): \boolean
	{
		return $this->indirect;
	}


	public function setIndirect(\boolean $value = NULL)
	{
		$this->indirect = $value;
	}


	/**
	 * @simple-getter
	 * @return ModeEnum
	 */
	public function getMode(): ModeEnum
	{
		return $this->mode;
	}


	public function setMode(ModeEnum $value = NULL)
	{
		$this->mode = $value;
	}


	/**
	 * @simple-getter
	 */
	public function getName(): string
	{
		return $this->name;
	}


	public function setName(string $value = NULL)
	{
		$this->name = $value;
	}


	/**
	 * @simple-getter
	 */
	public function getNocache(): \boolean
	{
		return $this->nocache;
	}


	public function setNocache(\boolean $value = NULL)
	{
		$this->nocache = $value;
	}


	/**
	 * @simple-getter
	 */
	public function getPostonly(): \boolean
	{
		return $this->postonly;
	}


	public function setPostonly(\boolean $value = NULL)
	{
		$this->postonly = $value;
	}

}
