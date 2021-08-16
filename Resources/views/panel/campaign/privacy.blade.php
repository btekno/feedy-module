@extends('feedy::panel.campaign.theme')
@section('title', __('feedy::value.privacy'))

@section('inner-content')
	<div class="card">
		<div class="card-header">
			<h3 class="card-title text-dark"><i class="fe fe-eye mr-2"></i> {{ __('feedy::value.privacy') }}</h3>
		</div>
		<div class="card-body">
			{!! __('feedy::value.privacy_line_1', ['name' => config('feedy.name')]) !!}
			<div class="mt-5 mb-3">
				<form method="POST">
					@csrf
					<input type="hidden" name="private" value="{{ $data->private }}">
					@if($data->private)
						<button type="submit" class="btn btn-success w-25" onclick="$(this).addClass('disabled').addClass('btn-loading');">
							<i class="fe fe-toggle-right mr-2"></i>{{ __('feedy::value.enabled') }}
						</button>
					@else
						<button type="submit" class="btn btn-danger w-25" onclick="$(this).addClass('disabled').addClass('btn-loading');">
							<i class="fe fe-toggle-left mr-2"></i>{{ __('feedy::value.disabled') }}
						</button>
					@endif
				</form>
			</div>
		</div>
	</div>
@stop