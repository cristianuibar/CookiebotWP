<?php

namespace cookiebot_addons_framework\lib;

use cookiebot_addons_framework\controller\addons\Cookiebot_Addons_Interface;

Interface Settings_Service_Interface {

	/**
	 * Settings_Service constructor.
	 *
	 * @param $container \DI\Container
	 *
	 * @since 1.3.0
	 */
	public function __construct( $container );

	/**
	 * Returns true if the addon is enabled in the backend
	 *
	 * @param $addon string option name
	 *
	 * @return mixed
	 *
	 * @since 1.3.0
	 */
	public function is_addon_enabled( $addon );

	/**
	 * Returns true if the addon is installed
	 *
	 * @param $addon    string  plugin file, for example: test/test.php
	 *
	 * @return int|\WP_Error
	 *
	 * @since 1.3.0
	 */
	public function is_addon_installed( $addon );

	/**
	 * Returns true if the addon plugin is activated
	 *
	 * @param $addon    string  plugin file, for example: test/test.php
	 *
	 * @return bool
	 *
	 * @since 1.3.0
	 */
	public function is_addon_activated( $addon );

	/**
	 * Returns all cookie type for given addon
	 *
	 * @param $addon    string  option name
	 * @param $default  array   default cookie types
	 *
	 * @return array
	 *
	 * @since 1.3.0
	 */
	public function get_cookie_types( $addon, $default = array() );

	/**
	 * Returns addons one by one through a generator
	 *
	 * @return \Generator
	 * @throws \DI\DependencyException
	 * @throws \DI\NotFoundException
	 *
	 * @since 1.3.0
	 */
	public function get_addons();

	/**
	 * Returns active addons
	 *
	 * @return array
	 * @throws \DI\DependencyException
	 * @throws \DI\NotFoundException
	 *
	 * @since 1.3.0
	 */
	public function get_active_addons();

	/**
	 * returns the placeholder if it does exist
	 *
	 * @param $option_key
	 * @param $default_placeholder
	 * @param $cookies
	 *
	 * @return bool|mixed
	 *
	 * @since 1.8.0
	 */
	public function get_placeholder( $option_key, $default_placeholder, $cookies );
}