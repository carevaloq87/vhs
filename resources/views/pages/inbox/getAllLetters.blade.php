@extends('layouts.app')

@section('title', 'Home')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel inbox_panel-primary">
                <div class="panel-heading">
                    <div class="col-md-10 services_heading_right">
                        <h3>Your Housing Letters</h3>
                    </div>
                    <div class="col-md-2 services_heading_right">
                        <div class="toolbox-banner mail_icon-link">
                        </div>
                    </div>
                    <div class="col-md-1 services_heading_right">
                        <div class="toolbox-banner mail_icon-link">
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    @if ($letters->isEmpty())

                    You have not recieved any letter from Housing Office
                    @else
                    <div class="col-md-12 services_heading_right">
                        <div class="letter_list_wrapper">
                            <div class="letter_list_header col-md-9">
                                <h4>Unread mail</h4>
                            </div>
                            <div class="letter_list_header_right col-md-3">
                             <div class="dropdown">
                              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                  <span class="float-left sort_by_text">Sort your letters</span>
                                  <span class="sort_by_text sort_by_icon"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li>
                                    <!-- <li><a href="#">Option not available yet</a></li> -->
                                        <li><a href="/sortbyservices">Sort by services</a></li>
                                    </ul>
                                </div>
                            </div>
                            @foreach($letter_unread as $letter) 
                            @if ($letter->unread == '1')
                            <div class="col-md-12 all_letter_list">
                             <a href="/letter/{{ $letter->id }}" class="letter_list_unread">
                                 <div class="col-md-3">
                                    {{ $letter->type }} -
                                    {{ $letter->description }}
                                </div>
                                <div class="col-md-6">
                                    {{ $letter->summary }}
                                </div>
                                <div class="col-md-2">
                                    {{ date("j M", strtotime($letter->letter_date)) }}
                                </div>
                                <div class="col-md-1">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </div>
                            </a>
                        </div>
                        @endif

                        @endforeach
                        </div>
                        <div class="letter_list_wrapper">
                            <div class="letter_list_header">
                                <h4>Read mail</h4>
                            </div>
                            @foreach($letter_read as $letter) 
                            @if ($letter->unread == '0')
                            <div class="col-md-12 all_letter_list">
                                <a href="/letter/{{ $letter->id }}">
                                    <div class="col-md-3">
                                        {{ $letter->type }} -
                                        {{ $letter->description }}
                                    </div>
                                    <div class="col-md-6">
                                        {{ $letter->summary }}
                                    </div>
                                    <div class="col-md-2">
                                        {{ date("j M", strtotime($letter->letter_date)) }}
                                    </div>
                                    <div class="col-md-1">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </div>
                            @endif
                            @endforeach
                            {{ $letter_read->links() }}
                        </div>
                        @endif
                    </div>

                    <div class="col-md-2 services_heading_right">
                        <div class="toolbox-banner mail_icon-link">
                        </div>
                    </div>
                    <div class="col-md-1 services_heading_right">
                        <div class="toolbox-banner mail_icon-link">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('pages.account.hoInfo');

@endsection