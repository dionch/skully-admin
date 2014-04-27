<?php
namespace App;

use RedBean_Facade as R;

/**
 * Class AdminTraits
 * @package App
 * Trait to be used at App\Application
 */
class AdminTrait {
    public function getAdmin()
    {
        /** @var \Skully\Application $this */
        /** @var \RedBean_SimpleModel $adminBean */
        $adminBean = R::findOne('admin', "id = ?", array($this->getSession()->get('adminId')));
        if (!empty($adminBean)) {
            return $adminBean->box();
        }
        else {
            return null;
        }
    }
} 