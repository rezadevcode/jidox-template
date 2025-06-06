@extends('layouts.vertical', ['page_title' => 'Form Advanced', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('css')
    @vite(['node_modules/select2/dist/css/select2.min.css', 'node_modules/daterangepicker/daterangepicker.css', 'node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css', 'node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css', 'node_modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css', 'node_modules/flatpickr/dist/flatpickr.min.css'])
@endsection

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box justify-content-between d-flex align-items-md-center flex-md-row flex-column">
                    <h4 class="page-title">Form Advanced</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Jidox</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                        <li class="breadcrumb-item active">Form Advanced</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Select2</h4>
                        <p class="text-muted fs-14">Select2 gives you a customizable select box with support for searching, tagging, remote data sets, infinite scrolling, and many other highly used options.</p>

                        <div class="row">
                            <div class="col-lg-6">
                                <p class="mb-1 fw-bold text-muted">Single Select</p>
                                <p class="text-muted fs-14">
                                    Select2 can take a regular select box like this...
                                </p>

                                <select class="form-control select2" data-toggle="select2">
                                    <option>Select</option>
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="UT">Utah</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TX">Texas</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="WI">Wisconsin</option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="IN">Indiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="OH">Ohio</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WV">West Virginia</option>
                                    </optgroup>
                                </select>
                            </div> <!-- end col -->

                            <div class="col-lg-6">
                                <p class="mb-1 fw-bold text-muted">Multiple Select</p>
                                <p class="text-muted fs-14">
                                    Select2 can take a regular select box like this...
                                </p>

                                <select class="select2 form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose ...">
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="UT">Utah</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TX">Texas</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="WI">Wisconsin</option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="IN">Indiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="OH">Ohio</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WV">West Virginia</option>
                                    </optgroup>
                                </select>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row-->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Date Range Picker</h4>
                        <p class="text-muted fs-14">
                            A JavaScript component for choosing date ranges, dates and times.
                        </p>

                        <div class="row">
                            <div class="col-lg-6">
                                <!-- Date Range -->
                                <div class="mb-3">
                                    <label class="form-label">Date Range</label>
                                    <input type="text" class="form-control date" id="singledaterange" data-toggle="date-picker" data-cancel-class="btn-warning">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <!-- Date Range Picker With Times -->
                                <div class="mb-3">
                                    <label class="form-label">Date Range Picker With Times</label>
                                    <input type="text" class="form-control date" id="daterangetime" data-toggle="date-picker" data-time-picker="true" data-locale="{'format': 'DD/MM hh:mm A'}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <!-- Single Date Picker -->
                                <div>
                                    <label class="form-label">Single Date Picker</label>
                                    <input type="text" class="form-control date" id="birthdatepicker" data-toggle="date-picker" data-single-date-picker="true">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <!-- Predefined Date Ranges -->
                                <div>
                                    <label class="form-label">Predefined Date Ranges</label>
                                    <div id="reportrange" class="form-control" data-toggle="date-picker-range" data-target-display="#selectedValue" data-cancel-class="btn-light">
                                        <i class="ri-calendar-2-line"></i>&nbsp;
                                        <span id="selectedValue"></span> <i class="ri-arrow-down-s-line"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Flatpickr - Date picker</h4>
                        <p class="text-muted fs-14">A lightweight and powerful datetimepicker</p>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Basic</label>
                                    <input type="text" id="basic-datepicker" class="form-control" placeholder="Basic datepicker">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Date & Time</label>
                                    <input type="text" id="datetime-datepicker" class="form-control" placeholder="Date and Time">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Human-friendly Dates</label>
                                    <input type="text" id="humanfd-datepicker" class="form-control" placeholder="October 9, 2018">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">MinDate and MaxDate</label>
                                    <input type="text" id="minmax-datepicker" class="form-control" placeholder="mindate - maxdate">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Disabling dates</label>
                                    <input type="text" id="disable-datepicker" class="form-control" placeholder="Disabling dates">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Selecting multiple dates</label>
                                    <input type="text" id="multiple-datepicker" class="form-control" placeholder="Multiple dates">
                                </div>

                            </div> <!-- end col -->

                            <div class="col-lg-6 mt-3 mt-lg-0">
                                <div class="mb-3">
                                    <label class="form-label">Selecting multiple dates - Conjunction</label>
                                    <input type="text" id="conjunction-datepicker" class="form-control" placeholder="2018-10-10 :: 2018-10-11">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Range Calendar</label>
                                    <input type="text" id="range-datepicker" class="form-control" placeholder="2018-10-03 to 2018-10-10">
                                </div>

                                <div>
                                    <label class="form-label">Inline Calendar</label>
                                    <input type="text" id="inline-datepicker" class="form-control" placeholder="Inline calendar">
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Flatpickr - Time Picker </h4>
                        <p class="text-muted fs-14">A lightweight and powerful datetimepicker</p>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Default Time Picker</label>
                                    <div class="input-group">
                                        <input id="basic-timepicker" type="text" class="form-control" placeholder="Basic timepicker">
                                        <span class="input-group-text"><i class="ri-time-line"></i></span>
                                    </div>
                                </div>

                                <div class="mb-0">
                                    <label class="form-label">24-hour Time Picker</label>
                                    <div class="input-group">
                                        <input id="24hours-timepicker" type="text" class="form-control" placeholder="16:21">
                                        <span class="input-group-text"><i class="ri-time-line"></i></span>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                            <div class="col-lg-6 mt-3 mt-lg-0">
                                <div class="mb-3">
                                    <label class="form-label">Time Picker w/ Limits</label>
                                    <div class="input-group">
                                        <input id="minmax-timepicker" type="text" class="form-control" placeholder="Limits">
                                        <span class="input-group-text"><i class="ri-time-line"></i></span>
                                    </div>
                                </div>

                                <div class="mb-0">
                                    <label class="form-label">Preloading Time</label>
                                    <div class="input-group">
                                        <input id="preloading-timepicker" type="text" class="form-control" placeholder="Pick a time">
                                        <span class="input-group-text"><i class="ri-time-line"></i></span>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Input Masks</h4>
                        <p class="text-muted fs-14">
                            A jQuery Plugin to make masks on form fields and HTML elements.
                        </p>

                        <div class="row">
                            <div class="col-md-6">
                                <form action="#">
                                    <div class="mb-3">
                                        <label class="form-label">Date</label>
                                        <input type="text" class="form-control" placeholder="Enter date" data-toggle="input-mask" data-mask-format="00/00/0000">
                                        <span class="fs-13 text-muted">e.g "DD/MM/YYYY"</span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Hour</label>
                                        <input type="text" class="form-control" placeholder="Enter time" data-toggle="input-mask" data-mask-format="00:00:00">
                                        <span class="fs-13 text-muted">e.g "HH:MM:SS"</span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Date & Hour</label>
                                        <input type="text" class="form-control" placeholder="Enter date & time" data-toggle="input-mask" data-mask-format="00/00/0000 00:00:00">
                                        <span class="fs-13 text-muted">e.g "DD/MM/YYYY HH:MM:SS"</span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">ZIP Code</label>
                                        <input type="text" class="form-control" placeholder="Enter zip code" data-toggle="input-mask" data-mask-format="00000-000">
                                        <span class="fs-13 text-muted">e.g "xxxxx-xxx"</span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Crazy Zip Code</label>
                                        <input type="text" class="form-control" placeholder="Enter zip code" data-toggle="input-mask" data-mask-format="0-00-00-00">
                                        <span class="fs-13 text-muted">e.g "x-xx-xx-xx"</span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Money</label>
                                        <input type="text" class="form-control" placeholder="Enter money" data-toggle="input-mask" data-mask-format="000.000.000.000.000,00" data-reverse="true">
                                        <span class="fs-13 text-muted">e.g "Your money"</span>
                                    </div>
                                    <div>
                                        <label class="form-label">Money 2</label>
                                        <input type="text" class="form-control" placeholder="Enter money" data-toggle="input-mask" data-mask-format="#.##0,00" data-reverse="true">
                                        <span class="fs-13 text-muted">e.g "#.##0,00"</span>
                                    </div>

                                </form>
                            </div> <!-- end col -->

                            <div class="col-md-6">
                                <form action="#">
                                    <div class="mb-3">
                                        <label class="form-label">Telephone</label>
                                        <input type="text" class="form-control" placeholder="Enter telephone" data-toggle="input-mask" data-mask-format="0000-0000">
                                        <span class="fs-13 text-muted">e.g "xxxx-xxxx"</span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Telephone with Code Area</label>
                                        <input type="text" class="form-control" placeholder="Enter telephone" data-toggle="input-mask" data-mask-format="(00) 0000-0000">
                                        <span class="fs-13 text-muted">e.g "(xx) xxxx-xxxx"</span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">US Telephone</label>
                                        <input type="text" class="form-control" placeholder="Enter US telephone" data-toggle="input-mask" data-mask-format="(000) 000-0000">
                                        <span class="fs-13 text-muted">e.g "(xxx) xxx-xxxx"</span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">São Paulo Celphones</label>
                                        <input type="text" class="form-control" placeholder="Enter telephone" data-toggle="input-mask" data-mask-format="(00) 00000-0000">
                                        <span class="fs-13 text-muted">e.g "(xx) xxxxx-xxxx"</span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">CPF</label>
                                        <input type="text" class="form-control" placeholder="Enter CPF" data-toggle="input-mask" data-mask-format="000.000.000-00" data-reverse="true">
                                        <span class="fs-13 text-muted">e.g "xxx.xxx.xxxx-xx"</span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">CNPJ</label>
                                        <input type="text" class="form-control" placeholder="Enter CNPJ" data-toggle="input-mask" data-mask-format="00.000.000/0000-00" data-reverse="true">
                                        <span class="fs-13 text-muted">e.g "xx.xxx.xxx/xxxx-xx"</span>
                                    </div>
                                    <div>
                                        <label class="form-label">IP Address</label>
                                        <input type="text" class="form-control" placeholder="Enter IP address" data-toggle="input-mask" data-mask-format="099.099.099.099" data-reverse="true">
                                        <span class="fs-13 text-muted">e.g "xxx.xxx.xxx.xxx"</span>
                                    </div>
                                </form>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Bootstrap Touchspin</h4>
                        <p class="text-muted fs-14">
                            A mobile and touch friendly input spinner component for Bootstrap.
                            Specify attribute <code>data-toggle="touchspin"</code> and your input would be conveterted into touch friendly spinner.
                        </p>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Using data attributes</label>
                                    <input data-toggle="touchspin" type="text" value="55">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Example with postfix (large)</label>
                                    <input data-toggle="touchspin" value="18.20" type="text" data-step="0.1" data-decimals="2" data-bts-postfix="%">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">With prefix</label>
                                    <input data-toggle="touchspin" type="text" data-bts-prefix="$">
                                </div>

                                <div class="mb-0">
                                    <label class="form-label">Change button class</label>
                                    <input data-toggle="touchspin" value="77" type="text" data-bts-button-down-class="btn btn-danger" data-bts-button-up-class="btn btn-info">
                                </div>
                            </div> <!-- end col -->

                            <div class="col-lg-6 mt-3 mt-lg-0">
                                <div class="mb-3">
                                    <label class="form-label">Init with empty value:</label>
                                    <input data-toggle="touchspin" type="text">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Max value - (Default value 100)</label>
                                    <input data-toggle="touchspin" data-bts-max="500" value="128" data-btn-vertical="true" type="text">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">With prefix and postfix button</label>
                                    <input data-toggle="touchspin" data-bts-prefix="A Button" data-bts-prefix-extra-class="btn btn-light" data-bts-postfix="A Button" data-bts-postfix-extra-class="btn btn-light" type="text">
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Bootstrap Maxlength</h4>
                        <p class="text-muted fs-14">
                            Uses the HTML5 attribute "maxlength" to work. Just specify <code>data-toggle="maxlength"</code> attribute
                            to have maxlength indication on any input.
                        </p>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Default usage</label>
                                    <p class="text-muted fs-13">
                                        The badge will show up by default when the remaining chars are 10 or less:
                                    </p>
                                    <input type="text" class="form-control" placeholder="Max 25" maxlength="25" data-toggle="maxlength">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Threshold value</label>
                                    <p class="text-muted fs-13">
                                        Satrt displaying the indication when reached to some threshhold. Specift the data attribute <code>threshold</code>. E.g.
                                        <code>data-threshold="12"</code>
                                    </p>
                                    <input type="text" class="form-control" placeholder="Max 25" maxlength="25" data-toggle="maxlength" data-threshold="12">
                                </div>
                            </div> <!-- end col -->

                            <div class="col-lg-6 mt-3 mt-lg-0">
                                <div class="mb-3">
                                    <label class="form-label">Position</label>
                                    <p class="text-muted fs-13">
                                        All you need to do is specify the data attribute <code>placement</code>. The possible positions are left, top, right, bottom-right, top-right, top-left,
                                        bottom, bottom-left and centered-right. If none is specified, the positioning will be defauted to 'bottom'.
                                        E.g. <code>data-placement="top"</code>
                                    </p>
                                    <input type="text" class="form-control" placeholder="Max 25" maxlength="25" data-toggle="maxlength" data-placement="top">
                                </div>

                                <div>
                                    <label class="form-label">Textareas</label>
                                    <p class="text-muted fs-13">
                                        Bootstrap maxlength supports textarea as well as inputs. Even on old IE.
                                    </p>
                                    <textarea data-toggle="maxlength" class="form-control" maxlength="225" rows="3" placeholder="This textarea has a limit of 225 chars."></textarea>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

        {{-- <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Typeahead</h4>
                        <p class="text-muted fs-14">
                            Typeahead.js is a fast and fully-featured autocomplete library.
                        </p>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">The Basics</label>
                                    <input type="text" class="form-control" data-provide="typeahead" id="the-basics" placeholder="Basic Example">
                                </div>
                            </div> <!-- end col -->

                            <div class="col-lg-6 mt-3 mt-lg-0">
                                <div class="mb-3">
                                    <label class="form-label">Bloodhound (Suggestion Engine)</label>
                                    <input id="bloodhound" class="form-control" type="text" placeholder="States of USA">
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Prefetch</label>
                                    <input type="text" class="form-control" data-provide="typeahead" id="prefetch" placeholder="States of USA">
                                </div>
                            </div> <!-- end col -->

                            <div class="col-lg-6 mt-3 mt-lg-0">
                                <div class="mb-3">
                                    <label class="form-label">Remote</label>
                                    <input type="text" class="form-control" data-provide="typeahead" id="remote" placeholder="States of USA">
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Custom Templates</label>
                                    <input id="custom-templates" class="form-control" type="text" placeholder="States of USA">
                                </div>
                            </div> <!-- end col -->

                            <div class="col-lg-6 mt-3 mt-lg-0">
                                <div class="mb-3">
                                    <label class="form-label">Default Suggestions</label>
                                    <input type="text" class="form-control" data-provide="typeahead" id="default-suggestions">
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-0">
                                    <label class="form-label">Multiple Datasets</label>
                                    <input type="text" class="form-control" data-provide="typeahead" id="multiple-datasets">
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div> --}}
        <!-- end row -->


    </div> <!-- container -->
@endsection

@section('script')
    @vite(['resources/js/pages/demo.form-advanced.js'])
@endsection
