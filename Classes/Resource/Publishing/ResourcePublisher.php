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
 * Class ResourcePublisher
 * @package Bitmotion\NawSecuredl\Resource\Publishing
 */
class ResourcePublisher {
	/**
	 * @var ResourcePublishingTargetInterface
	 */
	protected $publishingTarget;

	/**
	 * @param ResourcePublishingTargetInterface $publishingTarget
	 */
	public function injectPublishingTarget(ResourcePublishingTargetInterface $publishingTarget) {
		$this->publishingTarget = $publishingTarget;
	}

	/**
	 * Returns the web URI pointing to the published resource
	 *
	 * @param ResourceInterface $resource The resource to publish
	 * @return mixed Either the web URI of the published resource or FALSE if the resource source file doesn't exist or the resource could not be published for other reasons
	 */
	public function getResourceWebUri(ResourceInterface $resource) {
		return $this->publishingTarget->getResourceWebUri($resource);
	}

	/**
	 * Publishes a persistent resource to the web accessible resources directory
	 *
	 * @param ResourceInterface $resource The resource to publish
	 * @return string Either the web URI of the published resource or FALSE if the resource source file doesn't exist or the resource could not be published for other reasons
	 */
	public function publishResource(ResourceInterface $resource) {
		return $this->publishingTarget->publishResource($resource);
	}

	/**
	 * @param string $resourcesSourcePath
	 */
	public function setResourcesSourcePath($resourcesSourcePath) {
		$this->publishingTarget->setResourcesSourcePath($resourcesSourcePath);
	}
}