<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/join.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script defer src="../js/join.js"></script>
    <script src="../js/jquery-3.6.1.min.js"></script>
    <script src="../js/header.js"></script>
    <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>


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
                <li class="sub_icon_3"><a href="../order/basket.php">장바구니</a></li>
            </ul>
        </div>

        <div class="sub_menu_box">
            <ul class="sub_menu_box_1">
                <li class="site_map1"><a href="join.php">회원가입</a></li>
                <li class="site_map2"><a href="../login/login.php">로그인</a></li>
                <li><a href="../notice/notice.php">고객센터</a></li>
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

    

  <!-- join_form -->
<div class="join_box">

    <h2>회원가입</h2>

    <form class="join_form" name="join_form" action="insert.php" method="post" onsubmit="return form_check()">

      <div class="id_box">
        <label for="u_id">아이디<span class="identify">*</span></label>
        <input type="text" name="u_id" id="u_id" placeholder="아이디를 입력해주세요" readonly>
        <button type="button" onclick="id_search()">중복 확인</button>
      </div>
      <div class="id_sub_box">
        <span class="dsp_txt">* 아이디는 4~12글자만 입력할 수 있습니다.</span>
        <br><span class="err_txt" id="err_id"></span>
      </div>

      <div class="pwd_box">
        <label for="pwd" class="left_box">비밀번호<span class="identify">*</span></label>
        <input type="text" name="pwd" id="pwd" placeholder="비밀번호를 입력해주세요">
      </div>
      <div class="pwd_sub_box">
        <span class="dsp_txt">* 비밀번호는 4~8글자만 입력할 수 있습니다.</span>
        <br><span class="err_txt" id="err_pwd"></span>
      </div>


      <div class="repwd_box">
        <label for="repwd" class="left_box">비밀번호 확인<span class="identify">*</span></label>
        <input type="text" name="repwd" id="repwd" placeholder="비밀번호를 입력해주세요">
      </div>
      <div class="repwd_sub_box">
        <span class="err_txt" id="err_repwd"></span>
      </div>

      <div class="name_box">
        <label for="u_name" class="left_box">이름<span class="identify">*</span></label>
        <input type="text" name="u_name" id="u_name" placeholder="이름을 입력해주세요">
      </div>
      <div class="name_sub_box">
        <span class="err_txt" id="err_name"></span>
      </div>

      <div class="email_box">
        <label for="email" class="left_box">이메일<span class="identify">*</span></label>
        <input type="text" name="email" id="email" placeholder="예 : acemall@ace.com">
      </div>
      <div class="email_sub_box">
        <span class="err_txt" id="err_email"></span>
      </div>


      <div class="mobile_box">
        <label for="mobile" class="left_box">휴대폰<span class="identify">*</span></label>
        <input type="text" name="mobile" id="mobile" placeholder="숫자만 입력해주세요">
      </div>
      <div class="pwd_sub_box">
        <span class="dsp_txt">* "-" 없이 숫자만 입력</span>
        <br><span class="err_txt" id="err_mobile"></span>
      </div>


      <div class="address_box">
        <div class="address_box1">
          <label for="ps_code">우편번호<span class="identify">*</span></label>
          <input type="text" name="ps_code" id="ps_code" readonly>
          <button type="button" onclick="findAddr()">주소검색</button>
        </div>
        <div class="address_box2">
          <label for="addr_b">기본주소</label>
          <input type="text" name="addr_b" id="addr_b" readonly>
        </div>
        <div class="address_box3">
          <label for="addr_d">상세주소</label>
          <input type="text" name="addr_d" id="addr_d">
        </div>
        <div class="address_sub_box">
          <span class="err_txt" id="err_ps_code"></span>
        </div>
      </div>


      <div class="gender_box">
        <div class="left_box">
          성별
        </div>
        <div class="gender_sub_box">
          <div>
            <input type="radio" name="gender" id="male" value="m">
            <label for="male">남</label>
          </div>

          <div>
            <input type="radio" name="gender" id="female" value="f">
            <label for="female">여</label>
          </div>

          <div>
            <input type="radio" name="gender" id="no" value="n">
            <label for="no">선택안함</label>
          </div>
        </div>
      </div>

      <div class="birth_box">
        <label for="birth" class="left_box">생년월일</label>
        <input type="text" name="birth" id="birth" placeholder="YYYYMMDD" maxlength="8">
      </div>
      <div class="birth_sub_box">
        <span class="dsp_txt">ex)20221031</span>
      </div>



      <div class="apply_margin_box">
        <div class="apply_box apply_box1">
          <label for="selectall"><input type='checkbox' name='selectall' id="selectall" value='selectall'
              onclick='selectAll(this)'>
            <i class="apply_icon"></i>전체 동의합니다.</label>
        </div>
        <div class="selectall_sub_box">
          <span class="err_txt" id="err_selectall"></span>
        </div>
      </div>

      <div class="apply_box apply_box2">
        <label for="apply_1">
          <input type='checkbox' name='apply' id="apply_1" value='apply_1' onclick='checkSelectAll()'>
          <i class="apply_icon"></i>이용약관 동의<span class="apply_text">(필수)</span>
        </label>
        <div>
          <a href="javascript:void(0);">
            약관보기
          </a>
          <span class="more_icons"></span>
        </div>
      </div>

      <div class="apply_box apply_box2">
        <label for="apply_2">
          <input type='checkbox' name='apply' id="apply_2" value='apply_2' onclick='checkSelectAll()'>
          <i class="apply_icon"></i>개인정보 수집·이용 동의<span class="apply_text">(필수)</span>
        </label>
        <div>
          <a href="javascript:void(0);">
            약관보기
          </a>
          <span class="more_icons"></span>
        </div>
      </div>

      <div class="apply_box apply_box3 apply_box2">
        <label for="apply_3">
          <input type='checkbox' name='apply' id="apply_3" value='apply_3' onclick='checkSelectAll()'>
          <i class="apply_icon"></i>본인은 만 14세 이상입니다.<span class="apply_text">(필수)</span>
        </label>
        <div>
          <a href="javascript:void(0);">
            약관보기
          </a>
          <span class="more_icons"></span>
        </div>
      </div>


    <div class="join_submit_box">
      <button type="submit">가입하기</button>
    </div>
  </form>
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