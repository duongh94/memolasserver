@component('mail::table')

    |Tên  |Tên của con  |Lớp   |Trường   |Email   |Số điện thoại   |Số quyển   |
    |-----|-----|-------------|---------|--------|----------------|-----------|
    |{{ $data['name'] }}  |{{ $data['name_child'] }}    |{{ $data['class'] }}   |{{ $data['school'] }}   |{{ $data['email'] }}   |{{ $data['phone_contact'] }}   |{{ $data['number_book'] }}

@endcomponent
