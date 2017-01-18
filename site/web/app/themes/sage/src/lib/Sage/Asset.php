<?php



namespace Roots\Sage;

use Roots\Sage\Assets\ManifestInterface;


define('HOME_URL',get_bloginfo('url'));
define('ASSETS_URL',get_template_directory_uri().'/assets');
define('DIST_URL',get_template_directory_uri().'/dist');
define('IMAGES_URL',get_template_directory_uri().'/dist/images');
define('UPLOADS_URL' , content_url('/uploads/'));

/**
 * Class Template
 * @package Roots\Sage
 * @author QWp6t
 */
class Asset
{
    public static $dist = '/dist';

    /** @var ManifestInterface Currently used manifest */
    protected $manifest;

    protected $asset;

    protected $dir;

    public function __construct($file, ManifestInterface $manifest = null)
    {
        $this->manifest = $manifest;
        $this->asset = $file;
    }

    public function __toString()
    {
        return $this->getUri();
    }

    public function getUri()
    {
        $file = ($this->manifest ? $this->manifest->get($this->asset) : $this->asset);
        return get_template_directory_uri() . self::$dist . "/$file";
    }
}
