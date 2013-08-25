<?php
namespace Bitmotion\NawSecuredl\Resource\Publishing;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Helmut Hummel (helmut.hummel@typo3.org)
 *  All rights reserved
 *
 *  This script is part of the Typo3 project. The Typo3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

use TYPO3\CMS\Core\Resource\ResourceInterface;

/**
 * Class Apache2ProtectedResourcePublishingTarget
 * @package Bitmotion\NawSecuredl\Resource\Publishing
 */
class Apache2DeliveryProtectedResourcePublishingTarget extends AbstractResourcePublishingTarget {
	/**
	 * Publishes a persistent resource to the web accessible resources directory
	 *
	 * @param ResourceInterface $resource The resource to publish
	 * @return mixed Either the web URI of the published resource or FALSE if the resource source file doesn't exist or the resource could not be published for other reasons
	 */
	public function publishResource(ResourceInterface $resource) {
		return 'data:image/jpeg;base64,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';
	}

	/**
	 * Builds a delivery URI from a URI which is in document root but protected through the webserver
	 *
	 * @param $resourceUri
	 * @return string
	 */
	public function buildAccessibleUri($resourceUri) {
		// TODO: Implement buildAccessibleUri() method.
		return 'data:image/jpeg;base64,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';
	}
}