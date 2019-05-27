<?php


namespace Sokil\Mongo\MongoBundle\Mongo;


class Client extends \Sokil\Mongo\Client
{
    public function __construct($dsn = null, array $mappings = null, array $connectOptions = null)
    {
        parent::__construct($dsn, $connectOptions);

        if(!is_null($mappings))
            $this->map($mappings);
    }
}