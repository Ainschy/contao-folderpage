<?php

/**
 * folderpage extension for Contao Open Source CMS
 *
 * @copyright  Copyright (c) 2012-2015, terminal42 gmbh
 * @license    LGPL-3.0+
 * @link       http://github.com/terminal42/contao-folderpage
 */

namespace Terminal42\FolderpageBundle\EventListener;

class PageStatusIconListener
{
    /**
     * Return our custom image for the folder page type.
     *
     * @param object $page
     * @param string $image
     *
     * @return string
     */
    public function getFolderpageIcon($page, $image)
    {
        if ($page->type == 'folder') {
            return 'bundles/terminal42folderpage/folder.gif';
        }

        return $image;
    }
}
