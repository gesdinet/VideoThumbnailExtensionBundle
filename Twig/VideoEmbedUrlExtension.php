<?php

namespace Gesdinet\Bundle\VideoThumbnailExtensionBundle\Twig;

class VideoEmbedUrlExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('video_embed_url', array($this, 'getUrlPlayer')),
        );
    }

    public function getUrlPlayer($code, $params = null, $type = 'youtube')
    {
        $params = implode("&", $params);
        switch ($type) {
            case 'youtube':
                return 'http://www.youtube.com/embed/'.$code.'?'.$params;
        }

        return null;
    }

    public function getName()
    {
        return 'video_embed_url_extension';
    }
}