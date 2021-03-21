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
 * Interface NewsletterSubscribeResponseInterface
 *
 * Newsletter subscribe response
 */
interface NewsletterSubscribeResponseInterface
{
    /**
     * Get success
     *
     * @return boolean
     */
    public function getSuccess();

    /**
     * Get message
     *
     * @return string|null
     */
    public function getMessage();
}
