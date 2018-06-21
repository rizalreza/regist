@extends('layouts.app')

@section('content')

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 

<section class="block-wrapper">
<div class="container">
    
    <div class="row">
        <div style="margin-left: 300px" class="col-md-6 col-md-offset-3">
            <div class="block-content">
                <div class="forum-box">
                    <div class="forum-table">
                        <div class="table-title text-center" style="padding-top: 1px; padding-bottom: 3px; color: white; background-color: #325098;">
                            <h3> Registration  </h3>
                        </div>
                        <form action="{{route('reg.process')}}" method="POST" role="form">
                            {{ csrf_field() }}
                            <div class="table-row">
                                <div class="form-post" style="float: none;">
                                    <label> Name </label>
                                    <input class="form-control" placeholder="" name="name" type="text">

                                    <label>Email </label>
                                    <input class="form-control" placeholder="" name="email" type="email" required> 

                                    <label> Password </label>
                                    <input class="form-control" name="password" type="password" value="" required>                                 

                                    <label>Phone </label>
                                    <input class="form-control input-md box-rad" placeholder="Example: 0813568890" name="phone" type="text">

                                    
                                    <label> Gender</label>
                                    <select class="form-control" name="gender" type="text" value="" required>
                                        <option value="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>

                                    <div class="form-group">
                                      <label for="production-date">Birthdate</label>
                                      <input type="text" id="birthdate" name="birthdate" class="form-control">
                                    </div>

                                    <label> Nationality </label>
                                    <select class="form-control" name="nationality" type="text" value="" required>
                                        <option value="">Select Nationality</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Singapore">Singapore</option>
                                    </select>
                                    <br>
                                    
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary" value="submit"> Submit </button>
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
</section>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"></script>

<script>
    $(function() {
    $( "#birthdate" ).datepicker({ dateFormat: 'yy-mm-dd',
                                    changeMonth: true,
                                    changeYear: true});
                                    });
</script>

@endsection