<?php
/**
 * @name    Themes
 * @desc    Change the theme of your site
 * @version v0.0
 * @author  @xopherdeep
 * @icon    cloud-download-icon.png
 * @mini    moon-o
 * @see     construct
 * @link    themes
 * @todo
 * @alpha
 */

  class xThemes extends Xengine{
    function index(){
      // Read the Theme Directory

      return $this->readThemes();
    }

    function readThemes($filter=null){
      $dir = DOC_ROOT . $this->_CFG['dir']['html']."/themes/";
      $data  = scandir(
        $dir
      );

      foreach($data as $k => $v){
        if ($v == '.'|| $v == '..')
          unset($data[$k]);

        if(!is_dir($dir.$v))
          unset($data[$k]);
      }

      return [
        'data'   => $data
      ];
    }

    function add(){
      return $this->readThemes();

    }

    /**
      @name htmlSheet
      @blox HTML Sheet
      @desc Render Sheet as HTML
      @icon html5
    **/

    function htmlSheet(){

    }
  }
?>
