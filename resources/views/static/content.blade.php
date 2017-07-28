<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href ="https://unpkg.com/buefy/lib/buefy.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.2/vue.min.js" ></script>
        <script src="https://unpkg.com/buefy" ></script>

        <!-- Styles -->
        <style>
            body{
                word-break:break-all;
                font-family:sans-serif;
            }
            .is-fluid{
                padding: 0px 20px;
            }
            .next-stop-section{
                text-align: center;
            }
            .answer{
                overflow: auto;
                height: 100px;
                color:white;
                background-color: #3CB5B5;
                
                
            }
            p{
                white-space: normal;
            }
            .add-newline-button{
                height: 50px;
                background-color: #428bca;
                color: white;
                
            }
            .add-newline-button:hover{
                background-color: #00b3ee;
                color:white;
            }
            .add-newline-button a{
                color: white;
            }
            .answer-author-row{
                padding:5px;
            }

        </style>
    </head>
    <body>
        <div id="app">
            <div class='container'>
                
            
            <b-nav class="navbar " >
              <div class="navbar-brand">
                <a class="navbar-item" href="/">
                  <img src="{{url('images/thisisworld.png')}}" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
                </a>

                <div class="navbar-burger burger" @click="toggle_navbar" v-bind:class="{'is-active': navbarActive}">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>
               <div class="navbar-menu" v-bind:class="{'is-active': navbarActive}">
                <!-- navbar start, navbar end -->
                <div class="navbar-start">
                    <!-- navbar items -->
       
                     
                  </div>

                  <div class="navbar-end">
                    <!-- navbar items -->
                    <a class="navbar-item">
                        上一節
                    </a>
                    <a class="navbar-item" href='../static/world'>
                        回目錄
                    </a>
                    <a class="navbar-item" href='../static/register'>
                        註冊
                    </a>
                    <a class="navbar-item" href='../static/register'>
                        登入
                    </a>
                    
                  </div>
              </div>
            </b-nav>
            <nav class="breadcrumb has-arrow-separator is-hidden-mobile" style='overflow:hidden' >
                <ul>
                  <li><a>世界的奇點</a></li>
                  <li><a>...</a></li>
                  <li><a>Jack 行到船頭</a></li>
                  <li><a>Jack 跳海了</a></li>
                  <li class="is-active"><a>死亡</a></li>
                </ul>
              </nav>
                                <div class='container is-fluid' id='content'>
                    <h1 class='title'>死亡<span style='font-size: 14px;'> By 筆現實</span></h1>
                                星空帝國，帝都之內，一座宏偉的莊園立於正街，上麵刻著兩個宏大的字體，方府！兩旁雄偉的獅子，高掛在四周的一排排高大的紅燈籠，站在門口旁衣衫整齊卻又恭恭敬敬的家丁，無不顯示著這座府邸主人身份的貴重！

在方府的一處別院當中，空曠的校場上，一名身著白衫的少年在院中不停的練習著拳法，少年身手敏捷，用力的揮動著拳頭，帶有著一股勁風，已經煞有其事。隨著少年的不斷練習，身上隱隱發出金『色』的光芒！
<br><br>
砰！砰！砰！隨著少年每一次出拳，拳鋒中隱約間帶有一股金『色』的力量，盡管少年的小臉上沁出了汗水，但是仍然堅持著不停止的練習！“南兒，快停歇吧！”房屋中傳出聲音，一位中年『婦』人從房間中走了出來，穿著淡藍『色』的衣服，慈眉善目，眼角上已經有了歲月的痕跡，慈愛的望著正在練習拳法的少年！
<br><br>
少年望見『婦』女走了出來，慢慢的停止了拳法的練習，緩了口氣，來到中年『婦』女的麵前！中年『婦』女心疼的拿出手帕，擦著少年腦袋上的汗水！
<br><br>
少年長相白淨，年紀大約在十二三歲之間，濃重的眉『毛』，一雙有神的眼睛，微厚的嘴唇，眉宇間帶著一股書生氣質，身材有些單薄，穿著一件白『色』小衫！
<br><br>
少年望著中年『婦』女的臉龐，輕聲對中年『婦』女說道：“母親，我還沒有完成今天的功課！”中年『婦』女看著臉上充滿疲憊之『色』的少年，明白少年的倔強，苦笑著點了點頭，充滿了憐愛的說道“我知道你用功，但是要注意自己的身體，知道麽？”聽到中年『婦』女的話，少年點了點頭，表示自己知道了，但是卻再次回到校場練習起了拳法！
<br><br>
宏大的方府內，前來拜訪的人絡繹不絕，希望能夠得到方府的主人的召見！方府的主人，如今方家的家主，便是震懾帝國的溫尊方林寒！方林寒是星空帝國第一軍團軍團長，帝國公爵，鬥尊級別強者，是星空帝國的頂梁之柱，肱骨之臣！
<br><br>
所謂一人得道，雞犬升天，在方林寒的照耀下，整個方家都屬於帝都之中的頂尖貴族之列！聲名赫赫！
<br><br>
然而少年方南，卻在偌大的方府內地位甚低。方南的母親冷冰言，不過是方府的一個丫鬟，方南的父親也隻是方家的仆人。方南的身份，隻不過比起身為賤籍的家奴強上一些而已。
<br><br>
隨著天『色』漸漸的暗淡，方南才慢慢的停止了修煉，擦了擦額頭上的汗水，和冷冰言道聲晚安，便回到了自己的房間。方南的房間裏甚是簡陋，旁邊排放著一個書桌，上麵堆滿了各種書籍，幾張破舊的椅子，在加上一張整整齊齊的小床！

方南脫下鞋子，疲憊的躺在床上，眼睛卻沒有閉上，靜靜的感受著體內流動的金『色』氣體，心中嘟囔道，不知道自己現在的鬥氣水準是多少！

在方南體內的不斷湧動的便是鬥氣！伴隨著方南練習拳法時不斷的閃現出金光！在這片神奇而廣博的大陸上，決定一個人強大或者弱小的方式有很多種，財富多少，權利大小，人脈廣薄……但是無論前麵的任何所說，和鬥氣強者一相比，簡直是天地差別！經過大陸上無數代的發展，運用自己體內的鬥氣，鬥氣修為強弱，鬥技的運用，可以說是大陸上強者劃分的一個標誌！

整個鬥氣大陸上，將所有修煉鬥氣的人稱之為鬥者，鬥者又劃分為鬥士，鬥師，大鬥師，鬥王，鬥靈，鬥尊，鬥宗，鬥聖，鬥神！而每一個級別，全都又分為十階！

隻有到達鬥師級別才能算是大陸上真正的鬥者！才算正式的步入了鬥氣的殿堂！而任何大鬥師便是各個家族招攬的對象，任何大鬥師，都可以享受一些常人不具備的特權！而到達鬥王級和鬥靈級的鬥者。便是可以稱雄一方的人物！堪稱一方豪強！如果願意投靠帝國，帝國會立刻賜封將軍，享受爵位！

榮華一生！至於鬥尊級別的已經可以開宗建府，成為一代宗師，無論走到大陸的那裏，都會受到尊重！傳說一個鬥尊級別的，便可以在百萬軍中，取對方上將之首級！所以每一個鬥尊級別的強者，就是皇室都不會輕易得罪！

至於可以傳說中禦空飛行的鬥宗強者，每一個都是大陸上神龍見首不見尾的角『色』！很多人因為可以得見鬥宗強者一眼而感到自豪！每一個鬥宗級別的強者，輕易不出手，閉關百年都是常有的事，但是每一件關於鬥宗級別強者的事情，都是極其重要的事情！

再往上，便是傳說中日同日月般存在的鬥聖強者，每一個傳奇的鬥聖都有一個專屬自己的名號！每一個鬥聖都是一段永垂不朽的傳奇，震撼大陸，永遠如同太陽一樣閃爍！根據記載，曾經星空帝國的創始人星空鬥聖兀傲和殘血鬥聖奧昂的一場對決，十萬大山被鬥氣擊的崩潰，滄瀾河被逆轉倒流！山河變『色』，日月掩蓋！可見鬥聖強者之威力！但是每一個鬥聖強者的成功背後都隱藏著無數的汗水和驚人的天賦，大陸上已經好久沒有出現鬥聖級別的強者了！
<br><br>
至於往上的鬥神級別的強者，方南流出一絲苦笑，自己連聽說都沒有聽說過，隻是知道在鬥聖之上又有這麽一個級別而已！關於鬥神級別的，恐怕隻有遠古年代才會出現過吧！<br>

方南運用起體內的鬥氣，緩慢的在全身運轉，除了白天需要訓練的實戰外，鬥氣的成長是至關重要的！方南從六歲開始修煉鬥氣，每日付出別人所看不到的艱辛！幸苦的汗水，難以忍受的疼痛等等，但是方南一直都忍了下來，方南隱藏在心中的不甘在不斷催促著方南的前進！任何痛苦方南都放在心頭隱忍不發！

方南的父親已經在方南的小的時候便去世了，隻留下方南和冷冰言相依為命。因為方南的父親曾是保護方家重要人物而死的，所以方南被特許修煉鬥氣，不用幹下人的活！<br>

然而，以一個仆人的兒子身份修習鬥氣，迎接來的是方府無數的嘲諷和白眼，冷冰言一個丫頭的身份，和家奴一樣，都是屬於帝國的賤籍！更是需要每日大量的辛苦勞作，有的時候還會受到方府的夫人們的無故責難！

想到這些，方南的臉『色』不由得變得有些猙獰，小拳頭緊緊的握緊，自己和母親所受到的痛苦便是方南不斷修煉鬥氣的動力，一定要修成強大的鬥氣，
<br>
聽說修煉到鬥氣到達鬥王級別，便可以受到帝國賞賜下來的爵位，那麽自己的母親也會跟著被賞賜成為夫人，就和方府那幫子賤人平起平坐了，再也不用看她們的臉『色』了！方南在心中不住的思索著，眼中閃過一絲堅定的目光，開始運行起體內的鬥氣來！
<br>
金『色』的光芒淡淡的升起，隨著方南的鬥氣匯聚而不斷的閃動…<br>

清晨的第一縷陽光『射』進江南的房間，溫暖的照『射』在修煉一夜的方南身上，方南緩慢的睜開眼睛，感受著朝陽的氣息！<br>

如同母親溫暖的雙手一樣，輕撫著自己的小臉，方南享受著這溫暖的時刻，靜靜的感受著體內的鬥氣，但是體內的鬥氣依舊如同蝸牛跑步一樣，並有沒有什麽太大進展！方南輕聲的歎了一口氣，一個鬥者修煉，講究的是天賦，努力，機緣！<br>

天賦分為很多種，除了傳說中的鬥氣天才之外，天賦的形成最大的還是需要擁有重點培養！方府的精英子弟都是擁有重點培養的，每天吃的靈『藥』可能比方南見的都多！在大量的天材地寶的滋潤下，會迅速的打通體內的關卡！縮短修煉鬥氣的時間！自然就是擁有龐大的天賦！<br>

以方南在方家的身份，能夠有飯吃還有不用幹活，已經是方府對方南天大的恩賜了！至於天材地寶，和方南是一點邊都沾不上的！<br>

既然自己沒有修煉的強大天賦，更沒有天材地寶的滋潤！那麽就更要加倍努力了！方南暗中鼓勵自己，臉上『露』出了堅定的笑容，去迎接新的一天的到來！<br>

打開房門，方南走出房外，站在空曠的小院中，運行著體內的鬥氣，開始練習起鍛煉身體的鬥氣練體式！隨著方南在院中擺出各種各樣的姿勢，鬥氣慢慢的流動著！盡管姿勢的艱苦讓方南的額頭上沁出汗水，但是方南仍然咬緊牙關堅持著，暖暖的鬥氣慢慢的隨著方南的控製流經每一條經脈，擴大的方南的經脈，滋潤著方南體內的骨骼！<br>

六年如一日的練習，這便是方南每日早起的功課！時間的緊迫在不斷的提醒著方南，方南暗暗告訴自己，自己還擁有兩年的時間，在兩年的時間一定要突破成為鬥師！因為，帝都學院最基本的收生的要求，便是在十四歲之前，成為一名鬥師！
                </div>
            <section class='section'>
                <div class='containter next-stop-section'>
                    <div class='question-row'>
                        
                        <h1 class='question' style='text-align: center; font-size: 30px;'>
                            Rose 有什麼反應?
                        </h1>
                       
                    </div>
                    <section class='section'>
                        <div class="columns is-multiline">

                            <div class='column is-4 button answer' style="overflow:hidden">
                                 <p>一齊跳落去!!一齊跳落去!! 一齊跳落去!!一齊跳落去!!</p>
                                        <span style="position:absolute;bottom:5px;left:10px;"><i class='fa fa-heart-o fa-lg'></i> 9 </span>
                                        <span style='position: absolute; bottom:5px;right: 10px;'> By 筆現實</span>
                               
                            </div>
                            <div class='column is-4 button answer' style="overflow:hidden">
                                 <p>一齊跳落去!!一齊跳落去!! 一齊跳落去!!一齊跳落去!!</p>
                                        <span style="position:absolute;bottom:5px;left:10px;"><i class='fa fa-heart-o fa-lg'></i> 9 </span>
                                        <span style='position: absolute; bottom:5px;right: 10px;'> By 筆現實</span>
                               
                            </div>
                            <div class='column is-4 button answer' style="overflow:hidden">
                                 <p>O 左嘴</p>
                                        <span style="position:absolute;bottom:5px;left:10px;"><i class='fa fa-heart-o fa-lg'></i> 9 </span>
                                        <span style='position: absolute; bottom:5px;right: 10px;'> By 筆現實</span>
                               
                            </div>
                            <div class='column is-12  '><a href='../static/addnewline'><div class="button add-newline-button" style="width:100%;"><p class="" style="margin: auto; ">新增選擇</p></div></a></div>
                        </div>
                    
                    </section>
                </div>
            </section>
            </div>

        </div>
    </body>
    <script>
        Vue.use(Buefy.default)

        var App = new Vue({
            el: '#app',
            data: {
                switchState: true,
                checkboxState: true,
                navbarActive:false
            },
            methods:{
              toggle_navbar:function(){
                  console.log("asds");
                  this.navbarActive = !this.navbarActive;
              }  
            }
        })
    </script>
</html>
