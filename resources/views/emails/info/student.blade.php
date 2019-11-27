@component('mail::table')

    |Tên  |Lớp  |Câu lạc bộ   |Trường   |Email   |Số điện thoại   |Số quyển   |
    |-----|-----|-------------|---------|--------|----------------|-----------|
    |{{ $data['name'] }}  |{{ $data['class'] }}    |{{ $data['club'] }}   |{{ $data['school'] }}   |{{ $data['email'] }}   |{{ $data['phone_contact'] }}   |{{ $data['number_book'] }}

@endcomponent
