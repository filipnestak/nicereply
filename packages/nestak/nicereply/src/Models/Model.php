<?php

namespace Nestak\NiceReply\Models;

use Nestak\NiceReply\Collections\Collection;
use ReflectionClass;

abstract class Model
{

    /**
     * Map values into model
     *
     * @param $data
     * @return $this
     */
    public function map($data): Model
    {
        $reflectionClass = new ReflectionClass($this);
        $publicProperties = $reflectionClass->getProperties(\ReflectionProperty::IS_PUBLIC);

        foreach ($publicProperties as $property) {
            $propertyName = $property->getName();
            $propertyType = $property->getType();
            $modelProperty = $this->{$propertyName};
            if (!$propertyType->isBuiltin() && isset($data)) {
                $typeName = $property->getType()->getName();
                $modelProperty = new $typeName;
            }
            if ($modelProperty instanceof Collection) {
                $this->{$propertyName} = $modelProperty->map($data);
            } elseif ($modelProperty instanceof Model) {
                $this->{$propertyName} = $modelProperty->map($data->{$propertyName});
            } else {
                if (isset($data->{$propertyName})) {
                    $this->{$propertyName} = $data->{$propertyName};
                }
            }
        }
        return $this;
    }
}
