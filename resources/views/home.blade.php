@extends('layouts.app')

@section('content')
<div class="box">
    <img src="{{ asset('images/solutions1.jpg') }}" alt="cover">
</div>
<marquee class="mt-3 mb-0" behavior="scroll" direction="right" scrollamount="5">
    <h5>Announcements and information for staff to be displayed here...</h5>
</marquee>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card pt-0" style="background-color: #f8fafc; border-color: #f8fafc"" >
                {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-3 mt-2">
                            <a href="https://gridcoprod.operations.dynamics.com" target="_blank_" title="Enterprise Resource Planning">
                                <div class="card shadow p-1 mb-1 bg-white rounded">
                                    <div class="card-body">
                                        <h5><i class="fa fa-connectdevelop" aria-hidden="true"></i>&nbsp; GRIDSol (ERP)</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-3 mt-2">
                            <a href="https://kace" target="_blank_" title="Service Desk">
                                <div class="card shadow p-1 mb-1 bg-white rounded">
                                    <div class="card-body">
                                        <h5><i class="fa fa-question-circle" aria-hidden="true"></i>&nbsp; Service Desk</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-3 mt-2">
                            <a href="http://intranet.gridcogh.com" target="_blank_" title="GRIDCo Smart Workplace">
                                <div class="card shadow p-1 mb-1 bg-white rounded">
                                    <div class="card-body">
                                        <h5><i class="fa fa-telegram" aria-hidden="true"></i>&nbsp; Smart Workplace</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-3 mt-2">
                            <a href="http://erms.gridcogh.com" target="_blank_" title="Enterprise Risk Management System">
                                <div class="card shadow p-1 mb-1 bg-white rounded">
                                    <div class="card-body">
                                        <h5><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp; ERMS</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-3 mt-2">
                            <a href="https://pom.gridcogh.com" target="_blank_" title="Planned Outage Manager">
                                <div class="card shadow p-1 mb-1 bg-white rounded">
                                    <div class="card-body">
                                        <h5><i class="fa fa-bolt" aria-hidden="true"></i>&nbsp; P.O.M.</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-3 mt-2">
                            <a href="https://telemetry.gridcogh.com" target="_blank_" title="Telemetry">
                                <div class="card shadow p-1 mb-1 bg-white rounded">
                                    <div class="card-body">
                                        <h5><i class="fa fa-list-alt" aria-hidden="true"></i>&nbsp; Telemetry</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-3 mt-2">
                            <a href="https://smp.gridcogh.com" target="_blank_" title="System Measurands Publisher">
                                <div class="card shadow p-1 mb-1 bg-white rounded">
                                    <div class="card-body">
                                        <h5><i class="fa fa-television" aria-hidden="true"></i>&nbsp; SMP</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-3 mt-2">
                            <a href="https://bt.gridcogh.com" target="_blank_" title="Business Tracker for CE's Office">
                                <div class="card shadow p-1 mb-1 bg-white rounded">
                                    <div class="card-body">
                                        <h5><i class="fa fa-list-ol" aria-hidden="true"></i>&nbsp; Business Tracker</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-3 mt-2">
                            <a href="#" target="_blank_" title="Document Management System">
                                <div class="card shadow p-1 mb-1 bg-white rounded">
                                    <div class="card-body">
                                        <h5><i class="fa fa-files-o" aria-hidden="true"></i>&nbsp; DMS</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
