@extends('admin.layouts.admin-template')


@section('content')


{!! $calendar->calendar() !!}
{!! $calendar->script() !!}
<!-- </div> -->


@stop