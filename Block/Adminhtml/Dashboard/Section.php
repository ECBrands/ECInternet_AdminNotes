<?php
/**
 * Copyright (C) EC Brands Corporation - All Rights Reserved
 * Contact Licensing@ECInternet.com for use guidelines
 */
declare(strict_types=1);

namespace ECInternet\AdminNotes\Block\Adminhtml\Dashboard;

use Magento\Backend\Block\Template;

/**
 * Section block
 */
class Section extends Template
{
    /**
     * Get section text
     *
     * @return string
     */
    public function getText()
    {
        return 'AdminNote test';
    }
}
