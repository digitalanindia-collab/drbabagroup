@extends('user.layouts.main')
@section('content')
      <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Sr.No</th>
                          <th>Name</th>
<th>Level</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($data['followers'] as $key=> $item)
    <tr>
                          <td>{{ $key+1}}</td>
                          <td>{{ $item->first_name}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 grid-margin stretch-card flex-column">
            </div>
          </div>
@endsection
