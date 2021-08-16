@extends('feedy::panel.campaign.theme')
@section('title', __('feedy::value.delete_feedback'))

@section('inner-content')
	<div class="card">
		<div class="card-header">
			<h3 class="card-title text-dark"><i class="fe fe-trash mr-2"></i> {{ __('feedy::value.delete_feedback') }}</h3>
		</div>
		<div class="card-body">
			<p>{!! __('feedy::value.delete_line_1') !!}</p>
			<p>{!! __('feedy::value.delete_line_2') !!}</p>
			<div class="mt-5">
				<form method="post" class="mb-5">
					<input type="hidden" name="_method" value="DELETE">
					@csrf
					<input type="hidden" name="deleteSubmit" value="1">
					<button type="submit" class="btn btn-danger w-25 mr-1" onclick="$(this).addClass('disabled').addClass('btn-loading');">
						<i class="fe fe-trash mr-2"></i> {{ __('feedy::value.delete_feedback') }}
					</button>
					<a href="{{ route('logout') }}" class="btn btn-gray pl-4 pr-4" onclick="event.preventDefault();document.getElementById('export').submit();">
						<i class="fe fe-download mr-2"></i> {{ __('feedy::value.export') }}
					</a>
				</form>
			</div>
		</div>
	</div>
@stop

<form id="export" method="post" action="{{ route('feedy.panel.campaign.export', $data->uuid) }}" style="display: none;">
	@csrf
</form>