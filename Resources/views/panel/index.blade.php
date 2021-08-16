@extends('feedy::panel.layouts.app')
@section('title', __('feedy::value.dashboard'))
@section('mDashboard', 'active')

@section('css')
@stop

@section('content')
    <div class="my-3 my-md-5">
        <div class="container">
            <div class="page-header">
                <h1 class="page-title">
                    {{ __('feedy::value.my_feedback') }}
                </h1>
            </div>
            <div class="row">
                @if(session()->has('success'))
                    <div class="col-md-12">
                        <div id="alertSlide" class="alert alert-success"><i class="far fa-check mr-3"></i> {{ session()->get('success') }}</div>
                    </div>
                @endif
                <div class="col-sm-6 col-md-3 col-lg-2">
                    <div class="card cardHome bg-camp text-white" data-toggle="modal" data-target="#newListModal" id="newListModalBtn" data-backdrop="static" data-keyboard="false">
                        <div class="card-body text-center py-6 d-flex justify-content-center align-items-center">
                            <h4>
                                <span class="display-4 font-weight-bold plusIcon">+</span>
                                <br><br>
                                {{ __('feedy::value.new_feedback') }}
                            </h4>
                        </div>
                    </div>
                </div>
                @foreach($data as $temp)
                    <div class="col-sm-6 col-md-3 col-lg-2">
                        <div class="card cardHome">
                            <div class="card-body text-center py-6 d-flex justify-content-center align-items-center" onclick="window.location.href = '{{ route('feedy.panel.campaign.editor', $temp->uuid) }}'">
                                <h4>{{ $temp->name }}</h4>
                            </div>
                            <div class="card-footer card-footerHome">
                                <span class="tag text-dark" onclick="window.location.href ='{{ route('feedy.panel.campaign.responses', $temp->uuid) }}'">
                                    {{ __('feedy::value.count_responses', ['count' => $temp->responses()->count()]) }}
                                </span>
                                <div class="item-action dropdown campaignDropdown">
                                    <a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-horizontal"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="{{ route('feedy.panel.campaign.integrations', $temp->uuid) }}" class="dropdown-item"><i class="dropdown-icon fe fe-code"></i> {{ __('feedy::value.integrations') }}</a>
                                        <a href="{{ route('feedy.panel.campaign.privacy', $temp->uuid) }}" class="dropdown-item"><i class="dropdown-icon fe fe-eye"></i> {{ __('feedy::value.privacy') }}</a>
                                        <a href="{{ route('feedy.panel.campaign.data', $temp->uuid) }}" class="dropdown-item"><i class="dropdown-icon fe fe-database"></i> {{ __('feedy::value.data_manager') }}</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="{{ route('feedy.panel.campaign.delete', $temp->uuid) }}" class="dropdown-item text-red"><i class="dropdown-icon fe fe-trash text-red"></i> {{ __('feedy::value.delete_feedback') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="modal fade" id="newListModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-s" role="document">
                    <div class="modal-content px-3">
                        <div class="modal-header">
                            <h5 class="modal-title">{{ __('feedy::value.new_feedback') }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            </button>
                        </div>
                        <form method="POST" action="{{ route('feedy.panel.campaign.create') }}">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="input">
                                        <input type="text" class="form-control mb-2" name="name" placeholder="Feedback name" required>
                                        <small>{{ __('feedy::value.new_feedback_desc') }}</small>
                                    </div>
                                </div>
                                <button type="submit" class="btn bg-camp w-25 btn-block new-list-modal-btn mb-3"><i class="fe fe-check"></i> {{ __('feedy::value.create') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
