<?php

namespace Modules\Landingai\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class LandingaisController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Landingais';

        // module name
        $this->module_name = 'landingais';

        // directory path of the module
        $this->module_path = 'landingai::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\Landingai\Models\Landingai";
    }

}
