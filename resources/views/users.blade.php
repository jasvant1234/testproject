@extends('layouts.app')

@section('content')


    <style>
        h3::first-letter {
            font-size: 100%;
            color: #FFC100;
            font-weight: 900;

        }
    </style>

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="card-title"><b style="font-size: 25px">Users</b></h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">USERS</a></li>
                        <li class="breadcrumb-item active">HOME</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
            <tr>

                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
                <th>Action</th>

            </tr>
            </thead>
            <tbody>

            @foreach($users as $user)
                <tr>

                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <input data-id="{{$user->id}}" class="toggle-class statuss" type="checkbox" onclick="on();"
                               data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                               data-on="Active" data-off="Block" {{ $user->status=='Active' ? 'checked' : '' }}>
                    </td>
                    <td>
                        <a href="{{route('user_edit',$user->id)}}" class="btn btn-sm btn-warning"><i
                                class="fa fas-solid fa-pen"></i></a>
                        <a href="{{route('user_delete',$user->id)}}" class="btn btn-sm btn-danger"><i
                                class="fa fas-solid fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{--        <div class="d-flex justify-content" style="margin-left: 825px;">--}}
        {{--            {!! $get_all_ladies->links() !!}--}}
        {{--        </div>--}}

    </div>


@endsection
@push('page_script')
    <script>
        $(function () {
            $('.toggle-class').change(function () {
                var status = $(this).prop('checked') == true ? 'Active' : 'Block';
                // alert(status)
                var id = $(this).data('id');
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '{{route('home/status')}}',
                    data: {'status': status, 'id': id},
                    success: function (data) {
                        console.log(data.success)
                    }
                });
            })
        });
    </script>
@endpush
