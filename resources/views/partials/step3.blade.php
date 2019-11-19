<div class="container">
    <div class="row custom-padding">
        <div class="col-md-4">
            <div class="form-group">
                <label for="japp-lname">Applicant's Last Name</label>
                <input type="text" class="form-control" id="japp-lname" name="japplicant_lname">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="japp-fmname">Applicant's First & Middle Name</label>
                <input type="text" class="form-control" id="japp-fmname" name="japplicant_fname">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="japp-sname">Applicant's Single Name</label>
                <input type="text" class="form-control" id="japp-sname" name="japplicant_sname">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="japp-religion">Religion</label>
                <div class="">
                    <select id="japp-religion" class="form-control" name="japplicant_religion">
                        @include('partials.religion')
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-12 checkbox-pad">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="jnever-mar" name="japp_marital_stat" value="1" class="custom-control-input">
                <label class="custom-control-label" for="jnever-mar">Never Married</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="jwidowed" name="japp_marital_stat" value="2" class="custom-control-input">
                <label class="custom-control-label" for="jwidowed">Widowed</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="jdivorced_canada" name="japp_marital_stat" value="3" class="custom-control-input">
                <label class="custom-control-label" for="jdivorced_canada">Divorced in Canada</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="jcanada_outside" name="japp_marital_stat" value="4" class="custom-control-input">
                <label class="custom-control-label" for="jcanada_outside">Divorced Outside Canada</label>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="japp-dob">Date of Birth</label>
                <input type="date" class="form-control" id="japp-dob" name="japplicant_dob" placeholder="MM/DD/YYYY">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="japp-age">Age</label>
                <input type="text" class="form-control" id="japp-dob" name="japplicant_age">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="jplaceof_birth">Place of Birth</label>
                <div class="">
                    <select id="jplaceof_birth" class="form-control" name="japp_birth_country">
                        @include('partials.country')
                    </select>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="jplaceof_province">Province</label>
                <div class="">
                    <select id="jplaceof_province" class="form-control" name="japp_province">
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

        <div class="col-md-4">
            <div class="form-group">
                <label for="jparents-lname">Parents Last Name</label>
                <input type="text" class="form-control" id="jparents-lname" name="jparents1_lname">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="jparents-fname">Parents First Name</label>
                <input type="text" class="form-control" id="jparents-fname" name="jparents1_fname">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="jparents-sname">Parents Single Name</label>
                <input type="text" class="form-control" id="jparents-fname" name="jparents1_sname">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="jparplaceof_birth">Parents Place of Birth</label>
                <div class="">
                    <select id="jparplaceof_birth" class="form-control" name="jparents1_country">
                        @include('partials.country')
                    </select>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="jparplaceof_province">Parents Province</label>
                <div class="">
                    <select id="jparplaceof_province" class="form-control" name="jparents1_province">
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

        <div class="col-md-4">
            <div class="form-group">
                <label for="jparents-lname">Parents Last Name</label>
                <input type="text" class="form-control" id="jparents-lname" name="jparents2_lname">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="jparents-fname">Parents First Name</label>
                <input type="text" class="form-control" id="jparents-fname" name="jparents2_fname">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="jparents-sname">Parents Single Name</label>
                <input type="text" class="form-control" id="jparents-sname" name="jparents2_sname">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="jparplaceof_birth">Parents Place of Birth</label>
                <div class="">
                    <select id="jparplaceof_birth" class="form-control" name="jparents2_country">
                        @include('partials.country')
                    </select>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="jparplaceof_province">Parents Province</label>
                <div class="">
                    <select id="jparplaceof_province" class="form-control" name="jparents2_province">
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
                <label for="japp-street">Street</label>
                <input type="text" class="form-control" id="japp-street" name="japp_prsnt_street">
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="japp-apt">APT</label>
                <input type="text" class="form-control" id="japp-apt" name="japp_prsnt_apt">
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="japp-city">City</label>
                <input type="text" class="form-control" id="japp-city" name="japp_prsnt_city">
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="japp_country">Country</label>
                <div class="">
                    <select id="japp_country" class="form-control" name="japp_prsnt_country">
                        @include('partials.country')
                    </select>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="japp_province">Province</label>
                <div class="">
                    <select id="japp_province" class="form-control" name="japp_prsnt_province">
                        @include('partials.province')
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="japp-postal">Postal Code</label>
                <input type="number" class="form-control" id="japp-postal" name="japp_prsnt_pcode">
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="japp-phone">Phone</label>
                <input type="number" class="form-control" id="japp-phone" name="japp_prsnt_phone">
            </div>
        </div>
        {{--        <div class="col-md-4">--}}
        {{--            <div class="form-group form-check">--}}
        {{--                <input type="checkbox" class="form-check-input" id="intended">--}}
        {{--                <label class="form-check-label" for="intended">*Confirm the intended place of marriage is in Ontario--}}
        {{--                </label>--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </div>
</div>

