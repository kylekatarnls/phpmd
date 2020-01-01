<?php

class testRuleDoesNotApplyOnDefinedStaticProperties
{
    protected static $foo = array();

    public function testRuleDoesNotApplyOnDefinedStaticProperties(string $key)
    {
        return static::$foo[$key];
    }
}
