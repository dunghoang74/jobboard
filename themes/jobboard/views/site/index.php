<div class="search search-top" id="search">
    <div class="container ui-tabs ui-widget ui-widget-content ui-corner-all">

        <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
            <li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active">
                <a href="#search-0">Tìm Việc Làm Nhanh</a>
            </li>
            <li class="ui-state-default ui-corner-top">
                <a href="#search-1">Tìm kiếm việc làm nhanh theo ngành nghề</a>
            </li>
            <li class="ui-state-default ui-corner-top">
                <a href="#search-2">Tìm kiếm việc làm nhanh theo địa điểm</a>
            </li>
            <!-- <li>
                <input id="advancedSearch" onclick="window.location.href='/tim-viec-lam-nang-cao';" value="Tìm kiếm việc làm nâng cao" type="button">
            </li> -->
        </ul>


        <div class="ui-tabs-panel ui-widget-content ui-corner-bottom" id="search-0">
            <div class="holder">
                <form action="/vi/top-job-search-query" method="post">
                    <label>
                        <input id="quickJobSearch_keywords" name="quickJobSearch[keywords]" placeholder="Nhập từ khóa..." type="text">
                    </label>
                    <label>
                        <select id="quickJobSearch_category" name="quickJobSearch[category]"><option selected="selected" value="">Tất cả ngành nghề</option><option value="31">Bán hàng</option><option value="24">Báo chí/ Biên tập viên/ Xuất bản</option><option value="17">Bảo hiểm</option><option value="29">Bất động sản</option><option value="18">Biên phiên dịch/ Thông dịch viên</option><option value="154">Biên phiên dịch (tiếng Nhật)</option><option value="14">Chăm sóc sức khỏe/ Y tế</option><option value="130">CNTT - Phần cứng/ Mạng</option><option value="19">CNTT - Phần mềm</option><option value="26">Dầu khí/ Khoáng sản</option><option value="33">Dệt may/ Da giày</option><option value="9">Dịch vụ khách hàng</option><option value="28">Dược/ Sinh học</option><option value="148">Điện/ Điện tử</option><option value="10">Giáo dục/ Đào tạo/ Thư viện</option><option value="127">Hóa chất/ Sinh hóa/ Thực phẩm</option><option value="1">Kế toán/ Tài chính/ Kiểm toán</option><option value="15">Khách sạn/ Du lịch</option><option value="139">Kiến trúc</option><option value="11">Kỹ thuật ứng dụng/ Cơ khí</option><option value="20">Lao động phổ thông</option><option value="142">Môi trường/ Xử lý chất thải</option><option value="118">Mới tốt nghiệp/ Thực tập</option><option value="5">Ngân hàng/ Chứng khoán/ Đầu tư</option><option value="4">Nghệ thuật/ Thiết kế/ Giải trí</option><option value="12">Người nước ngoài</option><option value="30">Nhà hàng/ Dịch vụ ăn uống</option><option value="16">Nhân sự</option><option value="3">Nông nghiệp/ Lâm nghiệp</option><option value="151">Ô tô</option><option value="21">Pháp lý/ Luật</option><option value="25">Phi chính phủ/ Phi lợi nhuận</option><option value="145">Quản lý chất lượng (QA/ QC)</option><option value="22">Quản lý điều hành</option><option value="2">Quảng cáo/ Khuyến mãi/ Đối ngoại</option><option value="23">Sản xuất/ Vận hành sản xuất</option><option value="6">Thư ký/ Hành chánh</option><option value="136">Tiếp thị</option><option value="7">Tư vấn</option><option value="34">Vận chuyển/ Giao thông/ Kho bãi</option><option value="27">Vật tư/ Mua hàng</option><option value="32">Viễn Thông</option><option value="8">Xây dựng</option><option value="13">Xuất nhập khẩu/ Ngoại thương</option><option value="35">Khác</option></select>
                    </label>
                    <label>
                        <select id="quickJobSearch_province" name="quickJobSearch[province]"><option selected="selected" value="">Tất cả địa điểm</option><option value="23">Hồ Chí Minh</option><option value="27">Hà Nội</option><option value="17">Đà Nẵng</option><option value="1">An Giang</option><option value="9">Bà Rịa - Vũng Tàu</option><option value="5">Bắc Cạn</option><option value="4">Bắc Giang</option><option value="6">Bạc Liêu</option><option value="7">Bắc Ninh</option><option value="11">Bến Tre</option><option value="3">Bình Định</option><option value="2">Bình Dương</option><option value="8">Bình Phước</option><option value="10">Bình Thuận</option><option value="13">Cà Mau</option><option value="14">Cần Thơ</option><option value="12">Cao Bằng</option><option value="16">Đắk Lắk</option><option value="18">Đăk Nông</option><option value="15">Điện Biên</option><option value="19">Đồng Nai</option><option value="20">Đồng Tháp</option><option value="21">Gia Lai</option><option value="25">Hà Giang</option><option value="28">Hà Nam</option><option value="30">Hà Tây</option><option value="31">Hà Tĩnh</option><option value="24">Hải Dương</option><option value="29">Hải Phòng</option><option value="26">Hậu Giang</option><option value="22">Hòa Bình</option><option value="32">Hưng Yên</option><option value="33">Kiên Giang</option><option value="34">Khánh Hòa</option><option value="35">Kon Tum</option><option value="65">Lai Châu</option><option value="38">Lâm Đồng</option><option value="39">Lạng Sơn</option><option value="66">Lào Cai</option><option value="36">Long An</option><option value="42">Nam Định</option><option value="40">Nghệ An</option><option value="41">Ninh Bình</option><option value="43">Ninh Thuận</option><option value="44">Phú Thọ</option><option value="45">Phú Yên</option><option value="46">Quảng Bình</option><option value="47">Quảng Nam</option><option value="49">Quảng Ngãi</option><option value="48">Quảng Ninh</option><option value="50">Quảng Trị</option><option value="52">Sóc Trăng</option><option value="51">Sơn La</option><option value="56">Tây Ninh</option><option value="53">Thái Bình</option><option value="57">Thái Nguyên</option><option value="55">Thanh Hóa</option><option value="74">Thừa Thiên - Huế</option><option value="54">Tiền Giang</option><option value="75">Trà Vinh</option><option value="73">Tuyên Quang</option><option value="76">Vĩnh Long</option><option value="77">Vĩnh Phúc</option><option value="78">Yên Bái</option><option value="79">Khác</option><option value="80">Nước Ngoài</option><option value="134">Nhật Bản</option></select>
                    </label>
                    <input id="search-top" value="search" type="submit">

                </form>
            </div>
        </div>
         <?php  $this->widget('JobCates');  ?>
         <?php  $this->widget('JobByPlace');  ?>        
    </div>
</div>

<div class="homecontent" id="homecontent">
<div class="container">
<div id="breadcrumb">
    <ul id="home-bread">
        <li>
            <a href="http://www.careerlink.vn/" title="Kiếm việc làm trên Mạng tuyển dụng trực tuyến - CareerLink.vn">CareerLink</a>
        </li>
    </ul>
    <h1 id="home-text">Tuyển dụng, tìm kiếm việc làm trực tuyến tại CareerLink.vn</h1>
</div>

<div id="left">
    <?php  $this->widget('GreatJob');  ?>
    <?php  $this->widget('TopEmployer');  ?>
    
    <div class="newsletter box" id="newsletter">
        <div class="description">
            <h2>Nhận bản tin việc làm</h2>
            <p>Cơ hội nhận cẩm nang việc làm và thông tin công việc mới mỗi tuần.</p>
        </div>
        <form action="/vi/newsletter-subscription/add">
            <input name="_email" id="txtNewsletterEmail" placeholder="Email..." type="text">
            <button onclick="return registerNewsletter();">send</button>
        </form>
        <script type="text/javascript" language="javascript">
            function registerNewsletter()
            {
                var strAlert = "";
                strAlert = strAlert + VKCheckRequireFieldNull(document.getElementById("txtNewsletterEmail"), "Vui lòng nhập email của bạn!\n");
                strAlert = strAlert + VKCheckEmailNull(document.getElementById("txtNewsletterEmail"), "Email của bạn không đúng. Vui lòng nhập lại!\n");
                if(strAlert != "")
                {
                    alert(strAlert);
                    return false;
                }
                else
                {
                    return true;
                }
            }
        </script>
    </div>
</div>
<div id="right">
    <div class="ad box">
        <a rel="nofollow" title="CallCenter  2013-2014" target="_blank" href="http://www.careerlink.vn/vi/ad/37/jump">
            <img src="<?php echo Yii::app()->theme->baseUrl?>/assets/index_files/b1693370772f7bb73d7e04c86a5c51f3.gif" class="image" border="0" height="157" width="300"><br>
        </a>
    </div>
    <div class="ad box">
        <a rel="nofollow" title="vieclam.fpt.net" target="_blank" href="http://www.careerlink.vn/vi/ad/40/jump">
            <img src="<?php echo Yii::app()->theme->baseUrl?>/assets/index_files/a498f687256bccca04a4c6996acb4993.jpg" class="image" border="0" height="157" width="300"><br>
        </a>
    </div>

    <!--
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <ins class="adsbygoogle"
         style="display:inline-block;width:300px;height:250px"
         data-ad-client="ca-pub-9585493982249299"
         data-ad-slot="4629257625"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    -->

    <div class="box" id="lastestnews">
        <h4>Tin tức cập nhật</h4>
        <ul>
            <li>
                <a href="http://www.careerlink.vn/cam-nang-viec-lam/tu-van-nghe-nghiep/5-sai-lam-pho-bien-anh-huong-den-su-nghiep-cua-ban">
                    <img src="<?php echo Yii::app()->theme->baseUrl?>/assets/index_files/7b59317b5268907f036944199c31227b.png" height="79" width="113">
                </a>
                <div class="newscontent">
                    <h3>
                        <a href="http://www.careerlink.vn/cam-nang-viec-lam/tu-van-nghe-nghiep/5-sai-lam-pho-bien-anh-huong-den-su-nghiep-cua-ban">
                            5 sai lầm phổ biến ảnh hưởng đến sự nghiệp của bạn
                        </a>
                    </h3>
                    <p>Có bao giờ bạn cảm thấy mình đang làm việc tốt, nhưng lại kh..</p>
                </div>
            </li>
            <li>
                <a href="http://www.careerlink.vn/cam-nang-viec-lam/goc-ky-nang/ki-nang-lam-viec-thiet-yeu-ban-khong-duoc-day-truong-dai-hoc">
                    <img src="<?php echo Yii::app()->theme->baseUrl?>/assets/index_files/ec51b7b8827ca8dd397f1085832a08ec.png" height="79" width="113">
                </a>
                <div class="newscontent">
                    <h3>
                        <a href="http://www.careerlink.vn/cam-nang-viec-lam/goc-ky-nang/ki-nang-lam-viec-thiet-yeu-ban-khong-duoc-day-truong-dai-hoc">
                            4 kĩ năng làm việc thiết yếu bạn không được dạy trong trường đại học
                        </a>
                    </h3>
                    <p>Bạn có thể được học rất nhiều tại trường đại học, nhưng bạn ..</p>
                </div>
            </li>
            <li>
                <a href="http://www.careerlink.vn/cam-nang-viec-lam/tu-van-nghe-nghiep/cai-thien-ke-hoach-phat-trien-su-nghiep-cua-ban">
                    <img src="<?php echo Yii::app()->theme->baseUrl?>/assets/index_files/690f42bdb17faebb1983760e27f46a22.png" height="79" width="113">
                </a>
                <div class="newscontent">
                    <h3>
                        <a href="http://www.careerlink.vn/cam-nang-viec-lam/tu-van-nghe-nghiep/cai-thien-ke-hoach-phat-trien-su-nghiep-cua-ban">
                            5 bước để cải thiện kế hoạch phát triển sự nghiệp của bạn
                        </a>
                    </h3>
                    <p>Bạn đã có kế hoạch phát triển sự nghiệp cho công việc hiện t..</p>
                </div>
            </li>
        </ul>
        <a class="readmore" href="http://www.careerlink.vn/cam-nang-viec-lam">Xem tất cả</a>
    </div>
</div>
</div>
<div id="doitac">
    <div class="container">
        <ul class="clearfix">
            <li style="background: url(&quot;/image/56b4812f3cc42c2b7dcfff56d686f04a?w=68&amp;h=42&amp;type=bw&quot;) repeat scroll 0% 0% transparent;">
                <a href="http://www.careerlink.vn/viec-lam-cua/sansei-vietnam-ltd.-co/52716" title="Sansei Vietnam Ltd.,Co">
                    <img alt="Sansei Vietnam Ltd.,Co" src="<?php echo Yii::app()->theme->baseUrl?>/assets/index_files/56b4812f3cc42c2b7dcfff56d686f04a.png" height="42" width="68">
                </a>
            </li>
            <li style="background: url(&quot;/image/9effa6163f3ea749e939e42c5c461ce3?w=68&amp;h=42&amp;type=bw&quot;) repeat scroll 0% 0% transparent;">
                <a href="http://www.careerlink.vn/viec-lam-cua/fe-credit-vpbank-consumer-finance/19032" title="FE Credit - VPBank Consumer Finance">
                    <img alt="FE Credit - VPBank Consumer Finance" src="<?php echo Yii::app()->theme->baseUrl?>/assets/index_files/9effa6163f3ea749e939e42c5c461ce3.png" height="42" width="68">
                </a>
            </li>
            <li style="background: url(&quot;/image/47aaa5134adca443f912b67081a19718?w=68&amp;h=42&amp;type=bw&quot;) repeat scroll 0% 0% transparent;">
                <a href="http://www.careerlink.vn/viec-lam-cua/lg-electronics-vietnam/31778" title="LG ELECTRONICS VIETNAM">
                    <img alt="LG ELECTRONICS VIETNAM" src="<?php echo Yii::app()->theme->baseUrl?>/assets/index_files/47aaa5134adca443f912b67081a19718_002.png" height="42" width="68">
                </a>
            </li>
            <li style="background: url(&quot;/image/79148da0121a0cba76ce35795d456153?w=68&amp;h=42&amp;type=bw&quot;) repeat scroll 0% 0% transparent;">
                <a href="http://www.careerlink.vn/viec-lam-cua/panelplace-home-of-paid-survey/86112" title="PanelPlace - Home of Paid Survey">
                    <img alt="PanelPlace - Home of Paid Survey" src="<?php echo Yii::app()->theme->baseUrl?>/assets/index_files/79148da0121a0cba76ce35795d456153_002.png" height="42" width="68">
                </a>
            </li>
            <li style="background: url(&quot;/image/dbb04e401b545c06281655e429424f90?w=68&amp;h=42&amp;type=bw&quot;) repeat scroll 0% 0% transparent;">
                <a href="http://www.careerlink.vn/viec-lam-cua/pqc-hospitality/86079" title="PQC Hospitality">
                    <img alt="PQC Hospitality" src="<?php echo Yii::app()->theme->baseUrl?>/assets/index_files/dbb04e401b545c06281655e429424f90.png" height="42" width="68">
                </a>
            </li>
            <li style="background: url(&quot;/image/460ee5b2e620a5834d05e7170d77db73?w=68&amp;h=42&amp;type=bw&quot;) repeat scroll 0% 0% transparent;">
                <a href="http://www.careerlink.vn/viec-lam-cua/tap-doan-tan-hiep-phat/29833" title="Tập Đoàn Tân Hiệp Phát">
                    <img alt="Tập Đoàn Tân Hiệp Phát" src="<?php echo Yii::app()->theme->baseUrl?>/assets/index_files/460ee5b2e620a5834d05e7170d77db73.png" height="42" width="68">
                </a>
            </li>
            <li style="background: url(&quot;/image/b07f7a706846ee033bf491991a8f32a7?w=68&amp;h=42&amp;type=bw&quot;) repeat scroll 0% 0% transparent;">
                <a href="http://www.careerlink.vn/viec-lam-cua/huuhoanh-holdings/74781" title="HuuHoanh Holdings">
                    <img alt="HuuHoanh Holdings" src="<?php echo Yii::app()->theme->baseUrl?>/assets/index_files/b07f7a706846ee033bf491991a8f32a7_002.png" height="42" width="68">
                </a>
            </li>
            <li style="background: url(&quot;/image/f3cb2e9a22dad4112e24f660cc0ee548?w=68&amp;h=42&amp;type=bw&quot;) repeat scroll 0% 0% transparent;">
                <a href="http://www.careerlink.vn/viec-lam-cua/coca-cola-viet-nam/74600" title="Coca-Cola Viet Nam">
                    <img alt="Coca-Cola Viet Nam" src="<?php echo Yii::app()->theme->baseUrl?>/assets/index_files/f3cb2e9a22dad4112e24f660cc0ee548_002.png" height="42" width="68">
                </a>
            </li>
            <li style="background: url(&quot;/image/123071c0f4cab6ea95d54f5555d6852e?w=68&amp;h=42&amp;type=bw&quot;) repeat scroll 0% 0% transparent;">
                <a href="http://www.careerlink.vn/viec-lam-cua/cong-ty-tnhh-cung-mua/39768" title="CÔNG TY TNHH CUNG MUA">
                    <img alt="CÔNG TY TNHH CUNG MUA" src="<?php echo Yii::app()->theme->baseUrl?>/assets/index_files/123071c0f4cab6ea95d54f5555d6852e.png" height="42" width="68">
                </a>
            </li>
            <li style="background: url(&quot;/image/45a37cfe1bdfc0a1f2e0f0699dac128f?w=68&amp;h=42&amp;type=bw&quot;) repeat scroll 0% 0% transparent;">
                <a href="http://www.careerlink.vn/viec-lam-cua/cong-ty-co-phan-tap-doan-dong-thien-phu/61615" title="Công Ty Cổ Phần Tập Đoàn Đông Thiên Phú">
                    <img alt="Công Ty Cổ Phần Tập Đoàn Đông Thiên Phú" src="<?php echo Yii::app()->theme->baseUrl?>/assets/index_files/45a37cfe1bdfc0a1f2e0f0699dac128f_002.png" height="42" width="68">
                </a>
            </li>
            <li style="background: url(&quot;/image/fb53ed53668856ec10a781dbecaa607a?w=68&amp;h=42&amp;type=bw&quot;) repeat scroll 0% 0% transparent;">
                <a href="http://www.careerlink.vn/viec-lam-cua/cong-ty-co-phan-thoi-trang-viet-ninomaxx-n-m-maxxstyle/66874" title="Công Ty Cổ Phần Thời Trang Việt (NinoMaxx - N&amp;M - Maxxstyle)">
                    <img alt="Công Ty Cổ Phần Thời Trang Việt (NinoMaxx - N&amp;M - Maxxstyle)" src="<?php echo Yii::app()->theme->baseUrl?>/assets/index_files/fb53ed53668856ec10a781dbecaa607a_002.png" height="42" width="68">
                </a>
            </li>
            <li style="background: url(&quot;/image/1f50ad7c1b8b3e7e8aff16ae1cf8b169?w=68&amp;h=42&amp;type=bw&quot;) repeat scroll 0% 0% transparent;">
                <a href="http://www.careerlink.vn/viec-lam-cua/cong-ty-tnhh-cao-phong-sieu-thi-dien-may-noi-that-cho-lon/71355" title="Công Ty TNHH Cao Phong - (Siêu Thị Điện Máy - Nội Thất Chợ Lớn)">
                    <img alt="Công Ty TNHH Cao Phong - (Siêu Thị Điện Máy - Nội Thất Chợ Lớn)" src="<?php echo Yii::app()->theme->baseUrl?>/assets/index_files/1f50ad7c1b8b3e7e8aff16ae1cf8b169_002.png" height="42" width="68">
                </a>
            </li>
        </ul>
    </div>

</div>
</div>