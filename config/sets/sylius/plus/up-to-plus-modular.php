<?php

declare(strict_types=1);

namespace Sylius\SyliusRector\Set;

use Rector\Config\RectorConfig;
use Rector\Renaming\Rector\Name\RenameClassRector;
use Rector\Renaming\Rector\Namespace_\RenameNamespaceRector;

return static function(RectorConfig $rectorConfig): void {
    $rectorConfig->ruleWithConfiguration(RenameClassRector::class, [
        'Sylius\Plus\Inventory\Infrastructure\Ui\SplitShipmentAction' => 'Sylius\MultiSourceInventoryPlugin\Integration\PartialShipment\Action\SplitShipmentAction',
        'Sylius\Plus\Inventory\Infrastructure\Validator\StockSufficientForInventorySource' => 'Sylius\MultiSourceInventoryPlugin\Integration\PartialShipment\Validator\StockSufficientForInventorySource',
        'Sylius\Plus\Inventory\Infrastructure\Validator\StockSufficientForInventorySourceValidator' => 'Sylius\MultiSourceInventoryPlugin\Integration\PartialShipment\Validator\StockSufficientForInventorySourceValidator',
        'Sylius\Plus\Returns\Infrastructure\Ui\Admin\ReturnUnitsToInventoryAction' => 'Sylius\Plus\Ui\Admin\ReturnUnitsToInventoryAction',
        'Sylius\Plus\Returns\Infrastructure\Ui\Admin\SelectUnitsToReturnToInventoryAction' => 'Sylius\ReturnPlugin\Infrastructure\Ui\Admin\SelectUnitsToReturnToInventoryAction',
        'Sylius\Plus\SharedKernel\Exception\ResourceNotSupportedException' => 'Sylius\SharedKernel\Exception\ResourceNotSupportedException',
        'Sylius\Plus\SharedKernel\ResourceChannelCheckerInterface' => 'Sylius\SharedKernel\Contract\ResourceChannelCheckerInterface',
        'Sylius\Plus\Controller\DashboardController' => 'Sylius\MultiStorePlugin\ChannelAdmin\Infrastructure\Controller\DashboardController',
        'Sylius\Plus\Factory\VariantsQuantityMapFactory' => 'Sylius\MultiSourceInventoryPlugin\Integration\PartialShipment\Factory\VariantsQuantityMapFactory',
        'Sylius\Plus\Factory\VariantsQuantityMapFactoryInterface' => 'Sylius\MultiSourceInventoryPlugin\Integration\PartialShipment\Factory\VariantsQuantityMapFactoryInterface',
    ]);

    $rectorConfig->ruleWithConfiguration(RenameNamespaceRector::class, [
        'Sylius\Plus\BusinessUnits' => 'Sylius\MultiStorePlugin\BusinessUnits',
        'Sylius\Plus\ChannelAdmin' => 'Sylius\MultiStorePlugin\ChannelAdmin',
        'Sylius\Plus\CustomerPools' => 'Sylius\MultiStorePlugin\CustomerPools',
        'Sylius\Plus\Inventory' => 'Sylius\MultiSourceInventoryPlugin',
        'Sylius\Plus\Loyalty' => 'Sylius\LoyaltyPlugin',
        'Sylius\Plus\PartialShipping' => 'Sylius\PartialShipmentPlugin',
        'Sylius\Plus\Rbac' => 'Sylius\PlusRbacPlugin',
        'Sylius\Plus\Returns' => 'Sylius\ReturnPlugin',
    ]);
};
