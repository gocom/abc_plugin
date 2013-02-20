<?php

/**
 * This is an example plugin for Textpattern CMS.
 *
 * @link http://textpattern.com/
 */

/**
 * The plugin class.
 */

class abc_example
{
	/**
	 * Constructor.
	 *
	 * Registers plugin-lifecycle handlers.
	 */

	public function __construct()
	{
		register_callback(array($this, 'install'), 'plugin_lifecycle.abc_example', 'installed');
		register_callback(array($this, 'uninstall'), 'plugin_lifecycle.abc_example', 'deleted');
		register_callback(array($this, 'greeting'), 'list', '', true);
	}

	/**
	 * Installer.
	 *
	 * Run when the plugin is installed or updated.
	 */

	public function install()
	{
	}

	/**
	 * Uninstaller.
	 *
	 * Run when the plugin is deleted.
	 */

	public function uninstall()
	{
	}

	/**
	 * Adds the translation string to admin-side Articles panel.
	 *
	 * @see gTxt()
	 * @see graf()
	 */

	public function greeting()
	{
		echo graf(gTxt('abc_plugin_greeting'), ' class="alert-block information"');
	}
}

/**
 * Initializes the plugin.
 */

new abc_example();