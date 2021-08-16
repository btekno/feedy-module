<?php

namespace Modules\Feedy\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Modules\Feedy\Entities\Campaign;
use Modules\Feedy\Entities\Response;

class CampaignController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Campaign $data, Response $response)
    {
        $this->data = $data;
        $this->response = $response;

        $this->view = 'feedy::panel.campaign';
        view()->share([
            'view' => $this->view
        ]);
    }

    /**
     * Create a new feedback.
     *
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Route\Route
     */
    public function create(Request $request)
    {
        $create = $this->data->create([
            'name' => $request->name, 
            'user_id' => me()->id 
        ]);

        return redirect(route('feedy.panel.campaign.editor', $create->uuid));
    }
    
    /**
     * Show the confirmation editor page.
     *
     * @param String $uuid
     * @return \Illuminate\View\View
     */
    public function editor($uuid)
    {
    	$data = $this->data->uuid($uuid)->firstOrFail();

        return view("$this->view.editor", compact('data'));
    }

    /**
     * Show list of responses page.
     *
     * @param String $uuid
     * @return \Illuminate\View\View
     */
    public function responses($uuid)
    {
    	$data = $this->data->uuid($uuid)->firstOrFail();

        return view("$this->view.responses", compact('data'));
    }

    /**
     * Show the integrations page.
     *
     * @param String $uuid
     * @return \Illuminate\View\View
     */
    public function integrations($uuid)
    {
    	$data = $this->data->uuid($uuid)->firstOrFail();

        return view("$this->view.integrations", compact('data'));
    }

    /**
     * Show the privacy page.
     *
     * @param String $uuid
     * @return \Illuminate\View\View
     */
    public function privacy($uuid)
    {
    	$data = $this->data->uuid($uuid)->firstOrFail();

        return view("$this->view.privacy", compact('data'));
    }

    /**
     * Enabled/disabled of feedback privacy.
     *
     * @param String $uuid
     * @return \Illuminate\View\View
     */
    public function changePrivacy(Request $request, $uuid)
    {
        $data = $this->data->uuid($uuid)->firstOrFail();
        $data->update(['private' => $data->private ? 0 : 1]);

        return redirect()->back();
    }

    /**
     * Show the data manager page.
     *
     * @param String $uuid
     * @return \Illuminate\View\View
     */
    public function data($uuid)
    {
    	$data = $this->data->uuid($uuid)->firstOrFail();

        return view("$this->view.data", compact('data'));
    }

    /**
     * Show the delete confirmation page.
     *
     * @param String $uuid
     * @return \Illuminate\View\View
     */
    public function delete($uuid)
    {
    	$data = $this->data->uuid($uuid)->firstOrFail();

    	return view("$this->view.delete", compact('data'));
    }

    /**
     * Export responses list to CSV.
     *
     * @param Illuminate\Http\Request
     * @param String $uuid
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function export(Request $request, $uuid)
    {
    	$data = $this->data->uuid($uuid)->firstOrFail();

        $output = '';
        foreach ($data->responses as $row):
            $output .= implode(",",$row->toArray());
        endforeach;
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="'.date('Y-m-d').'-'.str_slug($data->name).'.csv"'
        ];

        return response()->make(rtrim($output, "\n"), 200, $headers);
    }

    /**
     * Delete the campaign.
     *
     * @param Illuminate\Http\Request
     * @param String $uuid
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function deleteCampaign(Request $request, $uuid)
    {
    	$data = $this->data->uuid($uuid)->firstOrFail();
        foreach($data->responses as $temp):
            $temp->delete();
        endforeach;
        $data->delete();

        session()->flash('success', __('feedy::value.deleted_feedback'));
    	return redirect(route('feedy.panel.index'));
    }

    /**
     * Delete a response.
     *
     * @param String $uuid
     * @param String $id
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function deleteResponse($uuid, $id)
    {
    	$data = $this->response->findOrFail($id);
        $data->delete();
    	
        session()->flash('success', __('feedy::value.deleted_response'));
    	return redirect()->back();
    }
}