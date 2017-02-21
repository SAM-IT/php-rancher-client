<?php
namespace SamIT\Rancher\Generated;

use SamIT\Rancher\Generated\Collections\AccountCollection;
use SamIT\Rancher\Generated\Collections\AgentCollection;
use SamIT\Rancher\Generated\Collections\ApiKeyCollection;
use SamIT\Rancher\Generated\Collections\AuditLogCollection;
use SamIT\Rancher\Generated\Collections\AzureadconfigCollection;
use SamIT\Rancher\Generated\Collections\BackupCollection;
use SamIT\Rancher\Generated\Collections\BackupTargetCollection;
use SamIT\Rancher\Generated\Collections\CertificateCollection;
use SamIT\Rancher\Generated\Collections\ClusterMembershipCollection;
use SamIT\Rancher\Generated\Collections\ComposeProjectCollection;
use SamIT\Rancher\Generated\Collections\ComposeServiceCollection;
use SamIT\Rancher\Generated\Collections\ConfigItemCollection;
use SamIT\Rancher\Generated\Collections\ConfigItemStatusCollection;
use SamIT\Rancher\Generated\Collections\ContainerCollection;
use SamIT\Rancher\Generated\Collections\ContainerEventCollection;
use SamIT\Rancher\Generated\Collections\CredentialCollection;
use SamIT\Rancher\Generated\Collections\DatabasechangelogCollection;
use SamIT\Rancher\Generated\Collections\DatabasechangeloglockCollection;
use SamIT\Rancher\Generated\Collections\DnsServiceCollection;
use SamIT\Rancher\Generated\Collections\ExtensionPointCollection;
use SamIT\Rancher\Generated\Collections\ExternalDnsEventCollection;
use SamIT\Rancher\Generated\Collections\ExternalEventCollection;
use SamIT\Rancher\Generated\Collections\ExternalHandlerCollection;
use SamIT\Rancher\Generated\Collections\ExternalHandlerExternalHandlerProcessMapCollection;
use SamIT\Rancher\Generated\Collections\ExternalHandlerProcessCollection;
use SamIT\Rancher\Generated\Collections\ExternalHostEventCollection;
use SamIT\Rancher\Generated\Collections\ExternalServiceCollection;
use SamIT\Rancher\Generated\Collections\ExternalServiceEventCollection;
use SamIT\Rancher\Generated\Collections\ExternalStoragePoolEventCollection;
use SamIT\Rancher\Generated\Collections\ExternalVolumeEventCollection;
use SamIT\Rancher\Generated\Collections\GenericObjectCollection;
use SamIT\Rancher\Generated\Collections\HaConfigCollection;
use SamIT\Rancher\Generated\Collections\HaConfigInputCollection;
use SamIT\Rancher\Generated\Collections\HealthcheckInstanceHostMapCollection;
use SamIT\Rancher\Generated\Collections\HostApiProxyTokenCollection;
use SamIT\Rancher\Generated\Collections\HostCollection;
use SamIT\Rancher\Generated\Collections\IdentityCollection;
use SamIT\Rancher\Generated\Collections\ImageCollection;
use SamIT\Rancher\Generated\Collections\InstanceCollection;
use SamIT\Rancher\Generated\Collections\InstanceLinkCollection;
use SamIT\Rancher\Generated\Collections\IpAddressCollection;
use SamIT\Rancher\Generated\Collections\KubernetesServiceCollection;
use SamIT\Rancher\Generated\Collections\KubernetesStackCollection;
use SamIT\Rancher\Generated\Collections\LabelCollection;
use SamIT\Rancher\Generated\Collections\LdapconfigCollection;
use SamIT\Rancher\Generated\Collections\LoadBalancerServiceCollection;
use SamIT\Rancher\Generated\Collections\LocalAuthConfigCollection;
use SamIT\Rancher\Generated\Collections\MachineCollection;
use SamIT\Rancher\Generated\Collections\MachineDriverCollection;
use SamIT\Rancher\Generated\Collections\MountCollection;
use SamIT\Rancher\Generated\Collections\NetworkCollection;
use SamIT\Rancher\Generated\Collections\NetworkDriverCollection;
use SamIT\Rancher\Generated\Collections\NetworkDriverServiceCollection;
use SamIT\Rancher\Generated\Collections\NetworkPolicyRuleWithinCollection;
use SamIT\Rancher\Generated\Collections\OpenldapconfigCollection;
use SamIT\Rancher\Generated\Collections\PasswordCollection;
use SamIT\Rancher\Generated\Collections\PhysicalHostCollection;
use SamIT\Rancher\Generated\Collections\PortCollection;
use SamIT\Rancher\Generated\Collections\ProcessDefinitionCollection;
use SamIT\Rancher\Generated\Collections\ProcessExecutionCollection;
use SamIT\Rancher\Generated\Collections\ProcessInstanceCollection;
use SamIT\Rancher\Generated\Collections\ProcessPoolCollection;
use SamIT\Rancher\Generated\Collections\ProcessSummaryCollection;
use SamIT\Rancher\Generated\Collections\ProjectCollection;
use SamIT\Rancher\Generated\Collections\ProjectMemberCollection;
use SamIT\Rancher\Generated\Collections\ProjectTemplateCollection;
use SamIT\Rancher\Generated\Collections\PullTaskCollection;
use SamIT\Rancher\Generated\Collections\RegisterCollection;
use SamIT\Rancher\Generated\Collections\RegistrationTokenCollection;
use SamIT\Rancher\Generated\Collections\RegistryCollection;
use SamIT\Rancher\Generated\Collections\RegistryCredentialCollection;
use SamIT\Rancher\Generated\Collections\ResourceDefinitionCollection;
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
use SamIT\Rancher\Generated\Collections\TaskCollection;
use SamIT\Rancher\Generated\Collections\TaskInstanceCollection;
use SamIT\Rancher\Generated\Collections\TypeDocumentationCollection;
use SamIT\Rancher\Generated\Collections\UserPreferenceCollection;
use SamIT\Rancher\Generated\Collections\VirtualMachineCollection;
use SamIT\Rancher\Generated\Collections\VolumeCollection;
use SamIT\Rancher\Generated\Collections\VolumeTemplateCollection;
use SamIT\Rancher\Generated\Entities\Account;
use SamIT\Rancher\Generated\Entities\Agent;
use SamIT\Rancher\Generated\Entities\ApiKey;
use SamIT\Rancher\Generated\Entities\AuditLog;
use SamIT\Rancher\Generated\Entities\Azureadconfig;
use SamIT\Rancher\Generated\Entities\Backup;
use SamIT\Rancher\Generated\Entities\BackupTarget;
use SamIT\Rancher\Generated\Entities\Certificate;
use SamIT\Rancher\Generated\Entities\ClusterMembership;
use SamIT\Rancher\Generated\Entities\ComposeProject;
use SamIT\Rancher\Generated\Entities\ComposeService;
use SamIT\Rancher\Generated\Entities\ConfigItem;
use SamIT\Rancher\Generated\Entities\ConfigItemStatus;
use SamIT\Rancher\Generated\Entities\Container;
use SamIT\Rancher\Generated\Entities\ContainerEvent;
use SamIT\Rancher\Generated\Entities\Credential;
use SamIT\Rancher\Generated\Entities\Databasechangelog;
use SamIT\Rancher\Generated\Entities\Databasechangeloglock;
use SamIT\Rancher\Generated\Entities\DnsService;
use SamIT\Rancher\Generated\Entities\ExtensionPoint;
use SamIT\Rancher\Generated\Entities\ExternalDnsEvent;
use SamIT\Rancher\Generated\Entities\ExternalEvent;
use SamIT\Rancher\Generated\Entities\ExternalHandler;
use SamIT\Rancher\Generated\Entities\ExternalHandlerExternalHandlerProcessMap;
use SamIT\Rancher\Generated\Entities\ExternalHandlerProcess;
use SamIT\Rancher\Generated\Entities\ExternalHostEvent;
use SamIT\Rancher\Generated\Entities\ExternalService;
use SamIT\Rancher\Generated\Entities\ExternalServiceEvent;
use SamIT\Rancher\Generated\Entities\ExternalStoragePoolEvent;
use SamIT\Rancher\Generated\Entities\ExternalVolumeEvent;
use SamIT\Rancher\Generated\Entities\GenericObject;
use SamIT\Rancher\Generated\Entities\HaConfig;
use SamIT\Rancher\Generated\Entities\HaConfigInput;
use SamIT\Rancher\Generated\Entities\HealthcheckInstanceHostMap;
use SamIT\Rancher\Generated\Entities\Host;
use SamIT\Rancher\Generated\Entities\HostApiProxyToken;
use SamIT\Rancher\Generated\Entities\Identity;
use SamIT\Rancher\Generated\Entities\Image;
use SamIT\Rancher\Generated\Entities\Instance;
use SamIT\Rancher\Generated\Entities\InstanceLink;
use SamIT\Rancher\Generated\Entities\IpAddress;
use SamIT\Rancher\Generated\Entities\KubernetesService;
use SamIT\Rancher\Generated\Entities\KubernetesStack;
use SamIT\Rancher\Generated\Entities\Label;
use SamIT\Rancher\Generated\Entities\Ldapconfig;
use SamIT\Rancher\Generated\Entities\LoadBalancerService;
use SamIT\Rancher\Generated\Entities\LocalAuthConfig;
use SamIT\Rancher\Generated\Entities\Machine;
use SamIT\Rancher\Generated\Entities\MachineDriver;
use SamIT\Rancher\Generated\Entities\Mount;
use SamIT\Rancher\Generated\Entities\Network;
use SamIT\Rancher\Generated\Entities\NetworkDriver;
use SamIT\Rancher\Generated\Entities\NetworkDriverService;
use SamIT\Rancher\Generated\Entities\NetworkPolicyRuleWithin;
use SamIT\Rancher\Generated\Entities\Openldapconfig;
use SamIT\Rancher\Generated\Entities\Password;
use SamIT\Rancher\Generated\Entities\PhysicalHost;
use SamIT\Rancher\Generated\Entities\Port;
use SamIT\Rancher\Generated\Entities\ProcessDefinition;
use SamIT\Rancher\Generated\Entities\ProcessExecution;
use SamIT\Rancher\Generated\Entities\ProcessInstance;
use SamIT\Rancher\Generated\Entities\ProcessPool;
use SamIT\Rancher\Generated\Entities\ProcessSummary;
use SamIT\Rancher\Generated\Entities\Project;
use SamIT\Rancher\Generated\Entities\ProjectMember;
use SamIT\Rancher\Generated\Entities\ProjectTemplate;
use SamIT\Rancher\Generated\Entities\PullTask;
use SamIT\Rancher\Generated\Entities\Register;
use SamIT\Rancher\Generated\Entities\RegistrationToken;
use SamIT\Rancher\Generated\Entities\Registry;
use SamIT\Rancher\Generated\Entities\RegistryCredential;
use SamIT\Rancher\Generated\Entities\ResourceDefinition;
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
use SamIT\Rancher\Generated\Entities\Task;
use SamIT\Rancher\Generated\Entities\TaskInstance;
use SamIT\Rancher\Generated\Entities\TypeDocumentation;
use SamIT\Rancher\Generated\Entities\UserPreference;
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
		return $this->retrieveEntities('/accounts', $limit);
	}


	/**
	 * @return Agent[]|AgentCollection
	 */
	public function getAgents(?int $limit = NULL): AgentCollection
	{
		return $this->retrieveEntities('/agents', $limit);
	}


	/**
	 * @return ApiKey[]|ApiKeyCollection
	 */
	public function getApiKeys(?int $limit = NULL): ApiKeyCollection
	{
		return $this->retrieveEntities('/apikeys', $limit);
	}


	/**
	 * @return AuditLog[]|AuditLogCollection
	 */
	public function getAuditLogs(?int $limit = NULL): AuditLogCollection
	{
		return $this->retrieveEntities('/auditlogs', $limit);
	}


	/**
	 * @return Azureadconfig[]|AzureadconfigCollection
	 */
	public function getAzureadconfigs(?int $limit = NULL): AzureadconfigCollection
	{
		return $this->retrieveEntities('/azureadconfigs', $limit);
	}


	/**
	 * @return Backup[]|BackupCollection
	 */
	public function getBackups(?int $limit = NULL): BackupCollection
	{
		return $this->retrieveEntities('/backups', $limit);
	}


	/**
	 * @return BackupTarget[]|BackupTargetCollection
	 */
	public function getBackupTargets(?int $limit = NULL): BackupTargetCollection
	{
		return $this->retrieveEntities('/backuptargets', $limit);
	}


	/**
	 * @return Certificate[]|CertificateCollection
	 */
	public function getCertificates(?int $limit = NULL): CertificateCollection
	{
		return $this->retrieveEntities('/certificates', $limit);
	}


	/**
	 * @return ClusterMembership[]|ClusterMembershipCollection
	 */
	public function getClusterMemberships(?int $limit = NULL): ClusterMembershipCollection
	{
		return $this->retrieveEntities('/clustermemberships', $limit);
	}


	/**
	 * @return ComposeProject[]|ComposeProjectCollection
	 */
	public function getComposeProjects(?int $limit = NULL): ComposeProjectCollection
	{
		return $this->retrieveEntities('/composeprojects', $limit);
	}


	/**
	 * @return ComposeService[]|ComposeServiceCollection
	 */
	public function getComposeServices(?int $limit = NULL): ComposeServiceCollection
	{
		return $this->retrieveEntities('/composeservices', $limit);
	}


	/**
	 * @return ConfigItem[]|ConfigItemCollection
	 */
	public function getConfigItems(?int $limit = NULL): ConfigItemCollection
	{
		return $this->retrieveEntities('/configitems', $limit);
	}


	/**
	 * @return ConfigItemStatus[]|ConfigItemStatusCollection
	 */
	public function getConfigItemStatuses(?int $limit = NULL): ConfigItemStatusCollection
	{
		return $this->retrieveEntities('/configitemstatuses', $limit);
	}


	/**
	 * @return Container[]|ContainerCollection
	 */
	public function getContainers(?int $limit = NULL): ContainerCollection
	{
		return $this->retrieveEntities('/containers', $limit);
	}


	/**
	 * @return ContainerEvent[]|ContainerEventCollection
	 */
	public function getContainerEvents(?int $limit = NULL): ContainerEventCollection
	{
		return $this->retrieveEntities('/containerevents', $limit);
	}


	/**
	 * @return Credential[]|CredentialCollection
	 */
	public function getCredentials(?int $limit = NULL): CredentialCollection
	{
		return $this->retrieveEntities('/credentials', $limit);
	}


	/**
	 * @return Databasechangelog[]|DatabasechangelogCollection
	 */
	public function getDatabasechangelogs(?int $limit = NULL): DatabasechangelogCollection
	{
		return $this->retrieveEntities('/databasechangelogs', $limit);
	}


	/**
	 * @return Databasechangeloglock[]|DatabasechangeloglockCollection
	 */
	public function getDatabasechangeloglocks(?int $limit = NULL): DatabasechangeloglockCollection
	{
		return $this->retrieveEntities('/databasechangeloglocks', $limit);
	}


	/**
	 * @return DnsService[]|DnsServiceCollection
	 */
	public function getDnsServices(?int $limit = NULL): DnsServiceCollection
	{
		return $this->retrieveEntities('/dnsservices', $limit);
	}


	/**
	 * @return ExtensionPoint[]|ExtensionPointCollection
	 */
	public function getExtensionPoints(?int $limit = NULL): ExtensionPointCollection
	{
		return $this->retrieveEntities('/extensionpoints', $limit);
	}


	/**
	 * @return ExternalDnsEvent[]|ExternalDnsEventCollection
	 */
	public function getExternalDnsEvents(?int $limit = NULL): ExternalDnsEventCollection
	{
		return $this->retrieveEntities('/externaldnsevents', $limit);
	}


	/**
	 * @return ExternalEvent[]|ExternalEventCollection
	 */
	public function getExternalEvents(?int $limit = NULL): ExternalEventCollection
	{
		return $this->retrieveEntities('/externalevents', $limit);
	}


	/**
	 * @return ExternalHandler[]|ExternalHandlerCollection
	 */
	public function getExternalHandlers(?int $limit = NULL): ExternalHandlerCollection
	{
		return $this->retrieveEntities('/externalhandlers', $limit);
	}


	/**
	 * @return ExternalHandlerExternalHandlerProcessMap[]|ExternalHandlerExternalHandlerProcessMapCollection
	 */
	public function getExternalHandlerExternalHandlerProcessMaps(?int $limit = NULL): ExternalHandlerExternalHandlerProcessMapCollection
	{
		return $this->retrieveEntities('/externalhandlerexternalhandlerprocessmaps', $limit);
	}


	/**
	 * @return ExternalHandlerProcess[]|ExternalHandlerProcessCollection
	 */
	public function getExternalHandlerProcesses(?int $limit = NULL): ExternalHandlerProcessCollection
	{
		return $this->retrieveEntities('/externalhandlerprocesses', $limit);
	}


	/**
	 * @return ExternalHostEvent[]|ExternalHostEventCollection
	 */
	public function getExternalHostEvents(?int $limit = NULL): ExternalHostEventCollection
	{
		return $this->retrieveEntities('/externalhostevents', $limit);
	}


	/**
	 * @return ExternalService[]|ExternalServiceCollection
	 */
	public function getExternalServices(?int $limit = NULL): ExternalServiceCollection
	{
		return $this->retrieveEntities('/externalservices', $limit);
	}


	/**
	 * @return ExternalServiceEvent[]|ExternalServiceEventCollection
	 */
	public function getExternalServiceEvents(?int $limit = NULL): ExternalServiceEventCollection
	{
		return $this->retrieveEntities('/externalserviceevents', $limit);
	}


	/**
	 * @return ExternalStoragePoolEvent[]|ExternalStoragePoolEventCollection
	 */
	public function getExternalStoragePoolEvents(?int $limit = NULL): ExternalStoragePoolEventCollection
	{
		return $this->retrieveEntities('/externalstoragepoolevents', $limit);
	}


	/**
	 * @return ExternalVolumeEvent[]|ExternalVolumeEventCollection
	 */
	public function getExternalVolumeEvents(?int $limit = NULL): ExternalVolumeEventCollection
	{
		return $this->retrieveEntities('/externalvolumeevents', $limit);
	}


	/**
	 * @return GenericObject[]|GenericObjectCollection
	 */
	public function getGenericObjects(?int $limit = NULL): GenericObjectCollection
	{
		return $this->retrieveEntities('/genericobjects', $limit);
	}


	/**
	 * @return HaConfig[]|HaConfigCollection
	 */
	public function getHaConfigs(?int $limit = NULL): HaConfigCollection
	{
		return $this->retrieveEntities('/haconfigs', $limit);
	}


	/**
	 * @return HaConfigInput[]|HaConfigInputCollection
	 */
	public function getHaConfigInputs(?int $limit = NULL): HaConfigInputCollection
	{
		return $this->retrieveEntities('/haconfiginputs', $limit);
	}


	/**
	 * @return HealthcheckInstanceHostMap[]|HealthcheckInstanceHostMapCollection
	 */
	public function getHealthcheckInstanceHostMaps(?int $limit = NULL): HealthcheckInstanceHostMapCollection
	{
		return $this->retrieveEntities('/healthcheckinstancehostmaps', $limit);
	}


	/**
	 * @return Host[]|HostCollection
	 */
	public function getHosts(?int $limit = NULL): HostCollection
	{
		return $this->retrieveEntities('/hosts', $limit);
	}


	/**
	 * @return HostApiProxyToken[]|HostApiProxyTokenCollection
	 */
	public function getHostApiProxyTokens(?int $limit = NULL): HostApiProxyTokenCollection
	{
		return $this->retrieveEntities('/hostapiproxytokens', $limit);
	}


	/**
	 * @return Identity[]|IdentityCollection
	 */
	public function getIdentities(?int $limit = NULL): IdentityCollection
	{
		return $this->retrieveEntities('/identities', $limit);
	}


	/**
	 * @return Image[]|ImageCollection
	 */
	public function getImages(?int $limit = NULL): ImageCollection
	{
		return $this->retrieveEntities('/images', $limit);
	}


	/**
	 * @return Instance[]|InstanceCollection
	 */
	public function getInstances(?int $limit = NULL): InstanceCollection
	{
		return $this->retrieveEntities('/instances', $limit);
	}


	/**
	 * @return InstanceLink[]|InstanceLinkCollection
	 */
	public function getInstanceLinks(?int $limit = NULL): InstanceLinkCollection
	{
		return $this->retrieveEntities('/instancelinks', $limit);
	}


	/**
	 * @return IpAddress[]|IpAddressCollection
	 */
	public function getIpAddresses(?int $limit = NULL): IpAddressCollection
	{
		return $this->retrieveEntities('/ipaddresses', $limit);
	}


	/**
	 * @return KubernetesService[]|KubernetesServiceCollection
	 */
	public function getKubernetesServices(?int $limit = NULL): KubernetesServiceCollection
	{
		return $this->retrieveEntities('/kubernetesservices', $limit);
	}


	/**
	 * @return KubernetesStack[]|KubernetesStackCollection
	 */
	public function getKubernetesStacks(?int $limit = NULL): KubernetesStackCollection
	{
		return $this->retrieveEntities('/kubernetesstacks', $limit);
	}


	/**
	 * @return Label[]|LabelCollection
	 */
	public function getLabels(?int $limit = NULL): LabelCollection
	{
		return $this->retrieveEntities('/labels', $limit);
	}


	/**
	 * @return Ldapconfig[]|LdapconfigCollection
	 */
	public function getLdapconfigs(?int $limit = NULL): LdapconfigCollection
	{
		return $this->retrieveEntities('/ldapconfigs', $limit);
	}


	/**
	 * @return LoadBalancerService[]|LoadBalancerServiceCollection
	 */
	public function getLoadBalancerServices(?int $limit = NULL): LoadBalancerServiceCollection
	{
		return $this->retrieveEntities('/loadbalancerservices', $limit);
	}


	/**
	 * @return LocalAuthConfig[]|LocalAuthConfigCollection
	 */
	public function getLocalAuthConfigs(?int $limit = NULL): LocalAuthConfigCollection
	{
		return $this->retrieveEntities('/localauthconfigs', $limit);
	}


	/**
	 * @return Machine[]|MachineCollection
	 */
	public function getMachines(?int $limit = NULL): MachineCollection
	{
		return $this->retrieveEntities('/machines', $limit);
	}


	/**
	 * @return MachineDriver[]|MachineDriverCollection
	 */
	public function getMachineDrivers(?int $limit = NULL): MachineDriverCollection
	{
		return $this->retrieveEntities('/machinedrivers', $limit);
	}


	/**
	 * @return Mount[]|MountCollection
	 */
	public function getMounts(?int $limit = NULL): MountCollection
	{
		return $this->retrieveEntities('/mounts', $limit);
	}


	/**
	 * @return Network[]|NetworkCollection
	 */
	public function getNetworks(?int $limit = NULL): NetworkCollection
	{
		return $this->retrieveEntities('/networks', $limit);
	}


	/**
	 * @return NetworkDriver[]|NetworkDriverCollection
	 */
	public function getNetworkDrivers(?int $limit = NULL): NetworkDriverCollection
	{
		return $this->retrieveEntities('/networkdrivers', $limit);
	}


	/**
	 * @return NetworkDriverService[]|NetworkDriverServiceCollection
	 */
	public function getNetworkDriverServices(?int $limit = NULL): NetworkDriverServiceCollection
	{
		return $this->retrieveEntities('/networkdriverservices', $limit);
	}


	/**
	 * @return NetworkPolicyRuleWithin[]|NetworkPolicyRuleWithinCollection
	 */
	public function getNetworkPolicyRuleWithins(?int $limit = NULL): NetworkPolicyRuleWithinCollection
	{
		return $this->retrieveEntities('/networkpolicyrulewithins', $limit);
	}


	/**
	 * @return Openldapconfig[]|OpenldapconfigCollection
	 */
	public function getOpenldapconfigs(?int $limit = NULL): OpenldapconfigCollection
	{
		return $this->retrieveEntities('/openldapconfigs', $limit);
	}


	/**
	 * @return Password[]|PasswordCollection
	 */
	public function getPasswords(?int $limit = NULL): PasswordCollection
	{
		return $this->retrieveEntities('/passwords', $limit);
	}


	/**
	 * @return PhysicalHost[]|PhysicalHostCollection
	 */
	public function getPhysicalHosts(?int $limit = NULL): PhysicalHostCollection
	{
		return $this->retrieveEntities('/physicalhosts', $limit);
	}


	/**
	 * @return Port[]|PortCollection
	 */
	public function getPorts(?int $limit = NULL): PortCollection
	{
		return $this->retrieveEntities('/ports', $limit);
	}


	/**
	 * @return ProcessDefinition[]|ProcessDefinitionCollection
	 */
	public function getProcessDefinitions(?int $limit = NULL): ProcessDefinitionCollection
	{
		return $this->retrieveEntities('/processdefinitions', $limit);
	}


	/**
	 * @return ProcessExecution[]|ProcessExecutionCollection
	 */
	public function getProcessExecutions(?int $limit = NULL): ProcessExecutionCollection
	{
		return $this->retrieveEntities('/processexecutions', $limit);
	}


	/**
	 * @return ProcessInstance[]|ProcessInstanceCollection
	 */
	public function getProcessInstances(?int $limit = NULL): ProcessInstanceCollection
	{
		return $this->retrieveEntities('/processinstances', $limit);
	}


	/**
	 * @return ProcessPool[]|ProcessPoolCollection
	 */
	public function getProcessPools(?int $limit = NULL): ProcessPoolCollection
	{
		return $this->retrieveEntities('/processpools', $limit);
	}


	/**
	 * @return ProcessSummary[]|ProcessSummaryCollection
	 */
	public function getProcessSummary(?int $limit = NULL): ProcessSummaryCollection
	{
		return $this->retrieveEntities('/processsummary', $limit);
	}


	/**
	 * @return Project[]|ProjectCollection
	 */
	public function getProjects(?int $limit = NULL): ProjectCollection
	{
		return $this->retrieveEntities('/projects', $limit);
	}


	/**
	 * @return ProjectMember[]|ProjectMemberCollection
	 */
	public function getProjectMembers(?int $limit = NULL): ProjectMemberCollection
	{
		return $this->retrieveEntities('/projectmembers', $limit);
	}


	/**
	 * @return ProjectTemplate[]|ProjectTemplateCollection
	 */
	public function getProjectTemplates(?int $limit = NULL): ProjectTemplateCollection
	{
		return $this->retrieveEntities('/projecttemplates', $limit);
	}


	/**
	 * @return PullTask[]|PullTaskCollection
	 */
	public function getPullTasks(?int $limit = NULL): PullTaskCollection
	{
		return $this->retrieveEntities('/pulltasks', $limit);
	}


	/**
	 * @return Register[]|RegisterCollection
	 */
	public function getRegister(?int $limit = NULL): RegisterCollection
	{
		return $this->retrieveEntities('/register', $limit);
	}


	/**
	 * @return RegistrationToken[]|RegistrationTokenCollection
	 */
	public function getRegistrationTokens(?int $limit = NULL): RegistrationTokenCollection
	{
		return $this->retrieveEntities('/registrationtokens', $limit);
	}


	/**
	 * @return Registry[]|RegistryCollection
	 */
	public function getRegistries(?int $limit = NULL): RegistryCollection
	{
		return $this->retrieveEntities('/registries', $limit);
	}


	/**
	 * @return RegistryCredential[]|RegistryCredentialCollection
	 */
	public function getRegistryCredentials(?int $limit = NULL): RegistryCredentialCollection
	{
		return $this->retrieveEntities('/registrycredentials', $limit);
	}


	/**
	 * @return ResourceDefinition[]|ResourceDefinitionCollection
	 */
	public function getResourceDefinitions(?int $limit = NULL): ResourceDefinitionCollection
	{
		return $this->retrieveEntities('/resourcedefinitions', $limit);
	}


	/**
	 * @return Schema[]|SchemaCollection
	 */
	public function getSchemas(?int $limit = NULL): SchemaCollection
	{
		return $this->retrieveEntities('/schemas', $limit);
	}


	/**
	 * @return Secret[]|SecretCollection
	 */
	public function getSecrets(?int $limit = NULL): SecretCollection
	{
		return $this->retrieveEntities('/secrets', $limit);
	}


	/**
	 * @return Service[]|ServiceCollection
	 */
	public function getServices(?int $limit = NULL): ServiceCollection
	{
		return $this->retrieveEntities('/services', $limit);
	}


	/**
	 * @return ServiceConsumeMap[]|ServiceConsumeMapCollection
	 */
	public function getServiceConsumeMaps(?int $limit = NULL): ServiceConsumeMapCollection
	{
		return $this->retrieveEntities('/serviceconsumemaps', $limit);
	}


	/**
	 * @return ServiceEvent[]|ServiceEventCollection
	 */
	public function getServiceEvents(?int $limit = NULL): ServiceEventCollection
	{
		return $this->retrieveEntities('/serviceevents', $limit);
	}


	/**
	 * @return ServiceExposeMap[]|ServiceExposeMapCollection
	 */
	public function getServiceExposeMaps(?int $limit = NULL): ServiceExposeMapCollection
	{
		return $this->retrieveEntities('/serviceexposemaps', $limit);
	}


	/**
	 * @return ServiceLog[]|ServiceLogCollection
	 */
	public function getServiceLogs(?int $limit = NULL): ServiceLogCollection
	{
		return $this->retrieveEntities('/servicelogs', $limit);
	}


	/**
	 * @return ServiceProxy[]|ServiceProxyCollection
	 */
	public function getServiceProxies(?int $limit = NULL): ServiceProxyCollection
	{
		return $this->retrieveEntities('/serviceproxies', $limit);
	}


	/**
	 * @return Setting[]|SettingCollection
	 */
	public function getSettings(?int $limit = NULL): SettingCollection
	{
		return $this->retrieveEntities('/settings', $limit);
	}


	/**
	 * @return Snapshot[]|SnapshotCollection
	 */
	public function getSnapshots(?int $limit = NULL): SnapshotCollection
	{
		return $this->retrieveEntities('/snapshots', $limit);
	}


	/**
	 * @return Stack[]|StackCollection
	 */
	public function getStacks(?int $limit = NULL): StackCollection
	{
		return $this->retrieveEntities('/stacks', $limit);
	}


	/**
	 * @return StorageDriver[]|StorageDriverCollection
	 */
	public function getStorageDrivers(?int $limit = NULL): StorageDriverCollection
	{
		return $this->retrieveEntities('/storagedrivers', $limit);
	}


	/**
	 * @return StorageDriverService[]|StorageDriverServiceCollection
	 */
	public function getStorageDriverServices(?int $limit = NULL): StorageDriverServiceCollection
	{
		return $this->retrieveEntities('/storagedriverservices', $limit);
	}


	/**
	 * @return StoragePool[]|StoragePoolCollection
	 */
	public function getStoragePools(?int $limit = NULL): StoragePoolCollection
	{
		return $this->retrieveEntities('/storagepools', $limit);
	}


	/**
	 * @return Subnet[]|SubnetCollection
	 */
	public function getSubnets(?int $limit = NULL): SubnetCollection
	{
		return $this->retrieveEntities('/subnets', $limit);
	}


	/**
	 * @return Task[]|TaskCollection
	 */
	public function getTasks(?int $limit = NULL): TaskCollection
	{
		return $this->retrieveEntities('/tasks', $limit);
	}


	/**
	 * @return TaskInstance[]|TaskInstanceCollection
	 */
	public function getTaskInstances(?int $limit = NULL): TaskInstanceCollection
	{
		return $this->retrieveEntities('/taskinstances', $limit);
	}


	/**
	 * @return TypeDocumentation[]|TypeDocumentationCollection
	 */
	public function getTypeDocumentations(?int $limit = NULL): TypeDocumentationCollection
	{
		return $this->retrieveEntities('/typedocumentations', $limit);
	}


	/**
	 * @return UserPreference[]|UserPreferenceCollection
	 */
	public function getUserPreferences(?int $limit = NULL): UserPreferenceCollection
	{
		return $this->retrieveEntities('/userpreferences', $limit);
	}


	/**
	 * @return VirtualMachine[]|VirtualMachineCollection
	 */
	public function getVirtualMachines(?int $limit = NULL): VirtualMachineCollection
	{
		return $this->retrieveEntities('/virtualmachines', $limit);
	}


	/**
	 * @return Volume[]|VolumeCollection
	 */
	public function getVolumes(?int $limit = NULL): VolumeCollection
	{
		return $this->retrieveEntities('/volumes', $limit);
	}


	/**
	 * @return VolumeTemplate[]|VolumeTemplateCollection
	 */
	public function getVolumeTemplates(?int $limit = NULL): VolumeTemplateCollection
	{
		return $this->retrieveEntities('/volumetemplates', $limit);
	}

}
