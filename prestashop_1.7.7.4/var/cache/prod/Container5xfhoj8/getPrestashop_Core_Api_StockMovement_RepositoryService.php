<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.api.stock_movement.repository' shared service.

return $this->services['prestashop.core.api.stock_movement.repository'] = new \PrestaShopBundle\Entity\Repository\StockMovementRepository($this, ${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.image_manager']) ? $this->services['prestashop.adapter.image_manager'] : $this->load('getPrestashop_Adapter_ImageManagerService.php')) && false ?: '_'}, 'cs_');
