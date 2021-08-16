@extends('feedy::panel.campaign.theme')
@section('title', __('feedy::value.editor'))

@section('inner-content')
	<div class="card">
		<div class="card-header">
			<h3 class="card-title"><span class="icon mr-3"><i class="fe fe-edit-2"></i></span>{{ __('feedy::value.feedback_editor') }}</h3>
		</div>
		<div class="card-body">
			{!! __('feedy::value.editor_line_1', ['name' => config('feedy.name')]) !!}
			<a href="{{ route('feedy.panel.campaign.editor.index', $data->uuid) }}" class="btn bg-camp mt-3" onclick="$('#editCampaign').submit(); $(this).addClass('disabled').addClass('btn-loading');">{{ __('feedy::value.launch_editor') }} <i class="fe fe-arrow-right ml-2"></i></a>
		</div>
	</div>
@stop