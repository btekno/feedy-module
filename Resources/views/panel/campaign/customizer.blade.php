@extends('feedy::panel.campaign.theme')
@section('title', __('feedy::value.customizer'))

@section('css')
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" media="all" href="{{ asset('assets/feedy/css/editor.css') }}">

	<style type="text/css">
		.header:first-child {
			display: none;
		}
	</style>

@stop

@section('js')
	<script>var postUrl = "{{ route('feedy.panel.campaign.editor.index', $data->uuid) }}";</script>
	<script type="text/javascript" src="{{ asset('assets/feedy/js/editor.js') }}"></script>
@stop

@section('content')
	<div class="page-main">
		<form id="editorForm">
			@csrf
			<div class="header py-4">
				<div class="container">
					<div class="d-flex">
						<a href="{{ route('feedy.panel.campaign.editor', $data->uuid) }}" class="fas fa-chevron-left text-dark mr-5 text-decoration-none mt-3"></a>
						<a class="header-brand" href="/home">
			                <img src="{{ config('feedy.assets.logo') }}" class="header-brand-img mr-2">
			                <span class="hidden-sm-down">{{ config('feedy.name') }}</span>
			            </a>
						<div class="d-flex order-lg-2 ml-auto">
							<a href="{{ route('feedy.widget.view', $data->uuid) }}" target="_blank" class="btn btn-secondary mr-2 pt-2 pb-2 pl-5 pr-5">{{ __('feedy::value.view') }} <i class="far fa-external-link ml-2"></i></a>
							<button type="submit" class="btn bg-camp text-white pt-2 pb-2 pl-5 pr-5" id="saveBtn"><i class="fas fa-save mr-2"></i> {{ __('feedy::value.save_changes') }}</button>
						</div>
					</div>
				</div>
			</div>
			<div id="response"></div>
			<div class="my-3 my-md-5">
				<div class="container">
					<div class="row pt-4">
						<div class="col-lg-5">
							<h4 class="ml-3 mt-2 mb-5"><i class="fad fa-broadcast-tower mr-2"></i> {{ __('feedy::value.live_customizer') }}</h4>
							<div class="card">
								<div class="card-body pb-0">
									<div class="form-group">
										<label>{{ __('feedy::value.feedback_name') }}</label>
										<input type="text" class="form-control" name="name" value="{{ $data->name }}" required>
										<small class="form-text text-muted mt-2">
											{{ __('feedy::value.feedback_name_desc') }}
										</small>
									</div>
									<div class="form-group">
										<label>{{ __('feedy::value.accent_color') }}</label>
										<input class="form-control jscolor {onFineChange:'update(this)',hash:true}" name="widget_color" value="{{ $data->widget_color }}" autocomplete="off">
									</div>
									<div class="form-group">
										<label>{{ __('feedy::value.position') }}</label>
										<select class="form-control" name="widget_position">
											<option value="Left" {{ $data->widget_position == 'Left' ? 'selected' : '' }}>{{ __('feedy::value.left') }}</option>
											<option value="Right" {{ $data->widget_position == 'Right' ? 'selected' : '' }}>{{ __('feedy::value.right') }}</option>
										</select>
									</div>
									<div class="form-group">
										<label>{{ __('feedy::value.widget_type') }}</label>
										<select class="form-control" name="widget_type">
											<option value="Floating" {{ $data->widget_type == 'Floating' ? 'selected' : '' }}>{{ __('feedy::value.floating') }}</option>
											<option value="Sidebar" {{ $data->widget_type == 'Sidebar' ? 'selected' : '' }}>{{ __('feedy::value.sidebar') }}</option>
											<option value="Fullscreen" {{ $data->widget_type == 'Fullscreen' ? 'selected' : '' }}>{{ __('feedy::value.fullscreen') }}</option>
										</select>
									</div>
									<hr>
									<div class="form-group">
										<label class="custom-switch ends_at-toggle" id="emojiToggle" onchange="myFunction()">
											<input type="checkbox" name="enable_rating" class="custom-switch-input" value="1" {{ $data->enable_rating ? 'checked' : '' }}>
											<span class="custom-switch-indicator"></span>
											<span class="custom-switch-description">{{ __('feedy::value.enable_rating') }}</span>
										</label>
										<small class="form-text text-muted">
											{{ __('feedy::value.enable_rating_desc') }}
										</small>
									</div>
									<div class="form-group">
										<label class="custom-switch ends_at-toggle">
											<input type="checkbox" name="enable_email" class="custom-switch-input" value="1" {{ $data->enable_email ? 'checked' : '' }}>
											<span class="custom-switch-indicator"></span>
											<span class="custom-switch-description">{{ __('feedy::value.enable_email') }}</span>
										</label>
										<small class="form-text text-muted">
											{{ __('feedy::value.enable_email_desc') }}
										</small>
									</div>
									<div class="form-group">
										<label>{{ __('feedy::value.widget_button') }} <small class="form-text text-muted d-inline"><a href="#" class="ml-1 text-danger" data-toggle="modal" data-target="#whatIsThisFeedbackBtn">{{ __('feedy::value.whats_this') }}</a></small></label>
										<input type="text" class="form-control" name="buttonText" value="{{ $data->widget_button }}" required>
									</div>
									<input type="text" class="d-none">
								</div>
							</div>
						</div>
						<div class="col-lg-7 pl-3 pl-10 ml-10">
							<div class="row mb-4">
								<div class="col-md-6">
									<a href="#" id="buttonDefault" class="btn btn-light btn-block btn-dark text-white"><i class="fas fa-list mr-2"></i> {{ __('feedy::value.form') }}</a>
								</div>
								<div class="col-md-6">
									<a href="#" id="buttonThankyou" class="btn btn-light btn-block"><i class="fas fa-check-circle mr-2"></i> {{ __('feedy::value.confirmation') }}</a>
								</div>
							</div>
							<div class="card pl-0 pr-0 pt-5 pb-6 preview" id="default">
								<div class="lw-widget lw-widget_fullscreen d-block">
									<div class="lw-container lw-container_md d-block">
										<div class="lw-item d-inline" style="--theme-color:{{ $data->widget_color }}">
											<div class="lw-wrap">
												<div id="widgetHeader">
													<div class="lw-logo lw-logo_icon lw-logo_center lw-mb-md iconBlock">
														<div class="lw-preview accentApply">
															<i class="far fa-envelope faIcon"></i>
														</div>
													</div>
													<input type="text" class="d-none" name="title" id="titleTextarea" value="{{ $data->title }}" required>
													<div class="lw-title lw-title_lg widgetTitle" placeholder="{{ __('feedy::value.enter_title') }}" id="titleFiller" contenteditable="true">{{ $data->title }}</div>
													<input type="text" class="d-none" name="subtitle" id="subtitleTextarea" value="{{ $data->subtitle }}" required>
													<div class="lw-content lw-mb-sm widgetSubtitle" placeholder="{{ __('feedy::value.enter_subtitle') }}" id="subtitleFiller" contenteditable="true">{{ $data->subtitle }}</div>
												</div>
												<div id="response">
													<div id="emojiContainer" {{ $data->enable_rating == 0 ? 'style=display:none' : '' }}>
														<div class="lw-title lw-title_sm lw-mb-sm rateTitle">{{ __('feedy::value.rate_exp') }}</div>
														<div class="lw-tags lw-mb-sm emojiContainer">
															<div style="padding:10px" class="lw-tags-item lw-active"><img src="{{ config('feedy.emoji.amazing') }}" width="30"></div>
															<div style="padding:10px" class="lw-tags-item"><img src="{{ config('feedy.emoji.great') }}" width="30"></div>
															<div style="padding:10px" class="lw-tags-item"><img src="{{ config('feedy.emoji.ok') }}" width="30"></div>
															<div style="padding:10px" class="lw-tags-item"><img src="{{ config('feedy.emoji.bad') }}" width="30"></div>
															<div style="padding:10px" class="lw-tags-item"><img src="{{ config('feedy.emoji.terrible') }}" width="30"></div>
														</div>
													</div>
													<input type="text" id="rateValue" value="5" hidden="">
													<div class="lw-mb-md">
														<div class="lw-field lw-mb">
															<div class="lw-icon"><i class="fas fa-envelope"></i></div>
															<input class="lw-input mb-3" type="email" name="email" placeholder="{{ __('feedy::value.email') }}" readonly>
														</div>
														<div class="lw-field">
															<textarea class="lw-textarea" placeholder="{{ __('feedy::value.tell_us') }}" readonly></textarea>
														</div>
													</div>
													<button type="button" class="lw-btn lw-btn_wide accentApply">{{ __('feedy::value.send_feedback') }}</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card pl-0 pr-0 pt-5 pb-6" id="thank-you" style="display: none;">
								<div class="lw-widget lw-widget_fullscreen d-block">
									<div class="lw-container lw-container_md d-block">
										<div class="lw-item d-inline">
											<div class="lw-wrap">
												<input type="text" class="d-none" name="tyTitle" id="tyTitleTextarea" value="{{ $data->confirm_title }}" required>
												<div class="lw-title lw-title_lg lw-center tyTitle" placeholder="{{ __('feedy::value.enter_title') }}" id="tyTitleFiller" contenteditable="true">{{ $data->confirm_title }}</div>
												<input type="text" class="d-none" name="tyMessage" id="tySubtitleTextarea" value="{{ $data->confirm_subtitle }}" required>
												<div class="lw-content lw-center lw-mb" placeholder="{{ __('feedy::value.enter_message') }}" id="tySubtitleFiller" contenteditable="true">{{ $data->confirm_subtitle }}</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="whatIsThisFeedbackBtn" tabindex="-1" role="dialog">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-body">
							<img class="img-fluid" src="{{ asset('assets/feedy/img/button.png') }}" alt="Image">
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
@stop