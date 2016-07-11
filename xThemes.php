<?php
/**
 * @name    Themes
 * @desc    Change the theme of your site
    * @version v0.1(160710)
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
      $super_nexus     = parse_url($this->_SET['CONFIG']['super_nexus']);
      $this_nexus      = parse_url($_SERVER['HTTP_HOST']);
      $is_super_nexus  = ($this_nexus['host'] == $super_nexus['host']);

      if($is_super_nexus){
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
      }else{
        $url = "http://{$super_nexus['host']}/themes/readThemes/.json";
        $string = file_get_contents($url);
        $data   = json_decode($string, true);
        $data = $data['data'];
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
