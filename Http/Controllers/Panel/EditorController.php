<?php

namespace Modules\Feedy\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Modules\Feedy\Entities\Campaign;

class EditorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Campaign $data)
    {
        $this->data = $data;

        $this->view = 'feedy::panel.campaign';
        view()->share([
            'view' => $this->view
        ]);
    }

    /**
     * Show the editor page.
     *
     * @param String $uuid
     * @return \Illuminate\View\View
     */
    public function index($uuid)
    {
    	$data = $this->data->uuid($uuid)->firstOrFail();

        return view("$this->view.customizer", compact('data'));
    }

    /**
     * Update campaign data.
     *
     * @param \Illuminate\Http\Request
     * @param String $uuid
     * @return \Illuminate\View\View
     */
    public function update(Request $request, $uuid)
    {
        $data = $this->data->uuid($uuid)->firstOrFail();
        $data->update([
            'name' => $request->name, 
            'title' => $request->title, 
            'subtitle' => $request->subtitle, 
            'confirm_title' => $request->tyTitle, 
            'confirm_subtitle' => $request->tyMessage, 
            'enable_rating' => $request->filled('enable_rating') ? 1 : 0, 
            'enable_email' => $request->filled('enable_email') ? 1 : 0, 
            'widget_color' => $request->widget_color, 
            'widget_position' => $request->widget_position, 
            'widget_type' => $request->widget_type, 
            'widget_button' => $request->buttonText
        ]);

        return 'success';
    }
}