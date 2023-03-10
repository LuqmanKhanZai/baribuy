@auth
    <!-- Modal -->
    <div class="modal fade" id="investment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Investment Information </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" value="{{ Auth::user()->address }}" name="address" class="form-control"
                                id="address" placeholder="Address">
                            @if ($errors->has('address'))
                                <div class="error">{{ $errors->first('address') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" name="email" value="{{ Auth::user()->email }}" disabled name="email"
                                class="form-control" id="email" placeholder="Email">
                            @if ($errors->has('email'))
                                <div class="error">{{ $errors->first('email') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">phone</label>
                            <input type="text" value="{{ Auth::user()->phone }}" name="phone" class="form-control"
                                id="phone" placeholder="Phone">
                            @if ($errors->has('phone'))
                                <div class="error">{{ $errors->first('phone') }}</div>
                            @endif
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Update changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal -->


    <!-- Modal -->
    <div class="modal fade" id="information" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Accreditation & Tax Information </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="" class="form-label">U.S. Citizen or Resident</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="us_citizen" id="inlineRadio1" class="form-check-label" value="{{ Auth::user()->us_citizen == 1 ? 'checked' : '' }}" checked>
                                <!-- <input class="form-check-input" {{ Auth::user()->us_citizen == 1 ? 'checked' : '' }}
                                    type="radio" name="us_citizen" id="inlineRadio1" value="1"> -->
                                <label class="form-check-label" for="inlineRadio1">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="us_citizen" id="inlineRadio1" class="form-check-label" value="{{ Auth::user()->us_citizen == 1 ? 'checked' : '' }}" checked>
                                <!-- <input class="form-check-input" {{ Auth::user()->us_citizen == 0 ? 'checked' : '' }}
                                    type="radio" name="us_citizen" id="inlineRadio2" value="0"> -->
                                <label class="form-check-label" for="inlineRadio2">No</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Accredited Investor</label>
                            <br>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="accredited_investor" id="investorAccredited" class="form-check-label" value="{{ Auth::user()->accredited_investor == 1 ? 'checked' : '' }}" checked>
                                <!-- <input class="form-check-input" type="radio"
                                    {{ Auth::user()->accredited_investor == 1 ? 'checked' : '' }}
                                    name="accredited_investor" id="investorAccredited" value="1"> -->
                                <label class="form-check-label" for="investorAccredited">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" name="accredited_investor" id="investorAccredited" class="form-check-label" value="{{ Auth::user()->accredited_investor == 1 ? 'checked' : '' }}" checked>

                                <!-- <input class="form-check-input" type="radio"
                                    {{ Auth::user()->accredited_investor == 1 ? 'checked' : '' }}
                                    name="accredited_investor" id="investorAccredited2" value="0"> -->
                                <label class="form-check-label" for="investorAccredited2">No</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exempt" class="form-label">Backup Tax Withholding Exempt </label>
                            <input type="text" value="{{ Auth::user()->backup_tax_withholding_exempt }}"
                                name="backup_tax_withholding_exempt" class="form-control"
                                id="backup_tax_withholding_exempt" placeholder="Exempt">
                            @if ($errors->has('backup_tax_withholding_exempt'))
                                <div class="error">{{ $errors->first('backup_tax_withholding_exempt') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="annualIcome" class="form-label">Annual Income</label>
                            <input type="text" value="{{ Auth::user()->annual_income }}" name="annual_income"
                                class="form-control" id="annualIcome" placeholder="$23,466.00">
                            @if ($errors->has('annual_income'))
                                <div class="error">{{ $errors->first('annual_income') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="netWorth" class="form-label">Net Worth</label>
                            <input type="text" value="{{ Auth::user()->net_worth }}" name="net_worth"
                                class="form-control" id="netWorth" placeholder="$3,466,466.00 ">
                            @if ($errors->has('net_worth'))
                                <div class="error">{{ $errors->first('net_worth') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Update changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal -->

    <!-- Modal -->
    <div class="modal fade" id="password" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="oldpassword" class="form-label">Old Password</label>
                            <input type="password" name="current_password" class="form-control" id="oldpassword"
                                placeholder="Old Password">
                            @if ($errors->has('current_password'))
                                <div class="error">{{ $errors->first('current_password') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="newpassword" class="form-label">New Password</label>
                            <input type="password" name="new_password" class="form-control" id="newpassword"
                                placeholder="New Password">
                            @if ($errors->has('new_password'))
                                <div class="error">{{ $errors->first('new_password') }}</div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="retype" class="form-label">Re-type Password</label>
                            <input type="password" name="new_confirm_password" class="form-control" id="retype"
                                placeholder="Re-type Password">
                            @if ($errors->has('new_confirm_password'))
                                <div class="error">{{ $errors->first('new_confirm_password') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Update changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal -->

    <!-- Modal -->
    <!-- Add Document -->
    <div class="modal fade" id="document" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Document </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="{{ route('document.upload') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="documentName" class="form-label">Document Name</label>
                            <input type="text" name="document_name" class="form-control" id="documentName"
                                placeholder="Enter Document Name">
                            @if ($errors->has('document_name'))
                                <div class="error">{{ $errors->first('document_name') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="document" class="form-label">Document</label>
                            <input type="file" name="document" class="form-control" id="document">
                            @if ($errors->has('document'))
                                <div class="error">{{ $errors->first('document') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Update changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <!-- {{-- addFundModal --}} -->
    <!-- Modal -->
    <!-- Add Fund -->
    <div class="modal fade" id="addFundModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Document </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="{{ route('user.add.fund') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="fund" class="form-label">Add Fund</label>
                            <input type="text" name="fund" class="form-control" id="fund"
                                placeholder="Enter fund amount">
                            @if ($errors->has('fund'))
                                <div class="error">{{ $errors->first('fund') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal -->
@endauth
