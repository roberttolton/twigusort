<?php
/**
 * Twig uSort plugin for Craft CMS
 *
 * Implements uSort into Twig.
 *
 * @author    Robert Tolton
 * @copyright Copyright (c) 2016 Robert Tolton
 * @link      http://fuelintegrated.com
 * @package   TwigUsort
 * @since     1.0.0
 */

namespace Craft;

class TwigUsortPlugin extends BasePlugin
{
    /**
     * @return mixed
     */
    public function init()
    {
    }

    /**
     * @return mixed
     */
    public function getName()
    {
         return Craft::t('Twig uSort');
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return Craft::t('Implements uSort into Twig.');
    }

    /**
     * @return string
     */
    public function getDocumentationUrl()
    {
        return 'https://github.com/fuelintegrated/twigusort/blob/master/README.md';
    }

    /**
     * @return string
     */
    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/fuelintegrated/twigusort/master/releases.json';
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getDeveloper()
    {
        return 'Robert Tolton';
    }

    /**
     * @return string
     */
    public function getDeveloperUrl()
    {
        return 'http://fuelintegrated.com';
    }

    /**
     * @return bool
     */
    public function hasCpSection()
    {
        return false;
    }

    /**
     * @return mixed
     */
    public function addTwigExtension()
    {
        Craft::import('plugins.twigusort.twigextensions.TwigUsortTwigExtension');

        return new TwigUsortTwigExtension();
    }

    /**
     */
    public function onBeforeInstall()
    {
    }

    /**
     */
    public function onAfterInstall()
    {
    }

    /**
     */
    public function onBeforeUninstall()
    {
    }

    /**
     */
    public function onAfterUninstall()
    {
    }
}