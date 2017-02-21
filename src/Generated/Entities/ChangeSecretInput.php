<?php
namespace SamIT\Rancher\Generated\Entities;

class ChangeSecretInput extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['oldSecret', 'newSecret'];

	/** @var string */
	public $oldSecret;

	/** @var string */
	public $newSecret;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/changesecretinput',
	];

}
