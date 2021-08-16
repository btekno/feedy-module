<?php

namespace Modules\Feedy\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Modules\Feedy\Entities\User;

class IndexController extends Controller
{
    /**
     * Siapkan konstruktor controller
     * 
     * @param Model
     */
    public function __construct(User $user)
    {
        $this->user = $user;
        
        $this->view = 'feedy::landing';
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
        return view("$this->view.index");
    }

    /**
     * Get Started Page
     *
     * @return Illuminate\\View\\View
     */
    public function start()
    {
        if(me()->fd()->count()):
            return redirect()->route('feedy.index');
        endif;

        return view("$this->view.get-started");
    }

    /**
     * Registering first site
     *
     * @return Illuminate\\View\\View
     */
    public function register(Request $request)
    {
        if(me()->fd()->count()):
            return redirect()->route('feedy.index');
        endif;

        $this->user->updateOrCreate(['user_id' => me()->id], [
            'type' => 'Member', 
        ]);
        
        alert()->success('Now, you can use this feature.', 'Installed');
        return redirect()->route('feedy.index');
        
    }
}