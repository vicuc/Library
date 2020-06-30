<div class="list-group">
    <a href="{{ route('taikhoan.myaccount') }}" class="list-group-item list-group-item-action {{ request()->is('tai-khoan/my-account') ? 'active' : '' }}">
      My account
    </a>
    
    <a href="{{ route('taikhoan.phieumuon') }}" class="list-group-item list-group-item-action {{ request()->is('tai-khoan/phieu-muon') ? 'active' : '' }}">
        Phiêu mượn
    </a>
    <a href="{{ route('taikhoan.phieutra') }}" class="list-group-item list-group-item-action {{ request()->is('tai-khoan/phieu-tra') ? 'active' : '' }}">
        Phiếu trả
    </a>
    <a href="{{ route('taikhoan.phieuphat') }}" class="list-group-item list-group-item-action {{ request()->is('tai-khoan/phieu-phat') ? 'active' : '' }}" >
        Phiếu phạt
    </a>

    <a href="{{ route('out') }}" class="list-group-item list-group-item-action " >
        Đăng xuất
    </a>
</div>