<table class="table table-bordered ">
    <thead>
        <tr>
            <th><input type="checkbox" value="" id="checkAll" class="input-checkbox"></th>

            <th style="width:90px">Ảnh </th>
            <th>Họ và tên</th>
            <th>Email</th>
            <th>Điện thoại</th>
            <th>Địa chỉ</th>
            <th>Trạng thái</th>
            @if(Auth::user()->role == "admin")
            <th class="text-center">Thao tác</th>
            @endif

        </tr>
    </thead>
    <tbody>
        @if(isset($users) && is_object($users) )
        @foreach($users as $user)
        <form action="{{ route('users.update', $user->id) }}" method="POST" id="form-user-{{ $user->id }}">
                @csrf
                @method('PUT')
        <tr>
            <th><input type="checkbox" value="" id="checkAll" class="input-checkbox checkBoxItem"></th>
            <th><span class="image img-cover"><img src="{{$user->img}}" alt="null" width="100%" height="70px"></span> </th>
            <!-- <td>
                {{ $user->name }}
            </td>
            <td>
                {{ $user->email }}
            </td>
            <td>
                {{ $user->phone }}
            </td>
            <td>
                {{ $user->address}}
            </td> -->
            <td id="name-display-{{ $user->id }}">
                    <span>{{ $user->name }}</span>
                    <input type="text" name="name" value="{{ $user->name }}" class="form-control" style="display:none;">
                </td>

                <!-- Cột Email -->
                <td id="email-display-{{ $user->id }}">
                    <span>{{ $user->email }}</span>
                    <input type="text" name="email" value="{{ $user->email }}" class="form-control" style="display:none;">
                </td>

                <!-- Cột Điện thoại -->
                <td id="phone-display-{{ $user->id }}">
                    <span>{{ $user->phone }}</span>
                    <input type="text" name="phone" value="{{ $user->phone }}" class="form-control" style="display:none;">
                </td>

                <!-- Cột Địa chỉ -->
                <td id="address-display-{{ $user->id }}">
                    <span>{{ $user->address }}</span>
                    <input type="text" name="address" value="{{ $user->address }}" class="form-control" style="display:none;">
                </td>
            <td class="text-center"> <input type="checkbox" class="js-switch" checked /></td>
            @if(Auth::user()->role == "admin")
            <td class="text-center">
                <a href="{{route('user.edit')}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>
            </td>
            @endif
        </tr>
        @endforeach
        @endif

    </tbody>
</table>

{{ $users->links('pagination::bootstrap-5') }}