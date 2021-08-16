<?php

namespace Modules\Feedy\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
	/**
     * Siapkan konstruktor controller
     * 
     * @param Model
     */
    public function __construct()
    {
        $this->view = 'feedy::panel';
        view()->share([
            'view' => $this->view
        ]);
    }

    /**
     * Homepage (Landing Page)
     *
     * @return Illuminate\\View\\View
     */
    public function index()
    {
        $data = me()->fd_campaigns;

        return view("$this->view.index", compact('data'));
    }
}