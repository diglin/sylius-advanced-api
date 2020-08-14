<?php
/**
 * Diglin GmbH - Switzerland.
 *
 * @author      Sylvain Rayé <support at diglin.com>
 * @category    sylius-apiswagger
 * @copyright   2020 - Diglin (https://www.diglin.com)
 */

namespace Diglin\SyliusAdvancedApiPlugin\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;

class DiglinSyliusAdvancedApiExtension extends Extension
{
    /**
     * @inheritDoc
     */
    public function load(array $configs, ContainerBuilder $container)
    {
//        $config = $this->processConfiguration($this->getConfiguration([], $container), $configs);
//        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
    }
}
