<?php

class ErrorModel extends ModelBase
{    
    public function badURL()
    {
        $this->viewModel->set("pageTitle","Error - Bad URL");
        return $this->viewModel;
    }
}

?>
