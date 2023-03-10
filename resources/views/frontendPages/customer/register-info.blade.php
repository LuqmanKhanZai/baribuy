<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Basic-info</title>
    <script src="https://kit.fontawesome.com/85acf21687.js"></script>
    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/signup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/assets/sass/style.css') }}">
</head>

<body>
    <div id="app" class="container-fluid">
        <div class="container">
            <div class="display--flex">
                <div class="logo-div">
                    <img src="{{ asset('frontend/assets/img/logo/bariLogo.png') }}" class="img-fluid" alt="Baribuy Logo">
                </div>
                <div class="">
                    <a class="link-to-logout mt-0 p-3  btn btn-light" id="saveAndExit">Save &amp; Exit</a>
                </div>
            </div>
            <!-- <a class="btn btn-secondary" href="/">Go Back</a> -->
            <div class="row justify-content-center">
                <div class="register-page-body">
                    <div class="card">
                        <div class="card-body">
                            <form class="wizard-container" method="POST" action="{{route('user_register')}}" id="js-wizard-form">
                                @csrf
                                
                                <div class="progress" id="js-progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                        <span class="progress-val"></span>
                                    </div>
                                </div>

                                <ul class="nav nav-tab">
                                    <li class="active">
                                        <a href="#tab1" data-toggle="tab">1</a>
                                    </li>
                                    <li>
                                        <a href="#tab2" data-toggle="tab">1</a>
                                    </li>
                                    <li>
                                        <a href="#tab3" data-toggle="tab">1</a>
                                    </li>
                                    <li>
                                        <a href="#tab4" data-toggle="tab">1</a>
                                    </li>
                                    <li>
                                        <a href="#tab5" data-toggle="tab">1</a>
                                    </li>
                                    <li>
                                        <a href="#tab6" data-toggle="tab">1</a>
                                    </li>
                                    <li>
                                        <a href="#tab7" data-toggle="tab">1</a>
                                    </li>
                                    <li>
                                        <a href="#tab8" data-toggle="tab">1</a>
                                    </li>
                                    <li>
                                        <a href="#tab9" data-toggle="tab">1</a>
                                    </li>
                                    <li>
                                        <a href="#tab10" data-toggle="tab">1</a>
                                    </li>
                                    <li>
                                        <a href="#tab11" data-toggle="tab">1</a>
                                    </li>
                                    <li>
                                        <a href="#tab12" data-toggle="tab">1</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab1" data-form-no="1">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h1>Privacy and Security</h1>
                                                <p> Praesent imperdiet neque id metus faucibus auctor. Suspendisse eleifend iaculis leo. Fusce blandit massa dolor, nec vestibulum est pellentesque eu.</p>
                                                <p class="text-muted small">Aenean ac odio libero. Vestibulum eu ipsum ultricies, iaculis quam quis, ultrices ex. Duis vulputate ornare ligula, nec tincidunt nulla semper vehicula. Nam in lobortis turpis. Quisque eu urna eget felis finibus ullamcorper. Nullam finibus, ante et ultrices aliquet, nibh turpis rutrum urna, et posuere eros odio non sapien.</p>
                                                <p class="text-center"><strong>Basically, we need to verify your identity to confirm it's actually you!</strong></p>
                                            </div>
                                        </div>
                                        <div class="btn-next-con">
                                            <a class="btn-next d-block text-center" onClick="nextForm(2)" href="#">Let's Start</a>
                                        </div>
                                        <div class="mt-3">
                                            <a href="#" class="later-link">I'll do this later</a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab2" data-form-no="2">
                                        <input type="text" name="user_id" id="user_id" value="{{$customerInfo->user_id}}">
                                        <h1 class="box-heading">What's your first name?</h1>
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="first_name" class="form-label required">Legal first name</label>
                                                <input type="text" class="form-control" name="first_name" id="first_name"   value="{{isset($customerInfo) == true ? $customerInfo->first_name : '' }}" placeholder="">
                                                <p class="d-none text-danger mt-2" id="first_name_error">Please fill out this field</p>
                                            </div>
                                        </div>
                                        <div class="btn-next-con">
                                            <a class="btn-back" href="#" onClick="prevForm(1)">back</a>
                                            <a class="btn-next forward" href="#" onClick="nextForm(3)">Next</a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab3" data-form-no="3">
                                        <h1 class="box-heading">What's your Last name?</h1>
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="last_name" class="form-label">Legal Last name</label>
                                                <input type="text" class="form-control" name="last_name" id="last_name" value="{{isset($customerInfo) == true ? $customerInfo->last_name : '' }}"  placeholder="">
                                                <p class="d-none text-danger mt-2" id="last_name_error">Please fill out this field</p>
                                            </div>
                                        </div>
                                
                                        <div class="btn-next-con">
                                            <a class="btn-back" href="#" onClick="prevForm(2)">back</a>
                                            <a class="btn-next forward" href="#" onClick="nextForm(4)">Next</a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab4" data-form-no="4">
                                        <h1 class="box-heading">What's your citizenship?</h1>
                                        <div class="form-check design-check">
                                            <input class="form-check-input" type="radio"  name="citizen_ship"   value="us_citizen" {{isset($customerInfo) == true ? ($customerInfo->citizen_ship == 'us_citizen' ? 'checked' : '') : '' }} checked id="us_citizen">
                                            <label class="form-check-label" for="us_citizen">
                                                U.S. Citizen <br> <small>I have a U.S. Tax ID</small>
                                            </label>
                                        </div>
                                        <div class="form-check design-check">
                                            <input class="form-check-input" type="radio" name="citizen_ship" value="us_resident"  {{isset($customerInfo) == true ? ($customerInfo->citizen_ship == 'us_resident' ? 'checked' : '') : '' }} id="us_resident" >
                                            <label class="form-check-label" for="us_resident">
                                                U.S. Resident <br> <small>I have a U.S. Tax ID</small>

                                            </label>
                                        </div>

                                        <div class="form-check design-check">
                                            <input class="form-check-input" type="radio" name="citizen_ship" value="non_us_citizen_or_resident"  {{isset($customerInfo) == true ? ($customerInfo->citizen_ship == 'non_us_citizen_or_resident' ? 'checked' : '') : '' }} id="non_us_citizen_or_resident">
                                            <label class="form-check-label" for="non_us_citizen_or_resident">
                                                Non U.S. Citizen or Resident

                                            </label>
                                        </div>
                                        <p class="d-none text-danger mt-2" id="citizen_ship_error">Please choose one option to continue</p>
                                        <div class="btn-next-con">
                                            <a class="btn-back" href="#" onClick="prevForm(3)">back</a>
                                            <a class="btn-next forward" href="#" onClick="nextForm(5)">Next</a>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab5" data-form-no="5">
                                        <h1 class="box-heading">Choose your account type</h1>
                                        <div class="form-check design-check">
                                            <input class="form-check-input" type="radio" name="account_type" id="indiviual_or_personal" {{isset($customerInfo) == true ? ($customerInfo->account_type == 'indiviual_or_personal' ? 'checked' : '') : '' }} checked value="indiviual_or_personal" onchange="valueChanged2()">
                                            <label class="form-check-label" for="indiviual_or_personal">
                                                Individual <br> <small>Personal Account (Most Users)</small>
                                            </label>
                                        </div>

                                        <div class="form-check design-check">
                                            <input class="form-check-input" class="flexRadioDefault2" type="radio" name="account_type" value="entity_trust_or_corporation" id="entity_trust_or_corporation" {{isset($customerInfo) == true ? ($customerInfo->account_type == 'entity_trust_or_corporation' ? 'checked' : '') : '' }} onchange="valueChanged()">
                                            <label class="form-check-label" for="entity_trust_or_corporation">
                                                Entity <br> <small>LLC, Trust or Corporation</small>

                                            </label>
                                        </div>
                                        <div class="flexRadioDefault2-div">

                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Type of entity</label>
                                                <select class="form-control" name="entity_type" id="entity_type">
                                                    <option value="type1">Type 1</option>
                                                    <option value="type2">Type 2</option>
                                                    <option value="type3">Type 3</option>
                                                    <option value="type4">Type 4</option>
                                                    <option value="type5">Type 5</option>
                                                </select>
                                                <p class="text-danger mt-2 d-none" id="entity_type_error">Please fill out this field</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="ename">Entity Name</label>
                                                <input type="text" class="form-control" value="{{isset($customerInfo) == true ? ($customerInfo->account_type == 'entity_trust_or_corporation' ? $customerInfo->entity_type  : '') : '' }}" name="corporate_entity_name" id="corporate_entity_name" id="ename" placeholder="">
                                                <p class="text-danger mt-2 d-none" id="corporate_entity_name_error">Please fill out this field</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="stitle">Signatory Title</label>
                                                <input type="text" class="form-control" name="corporate_signatory_title" value="{{isset($customerInfo) == true ? ($customerInfo->account_type == 'entity_trust_or_corporation' ? $customerInfo->signatory_title  : '') : '' }}" id="corporate_signatory_title" placeholder="">
                                                <p class="text-danger mt-2 d-none" id="corporate_signatory_title_error">Please fill out this field</p>
                                            </div>
                                        </div>
                                        <div class="form-check design-check">
                                            <input class="form-check-input" type="radio" name="account_type" {{isset($customerInfo) == true ? ($customerInfo->account_type == 'retirement' ? 'checked'  : '') : '' }} id="retirement" value="retirement" onchange="valueChanged3()">
                                            <label class="form-check-label" for="retirement">
                                                Retirement
                                                <small>Checkbook IRA</small>
                                            </label>
                                        </div>
                                        <div class="flexRadioDefault3-div">
                                            <div class="form-group">
                                                <label for="ename">Entity Name</label>
                                                <input type="text" class="form-control" name="retired_entity_name" value="{{isset($customerInfo) == true ? ($customerInfo->account_type == 'retirement' ? $customerInfo->entity_name  : '') : '' }}" id="retired_entity_name" placeholder="">
                                                <p class="text-danger mt-2 d-none" id="retired_entity_name_error">Please fill out this field</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="stitle">Signatory Title</label>
                                                <input type="text" class="form-control" name="retired_signatory_title" value="{{isset($customerInfo) == true ? ($customerInfo->account_type == 'retirement' ? $customerInfo->signatory_title  : '') : '' }}" id="retired_signatory_title"  placeholder="">
                                                <p class="text-danger mt-2 d-none" id="retired_signatory_title_error">Please fill out this field</p>
                                            </div>
                                        </div>
                                        <p class="d-none text-danger mt-2" id="account_type_error">Please fill out this field</p>

                                        <div class="btn-next-con">
                                            <a class="btn-back" href="#" onClick="prevForm(4)">back</a>
                                            <a class="btn-next forward" href="#" onClick="nextForm(6)">Next</a>
                                        </div>
                                    </div>
                                    <!--  -->

                                    <div class="tab-pane" id="tab6" data-form-no="6">
                                        <h1 class="box-heading">What's your residential address?</h1>
                                        <p>We'll use your street address for any tax reporting or mailing requirements for your state.</p>
                                        <div class="form-group">
                                            <label for="street_address">Street Address</label>
                                            <input type="text" class="form-control"  name="street_address" value="{{isset($customerInfo) == true ? $customerInfo->street_address : '' }}" id="street_address" placeholder="">
                                            <p class="d-none text-danger mt-2" id="street_address_error">Please fill out this field</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="apartment_suit">Apt, Suits (optional)</label>
                                            <input type="text" class="form-control" name="apartment_suit" value="{{isset($customerInfo) == true ? $customerInfo->apartment_suit : '' }}" id="apartment_suit" placeholder="">
                                            <p class="d-none text-danger mt-2" id="apartment_suit_error">Please fill out this field</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="city">City</label>
                                            <input type="text" class="form-control" name="city" id="city" value="{{isset($customerInfo) == true ? $customerInfo->city : '' }}" placeholder="">
                                            <p class="d-none text-danger mt-2" id="city_error">Please fill out this field</p>
                                        </div>

                                        <div class="form-group">
                                            <label for="state">state</label>
                                            <select class="form-control" id="state" name="state">
                                                <option value="AL">Alabama</option>
                                                <option value="AK">Alaska</option>
                                                <option value="AZ">Arizona</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="CA">California</option>
                                                <option value="CO">Colorado</option>
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="DC">District Of Columbia</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="HI">Hawaii</option>
                                                <option value="ID">Idaho</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IN">Indiana</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NV">Nevada</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="OH">Ohio</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="OR">Oregon</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="TX">Texas</option>
                                                <option value="UT">Utah</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WA">Washington</option>
                                                <option value="WV">West Virginia</option>
                                                <option value="WI">Wisconsin</option>
                                                <option value="WY">Wyoming</option>
                                            </select>
                                            <p class="d-none text-danger mt-2" id="state_error">Please choose one option to continue</p>
                                        </div>

                                        <div class="form-group">
                                            <label for="postal_code">Postal Code</label>
                                            <input type="number" class="form-control" name="postal_code" id="postal_code" value="{{isset($customerInfo) == true ? $customerInfo->postal_code : '' }}" placeholder="">
                                            <p class="d-none text-danger mt-2" id="postal_code_error">Please fill out this field</p>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" name="mailing_address"  value="{{isset($customerInfo) == true ? ($customerInfo->mailing_address == 1 ? 'checked' : '') : '' }}" type="checkbox" value="yes" id="mailing_address" >
                                            <label class="form-check-label" for="mailing_address">
                                                My mailing address is the same
                                            </label>
                                        </div>
                                        <div class="btn-next-con">
                                            <a class="btn-back" href="#" onClick="prevForm(5)">back</a>
                                            <a class="btn-next forward" href="#" onClick="nextForm(7)">Next</a>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="tab7" data-form-no="7">
                                        <h1 class="box-heading">What's your phone number?</h1>

                                        <div class="form-group">
                                            <label for="stitle">Country</label>
                                            <select class="form-control" name="country" id="country">
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Åland Islands">Åland Islands</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antarctica">Antarctica</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Bouvet Island">Bouvet Island</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="French Southern Territories">French Southern Territories</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guernsey">Guernsey</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-bissau">Guinea-bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Isle of Man">Isle of Man</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jersey">Jersey</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                <option value="Korea, Republic of">Korea, Republic of</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macao">Macao</option>
                                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montenegro">Montenegro</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Pitcairn">Pitcairn</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russian Federation">Russian Federation</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Saint Helena">Saint Helena</option>
                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                <option value="Saint Lucia">Saint Lucia</option>
                                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia">Serbia</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                <option value="Taiwan">Taiwan</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Timor-leste">Timor-leste</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Viet Nam">Viet Nam</option>
                                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                <option value="Western Sahara">Western Sahara</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                            </select>
                                            <p class="d-none text-danger mt-2" id="country_error">Please fill out this field</p>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone_number">Phone Number</label>
                                            <input type="number" class="form-control" name="phone_number"  value="{{isset($customerInfo) == true ? $customerInfo->phone_number : '' }}" id="phone_number" placeholder="">
                                            <p class="d-none text-danger mt-2" id="phone_number_error">Please fill out this field</p>
                                        </div>

                                        <div class="btn-next-con">
                                            <a class="btn-back" href="#" onClick="prevForm(6)">back</a>
                                            <a class="btn-next forward" href="#" onClick="nextForm(8)">Next</a>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="tab8" data-form-no="8">
                                        <h1 class="box-heading">What's your date of birth?</h1>

                                        <div class="form-group">
                                            <input type="date" class="form-control" name="dob"  value="{{isset($customerInfo) == true ? $customerInfo->dob : '' }}" id="dob" placeholder="">
                                            <p class="d-none text-danger mt-2" id="dob_error">Please fill out this field</p>
                                        </div>

                                        <div class="btn-next-con">
                                            <a class="btn-back" href="#" onClick="prevForm(7)">back</a>
                                            <a class="btn-next forward" href="#" onClick="nextForm(9)">Next</a>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="tab9" data-form-no="9">
                                        <h1 class="box-heading">What are your tax IDs?</h1>
                                        <p>Since we are registered with an SEC regulated broker-dealer, we are required by federal law to ask for your Social Security Number and Employer Identification Number. Your information is encrypted and securely transmitted using SSL. Learn More</p>
                                        <div class="form-group">
                                            <input type="text" name="ssn" class="form-control" value="{{isset($customerInfo) == true ? $customerInfo->ssn : '' }}" id="ssn" placeholder="SSN">
                                            <p class="d-none text-danger mt-2" id="ssn_error">Please fill out this field</p>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ein" value="{{isset($customerInfo) == true ? $customerInfo->ein : '' }}" id="ein" placeholder="EIN">
                                            <p class="d-none text-danger mt-2" id="ein_error">Please fill out this field</p>
                                        </div>

                                        <div class="btn-next-con">
                                            <a class="btn-back" href="#" onClick="prevForm(8)">back</a>
                                            <a class="btn-next forward" href="#" onClick="nextForm(10)">Next</a>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="tab10" data-form-no="10">
                                        <h1 class="box-heading">Do any of these statements apply to you?</h1>
                                        <p>You can still invest even if none of these apply to you. <a href="#">Learn More</a></p>

                                        <div class="form-check">
                                            <input class="form-check-input" name="net_worth_each_owner_one_million_check" type="checkbox" {{isset($customerInfo) == true ? ($customerInfo->net_worth_each_owner_one_million_check == 1 ? 'checked' : '') : '' }} id="net_worth_each_owner_one_million_check" >
                                            <label class="form-check-label" for="net_worth_each_owner_one_million_check">
                                                The <strong> net worth of each owner</strong> is $1M+ (excluding primary residence)
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="net_worth_joint_spouse_check" {{isset($customerInfo) == true ? ($customerInfo->net_worth_joint_spouse_check == 1 ? 'checked' : '') : '' }} id="net_worth_joint_spouse_check" >
                                            <label class="form-check-label" for="net_worth_joint_spouse_check">
                                                For each owner, their joint income including their spouse was $300k+ for each of the past two years
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"  name="total_asset_exceeding_check" {{isset($customerInfo) == true ? ($customerInfo->total_asset_exceeding_check == 1 ? 'checked' : '') : '' }} id="total_asset_exceeding_check" >
                                            <label class="form-check-label" for="total_asset_exceeding_check">
                                                The entity has total assets exceeding $5,000,000
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"  name="indiviual_income_check" {{isset($customerInfo) == true ? ($customerInfo->indiviual_income_check == 1 ? 'checked' : '') : '' }} id="indiviual_income_check" >
                                            <label class="form-check-label" for="indiviual_income_check">
                                                The <strong>individual income of each owner was $200k+</strong> for each of the past two years
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"   name="finary_member_check" {{isset($customerInfo) == true ? ($customerInfo->finary_member_check == 1 ? 'checked' : '') : '' }} id="finary_member_check" >
                                            <label class="form-check-label" for="finary_member_check">
                                                Are you or anyone in your household associated with a FINRA Member?
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"  id="member_of_board_of_director_check" name="member_of_board_of_director_check" {{isset($customerInfo) == true ? ($customerInfo->member_of_board_of_director_check == 1 ? 'checked' : '') : '' }} >
                                            <label class="form-check-label" for="member_of_board_of_director_check">
                                                Are you or anyone in your household or immediate family a 10% shareholder, officer, or member of the board of directors of a publicly traded company?
                                            </label>
                                        </div>


                                        <div class="btn-next-con">
                                            <a class="btn-back" href="#" onClick="prevForm(9)">back</a>
                                            <a class="btn-next forward" href="#" onClick="nextForm(11)">Next</a>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="tab11">

                                        <h1 class="box-heading"> Confirm your details</h1>

                                        <table class="final-table">
                                            <tbody>
                                                <tr>
                                                    <td>Full Name</td>
                                                    <td><strong id="displayFullName"></strong></td>
                                                    <td><a type="button" href="javascript:void(0)" onclick="prevForm(2)" >Edit ✎ </a></td>
                                                </tr>
                                                <tr>
                                                    <td>Account Type</td>
                                                    <td><strong id="displayAccountType"></strong></td>
                                                    <td><a type="button" href="javascript:void(0)" onclick="prevForm(5)" >Edit ✎ </a></td>
                                                </tr>
                                                <tr>
                                                    <td>Entity Name</td>
                                                    <td><strong id="displayEntityName"></strong></td>
                                                    <td><a type="button" href="javascript:void(0)" onclick="prevForm(5)">Edit ✎ </a></td>
                                                </tr>
                                                <tr>
                                                    <td>Signatory Title</td>
                                                    <td><strong id="displaySignatoryTitle"></strong></td>
                                                    <td><a type="button" href="javascript:void(0)" onclick="prevForm(5)">Edit ✎ </a></td>
                                                </tr>
                                                <tr>
                                                    <td>Resident Type</td>
                                                    <td><strong id="displayResidenceType"> Domestic Account</strong></td>
                                                    <td><a type="button" href="javascript:void(0)" onclick="prevForm(6)">Edit ✎ </a></td>
                                                </tr>
                                                <tr>
                                                    <td>Accredited Status</td>
                                                    <td><strong> Self Accredited</strong></td>
                                                    <td><a type="button" href="javascript:void(0)" >Edit ✎ </a></td>
                                                </tr>
                                                <tr>
                                                    <td>Phone Number</td>
                                                    <td><strong id="displayPhoneNumber"></strong></td>
                                                    <td><a type="button" href="javascript:void(0)" onclick="prevForm(7)">Edit ✎ </a></td>
                                                </tr>
                                                <tr>
                                                    <td>Address</td>
                                                    
                                                    <td><strong id="displyAddress"></strong></td>
                                                    <td><a type="button" href="javascript:void(0)" onclick="prevForm(6)">Edit ✎ </a></td>
                                                </tr>
                                                <tr>
                                                    <td>Date of Birth</td>
                                                    <td><strong id="didplayDob"></strong></td>
                                                    <td><a type="button" href="javascript:void(0)" onclick="prevForm(8)">Edit ✎ </a></td>
                                                </tr>
                                                <tr>
                                                    <td>SSN</td>
                                                    <td><strong id="displaySsn"></strong></td>
                                                    <td><a type="button" href="javascript:void(0)" onclick="prevForm(9)">Edit ✎ </a></td>
                                                </tr>
                                                <tr>
                                                    <td>EIN</td>
                                                    <td><strong id="displayEin"></strong></td>
                                                    <td><a type="button" href="javascript:void(0)" onclick="prevForm(9)">Edit ✎ </a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="btn-next-con">
                                            <a class="btn-back" href="#" onClick="prevForm(10)">back</a>
                                            <input type="submit" class="btn-last" id="submitClientCreationForm" value="submit">
                                            <!-- <a type="submit" class="btn-last" id="submitClientCreationForm"  href="#">Submit</a> -->
                                        </div>
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

    <script src="{{ asset('bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>
    <script src="{{ asset('bootstrap-wizard/global.js') }}"></script>

<script>

    $(".btn-last").on("click",function(){
        // alert(0);
        // let form = $("#js-wizard-form").serializeArray();

        let fields = {
            "first_name" : $("#first_name").val(),
            "last_name" : $("#last_name").val(),
            "citizen_ship" : $('input[type="radio"][name="citizen_ship"]:checked').val(),
            "account_type" : $('input[type="radio"][name="account_type"]:checked').val(),
            "entity_type" : $("#entity_type").val(),
            "user_id" : $("#user_id").val(),
            "corporate_entity_name" : $("#corporate_entity_name").val(),
            "corporate_signatory_title" : $("#corporate_signatory_title").val(),
            "retired_entity_name" : $("#retired_entity_name").val(),
            "retired_signatory_title" : $("#retired_signatory_title").val(),
            "street_address" : $("#street_address").val(),
            "apartment_suit" : $("#apartment_suit").val(),
            "city" : $("#city").val(),
            "state" : $("#state").val(),
            "postal_code" : $("#postal_code").val(),
            "mailing_address" : $('input[type="checkbox"][name="mailing_address"]').is(":checked"),
            "country" : $("#country").val(),
            "phone_number" : $("#phone_number").val(),
            "dob" : $("#dob").val(),
            "ssn" : $("#ssn").val(),
            "ein" : $("#ein").val(),
            "net_worth_each_owner_one_million_check" : $('input[type="checkbox"][name="net_worth_each_owner_one_million_check"]').is(":checked"),
            "net_worth_joint_spouse_check" : $('input[type="checkbox"][name="net_worth_joint_spouse_check"]').is(":checked"),
            "total_asset_exceeding_check" : $('input[type="checkbox"][name="total_asset_exceeding_check"]').is(":checked"),
            "indiviual_income_check" : $('input[type="checkbox"][name="indiviual_income_check"]').is(":checked"),
            "finary_member_check" : $('input[type="checkbox"][name="finary_member_check"]').is(":checked"),
            "member_of_board_of_director_check" : $('input[type="checkbox"][name="member_of_board_of_director_check"]').is(":checked"),
        };


        
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                /* the route pointing to the post function */
                url: "{{route('customer.register')}}",
                type: 'POST',
                /* send the csrf-token and the input to the controller */
                data: {_token: CSRF_TOKEN, fields},
                dataType: 'JSON',
                /* remind that 'data' is the response of the AjaxController */
                success: function (response) { 
                    console.log(response);
                    if(response.success == true){

                        window.location = response.redirectUrl;

                    }
                }
            }); 
    
    });

    // form validation
    $(document).on("click",".forward",function(){
        let formNo = $(this).parent().parent().data("form-no");
        let backBtn = document.querySelectorAll(".btn-back");
      
        // first name
        if(formNo == 2){
            

            if(!$("#first_name").val().trim()){
                $("#first_name_error").removeClass("d-none");
                backBtn[1].click();
            }else{
                $("#first_name_error").addClass("d-none");
            }
            
        }else if(formNo == 3){ //last name
            
            if(!$("#last_name").val().trim()){
                $("#last_name_error").removeClass("d-none");
                backBtn[2].click(); 
            }else{
                $("#last_name_error").addClass("d-none");
            }

         

          
            
           

        }else if(formNo == 4){ // citizen ship
            
            
            if(!$('input[type="radio"][name="citizen_ship"]:checked').val()){
                $("#citizen_ship_error").removeClass("d-none");
                backBtn[3].click();
             
                
            }else{
                $("#citizen_ship_error").addClass("d-none");
            }

        }else if(formNo == 5){ //account type
            
            
            if(!$('input[type="radio"][name="account_type"]:checked').val()){
                $("#account_type_error").removeClass("d-none");
                backBtn[4].click();
               
            }else if($('input[type="radio"][name="account_type"]:checked').val() == 'indiviual_or_personal'){
                $("#corporate_entity_name_error").addClass("d-none");
                $("#corporate_signatory_title_error").addClass("d-none");
                $("#retired_entity_name_error").removeClass("d-none");
                $("#retired_signatory_title_error").removeClass("d-none");
            }else if($('input[type="radio"][name="account_type"]:checked').val() == 'entity_trust_or_corporation'){
               
                if(!$("#entity_type").val()){
                    $("#entity_type_error").removeClass("d-none")
                    backBtn[4].click();
                }else{
                    $("#entity_type_error").addClass("d-none");
                    $("#retired_entity_name_error").removeClass("d-none");
                    $("#retired_signatory_title_error").removeClass("d-none");
                }

                if(!$("#corporate_entity_name").val().trim()){
                    $("#corporate_entity_name_error").removeClass("d-none");
                    backBtn[4].click();
                }else{
                    $("#corporate_entity_name_error").addClass("d-none");
                    $("#retired_entity_name_error").removeClass("d-none");
                    $("#retired_signatory_title_error").removeClass("d-none");
                }

                if(!$("#corporate_signatory_title").val().trim()){
                    $("#corporate_signatory_title_error").removeClass("d-none")
                    backBtn[4].click();
                }else{
                    $("#corporate_signatory_title_error").addClass("d-none")
                    $("#retired_entity_name_error").removeClass("d-none");
                    $("#retired_signatory_title_error").removeClass("d-none");
                }
            }else if($('input[type="radio"][name="account_type"]:checked').val()  == 'retirement'){
               
               if(!$("#retired_entity_name").val()){
                   $("#retired_entity_name_error").removeClass("d-none")
                   backBtn[4].click();

               }else{
                   $("#retired_entity_name_error").addClass("d-none")
                   $("#corporate_entity_name_error").addClass("d-none");
                    $("#corporate_signatory_title_error").addClass("d-none");
               }

               if(!$("#retired_signatory_title").val()){
                   $("#retired_signatory_title_error").removeClass("d-none")
                   backBtn[4].click();
             
               }else{
                   $("#retired_signatory_title_error").addClass("d-none")
                   $("#corporate_entity_name_error").addClass("d-none");
                   $("#corporate_signatory_title_error").addClass("d-none");
               }
           }else{
                $("#citizen_ship_error").addClass("d-none");
            }

        }else if(formNo == 6){ // address
            
            
            //    street validation
            if(!$("#street_address").val().trim()){
                $("#street_address_error").removeClass('d-none');
                backBtn[5].click();
               
            }else{
                $("#street_address_error").addClass('d-none');
            }
            
            // // aparment suit   
            // if(!$("#apartment_suit").val().trim()){
            //     $("#apartment_suit_error").removeClass('d-none');
            //     backBtn[5].click();
             
            // }else{
            //     $("#apartment_suit_error").addClass('d-none');
            // }
            
            // state   
            if(!$("#state").val()){
                $("#state_error").removeClass('d-none');
                backBtn[5].click();
             
            }else{
                $("#state_error").addClass('d-none');
            }
            
            // postal code error
            if(!$("#postal_code").val().trim()){ 
                $("#postal_code_error").removeClass('d-none');
                backBtn[5].click();
         
            }else{
                $("#postal_code_error").addClass('d-none');
            }
            
            // city
            if(!$("#city").val().trim()){ 
                $("#city_error").removeClass('d-none');
                backBtn[5].click();
                
            }else{
                $("#city_error").addClass('d-none');
            }
        }else if(formNo == 7){ // phone number
            
            
            // phone number
            if(!$("#phone_number").val().trim()){ 
                $("#phone_number_error").removeClass('d-none');
                backBtn[6].click();
                var progressBar = $('#js-progress').find('.progress-bar');
                var progressVal = $('#js-progress').find('.progress-val');              
                progressBar.css('width', 63+ '%');
                progressVal.text(63+'%');
            }else{
                $("#phone_number_error").addClass('d-none');
            }
            
            // country
            if(!$("#country").val()){ 
                $("#country_error").removeClass('d-none');
                backBtn[6].click();

            }else{
                $("#country_error").addClass('d-none');
            }
        }else if(formNo == 8){ // dob
            
            
            // phone number
            if(!$("#dob").val()){ 
                $("#dob_error").removeClass('d-none');
                backBtn[7].click();
               
            }else{
                $("#dob_error").addClass('d-none');
            }
            
        }else if(formNo == 9){ // dob
            
            // EIN
            if(!$("#ein").val().trim()){ 
                $("#ein_error").removeClass('d-none');
                backBtn[8].click();
               
            }else{
                $("#ein_error").addClass('d-none');
            }
            
            // SSN
            if(!$("#ssn").val().trim()){ 
                $("#ssn_error").removeClass('d-none');
                backBtn[8].click();
            }else{
                $("#ssn_error").addClass('d-none');
            }
            
        }

    });

    $(document).on("click","#saveAndExit",function(){
        $("#submitClientCreationForm").click();
    });

    function nextForm(nextFormNo){

        let panes = document.querySelectorAll(".tab-pane");
      

        panes.forEach((score) => {
            score.classList.remove("active");
        });


        var progressBar = $('#js-progress').find('.progress-bar');
        var progressVal = $('#js-progress').find('.progress-val');   

        if(nextFormNo == 2){
            progressBar.css('width', 18+ '%');
            progressVal.text(18+'%');
        }else if(nextFormNo == 3){           
            progressBar.css('width', 27+ '%');
            progressVal.text(27+'%');
        }else if(nextFormNo == 4){            
            progressBar.css('width', 36+ '%');
            progressVal.text(36+'%');
        }else if(nextFormNo == 5){           
            progressBar.css('width', 45+ '%');
            progressVal.text(45+'%');
        }else if(nextFormNo == 6){            
            progressBar.css('width', 54+ '%');
            progressVal.text(54+'%');
            
        }else if(nextFormNo == 7){       
            progressBar.css('width', 63+ '%');
            progressVal.text(63+'%');
        }else if(nextFormNo == 8){  
            progressBar.css('width', 72+ '%');
            progressVal.text(72+'%');
        }else if(nextFormNo == 9){       
            progressBar.css('width', 81+ '%');
            progressVal.text(81+'%');

        }else if(nextFormNo == 10){       
            progressBar.css('width', 90+ '%');
            progressVal.text(90+'%');

        }else if(nextFormNo == 11){       
            progressBar.css('width', 100+ '%');
            progressVal.text(100+'%');
            displayInformationPane();

        }
        
        $("#tab"+nextFormNo).addClass("active");
    }

    function prevForm(prevFormNo){

        let panes = document.querySelectorAll(".tab-pane");


        panes.forEach((score) => {
            score.classList.remove("active");
        });


        var progressBar = $('#js-progress').find('.progress-bar');
        var progressVal = $('#js-progress').find('.progress-val');   
        if(prevFormNo == 1){
            progressBar.css('width', 9+ '%');
            progressVal.text(9+'%');
        }else if(prevFormNo == 2){
            progressBar.css('width', 18+ '%');
            progressVal.text(18+'%');
        }else if(prevFormNo == 3){           
            progressBar.css('width', 27+ '%');
            progressVal.text(27+'%');
        }else if(prevFormNo == 4){            
            progressBar.css('width', 36+ '%');
            progressVal.text(36+'%');
        }else if(prevFormNo == 5){           
            progressBar.css('width', 45+ '%');
            progressVal.text(45+'%');
        }else if(prevFormNo == 6){            
            progressBar.css('width', 54+ '%');
            progressVal.text(54+'%');
        }else if(prevFormNo == 7){       
            progressBar.css('width', 63+ '%');
            progressVal.text(63+'%');
        }else if(prevFormNo == 8){  
            progressBar.css('width', 72+ '%');
            progressVal.text(72+'%');
        }else if(prevFormNo == 9){       
            progressBar.css('width', 81+ '%');
            progressVal.text(81+'%');
        }else if(prevFormNo == 10){       
            progressBar.css('width', 90+ '%');
            progressVal.text(90+'%');
        }else if(prevFormNo == 11){       
            progressBar.css('width', 100+ '%');
            progressVal.text(100+'%');
        }

        $("#tab"+prevFormNo).addClass("active");
        return true;
    }

    function displayInformationPane(){
        let entity_name = '';
        let signatory_title = '';
        $("#displayFullName").text($("#first_name").val()+' '+$("#last_name").val());
        $("#displayEin").text($("#ein").val());
        $("#displaySsn").text($("#ssn").val());
        $("#didplayDob").text($("#dob").val());
        $("#displyAddress").text($("#street_address").val());
        $("#displayResidenceType").text($("#apartment_suit").val() ? $("#apartment_suit").val() : '---');
        $("#displayPhoneNumber").text($("#phone_number").val());
        $("#displayEntityName").text($("#entity_type:selected").text());
        $("#displayAccountType").text( $('input[type="radio"][name="account_type"]:checked').next().text());
        if($('input[type="radio"][name="account_type"]:checked').val() == 'entity_trust_or_corporation'){
            entity_name = $("#corporate_entity_name").val();
            signatory_title = $("#corporate_signatory_title").val();
        }else if($('input[type="radio"][name="account_type"]:checked').val()  == 'retirement'){
            entity_name = $("#retired_entity_name").val();
            signatory_title = $("#retired_signatory_title").val();  
        }
        $("#displaySignatoryTitle").text(entity_name);
        $("#displayEntityName").text(signatory_title);
    }
    
    $(function() {
        let  stepTocontinue= {{isset($customerInfo) == true ? $customerInfo->step_in_complete : 1 }}
        nextForm(stepTocontinue);
    });


</script>

</body>

</html>
