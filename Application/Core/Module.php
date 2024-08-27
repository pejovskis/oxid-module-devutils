<?php

namespace Sinn\ModulePathCorrection\Core\Module;

use OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\Bridge\ShopConfigurationDaoBridgeInterface;
use OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\DataObject\ShopConfiguration;

class Module extends Module_parent {

    /**
     * Returns full module path
     *
     * @param string $sModuleId
     *
     * @return string
     */
    public function getModuleFullPath($sModuleId = null)
    {
        if (!$sModuleId) {
            $sModuleId = $this->getId();
        }

        if ($sModuleDir = $this->getModulePath($sModuleId)) {
            return $this->getConfig()->getModulesDir() . $sModuleDir;
        }

        return false;
    }

    /**
     * Get module id's with path
     *
     * @return array
     */
    public function getModulePaths()
    {
        $moduleConfigurations = $this->getInstalledModuleConfigurations();
        $paths = [];
        foreach ($moduleConfigurations as $moduleConfiguration) {
            $paths[$moduleConfiguration->getId()] = $moduleConfiguration->getPath();
        }

        return $paths;
    }

    private function getInstalledModuleConfigurations(): array
    {
        $shopConfiguration = $this->getShopConfiguration();
        return $shopConfiguration->getModuleConfigurations();
    }

    /**
     * @return ShopConfiguration
     */
    private function getShopConfiguration(): ShopConfiguration
    {
        $container = $this->getContainer();
        return $container->get(ShopConfigurationDaoBridgeInterface::class)->get();
    }

    public function getMetaDataVersion()
    {
        if ($this->metaDataVersion === null) {
            $metadataPath = $this->getModuleFullPath($this->getId()) . '/metadata.php';
            $this->includeModuleMetaData($metadataPath);
        }

        return $this->metaDataVersion;
    }

}
