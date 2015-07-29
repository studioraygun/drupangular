<?php
namespace Drupal\Core\DependencyInjection\Container\prod;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * service_container_prod_035164ee.
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class service_container_prod_035164ee extends \Drupal\Core\DependencyInjection\Container
{
    private $parameters;
    private $targetDirs = array();

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();
        $this->scopes = array();
        $this->scopeChildren = array();
        $this->methodMap = array(
            'accept_negotiation_406' => 'getAcceptNegotiation406Service',
            'access_arguments_resolver_factory' => 'getAccessArgumentsResolverFactoryService',
            'access_check.contact_personal' => 'getAccessCheck_ContactPersonalService',
            'access_check.cron' => 'getAccessCheck_CronService',
            'access_check.csrf' => 'getAccessCheck_CsrfService',
            'access_check.custom' => 'getAccessCheck_CustomService',
            'access_check.db_update' => 'getAccessCheck_DbUpdateService',
            'access_check.default' => 'getAccessCheck_DefaultService',
            'access_check.entity' => 'getAccessCheck_EntityService',
            'access_check.entity_create' => 'getAccessCheck_EntityCreateService',
            'access_check.field_ui.form_mode' => 'getAccessCheck_FieldUi_FormModeService',
            'access_check.field_ui.view_mode' => 'getAccessCheck_FieldUi_ViewModeService',
            'access_check.node.add' => 'getAccessCheck_Node_AddService',
            'access_check.node.preview' => 'getAccessCheck_Node_PreviewService',
            'access_check.node.revision' => 'getAccessCheck_Node_RevisionService',
            'access_check.permission' => 'getAccessCheck_PermissionService',
            'access_check.quickedit.entity_field' => 'getAccessCheck_Quickedit_EntityFieldService',
            'access_check.rest.csrf' => 'getAccessCheck_Rest_CsrfService',
            'access_check.theme' => 'getAccessCheck_ThemeService',
            'access_check.user.login_status' => 'getAccessCheck_User_LoginStatusService',
            'access_check.user.register' => 'getAccessCheck_User_RegisterService',
            'access_check.user.role' => 'getAccessCheck_User_RoleService',
            'access_manager' => 'getAccessManagerService',
            'access_manager.check_provider' => 'getAccessManager_CheckProviderService',
            'account_switcher' => 'getAccountSwitcherService',
            'ajax_response.attachments_processor' => 'getAjaxResponse_AttachmentsProcessorService',
            'ajax_response.subscriber' => 'getAjaxResponse_SubscriberService',
            'anonymous_user_response_subscriber' => 'getAnonymousUserResponseSubscriberService',
            'app.root' => 'getApp_RootService',
            'asset.css.collection_grouper' => 'getAsset_Css_CollectionGrouperService',
            'asset.css.collection_optimizer' => 'getAsset_Css_CollectionOptimizerService',
            'asset.css.collection_renderer' => 'getAsset_Css_CollectionRendererService',
            'asset.css.dumper' => 'getAsset_Css_DumperService',
            'asset.css.optimizer' => 'getAsset_Css_OptimizerService',
            'asset.js.collection_grouper' => 'getAsset_Js_CollectionGrouperService',
            'asset.js.collection_optimizer' => 'getAsset_Js_CollectionOptimizerService',
            'asset.js.collection_renderer' => 'getAsset_Js_CollectionRendererService',
            'asset.js.dumper' => 'getAsset_Js_DumperService',
            'asset.js.optimizer' => 'getAsset_Js_OptimizerService',
            'asset.resolver' => 'getAsset_ResolverService',
            'authentication' => 'getAuthenticationService',
            'authentication_subscriber' => 'getAuthenticationSubscriberService',
            'bare_html_page_renderer' => 'getBareHtmlPageRendererService',
            'basic_auth.authentication.basic_auth' => 'getBasicAuth_Authentication_BasicAuthService',
            'batch.storage' => 'getBatch_StorageService',
            'block.current_language_context' => 'getBlock_CurrentLanguageContextService',
            'block.current_user_context' => 'getBlock_CurrentUserContextService',
            'block.node_route_context' => 'getBlock_NodeRouteContextService',
            'block.page_display_variant_subscriber' => 'getBlock_PageDisplayVariantSubscriberService',
            'block.repository' => 'getBlock_RepositoryService',
            'breadcrumb' => 'getBreadcrumbService',
            'breakpoint.manager' => 'getBreakpoint_ManagerService',
            'cache.backend.apcu' => 'getCache_Backend_ApcuService',
            'cache.backend.chainedfast' => 'getCache_Backend_ChainedfastService',
            'cache.backend.database' => 'getCache_Backend_DatabaseService',
            'cache.backend.php' => 'getCache_Backend_PhpService',
            'cache.bootstrap' => 'getCache_BootstrapService',
            'cache.config' => 'getCache_ConfigService',
            'cache.data' => 'getCache_DataService',
            'cache.default' => 'getCache_DefaultService',
            'cache.discovery' => 'getCache_DiscoveryService',
            'cache.entity' => 'getCache_EntityService',
            'cache.menu' => 'getCache_MenuService',
            'cache.render' => 'getCache_RenderService',
            'cache.rest' => 'getCache_RestService',
            'cache.toolbar' => 'getCache_ToolbarService',
            'cache_context.cookies' => 'getCacheContext_CookiesService',
            'cache_context.headers' => 'getCacheContext_HeadersService',
            'cache_context.ip' => 'getCacheContext_IpService',
            'cache_context.languages' => 'getCacheContext_LanguagesService',
            'cache_context.request_format' => 'getCacheContext_RequestFormatService',
            'cache_context.route' => 'getCacheContext_RouteService',
            'cache_context.route.menu_active_trails' => 'getCacheContext_Route_MenuActiveTrailsService',
            'cache_context.route.name' => 'getCacheContext_Route_NameService',
            'cache_context.theme' => 'getCacheContext_ThemeService',
            'cache_context.timezone' => 'getCacheContext_TimezoneService',
            'cache_context.url' => 'getCacheContext_UrlService',
            'cache_context.url.query_args' => 'getCacheContext_Url_QueryArgsService',
            'cache_context.url.query_args.pagers' => 'getCacheContext_Url_QueryArgs_PagersService',
            'cache_context.url.site' => 'getCacheContext_Url_SiteService',
            'cache_context.user' => 'getCacheContext_UserService',
            'cache_context.user.is_super_user' => 'getCacheContext_User_IsSuperUserService',
            'cache_context.user.node_grants' => 'getCacheContext_User_NodeGrantsService',
            'cache_context.user.permissions' => 'getCacheContext_User_PermissionsService',
            'cache_context.user.roles' => 'getCacheContext_User_RolesService',
            'cache_contexts_manager' => 'getCacheContextsManagerService',
            'cache_factory' => 'getCacheFactoryService',
            'cache_router_rebuild_subscriber' => 'getCacheRouterRebuildSubscriberService',
            'cache_tags.invalidator' => 'getCacheTags_InvalidatorService',
            'cache_tags.invalidator.checksum' => 'getCacheTags_Invalidator_ChecksumService',
            'class_loader' => 'getClassLoaderService',
            'class_resolver' => 'getClassResolverService',
            'client_error_response_subscriber' => 'getClientErrorResponseSubscriberService',
            'comment.breadcrumb' => 'getComment_BreadcrumbService',
            'comment.lazy_builders' => 'getComment_LazyBuildersService',
            'comment.link_builder' => 'getComment_LinkBuilderService',
            'comment.manager' => 'getComment_ManagerService',
            'comment.statistics' => 'getComment_StatisticsService',
            'config.config_subscriber' => 'getConfig_ConfigSubscriberService',
            'config.factory' => 'getConfig_FactoryService',
            'config.importer_subscriber' => 'getConfig_ImporterSubscriberService',
            'config.installer' => 'getConfig_InstallerService',
            'config.manager' => 'getConfig_ManagerService',
            'config.storage' => 'getConfig_StorageService',
            'config.storage.schema' => 'getConfig_Storage_SchemaService',
            'config.storage.snapshot' => 'getConfig_Storage_SnapshotService',
            'config.storage.staging' => 'getConfig_Storage_StagingService',
            'config.typed' => 'getConfig_TypedService',
            'config_import_subscriber' => 'getConfigImportSubscriberService',
            'config_snapshot_subscriber' => 'getConfigSnapshotSubscriberService',
            'contact.mail_handler' => 'getContact_MailHandlerService',
            'container.namespaces' => 'getContainer_NamespacesService',
            'content_type_header_matcher' => 'getContentTypeHeaderMatcherService',
            'content_uninstall_validator' => 'getContentUninstallValidatorService',
            'context.handler' => 'getContext_HandlerService',
            'controller.entity_form' => 'getController_EntityFormService',
            'controller.form' => 'getController_FormService',
            'controller_resolver' => 'getControllerResolverService',
            'country_manager' => 'getCountryManagerService',
            'cron' => 'getCronService',
            'csrf_token' => 'getCsrfTokenService',
            'current_route_match' => 'getCurrentRouteMatchService',
            'current_user' => 'getCurrentUserService',
            'database' => 'getDatabaseService',
            'database.replica' => 'getDatabase_ReplicaService',
            'date.formatter' => 'getDate_FormatterService',
            'diff.formatter' => 'getDiff_FormatterService',
            'element.editor' => 'getElement_EditorService',
            'email.validator' => 'getEmail_ValidatorService',
            'entity.autocomplete_matcher' => 'getEntity_AutocompleteMatcherService',
            'entity.bundle_config_import_validator' => 'getEntity_BundleConfigImportValidatorService',
            'entity.definition_update_manager' => 'getEntity_DefinitionUpdateManagerService',
            'entity.form_builder' => 'getEntity_FormBuilderService',
            'entity.manager' => 'getEntity_ManagerService',
            'entity.query' => 'getEntity_QueryService',
            'entity.query.config' => 'getEntity_Query_ConfigService',
            'entity.query.keyvalue' => 'getEntity_Query_KeyvalueService',
            'entity.query.null' => 'getEntity_Query_NullService',
            'entity.query.sql' => 'getEntity_Query_SqlService',
            'entity_route_subscriber' => 'getEntityRouteSubscriberService',
            'event_dispatcher' => 'getEventDispatcherService',
            'exception.custom_page_html' => 'getException_CustomPageHtmlService',
            'exception.custom_page_json' => 'getException_CustomPageJsonService',
            'exception.default' => 'getException_DefaultService',
            'exception.default_html' => 'getException_DefaultHtmlService',
            'exception.default_json' => 'getException_DefaultJsonService',
            'exception.enforced_form_response' => 'getException_EnforcedFormResponseService',
            'exception.fast_404_html' => 'getException_Fast404HtmlService',
            'exception.logger' => 'getException_LoggerService',
            'exception.test_site' => 'getException_TestSiteService',
            'feed.bridge.reader' => 'getFeed_Bridge_ReaderService',
            'feed.bridge.writer' => 'getFeed_Bridge_WriterService',
            'feed.reader.atomentry' => 'getFeed_Reader_AtomentryService',
            'feed.reader.atomfeed' => 'getFeed_Reader_AtomfeedService',
            'feed.reader.contententry' => 'getFeed_Reader_ContententryService',
            'feed.reader.dublincoreentry' => 'getFeed_Reader_DublincoreentryService',
            'feed.reader.dublincorefeed' => 'getFeed_Reader_DublincorefeedService',
            'feed.reader.podcastentry' => 'getFeed_Reader_PodcastentryService',
            'feed.reader.podcastfeed' => 'getFeed_Reader_PodcastfeedService',
            'feed.reader.slashentry' => 'getFeed_Reader_SlashentryService',
            'feed.reader.threadentry' => 'getFeed_Reader_ThreadentryService',
            'feed.reader.wellformedwebentry' => 'getFeed_Reader_WellformedwebentryService',
            'feed.writer.atomrendererfeed' => 'getFeed_Writer_AtomrendererfeedService',
            'feed.writer.contentrendererentry' => 'getFeed_Writer_ContentrendererentryService',
            'feed.writer.dublincorerendererentry' => 'getFeed_Writer_DublincorerendererentryService',
            'feed.writer.dublincorerendererfeed' => 'getFeed_Writer_DublincorerendererfeedService',
            'feed.writer.itunesentry' => 'getFeed_Writer_ItunesentryService',
            'feed.writer.itunesfeed' => 'getFeed_Writer_ItunesfeedService',
            'feed.writer.itunesrendererentry' => 'getFeed_Writer_ItunesrendererentryService',
            'feed.writer.itunesrendererfeed' => 'getFeed_Writer_ItunesrendererfeedService',
            'feed.writer.slashrendererentry' => 'getFeed_Writer_SlashrendererentryService',
            'feed.writer.threadingrendererentry' => 'getFeed_Writer_ThreadingrendererentryService',
            'feed.writer.wellformedwebrendererentry' => 'getFeed_Writer_WellformedwebrendererentryService',
            'field.uninstall_validator' => 'getField_UninstallValidatorService',
            'field_ui.route_enhancer' => 'getFieldUi_RouteEnhancerService',
            'field_ui.subscriber' => 'getFieldUi_SubscriberService',
            'field_uninstall_validator' => 'getFieldUninstallValidatorService',
            'file.mime_type.guesser' => 'getFile_MimeType_GuesserService',
            'file.mime_type.guesser.extension' => 'getFile_MimeType_Guesser_ExtensionService',
            'file.usage' => 'getFile_UsageService',
            'file_system' => 'getFileSystemService',
            'filter.uninstall_validator' => 'getFilter_UninstallValidatorService',
            'finish_response_subscriber' => 'getFinishResponseSubscriberService',
            'flood' => 'getFloodService',
            'form_ajax_response_builder' => 'getFormAjaxResponseBuilderService',
            'form_ajax_subscriber' => 'getFormAjaxSubscriberService',
            'form_builder' => 'getFormBuilderService',
            'form_error_handler' => 'getFormErrorHandlerService',
            'form_submitter' => 'getFormSubmitterService',
            'form_validator' => 'getFormValidatorService',
            'html_response.attachments_processor' => 'getHtmlResponse_AttachmentsProcessorService',
            'html_response.subscriber' => 'getHtmlResponse_SubscriberService',
            'http_client' => 'getHttpClientService',
            'http_kernel' => 'getHttpKernelService',
            'http_kernel.basic' => 'getHttpKernel_BasicService',
            'http_middleware.kernel_pre_handle' => 'getHttpMiddleware_KernelPreHandleService',
            'http_middleware.negotiation' => 'getHttpMiddleware_NegotiationService',
            'http_middleware.page_cache' => 'getHttpMiddleware_PageCacheService',
            'http_middleware.reverse_proxy' => 'getHttpMiddleware_ReverseProxyService',
            'http_middleware.session' => 'getHttpMiddleware_SessionService',
            'http_negotiation.format_negotiator' => 'getHttpNegotiation_FormatNegotiatorService',
            'image.factory' => 'getImage_FactoryService',
            'image.toolkit.manager' => 'getImage_Toolkit_ManagerService',
            'image.toolkit.operation.manager' => 'getImage_Toolkit_Operation_ManagerService',
            'info_parser' => 'getInfoParserService',
            'kernel' => 'getKernelService',
            'kernel_destruct_subscriber' => 'getKernelDestructSubscriberService',
            'keyvalue' => 'getKeyvalueService',
            'keyvalue.database' => 'getKeyvalue_DatabaseService',
            'keyvalue.expirable' => 'getKeyvalue_ExpirableService',
            'keyvalue.expirable.database' => 'getKeyvalue_Expirable_DatabaseService',
            'language.default' => 'getLanguage_DefaultService',
            'language_manager' => 'getLanguageManagerService',
            'library.dependency_resolver' => 'getLibrary_DependencyResolverService',
            'library.discovery' => 'getLibrary_DiscoveryService',
            'library.discovery.collector' => 'getLibrary_Discovery_CollectorService',
            'library.discovery.parser' => 'getLibrary_Discovery_ParserService',
            'link_generator' => 'getLinkGeneratorService',
            'lock' => 'getLockService',
            'lock.persistent' => 'getLock_PersistentService',
            'logger.channel.contact' => 'getLogger_Channel_ContactService',
            'logger.channel.cron' => 'getLogger_Channel_CronService',
            'logger.channel.default' => 'getLogger_Channel_DefaultService',
            'logger.channel.file' => 'getLogger_Channel_FileService',
            'logger.channel.form' => 'getLogger_Channel_FormService',
            'logger.channel.image' => 'getLogger_Channel_ImageService',
            'logger.channel.php' => 'getLogger_Channel_PhpService',
            'logger.channel.rest' => 'getLogger_Channel_RestService',
            'logger.dblog' => 'getLogger_DblogService',
            'logger.factory' => 'getLogger_FactoryService',
            'logger.log_message_parser' => 'getLogger_LogMessageParserService',
            'main_content_renderer.ajax' => 'getMainContentRenderer_AjaxService',
            'main_content_renderer.dialog' => 'getMainContentRenderer_DialogService',
            'main_content_renderer.html' => 'getMainContentRenderer_HtmlService',
            'main_content_renderer.modal' => 'getMainContentRenderer_ModalService',
            'main_content_view_subscriber' => 'getMainContentViewSubscriberService',
            'maintenance_mode' => 'getMaintenanceModeService',
            'maintenance_mode_subscriber' => 'getMaintenanceModeSubscriberService',
            'menu.active_trail' => 'getMenu_ActiveTrailService',
            'menu.default_tree_manipulators' => 'getMenu_DefaultTreeManipulatorsService',
            'menu.link_tree' => 'getMenu_LinkTreeService',
            'menu.parent_form_selector' => 'getMenu_ParentFormSelectorService',
            'menu.rebuild_subscriber' => 'getMenu_RebuildSubscriberService',
            'menu.tree_storage' => 'getMenu_TreeStorageService',
            'menu_link.static.overrides' => 'getMenuLink_Static_OverridesService',
            'module_handler' => 'getModuleHandlerService',
            'module_installer' => 'getModuleInstallerService',
            'node.admin_path.route_subscriber' => 'getNode_AdminPath_RouteSubscriberService',
            'node.grant_storage' => 'getNode_GrantStorageService',
            'node.route_subscriber' => 'getNode_RouteSubscriberService',
            'node_preview' => 'getNodePreviewService',
            'page_cache_kill_switch' => 'getPageCacheKillSwitchService',
            'page_cache_request_policy' => 'getPageCacheRequestPolicyService',
            'page_cache_response_policy' => 'getPageCacheResponsePolicyService',
            'paramconverter.configentity_admin' => 'getParamconverter_ConfigentityAdminService',
            'paramconverter.entity' => 'getParamconverter_EntityService',
            'paramconverter.menu_link' => 'getParamconverter_MenuLinkService',
            'paramconverter.views_ui' => 'getParamconverter_ViewsUiService',
            'paramconverter_manager' => 'getParamconverterManagerService',
            'paramconverter_subscriber' => 'getParamconverterSubscriberService',
            'password' => 'getPasswordService',
            'path.alias_manager' => 'getPath_AliasManagerService',
            'path.alias_storage' => 'getPath_AliasStorageService',
            'path.alias_whitelist' => 'getPath_AliasWhitelistService',
            'path.current' => 'getPath_CurrentService',
            'path.matcher' => 'getPath_MatcherService',
            'path.validator' => 'getPath_ValidatorService',
            'path_processor.files' => 'getPathProcessor_FilesService',
            'path_processor.image_styles' => 'getPathProcessor_ImageStylesService',
            'path_processor_alias' => 'getPathProcessorAliasService',
            'path_processor_decode' => 'getPathProcessorDecodeService',
            'path_processor_front' => 'getPathProcessorFrontService',
            'path_processor_manager' => 'getPathProcessorManagerService',
            'path_subscriber' => 'getPathSubscriberService',
            'plugin.cache_clearer' => 'getPlugin_CacheClearerService',
            'plugin.manager.action' => 'getPlugin_Manager_ActionService',
            'plugin.manager.archiver' => 'getPlugin_Manager_ArchiverService',
            'plugin.manager.block' => 'getPlugin_Manager_BlockService',
            'plugin.manager.ckeditor.plugin' => 'getPlugin_Manager_Ckeditor_PluginService',
            'plugin.manager.condition' => 'getPlugin_Manager_ConditionService',
            'plugin.manager.display_variant' => 'getPlugin_Manager_DisplayVariantService',
            'plugin.manager.editor' => 'getPlugin_Manager_EditorService',
            'plugin.manager.element_info' => 'getPlugin_Manager_ElementInfoService',
            'plugin.manager.entity_reference_selection' => 'getPlugin_Manager_EntityReferenceSelectionService',
            'plugin.manager.field.field_type' => 'getPlugin_Manager_Field_FieldTypeService',
            'plugin.manager.field.formatter' => 'getPlugin_Manager_Field_FormatterService',
            'plugin.manager.field.widget' => 'getPlugin_Manager_Field_WidgetService',
            'plugin.manager.filter' => 'getPlugin_Manager_FilterService',
            'plugin.manager.image.effect' => 'getPlugin_Manager_Image_EffectService',
            'plugin.manager.mail' => 'getPlugin_Manager_MailService',
            'plugin.manager.menu.contextual_link' => 'getPlugin_Manager_Menu_ContextualLinkService',
            'plugin.manager.menu.link' => 'getPlugin_Manager_Menu_LinkService',
            'plugin.manager.menu.local_action' => 'getPlugin_Manager_Menu_LocalActionService',
            'plugin.manager.menu.local_task' => 'getPlugin_Manager_Menu_LocalTaskService',
            'plugin.manager.queue_worker' => 'getPlugin_Manager_QueueWorkerService',
            'plugin.manager.quickedit.editor' => 'getPlugin_Manager_Quickedit_EditorService',
            'plugin.manager.rest' => 'getPlugin_Manager_RestService',
            'plugin.manager.search' => 'getPlugin_Manager_SearchService',
            'plugin.manager.tour.tip' => 'getPlugin_Manager_Tour_TipService',
            'plugin.manager.views.access' => 'getPlugin_Manager_Views_AccessService',
            'plugin.manager.views.area' => 'getPlugin_Manager_Views_AreaService',
            'plugin.manager.views.argument' => 'getPlugin_Manager_Views_ArgumentService',
            'plugin.manager.views.argument_default' => 'getPlugin_Manager_Views_ArgumentDefaultService',
            'plugin.manager.views.argument_validator' => 'getPlugin_Manager_Views_ArgumentValidatorService',
            'plugin.manager.views.cache' => 'getPlugin_Manager_Views_CacheService',
            'plugin.manager.views.display' => 'getPlugin_Manager_Views_DisplayService',
            'plugin.manager.views.display_extender' => 'getPlugin_Manager_Views_DisplayExtenderService',
            'plugin.manager.views.exposed_form' => 'getPlugin_Manager_Views_ExposedFormService',
            'plugin.manager.views.field' => 'getPlugin_Manager_Views_FieldService',
            'plugin.manager.views.filter' => 'getPlugin_Manager_Views_FilterService',
            'plugin.manager.views.join' => 'getPlugin_Manager_Views_JoinService',
            'plugin.manager.views.pager' => 'getPlugin_Manager_Views_PagerService',
            'plugin.manager.views.query' => 'getPlugin_Manager_Views_QueryService',
            'plugin.manager.views.relationship' => 'getPlugin_Manager_Views_RelationshipService',
            'plugin.manager.views.row' => 'getPlugin_Manager_Views_RowService',
            'plugin.manager.views.sort' => 'getPlugin_Manager_Views_SortService',
            'plugin.manager.views.style' => 'getPlugin_Manager_Views_StyleService',
            'plugin.manager.views.wizard' => 'getPlugin_Manager_Views_WizardService',
            'private_key' => 'getPrivateKeyService',
            'queue' => 'getQueueService',
            'queue.database' => 'getQueue_DatabaseService',
            'quickedit.editor.selector' => 'getQuickedit_Editor_SelectorService',
            'quickedit.metadata.generator' => 'getQuickedit_Metadata_GeneratorService',
            'redirect.destination' => 'getRedirect_DestinationService',
            'redirect_response_subscriber' => 'getRedirectResponseSubscriberService',
            'render_cache' => 'getRenderCacheService',
            'renderer' => 'getRendererService',
            'replica_database_ignore__subscriber' => 'getReplicaDatabaseIgnoreSubscriberService',
            'request_close_subscriber' => 'getRequestCloseSubscriberService',
            'request_format_route_filter' => 'getRequestFormatRouteFilterService',
            'request_stack' => 'getRequestStackService',
            'required_module_uninstall_validator' => 'getRequiredModuleUninstallValidatorService',
            'resolver_manager.entity' => 'getResolverManager_EntityService',
            'response_filter.active_link' => 'getResponseFilter_ActiveLinkService',
            'response_generator_subscriber' => 'getResponseGeneratorSubscriberService',
            'rest.link_manager' => 'getRest_LinkManagerService',
            'rest.link_manager.relation' => 'getRest_LinkManager_RelationService',
            'rest.link_manager.type' => 'getRest_LinkManager_TypeService',
            'rest.resource_routes' => 'getRest_ResourceRoutesService',
            'route_access_response_subscriber' => 'getRouteAccessResponseSubscriberService',
            'route_content_controller_subscriber' => 'getRouteContentControllerSubscriberService',
            'route_enhancer.entity' => 'getRouteEnhancer_EntityService',
            'route_enhancer.lazy_collector' => 'getRouteEnhancer_LazyCollectorService',
            'route_enhancer.param_conversion' => 'getRouteEnhancer_ParamConversionService',
            'route_enhancer_subscriber' => 'getRouteEnhancerSubscriberService',
            'route_filter.lazy_collector' => 'getRouteFilter_LazyCollectorService',
            'route_filter_subscriber' => 'getRouteFilterSubscriberService',
            'route_http_method_subscriber' => 'getRouteHttpMethodSubscriberService',
            'route_processor_csrf' => 'getRouteProcessorCsrfService',
            'route_processor_current' => 'getRouteProcessorCurrentService',
            'route_processor_manager' => 'getRouteProcessorManagerService',
            'route_special_attributes_subscriber' => 'getRouteSpecialAttributesSubscriberService',
            'route_subscriber.entity' => 'getRouteSubscriber_EntityService',
            'route_subscriber.module' => 'getRouteSubscriber_ModuleService',
            'router' => 'getRouterService',
            'router.admin_context' => 'getRouter_AdminContextService',
            'router.builder' => 'getRouter_BuilderService',
            'router.dumper' => 'getRouter_DumperService',
            'router.dynamic' => 'getRouter_DynamicService',
            'router.matcher' => 'getRouter_MatcherService',
            'router.matcher.final_matcher' => 'getRouter_Matcher_FinalMatcherService',
            'router.no_access_checks' => 'getRouter_NoAccessChecksService',
            'router.path_roots_subscriber' => 'getRouter_PathRootsSubscriberService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router.route_preloader' => 'getRouter_RoutePreloaderService',
            'router.route_provider' => 'getRouter_RouteProviderService',
            'router_listener' => 'getRouterListenerService',
            'search.search_page_repository' => 'getSearch_SearchPageRepositoryService',
            'serialization.entity_resolver.target_id' => 'getSerialization_EntityResolver_TargetIdService',
            'serialization.json' => 'getSerialization_JsonService',
            'serialization.phpserialize' => 'getSerialization_PhpserializeService',
            'serialization.yaml' => 'getSerialization_YamlService',
            'serializer' => 'getSerializerService',
            'serializer.encoder.hal' => 'getSerializer_Encoder_HalService',
            'serializer.encoder.json' => 'getSerializer_Encoder_JsonService',
            'serializer.encoder.xml' => 'getSerializer_Encoder_XmlService',
            'serializer.entity_resolver' => 'getSerializer_EntityResolverService',
            'serializer.entity_resolver.uuid' => 'getSerializer_EntityResolver_UuidService',
            'serializer.normalizer.complex_data' => 'getSerializer_Normalizer_ComplexDataService',
            'serializer.normalizer.config_entity' => 'getSerializer_Normalizer_ConfigEntityService',
            'serializer.normalizer.content_entity' => 'getSerializer_Normalizer_ContentEntityService',
            'serializer.normalizer.entity' => 'getSerializer_Normalizer_EntityService',
            'serializer.normalizer.entity.hal' => 'getSerializer_Normalizer_Entity_HalService',
            'serializer.normalizer.entity_reference_item.hal' => 'getSerializer_Normalizer_EntityReferenceItem_HalService',
            'serializer.normalizer.field.hal' => 'getSerializer_Normalizer_Field_HalService',
            'serializer.normalizer.field_item.hal' => 'getSerializer_Normalizer_FieldItem_HalService',
            'serializer.normalizer.file_entity.hal' => 'getSerializer_Normalizer_FileEntity_HalService',
            'serializer.normalizer.list' => 'getSerializer_Normalizer_ListService',
            'serializer.normalizer.password_field_item' => 'getSerializer_Normalizer_PasswordFieldItemService',
            'serializer.normalizer.typed_data' => 'getSerializer_Normalizer_TypedDataService',
            'service_container' => 'getServiceContainerService',
            'session' => 'getSessionService',
            'session_configuration' => 'getSessionConfigurationService',
            'session_handler.storage' => 'getSessionHandler_StorageService',
            'session_handler.write_check' => 'getSessionHandler_WriteCheckService',
            'session_handler.write_safe' => 'getSessionHandler_WriteSafeService',
            'session_manager' => 'getSessionManagerService',
            'session_manager.metadata_bag' => 'getSessionManager_MetadataBagService',
            'settings' => 'getSettingsService',
            'site.path' => 'getSite_PathService',
            'state' => 'getStateService',
            'stream_wrapper.public' => 'getStreamWrapper_PublicService',
            'stream_wrapper.temporary' => 'getStreamWrapper_TemporaryService',
            'stream_wrapper_manager' => 'getStreamWrapperManagerService',
            'string_translation' => 'getStringTranslationService',
            'string_translator.custom_strings' => 'getStringTranslator_CustomStringsService',
            'system.admin_path.route_subscriber' => 'getSystem_AdminPath_RouteSubscriberService',
            'system.automatic_cron' => 'getSystem_AutomaticCronService',
            'system.breadcrumb.default' => 'getSystem_Breadcrumb_DefaultService',
            'system.config_cache_tag' => 'getSystem_ConfigCacheTagService',
            'system.config_subscriber' => 'getSystem_ConfigSubscriberService',
            'system.manager' => 'getSystem_ManagerService',
            'taxonomy_term.breadcrumb' => 'getTaxonomyTerm_BreadcrumbService',
            'theme.initialization' => 'getTheme_InitializationService',
            'theme.manager' => 'getTheme_ManagerService',
            'theme.negotiator' => 'getTheme_NegotiatorService',
            'theme.negotiator.admin_theme' => 'getTheme_Negotiator_AdminThemeService',
            'theme.negotiator.ajax_base_page' => 'getTheme_Negotiator_AjaxBasePageService',
            'theme.negotiator.block.admin_demo' => 'getTheme_Negotiator_Block_AdminDemoService',
            'theme.negotiator.default' => 'getTheme_Negotiator_DefaultService',
            'theme.negotiator.system.batch' => 'getTheme_Negotiator_System_BatchService',
            'theme.negotiator.system.db_update' => 'getTheme_Negotiator_System_DbUpdateService',
            'theme.registry' => 'getTheme_RegistryService',
            'theme_handler' => 'getThemeHandlerService',
            'theme_installer' => 'getThemeInstallerService',
            'title_resolver' => 'getTitleResolverService',
            'token' => 'getTokenService',
            'toolbar.menu_tree' => 'getToolbar_MenuTreeService',
            'toolbar.page_cache_request_policy.allow_toolbar_path' => 'getToolbar_PageCacheRequestPolicy_AllowToolbarPathService',
            'transliteration' => 'getTransliterationService',
            'twig' => 'getTwigService',
            'twig.extension' => 'getTwig_ExtensionService',
            'twig.extension.debug' => 'getTwig_Extension_DebugService',
            'twig.loader.filesystem' => 'getTwig_Loader_FilesystemService',
            'twig.loader.string' => 'getTwig_Loader_StringService',
            'twig.loader.theme_registry' => 'getTwig_Loader_ThemeRegistryService',
            'typed_data_manager' => 'getTypedDataManagerService',
            'unrouted_url_assembler' => 'getUnroutedUrlAssemblerService',
            'url_generator' => 'getUrlGeneratorService',
            'user.auth' => 'getUser_AuthService',
            'user.authentication.cookie' => 'getUser_Authentication_CookieService',
            'user.data' => 'getUser_DataService',
            'user.permissions' => 'getUser_PermissionsService',
            'user.private_tempstore' => 'getUser_PrivateTempstoreService',
            'user.shared_tempstore' => 'getUser_SharedTempstoreService',
            'user_access_denied_subscriber' => 'getUserAccessDeniedSubscriberService',
            'user_last_access_subscriber' => 'getUserLastAccessSubscriberService',
            'user_maintenance_mode_subscriber' => 'getUserMaintenanceModeSubscriberService',
            'user_permissions_hash_generator' => 'getUserPermissionsHashGeneratorService',
            'uuid' => 'getUuidService',
            'validation.constraint' => 'getValidation_ConstraintService',
            'views.analyzer' => 'getViews_AnalyzerService',
            'views.entity_schema_subscriber' => 'getViews_EntitySchemaSubscriberService',
            'views.executable' => 'getViews_ExecutableService',
            'views.exposed_form_cache' => 'getViews_ExposedFormCacheService',
            'views.route_subscriber' => 'getViews_RouteSubscriberService',
            'views.views_data' => 'getViews_ViewsDataService',
            'views.views_data_helper' => 'getViews_ViewsDataHelperService',
        );
        $this->aliases = array(
            'element_info' => 'plugin.manager.element_info',
            'session_handler' => 'session_handler.write_safe',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped frozen container.');
    }

    /**
     * Gets the 'accept_negotiation_406' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\AcceptNegotiation406 A Drupal\Core\EventSubscriber\AcceptNegotiation406 instance.
     */
    protected function getAcceptNegotiation406Service()
    {
        $this->services['accept_negotiation_406'] = $instance = new \Drupal\Core\EventSubscriber\AcceptNegotiation406();

        $instance->_serviceId = 'accept_negotiation_406';

        return $instance;
    }

    /**
     * Gets the 'access_arguments_resolver_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Access\AccessArgumentsResolverFactory A Drupal\Core\Access\AccessArgumentsResolverFactory instance.
     */
    protected function getAccessArgumentsResolverFactoryService()
    {
        $this->services['access_arguments_resolver_factory'] = $instance = new \Drupal\Core\Access\AccessArgumentsResolverFactory();

        $instance->_serviceId = 'access_arguments_resolver_factory';

        return $instance;
    }

    /**
     * Gets the 'access_check.contact_personal' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\contact\Access\ContactPageAccess A Drupal\contact\Access\ContactPageAccess instance.
     */
    protected function getAccessCheck_ContactPersonalService()
    {
        $this->services['access_check.contact_personal'] = $instance = new \Drupal\contact\Access\ContactPageAccess($this->get('config.factory'), $this->get('user.data'));

        $instance->_serviceId = 'access_check.contact_personal';

        return $instance;
    }

    /**
     * Gets the 'access_check.cron' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\system\Access\CronAccessCheck A Drupal\system\Access\CronAccessCheck instance.
     */
    protected function getAccessCheck_CronService()
    {
        $this->services['access_check.cron'] = $instance = new \Drupal\system\Access\CronAccessCheck();

        $instance->_serviceId = 'access_check.cron';

        return $instance;
    }

    /**
     * Gets the 'access_check.csrf' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Access\CsrfAccessCheck A Drupal\Core\Access\CsrfAccessCheck instance.
     */
    protected function getAccessCheck_CsrfService()
    {
        $this->services['access_check.csrf'] = $instance = new \Drupal\Core\Access\CsrfAccessCheck($this->get('csrf_token'));

        $instance->_serviceId = 'access_check.csrf';

        return $instance;
    }

    /**
     * Gets the 'access_check.custom' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Access\CustomAccessCheck A Drupal\Core\Access\CustomAccessCheck instance.
     */
    protected function getAccessCheck_CustomService()
    {
        $this->services['access_check.custom'] = $instance = new \Drupal\Core\Access\CustomAccessCheck($this->get('controller_resolver'), $this->get('access_arguments_resolver_factory'));

        $instance->_serviceId = 'access_check.custom';

        return $instance;
    }

    /**
     * Gets the 'access_check.db_update' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\system\Access\DbUpdateAccessCheck A Drupal\system\Access\DbUpdateAccessCheck instance.
     */
    protected function getAccessCheck_DbUpdateService()
    {
        $this->services['access_check.db_update'] = $instance = new \Drupal\system\Access\DbUpdateAccessCheck();

        $instance->_serviceId = 'access_check.db_update';

        return $instance;
    }

    /**
     * Gets the 'access_check.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Access\DefaultAccessCheck A Drupal\Core\Access\DefaultAccessCheck instance.
     */
    protected function getAccessCheck_DefaultService()
    {
        $this->services['access_check.default'] = $instance = new \Drupal\Core\Access\DefaultAccessCheck();

        $instance->_serviceId = 'access_check.default';

        return $instance;
    }

    /**
     * Gets the 'access_check.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Entity\EntityAccessCheck A Drupal\Core\Entity\EntityAccessCheck instance.
     */
    protected function getAccessCheck_EntityService()
    {
        $this->services['access_check.entity'] = $instance = new \Drupal\Core\Entity\EntityAccessCheck();

        $instance->_serviceId = 'access_check.entity';

        return $instance;
    }

    /**
     * Gets the 'access_check.entity_create' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Entity\EntityCreateAccessCheck A Drupal\Core\Entity\EntityCreateAccessCheck instance.
     */
    protected function getAccessCheck_EntityCreateService()
    {
        $this->services['access_check.entity_create'] = $instance = new \Drupal\Core\Entity\EntityCreateAccessCheck($this->get('entity.manager'));

        $instance->_serviceId = 'access_check.entity_create';

        return $instance;
    }

    /**
     * Gets the 'access_check.field_ui.form_mode' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\field_ui\Access\FormModeAccessCheck A Drupal\field_ui\Access\FormModeAccessCheck instance.
     */
    protected function getAccessCheck_FieldUi_FormModeService()
    {
        $this->services['access_check.field_ui.form_mode'] = $instance = new \Drupal\field_ui\Access\FormModeAccessCheck($this->get('entity.manager'));

        $instance->_serviceId = 'access_check.field_ui.form_mode';

        return $instance;
    }

    /**
     * Gets the 'access_check.field_ui.view_mode' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\field_ui\Access\ViewModeAccessCheck A Drupal\field_ui\Access\ViewModeAccessCheck instance.
     */
    protected function getAccessCheck_FieldUi_ViewModeService()
    {
        $this->services['access_check.field_ui.view_mode'] = $instance = new \Drupal\field_ui\Access\ViewModeAccessCheck($this->get('entity.manager'));

        $instance->_serviceId = 'access_check.field_ui.view_mode';

        return $instance;
    }

    /**
     * Gets the 'access_check.node.add' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\node\Access\NodeAddAccessCheck A Drupal\node\Access\NodeAddAccessCheck instance.
     */
    protected function getAccessCheck_Node_AddService()
    {
        $this->services['access_check.node.add'] = $instance = new \Drupal\node\Access\NodeAddAccessCheck($this->get('entity.manager'));

        $instance->_serviceId = 'access_check.node.add';

        return $instance;
    }

    /**
     * Gets the 'access_check.node.preview' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\node\Access\NodePreviewAccessCheck A Drupal\node\Access\NodePreviewAccessCheck instance.
     */
    protected function getAccessCheck_Node_PreviewService()
    {
        $this->services['access_check.node.preview'] = $instance = new \Drupal\node\Access\NodePreviewAccessCheck($this->get('entity.manager'));

        $instance->_serviceId = 'access_check.node.preview';

        return $instance;
    }

    /**
     * Gets the 'access_check.node.revision' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\node\Access\NodeRevisionAccessCheck A Drupal\node\Access\NodeRevisionAccessCheck instance.
     */
    protected function getAccessCheck_Node_RevisionService()
    {
        $this->services['access_check.node.revision'] = $instance = new \Drupal\node\Access\NodeRevisionAccessCheck($this->get('entity.manager'));

        $instance->_serviceId = 'access_check.node.revision';

        return $instance;
    }

    /**
     * Gets the 'access_check.permission' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\user\Access\PermissionAccessCheck A Drupal\user\Access\PermissionAccessCheck instance.
     */
    protected function getAccessCheck_PermissionService()
    {
        $this->services['access_check.permission'] = $instance = new \Drupal\user\Access\PermissionAccessCheck();

        $instance->_serviceId = 'access_check.permission';

        return $instance;
    }

    /**
     * Gets the 'access_check.quickedit.entity_field' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\quickedit\Access\EditEntityFieldAccessCheck A Drupal\quickedit\Access\EditEntityFieldAccessCheck instance.
     */
    protected function getAccessCheck_Quickedit_EntityFieldService()
    {
        $this->services['access_check.quickedit.entity_field'] = $instance = new \Drupal\quickedit\Access\EditEntityFieldAccessCheck();

        $instance->_serviceId = 'access_check.quickedit.entity_field';

        return $instance;
    }

    /**
     * Gets the 'access_check.rest.csrf' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\rest\Access\CSRFAccessCheck A Drupal\rest\Access\CSRFAccessCheck instance.
     */
    protected function getAccessCheck_Rest_CsrfService()
    {
        $this->services['access_check.rest.csrf'] = $instance = new \Drupal\rest\Access\CSRFAccessCheck($this->get('session_configuration'));

        $instance->_serviceId = 'access_check.rest.csrf';

        return $instance;
    }

    /**
     * Gets the 'access_check.theme' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Theme\ThemeAccessCheck A Drupal\Core\Theme\ThemeAccessCheck instance.
     */
    protected function getAccessCheck_ThemeService()
    {
        $this->services['access_check.theme'] = $instance = new \Drupal\Core\Theme\ThemeAccessCheck($this->get('theme_handler'));

        $instance->_serviceId = 'access_check.theme';

        return $instance;
    }

    /**
     * Gets the 'access_check.user.login_status' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\user\Access\LoginStatusCheck A Drupal\user\Access\LoginStatusCheck instance.
     */
    protected function getAccessCheck_User_LoginStatusService()
    {
        $this->services['access_check.user.login_status'] = $instance = new \Drupal\user\Access\LoginStatusCheck();

        $instance->_serviceId = 'access_check.user.login_status';

        return $instance;
    }

    /**
     * Gets the 'access_check.user.register' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\user\Access\RegisterAccessCheck A Drupal\user\Access\RegisterAccessCheck instance.
     */
    protected function getAccessCheck_User_RegisterService()
    {
        $this->services['access_check.user.register'] = $instance = new \Drupal\user\Access\RegisterAccessCheck();

        $instance->_serviceId = 'access_check.user.register';

        return $instance;
    }

    /**
     * Gets the 'access_check.user.role' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\user\Access\RoleAccessCheck A Drupal\user\Access\RoleAccessCheck instance.
     */
    protected function getAccessCheck_User_RoleService()
    {
        $this->services['access_check.user.role'] = $instance = new \Drupal\user\Access\RoleAccessCheck();

        $instance->_serviceId = 'access_check.user.role';

        return $instance;
    }

    /**
     * Gets the 'access_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Access\AccessManager A Drupal\Core\Access\AccessManager instance.
     */
    protected function getAccessManagerService()
    {
        $this->services['access_manager'] = $instance = new \Drupal\Core\Access\AccessManager($this->get('router.route_provider'), $this->get('paramconverter_manager'), $this->get('access_arguments_resolver_factory'), $this->get('current_user'), $this->get('access_manager.check_provider'));

        $instance->_serviceId = 'access_manager';

        return $instance;
    }

    /**
     * Gets the 'account_switcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Session\AccountSwitcher A Drupal\Core\Session\AccountSwitcher instance.
     */
    protected function getAccountSwitcherService()
    {
        $this->services['account_switcher'] = $instance = new \Drupal\Core\Session\AccountSwitcher($this->get('current_user'), $this->get('session_handler.write_safe'));

        $instance->_serviceId = 'account_switcher';

        return $instance;
    }

    /**
     * Gets the 'ajax_response.attachments_processor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Ajax\AjaxResponseAttachmentsProcessor A Drupal\Core\Ajax\AjaxResponseAttachmentsProcessor instance.
     */
    protected function getAjaxResponse_AttachmentsProcessorService()
    {
        $this->services['ajax_response.attachments_processor'] = $instance = new \Drupal\Core\Ajax\AjaxResponseAttachmentsProcessor($this->get('asset.resolver'), $this->get('config.factory'), $this->get('asset.css.collection_renderer'), $this->get('asset.js.collection_renderer'), $this->get('request_stack'), $this->get('renderer'), $this->get('module_handler'));

        $instance->_serviceId = 'ajax_response.attachments_processor';

        return $instance;
    }

    /**
     * Gets the 'ajax_response.subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\AjaxResponseSubscriber A Drupal\Core\EventSubscriber\AjaxResponseSubscriber instance.
     */
    protected function getAjaxResponse_SubscriberService()
    {
        $this->services['ajax_response.subscriber'] = $instance = new \Drupal\Core\EventSubscriber\AjaxResponseSubscriber($this->get('ajax_response.attachments_processor'));

        $instance->_serviceId = 'ajax_response.subscriber';

        return $instance;
    }

    /**
     * Gets the 'anonymous_user_response_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\AnonymousUserResponseSubscriber A Drupal\Core\EventSubscriber\AnonymousUserResponseSubscriber instance.
     */
    protected function getAnonymousUserResponseSubscriberService()
    {
        $this->services['anonymous_user_response_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\AnonymousUserResponseSubscriber($this->get('current_user'));

        $instance->_serviceId = 'anonymous_user_response_subscriber';

        return $instance;
    }

    /**
     * Gets the 'app.root' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SplString A SplString instance.
     */
    protected function getApp_RootService()
    {
        return $this->services['app.root'] = call_user_func(array(new \Drupal\Core\AppRootFactory($this->get('kernel')), 'get'));
    }

    /**
     * Gets the 'asset.css.collection_grouper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Asset\CssCollectionGrouper A Drupal\Core\Asset\CssCollectionGrouper instance.
     */
    protected function getAsset_Css_CollectionGrouperService()
    {
        $this->services['asset.css.collection_grouper'] = $instance = new \Drupal\Core\Asset\CssCollectionGrouper();

        $instance->_serviceId = 'asset.css.collection_grouper';

        return $instance;
    }

    /**
     * Gets the 'asset.css.collection_optimizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Asset\CssCollectionOptimizer A Drupal\Core\Asset\CssCollectionOptimizer instance.
     */
    protected function getAsset_Css_CollectionOptimizerService()
    {
        $this->services['asset.css.collection_optimizer'] = $instance = new \Drupal\Core\Asset\CssCollectionOptimizer($this->get('asset.css.collection_grouper'), $this->get('asset.css.optimizer'), $this->get('asset.css.dumper'), $this->get('state'));

        $instance->_serviceId = 'asset.css.collection_optimizer';

        return $instance;
    }

    /**
     * Gets the 'asset.css.collection_renderer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Asset\CssCollectionRenderer A Drupal\Core\Asset\CssCollectionRenderer instance.
     */
    protected function getAsset_Css_CollectionRendererService()
    {
        $this->services['asset.css.collection_renderer'] = $instance = new \Drupal\Core\Asset\CssCollectionRenderer($this->get('state'));

        $instance->_serviceId = 'asset.css.collection_renderer';

        return $instance;
    }

    /**
     * Gets the 'asset.css.dumper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Asset\AssetDumper A Drupal\Core\Asset\AssetDumper instance.
     */
    protected function getAsset_Css_DumperService()
    {
        $this->services['asset.css.dumper'] = $instance = new \Drupal\Core\Asset\AssetDumper();

        $instance->_serviceId = 'asset.css.dumper';

        return $instance;
    }

    /**
     * Gets the 'asset.css.optimizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Asset\CssOptimizer A Drupal\Core\Asset\CssOptimizer instance.
     */
    protected function getAsset_Css_OptimizerService()
    {
        $this->services['asset.css.optimizer'] = $instance = new \Drupal\Core\Asset\CssOptimizer();

        $instance->_serviceId = 'asset.css.optimizer';

        return $instance;
    }

    /**
     * Gets the 'asset.js.collection_grouper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Asset\JsCollectionGrouper A Drupal\Core\Asset\JsCollectionGrouper instance.
     */
    protected function getAsset_Js_CollectionGrouperService()
    {
        $this->services['asset.js.collection_grouper'] = $instance = new \Drupal\Core\Asset\JsCollectionGrouper();

        $instance->_serviceId = 'asset.js.collection_grouper';

        return $instance;
    }

    /**
     * Gets the 'asset.js.collection_optimizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Asset\JsCollectionOptimizer A Drupal\Core\Asset\JsCollectionOptimizer instance.
     */
    protected function getAsset_Js_CollectionOptimizerService()
    {
        $this->services['asset.js.collection_optimizer'] = $instance = new \Drupal\Core\Asset\JsCollectionOptimizer($this->get('asset.js.collection_grouper'), $this->get('asset.js.optimizer'), $this->get('asset.js.dumper'), $this->get('state'));

        $instance->_serviceId = 'asset.js.collection_optimizer';

        return $instance;
    }

    /**
     * Gets the 'asset.js.collection_renderer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Asset\JsCollectionRenderer A Drupal\Core\Asset\JsCollectionRenderer instance.
     */
    protected function getAsset_Js_CollectionRendererService()
    {
        $this->services['asset.js.collection_renderer'] = $instance = new \Drupal\Core\Asset\JsCollectionRenderer($this->get('state'));

        $instance->_serviceId = 'asset.js.collection_renderer';

        return $instance;
    }

    /**
     * Gets the 'asset.js.dumper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Asset\AssetDumper A Drupal\Core\Asset\AssetDumper instance.
     */
    protected function getAsset_Js_DumperService()
    {
        $this->services['asset.js.dumper'] = $instance = new \Drupal\Core\Asset\AssetDumper();

        $instance->_serviceId = 'asset.js.dumper';

        return $instance;
    }

    /**
     * Gets the 'asset.js.optimizer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Asset\JsOptimizer A Drupal\Core\Asset\JsOptimizer instance.
     */
    protected function getAsset_Js_OptimizerService()
    {
        $this->services['asset.js.optimizer'] = $instance = new \Drupal\Core\Asset\JsOptimizer();

        $instance->_serviceId = 'asset.js.optimizer';

        return $instance;
    }

    /**
     * Gets the 'asset.resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Asset\AssetResolver A Drupal\Core\Asset\AssetResolver instance.
     */
    protected function getAsset_ResolverService()
    {
        $this->services['asset.resolver'] = $instance = new \Drupal\Core\Asset\AssetResolver($this->get('library.discovery'), $this->get('library.dependency_resolver'), $this->get('module_handler'), $this->get('theme.manager'), $this->get('language_manager'), $this->get('cache.data'));

        $instance->_serviceId = 'asset.resolver';

        return $instance;
    }

    /**
     * Gets the 'authentication' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Authentication\AuthenticationManager A Drupal\Core\Authentication\AuthenticationManager instance.
     */
    protected function getAuthenticationService()
    {
        $this->services['authentication'] = $instance = new \Drupal\Core\Authentication\AuthenticationManager();

        $instance->addProvider($this->get('basic_auth.authentication.basic_auth'), 'basic_auth', 100, false);
        $instance->addProvider($this->get('user.authentication.cookie'), 'cookie', 0, true);
        $instance->_serviceId = 'authentication';

        return $instance;
    }

    /**
     * Gets the 'authentication_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\AuthenticationSubscriber A Drupal\Core\EventSubscriber\AuthenticationSubscriber instance.
     */
    protected function getAuthenticationSubscriberService()
    {
        $this->services['authentication_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\AuthenticationSubscriber($this->get('authentication'), $this->get('current_user'));

        $instance->_serviceId = 'authentication_subscriber';

        return $instance;
    }

    /**
     * Gets the 'bare_html_page_renderer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Drupal\Core\Render\BareHtmlPageRenderer A Drupal\Core\Render\BareHtmlPageRenderer instance.
     */
    public function getBareHtmlPageRendererService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['bare_html_page_renderer'] = new Drupal_Core_Render_BareHtmlPageRenderer_Proxy($this, 'bare_html_page_renderer');
        }
        $instance = new \Drupal\Core\Render\BareHtmlPageRenderer($this->get('renderer'), $this->get('html_response.attachments_processor'));

        $instance->_serviceId = 'bare_html_page_renderer';

        return $instance;
    }

    /**
     * Gets the 'basic_auth.authentication.basic_auth' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\basic_auth\Authentication\Provider\BasicAuth A Drupal\basic_auth\Authentication\Provider\BasicAuth instance.
     */
    protected function getBasicAuth_Authentication_BasicAuthService()
    {
        $this->services['basic_auth.authentication.basic_auth'] = $instance = new \Drupal\basic_auth\Authentication\Provider\BasicAuth($this->get('config.factory'), $this->get('user.auth'), $this->get('flood'), $this->get('entity.manager'));

        $instance->_serviceId = 'basic_auth.authentication.basic_auth';

        return $instance;
    }

    /**
     * Gets the 'batch.storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Drupal\Core\Batch\BatchStorage A Drupal\Core\Batch\BatchStorage instance.
     */
    public function getBatch_StorageService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['batch.storage'] = new Drupal_Core_Batch_BatchStorage_Proxy($this, 'batch.storage');
        }
        $instance = new \Drupal\Core\Batch\BatchStorage($this->get('database'), $this->get('session'), $this->get('csrf_token'));

        $instance->_serviceId = 'batch.storage';

        return $instance;
    }

    /**
     * Gets the 'block.current_language_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\block\EventSubscriber\CurrentLanguageContext A Drupal\block\EventSubscriber\CurrentLanguageContext instance.
     */
    protected function getBlock_CurrentLanguageContextService()
    {
        $this->services['block.current_language_context'] = $instance = new \Drupal\block\EventSubscriber\CurrentLanguageContext($this->get('language_manager'));

        $instance->_serviceId = 'block.current_language_context';

        return $instance;
    }

    /**
     * Gets the 'block.current_user_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\block\EventSubscriber\CurrentUserContext A Drupal\block\EventSubscriber\CurrentUserContext instance.
     */
    protected function getBlock_CurrentUserContextService()
    {
        $this->services['block.current_user_context'] = $instance = new \Drupal\block\EventSubscriber\CurrentUserContext($this->get('current_user'), $this->get('entity.manager'));

        $instance->_serviceId = 'block.current_user_context';

        return $instance;
    }

    /**
     * Gets the 'block.node_route_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\block\EventSubscriber\NodeRouteContext A Drupal\block\EventSubscriber\NodeRouteContext instance.
     */
    protected function getBlock_NodeRouteContextService()
    {
        $this->services['block.node_route_context'] = $instance = new \Drupal\block\EventSubscriber\NodeRouteContext($this->get('current_route_match'));

        $instance->_serviceId = 'block.node_route_context';

        return $instance;
    }

    /**
     * Gets the 'block.page_display_variant_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\block\EventSubscriber\BlockPageDisplayVariantSubscriber A Drupal\block\EventSubscriber\BlockPageDisplayVariantSubscriber instance.
     */
    protected function getBlock_PageDisplayVariantSubscriberService()
    {
        $this->services['block.page_display_variant_subscriber'] = $instance = new \Drupal\block\EventSubscriber\BlockPageDisplayVariantSubscriber();

        $instance->_serviceId = 'block.page_display_variant_subscriber';

        return $instance;
    }

    /**
     * Gets the 'block.repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\block\BlockRepository A Drupal\block\BlockRepository instance.
     */
    protected function getBlock_RepositoryService()
    {
        $this->services['block.repository'] = $instance = new \Drupal\block\BlockRepository($this->get('entity.manager'), $this->get('theme.manager'), $this->get('context.handler'));

        $instance->_serviceId = 'block.repository';

        return $instance;
    }

    /**
     * Gets the 'breadcrumb' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Breadcrumb\BreadcrumbManager A Drupal\Core\Breadcrumb\BreadcrumbManager instance.
     */
    protected function getBreadcrumbService()
    {
        $this->services['breadcrumb'] = $instance = new \Drupal\Core\Breadcrumb\BreadcrumbManager($this->get('module_handler'));

        $instance->addBuilder($this->get('taxonomy_term.breadcrumb'), 1002);
        $instance->addBuilder($this->get('comment.breadcrumb'), 100);
        $instance->addBuilder($this->get('system.breadcrumb.default'), 0);
        $instance->_serviceId = 'breadcrumb';

        return $instance;
    }

    /**
     * Gets the 'breakpoint.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\breakpoint\BreakpointManager A Drupal\breakpoint\BreakpointManager instance.
     */
    protected function getBreakpoint_ManagerService()
    {
        $this->services['breakpoint.manager'] = $instance = new \Drupal\breakpoint\BreakpointManager($this->get('module_handler'), $this->get('theme_handler'), $this->get('cache.discovery'), $this->get('string_translation'));

        $instance->_serviceId = 'breakpoint.manager';

        return $instance;
    }

    /**
     * Gets the 'cache.backend.apcu' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\ApcuBackendFactory A Drupal\Core\Cache\ApcuBackendFactory instance.
     */
    protected function getCache_Backend_ApcuService()
    {
        $this->services['cache.backend.apcu'] = $instance = new \Drupal\Core\Cache\ApcuBackendFactory($this->get('app.root'), $this->get('site.path'), $this->get('cache_tags.invalidator.checksum'));

        $instance->_serviceId = 'cache.backend.apcu';

        return $instance;
    }

    /**
     * Gets the 'cache.backend.chainedfast' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\ChainedFastBackendFactory A Drupal\Core\Cache\ChainedFastBackendFactory instance.
     */
    protected function getCache_Backend_ChainedfastService()
    {
        $this->services['cache.backend.chainedfast'] = $instance = new \Drupal\Core\Cache\ChainedFastBackendFactory($this->get('settings'));

        $instance->setContainer($this);
        $instance->_serviceId = 'cache.backend.chainedfast';

        return $instance;
    }

    /**
     * Gets the 'cache.backend.database' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\DatabaseBackendFactory A Drupal\Core\Cache\DatabaseBackendFactory instance.
     */
    protected function getCache_Backend_DatabaseService()
    {
        $this->services['cache.backend.database'] = $instance = new \Drupal\Core\Cache\DatabaseBackendFactory($this->get('database'), $this->get('cache_tags.invalidator.checksum'));

        $instance->_serviceId = 'cache.backend.database';

        return $instance;
    }

    /**
     * Gets the 'cache.backend.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\PhpBackendFactory A Drupal\Core\Cache\PhpBackendFactory instance.
     */
    protected function getCache_Backend_PhpService()
    {
        $this->services['cache.backend.php'] = $instance = new \Drupal\Core\Cache\PhpBackendFactory($this->get('cache_tags.invalidator.checksum'));

        $instance->_serviceId = 'cache.backend.php';

        return $instance;
    }

    /**
     * Gets the 'cache.bootstrap' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_BootstrapService()
    {
        $this->services['cache.bootstrap'] = $instance = $this->get('cache_factory')->get('bootstrap');

        $instance->_serviceId = 'cache.bootstrap';

        return $instance;
    }

    /**
     * Gets the 'cache.config' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_ConfigService()
    {
        $this->services['cache.config'] = $instance = $this->get('cache_factory')->get('config');

        $instance->_serviceId = 'cache.config';

        return $instance;
    }

    /**
     * Gets the 'cache.data' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_DataService()
    {
        $this->services['cache.data'] = $instance = $this->get('cache_factory')->get('data');

        $instance->_serviceId = 'cache.data';

        return $instance;
    }

    /**
     * Gets the 'cache.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_DefaultService()
    {
        $this->services['cache.default'] = $instance = $this->get('cache_factory')->get('default');

        $instance->_serviceId = 'cache.default';

        return $instance;
    }

    /**
     * Gets the 'cache.discovery' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_DiscoveryService()
    {
        $this->services['cache.discovery'] = $instance = $this->get('cache_factory')->get('discovery');

        $instance->_serviceId = 'cache.discovery';

        return $instance;
    }

    /**
     * Gets the 'cache.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_EntityService()
    {
        $this->services['cache.entity'] = $instance = $this->get('cache_factory')->get('entity');

        $instance->_serviceId = 'cache.entity';

        return $instance;
    }

    /**
     * Gets the 'cache.menu' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_MenuService()
    {
        $this->services['cache.menu'] = $instance = $this->get('cache_factory')->get('menu');

        $instance->_serviceId = 'cache.menu';

        return $instance;
    }

    /**
     * Gets the 'cache.render' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_RenderService()
    {
        $this->services['cache.render'] = $instance = $this->get('cache_factory')->get('render');

        $instance->_serviceId = 'cache.render';

        return $instance;
    }

    /**
     * Gets the 'cache.rest' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_RestService()
    {
        $this->services['cache.rest'] = $instance = $this->get('cache_factory')->get('rest');

        $instance->_serviceId = 'cache.rest';

        return $instance;
    }

    /**
     * Gets the 'cache.toolbar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\CacheBackendInterface A Drupal\Core\Cache\CacheBackendInterface instance.
     */
    protected function getCache_ToolbarService()
    {
        $this->services['cache.toolbar'] = $instance = $this->get('cache_factory')->get('toolbar');

        $instance->_serviceId = 'cache.toolbar';

        return $instance;
    }

    /**
     * Gets the 'cache_context.cookies' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\Context\CookiesCacheContext A Drupal\Core\Cache\Context\CookiesCacheContext instance.
     */
    protected function getCacheContext_CookiesService()
    {
        $this->services['cache_context.cookies'] = $instance = new \Drupal\Core\Cache\Context\CookiesCacheContext($this->get('request_stack'));

        $instance->_serviceId = 'cache_context.cookies';

        return $instance;
    }

    /**
     * Gets the 'cache_context.headers' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\Context\HeadersCacheContext A Drupal\Core\Cache\Context\HeadersCacheContext instance.
     */
    protected function getCacheContext_HeadersService()
    {
        $this->services['cache_context.headers'] = $instance = new \Drupal\Core\Cache\Context\HeadersCacheContext($this->get('request_stack'));

        $instance->_serviceId = 'cache_context.headers';

        return $instance;
    }

    /**
     * Gets the 'cache_context.ip' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\Context\IpCacheContext A Drupal\Core\Cache\Context\IpCacheContext instance.
     */
    protected function getCacheContext_IpService()
    {
        $this->services['cache_context.ip'] = $instance = new \Drupal\Core\Cache\Context\IpCacheContext($this->get('request_stack'));

        $instance->_serviceId = 'cache_context.ip';

        return $instance;
    }

    /**
     * Gets the 'cache_context.languages' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\Context\LanguagesCacheContext A Drupal\Core\Cache\Context\LanguagesCacheContext instance.
     */
    protected function getCacheContext_LanguagesService()
    {
        $this->services['cache_context.languages'] = $instance = new \Drupal\Core\Cache\Context\LanguagesCacheContext($this->get('language_manager'));

        $instance->_serviceId = 'cache_context.languages';

        return $instance;
    }

    /**
     * Gets the 'cache_context.request_format' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\Context\RequestFormatCacheContext A Drupal\Core\Cache\Context\RequestFormatCacheContext instance.
     */
    protected function getCacheContext_RequestFormatService()
    {
        $this->services['cache_context.request_format'] = $instance = new \Drupal\Core\Cache\Context\RequestFormatCacheContext($this->get('request_stack'));

        $instance->_serviceId = 'cache_context.request_format';

        return $instance;
    }

    /**
     * Gets the 'cache_context.route' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\Context\RouteCacheContext A Drupal\Core\Cache\Context\RouteCacheContext instance.
     */
    protected function getCacheContext_RouteService()
    {
        $this->services['cache_context.route'] = $instance = new \Drupal\Core\Cache\Context\RouteCacheContext($this->get('current_route_match'));

        $instance->_serviceId = 'cache_context.route';

        return $instance;
    }

    /**
     * Gets the 'cache_context.route.menu_active_trails' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\Context\MenuActiveTrailsCacheContext A Drupal\Core\Cache\Context\MenuActiveTrailsCacheContext instance.
     */
    protected function getCacheContext_Route_MenuActiveTrailsService()
    {
        $this->services['cache_context.route.menu_active_trails'] = $instance = new \Drupal\Core\Cache\Context\MenuActiveTrailsCacheContext();

        $instance->setContainer($this);
        $instance->_serviceId = 'cache_context.route.menu_active_trails';

        return $instance;
    }

    /**
     * Gets the 'cache_context.route.name' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\Context\RouteNameCacheContext A Drupal\Core\Cache\Context\RouteNameCacheContext instance.
     */
    protected function getCacheContext_Route_NameService()
    {
        $this->services['cache_context.route.name'] = $instance = new \Drupal\Core\Cache\Context\RouteNameCacheContext($this->get('current_route_match'));

        $instance->_serviceId = 'cache_context.route.name';

        return $instance;
    }

    /**
     * Gets the 'cache_context.theme' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\Context\ThemeCacheContext A Drupal\Core\Cache\Context\ThemeCacheContext instance.
     */
    protected function getCacheContext_ThemeService()
    {
        $this->services['cache_context.theme'] = $instance = new \Drupal\Core\Cache\Context\ThemeCacheContext($this->get('theme.manager'));

        $instance->_serviceId = 'cache_context.theme';

        return $instance;
    }

    /**
     * Gets the 'cache_context.timezone' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\Context\TimeZoneCacheContext A Drupal\Core\Cache\Context\TimeZoneCacheContext instance.
     */
    protected function getCacheContext_TimezoneService()
    {
        $this->services['cache_context.timezone'] = $instance = new \Drupal\Core\Cache\Context\TimeZoneCacheContext();

        $instance->_serviceId = 'cache_context.timezone';

        return $instance;
    }

    /**
     * Gets the 'cache_context.url' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\Context\UrlCacheContext A Drupal\Core\Cache\Context\UrlCacheContext instance.
     */
    protected function getCacheContext_UrlService()
    {
        $this->services['cache_context.url'] = $instance = new \Drupal\Core\Cache\Context\UrlCacheContext($this->get('request_stack'));

        $instance->_serviceId = 'cache_context.url';

        return $instance;
    }

    /**
     * Gets the 'cache_context.url.query_args' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\Context\QueryArgsCacheContext A Drupal\Core\Cache\Context\QueryArgsCacheContext instance.
     */
    protected function getCacheContext_Url_QueryArgsService()
    {
        $this->services['cache_context.url.query_args'] = $instance = new \Drupal\Core\Cache\Context\QueryArgsCacheContext($this->get('request_stack'));

        $instance->_serviceId = 'cache_context.url.query_args';

        return $instance;
    }

    /**
     * Gets the 'cache_context.url.query_args.pagers' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\Context\PagersCacheContext A Drupal\Core\Cache\Context\PagersCacheContext instance.
     */
    protected function getCacheContext_Url_QueryArgs_PagersService()
    {
        $this->services['cache_context.url.query_args.pagers'] = $instance = new \Drupal\Core\Cache\Context\PagersCacheContext($this->get('request_stack'));

        $instance->_serviceId = 'cache_context.url.query_args.pagers';

        return $instance;
    }

    /**
     * Gets the 'cache_context.url.site' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\Context\SiteCacheContext A Drupal\Core\Cache\Context\SiteCacheContext instance.
     */
    protected function getCacheContext_Url_SiteService()
    {
        $this->services['cache_context.url.site'] = $instance = new \Drupal\Core\Cache\Context\SiteCacheContext($this->get('request_stack'));

        $instance->_serviceId = 'cache_context.url.site';

        return $instance;
    }

    /**
     * Gets the 'cache_context.user' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\Context\UserCacheContext A Drupal\Core\Cache\Context\UserCacheContext instance.
     */
    protected function getCacheContext_UserService()
    {
        $this->services['cache_context.user'] = $instance = new \Drupal\Core\Cache\Context\UserCacheContext($this->get('current_user'));

        $instance->_serviceId = 'cache_context.user';

        return $instance;
    }

    /**
     * Gets the 'cache_context.user.is_super_user' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\Context\IsSuperUserCacheContext A Drupal\Core\Cache\Context\IsSuperUserCacheContext instance.
     */
    protected function getCacheContext_User_IsSuperUserService()
    {
        $this->services['cache_context.user.is_super_user'] = $instance = new \Drupal\Core\Cache\Context\IsSuperUserCacheContext($this->get('current_user'));

        $instance->_serviceId = 'cache_context.user.is_super_user';

        return $instance;
    }

    /**
     * Gets the 'cache_context.user.node_grants' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\node\Cache\NodeAccessGrantsCacheContext A Drupal\node\Cache\NodeAccessGrantsCacheContext instance.
     */
    protected function getCacheContext_User_NodeGrantsService()
    {
        $this->services['cache_context.user.node_grants'] = $instance = new \Drupal\node\Cache\NodeAccessGrantsCacheContext($this->get('current_user'));

        $instance->_serviceId = 'cache_context.user.node_grants';

        return $instance;
    }

    /**
     * Gets the 'cache_context.user.permissions' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\Context\AccountPermissionsCacheContext A Drupal\Core\Cache\Context\AccountPermissionsCacheContext instance.
     */
    protected function getCacheContext_User_PermissionsService()
    {
        $this->services['cache_context.user.permissions'] = $instance = new \Drupal\Core\Cache\Context\AccountPermissionsCacheContext($this->get('current_user'), $this->get('user_permissions_hash_generator'));

        $instance->_serviceId = 'cache_context.user.permissions';

        return $instance;
    }

    /**
     * Gets the 'cache_context.user.roles' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\Context\UserRolesCacheContext A Drupal\Core\Cache\Context\UserRolesCacheContext instance.
     */
    protected function getCacheContext_User_RolesService()
    {
        $this->services['cache_context.user.roles'] = $instance = new \Drupal\Core\Cache\Context\UserRolesCacheContext($this->get('current_user'));

        $instance->_serviceId = 'cache_context.user.roles';

        return $instance;
    }

    /**
     * Gets the 'cache_contexts_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\Context\CacheContextsManager A Drupal\Core\Cache\Context\CacheContextsManager instance.
     */
    protected function getCacheContextsManagerService()
    {
        $this->services['cache_contexts_manager'] = $instance = new \Drupal\Core\Cache\Context\CacheContextsManager($this, array(0 => 'cookies', 1 => 'headers', 2 => 'ip', 3 => 'languages', 4 => 'request_format', 5 => 'route', 6 => 'route.menu_active_trails', 7 => 'route.name', 8 => 'theme', 9 => 'timezone', 10 => 'url', 11 => 'url.query_args', 12 => 'url.query_args.pagers', 13 => 'url.site', 14 => 'user', 15 => 'user.is_super_user', 16 => 'user.node_grants', 17 => 'user.permissions', 18 => 'user.roles'));

        $instance->_serviceId = 'cache_contexts_manager';

        return $instance;
    }

    /**
     * Gets the 'cache_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\CacheFactory A Drupal\Core\Cache\CacheFactory instance.
     */
    protected function getCacheFactoryService()
    {
        $this->services['cache_factory'] = $instance = new \Drupal\Core\Cache\CacheFactory($this->get('settings'), array('bootstrap' => 'cache.backend.chainedfast', 'config' => 'cache.backend.chainedfast', 'discovery' => 'cache.backend.chainedfast'));

        $instance->setContainer($this);
        $instance->_serviceId = 'cache_factory';

        return $instance;
    }

    /**
     * Gets the 'cache_router_rebuild_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\CacheRouterRebuildSubscriber A Drupal\Core\EventSubscriber\CacheRouterRebuildSubscriber instance.
     */
    protected function getCacheRouterRebuildSubscriberService()
    {
        $this->services['cache_router_rebuild_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\CacheRouterRebuildSubscriber();

        $instance->_serviceId = 'cache_router_rebuild_subscriber';

        return $instance;
    }

    /**
     * Gets the 'cache_tags.invalidator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\CacheTagsInvalidator A Drupal\Core\Cache\CacheTagsInvalidator instance.
     */
    protected function getCacheTags_InvalidatorService()
    {
        $this->services['cache_tags.invalidator'] = $instance = new \Drupal\Core\Cache\CacheTagsInvalidator();

        $instance->setContainer($this);
        $instance->setContainer($this);
        $instance->addInvalidator($this->get('cache_tags.invalidator.checksum'));
        $instance->_serviceId = 'cache_tags.invalidator';

        return $instance;
    }

    /**
     * Gets the 'cache_tags.invalidator.checksum' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Cache\DatabaseCacheTagsChecksum A Drupal\Core\Cache\DatabaseCacheTagsChecksum instance.
     */
    protected function getCacheTags_Invalidator_ChecksumService()
    {
        $this->services['cache_tags.invalidator.checksum'] = $instance = new \Drupal\Core\Cache\DatabaseCacheTagsChecksum($this->get('database'));

        $instance->_serviceId = 'cache_tags.invalidator.checksum';

        return $instance;
    }

    /**
     * Gets the 'class_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getClassLoaderService()
    {
        throw new RuntimeException('You have requested a synthetic service ("class_loader"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'class_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\DependencyInjection\ClassResolver A Drupal\Core\DependencyInjection\ClassResolver instance.
     */
    protected function getClassResolverService()
    {
        $this->services['class_resolver'] = $instance = new \Drupal\Core\DependencyInjection\ClassResolver();

        $instance->setContainer($this);
        $instance->_serviceId = 'class_resolver';

        return $instance;
    }

    /**
     * Gets the 'client_error_response_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\ClientErrorResponseSubscriber A Drupal\Core\EventSubscriber\ClientErrorResponseSubscriber instance.
     */
    protected function getClientErrorResponseSubscriberService()
    {
        $this->services['client_error_response_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\ClientErrorResponseSubscriber();

        $instance->_serviceId = 'client_error_response_subscriber';

        return $instance;
    }

    /**
     * Gets the 'comment.breadcrumb' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\comment\CommentBreadcrumbBuilder A Drupal\comment\CommentBreadcrumbBuilder instance.
     */
    protected function getComment_BreadcrumbService()
    {
        $this->services['comment.breadcrumb'] = $instance = new \Drupal\comment\CommentBreadcrumbBuilder($this->get('entity.manager'));

        $instance->_serviceId = 'comment.breadcrumb';

        return $instance;
    }

    /**
     * Gets the 'comment.lazy_builders' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\comment\CommentLazyBuilders A Drupal\comment\CommentLazyBuilders instance.
     */
    protected function getComment_LazyBuildersService()
    {
        $this->services['comment.lazy_builders'] = $instance = new \Drupal\comment\CommentLazyBuilders($this->get('entity.manager'), $this->get('entity.form_builder'), $this->get('current_user'), $this->get('comment.manager'), $this->get('module_handler'), $this->get('renderer'));

        $instance->_serviceId = 'comment.lazy_builders';

        return $instance;
    }

    /**
     * Gets the 'comment.link_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\comment\CommentLinkBuilder A Drupal\comment\CommentLinkBuilder instance.
     */
    protected function getComment_LinkBuilderService()
    {
        $this->services['comment.link_builder'] = $instance = new \Drupal\comment\CommentLinkBuilder($this->get('current_user'), $this->get('comment.manager'), $this->get('module_handler'), $this->get('string_translation'), $this->get('entity.manager'));

        $instance->_serviceId = 'comment.link_builder';

        return $instance;
    }

    /**
     * Gets the 'comment.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\comment\CommentManager A Drupal\comment\CommentManager instance.
     */
    protected function getComment_ManagerService()
    {
        $this->services['comment.manager'] = $instance = new \Drupal\comment\CommentManager($this->get('entity.manager'), $this->get('entity.query'), $this->get('config.factory'), $this->get('string_translation'), $this->get('url_generator'), $this->get('module_handler'), $this->get('current_user'));

        $instance->_serviceId = 'comment.manager';

        return $instance;
    }

    /**
     * Gets the 'comment.statistics' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\comment\CommentStatistics A Drupal\comment\CommentStatistics instance.
     */
    protected function getComment_StatisticsService()
    {
        $this->services['comment.statistics'] = $instance = new \Drupal\comment\CommentStatistics($this->get('database'), $this->get('current_user'), $this->get('entity.manager'), $this->get('state'));

        $instance->_serviceId = 'comment.statistics';

        return $instance;
    }

    /**
     * Gets the 'config.config_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\config\ConfigSubscriber A Drupal\config\ConfigSubscriber instance.
     */
    protected function getConfig_ConfigSubscriberService()
    {
        $this->services['config.config_subscriber'] = $instance = new \Drupal\config\ConfigSubscriber();

        $instance->_serviceId = 'config.config_subscriber';

        return $instance;
    }

    /**
     * Gets the 'config.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Config\ConfigFactory A Drupal\Core\Config\ConfigFactory instance.
     */
    protected function getConfig_FactoryService()
    {
        $this->services['config.factory'] = $instance = new \Drupal\Core\Config\ConfigFactory($this->get('config.storage'), $this->get('event_dispatcher'), $this->get('config.typed'));

        $instance->_serviceId = 'config.factory';

        return $instance;
    }

    /**
     * Gets the 'config.importer_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Config\Importer\FinalMissingContentSubscriber A Drupal\Core\Config\Importer\FinalMissingContentSubscriber instance.
     */
    protected function getConfig_ImporterSubscriberService()
    {
        $this->services['config.importer_subscriber'] = $instance = new \Drupal\Core\Config\Importer\FinalMissingContentSubscriber();

        $instance->_serviceId = 'config.importer_subscriber';

        return $instance;
    }

    /**
     * Gets the 'config.installer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Drupal\Core\Config\ConfigInstaller A Drupal\Core\Config\ConfigInstaller instance.
     */
    public function getConfig_InstallerService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['config.installer'] = new Drupal_Core_Config_ConfigInstaller_Proxy($this, 'config.installer');
        }
        $instance = new \Drupal\Core\Config\ConfigInstaller($this->get('config.factory'), $this->get('config.storage'), $this->get('config.typed'), $this->get('config.manager'), $this->get('event_dispatcher'));

        $instance->_serviceId = 'config.installer';

        return $instance;
    }

    /**
     * Gets the 'config.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Config\ConfigManager A Drupal\Core\Config\ConfigManager instance.
     */
    protected function getConfig_ManagerService()
    {
        $this->services['config.manager'] = $instance = new \Drupal\Core\Config\ConfigManager($this->get('entity.manager'), $this->get('config.factory'), $this->get('config.typed'), $this->get('string_translation'), $this->get('config.storage'), $this->get('event_dispatcher'));

        $instance->_serviceId = 'config.manager';

        return $instance;
    }

    /**
     * Gets the 'config.storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Config\CachedStorage A Drupal\Core\Config\CachedStorage instance.
     */
    protected function getConfig_StorageService()
    {
        $this->services['config.storage'] = $instance = new \Drupal\Core\Config\CachedStorage(new \Drupal\Core\Config\DatabaseStorage($this->get('database'), 'config'), $this->get('cache.config'));

        $instance->_serviceId = 'config.storage';

        return $instance;
    }

    /**
     * Gets the 'config.storage.schema' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Config\ExtensionInstallStorage A Drupal\Core\Config\ExtensionInstallStorage instance.
     */
    protected function getConfig_Storage_SchemaService()
    {
        $this->services['config.storage.schema'] = $instance = new \Drupal\Core\Config\ExtensionInstallStorage($this->get('config.storage'), 'config/schema');

        $instance->_serviceId = 'config.storage.schema';

        return $instance;
    }

    /**
     * Gets the 'config.storage.snapshot' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Config\DatabaseStorage A Drupal\Core\Config\DatabaseStorage instance.
     */
    protected function getConfig_Storage_SnapshotService()
    {
        $this->services['config.storage.snapshot'] = $instance = new \Drupal\Core\Config\DatabaseStorage($this->get('database'), 'config_snapshot');

        $instance->_serviceId = 'config.storage.snapshot';

        return $instance;
    }

    /**
     * Gets the 'config.storage.staging' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Config\FileStorage A Drupal\Core\Config\FileStorage instance.
     */
    protected function getConfig_Storage_StagingService()
    {
        $this->services['config.storage.staging'] = $instance = \Drupal\Core\Config\FileStorageFactory::getStaging();

        $instance->_serviceId = 'config.storage.staging';

        return $instance;
    }

    /**
     * Gets the 'config.typed' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Config\TypedConfigManager A Drupal\Core\Config\TypedConfigManager instance.
     */
    protected function getConfig_TypedService()
    {
        $this->services['config.typed'] = $instance = new \Drupal\Core\Config\TypedConfigManager($this->get('config.storage'), $this->get('config.storage.schema'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'config.typed';

        return $instance;
    }

    /**
     * Gets the 'config_import_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\ConfigImportSubscriber A Drupal\Core\EventSubscriber\ConfigImportSubscriber instance.
     */
    protected function getConfigImportSubscriberService()
    {
        $this->services['config_import_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\ConfigImportSubscriber($this->get('theme_handler'));

        $instance->_serviceId = 'config_import_subscriber';

        return $instance;
    }

    /**
     * Gets the 'config_snapshot_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\ConfigSnapshotSubscriber A Drupal\Core\EventSubscriber\ConfigSnapshotSubscriber instance.
     */
    protected function getConfigSnapshotSubscriberService()
    {
        $this->services['config_snapshot_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\ConfigSnapshotSubscriber($this->get('config.manager'), $this->get('config.storage'), $this->get('config.storage.snapshot'));

        $instance->_serviceId = 'config_snapshot_subscriber';

        return $instance;
    }

    /**
     * Gets the 'contact.mail_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\contact\MailHandler A Drupal\contact\MailHandler instance.
     */
    protected function getContact_MailHandlerService()
    {
        $this->services['contact.mail_handler'] = $instance = new \Drupal\contact\MailHandler($this->get('plugin.manager.mail'), $this->get('language_manager'), $this->get('logger.channel.contact'), $this->get('string_translation'), $this->get('entity.manager'));

        $instance->_serviceId = 'contact.mail_handler';

        return $instance;
    }

    /**
     * Gets the 'container.namespaces' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \ArrayObject A ArrayObject instance.
     */
    protected function getContainer_NamespacesService()
    {
        $this->services['container.namespaces'] = $instance = new \ArrayObject(array('Drupal\\basic_auth' => 'core/modules/basic_auth/src', 'Drupal\\block' => 'core/modules/block/src', 'Drupal\\block_content' => 'core/modules/block_content/src', 'Drupal\\breakpoint' => 'core/modules/breakpoint/src', 'Drupal\\ckeditor' => 'core/modules/ckeditor/src', 'Drupal\\color' => 'core/modules/color/src', 'Drupal\\comment' => 'core/modules/comment/src', 'Drupal\\config' => 'core/modules/config/src', 'Drupal\\contact' => 'core/modules/contact/src', 'Drupal\\contextual' => 'core/modules/contextual/src', 'Drupal\\datetime' => 'core/modules/datetime/src', 'Drupal\\dblog' => 'core/modules/dblog/src', 'Drupal\\editor' => 'core/modules/editor/src', 'Drupal\\entity_reference' => 'core/modules/entity_reference/src', 'Drupal\\field' => 'core/modules/field/src', 'Drupal\\field_ui' => 'core/modules/field_ui/src', 'Drupal\\file' => 'core/modules/file/src', 'Drupal\\filter' => 'core/modules/filter/src', 'Drupal\\hal' => 'core/modules/hal/src', 'Drupal\\help' => 'core/modules/help/src', 'Drupal\\history' => 'core/modules/history/src', 'Drupal\\image' => 'core/modules/image/src', 'Drupal\\link' => 'core/modules/link/src', 'Drupal\\menu_ui' => 'core/modules/menu_ui/src', 'Drupal\\node' => 'core/modules/node/src', 'Drupal\\options' => 'core/modules/options/src', 'Drupal\\page_cache' => 'core/modules/page_cache/src', 'Drupal\\path' => 'core/modules/path/src', 'Drupal\\quickedit' => 'core/modules/quickedit/src', 'Drupal\\rdf' => 'core/modules/rdf/src', 'Drupal\\rest' => 'core/modules/rest/src', 'Drupal\\search' => 'core/modules/search/src', 'Drupal\\serialization' => 'core/modules/serialization/src', 'Drupal\\shortcut' => 'core/modules/shortcut/src', 'Drupal\\system' => 'core/modules/system/src', 'Drupal\\taxonomy' => 'core/modules/taxonomy/src', 'Drupal\\text' => 'core/modules/text/src', 'Drupal\\toolbar' => 'core/modules/toolbar/src', 'Drupal\\tour' => 'core/modules/tour/src', 'Drupal\\user' => 'core/modules/user/src', 'Drupal\\views_ui' => 'core/modules/views_ui/src', 'Drupal\\menu_link_content' => 'core/modules/menu_link_content/src', 'Drupal\\views' => 'core/modules/views/src', 'Drupal\\standard' => 'core/profiles/standard/src', 'Drupal\\Core\\Block' => 'core/lib/Drupal/Core/Block', 'Drupal\\Core\\Config' => 'core/lib/Drupal/Core/Config', 'Drupal\\Core\\Datetime' => 'core/lib/Drupal/Core/Datetime', 'Drupal\\Core\\Entity' => 'core/lib/Drupal/Core/Entity', 'Drupal\\Core\\Field' => 'core/lib/Drupal/Core/Field', 'Drupal\\Core\\Mail' => 'core/lib/Drupal/Core/Mail', 'Drupal\\Core\\Render' => 'core/lib/Drupal/Core/Render', 'Drupal\\Core\\TypedData' => 'core/lib/Drupal/Core/TypedData', 'Drupal\\Core\\Validation' => 'core/lib/Drupal/Core/Validation', 'Drupal\\Component\\Annotation' => 'core/lib/Drupal/Component/Annotation'));

        $instance->_serviceId = 'container.namespaces';

        return $instance;
    }

    /**
     * Gets the 'content_type_header_matcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Routing\ContentTypeHeaderMatcher A Drupal\Core\Routing\ContentTypeHeaderMatcher instance.
     */
    protected function getContentTypeHeaderMatcherService()
    {
        $this->services['content_type_header_matcher'] = $instance = new \Drupal\Core\Routing\ContentTypeHeaderMatcher();

        $instance->_serviceId = 'content_type_header_matcher';

        return $instance;
    }

    /**
     * Gets the 'content_uninstall_validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Drupal\Core\Entity\ContentUninstallValidator A Drupal\Core\Entity\ContentUninstallValidator instance.
     */
    public function getContentUninstallValidatorService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['content_uninstall_validator'] = new Drupal_Core_Entity_ContentUninstallValidator_Proxy($this, 'content_uninstall_validator');
        }
        $instance = new \Drupal\Core\Entity\ContentUninstallValidator($this->get('entity.manager'), $this->get('string_translation'));

        $instance->_serviceId = 'content_uninstall_validator';

        return $instance;
    }

    /**
     * Gets the 'context.handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Plugin\Context\ContextHandler A Drupal\Core\Plugin\Context\ContextHandler instance.
     */
    protected function getContext_HandlerService()
    {
        $this->services['context.handler'] = $instance = new \Drupal\Core\Plugin\Context\ContextHandler($this->get('typed_data_manager'));

        $instance->_serviceId = 'context.handler';

        return $instance;
    }

    /**
     * Gets the 'controller.entity_form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Entity\HtmlEntityFormController A Drupal\Core\Entity\HtmlEntityFormController instance.
     */
    protected function getController_EntityFormService()
    {
        $this->services['controller.entity_form'] = $instance = new \Drupal\Core\Entity\HtmlEntityFormController($this->get('controller_resolver'), $this->get('form_builder'), $this->get('entity.manager'));

        $instance->_serviceId = 'controller.entity_form';

        return $instance;
    }

    /**
     * Gets the 'controller.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Controller\HtmlFormController A Drupal\Core\Controller\HtmlFormController instance.
     */
    protected function getController_FormService()
    {
        $this->services['controller.form'] = $instance = new \Drupal\Core\Controller\HtmlFormController($this->get('controller_resolver'), $this->get('form_builder'), $this->get('class_resolver'));

        $instance->_serviceId = 'controller.form';

        return $instance;
    }

    /**
     * Gets the 'controller_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Controller\ControllerResolver A Drupal\Core\Controller\ControllerResolver instance.
     */
    protected function getControllerResolverService()
    {
        $this->services['controller_resolver'] = $instance = new \Drupal\Core\Controller\ControllerResolver($this->get('class_resolver'));

        $instance->_serviceId = 'controller_resolver';

        return $instance;
    }

    /**
     * Gets the 'country_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Locale\CountryManager A Drupal\Core\Locale\CountryManager instance.
     */
    protected function getCountryManagerService()
    {
        $this->services['country_manager'] = $instance = new \Drupal\Core\Locale\CountryManager($this->get('module_handler'));

        $instance->_serviceId = 'country_manager';

        return $instance;
    }

    /**
     * Gets the 'cron' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Drupal\Core\Cron A Drupal\Core\Cron instance.
     */
    public function getCronService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['cron'] = new Drupal_Core_Cron_Proxy($this, 'cron');
        }
        $instance = new \Drupal\Core\Cron($this->get('module_handler'), $this->get('lock'), $this->get('queue'), $this->get('state'), $this->get('account_switcher'), $this->get('logger.channel.cron'), $this->get('plugin.manager.queue_worker'));

        $instance->_serviceId = 'cron';

        return $instance;
    }

    /**
     * Gets the 'csrf_token' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Access\CsrfTokenGenerator A Drupal\Core\Access\CsrfTokenGenerator instance.
     */
    protected function getCsrfTokenService()
    {
        $this->services['csrf_token'] = $instance = new \Drupal\Core\Access\CsrfTokenGenerator($this->get('private_key'), $this->get('session_manager.metadata_bag'));

        $instance->_serviceId = 'csrf_token';

        return $instance;
    }

    /**
     * Gets the 'current_route_match' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Routing\CurrentRouteMatch A Drupal\Core\Routing\CurrentRouteMatch instance.
     */
    protected function getCurrentRouteMatchService()
    {
        $this->services['current_route_match'] = $instance = new \Drupal\Core\Routing\CurrentRouteMatch($this->get('request_stack'));

        $instance->_serviceId = 'current_route_match';

        return $instance;
    }

    /**
     * Gets the 'current_user' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Session\AccountProxy A Drupal\Core\Session\AccountProxy instance.
     */
    protected function getCurrentUserService()
    {
        $this->services['current_user'] = $instance = new \Drupal\Core\Session\AccountProxy();

        $instance->_serviceId = 'current_user';

        return $instance;
    }

    /**
     * Gets the 'database' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Database\Connection A Drupal\Core\Database\Connection instance.
     */
    protected function getDatabaseService()
    {
        $this->services['database'] = $instance = \Drupal\Core\Database\Database::getConnection('default');

        $instance->_serviceId = 'database';

        return $instance;
    }

    /**
     * Gets the 'database.replica' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Database\Connection A Drupal\Core\Database\Connection instance.
     */
    protected function getDatabase_ReplicaService()
    {
        $this->services['database.replica'] = $instance = \Drupal\Core\Database\Database::getConnection('replica');

        $instance->_serviceId = 'database.replica';

        return $instance;
    }

    /**
     * Gets the 'date.formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Datetime\DateFormatter A Drupal\Core\Datetime\DateFormatter instance.
     */
    protected function getDate_FormatterService()
    {
        $this->services['date.formatter'] = $instance = new \Drupal\Core\Datetime\DateFormatter($this->get('entity.manager'), $this->get('language_manager'), $this->get('string_translation'), $this->get('config.factory'), $this->get('request_stack'));

        $instance->_serviceId = 'date.formatter';

        return $instance;
    }

    /**
     * Gets the 'diff.formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Diff\DiffFormatter A Drupal\Core\Diff\DiffFormatter instance.
     */
    protected function getDiff_FormatterService()
    {
        $this->services['diff.formatter'] = $instance = new \Drupal\Core\Diff\DiffFormatter($this->get('config.factory'));

        $instance->_serviceId = 'diff.formatter';

        return $instance;
    }

    /**
     * Gets the 'element.editor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\editor\Element A Drupal\editor\Element instance.
     */
    protected function getElement_EditorService()
    {
        $this->services['element.editor'] = $instance = new \Drupal\editor\Element($this->get('plugin.manager.editor'));

        $instance->_serviceId = 'element.editor';

        return $instance;
    }

    /**
     * Gets the 'email.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Egulias\EmailValidator\EmailValidator A Egulias\EmailValidator\EmailValidator instance.
     */
    protected function getEmail_ValidatorService()
    {
        $this->services['email.validator'] = $instance = new \Egulias\EmailValidator\EmailValidator();

        $instance->_serviceId = 'email.validator';

        return $instance;
    }

    /**
     * Gets the 'entity.autocomplete_matcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Entity\EntityAutocompleteMatcher A Drupal\Core\Entity\EntityAutocompleteMatcher instance.
     */
    protected function getEntity_AutocompleteMatcherService()
    {
        $this->services['entity.autocomplete_matcher'] = $instance = new \Drupal\Core\Entity\EntityAutocompleteMatcher($this->get('plugin.manager.entity_reference_selection'));

        $instance->_serviceId = 'entity.autocomplete_matcher';

        return $instance;
    }

    /**
     * Gets the 'entity.bundle_config_import_validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Entity\Event\BundleConfigImportValidate A Drupal\Core\Entity\Event\BundleConfigImportValidate instance.
     */
    protected function getEntity_BundleConfigImportValidatorService()
    {
        $this->services['entity.bundle_config_import_validator'] = $instance = new \Drupal\Core\Entity\Event\BundleConfigImportValidate($this->get('config.manager'), $this->get('entity.manager'));

        $instance->_serviceId = 'entity.bundle_config_import_validator';

        return $instance;
    }

    /**
     * Gets the 'entity.definition_update_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Entity\EntityDefinitionUpdateManager A Drupal\Core\Entity\EntityDefinitionUpdateManager instance.
     */
    protected function getEntity_DefinitionUpdateManagerService()
    {
        $this->services['entity.definition_update_manager'] = $instance = new \Drupal\Core\Entity\EntityDefinitionUpdateManager($this->get('entity.manager'));

        $instance->_serviceId = 'entity.definition_update_manager';

        return $instance;
    }

    /**
     * Gets the 'entity.form_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Entity\EntityFormBuilder A Drupal\Core\Entity\EntityFormBuilder instance.
     */
    protected function getEntity_FormBuilderService()
    {
        $this->services['entity.form_builder'] = $instance = new \Drupal\Core\Entity\EntityFormBuilder($this->get('entity.manager'), $this->get('form_builder'));

        $instance->_serviceId = 'entity.form_builder';

        return $instance;
    }

    /**
     * Gets the 'entity.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Entity\EntityManager A Drupal\Core\Entity\EntityManager instance.
     */
    protected function getEntity_ManagerService()
    {
        $this->services['entity.manager'] = $instance = new \Drupal\Core\Entity\EntityManager($this->get('container.namespaces'), $this->get('module_handler'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('string_translation'), $this->get('class_resolver'), $this->get('typed_data_manager'), $this->get('keyvalue'), $this->get('event_dispatcher'));

        $instance->setContainer($this);
        $instance->_serviceId = 'entity.manager';

        return $instance;
    }

    /**
     * Gets the 'entity.query' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Entity\Query\QueryFactory A Drupal\Core\Entity\Query\QueryFactory instance.
     */
    protected function getEntity_QueryService()
    {
        $this->services['entity.query'] = $instance = new \Drupal\Core\Entity\Query\QueryFactory($this->get('entity.manager'));

        $instance->setContainer($this);
        $instance->_serviceId = 'entity.query';

        return $instance;
    }

    /**
     * Gets the 'entity.query.config' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Config\Entity\Query\QueryFactory A Drupal\Core\Config\Entity\Query\QueryFactory instance.
     */
    protected function getEntity_Query_ConfigService()
    {
        $this->services['entity.query.config'] = $instance = new \Drupal\Core\Config\Entity\Query\QueryFactory($this->get('config.factory'), $this->get('keyvalue'), $this->get('config.manager'));

        $instance->_serviceId = 'entity.query.config';

        return $instance;
    }

    /**
     * Gets the 'entity.query.keyvalue' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Entity\KeyValueStore\Query\QueryFactory A Drupal\Core\Entity\KeyValueStore\Query\QueryFactory instance.
     */
    protected function getEntity_Query_KeyvalueService()
    {
        $this->services['entity.query.keyvalue'] = $instance = new \Drupal\Core\Entity\KeyValueStore\Query\QueryFactory($this->get('keyvalue'));

        $instance->_serviceId = 'entity.query.keyvalue';

        return $instance;
    }

    /**
     * Gets the 'entity.query.null' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Entity\Query\Null\QueryFactory A Drupal\Core\Entity\Query\Null\QueryFactory instance.
     */
    protected function getEntity_Query_NullService()
    {
        $this->services['entity.query.null'] = $instance = new \Drupal\Core\Entity\Query\Null\QueryFactory();

        $instance->_serviceId = 'entity.query.null';

        return $instance;
    }

    /**
     * Gets the 'entity.query.sql' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Entity\Query\Sql\QueryFactory A Drupal\Core\Entity\Query\Sql\QueryFactory instance.
     */
    protected function getEntity_Query_SqlService()
    {
        $this->services['entity.query.sql'] = $instance = new \Drupal\Core\Entity\Query\Sql\QueryFactory($this->get('database'));

        $instance->_serviceId = 'entity.query.sql';

        return $instance;
    }

    /**
     * Gets the 'entity_route_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\EntityRouteProviderSubscriber A Drupal\Core\EventSubscriber\EntityRouteProviderSubscriber instance.
     */
    protected function getEntityRouteSubscriberService()
    {
        $this->services['entity_route_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\EntityRouteProviderSubscriber($this->get('entity.manager'));

        $instance->_serviceId = 'entity_route_subscriber';

        return $instance;
    }

    /**
     * Gets the 'event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Component\EventDispatcher\ContainerAwareEventDispatcher A Drupal\Component\EventDispatcher\ContainerAwareEventDispatcher instance.
     */
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Drupal\Component\EventDispatcher\ContainerAwareEventDispatcher($this, array('routing.route_finished' => array(200 => array(0 => array('service' => array(0 => 'cache_router_rebuild_subscriber', 1 => 'onRouterFinished'))), 100 => array(0 => array('service' => array(0 => 'menu.rebuild_subscriber', 1 => 'onRouterRebuild'))), 0 => array(0 => array('service' => array(0 => 'router.route_provider', 1 => 'reset')), 1 => array('service' => array(0 => 'router.route_preloader', 1 => 'onFinishedRoutes')), 2 => array('service' => array(0 => 'router.path_roots_subscriber', 1 => 'onRouteFinished')), 3 => array('service' => array(0 => 'views.route_subscriber', 1 => 'routeRebuildFinished')))), 'config.save' => array(255 => array(0 => array('service' => array(0 => 'config.factory', 1 => 'onConfigSave'))), 128 => array(0 => array('service' => array(0 => 'entity.query.config', 1 => 'onConfigSave'))), 0 => array(0 => array('service' => array(0 => 'system.config_cache_tag', 1 => 'onSave')))), 'config.delete' => array(255 => array(0 => array('service' => array(0 => 'config.factory', 1 => 'onConfigDelete'))), 128 => array(0 => array('service' => array(0 => 'entity.query.config', 1 => 'onConfigDelete')))), 'config.importer.missing_content' => array(-1024 => array(0 => array('service' => array(0 => 'config.importer_subscriber', 1 => 'onMissingContent')))), 'routing.route_dynamic' => array(0 => array(0 => array('service' => array(0 => 'entity_route_subscriber', 1 => 'onDynamicRouteEvent')))), 'config.importer.validate' => array(512 => array(0 => array('service' => array(0 => 'system.config_subscriber', 1 => 'onConfigImporterValidateNotEmpty'))), 256 => array(0 => array('service' => array(0 => 'system.config_subscriber', 1 => 'onConfigImporterValidateSiteUUID'))), 20 => array(0 => array('service' => array(0 => 'entity.bundle_config_import_validator', 1 => 'onConfigImporterValidate')), 1 => array('service' => array(0 => 'config_import_subscriber', 1 => 'onConfigImporterValidate')), 2 => array('service' => array(0 => 'config.config_subscriber', 1 => 'onConfigImporterValidate')))), 'routing.route_alter' => array(5000 => array(0 => array('service' => array(0 => 'route_http_method_subscriber', 1 => 'onRouteBuilding'))), 0 => array(0 => array('service' => array(0 => 'route_subscriber.module', 1 => 'onAlterRoutes')), 1 => array('service' => array(0 => 'route_special_attributes_subscriber', 1 => 'onAlterRoutes')), 2 => array('service' => array(0 => 'node.route_subscriber', 1 => 'onAlterRoutes')), 3 => array('service' => array(0 => 'node.admin_path.route_subscriber', 1 => 'onAlterRoutes')), 4 => array('service' => array(0 => 'rest.resource_routes', 1 => 'onAlterRoutes'))), -100 => array(0 => array('service' => array(0 => 'field_ui.subscriber', 1 => 'onAlterRoutes'))), -150 => array(0 => array('service' => array(0 => 'route_subscriber.entity', 1 => 'onRoutingRouteAlterSetType'))), -175 => array(0 => array('service' => array(0 => 'views.route_subscriber', 1 => 'onAlterRoutes'))), -200 => array(0 => array('service' => array(0 => 'system.admin_path.route_subscriber', 1 => 'onAlterRoutes'))), -220 => array(0 => array('service' => array(0 => 'paramconverter_subscriber', 1 => 'onRoutingRouteAlterSetParameterConverters'))), -300 => array(0 => array('service' => array(0 => 'route_filter_subscriber', 1 => 'onRouteAlter')), 1 => array('service' => array(0 => 'route_enhancer_subscriber', 1 => 'onRouteAlter'))), -1024 => array(0 => array('service' => array(0 => 'router.route_preloader', 1 => 'onAlterRoutes')), 1 => array('service' => array(0 => 'router.path_roots_subscriber', 1 => 'onRouteAlter')))), 'kernel.request' => array(300 => array(0 => array('service' => array(0 => 'authentication_subscriber', 1 => 'onKernelRequestAuthenticate'))), 100 => array(0 => array('service' => array(0 => 'redirect_response_subscriber', 1 => 'sanitizeDestination'))), 50 => array(0 => array('service' => array(0 => 'ajax_response.subscriber', 1 => 'onRequest'))), 32 => array(0 => array('service' => array(0 => 'router_listener', 1 => 'onKernelRequest'))), 31 => array(0 => array('service' => array(0 => 'authentication_subscriber', 1 => 'onKernelRequestFilterProvider')), 1 => array('service' => array(0 => 'user_maintenance_mode_subscriber', 1 => 'onKernelRequestMaintenance'))), 30 => array(0 => array('service' => array(0 => 'maintenance_mode_subscriber', 1 => 'onKernelRequestMaintenance'))), 29 => array(0 => array('service' => array(0 => 'route_content_controller_subscriber', 1 => 'onRequestDeriveFormWrapper'))), 0 => array(0 => array('service' => array(0 => 'router.route_preloader', 1 => 'onRequest')), 1 => array('service' => array(0 => 'replica_database_ignore__subscriber', 1 => 'checkReplicaServer')))), 'kernel.response' => array(128 => array(0 => array('service' => array(0 => 'exception.enforced_form_response', 1 => 'onKernelResponse'))), 10 => array(0 => array('service' => array(0 => 'route_access_response_subscriber', 1 => 'onRespond')), 1 => array('service' => array(0 => 'client_error_response_subscriber', 1 => 'onRespond'))), 5 => array(0 => array('service' => array(0 => 'anonymous_user_response_subscriber', 1 => 'onRespond'))), 0 => array(0 => array('service' => array(0 => 'html_response.subscriber', 1 => 'onRespond')), 1 => array('service' => array(0 => 'finish_response_subscriber', 1 => 'onRespond')), 2 => array('service' => array(0 => 'response_generator_subscriber', 1 => 'onRespond')), 3 => array('service' => array(0 => 'redirect_response_subscriber', 1 => 'checkRedirectUrl'))), -100 => array(0 => array('service' => array(0 => 'ajax_response.subscriber', 1 => 'onResponse'))), -512 => array(0 => array('service' => array(0 => 'response_filter.active_link', 1 => 'onResponse')))), 'kernel.exception' => array(200 => array(0 => array('service' => array(0 => 'exception.fast_404_html', 1 => 'onException'))), 128 => array(0 => array('service' => array(0 => 'exception.enforced_form_response', 1 => 'onKernelException'))), 75 => array(0 => array('service' => array(0 => 'route_enhancer.param_conversion', 1 => 'onException')), 1 => array('service' => array(0 => 'authentication_subscriber', 1 => 'onExceptionSendChallenge')), 2 => array('service' => array(0 => 'user_access_denied_subscriber', 1 => 'onException'))), 51 => array(0 => array('service' => array(0 => 'form_ajax_subscriber', 1 => 'onException'))), 50 => array(0 => array('service' => array(0 => 'exception.logger', 1 => 'onException'))), 3 => array(0 => array('service' => array(0 => 'exception.test_site', 1 => 'onException'))), 0 => array(0 => array('service' => array(0 => 'maintenance_mode_subscriber', 1 => 'onKernelRequestMaintenance'))), -50 => array(0 => array('service' => array(0 => 'exception.custom_page_html', 1 => 'onException'))), -75 => array(0 => array('service' => array(0 => 'exception.default_json', 1 => 'onException')), 1 => array('service' => array(0 => 'exception.custom_page_json', 1 => 'onException'))), -128 => array(0 => array('service' => array(0 => 'exception.default_html', 1 => 'onException'))), -256 => array(0 => array('service' => array(0 => 'exception.default', 1 => 'onException')))), 'kernel.view' => array(1 => array(0 => array('service' => array(0 => 'form_ajax_subscriber', 1 => 'onView'))), 0 => array(0 => array('service' => array(0 => 'main_content_view_subscriber', 1 => 'onViewRenderArray'))), -10 => array(0 => array('service' => array(0 => 'accept_negotiation_406', 1 => 'onViewDetect406')))), 'kernel.finish_request' => array(0 => array(0 => array('service' => array(0 => 'router_listener', 1 => 'onKernelFinishRequest')))), 'kernel.controller' => array(200 => array(0 => array('service' => array(0 => 'path_subscriber', 1 => 'onKernelController')))), 'kernel.terminate' => array(300 => array(0 => array('service' => array(0 => 'user_last_access_subscriber', 1 => 'onKernelTerminate'))), 200 => array(0 => array('service' => array(0 => 'path_subscriber', 1 => 'onKernelTerminate'))), 100 => array(0 => array('service' => array(0 => 'request_close_subscriber', 1 => 'onTerminate')), 1 => array('service' => array(0 => 'kernel_destruct_subscriber', 1 => 'onKernelTerminate')), 2 => array('service' => array(0 => 'system.automatic_cron', 1 => 'onTerminate')))), 'config.importer.import' => array(40 => array(0 => array('service' => array(0 => 'config_snapshot_subscriber', 1 => 'onConfigImporterImport')))), 'render.page_display_variant.select' => array(0 => array(0 => array('service' => array(0 => 'block.page_display_variant_subscriber', 1 => 'onSelectPageDisplayVariant')))), 'block.active_context' => array(0 => array(0 => array('service' => array(0 => 'block.current_user_context', 1 => 'onBlockActiveContext')), 1 => array('service' => array(0 => 'block.current_language_context', 1 => 'onBlockActiveContext')), 2 => array('service' => array(0 => 'block.node_route_context', 1 => 'onBlockActiveContext')))), 'block.administrative_context' => array(0 => array(0 => array('service' => array(0 => 'block.current_user_context', 1 => 'onBlockAdministrativeContext')), 1 => array('service' => array(0 => 'block.current_language_context', 1 => 'onBlockAdministrativeContext')), 2 => array('service' => array(0 => 'block.node_route_context', 1 => 'onBlockAdministrativeContext')))), 'entity_type.definition.create' => array(100 => array(0 => array('service' => array(0 => 'views.entity_schema_subscriber', 1 => 'onEntityTypeEvent')))), 'entity_type.definition.update' => array(100 => array(0 => array('service' => array(0 => 'views.entity_schema_subscriber', 1 => 'onEntityTypeEvent')))), 'entity_type.definition.delete' => array(100 => array(0 => array('service' => array(0 => 'views.entity_schema_subscriber', 1 => 'onEntityTypeEvent'))))));

        $instance->_serviceId = 'event_dispatcher';

        return $instance;
    }

    /**
     * Gets the 'exception.custom_page_html' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\CustomPageExceptionHtmlSubscriber A Drupal\Core\EventSubscriber\CustomPageExceptionHtmlSubscriber instance.
     */
    protected function getException_CustomPageHtmlService()
    {
        $this->services['exception.custom_page_html'] = $instance = new \Drupal\Core\EventSubscriber\CustomPageExceptionHtmlSubscriber($this->get('config.factory'), $this->get('path.alias_manager'), $this->get('http_kernel'), $this->get('logger.channel.php'), $this->get('redirect.destination'));

        $instance->_serviceId = 'exception.custom_page_html';

        return $instance;
    }

    /**
     * Gets the 'exception.custom_page_json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\ExceptionJsonSubscriber A Drupal\Core\EventSubscriber\ExceptionJsonSubscriber instance.
     */
    protected function getException_CustomPageJsonService()
    {
        $this->services['exception.custom_page_json'] = $instance = new \Drupal\Core\EventSubscriber\ExceptionJsonSubscriber($this->get('config.factory'), $this->get('path.alias_manager'), $this->get('http_kernel'));

        $instance->_serviceId = 'exception.custom_page_json';

        return $instance;
    }

    /**
     * Gets the 'exception.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\DefaultExceptionSubscriber A Drupal\Core\EventSubscriber\DefaultExceptionSubscriber instance.
     */
    protected function getException_DefaultService()
    {
        $this->services['exception.default'] = $instance = new \Drupal\Core\EventSubscriber\DefaultExceptionSubscriber($this->get('config.factory'), $this->get('bare_html_page_renderer'));

        $instance->_serviceId = 'exception.default';

        return $instance;
    }

    /**
     * Gets the 'exception.default_html' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\DefaultExceptionHtmlSubscriber A Drupal\Core\EventSubscriber\DefaultExceptionHtmlSubscriber instance.
     */
    protected function getException_DefaultHtmlService()
    {
        $this->services['exception.default_html'] = $instance = new \Drupal\Core\EventSubscriber\DefaultExceptionHtmlSubscriber($this->get('http_kernel'), $this->get('logger.channel.php'), $this->get('redirect.destination'));

        $instance->_serviceId = 'exception.default_html';

        return $instance;
    }

    /**
     * Gets the 'exception.default_json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\hal\EventSubscriber\ExceptionHalJsonSubscriber A Drupal\hal\EventSubscriber\ExceptionHalJsonSubscriber instance.
     */
    protected function getException_DefaultJsonService()
    {
        $this->services['exception.default_json'] = $instance = new \Drupal\hal\EventSubscriber\ExceptionHalJsonSubscriber();

        $instance->_serviceId = 'exception.default_json';

        return $instance;
    }

    /**
     * Gets the 'exception.enforced_form_response' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\EnforcedFormResponseSubscriber A Drupal\Core\EventSubscriber\EnforcedFormResponseSubscriber instance.
     */
    protected function getException_EnforcedFormResponseService()
    {
        $this->services['exception.enforced_form_response'] = $instance = new \Drupal\Core\EventSubscriber\EnforcedFormResponseSubscriber();

        $instance->_serviceId = 'exception.enforced_form_response';

        return $instance;
    }

    /**
     * Gets the 'exception.fast_404_html' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\Fast404ExceptionHtmlSubscriber A Drupal\Core\EventSubscriber\Fast404ExceptionHtmlSubscriber instance.
     */
    protected function getException_Fast404HtmlService()
    {
        $this->services['exception.fast_404_html'] = $instance = new \Drupal\Core\EventSubscriber\Fast404ExceptionHtmlSubscriber($this->get('config.factory'), $this->get('http_kernel'));

        $instance->_serviceId = 'exception.fast_404_html';

        return $instance;
    }

    /**
     * Gets the 'exception.logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\ExceptionLoggingSubscriber A Drupal\Core\EventSubscriber\ExceptionLoggingSubscriber instance.
     */
    protected function getException_LoggerService()
    {
        $this->services['exception.logger'] = $instance = new \Drupal\Core\EventSubscriber\ExceptionLoggingSubscriber($this->get('logger.factory'));

        $instance->_serviceId = 'exception.logger';

        return $instance;
    }

    /**
     * Gets the 'exception.test_site' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\ExceptionTestSiteSubscriber A Drupal\Core\EventSubscriber\ExceptionTestSiteSubscriber instance.
     */
    protected function getException_TestSiteService()
    {
        $this->services['exception.test_site'] = $instance = new \Drupal\Core\EventSubscriber\ExceptionTestSiteSubscriber();

        $instance->_serviceId = 'exception.test_site';

        return $instance;
    }

    /**
     * Gets the 'feed.bridge.reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Component\Bridge\ZfExtensionManagerSfContainer A Drupal\Component\Bridge\ZfExtensionManagerSfContainer instance.
     */
    protected function getFeed_Bridge_ReaderService()
    {
        $this->services['feed.bridge.reader'] = $instance = new \Drupal\Component\Bridge\ZfExtensionManagerSfContainer('feed.reader.');

        $instance->setContainer($this);
        $instance->_serviceId = 'feed.bridge.reader';

        return $instance;
    }

    /**
     * Gets the 'feed.bridge.writer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Component\Bridge\ZfExtensionManagerSfContainer A Drupal\Component\Bridge\ZfExtensionManagerSfContainer instance.
     */
    protected function getFeed_Bridge_WriterService()
    {
        $this->services['feed.bridge.writer'] = $instance = new \Drupal\Component\Bridge\ZfExtensionManagerSfContainer('feed.writer.');

        $instance->setContainer($this);
        $instance->_serviceId = 'feed.bridge.writer';

        return $instance;
    }

    /**
     * Gets the 'feed.reader.atomentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Zend\Feed\Reader\Extension\Atom\Entry A Zend\Feed\Reader\Extension\Atom\Entry instance.
     */
    protected function getFeed_Reader_AtomentryService()
    {
        $this->services['feed.reader.atomentry'] = $instance = new \Zend\Feed\Reader\Extension\Atom\Entry();

        $instance->_serviceId = 'feed.reader.atomentry';

        return $instance;
    }

    /**
     * Gets the 'feed.reader.atomfeed' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Zend\Feed\Reader\Extension\Atom\Feed A Zend\Feed\Reader\Extension\Atom\Feed instance.
     */
    protected function getFeed_Reader_AtomfeedService()
    {
        $this->services['feed.reader.atomfeed'] = $instance = new \Zend\Feed\Reader\Extension\Atom\Feed();

        $instance->_serviceId = 'feed.reader.atomfeed';

        return $instance;
    }

    /**
     * Gets the 'feed.reader.contententry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Zend\Feed\Reader\Extension\Content\Entry A Zend\Feed\Reader\Extension\Content\Entry instance.
     */
    protected function getFeed_Reader_ContententryService()
    {
        $this->services['feed.reader.contententry'] = $instance = new \Zend\Feed\Reader\Extension\Content\Entry();

        $instance->_serviceId = 'feed.reader.contententry';

        return $instance;
    }

    /**
     * Gets the 'feed.reader.dublincoreentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Zend\Feed\Reader\Extension\DublinCore\Entry A Zend\Feed\Reader\Extension\DublinCore\Entry instance.
     */
    protected function getFeed_Reader_DublincoreentryService()
    {
        $this->services['feed.reader.dublincoreentry'] = $instance = new \Zend\Feed\Reader\Extension\DublinCore\Entry();

        $instance->_serviceId = 'feed.reader.dublincoreentry';

        return $instance;
    }

    /**
     * Gets the 'feed.reader.dublincorefeed' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Zend\Feed\Reader\Extension\DublinCore\Feed A Zend\Feed\Reader\Extension\DublinCore\Feed instance.
     */
    protected function getFeed_Reader_DublincorefeedService()
    {
        $this->services['feed.reader.dublincorefeed'] = $instance = new \Zend\Feed\Reader\Extension\DublinCore\Feed();

        $instance->_serviceId = 'feed.reader.dublincorefeed';

        return $instance;
    }

    /**
     * Gets the 'feed.reader.podcastentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Zend\Feed\Reader\Extension\Podcast\Entry A Zend\Feed\Reader\Extension\Podcast\Entry instance.
     */
    protected function getFeed_Reader_PodcastentryService()
    {
        $this->services['feed.reader.podcastentry'] = $instance = new \Zend\Feed\Reader\Extension\Podcast\Entry();

        $instance->_serviceId = 'feed.reader.podcastentry';

        return $instance;
    }

    /**
     * Gets the 'feed.reader.podcastfeed' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Zend\Feed\Reader\Extension\Podcast\Feed A Zend\Feed\Reader\Extension\Podcast\Feed instance.
     */
    protected function getFeed_Reader_PodcastfeedService()
    {
        $this->services['feed.reader.podcastfeed'] = $instance = new \Zend\Feed\Reader\Extension\Podcast\Feed();

        $instance->_serviceId = 'feed.reader.podcastfeed';

        return $instance;
    }

    /**
     * Gets the 'feed.reader.slashentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Zend\Feed\Reader\Extension\Slash\Entry A Zend\Feed\Reader\Extension\Slash\Entry instance.
     */
    protected function getFeed_Reader_SlashentryService()
    {
        $this->services['feed.reader.slashentry'] = $instance = new \Zend\Feed\Reader\Extension\Slash\Entry();

        $instance->_serviceId = 'feed.reader.slashentry';

        return $instance;
    }

    /**
     * Gets the 'feed.reader.threadentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Zend\Feed\Reader\Extension\Thread\Entry A Zend\Feed\Reader\Extension\Thread\Entry instance.
     */
    protected function getFeed_Reader_ThreadentryService()
    {
        $this->services['feed.reader.threadentry'] = $instance = new \Zend\Feed\Reader\Extension\Thread\Entry();

        $instance->_serviceId = 'feed.reader.threadentry';

        return $instance;
    }

    /**
     * Gets the 'feed.reader.wellformedwebentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Zend\Feed\Reader\Extension\WellFormedWeb\Entry A Zend\Feed\Reader\Extension\WellFormedWeb\Entry instance.
     */
    protected function getFeed_Reader_WellformedwebentryService()
    {
        $this->services['feed.reader.wellformedwebentry'] = $instance = new \Zend\Feed\Reader\Extension\WellFormedWeb\Entry();

        $instance->_serviceId = 'feed.reader.wellformedwebentry';

        return $instance;
    }

    /**
     * Gets the 'feed.writer.atomrendererfeed' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Zend\Feed\Writer\Extension\Atom\Renderer\Feed A Zend\Feed\Writer\Extension\Atom\Renderer\Feed instance.
     */
    protected function getFeed_Writer_AtomrendererfeedService()
    {
        $this->services['feed.writer.atomrendererfeed'] = $instance = new \Zend\Feed\Writer\Extension\Atom\Renderer\Feed();

        $instance->_serviceId = 'feed.writer.atomrendererfeed';

        return $instance;
    }

    /**
     * Gets the 'feed.writer.contentrendererentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Zend\Feed\Writer\Extension\Content\Renderer\Entry A Zend\Feed\Writer\Extension\Content\Renderer\Entry instance.
     */
    protected function getFeed_Writer_ContentrendererentryService()
    {
        $this->services['feed.writer.contentrendererentry'] = $instance = new \Zend\Feed\Writer\Extension\Content\Renderer\Entry();

        $instance->_serviceId = 'feed.writer.contentrendererentry';

        return $instance;
    }

    /**
     * Gets the 'feed.writer.dublincorerendererentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Zend\Feed\Writer\Extension\DublinCore\Renderer\Entry A Zend\Feed\Writer\Extension\DublinCore\Renderer\Entry instance.
     */
    protected function getFeed_Writer_DublincorerendererentryService()
    {
        $this->services['feed.writer.dublincorerendererentry'] = $instance = new \Zend\Feed\Writer\Extension\DublinCore\Renderer\Entry();

        $instance->_serviceId = 'feed.writer.dublincorerendererentry';

        return $instance;
    }

    /**
     * Gets the 'feed.writer.dublincorerendererfeed' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Zend\Feed\Writer\Extension\DublinCore\Renderer\Feed A Zend\Feed\Writer\Extension\DublinCore\Renderer\Feed instance.
     */
    protected function getFeed_Writer_DublincorerendererfeedService()
    {
        $this->services['feed.writer.dublincorerendererfeed'] = $instance = new \Zend\Feed\Writer\Extension\DublinCore\Renderer\Feed();

        $instance->_serviceId = 'feed.writer.dublincorerendererfeed';

        return $instance;
    }

    /**
     * Gets the 'feed.writer.itunesentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Zend\Feed\Writer\Extension\ITunes\Entry A Zend\Feed\Writer\Extension\ITunes\Entry instance.
     */
    protected function getFeed_Writer_ItunesentryService()
    {
        $this->services['feed.writer.itunesentry'] = $instance = new \Zend\Feed\Writer\Extension\ITunes\Entry();

        $instance->_serviceId = 'feed.writer.itunesentry';

        return $instance;
    }

    /**
     * Gets the 'feed.writer.itunesfeed' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Zend\Feed\Writer\Extension\ITunes\Feed A Zend\Feed\Writer\Extension\ITunes\Feed instance.
     */
    protected function getFeed_Writer_ItunesfeedService()
    {
        $this->services['feed.writer.itunesfeed'] = $instance = new \Zend\Feed\Writer\Extension\ITunes\Feed();

        $instance->_serviceId = 'feed.writer.itunesfeed';

        return $instance;
    }

    /**
     * Gets the 'feed.writer.itunesrendererentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Zend\Feed\Writer\Extension\ITunes\Renderer\Entry A Zend\Feed\Writer\Extension\ITunes\Renderer\Entry instance.
     */
    protected function getFeed_Writer_ItunesrendererentryService()
    {
        $this->services['feed.writer.itunesrendererentry'] = $instance = new \Zend\Feed\Writer\Extension\ITunes\Renderer\Entry();

        $instance->_serviceId = 'feed.writer.itunesrendererentry';

        return $instance;
    }

    /**
     * Gets the 'feed.writer.itunesrendererfeed' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Zend\Feed\Writer\Extension\ITunes\Renderer\Feed A Zend\Feed\Writer\Extension\ITunes\Renderer\Feed instance.
     */
    protected function getFeed_Writer_ItunesrendererfeedService()
    {
        $this->services['feed.writer.itunesrendererfeed'] = $instance = new \Zend\Feed\Writer\Extension\ITunes\Renderer\Feed();

        $instance->_serviceId = 'feed.writer.itunesrendererfeed';

        return $instance;
    }

    /**
     * Gets the 'feed.writer.slashrendererentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Zend\Feed\Writer\Extension\Slash\Renderer\Entry A Zend\Feed\Writer\Extension\Slash\Renderer\Entry instance.
     */
    protected function getFeed_Writer_SlashrendererentryService()
    {
        $this->services['feed.writer.slashrendererentry'] = $instance = new \Zend\Feed\Writer\Extension\Slash\Renderer\Entry();

        $instance->_serviceId = 'feed.writer.slashrendererentry';

        return $instance;
    }

    /**
     * Gets the 'feed.writer.threadingrendererentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Zend\Feed\Writer\Extension\Threading\Renderer\Entry A Zend\Feed\Writer\Extension\Threading\Renderer\Entry instance.
     */
    protected function getFeed_Writer_ThreadingrendererentryService()
    {
        $this->services['feed.writer.threadingrendererentry'] = $instance = new \Zend\Feed\Writer\Extension\Threading\Renderer\Entry();

        $instance->_serviceId = 'feed.writer.threadingrendererentry';

        return $instance;
    }

    /**
     * Gets the 'feed.writer.wellformedwebrendererentry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Zend\Feed\Writer\Extension\WellFormedWeb\Renderer\Entry A Zend\Feed\Writer\Extension\WellFormedWeb\Renderer\Entry instance.
     */
    protected function getFeed_Writer_WellformedwebrendererentryService()
    {
        $this->services['feed.writer.wellformedwebrendererentry'] = $instance = new \Zend\Feed\Writer\Extension\WellFormedWeb\Renderer\Entry();

        $instance->_serviceId = 'feed.writer.wellformedwebrendererentry';

        return $instance;
    }

    /**
     * Gets the 'field.uninstall_validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Drupal\field\FieldUninstallValidator A Drupal\field\FieldUninstallValidator instance.
     */
    public function getField_UninstallValidatorService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['field.uninstall_validator'] = new Drupal_field_FieldUninstallValidator_Proxy($this, 'field.uninstall_validator');
        }
        $instance = new \Drupal\field\FieldUninstallValidator($this->get('entity.manager'), $this->get('string_translation'));

        $instance->_serviceId = 'field.uninstall_validator';

        return $instance;
    }

    /**
     * Gets the 'field_ui.route_enhancer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\field_ui\Routing\FieldUiRouteEnhancer A Drupal\field_ui\Routing\FieldUiRouteEnhancer instance.
     */
    protected function getFieldUi_RouteEnhancerService()
    {
        $this->services['field_ui.route_enhancer'] = $instance = new \Drupal\field_ui\Routing\FieldUiRouteEnhancer($this->get('entity.manager'));

        $instance->_serviceId = 'field_ui.route_enhancer';

        return $instance;
    }

    /**
     * Gets the 'field_ui.subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\field_ui\Routing\RouteSubscriber A Drupal\field_ui\Routing\RouteSubscriber instance.
     */
    protected function getFieldUi_SubscriberService()
    {
        $this->services['field_ui.subscriber'] = $instance = new \Drupal\field_ui\Routing\RouteSubscriber($this->get('entity.manager'));

        $instance->_serviceId = 'field_ui.subscriber';

        return $instance;
    }

    /**
     * Gets the 'field_uninstall_validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Drupal\Core\Field\FieldModuleUninstallValidator A Drupal\Core\Field\FieldModuleUninstallValidator instance.
     */
    public function getFieldUninstallValidatorService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['field_uninstall_validator'] = new Drupal_Core_Field_FieldModuleUninstallValidator_Proxy($this, 'field_uninstall_validator');
        }
        $instance = new \Drupal\Core\Field\FieldModuleUninstallValidator($this->get('entity.manager'), $this->get('string_translation'));

        $instance->_serviceId = 'field_uninstall_validator';

        return $instance;
    }

    /**
     * Gets the 'file.mime_type.guesser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Drupal\Core\File\MimeType\MimeTypeGuesser A Drupal\Core\File\MimeType\MimeTypeGuesser instance.
     */
    public function getFile_MimeType_GuesserService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['file.mime_type.guesser'] = new Drupal_Core_File_MimeType_MimeTypeGuesser_Proxy($this, 'file.mime_type.guesser');
        }
        $instance = new \Drupal\Core\File\MimeType\MimeTypeGuesser();

        $instance->addGuesser($this->get('file.mime_type.guesser.extension'), 0);
        $instance->_serviceId = 'file.mime_type.guesser';

        return $instance;
    }

    /**
     * Gets the 'file.mime_type.guesser.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Drupal\Core\File\MimeType\ExtensionMimeTypeGuesser A Drupal\Core\File\MimeType\ExtensionMimeTypeGuesser instance.
     */
    public function getFile_MimeType_Guesser_ExtensionService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['file.mime_type.guesser.extension'] = new Drupal_Core_File_MimeType_ExtensionMimeTypeGuesser_Proxy($this, 'file.mime_type.guesser.extension');
        }
        $instance = new \Drupal\Core\File\MimeType\ExtensionMimeTypeGuesser($this->get('module_handler'));

        $instance->_serviceId = 'file.mime_type.guesser.extension';

        return $instance;
    }

    /**
     * Gets the 'file.usage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\file\FileUsage\DatabaseFileUsageBackend A Drupal\file\FileUsage\DatabaseFileUsageBackend instance.
     */
    protected function getFile_UsageService()
    {
        $this->services['file.usage'] = $instance = new \Drupal\file\FileUsage\DatabaseFileUsageBackend($this->get('database'));

        $instance->_serviceId = 'file.usage';

        return $instance;
    }

    /**
     * Gets the 'file_system' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\File\FileSystem A Drupal\Core\File\FileSystem instance.
     */
    protected function getFileSystemService()
    {
        $this->services['file_system'] = $instance = new \Drupal\Core\File\FileSystem($this->get('stream_wrapper_manager'), $this->get('settings'), $this->get('logger.channel.file'));

        $instance->_serviceId = 'file_system';

        return $instance;
    }

    /**
     * Gets the 'filter.uninstall_validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Drupal\filter\FilterUninstallValidator A Drupal\filter\FilterUninstallValidator instance.
     */
    public function getFilter_UninstallValidatorService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['filter.uninstall_validator'] = new Drupal_filter_FilterUninstallValidator_Proxy($this, 'filter.uninstall_validator');
        }
        $instance = new \Drupal\filter\FilterUninstallValidator($this->get('plugin.manager.filter'), $this->get('entity.manager'), $this->get('string_translation'));

        $instance->_serviceId = 'filter.uninstall_validator';

        return $instance;
    }

    /**
     * Gets the 'finish_response_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\FinishResponseSubscriber A Drupal\Core\EventSubscriber\FinishResponseSubscriber instance.
     */
    protected function getFinishResponseSubscriberService()
    {
        $this->services['finish_response_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\FinishResponseSubscriber($this->get('language_manager'), $this->get('config.factory'), $this->get('page_cache_request_policy'), $this->get('page_cache_response_policy'), $this->get('cache_contexts_manager'));

        $instance->_serviceId = 'finish_response_subscriber';

        return $instance;
    }

    /**
     * Gets the 'flood' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Flood\DatabaseBackend A Drupal\Core\Flood\DatabaseBackend instance.
     */
    protected function getFloodService()
    {
        $this->services['flood'] = $instance = new \Drupal\Core\Flood\DatabaseBackend($this->get('database'), $this->get('request_stack'));

        $instance->_serviceId = 'flood';

        return $instance;
    }

    /**
     * Gets the 'form_ajax_response_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Form\FormAjaxResponseBuilder A Drupal\Core\Form\FormAjaxResponseBuilder instance.
     */
    protected function getFormAjaxResponseBuilderService()
    {
        $this->services['form_ajax_response_builder'] = $instance = new \Drupal\Core\Form\FormAjaxResponseBuilder($this->get('main_content_renderer.ajax'), $this->get('current_route_match'));

        $instance->_serviceId = 'form_ajax_response_builder';

        return $instance;
    }

    /**
     * Gets the 'form_ajax_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Form\EventSubscriber\FormAjaxSubscriber A Drupal\Core\Form\EventSubscriber\FormAjaxSubscriber instance.
     */
    protected function getFormAjaxSubscriberService()
    {
        $this->services['form_ajax_subscriber'] = $instance = new \Drupal\Core\Form\EventSubscriber\FormAjaxSubscriber($this->get('form_ajax_response_builder'), $this->get('string_translation'));

        $instance->_serviceId = 'form_ajax_subscriber';

        return $instance;
    }

    /**
     * Gets the 'form_builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Form\FormBuilder A Drupal\Core\Form\FormBuilder instance.
     */
    protected function getFormBuilderService()
    {
        $a = $this->get('module_handler');
        $b = $this->get('request_stack');
        $c = $this->get('csrf_token');

        $this->services['form_builder'] = $instance = new \Drupal\Core\Form\FormBuilder($this->get('form_validator'), $this->get('form_submitter'), new \Drupal\Core\Form\FormCache($this->get('app.root'), $this->get('keyvalue.expirable'), $a, $this->get('current_user'), $c, $this->get('logger.channel.form'), $b, $this->get('page_cache_request_policy')), $a, $this->get('event_dispatcher'), $b, $this->get('class_resolver'), $this->get('plugin.manager.element_info'), $this->get('theme.manager'), $c);

        $instance->_serviceId = 'form_builder';

        return $instance;
    }

    /**
     * Gets the 'form_error_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Form\FormErrorHandler A Drupal\Core\Form\FormErrorHandler instance.
     */
    protected function getFormErrorHandlerService()
    {
        $this->services['form_error_handler'] = $instance = new \Drupal\Core\Form\FormErrorHandler($this->get('string_translation'), $this->get('link_generator'));

        $instance->_serviceId = 'form_error_handler';

        return $instance;
    }

    /**
     * Gets the 'form_submitter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Form\FormSubmitter A Drupal\Core\Form\FormSubmitter instance.
     */
    protected function getFormSubmitterService()
    {
        $this->services['form_submitter'] = $instance = new \Drupal\Core\Form\FormSubmitter($this->get('request_stack'), $this->get('url_generator'));

        $instance->_serviceId = 'form_submitter';

        return $instance;
    }

    /**
     * Gets the 'form_validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Form\FormValidator A Drupal\Core\Form\FormValidator instance.
     */
    protected function getFormValidatorService()
    {
        $this->services['form_validator'] = $instance = new \Drupal\Core\Form\FormValidator($this->get('request_stack'), $this->get('string_translation'), $this->get('csrf_token'), $this->get('logger.channel.form'), $this->get('form_error_handler'));

        $instance->_serviceId = 'form_validator';

        return $instance;
    }

    /**
     * Gets the 'html_response.attachments_processor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Render\HtmlResponseAttachmentsProcessor A Drupal\Core\Render\HtmlResponseAttachmentsProcessor instance.
     */
    protected function getHtmlResponse_AttachmentsProcessorService()
    {
        $this->services['html_response.attachments_processor'] = $instance = new \Drupal\Core\Render\HtmlResponseAttachmentsProcessor($this->get('asset.resolver'), $this->get('config.factory'), $this->get('asset.css.collection_renderer'), $this->get('asset.js.collection_renderer'), $this->get('request_stack'), $this->get('renderer'));

        $instance->_serviceId = 'html_response.attachments_processor';

        return $instance;
    }

    /**
     * Gets the 'html_response.subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\HtmlResponseSubscriber A Drupal\Core\EventSubscriber\HtmlResponseSubscriber instance.
     */
    protected function getHtmlResponse_SubscriberService()
    {
        $this->services['html_response.subscriber'] = $instance = new \Drupal\Core\EventSubscriber\HtmlResponseSubscriber($this->get('html_response.attachments_processor'));

        $instance->_serviceId = 'html_response.subscriber';

        return $instance;
    }

    /**
     * Gets the 'http_client' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Http\Client A Drupal\Core\Http\Client instance.
     */
    protected function getHttpClientService()
    {
        $this->services['http_client'] = $instance = new \Drupal\Core\Http\Client();

        $instance->_serviceId = 'http_client';

        return $instance;
    }

    /**
     * Gets the 'http_kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Stack\StackedHttpKernel A Stack\StackedHttpKernel instance.
     */
    protected function getHttpKernelService()
    {
        $a = $this->get('http_middleware.negotiation');

        $this->services['http_kernel'] = $instance = new \Stack\StackedHttpKernel($a, array(0 => $a, 1 => $this->get('http_middleware.reverse_proxy'), 2 => $this->get('http_middleware.page_cache'), 3 => $this->get('http_middleware.kernel_pre_handle'), 4 => $this->get('http_middleware.session'), 5 => $this->get('http_kernel.basic')));

        $instance->_serviceId = 'http_kernel';

        return $instance;
    }

    /**
     * Gets the 'http_kernel.basic' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel A Symfony\Component\HttpKernel\HttpKernel instance.
     */
    public function getHttpKernel_BasicService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['http_kernel.basic'] = new Symfony_Component_HttpKernel_HttpKernel_Proxy($this, 'http_kernel.basic');
        }
        $instance = new \Symfony\Component\HttpKernel\HttpKernel($this->get('event_dispatcher'), $this->get('controller_resolver'), $this->get('request_stack'));

        $instance->_serviceId = 'http_kernel.basic';

        return $instance;
    }

    /**
     * Gets the 'http_middleware.kernel_pre_handle' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Drupal\Core\StackMiddleware\KernelPreHandle A Drupal\Core\StackMiddleware\KernelPreHandle instance.
     */
    public function getHttpMiddleware_KernelPreHandleService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['http_middleware.kernel_pre_handle'] = new Drupal_Core_StackMiddleware_KernelPreHandle_Proxy($this, 'http_middleware.kernel_pre_handle');
        }
        $instance = new \Drupal\Core\StackMiddleware\KernelPreHandle($this->get('http_middleware.session'), $this->get('kernel'));

        $instance->_serviceId = 'http_middleware.kernel_pre_handle';

        return $instance;
    }

    /**
     * Gets the 'http_middleware.negotiation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\StackMiddleware\NegotiationMiddleware A Drupal\Core\StackMiddleware\NegotiationMiddleware instance.
     */
    protected function getHttpMiddleware_NegotiationService()
    {
        $this->services['http_middleware.negotiation'] = $instance = new \Drupal\Core\StackMiddleware\NegotiationMiddleware($this->get('http_middleware.reverse_proxy'), $this->get('http_negotiation.format_negotiator'));

        $instance->registerFormat('hal_json', array(0 => 'application/hal+json'));
        $instance->_serviceId = 'http_middleware.negotiation';

        return $instance;
    }

    /**
     * Gets the 'http_middleware.page_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\page_cache\StackMiddleware\PageCache A Drupal\page_cache\StackMiddleware\PageCache instance.
     */
    protected function getHttpMiddleware_PageCacheService()
    {
        $this->services['http_middleware.page_cache'] = $instance = new \Drupal\page_cache\StackMiddleware\PageCache($this->get('http_middleware.kernel_pre_handle'), $this->get('cache.render'), $this->get('page_cache_request_policy'), $this->get('page_cache_response_policy'));

        $instance->_serviceId = 'http_middleware.page_cache';

        return $instance;
    }

    /**
     * Gets the 'http_middleware.reverse_proxy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\StackMiddleware\ReverseProxyMiddleware A Drupal\Core\StackMiddleware\ReverseProxyMiddleware instance.
     */
    protected function getHttpMiddleware_ReverseProxyService()
    {
        $this->services['http_middleware.reverse_proxy'] = $instance = new \Drupal\Core\StackMiddleware\ReverseProxyMiddleware($this->get('http_middleware.page_cache'), $this->get('settings'));

        $instance->_serviceId = 'http_middleware.reverse_proxy';

        return $instance;
    }

    /**
     * Gets the 'http_middleware.session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Drupal\Core\StackMiddleware\Session A Drupal\Core\StackMiddleware\Session instance.
     */
    public function getHttpMiddleware_SessionService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['http_middleware.session'] = new Drupal_Core_StackMiddleware_Session_Proxy($this, 'http_middleware.session');
        }
        $instance = new \Drupal\Core\StackMiddleware\Session($this->get('http_kernel.basic'));

        $instance->setContainer($this);
        $instance->_serviceId = 'http_middleware.session';

        return $instance;
    }

    /**
     * Gets the 'http_negotiation.format_negotiator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\ContentNegotiation A Drupal\Core\ContentNegotiation instance.
     */
    protected function getHttpNegotiation_FormatNegotiatorService()
    {
        $this->services['http_negotiation.format_negotiator'] = $instance = new \Drupal\Core\ContentNegotiation();

        $instance->_serviceId = 'http_negotiation.format_negotiator';

        return $instance;
    }

    /**
     * Gets the 'image.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Image\ImageFactory A Drupal\Core\Image\ImageFactory instance.
     */
    protected function getImage_FactoryService()
    {
        $this->services['image.factory'] = $instance = new \Drupal\Core\Image\ImageFactory($this->get('image.toolkit.manager'));

        $instance->_serviceId = 'image.factory';

        return $instance;
    }

    /**
     * Gets the 'image.toolkit.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\ImageToolkit\ImageToolkitManager A Drupal\Core\ImageToolkit\ImageToolkitManager instance.
     */
    protected function getImage_Toolkit_ManagerService()
    {
        $this->services['image.toolkit.manager'] = $instance = new \Drupal\Core\ImageToolkit\ImageToolkitManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'), $this->get('config.factory'));

        $instance->_serviceId = 'image.toolkit.manager';

        return $instance;
    }

    /**
     * Gets the 'image.toolkit.operation.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\ImageToolkit\ImageToolkitOperationManager A Drupal\Core\ImageToolkit\ImageToolkitOperationManager instance.
     */
    protected function getImage_Toolkit_Operation_ManagerService()
    {
        $this->services['image.toolkit.operation.manager'] = $instance = new \Drupal\Core\ImageToolkit\ImageToolkitOperationManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'), $this->get('logger.channel.image'));

        $instance->_serviceId = 'image.toolkit.operation.manager';

        return $instance;
    }

    /**
     * Gets the 'info_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Extension\InfoParser A Drupal\Core\Extension\InfoParser instance.
     */
    protected function getInfoParserService()
    {
        $this->services['info_parser'] = $instance = new \Drupal\Core\Extension\InfoParser();

        $instance->_serviceId = 'info_parser';

        return $instance;
    }

    /**
     * Gets the 'kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'kernel_destruct_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\KernelDestructionSubscriber A Drupal\Core\EventSubscriber\KernelDestructionSubscriber instance.
     */
    protected function getKernelDestructSubscriberService()
    {
        $this->services['kernel_destruct_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\KernelDestructionSubscriber();

        $instance->setContainer($this);
        $instance->registerService('path.alias_whitelist');
        $instance->registerService('menu.active_trail');
        $instance->registerService('router.builder');
        $instance->registerService('theme.registry');
        $instance->registerService('library.discovery.collector');
        $instance->_serviceId = 'kernel_destruct_subscriber';

        return $instance;
    }

    /**
     * Gets the 'keyvalue' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\KeyValueStore\KeyValueFactory A Drupal\Core\KeyValueStore\KeyValueFactory instance.
     */
    protected function getKeyvalueService()
    {
        $this->services['keyvalue'] = $instance = new \Drupal\Core\KeyValueStore\KeyValueFactory($this, array());

        $instance->_serviceId = 'keyvalue';

        return $instance;
    }

    /**
     * Gets the 'keyvalue.database' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\KeyValueStore\KeyValueDatabaseFactory A Drupal\Core\KeyValueStore\KeyValueDatabaseFactory instance.
     */
    protected function getKeyvalue_DatabaseService()
    {
        $this->services['keyvalue.database'] = $instance = new \Drupal\Core\KeyValueStore\KeyValueDatabaseFactory($this->get('serialization.phpserialize'), $this->get('database'));

        $instance->_serviceId = 'keyvalue.database';

        return $instance;
    }

    /**
     * Gets the 'keyvalue.expirable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\KeyValueStore\KeyValueExpirableFactory A Drupal\Core\KeyValueStore\KeyValueExpirableFactory instance.
     */
    protected function getKeyvalue_ExpirableService()
    {
        $this->services['keyvalue.expirable'] = $instance = new \Drupal\Core\KeyValueStore\KeyValueExpirableFactory($this, array());

        $instance->_serviceId = 'keyvalue.expirable';

        return $instance;
    }

    /**
     * Gets the 'keyvalue.expirable.database' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\KeyValueStore\KeyValueDatabaseExpirableFactory A Drupal\Core\KeyValueStore\KeyValueDatabaseExpirableFactory instance.
     */
    protected function getKeyvalue_Expirable_DatabaseService()
    {
        $this->services['keyvalue.expirable.database'] = $instance = new \Drupal\Core\KeyValueStore\KeyValueDatabaseExpirableFactory($this->get('serialization.phpserialize'), $this->get('database'));

        $instance->_serviceId = 'keyvalue.expirable.database';

        return $instance;
    }

    /**
     * Gets the 'language.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Language\LanguageDefault A Drupal\Core\Language\LanguageDefault instance.
     */
    protected function getLanguage_DefaultService()
    {
        $this->services['language.default'] = $instance = new \Drupal\Core\Language\LanguageDefault(array('id' => 'en', 'name' => 'English', 'direction' => 'ltr', 'weight' => 0, 'locked' => false));

        $instance->_serviceId = 'language.default';

        return $instance;
    }

    /**
     * Gets the 'language_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Language\LanguageManager A Drupal\Core\Language\LanguageManager instance.
     */
    protected function getLanguageManagerService()
    {
        $this->services['language_manager'] = $instance = new \Drupal\Core\Language\LanguageManager($this->get('language.default'));

        $instance->_serviceId = 'language_manager';

        return $instance;
    }

    /**
     * Gets the 'library.dependency_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Asset\LibraryDependencyResolver A Drupal\Core\Asset\LibraryDependencyResolver instance.
     */
    protected function getLibrary_DependencyResolverService()
    {
        $this->services['library.dependency_resolver'] = $instance = new \Drupal\Core\Asset\LibraryDependencyResolver($this->get('library.discovery'));

        $instance->_serviceId = 'library.dependency_resolver';

        return $instance;
    }

    /**
     * Gets the 'library.discovery' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Asset\LibraryDiscovery A Drupal\Core\Asset\LibraryDiscovery instance.
     */
    protected function getLibrary_DiscoveryService()
    {
        $this->services['library.discovery'] = $instance = new \Drupal\Core\Asset\LibraryDiscovery($this->get('library.discovery.collector'), $this->get('cache_tags.invalidator'));

        $instance->_serviceId = 'library.discovery';

        return $instance;
    }

    /**
     * Gets the 'library.discovery.collector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Asset\LibraryDiscoveryCollector A Drupal\Core\Asset\LibraryDiscoveryCollector instance.
     */
    protected function getLibrary_Discovery_CollectorService()
    {
        $this->services['library.discovery.collector'] = $instance = new \Drupal\Core\Asset\LibraryDiscoveryCollector($this->get('cache.discovery'), $this->get('lock'), $this->get('library.discovery.parser'), $this->get('theme.manager'));

        $instance->_serviceId = 'library.discovery.collector';

        return $instance;
    }

    /**
     * Gets the 'library.discovery.parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Asset\LibraryDiscoveryParser A Drupal\Core\Asset\LibraryDiscoveryParser instance.
     */
    protected function getLibrary_Discovery_ParserService()
    {
        $this->services['library.discovery.parser'] = $instance = new \Drupal\Core\Asset\LibraryDiscoveryParser($this->get('app.root'), $this->get('module_handler'), $this->get('theme.manager'));

        $instance->_serviceId = 'library.discovery.parser';

        return $instance;
    }

    /**
     * Gets the 'link_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Utility\LinkGenerator A Drupal\Core\Utility\LinkGenerator instance.
     */
    protected function getLinkGeneratorService()
    {
        $this->services['link_generator'] = $instance = new \Drupal\Core\Utility\LinkGenerator($this->get('url_generator'), $this->get('module_handler'));

        $instance->_serviceId = 'link_generator';

        return $instance;
    }

    /**
     * Gets the 'lock' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Drupal\Core\Lock\DatabaseLockBackend A Drupal\Core\Lock\DatabaseLockBackend instance.
     */
    public function getLockService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['lock'] = new Drupal_Core_Lock_DatabaseLockBackend_Proxy($this, 'lock');
        }
        $instance = new \Drupal\Core\Lock\DatabaseLockBackend($this->get('database'));

        $instance->_serviceId = 'lock';

        return $instance;
    }

    /**
     * Gets the 'lock.persistent' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Drupal\Core\Lock\PersistentDatabaseLockBackend A Drupal\Core\Lock\PersistentDatabaseLockBackend instance.
     */
    public function getLock_PersistentService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['lock.persistent'] = new Drupal_Core_Lock_PersistentDatabaseLockBackend_Proxy($this, 'lock.persistent');
        }
        $instance = new \Drupal\Core\Lock\PersistentDatabaseLockBackend($this->get('database'));

        $instance->_serviceId = 'lock.persistent';

        return $instance;
    }

    /**
     * Gets the 'logger.channel.contact' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Logger\LoggerChannel A Drupal\Core\Logger\LoggerChannel instance.
     */
    protected function getLogger_Channel_ContactService()
    {
        $this->services['logger.channel.contact'] = $instance = $this->get('logger.factory')->get('contact');

        $instance->_serviceId = 'logger.channel.contact';

        return $instance;
    }

    /**
     * Gets the 'logger.channel.cron' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Logger\LoggerChannel A Drupal\Core\Logger\LoggerChannel instance.
     */
    protected function getLogger_Channel_CronService()
    {
        $this->services['logger.channel.cron'] = $instance = $this->get('logger.factory')->get('cron');

        $instance->_serviceId = 'logger.channel.cron';

        return $instance;
    }

    /**
     * Gets the 'logger.channel.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Logger\LoggerChannel A Drupal\Core\Logger\LoggerChannel instance.
     */
    protected function getLogger_Channel_DefaultService()
    {
        $this->services['logger.channel.default'] = $instance = $this->get('logger.factory')->get('system');

        $instance->_serviceId = 'logger.channel.default';

        return $instance;
    }

    /**
     * Gets the 'logger.channel.file' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Logger\LoggerChannel A Drupal\Core\Logger\LoggerChannel instance.
     */
    protected function getLogger_Channel_FileService()
    {
        $this->services['logger.channel.file'] = $instance = $this->get('logger.factory')->get('file');

        $instance->_serviceId = 'logger.channel.file';

        return $instance;
    }

    /**
     * Gets the 'logger.channel.form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Logger\LoggerChannel A Drupal\Core\Logger\LoggerChannel instance.
     */
    protected function getLogger_Channel_FormService()
    {
        $this->services['logger.channel.form'] = $instance = $this->get('logger.factory')->get('form');

        $instance->_serviceId = 'logger.channel.form';

        return $instance;
    }

    /**
     * Gets the 'logger.channel.image' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Logger\LoggerChannel A Drupal\Core\Logger\LoggerChannel instance.
     */
    protected function getLogger_Channel_ImageService()
    {
        $this->services['logger.channel.image'] = $instance = $this->get('logger.factory')->get('image');

        $instance->_serviceId = 'logger.channel.image';

        return $instance;
    }

    /**
     * Gets the 'logger.channel.php' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Logger\LoggerChannel A Drupal\Core\Logger\LoggerChannel instance.
     */
    protected function getLogger_Channel_PhpService()
    {
        $this->services['logger.channel.php'] = $instance = $this->get('logger.factory')->get('php');

        $instance->_serviceId = 'logger.channel.php';

        return $instance;
    }

    /**
     * Gets the 'logger.channel.rest' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Logger\LoggerChannel A Drupal\Core\Logger\LoggerChannel instance.
     */
    protected function getLogger_Channel_RestService()
    {
        $this->services['logger.channel.rest'] = $instance = $this->get('logger.factory')->get('rest');

        $instance->_serviceId = 'logger.channel.rest';

        return $instance;
    }

    /**
     * Gets the 'logger.dblog' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\dblog\Logger\DbLog A Drupal\dblog\Logger\DbLog instance.
     */
    protected function getLogger_DblogService()
    {
        $this->services['logger.dblog'] = $instance = new \Drupal\dblog\Logger\DbLog($this->get('database'), $this->get('logger.log_message_parser'));

        $instance->_serviceId = 'logger.dblog';

        return $instance;
    }

    /**
     * Gets the 'logger.factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Logger\LoggerChannelFactory A Drupal\Core\Logger\LoggerChannelFactory instance.
     */
    protected function getLogger_FactoryService()
    {
        $this->services['logger.factory'] = $instance = new \Drupal\Core\Logger\LoggerChannelFactory();

        $instance->setContainer($this);
        $instance->addLogger($this->get('logger.dblog'), 0);
        $instance->_serviceId = 'logger.factory';

        return $instance;
    }

    /**
     * Gets the 'logger.log_message_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Logger\LogMessageParser A Drupal\Core\Logger\LogMessageParser instance.
     */
    protected function getLogger_LogMessageParserService()
    {
        $this->services['logger.log_message_parser'] = $instance = new \Drupal\Core\Logger\LogMessageParser();

        $instance->_serviceId = 'logger.log_message_parser';

        return $instance;
    }

    /**
     * Gets the 'main_content_renderer.ajax' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Render\MainContent\AjaxRenderer A Drupal\Core\Render\MainContent\AjaxRenderer instance.
     */
    protected function getMainContentRenderer_AjaxService()
    {
        $this->services['main_content_renderer.ajax'] = $instance = new \Drupal\Core\Render\MainContent\AjaxRenderer($this->get('plugin.manager.element_info'));

        $instance->_serviceId = 'main_content_renderer.ajax';

        return $instance;
    }

    /**
     * Gets the 'main_content_renderer.dialog' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Render\MainContent\DialogRenderer A Drupal\Core\Render\MainContent\DialogRenderer instance.
     */
    protected function getMainContentRenderer_DialogService()
    {
        $this->services['main_content_renderer.dialog'] = $instance = new \Drupal\Core\Render\MainContent\DialogRenderer($this->get('title_resolver'));

        $instance->_serviceId = 'main_content_renderer.dialog';

        return $instance;
    }

    /**
     * Gets the 'main_content_renderer.html' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Render\MainContent\HtmlRenderer A Drupal\Core\Render\MainContent\HtmlRenderer instance.
     */
    protected function getMainContentRenderer_HtmlService()
    {
        $this->services['main_content_renderer.html'] = $instance = new \Drupal\Core\Render\MainContent\HtmlRenderer($this->get('title_resolver'), $this->get('plugin.manager.display_variant'), $this->get('event_dispatcher'), $this->get('module_handler'), $this->get('renderer'), $this->get('render_cache'));

        $instance->_serviceId = 'main_content_renderer.html';

        return $instance;
    }

    /**
     * Gets the 'main_content_renderer.modal' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Render\MainContent\ModalRenderer A Drupal\Core\Render\MainContent\ModalRenderer instance.
     */
    protected function getMainContentRenderer_ModalService()
    {
        $this->services['main_content_renderer.modal'] = $instance = new \Drupal\Core\Render\MainContent\ModalRenderer($this->get('title_resolver'));

        $instance->_serviceId = 'main_content_renderer.modal';

        return $instance;
    }

    /**
     * Gets the 'main_content_view_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\MainContentViewSubscriber A Drupal\Core\EventSubscriber\MainContentViewSubscriber instance.
     */
    protected function getMainContentViewSubscriberService()
    {
        $this->services['main_content_view_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\MainContentViewSubscriber($this->get('class_resolver'), $this->get('current_route_match'), array('html' => 'main_content_renderer.html', 'drupal_ajax' => 'main_content_renderer.ajax', 'iframeupload' => 'main_content_renderer.ajax', 'drupal_dialog' => 'main_content_renderer.dialog', 'drupal_modal' => 'main_content_renderer.modal'));

        $instance->_serviceId = 'main_content_view_subscriber';

        return $instance;
    }

    /**
     * Gets the 'maintenance_mode' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Site\MaintenanceMode A Drupal\Core\Site\MaintenanceMode instance.
     */
    protected function getMaintenanceModeService()
    {
        $this->services['maintenance_mode'] = $instance = new \Drupal\Core\Site\MaintenanceMode($this->get('state'), $this->get('current_user'));

        $instance->_serviceId = 'maintenance_mode';

        return $instance;
    }

    /**
     * Gets the 'maintenance_mode_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\MaintenanceModeSubscriber A Drupal\Core\EventSubscriber\MaintenanceModeSubscriber instance.
     */
    protected function getMaintenanceModeSubscriberService()
    {
        $this->services['maintenance_mode_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\MaintenanceModeSubscriber($this->get('maintenance_mode'), $this->get('config.factory'), $this->get('string_translation'), $this->get('url_generator'), $this->get('current_user'), $this->get('bare_html_page_renderer'));

        $instance->_serviceId = 'maintenance_mode_subscriber';

        return $instance;
    }

    /**
     * Gets the 'menu.active_trail' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Menu\MenuActiveTrail A Drupal\Core\Menu\MenuActiveTrail instance.
     */
    protected function getMenu_ActiveTrailService()
    {
        $this->services['menu.active_trail'] = $instance = new \Drupal\Core\Menu\MenuActiveTrail($this->get('plugin.manager.menu.link'), $this->get('current_route_match'), $this->get('cache.menu'), $this->get('lock'));

        $instance->_serviceId = 'menu.active_trail';

        return $instance;
    }

    /**
     * Gets the 'menu.default_tree_manipulators' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Menu\DefaultMenuLinkTreeManipulators A Drupal\Core\Menu\DefaultMenuLinkTreeManipulators instance.
     */
    protected function getMenu_DefaultTreeManipulatorsService()
    {
        $this->services['menu.default_tree_manipulators'] = $instance = new \Drupal\Core\Menu\DefaultMenuLinkTreeManipulators($this->get('access_manager'), $this->get('current_user'), $this->get('entity.query'));

        $instance->_serviceId = 'menu.default_tree_manipulators';

        return $instance;
    }

    /**
     * Gets the 'menu.link_tree' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Menu\MenuLinkTree A Drupal\Core\Menu\MenuLinkTree instance.
     */
    protected function getMenu_LinkTreeService()
    {
        $this->services['menu.link_tree'] = $instance = new \Drupal\Core\Menu\MenuLinkTree($this->get('menu.tree_storage'), $this->get('plugin.manager.menu.link'), $this->get('router.route_provider'), $this->get('menu.active_trail'), $this->get('controller_resolver'));

        $instance->_serviceId = 'menu.link_tree';

        return $instance;
    }

    /**
     * Gets the 'menu.parent_form_selector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Menu\MenuParentFormSelector A Drupal\Core\Menu\MenuParentFormSelector instance.
     */
    protected function getMenu_ParentFormSelectorService()
    {
        $this->services['menu.parent_form_selector'] = $instance = new \Drupal\Core\Menu\MenuParentFormSelector($this->get('menu.link_tree'), $this->get('entity.manager'), $this->get('string_translation'));

        $instance->_serviceId = 'menu.parent_form_selector';

        return $instance;
    }

    /**
     * Gets the 'menu.rebuild_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\MenuRouterRebuildSubscriber A Drupal\Core\EventSubscriber\MenuRouterRebuildSubscriber instance.
     */
    protected function getMenu_RebuildSubscriberService()
    {
        $this->services['menu.rebuild_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\MenuRouterRebuildSubscriber($this->get('lock'), $this->get('plugin.manager.menu.link'));

        $instance->_serviceId = 'menu.rebuild_subscriber';

        return $instance;
    }

    /**
     * Gets the 'menu_link.static.overrides' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Menu\StaticMenuLinkOverrides A Drupal\Core\Menu\StaticMenuLinkOverrides instance.
     */
    protected function getMenuLink_Static_OverridesService()
    {
        $this->services['menu_link.static.overrides'] = $instance = new \Drupal\Core\Menu\StaticMenuLinkOverrides($this->get('config.factory'));

        $instance->_serviceId = 'menu_link.static.overrides';

        return $instance;
    }

    /**
     * Gets the 'module_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Extension\ModuleHandler A Drupal\Core\Extension\ModuleHandler instance.
     */
    protected function getModuleHandlerService()
    {
        $this->services['module_handler'] = $instance = new \Drupal\Core\Extension\ModuleHandler($this->get('app.root'), array('basic_auth' => array('type' => 'module', 'pathname' => 'core/modules/basic_auth/basic_auth.info.yml', 'filename' => 'basic_auth.module'), 'block' => array('type' => 'module', 'pathname' => 'core/modules/block/block.info.yml', 'filename' => 'block.module'), 'block_content' => array('type' => 'module', 'pathname' => 'core/modules/block_content/block_content.info.yml', 'filename' => 'block_content.module'), 'breakpoint' => array('type' => 'module', 'pathname' => 'core/modules/breakpoint/breakpoint.info.yml', 'filename' => 'breakpoint.module'), 'ckeditor' => array('type' => 'module', 'pathname' => 'core/modules/ckeditor/ckeditor.info.yml', 'filename' => 'ckeditor.module'), 'color' => array('type' => 'module', 'pathname' => 'core/modules/color/color.info.yml', 'filename' => 'color.module'), 'comment' => array('type' => 'module', 'pathname' => 'core/modules/comment/comment.info.yml', 'filename' => 'comment.module'), 'config' => array('type' => 'module', 'pathname' => 'core/modules/config/config.info.yml', 'filename' => 'config.module'), 'contact' => array('type' => 'module', 'pathname' => 'core/modules/contact/contact.info.yml', 'filename' => 'contact.module'), 'contextual' => array('type' => 'module', 'pathname' => 'core/modules/contextual/contextual.info.yml', 'filename' => 'contextual.module'), 'datetime' => array('type' => 'module', 'pathname' => 'core/modules/datetime/datetime.info.yml', 'filename' => 'datetime.module'), 'dblog' => array('type' => 'module', 'pathname' => 'core/modules/dblog/dblog.info.yml', 'filename' => 'dblog.module'), 'editor' => array('type' => 'module', 'pathname' => 'core/modules/editor/editor.info.yml', 'filename' => 'editor.module'), 'entity_reference' => array('type' => 'module', 'pathname' => 'core/modules/entity_reference/entity_reference.info.yml', 'filename' => 'entity_reference.module'), 'field' => array('type' => 'module', 'pathname' => 'core/modules/field/field.info.yml', 'filename' => 'field.module'), 'field_ui' => array('type' => 'module', 'pathname' => 'core/modules/field_ui/field_ui.info.yml', 'filename' => 'field_ui.module'), 'file' => array('type' => 'module', 'pathname' => 'core/modules/file/file.info.yml', 'filename' => 'file.module'), 'filter' => array('type' => 'module', 'pathname' => 'core/modules/filter/filter.info.yml', 'filename' => 'filter.module'), 'hal' => array('type' => 'module', 'pathname' => 'core/modules/hal/hal.info.yml', 'filename' => 'hal.module'), 'help' => array('type' => 'module', 'pathname' => 'core/modules/help/help.info.yml', 'filename' => 'help.module'), 'history' => array('type' => 'module', 'pathname' => 'core/modules/history/history.info.yml', 'filename' => 'history.module'), 'image' => array('type' => 'module', 'pathname' => 'core/modules/image/image.info.yml', 'filename' => 'image.module'), 'link' => array('type' => 'module', 'pathname' => 'core/modules/link/link.info.yml', 'filename' => 'link.module'), 'menu_ui' => array('type' => 'module', 'pathname' => 'core/modules/menu_ui/menu_ui.info.yml', 'filename' => 'menu_ui.module'), 'node' => array('type' => 'module', 'pathname' => 'core/modules/node/node.info.yml', 'filename' => 'node.module'), 'options' => array('type' => 'module', 'pathname' => 'core/modules/options/options.info.yml', 'filename' => 'options.module'), 'page_cache' => array('type' => 'module', 'pathname' => 'core/modules/page_cache/page_cache.info.yml', 'filename' => 'page_cache.module'), 'path' => array('type' => 'module', 'pathname' => 'core/modules/path/path.info.yml', 'filename' => 'path.module'), 'quickedit' => array('type' => 'module', 'pathname' => 'core/modules/quickedit/quickedit.info.yml', 'filename' => 'quickedit.module'), 'rdf' => array('type' => 'module', 'pathname' => 'core/modules/rdf/rdf.info.yml', 'filename' => 'rdf.module'), 'rest' => array('type' => 'module', 'pathname' => 'core/modules/rest/rest.info.yml', 'filename' => 'rest.module'), 'search' => array('type' => 'module', 'pathname' => 'core/modules/search/search.info.yml', 'filename' => 'search.module'), 'serialization' => array('type' => 'module', 'pathname' => 'core/modules/serialization/serialization.info.yml', 'filename' => 'serialization.module'), 'shortcut' => array('type' => 'module', 'pathname' => 'core/modules/shortcut/shortcut.info.yml', 'filename' => 'shortcut.module'), 'system' => array('type' => 'module', 'pathname' => 'core/modules/system/system.info.yml', 'filename' => 'system.module'), 'taxonomy' => array('type' => 'module', 'pathname' => 'core/modules/taxonomy/taxonomy.info.yml', 'filename' => 'taxonomy.module'), 'text' => array('type' => 'module', 'pathname' => 'core/modules/text/text.info.yml', 'filename' => 'text.module'), 'toolbar' => array('type' => 'module', 'pathname' => 'core/modules/toolbar/toolbar.info.yml', 'filename' => 'toolbar.module'), 'tour' => array('type' => 'module', 'pathname' => 'core/modules/tour/tour.info.yml', 'filename' => 'tour.module'), 'user' => array('type' => 'module', 'pathname' => 'core/modules/user/user.info.yml', 'filename' => 'user.module'), 'views_ui' => array('type' => 'module', 'pathname' => 'core/modules/views_ui/views_ui.info.yml', 'filename' => 'views_ui.module'), 'menu_link_content' => array('type' => 'module', 'pathname' => 'core/modules/menu_link_content/menu_link_content.info.yml', 'filename' => 'menu_link_content.module'), 'views' => array('type' => 'module', 'pathname' => 'core/modules/views/views.info.yml', 'filename' => 'views.module'), 'standard' => array('type' => 'profile', 'pathname' => 'core/profiles/standard/standard.info.yml', 'filename' => 'standard.profile')), $this->get('cache.bootstrap'));

        $instance->_serviceId = 'module_handler';

        return $instance;
    }

    /**
     * Gets the 'module_installer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Drupal\Core\Extension\ModuleInstaller A Drupal\Core\Extension\ModuleInstaller instance.
     */
    public function getModuleInstallerService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['module_installer'] = new Drupal_Core_Extension_ModuleInstaller_Proxy($this, 'module_installer');
        }
        $instance = new \Drupal\Core\Extension\ModuleInstaller($this->get('app.root'), $this->get('module_handler'), $this->get('kernel'));

        $instance->addUninstallValidator($this->get('filter.uninstall_validator'));
        $instance->addUninstallValidator($this->get('field.uninstall_validator'));
        $instance->addUninstallValidator($this->get('required_module_uninstall_validator'));
        $instance->addUninstallValidator($this->get('field_uninstall_validator'));
        $instance->addUninstallValidator($this->get('content_uninstall_validator'));
        $instance->_serviceId = 'module_installer';

        return $instance;
    }

    /**
     * Gets the 'node.admin_path.route_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\node\EventSubscriber\NodeAdminRouteSubscriber A Drupal\node\EventSubscriber\NodeAdminRouteSubscriber instance.
     */
    protected function getNode_AdminPath_RouteSubscriberService()
    {
        $this->services['node.admin_path.route_subscriber'] = $instance = new \Drupal\node\EventSubscriber\NodeAdminRouteSubscriber($this->get('config.factory'));

        $instance->_serviceId = 'node.admin_path.route_subscriber';

        return $instance;
    }

    /**
     * Gets the 'node.grant_storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\node\NodeGrantDatabaseStorage A Drupal\node\NodeGrantDatabaseStorage instance.
     */
    protected function getNode_GrantStorageService()
    {
        $this->services['node.grant_storage'] = $instance = new \Drupal\node\NodeGrantDatabaseStorage($this->get('database'), $this->get('module_handler'), $this->get('language_manager'));

        $instance->_serviceId = 'node.grant_storage';

        return $instance;
    }

    /**
     * Gets the 'node.route_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\node\Routing\RouteSubscriber A Drupal\node\Routing\RouteSubscriber instance.
     */
    protected function getNode_RouteSubscriberService()
    {
        $this->services['node.route_subscriber'] = $instance = new \Drupal\node\Routing\RouteSubscriber();

        $instance->_serviceId = 'node.route_subscriber';

        return $instance;
    }

    /**
     * Gets the 'node_preview' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Drupal\node\ParamConverter\NodePreviewConverter A Drupal\node\ParamConverter\NodePreviewConverter instance.
     */
    public function getNodePreviewService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['node_preview'] = new Drupal_node_ParamConverter_NodePreviewConverter_Proxy($this, 'node_preview');
        }
        $instance = new \Drupal\node\ParamConverter\NodePreviewConverter($this->get('user.private_tempstore'));

        $instance->_serviceId = 'node_preview';

        return $instance;
    }

    /**
     * Gets the 'page_cache_kill_switch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\PageCache\ResponsePolicy\KillSwitch A Drupal\Core\PageCache\ResponsePolicy\KillSwitch instance.
     */
    protected function getPageCacheKillSwitchService()
    {
        $this->services['page_cache_kill_switch'] = $instance = new \Drupal\Core\PageCache\ResponsePolicy\KillSwitch();

        $instance->_serviceId = 'page_cache_kill_switch';

        return $instance;
    }

    /**
     * Gets the 'page_cache_request_policy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\PageCache\DefaultRequestPolicy A Drupal\Core\PageCache\DefaultRequestPolicy instance.
     */
    protected function getPageCacheRequestPolicyService()
    {
        $this->services['page_cache_request_policy'] = $instance = new \Drupal\Core\PageCache\DefaultRequestPolicy($this->get('session_configuration'));

        $instance->addPolicy($this->get('toolbar.page_cache_request_policy.allow_toolbar_path'));
        $instance->addPolicy(new \Drupal\basic_auth\PageCache\DisallowBasicAuthRequests());
        $instance->_serviceId = 'page_cache_request_policy';

        return $instance;
    }

    /**
     * Gets the 'page_cache_response_policy' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Drupal\Core\PageCache\ChainResponsePolicy A Drupal\Core\PageCache\ChainResponsePolicy instance.
     */
    public function getPageCacheResponsePolicyService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['page_cache_response_policy'] = new Drupal_Core_PageCache_ChainResponsePolicy_Proxy($this, 'page_cache_response_policy');
        }
        $a = $this->get('current_route_match');

        $instance = new \Drupal\Core\PageCache\ChainResponsePolicy();

        $instance->addPolicy(new \Drupal\node\PageCache\DenyNodePreview($a));
        $instance->addPolicy(new \Drupal\image\PageCache\DenyPrivateImageStyleDownload($a));
        $instance->addPolicy(new \Drupal\Core\PageCache\ResponsePolicy\NoServerError());
        $instance->addPolicy(new \Drupal\Core\PageCache\ResponsePolicy\DenyNoCacheRoutes($a));
        $instance->addPolicy($this->get('page_cache_kill_switch'));
        $instance->_serviceId = 'page_cache_response_policy';

        return $instance;
    }

    /**
     * Gets the 'paramconverter.configentity_admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Drupal\Core\ParamConverter\AdminPathConfigEntityConverter A Drupal\Core\ParamConverter\AdminPathConfigEntityConverter instance.
     */
    public function getParamconverter_ConfigentityAdminService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['paramconverter.configentity_admin'] = new Drupal_Core_ParamConverter_AdminPathConfigEntityConverter_Proxy($this, 'paramconverter.configentity_admin');
        }
        $instance = new \Drupal\Core\ParamConverter\AdminPathConfigEntityConverter($this->get('entity.manager'), $this->get('config.factory'), $this->get('router.admin_context'));

        $instance->_serviceId = 'paramconverter.configentity_admin';

        return $instance;
    }

    /**
     * Gets the 'paramconverter.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\ParamConverter\EntityConverter A Drupal\Core\ParamConverter\EntityConverter instance.
     */
    protected function getParamconverter_EntityService()
    {
        $this->services['paramconverter.entity'] = $instance = new \Drupal\Core\ParamConverter\EntityConverter($this->get('entity.manager'));

        $instance->_serviceId = 'paramconverter.entity';

        return $instance;
    }

    /**
     * Gets the 'paramconverter.menu_link' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Drupal\Core\ParamConverter\MenuLinkPluginConverter A Drupal\Core\ParamConverter\MenuLinkPluginConverter instance.
     */
    public function getParamconverter_MenuLinkService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['paramconverter.menu_link'] = new Drupal_Core_ParamConverter_MenuLinkPluginConverter_Proxy($this, 'paramconverter.menu_link');
        }
        $instance = new \Drupal\Core\ParamConverter\MenuLinkPluginConverter($this->get('plugin.manager.menu.link'));

        $instance->_serviceId = 'paramconverter.menu_link';

        return $instance;
    }

    /**
     * Gets the 'paramconverter.views_ui' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Drupal\views_ui\ParamConverter\ViewUIConverter A Drupal\views_ui\ParamConverter\ViewUIConverter instance.
     */
    public function getParamconverter_ViewsUiService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['paramconverter.views_ui'] = new Drupal_views_ui_ParamConverter_ViewUIConverter_Proxy($this, 'paramconverter.views_ui');
        }
        $instance = new \Drupal\views_ui\ParamConverter\ViewUIConverter($this->get('entity.manager'), $this->get('user.shared_tempstore'));

        $instance->_serviceId = 'paramconverter.views_ui';

        return $instance;
    }

    /**
     * Gets the 'paramconverter_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\ParamConverter\ParamConverterManager A Drupal\Core\ParamConverter\ParamConverterManager instance.
     */
    protected function getParamconverterManagerService()
    {
        $this->services['paramconverter_manager'] = $instance = new \Drupal\Core\ParamConverter\ParamConverterManager();

        $instance->addConverter($this->get('paramconverter.views_ui'), 'paramconverter.views_ui');
        $instance->addConverter($this->get('paramconverter.configentity_admin'), 'paramconverter.configentity_admin');
        $instance->addConverter($this->get('paramconverter.entity'), 'paramconverter.entity');
        $instance->addConverter($this->get('node_preview'), 'node_preview');
        $instance->addConverter($this->get('paramconverter.menu_link'), 'paramconverter.menu_link');
        $instance->_serviceId = 'paramconverter_manager';

        return $instance;
    }

    /**
     * Gets the 'paramconverter_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\ParamConverterSubscriber A Drupal\Core\EventSubscriber\ParamConverterSubscriber instance.
     */
    protected function getParamconverterSubscriberService()
    {
        $this->services['paramconverter_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\ParamConverterSubscriber($this->get('paramconverter_manager'));

        $instance->_serviceId = 'paramconverter_subscriber';

        return $instance;
    }

    /**
     * Gets the 'password' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Password\PhpassHashedPassword A Drupal\Core\Password\PhpassHashedPassword instance.
     */
    protected function getPasswordService()
    {
        $this->services['password'] = $instance = new \Drupal\Core\Password\PhpassHashedPassword(16);

        $instance->_serviceId = 'password';

        return $instance;
    }

    /**
     * Gets the 'path.alias_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Path\AliasManager A Drupal\Core\Path\AliasManager instance.
     */
    protected function getPath_AliasManagerService()
    {
        $this->services['path.alias_manager'] = $instance = new \Drupal\Core\Path\AliasManager($this->get('path.alias_storage'), $this->get('path.alias_whitelist'), $this->get('language_manager'), $this->get('cache.data'));

        $instance->_serviceId = 'path.alias_manager';

        return $instance;
    }

    /**
     * Gets the 'path.alias_storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Path\AliasStorage A Drupal\Core\Path\AliasStorage instance.
     */
    protected function getPath_AliasStorageService()
    {
        $this->services['path.alias_storage'] = $instance = new \Drupal\Core\Path\AliasStorage($this->get('database'), $this->get('module_handler'));

        $instance->_serviceId = 'path.alias_storage';

        return $instance;
    }

    /**
     * Gets the 'path.alias_whitelist' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Path\AliasWhitelist A Drupal\Core\Path\AliasWhitelist instance.
     */
    protected function getPath_AliasWhitelistService()
    {
        $this->services['path.alias_whitelist'] = $instance = new \Drupal\Core\Path\AliasWhitelist('path_alias_whitelist', $this->get('cache.default'), $this->get('lock'), $this->get('state'), $this->get('path.alias_storage'));

        $instance->_serviceId = 'path.alias_whitelist';

        return $instance;
    }

    /**
     * Gets the 'path.current' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Path\CurrentPathStack A Drupal\Core\Path\CurrentPathStack instance.
     */
    protected function getPath_CurrentService()
    {
        $this->services['path.current'] = $instance = new \Drupal\Core\Path\CurrentPathStack($this->get('request_stack'));

        $instance->_serviceId = 'path.current';

        return $instance;
    }

    /**
     * Gets the 'path.matcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Path\PathMatcher A Drupal\Core\Path\PathMatcher instance.
     */
    protected function getPath_MatcherService()
    {
        $this->services['path.matcher'] = $instance = new \Drupal\Core\Path\PathMatcher($this->get('config.factory'), $this->get('current_route_match'));

        $instance->_serviceId = 'path.matcher';

        return $instance;
    }

    /**
     * Gets the 'path.validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Path\PathValidator A Drupal\Core\Path\PathValidator instance.
     */
    protected function getPath_ValidatorService()
    {
        $this->services['path.validator'] = $instance = new \Drupal\Core\Path\PathValidator($this->get('router'), $this->get('router.no_access_checks'), $this->get('current_user'), $this->get('path_processor_manager'));

        $instance->_serviceId = 'path.validator';

        return $instance;
    }

    /**
     * Gets the 'path_processor.files' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\system\PathProcessor\PathProcessorFiles A Drupal\system\PathProcessor\PathProcessorFiles instance.
     */
    protected function getPathProcessor_FilesService()
    {
        $this->services['path_processor.files'] = $instance = new \Drupal\system\PathProcessor\PathProcessorFiles();

        $instance->_serviceId = 'path_processor.files';

        return $instance;
    }

    /**
     * Gets the 'path_processor.image_styles' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\image\PathProcessor\PathProcessorImageStyles A Drupal\image\PathProcessor\PathProcessorImageStyles instance.
     */
    protected function getPathProcessor_ImageStylesService()
    {
        $this->services['path_processor.image_styles'] = $instance = new \Drupal\image\PathProcessor\PathProcessorImageStyles();

        $instance->_serviceId = 'path_processor.image_styles';

        return $instance;
    }

    /**
     * Gets the 'path_processor_alias' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\PathProcessor\PathProcessorAlias A Drupal\Core\PathProcessor\PathProcessorAlias instance.
     */
    protected function getPathProcessorAliasService()
    {
        $this->services['path_processor_alias'] = $instance = new \Drupal\Core\PathProcessor\PathProcessorAlias($this->get('path.alias_manager'));

        $instance->_serviceId = 'path_processor_alias';

        return $instance;
    }

    /**
     * Gets the 'path_processor_decode' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\PathProcessor\PathProcessorDecode A Drupal\Core\PathProcessor\PathProcessorDecode instance.
     */
    protected function getPathProcessorDecodeService()
    {
        $this->services['path_processor_decode'] = $instance = new \Drupal\Core\PathProcessor\PathProcessorDecode();

        $instance->_serviceId = 'path_processor_decode';

        return $instance;
    }

    /**
     * Gets the 'path_processor_front' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\PathProcessor\PathProcessorFront A Drupal\Core\PathProcessor\PathProcessorFront instance.
     */
    protected function getPathProcessorFrontService()
    {
        $this->services['path_processor_front'] = $instance = new \Drupal\Core\PathProcessor\PathProcessorFront($this->get('config.factory'));

        $instance->_serviceId = 'path_processor_front';

        return $instance;
    }

    /**
     * Gets the 'path_processor_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\PathProcessor\PathProcessorManager A Drupal\Core\PathProcessor\PathProcessorManager instance.
     */
    protected function getPathProcessorManagerService()
    {
        $a = $this->get('path_processor_front');
        $b = $this->get('path_processor_alias');

        $this->services['path_processor_manager'] = $instance = new \Drupal\Core\PathProcessor\PathProcessorManager();

        $instance->addInbound($this->get('path_processor_decode'), 1000);
        $instance->addInbound($this->get('path_processor.image_styles'), 300);
        $instance->addInbound($a, 200);
        $instance->addInbound($this->get('path_processor.files'), 200);
        $instance->addInbound($b, 100);
        $instance->addOutbound($b, 300);
        $instance->addOutbound($a, 200);
        $instance->_serviceId = 'path_processor_manager';

        return $instance;
    }

    /**
     * Gets the 'path_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\PathSubscriber A Drupal\Core\EventSubscriber\PathSubscriber instance.
     */
    protected function getPathSubscriberService()
    {
        $this->services['path_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\PathSubscriber($this->get('path.alias_manager'), $this->get('path.current'));

        $instance->_serviceId = 'path_subscriber';

        return $instance;
    }

    /**
     * Gets the 'plugin.cache_clearer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Drupal\Core\Plugin\CachedDiscoveryClearer A Drupal\Core\Plugin\CachedDiscoveryClearer instance.
     */
    public function getPlugin_CacheClearerService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['plugin.cache_clearer'] = new Drupal_Core_Plugin_CachedDiscoveryClearer_Proxy($this, 'plugin.cache_clearer');
        }
        $instance = new \Drupal\Core\Plugin\CachedDiscoveryClearer();

        $instance->addCachedDiscovery($this->get('config.typed'));
        $instance->addCachedDiscovery($this->get('entity.manager'));
        $instance->addCachedDiscovery($this->get('plugin.manager.entity_reference_selection'));
        $instance->addCachedDiscovery($this->get('plugin.manager.block'));
        $instance->addCachedDiscovery($this->get('plugin.manager.field.field_type'));
        $instance->addCachedDiscovery($this->get('plugin.manager.field.widget'));
        $instance->addCachedDiscovery($this->get('plugin.manager.field.formatter'));
        $instance->addCachedDiscovery($this->get('plugin.manager.archiver'));
        $instance->addCachedDiscovery($this->get('plugin.manager.action'));
        $instance->addCachedDiscovery($this->get('plugin.manager.menu.local_action'));
        $instance->addCachedDiscovery($this->get('plugin.manager.menu.local_task'));
        $instance->addCachedDiscovery($this->get('plugin.manager.menu.contextual_link'));
        $instance->addCachedDiscovery($this->get('plugin.manager.display_variant'));
        $instance->addCachedDiscovery($this->get('plugin.manager.queue_worker'));
        $instance->addCachedDiscovery($this->get('typed_data_manager'));
        $instance->addCachedDiscovery($this->get('validation.constraint'));
        $instance->addCachedDiscovery($this->get('plugin.manager.mail'));
        $instance->addCachedDiscovery($this->get('plugin.manager.condition'));
        $instance->addCachedDiscovery($this->get('plugin.manager.element_info'));
        $instance->addCachedDiscovery($this->get('image.toolkit.manager'));
        $instance->addCachedDiscovery($this->get('image.toolkit.operation.manager'));
        $instance->addCachedDiscovery($this->get('breakpoint.manager'));
        $instance->addCachedDiscovery($this->get('plugin.manager.ckeditor.plugin'));
        $instance->addCachedDiscovery($this->get('plugin.manager.editor'));
        $instance->addCachedDiscovery($this->get('plugin.manager.filter'));
        $instance->addCachedDiscovery($this->get('plugin.manager.image.effect'));
        $instance->addCachedDiscovery($this->get('plugin.manager.quickedit.editor'));
        $instance->addCachedDiscovery($this->get('plugin.manager.rest'));
        $instance->addCachedDiscovery($this->get('plugin.manager.search'));
        $instance->addCachedDiscovery($this->get('plugin.manager.tour.tip'));
        $instance->addCachedDiscovery($this->get('plugin.manager.views.access'));
        $instance->addCachedDiscovery($this->get('plugin.manager.views.area'));
        $instance->addCachedDiscovery($this->get('plugin.manager.views.argument'));
        $instance->addCachedDiscovery($this->get('plugin.manager.views.argument_default'));
        $instance->addCachedDiscovery($this->get('plugin.manager.views.argument_validator'));
        $instance->addCachedDiscovery($this->get('plugin.manager.views.cache'));
        $instance->addCachedDiscovery($this->get('plugin.manager.views.display_extender'));
        $instance->addCachedDiscovery($this->get('plugin.manager.views.display'));
        $instance->addCachedDiscovery($this->get('plugin.manager.views.exposed_form'));
        $instance->addCachedDiscovery($this->get('plugin.manager.views.field'));
        $instance->addCachedDiscovery($this->get('plugin.manager.views.filter'));
        $instance->addCachedDiscovery($this->get('plugin.manager.views.join'));
        $instance->addCachedDiscovery($this->get('plugin.manager.views.pager'));
        $instance->addCachedDiscovery($this->get('plugin.manager.views.query'));
        $instance->addCachedDiscovery($this->get('plugin.manager.views.relationship'));
        $instance->addCachedDiscovery($this->get('plugin.manager.views.row'));
        $instance->addCachedDiscovery($this->get('plugin.manager.views.sort'));
        $instance->addCachedDiscovery($this->get('plugin.manager.views.style'));
        $instance->addCachedDiscovery($this->get('plugin.manager.views.wizard'));
        $instance->_serviceId = 'plugin.cache_clearer';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.action' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Action\ActionManager A Drupal\Core\Action\ActionManager instance.
     */
    protected function getPlugin_Manager_ActionService()
    {
        $this->services['plugin.manager.action'] = $instance = new \Drupal\Core\Action\ActionManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.action';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.archiver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Archiver\ArchiverManager A Drupal\Core\Archiver\ArchiverManager instance.
     */
    protected function getPlugin_Manager_ArchiverService()
    {
        $this->services['plugin.manager.archiver'] = $instance = new \Drupal\Core\Archiver\ArchiverManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.archiver';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.block' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Block\BlockManager A Drupal\Core\Block\BlockManager instance.
     */
    protected function getPlugin_Manager_BlockService()
    {
        $this->services['plugin.manager.block'] = $instance = new \Drupal\Core\Block\BlockManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.block';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.ckeditor.plugin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\ckeditor\CKEditorPluginManager A Drupal\ckeditor\CKEditorPluginManager instance.
     */
    protected function getPlugin_Manager_Ckeditor_PluginService()
    {
        $this->services['plugin.manager.ckeditor.plugin'] = $instance = new \Drupal\ckeditor\CKEditorPluginManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.ckeditor.plugin';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.condition' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Condition\ConditionManager A Drupal\Core\Condition\ConditionManager instance.
     */
    protected function getPlugin_Manager_ConditionService()
    {
        $this->services['plugin.manager.condition'] = $instance = new \Drupal\Core\Condition\ConditionManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.condition';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.display_variant' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Display\VariantManager A Drupal\Core\Display\VariantManager instance.
     */
    protected function getPlugin_Manager_DisplayVariantService()
    {
        $this->services['plugin.manager.display_variant'] = $instance = new \Drupal\Core\Display\VariantManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.display_variant';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.editor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\editor\Plugin\EditorManager A Drupal\editor\Plugin\EditorManager instance.
     */
    protected function getPlugin_Manager_EditorService()
    {
        $this->services['plugin.manager.editor'] = $instance = new \Drupal\editor\Plugin\EditorManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.editor';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.element_info' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Render\ElementInfoManager A Drupal\Core\Render\ElementInfoManager instance.
     */
    protected function getPlugin_Manager_ElementInfoService()
    {
        $this->services['plugin.manager.element_info'] = $instance = new \Drupal\Core\Render\ElementInfoManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('cache_tags.invalidator'), $this->get('module_handler'), $this->get('theme.manager'));

        $instance->_serviceId = 'plugin.manager.element_info';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.entity_reference_selection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Entity\EntityReferenceSelection\SelectionPluginManager A Drupal\Core\Entity\EntityReferenceSelection\SelectionPluginManager instance.
     */
    protected function getPlugin_Manager_EntityReferenceSelectionService()
    {
        $this->services['plugin.manager.entity_reference_selection'] = $instance = new \Drupal\Core\Entity\EntityReferenceSelection\SelectionPluginManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.entity_reference_selection';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.field.field_type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Field\FieldTypePluginManager A Drupal\Core\Field\FieldTypePluginManager instance.
     */
    protected function getPlugin_Manager_Field_FieldTypeService()
    {
        $this->services['plugin.manager.field.field_type'] = $instance = new \Drupal\Core\Field\FieldTypePluginManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'), $this->get('typed_data_manager'));

        $instance->_serviceId = 'plugin.manager.field.field_type';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.field.formatter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Field\FormatterPluginManager A Drupal\Core\Field\FormatterPluginManager instance.
     */
    protected function getPlugin_Manager_Field_FormatterService()
    {
        $this->services['plugin.manager.field.formatter'] = $instance = new \Drupal\Core\Field\FormatterPluginManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'), $this->get('plugin.manager.field.field_type'));

        $instance->_serviceId = 'plugin.manager.field.formatter';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.field.widget' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Field\WidgetPluginManager A Drupal\Core\Field\WidgetPluginManager instance.
     */
    protected function getPlugin_Manager_Field_WidgetService()
    {
        $this->services['plugin.manager.field.widget'] = $instance = new \Drupal\Core\Field\WidgetPluginManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'), $this->get('plugin.manager.field.field_type'));

        $instance->_serviceId = 'plugin.manager.field.widget';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.filter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\filter\FilterPluginManager A Drupal\filter\FilterPluginManager instance.
     */
    protected function getPlugin_Manager_FilterService()
    {
        $this->services['plugin.manager.filter'] = $instance = new \Drupal\filter\FilterPluginManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.filter';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.image.effect' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\image\ImageEffectManager A Drupal\image\ImageEffectManager instance.
     */
    protected function getPlugin_Manager_Image_EffectService()
    {
        $this->services['plugin.manager.image.effect'] = $instance = new \Drupal\image\ImageEffectManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.image.effect';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.mail' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Mail\MailManager A Drupal\Core\Mail\MailManager instance.
     */
    protected function getPlugin_Manager_MailService()
    {
        $this->services['plugin.manager.mail'] = $instance = new \Drupal\Core\Mail\MailManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'), $this->get('config.factory'), $this->get('logger.factory'), $this->get('string_translation'));

        $instance->_serviceId = 'plugin.manager.mail';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.menu.contextual_link' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Menu\ContextualLinkManager A Drupal\Core\Menu\ContextualLinkManager instance.
     */
    protected function getPlugin_Manager_Menu_ContextualLinkService()
    {
        $this->services['plugin.manager.menu.contextual_link'] = $instance = new \Drupal\Core\Menu\ContextualLinkManager($this->get('controller_resolver'), $this->get('module_handler'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('access_manager'), $this->get('current_user'), $this->get('request_stack'));

        $instance->_serviceId = 'plugin.manager.menu.contextual_link';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.menu.link' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Menu\MenuLinkManager A Drupal\Core\Menu\MenuLinkManager instance.
     */
    protected function getPlugin_Manager_Menu_LinkService()
    {
        $this->services['plugin.manager.menu.link'] = $instance = new \Drupal\Core\Menu\MenuLinkManager($this->get('menu.tree_storage'), $this->get('menu_link.static.overrides'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.menu.link';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.menu.local_action' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Menu\LocalActionManager A Drupal\Core\Menu\LocalActionManager instance.
     */
    protected function getPlugin_Manager_Menu_LocalActionService()
    {
        $this->services['plugin.manager.menu.local_action'] = $instance = new \Drupal\Core\Menu\LocalActionManager($this->get('controller_resolver'), $this->get('request_stack'), $this->get('current_route_match'), $this->get('router.route_provider'), $this->get('module_handler'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('access_manager'), $this->get('current_user'));

        $instance->_serviceId = 'plugin.manager.menu.local_action';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.menu.local_task' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Menu\LocalTaskManager A Drupal\Core\Menu\LocalTaskManager instance.
     */
    protected function getPlugin_Manager_Menu_LocalTaskService()
    {
        $this->services['plugin.manager.menu.local_task'] = $instance = new \Drupal\Core\Menu\LocalTaskManager($this->get('controller_resolver'), $this->get('request_stack'), $this->get('current_route_match'), $this->get('router.route_provider'), $this->get('module_handler'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('access_manager'), $this->get('current_user'));

        $instance->_serviceId = 'plugin.manager.menu.local_task';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.queue_worker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Queue\QueueWorkerManager A Drupal\Core\Queue\QueueWorkerManager instance.
     */
    protected function getPlugin_Manager_QueueWorkerService()
    {
        $this->services['plugin.manager.queue_worker'] = $instance = new \Drupal\Core\Queue\QueueWorkerManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.queue_worker';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.quickedit.editor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\quickedit\Plugin\InPlaceEditorManager A Drupal\quickedit\Plugin\InPlaceEditorManager instance.
     */
    protected function getPlugin_Manager_Quickedit_EditorService()
    {
        $this->services['plugin.manager.quickedit.editor'] = $instance = new \Drupal\quickedit\Plugin\InPlaceEditorManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.quickedit.editor';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.rest' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\rest\Plugin\Type\ResourcePluginManager A Drupal\rest\Plugin\Type\ResourcePluginManager instance.
     */
    protected function getPlugin_Manager_RestService()
    {
        $this->services['plugin.manager.rest'] = $instance = new \Drupal\rest\Plugin\Type\ResourcePluginManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.rest';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.search' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\search\SearchPluginManager A Drupal\search\SearchPluginManager instance.
     */
    protected function getPlugin_Manager_SearchService()
    {
        $this->services['plugin.manager.search'] = $instance = new \Drupal\search\SearchPluginManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.search';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.tour.tip' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\tour\TipPluginManager A Drupal\tour\TipPluginManager instance.
     */
    protected function getPlugin_Manager_Tour_TipService()
    {
        $this->services['plugin.manager.tour.tip'] = $instance = new \Drupal\tour\TipPluginManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.tour.tip';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.views.access' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\views\Plugin\ViewsPluginManager A Drupal\views\Plugin\ViewsPluginManager instance.
     */
    protected function getPlugin_Manager_Views_AccessService()
    {
        $this->services['plugin.manager.views.access'] = $instance = new \Drupal\views\Plugin\ViewsPluginManager('access', $this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.views.access';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.views.area' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\views\Plugin\ViewsHandlerManager A Drupal\views\Plugin\ViewsHandlerManager instance.
     */
    protected function getPlugin_Manager_Views_AreaService()
    {
        $this->services['plugin.manager.views.area'] = $instance = new \Drupal\views\Plugin\ViewsHandlerManager('area', $this->get('container.namespaces'), $this->get('views.views_data'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.views.area';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.views.argument' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\views\Plugin\ViewsHandlerManager A Drupal\views\Plugin\ViewsHandlerManager instance.
     */
    protected function getPlugin_Manager_Views_ArgumentService()
    {
        $this->services['plugin.manager.views.argument'] = $instance = new \Drupal\views\Plugin\ViewsHandlerManager('argument', $this->get('container.namespaces'), $this->get('views.views_data'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.views.argument';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.views.argument_default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\views\Plugin\ViewsPluginManager A Drupal\views\Plugin\ViewsPluginManager instance.
     */
    protected function getPlugin_Manager_Views_ArgumentDefaultService()
    {
        $this->services['plugin.manager.views.argument_default'] = $instance = new \Drupal\views\Plugin\ViewsPluginManager('argument_default', $this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.views.argument_default';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.views.argument_validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\views\Plugin\ViewsPluginManager A Drupal\views\Plugin\ViewsPluginManager instance.
     */
    protected function getPlugin_Manager_Views_ArgumentValidatorService()
    {
        $this->services['plugin.manager.views.argument_validator'] = $instance = new \Drupal\views\Plugin\ViewsPluginManager('argument_validator', $this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.views.argument_validator';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.views.cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\views\Plugin\ViewsPluginManager A Drupal\views\Plugin\ViewsPluginManager instance.
     */
    protected function getPlugin_Manager_Views_CacheService()
    {
        $this->services['plugin.manager.views.cache'] = $instance = new \Drupal\views\Plugin\ViewsPluginManager('cache', $this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.views.cache';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.views.display' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\views\Plugin\ViewsPluginManager A Drupal\views\Plugin\ViewsPluginManager instance.
     */
    protected function getPlugin_Manager_Views_DisplayService()
    {
        $this->services['plugin.manager.views.display'] = $instance = new \Drupal\views\Plugin\ViewsPluginManager('display', $this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.views.display';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.views.display_extender' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\views\Plugin\ViewsPluginManager A Drupal\views\Plugin\ViewsPluginManager instance.
     */
    protected function getPlugin_Manager_Views_DisplayExtenderService()
    {
        $this->services['plugin.manager.views.display_extender'] = $instance = new \Drupal\views\Plugin\ViewsPluginManager('display_extender', $this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.views.display_extender';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.views.exposed_form' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\views\Plugin\ViewsPluginManager A Drupal\views\Plugin\ViewsPluginManager instance.
     */
    protected function getPlugin_Manager_Views_ExposedFormService()
    {
        $this->services['plugin.manager.views.exposed_form'] = $instance = new \Drupal\views\Plugin\ViewsPluginManager('exposed_form', $this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.views.exposed_form';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.views.field' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\views\Plugin\ViewsHandlerManager A Drupal\views\Plugin\ViewsHandlerManager instance.
     */
    protected function getPlugin_Manager_Views_FieldService()
    {
        $this->services['plugin.manager.views.field'] = $instance = new \Drupal\views\Plugin\ViewsHandlerManager('field', $this->get('container.namespaces'), $this->get('views.views_data'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.views.field';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.views.filter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\views\Plugin\ViewsHandlerManager A Drupal\views\Plugin\ViewsHandlerManager instance.
     */
    protected function getPlugin_Manager_Views_FilterService()
    {
        $this->services['plugin.manager.views.filter'] = $instance = new \Drupal\views\Plugin\ViewsHandlerManager('filter', $this->get('container.namespaces'), $this->get('views.views_data'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.views.filter';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.views.join' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\views\Plugin\ViewsHandlerManager A Drupal\views\Plugin\ViewsHandlerManager instance.
     */
    protected function getPlugin_Manager_Views_JoinService()
    {
        $this->services['plugin.manager.views.join'] = $instance = new \Drupal\views\Plugin\ViewsHandlerManager('join', $this->get('container.namespaces'), $this->get('views.views_data'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.views.join';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.views.pager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\views\Plugin\ViewsPluginManager A Drupal\views\Plugin\ViewsPluginManager instance.
     */
    protected function getPlugin_Manager_Views_PagerService()
    {
        $this->services['plugin.manager.views.pager'] = $instance = new \Drupal\views\Plugin\ViewsPluginManager('pager', $this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.views.pager';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.views.query' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\views\Plugin\ViewsPluginManager A Drupal\views\Plugin\ViewsPluginManager instance.
     */
    protected function getPlugin_Manager_Views_QueryService()
    {
        $this->services['plugin.manager.views.query'] = $instance = new \Drupal\views\Plugin\ViewsPluginManager('query', $this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.views.query';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.views.relationship' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\views\Plugin\ViewsHandlerManager A Drupal\views\Plugin\ViewsHandlerManager instance.
     */
    protected function getPlugin_Manager_Views_RelationshipService()
    {
        $this->services['plugin.manager.views.relationship'] = $instance = new \Drupal\views\Plugin\ViewsHandlerManager('relationship', $this->get('container.namespaces'), $this->get('views.views_data'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.views.relationship';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.views.row' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\views\Plugin\ViewsPluginManager A Drupal\views\Plugin\ViewsPluginManager instance.
     */
    protected function getPlugin_Manager_Views_RowService()
    {
        $this->services['plugin.manager.views.row'] = $instance = new \Drupal\views\Plugin\ViewsPluginManager('row', $this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.views.row';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.views.sort' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\views\Plugin\ViewsHandlerManager A Drupal\views\Plugin\ViewsHandlerManager instance.
     */
    protected function getPlugin_Manager_Views_SortService()
    {
        $this->services['plugin.manager.views.sort'] = $instance = new \Drupal\views\Plugin\ViewsHandlerManager('sort', $this->get('container.namespaces'), $this->get('views.views_data'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.views.sort';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.views.style' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\views\Plugin\ViewsPluginManager A Drupal\views\Plugin\ViewsPluginManager instance.
     */
    protected function getPlugin_Manager_Views_StyleService()
    {
        $this->services['plugin.manager.views.style'] = $instance = new \Drupal\views\Plugin\ViewsPluginManager('style', $this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.views.style';

        return $instance;
    }

    /**
     * Gets the 'plugin.manager.views.wizard' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\views\Plugin\ViewsPluginManager A Drupal\views\Plugin\ViewsPluginManager instance.
     */
    protected function getPlugin_Manager_Views_WizardService()
    {
        $this->services['plugin.manager.views.wizard'] = $instance = new \Drupal\views\Plugin\ViewsPluginManager('wizard', $this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'plugin.manager.views.wizard';

        return $instance;
    }

    /**
     * Gets the 'private_key' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\PrivateKey A Drupal\Core\PrivateKey instance.
     */
    protected function getPrivateKeyService()
    {
        $this->services['private_key'] = $instance = new \Drupal\Core\PrivateKey($this->get('state'));

        $instance->_serviceId = 'private_key';

        return $instance;
    }

    /**
     * Gets the 'queue' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Queue\QueueFactory A Drupal\Core\Queue\QueueFactory instance.
     */
    protected function getQueueService()
    {
        $this->services['queue'] = $instance = new \Drupal\Core\Queue\QueueFactory($this->get('settings'));

        $instance->setContainer($this);
        $instance->_serviceId = 'queue';

        return $instance;
    }

    /**
     * Gets the 'queue.database' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Queue\QueueDatabaseFactory A Drupal\Core\Queue\QueueDatabaseFactory instance.
     */
    protected function getQueue_DatabaseService()
    {
        $this->services['queue.database'] = $instance = new \Drupal\Core\Queue\QueueDatabaseFactory($this->get('database'));

        $instance->_serviceId = 'queue.database';

        return $instance;
    }

    /**
     * Gets the 'quickedit.editor.selector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\quickedit\EditorSelector A Drupal\quickedit\EditorSelector instance.
     */
    protected function getQuickedit_Editor_SelectorService()
    {
        $this->services['quickedit.editor.selector'] = $instance = new \Drupal\quickedit\EditorSelector($this->get('plugin.manager.quickedit.editor'), $this->get('plugin.manager.field.formatter'));

        $instance->_serviceId = 'quickedit.editor.selector';

        return $instance;
    }

    /**
     * Gets the 'quickedit.metadata.generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\quickedit\MetadataGenerator A Drupal\quickedit\MetadataGenerator instance.
     */
    protected function getQuickedit_Metadata_GeneratorService()
    {
        $this->services['quickedit.metadata.generator'] = $instance = new \Drupal\quickedit\MetadataGenerator($this->get('access_check.quickedit.entity_field'), $this->get('quickedit.editor.selector'), $this->get('plugin.manager.quickedit.editor'));

        $instance->_serviceId = 'quickedit.metadata.generator';

        return $instance;
    }

    /**
     * Gets the 'redirect.destination' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Routing\RedirectDestination A Drupal\Core\Routing\RedirectDestination instance.
     */
    protected function getRedirect_DestinationService()
    {
        $this->services['redirect.destination'] = $instance = new \Drupal\Core\Routing\RedirectDestination($this->get('request_stack'), $this->get('url_generator'));

        $instance->_serviceId = 'redirect.destination';

        return $instance;
    }

    /**
     * Gets the 'redirect_response_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\RedirectResponseSubscriber A Drupal\Core\EventSubscriber\RedirectResponseSubscriber instance.
     */
    protected function getRedirectResponseSubscriberService()
    {
        $this->services['redirect_response_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\RedirectResponseSubscriber($this->get('url_generator'), $this->get('router.request_context'));

        $instance->_serviceId = 'redirect_response_subscriber';

        return $instance;
    }

    /**
     * Gets the 'render_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Render\RenderCache A Drupal\Core\Render\RenderCache instance.
     */
    protected function getRenderCacheService()
    {
        $this->services['render_cache'] = $instance = new \Drupal\Core\Render\RenderCache($this->get('request_stack'), $this->get('cache_factory'), $this->get('cache_contexts_manager'));

        $instance->_serviceId = 'render_cache';

        return $instance;
    }

    /**
     * Gets the 'renderer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Render\Renderer A Drupal\Core\Render\Renderer instance.
     */
    protected function getRendererService()
    {
        $this->services['renderer'] = $instance = new \Drupal\Core\Render\Renderer($this->get('controller_resolver'), $this->get('theme.manager'), $this->get('plugin.manager.element_info'), $this->get('render_cache'), array('required_cache_contexts' => array(0 => 'languages:language_interface', 1 => 'theme')));

        $instance->_serviceId = 'renderer';

        return $instance;
    }

    /**
     * Gets the 'replica_database_ignore__subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\ReplicaDatabaseIgnoreSubscriber A Drupal\Core\EventSubscriber\ReplicaDatabaseIgnoreSubscriber instance.
     */
    protected function getReplicaDatabaseIgnoreSubscriberService()
    {
        $this->services['replica_database_ignore__subscriber'] = $instance = new \Drupal\Core\EventSubscriber\ReplicaDatabaseIgnoreSubscriber();

        $instance->_serviceId = 'replica_database_ignore__subscriber';

        return $instance;
    }

    /**
     * Gets the 'request_close_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\RequestCloseSubscriber A Drupal\Core\EventSubscriber\RequestCloseSubscriber instance.
     */
    protected function getRequestCloseSubscriberService()
    {
        $this->services['request_close_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\RequestCloseSubscriber($this->get('module_handler'));

        $instance->_serviceId = 'request_close_subscriber';

        return $instance;
    }

    /**
     * Gets the 'request_format_route_filter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Routing\RequestFormatRouteFilter A Drupal\Core\Routing\RequestFormatRouteFilter instance.
     */
    protected function getRequestFormatRouteFilterService()
    {
        $this->services['request_format_route_filter'] = $instance = new \Drupal\Core\Routing\RequestFormatRouteFilter();

        $instance->_serviceId = 'request_format_route_filter';

        return $instance;
    }

    /**
     * Gets the 'request_stack' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack A Symfony\Component\HttpFoundation\RequestStack instance.
     */
    protected function getRequestStackService()
    {
        $this->services['request_stack'] = $instance = new \Symfony\Component\HttpFoundation\RequestStack();

        $instance->_serviceId = 'request_stack';

        return $instance;
    }

    /**
     * Gets the 'required_module_uninstall_validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Drupal\Core\Extension\RequiredModuleUninstallValidator A Drupal\Core\Extension\RequiredModuleUninstallValidator instance.
     */
    public function getRequiredModuleUninstallValidatorService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['required_module_uninstall_validator'] = new Drupal_Core_Extension_RequiredModuleUninstallValidator_Proxy($this, 'required_module_uninstall_validator');
        }
        $instance = new \Drupal\Core\Extension\RequiredModuleUninstallValidator($this->get('string_translation'));

        $instance->_serviceId = 'required_module_uninstall_validator';

        return $instance;
    }

    /**
     * Gets the 'resolver_manager.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Entity\EntityResolverManager A Drupal\Core\Entity\EntityResolverManager instance.
     */
    protected function getResolverManager_EntityService()
    {
        $this->services['resolver_manager.entity'] = $instance = new \Drupal\Core\Entity\EntityResolverManager($this->get('entity.manager'), $this->get('class_resolver'));

        $instance->_serviceId = 'resolver_manager.entity';

        return $instance;
    }

    /**
     * Gets the 'response_filter.active_link' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\ActiveLinkResponseFilter A Drupal\Core\EventSubscriber\ActiveLinkResponseFilter instance.
     */
    protected function getResponseFilter_ActiveLinkService()
    {
        $this->services['response_filter.active_link'] = $instance = new \Drupal\Core\EventSubscriber\ActiveLinkResponseFilter($this->get('current_user'), $this->get('path.current'), $this->get('path.matcher'), $this->get('language_manager'));

        $instance->_serviceId = 'response_filter.active_link';

        return $instance;
    }

    /**
     * Gets the 'response_generator_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\ResponseGeneratorSubscriber A Drupal\Core\EventSubscriber\ResponseGeneratorSubscriber instance.
     */
    protected function getResponseGeneratorSubscriberService()
    {
        $this->services['response_generator_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\ResponseGeneratorSubscriber();

        $instance->_serviceId = 'response_generator_subscriber';

        return $instance;
    }

    /**
     * Gets the 'rest.link_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\rest\LinkManager\LinkManager A Drupal\rest\LinkManager\LinkManager instance.
     */
    protected function getRest_LinkManagerService()
    {
        $this->services['rest.link_manager'] = $instance = new \Drupal\rest\LinkManager\LinkManager($this->get('rest.link_manager.type'), $this->get('rest.link_manager.relation'));

        $instance->_serviceId = 'rest.link_manager';

        return $instance;
    }

    /**
     * Gets the 'rest.link_manager.relation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\rest\LinkManager\RelationLinkManager A Drupal\rest\LinkManager\RelationLinkManager instance.
     */
    protected function getRest_LinkManager_RelationService()
    {
        $this->services['rest.link_manager.relation'] = $instance = new \Drupal\rest\LinkManager\RelationLinkManager($this->get('cache.default'), $this->get('entity.manager'), $this->get('module_handler'), $this->get('config.factory'), $this->get('request_stack'));

        $instance->_serviceId = 'rest.link_manager.relation';

        return $instance;
    }

    /**
     * Gets the 'rest.link_manager.type' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\rest\LinkManager\TypeLinkManager A Drupal\rest\LinkManager\TypeLinkManager instance.
     */
    protected function getRest_LinkManager_TypeService()
    {
        $this->services['rest.link_manager.type'] = $instance = new \Drupal\rest\LinkManager\TypeLinkManager($this->get('cache.default'), $this->get('module_handler'), $this->get('config.factory'), $this->get('request_stack'));

        $instance->_serviceId = 'rest.link_manager.type';

        return $instance;
    }

    /**
     * Gets the 'rest.resource_routes' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\rest\Routing\ResourceRoutes A Drupal\rest\Routing\ResourceRoutes instance.
     */
    protected function getRest_ResourceRoutesService()
    {
        $this->services['rest.resource_routes'] = $instance = new \Drupal\rest\Routing\ResourceRoutes($this->get('plugin.manager.rest'), $this->get('config.factory'), $this->get('logger.channel.rest'));

        $instance->_serviceId = 'rest.resource_routes';

        return $instance;
    }

    /**
     * Gets the 'route_access_response_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\RouteAccessResponseSubscriber A Drupal\Core\EventSubscriber\RouteAccessResponseSubscriber instance.
     */
    protected function getRouteAccessResponseSubscriberService()
    {
        $this->services['route_access_response_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\RouteAccessResponseSubscriber();

        $instance->_serviceId = 'route_access_response_subscriber';

        return $instance;
    }

    /**
     * Gets the 'route_content_controller_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\ContentControllerSubscriber A Drupal\Core\EventSubscriber\ContentControllerSubscriber instance.
     */
    protected function getRouteContentControllerSubscriberService()
    {
        $this->services['route_content_controller_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\ContentControllerSubscriber();

        $instance->_serviceId = 'route_content_controller_subscriber';

        return $instance;
    }

    /**
     * Gets the 'route_enhancer.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Entity\Enhancer\EntityRouteEnhancer A Drupal\Core\Entity\Enhancer\EntityRouteEnhancer instance.
     */
    protected function getRouteEnhancer_EntityService()
    {
        $this->services['route_enhancer.entity'] = $instance = new \Drupal\Core\Entity\Enhancer\EntityRouteEnhancer();

        $instance->_serviceId = 'route_enhancer.entity';

        return $instance;
    }

    /**
     * Gets the 'route_enhancer.lazy_collector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Routing\LazyRouteEnhancer A Drupal\Core\Routing\LazyRouteEnhancer instance.
     */
    protected function getRouteEnhancer_LazyCollectorService()
    {
        $this->services['route_enhancer.lazy_collector'] = $instance = new \Drupal\Core\Routing\LazyRouteEnhancer(array('route_enhancer.param_conversion' => 'route_enhancer.param_conversion', 'route_enhancer.entity' => 'route_enhancer.entity', 'field_ui.route_enhancer' => 'field_ui.route_enhancer'));

        $instance->setContainer($this);
        $instance->_serviceId = 'route_enhancer.lazy_collector';

        return $instance;
    }

    /**
     * Gets the 'route_enhancer.param_conversion' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Routing\Enhancer\ParamConversionEnhancer A Drupal\Core\Routing\Enhancer\ParamConversionEnhancer instance.
     */
    protected function getRouteEnhancer_ParamConversionService()
    {
        $this->services['route_enhancer.param_conversion'] = $instance = new \Drupal\Core\Routing\Enhancer\ParamConversionEnhancer($this->get('paramconverter_manager'));

        $instance->_serviceId = 'route_enhancer.param_conversion';

        return $instance;
    }

    /**
     * Gets the 'route_enhancer_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\RouteEnhancerSubscriber A Drupal\Core\EventSubscriber\RouteEnhancerSubscriber instance.
     */
    protected function getRouteEnhancerSubscriberService()
    {
        $this->services['route_enhancer_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\RouteEnhancerSubscriber($this->get('route_enhancer.lazy_collector'));

        $instance->_serviceId = 'route_enhancer_subscriber';

        return $instance;
    }

    /**
     * Gets the 'route_filter.lazy_collector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Routing\LazyRouteFilter A Drupal\Core\Routing\LazyRouteFilter instance.
     */
    protected function getRouteFilter_LazyCollectorService()
    {
        $this->services['route_filter.lazy_collector'] = $instance = new \Drupal\Core\Routing\LazyRouteFilter(array('request_format_route_filter' => 'request_format_route_filter', 'content_type_header_matcher' => 'content_type_header_matcher'));

        $instance->setContainer($this);
        $instance->_serviceId = 'route_filter.lazy_collector';

        return $instance;
    }

    /**
     * Gets the 'route_filter_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\RouteFilterSubscriber A Drupal\Core\EventSubscriber\RouteFilterSubscriber instance.
     */
    protected function getRouteFilterSubscriberService()
    {
        $this->services['route_filter_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\RouteFilterSubscriber($this->get('route_filter.lazy_collector'));

        $instance->_serviceId = 'route_filter_subscriber';

        return $instance;
    }

    /**
     * Gets the 'route_http_method_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\RouteMethodSubscriber A Drupal\Core\EventSubscriber\RouteMethodSubscriber instance.
     */
    protected function getRouteHttpMethodSubscriberService()
    {
        $this->services['route_http_method_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\RouteMethodSubscriber();

        $instance->_serviceId = 'route_http_method_subscriber';

        return $instance;
    }

    /**
     * Gets the 'route_processor_csrf' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Access\RouteProcessorCsrf A Drupal\Core\Access\RouteProcessorCsrf instance.
     */
    protected function getRouteProcessorCsrfService()
    {
        $this->services['route_processor_csrf'] = $instance = new \Drupal\Core\Access\RouteProcessorCsrf($this->get('csrf_token'));

        $instance->_serviceId = 'route_processor_csrf';

        return $instance;
    }

    /**
     * Gets the 'route_processor_current' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\RouteProcessor\RouteProcessorCurrent A Drupal\Core\RouteProcessor\RouteProcessorCurrent instance.
     */
    protected function getRouteProcessorCurrentService()
    {
        $this->services['route_processor_current'] = $instance = new \Drupal\Core\RouteProcessor\RouteProcessorCurrent($this->get('current_route_match'));

        $instance->_serviceId = 'route_processor_current';

        return $instance;
    }

    /**
     * Gets the 'route_processor_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\RouteProcessor\RouteProcessorManager A Drupal\Core\RouteProcessor\RouteProcessorManager instance.
     */
    protected function getRouteProcessorManagerService()
    {
        $this->services['route_processor_manager'] = $instance = new \Drupal\Core\RouteProcessor\RouteProcessorManager();

        $instance->addOutbound($this->get('route_processor_current'), 200);
        $instance->addOutbound($this->get('route_processor_csrf'), 0);
        $instance->_serviceId = 'route_processor_manager';

        return $instance;
    }

    /**
     * Gets the 'route_special_attributes_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\SpecialAttributesRouteSubscriber A Drupal\Core\EventSubscriber\SpecialAttributesRouteSubscriber instance.
     */
    protected function getRouteSpecialAttributesSubscriberService()
    {
        $this->services['route_special_attributes_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\SpecialAttributesRouteSubscriber();

        $instance->_serviceId = 'route_special_attributes_subscriber';

        return $instance;
    }

    /**
     * Gets the 'route_subscriber.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\EntityRouteAlterSubscriber A Drupal\Core\EventSubscriber\EntityRouteAlterSubscriber instance.
     */
    protected function getRouteSubscriber_EntityService()
    {
        $this->services['route_subscriber.entity'] = $instance = new \Drupal\Core\EventSubscriber\EntityRouteAlterSubscriber($this->get('resolver_manager.entity'));

        $instance->_serviceId = 'route_subscriber.entity';

        return $instance;
    }

    /**
     * Gets the 'route_subscriber.module' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\ModuleRouteSubscriber A Drupal\Core\EventSubscriber\ModuleRouteSubscriber instance.
     */
    protected function getRouteSubscriber_ModuleService()
    {
        $this->services['route_subscriber.module'] = $instance = new \Drupal\Core\EventSubscriber\ModuleRouteSubscriber($this->get('module_handler'));

        $instance->_serviceId = 'route_subscriber.module';

        return $instance;
    }

    /**
     * Gets the 'router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Routing\AccessAwareRouter A Drupal\Core\Routing\AccessAwareRouter instance.
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Drupal\Core\Routing\AccessAwareRouter($this->get('router.no_access_checks'), $this->get('access_manager'), $this->get('current_user'));

        $instance->_serviceId = 'router';

        return $instance;
    }

    /**
     * Gets the 'router.admin_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Routing\AdminContext A Drupal\Core\Routing\AdminContext instance.
     */
    protected function getRouter_AdminContextService()
    {
        $this->services['router.admin_context'] = $instance = new \Drupal\Core\Routing\AdminContext($this->get('current_route_match'));

        $instance->_serviceId = 'router.admin_context';

        return $instance;
    }

    /**
     * Gets the 'router.builder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Drupal\Core\Routing\RouteBuilder A Drupal\Core\Routing\RouteBuilder instance.
     */
    public function getRouter_BuilderService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['router.builder'] = new Drupal_Core_Routing_RouteBuilder_Proxy($this, 'router.builder');
        }
        $instance = new \Drupal\Core\Routing\RouteBuilder($this->get('router.dumper'), $this->get('lock'), $this->get('event_dispatcher'), $this->get('module_handler'), $this->get('controller_resolver'), $this->get('access_manager.check_provider'));

        $instance->_serviceId = 'router.builder';

        return $instance;
    }

    /**
     * Gets the 'router.dumper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @param bool    $lazyLoad whether to try lazy-loading the service with a proxy
     *
     * @return \Drupal\Core\Routing\MatcherDumper A Drupal\Core\Routing\MatcherDumper instance.
     */
    public function getRouter_DumperService($lazyLoad = true)
    {
        if ($lazyLoad) {
            return $this->services['router.dumper'] = new Drupal_Core_Routing_MatcherDumper_Proxy($this, 'router.dumper');
        }
        $instance = new \Drupal\Core\Routing\MatcherDumper($this->get('database'), $this->get('state'));

        $instance->_serviceId = 'router.dumper';

        return $instance;
    }

    /**
     * Gets the 'router.dynamic' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Component\Routing\DynamicRouter A Symfony\Cmf\Component\Routing\DynamicRouter instance.
     */
    protected function getRouter_DynamicService()
    {
        $this->services['router.dynamic'] = $instance = new \Symfony\Cmf\Component\Routing\DynamicRouter($this->get('router.request_context'), $this->get('router.matcher'), $this->get('url_generator'));

        $instance->addRouteEnhancer($this->get('route_enhancer.lazy_collector'), 5000);
        $instance->_serviceId = 'router.dynamic';

        return $instance;
    }

    /**
     * Gets the 'router.matcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Component\Routing\NestedMatcher\NestedMatcher A Symfony\Cmf\Component\Routing\NestedMatcher\NestedMatcher instance.
     */
    protected function getRouter_MatcherService()
    {
        $this->services['router.matcher'] = $instance = new \Symfony\Cmf\Component\Routing\NestedMatcher\NestedMatcher($this->get('router.route_provider'));

        $instance->setFinalMatcher($this->get('router.matcher.final_matcher'));
        $instance->addRouteFilter($this->get('route_filter.lazy_collector'), 0);
        $instance->_serviceId = 'router.matcher';

        return $instance;
    }

    /**
     * Gets the 'router.matcher.final_matcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Routing\UrlMatcher A Drupal\Core\Routing\UrlMatcher instance.
     */
    protected function getRouter_Matcher_FinalMatcherService()
    {
        $this->services['router.matcher.final_matcher'] = $instance = new \Drupal\Core\Routing\UrlMatcher($this->get('path.current'));

        $instance->_serviceId = 'router.matcher.final_matcher';

        return $instance;
    }

    /**
     * Gets the 'router.no_access_checks' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Cmf\Component\Routing\ChainRouter A Symfony\Cmf\Component\Routing\ChainRouter instance.
     */
    protected function getRouter_NoAccessChecksService()
    {
        $this->services['router.no_access_checks'] = $instance = new \Symfony\Cmf\Component\Routing\ChainRouter();

        $instance->setContext($this->get('router.request_context'));
        $instance->add($this->get('router.dynamic'));
        $instance->_serviceId = 'router.no_access_checks';

        return $instance;
    }

    /**
     * Gets the 'router.path_roots_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\EventSubscriber\PathRootsSubscriber A Drupal\Core\EventSubscriber\PathRootsSubscriber instance.
     */
    protected function getRouter_PathRootsSubscriberService()
    {
        $this->services['router.path_roots_subscriber'] = $instance = new \Drupal\Core\EventSubscriber\PathRootsSubscriber($this->get('state'));

        $instance->_serviceId = 'router.path_roots_subscriber';

        return $instance;
    }

    /**
     * Gets the 'router.request_context' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Routing\RequestContext A Drupal\Core\Routing\RequestContext instance.
     */
    protected function getRouter_RequestContextService()
    {
        $this->services['router.request_context'] = $instance = new \Drupal\Core\Routing\RequestContext();

        $instance->fromRequestStack($this->get('request_stack'));
        $instance->_serviceId = 'router.request_context';

        return $instance;
    }

    /**
     * Gets the 'router.route_preloader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Routing\RoutePreloader A Drupal\Core\Routing\RoutePreloader instance.
     */
    protected function getRouter_RoutePreloaderService()
    {
        $this->services['router.route_preloader'] = $instance = new \Drupal\Core\Routing\RoutePreloader($this->get('router.route_provider'), $this->get('state'));

        $instance->_serviceId = 'router.route_preloader';

        return $instance;
    }

    /**
     * Gets the 'router.route_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Routing\RouteProvider A Drupal\Core\Routing\RouteProvider instance.
     */
    protected function getRouter_RouteProviderService()
    {
        $this->services['router.route_provider'] = $instance = new \Drupal\Core\Routing\RouteProvider($this->get('database'), $this->get('state'), $this->get('path.current'), $this->get('cache.data'), $this->get('path_processor_manager'));

        $instance->_serviceId = 'router.route_provider';

        return $instance;
    }

    /**
     * Gets the 'router_listener' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener A Symfony\Component\HttpKernel\EventListener\RouterListener instance.
     */
    protected function getRouterListenerService()
    {
        $this->services['router_listener'] = $instance = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('router'), $this->get('router.request_context'), NULL, $this->get('request_stack'));

        $instance->_serviceId = 'router_listener';

        return $instance;
    }

    /**
     * Gets the 'search.search_page_repository' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\search\SearchPageRepository A Drupal\search\SearchPageRepository instance.
     */
    protected function getSearch_SearchPageRepositoryService()
    {
        $this->services['search.search_page_repository'] = $instance = new \Drupal\search\SearchPageRepository($this->get('config.factory'), $this->get('entity.manager'));

        $instance->_serviceId = 'search.search_page_repository';

        return $instance;
    }

    /**
     * Gets the 'serialization.entity_resolver.target_id' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\serialization\EntityResolver\TargetIdResolver A Drupal\serialization\EntityResolver\TargetIdResolver instance.
     */
    protected function getSerialization_EntityResolver_TargetIdService()
    {
        $this->services['serialization.entity_resolver.target_id'] = $instance = new \Drupal\serialization\EntityResolver\TargetIdResolver();

        $instance->_serviceId = 'serialization.entity_resolver.target_id';

        return $instance;
    }

    /**
     * Gets the 'serialization.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Component\Serialization\Json A Drupal\Component\Serialization\Json instance.
     */
    protected function getSerialization_JsonService()
    {
        $this->services['serialization.json'] = $instance = new \Drupal\Component\Serialization\Json();

        $instance->_serviceId = 'serialization.json';

        return $instance;
    }

    /**
     * Gets the 'serialization.phpserialize' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Component\Serialization\PhpSerialize A Drupal\Component\Serialization\PhpSerialize instance.
     */
    protected function getSerialization_PhpserializeService()
    {
        $this->services['serialization.phpserialize'] = $instance = new \Drupal\Component\Serialization\PhpSerialize();

        $instance->_serviceId = 'serialization.phpserialize';

        return $instance;
    }

    /**
     * Gets the 'serialization.yaml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Component\Serialization\Yaml A Drupal\Component\Serialization\Yaml instance.
     */
    protected function getSerialization_YamlService()
    {
        $this->services['serialization.yaml'] = $instance = new \Drupal\Component\Serialization\Yaml();

        $instance->_serviceId = 'serialization.yaml';

        return $instance;
    }

    /**
     * Gets the 'serializer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\Serializer\Serializer A Symfony\Component\Serializer\Serializer instance.
     */
    protected function getSerializerService()
    {
        $this->services['serializer'] = $instance = new \Symfony\Component\Serializer\Serializer(array(0 => $this->get('serializer.normalizer.file_entity.hal'), 1 => $this->get('serializer.normalizer.password_field_item'), 2 => $this->get('serializer.normalizer.entity_reference_item.hal'), 3 => $this->get('serializer.normalizer.field_item.hal'), 4 => $this->get('serializer.normalizer.field.hal'), 5 => $this->get('serializer.normalizer.entity.hal'), 6 => $this->get('serializer.normalizer.config_entity'), 7 => $this->get('serializer.normalizer.content_entity'), 8 => $this->get('serializer.normalizer.entity'), 9 => $this->get('serializer.normalizer.complex_data'), 10 => $this->get('serializer.normalizer.list'), 11 => $this->get('serializer.normalizer.typed_data')), array(0 => $this->get('serializer.encoder.hal'), 1 => $this->get('serializer.encoder.json'), 2 => $this->get('serializer.encoder.xml')));

        $instance->_serviceId = 'serializer';

        return $instance;
    }

    /**
     * Gets the 'serializer.encoder.hal' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\hal\Encoder\JsonEncoder A Drupal\hal\Encoder\JsonEncoder instance.
     */
    protected function getSerializer_Encoder_HalService()
    {
        $this->services['serializer.encoder.hal'] = $instance = new \Drupal\hal\Encoder\JsonEncoder();

        $instance->_serviceId = 'serializer.encoder.hal';

        return $instance;
    }

    /**
     * Gets the 'serializer.encoder.json' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\serialization\Encoder\JsonEncoder A Drupal\serialization\Encoder\JsonEncoder instance.
     */
    protected function getSerializer_Encoder_JsonService()
    {
        $this->services['serializer.encoder.json'] = $instance = new \Drupal\serialization\Encoder\JsonEncoder();

        $instance->_serviceId = 'serializer.encoder.json';

        return $instance;
    }

    /**
     * Gets the 'serializer.encoder.xml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\serialization\Encoder\XmlEncoder A Drupal\serialization\Encoder\XmlEncoder instance.
     */
    protected function getSerializer_Encoder_XmlService()
    {
        $this->services['serializer.encoder.xml'] = $instance = new \Drupal\serialization\Encoder\XmlEncoder();

        $instance->_serviceId = 'serializer.encoder.xml';

        return $instance;
    }

    /**
     * Gets the 'serializer.entity_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\serialization\EntityResolver\ChainEntityResolver A Drupal\serialization\EntityResolver\ChainEntityResolver instance.
     */
    protected function getSerializer_EntityResolverService()
    {
        $this->services['serializer.entity_resolver'] = $instance = new \Drupal\serialization\EntityResolver\ChainEntityResolver();

        $instance->addResolver($this->get('serializer.entity_resolver.uuid'));
        $instance->addResolver($this->get('serialization.entity_resolver.target_id'));
        $instance->_serviceId = 'serializer.entity_resolver';

        return $instance;
    }

    /**
     * Gets the 'serializer.entity_resolver.uuid' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\serialization\EntityResolver\UuidResolver A Drupal\serialization\EntityResolver\UuidResolver instance.
     */
    protected function getSerializer_EntityResolver_UuidService()
    {
        $this->services['serializer.entity_resolver.uuid'] = $instance = new \Drupal\serialization\EntityResolver\UuidResolver($this->get('entity.manager'));

        $instance->_serviceId = 'serializer.entity_resolver.uuid';

        return $instance;
    }

    /**
     * Gets the 'serializer.normalizer.complex_data' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\serialization\Normalizer\ComplexDataNormalizer A Drupal\serialization\Normalizer\ComplexDataNormalizer instance.
     */
    protected function getSerializer_Normalizer_ComplexDataService()
    {
        $this->services['serializer.normalizer.complex_data'] = $instance = new \Drupal\serialization\Normalizer\ComplexDataNormalizer();

        $instance->_serviceId = 'serializer.normalizer.complex_data';

        return $instance;
    }

    /**
     * Gets the 'serializer.normalizer.config_entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\serialization\Normalizer\ConfigEntityNormalizer A Drupal\serialization\Normalizer\ConfigEntityNormalizer instance.
     */
    protected function getSerializer_Normalizer_ConfigEntityService()
    {
        $this->services['serializer.normalizer.config_entity'] = $instance = new \Drupal\serialization\Normalizer\ConfigEntityNormalizer($this->get('entity.manager'));

        $instance->_serviceId = 'serializer.normalizer.config_entity';

        return $instance;
    }

    /**
     * Gets the 'serializer.normalizer.content_entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\serialization\Normalizer\ContentEntityNormalizer A Drupal\serialization\Normalizer\ContentEntityNormalizer instance.
     */
    protected function getSerializer_Normalizer_ContentEntityService()
    {
        $this->services['serializer.normalizer.content_entity'] = $instance = new \Drupal\serialization\Normalizer\ContentEntityNormalizer($this->get('entity.manager'));

        $instance->_serviceId = 'serializer.normalizer.content_entity';

        return $instance;
    }

    /**
     * Gets the 'serializer.normalizer.entity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\serialization\Normalizer\EntityNormalizer A Drupal\serialization\Normalizer\EntityNormalizer instance.
     */
    protected function getSerializer_Normalizer_EntityService()
    {
        $this->services['serializer.normalizer.entity'] = $instance = new \Drupal\serialization\Normalizer\EntityNormalizer($this->get('entity.manager'));

        $instance->_serviceId = 'serializer.normalizer.entity';

        return $instance;
    }

    /**
     * Gets the 'serializer.normalizer.entity.hal' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\hal\Normalizer\ContentEntityNormalizer A Drupal\hal\Normalizer\ContentEntityNormalizer instance.
     */
    protected function getSerializer_Normalizer_Entity_HalService()
    {
        $this->services['serializer.normalizer.entity.hal'] = $instance = new \Drupal\hal\Normalizer\ContentEntityNormalizer($this->get('rest.link_manager'), $this->get('entity.manager'), $this->get('module_handler'));

        $instance->_serviceId = 'serializer.normalizer.entity.hal';

        return $instance;
    }

    /**
     * Gets the 'serializer.normalizer.entity_reference_item.hal' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\hal\Normalizer\EntityReferenceItemNormalizer A Drupal\hal\Normalizer\EntityReferenceItemNormalizer instance.
     */
    protected function getSerializer_Normalizer_EntityReferenceItem_HalService()
    {
        $this->services['serializer.normalizer.entity_reference_item.hal'] = $instance = new \Drupal\hal\Normalizer\EntityReferenceItemNormalizer($this->get('rest.link_manager'), $this->get('serializer.entity_resolver'));

        $instance->_serviceId = 'serializer.normalizer.entity_reference_item.hal';

        return $instance;
    }

    /**
     * Gets the 'serializer.normalizer.field.hal' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\hal\Normalizer\FieldNormalizer A Drupal\hal\Normalizer\FieldNormalizer instance.
     */
    protected function getSerializer_Normalizer_Field_HalService()
    {
        $this->services['serializer.normalizer.field.hal'] = $instance = new \Drupal\hal\Normalizer\FieldNormalizer();

        $instance->_serviceId = 'serializer.normalizer.field.hal';

        return $instance;
    }

    /**
     * Gets the 'serializer.normalizer.field_item.hal' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\hal\Normalizer\FieldItemNormalizer A Drupal\hal\Normalizer\FieldItemNormalizer instance.
     */
    protected function getSerializer_Normalizer_FieldItem_HalService()
    {
        $this->services['serializer.normalizer.field_item.hal'] = $instance = new \Drupal\hal\Normalizer\FieldItemNormalizer();

        $instance->_serviceId = 'serializer.normalizer.field_item.hal';

        return $instance;
    }

    /**
     * Gets the 'serializer.normalizer.file_entity.hal' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\hal\Normalizer\FileEntityNormalizer A Drupal\hal\Normalizer\FileEntityNormalizer instance.
     */
    protected function getSerializer_Normalizer_FileEntity_HalService()
    {
        $this->services['serializer.normalizer.file_entity.hal'] = $instance = new \Drupal\hal\Normalizer\FileEntityNormalizer($this->get('entity.manager'), $this->get('http_client'), $this->get('rest.link_manager'), $this->get('module_handler'));

        $instance->_serviceId = 'serializer.normalizer.file_entity.hal';

        return $instance;
    }

    /**
     * Gets the 'serializer.normalizer.list' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\serialization\Normalizer\ListNormalizer A Drupal\serialization\Normalizer\ListNormalizer instance.
     */
    protected function getSerializer_Normalizer_ListService()
    {
        $this->services['serializer.normalizer.list'] = $instance = new \Drupal\serialization\Normalizer\ListNormalizer();

        $instance->_serviceId = 'serializer.normalizer.list';

        return $instance;
    }

    /**
     * Gets the 'serializer.normalizer.password_field_item' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\serialization\Normalizer\NullNormalizer A Drupal\serialization\Normalizer\NullNormalizer instance.
     */
    protected function getSerializer_Normalizer_PasswordFieldItemService()
    {
        $this->services['serializer.normalizer.password_field_item'] = $instance = new \Drupal\serialization\Normalizer\NullNormalizer('Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\PasswordItem');

        $instance->_serviceId = 'serializer.normalizer.password_field_item';

        return $instance;
    }

    /**
     * Gets the 'serializer.normalizer.typed_data' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\serialization\Normalizer\TypedDataNormalizer A Drupal\serialization\Normalizer\TypedDataNormalizer instance.
     */
    protected function getSerializer_Normalizer_TypedDataService()
    {
        $this->services['serializer.normalizer.typed_data'] = $instance = new \Drupal\serialization\Normalizer\TypedDataNormalizer();

        $instance->_serviceId = 'serializer.normalizer.typed_data';

        return $instance;
    }

    /**
     * Gets the 'service_container' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the 'session' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session A Symfony\Component\HttpFoundation\Session\Session instance.
     */
    protected function getSessionService()
    {
        $this->services['session'] = $instance = new \Symfony\Component\HttpFoundation\Session\Session($this->get('session_manager'), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());

        $instance->_serviceId = 'session';

        return $instance;
    }

    /**
     * Gets the 'session_configuration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Session\SessionConfiguration A Drupal\Core\Session\SessionConfiguration instance.
     */
    protected function getSessionConfigurationService()
    {
        $this->services['session_configuration'] = $instance = new \Drupal\Core\Session\SessionConfiguration(array('gc_probability' => 1, 'gc_divisor' => 100, 'gc_maxlifetime' => 200000, 'cookie_lifetime' => 2000000));

        $instance->_serviceId = 'session_configuration';

        return $instance;
    }

    /**
     * Gets the 'session_handler.storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Session\SessionHandler A Drupal\Core\Session\SessionHandler instance.
     */
    protected function getSessionHandler_StorageService()
    {
        $this->services['session_handler.storage'] = $instance = new \Drupal\Core\Session\SessionHandler($this->get('request_stack'), $this->get('database'));

        $instance->_serviceId = 'session_handler.storage';

        return $instance;
    }

    /**
     * Gets the 'session_handler.write_check' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\Handler\WriteCheckSessionHandler A Symfony\Component\HttpFoundation\Session\Storage\Handler\WriteCheckSessionHandler instance.
     */
    protected function getSessionHandler_WriteCheckService()
    {
        $this->services['session_handler.write_check'] = $instance = new \Symfony\Component\HttpFoundation\Session\Storage\Handler\WriteCheckSessionHandler($this->get('session_handler.storage'));

        $instance->_serviceId = 'session_handler.write_check';

        return $instance;
    }

    /**
     * Gets the 'session_handler.write_safe' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Session\WriteSafeSessionHandler A Drupal\Core\Session\WriteSafeSessionHandler instance.
     */
    protected function getSessionHandler_WriteSafeService()
    {
        $this->services['session_handler.write_safe'] = $instance = new \Drupal\Core\Session\WriteSafeSessionHandler($this->get('session_handler.write_check'));

        $instance->_serviceId = 'session_handler.write_safe';

        return $instance;
    }

    /**
     * Gets the 'session_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Session\SessionManager A Drupal\Core\Session\SessionManager instance.
     */
    protected function getSessionManagerService()
    {
        $a = $this->get('session_handler.write_safe');

        $this->services['session_manager'] = $instance = new \Drupal\Core\Session\SessionManager($this->get('request_stack'), $this->get('database'), $this->get('session_manager.metadata_bag'), $this->get('session_configuration'), $a);

        $instance->setWriteSafeHandler($a);
        $instance->_serviceId = 'session_manager';

        return $instance;
    }

    /**
     * Gets the 'session_manager.metadata_bag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Session\MetadataBag A Drupal\Core\Session\MetadataBag instance.
     */
    protected function getSessionManager_MetadataBagService()
    {
        $this->services['session_manager.metadata_bag'] = $instance = new \Drupal\Core\Session\MetadataBag($this->get('settings'));

        $instance->_serviceId = 'session_manager.metadata_bag';

        return $instance;
    }

    /**
     * Gets the 'settings' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Site\Settings A Drupal\Core\Site\Settings instance.
     */
    protected function getSettingsService()
    {
        $this->services['settings'] = $instance = \Drupal\Core\Site\Settings::getInstance();

        $instance->_serviceId = 'settings';

        return $instance;
    }

    /**
     * Gets the 'site.path' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SplString A SplString instance.
     */
    protected function getSite_PathService()
    {
        return $this->services['site.path'] = call_user_func(array(new \Drupal\Core\SitePathFactory($this->get('kernel')), 'get'));
    }

    /**
     * Gets the 'state' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\State\State A Drupal\Core\State\State instance.
     */
    protected function getStateService()
    {
        $this->services['state'] = $instance = new \Drupal\Core\State\State($this->get('keyvalue'));

        $instance->_serviceId = 'state';

        return $instance;
    }

    /**
     * Gets the 'stream_wrapper.public' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\StreamWrapper\PublicStream A Drupal\Core\StreamWrapper\PublicStream instance.
     */
    protected function getStreamWrapper_PublicService()
    {
        $this->services['stream_wrapper.public'] = $instance = new \Drupal\Core\StreamWrapper\PublicStream();

        $instance->_serviceId = 'stream_wrapper.public';

        return $instance;
    }

    /**
     * Gets the 'stream_wrapper.temporary' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\StreamWrapper\TemporaryStream A Drupal\Core\StreamWrapper\TemporaryStream instance.
     */
    protected function getStreamWrapper_TemporaryService()
    {
        $this->services['stream_wrapper.temporary'] = $instance = new \Drupal\Core\StreamWrapper\TemporaryStream();

        $instance->_serviceId = 'stream_wrapper.temporary';

        return $instance;
    }

    /**
     * Gets the 'stream_wrapper_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\StreamWrapper\StreamWrapperManager A Drupal\Core\StreamWrapper\StreamWrapperManager instance.
     */
    protected function getStreamWrapperManagerService()
    {
        $this->services['stream_wrapper_manager'] = $instance = new \Drupal\Core\StreamWrapper\StreamWrapperManager();

        $instance->setContainer($this);
        $instance->addStreamWrapper('stream_wrapper.public', 'Drupal\\Core\\StreamWrapper\\PublicStream', 'public');
        $instance->addStreamWrapper('stream_wrapper.temporary', 'Drupal\\Core\\StreamWrapper\\TemporaryStream', 'temporary');
        $instance->_serviceId = 'stream_wrapper_manager';

        return $instance;
    }

    /**
     * Gets the 'string_translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\StringTranslation\TranslationManager A Drupal\Core\StringTranslation\TranslationManager instance.
     */
    protected function getStringTranslationService()
    {
        $this->services['string_translation'] = $instance = new \Drupal\Core\StringTranslation\TranslationManager($this->get('language_manager'), $this->get('state'));

        $instance->initLanguageManager();
        $instance->addTranslator($this->get('string_translator.custom_strings'), 30);
        $instance->_serviceId = 'string_translation';

        return $instance;
    }

    /**
     * Gets the 'string_translator.custom_strings' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\StringTranslation\Translator\CustomStrings A Drupal\Core\StringTranslation\Translator\CustomStrings instance.
     */
    protected function getStringTranslator_CustomStringsService()
    {
        $this->services['string_translator.custom_strings'] = $instance = new \Drupal\Core\StringTranslation\Translator\CustomStrings($this->get('settings'));

        $instance->_serviceId = 'string_translator.custom_strings';

        return $instance;
    }

    /**
     * Gets the 'system.admin_path.route_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\system\EventSubscriber\AdminRouteSubscriber A Drupal\system\EventSubscriber\AdminRouteSubscriber instance.
     */
    protected function getSystem_AdminPath_RouteSubscriberService()
    {
        $this->services['system.admin_path.route_subscriber'] = $instance = new \Drupal\system\EventSubscriber\AdminRouteSubscriber();

        $instance->_serviceId = 'system.admin_path.route_subscriber';

        return $instance;
    }

    /**
     * Gets the 'system.automatic_cron' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\system\EventSubscriber\AutomaticCron A Drupal\system\EventSubscriber\AutomaticCron instance.
     */
    protected function getSystem_AutomaticCronService()
    {
        $this->services['system.automatic_cron'] = $instance = new \Drupal\system\EventSubscriber\AutomaticCron($this->get('cron'), $this->get('config.factory'), $this->get('state'));

        $instance->_serviceId = 'system.automatic_cron';

        return $instance;
    }

    /**
     * Gets the 'system.breadcrumb.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\system\PathBasedBreadcrumbBuilder A Drupal\system\PathBasedBreadcrumbBuilder instance.
     */
    protected function getSystem_Breadcrumb_DefaultService()
    {
        $this->services['system.breadcrumb.default'] = $instance = new \Drupal\system\PathBasedBreadcrumbBuilder($this->get('router.request_context'), $this->get('access_manager'), $this->get('router'), $this->get('path_processor_manager'), $this->get('config.factory'), $this->get('title_resolver'), $this->get('current_user'), $this->get('path.current'));

        $instance->_serviceId = 'system.breadcrumb.default';

        return $instance;
    }

    /**
     * Gets the 'system.config_cache_tag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\system\EventSubscriber\ConfigCacheTag A Drupal\system\EventSubscriber\ConfigCacheTag instance.
     */
    protected function getSystem_ConfigCacheTagService()
    {
        $this->services['system.config_cache_tag'] = $instance = new \Drupal\system\EventSubscriber\ConfigCacheTag($this->get('theme_handler'), $this->get('cache_tags.invalidator'));

        $instance->_serviceId = 'system.config_cache_tag';

        return $instance;
    }

    /**
     * Gets the 'system.config_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\system\SystemConfigSubscriber A Drupal\system\SystemConfigSubscriber instance.
     */
    protected function getSystem_ConfigSubscriberService()
    {
        $this->services['system.config_subscriber'] = $instance = new \Drupal\system\SystemConfigSubscriber();

        $instance->_serviceId = 'system.config_subscriber';

        return $instance;
    }

    /**
     * Gets the 'system.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\system\SystemManager A Drupal\system\SystemManager instance.
     */
    protected function getSystem_ManagerService()
    {
        $this->services['system.manager'] = $instance = new \Drupal\system\SystemManager($this->get('module_handler'), $this->get('entity.manager'), $this->get('request_stack'), $this->get('menu.link_tree'), $this->get('menu.active_trail'));

        $instance->_serviceId = 'system.manager';

        return $instance;
    }

    /**
     * Gets the 'taxonomy_term.breadcrumb' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\taxonomy\TermBreadcrumbBuilder A Drupal\taxonomy\TermBreadcrumbBuilder instance.
     */
    protected function getTaxonomyTerm_BreadcrumbService()
    {
        $this->services['taxonomy_term.breadcrumb'] = $instance = new \Drupal\taxonomy\TermBreadcrumbBuilder($this->get('entity.manager'));

        $instance->_serviceId = 'taxonomy_term.breadcrumb';

        return $instance;
    }

    /**
     * Gets the 'theme.initialization' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Theme\ThemeInitialization A Drupal\Core\Theme\ThemeInitialization instance.
     */
    protected function getTheme_InitializationService()
    {
        $this->services['theme.initialization'] = $instance = new \Drupal\Core\Theme\ThemeInitialization($this->get('app.root'), $this->get('theme_handler'), $this->get('cache.bootstrap'), $this->get('module_handler'));

        $instance->_serviceId = 'theme.initialization';

        return $instance;
    }

    /**
     * Gets the 'theme.manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Theme\ThemeManager A Drupal\Core\Theme\ThemeManager instance.
     */
    protected function getTheme_ManagerService()
    {
        $this->services['theme.manager'] = $instance = new \Drupal\Core\Theme\ThemeManager($this->get('app.root'), $this->get('theme.negotiator'), $this->get('theme.initialization'), $this->get('request_stack'), $this->get('module_handler'));

        $instance->setThemeRegistry($this->get('theme.registry'));
        $instance->_serviceId = 'theme.manager';

        return $instance;
    }

    /**
     * Gets the 'theme.negotiator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Theme\ThemeNegotiator A Drupal\Core\Theme\ThemeNegotiator instance.
     */
    protected function getTheme_NegotiatorService()
    {
        $this->services['theme.negotiator'] = $instance = new \Drupal\Core\Theme\ThemeNegotiator($this->get('access_check.theme'));

        $instance->addNegotiator($this->get('theme.negotiator.system.batch'), 1000);
        $instance->addNegotiator($this->get('theme.negotiator.block.admin_demo'), 1000);
        $instance->addNegotiator($this->get('theme.negotiator.ajax_base_page'), 1000);
        $instance->addNegotiator($this->get('theme.negotiator.system.db_update'), 100);
        $instance->addNegotiator($this->get('theme.negotiator.admin_theme'), -40);
        $instance->addNegotiator($this->get('theme.negotiator.default'), -100);
        $instance->_serviceId = 'theme.negotiator';

        return $instance;
    }

    /**
     * Gets the 'theme.negotiator.admin_theme' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\user\Theme\AdminNegotiator A Drupal\user\Theme\AdminNegotiator instance.
     */
    protected function getTheme_Negotiator_AdminThemeService()
    {
        $this->services['theme.negotiator.admin_theme'] = $instance = new \Drupal\user\Theme\AdminNegotiator($this->get('current_user'), $this->get('config.factory'), $this->get('entity.manager'), $this->get('router.admin_context'));

        $instance->_serviceId = 'theme.negotiator.admin_theme';

        return $instance;
    }

    /**
     * Gets the 'theme.negotiator.ajax_base_page' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Theme\AjaxBasePageNegotiator A Drupal\Core\Theme\AjaxBasePageNegotiator instance.
     */
    protected function getTheme_Negotiator_AjaxBasePageService()
    {
        $this->services['theme.negotiator.ajax_base_page'] = $instance = new \Drupal\Core\Theme\AjaxBasePageNegotiator($this->get('csrf_token'), $this->get('config.factory'), $this->get('request_stack'));

        $instance->_serviceId = 'theme.negotiator.ajax_base_page';

        return $instance;
    }

    /**
     * Gets the 'theme.negotiator.block.admin_demo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\block\Theme\AdminDemoNegotiator A Drupal\block\Theme\AdminDemoNegotiator instance.
     */
    protected function getTheme_Negotiator_Block_AdminDemoService()
    {
        $this->services['theme.negotiator.block.admin_demo'] = $instance = new \Drupal\block\Theme\AdminDemoNegotiator();

        $instance->_serviceId = 'theme.negotiator.block.admin_demo';

        return $instance;
    }

    /**
     * Gets the 'theme.negotiator.default' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Theme\DefaultNegotiator A Drupal\Core\Theme\DefaultNegotiator instance.
     */
    protected function getTheme_Negotiator_DefaultService()
    {
        $this->services['theme.negotiator.default'] = $instance = new \Drupal\Core\Theme\DefaultNegotiator($this->get('config.factory'));

        $instance->_serviceId = 'theme.negotiator.default';

        return $instance;
    }

    /**
     * Gets the 'theme.negotiator.system.batch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\system\Theme\BatchNegotiator A Drupal\system\Theme\BatchNegotiator instance.
     */
    protected function getTheme_Negotiator_System_BatchService()
    {
        $this->services['theme.negotiator.system.batch'] = $instance = new \Drupal\system\Theme\BatchNegotiator($this->get('batch.storage'), $this->get('request_stack'));

        $instance->_serviceId = 'theme.negotiator.system.batch';

        return $instance;
    }

    /**
     * Gets the 'theme.negotiator.system.db_update' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\system\Theme\DbUpdateNegotiator A Drupal\system\Theme\DbUpdateNegotiator instance.
     */
    protected function getTheme_Negotiator_System_DbUpdateService()
    {
        $this->services['theme.negotiator.system.db_update'] = $instance = new \Drupal\system\Theme\DbUpdateNegotiator($this->get('config.factory'));

        $instance->_serviceId = 'theme.negotiator.system.db_update';

        return $instance;
    }

    /**
     * Gets the 'theme.registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Theme\Registry A Drupal\Core\Theme\Registry instance.
     */
    protected function getTheme_RegistryService()
    {
        $this->services['theme.registry'] = $instance = new \Drupal\Core\Theme\Registry($this->get('app.root'), $this->get('cache.default'), $this->get('lock'), $this->get('module_handler'), $this->get('theme_handler'), $this->get('theme.initialization'));

        $instance->setThemeManager($this->get('theme.manager'));
        $instance->_serviceId = 'theme.registry';

        return $instance;
    }

    /**
     * Gets the 'theme_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Extension\ThemeHandler A Drupal\Core\Extension\ThemeHandler instance.
     */
    protected function getThemeHandlerService()
    {
        $this->services['theme_handler'] = $instance = new \Drupal\Core\Extension\ThemeHandler($this->get('app.root'), $this->get('config.factory'), $this->get('module_handler'), $this->get('state'), $this->get('info_parser'));

        $instance->_serviceId = 'theme_handler';

        return $instance;
    }

    /**
     * Gets the 'theme_installer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Extension\ThemeInstaller A Drupal\Core\Extension\ThemeInstaller instance.
     */
    protected function getThemeInstallerService()
    {
        $this->services['theme_installer'] = $instance = new \Drupal\Core\Extension\ThemeInstaller($this->get('theme_handler'), $this->get('config.factory'), $this->get('config.installer'), $this->get('module_handler'), $this->get('config.manager'), $this->get('asset.css.collection_optimizer'), $this->get('router.builder'), $this->get('logger.channel.default'), $this->get('state'));

        $instance->_serviceId = 'theme_installer';

        return $instance;
    }

    /**
     * Gets the 'title_resolver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Controller\TitleResolver A Drupal\Core\Controller\TitleResolver instance.
     */
    protected function getTitleResolverService()
    {
        $this->services['title_resolver'] = $instance = new \Drupal\Core\Controller\TitleResolver($this->get('controller_resolver'), $this->get('string_translation'));

        $instance->_serviceId = 'title_resolver';

        return $instance;
    }

    /**
     * Gets the 'token' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Utility\Token A Drupal\Core\Utility\Token instance.
     */
    protected function getTokenService()
    {
        $this->services['token'] = $instance = new \Drupal\Core\Utility\Token($this->get('module_handler'), $this->get('cache.discovery'), $this->get('language_manager'), $this->get('cache_tags.invalidator'));

        $instance->_serviceId = 'token';

        return $instance;
    }

    /**
     * Gets the 'toolbar.menu_tree' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\toolbar\Menu\ToolbarMenuLinkTree A Drupal\toolbar\Menu\ToolbarMenuLinkTree instance.
     */
    protected function getToolbar_MenuTreeService()
    {
        $this->services['toolbar.menu_tree'] = $instance = new \Drupal\toolbar\Menu\ToolbarMenuLinkTree($this->get('menu.tree_storage'), $this->get('plugin.manager.menu.link'), $this->get('router.route_provider'), $this->get('menu.active_trail'), $this->get('controller_resolver'), $this->get('cache.menu'), $this->get('current_route_match'));

        $instance->_serviceId = 'toolbar.menu_tree';

        return $instance;
    }

    /**
     * Gets the 'toolbar.page_cache_request_policy.allow_toolbar_path' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\toolbar\PageCache\AllowToolbarPath A Drupal\toolbar\PageCache\AllowToolbarPath instance.
     */
    protected function getToolbar_PageCacheRequestPolicy_AllowToolbarPathService()
    {
        $this->services['toolbar.page_cache_request_policy.allow_toolbar_path'] = $instance = new \Drupal\toolbar\PageCache\AllowToolbarPath();

        $instance->_serviceId = 'toolbar.page_cache_request_policy.allow_toolbar_path';

        return $instance;
    }

    /**
     * Gets the 'transliteration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Transliteration\PhpTransliteration A Drupal\Core\Transliteration\PhpTransliteration instance.
     */
    protected function getTransliterationService()
    {
        $this->services['transliteration'] = $instance = new \Drupal\Core\Transliteration\PhpTransliteration(NULL, $this->get('module_handler'));

        $instance->_serviceId = 'transliteration';

        return $instance;
    }

    /**
     * Gets the 'twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Template\TwigEnvironment A Drupal\Core\Template\TwigEnvironment instance.
     */
    protected function getTwigService()
    {
        $a = new \Twig_Loader_Chain();
        $a->addLoader($this->get('twig.loader.filesystem'));
        $a->addLoader($this->get('twig.loader.theme_registry'));
        $a->addLoader($this->get('twig.loader.string'));

        $this->services['twig'] = $instance = new \Drupal\Core\Template\TwigEnvironment($this->get('app.root'), $a, array('debug' => false, 'auto_reload' => NULL, 'cache' => true));

        $instance->addExtension($this->get('twig.extension'));
        $instance->addExtension($this->get('twig.extension.debug'));
        $instance->_serviceId = 'twig';

        return $instance;
    }

    /**
     * Gets the 'twig.extension' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Template\TwigExtension A Drupal\Core\Template\TwigExtension instance.
     */
    protected function getTwig_ExtensionService()
    {
        $this->services['twig.extension'] = $instance = new \Drupal\Core\Template\TwigExtension($this->get('renderer'));

        $instance->setUrlGenerator($this->get('url_generator'));
        $instance->setThemeManager($this->get('theme.manager'));
        $instance->_serviceId = 'twig.extension';

        return $instance;
    }

    /**
     * Gets the 'twig.extension.debug' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Extension_Debug A Twig_Extension_Debug instance.
     */
    protected function getTwig_Extension_DebugService()
    {
        $this->services['twig.extension.debug'] = $instance = new \Twig_Extension_Debug();

        $instance->_serviceId = 'twig.extension.debug';

        return $instance;
    }

    /**
     * Gets the 'twig.loader.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Template\Loader\FilesystemLoader A Drupal\Core\Template\Loader\FilesystemLoader instance.
     */
    protected function getTwig_Loader_FilesystemService()
    {
        $this->services['twig.loader.filesystem'] = $instance = new \Drupal\Core\Template\Loader\FilesystemLoader($this->get('app.root'), $this->get('module_handler'), $this->get('theme_handler'));

        $instance->_serviceId = 'twig.loader.filesystem';

        return $instance;
    }

    /**
     * Gets the 'twig.loader.string' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Template\Loader\StringLoader A Drupal\Core\Template\Loader\StringLoader instance.
     */
    protected function getTwig_Loader_StringService()
    {
        $this->services['twig.loader.string'] = $instance = new \Drupal\Core\Template\Loader\StringLoader();

        $instance->_serviceId = 'twig.loader.string';

        return $instance;
    }

    /**
     * Gets the 'twig.loader.theme_registry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Template\Loader\ThemeRegistryLoader A Drupal\Core\Template\Loader\ThemeRegistryLoader instance.
     */
    protected function getTwig_Loader_ThemeRegistryService()
    {
        $this->services['twig.loader.theme_registry'] = $instance = new \Drupal\Core\Template\Loader\ThemeRegistryLoader($this->get('theme.registry'));

        $instance->_serviceId = 'twig.loader.theme_registry';

        return $instance;
    }

    /**
     * Gets the 'typed_data_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\TypedData\TypedDataManager A Drupal\Core\TypedData\TypedDataManager instance.
     */
    protected function getTypedDataManagerService()
    {
        $this->services['typed_data_manager'] = $instance = new \Drupal\Core\TypedData\TypedDataManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'), $this->get('class_resolver'));

        $instance->setValidationConstraintManager($this->get('validation.constraint'));
        $instance->_serviceId = 'typed_data_manager';

        return $instance;
    }

    /**
     * Gets the 'unrouted_url_assembler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Utility\UnroutedUrlAssembler A Drupal\Core\Utility\UnroutedUrlAssembler instance.
     */
    protected function getUnroutedUrlAssemblerService()
    {
        $this->services['unrouted_url_assembler'] = $instance = new \Drupal\Core\Utility\UnroutedUrlAssembler($this->get('request_stack'), $this->get('config.factory'), $this->get('path_processor_manager'));

        $instance->_serviceId = 'unrouted_url_assembler';

        return $instance;
    }

    /**
     * Gets the 'url_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Routing\UrlGenerator A Drupal\Core\Routing\UrlGenerator instance.
     */
    protected function getUrlGeneratorService()
    {
        $this->services['url_generator'] = $instance = new \Drupal\Core\Routing\UrlGenerator($this->get('router.route_provider'), $this->get('path_processor_manager'), $this->get('route_processor_manager'), $this->get('config.factory'), $this->get('request_stack'));

        if ($this->has('router.request_context')) {
            $instance->setContext($this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        $instance->_serviceId = 'url_generator';

        return $instance;
    }

    /**
     * Gets the 'user.auth' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\user\UserAuth A Drupal\user\UserAuth instance.
     */
    protected function getUser_AuthService()
    {
        $this->services['user.auth'] = $instance = new \Drupal\user\UserAuth($this->get('entity.manager'), $this->get('password'));

        $instance->_serviceId = 'user.auth';

        return $instance;
    }

    /**
     * Gets the 'user.authentication.cookie' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\user\Authentication\Provider\Cookie A Drupal\user\Authentication\Provider\Cookie instance.
     */
    protected function getUser_Authentication_CookieService()
    {
        $this->services['user.authentication.cookie'] = $instance = new \Drupal\user\Authentication\Provider\Cookie($this->get('session_configuration'), $this->get('database'));

        $instance->_serviceId = 'user.authentication.cookie';

        return $instance;
    }

    /**
     * Gets the 'user.data' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\user\UserData A Drupal\user\UserData instance.
     */
    protected function getUser_DataService()
    {
        $this->services['user.data'] = $instance = new \Drupal\user\UserData($this->get('database'));

        $instance->_serviceId = 'user.data';

        return $instance;
    }

    /**
     * Gets the 'user.permissions' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\user\PermissionHandler A Drupal\user\PermissionHandler instance.
     */
    protected function getUser_PermissionsService()
    {
        $this->services['user.permissions'] = $instance = new \Drupal\user\PermissionHandler($this->get('module_handler'), $this->get('string_translation'), $this->get('controller_resolver'));

        $instance->_serviceId = 'user.permissions';

        return $instance;
    }

    /**
     * Gets the 'user.private_tempstore' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\user\PrivateTempStoreFactory A Drupal\user\PrivateTempStoreFactory instance.
     */
    protected function getUser_PrivateTempstoreService()
    {
        $this->services['user.private_tempstore'] = $instance = new \Drupal\user\PrivateTempStoreFactory($this->get('keyvalue.expirable'), $this->get('lock'), $this->get('current_user'), $this->get('request_stack'), 604800);

        $instance->_serviceId = 'user.private_tempstore';

        return $instance;
    }

    /**
     * Gets the 'user.shared_tempstore' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\user\SharedTempStoreFactory A Drupal\user\SharedTempStoreFactory instance.
     */
    protected function getUser_SharedTempstoreService()
    {
        $this->services['user.shared_tempstore'] = $instance = new \Drupal\user\SharedTempStoreFactory($this->get('keyvalue.expirable'), $this->get('lock'), $this->get('request_stack'), 604800);

        $instance->_serviceId = 'user.shared_tempstore';

        return $instance;
    }

    /**
     * Gets the 'user_access_denied_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\user\EventSubscriber\AccessDeniedSubscriber A Drupal\user\EventSubscriber\AccessDeniedSubscriber instance.
     */
    protected function getUserAccessDeniedSubscriberService()
    {
        $this->services['user_access_denied_subscriber'] = $instance = new \Drupal\user\EventSubscriber\AccessDeniedSubscriber($this->get('current_user'), $this->get('url_generator'));

        $instance->_serviceId = 'user_access_denied_subscriber';

        return $instance;
    }

    /**
     * Gets the 'user_last_access_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\user\EventSubscriber\UserRequestSubscriber A Drupal\user\EventSubscriber\UserRequestSubscriber instance.
     */
    protected function getUserLastAccessSubscriberService()
    {
        $this->services['user_last_access_subscriber'] = $instance = new \Drupal\user\EventSubscriber\UserRequestSubscriber($this->get('current_user'), $this->get('entity.manager'));

        $instance->_serviceId = 'user_last_access_subscriber';

        return $instance;
    }

    /**
     * Gets the 'user_maintenance_mode_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\user\EventSubscriber\MaintenanceModeSubscriber A Drupal\user\EventSubscriber\MaintenanceModeSubscriber instance.
     */
    protected function getUserMaintenanceModeSubscriberService()
    {
        $this->services['user_maintenance_mode_subscriber'] = $instance = new \Drupal\user\EventSubscriber\MaintenanceModeSubscriber($this->get('maintenance_mode'), $this->get('current_user'));

        $instance->_serviceId = 'user_maintenance_mode_subscriber';

        return $instance;
    }

    /**
     * Gets the 'user_permissions_hash_generator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Session\PermissionsHashGenerator A Drupal\Core\Session\PermissionsHashGenerator instance.
     */
    protected function getUserPermissionsHashGeneratorService()
    {
        $this->services['user_permissions_hash_generator'] = $instance = new \Drupal\Core\Session\PermissionsHashGenerator($this->get('private_key'), $this->get('cache.default'));

        $instance->_serviceId = 'user_permissions_hash_generator';

        return $instance;
    }

    /**
     * Gets the 'uuid' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Component\Uuid\Php A Drupal\Component\Uuid\Php instance.
     */
    protected function getUuidService()
    {
        $this->services['uuid'] = $instance = new \Drupal\Component\Uuid\Php();

        $instance->_serviceId = 'uuid';

        return $instance;
    }

    /**
     * Gets the 'validation.constraint' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\Core\Validation\ConstraintManager A Drupal\Core\Validation\ConstraintManager instance.
     */
    protected function getValidation_ConstraintService()
    {
        $this->services['validation.constraint'] = $instance = new \Drupal\Core\Validation\ConstraintManager($this->get('container.namespaces'), $this->get('cache.discovery'), $this->get('module_handler'));

        $instance->_serviceId = 'validation.constraint';

        return $instance;
    }

    /**
     * Gets the 'views.analyzer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\views\Analyzer A Drupal\views\Analyzer instance.
     */
    protected function getViews_AnalyzerService()
    {
        $this->services['views.analyzer'] = $instance = new \Drupal\views\Analyzer($this->get('module_handler'));

        $instance->_serviceId = 'views.analyzer';

        return $instance;
    }

    /**
     * Gets the 'views.entity_schema_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\views\EventSubscriber\ViewsEntitySchemaSubscriber A Drupal\views\EventSubscriber\ViewsEntitySchemaSubscriber instance.
     */
    protected function getViews_EntitySchemaSubscriberService()
    {
        $this->services['views.entity_schema_subscriber'] = $instance = new \Drupal\views\EventSubscriber\ViewsEntitySchemaSubscriber($this->get('entity.manager'));

        $instance->_serviceId = 'views.entity_schema_subscriber';

        return $instance;
    }

    /**
     * Gets the 'views.executable' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\views\ViewExecutableFactory A Drupal\views\ViewExecutableFactory instance.
     */
    protected function getViews_ExecutableService()
    {
        $this->services['views.executable'] = $instance = new \Drupal\views\ViewExecutableFactory($this->get('current_user'), $this->get('request_stack'), $this->get('views.views_data'), $this->get('router.route_provider'));

        $instance->_serviceId = 'views.executable';

        return $instance;
    }

    /**
     * Gets the 'views.exposed_form_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\views\ExposedFormCache A Drupal\views\ExposedFormCache instance.
     */
    protected function getViews_ExposedFormCacheService()
    {
        $this->services['views.exposed_form_cache'] = $instance = new \Drupal\views\ExposedFormCache();

        $instance->_serviceId = 'views.exposed_form_cache';

        return $instance;
    }

    /**
     * Gets the 'views.route_subscriber' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\views\EventSubscriber\RouteSubscriber A Drupal\views\EventSubscriber\RouteSubscriber instance.
     */
    protected function getViews_RouteSubscriberService()
    {
        $this->services['views.route_subscriber'] = $instance = new \Drupal\views\EventSubscriber\RouteSubscriber($this->get('entity.manager'), $this->get('state'));

        $instance->_serviceId = 'views.route_subscriber';

        return $instance;
    }

    /**
     * Gets the 'views.views_data' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\views\ViewsData A Drupal\views\ViewsData instance.
     */
    protected function getViews_ViewsDataService()
    {
        $this->services['views.views_data'] = $instance = new \Drupal\views\ViewsData($this->get('cache.discovery'), $this->get('config.factory'), $this->get('module_handler'), $this->get('language_manager'));

        $instance->_serviceId = 'views.views_data';

        return $instance;
    }

    /**
     * Gets the 'views.views_data_helper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Drupal\views\ViewsDataHelper A Drupal\views\ViewsDataHelper instance.
     */
    protected function getViews_ViewsDataHelperService()
    {
        $this->services['views.views_data_helper'] = $instance = new \Drupal\views\ViewsDataHelper($this->get('views.views_data'));

        $instance->_serviceId = 'views.views_data_helper';

        return $instance;
    }

    /**
     * Gets the 'access_manager.check_provider' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Drupal\Core\Access\CheckProvider A Drupal\Core\Access\CheckProvider instance.
     */
    protected function getAccessManager_CheckProviderService()
    {
        $this->services['access_manager.check_provider'] = $instance = new \Drupal\Core\Access\CheckProvider();

        $instance->setContainer($this);
        $instance->addCheckService('access_check.default', 'access', array(0 => '_access'), false);
        $instance->addCheckService('access_check.entity', 'access', array(0 => '_entity_access'), false);
        $instance->addCheckService('access_check.entity_create', 'access', array(0 => '_entity_create_access'), false);
        $instance->addCheckService('access_check.theme', 'access', array(0 => '_access_theme'), false);
        $instance->addCheckService('access_check.custom', 'access', array(0 => '_custom_access'), false);
        $instance->addCheckService('access_check.csrf', 'access', array(0 => '_csrf_token'), true);
        $instance->addCheckService('access_check.contact_personal', 'access', array(0 => '_access_contact_personal_tab'), false);
        $instance->addCheckService('access_check.field_ui.view_mode', 'access', array(0 => '_field_ui_view_mode_access'), false);
        $instance->addCheckService('access_check.field_ui.form_mode', 'access', array(0 => '_field_ui_form_mode_access'), false);
        $instance->addCheckService('access_check.node.revision', 'access', array(0 => '_access_node_revision'), false);
        $instance->addCheckService('access_check.node.add', 'access', array(0 => '_node_add_access'), false);
        $instance->addCheckService('access_check.node.preview', 'access', array(0 => '_node_preview_access'), false);
        $instance->addCheckService('access_check.quickedit.entity_field', 'access', array(0 => '_access_quickedit_entity_field'), false);
        $instance->addCheckService('access_check.rest.csrf', 'access', array(), false);
        $instance->addCheckService('access_check.cron', 'access', array(0 => '_access_system_cron'), false);
        $instance->addCheckService('access_check.db_update', 'access', array(0 => '_access_system_update'), false);
        $instance->addCheckService('access_check.permission', 'access', array(0 => '_permission'), false);
        $instance->addCheckService('access_check.user.register', 'access', array(0 => '_access_user_register'), false);
        $instance->addCheckService('access_check.user.role', 'access', array(0 => '_role'), false);
        $instance->addCheckService('access_check.user.login_status', 'access', array(0 => '_user_is_logged_in'), false);

        return $instance;
    }

    /**
     * Gets the 'menu.tree_storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * This service is private.
     * If you want to be able to request this service from the container directly,
     * make it public, otherwise you might end up with broken code.
     *
     * @return \Drupal\Core\Menu\MenuTreeStorage A Drupal\Core\Menu\MenuTreeStorage instance.
     */
    protected function getMenu_TreeStorageService()
    {
        return $this->services['menu.tree_storage'] = new \Drupal\Core\Menu\MenuTreeStorage($this->get('database'), $this->get('cache.menu'), $this->get('cache_tags.invalidator'), 'menu_tree');
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }

        return $this->parameterBag;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.environment' => 'prod',
            'container.modules' => array(
                'basic_auth' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/basic_auth/basic_auth.info.yml',
                    'filename' => 'basic_auth.module',
                ),
                'block' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/block/block.info.yml',
                    'filename' => 'block.module',
                ),
                'block_content' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/block_content/block_content.info.yml',
                    'filename' => 'block_content.module',
                ),
                'breakpoint' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/breakpoint/breakpoint.info.yml',
                    'filename' => 'breakpoint.module',
                ),
                'ckeditor' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/ckeditor/ckeditor.info.yml',
                    'filename' => 'ckeditor.module',
                ),
                'color' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/color/color.info.yml',
                    'filename' => 'color.module',
                ),
                'comment' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/comment/comment.info.yml',
                    'filename' => 'comment.module',
                ),
                'config' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/config/config.info.yml',
                    'filename' => 'config.module',
                ),
                'contact' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/contact/contact.info.yml',
                    'filename' => 'contact.module',
                ),
                'contextual' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/contextual/contextual.info.yml',
                    'filename' => 'contextual.module',
                ),
                'datetime' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/datetime/datetime.info.yml',
                    'filename' => 'datetime.module',
                ),
                'dblog' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/dblog/dblog.info.yml',
                    'filename' => 'dblog.module',
                ),
                'editor' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/editor/editor.info.yml',
                    'filename' => 'editor.module',
                ),
                'entity_reference' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/entity_reference/entity_reference.info.yml',
                    'filename' => 'entity_reference.module',
                ),
                'field' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/field/field.info.yml',
                    'filename' => 'field.module',
                ),
                'field_ui' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/field_ui/field_ui.info.yml',
                    'filename' => 'field_ui.module',
                ),
                'file' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/file/file.info.yml',
                    'filename' => 'file.module',
                ),
                'filter' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/filter/filter.info.yml',
                    'filename' => 'filter.module',
                ),
                'hal' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/hal/hal.info.yml',
                    'filename' => 'hal.module',
                ),
                'help' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/help/help.info.yml',
                    'filename' => 'help.module',
                ),
                'history' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/history/history.info.yml',
                    'filename' => 'history.module',
                ),
                'image' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/image/image.info.yml',
                    'filename' => 'image.module',
                ),
                'link' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/link/link.info.yml',
                    'filename' => 'link.module',
                ),
                'menu_ui' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/menu_ui/menu_ui.info.yml',
                    'filename' => 'menu_ui.module',
                ),
                'node' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/node/node.info.yml',
                    'filename' => 'node.module',
                ),
                'options' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/options/options.info.yml',
                    'filename' => 'options.module',
                ),
                'page_cache' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/page_cache/page_cache.info.yml',
                    'filename' => 'page_cache.module',
                ),
                'path' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/path/path.info.yml',
                    'filename' => 'path.module',
                ),
                'quickedit' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/quickedit/quickedit.info.yml',
                    'filename' => 'quickedit.module',
                ),
                'rdf' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/rdf/rdf.info.yml',
                    'filename' => 'rdf.module',
                ),
                'rest' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/rest/rest.info.yml',
                    'filename' => 'rest.module',
                ),
                'search' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/search/search.info.yml',
                    'filename' => 'search.module',
                ),
                'serialization' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/serialization/serialization.info.yml',
                    'filename' => 'serialization.module',
                ),
                'shortcut' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/shortcut/shortcut.info.yml',
                    'filename' => 'shortcut.module',
                ),
                'system' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/system/system.info.yml',
                    'filename' => 'system.module',
                ),
                'taxonomy' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/taxonomy/taxonomy.info.yml',
                    'filename' => 'taxonomy.module',
                ),
                'text' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/text/text.info.yml',
                    'filename' => 'text.module',
                ),
                'toolbar' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/toolbar/toolbar.info.yml',
                    'filename' => 'toolbar.module',
                ),
                'tour' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/tour/tour.info.yml',
                    'filename' => 'tour.module',
                ),
                'user' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/user/user.info.yml',
                    'filename' => 'user.module',
                ),
                'views_ui' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/views_ui/views_ui.info.yml',
                    'filename' => 'views_ui.module',
                ),
                'menu_link_content' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/menu_link_content/menu_link_content.info.yml',
                    'filename' => 'menu_link_content.module',
                ),
                'views' => array(
                    'type' => 'module',
                    'pathname' => 'core/modules/views/views.info.yml',
                    'filename' => 'views.module',
                ),
                'standard' => array(
                    'type' => 'profile',
                    'pathname' => 'core/profiles/standard/standard.info.yml',
                    'filename' => 'standard.profile',
                ),
            ),
            'container.namespaces' => array(
                'Drupal\\basic_auth' => 'core/modules/basic_auth/src',
                'Drupal\\block' => 'core/modules/block/src',
                'Drupal\\block_content' => 'core/modules/block_content/src',
                'Drupal\\breakpoint' => 'core/modules/breakpoint/src',
                'Drupal\\ckeditor' => 'core/modules/ckeditor/src',
                'Drupal\\color' => 'core/modules/color/src',
                'Drupal\\comment' => 'core/modules/comment/src',
                'Drupal\\config' => 'core/modules/config/src',
                'Drupal\\contact' => 'core/modules/contact/src',
                'Drupal\\contextual' => 'core/modules/contextual/src',
                'Drupal\\datetime' => 'core/modules/datetime/src',
                'Drupal\\dblog' => 'core/modules/dblog/src',
                'Drupal\\editor' => 'core/modules/editor/src',
                'Drupal\\entity_reference' => 'core/modules/entity_reference/src',
                'Drupal\\field' => 'core/modules/field/src',
                'Drupal\\field_ui' => 'core/modules/field_ui/src',
                'Drupal\\file' => 'core/modules/file/src',
                'Drupal\\filter' => 'core/modules/filter/src',
                'Drupal\\hal' => 'core/modules/hal/src',
                'Drupal\\help' => 'core/modules/help/src',
                'Drupal\\history' => 'core/modules/history/src',
                'Drupal\\image' => 'core/modules/image/src',
                'Drupal\\link' => 'core/modules/link/src',
                'Drupal\\menu_ui' => 'core/modules/menu_ui/src',
                'Drupal\\node' => 'core/modules/node/src',
                'Drupal\\options' => 'core/modules/options/src',
                'Drupal\\page_cache' => 'core/modules/page_cache/src',
                'Drupal\\path' => 'core/modules/path/src',
                'Drupal\\quickedit' => 'core/modules/quickedit/src',
                'Drupal\\rdf' => 'core/modules/rdf/src',
                'Drupal\\rest' => 'core/modules/rest/src',
                'Drupal\\search' => 'core/modules/search/src',
                'Drupal\\serialization' => 'core/modules/serialization/src',
                'Drupal\\shortcut' => 'core/modules/shortcut/src',
                'Drupal\\system' => 'core/modules/system/src',
                'Drupal\\taxonomy' => 'core/modules/taxonomy/src',
                'Drupal\\text' => 'core/modules/text/src',
                'Drupal\\toolbar' => 'core/modules/toolbar/src',
                'Drupal\\tour' => 'core/modules/tour/src',
                'Drupal\\user' => 'core/modules/user/src',
                'Drupal\\views_ui' => 'core/modules/views_ui/src',
                'Drupal\\menu_link_content' => 'core/modules/menu_link_content/src',
                'Drupal\\views' => 'core/modules/views/src',
                'Drupal\\standard' => 'core/profiles/standard/src',
                'Drupal\\Core\\Block' => 'core/lib/Drupal/Core/Block',
                'Drupal\\Core\\Config' => 'core/lib/Drupal/Core/Config',
                'Drupal\\Core\\Datetime' => 'core/lib/Drupal/Core/Datetime',
                'Drupal\\Core\\Entity' => 'core/lib/Drupal/Core/Entity',
                'Drupal\\Core\\Field' => 'core/lib/Drupal/Core/Field',
                'Drupal\\Core\\Mail' => 'core/lib/Drupal/Core/Mail',
                'Drupal\\Core\\Render' => 'core/lib/Drupal/Core/Render',
                'Drupal\\Core\\TypedData' => 'core/lib/Drupal/Core/TypedData',
                'Drupal\\Core\\Validation' => 'core/lib/Drupal/Core/Validation',
                'Drupal\\Component\\Annotation' => 'core/lib/Drupal/Component/Annotation',
            ),
            'language.default_values' => array(
                'id' => 'en',
                'name' => 'English',
                'direction' => 'ltr',
                'weight' => 0,
                'locked' => false,
            ),
            'session.storage.options' => array(
                'gc_probability' => 1,
                'gc_divisor' => 100,
                'gc_maxlifetime' => 200000,
                'cookie_lifetime' => 2000000,
            ),
            'twig.config' => array(
                'debug' => false,
                'auto_reload' => NULL,
                'cache' => true,
            ),
            'renderer.config' => array(
                'required_cache_contexts' => array(
                    0 => 'languages:language_interface',
                    1 => 'theme',
                ),
            ),
            'factory.keyvalue' => array(

            ),
            'factory.keyvalue.expirable' => array(

            ),
            'user.tempstore.expire' => 604800,
            'persist_ids' => array(
                0 => 'class_loader',
                1 => 'kernel',
                2 => 'service_container',
                3 => 'request_stack',
                4 => 'router.request_context',
            ),
            'main_content_renderers' => array(
                'html' => 'main_content_renderer.html',
                'drupal_ajax' => 'main_content_renderer.ajax',
                'iframeupload' => 'main_content_renderer.ajax',
                'drupal_dialog' => 'main_content_renderer.dialog',
                'drupal_modal' => 'main_content_renderer.modal',
            ),
            'cache_bins' => array(
                'cache.bootstrap' => 'bootstrap',
                'cache.config' => 'config',
                'cache.default' => 'default',
                'cache.entity' => 'entity',
                'cache.menu' => 'menu',
                'cache.render' => 'render',
                'cache.data' => 'data',
                'cache.discovery' => 'discovery',
                'cache.rest' => 'rest',
                'cache.toolbar' => 'toolbar',
            ),
            'cache_default_bin_backends' => array(
                'bootstrap' => 'cache.backend.chainedfast',
                'config' => 'cache.backend.chainedfast',
                'discovery' => 'cache.backend.chainedfast',
            ),
            'cache_contexts' => array(
                0 => 'cookies',
                1 => 'headers',
                2 => 'ip',
                3 => 'languages',
                4 => 'request_format',
                5 => 'route',
                6 => 'route.menu_active_trails',
                7 => 'route.name',
                8 => 'theme',
                9 => 'timezone',
                10 => 'url',
                11 => 'url.query_args',
                12 => 'url.query_args.pagers',
                13 => 'url.site',
                14 => 'user',
                15 => 'user.is_super_user',
                16 => 'user.node_grants',
                17 => 'user.permissions',
                18 => 'user.roles',
            ),
            'serializer.formats' => array(
                0 => 'hal_json',
                1 => 'json',
                2 => 'xml',
            ),
        );
    }
}

/**
 * Provides a proxy class for \Drupal\Core\PageCache\ChainResponsePolicy.
 *
 * @see \Drupal\Component\ProxyBuilder
 */
class Drupal_Core_PageCache_ChainResponsePolicy_Proxy implements \Drupal\Core\PageCache\ChainResponsePolicyInterface
{

    use \Drupal\Core\DependencyInjection\DependencySerializationTrait;

    /**
     * @var string
     */
    protected $serviceId;

    /**
     * @var \Drupal\Core\PageCache\ChainResponsePolicy
     */
    protected $service;

    /**
     * The service container.
     *
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */
    protected $container;

    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container, $serviceId)
    {
        $this->container = $container;
        $this->serviceId = $serviceId;
    }

    protected function lazyLoadItself()
    {
        if (!isset($this->service)) {
            $method_name = 'get' . Container::camelize($this->serviceId) . 'Service';
            $this->service = $this->container->$method_name(false);
        }

        return $this->service;
    }

    public function check(\Symfony\Component\HttpFoundation\Response $response, \Symfony\Component\HttpFoundation\Request $request)
    {
        return $this->lazyLoadItself()->check($response, $request);
    }

    public function addPolicy(\Drupal\Core\PageCache\ResponsePolicyInterface $policy)
    {
        return $this->lazyLoadItself()->addPolicy($policy);
    }

}

/**
 * Provides a proxy class for \Drupal\Core\Config\ConfigInstaller.
 *
 * @see \Drupal\Component\ProxyBuilder
 */
class Drupal_Core_Config_ConfigInstaller_Proxy implements \Drupal\Core\Config\ConfigInstallerInterface
{

    use \Drupal\Core\DependencyInjection\DependencySerializationTrait;

    /**
     * @var string
     */
    protected $serviceId;

    /**
     * @var \Drupal\Core\Config\ConfigInstaller
     */
    protected $service;

    /**
     * The service container.
     *
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */
    protected $container;

    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container, $serviceId)
    {
        $this->container = $container;
        $this->serviceId = $serviceId;
    }

    protected function lazyLoadItself()
    {
        if (!isset($this->service)) {
            $method_name = 'get' . Container::camelize($this->serviceId) . 'Service';
            $this->service = $this->container->$method_name(false);
        }

        return $this->service;
    }

    public function installDefaultConfig($type, $name)
    {
        return $this->lazyLoadItself()->installDefaultConfig($type, $name);
    }

    public function installOptionalConfig(\Drupal\Core\Config\StorageInterface $storage = NULL, $dependency = array (
    ))
    {
        return $this->lazyLoadItself()->installOptionalConfig($storage, $dependency);
    }

    public function installCollectionDefaultConfig($collection)
    {
        return $this->lazyLoadItself()->installCollectionDefaultConfig($collection);
    }

    public function setSourceStorage(\Drupal\Core\Config\StorageInterface $storage)
    {
        return $this->lazyLoadItself()->setSourceStorage($storage);
    }

    public function getSourceStorage()
    {
        return $this->lazyLoadItself()->getSourceStorage();
    }

    public function setSyncing($status)
    {
        return $this->lazyLoadItself()->setSyncing($status);
    }

    public function isSyncing()
    {
        return $this->lazyLoadItself()->isSyncing();
    }

    public function checkConfigurationToInstall($type, $name)
    {
        return $this->lazyLoadItself()->checkConfigurationToInstall($type, $name);
    }

}

/**
 * Provides a proxy class for \Drupal\Core\Cron.
 *
 * @see \Drupal\Component\ProxyBuilder
 */
class Drupal_Core_Cron_Proxy implements \Drupal\Core\CronInterface
{

    use \Drupal\Core\DependencyInjection\DependencySerializationTrait;

    /**
     * @var string
     */
    protected $serviceId;

    /**
     * @var \Drupal\Core\Cron
     */
    protected $service;

    /**
     * The service container.
     *
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */
    protected $container;

    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container, $serviceId)
    {
        $this->container = $container;
        $this->serviceId = $serviceId;
    }

    protected function lazyLoadItself()
    {
        if (!isset($this->service)) {
            $method_name = 'get' . Container::camelize($this->serviceId) . 'Service';
            $this->service = $this->container->$method_name(false);
        }

        return $this->service;
    }

    public function run()
    {
        return $this->lazyLoadItself()->run();
    }

}

/**
 * Provides a proxy class for \Drupal\Core\Extension\ModuleInstaller.
 *
 * @see \Drupal\Component\ProxyBuilder
 */
class Drupal_Core_Extension_ModuleInstaller_Proxy implements \Drupal\Core\Extension\ModuleInstallerInterface
{

    use \Drupal\Core\DependencyInjection\DependencySerializationTrait;

    /**
     * @var string
     */
    protected $serviceId;

    /**
     * @var \Drupal\Core\Extension\ModuleInstaller
     */
    protected $service;

    /**
     * The service container.
     *
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */
    protected $container;

    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container, $serviceId)
    {
        $this->container = $container;
        $this->serviceId = $serviceId;
    }

    protected function lazyLoadItself()
    {
        if (!isset($this->service)) {
            $method_name = 'get' . Container::camelize($this->serviceId) . 'Service';
            $this->service = $this->container->$method_name(false);
        }

        return $this->service;
    }

    public function addUninstallValidator(\Drupal\Core\Extension\ModuleUninstallValidatorInterface $uninstall_validator)
    {
        return $this->lazyLoadItself()->addUninstallValidator($uninstall_validator);
    }

    public function install(array $module_list, $enable_dependencies = true)
    {
        return $this->lazyLoadItself()->install($module_list, $enable_dependencies);
    }

    public function uninstall(array $module_list, $uninstall_dependents = true)
    {
        return $this->lazyLoadItself()->uninstall($module_list, $uninstall_dependents);
    }

    public function validateUninstall(array $module_list)
    {
        return $this->lazyLoadItself()->validateUninstall($module_list);
    }

}

/**
 * Provides a proxy class for \Drupal\Core\Entity\ContentUninstallValidator.
 *
 * @see \Drupal\Component\ProxyBuilder
 */
class Drupal_Core_Entity_ContentUninstallValidator_Proxy implements \Drupal\Core\Extension\ModuleUninstallValidatorInterface
{

    use \Drupal\Core\DependencyInjection\DependencySerializationTrait;

    /**
     * @var string
     */
    protected $serviceId;

    /**
     * @var \Drupal\Core\Entity\ContentUninstallValidator
     */
    protected $service;

    /**
     * The service container.
     *
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */
    protected $container;

    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container, $serviceId)
    {
        $this->container = $container;
        $this->serviceId = $serviceId;
    }

    protected function lazyLoadItself()
    {
        if (!isset($this->service)) {
            $method_name = 'get' . Container::camelize($this->serviceId) . 'Service';
            $this->service = $this->container->$method_name(false);
        }

        return $this->service;
    }

    public function validate($module)
    {
        return $this->lazyLoadItself()->validate($module);
    }

    public function setStringTranslation(\Drupal\Core\StringTranslation\TranslationInterface $translation)
    {
        return $this->lazyLoadItself()->setStringTranslation($translation);
    }

}

/**
 * Provides a proxy class for \Drupal\Core\Field\FieldModuleUninstallValidator.
 *
 * @see \Drupal\Component\ProxyBuilder
 */
class Drupal_Core_Field_FieldModuleUninstallValidator_Proxy implements \Drupal\Core\Extension\ModuleUninstallValidatorInterface
{

    use \Drupal\Core\DependencyInjection\DependencySerializationTrait;

    /**
     * @var string
     */
    protected $serviceId;

    /**
     * @var \Drupal\Core\Field\FieldModuleUninstallValidator
     */
    protected $service;

    /**
     * The service container.
     *
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */
    protected $container;

    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container, $serviceId)
    {
        $this->container = $container;
        $this->serviceId = $serviceId;
    }

    protected function lazyLoadItself()
    {
        if (!isset($this->service)) {
            $method_name = 'get' . Container::camelize($this->serviceId) . 'Service';
            $this->service = $this->container->$method_name(false);
        }

        return $this->service;
    }

    public function validate($module_name)
    {
        return $this->lazyLoadItself()->validate($module_name);
    }

    public function setStringTranslation(\Drupal\Core\StringTranslation\TranslationInterface $translation)
    {
        return $this->lazyLoadItself()->setStringTranslation($translation);
    }

}

/**
 * Provides a proxy class for \Drupal\Core\Extension\RequiredModuleUninstallValidator.
 *
 * @see \Drupal\Component\ProxyBuilder
 */
class Drupal_Core_Extension_RequiredModuleUninstallValidator_Proxy implements \Drupal\Core\Extension\ModuleUninstallValidatorInterface
{

    use \Drupal\Core\DependencyInjection\DependencySerializationTrait;

    /**
     * @var string
     */
    protected $serviceId;

    /**
     * @var \Drupal\Core\Extension\RequiredModuleUninstallValidator
     */
    protected $service;

    /**
     * The service container.
     *
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */
    protected $container;

    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container, $serviceId)
    {
        $this->container = $container;
        $this->serviceId = $serviceId;
    }

    protected function lazyLoadItself()
    {
        if (!isset($this->service)) {
            $method_name = 'get' . Container::camelize($this->serviceId) . 'Service';
            $this->service = $this->container->$method_name(false);
        }

        return $this->service;
    }

    public function validate($module)
    {
        return $this->lazyLoadItself()->validate($module);
    }

    public function setStringTranslation(\Drupal\Core\StringTranslation\TranslationInterface $translation)
    {
        return $this->lazyLoadItself()->setStringTranslation($translation);
    }

}

/**
 * Provides a proxy class for \Drupal\Core\Plugin\CachedDiscoveryClearer.
 *
 * @see \Drupal\Component\ProxyBuilder
 */
class Drupal_Core_Plugin_CachedDiscoveryClearer_Proxy
{

    use \Drupal\Core\DependencyInjection\DependencySerializationTrait;

    /**
     * @var string
     */
    protected $serviceId;

    /**
     * @var \Drupal\Core\Plugin\CachedDiscoveryClearer
     */
    protected $service;

    /**
     * The service container.
     *
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */
    protected $container;

    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container, $serviceId)
    {
        $this->container = $container;
        $this->serviceId = $serviceId;
    }

    protected function lazyLoadItself()
    {
        if (!isset($this->service)) {
            $method_name = 'get' . Container::camelize($this->serviceId) . 'Service';
            $this->service = $this->container->$method_name(false);
        }

        return $this->service;
    }

    public function addCachedDiscovery(\Drupal\Component\Plugin\Discovery\CachedDiscoveryInterface $cached_discovery)
    {
        return $this->lazyLoadItself()->addCachedDiscovery($cached_discovery);
    }

    public function clearCachedDefinitions()
    {
        return $this->lazyLoadItself()->clearCachedDefinitions();
    }

}

/**
 * Provides a proxy class for \Drupal\Core\ParamConverter\MenuLinkPluginConverter.
 *
 * @see \Drupal\Component\ProxyBuilder
 */
class Drupal_Core_ParamConverter_MenuLinkPluginConverter_Proxy implements \Drupal\Core\ParamConverter\ParamConverterInterface
{

    use \Drupal\Core\DependencyInjection\DependencySerializationTrait;

    /**
     * @var string
     */
    protected $serviceId;

    /**
     * @var \Drupal\Core\ParamConverter\MenuLinkPluginConverter
     */
    protected $service;

    /**
     * The service container.
     *
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */
    protected $container;

    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container, $serviceId)
    {
        $this->container = $container;
        $this->serviceId = $serviceId;
    }

    protected function lazyLoadItself()
    {
        if (!isset($this->service)) {
            $method_name = 'get' . Container::camelize($this->serviceId) . 'Service';
            $this->service = $this->container->$method_name(false);
        }

        return $this->service;
    }

    public function convert($value, $definition, $name, array $defaults)
    {
        return $this->lazyLoadItself()->convert($value, $definition, $name, $defaults);
    }

    public function applies($definition, $name, \Symfony\Component\Routing\Route $route)
    {
        return $this->lazyLoadItself()->applies($definition, $name, $route);
    }

}

/**
 * Provides a proxy class for \Symfony\Component\HttpKernel\HttpKernel.
 *
 * @see \Drupal\Component\ProxyBuilder
 */
class Symfony_Component_HttpKernel_HttpKernel_Proxy implements \Symfony\Component\HttpKernel\HttpKernelInterface, \Symfony\Component\HttpKernel\TerminableInterface
{

    use \Drupal\Core\DependencyInjection\DependencySerializationTrait;

    /**
     * @var string
     */
    protected $serviceId;

    /**
     * @var \Symfony\Component\HttpKernel\HttpKernel
     */
    protected $service;

    /**
     * The service container.
     *
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */
    protected $container;

    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container, $serviceId)
    {
        $this->container = $container;
        $this->serviceId = $serviceId;
    }

    protected function lazyLoadItself()
    {
        if (!isset($this->service)) {
            $method_name = 'get' . Container::camelize($this->serviceId) . 'Service';
            $this->service = $this->container->$method_name(false);
        }

        return $this->service;
    }

    public function handle(\Symfony\Component\HttpFoundation\Request $request, $type = 1, $catch = true)
    {
        return $this->lazyLoadItself()->handle($request, $type, $catch);
    }

    public function terminate(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\HttpFoundation\Response $response)
    {
        return $this->lazyLoadItself()->terminate($request, $response);
    }

    public function terminateWithException(\Exception $exception)
    {
        return $this->lazyLoadItself()->terminateWithException($exception);
    }

}

/**
 * Provides a proxy class for \Drupal\Core\StackMiddleware\KernelPreHandle.
 *
 * @see \Drupal\Component\ProxyBuilder
 */
class Drupal_Core_StackMiddleware_KernelPreHandle_Proxy implements \Symfony\Component\HttpKernel\HttpKernelInterface
{

    use \Drupal\Core\DependencyInjection\DependencySerializationTrait;

    /**
     * @var string
     */
    protected $serviceId;

    /**
     * @var \Drupal\Core\StackMiddleware\KernelPreHandle
     */
    protected $service;

    /**
     * The service container.
     *
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */
    protected $container;

    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container, $serviceId)
    {
        $this->container = $container;
        $this->serviceId = $serviceId;
    }

    protected function lazyLoadItself()
    {
        if (!isset($this->service)) {
            $method_name = 'get' . Container::camelize($this->serviceId) . 'Service';
            $this->service = $this->container->$method_name(false);
        }

        return $this->service;
    }

    public function handle(\Symfony\Component\HttpFoundation\Request $request, $type = 1, $catch = true)
    {
        return $this->lazyLoadItself()->handle($request, $type, $catch);
    }

}

/**
 * Provides a proxy class for \Drupal\Core\StackMiddleware\Session.
 *
 * @see \Drupal\Component\ProxyBuilder
 */
class Drupal_Core_StackMiddleware_Session_Proxy implements \Symfony\Component\HttpKernel\HttpKernelInterface
{

    use \Drupal\Core\DependencyInjection\DependencySerializationTrait;

    /**
     * @var string
     */
    protected $serviceId;

    /**
     * @var \Drupal\Core\StackMiddleware\Session
     */
    protected $service;

    /**
     * The service container.
     *
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */
    protected $container;

    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container, $serviceId)
    {
        $this->container = $container;
        $this->serviceId = $serviceId;
    }

    protected function lazyLoadItself()
    {
        if (!isset($this->service)) {
            $method_name = 'get' . Container::camelize($this->serviceId) . 'Service';
            $this->service = $this->container->$method_name(false);
        }

        return $this->service;
    }

    public function handle(\Symfony\Component\HttpFoundation\Request $request, $type = 1, $catch = true)
    {
        return $this->lazyLoadItself()->handle($request, $type, $catch);
    }

    public function setContainer(\Symfony\Component\DependencyInjection\ContainerInterface $container = NULL)
    {
        return $this->lazyLoadItself()->setContainer($container);
    }

}

/**
 * Provides a proxy class for \Drupal\Core\Lock\DatabaseLockBackend.
 *
 * @see \Drupal\Component\ProxyBuilder
 */
class Drupal_Core_Lock_DatabaseLockBackend_Proxy implements \Drupal\Core\Lock\LockBackendInterface
{

    use \Drupal\Core\DependencyInjection\DependencySerializationTrait;

    /**
     * @var string
     */
    protected $serviceId;

    /**
     * @var \Drupal\Core\Lock\DatabaseLockBackend
     */
    protected $service;

    /**
     * The service container.
     *
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */
    protected $container;

    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container, $serviceId)
    {
        $this->container = $container;
        $this->serviceId = $serviceId;
    }

    protected function lazyLoadItself()
    {
        if (!isset($this->service)) {
            $method_name = 'get' . Container::camelize($this->serviceId) . 'Service';
            $this->service = $this->container->$method_name(false);
        }

        return $this->service;
    }

    public function acquire($name, $timeout = 30)
    {
        return $this->lazyLoadItself()->acquire($name, $timeout);
    }

    public function lockMayBeAvailable($name)
    {
        return $this->lazyLoadItself()->lockMayBeAvailable($name);
    }

    public function release($name)
    {
        return $this->lazyLoadItself()->release($name);
    }

    public function releaseAll($lock_id = NULL)
    {
        return $this->lazyLoadItself()->releaseAll($lock_id);
    }

    public function wait($name, $delay = 30)
    {
        return $this->lazyLoadItself()->wait($name, $delay);
    }

    public function getLockId()
    {
        return $this->lazyLoadItself()->getLockId();
    }

}

/**
 * Provides a proxy class for \Drupal\Core\Lock\PersistentDatabaseLockBackend.
 *
 * @see \Drupal\Component\ProxyBuilder
 */
class Drupal_Core_Lock_PersistentDatabaseLockBackend_Proxy implements \Drupal\Core\Lock\LockBackendInterface
{

    use \Drupal\Core\DependencyInjection\DependencySerializationTrait;

    /**
     * @var string
     */
    protected $serviceId;

    /**
     * @var \Drupal\Core\Lock\PersistentDatabaseLockBackend
     */
    protected $service;

    /**
     * The service container.
     *
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */
    protected $container;

    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container, $serviceId)
    {
        $this->container = $container;
        $this->serviceId = $serviceId;
    }

    protected function lazyLoadItself()
    {
        if (!isset($this->service)) {
            $method_name = 'get' . Container::camelize($this->serviceId) . 'Service';
            $this->service = $this->container->$method_name(false);
        }

        return $this->service;
    }

    public function acquire($name, $timeout = 30)
    {
        return $this->lazyLoadItself()->acquire($name, $timeout);
    }

    public function lockMayBeAvailable($name)
    {
        return $this->lazyLoadItself()->lockMayBeAvailable($name);
    }

    public function release($name)
    {
        return $this->lazyLoadItself()->release($name);
    }

    public function releaseAll($lock_id = NULL)
    {
        return $this->lazyLoadItself()->releaseAll($lock_id);
    }

    public function wait($name, $delay = 30)
    {
        return $this->lazyLoadItself()->wait($name, $delay);
    }

    public function getLockId()
    {
        return $this->lazyLoadItself()->getLockId();
    }

}

/**
 * Provides a proxy class for \Drupal\Core\Routing\MatcherDumper.
 *
 * @see \Drupal\Component\ProxyBuilder
 */
class Drupal_Core_Routing_MatcherDumper_Proxy implements \Drupal\Core\Routing\MatcherDumperInterface
{

    use \Drupal\Core\DependencyInjection\DependencySerializationTrait;

    /**
     * @var string
     */
    protected $serviceId;

    /**
     * @var \Drupal\Core\Routing\MatcherDumper
     */
    protected $service;

    /**
     * The service container.
     *
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */
    protected $container;

    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container, $serviceId)
    {
        $this->container = $container;
        $this->serviceId = $serviceId;
    }

    protected function lazyLoadItself()
    {
        if (!isset($this->service)) {
            $method_name = 'get' . Container::camelize($this->serviceId) . 'Service';
            $this->service = $this->container->$method_name(false);
        }

        return $this->service;
    }

    public function addRoutes(\Symfony\Component\Routing\RouteCollection $routes)
    {
        return $this->lazyLoadItself()->addRoutes($routes);
    }

    public function dump(array $options = array (
    ))
    {
        return $this->lazyLoadItself()->dump($options);
    }

    public function getRoutes()
    {
        return $this->lazyLoadItself()->getRoutes();
    }

}

/**
 * Provides a proxy class for \Drupal\Core\Routing\RouteBuilder.
 *
 * @see \Drupal\Component\ProxyBuilder
 */
class Drupal_Core_Routing_RouteBuilder_Proxy implements \Drupal\Core\Routing\RouteBuilderInterface, \Drupal\Core\DestructableInterface
{

    use \Drupal\Core\DependencyInjection\DependencySerializationTrait;

    /**
     * @var string
     */
    protected $serviceId;

    /**
     * @var \Drupal\Core\Routing\RouteBuilder
     */
    protected $service;

    /**
     * The service container.
     *
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */
    protected $container;

    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container, $serviceId)
    {
        $this->container = $container;
        $this->serviceId = $serviceId;
    }

    protected function lazyLoadItself()
    {
        if (!isset($this->service)) {
            $method_name = 'get' . Container::camelize($this->serviceId) . 'Service';
            $this->service = $this->container->$method_name(false);
        }

        return $this->service;
    }

    public function setRebuildNeeded()
    {
        return $this->lazyLoadItself()->setRebuildNeeded();
    }

    public function rebuild()
    {
        return $this->lazyLoadItself()->rebuild();
    }

    public function rebuildIfNeeded()
    {
        return $this->lazyLoadItself()->rebuildIfNeeded();
    }

    public function destruct()
    {
        return $this->lazyLoadItself()->destruct();
    }

}

/**
 * Provides a proxy class for \Drupal\Core\ParamConverter\AdminPathConfigEntityConverter.
 *
 * @see \Drupal\Component\ProxyBuilder
 */
class Drupal_Core_ParamConverter_AdminPathConfigEntityConverter_Proxy implements \Drupal\Core\ParamConverter\ParamConverterInterface
{

    use \Drupal\Core\DependencyInjection\DependencySerializationTrait;

    /**
     * @var string
     */
    protected $serviceId;

    /**
     * @var \Drupal\Core\ParamConverter\AdminPathConfigEntityConverter
     */
    protected $service;

    /**
     * The service container.
     *
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */
    protected $container;

    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container, $serviceId)
    {
        $this->container = $container;
        $this->serviceId = $serviceId;
    }

    protected function lazyLoadItself()
    {
        if (!isset($this->service)) {
            $method_name = 'get' . Container::camelize($this->serviceId) . 'Service';
            $this->service = $this->container->$method_name(false);
        }

        return $this->service;
    }

    public function convert($value, $definition, $name, array $defaults)
    {
        return $this->lazyLoadItself()->convert($value, $definition, $name, $defaults);
    }

    public function applies($definition, $name, \Symfony\Component\Routing\Route $route)
    {
        return $this->lazyLoadItself()->applies($definition, $name, $route);
    }

}

/**
 * Provides a proxy class for \Drupal\Core\Render\BareHtmlPageRenderer.
 *
 * @see \Drupal\Component\ProxyBuilder
 */
class Drupal_Core_Render_BareHtmlPageRenderer_Proxy implements \Drupal\Core\Render\BareHtmlPageRendererInterface
{

    use \Drupal\Core\DependencyInjection\DependencySerializationTrait;

    /**
     * @var string
     */
    protected $serviceId;

    /**
     * @var \Drupal\Core\Render\BareHtmlPageRenderer
     */
    protected $service;

    /**
     * The service container.
     *
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */
    protected $container;

    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container, $serviceId)
    {
        $this->container = $container;
        $this->serviceId = $serviceId;
    }

    protected function lazyLoadItself()
    {
        if (!isset($this->service)) {
            $method_name = 'get' . Container::camelize($this->serviceId) . 'Service';
            $this->service = $this->container->$method_name(false);
        }

        return $this->service;
    }

    public function renderBarePage(array $content, $title, $page_theme_property, array $page_additions = array (
    ))
    {
        return $this->lazyLoadItself()->renderBarePage($content, $title, $page_theme_property, $page_additions);
    }

}

/**
 * Provides a proxy class for \Drupal\Core\Batch\BatchStorage.
 *
 * @see \Drupal\Component\ProxyBuilder
 */
class Drupal_Core_Batch_BatchStorage_Proxy implements \Drupal\Core\Batch\BatchStorageInterface
{

    use \Drupal\Core\DependencyInjection\DependencySerializationTrait;

    /**
     * @var string
     */
    protected $serviceId;

    /**
     * @var \Drupal\Core\Batch\BatchStorage
     */
    protected $service;

    /**
     * The service container.
     *
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */
    protected $container;

    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container, $serviceId)
    {
        $this->container = $container;
        $this->serviceId = $serviceId;
    }

    protected function lazyLoadItself()
    {
        if (!isset($this->service)) {
            $method_name = 'get' . Container::camelize($this->serviceId) . 'Service';
            $this->service = $this->container->$method_name(false);
        }

        return $this->service;
    }

    public function load($id)
    {
        return $this->lazyLoadItself()->load($id);
    }

    public function delete($id)
    {
        return $this->lazyLoadItself()->delete($id);
    }

    public function update(array $batch)
    {
        return $this->lazyLoadItself()->update($batch);
    }

    public function cleanup()
    {
        return $this->lazyLoadItself()->cleanup();
    }

    public function create(array $batch)
    {
        return $this->lazyLoadItself()->create($batch);
    }

}

/**
 * Provides a proxy class for \Drupal\Core\File\MimeType\MimeTypeGuesser.
 *
 * @see \Drupal\Component\ProxyBuilder
 */
class Drupal_Core_File_MimeType_MimeTypeGuesser_Proxy implements \Symfony\Component\HttpFoundation\File\MimeType\MimeTypeGuesserInterface
{

    use \Drupal\Core\DependencyInjection\DependencySerializationTrait;

    /**
     * @var string
     */
    protected $serviceId;

    /**
     * @var \Drupal\Core\File\MimeType\MimeTypeGuesser
     */
    protected $service;

    /**
     * The service container.
     *
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */
    protected $container;

    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container, $serviceId)
    {
        $this->container = $container;
        $this->serviceId = $serviceId;
    }

    protected function lazyLoadItself()
    {
        if (!isset($this->service)) {
            $method_name = 'get' . Container::camelize($this->serviceId) . 'Service';
            $this->service = $this->container->$method_name(false);
        }

        return $this->service;
    }

    public function guess($path)
    {
        return $this->lazyLoadItself()->guess($path);
    }

    public function addGuesser(\Symfony\Component\HttpFoundation\File\MimeType\MimeTypeGuesserInterface $guesser, $priority = 0)
    {
        return $this->lazyLoadItself()->addGuesser($guesser, $priority);
    }

    public static function registerWithSymfonyGuesser(\Symfony\Component\DependencyInjection\ContainerInterface $container)
    {
        \Drupal\Core\File\MimeType\MimeTypeGuesser::registerWithSymfonyGuesser($container);
    }

}

/**
 * Provides a proxy class for \Drupal\Core\File\MimeType\ExtensionMimeTypeGuesser.
 *
 * @see \Drupal\Component\ProxyBuilder
 */
class Drupal_Core_File_MimeType_ExtensionMimeTypeGuesser_Proxy implements \Symfony\Component\HttpFoundation\File\MimeType\MimeTypeGuesserInterface
{

    use \Drupal\Core\DependencyInjection\DependencySerializationTrait;

    /**
     * @var string
     */
    protected $serviceId;

    /**
     * @var \Drupal\Core\File\MimeType\ExtensionMimeTypeGuesser
     */
    protected $service;

    /**
     * The service container.
     *
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */
    protected $container;

    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container, $serviceId)
    {
        $this->container = $container;
        $this->serviceId = $serviceId;
    }

    protected function lazyLoadItself()
    {
        if (!isset($this->service)) {
            $method_name = 'get' . Container::camelize($this->serviceId) . 'Service';
            $this->service = $this->container->$method_name(false);
        }

        return $this->service;
    }

    public function guess($path)
    {
        return $this->lazyLoadItself()->guess($path);
    }

    public function setMapping(array $mapping = NULL)
    {
        return $this->lazyLoadItself()->setMapping($mapping);
    }

}

/**
 * Provides a proxy class for \Drupal\field\FieldUninstallValidator.
 *
 * @see \Drupal\Component\ProxyBuilder
 */
class Drupal_field_FieldUninstallValidator_Proxy implements \Drupal\Core\Extension\ModuleUninstallValidatorInterface
{

    use \Drupal\Core\DependencyInjection\DependencySerializationTrait;

    /**
     * @var string
     */
    protected $serviceId;

    /**
     * @var \Drupal\field\FieldUninstallValidator
     */
    protected $service;

    /**
     * The service container.
     *
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */
    protected $container;

    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container, $serviceId)
    {
        $this->container = $container;
        $this->serviceId = $serviceId;
    }

    protected function lazyLoadItself()
    {
        if (!isset($this->service)) {
            $method_name = 'get' . Container::camelize($this->serviceId) . 'Service';
            $this->service = $this->container->$method_name(false);
        }

        return $this->service;
    }

    public function validate($module)
    {
        return $this->lazyLoadItself()->validate($module);
    }

    public function setStringTranslation(\Drupal\Core\StringTranslation\TranslationInterface $translation)
    {
        return $this->lazyLoadItself()->setStringTranslation($translation);
    }

}

/**
 * Provides a proxy class for \Drupal\filter\FilterUninstallValidator.
 *
 * @see \Drupal\Component\ProxyBuilder
 */
class Drupal_filter_FilterUninstallValidator_Proxy implements \Drupal\Core\Extension\ModuleUninstallValidatorInterface
{

    use \Drupal\Core\DependencyInjection\DependencySerializationTrait;

    /**
     * @var string
     */
    protected $serviceId;

    /**
     * @var \Drupal\filter\FilterUninstallValidator
     */
    protected $service;

    /**
     * The service container.
     *
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */
    protected $container;

    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container, $serviceId)
    {
        $this->container = $container;
        $this->serviceId = $serviceId;
    }

    protected function lazyLoadItself()
    {
        if (!isset($this->service)) {
            $method_name = 'get' . Container::camelize($this->serviceId) . 'Service';
            $this->service = $this->container->$method_name(false);
        }

        return $this->service;
    }

    public function validate($module)
    {
        return $this->lazyLoadItself()->validate($module);
    }

    public function setStringTranslation(\Drupal\Core\StringTranslation\TranslationInterface $translation)
    {
        return $this->lazyLoadItself()->setStringTranslation($translation);
    }

}

/**
 * Provides a proxy class for \Drupal\node\ParamConverter\NodePreviewConverter.
 *
 * @see \Drupal\Component\ProxyBuilder
 */
class Drupal_node_ParamConverter_NodePreviewConverter_Proxy implements \Drupal\Core\ParamConverter\ParamConverterInterface
{

    use \Drupal\Core\DependencyInjection\DependencySerializationTrait;

    /**
     * @var string
     */
    protected $serviceId;

    /**
     * @var \Drupal\node\ParamConverter\NodePreviewConverter
     */
    protected $service;

    /**
     * The service container.
     *
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */
    protected $container;

    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container, $serviceId)
    {
        $this->container = $container;
        $this->serviceId = $serviceId;
    }

    protected function lazyLoadItself()
    {
        if (!isset($this->service)) {
            $method_name = 'get' . Container::camelize($this->serviceId) . 'Service';
            $this->service = $this->container->$method_name(false);
        }

        return $this->service;
    }

    public function convert($value, $definition, $name, array $defaults)
    {
        return $this->lazyLoadItself()->convert($value, $definition, $name, $defaults);
    }

    public function applies($definition, $name, \Symfony\Component\Routing\Route $route)
    {
        return $this->lazyLoadItself()->applies($definition, $name, $route);
    }

}

/**
 * Provides a proxy class for \Drupal\views_ui\ParamConverter\ViewUIConverter.
 *
 * @see \Drupal\Component\ProxyBuilder
 */
class Drupal_views_ui_ParamConverter_ViewUIConverter_Proxy implements \Drupal\Core\ParamConverter\ParamConverterInterface
{

    use \Drupal\Core\DependencyInjection\DependencySerializationTrait;

    /**
     * @var string
     */
    protected $serviceId;

    /**
     * @var \Drupal\views_ui\ParamConverter\ViewUIConverter
     */
    protected $service;

    /**
     * The service container.
     *
     * @var \Symfony\Component\DependencyInjection\ContainerInterface
     */
    protected $container;

    public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container, $serviceId)
    {
        $this->container = $container;
        $this->serviceId = $serviceId;
    }

    protected function lazyLoadItself()
    {
        if (!isset($this->service)) {
            $method_name = 'get' . Container::camelize($this->serviceId) . 'Service';
            $this->service = $this->container->$method_name(false);
        }

        return $this->service;
    }

    public function convert($value, $definition, $name, array $defaults)
    {
        return $this->lazyLoadItself()->convert($value, $definition, $name, $defaults);
    }

    public function applies($definition, $name, \Symfony\Component\Routing\Route $route)
    {
        return $this->lazyLoadItself()->applies($definition, $name, $route);
    }

}
