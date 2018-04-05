<?php
/**
 *  @author purencool <purencool@gmail.com>
 *  @copyright GPLV3
 */
namespace Purencool\Backend\Lib;

/**
 * Creates the default configuration that is controlled by
 * the backend. If the defaults are overwritten it will
 * change the nature of the apps development folders are.
 */
class Config
{

    /**
     * Default directory if null the app will look
     * at the other directories.
     *
     * @var string
     */
    private $directory = '';

    /**
     * Default sass directory
     *
     * @var string
     */
    private $sass = '../sass';

    /**
     * Default css directory
     *
     * @var string
     */
    private $css = '../css';

    /**
     * Default image directory
     *
     * @var string
     */
    private $images = '../images';


    /**
     * @return void
     */
    public function getDirectory()
    {
        return $this->directory;
    }

    /**
     * @param string $directory
     * @return void
     */
    public function setDirectory($directory)
    {
        $this->directory = $directory;
    }


    /**
     * @return void
     */
    public function getSass()
    {
        return $this->sass;
    }

    /**
     * @param string $sass
     * @return void
     */
    public function setSass($sass)
    {
        $this->sass = $sass;
    }

    /**
     * @return void
     */
    public function getCss()
    {
        return $this->css;
    }

    /**
     * @param string $css
     * @return void
     */
    public function setCss($css)
    {
        $this->css = $css;
    }

    /**
     * @return void
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param string $images
     * @return void
     */
    public function setImages($images)
    {
        $this->images = $image;
    }
}
