<?php
namespace SamIT\Rancher\Generated\Entities;

class ContainerExec extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['attachStdin', 'attachStdout', 'command', 'tty'];

	/** @var boolean */
	public $attachStdin;

	/** @var boolean */
	public $attachStdout;

	/** @var string[] */
	public $command = [];

	/** @var boolean */
	public $tty;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/containerexec'];

}
