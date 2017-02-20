<?php


namespace SamIT\Rancher;


class Factory
{

    public function createSchemaFromJson($json)
    {
        $configuration = json_decode($json, true);
        return Schema::fromArray($configuration);
    }
}