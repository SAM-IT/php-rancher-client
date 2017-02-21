<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class Project extends Account
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'created',
		'data',
		'defaultNetworkId',
		'description',
		'healthState',
		'id',
		'kind',
		'name',
		'projectTemplateId',
		'removeTime',
		'removed',
		'state',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
		'uuid',
		'version',
		'allowSystemRole',
		'members',
		'orchestration',
		'virtualMachine',
		'servicesPortRange',
		'projectLinks',
	];

	/**
	 * @var string
	 * @api-type reference[network]
	 */
	public $defaultNetworkId;

	/** @var string */
	public $healthState;

	/**
	 * @var string
	 * @api-type reference[projectTemplate]
	 */
	public $projectTemplateId;

	/** @var boolean */
	public $allowSystemRole;

	/** @var projectMember[] */
	public $members = [];

	/** @var string */
	public $orchestration;

	/** @var boolean */
	public $virtualMachine;

	/** @var servicesPortRange */
	public $servicesPortRange;

	/** @var reference[project][] */
	public $projectLinks = [];

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/project',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/projects',
	];


	public function getDefaultNetwork(): DefaultNetwork
	{
	}


	public function getProjectTemplate(): \SamIT\Rancher\Generated\Collections\ProjectTemplatCollection
	{
		return $this->client->retrieveEntities($this->links['projectTemplate']);
	}


	public function getProjectMembers(): \SamIT\Rancher\Generated\Collections\ProjectMemberCollection
	{
		return $this->client->retrieveEntities($this->links['projectMembers']);
	}


	public function getAuditLogs(): \SamIT\Rancher\Generated\Collections\AuditLogCollection
	{
		return $this->client->retrieveEntities($this->links['auditLogs']);
	}


	public function getCredentials(): \SamIT\Rancher\Generated\Collections\CredentialCollection
	{
		return $this->client->retrieveEntities($this->links['credentials']);
	}


	public function getInstances(): \SamIT\Rancher\Generated\Collections\InstanceCollection
	{
		return $this->client->retrieveEntities($this->links['instances']);
	}


	public function getProcessInstances(): \SamIT\Rancher\Generated\Collections\ProcessInstanceCollection
	{
		return $this->client->retrieveEntities($this->links['processInstances']);
	}


	public function getServiceExposeMaps(): \SamIT\Rancher\Generated\Collections\ServiceExposeMapCollection
	{
		return $this->client->retrieveEntities($this->links['serviceExposeMaps']);
	}


	public function getNetworks(): \SamIT\Rancher\Generated\Collections\NetworkCollection
	{
		return $this->client->retrieveEntities($this->links['networks']);
	}


	public function getPorts(): \SamIT\Rancher\Generated\Collections\PortCollection
	{
		return $this->client->retrieveEntities($this->links['ports']);
	}


	public function getServiceConsumeMaps(): \SamIT\Rancher\Generated\Collections\ServiceConsumeMapCollection
	{
		return $this->client->retrieveEntities($this->links['serviceConsumeMaps']);
	}


	public function getInstanceLinks(): \SamIT\Rancher\Generated\Collections\InstanceLinkCollection
	{
		return $this->client->retrieveEntities($this->links['instanceLinks']);
	}


	public function getIpAddresses(): \SamIT\Rancher\Generated\Collections\IpAddresseCollection
	{
		return $this->client->retrieveEntities($this->links['ipAddresses']);
	}


	public function getStoragePools(): \SamIT\Rancher\Generated\Collections\StoragePoolCollection
	{
		return $this->client->retrieveEntities($this->links['storagePools']);
	}


	public function getExternalEvents(): \SamIT\Rancher\Generated\Collections\ExternalEventCollection
	{
		return $this->client->retrieveEntities($this->links['externalEvents']);
	}


	public function getSubnets(): \SamIT\Rancher\Generated\Collections\SubnetCollection
	{
		return $this->client->retrieveEntities($this->links['subnets']);
	}


	public function getUserPreferences(): \SamIT\Rancher\Generated\Collections\UserPreferenceCollection
	{
		return $this->client->retrieveEntities($this->links['userPreferences']);
	}


	public function getProjectTemplates(): \SamIT\Rancher\Generated\Collections\ProjectTemplateCollection
	{
		return $this->client->retrieveEntities($this->links['projectTemplates']);
	}


	public function getImages(): \SamIT\Rancher\Generated\Collections\ImageCollection
	{
		return $this->client->retrieveEntities($this->links['images']);
	}


	public function getVolumeTemplates(): \SamIT\Rancher\Generated\Collections\VolumeTemplateCollection
	{
		return $this->client->retrieveEntities($this->links['volumeTemplates']);
	}


	public function getHosts(): \SamIT\Rancher\Generated\Collections\HostCollection
	{
		return $this->client->retrieveEntities($this->links['hosts']);
	}


	public function getStacks(): \SamIT\Rancher\Generated\Collections\StackCollection
	{
		return $this->client->retrieveEntities($this->links['stacks']);
	}


	public function getVolumes(): \SamIT\Rancher\Generated\Collections\VolumeCollection
	{
		return $this->client->retrieveEntities($this->links['volumes']);
	}


	public function getMounts(): \SamIT\Rancher\Generated\Collections\MountCollection
	{
		return $this->client->retrieveEntities($this->links['mounts']);
	}


	public function getServiceEvents(): \SamIT\Rancher\Generated\Collections\ServiceEventCollection
	{
		return $this->client->retrieveEntities($this->links['serviceEvents']);
	}


	public function getServices(): \SamIT\Rancher\Generated\Collections\ServiceCollection
	{
		return $this->client->retrieveEntities($this->links['services']);
	}


	public function getNetworkDrivers(): \SamIT\Rancher\Generated\Collections\NetworkDriverCollection
	{
		return $this->client->retrieveEntities($this->links['networkDrivers']);
	}


	public function getSecrets(): \SamIT\Rancher\Generated\Collections\SecretCollection
	{
		return $this->client->retrieveEntities($this->links['secrets']);
	}


	public function getAgents(): \SamIT\Rancher\Generated\Collections\AgentCollection
	{
		return $this->client->retrieveEntities($this->links['agents']);
	}


	public function getLabels(): \SamIT\Rancher\Generated\Collections\LabelCollection
	{
		return $this->client->retrieveEntities($this->links['labels']);
	}


	public function getHealthcheckInstanceHostMaps(): \SamIT\Rancher\Generated\Collections\HealthcheckInstanceHostMapCollection
	{
		return $this->client->retrieveEntities($this->links['healthcheckInstanceHostMaps']);
	}


	public function getSnapshots(): \SamIT\Rancher\Generated\Collections\SnapshotCollection
	{
		return $this->client->retrieveEntities($this->links['snapshots']);
	}


	public function getCertificates(): \SamIT\Rancher\Generated\Collections\CertificateCollection
	{
		return $this->client->retrieveEntities($this->links['certificates']);
	}


	public function getBackupTargets(): \SamIT\Rancher\Generated\Collections\BackupTargetCollection
	{
		return $this->client->retrieveEntities($this->links['backupTargets']);
	}


	public function getGenericObjects(): \SamIT\Rancher\Generated\Collections\GenericObjectCollection
	{
		return $this->client->retrieveEntities($this->links['genericObjects']);
	}


	public function getStorageDrivers(): \SamIT\Rancher\Generated\Collections\StorageDriverCollection
	{
		return $this->client->retrieveEntities($this->links['storageDrivers']);
	}


	public function getConfigItemStatuses(): \SamIT\Rancher\Generated\Collections\ConfigItemStatuseCollection
	{
		return $this->client->retrieveEntities($this->links['configItemStatuses']);
	}


	public function getPhysicalHosts(): \SamIT\Rancher\Generated\Collections\PhysicalHostCollection
	{
		return $this->client->retrieveEntities($this->links['physicalHosts']);
	}


	public function getContainerEvents(): \SamIT\Rancher\Generated\Collections\ContainerEventCollection
	{
		return $this->client->retrieveEntities($this->links['containerEvents']);
	}


	public function getServiceLogs(): \SamIT\Rancher\Generated\Collections\ServiceLogCollection
	{
		return $this->client->retrieveEntities($this->links['serviceLogs']);
	}


	public function getBackups(): \SamIT\Rancher\Generated\Collections\BackupCollection
	{
		return $this->client->retrieveEntities($this->links['backups']);
	}

}
