<?php
namespace SamIT\Rancher\Generated\Entities;

class ActiveSetting extends Setting
{
	/** @var json */
	public $activeValue;

	/** @var string */
	public $id;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/activesetting'];

}
