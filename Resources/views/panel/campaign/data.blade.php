@extends('feedy::panel.campaign.theme')
@section('title', __('feedy::value.data_manager'))

@section('inner-content')
	<div class="card">
		<div class="card-header">
			<h3 class="card-title text-dark"><i class="fe fe-database mr-2"></i> {{ __('feedy::value.data_manager') }}</h3>
		</div>
		<div class="card-body">
			<div class="alert bg-danger text-white">{{ __('feedy::value.import_disabled') }}</div>
			<p>{!! __('feedy::value.data_line_1', ['name' => config('feedy.name')]) !!}</p>
			{!! __('feedy::value.data_line_2', ['count' => $data->responses()->count()]) !!}
			<div class="mt-5 mb-3">
				<button type="button" data-toggle="modal" data-target="#importModal" class="btn btn-gray w-25 mx-1">
					<i class="fe fe-upload mr-2"></i> {{ __('feedy::value.import') }}
				</button>
				<form method="post" class="mb-5 d-inline" action="{{ route('feedy.panel.campaign.export', $data->uuid) }}">
					@csrf
					<button type="submit" class="btn bg-camp w-25 mx-1">
						<i class="fe fe-download mr-2"></i> {{ __('feedy::value.download') }}
					</button>
				</form>
			</div>
		</div>
	</div>
@stop