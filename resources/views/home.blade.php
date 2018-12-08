@extends('layouts.app-student')

@section('content')
<div class="container">
    <!-- <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div> -->

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading no-border">
                    <h4 class="border-bottom pb-2 mb-0"><strong>Ujian Nasional</strong></h4>
                </div>

                <div class="panel-body">
                    <div class="media text-muted pt-3">
                        <i class="fa fa-lg fa-flask mr-4 rounded" aria-hidden="true"></i>
                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                            Learn all the basic features of JavaScript, including making your website more interactive,
                            changing website content, validating forms, and so much more.
                        </p>
                        <button class="text-muted">
                            <i class="fa fa-hourglass-end" aria-hidden="true"></i> Mulai
                        </button>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="media text-muted pt-3">
                        <i class="fa fa-lg fa-flask mr-4 rounded" aria-hidden="true"></i>
                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                            Learn all the basic features of JavaScript, including making your website more interactive,
                            changing website content, validating forms, and so much more. Learn all the basic features of JavaScript,
                        </p>
                        <button class="text-muted">
                            <i class="fa fa-hourglass-end" aria-hidden="true"></i> Mulai
                        </button>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="media text-muted pt-3">
                        <i class="fa fa-lg fa-flask mr-4 rounded" aria-hidden="true"></i>
                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                            Learn all the basic features of JavaScript, including making your website more interactive,
                            changing website content, validating forms, and so much more. Learn all the basic features of JavaScript,
                            including making your website more interactive, changing website content, validating forms
                        </p>
                        <button class="text-muted">
                            <i class="fa fa-hourglass-end" aria-hidden="true"></i> Mulai
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
