<?php

/*
 * This file is part of Factory Muffin.
 *
 * (c) Graham Campbell <graham@alt-three.com>
 * (c) Scott Robertson <scottymeuk@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace League\FactoryMuffin\Exceptions;

/**
 * This is the merge method not found exception class.
 *
 * This is thrown when the merge method of a model does not exist. This class
 * extends MethodNotFoundException and ModelException, so you may want to try
 * to catch one of those exceptions instead, if you want to be more general.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class MergeMethodNotFoundException extends MethodNotFoundException
{
    /**
     * Create a new merge method not found instance.
     *
     * @param string      $class   The model class name.
     * @param string      $method  The method name.
     * @param string|null $message The exception message.
     *
     * @return void
     */
    public function __construct($class, $method, $message = null)
    {
        if (!$message) {
            $message = "The merge method '$method' was not found on the model: '$class'.";
        }

        parent::__construct($class, $method, $message);
    }
}
