# Video Thumbnail Twig Extension

## Install

```bash
composer require "gesdinet/videothumbnailextensionbundle": "~0.1.0"
```

### Symfony 2.x

app/AppKernel.php:

```php
$bundles = array(
    // ...
    new Gesdinet\Bundle\VideoThumbnailExtensionBundle\VideoThumbnailExtensionBundle(),
    // ...
);
```

### Silex

```php
use Gesdinet\Bundle\VideoThumbnailExtensionBundle\Twig\VideoThumbnailExtension;

$app['twig'] = $app->share($app->extend('twig', function($twig, $app) {
    $twig->addExtension(new VideoThumbnailExtension());

    return $twig;
}));
```

## Usage

For youtube:

```twig
{{ video.code|video_thumbnail }}
```

For other service like Vimeo (WIP):

```twig
{{ video.code|video_thumbnail('vimeo') }}
```
