<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class ContainerExec extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['attachStdin', 'attachStdout', 'command', 'tty'];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $attachStdin;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $attachStdout;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type array[string]
	 * @var string[]
	 */
	protected $command = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $tty;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/containerexec'];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(\boolean $attachStdin, \boolean $attachStdout, array $command, \boolean $tty)
	{
		$result = new static();
		$result->attachStdin = $attachStdin;
		$result->attachStdout = $attachStdout;
		$result->command = $command;
		$result->tty = $tty;
		return $result;
	}


	/**
	 * @simple-getter
	 */
	public function getAttachStdin(): \boolean
	{
		return $this->attachStdin;
	}


	/**
	 * @simple-getter
	 */
	public function getAttachStdout(): \boolean
	{
		return $this->attachStdout;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getCommand(): array
	{
		return $this->command;
	}


	/**
	 * @simple-getter
	 */
	public function getTty(): \boolean
	{
		return $this->tty;
	}

}
