<?php
namespace SamIT\Rancher\Generated;

use SamIT\Rancher\Generated\Collections\AccountCollection;
use SamIT\Rancher\Generated\Collections\ApiKeyCollection;
use SamIT\Rancher\Generated\Collections\AuditLogCollection;
use SamIT\Rancher\Generated\Collections\BackupCollection;
use SamIT\Rancher\Generated\Collections\BackupTargetCollection;
use SamIT\Rancher\Generated\Collections\CertificateCollection;
use SamIT\Rancher\Generated\Collections\ComposeProjectCollection;
use SamIT\Rancher\Generated\Collections\ComposeServiceCollection;
use SamIT\Rancher\Generated\Collections\ContainerCollection;
use SamIT\Rancher\Generated\Collections\ContainerEventCollection;
use SamIT\Rancher\Generated\Collections\CredentialCollection;
use SamIT\Rancher\Generated\Collections\DnsServiceCollection;
use SamIT\Rancher\Generated\Collections\ExternalDnsEventCollection;
use SamIT\Rancher\Generated\Collections\ExternalEventCollection;
use SamIT\Rancher\Generated\Collections\ExternalHostEventCollection;
use SamIT\Rancher\Generated\Collections\ExternalServiceCollection;
use SamIT\Rancher\Generated\Collections\ExternalServiceEventCollection;
use SamIT\Rancher\Generated\Collections\ExternalStoragePoolEventCollection;
use SamIT\Rancher\Generated\Collections\ExternalVolumeEventCollection;
use SamIT\Rancher\Generated\Collections\GenericObjectCollection;
use SamIT\Rancher\Generated\Collections\HealthcheckInstanceHostMapCollection;
use SamIT\Rancher\Generated\Collections\HostCollection;
use SamIT\Rancher\Generated\Collections\HostTemplateCollection;
use SamIT\Rancher\Generated\Collections\IdentityCollection;
use SamIT\Rancher\Generated\Collections\ImageCollection;
use SamIT\Rancher\Generated\Collections\InstanceCollection;
use SamIT\Rancher\Generated\Collections\InstanceLinkCollection;
use SamIT\Rancher\Generated\Collections\IpAddressCollection;
use SamIT\Rancher\Generated\Collections\KubernetesServiceCollection;
use SamIT\Rancher\Generated\Collections\KubernetesStackCollection;
use SamIT\Rancher\Generated\Collections\LabelCollection;
use SamIT\Rancher\Generated\Collections\LoadBalancerServiceCollection;
use SamIT\Rancher\Generated\Collections\MachineCollection;
use SamIT\Rancher\Generated\Collections\MachineDriverCollection;
use SamIT\Rancher\Generated\Collections\MountCollection;
use SamIT\Rancher\Generated\Collections\NetworkCollection;
use SamIT\Rancher\Generated\Collections\NetworkDriverCollection;
use SamIT\Rancher\Generated\Collections\NetworkDriverServiceCollection;
use SamIT\Rancher\Generated\Collections\NetworkPolicyRuleWithinCollection;
use SamIT\Rancher\Generated\Collections\PasswordCollection;
use SamIT\Rancher\Generated\Collections\PhysicalHostCollection;
use SamIT\Rancher\Generated\Collections\PortCollection;
use SamIT\Rancher\Generated\Collections\ProjectCollection;
use SamIT\Rancher\Generated\Collections\ProjectMemberCollection;
use SamIT\Rancher\Generated\Collections\ProjectTemplateCollection;
use SamIT\Rancher\Generated\Collections\PullTaskCollection;
use SamIT\Rancher\Generated\Collections\RegisterCollection;
use SamIT\Rancher\Generated\Collections\RegistrationTokenCollection;
use SamIT\Rancher\Generated\Collections\RegistryCollection;
use SamIT\Rancher\Generated\Collections\RegistryCredentialCollection;
use SamIT\Rancher\Generated\Collections\ScheduledUpgradeCollection;
use SamIT\Rancher\Generated\Collections\SchemaCollection;
use SamIT\Rancher\Generated\Collections\SecretCollection;
use SamIT\Rancher\Generated\Collections\ServiceCollection;
use SamIT\Rancher\Generated\Collections\ServiceConsumeMapCollection;
use SamIT\Rancher\Generated\Collections\ServiceEventCollection;
use SamIT\Rancher\Generated\Collections\ServiceExposeMapCollection;
use SamIT\Rancher\Generated\Collections\ServiceLogCollection;
use SamIT\Rancher\Generated\Collections\ServiceProxyCollection;
use SamIT\Rancher\Generated\Collections\SettingCollection;
use SamIT\Rancher\Generated\Collections\SnapshotCollection;
use SamIT\Rancher\Generated\Collections\StackCollection;
use SamIT\Rancher\Generated\Collections\StorageDriverCollection;
use SamIT\Rancher\Generated\Collections\StorageDriverServiceCollection;
use SamIT\Rancher\Generated\Collections\StoragePoolCollection;
use SamIT\Rancher\Generated\Collections\SubnetCollection;
use SamIT\Rancher\Generated\Collections\SubscribeCollection;
use SamIT\Rancher\Generated\Collections\TypeDocumentationCollection;
use SamIT\Rancher\Generated\Collections\VirtualMachineCollection;
use SamIT\Rancher\Generated\Collections\VolumeCollection;
use SamIT\Rancher\Generated\Collections\VolumeTemplateCollection;
use SamIT\Rancher\Generated\Entities\Account;
use SamIT\Rancher\Generated\Entities\ApiKey;
use SamIT\Rancher\Generated\Entities\AuditLog;
use SamIT\Rancher\Generated\Entities\Backup;
use SamIT\Rancher\Generated\Entities\BackupTarget;
use SamIT\Rancher\Generated\Entities\Certificate;
use SamIT\Rancher\Generated\Entities\ComposeProject;
use SamIT\Rancher\Generated\Entities\ComposeService;
use SamIT\Rancher\Generated\Entities\Container;
use SamIT\Rancher\Generated\Entities\ContainerEvent;
use SamIT\Rancher\Generated\Entities\Credential;
use SamIT\Rancher\Generated\Entities\DnsService;
use SamIT\Rancher\Generated\Entities\ExternalDnsEvent;
use SamIT\Rancher\Generated\Entities\ExternalEvent;
use SamIT\Rancher\Generated\Entities\ExternalHostEvent;
use SamIT\Rancher\Generated\Entities\ExternalService;
use SamIT\Rancher\Generated\Entities\ExternalServiceEvent;
use SamIT\Rancher\Generated\Entities\ExternalStoragePoolEvent;
use SamIT\Rancher\Generated\Entities\ExternalVolumeEvent;
use SamIT\Rancher\Generated\Entities\GenericObject;
use SamIT\Rancher\Generated\Entities\HealthcheckInstanceHostMap;
use SamIT\Rancher\Generated\Entities\Host;
use SamIT\Rancher\Generated\Entities\HostTemplate;
use SamIT\Rancher\Generated\Entities\Identity;
use SamIT\Rancher\Generated\Entities\Image;
use SamIT\Rancher\Generated\Entities\Instance;
use SamIT\Rancher\Generated\Entities\InstanceLink;
use SamIT\Rancher\Generated\Entities\IpAddress;
use SamIT\Rancher\Generated\Entities\KubernetesService;
use SamIT\Rancher\Generated\Entities\KubernetesStack;
use SamIT\Rancher\Generated\Entities\Label;
use SamIT\Rancher\Generated\Entities\LoadBalancerService;
use SamIT\Rancher\Generated\Entities\Machine;
use SamIT\Rancher\Generated\Entities\MachineDriver;
use SamIT\Rancher\Generated\Entities\Mount;
use SamIT\Rancher\Generated\Entities\Network;
use SamIT\Rancher\Generated\Entities\NetworkDriver;
use SamIT\Rancher\Generated\Entities\NetworkDriverService;
use SamIT\Rancher\Generated\Entities\NetworkPolicyRuleWithin;
use SamIT\Rancher\Generated\Entities\Password;
use SamIT\Rancher\Generated\Entities\PhysicalHost;
use SamIT\Rancher\Generated\Entities\Port;
use SamIT\Rancher\Generated\Entities\Project;
use SamIT\Rancher\Generated\Entities\ProjectMember;
use SamIT\Rancher\Generated\Entities\ProjectTemplate;
use SamIT\Rancher\Generated\Entities\PullTask;
use SamIT\Rancher\Generated\Entities\Register;
use SamIT\Rancher\Generated\Entities\RegistrationToken;
use SamIT\Rancher\Generated\Entities\Registry;
use SamIT\Rancher\Generated\Entities\RegistryCredential;
use SamIT\Rancher\Generated\Entities\ScheduledUpgrade;
use SamIT\Rancher\Generated\Entities\Schema;
use SamIT\Rancher\Generated\Entities\Secret;
use SamIT\Rancher\Generated\Entities\Service;
use SamIT\Rancher\Generated\Entities\ServiceConsumeMap;
use SamIT\Rancher\Generated\Entities\ServiceEvent;
use SamIT\Rancher\Generated\Entities\ServiceExposeMap;
use SamIT\Rancher\Generated\Entities\ServiceLog;
use SamIT\Rancher\Generated\Entities\ServiceProxy;
use SamIT\Rancher\Generated\Entities\Setting;
use SamIT\Rancher\Generated\Entities\Snapshot;
use SamIT\Rancher\Generated\Entities\Stack;
use SamIT\Rancher\Generated\Entities\StorageDriver;
use SamIT\Rancher\Generated\Entities\StorageDriverService;
use SamIT\Rancher\Generated\Entities\StoragePool;
use SamIT\Rancher\Generated\Entities\Subnet;
use SamIT\Rancher\Generated\Entities\Subscribe;
use SamIT\Rancher\Generated\Entities\TypeDocumentation;
use SamIT\Rancher\Generated\Entities\VirtualMachine;
use SamIT\Rancher\Generated\Entities\Volume;
use SamIT\Rancher\Generated\Entities\VolumeTemplate;

class Client extends \SamIT\Rancher\Client
{
	public $namespace = '\SamIT\Rancher\Generated';


	/**
	 * @return Account[]|AccountCollection
	 */
	public function getAccounts(?int $limit = NULL): AccountCollection
	{
		$result = $this->retrieveEntities('/accounts', $limit);
		if ($result instanceof AccountCollection) return $result;
	}


	/**
	 * Find a account by id
	 */
	public function getAccount(string $id): Account
	{
		$result = $this->retrieveEntity('/accounts', $id);
		if ($result instanceof Account)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return ApiKey[]|ApiKeyCollection
	 */
	public function getApiKeys(?int $limit = NULL): ApiKeyCollection
	{
		$result = $this->retrieveEntities('/apikeys', $limit);
		if ($result instanceof ApiKeyCollection) return $result;
	}


	/**
	 * Find a apiKey by id
	 */
	public function getApiKey(string $id): ApiKey
	{
		$result = $this->retrieveEntity('/apikeys', $id);
		if ($result instanceof ApiKey)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return AuditLog[]|AuditLogCollection
	 */
	public function getAuditLogs(?int $limit = NULL): AuditLogCollection
	{
		$result = $this->retrieveEntities('/auditlogs', $limit);
		if ($result instanceof AuditLogCollection) return $result;
	}


	/**
	 * Find a auditLog by id
	 */
	public function getAuditLog(string $id): AuditLog
	{
		$result = $this->retrieveEntity('/auditlogs', $id);
		if ($result instanceof AuditLog)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return Backup[]|BackupCollection
	 */
	public function getBackups(?int $limit = NULL): BackupCollection
	{
		$result = $this->retrieveEntities('/backups', $limit);
		if ($result instanceof BackupCollection) return $result;
	}


	/**
	 * Find a backup by id
	 */
	public function getBackup(string $id): Backup
	{
		$result = $this->retrieveEntity('/backups', $id);
		if ($result instanceof Backup)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return BackupTarget[]|BackupTargetCollection
	 */
	public function getBackupTargets(?int $limit = NULL): BackupTargetCollection
	{
		$result = $this->retrieveEntities('/backuptargets', $limit);
		if ($result instanceof BackupTargetCollection) return $result;
	}


	/**
	 * Find a backupTarget by id
	 */
	public function getBackupTarget(string $id): BackupTarget
	{
		$result = $this->retrieveEntity('/backuptargets', $id);
		if ($result instanceof BackupTarget)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return Certificate[]|CertificateCollection
	 */
	public function getCertificates(?int $limit = NULL): CertificateCollection
	{
		$result = $this->retrieveEntities('/certificates', $limit);
		if ($result instanceof CertificateCollection) return $result;
	}


	/**
	 * Find a certificate by id
	 */
	public function getCertificate(string $id): Certificate
	{
		$result = $this->retrieveEntity('/certificates', $id);
		if ($result instanceof Certificate)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return ComposeProject[]|ComposeProjectCollection
	 */
	public function getComposeProjects(?int $limit = NULL): ComposeProjectCollection
	{
		$result = $this->retrieveEntities('/composeprojects', $limit);
		if ($result instanceof ComposeProjectCollection) return $result;
	}


	/**
	 * Find a composeProject by id
	 */
	public function getComposeProject(string $id): ComposeProject
	{
		$result = $this->retrieveEntity('/composeprojects', $id);
		if ($result instanceof ComposeProject)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return ComposeService[]|ComposeServiceCollection
	 */
	public function getComposeServices(?int $limit = NULL): ComposeServiceCollection
	{
		$result = $this->retrieveEntities('/composeservices', $limit);
		if ($result instanceof ComposeServiceCollection) return $result;
	}


	/**
	 * Find a composeService by id
	 */
	public function getComposeService(string $id): ComposeService
	{
		$result = $this->retrieveEntity('/composeservices', $id);
		if ($result instanceof ComposeService)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return Container[]|ContainerCollection
	 */
	public function getContainers(?int $limit = NULL): ContainerCollection
	{
		$result = $this->retrieveEntities('/containers', $limit);
		if ($result instanceof ContainerCollection) return $result;
	}


	/**
	 * Find a container by id
	 */
	public function getContainer(string $id): Container
	{
		$result = $this->retrieveEntity('/containers', $id);
		if ($result instanceof Container)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return ContainerEvent[]|ContainerEventCollection
	 */
	public function getContainerEvents(?int $limit = NULL): ContainerEventCollection
	{
		$result = $this->retrieveEntities('/containerevents', $limit);
		if ($result instanceof ContainerEventCollection) return $result;
	}


	/**
	 * Find a containerEvent by id
	 */
	public function getContainerEvent(string $id): ContainerEvent
	{
		$result = $this->retrieveEntity('/containerevents', $id);
		if ($result instanceof ContainerEvent)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return Credential[]|CredentialCollection
	 */
	public function getCredentials(?int $limit = NULL): CredentialCollection
	{
		$result = $this->retrieveEntities('/credentials', $limit);
		if ($result instanceof CredentialCollection) return $result;
	}


	/**
	 * Find a credential by id
	 */
	public function getCredential(string $id): Credential
	{
		$result = $this->retrieveEntity('/credentials', $id);
		if ($result instanceof Credential)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return DnsService[]|DnsServiceCollection
	 */
	public function getDnsServices(?int $limit = NULL): DnsServiceCollection
	{
		$result = $this->retrieveEntities('/dnsservices', $limit);
		if ($result instanceof DnsServiceCollection) return $result;
	}


	/**
	 * Find a dnsService by id
	 */
	public function getDnsService(string $id): DnsService
	{
		$result = $this->retrieveEntity('/dnsservices', $id);
		if ($result instanceof DnsService)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return ExternalDnsEvent[]|ExternalDnsEventCollection
	 */
	public function getExternalDnsEvents(?int $limit = NULL): ExternalDnsEventCollection
	{
		$result = $this->retrieveEntities('/externaldnsevents', $limit);
		if ($result instanceof ExternalDnsEventCollection) return $result;
	}


	/**
	 * Find a externalDnsEvent by id
	 */
	public function getExternalDnsEvent(string $id): ExternalDnsEvent
	{
		$result = $this->retrieveEntity('/externaldnsevents', $id);
		if ($result instanceof ExternalDnsEvent)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return ExternalEvent[]|ExternalEventCollection
	 */
	public function getExternalEvents(?int $limit = NULL): ExternalEventCollection
	{
		$result = $this->retrieveEntities('/externalevents', $limit);
		if ($result instanceof ExternalEventCollection) return $result;
	}


	/**
	 * Find a externalEvent by id
	 */
	public function getExternalEvent(string $id): ExternalEvent
	{
		$result = $this->retrieveEntity('/externalevents', $id);
		if ($result instanceof ExternalEvent)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return ExternalHostEvent[]|ExternalHostEventCollection
	 */
	public function getExternalHostEvents(?int $limit = NULL): ExternalHostEventCollection
	{
		$result = $this->retrieveEntities('/externalhostevents', $limit);
		if ($result instanceof ExternalHostEventCollection) return $result;
	}


	/**
	 * Find a externalHostEvent by id
	 */
	public function getExternalHostEvent(string $id): ExternalHostEvent
	{
		$result = $this->retrieveEntity('/externalhostevents', $id);
		if ($result instanceof ExternalHostEvent)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return ExternalService[]|ExternalServiceCollection
	 */
	public function getExternalServices(?int $limit = NULL): ExternalServiceCollection
	{
		$result = $this->retrieveEntities('/externalservices', $limit);
		if ($result instanceof ExternalServiceCollection) return $result;
	}


	/**
	 * Find a externalService by id
	 */
	public function getExternalService(string $id): ExternalService
	{
		$result = $this->retrieveEntity('/externalservices', $id);
		if ($result instanceof ExternalService)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return ExternalServiceEvent[]|ExternalServiceEventCollection
	 */
	public function getExternalServiceEvents(?int $limit = NULL): ExternalServiceEventCollection
	{
		$result = $this->retrieveEntities('/externalserviceevents', $limit);
		if ($result instanceof ExternalServiceEventCollection) return $result;
	}


	/**
	 * Find a externalServiceEvent by id
	 */
	public function getExternalServiceEvent(string $id): ExternalServiceEvent
	{
		$result = $this->retrieveEntity('/externalserviceevents', $id);
		if ($result instanceof ExternalServiceEvent)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return ExternalStoragePoolEvent[]|ExternalStoragePoolEventCollection
	 */
	public function getExternalStoragePoolEvents(?int $limit = NULL): ExternalStoragePoolEventCollection
	{
		$result = $this->retrieveEntities('/externalstoragepoolevents', $limit);
		if ($result instanceof ExternalStoragePoolEventCollection) return $result;
	}


	/**
	 * Find a externalStoragePoolEvent by id
	 */
	public function getExternalStoragePoolEvent(string $id): ExternalStoragePoolEvent
	{
		$result = $this->retrieveEntity('/externalstoragepoolevents', $id);
		if ($result instanceof ExternalStoragePoolEvent)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return ExternalVolumeEvent[]|ExternalVolumeEventCollection
	 */
	public function getExternalVolumeEvents(?int $limit = NULL): ExternalVolumeEventCollection
	{
		$result = $this->retrieveEntities('/externalvolumeevents', $limit);
		if ($result instanceof ExternalVolumeEventCollection) return $result;
	}


	/**
	 * Find a externalVolumeEvent by id
	 */
	public function getExternalVolumeEvent(string $id): ExternalVolumeEvent
	{
		$result = $this->retrieveEntity('/externalvolumeevents', $id);
		if ($result instanceof ExternalVolumeEvent)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return GenericObject[]|GenericObjectCollection
	 */
	public function getGenericObjects(?int $limit = NULL): GenericObjectCollection
	{
		$result = $this->retrieveEntities('/genericobjects', $limit);
		if ($result instanceof GenericObjectCollection) return $result;
	}


	/**
	 * Find a genericObject by id
	 */
	public function getGenericObject(string $id): GenericObject
	{
		$result = $this->retrieveEntity('/genericobjects', $id);
		if ($result instanceof GenericObject)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return HealthcheckInstanceHostMap[]|HealthcheckInstanceHostMapCollection
	 */
	public function getHealthcheckInstanceHostMaps(?int $limit = NULL): HealthcheckInstanceHostMapCollection
	{
		$result = $this->retrieveEntities('/healthcheckinstancehostmaps', $limit);
		if ($result instanceof HealthcheckInstanceHostMapCollection) return $result;
	}


	/**
	 * Find a healthcheckInstanceHostMap by id
	 */
	public function getHealthcheckInstanceHostMap(string $id): HealthcheckInstanceHostMap
	{
		$result = $this->retrieveEntity('/healthcheckinstancehostmaps', $id);
		if ($result instanceof HealthcheckInstanceHostMap)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return Host[]|HostCollection
	 */
	public function getHosts(?int $limit = NULL): HostCollection
	{
		$result = $this->retrieveEntities('/hosts', $limit);
		if ($result instanceof HostCollection) return $result;
	}


	/**
	 * Find a host by id
	 */
	public function getHost(string $id): Host
	{
		$result = $this->retrieveEntity('/hosts', $id);
		if ($result instanceof Host)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return HostTemplate[]|HostTemplateCollection
	 */
	public function getHostTemplates(?int $limit = NULL): HostTemplateCollection
	{
		$result = $this->retrieveEntities('/hosttemplates', $limit);
		if ($result instanceof HostTemplateCollection) return $result;
	}


	/**
	 * Find a hostTemplate by id
	 */
	public function getHostTemplate(string $id): HostTemplate
	{
		$result = $this->retrieveEntity('/hosttemplates', $id);
		if ($result instanceof HostTemplate)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return Identity[]|IdentityCollection
	 */
	public function getIdentities(?int $limit = NULL): IdentityCollection
	{
		$result = $this->retrieveEntities('/identities', $limit);
		if ($result instanceof IdentityCollection) return $result;
	}


	/**
	 * Find a identity by id
	 */
	public function getIdentity(string $id): Identity
	{
		$result = $this->retrieveEntity('/identities', $id);
		if ($result instanceof Identity)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return Image[]|ImageCollection
	 */
	public function getImages(?int $limit = NULL): ImageCollection
	{
		$result = $this->retrieveEntities('/images', $limit);
		if ($result instanceof ImageCollection) return $result;
	}


	/**
	 * Find a image by id
	 */
	public function getImage(string $id): Image
	{
		$result = $this->retrieveEntity('/images', $id);
		if ($result instanceof Image)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return Instance[]|InstanceCollection
	 */
	public function getInstances(?int $limit = NULL): InstanceCollection
	{
		$result = $this->retrieveEntities('/instances', $limit);
		if ($result instanceof InstanceCollection) return $result;
	}


	/**
	 * Find a instance by id
	 */
	public function getInstance(string $id): Instance
	{
		$result = $this->retrieveEntity('/instances', $id);
		if ($result instanceof Instance)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return InstanceLink[]|InstanceLinkCollection
	 */
	public function getInstanceLinks(?int $limit = NULL): InstanceLinkCollection
	{
		$result = $this->retrieveEntities('/instancelinks', $limit);
		if ($result instanceof InstanceLinkCollection) return $result;
	}


	/**
	 * Find a instanceLink by id
	 */
	public function getInstanceLink(string $id): InstanceLink
	{
		$result = $this->retrieveEntity('/instancelinks', $id);
		if ($result instanceof InstanceLink)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return IpAddress[]|IpAddressCollection
	 */
	public function getIpAddresses(?int $limit = NULL): IpAddressCollection
	{
		$result = $this->retrieveEntities('/ipaddresses', $limit);
		if ($result instanceof IpAddressCollection) return $result;
	}


	/**
	 * Find a ipAddress by id
	 */
	public function getIpAddress(string $id): IpAddress
	{
		$result = $this->retrieveEntity('/ipaddresses', $id);
		if ($result instanceof IpAddress)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return KubernetesService[]|KubernetesServiceCollection
	 */
	public function getKubernetesServices(?int $limit = NULL): KubernetesServiceCollection
	{
		$result = $this->retrieveEntities('/kubernetesservices', $limit);
		if ($result instanceof KubernetesServiceCollection) return $result;
	}


	/**
	 * Find a kubernetesService by id
	 */
	public function getKubernetesService(string $id): KubernetesService
	{
		$result = $this->retrieveEntity('/kubernetesservices', $id);
		if ($result instanceof KubernetesService)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return KubernetesStack[]|KubernetesStackCollection
	 */
	public function getKubernetesStacks(?int $limit = NULL): KubernetesStackCollection
	{
		$result = $this->retrieveEntities('/kubernetesstacks', $limit);
		if ($result instanceof KubernetesStackCollection) return $result;
	}


	/**
	 * Find a kubernetesStack by id
	 */
	public function getKubernetesStack(string $id): KubernetesStack
	{
		$result = $this->retrieveEntity('/kubernetesstacks', $id);
		if ($result instanceof KubernetesStack)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return Label[]|LabelCollection
	 */
	public function getLabels(?int $limit = NULL): LabelCollection
	{
		$result = $this->retrieveEntities('/labels', $limit);
		if ($result instanceof LabelCollection) return $result;
	}


	/**
	 * Find a label by id
	 */
	public function getLabel(string $id): Label
	{
		$result = $this->retrieveEntity('/labels', $id);
		if ($result instanceof Label)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return LoadBalancerService[]|LoadBalancerServiceCollection
	 */
	public function getLoadBalancerServices(?int $limit = NULL): LoadBalancerServiceCollection
	{
		$result = $this->retrieveEntities('/loadbalancerservices', $limit);
		if ($result instanceof LoadBalancerServiceCollection) return $result;
	}


	/**
	 * Find a loadBalancerService by id
	 */
	public function getLoadBalancerService(string $id): LoadBalancerService
	{
		$result = $this->retrieveEntity('/loadbalancerservices', $id);
		if ($result instanceof LoadBalancerService)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return Machine[]|MachineCollection
	 */
	public function getMachines(?int $limit = NULL): MachineCollection
	{
		$result = $this->retrieveEntities('/machines', $limit);
		if ($result instanceof MachineCollection) return $result;
	}


	/**
	 * Find a machine by id
	 */
	public function getMachine(string $id): Machine
	{
		$result = $this->retrieveEntity('/machines', $id);
		if ($result instanceof Machine)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return MachineDriver[]|MachineDriverCollection
	 */
	public function getMachineDrivers(?int $limit = NULL): MachineDriverCollection
	{
		$result = $this->retrieveEntities('/machinedrivers', $limit);
		if ($result instanceof MachineDriverCollection) return $result;
	}


	/**
	 * Find a machineDriver by id
	 */
	public function getMachineDriver(string $id): MachineDriver
	{
		$result = $this->retrieveEntity('/machinedrivers', $id);
		if ($result instanceof MachineDriver)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return Mount[]|MountCollection
	 */
	public function getMounts(?int $limit = NULL): MountCollection
	{
		$result = $this->retrieveEntities('/mounts', $limit);
		if ($result instanceof MountCollection) return $result;
	}


	/**
	 * Find a mount by id
	 */
	public function getMount(string $id): Mount
	{
		$result = $this->retrieveEntity('/mounts', $id);
		if ($result instanceof Mount)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return Network[]|NetworkCollection
	 */
	public function getNetworks(?int $limit = NULL): NetworkCollection
	{
		$result = $this->retrieveEntities('/networks', $limit);
		if ($result instanceof NetworkCollection) return $result;
	}


	/**
	 * Find a network by id
	 */
	public function getNetwork(string $id): Network
	{
		$result = $this->retrieveEntity('/networks', $id);
		if ($result instanceof Network)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return NetworkDriver[]|NetworkDriverCollection
	 */
	public function getNetworkDrivers(?int $limit = NULL): NetworkDriverCollection
	{
		$result = $this->retrieveEntities('/networkdrivers', $limit);
		if ($result instanceof NetworkDriverCollection) return $result;
	}


	/**
	 * Find a networkDriver by id
	 */
	public function getNetworkDriver(string $id): NetworkDriver
	{
		$result = $this->retrieveEntity('/networkdrivers', $id);
		if ($result instanceof NetworkDriver)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return NetworkDriverService[]|NetworkDriverServiceCollection
	 */
	public function getNetworkDriverServices(?int $limit = NULL): NetworkDriverServiceCollection
	{
		$result = $this->retrieveEntities('/networkdriverservices', $limit);
		if ($result instanceof NetworkDriverServiceCollection) return $result;
	}


	/**
	 * Find a networkDriverService by id
	 */
	public function getNetworkDriverService(string $id): NetworkDriverService
	{
		$result = $this->retrieveEntity('/networkdriverservices', $id);
		if ($result instanceof NetworkDriverService)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return NetworkPolicyRuleWithin[]|NetworkPolicyRuleWithinCollection
	 */
	public function getNetworkPolicyRuleWithins(?int $limit = NULL): NetworkPolicyRuleWithinCollection
	{
		$result = $this->retrieveEntities('/networkpolicyrulewithins', $limit);
		if ($result instanceof NetworkPolicyRuleWithinCollection) return $result;
	}


	/**
	 * Find a networkPolicyRuleWithin by id
	 */
	public function getNetworkPolicyRuleWithin(string $id): NetworkPolicyRuleWithin
	{
		$result = $this->retrieveEntity('/networkpolicyrulewithins', $id);
		if ($result instanceof NetworkPolicyRuleWithin)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return Password[]|PasswordCollection
	 */
	public function getPasswords(?int $limit = NULL): PasswordCollection
	{
		$result = $this->retrieveEntities('/passwords', $limit);
		if ($result instanceof PasswordCollection) return $result;
	}


	/**
	 * Find a password by id
	 */
	public function getPassword(string $id): Password
	{
		$result = $this->retrieveEntity('/passwords', $id);
		if ($result instanceof Password)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return PhysicalHost[]|PhysicalHostCollection
	 */
	public function getPhysicalHosts(?int $limit = NULL): PhysicalHostCollection
	{
		$result = $this->retrieveEntities('/physicalhosts', $limit);
		if ($result instanceof PhysicalHostCollection) return $result;
	}


	/**
	 * Find a physicalHost by id
	 */
	public function getPhysicalHost(string $id): PhysicalHost
	{
		$result = $this->retrieveEntity('/physicalhosts', $id);
		if ($result instanceof PhysicalHost)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return Port[]|PortCollection
	 */
	public function getPorts(?int $limit = NULL): PortCollection
	{
		$result = $this->retrieveEntities('/ports', $limit);
		if ($result instanceof PortCollection) return $result;
	}


	/**
	 * Find a port by id
	 */
	public function getPort(string $id): Port
	{
		$result = $this->retrieveEntity('/ports', $id);
		if ($result instanceof Port)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return Project[]|ProjectCollection
	 */
	public function getProjects(?int $limit = NULL): ProjectCollection
	{
		$result = $this->retrieveEntities('/projects', $limit);
		if ($result instanceof ProjectCollection) return $result;
	}


	/**
	 * Find a project by id
	 */
	public function getProject(string $id): Project
	{
		$result = $this->retrieveEntity('/projects', $id);
		if ($result instanceof Project)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return ProjectMember[]|ProjectMemberCollection
	 */
	public function getProjectMembers(?int $limit = NULL): ProjectMemberCollection
	{
		$result = $this->retrieveEntities('/projectmembers', $limit);
		if ($result instanceof ProjectMemberCollection) return $result;
	}


	/**
	 * Find a projectMember by id
	 */
	public function getProjectMember(string $id): ProjectMember
	{
		$result = $this->retrieveEntity('/projectmembers', $id);
		if ($result instanceof ProjectMember)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return ProjectTemplate[]|ProjectTemplateCollection
	 */
	public function getProjectTemplates(?int $limit = NULL): ProjectTemplateCollection
	{
		$result = $this->retrieveEntities('/projecttemplates', $limit);
		if ($result instanceof ProjectTemplateCollection) return $result;
	}


	/**
	 * Find a projectTemplate by id
	 */
	public function getProjectTemplate(string $id): ProjectTemplate
	{
		$result = $this->retrieveEntity('/projecttemplates', $id);
		if ($result instanceof ProjectTemplate)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return PullTask[]|PullTaskCollection
	 */
	public function getPullTasks(?int $limit = NULL): PullTaskCollection
	{
		$result = $this->retrieveEntities('/pulltasks', $limit);
		if ($result instanceof PullTaskCollection) return $result;
	}


	/**
	 * Find a pullTask by id
	 */
	public function getPullTask(string $id): PullTask
	{
		$result = $this->retrieveEntity('/pulltasks', $id);
		if ($result instanceof PullTask)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * Find a register by id
	 */
	public function getRegister(string $id): Register
	{
		$result = $this->retrieveEntity('/register', $id);
		if ($result instanceof Register)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return RegistrationToken[]|RegistrationTokenCollection
	 */
	public function getRegistrationTokens(?int $limit = NULL): RegistrationTokenCollection
	{
		$result = $this->retrieveEntities('/registrationtokens', $limit);
		if ($result instanceof RegistrationTokenCollection) return $result;
	}


	/**
	 * Find a registrationToken by id
	 */
	public function getRegistrationToken(string $id): RegistrationToken
	{
		$result = $this->retrieveEntity('/registrationtokens', $id);
		if ($result instanceof RegistrationToken)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return Registry[]|RegistryCollection
	 */
	public function getRegistries(?int $limit = NULL): RegistryCollection
	{
		$result = $this->retrieveEntities('/registries', $limit);
		if ($result instanceof RegistryCollection) return $result;
	}


	/**
	 * Find a registry by id
	 */
	public function getRegistry(string $id): Registry
	{
		$result = $this->retrieveEntity('/registries', $id);
		if ($result instanceof Registry)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return RegistryCredential[]|RegistryCredentialCollection
	 */
	public function getRegistryCredentials(?int $limit = NULL): RegistryCredentialCollection
	{
		$result = $this->retrieveEntities('/registrycredentials', $limit);
		if ($result instanceof RegistryCredentialCollection) return $result;
	}


	/**
	 * Find a registryCredential by id
	 */
	public function getRegistryCredential(string $id): RegistryCredential
	{
		$result = $this->retrieveEntity('/registrycredentials', $id);
		if ($result instanceof RegistryCredential)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return ScheduledUpgrade[]|ScheduledUpgradeCollection
	 */
	public function getScheduledUpgrades(?int $limit = NULL): ScheduledUpgradeCollection
	{
		$result = $this->retrieveEntities('/scheduledupgrades', $limit);
		if ($result instanceof ScheduledUpgradeCollection) return $result;
	}


	/**
	 * Find a scheduledUpgrade by id
	 */
	public function getScheduledUpgrade(string $id): ScheduledUpgrade
	{
		$result = $this->retrieveEntity('/scheduledupgrades', $id);
		if ($result instanceof ScheduledUpgrade)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return Schema[]|SchemaCollection
	 */
	public function getSchemas(?int $limit = NULL): SchemaCollection
	{
		$result = $this->retrieveEntities('/schemas', $limit);
		if ($result instanceof SchemaCollection) return $result;
	}


	/**
	 * Find a schema by id
	 */
	public function getSchema(string $id): Schema
	{
		$result = $this->retrieveEntity('/schemas', $id);
		if ($result instanceof Schema)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return Secret[]|SecretCollection
	 */
	public function getSecrets(?int $limit = NULL): SecretCollection
	{
		$result = $this->retrieveEntities('/secrets', $limit);
		if ($result instanceof SecretCollection) return $result;
	}


	/**
	 * Find a secret by id
	 */
	public function getSecret(string $id): Secret
	{
		$result = $this->retrieveEntity('/secrets', $id);
		if ($result instanceof Secret)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return Service[]|ServiceCollection
	 */
	public function getServices(?int $limit = NULL): ServiceCollection
	{
		$result = $this->retrieveEntities('/services', $limit);
		if ($result instanceof ServiceCollection) return $result;
	}


	/**
	 * Find a service by id
	 */
	public function getService(string $id): Service
	{
		$result = $this->retrieveEntity('/services', $id);
		if ($result instanceof Service)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return ServiceConsumeMap[]|ServiceConsumeMapCollection
	 */
	public function getServiceConsumeMaps(?int $limit = NULL): ServiceConsumeMapCollection
	{
		$result = $this->retrieveEntities('/serviceconsumemaps', $limit);
		if ($result instanceof ServiceConsumeMapCollection) return $result;
	}


	/**
	 * Find a serviceConsumeMap by id
	 */
	public function getServiceConsumeMap(string $id): ServiceConsumeMap
	{
		$result = $this->retrieveEntity('/serviceconsumemaps', $id);
		if ($result instanceof ServiceConsumeMap)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return ServiceEvent[]|ServiceEventCollection
	 */
	public function getServiceEvents(?int $limit = NULL): ServiceEventCollection
	{
		$result = $this->retrieveEntities('/serviceevents', $limit);
		if ($result instanceof ServiceEventCollection) return $result;
	}


	/**
	 * Find a serviceEvent by id
	 */
	public function getServiceEvent(string $id): ServiceEvent
	{
		$result = $this->retrieveEntity('/serviceevents', $id);
		if ($result instanceof ServiceEvent)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return ServiceExposeMap[]|ServiceExposeMapCollection
	 */
	public function getServiceExposeMaps(?int $limit = NULL): ServiceExposeMapCollection
	{
		$result = $this->retrieveEntities('/serviceexposemaps', $limit);
		if ($result instanceof ServiceExposeMapCollection) return $result;
	}


	/**
	 * Find a serviceExposeMap by id
	 */
	public function getServiceExposeMap(string $id): ServiceExposeMap
	{
		$result = $this->retrieveEntity('/serviceexposemaps', $id);
		if ($result instanceof ServiceExposeMap)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return ServiceLog[]|ServiceLogCollection
	 */
	public function getServiceLogs(?int $limit = NULL): ServiceLogCollection
	{
		$result = $this->retrieveEntities('/servicelogs', $limit);
		if ($result instanceof ServiceLogCollection) return $result;
	}


	/**
	 * Find a serviceLog by id
	 */
	public function getServiceLog(string $id): ServiceLog
	{
		$result = $this->retrieveEntity('/servicelogs', $id);
		if ($result instanceof ServiceLog)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return ServiceProxy[]|ServiceProxyCollection
	 */
	public function getServiceProxies(?int $limit = NULL): ServiceProxyCollection
	{
		$result = $this->retrieveEntities('/serviceproxies', $limit);
		if ($result instanceof ServiceProxyCollection) return $result;
	}


	/**
	 * Find a serviceProxy by id
	 */
	public function getServiceProxy(string $id): ServiceProxy
	{
		$result = $this->retrieveEntity('/serviceproxies', $id);
		if ($result instanceof ServiceProxy)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return Setting[]|SettingCollection
	 */
	public function getSettings(?int $limit = NULL): SettingCollection
	{
		$result = $this->retrieveEntities('/settings', $limit);
		if ($result instanceof SettingCollection) return $result;
	}


	/**
	 * Find a setting by id
	 */
	public function getSetting(string $id): Setting
	{
		$result = $this->retrieveEntity('/settings', $id);
		if ($result instanceof Setting)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return Snapshot[]|SnapshotCollection
	 */
	public function getSnapshots(?int $limit = NULL): SnapshotCollection
	{
		$result = $this->retrieveEntities('/snapshots', $limit);
		if ($result instanceof SnapshotCollection) return $result;
	}


	/**
	 * Find a snapshot by id
	 */
	public function getSnapshot(string $id): Snapshot
	{
		$result = $this->retrieveEntity('/snapshots', $id);
		if ($result instanceof Snapshot)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return Stack[]|StackCollection
	 */
	public function getStacks(?int $limit = NULL): StackCollection
	{
		$result = $this->retrieveEntities('/stacks', $limit);
		if ($result instanceof StackCollection) return $result;
	}


	/**
	 * Find a stack by id
	 */
	public function getStack(string $id): Stack
	{
		$result = $this->retrieveEntity('/stacks', $id);
		if ($result instanceof Stack)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return StorageDriver[]|StorageDriverCollection
	 */
	public function getStorageDrivers(?int $limit = NULL): StorageDriverCollection
	{
		$result = $this->retrieveEntities('/storagedrivers', $limit);
		if ($result instanceof StorageDriverCollection) return $result;
	}


	/**
	 * Find a storageDriver by id
	 */
	public function getStorageDriver(string $id): StorageDriver
	{
		$result = $this->retrieveEntity('/storagedrivers', $id);
		if ($result instanceof StorageDriver)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return StorageDriverService[]|StorageDriverServiceCollection
	 */
	public function getStorageDriverServices(?int $limit = NULL): StorageDriverServiceCollection
	{
		$result = $this->retrieveEntities('/storagedriverservices', $limit);
		if ($result instanceof StorageDriverServiceCollection) return $result;
	}


	/**
	 * Find a storageDriverService by id
	 */
	public function getStorageDriverService(string $id): StorageDriverService
	{
		$result = $this->retrieveEntity('/storagedriverservices', $id);
		if ($result instanceof StorageDriverService)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return StoragePool[]|StoragePoolCollection
	 */
	public function getStoragePools(?int $limit = NULL): StoragePoolCollection
	{
		$result = $this->retrieveEntities('/storagepools', $limit);
		if ($result instanceof StoragePoolCollection) return $result;
	}


	/**
	 * Find a storagePool by id
	 */
	public function getStoragePool(string $id): StoragePool
	{
		$result = $this->retrieveEntity('/storagepools', $id);
		if ($result instanceof StoragePool)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return Subnet[]|SubnetCollection
	 */
	public function getSubnets(?int $limit = NULL): SubnetCollection
	{
		$result = $this->retrieveEntities('/subnets', $limit);
		if ($result instanceof SubnetCollection) return $result;
	}


	/**
	 * Find a subnet by id
	 */
	public function getSubnet(string $id): Subnet
	{
		$result = $this->retrieveEntity('/subnets', $id);
		if ($result instanceof Subnet)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * Find a subscribe by id
	 */
	public function getSubscribe(string $id): Subscribe
	{
		$result = $this->retrieveEntity('/subscribe', $id);
		if ($result instanceof Subscribe)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return TypeDocumentation[]|TypeDocumentationCollection
	 */
	public function getTypeDocumentations(?int $limit = NULL): TypeDocumentationCollection
	{
		$result = $this->retrieveEntities('/typedocumentations', $limit);
		if ($result instanceof TypeDocumentationCollection) return $result;
	}


	/**
	 * Find a typeDocumentation by id
	 */
	public function getTypeDocumentation(string $id): TypeDocumentation
	{
		$result = $this->retrieveEntity('/typedocumentations', $id);
		if ($result instanceof TypeDocumentation)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return VirtualMachine[]|VirtualMachineCollection
	 */
	public function getVirtualMachines(?int $limit = NULL): VirtualMachineCollection
	{
		$result = $this->retrieveEntities('/virtualmachines', $limit);
		if ($result instanceof VirtualMachineCollection) return $result;
	}


	/**
	 * Find a virtualMachine by id
	 */
	public function getVirtualMachine(string $id): VirtualMachine
	{
		$result = $this->retrieveEntity('/virtualmachines', $id);
		if ($result instanceof VirtualMachine)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return Volume[]|VolumeCollection
	 */
	public function getVolumes(?int $limit = NULL): VolumeCollection
	{
		$result = $this->retrieveEntities('/volumes', $limit);
		if ($result instanceof VolumeCollection) return $result;
	}


	/**
	 * Find a volume by id
	 */
	public function getVolume(string $id): Volume
	{
		$result = $this->retrieveEntity('/volumes', $id);
		if ($result instanceof Volume)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}


	/**
	 * @return VolumeTemplate[]|VolumeTemplateCollection
	 */
	public function getVolumeTemplates(?int $limit = NULL): VolumeTemplateCollection
	{
		$result = $this->retrieveEntities('/volumetemplates', $limit);
		if ($result instanceof VolumeTemplateCollection) return $result;
	}


	/**
	 * Find a volumeTemplate by id
	 */
	public function getVolumeTemplate(string $id): VolumeTemplate
	{
		$result = $this->retrieveEntity('/volumetemplates', $id);
		if ($result instanceof VolumeTemplate)
		    return $result;
		else
		    throw new \Exception("Entity not found.");
	}

}
