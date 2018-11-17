<?php

declare(strict_types=1);

namespace MsgApi;

use Psr\Container\ContainerInterface;

class FileActionFactory
{
    public function __invoke(ContainerInterface $container) : FileAction
    {
        return new FileAction();
    }
}
