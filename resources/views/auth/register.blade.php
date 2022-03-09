@extends ( 'layouts.guest' )
@section ( 'title', '用户注册' )

@section ( 'content' )
    <form action="{{ route ( 'register' ) }}" method="post" novalidate="novalidate">
        @csrf
        <div class="form-group">
            <label for="name">名称</label>
            <input id="name" class="form-control @error ( 'name' ) is-invalid @enderror" type="name" name="name" placeholder="请输入名称" required="required" autocomplete="off" value="{{ old ( 'name' ) }}" />
            @error ( 'name' )
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">邮箱<span class="text-danger">（请使用真实邮箱，后续可能会添加邮箱验证）</span></label>
            <input id="email" class="form-control @error ( 'email' ) is-invalid @enderror" type="email" name="email" placeholder="请输入邮箱" required="required" autocomplete="off" value="{{ old ( 'email' ) }}" />
            @error ( 'email' )
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="gender">性别</label>
            <select id="gender" class="custom-select @error ( 'gender' ) is-invalid @enderror" name="gender">
                <option value="">请选择性别</option>
                <option value="1" {{ old ( 'gender' ) === '1' ? 'selected' : '' }}>男</option>
                <option value="0" {{ old ( 'gender' ) === '0' ? 'selected' : '' }}>女</option>
            </select>
            @error ( 'gender' )
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">密码</label>
            <input id="password" class="form-control @error ( 'password' ) is-invalid @enderror" type="password" name="password" placeholder="请输入密码" required="required" autocomplete="off" value="" />
            @error ( 'password' )
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="password_confirmation">确认密码</label>
            <input id="password_confirmation" class="form-control @error ( 'password_confirmation' ) is-invalid @enderror" type="password" name="password_confirmation" placeholder="请输入确认密码" required="required" autocomplete="off" value="" />
        </div>
        <div class="form-group">
            <input class="btn btn-block btn-success" type="submit" value="立即注册" />
        </div>
    </form>
    <hr />
    <div class="text-center">
        <a class="font-weight-bold small" href="{{ route ( 'login' ) }}" title="">已有账号？</a>
    </div>
@stop
