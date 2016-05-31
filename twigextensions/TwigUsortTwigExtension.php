<?php
/**
 * Twig uSort plugin for Craft CMS
 *
 * Twig uSort Twig Extension
 *
 * @author    Robert Tolton
 * @copyright Copyright (c) 2016 Robert Tolton
 * @link      http://fuelintegrated.com
 * @package   TwigUsort
 * @since     1.0.0
 */

namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class TwigUsortTwigExtension extends \Twig_Extension {

	/**
	 * @return string The extension name
	 */
	public function getName () {
		return 'TwigUsort';
	}

	/**
	 * @return array
	 */
	public function getFilters () {
		return array(
			'twigUsort' => new \Twig_Filter_Method($this, 'twigUsort'),
		);
	}

	/**
	* @return array
	 */
	public function getFunctions () {

		return array();

	}

	/**
	 * @return array
	 */
	public function twigUsort ( $array, $property, $order ) {

		$order = json_decode( $order );

		@usort( $array, function ( $a, $b ) use ( $order, $property ) {

			$pos_a = array_search( $a[ $property ], $order );
			$pos_b = array_search( $b[ $property ], $order );
			return $pos_a - $pos_b;

		} );

		return $array;

	}

}
