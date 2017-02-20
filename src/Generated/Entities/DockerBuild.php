<?php
namespace SamIT\Rancher\Generated\Entities;

class DockerBuild extends \SamIT\Rancher\Types\Entity
{
	/** @var string */
	public $context;

	/** @var string */
	public $dockerfile;

	/** @var boolean */
	public $forcerm;

	/** @var boolean */
	public $nocache;

	/** @var string */
	public $remote;

	/** @var boolean */
	public $rm;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/dockerbuild'];

}
