<?php
// 세션으로 데이터 가져오기
include "../inc/session.php";

//로그인 사용자만 접근
include "../inc/user_check.php";

//DB 연결
include "../inc/dbcon.php";

//쿼리 작성
$sql = "select * from members where idx=$s_idx;";
// echo $sql;
// exit;
//idx 값을 가져옴

//쿼리 실행
$result = mysqli_query($dbcon, $sql);

//DB에서 데이터 가져오기
$array = mysqli_fetch_array($result);
// echo $array["u_name"];
// exit;
?>

<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>주문서</title>
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/order_list.css">
  <link rel="stylesheet" href="../css/footer.css">
  <script src="../js/jquery-3.6.1.min.js"></script>
  <script defer src="../js/header.js"></script>
  <script defter src="../js/order_list.js"></script>
</head>

<body>
  <header id="header" class="header">
    <div class="header_box">
        <h1 class="logo"><a href="../index.php">ACE</a></h1>


        <div class="search_box">
                <form name="" action="" method="" >
                    <fieldset class="search_box_1">
                            <legend>검색</legend>
                            <label for="sch_txt">입력</label>
                            <input type="text" nmae="sch_txt" id="sch_txt" placeholder="검색어를 입력해주세요.">
                            <button class="submit_icon" type="submit">검색</button>
                    </fieldset>
                </form>
            </div>

        <div class="header_sub_icon">
            <ul>
                <li class="sub_icon_1"><a href="javascript:void(0)">배송지 변경</a></li>
                <li class="sub_icon_2"><a href="javascript:void(0)">찜목록</a></li>
                <li class="sub_icon_3"><a href="basket.php">장바구니</a></li>
            </ul>
        </div>

        <div class="sub_menu_box">
            <ul class="sub_menu_box_1">
                <?php if(!$s_idx){ ?> 
                        <li class="site_map1"><a href="../members/join.php">회원가입</a></li>
                        <li class="site_map2"><a href="../login/login.php">로그인</a></li>
                        <li><a href="../notice/notice.php">고객센터</a></li>
                        <?php } else{ ?>
                        <li class="site_map1"><a href="../members/member_info.php"><?php echo $s_name; ?>님, 환영합니다</a></li>
                        <li class="site_map2"><a href="../login/logout.php">로그아웃</a></li>
                        <li><a href="../notice/notice.php">고객센터</a></li>  
                <?php }; ?> 
            </ul>
        </div>
    </div>





        <nav class="gnb_box">
            <div class="gnb">
                <div class="gnb_box1">
                    <div class="category_box">
                        <div><a class="category_icon" href="javascript:void(0);"></a></div>
                        <div class="category_text"><a href="javascript:void(0);">카테고리</a>
                            <ul class="category_2box">
                                <li class="category_2box_1"><a href="javascript:void(0);">채소</a>
                                    <ul class="category_sub_1">
                                        <li><a href="javascript:void(0);">친환경</a></li>
                                        <li><a href="javascript:void(0);">고구마·감자·당근</a></li>
                                        <li><a href="javascript:void(0);">시금치·쌈채소·나물</a></li>
                                        <li><a href="javascript:void(0);">브로콜리·파프리카·양배추</a></li>
                                        <li><a href="javascript:void(0);">양파·대파·마늘·배추</a></li>
                                        <li><a href="javascript:void(0);">오이·호박·고추</a></li>
                                        <li><a href="javascript:void(0);">냉동·이색·간편채소</a></li>
                                        <li><a href="javascript:void(0);">콩나물·버섯</a></li>
                                    </ul>
                                </li>
                                <li><a href="">과일·견과·쌀</a>
                                    <ul class="category_sub_2">
                                        <li><a href="javascript:void(0);">친환경</a></li>
                                        <li><a href="javascript:void(0);">제철과일</a></li>
                                        <li><a href="javascript:void(0);">국산과일</a></li>
                                        <li><a href="javascript:void(0);">수입과일</a></li>
                                        <li><a href="javascript:void(0);">간편과일</a></li>
                                        <li><a href="javascript:void(0);">냉동·건과일</a></li>
                                        <li><a href="javascript:void(0);">견과류</a></li>
                                        <li><a href="javascript:void(0);">쌀·잡곡</a></li>
                                    </ul>
                                </li>

                                <li><a href="">수산·해산·건어물</a>
                                    <ul class="category_sub_3">
                                        <li><a href="javascript:void(0);">제철수산</a></li>
                                        <li><a href="javascript:void(0);">생선류</a></li>
                                        <li><a href="javascript:void(0);">굴비·반건류</a></li>
                                        <li><a href="javascript:void(0);">오징어·낙지·문어</a></li>
                                        <li><a href="javascript:void(0);">새우·게·랍스터</a></li>
                                        <li><a href="javascript:void(0);">해산물·조개류</a></li>
                                        <li><a href="javascript:void(0);">사순가공품</a></li>
                                        <li><a href="javascript:void(0);">김·미역·해조류</a></li>
                                        <li><a href="javascript:void(0);">건어물·다시팩</a></li>
                                    </ul>
                                </li>

                                <li><a href="javascript:void(0);">정육·계란</a>
                                    <ul class="category_sub_4">
                                        <li><a href="javascript:void(0);">국내산 소고기</a></li>
                                        <li><a href="javascript:void(0);">수입산 소고기</a></li>
                                        <li><a href="javascript:void(0);">돼지고기</a></li>
                                        <li><a href="javascript:void(0);">계란류</a></li>
                                        <li><a href="javascript:void(0);">닭·오리고기</a></li>
                                        <li><a href="javascript:void(0);">양념육·돈까스</a></li>
                                        <li><a href="javascript:void(0);">양고기</a></li>
                                    </ul>
                                </li>

                                <li><a href="javascript:void(0);">국·반찬·메인요리</a>
                                    <ul class="category_sub_5">
                                        <li><a href="javascript:void(0);">국·탕·찌개</a></li>
                                        <li><a href="javascript:void(0);">밀키트·메인요리</a></li>
                                        <li><a href="javascript:void(0);">밑반찬</a></li>
                                        <li><a href="javascript:void(0);">김치·젓갈·장류</a></li>
                                        <li><a href="javascript:void(0);">두부·어묵·부침개</a></li>
                                        <li><a href="javascript:void(0);">베이컨·햄·통조림</a></li>
                                    </ul>
                                </li>

                                <li><a href="javascript:void(0);">샐러드·간편식</a>
                                    <ul class="category_sub_6">
                                        <li><a href="javascript:void(0);">샐러드·닭가슴살</a></li>
                                        <li><a href="javascript:void(0);">도시락·밥류</a></li>
                                        <li><a href="javascript:void(0);">파스타·면류</a></li>
                                        <li><a href="javascript:void(0);">떡볶이·튀김·순대</a></li>
                                        <li><a href="javascript:void(0);">피자·핫도그·만두</a></li>
                                        <li><a href="javascript:void(0);">폭립·떡갈비·안주</a></li>
                                        <li><a href="javascript:void(0);">죽·스프·카레</a></li>
                                        <li><a href="javascript:void(0);">선식·시리얼</a></li>
                                    </ul>
                                </li>

                                <li><a href="javascript:void(0);">면·양념·오일</a>
                                    <ul class="category_sub_7">
                                        <li><a href="javascript:void(0);">파스타·면류</a></li>
                                        <li><a href="javascript:void(0);">식초·소스·드레싱</a></li>
                                        <li><a href="javascript:void(0);">양념·액젓·잘유</a></li>
                                        <li><a href="javascript:void(0);">식용유·참기름·오일</a></li>
                                        <li><a href="javascript:void(0);">소금·설탕·향신료</a></li>
                                        <li><a href="javascript:void(0);">밀가루·가루·믹스</a></li>
                                    </ul>
                                </li>

                                <li><a href="javascript:void(0);">생수·음료·우유·커피</a>
                                    <ul class="category_sub_8">
                                        <li><a href="javascript:void(0);">생수·탄산수</a></li>
                                        <li><a href="javascript:void(0);">음료·주스</a></li>
                                        <li><a href="javascript:void(0);">우유·두유·요거트</a></li>
                                        <li><a href="javascript:void(0);">커피</a></li>
                                        <li><a href="javascript:void(0);">차</a></li>
                                    </ul>
                                </li>

                                <li><a href="javascript:void(0);">간식·과자·떡</a>
                                    <ul class="category_sub_9">
                                        <li><a href="javascript:void(0);">과자·스낵·쿠키</a></li>
                                        <li><a href="javascript:void(0);">초콜릿·젤리·캔디</a></li>
                                        <li><a href="javascript:void(0);">떡·한과</a></li>
                                        <li><a href="javascript:void(0);">아이스크림</a></li>
                                    </ul>
                                </li>

                                <li><a href="javascript:void(0);">베이커리·치즈·델리</a>
                                    <ul class="category_sub_10">
                                        <li><a href="javascript:void(0);">식빵·빵류</a></li>
                                        <li><a href="javascript:void(0);">잼·버터·스프레드</a></li>
                                        <li><a href="javascript:void(0);">케이크·파이·디저트</a></li>
                                        <li><a href="javascript:void(0);">치즈</a></li>
                                        <li><a href="javascript:void(0);">델리</a></li>
                                        <li><a href="javascript:void(0);">올리브·피클</a></li>
                                    </ul>
                                </li>

                                <li><a href="javascript:void(0);">건강식품</a>
                                    <ul class="category_sub_11">
                                        <li><a href="javascript:void(0);">영양제</a></li>
                                        <li><a href="javascript:void(0);">유산균</a></li>
                                        <li><a href="javascript:void(0);">홍삼·인삼·꿀</a></li>
                                        <li><a href="javascript:void(0);">건강즙·건강음료</a></li>
                                        <li><a href="javascript:void(0);">건강분말·건강환</a></li>
                                        <li><a href="javascript:void(0);">다이어트·이너뷰티</a></li>
                                        <li><a href="javascript:void(0);">유아동</a></li>
                                    </ul>
                                </li>

                                <li><a href="javascript:void(0);">생활용품·리빙·캠핑</a>
                                    <ul class="category_sub_12">
                                        <li><a href="javascript:void(0);">휴지·티슈</a></li>
                                        <li><a href="javascript:void(0);">여성·위생용품</a></li>
                                        <li><a href="javascript:void(0);">세제·청소용품</a></li>
                                        <li><a href="javascript:void(0);">화훼·인테리어소품</a></li>
                                        <li><a href="javascript:void(0);">의약외품·마스크</a></li>
                                        <li><a href="javascript:void(0);">생활잡화·문구</a></li>
                                        <li><a href="javascript:void(0);">캠핌용품</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <ul class="gnb_box2">
                    <li class="gnb_box2_1"><a href="../index.php">신상품</a></li>
                    <li class="gnb_box2_2"><a href="../index.php">베스트</a></li>
                    <li class="gnb_box2_3"><a href="../index.php">알뜰쇼핑</a></li>
                    <li class="gnb_box2_4"><a href="../index.php">특가/혜택</a></li>
                </ul>
                <div class="gnb_box3">
                    <div class="gnb_box3_1"><a href="javascript:void(0);"><span>샛별 · 낮</span> 배송안내</a></div>
                </div>
            </div>
        </nav>
</header>





  <!-- order_list box -->


  <div class="order_list">

    <h2 class="order_list_h2">주문서</h2>

    <div class="order_product">
      <h3>주문 상품</h3>
      <dl class="order_product_box_1">
        <dt class="order_product_box_2"><span></span>청송 사과 3kg (7~9입)</dt>
        <dd class="order_product_box_3">2개</dd>
        <div class="order_product_sub_1">
          <dd class="order_product_box_4">25,760원</dd>
          <dd class="order_product_box_5">36,800원</dd>
        </div>
      </dl>




      <dl class="order_product_2box_1">
        <dt class="order_product_2box_2"><span></span>모나카 아이스크림 2종</dt>
        <dd class="order_product_2box_3">1개</dd>
        <div class="order_product_sub_2">
          <dd class="order_product_2box_4">10,430원</dd>
          <dd class="order_product_2box_5">14,900원</dd>
        </div>
      </dl>
    </div>


    <div class="user_info">
      <h3>주문자 정보</h3>

      <dl class="user_info_box">
        <dt class="user_info_box_1">보내는 분</dt>
        <dd>전찬혁</dd>
      </dl>

      <dl class="user_info_2box">
        <dt class="user_info_2box_1">휴대폰</dt>
        <dd>010-1234-4321</dd>
      </dl>

      <dl class="user_info_3box">
        <dt class="user_info_3box_1">이메일</dt>
        <dd>acemall@naver.com</dd>
        <dd class="user_info_3box_sub">이메일을 통해 주문처리과정을 보내드립니다.<br>
          정보 변경은 마이컬리>개인정보 수정 메뉴에서 가능합니다.</dd>
      </dl>
    </div>


    <div class="shipping_info">
      <h3>배송 정보</h3>

      <dl class="shipping_info_box">
        <dt class="shipping_info_box_1">배송지</dt>
        <dd class="shipping_btn">기본배송지</dd>
        <dd class="shipping_info_box_2">경기도 안산시 상록구 도매시장로24 (이동)</dd>
      </dl>

      <dl class="shipping_info_2box">
        <dt class="shipping_info_2box_1">상세정보</dt>
        <dd class="shipping_info_2box_2">전찬혁, 010-1234-4321</dd>
        <div class="shipping_2box_sub">
          <dd class="shipping_info_2box_3">문앞</dd>
          <dd class="shipping_info_2box_4">자유출입가능</dd>
        </div>
        <div class="shipping_2box_2sub">
          <dd class="shipping_info_2box_5">배송완료 메세지</dd>
          <dd class="shipping_info_2box_6">배송직후</dd>
        </div>
        <dd><button><a href="javascript:void(0);">수정</a></button></dd>
      </dl>
    </div>


    <div class="coupon">
      <h3>쿠폰 / 적립금</h3>

      <dl class="coupon_box">
        <dt>쿠폰 적용</dt>
        <dd>
          <form action="">
            <select class="coupon_select" name="" id="" size="1">
              <option class="coupon_select_color" value="">사용가능 쿠폰 0장 / 전체쿠폰 0장</option>
              <option value="">사용가능한 쿠폰이 없습니다.</option>
            </select>
          </form>
        </dd>
        <div class="coupon_side_box">
          <dd class="coupon_side_box1">[이벤트] 상품 구매시 쿠폰 사용 불가</dd>
          <dd class="coupon_side_box2"><a href="javascript:void(0);">쿠폰 사용 문의 (카카오톡) ></a></dd>
        </div>
      </dl>

      <dl class="coupon_2box">
        <dt>적립금 사용</dt>
        <div class="coupon_2box_side">
          <dd class="coupon_2box_1">0</dd>
          <dd>
            <button class="coupon_2box_2" type="button">모두사용</button>
          </dd>
        </div>
        <dd class="coupon_2box_3">사용가능 적립금 0원</dd>
        <dd class="coupon_2box_4">[이벤트]상품 구매시 적립금 사용 불가</dd>
        <dd class="coupon_2box_5">적립금 내역:에이스몰>적립금</dd>
      </dl>

      <div class="payment_check_box">
        <h3>결제금액</h3>

        <dl class="payment_check_box1">
          <dt>주문금액</dt>
          <dd>36,190원</dd>
        </dl>

        <dl class="payment_check_box2">
          <dt>상품금액</dt>
          <dd>51,700원</dd>
        </dl>

        <dl class="payment_check_box3">
          <dt>상품할인금액</dt>
          <dd>-15,510원</dd>
        </dl>

        <dl class="payment_check_box4">
          <dt>배송비</dt>
          <dd>0원</dd>
        </dl>


        <dl class="payment_check_box5">
          <dt>쿠폰할인</dt>
          <dd>0원</dd>
        </dl>


        <dl class="payment_check_box6">
          <dt>적립금사용</dt>
          <dd>0원</dd>
        </dl>


        <dl class="payment_check_box7">
          <dt>최종결제금액</dt>
          <dd>36,190원</dd>
        </dl>

        <ul class="basket_paybox_2_5">
          <li class="basket_paybox_2_5_1">적립</li>
          <li class="basket_paybox_2_5_2">최대 1,445원 적립</li>
          <li class="basket_paybox_2_5_3">(5%)</li>
        </ul>
      </div>


    </div>




    <div class="payment_method">
      <h3>결제 수단</h3>

      <dl class="payment_method_box">
        <dt>결제수단 선택</dt>
        <dd><a class="payment_kakao_icon" href="javascript:void(0);">카카오페이</a></dd>
        <dd class="payment_btn">
          <button class="payment_btn1" type="button"><a href="javascript:void(0);">신용카드</a></button>
          <button class="payment_btn2" type="button"><a href="javascript:void(0);">간편 결제</a></button>
          <button class="payment_btn3" type="button"><a href="javascript:void(0);">휴대폰</a></button>
        </dd>
      </dl>
    </div>



    <div class="order_list_check_box">
      <h3>개인정보 수집/제공</h3>
      <div class="apply_margin_box">
        <div class="apply_box apply_box1">
          <label for="selectall"><input type='checkbox' name='selectall' id="selectall" value='selectall'
              onclick='selectAll(this)'>
            <i class="apply_icon"></i>결제 진행 필수 전체 동의</label>
        </div>
        <div class="selectall_sub_box">
          <span class="err_txt" id="err_selectall"></span>
        </div>
      </div>

      <div class="apply_box apply_box2">
        <label for="apply_1">
          <input type='checkbox' name='apply' id="apply_1" value='apply_1' onclick='checkSelectAll()'>
          <i class="apply_icon"></i>개인정보 수집·이용 및 처리 동의<span class="apply_text">(필수)</span>
        </label>
      </div>

      <div class="apply_box apply_box2">
        <label for="apply_2">
          <input type='checkbox' name='apply' id="apply_2" value='apply_2' onclick='checkSelectAll()'>
          <i class="apply_icon"></i>개인정보 제3자 제공 동의<span class="apply_text">(필수)</span>
        </label>
      </div>

      <div class="apply_box apply_box3 apply_box2">
        <label for="apply_3">
          <input type='checkbox' name='apply' id="apply_3" value='apply_3' onclick='checkSelectAll()'>
          <i class="apply_icon"></i>전자지급 결제대행서비스 이용약관 동의<span class="apply_text">(필수)</span>
        </label>
      </div>
    </div>


    <div class="payment_box">
      <form name="order_list_form" action="order.php" method="get" onsubmit="return form_check()">
        <button type="submit">36,190원 결제하기</button>
      </form>

      <ul>
        <li>[주문완료] 상태일 경우에만 주문 취소 가능합니다.</li>
        <li>미성년자가 결제 시 법정대리인이 그 거래를 취소할 수 있습니다.</li>
        <li>상품 미배송 시, 결제수단으로 환불됩니다.</li>
        <li>카카오페이, 차이, 토스, 네이버페이, 페이코 결제 시, 결제하신 수단으로만 환불됩니다.</li>
      </ul>
    </div>
  </div>


<!-- footer -->

<footer>
  <div class="footer_box">

      <div class="left_box">
          <h2>고객행복센터</h2>

          <div class="cs_box1">
              <span class="cs_number">1644-1107</span>
              <span class="cs_time">월~토요일 오전7시 - 오후6시</span>
          </div>

          <div class="cs_kakao">
              <div class="k_qa"><a href="javascript:void(0);">카카오톡 문의</a></div>
              <div>
                  <div class="k_wrap1">
                      <span class="k_day_1">월~토요일</span>
                      <span>오전7시-오후6시</span>
                  </div>
                  <div class="k_wrap2">
                      <span class="k_day_2">일/공휴일</span>
                      <span>오전7시-오후6시</span>
                  </div>
              </div>
          </div>

          <div class="cs_box2">
              <div class="cs_title"><a href="javascript:void(0);">1:1 문의</a></div>
              <div>
                  <div class="cs_day">
                      365일
                  </div>
                  <div class="cs_info">
                      고객센터 운영시간에 순차적으로 답변드리겠습니다.
                  </div>
              </div>
          </div>


          <div class="cs_box3">
              <div class="cs_title"><a href="javascript:void(0);">대량주문 문의</a></div>
              <div>
                  <div class="cs_inner_1">
                      <span class="cs_day_1">월~금요일</span>
                      <span>오전9시-오후6시</span>
                  </div>
                  <div class="cs_inner_2">
                      <span class="cs_day_2">점시시간</span>
                      <span>낮12시-오후1시</span>
                  </div>
              </div>
          </div>


          <div class="non_mem">비회원 문의 : acemall@naver.com</div>
          <div class="non_mem_order">비회원 대량주문 문의 : acemall@naver.com</div>
      </div>



      <div class="right_box">
          <ul class="menu_inner">
              <li><a href="javascript:void(0);">컬리소개</a></li>
              <li><a href="javascript:void(0);">컬리소개영상</a></li>
              <li><a href="javascript:void(0);">인재채용</a></li>
              <li><a href="javascript:void(0);">이용약관</a></li>
              <li class="menu_bold"><a href="javascript:void(0);">개인정보처리방침</a></li>
              <li><a href="javascript:void(0);">이용안내</a></li>
          </ul>

          <div class="menu_inner_2">
              <div>
                  <span class="menu_title">법인명 (상호) :주식회사 컬리</span>
                  <span>사업자등록번호:261-81-23567 <a href="javascript:void(0);">사업자정보 확인</a></span>
              </div>
              <div>
                  <span class="menu_title">통신판매업 : 제2018-서울강남-01646호</span>
                  <span>개인정보보호책임자 : 전찬혁</span>
              </div>
              <div>
                  <span class="menu_title">주소 : 서울특별시 강남구 테헤란로 133, 18층(역삼동)</span>
                  <span>대표이사 : 전찬혁</span>
              </div>
              <div>
                  <span class="menu_title">입점문의 : <a href="javascript:void(0);">입점문의하기</a></span>
                  <span>제휴문의 : <a href="javascript:void(0);">acemall@acemall.com</a></span>
              </div>
              <div>
                  <div>채용문의 : <a href="javascript:void(0);">acemall@acemall.com</a></div>
              </div>
              <div>
                  <span>팩스 : 070 - 7500 - 6098</span>
              </div>
          </div>

          <div class="footer_sns">
              <ul>
                  <li><a href="https://www.instagram.com"><img
                              src="https://res.kurly.com/pc/ico/1810/ico_instagram.png" alt="instagram"></a></li>
                  <li><a href="https://www.facebook.com"><img src="https://res.kurly.com/pc/ico/1810/ico_fb.png"
                              alt="facebook"></a></li>
                  <li><a href="https://section.blog.naver.com"><img
                              src="https://res.kurly.com/pc/ico/1810/ico_blog.png" alt="naverblog"></a></li>
                  <li><a href="https://m.post.naver.com/navigator.naver"><img
                              src="https://res.kurly.com/pc/ico/1810/ico_naverpost.png" alt="naverpost"></a></li>
                  <li><a href="https://www.youtube.com"><img
                              src="https://res.kurly.com/pc/ico/1810/ico_youtube.png" alt="youtube"></a></li>
              </ul>
          </div>

      </div>
  </div>

  <div class="footer_bottom">
      <div class="footer_bottom_inner">
          <p>에이스에서 판매되는 상품 중에는 에이스에 입점한 개별 판매자가 판매하는 에이스(오픈마켓) 상품이 포함되어 있습니다.</p>
          <p>에이스(오픈마켓) 상품의 경우 컬리는 통신판매중개자로서 통신판매의 당사자가 아닙니다. 에이스는 해당 상품의 주문, 품질, 교환/환불 등 의무와 책임을 부담하지 않습니다.</p>
          <p>© ACE CORP. ALL RIGHTS RESERVED</p>
      </div>
  </div>
</footer>
</body>

</html>