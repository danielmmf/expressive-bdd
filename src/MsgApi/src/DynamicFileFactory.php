<?php

declare(strict_types=1);

namespace MsgApi;

use Psr\Container\ContainerInterface;

class DynamicFileFactory
{
    public function __invoke(ContainerInterface $container) : DynamicFile
    {
        return new DynamicFile();
    }
}
