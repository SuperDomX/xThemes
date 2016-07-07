<?php
/**
 * @name Themes
 * @desc Change the theme of your site 
 * @version v0.0
 * @author @xopherdeep
 * @icon cloud-download-icon.png
 * @mini magic 
 * @see construct 
 * @link themes/ashley
 * @todo
 * @alpha
 */

  class xThemes extends Xengine{

    function index(){
      return [
        'some_text' => 'some value'
      ];

    }

    function ashley($name,$name2){

      return [
        'name' => $name,
        'name2' => $name2
      ];
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
