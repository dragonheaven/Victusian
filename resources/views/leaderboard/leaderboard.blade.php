@extends('layouts.main')

@section('title')
    Leaderboard
@endsection

@section('content')
    <style>
        .user-pic {
            max-width: 50px;
        }
    </style>
    <div class="main-container">
        <div class="container">
            <h1 class="page-title text-center">Leaderboard</h1>
            <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption caption-md">
                        <i class="icon-bar-chart font-red"></i>
                        <span class="caption-subject font-red bold uppercase">Member Activity</span>
                        <span class="caption-helper">weekly stats...</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="row number-stats margin-bottom-30">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="stat-left">
                                <div class="stat-chart">
                                    <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                                    <div id="sparkline_bar"></div>
                                </div>
                                <div class="stat-number">
                                    <div class="title"> Total </div>
                                    <div class="number"> 2460 </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="stat-right">
                                <div class="stat-chart">
                                    <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                                    <div id="sparkline_bar2"></div>
                                </div>
                                <div class="stat-number">
                                    <div class="title"> New </div>
                                    <div class="number"> 719 </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-scrollable table-scrollable-borderless">
                        <table class="table table-hover table-light">
                            <thead>
                            <tr class="uppercase">
                                <th colspan="2"> MEMBER </th>
                                <th> CREDIT </th>
                                <th> RANK </th>
                                <th> SINCE </th>
                                <th> COUNTRY </th>
                            </tr>
                            </thead>
                            @if(isset($leaders))
                                @if(count($leaders))
                                    @foreach($leaders as $leader)
                                        <tr>
                                            <td class="fit">
                                                <img class="user-pic rounded" src="/{{$leader->image_url}}"> </td>
                                            <td>
                                                <a href="javascript:;" class="primary-link">{{$leader->name}}</a>
                                            </td>
                                            <td> {{$leader->credits}} </td>
                                            @if($leader->rank == 0)
                                                <td> Red Member </td>
                                            @elseif($leader->rank == 1)
                                                <td> Indigo Blue Member </td>
                                            @elseif($leader->rank == 2)
                                                <td> Golden Pillar Member </td>
                                            @elseif($leader->rank == 3)
                                                <td> Star Light Member </td>
                                            @elseif($leader->rank == 4)
                                                <td> Master of duality </td>
                                            @endif

                                            <td> {{$leader->created_at}} </td>
                                            <td>
                                                <span class="bold theme-font">Austria</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            @endif

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection