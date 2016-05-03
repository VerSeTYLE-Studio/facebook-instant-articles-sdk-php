<?php
/**
 * Copyright (c) 2016-present, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */
namespace Facebook\InstantArticles\Transformer\Getters;

/**
 * Class abstract for all getters.
 */
abstract class AbstractGetter
{
    /**
     * Method that should be implemented so it can be Instantiated by @see GetterFactory
     * @param array(string-> string) $configuration With all properties of this Getter
     * @return $this Returns the self instance configured.
     */
    abstract public function createFrom($configuration);

    /**
     * Method that should retrieve
     */
    abstract public function get($node);

    /**
     * Auxiliary method to extract full qualified class name.
     * @return string The full qualified name of class
     */
    public static function getClassName()
    {
        return get_called_class();
    }
}
