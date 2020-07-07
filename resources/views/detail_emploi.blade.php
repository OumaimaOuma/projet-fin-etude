@extends('layouts.app')
@section('content')
<section class="space-ptb bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center">
                    <h2 class="text-primary">Publier un Nouvel Emploi</h2>
                </div>
            </div>
            <div class="col-md-8">
                <div class=" justify-content-center">
                    <ul class="nav nav-tabs nav-tabs-03 justify-content-center d-sm-flex d-block text-center" id="myTab" role="tablist">
                        <li class="flex-fill">
                            <a class="nav-item active" id="Job-detail-tab" data-toggle="tab" href="detail_emploi" role="tab" aria-controls="Job-detail" aria-selected="false">
                                <div class="feature-info-icon mb-3">
                                    <i class="flaticon-suitcase"></i>
                                </div>
                                <span>Detail d'emploi</span>
                            </a>
                        </li>
                        <li class="flex-fill">
                            <a class="nav-item" id="Package-tab" data-toggle="tab" href="paiement" role="tab" aria-controls="Package" aria-selected="false">
                                <div class="feature-info-icon mb-3">
                                    <i class="flaticon-debit-card"></i>
                                </div>
                                <span>Package &amp; Payments</span>
                            </a>
                        </li>
                        <li class="flex-fill">
                            <a class="nav-item" id="Confirm-tab" data-toggle="tab" href="#Confirm" role="tab" aria-controls="Confirm" aria-selected="false">
                                <div class="feature-info-icon mb-3">
                                    <i class="flaticon-tick"></i>
                                </div>
                                <span>Confirmation</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="user-dashboard-info-box">
                    <div class="section-title-02 mb-4">
                        <h4>offre d'emploi</h4>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <form class="form-row">
                                <div class="form-group col-md-12">
                                    <label>titre emploi</label>
                                    <input type="text" class="form-control" value="">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>description</label>
                                    <textarea class="form-control" rows="4"></textarea>
                                </div>
                                <div class="from-group col-md-12">
                                    <label>email recreuteur</label>
                                    <input type="text" class="from-control" value="">
                                </div>
                                <div class="form-group col-md-6 datetimepickers">
                                    <label>date publication</label>
                                    <div class="input-group date" id="datetimepicker-01" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" placeholder="Date" data-target="#datetimepicker-01">
                                        <div class="input-group-append" data-target="#datetimepicker-01" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 datetimepickers">
                                    <label>date limite</label>
                                    <div class="input-group date" id="datetimepicker-01" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" placeholder="Date" data-target="#datetimepicker-01">
                                        <div class="input-group-append" data-target="#datetimepicker-01" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 select-border">
                                    <label>type emploi</label>
                                    <select class="form-control basic-select">
                                        <option value="value 01" selected="selected">Energy</option>
                                        <option value="value 02">Human Resources</option>
                                        <option value="value 03">IT & Telecoms</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 select-border">
                                    <label>secteur_emploi</label>
                                    <select class="form-control basic-select">
                                        <option value="value 01" selected="selected">Select Sector</option>
                                        <option value="value 02">Human Resources</option>
                                        <option value="value 03">IT & Telecoms</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>salaire proposer</label>
                                    <input type="text" class="form-control" value="">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="user-dashboard-info-box">
                    <div class="form-group mb-0">
                        <h4 class="mb-4">Ville</h4>
                        <div class="form-group">
                            <label>Enter Your Location</label>
                            <input type="text" class="form-control" value="" placeholder="Enter Your location">
                        </div>
                        <div class="company-address-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509374!2d144.95373531590414!3d-37.817323442021134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1559039794237!5m2!1sen!2sin"  height="400" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <a class="btn btn-lg btn-primary" href="{{ route('home') }}">Save</a>
            </div>
        </div>
    </div>

@endsection