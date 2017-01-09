<?php # -*- coding: utf-8 -*-

namespace PHPSTORM_META {

	$STATIC_METHOD_TYPES = [
		new \Inpsyde\MultilingualPress\Service\Container            => [
			'' == '@',

			'multilingualpress.active_plugins' instanceof \Inpsyde\MultilingualPress\SiteDuplication\ActivePlugins,
			'multilingualpress.add_languages_to_nav_menu_nonce' instanceof \Inpsyde\MultilingualPress\Common\Nonce\Nonce,
			'multilingualpress.asset_factory' instanceof \Inpsyde\MultilingualPress\Asset\AssetFactory,
			'multilingualpress.asset_manager' instanceof \Inpsyde\MultilingualPress\Asset\AssetManager,
			'multilingualpress.attachment_copier' instanceof \Inpsyde\MultilingualPress\SiteDuplication\AttachmentCopier,
			'multilingualpress.base_path_adapter' instanceof \Inpsyde\MultilingualPress\Common\BasePathAdapter,
			'multilingualpress.content_relations' instanceof \Inpsyde\MultilingualPress\API\ContentRelations,
			'multilingualpress.content_relations_table' instanceof \Inpsyde\MultilingualPress\Database\Table,
			'multilingualpress.error_factory' instanceof \Inpsyde\MultilingualPress\Factory\ErrorFactory,
			'multilingualpress.front_page_translator' instanceof \Inpsyde\MultilingualPress\Translation\Translator,
			'multilingualpress.installer' instanceof \Inpsyde\MultilingualPress\Installation\Installer,
			'multilingualpress.internal_locations' instanceof \Inpsyde\MultilingualPress\Core\InternalLocations,
			'multilingualpress.languages' instanceof \Inpsyde\MultilingualPress\API\Languages,
			'multilingualpress.languages_table' instanceof \Inpsyde\MultilingualPress\Database\Table,
			'multilingualpress.module_manager' instanceof \Inpsyde\MultilingualPress\Module\ModuleManager,
			'multilingualpress.nav_menu_ajax_handler' instanceof \Inpsyde\MultilingualPress\NavMenu\AJAXHandler,
			'multilingualpress.nav_menu_item_deletor' instanceof \Inpsyde\MultilingualPress\NavMenu\ItemDeletor,
			'multilingualpress.nav_menu_item_filter' instanceof \Inpsyde\MultilingualPress\NavMenu\ItemFilter,
			'multilingualpress.nav_menu_item_repository' instanceof \Inpsyde\MultilingualPress\NavMenu\ItemRepository,
			'multilingualpress.nav_menu_meta_box_model' instanceof \Inpsyde\MultilingualPress\Common\Admin\MetaBoxModel,
			'multilingualpress.nav_menu_meta_box_view' instanceof \Inpsyde\MultilingualPress\Common\Admin\MetaBoxView,
			'multilingualpress.network_plugin_deactivator' instanceof \Inpsyde\MultilingualPress\Installation\NetworkPluginDeactivator,
			'multilingualpress.nonce_factory' instanceof \Inpsyde\MultilingualPress\Factory\FallbackNonceFactory,
			'multilingualpress.plugin_settings_page' instanceof \Inpsyde\MultilingualPress\Common\Admin\SettingsPage,
			'multilingualpress.plugin_settings_page_view' instanceof \Inpsyde\MultilingualPress\Core\Admin\PluginSettingsPageView,
			'multilingualpress.plugin_settings_updater' instanceof \Inpsyde\MultilingualPress\Core\Admin\PluginSettingsUpdater,
			'multilingualpress.post_request_data_manipulator' instanceof \Inpsyde\MultilingualPress\Translation\RequestDataManipulator,
			'multilingualpress.post_translator' instanceof \Inpsyde\MultilingualPress\Translation\Translator,
			'multilingualpress.post_type_link_url_filter' instanceof \Inpsyde\MultilingualPress\Common\Filter,
			'multilingualpress.post_type_repository' instanceof \Inpsyde\MultilingualPress\Module\CustomPostTypeSupport\PostTypeRepository,
			'multilingualpress.post_type_support_settings_box' instanceof \Inpsyde\MultilingualPress\Common\Setting\SettingsBoxViewModel,
			'multilingualpress.post_type_support_settings_nonce' instanceof \Inpsyde\MultilingualPress\Common\Nonce\Nonce,
			'multilingualpress.post_type_support_settings_updater' instanceof \Inpsyde\MultilingualPress\Module\CustomPostTypeSupport\PostTypeSupportSettingsUpdater,
			'multilingualpress.post_type_translator' instanceof \Inpsyde\MultilingualPress\Translation\Translator,
			'multilingualpress.properties' instanceof \Inpsyde\MultilingualPress\Common\PluginProperties,
			'multilingualpress.quicklinks' instanceof \Inpsyde\MultilingualPress\Module\Quicklinks\Quicklinks,
			'multilingualpress.quicklinks_redirect_hosts_filter' instanceof \Inpsyde\MultilingualPress\Module\Quicklinks\RedirectHostsFilter,
			'multilingualpress.quicklinks_redirector' instanceof \Inpsyde\MultilingualPress\Module\Quicklinks\Redirector,
			'multilingualpress.quicklinks_settings_box' instanceof \Inpsyde\MultilingualPress\Module\Quicklinks\QuicklinksSettingsBox,
			'multilingualpress.quicklinks_settings_nonce' instanceof \Inpsyde\MultilingualPress\Common\Nonce\Nonce,
			'multilingualpress.quicklinks_settings_repository' instanceof \Inpsyde\MultilingualPress\Module\Quicklinks\SettingsRepository,
			'multilingualpress.quicklinks_settings_updater' instanceof \Inpsyde\MultilingualPress\Module\Quicklinks\SettingsUpdater,
			'multilingualpress.relationship_control_search' instanceof \Inpsyde\MultilingualPress\Relations\Post\Search\Search,
			'multilingualpress.relationship_control_search_controller' instanceof \Inpsyde\MultilingualPress\Relations\Post\Search\SearchController,
			'multilingualpress.relationship_control_search_results_view' instanceof \Inpsyde\MultilingualPress\Relations\Post\Search\SearchResultsView,
			'multilingualpress.relationship_control_view' instanceof \Inpsyde\MultilingualPress\Relations\Post\RelationshipControlView,
			'multilingualpress.relationship_controller' instanceof \Inpsyde\MultilingualPress\Relations\Post\RelationshipController,
			'multilingualpress.request' instanceof \Inpsyde\MultilingualPress\Common\Request,
			'multilingualpress.search_translator' instanceof \Inpsyde\MultilingualPress\Translation\Translator,
			'multilingualpress.site_duplicator' instanceof \Inpsyde\MultilingualPress\SiteDuplication\SiteDuplicator,
			'multilingualpress.site_relations' instanceof \Inpsyde\MultilingualPress\API\SiteRelations,
			'multilingualpress.site_relations_checker' instanceof \Inpsyde\MultilingualPress\Installation\SiteRelationsChecker,
			'multilingualpress.site_relations_table' instanceof \Inpsyde\MultilingualPress\Database\Table,
			'multilingualpress.system_checker' instanceof \Inpsyde\MultilingualPress\Installation\SystemChecker,
			'multilingualpress.table_duplicator' instanceof \Inpsyde\MultilingualPress\Database\TableDuplicator,
			'multilingualpress.table_installer' instanceof \Inpsyde\MultilingualPress\Database\TableInstaller,
			'multilingualpress.table_list' instanceof \Inpsyde\MultilingualPress\Database\TableList,
			'multilingualpress.table_replacer' instanceof \Inpsyde\MultilingualPress\Database\TableReplacer,
			'multilingualpress.table_string_replacer' instanceof \Inpsyde\MultilingualPress\Database\TableStringReplacer,
			'multilingualpress.term_translator' instanceof \Inpsyde\MultilingualPress\Translation\Translator,
			'multilingualpress.translation_completed_setting_nonce' instanceof \Inpsyde\MultilingualPress\Common\Nonce\Nonce,
			'multilingualpress.translation_completed_setting_updater' instanceof \Inpsyde\MultilingualPress\Widget\Dashboard\UntranslatedPosts\TranslationCompletedSettingUpdater,
			'multilingualpress.translation_completed_setting_view' instanceof \Inpsyde\MultilingualPress\Widget\Dashboard\UntranslatedPosts\TranslationCompletedSettingView,
			'multilingualpress.translations' instanceof \Inpsyde\MultilingualPress\API\Translations,
			'multilingualpress.trasher' instanceof \Inpsyde\MultilingualPress\Module\Trasher\Trasher,
			'multilingualpress.trasher_setting_nonce' instanceof \Inpsyde\MultilingualPress\Common\Nonce\Nonce,
			'multilingualpress.trasher_setting_repository' instanceof \Inpsyde\MultilingualPress\Module\Trasher\TrasherSettingRepository,
			'multilingualpress.trasher_setting_updater' instanceof \Inpsyde\MultilingualPress\Module\Trasher\TrasherSettingUpdater,
			'multilingualpress.trasher_setting_view' instanceof \Inpsyde\MultilingualPress\Module\Trasher\TrasherSettingView,
			'multilingualpress.type_factory' instanceof \Inpsyde\MultilingualPress\Factory\TypeFactory,
			'multilingualpress.untranslated_posts_dashboard_widget' instanceof \Inpsyde\MultilingualPress\Widget\Dashboard\DashboardWidget,
			'multilingualpress.untranslated_posts_dashboard_widget_view' instanceof \Inpsyde\MultilingualPress\Widget\Dashboard\View,
			'multilingualpress.untranslated_posts_repository' instanceof \Inpsyde\MultilingualPress\Widget\Dashboard\UntranslatedPosts\PostRepository,
			'multilingualpress.update_plugin_settings_nonce' instanceof \Inpsyde\MultilingualPress\Common\Nonce\Nonce,
			'multilingualpress.updater' instanceof \Inpsyde\MultilingualPress\Installation\Updater,
			'multilingualpress.user_admin_language_locale_filter' instanceof \Inpsyde\MultilingualPress\Common\Filter,
			'multilingualpress.user_admin_language_repository' instanceof \Inpsyde\MultilingualPress\Module\UserAdminLanguage\LanguageRepository,
		],
		\Inpsyde\MultilingualPress\MultilingualPress::resolve( '' ) => [
			'' == '@',

			'multilingualpress.asset_factory' instanceof \Inpsyde\MultilingualPress\Asset\AssetFactory,
			'multilingualpress.asset_manager' instanceof \Inpsyde\MultilingualPress\Asset\AssetManager,
			'multilingualpress.content_relations' instanceof \Inpsyde\MultilingualPress\API\ContentRelations,
			'multilingualpress.content_relations_table' instanceof \Inpsyde\MultilingualPress\Database\Table,
			'multilingualpress.error_factory' instanceof \Inpsyde\MultilingualPress\Factory\ErrorFactory,
			'multilingualpress.internal_locations' instanceof \Inpsyde\MultilingualPress\Core\InternalLocations,
			'multilingualpress.languages' instanceof \Inpsyde\MultilingualPress\API\Languages,
			'multilingualpress.languages_table' instanceof \Inpsyde\MultilingualPress\Database\Table,
			'multilingualpress.network_plugin_deactivator' instanceof \Inpsyde\MultilingualPress\Installation\NetworkPluginDeactivator,
			'multilingualpress.nonce_factory' instanceof \Inpsyde\MultilingualPress\Factory\FallbackNonceFactory,
			'multilingualpress.properties' instanceof \Inpsyde\MultilingualPress\Common\PluginProperties,
			'multilingualpress.request' instanceof \Inpsyde\MultilingualPress\Common\Request,
			'multilingualpress.site_relations' instanceof \Inpsyde\MultilingualPress\API\SiteRelations,
			'multilingualpress.site_relations_table' instanceof \Inpsyde\MultilingualPress\Database\Table,
			'multilingualpress.table_duplicator' instanceof \Inpsyde\MultilingualPress\Database\TableDuplicator,
			'multilingualpress.table_installer' instanceof \Inpsyde\MultilingualPress\Database\TableInstaller,
			'multilingualpress.table_list' instanceof \Inpsyde\MultilingualPress\Database\TableList,
			'multilingualpress.table_replacer' instanceof \Inpsyde\MultilingualPress\Database\TableReplacer,
			'multilingualpress.table_string_replacer' instanceof \Inpsyde\MultilingualPress\Database\TableStringReplacer,
			'multilingualpress.translations' instanceof \Inpsyde\MultilingualPress\API\Translations,
			'multilingualpress.type_factory' instanceof \Inpsyde\MultilingualPress\Factory\TypeFactory,
		],
	];
}
