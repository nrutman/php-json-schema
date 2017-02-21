<?php

namespace Swaggest\JsonSchema;


abstract class Meta
{
    /**
     * @param Schema $schema
     * @return static
     */
    public static function get(Schema $schema)
    {
        return $schema->getMeta(get_called_class());
    }
}