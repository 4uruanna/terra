<?php

namespace terra\v1\core\di;

use ReflectionClass;

abstract class Dependency
{
    public static function inject(array $arg_list = []): object
    {
        $contrustor_arg_list = [];
        $class = new ReflectionClass(get_called_class());
        $constructor = $class->getConstructor();
        if ($constructor !== null) {
            $parameter_list = $constructor->getParameters();

            foreach ($parameter_list as $parameter) {
                if ($parameter->hasType()) {
                    $parameter_name = $parameter->getName();
                    $parameter_type = $parameter->getType();
                    $parameter_type_name = $parameter_type->getName();

                    if (isset($arg_list[$parameter_name])) {
                        $contrustor_arg_list[] = $arg_list[$parameter_name];
                        continue;
                    }

                    if (!$parameter->isOptional() && !$parameter_type->isBuiltin()) {
                        $parameter_class = new ReflectionClass($parameter_type_name);

                        if ($parameter_class->isSubclassOf(Dependency::class)) {
                            $contrustor_arg_list[] = $parameter_type_name::inject($arg_list);
                        }
                    }
                }
            }
        }

        return $class->newInstanceArgs($contrustor_arg_list);
    }
}
