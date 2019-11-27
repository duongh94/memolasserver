    # Thông tin khách hàng
    @component('mail::table')

        |Tên  |Bộ môn  |Lớp   |Trường   |Email   |Số điện thoại   |Số quyển   |
        |-----|-----|-------------|---------|--------|----------------|-----------|
        |{{ $data['name'] }}  |{{ $data['subject'] }}    |{{ $data['class'] }}   |{{ $data['school'] }}   |{{ $data['email'] }}   |{{ $data['phone_contact'] }}   |{{ $data['number_book'] }}

    @endcomponent
    Thanks,<br>
