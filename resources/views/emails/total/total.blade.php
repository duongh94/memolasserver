@component('mail::message')
# Thông tin khách hàng

@component('mail::table')

    |Số người  |Số lượng quyển  |Tổng số trang   |Giảm giá   |Option   |Loại bìa   |Tổng tiền| Tên người mua   |Email   |Số điện thoại | Trường | Lớp
    |-----|-----|-------------|---------|--------|----------------|-----------|
    |{{ $data['numer_people'] }}  |{{ $data['number_book'] }}    |{{ $data['total_pages_book'] }}   |{{ $data['giam_gia'] }}   |{{ $data['option'] }}   |{{ $data['bia'] }}   |{{ $data['tong'] }}|{{ $data['name'] }}   |{{ $data['email'] }}   |{{ $data['number_phone'] }} |{{ $data['school'] }} |{{ $data['class'] }}

@endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent

