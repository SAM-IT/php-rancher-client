<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Collections\AgentCollection;
use SamIT\Rancher\Generated\Collections\AuditLogCollection;
use SamIT\Rancher\Generated\Collections\BackupCollection;
use SamIT\Rancher\Generated\Collections\BackupTargetCollection;
use SamIT\Rancher\Generated\Collections\CertificateCollection;
use SamIT\Rancher\Generated\Collections\ConfigItemStatuseCollection;
use SamIT\Rancher\Generated\Collections\ContainerEventCollection;
use SamIT\Rancher\Generated\Collections\CredentialCollection;
use SamIT\Rancher\Generated\Collections\ExternalEventCollection;
use SamIT\Rancher\Generated\Collections\GenericObjectCollection;
use SamIT\Rancher\Generated\Collections\HealthcheckInstanceHostMapCollection;
use SamIT\Rancher\Generated\Collections\HostCollection;
use SamIT\Rancher\Generated\Collections\ImageCollection;
use SamIT\Rancher\Generated\Collections\InstanceCollection;
use SamIT\Rancher\Generated\Collections\InstanceLinkCollection;
use SamIT\Rancher\Generated\Collections\IpAddresseCollection;
use SamIT\Rancher\Generated\Collections\LabelCollection;
use SamIT\Rancher\Generated\Collections\MountCollection;
use SamIT\Rancher\Generated\Collections\NetworkCollection;
use SamIT\Rancher\Generated\Collections\NetworkDriverCollection;
use SamIT\Rancher\Generated\Collections\PhysicalHostCollection;
use SamIT\Rancher\Generated\Collections\PortCollection;
use SamIT\Rancher\Generated\Collections\ProcessInstanceCollection;
use SamIT\Rancher\Generated\Collections\ProjectMemberCollection;
use SamIT\Rancher\Generated\Collections\ProjectTemplateCollection;
use SamIT\Rancher\Generated\Collections\SecretCollection;
use SamIT\Rancher\Generated\Collections\ServiceCollection;
use SamIT\Rancher\Generated\Collections\ServiceConsumeMapCollection;
use SamIT\Rancher\Generated\Collections\ServiceEventCollection;
use SamIT\Rancher\Generated\Collections\ServiceExposeMapCollection;
use SamIT\Rancher\Generated\Collections\ServiceLogCollection;
use SamIT\Rancher\Generated\Collections\SnapshotCollection;
use SamIT\Rancher\Generated\Collections\StackCollection;
use SamIT\Rancher\Generated\Collections\StorageDriverCollection;
use SamIT\Rancher\Generated\Collections\StoragePoolCollection;
use SamIT\Rancher\Generated\Collections\SubnetCollection;
use SamIT\Rancher\Generated\Collections\UserPreferenceCollection;
use SamIT\Rancher\Generated\Collections\VolumeCollection;
use SamIT\Rancher\Generated\Collections\VolumeTemplateCollection;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class Account extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'created',
		'data',
		'description',
		'externalId',
		'externalIdType',
		'id',
		'kind',
		'name',
		'removeTime',
		'removed',
		'state',
		'uuid',
		'version',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
		'identity',
	];

	/** @var date */
	public $created;

	/** @var JsonMap */
	public $data = [];

	/** @var string */
	public $description;

	/** @var string */
	public $externalId;

	/** @var string */
	public $externalIdType;

	/** @var int */
	public $id;

	/** @var string */
	public $kind;

	/** @var string */
	public $name;

	/** @var date */
	public $removeTime;

	/** @var date */
	public $removed;

	/** @var StateEnum */
	public $state;

	/** @var string */
	public $uuid;

	/** @var string */
	public $version;

	/** @var TransitioningEnum */
	public $transitioning;

	/** @var string */
	public $transitioningMessage;

	/** @var int */
	public $transitioningProgress;

	/**
	 * @var string
	 * @api-type reference[identity]
	 */
	public $identity;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/account',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/accounts',
	];


	public function getIdentity(): Identity
	{
	}


	public function getProjectMembers(): ProjectMemberCollection
	{
		return $this->client->retrieveEntities($this->links['projectMembers']);
	}


	public function getAuditLogs(): AuditLogCollection
	{
		return $this->client->retrieveEntities($this->links['auditLogs']);
	}


	public function getCredentials(): CredentialCollection
	{
		return $this->client->retrieveEntities($this->links['credentials']);
	}


	public function getInstances(): InstanceCollection
	{
		return $this->client->retrieveEntities($this->links['instances']);
	}


	public function getProcessInstances(): ProcessInstanceCollection
	{
		return $this->client->retrieveEntities($this->links['processInstances']);
	}


	public function getServiceExposeMaps(): ServiceExposeMapCollection
	{
		return $this->client->retrieveEntities($this->links['serviceExposeMaps']);
	}


	public function getNetworks(): NetworkCollection
	{
		return $this->client->retrieveEntities($this->links['networks']);
	}


	public function getPorts(): PortCollection
	{
		return $this->client->retrieveEntities($this->links['ports']);
	}


	public function getServiceConsumeMaps(): ServiceConsumeMapCollection
	{
		return $this->client->retrieveEntities($this->links['serviceConsumeMaps']);
	}


	public function getInstanceLinks(): InstanceLinkCollection
	{
		return $this->client->retrieveEntities($this->links['instanceLinks']);
	}


	public function getIpAddresses(): IpAddresseCollection
	{
		return $this->client->retrieveEntities($this->links['ipAddresses']);
	}


	public function getStoragePools(): StoragePoolCollection
	{
		return $this->client->retrieveEntities($this->links['storagePools']);
	}


	public function getExternalEvents(): ExternalEventCollection
	{
		return $this->client->retrieveEntities($this->links['externalEvents']);
	}


	public function getSubnets(): SubnetCollection
	{
		return $this->client->retrieveEntities($this->links['subnets']);
	}


	public function getUserPreferences(): UserPreferenceCollection
	{
		return $this->client->retrieveEntities($this->links['userPreferences']);
	}


	public function getProjectTemplates(): ProjectTemplateCollection
	{
		return $this->client->retrieveEntities($this->links['projectTemplates']);
	}


	public function getImages(): ImageCollection
	{
		return $this->client->retrieveEntities($this->links['images']);
	}


	public function getVolumeTemplates(): VolumeTemplateCollection
	{
		return $this->client->retrieveEntities($this->links['volumeTemplates']);
	}


	public function getHosts(): HostCollection
	{
		return $this->client->retrieveEntities($this->links['hosts']);
	}


	public function getStacks(): StackCollection
	{
		return $this->client->retrieveEntities($this->links['stacks']);
	}


	public function getVolumes(): VolumeCollection
	{
		return $this->client->retrieveEntities($this->links['volumes']);
	}


	public function getMounts(): MountCollection
	{
		return $this->client->retrieveEntities($this->links['mounts']);
	}


	public function getServiceEvents(): ServiceEventCollection
	{
		return $this->client->retrieveEntities($this->links['serviceEvents']);
	}


	public function getServices(): ServiceCollection
	{
		return $this->client->retrieveEntities($this->links['services']);
	}


	public function getNetworkDrivers(): NetworkDriverCollection
	{
		return $this->client->retrieveEntities($this->links['networkDrivers']);
	}


	public function getSecrets(): SecretCollection
	{
		return $this->client->retrieveEntities($this->links['secrets']);
	}


	public function getAgents(): AgentCollection
	{
		return $this->client->retrieveEntities($this->links['agents']);
	}


	public function getLabels(): LabelCollection
	{
		return $this->client->retrieveEntities($this->links['labels']);
	}


	public function getHealthcheckInstanceHostMaps(): HealthcheckInstanceHostMapCollection
	{
		return $this->client->retrieveEntities($this->links['healthcheckInstanceHostMaps']);
	}


	public function getSnapshots(): SnapshotCollection
	{
		return $this->client->retrieveEntities($this->links['snapshots']);
	}


	public function getCertificates(): CertificateCollection
	{
		return $this->client->retrieveEntities($this->links['certificates']);
	}


	public function getBackupTargets(): BackupTargetCollection
	{
		return $this->client->retrieveEntities($this->links['backupTargets']);
	}


	public function getGenericObjects(): GenericObjectCollection
	{
		return $this->client->retrieveEntities($this->links['genericObjects']);
	}


	public function getStorageDrivers(): StorageDriverCollection
	{
		return $this->client->retrieveEntities($this->links['storageDrivers']);
	}


	public function getConfigItemStatuses(): ConfigItemStatuseCollection
	{
		return $this->client->retrieveEntities($this->links['configItemStatuses']);
	}


	public function getPhysicalHosts(): PhysicalHostCollection
	{
		return $this->client->retrieveEntities($this->links['physicalHosts']);
	}


	public function getContainerEvents(): ContainerEventCollection
	{
		return $this->client->retrieveEntities($this->links['containerEvents']);
	}


	public function getServiceLogs(): ServiceLogCollection
	{
		return $this->client->retrieveEntities($this->links['serviceLogs']);
	}


	public function getBackups(): BackupCollection
	{
		return $this->client->retrieveEntities($this->links['backups']);
	}

}
