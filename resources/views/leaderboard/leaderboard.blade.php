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
                    <div class="actions">
                        <div class="btn-group btn-group-devided" data-toggle="buttons">
                            <label class="btn btn-transparent green btn-outline btn-circle btn-sm active">
                                <input type="radio" name="options" class="toggle" id="option1">Today</label>
                            <label class="btn btn-transparent green btn-outline btn-circle btn-sm">
                                <input type="radio" name="options" class="toggle" id="option2">Week</label>
                            <label class="btn btn-transparent green btn-outline btn-circle btn-sm">
                                <input type="radio" name="options" class="toggle" id="option2">Month</label>
                        </div>
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
                                <th> JOINS </th>
                                <th> SINCE </th>
                                <th> COUNTRY </th>
                            </tr>
                            </thead>
                            <tr>
                                <td class="fit">
                                    <img class="user-pic rounded" src="/images/avatar/team1.jpg"> </td>
                                <td>
                                    <a href="javascript:;" class="primary-link">Brain</a>
                                </td>
                                <td> 20101 </td>
                                <td> 45 </td>
                                <td> Mar 2010 </td>
                                <td>
                                    <span class="bold theme-font">Austria</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="fit">
                                    <img class="user-pic rounded" src="/images/avatar/team2.jpg"> </td>
                                <td>
                                    <a href="javascript:;" class="primary-link">Nick</a>
                                </td>
                                <td> 19089 </td>
                                <td> 12 </td>
                                <td> Jul 2010 </td>
                                <td>
                                    <span class="bold theme-font">India</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="fit">
                                    <img class="user-pic rounded" src="/images/avatar/team3.jpg"> </td>
                                <td>
                                    <a href="javascript:;" class="primary-link">Tim</a>
                                </td>
                                <td> 15930 </td>
                                <td> 450 </td>
                                <td> Apr 2013 </td>
                                <td>
                                    <span class="bold theme-font">Austria</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="fit">
                                    <img class="user-pic rounded" src="/images/avatar/team4.jpg"> </td>
                                <td>
                                    <a href="javascript:;" class="primary-link">Tom</a>
                                </td>
                                <td> 12010 </td>
                                <td> 30 </td>
                                <td> Aug 2015 </td>
                                <td>
                                    <span class="bold theme-font">United States</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="fit">
                                    <img class="user-pic rounded" src="/images/avatar/team5.jpg"> </td>
                                <td>
                                    <a href="javascript:;" class="primary-link">Nick</a>
                                </td>
                                <td> 19089 </td>
                                <td> 12 </td>
                                <td> Jul 2010 </td>
                                <td>
                                    <span class="bold theme-font">India</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="fit">
                                    <img class="user-pic rounded" src="/images/avatar/team6.jpg"> </td>
                                <td>
                                    <a href="javascript:;" class="primary-link">Tim</a>
                                </td>
                                <td> 15930 </td>
                                <td> 450 </td>
                                <td> Apr 2013 </td>
                                <td>
                                    <span class="bold theme-font">Austria</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="fit">
                                    <img class="user-pic rounded" src="/images/avatar/team7.jpg"> </td>
                                <td>
                                    <a href="javascript:;" class="primary-link">Tom</a>
                                </td>
                                <td> 12010 </td>
                                <td> 30 </td>
                                <td> Aug 2015 </td>
                                <td>
                                    <span class="bold theme-font">United States</span>
                                </td>
                            </tr>

                            <tr>
                                <td class="fit">
                                    <img class="user-pic rounded" src="/images/avatar/team8.jpg"> </td>
                                <td>
                                    <a href="javascript:;" class="primary-link">Nick</a>
                                </td>
                                <td> 19089 </td>
                                <td> 12 </td>
                                <td> Jul 2010 </td>
                                <td>
                                    <span class="bold theme-font">India</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="fit">
                                    <img class="user-pic rounded" src="/images/avatar/team9.jpg"> </td>
                                <td>
                                    <a href="javascript:;" class="primary-link">Tim</a>
                                </td>
                                <td> 15930 </td>
                                <td> 450 </td>
                                <td> Apr 2013 </td>
                                <td>
                                    <span class="bold theme-font">Austria</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="fit">
                                    <img class="user-pic rounded" src="/images/avatar/team10.jpg"> </td>
                                <td>
                                    <a href="javascript:;" class="primary-link">Tom</a>
                                </td>
                                <td> 12010 </td>
                                <td> 30 </td>
                                <td> Aug 2015 </td>
                                <td>
                                    <span class="bold theme-font">United States</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="fit">
                                    <img class="user-pic rounded" src="/images/avatar/team11.jpg"> </td>
                                <td>
                                    <a href="javascript:;" class="primary-link">Nick</a>
                                </td>
                                <td> 19089 </td>
                                <td> 12 </td>
                                <td> Jul 2010 </td>
                                <td>
                                    <span class="bold theme-font">India</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="fit">
                                    <img class="user-pic rounded" src="/images/avatar/team12.jpg"> </td>
                                <td>
                                    <a href="javascript:;" class="primary-link">Tim</a>
                                </td>
                                <td> 15930 </td>
                                <td> 450 </td>
                                <td> Apr 2013 </td>
                                <td>
                                    <span class="bold theme-font">Austria</span>
                                </td>
                            </tr>

                            <tr>
                                <td class="fit">
                                    <img class="user-pic rounded" src="/images/avatar/team13.jpg"> </td>
                                <td>
                                    <a href="javascript:;" class="primary-link">Tom</a>
                                </td>
                                <td> 12010 </td>
                                <td> 30 </td>
                                <td> Aug 2015 </td>
                                <td>
                                    <span class="bold theme-font">United States</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="fit">
                                    <img class="user-pic rounded" src="/images/avatar/team14.jpg"> </td>
                                <td>
                                    <a href="javascript:;" class="primary-link">Nick</a>
                                </td>
                                <td> 19089 </td>
                                <td> 12 </td>
                                <td> Jul 2010 </td>
                                <td>
                                    <span class="bold theme-font">India</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="fit">
                                    <img class="user-pic rounded" src="/images/avatar/team15.jpg"> </td>
                                <td>
                                    <a href="javascript:;" class="primary-link">Tim</a>
                                </td>
                                <td> 15930 </td>
                                <td> 450 </td>
                                <td> Apr 2013 </td>
                                <td>
                                    <span class="bold theme-font">Austria</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection