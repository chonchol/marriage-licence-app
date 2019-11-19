<div class="container">
    <div class="row custom-padding">
        <div class="col-md-4">
            <div class="form-group">
                <label for="app-lname">Applicant's Last Name</label>
                <input type="text" class="form-control" id="app-lname" name="applicant_lname">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="app-fmname">Applicant's First & Middle Name</label>
                <input type="text" class="form-control" id="app-fmname" name="applicant_fname">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="app-sname">Applicant's Single Name</label>
                <input type="text" class="form-control" id="app-sname" name="applicant_sname">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="app-religion">Religion</label>
                <div class="">

                    <select id="app-religion" name="applicant_religion" class="form-control">
                        @include('partials.religion')
                    </select>

                </div>
            </div>
        </div>
        <div class="col-md-12 checkbox-pad">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="never-mar" name="app_marital_stat" value="1" class="custom-control-input">
                <label class="custom-control-label" for="never-mar">Never Married</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="widowed" name="app_marital_stat" value="2" class="custom-control-input">
                <label class="custom-control-label" for="widowed">Widowed</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="divorced_canada" name="app_marital_stat" value="3" class="custom-control-input">
                <label class="custom-control-label" for="divorced_canada">Divorced in Canada</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="canada_outside" name="app_marital_stat" value="4" class="custom-control-input">
                <label class="custom-control-label" for="canada_outside">Divorced Outside Canada</label>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="app-dob">Date of Birth</label>
                <input type="date" class="form-control" id="app-dob" name="applicant_dob" placeholder="MM/DD/YYYY">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="app-age">Age</label>
                <input type="text" class="form-control" id="app-age" name="applicant_age">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="placeof_birth">Place of Birth</label>
                <div class="">
                    <select id="placeof_birth" name="app_birth_country" class="form-control">
                        @include('partials.country')
                    </select>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="placeof_province">Province</label>
                <div class="">
                    <select id="placeof_province" class="form-control" name="app_province">
                        @include('partials.province')
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <hr>
            <h4>Parents 1</h4>
            <br>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="parents-lname">Parents Last Name</label>
                <input type="text" class="form-control" id="parents-lname" name="parents1_lname">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="parents-fname">Parents First Name</label>
                <input type="text" class="form-control" id="parents-fname" name="parents1_fname">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="parents-sname">Parents Single Name</label>
                <input type="text" class="form-control" id="parents-sname" name="parents1_sname">
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="parplaceof_birth">Parents Place of Birth</label>
                <div class="">
                    <select id="parplaceof_birth" class="form-control" name="parents1_country">
                        @include('partials.country')
                    </select>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="parplaceof_province">Parents Province</label>
                <div class="">
                    <select id="parplaceof_province" class="form-control" name="parents1_province">
                        @include('partials.province')
                    </select>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <hr>
            <h4>Parents 2</h4>
            <br>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="parents-lname">Parents Last Name</label>
                <input type="text" class="form-control" id="parents-lname" name="parents2_lname">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="parents-fname">Parents First Name</label>
                <input type="text" class="form-control" id="parents-fname" name="parents2_fname">
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="parents-sname">Parents First Name</label>
                <input type="text" class="form-control" id="parents-sname" name="parents2_sname">
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="parplaceof_birth">Parents Place of Birth</label>
                <div class="">
                    <select id="parplaceof_birth" name="parents2_country" class="form-control">
                        @include('partials.country')
                    </select>

                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="parplaceof_province">Parents Province</label>
                <div class="">
                    <select id="parplaceof_province" class="form-control" name="parents2_province">
                        @include('partials.province')
                    </select>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <hr>
            <h4>Applicant's Present Residence or Postal Address</h4>
            <br>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="app-street">Street</label>
                <input type="text" class="form-control" id="app-street" name="app_prsnt_street">
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="app-apt">APT</label>
                <input type="text" class="form-control" id="app-apt" name="app_prsnt_apt">
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="app-city">City</label>
                <input type="text" class="form-control" id="app-city" name="app_prsnt_city">
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="app_country">Country</label>
                <div class="">
                    <select id="app_country" class="form-control" name="app_prsnt_country">
                        @include('partials.country')
                    </select>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="app_province">Province</label>
                <div class="">
                    <select id="app_province" class="form-control" name="app_prsnt_province">
                        @include('partials.province')
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="app-postal">Postal Code</label>
                <input type="number" class="form-control" id="app-postal" name="app_prsnt_pcode">
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="app-phone">Phone</label>
                <input type="number" class="form-control" id="app-phone" name="app_prsnt_phone">
            </div>
        </div>
    </div>
</div>


