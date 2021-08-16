@extends('feedy::panel.layouts.app')

@section('content')
   <div class="my-3 my-md-5">
      <div class="container">
         <div class="page-header">
            <div class="avatar bg-camp d-block mr-2" id="loadSwitchDiv">
               <i class="fe fe-mail" id="loadSwitch"></i>
            </div>
            <h2 class="page-title">
               <span>{{ $data->name }}</span>
            </h2>
         </div>
         <div class="row">
            <div class="col-lg-2 mb-4 px-0">
               <div class="list-group list-group-transparent mb-0">
                  <a href="{{ route('feedy.panel.index') }}" onclick="loaderInit()" class="list-group-item list-group-item-action mb-2">
                     <span class="icon mr-3"><i class="fe fe-arrow-left"></i></span>{{ __('feedy::value.all_feedback') }}
                  </a>
                  <a href="{{ route('feedy.panel.campaign.editor', $data->uuid) }}" onclick="loaderInit()" class="list-group-item list-group-item-action {{ request()->segment(4) == 'editor' ? 'active' : '' }}">
                     <span class="icon mr-3"><i id="editorClick" class="fe fe-edit-2"></i></span>{{ __('feedy::value.editor') }}
                  </a>
                  <a href="{{ route('feedy.panel.campaign.responses', $data->uuid) }}" onclick="loaderInit()" class="list-group-item list-group-item-action {{ request()->segment(4) == 'responses' ? 'active' : '' }}">
                     <span class="icon mr-3"><i class="fe fe-users"></i></span>{{ __('feedy::value.responses') }}
                     <span class="pull-right">{{ $data->responses()->count() }}</span>
                  </a>
                  <a href="{{ route('feedy.panel.campaign.integrations', $data->uuid) }}" onclick="loaderInit()" class="list-group-item list-group-item-action {{ request()->segment(4) == 'integrations' ? 'active' : '' }}">
                     <span class="icon mr-3"><i class="fe fe-code"></i></span>{{ __('feedy::value.integrations') }}
                  </a>
                  <a href="{{ route('feedy.panel.campaign.privacy', $data->uuid) }}" onclick="loaderInit()" class="list-group-item list-group-item-action {{ request()->segment(4) == 'privacy' ? 'active' : '' }}">
                     <span class="icon mr-3"><i class="fe fe-eye"></i></span>{{ __('feedy::value.privacy') }}
                  </a>
                  <a href="{{ route('feedy.panel.campaign.data', $data->uuid) }}" onclick="loaderInit()" class="list-group-item list-group-item-action {{ request()->segment(4) == 'data' ? 'active' : '' }}">
                     <span class="icon mr-3"><i class="fe fe-database"></i></span>{{ __('feedy::value.data_manager') }}
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="{{ route('feedy.panel.campaign.delete', $data->uuid) }}" onclick="loaderInit()" class="list-group-item list-group-item-action text-red {{ request()->segment(4) == 'delete' ? 'active' : '' }}">
                     <span class="icon mr-3"><i class="fe fe-trash text-red"></i></span> {{ __('feedy::value.delete_feedback') }}
                  </a>
               </div>
            </div>
            <div class="col-lg-10 order-md-1">
               <div class="row">
                  <div class="col-12">
                     @yield('inner-content')
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
@stop