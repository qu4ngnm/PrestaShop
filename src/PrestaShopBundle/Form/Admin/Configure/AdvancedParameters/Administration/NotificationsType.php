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

namespace PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Administration;

use PrestaShopBundle\Form\Admin\Type\SwitchType;
use PrestaShopBundle\Form\Admin\Type\TranslatorAwareType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NotificationsType extends TranslatorAwareType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('show_notifs_new_orders', SwitchType::class, [
                'required' => true,
                'label' => $this->trans('Show notifications for new orders', 'Admin.Advparameters.Feature'),
                'help' => $this->trans('This will display notifications when new orders are made in your shop.', 'Admin.Advparameters.Help'),
            ])
            ->add('show_notifs_new_customers', SwitchType::class, [
                'required' => true,
                'label' => $this->trans('Show notifications for new customers', 'Admin.Advparameters.Feature'),
                'help' => $this->trans('This will display notifications every time a new customer registers in your shop.', 'Admin.Advparameters.Help'),
            ])
            ->add('show_notifs_new_messages', SwitchType::class, [
                'required' => true,
                'label' => $this->trans('Show notifications for new messages', 'Admin.Advparameters.Feature'),
                'help' => $this->trans('This will display notifications when new messages are posted in your shop.', 'Admin.Advparameters.Help'),
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'translation_domain' => 'Admin.Advparameters.Feature',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'administration_notification_block';
    }
}
