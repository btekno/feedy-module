@extends('feedy::panel.campaign.theme')
@section('title', __('feedy::value.integrations'))

@section('inner-content')
	<div class="card">
		<div class="card-header">
			<h3 class="card-title text-dark"><i class="fe fe-code mr-2"></i> {{ __('feedy::value.widget_embed') }}</h3>
			<div class="card-options">
			</div>
		</div>
		<div class="card-body">
			{!! __('feedy::value.integration_line_1') !!}
			<label class="form-label">{{ __('feedy::value.copy_your_code') }}</label>
			<div class="textarea-container">
				<textarea id="embed" class="form-control textareaInput" rows="3">&lt;!-- Start {{ config('feedy.name') }} Widget --&gt;
&lt;script type="text/javascript" src="{{ route('feedy.widget.script', $data->uuid) }}"&gt;&lt;/script&gt;
&lt;!-- End {{ config('feedy.name') }} --&gt;</textarea>
			</div>
			<div class="mt-4 d-flex justify-content-center">
				<button type="submit" class="btn bg-camp copy-to-clipboard w-50" id="copy-to-clipboard" data-clipboard-action="copy" data-clipboard-target="#embed">
					<i class="fe fe-copy copy-to-clipboard mr-2"></i> {{ __('feedy::value.copy_code') }}
				</button>
			</div>
			<a href="mailto:?subject={{ rawurlencode(__('feedy::value.email_subject', ['name' => config('feedy.name')])) }}&amp;body={{ rawurlencode(__('feedy::value.email_body', ['name' => config('feedy.name'), 'route' => route('feedy.widget.script', $data->uuid)])) }}" target="_blank" class="text-muted d-block text-center mt-3">
				{{ __('feedy::value.send_to_developer') }}
			</a>
		</div>
	</div>


	<div class="card">
		<div class="card-header">
			<h3 class="card-title text-dark"><i class="fe fe-file-text mr-2"></i> {{ __('feedy::value.standalone_page') }}</h3>
		</div>
		<div class="card-body">
			{!! __('feedy::value.integration_line_2', ['name' => config('feedy.name')]) !!}
			<div class="textarea-container mb-5">
				<textarea id="pageLink" class="form-control textareaInput mb-3" rows="1">{{ route('feedy.widget.view', $data->uuid) }}</textarea>
				<button type="submit" class="btn bg-camp mr-1 copy-page-clipboard" id="copy-page-clipboard" data-clipboard-action="copy" data-clipboard-target="#pageLink">
					<i class="fe fe-copy mr-2"></i> {{ __('feedy::value.copy_url') }}
				</button>
				<a href="{{ route('feedy.widget.view', $data->uuid) }}" target="_blank" class="btn btn-gray">
					<i class="fe fe-external-link mr-2"></i> {{ __('feedy::value.preview') }}
				</a>
			</div>
		</div>
	</div>
@stop