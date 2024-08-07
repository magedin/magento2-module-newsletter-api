<?php
/**
 * MagedIn Technology
 *
 * Do not edit this file if you want to update this module for future new versions.
 *
 * @category  MagedIn
 * @copyright Copyright (c) 2024 MagedIn Technology.
 *
 * @author    MagedIn Support <support@magedin.com>
 */

namespace MagedIn\NewsletterApi\Api\Data;

/**
 * DocBlock for OperationStatusInterface interface.
 */
interface OperationStatusInterface
{
    public const FIELD_SUCCESS = 'success';
    public const FIELD_MESSAGE = 'message';

    /**
     * DocBlock for method.
     *
     * @param bool $flag
     *
     * @return self
     */
    public function setSuccess(bool $flag): self;

    /**
     * DocBlock for method.
     *
     * @return bool
     */
    public function getSuccess(): bool;

    /**
     * DocBlock for method.
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self;

    /**
     * DocBlock for method.
     *
     * @return string
     */
    public function getMessage(): string;
}
