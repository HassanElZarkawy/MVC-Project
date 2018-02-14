<?php

class HomeModel extends ModelBase
{
    //data passed to the home index view
    public function index()
    {   
        return $this->viewModel;
    }
}

?>
