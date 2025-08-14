
@section('additional-js')
    <script src="{{asset('frontend')}}/js/theme-setting.js"></script>
    <script src="{{asset('frontend')}}/js/color-setting.js"></script>
@endsection

    <div class="theme-settings">
        <ul>
            <li class="demo-li">
                <a href="javascript:void(0)" onclick="openSetting()">
                    <div class="setting-sidebar" id="setting-icon">
                        <h5>50+ <br>demo</h5>
                    </div>
                </a>
            </li>
            <li class="demo-li">
                <div class="backend-btn"><a target="_blank" href="../back-end/index.html">Admin</a></div>
            </li>
            <li>
                <div class="dark-btn">Dark</div>
            </li>
            <li>
                <div class="rtl-btn">RTL</div>
            </li>
            <li class="input-picker">
                <input id="ColorPicker1" type="color" value="#27742b" name="Background">
            </li>
            <li class="input-picker">
                <input id="ColorPicker2" type="color" value="#ee7a63" name="Background">
            </li>
        </ul>
    </div>