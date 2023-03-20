<?php
include "../inc/session.php";

// DB 연결
include "../inc/dbcon.php";

// 쿼리 작성
$sql = "select * from notice;";

// 쿼리 전송
$result = mysqli_query($dbcon, $sql);

// 전체 데이터 가져오기
$total = mysqli_num_rows($result);

// paging : 한 페이지 당 보여질 목록 수
$list_num = 5;

// paging : 한 블럭 당 페이지 수
$page_num = 3;

// paging : 현재 페이지
$page = isset($_GET["page"])? $_GET["page"] : 1;

// paging : 전체 페이지 수 = 전체 데이터 / 페이지 당 목록 수,  ceil : 올림값, floor : 내림값, round : 반올림
$total_page = ceil($total / $list_num);
// echo "전체 페이지수 : ".$total_page;
// exit;

// paging: 전체 블럭 수 = 전체 페이지 수 / 블럭 당 페이지 수
$total_block = ceil($total_page / $page_num);

// paging: 현재 블럭 번호 = 현재 페이지 번호 / 블럭 당 페이지 수
$now_block = ceil($page / $page_num);

// paging: 블럭 당 시작 페이지 번호 = (해당 글의 블럭 번호 - 1) * 블럭 당 페이지 수 + 1
$s_pageNum = ($now_block - 1) * $page_num + 1;
if($s_pageNum <= 0){
    $s_pageNum = 1;
};

// paging: 블럭 당 마지막 페이지 번호 = 현재 블럭 번호 * 블럭 당 페이지 수
$e_pageNum = $now_block * $page_num;
// 블럭 당 마지막 페이지 번호가 전체 페이지 수를 넘지 않도록
if($e_pageNum > $total_page){
    $e_pageNum = $total_page;
};
?>

<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>1:1 문의</title>
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/notice.css">
  <link rel="stylesheet" href="../css/footer.css">
  <script src="../js/jquery-3.6.1.min.js"></script>
  <script src="../js/header.js"></script>
  <script defer src="../js/notice.js"></script>


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
                <?php if(!$s_idx){ ?> 
                        <li class="site_map1"><a href="../members/join.php">회원가입</a></li>
                        <li class="site_map2"><a href="../login/login.php">로그인</a></li>
                        <li><a href="notice.php">고객센터</a></li>
                        <?php } else{ ?>
                        <li class="site_map1"><a href="../members/member_info.php"><?php echo $s_name; ?>님, 환영합니다</a></li>
                        <li class="site_map2"><a href="../login/logout.php">로그아웃</a></li>
                        <li><a href="notice.php">고객센터</a></li>  
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



  <div class="notice_box">
    <div class="notice_box1">
      <h2>고객센터</h2>
      <ul>
        <li class="notice_box1_txt1"><a class="notice_txt1_color1" href="javascript:void(0);">공지사항</a></li>
        <li class="notice_box1_txt2"><a class="notice_txt1_color2" href="javascript:void(0);">자주하는 질문</a></li>
        <li><a class="notice_txt1_color3" href="notice_qa.php">1:1 문의</a></li>
      </ul>
    </div>




    <div class="notice_box2">
      <h3>1:1 문의</h3>
      <div>
        <table>
          <thead>
            <tr class="notice_box2_title">
              <th class="no">번호</th>
              <th class="n_title">제목</th>
              <th class="writer">작성자</th>
              <th class="w_date">작성일</th>
              <th class="cnt">조회수</th>
            </tr>
            <?php 
            //paging : 해당 페이지의 글 시작 번호 = (현재 페이지 번호 -1) * 페이지 당 보여질 목록 수
            $start = ($page -1) * $list_num;

            // paging : 시작번호부터 페이지 당 보여질 목록수 만큼 데이터 구하는 쿼리 작성
            // limit 몇번부터, 몇 개
            $sql = "select * from notice order by idx desc limit $start, $list_num;";

            // DB에 데이터 전송
            $result = mysqli_query($dbcon, $sql);

            // DB에서 데이터 가져오기
            // pager : 글번호(역순)
            // 전체데이터 - ((현재 페이지 번호 -1) * 페이지 당 목록 수)
            $i = $total - (($page - 1) * $list_num);
            while($array = mysqli_fetch_array($result)){
          ?>
          </thead>
          <tbody>
            <tr class="notice_box2_content">
              <!-- <td>
                <p class="notice_box2_txt4">작성한 1:1 문의가 없습니다.</p>
              </td> -->
              <td><?php echo $i; ?></td>
              <td class="notice_box2_content_title">
                <a href="view.php?n_idx=<?php echo $array["idx"]; ?>">
                <?php echo $array["n_title"]; ?>
              </td>
              <td><?php echo $array["writer"]; ?></td>
              <?php $w_date = substr($array["w_date"], 0, 10); ?>
              <td><?php echo $w_date; ?></td>
              <td><?php echo $array["cnt"]; ?></td>
            </tr>
          <?php
            $i--;
            }; 
          ?>
          </tbody>
        </table>
        <p class="pager">
        <?php
          // pager : 이전 페이지
          if($page <= 1){
          ?>
          <a href="notice.php?page=1">이전</a>
          <?php } else{ ?>
          <a href="notice.php?page=<?php echo ($page - 1); ?>">이전</a>
          <?php }; ?>

          <?php
          // pager : 페이지 번호 출력
          for($print_page = $s_pageNum;  $print_page <= $e_pageNum; $print_page++){
          ?>
          <a href="notice.php?page=<?php echo $print_page; ?>"><?php echo $print_page; ?></a>
          <?php }; ?>

          <?php
          // pager : 다음 페이지
          if($page >= $total_page){
          ?>
          <a href="notice.php?page=<?php echo $total_page; ?>">다음</a>
          <?php } else{ ?>
          <a href="notice.php?page=<?php echo ($page + 1); ?>">다음</a>
          <?php }; ?>
        </p>
        
        
        <div class="btn_box">
          <button type="button" onclick="location.href='notice_qa.php'">
            문의하기
          </button>
        </div>
      </div>







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