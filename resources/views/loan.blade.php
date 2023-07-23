@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
        <div class="col-lg-12">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Loan Form</h1>
                </div>
                <form class="user" action="" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="name" name="name" class="form-control form-control-user" aria-describedby="emailHelp" placeholder="Enter the Name">
                            @if($errors->has('name'))
    			                <span class="text-danger">{{ $errors->first('name') }}</span>
                        	@endif
                        </div>
                        <div class="form-group">
                            <input type="text" name="contact" class="form-control form-control-user" aria-describedby="contactHelp" placeholder="Contact Number...">
                            @if($errors->has('contact'))
    			                <span class="text-danger">{{ $errors->first('contact') }}</span>
                        	@endif
                        </div>
                        <div class="form-group">
                            <input type="text" name="address" class="form-control form-control-user" aria-describedby="addressHelp" placeholder="Enter Your Address...">
                            @if($errors->has('address'))
    			                <span class="text-danger">{{ $errors->first('address') }}</span>
                        	@endif
                        </div>
                        <div class="form-group">
                            <input type="text" name="amount" class="form-control form-control-user" aria-describedby="amountHelp" placeholder="Amount of Loan">
                            @if($errors->has('amount'))
    			                <span class="text-danger">{{ $errors->first('amount') }}</span>
                        	@endif
                        </div>
                        <div class="form-group">
                            <input type="text" name="position" class="form-control form-control-user" id="exampleInputposition" placeholder="Position">
                            @if($errors->has('position'))
                                <span class="text-danger">{{ $errors->first('position') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" name="interest_rate" class="form-control form-control-user" placeholder="Interest_Rate">
                            @if($errors->has('interest_rate'))
                                <span class="text-danger">{{ $errors->first('interest_rate') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" name="payments" class="form-control form-control-user" placeholder="Payments">
                            @if($errors->has('payments'))
                                <span class="text-danger">{{ $errors->first('payments') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" name="account_type" class="form-control form-control-user" placeholder="Account_Type">
                            @if($errors->has('account_type'))
                                <span class="text-danger">{{ $errors->first('account_type') }}</span>
                            @endif
                        </div>
                        <button class="btn btn-primary btn-user btn-block" type="submit">
                            Submit
                        </button>
                    </form>
                    <hr>
            </div>
        </div>
    </div>

</div>

@endsection('content')