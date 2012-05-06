<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\FlowBundle;

use Sylius\Bundle\FlowBundle\DependencyInjection\Compiler\RegisterSetupsPass;
use Sylius\Bundle\FlowBundle\DependencyInjection\Compiler\RegisterStepsPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Multiple action flows for Symfony2.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class SyliusFlowBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new RegisterSetupsPass());
        $container->addCompilerPass(new RegisterStepsPass());
    }
}