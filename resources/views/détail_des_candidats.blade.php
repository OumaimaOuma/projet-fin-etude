@extends('layouts.app')
@section('content')
            <div class="col-lg-4">
                <div class="sidebar mb-0">
                    <div class="widget pb-3">
                        <a href="#">
                            <div class="docs-content">
                                <div class="docs-text">
                                    Cover letter
                                    <span class="d-block text-danger">PDF</span>
                                </div>
                                <div class="docs-icon">
                                    <i class="font-xlll text-danger flaticon-pdf"></i>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="widget">
                        <div class="widget-title">
                            <h5>nom_candidat</h5>
                        </div>
                        <div class="company-contact-inner widget-box">
                            <form>
                                <div class="form-group">
                                    <label>Full name</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea class="form-control" rows="3" placeholder=""></textarea>
                                </div>
                                <a class="btn btn-primary btn-outline-primary btn-block" href="#">Send Email</a>
                            </form>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="widget-add">
                            <img class="img-fluid" src="images/add-banner.png" alt=""></div>
                    </div>
                </div>
            </div>
@endsection



