<?php

namespace AnimeKingdom\AnimeModule\Plugin;

use Magento\Theme\Block\Html\Title;

class TitlePlugin
{

    public function afterSetPageTitle(Title $subject, $result, $title)
    {
        // Pobierz oryginalny tytuł, jeśli potrzebujesz
        $newTitle = $title . ":AnimeKingdom";
        return $newTitle;
    }
}
