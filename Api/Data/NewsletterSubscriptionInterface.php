<?php
/*
 *
 * McFadyen Digital
 * Do not edit this file if you want to update this module for future new versions.
 *
 * @category  McFadyen
 * @package   McFadyen_NewsletterApi
 *
 * @copyright Copyright (c) 2021 McFadyen Digital.
 *
 * @author    Rojin R G <rrojin@mcfadyen.com>
 */

namespace McFadyen\NewsletterApi\Api\Data;

/**
 * Interface NewsletterSubscriptionInterface
 *
 * Newsletter subscription response
 */
interface NewsletterSubscriptionInterface
{
    /**
     * Constants for keys of data array.
     */
    const SUBSCRIPTION_ID = 'subscription_id';
    const EMAIL = 'email';
    const STATUS = 'status';

    /**
     * Set ID
     *
     * set the internal id of the entity
     *
     * @param int $id
     * @return $this
     */
    public function setId(int $id);

    /**
     * Set E-Mail Address
     *
     * set the e-mail address of the subscriber
     *
     * @param string $email
     * @return $this
     */
    public function setEmail(string $email);

    /**
     * Set status
     *
     * set the state of the subscription
     *
     * @param int
     *
     * @return $this
     */
    public function setStatus(int $status);

    /**
     * Get ID
     *
     * get the internal id of the subscription entity
     *
     * @return int
     */
    public function getId();

    /**
     * Get E-Mail Address
     *
     * get the email address of the subscriber
     *
     * @return string
     */
    public function getEmail();

    /**
     * Get status
     *
     * get the status of the subscription
     *
     * @return int
     */
    public function getStatus();
}
