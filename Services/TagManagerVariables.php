<?php
/**
 * Tag Manager
 * Copyright (c) Webmatch GmbH
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */

namespace WbmTagManager\Services;

use Shopware\Components\DependencyInjection\Container;

/**
 * Class TagManagerVariables
 * @package WbmTagManager\Services
 */
class TagManagerVariables implements TagManagerVariablesInterface {

    /**
     * @var Container
     */
    private $container;

    /**
     * @var mixed
     */
    private $variables;

    /**
     * TagManagerVariables constructor.
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    /**
     * @return mixed
     */
    public function getVariables()
    {
        return $this->variables;
    }

    /**
     * @param mixed $variables
     */
    public function setVariables($variables)
    {
        $this->variables = $variables;
    }

}