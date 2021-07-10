@extends('layouts.layout') @component('components.adminContactsheader')
@endcomponent @section('content')
<div class="contacts-table">
    <div class="contacts-wrap">
        <table>
            <tr class="contacts-title">
                <th>お名前</th>
                <th>メールアドレス</th>
                <th>電話番号</th>
                <th></th>
            </tr>
            @foreach($allcontact as $contact)
            <form method="POST" action="{{ route('admin.contacts') }}">
                @csrf
                <input name="id" value="{{ $contact['id'] }}" type="hidden" />
                <tr>
                    <td>
                        <label
                            >{{ $contact["family_name"] }}
                            {{ $contact["first_name"] }}</label
                        >
                        <input
                            name="name"
                            value="{{ $contact['family_name'] }}"
                            type="hidden"
                        />
                        <input
                            name="name"
                            value="{{ $contact['first_name'] }}"
                            type="hidden"
                        />
                    </td>
                    <td>
                        <label>{{ $contact["email"] }}</label>
                        <input
                            name="email"
                            value="{{ $contact['email'] }}"
                            type="hidden"
                        />
                    </td>
                    <td>
                        <label>{{ $contact["phone_number"] }}</label>
                        <input
                            name="phone_number"
                            value="{{ $contact['phone_number'] }}"
                            type="hidden"
                        />
                    </td>
                    @if($previ == 1)
                    <td>
                        <button
                            type="submit"
                            name="delete"
                            class="contancts-delete-button"
                        >
                            削除
                        </button>
                    </td>
                    @endif
                </tr>
            </form>
            @endforeach
        </table>
        {{ $allcontact->links() }}
    </div>
</div>
@endsection
