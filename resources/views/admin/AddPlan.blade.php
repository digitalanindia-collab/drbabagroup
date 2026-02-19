@extends('admin.layouts.main')
@section('content')
  <div class="row">
           <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" action="{{ route('plan.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Level</label>
                      <input type="text" class="form-control" id="level" name="level" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Member</label>
                      <input type="text" class="form-control" id="member" name="member" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">Income</label>
                      <input type="text" class="form-control" id="income" name="income" placeholder="Income">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-xl-6 grid-margin stretch-card flex-column">
            </div>

          </div>
@endsection
