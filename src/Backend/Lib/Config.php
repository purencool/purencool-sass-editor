<?php
/**
 *  @author purencool <purencool@gmail.com>
 *  @copyright GPLV3
 */
namespace purencool_editor\Backend\Lib;

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
    private $sassDirectory = '../sass';

    /**
     * Default css directory
     *
     * @var string
     */
    private $cssDirectory = '../css';

    /**
     * Default image directory
     *
     * @var string
     */
    private $imagesDirectory = '../images';


    /**
     * Default sass files
     *
     * @var string
     */
    private $defaultSassFile = 'styles.scss';


    /**
     * Default css file
     *
     * @var string
     */
    private $defaultCssFile = 'styles.css';


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
    public function set($directory)
    {
        $this->directory = $directory;
    }


    /**
     * @return void
     */
    public function getSassDirectory()
    {
        return $this->sassDirectory;
    }

    /**
     * @param string $sassDirectory
     * @return void
     */
    public function setSassDirectory($sassDirectory)
    {
        $this->sass = $sassDirectory;
    }

    /**
     * @return void
     */
    public function getCssDirectory()
    {
        return $this->cssDirectory;
    }

    /**
     * @param string $cssDirectory
     * @return void
     */
    public function setCssDirectory($cssDirectory)
    {
        $this->cssDirectory = $cssDirectory;
    }

    /**
     * @return void
     */
    public function getImagesDirectory()
    {
        return $this->imagesDirectory;
    }

    /**
     * @param string $imagesDirectory
     * @return void
     */
    public function setImages($imagesDirectory)
    {
        $this->imagesDirectory = $imageDirectory;
    }


    /**
     * @return void
     */
    public function getDefaultSassFile()
    {
        return $this->defaultSassFile;
    }

    /**
     * @param string $defaultSassFile
     * @return void
     */
    public function setDefaultSassFile($defaultSassFile)
    {
        $this->defaultSassFile = $defaultSassFile;
    }


    /**
     * @return void
     */
    public function getDefaultcssFile()
    {
        return $this->defaultCssFile;
    }

    /**
     * @param string $defaultCssFile
     * @return void
     */
    public function setDefaultCssFile($defaultCssFile)
    {
        $this->defaultCssFile = $defaultCssFile;
    }

}
