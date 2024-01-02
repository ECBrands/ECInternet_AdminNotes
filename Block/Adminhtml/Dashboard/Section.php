<?php

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
