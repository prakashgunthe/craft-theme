<?php
namespace verbb\navigation\gql\types;

use craft\gql\base\ObjectType;
use craft\gql\TypeManager;

use GraphQL\Type\Definition\Type;

class CustomAttributeType extends ObjectType
{
    // Static Methods
    // =========================================================================

    public static function prepareRowFieldDefinition(string $typeName): array
    {
        $contentFields = [
            'attribute' => Type::string(),
            'value' => Type::string(),
        ];

        return TypeManager::prepareFieldDefinitions($contentFields, $typeName);
    }
}
