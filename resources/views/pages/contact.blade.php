
@extends('main')
@section('title','| Contact  Page')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1> Contact Me</h1>
           <hr>

            <form>
                <div class="form-group">

                    <label name="email">Email</label>
                    <input id="email" name="email" class="form-control">
                </div>

                <div class="form-group">

                    <label name="subject">Subject</label>
                    <input id="subject" name="subject" class="form-control">
                </div>


                <div class="form-group">

                    <label name="massege">massege</label>
                    <textarea id="massege" name="massege" class="form-control">Type Your massge here...</textarea>
                </div>

                <input type="submit" value="Send Massge" class="btn btn-success">
            </form>
        </div>

    </div>
@endsection