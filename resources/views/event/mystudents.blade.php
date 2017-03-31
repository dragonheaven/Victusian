@extends('layouts.main')

@section('title')
    My Students
@endsection

@push('asset')

<style>
    .avatar {
        border: 1px solid transparent;
        border-radius: 5px !important;
    }

    .rankbadge {
        width: 40px;
        display: inline-block;
        position: absolute;
    }

    .row-even {
        background-color: rgba(128, 190, 245, 0.12);
    }
</style>
@endpush

@section('content')
<div class="banner pv-40 ding-bottom-clear parallax dark-translucent-bg" style="background-image:url('/images/workshop.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-center col-md-offset-2 pv-20">
                <h1 class="title">Your Students <strong>joined this event</strong></h1>
                <div class="separator mt-10">
                </div>
                <h3 class="text-center">
                    {{$event->title}}
                </h3>
            </div>
        </div>
    </div>
</div>

<div class="main-container">
    <div class="container space-top">
        <h1 class="space-top page-title text-center">{{$event->title}}</h1>
        <div class="row panel-body">
            <div class="col-md-2">
                <img src="/{{$event->img_url}}" style="border: 1px solid transparent; border-radius: 10px !important;">
            </div>
            <div class="col-md-10">
                <p>
                    {{$event->description}}
                </p>
            </div>
        </div>

        <div class="space-top">
            @if(count($attendees))
                @foreach($attendees as $key => $attendee)

                @if($key % 2 == 0)
                <div class="row panel-body row-even">
                @else
                <div class="row panel-body">
                @endif
                    <div class="col-md-1">
                        {{--<img class="avatar" src="/{{$attendee->image_url}}">--}}
                        <img class="avatar" src="/images/avatar/team4.jpg">
                    </div>
                    <div class="col-md-2">
                        <h5> {{$attendee->name}} </h5>

                    </div>
                    <div class="col-md-1">
                        @if($attendee->roleid == 4)
                            <h5>Victusian</h5>
                        @elseif($attendee->roleid == 3)
                            <h5>Master</h5>
                        @endif
                    </div>
                    <div class="col-md-1">
                        @if($attendee->rank == 0)
                            <img class="rankbadge" src="/images/badge/red_rank.png">
                        @elseif($attendee->rank == 1)
                            <img class="rankbadge" src="/images/badge/indigo_rank.png">
                        @elseif($attendee->rank == 2)
                            <img class="rankbadge" src="/images/badge/golden_rank.png">
                        @elseif($attendee->rank == 3)
                            <img class="rankbadge" src="/images/badge/star_rank.png">
                        @elseif($attendee->rank == 4)
                            <img class="rankbadge" src="/images/badge/duality_rank.png">
                        @endif
                    </div>
                    <div class="col-md-2">
                        @if($attendee->rank == 0)
                            <h5>Red Member</h5>
                        @elseif($attendee->rank == 1)
                            <h5>Indigo Blue Member</h5>
                        @elseif($attendee->rank == 2)
                            <h5>Golden Pillar Member</h5>
                        @elseif($attendee->rank == 3)
                            <h5>Star Light Member</h5>
                        @elseif($attendee->rank == 4)
                            <h5>Master of Duality</h5>
                        @endif
                    </div>
                    <div class="col-md-2">
                        <h5>{{$attendee->credits}} &nbsp;Credits</h5>
                    </div>

                    <div class="col-md-2">
                        @if($attendee->state == 1)
                            <h5>Checked in</h5>
                        @elseif($attendee->state == 0)
                            <h5>Not checked</h5>
                        @endif
                    </div>
                    <div class="col-md-1">
                        @if($attendee->state == 1)
                            <h5><i class="fa fa-check">&nbsp;</i></h5>
                        @endif
                    </div>

                </div>
                @endforeach
            @else
                <div class="panel-body row">
                    <h4>There is nobody joined to this event yet.</h4>
                </div>
            @endif
        </div>


    </div>
</div>
@endsection