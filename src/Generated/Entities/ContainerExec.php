<?php
namespace SamIT\Rancher\Generated\Entities;

class ContainerExec extends \SamIT\Rancher\Types\Entity
{
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
