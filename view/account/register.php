<div class="em-wrapper-main">
    <div class="container container-main">
        <div class="em-inner-main">
            <div class="em-wrapper-area02"></div>
            <div class="em-main-container em-col1-layout">
                <div class="row">
                    <div class="em-col-main col-xs-push-6 col-sm-12">
                        <div class="account-create">
                            <div class="page-title">
                                <h1>Tạo tài khoản</h1>
                            </div>
                            <form method="post" id="form-validate">
                                <div class="fieldset">
                                    <input type="hidden" name="success_url" value="" />
                                    <input type="hidden" name="error_url" value="" />
                                    <h2 class="legend">Thông tin tài khoản</h2>
                                    <ul class="form-list">
                                        <li>
                                            <label for="name" class="required"><em>*</em>Họ và tên</label>
                                            <div class="input-box">
                                                <input type="text" name="name" id="name" value="" tile="Họ và tên" class="input-text validate-name requiretd-entry" />
                                            </div>
                                        </li>
                                        <li>
                                            <label for="email_address" class="required"><em>*</em>Tên đăng nhập</label>
                                            <div class="input-box">
                                                <input type="text" name="email" id="email_address" value="" tile="Email Address" class="input-text validate-email requiretd-entry" />
                                            </div>
                                        </li>
                                        <li class="control">
                                            <div class="input-box">
                                                <input type="checkbox" name="is_subscribed" title="Sign Up for Newsletter" value="1" id="is_subscribed" class="checkbox" />
                                            </div>
                                            <label for="is_subscribed">Đăng kí nhận tin tức</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="fieldset">
                                    <h2 class="legend">Thông tin mật khẩu</h2>
                                    <ul class="form-list">
                                        <li class="fields">
                                            <div class="field">
                                                <label for="password" class="required"><em>*</em>Mật khẩu</label>
                                                <div class="input-box">
                                                    <input type="password" name="password" id="password" title="Password" class="input-text required-entry validate-password" />
                                                </div>
                                            </div>
                                            <div class="field">
                                                <label for="confirmation" class="required"><em>*</em>Xác nhận mật khẩu</label>
                                                <div class="input-box">
                                                    <input type="password" name="confirmation" title="Confirm Password" id="confirmation" class="input-text required-entry validate-cpassword" />
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div id="window-overlay" class="window-overlay" style="display:none;"></div>
                                    <div id="remember-me-popup" class="remember-me-popup" style="display:none;">
                                        <div class="remember-me-popup-head">
                                            <h3>What's this?</h3> <a href="#" class="remember-me-popup-close" title="Close">Close</a>
                                        </div>
                                        <div class="remember-me-popup-body">
                                            <p>Checking &quot;Remember Me&quot; will let you access your shopping cart on this computer when you are logged out</p>
                                            <div class="remember-me-popup-close-button a-right"> <a href="#" class="remember-me-popup-close button" title="Close"><span>Close</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="buttons-set">
                                        <p class="back-link"><a href="login.html" class="back-link"><small>&laquo; </small>Quay lại</a>
                                        </p>
                                        <button type="submit" title="Submit" class="button"><span><span>Đăng kí</span></span>
                                        </button>
                                        <p class="required">* Bắt buộc</p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.em-wrapper-main -->