@extends('layouts.master')
@section('content')

<section class="form5 cid-s9VtAYpiLG" id="form5-1d">
    
    
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>Feedback Form:</strong>
            </h3>
            
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="{{route('contact-form')}}" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name">
                    @csrf
                  
                    <div class="">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out
                            the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! some
                            problem!</div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-md col-sm-12 form-group" data-for="name">
                            <input type="text" name="name" placeholder="Name" data-form-field="name" class="form-control" value="" id="name-form5-1d">
                        </div>
                        <div class="col-md col-sm-12 form-group" data-for="email">
                            <input type="email" name="email" placeholder="E-mail" data-form-field="email" class="form-control" value="" id="email-form5-1d">
                        </div>
                        
                        <div class="col-12 form-group" data-for="textarea">
                            <textarea name="textarea" placeholder="Message" data-form-field="textarea" class="form-control" id="textarea-form5-1d"></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn"><button type="submit" class="btn btn-primary display-4">Send message</button></div>
                    </div>
                <span class="gdpr-block">
<label>
<span class="textGDPR display-7" style="color: #a7a7a7"><input type="checkbox" name="gdpr" id="gdpr-form5-1d" required="">By continuing you agree to our <a style="color: #149dcc; text-decoration: none;" href="terms.html">Terms of Service</a> and <a style="color: #149dcc; text-decoration: none;" href="policy.html">Privacy Policy</a>.</span>
</label>
</span></form>
            </div>
        </div>
    </div>
</section>    

@endsection