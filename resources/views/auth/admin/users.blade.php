@extends('layouts.layout') @component('components.adminUserheadear')
@endcomponent @section('content')
<div id="users-table">
    <div class="users-wrap">
        <table>
            <tr class="users-title">
                <th class="users-title-width">お名前</th>
                <th class="users-title-width">メールアドレス</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            @foreach($alluser as $user)
            <form method="POST" action="{{ route('admin.users') }}">
                <input name="id" value="{{ $user['id'] }}" type="hidden" />
                @csrf
                <tr>
                    <td class="name-field">
                        <input
                            name="update_family_name"
                            value="{{ $user['family_name'] }}"
                            type="text"
                        />
                        <!-- @if ($errors->has('update_family_name'))
          <p class="error-message">{{ $errors->first('update_family_name') }}</p>
          @endif -->
                        <input
                            name="update_first_name"
                            value="{{ $user['first_name'] }}"
                            type="text"
                        />
                        <!-- @if ($errors->has('update_first_name'))
          <p class="error-message">{{ $errors->first('update_first_name') }}</p>
          @endif -->
                    </td>
                    <td class="email-field">
                        <input
                            name="update_email"
                            value="{{ $user['email'] }}"
                            type="text"
                        />
                        <!-- @if ($errors->has('update_email'))
          <p class="error-message">{{ $errors->first('update_email') }}</p>
          @endif -->
                    </td>
                    <td></td>
                    @if($previ == 1)
                    <td>
                        <button
                            type="submit"
                            name="update"
                            class="users-update-button"
                        >
                            編集
                        </button>
                    </td>
                    @endif @if($previ == 1)
                    <td>
                        <button
                            type="submit"
                            name="delete"
                            class="users-delete-button"
                        >
                            削除
                        </button>
                    </td>
                    @endif
                </tr>
            </form>
            @endforeach @if ($errors->has('update_email'))
            <p class="error-message">{{ $errors->first('update_email') }}</p>
            @endif @if ($errors->has('update_first_name'))
            <p class="error-message">
                {{ $errors->first('update_first_name') }}
            </p>
            @endif @if ($errors->has('update_family_name'))
            <p class="error-message">
                {{ $errors->first('update_family_name') }}
            </p>
            @endif @if($previ == 1)
            <form method="POST" action="{{ route('admin.users') }}">
                @csrf
                <tr>
                    <td class="new-admin-name-field">
                        <input
                            name="new_family_name"
                            value="{{ old('new_family_name') }}"
                            type="text"
                        />
                        @if ($errors->has('new_family_name'))
                        <p class="error-message">
                            {{ $errors->first('new_family_name') }}
                        </p>
                        @endif
                        <input
                            name="new_first_name"
                            value="{{ old('new_first_name') }}"
                            type="text"
                        />
                        @if ($errors->has('new_first_name'))
                        <p class="error-message">
                            {{ $errors->first('new_first_name') }}
                        </p>
                        @endif
                    </td>
                    <td class="new-admin-email-field">
                        <input
                            name="new_email"
                            value="{{ old('new_email') }}"
                            type="text"
                        />
                        @if ($errors->has('new_email'))
                        <p class="error-message">
                            {{ $errors->first('new_email') }}
                        </p>
                        @endif
                    </td>
                    <td><label>パスワード</label></td>
                    <td class="new-admin-password-field">
                        <input
                            name="new_password"
                            value="{{ old('new_password') }}"
                            type="text"
                        />
                        @if ($errors->has('new_password'))
                        <p class="error-message">
                            {{ $errors->first('new_password') }}
                        </p>
                        @endif
                    </td>
                    <td>
                        <button
                            type="submit"
                            name="create"
                            class="users-new-create"
                        >
                            新規作成
                        </button>
                    </td>
                </tr>
            </form>
            @endif
        </table>
        {{ $alluser->links() }}
    </div>
</div>

@endsection
