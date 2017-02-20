<?php
namespace SamIT\Rancher\Generated;

class Client extends \SamIT\Rancher\Client
{
	public $namespace = '\SamIT\Rancher\Generated';


	/**
	 * @return \SamIT\Rancher\Generated\Entities\Account[]|\SamIT\Rancher\Generated\Collections\AccountCollection
	 */
	public function getAccounts(): Collections\AccountCollection
	{
		return $this->retrieveEntities('/accounts');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\Agent[]|\SamIT\Rancher\Generated\Collections\AgentCollection
	 */
	public function getAgents(): Collections\AgentCollection
	{
		return $this->retrieveEntities('/agents');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\ApiKey[]|\SamIT\Rancher\Generated\Collections\ApiKeyCollection
	 */
	public function getApiKeys(): Collections\ApiKeyCollection
	{
		return $this->retrieveEntities('/apikeys');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\AuditLog[]|\SamIT\Rancher\Generated\Collections\AuditLogCollection
	 */
	public function getAuditLogs(): Collections\AuditLogCollection
	{
		return $this->retrieveEntities('/auditlogs');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\Azureadconfig[]|\SamIT\Rancher\Generated\Collections\AzureadconfigCollection
	 */
	public function getAzureadconfigs(): Collections\AzureadconfigCollection
	{
		return $this->retrieveEntities('/azureadconfigs');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\Backup[]|\SamIT\Rancher\Generated\Collections\BackupCollection
	 */
	public function getBackups(): Collections\BackupCollection
	{
		return $this->retrieveEntities('/backups');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\BackupTarget[]|\SamIT\Rancher\Generated\Collections\BackupTargetCollection
	 */
	public function getBackupTargets(): Collections\BackupTargetCollection
	{
		return $this->retrieveEntities('/backuptargets');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\Certificate[]|\SamIT\Rancher\Generated\Collections\CertificateCollection
	 */
	public function getCertificates(): Collections\CertificateCollection
	{
		return $this->retrieveEntities('/certificates');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\ClusterMembership[]|\SamIT\Rancher\Generated\Collections\ClusterMembershipCollection
	 */
	public function getClusterMemberships(): Collections\ClusterMembershipCollection
	{
		return $this->retrieveEntities('/clustermemberships');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\ComposeProject[]|\SamIT\Rancher\Generated\Collections\ComposeProjectCollection
	 */
	public function getComposeProjects(): Collections\ComposeProjectCollection
	{
		return $this->retrieveEntities('/composeprojects');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\ComposeService[]|\SamIT\Rancher\Generated\Collections\ComposeServiceCollection
	 */
	public function getComposeServices(): Collections\ComposeServiceCollection
	{
		return $this->retrieveEntities('/composeservices');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\ConfigItem[]|\SamIT\Rancher\Generated\Collections\ConfigItemCollection
	 */
	public function getConfigItems(): Collections\ConfigItemCollection
	{
		return $this->retrieveEntities('/configitems');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\ConfigItemStatus[]|\SamIT\Rancher\Generated\Collections\ConfigItemStatusCollection
	 */
	public function getConfigItemStatuses(): Collections\ConfigItemStatusCollection
	{
		return $this->retrieveEntities('/configitemstatuses');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\Container[]|\SamIT\Rancher\Generated\Collections\ContainerCollection
	 */
	public function getContainers(): Collections\ContainerCollection
	{
		return $this->retrieveEntities('/containers');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\ContainerEvent[]|\SamIT\Rancher\Generated\Collections\ContainerEventCollection
	 */
	public function getContainerEvents(): Collections\ContainerEventCollection
	{
		return $this->retrieveEntities('/containerevents');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\Credential[]|\SamIT\Rancher\Generated\Collections\CredentialCollection
	 */
	public function getCredentials(): Collections\CredentialCollection
	{
		return $this->retrieveEntities('/credentials');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\Databasechangelog[]|\SamIT\Rancher\Generated\Collections\DatabasechangelogCollection
	 */
	public function getDatabasechangelogs(): Collections\DatabasechangelogCollection
	{
		return $this->retrieveEntities('/databasechangelogs');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\Databasechangeloglock[]|\SamIT\Rancher\Generated\Collections\DatabasechangeloglockCollection
	 */
	public function getDatabasechangeloglocks(): Collections\DatabasechangeloglockCollection
	{
		return $this->retrieveEntities('/databasechangeloglocks');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\DnsService[]|\SamIT\Rancher\Generated\Collections\DnsServiceCollection
	 */
	public function getDnsServices(): Collections\DnsServiceCollection
	{
		return $this->retrieveEntities('/dnsservices');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\ExtensionPoint[]|\SamIT\Rancher\Generated\Collections\ExtensionPointCollection
	 */
	public function getExtensionPoints(): Collections\ExtensionPointCollection
	{
		return $this->retrieveEntities('/extensionpoints');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\ExternalDnsEvent[]|\SamIT\Rancher\Generated\Collections\ExternalDnsEventCollection
	 */
	public function getExternalDnsEvents(): Collections\ExternalDnsEventCollection
	{
		return $this->retrieveEntities('/externaldnsevents');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\ExternalEvent[]|\SamIT\Rancher\Generated\Collections\ExternalEventCollection
	 */
	public function getExternalEvents(): Collections\ExternalEventCollection
	{
		return $this->retrieveEntities('/externalevents');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\ExternalHandler[]|\SamIT\Rancher\Generated\Collections\ExternalHandlerCollection
	 */
	public function getExternalHandlers(): Collections\ExternalHandlerCollection
	{
		return $this->retrieveEntities('/externalhandlers');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\ExternalHandlerExternalHandlerProcessMap[]|\SamIT\Rancher\Generated\Collections\ExternalHandlerExternalHandlerProcessMapCollection
	 */
	public function getExternalHandlerExternalHandlerProcessMaps(): Collections\ExternalHandlerExternalHandlerProcessMapCollection
	{
		return $this->retrieveEntities('/externalhandlerexternalhandlerprocessmaps');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\ExternalHandlerProcess[]|\SamIT\Rancher\Generated\Collections\ExternalHandlerProcessCollection
	 */
	public function getExternalHandlerProcesses(): Collections\ExternalHandlerProcessCollection
	{
		return $this->retrieveEntities('/externalhandlerprocesses');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\ExternalHostEvent[]|\SamIT\Rancher\Generated\Collections\ExternalHostEventCollection
	 */
	public function getExternalHostEvents(): Collections\ExternalHostEventCollection
	{
		return $this->retrieveEntities('/externalhostevents');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\ExternalService[]|\SamIT\Rancher\Generated\Collections\ExternalServiceCollection
	 */
	public function getExternalServices(): Collections\ExternalServiceCollection
	{
		return $this->retrieveEntities('/externalservices');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\ExternalServiceEvent[]|\SamIT\Rancher\Generated\Collections\ExternalServiceEventCollection
	 */
	public function getExternalServiceEvents(): Collections\ExternalServiceEventCollection
	{
		return $this->retrieveEntities('/externalserviceevents');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\ExternalStoragePoolEvent[]|\SamIT\Rancher\Generated\Collections\ExternalStoragePoolEventCollection
	 */
	public function getExternalStoragePoolEvents(): Collections\ExternalStoragePoolEventCollection
	{
		return $this->retrieveEntities('/externalstoragepoolevents');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\ExternalVolumeEvent[]|\SamIT\Rancher\Generated\Collections\ExternalVolumeEventCollection
	 */
	public function getExternalVolumeEvents(): Collections\ExternalVolumeEventCollection
	{
		return $this->retrieveEntities('/externalvolumeevents');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\GenericObject[]|\SamIT\Rancher\Generated\Collections\GenericObjectCollection
	 */
	public function getGenericObjects(): Collections\GenericObjectCollection
	{
		return $this->retrieveEntities('/genericobjects');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\HaConfig[]|\SamIT\Rancher\Generated\Collections\HaConfigCollection
	 */
	public function getHaConfigs(): Collections\HaConfigCollection
	{
		return $this->retrieveEntities('/haconfigs');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\HaConfigInput[]|\SamIT\Rancher\Generated\Collections\HaConfigInputCollection
	 */
	public function getHaConfigInputs(): Collections\HaConfigInputCollection
	{
		return $this->retrieveEntities('/haconfiginputs');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\HealthcheckInstanceHostMap[]|\SamIT\Rancher\Generated\Collections\HealthcheckInstanceHostMapCollection
	 */
	public function getHealthcheckInstanceHostMaps(): Collections\HealthcheckInstanceHostMapCollection
	{
		return $this->retrieveEntities('/healthcheckinstancehostmaps');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\Host[]|\SamIT\Rancher\Generated\Collections\HostCollection
	 */
	public function getHosts(): Collections\HostCollection
	{
		return $this->retrieveEntities('/hosts');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\HostApiProxyToken[]|\SamIT\Rancher\Generated\Collections\HostApiProxyTokenCollection
	 */
	public function getHostApiProxyTokens(): Collections\HostApiProxyTokenCollection
	{
		return $this->retrieveEntities('/hostapiproxytokens');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\Identity[]|\SamIT\Rancher\Generated\Collections\IdentityCollection
	 */
	public function getIdentities(): Collections\IdentityCollection
	{
		return $this->retrieveEntities('/identities');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\Image[]|\SamIT\Rancher\Generated\Collections\ImageCollection
	 */
	public function getImages(): Collections\ImageCollection
	{
		return $this->retrieveEntities('/images');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\Instance[]|\SamIT\Rancher\Generated\Collections\InstanceCollection
	 */
	public function getInstances(): Collections\InstanceCollection
	{
		return $this->retrieveEntities('/instances');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\InstanceLink[]|\SamIT\Rancher\Generated\Collections\InstanceLinkCollection
	 */
	public function getInstanceLinks(): Collections\InstanceLinkCollection
	{
		return $this->retrieveEntities('/instancelinks');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\IpAddress[]|\SamIT\Rancher\Generated\Collections\IpAddressCollection
	 */
	public function getIpAddresses(): Collections\IpAddressCollection
	{
		return $this->retrieveEntities('/ipaddresses');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\KubernetesService[]|\SamIT\Rancher\Generated\Collections\KubernetesServiceCollection
	 */
	public function getKubernetesServices(): Collections\KubernetesServiceCollection
	{
		return $this->retrieveEntities('/kubernetesservices');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\KubernetesStack[]|\SamIT\Rancher\Generated\Collections\KubernetesStackCollection
	 */
	public function getKubernetesStacks(): Collections\KubernetesStackCollection
	{
		return $this->retrieveEntities('/kubernetesstacks');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\Label[]|\SamIT\Rancher\Generated\Collections\LabelCollection
	 */
	public function getLabels(): Collections\LabelCollection
	{
		return $this->retrieveEntities('/labels');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\Ldapconfig[]|\SamIT\Rancher\Generated\Collections\LdapconfigCollection
	 */
	public function getLdapconfigs(): Collections\LdapconfigCollection
	{
		return $this->retrieveEntities('/ldapconfigs');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\LoadBalancerService[]|\SamIT\Rancher\Generated\Collections\LoadBalancerServiceCollection
	 */
	public function getLoadBalancerServices(): Collections\LoadBalancerServiceCollection
	{
		return $this->retrieveEntities('/loadbalancerservices');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\LocalAuthConfig[]|\SamIT\Rancher\Generated\Collections\LocalAuthConfigCollection
	 */
	public function getLocalAuthConfigs(): Collections\LocalAuthConfigCollection
	{
		return $this->retrieveEntities('/localauthconfigs');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\Machine[]|\SamIT\Rancher\Generated\Collections\MachineCollection
	 */
	public function getMachines(): Collections\MachineCollection
	{
		return $this->retrieveEntities('/machines');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\MachineDriver[]|\SamIT\Rancher\Generated\Collections\MachineDriverCollection
	 */
	public function getMachineDrivers(): Collections\MachineDriverCollection
	{
		return $this->retrieveEntities('/machinedrivers');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\Mount[]|\SamIT\Rancher\Generated\Collections\MountCollection
	 */
	public function getMounts(): Collections\MountCollection
	{
		return $this->retrieveEntities('/mounts');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\Network[]|\SamIT\Rancher\Generated\Collections\NetworkCollection
	 */
	public function getNetworks(): Collections\NetworkCollection
	{
		return $this->retrieveEntities('/networks');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\NetworkDriver[]|\SamIT\Rancher\Generated\Collections\NetworkDriverCollection
	 */
	public function getNetworkDrivers(): Collections\NetworkDriverCollection
	{
		return $this->retrieveEntities('/networkdrivers');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\NetworkDriverService[]|\SamIT\Rancher\Generated\Collections\NetworkDriverServiceCollection
	 */
	public function getNetworkDriverServices(): Collections\NetworkDriverServiceCollection
	{
		return $this->retrieveEntities('/networkdriverservices');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\NetworkPolicyRuleWithin[]|\SamIT\Rancher\Generated\Collections\NetworkPolicyRuleWithinCollection
	 */
	public function getNetworkPolicyRuleWithins(): Collections\NetworkPolicyRuleWithinCollection
	{
		return $this->retrieveEntities('/networkpolicyrulewithins');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\Openldapconfig[]|\SamIT\Rancher\Generated\Collections\OpenldapconfigCollection
	 */
	public function getOpenldapconfigs(): Collections\OpenldapconfigCollection
	{
		return $this->retrieveEntities('/openldapconfigs');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\Password[]|\SamIT\Rancher\Generated\Collections\PasswordCollection
	 */
	public function getPasswords(): Collections\PasswordCollection
	{
		return $this->retrieveEntities('/passwords');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\PhysicalHost[]|\SamIT\Rancher\Generated\Collections\PhysicalHostCollection
	 */
	public function getPhysicalHosts(): Collections\PhysicalHostCollection
	{
		return $this->retrieveEntities('/physicalhosts');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\Port[]|\SamIT\Rancher\Generated\Collections\PortCollection
	 */
	public function getPorts(): Collections\PortCollection
	{
		return $this->retrieveEntities('/ports');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\ProcessDefinition[]|\SamIT\Rancher\Generated\Collections\ProcessDefinitionCollection
	 */
	public function getProcessDefinitions(): Collections\ProcessDefinitionCollection
	{
		return $this->retrieveEntities('/processdefinitions');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\ProcessExecution[]|\SamIT\Rancher\Generated\Collections\ProcessExecutionCollection
	 */
	public function getProcessExecutions(): Collections\ProcessExecutionCollection
	{
		return $this->retrieveEntities('/processexecutions');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\ProcessInstance[]|\SamIT\Rancher\Generated\Collections\ProcessInstanceCollection
	 */
	public function getProcessInstances(): Collections\ProcessInstanceCollection
	{
		return $this->retrieveEntities('/processinstances');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\ProcessPool[]|\SamIT\Rancher\Generated\Collections\ProcessPoolCollection
	 */
	public function getProcessPools(): Collections\ProcessPoolCollection
	{
		return $this->retrieveEntities('/processpools');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\ProcessSummary[]|\SamIT\Rancher\Generated\Collections\ProcessSummaryCollection
	 */
	public function getProcessSummary(): Collections\ProcessSummaryCollection
	{
		return $this->retrieveEntities('/processsummary');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\Project[]|\SamIT\Rancher\Generated\Collections\ProjectCollection
	 */
	public function getProjects(): Collections\ProjectCollection
	{
		return $this->retrieveEntities('/projects');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\ProjectMember[]|\SamIT\Rancher\Generated\Collections\ProjectMemberCollection
	 */
	public function getProjectMembers(): Collections\ProjectMemberCollection
	{
		return $this->retrieveEntities('/projectmembers');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\ProjectTemplate[]|\SamIT\Rancher\Generated\Collections\ProjectTemplateCollection
	 */
	public function getProjectTemplates(): Collections\ProjectTemplateCollection
	{
		return $this->retrieveEntities('/projecttemplates');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\PullTask[]|\SamIT\Rancher\Generated\Collections\PullTaskCollection
	 */
	public function getPullTasks(): Collections\PullTaskCollection
	{
		return $this->retrieveEntities('/pulltasks');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\Register[]|\SamIT\Rancher\Generated\Collections\RegisterCollection
	 */
	public function getRegister(): Collections\RegisterCollection
	{
		return $this->retrieveEntities('/register');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\RegistrationToken[]|\SamIT\Rancher\Generated\Collections\RegistrationTokenCollection
	 */
	public function getRegistrationTokens(): Collections\RegistrationTokenCollection
	{
		return $this->retrieveEntities('/registrationtokens');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\Registry[]|\SamIT\Rancher\Generated\Collections\RegistryCollection
	 */
	public function getRegistries(): Collections\RegistryCollection
	{
		return $this->retrieveEntities('/registries');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\RegistryCredential[]|\SamIT\Rancher\Generated\Collections\RegistryCredentialCollection
	 */
	public function getRegistryCredentials(): Collections\RegistryCredentialCollection
	{
		return $this->retrieveEntities('/registrycredentials');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\ResourceDefinition[]|\SamIT\Rancher\Generated\Collections\ResourceDefinitionCollection
	 */
	public function getResourceDefinitions(): Collections\ResourceDefinitionCollection
	{
		return $this->retrieveEntities('/resourcedefinitions');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\Schema[]|\SamIT\Rancher\Generated\Collections\SchemaCollection
	 */
	public function getSchemas(): Collections\SchemaCollection
	{
		return $this->retrieveEntities('/schemas');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\Secret[]|\SamIT\Rancher\Generated\Collections\SecretCollection
	 */
	public function getSecrets(): Collections\SecretCollection
	{
		return $this->retrieveEntities('/secrets');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\Service[]|\SamIT\Rancher\Generated\Collections\ServiceCollection
	 */
	public function getServices(): Collections\ServiceCollection
	{
		return $this->retrieveEntities('/services');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\ServiceConsumeMap[]|\SamIT\Rancher\Generated\Collections\ServiceConsumeMapCollection
	 */
	public function getServiceConsumeMaps(): Collections\ServiceConsumeMapCollection
	{
		return $this->retrieveEntities('/serviceconsumemaps');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\ServiceEvent[]|\SamIT\Rancher\Generated\Collections\ServiceEventCollection
	 */
	public function getServiceEvents(): Collections\ServiceEventCollection
	{
		return $this->retrieveEntities('/serviceevents');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\ServiceExposeMap[]|\SamIT\Rancher\Generated\Collections\ServiceExposeMapCollection
	 */
	public function getServiceExposeMaps(): Collections\ServiceExposeMapCollection
	{
		return $this->retrieveEntities('/serviceexposemaps');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\ServiceLog[]|\SamIT\Rancher\Generated\Collections\ServiceLogCollection
	 */
	public function getServiceLogs(): Collections\ServiceLogCollection
	{
		return $this->retrieveEntities('/servicelogs');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\ServiceProxy[]|\SamIT\Rancher\Generated\Collections\ServiceProxyCollection
	 */
	public function getServiceProxies(): Collections\ServiceProxyCollection
	{
		return $this->retrieveEntities('/serviceproxies');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\Setting[]|\SamIT\Rancher\Generated\Collections\SettingCollection
	 */
	public function getSettings(): Collections\SettingCollection
	{
		return $this->retrieveEntities('/settings');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\Snapshot[]|\SamIT\Rancher\Generated\Collections\SnapshotCollection
	 */
	public function getSnapshots(): Collections\SnapshotCollection
	{
		return $this->retrieveEntities('/snapshots');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\Stack[]|\SamIT\Rancher\Generated\Collections\StackCollection
	 */
	public function getStacks(): Collections\StackCollection
	{
		return $this->retrieveEntities('/stacks');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\StorageDriver[]|\SamIT\Rancher\Generated\Collections\StorageDriverCollection
	 */
	public function getStorageDrivers(): Collections\StorageDriverCollection
	{
		return $this->retrieveEntities('/storagedrivers');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\StorageDriverService[]|\SamIT\Rancher\Generated\Collections\StorageDriverServiceCollection
	 */
	public function getStorageDriverServices(): Collections\StorageDriverServiceCollection
	{
		return $this->retrieveEntities('/storagedriverservices');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\StoragePool[]|\SamIT\Rancher\Generated\Collections\StoragePoolCollection
	 */
	public function getStoragePools(): Collections\StoragePoolCollection
	{
		return $this->retrieveEntities('/storagepools');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\Subnet[]|\SamIT\Rancher\Generated\Collections\SubnetCollection
	 */
	public function getSubnets(): Collections\SubnetCollection
	{
		return $this->retrieveEntities('/subnets');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\Task[]|\SamIT\Rancher\Generated\Collections\TaskCollection
	 */
	public function getTasks(): Collections\TaskCollection
	{
		return $this->retrieveEntities('/tasks');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\TaskInstance[]|\SamIT\Rancher\Generated\Collections\TaskInstanceCollection
	 */
	public function getTaskInstances(): Collections\TaskInstanceCollection
	{
		return $this->retrieveEntities('/taskinstances');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\TypeDocumentation[]|\SamIT\Rancher\Generated\Collections\TypeDocumentationCollection
	 */
	public function getTypeDocumentations(): Collections\TypeDocumentationCollection
	{
		return $this->retrieveEntities('/typedocumentations');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\UserPreference[]|\SamIT\Rancher\Generated\Collections\UserPreferenceCollection
	 */
	public function getUserPreferences(): Collections\UserPreferenceCollection
	{
		return $this->retrieveEntities('/userpreferences');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\VirtualMachine[]|\SamIT\Rancher\Generated\Collections\VirtualMachineCollection
	 */
	public function getVirtualMachines(): Collections\VirtualMachineCollection
	{
		return $this->retrieveEntities('/virtualmachines');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\Volume[]|\SamIT\Rancher\Generated\Collections\VolumeCollection
	 */
	public function getVolumes(): Collections\VolumeCollection
	{
		return $this->retrieveEntities('/volumes');
	}


	/**
	 * @return \SamIT\Rancher\Generated\Entities\VolumeTemplate[]|\SamIT\Rancher\Generated\Collections\VolumeTemplateCollection
	 */
	public function getVolumeTemplates(): Collections\VolumeTemplateCollection
	{
		return $this->retrieveEntities('/volumetemplates');
	}

}
