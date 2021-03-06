<?php
/*******************************************************************************
*
* @author      : Dominik Bonsch <dominik.bonsch@webfrap.net>
* @date        :
* @copyright   : Webfrap Developer Network <contact@webfrap.net>
* @project     : Webfrap Web Frame Application
* @projectUrl  : http://webfrap.net
*
* @licence     : BSD License see: LICENCE/BSD Licence.txt
*
* @version: @package_version@  Revision: @package_revision@
*
* Changes:
*
*******************************************************************************/

/**
 * Read before change:
 * It's not recommended to change this file inside a Mod or App Project.
 * If you want to change it copy it to a custom project.

 *
 * @package WebFrap
 * @subpackage Example
 * @author Dominik Bonsch <dominik.bonsch@webfrap.net>
 * @copyright webfrap.net <contact@webfrap.net>
 */
class ExampleElementKnowhow_Controller extends Controller
{
/*//////////////////////////////////////////////////////////////////////////////
// methodes
//////////////////////////////////////////////////////////////////////////////*/

  /**
   * @var array
   */
  protected $options           = array
  (
    'open' => array
    (
      'method'    => array('GET'),
      'views'      => array('maintab')
    ),
  );

/*//////////////////////////////////////////////////////////////////////////////
// methodes
//////////////////////////////////////////////////////////////////////////////*/

 /**
  * create an new window with an edit form for the enterprise_company entity
  * @param LibRequestHttp $request
  * @param LibResponseHttp $response
  * @return boolean
  */
  public function service_open($request, $response)
  {

    // prüfen ob irgendwelche steuerflags übergeben wurde
    $params  = $this->getFlags($request);

    $key = $request->param('node', Validator::TEXT);

    // create a window
    /* @var $view ExampleWebfrapKnowhow_Maintab_View  */
    $view   = $response->loadView
    (
      'example-knowhow',
      'ExampleElementKnowhow',
      'displayExample'
    );
    $view->setModel($this->loadModel('WebfrapKnowhowNode'));
    $view->displayExample($params);

  }//end public function service_open */

} // end class ExampleElementAttachmet_Controller
