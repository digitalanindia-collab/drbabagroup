@extends('admin.layouts.main')
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
                          <th>Level</th>
                          <th>Member</th>
                          <th>Plan</th>
                             <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $key=> $item)
    <tr>
                          <td>{{ $key+1}}</td>
                          <td>{{ $item->level}}</td>
                          <td>{{ $item->member}}</td>
                           <td>{{ $item->income}}</td>
                          <td>
                            <label class="badge badge-danger">
                                <form action="{{ url('/admin/plan/delete'.$item->id)}}" method="delete">
                                    @csrf
                                    @method('delete')
                                <a href="" class="text-white" style="text-decoration: none">Delete</a>
                                </form>
                            </label>
                            <label class="badge badge-primary"><a href="{{ route('plan.edit', $item->id) }}" class="text-white" style="text-decoration: none">Edit</a></label>
                        </td>
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
