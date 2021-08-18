@extends('master')
@section('content')

<div class="content">
  <div class="recha">
    <ol>
        <br>
        <br>
        <li>Mở app momo và <b>Quét mã QR</b> bên dưới</li>
        <li>
            Nhập số tiền bạn muốn chuyển,
            <b class="has-text-warning">tối thiểu là 10.000đ mỗi lần chuyển</b>.
            <span class="has-text-grey">Nếu bạn chuyển ít hơn hệ thống sẽ coi là spam và không ghi nhận giao dịch!</span>
        </li>
        <li>
            <p>Sau khi chuyển tiền, nhập thông tin giao dịch:</p>

            <div id="result_recha"></div>
             <form class="form-recharge" enctype="multipart/form-data"  id="form-recha">

                <div class="column is-half level-item"><label class="sdt">Số điện thoại Momo của bạn:</label></div>
                <div class="column is-half level-item"><input type="text" required  name="phone" /></div>
                <div class="column is-half level-item"><label class="giaodich">Mã giao dịch:</label></div>
                <div class="column is-half level-item"><input type="text" placeholder='Xem "Lịch sử GD" trên Momo' required name="transaction"  /></div>
                <button class="confirm">Xác nhận</button>
             </form>
            </div>
        </li>
    </ol>
    <br>
    <br>
    <div class="donate">
        <div><img src="{{asset('css/icons/donate.png')}}" width="230" height="230" /></div> <br>
        <div class= "momo"> Nếu không quét mã được,
        <a href="https://nhantien.momo.vn/hdpluss">bấm vào đây để chuyển tiền</a>. Nếu vẫn không được hãy <b>update app Momo</b> trên máy bạn.
    </div>
</div>
</div>
</div>
@endsection

