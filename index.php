<?php 
include "inc/session.php";

//DB연결
include "inc/dbcon.php";

//쿼리 작성
$sql = "select idx, u_name, u_id, pwd from members where u_id='$s_idx';";

//쿼리 전송
$result = mysqli_query($dbcon, $sql);

//DB가져오기
$array = mysqli_fetch_array($result);
?>


<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>에이스</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/footer.css">
    <script defer src="js/main.js"></script>
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/header.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

</head>

<body>
    <header id="header" class="header">
        <div class="header_box">
            <h1 class="logo"><a href="index.php">ACE</a></h1>


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
                    <li class="sub_icon_3"><a href="order/basket.php">장바구니</a></li>
                </ul>
            </div>

            <div class="sub_menu_box">
                <ul class="sub_menu_box_1">
                    <?php if(!$s_idx){ ?> 
                    <li class="site_map1"><a href="members/join.php">회원가입</a></li>
                    <li class="site_map2"><a href="login/login.php">로그인</a></li>
                    <li><a href="notice/notice.php">고객센터</a></li>
                    <?php } else{ ?>
                    <li class="site_map1"><a href="members/member_info.php"><?php echo $s_name; ?>님, 환영합니다</a></li>
                    <li class="site_map2"><a href="login/logout.php">로그아웃</a></li>
                    <li><a href="notice/notice.php">고객센터</a></li>  
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
                    <li class="gnb_box2_1"><a href="index.php">신상품</a></li>
                    <li class="gnb_box2_2"><a href="index.php">베스트</a></li>
                    <li class="gnb_box2_3"><a href="index.php">알뜰쇼핑</a></li>
                    <li class="gnb_box2_4"><a href="index.php">특가/혜택</a></li>
                </ul>
                <div class="gnb_box3">
                    <div class="gnb_box3_1"><a href="javascript:void(0);"><span>샛별 · 낮</span> 배송안내</a></div>
                </div>
            </div>
        </nav>
    </header>







    <main id="content" class="content">

        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="main_img_1"></div>
                </div>
                <div class="swiper-slide">
                    <div class="main_img_2"></div>
                </div>
                <div class="swiper-slide">
                    <div class="main_img_3"></div>
                </div>
                <div class="swiper-slide">
                    <div class="main_img_4"></div>
                </div>
                <div class="swiper-slide">
                    <div class="main_img_5"></div>
                </div>
            </div>
            <div class="swiper-button-next view_off"></div>
            <div class="swiper-button-prev view_off"></div>
            <div class="swiper-pagination"></div>
        </div>


        <!-- Swiper JS -->

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".mySwiper", {
                pagination: {
                    el: ".swiper-pagination",
                    type: "fraction",
                },
                autoplay: true,
                loop: true,   // 슬라이드 반복 여부
                loopAdditionalSlides: 1,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
        </script>


        <section class="best">
            <h2>지금 가장 인기있는 상품 :)</h2>
            <ul class="best_box">
                <li class="best_1box">
                    <span class="best_1box_image"><a href="product/product.php"></a></span>
                    <span class="product_txt1"><a href="product/product.php">국산콩 두부 300g</a></span>
                    <span class="product_txt2"><a href="product/product.php">1,900원</a></span>
                    <button class="cart_btn" type="button">장바구니</button>
                </li>
                <li class="best_2box">
                    <span class="best_2box_image"><a href="product/product.php"></a></span>
                    <span class="product_txt1"><a href="product/product.php">연세우유 900mL</a></span>
                    <span class="product_txt2"><a href="product/product.php">2,070원</a></span>
                    <button class="cart_btn" type="button">장바구니</button>
                </li>
                <li class="best_3box">
                    <span class="best_3box_image"><a href="product/product.php"></a></span>
                    <span class="product_txt1"><a href="product/product.php">뉴질랜드 골드키위 1.1kg</a></span>
                    <span class="product_sale_txt1"><a href="product/product.php">15%</a></span>
                    <span class="product_sale_txt2"><a href="product/product.php">12,665원</a></span>
                    <span class="product_sale_txt3"><a href="product/product.php">14,900원</a></span>
                    <button class="cart_btn" type="button">장바구니</button>
                </li>
                <li class="best_4box">
                    <span class="best_4box_image"><a href="product/product.php"></a></span>
                    <span class="product_txt1"><a href="product/product.php">숯불 돼지고기 분짜</a></span>
                    <span class="product_txt2"><a href="product/product.php">7,900원</a></span>
                    <button class="cart_btn" type="button">장바구니</button>
                </li>
            </ul>
        </section>

        <section class="review">
            <h2>후기 1,000개 돌파 상품 !</h2>
            <ul class="review_box">
                <li class="review_1box">
                    <span class="review_1box_image"><a href="product/product.php"></a></span>
                    <span class="product_txt1"><a href="product/product.php">텐더 뺑오쇼콜라 생지</a></span>
                    <span class="product_sale_txt1"><a href="product/product.php">20%</a></span>
                    <span class="product_sale_txt2"><a href="product/product.php">4,400원</a></span>
                    <span class="product_sale_txt3"><a href="product/product.php">5,500원</a></span>
                    <button class="cart_btn" type="button">장바구니</button>
                </li>
                <li class="review_1box">
                    <span class="review_2box_image"><a href="product/product.php"></a></span>
                    <span class="product_txt1"><a href="product/product.php">[근대골목단팥빵] 콩떡콩떡빵</a></span>
                    <span class="product_txt2"><a href="product/product.php">2,800원</a></span>
                    <button class="cart_btn" type="button">장바구니</button>
                </li>
                <li class="review_1box">
                    <span class="review_3box_image"><a href="product/product.php"></a></span>
                    <span class="product_txt1"><a href="product/product.php">[근대골목단팥빵] 쑥아빵</a></span>
                    <span class="product_txt2"><a href="product/product.php">2,800원</a></span>
                    <button class="cart_btn" type="button">장바구니</button>
                </li>
                <li class="review_1box">
                    <span class="review_4box_image"><a href="product/product.php"></a></span>
                    <span class="product_txt1"><a href="product/product.php">[노아베이커리] 호두 고구마빵</a></span>
                    <span class="product_txt2"><a href="product/product.php">6,200원</a></span>
                    <button class="cart_btn" type="button">장바구니</button>
                </li>
            </ul>
        </section>

        <article class="event">
            <h2 class="hide">이벤트</h2>
            <p class="event_image"><a href="javascript:void(0);">2022 추석 선물세트 최대 40% 할인</a></p>
        </article>

        <section class="time">
            <div class="time_box1">
                <h2>타임세일!</h2>
                <p class="time_box1_txt1">24시간 한정 특가</p>
                <div class="time_box1_sub">
                    <span class="time_icon"></span>
                    <div class="time_box1_txt2" id="the-final-countdown">
                        <p></p>
                    </div>
                </div>
                <p class="time_box1_txt3">망설이면 늦어요 !</p>
            </div>


            <div class="time_box2">
                <div class="time_image"><a href=""></a></div>
                <ul class="time_box2_txt">
                    <li class="time_box2_txt1">풍성한 과즙과 산뜻한 달달함</li>
                    <li class="time_box2_txt2">상콤달콤한 시나노 스위트 사과 3kg</li>
                    <li class="time_box2_txt3">25%</li>
                    <li class="time_box2_txt4">4,785원</li>
                    <li class="time_box2_txt5">6,630원</li>
                </ul>
                <button class="cart_btn2" type="button">장바구니</button>
            </div>
        </section>



        <section class="day">
            <div class="day_head">
                <h2>오늘 이 메뉴 어때요?</h2>
                <p>소화를 돕는 마와 함께 먹어보는 냉우동 한그릇</p>
            </div>

            <div class="day_box">
                <div class="day_box1">
                    <a href="javascript:void(0);">1</a>
                </div>

                <div class="day_box2">
                    <div>
                        <div class="day_box2_txt1">담백하고 깔끔한 식감</div>
                        <div class="day_box2_txt2">마우동</div>
                        <div class="day_box2_txt3">
                            소화를 도와주는 마를 곱게 갈아 우동과 함께 먹을수 있는
                            매력적인 음식이에요. 따끈한 국물의 우동도 좋지만,
                            깔끔한 느낌의 냉우동도 놓칠 수 없어요. 후루룩 넘기다 보면,
                            탱글한 면에 감겨든 차가운 소스가 입맛을 톡톡히 살려준답니다.
                            색다른 식감의 시원한 마우동 한그릇을 즐겨보세요.
                        </div>
                    </div>
                    <div>
                        <div>
                            <a class="day_box2_txt4" href="javascript:void(0);">레시피보기<span>더보기</span></a>
                        </div>

                        <div class="day_box2_txt5">
                            <button type="submit">
                                재료 한번에 담기
                            </button>
                        </div>
                        <div class="day_box2_image">
                            <div class="day_box2_image_1"><a href="javascript:void(0);">마 500g</a></div>
                            <div class="day_box2_image_2"><a href="javascript:void(0);">우리밀 냉동 우동면</a></div>
                            <div class="day_box2_image_3"><a href="javascript:void(0);">멘 쯔유 소스</a></div>
                            <div class="day_box2_image_4"><a href="javascript:void(0);">깐 마 300g</a></div>
                            <div class="day_box2_image_5"><a href="javascript:void(0);">깐쪽파 200g</a></div>
                            <div class="day_box2_image_6"><a href="javascript:void(0);">들기름 전장 3개입</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


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


    <button class="top_btn" type="button" onclick="clickme()">
        <span class="top_btn_img">
            Top
        </span>
    </button>
</body>

</html>