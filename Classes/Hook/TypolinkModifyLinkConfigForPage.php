<?php
declare(strict_types=1);

namespace Wazum\ForceHttpsTypolink\Hook;

/**
 * Class TypolinkModifyLinkConfigForPage
 *
 * @package Wazum\ForceHttpsTypolink\Hook
 * @author  Wolfgang Klinger <wk@plan2.net>
 */
class TypolinkModifyLinkConfigForPage implements \TYPO3\CMS\Frontend\ContentObject\TypolinkModifyLinkConfigForPageLinksHookInterface {

    /**
     * @param array $linkConfiguration
     * @param array $linkDetails
     * @param array $pageRow
     * @return array
     */
    public function modifyPageLinkConfiguration(array $linkConfiguration, array $linkDetails, array $pageRow): array
    {
        $linkConfiguration['forceAbsoluteUrl'] = true;
        if (!isset($linkConfiguration['forceAbsoluteUrl.'])) {
            $linkConfiguration['forceAbsoluteUrl.'] = [];
        }
        $linkConfiguration['forceAbsoluteUrl.']['scheme'] = 'https';

        return $linkConfiguration;
    }

}
