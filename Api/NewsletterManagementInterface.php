<?php
/**
 * MagedIn Technology
 *
 * Do not edit this file if you want to update this module for future new versions.
 *
 * @category  MagedIn
 * @copyright Copyright (c) 2021 MagedIn Technology.
 *
 * @author    MagedIn Support <support@magedin.com>
 */

namespace MagedIn\NewsletterApi\Api;

/**
 * Interface NewsletterManagementInterface
 *
 * Newsletter management for both customer and guest.
 */
interface NewsletterManagementInterface
{
    /**
     * Get Subscription information for a customer id
     *
     * @param int $customerId
     * @return \MagedIn\NewsletterApi\Api\Data\NewsletterSubscriptionInterface;
     */
    public function getSubscriptionForCustomer(int $customerId);

    /**
     * Subscribe a customer
     *
     * @param int $customerId
     * @return \MagedIn\NewsletterApi\Api\Data\NewsletterSubscribeResponseInterface;
     */
    public function subscribeCustomer(int $customerId);

    /**
     * Unsubscribe a customer
     *
     * @param int $customerId
     * @return \MagedIn\NewsletterApi\Api\Data\NewsletterSubscribeResponseInterface;
     */
    public function unsubscribeCustomer(int $customerId);

    /**
     * Subscribe a guest user with email
     *
     * @param string $email
     * @return \MagedIn\NewsletterApi\Api\Data\NewsletterSubscribeResponseInterface;
     */
    public function subscribe(string $email);
}
