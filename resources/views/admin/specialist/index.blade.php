@extends('admin.layout.master')
@section('content')
    <a class="btn btn-success" href="{{route('specialist.create')}}">
        Thêm
    </a>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-content">
                    <h4 class="card-title">Quản lý chuyên ngành</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                            <tr>
                                <th>#</th>
                                <th>Tên chuyên ngành</th>
                                <th>Sửa</th>
                                <th>Xoá</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($specialists as $specialist)
                                <tr>
                                    <td>
                                        {{ $specialist->id }}
                                    </td>
                                    <td>
                                        {{ $specialist->name }}
                                    </td>
                                    <td>
                                        <a href="{{route('specialist.edit',$specialist)}}">
                                        <button class="btn btn-info">Sửa</button>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{route('specialist.destroy',$specialist)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                        <button class="btn btn-danger" style="margin-top: 25px">Xoá</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                        {{ $specialists->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(function (){
            $("#4").addClass('active');
        })
    </script>
@endpush

