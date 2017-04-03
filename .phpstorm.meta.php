<?php # -*- coding: utf-8 -*-

namespace PHPSTORM_META {

	override( \Inpsyde\MultilingualPress\resolve( 0 ), map( [
		'multilingualpress.asset_factory'                  => \Inpsyde\MultilingualPress\Asset\AssetFactory::class,
		'multilingualpress.asset_manager'                  => \Inpsyde\MultilingualPress\Asset\AssetManager::class,
		'multilingualpress.content_relations'              => \Inpsyde\MultilingualPress\API\ContentRelations::class,
		'multilingualpress.content_relations_table'        => \Inpsyde\MultilingualPress\Database\Table::class,
		'multilingualpress.error_factory'                  => \Inpsyde\MultilingualPress\Factory\ErrorFactory::class,
		'multilingualpress.internal_locations'             => \Inpsyde\MultilingualPress\Core\InternalLocations::class,
		'multilingualpress.languages'                      => \Inpsyde\MultilingualPress\API\Languages::class,
		'multilingualpress.languages_table'                => \Inpsyde\MultilingualPress\Database\Table::class,
		'multilingualpress.nav_menu_item_repository'       => \Inpsyde\MultilingualPress\NavMenu\ItemRepository::class,
		'multilingualpress.network_plugin_deactivator'     => \Inpsyde\MultilingualPress\Installation\NetworkPluginDeactivator::class,
		'multilingualpress.nonce_factory'                  => \Inpsyde\MultilingualPress\Factory\NonceFactory::class,
		'multilingualpress.post_type_repository'           => \Inpsyde\MultilingualPress\Module\CustomPostTypeSupport\PostTypeRepository::class,
		'multilingualpress.properties'                     => \Inpsyde\MultilingualPress\Common\PluginProperties::class,
		'multilingualpress.quicklinks_settings_repository' => \Inpsyde\MultilingualPress\Module\Quicklinks\SettingsRepository::class,
		'multilingualpress.redirect_settings_repository'   => \Inpsyde\MultilingualPress\Module\Redirect\SettingsRepository::class,
		'multilingualpress.request'                        => \Inpsyde\MultilingualPress\Common\Http\Request::class,
		'multilingualpress.site_relations'                 => \Inpsyde\MultilingualPress\API\SiteRelations::class,
		'multilingualpress.site_relations_table'           => \Inpsyde\MultilingualPress\Database\Table::class,
		'multilingualpress.site_settings_repository'       => \Inpsyde\MultilingualPress\Core\Admin\SiteSettingsRepository::class,
		'multilingualpress.table_duplicator'               => \Inpsyde\MultilingualPress\Database\TableDuplicator::class,
		'multilingualpress.table_installer'                => \Inpsyde\MultilingualPress\Database\TableInstaller::class,
		'multilingualpress.table_list'                     => \Inpsyde\MultilingualPress\Database\TableList::class,
		'multilingualpress.table_replacer'                 => \Inpsyde\MultilingualPress\Database\TableReplacer::class,
		'multilingualpress.table_string_replacer'          => \Inpsyde\MultilingualPress\Database\TableStringReplacer::class,
		'multilingualpress.translations'                   => \Inpsyde\MultilingualPress\API\Translations::class,
		'multilingualpress.trasher_setting_repository'     => \Inpsyde\MultilingualPress\Module\Trasher\TrasherSettingRepository::class,
		'multilingualpress.type_factory'                   => \Inpsyde\MultilingualPress\Factory\TypeFactory::class,
		'multilingualpress.uninstaller'                    => \Inpsyde\MultilingualPress\Installation\Uninstaller::class,
		'multilingualpress.untranslated_posts_repository'  => \Inpsyde\MultilingualPress\Widget\Dashboard\UntranslatedPosts\PostRepository::class,
		'multilingualpress.wp_request'                     => \Inpsyde\MultilingualPress\Common\WordPressRequest::class,
		'multilingualpress.wpdb'                           => \wpdb::class,
	] ) );

	override( new \Inpsyde\MultilingualPress\Service\Container, map( [
		'multilingualpress.accept_language_parser'                            => \Inpsyde\MultilingualPress\Common\AcceptHeader\HeaderParser::class,
		'multilingualpress.active_plugins'                                    => \Inpsyde\MultilingualPress\SiteDuplication\ActivePlugins::class,
		'multilingualpress.add_languages_to_nav_menu_nonce'                   => \Inpsyde\MultilingualPress\Common\Nonce\Nonce::class,
		'multilingualpress.alternative_language_title_site_setting'           => \Inpsyde\MultilingualPress\Common\Setting\Site\SiteSettingViewModel::class,
		'multilingualpress.asset_factory'                                     => \Inpsyde\MultilingualPress\Asset\AssetFactory::class,
		'multilingualpress.asset_manager'                                     => \Inpsyde\MultilingualPress\Asset\AssetManager::class,
		'multilingualpress.attachment_copier'                                 => \Inpsyde\MultilingualPress\SiteDuplication\AttachmentCopier::class,
		'multilingualpress.base_path_adapter'                                 => \Inpsyde\MultilingualPress\Common\BasePathAdapter::class,
		'multilingualpress.content_relations'                                 => \Inpsyde\MultilingualPress\API\ContentRelations::class,
		'multilingualpress.content_relations_table'                           => \Inpsyde\MultilingualPress\Database\Table::class,
		'multilingualpress.error_factory'                                     => \Inpsyde\MultilingualPress\Factory\ErrorFactory::class,
		'multilingualpress.flag_image_url_site_setting'                       => \Inpsyde\MultilingualPress\Common\Setting\Site\SiteSettingViewModel::class,
		'multilingualpress.front_page_translator'                             => \Inpsyde\MultilingualPress\Translation\Translator::class,
		'multilingualpress.installation_checker'                              => \Inpsyde\MultilingualPress\Installation\InstallationChecker::class,
		'multilingualpress.installer'                                         => \Inpsyde\MultilingualPress\Installation\Installer::class,
		'multilingualpress.internal_locations'                                => \Inpsyde\MultilingualPress\Core\InternalLocations::class,
		'multilingualpress.language_negotiator'                               => \Inpsyde\MultilingualPress\Module\Redirect\LanguageNegotiator::class,
		'multilingualpress.language_site_setting'                             => \Inpsyde\MultilingualPress\Common\Setting\Site\SiteSettingViewModel::class,
		'multilingualpress.language_switcher_widget'                          => \WP_Widget::class,
		'multilingualpress.language_switcher_widget_view'                     => \Inpsyde\MultilingualPress\Widget\Sidebar\View::class,
		'multilingualpress.languages'                                         => \Inpsyde\MultilingualPress\API\Languages::class,
		'multilingualpress.languages_table'                                   => \Inpsyde\MultilingualPress\Database\Table::class,
		'multilingualpress.module_manager'                                    => \Inpsyde\MultilingualPress\Module\ModuleManager::class,
		'multilingualpress.nav_menu_ajax_handler'                             => \Inpsyde\MultilingualPress\NavMenu\AJAXHandler::class,
		'multilingualpress.nav_menu_item_deletor'                             => \Inpsyde\MultilingualPress\NavMenu\ItemDeletor::class,
		'multilingualpress.nav_menu_item_filter'                              => \Inpsyde\MultilingualPress\NavMenu\ItemFilter::class,
		'multilingualpress.nav_menu_item_repository'                          => \Inpsyde\MultilingualPress\NavMenu\ItemRepository::class,
		'multilingualpress.nav_menu_meta_box_model'                           => \Inpsyde\MultilingualPress\Common\Admin\MetaBoxModel::class,
		'multilingualpress.nav_menu_meta_box_view'                            => \Inpsyde\MultilingualPress\Common\Admin\MetaBoxView::class,
		'multilingualpress.network_plugin_deactivator'                        => \Inpsyde\MultilingualPress\Installation\NetworkPluginDeactivator::class,
		'multilingualpress.new_site_settings'                                 => \Inpsyde\MultilingualPress\Common\Setting\Site\SiteSettingsSectionViewModel::class,
		'multilingualpress.nonce_factory'                                     => \Inpsyde\MultilingualPress\Factory\NonceFactory::class,
		'multilingualpress.noredirect_permalink_filter'                       => \Inpsyde\MultilingualPress\Common\Filter::class,
		'multilingualpress.noredirect_storage'                                => \Inpsyde\MultilingualPress\Module\Redirect\NoredirectStorage::class,
		'multilingualpress.plugin_settings_page'                              => \Inpsyde\MultilingualPress\Common\Admin\SettingsPage::class,
		'multilingualpress.plugin_settings_page_view'                         => \Inpsyde\MultilingualPress\Core\Admin\PluginSettingsPageView::class,
		'multilingualpress.plugin_settings_updater'                           => \Inpsyde\MultilingualPress\Core\Admin\PluginSettingsUpdater::class,
		'multilingualpress.post_request_data_manipulator'                     => \Inpsyde\MultilingualPress\Translation\RequestDataManipulator::class,
		'multilingualpress.post_translator'                                   => \Inpsyde\MultilingualPress\Translation\Translator::class,
		'multilingualpress.post_type_link_url_filter'                         => \Inpsyde\MultilingualPress\Common\Filter::class,
		'multilingualpress.post_type_repository'                              => \Inpsyde\MultilingualPress\Module\CustomPostTypeSupport\PostTypeRepository::class,
		'multilingualpress.post_type_support_settings_box'                    => \Inpsyde\MultilingualPress\Common\Setting\SettingsBoxViewModel::class,
		'multilingualpress.post_type_support_settings_nonce'                  => \Inpsyde\MultilingualPress\Common\Nonce\Nonce::class,
		'multilingualpress.post_type_support_settings_updater'                => \Inpsyde\MultilingualPress\Module\CustomPostTypeSupport\PostTypeSupportSettingsUpdater::class,
		'multilingualpress.post_type_translator'                              => \Inpsyde\MultilingualPress\Translation\Translator::class,
		'multilingualpress.properties'                                        => \Inpsyde\MultilingualPress\Common\PluginProperties::class,
		'multilingualpress.quicklinks'                                        => \Inpsyde\MultilingualPress\Module\Quicklinks\Quicklinks::class,
		'multilingualpress.quicklinks_redirect_hosts_filter'                  => \Inpsyde\MultilingualPress\Module\Quicklinks\RedirectHostsFilter::class,
		'multilingualpress.quicklinks_redirector'                             => \Inpsyde\MultilingualPress\Module\Quicklinks\Redirector::class,
		'multilingualpress.quicklinks_settings_box'                           => \Inpsyde\MultilingualPress\Module\Quicklinks\QuicklinksSettingsBox::class,
		'multilingualpress.quicklinks_settings_nonce'                         => \Inpsyde\MultilingualPress\Common\Nonce\Nonce::class,
		'multilingualpress.quicklinks_settings_repository'                    => \Inpsyde\MultilingualPress\Module\Quicklinks\SettingsRepository::class,
		'multilingualpress.quicklinks_settings_updater'                       => \Inpsyde\MultilingualPress\Module\Quicklinks\SettingsUpdater::class,
		'multilingualpress.redirect_request_validator'                        => \Inpsyde\MultilingualPress\Common\RequestValidator::class,
		'multilingualpress.redirect_settings_repository'                      => \Inpsyde\MultilingualPress\Module\Redirect\SettingsRepository::class,
		'multilingualpress.redirect_site_setting'                             => \Inpsyde\MultilingualPress\Common\Setting\Site\SiteSettingViewModel::class,
		'multilingualpress.redirect_site_setting_updater'                     => \Inpsyde\MultilingualPress\Common\Setting\Site\SiteSettingUpdater::class,
		'multilingualpress.redirect_user_setting'                             => \Inpsyde\MultilingualPress\Common\Setting\User\UserSettingViewModel::class,
		'multilingualpress.redirect_user_setting_updater'                     => \Inpsyde\MultilingualPress\Common\Setting\User\UserSettingUpdater::class,
		'multilingualpress.redirector'                                        => \Inpsyde\MultilingualPress\Module\Redirect\Redirector::class,
		'multilingualpress.relationship_control_search'                       => \Inpsyde\MultilingualPress\Relations\Post\Search\Search::class,
		'multilingualpress.relationship_control_search_controller'            => \Inpsyde\MultilingualPress\Relations\Post\Search\SearchController::class,
		'multilingualpress.relationship_control_search_results_view'          => \Inpsyde\MultilingualPress\Relations\Post\Search\SearchResultsView::class,
		'multilingualpress.relationship_control_view'                         => \Inpsyde\MultilingualPress\Relations\Post\RelationshipControlView::class,
		'multilingualpress.relationship_controller'                           => \Inpsyde\MultilingualPress\Relations\Post\RelationshipController::class,
		'multilingualpress.relationships_site_setting'                        => \Inpsyde\MultilingualPress\Common\Setting\Site\SiteSettingViewModel::class,
		'multilingualpress.request'                                           => \Inpsyde\MultilingualPress\Common\Http\Request::class,
		'multilingualpress.save_plugin_settings_nonce'                        => \Inpsyde\MultilingualPress\Common\Nonce\Nonce::class,
		'multilingualpress.save_redirect_site_setting_nonce'                  => \Inpsyde\MultilingualPress\Common\Nonce\Nonce::class,
		'multilingualpress.save_redirect_user_setting_nonce'                  => \Inpsyde\MultilingualPress\Common\Nonce\Nonce::class,
		'multilingualpress.save_site_settings_nonce'                          => \Inpsyde\MultilingualPress\Common\Nonce\Nonce::class,
		'multilingualpress.save_user_admin_language_setting_nonce'            => \Inpsyde\MultilingualPress\Common\Nonce\Nonce::class,
		'multilingualpress.search_translator'                                 => \Inpsyde\MultilingualPress\Translation\Translator::class,
		'multilingualpress.site_data_deletor'                                 => \Inpsyde\MultilingualPress\Core\SiteDataDeletor::class,
		'multilingualpress.site_duplication_activate_plugins_setting'         => \Inpsyde\MultilingualPress\Common\Setting\Site\SiteSettingViewModel::class,
		'multilingualpress.site_duplication_based_on_site_setting'            => \Inpsyde\MultilingualPress\Common\Setting\Site\SiteSettingViewModel::class,
		'multilingualpress.site_duplication_search_engine_visibility_setting' => \Inpsyde\MultilingualPress\Common\Setting\Site\SiteSettingViewModel::class,
		'multilingualpress.site_duplication_settings_view'                    => \Inpsyde\MultilingualPress\Common\Setting\Site\SiteSettingView::class,
		'multilingualpress.site_duplicator'                                   => \Inpsyde\MultilingualPress\SiteDuplication\SiteDuplicator::class,
		'multilingualpress.site_relations'                                    => \Inpsyde\MultilingualPress\API\SiteRelations::class,
		'multilingualpress.site_relations_checker'                            => \Inpsyde\MultilingualPress\Installation\SiteRelationsChecker::class,
		'multilingualpress.site_relations_table'                              => \Inpsyde\MultilingualPress\Database\Table::class,
		'multilingualpress.site_settings_repository'                          => \Inpsyde\MultilingualPress\Core\Admin\SiteSettingsRepository::class,
		'multilingualpress.site_settings_updater'                             => \Inpsyde\MultilingualPress\Core\Admin\SiteSettingsUpdater::class,
		'multilingualpress.site_settings_view'                                => \Inpsyde\MultilingualPress\Common\Setting\Site\SiteSettingView::class,
		'multilingualpress.system_checker'                                    => \Inpsyde\MultilingualPress\Installation\SystemChecker::class,
		'multilingualpress.table_duplicator'                                  => \Inpsyde\MultilingualPress\Database\TableDuplicator::class,
		'multilingualpress.table_installer'                                   => \Inpsyde\MultilingualPress\Database\TableInstaller::class,
		'multilingualpress.table_list'                                        => \Inpsyde\MultilingualPress\Database\TableList::class,
		'multilingualpress.table_replacer'                                    => \Inpsyde\MultilingualPress\Database\TableReplacer::class,
		'multilingualpress.table_string_replacer'                             => \Inpsyde\MultilingualPress\Database\TableStringReplacer::class,
		'multilingualpress.term_translator'                                   => \Inpsyde\MultilingualPress\Translation\Translator::class,
		'multilingualpress.translation_completed_setting_nonce'               => \Inpsyde\MultilingualPress\Common\Nonce\Nonce::class,
		'multilingualpress.translation_completed_setting_updater'             => \Inpsyde\MultilingualPress\Widget\Dashboard\UntranslatedPosts\TranslationCompletedSettingUpdater::class,
		'multilingualpress.translation_completed_setting_view'                => \Inpsyde\MultilingualPress\Widget\Dashboard\UntranslatedPosts\TranslationCompletedSettingView::class,
		'multilingualpress.translations'                                      => \Inpsyde\MultilingualPress\API\Translations::class,
		'multilingualpress.trasher'                                           => \Inpsyde\MultilingualPress\Module\Trasher\Trasher::class,
		'multilingualpress.trasher_setting_nonce'                             => \Inpsyde\MultilingualPress\Common\Nonce\Nonce::class,
		'multilingualpress.trasher_setting_repository'                        => \Inpsyde\MultilingualPress\Module\Trasher\TrasherSettingRepository::class,
		'multilingualpress.trasher_setting_updater'                           => \Inpsyde\MultilingualPress\Module\Trasher\TrasherSettingUpdater::class,
		'multilingualpress.trasher_setting_view'                              => \Inpsyde\MultilingualPress\Module\Trasher\TrasherSettingView::class,
		'multilingualpress.type_factory'                                      => \Inpsyde\MultilingualPress\Factory\TypeFactory::class,
		'multilingualpress.uninstaller'                                       => \Inpsyde\MultilingualPress\Installation\Uninstaller::class,
		'multilingualpress.untranslated_posts_dashboard_widget'               => \Inpsyde\MultilingualPress\Widget\Dashboard\DashboardWidget::class,
		'multilingualpress.untranslated_posts_dashboard_widget_view'          => \Inpsyde\MultilingualPress\Widget\Dashboard\View::class,
		'multilingualpress.untranslated_posts_repository'                     => \Inpsyde\MultilingualPress\Widget\Dashboard\UntranslatedPosts\PostRepository::class,
		'multilingualpress.updater'                                           => \Inpsyde\MultilingualPress\Installation\Updater::class,
		'multilingualpress.wp_request'                                        => \Inpsyde\MultilingualPress\Common\WordPressRequest::class,
		'multilingualpress.wpdb'                                              => \wpdb::class,
	] ) );
}
