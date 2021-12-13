@extends('admin_layout')
@section('admin_content')
    {{-- <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ URL::to('/dashboard') }}">Home</a><i class="fa fa-angle-right"></i>Danh sách
            khách hàng yêu cầu nhận thông tin về tour
        </li>
    </ol> --}}
    <div class="agile-grids">
        <!-- tables -->
        <div class="agile-tables">
            <div class="w3l-table-info">
                <h2>Danh sách khách hàng yêu cầu nhận thông tin về tour </h2>
                <table id="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên khách hàng</th>
                            <th>Số điện thoại/ Email</th>

                            <th>Chủ đề </th>
                            <th>Nội dung quan tâm </th>
                            <th>Ngày gửi </th>
                            <th>Action </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($manage_enquires as $key => $v_contact)
                            <tr>
                                <td width="50">{{ $v_contact->contact_id }}</td>
                                <td width="200">{{ $v_contact->contact_name }}</td>
                                <td width="200">{{ $v_contact->email }}</td>
                                <td width="200">{{ $v_contact->content }}</td>
                                <td width="400">{{ $v_contact->main_content }}</td>
                                <td width="250">{{ $v_contact->created_at }}</td>

                                <td><a href="" onclick="return confirm('Bạn muốn duyệt yêu cầu ?')">Pending</a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
