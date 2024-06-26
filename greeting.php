<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.jpg" type="image/x-icon">
    <link rel="icon" href="img/favicon.jpg" type="image/x-icon">
    <title>pf4-하이트진로:인사말</title>
    <!-- 공통css파일 -->
    <? include("include/common-css.html"); ?>

    <link rel="stylesheet" href="css/greeting.css">

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
           // 목록항목의 p와 a를 둘러싸시오
           $("#product ul.list li").each(function(){// each()는 앞요소갯수만큼 순차적으로 실행하시오; 
                $(this).children("p,a").wrapAll("<div class='wtext'></div>"); 
                // wrapAll('<태그></태그');앞요소를 둘러싸시오(괄호안의 태그로)
                $(".wtext").hide();
            });           
            // 프로덕트 제품오버시 설명글 표시
                //목록항목에 마우스올리면 실행하시오
           $("#product ul.list li").hover(
                function(){ //mouseenter
                    // 마우스올린 li의 자식인 wtext를 fadeIn();하시오
                    $(this).children(".wtext").stop().fadeIn();//fadeIn() 서서히 나타나게 하시오
                    // 마우스올린 li의 자식인 wtext에 클래스를 붙여라(scaleX100)
                    $(this).children(".wtext").addClass("scaleX100");
                    // 마우스올린 li가 아닌 다른 형제요소들의 자식 wtext에 클래스를 없애라(scaleX100)
                    $(this).siblings().children("wtext").removeClass("scaleX100");


                },
                function(){ //mouseleave
                    $(this).children(".wtext").stop().fadeOut();//서서히 사라지게 하시오
                    // 마우스올린 li의 자식인 wtext에 클래스를 없애라(scaleX100)
                    $(this).children(".wtext").removeClass("scaleX100");
                }
           ); 
           /* 반응형에 따른 요소제어(보이기) */
           if($(window).width()<=1200){ // <= 작거나 같다(비교연산자) / $(window).width() 윈도우의 크기값을 가져와라
                // 모바일시 brand제목을 헤더로 옮기기
                $("aside .wrap h2").appendTo("header .wrap nav"); 
                /* 타이틀이미지 모바일용으로 교체 */
                //타이틀영역의 img태그의 속성값을 변경하시오
                /* $("div#subtitle .wrap img[src='img/i1.jpg']").attr("src","img/m/m-title1.jpg");
                $("div#subtitle .wrap img[src='img/i2.jpg']").attr("src","img/m/m-title2.jpg");
                $("div#subtitle .wrap img[src='img/i3.jpg']").attr("src","img/m/m-title3.jpg");
                $("div#subtitle .wrap img[src='img/i4.jpg']").attr("src","img/m/m-title4.jpg");
                $("div#subtitle .wrap img[src='img/i5.jpg']").attr("src","img/m/m-title5.png");
                $("div#subtitle .wrap img[src='img/i6.jpg']").attr("src","img/m/m-title6.png");
                $("div#subtitle .wrap img[src='img/i7.jpg']").attr("src","img/m/m-title7.png");
                $("div#subtitle .wrap img[src='img/i8.jpg']").attr("src","img/m/m-title8.jpg");
                $("div#subtitle .wrap img[src='img/i9.jpg']").attr("src","img/m/m-title9.jpg");
                $("div#subtitle .wrap img[src='img/i10.jpg']").attr("src","img/m/m-title10.png"); */

                var n=1;  // 변수선언과 초기화
                // 변수키워드 변수명=데이터; 변수키워드 var(변수:데이터를 담는 그릇,폴더) 
                // 변수명 n , = 넣어라(대입연산자,부호,기호), 1은 숫자데이터
                // 해석 : 변수 n에 1을 넣어라
                $("div#subtitle .wrap img").each(function(){
                    $("div#subtitle .wrap img:nth-child("+n+")").attr("src","img/m/m-title"+n+".jpg"); 
                    // 문자열과 변수 연결: "문자열"+변수
                    n++; // n에 들어있는 값을 1씩 증가시키시오
                });

                //어사이드의 img를 모바일용 이미지로 교체하기
                /* $("aside .wrap ul.list > li ul.listsub li:nth-child(1) a img").attr("src","img/aside/1-1m.png");
                $("aside .wrap ul.list > li ul.listsub li:nth-child(2) a img").attr("src","img/aside/1-2m.png");
                $("aside .wrap ul.list > li ul.listsub li:nth-child(3) a img").attr("src","img/aside/1-3m.png");
                $("aside .wrap ul.list > li ul.listsub li:nth-child(4) a img").attr("src","img/aside/1-4m.png");
                $("aside .wrap ul.list > li ul.listsub li:nth-child(5) a img").attr("src","img/aside/1-5m.png"); */

                var i=1;
                var m=1;

                $("aside .wrap ul.list > li").each(function(){
                    
                    $("aside .wrap ul.list > li:nth-child("+i+") ul.listsub li").each(function(){
                        $("aside .wrap ul.list > li:nth-child("+i+") ul.listsub li:nth-child("+m+") a img").attr("src","img/aside/"+i+"-"+m+"m.png");
                        m++;
                    });
                    i++;
                    m=1;
                });
                
             



            }
           //윈도우창사이즈가 바뀌면 실행하시오
           $(window).resize(function(){
                if($(window).width()<=1200){
                    $("aside .wrap h2").appendTo("header .wrap nav"); 
                 /* 타이틀이미지 모바일용으로 교체 */
                    //타이틀영역의 img태그의 속성값을 변경하시오
                    /*
                    $("div#subtitle .wrap img[src='img/i1.jpg']").attr("src","img/m/m-title1.jpg");
                    $("div#subtitle .wrap img[src='img/i2.jpg']").attr("src","img/m/m-title2.jpg");
                    $("div#subtitle .wrap img[src='img/i3.jpg']").attr("src","img/m/m-title3.jpg");
                    $("div#subtitle .wrap img[src='img/i4.jpg']").attr("src","img/m/m-title4.jpg");
                    $("div#subtitle .wrap img[src='img/i5.jpg']").attr("src","img/m/m-title5.png");
                    $("div#subtitle .wrap img[src='img/i6.jpg']").attr("src","img/m/m-title6.png");
                    $("div#subtitle .wrap img[src='img/i7.jpg']").attr("src","img/m/m-title7.png");
                    $("div#subtitle .wrap img[src='img/i8.jpg']").attr("src","img/m/m-title8.jpg");
                    $("div#subtitle .wrap img[src='img/i9.jpg']").attr("src","img/m/m-title9.jpg");
                    $("div#subtitle .wrap img[src='img/i10.jpg']").attr("src","img/m/m-title10.png");
                    */
                    var n = 1;
                    $("div#subtitle .wrap img").each(function(){
                        $("div#subtitle .wrap img:nth-child("+n+")").attr("src","img/m/m-title"+n+".jpg");
                        n++;
                    });
                }
                if($(window).width()>1200){
                    $("header .wrap nav>h2").prependTo("aside .wrap");
                    /* 타이틀이미지 pc용으로 교체 */
                    /* $("div#subtitle .wrap img[src='img/m/m-title1.jpg']").attr("src","img/i1.jpg");
                    $("div#subtitle .wrap img[src='img/m/m-title2.jpg']").attr("src","img/i2.jpg");
                    $("div#subtitle .wrap img[src='img/m/m-title3.jpg']").attr("src","img/i3.jpg");
                    $("div#subtitle .wrap img[src='img/m/m-title4.jpg']").attr("src","img/i4.jpg");
                    $("div#subtitle .wrap img[src='img/m/m-title5.png']").attr("src","img/i5.jpg");
                    $("div#subtitle .wrap img[src='img/m/m-title6.png']").attr("src","img/i6.jpg");
                    $("div#subtitle .wrap img[src='img/m/m-title7.png']").attr("src","img/i7.jpg");
                    $("div#subtitle .wrap img[src='img/m/m-title8.jpg']").attr("src","img/i8.jpg");
                    $("div#subtitle .wrap img[src='img/m/m-title9.jpg']").attr("src","img/i9.jpg");
                    $("div#subtitle .wrap img[src='img/m/m-title10.png']").attr("src","img/i10.jpg"); */
                    var n=1; // 변수(그릇) n에 1을 넣으시오
                    $("div#subtitle .wrap img").each(function(){
                        $("div#subtitle .wrap img:nth-child("+n+")").attr("src","img/i"+n+".jpg");
                        n++; //n의 값을 1씩 증가시키시오.
                    });

                }
           });
           /*
            / 다른 요소를 잘라내서 원하는 요소안에 넣기
                잘라내올 요소.appendTo("붙여넣을 요소");

                / 조건문 if
                구문형식 if(조건){조건이 맞으면 실행될 구문}
                /$(window) : 브라우저창
                / width();너비를 가져오시오
                / < : 작다면

                if($(window).width()<769){ // 창크기가 769미만이라면 
                    $("aside .wrap h2").appendTo("header .wrap nav");  //  h2를 ..로 옮겨라
                }
           */
          
        /* 햄버거버튼 클릭 - 대메뉴 보이기 */
            // 햄버거를 클릭하면 실행하시오()
            $(".ham").click(function(){
                //w대메뉴에 클래스를 붙이시오
                $("header .wrap nav .wgnb").addClass("wgnbShow");

                //close를 지우기
                $(".close").remove();

                //x표시용으로 쓸 태그를 추가하시오
                $("header .wrap nav .wgnb").prepend('<a href="" class="close block"></a>'); 

                //대메뉴 닫기
                $(".close").click(function(){
                    $("header .wrap nav .wgnb").removeClass("wgnbShow");
                    return false;
                });

                //aside를 닫기
                $("aside").removeClass("asideSliding");
                return false;
            });
        
        //모바일 대메뉴클릭하면 서브메뉴 펼치게
            $("header .wrap nav .wgnb h2").click(function(){
                $(this).toggleClass("currenH2");
                $(this).parent().siblings().children("h2").removeClass("currenH2");
                $(this).next().slideToggle();
                $(this).parent().siblings().children("ul.sub1").slideUp();
            });
        
            var headerH=$("header").height();
        
            // 스크롤이벤트    
            $(window).scroll(function(){
                // 헤더 애니
                if($(window).scrollTop()>$("header").height()){ //윈도우의 scrollTop위치값이 ...보다 크다면
                    //body에 스타일을 지정하시오(padding-top값에 header높이값을 지정)
                    $("body").css("padding-top",headerH);
                    //header에 클래스를 붙이시오
                    $("header").addClass("headerFix");
                }else{
                    $("body").css("padding-top",0);
                    //header에 클래스를 붙이시오
                    $("header").removeClass("headerFix");
                }
                // 사이드 애니
                if($(window).scrollTop()>$("#subtitle").height()+40){
                    //aside에 클래스를 붙이시오(slideHide)
                    $("aside").addClass("slideHide");

                    // 탑 애니
                    //탑요소에 클래스를 붙이시오(topFix)
                    $("footer .btop").addClass("topFix");
                }else{ // 위 조건이 안맞으면(그렇치 않으면)
                    $("aside").removeClass("slideHide");//aside태그에 클래스를 없애시오
                    $("footer .btop").removeClass("topFix"); // 탑버튼에 클래스를 없애시오
                }
                
                // 하단 탑버튼 페이지와 같이 이동
                if($(window).scrollTop()>$("footer").offset().top-$(window).height()){
                    $("footer .btop").removeClass("topFix").css("opacity",1);
                }

               
            });  
        
        // 대메뉴오버시 서브를 슬라이드 다운
            var wsubN;
            $("header .wrap nav ul.gnb li a").hover(
                function(){
                    $("header .wrap nav .wgnb").stop().slideDown();
                    //제이쿼리 slideDown()시 css속성에 transition이 있으면 제대로  펼쳐지지 않는다... 
                    //wsub를 보이게 하시오
                    wsubN=$(this).parent().index()+1;//마우스올린 대상의 부모의 순번을 가져와서 +1더해서 넣어라
                    $("header .wrap nav .wgnb .wsub:nth-child("+wsubN+")").fadeIn();
                    $("header .wrap nav .wgnb .wsub:not(:nth-child("+wsubN+"))").fadeOut();
                }
            );   
              
        // 서브wgnb영역을 벗어나면 실행하시오(wgnb가 슬라이드업)
            $("header .wrap nav .wgnb").mouseleave(function(){
                $(this).slideUp();
            });

        // h1요소에 마우스진입하면 (wgnb가 슬라이드업)
        $("header .wrap nav h1").mouseenter(function(){
            $("header .wrap nav .wgnb").slideUp();
        });

        // top버튼 클릭하면 실행하시오(문서를 애니메이트하시오)
            $("footer .btop").click(function(){
                $("html,body").animate({scrollTop:0},1000);//문서스크롤 애니
            });

        });
    </script> 
</head>
<body>
    
   <!-- 상단영역 -->
   <? include("include/header.html"); ?>
   <!-- 메인영역 -->
   <? include("include/greeting.html"); ?>
   <!-- 어사이드:브랜드 -->
   <? include("include/aside.html"); ?>
   <!-- 하단영역 -->
   <? include("include/footer.html"); ?>

</body>
</html>
</html>