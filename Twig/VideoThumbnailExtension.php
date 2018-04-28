<?php

namespace Gesdinet\Bundle\VideoThumbnailExtensionBundle\Twig;

class VideoThumbnailExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('video_thumbnail', array($this, 'getThumbnail')),
        );
    }

    public function getThumbnail($code, $type = 'youtube')
    {
        switch ($type) {
            case 'youtube':
                return 'https://img.youtube.com/vi/'.$code.'/0.jpg';
        }

        return null;
    }

    public function getName()
    {
        return 'video_thumbnail_extension';
    }
}
