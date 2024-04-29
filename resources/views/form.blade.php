@extends('main')
@section('content')

<div>
    <h1 style="text-align: center;">Carrier Setup</h1>
</div>
<form method="POST" action="/form" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="company_name">Company Name</label>
        <input type="text" class="form-control" id="company_name" name="company_name">
    </div>

    <div class="form-group">
        <label for="dba">DBA</label>
        <input type="text" class="form-control" id="dba" name="dba">
    </div>

    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="address">
    </div>

    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="tel" class="form-control" id="phone" name="phone">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>

    <div class="form-group">
        <label for="mc_number">MC#</label>
        <input type="text" class="form-control" id="mc_number" name="mc_number">
    </div>

    <div class="form-group">
        <label for="usdot_number">USDOT#</label>
        <input type="text" class="form-control" id="usdot_number" name="usdot_number">
    </div>

    <div class="form-group">
        <label for="number_of_trucks">Number of Trucks</label>
        <input type="number" class="form-control" id="number_of_trucks" name="number_of_trucks">
    </div>

    <div class="form-group">
        <label for="number_of_drivers">Number of Drivers</label>
        <input type="number" class="form-control" id="number_of_drivers" name="number_of_drivers">
    </div>

    <div class="form-group">
        <label for="mc_authority">MC Authority (file)</label>
        <input type="file" class="form-control-file" id="mc_authority" name="mc_authority">
    </div>

    <div class="form-group">
        <label for="w9_form">W9 Form (file)</label>
        <input type="file" class="form-control-file" id="w9_form" name="w9_form">
    </div>

    <div class="form-group">
        <label for="certificate_of_insurance">Certificate of Insurance (file)</label>
        <input type="file" class="form-control-file" id="certificate_of_insurance" name="certificate_of_insurance">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection()