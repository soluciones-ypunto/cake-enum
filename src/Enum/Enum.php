<?php
/**
 * Created by javier
 * Date: 20/12/18
 * Time: 12:59
 */

namespace Ypunto\Enum\Enum;

abstract class Enum implements EnumInterface
{
    /**
     * {{@inheritdoc}}
     */
    public static function getOption($key)
    {
        $_options = static::getOptions();

        return array_key_exists($key, $_options) ? $_options[$key] : false;
    }

    /**
     * {{@inheritdoc}}
     */
    public static function getValues()
    {
        return array_keys(static::getOptions());
    }

    /**
     * Para ser usado como validation provider
     *
     * @param $option
     *
     * @return boolean
     */
    public static function isValid($option)
    {
        return in_array($option, array_keys(static::getOptions()));
    }
}