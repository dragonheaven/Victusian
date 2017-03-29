@extends('layouts.main')

@section('title')
    Be a Legion
@endsection

@section('content')
    <link rel="stylesheet" href="/plugins/videorecorder/main.css" />
    <h1 class="text-center page-title">Become a Legion</h1>
    <style>
        a#downloadLink {
            display: block;
            margin: 0 0 1em 0;
            min-height: 1.2em;
        }
        p#data {
            min-height: 6em;
        }
    </style>
    <div id="container">
        <div style = "text-align:center;">
            <h1>Please record introducing yourself </h1>
            <video controls autoplay></video><br>
            <button id="rec" onclick="onBtnRecordClicked()">Record</button>
            <button id="pauseRes"   onclick="onPauseResumeClicked()" disabled>Pause</button>
            <button id="stop"  onclick="onBtnStopClicked()" disabled>Stop</button>
        </div>
        <a id="downloadLink" download="mediarecorder.webm" name="mediarecorder.webm" href></a>
        <p id="data"></p>
        <script src="/plugins/videorecorder/main.js"></script>

    </div>
@endsection