<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.form.choice_provider.import_entity_field' shared service.

return $this->services['prestashop.core.form.choice_provider.import_entity_field'] = new \PrestaShop\PrestaShop\Core\Form\ChoiceProvider\ImportEntityFieldChoiceProvider(${($_ = isset($this->services['prestashop.core.import.fields_provider_finder']) ? $this->services['prestashop.core.import.fields_provider_finder'] : $this->load('getPrestashop_Core_Import_FieldsProviderFinderService.php')) && false ?: '_'}, ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->getSessionService()) && false ?: '_'}->get("entity"));
