<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

use PrestaShop\PrestaShop\Core\Domain\Cart\CartStatusType;
use PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface;
use PrestaShopBundle\Translation\TranslatorInterface;

/**
 * Class CartStatusesChoiceProvider is responsible for providing cart status choices in cart grid filters.
 */
final class CartStatusesChoiceProvider implements FormChoiceProviderInterface
{
    /**
     * @var TranslatorInterface
     */
    private $translator;

    /**
     * @param TranslatorInterface $translator
     */
    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    /**
     * @return array|void
     */
    public function getChoices()
    {
        return [
            $this->translator->trans('Ordered', [], 'Admin.Orderscustomers.Feature') => CartStatusType::ORDERED,
            $this->translator->trans('Non ordered', [], 'Admin.Orderscustomers.Feature') => CartStatusType::NOT_ORDERED,
            $this->translator->trans('Abandoned cart', [], 'Admin.Orderscustomers.Feature') => CartStatusType::ABANDONED_CART,
        ];
    }
}
