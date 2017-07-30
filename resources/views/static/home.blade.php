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
        <script src='{{url('js/swiper.js')}}'></script>

        <!-- Styles -->
        <style>
            body{
                word-break:break-all;
                font-family:"DengXian",sans-serif;
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
                        登入
                    </a>
                    <a class="navbar-item">
                        註冊
                    </a>
                    <a class="navbar-item" href='../static/world'>
                        聯絡我們
                    </a>
                  </div>
              </div>
            </b-nav>
                <section class='section' style="">
                    <swiper  ref="mySwiper" style="height:300px;" :options='swiperOption'>
                            <!-- slides -->
                            <swiper-slide>
                                <b>thisis.world 到底是什麼?</b><br> <br>
                                這是一個共同創作故事的實驗性平台，每個故事最後都會有一個問題，透過選擇不同的答案，會進入新的支線。<br><br>每個人都可以為問題新增新的答案及章節。從而產生新的平行故事。
                                <br><br>最後形成擁有無數平行世界的小說。
                            </swiper-slide>
                            <swiper-slide><b>共同創作不會很混亂嗎?</b><br><br>由於所有故事的支線都是不同選擇所構成的平行世界，一個篇章的發展是獨立一個作者所創作。並不會構成混亂。</swiper-slide>
                            <swiper-slide><b>著作權屬於</b><br><br>每一個篇章的著作權當然是屬於該作者。但由於整個作品來看很大機會是共同創作的結果，所以平台上所有故事的商業應用權應屬於本平台，但我們會將平台所得的70%利潤與作者們分享.</swiper-slide>
                            <!-- Optional controls -->
                            <div class="swiper-pagination"  slot="pagination"></div>
                          </swiper>
                </section> 
                <section class='section'>
                    <h1 class='title'>最新章節</h1>
                        <table class='table'>
                            <thead>
                                <tr>
                                    <th style="min-width:120px">
                                        故事
                                    </th>
                                    <th>上一章節 > 章節</th>
                                    <th style="min-width:80px">作者</th>
                                    <th class="is-hidden-mobile">日期</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>世界的奇點<span class="is-hidden-desktop" style="font-size: 9px"><br>2017-07-15</span></td>
                                    <td>實驗室</td>
                                    <td>筆現實</td>
                                    <td class="is-hidden-mobile">2017-07-15</td>
                                </tr>
                                 <tr>
                                    <td>世界的奇點<span class="is-hidden-desktop" style="font-size: 9px"><br>2017-07-15</span></td>
                                    <td><span>實驗室之沒有緊急制 > </span>或者沒市場</td>
                                    <td>筆現實</td>
                                    <td class="is-hidden-mobile">2017-07-16</td>
                                </tr>
                                <tr>
                                    <td>世界的奇點<span  class="is-hidden-desktop" style="font-size: 9px"><br>2017-07-15</span></td>
                                    <td>或者沒市場</td>
                                    <td>筆現實</td>
                                    <td class="is-hidden-mobile">2017-07-16</td>
                                </tr>
                                <tr>
                                    <td>世界的奇點<span class="is-hidden-desktop" style="font-size: 9px"><br>2017-07-15</span></td>
                                    <td>或者沒市場</td>
                                    <td>筆現實</td>
                                    <td class="is-hidden-mobile">2017-07-16</td>
                                </tr>
                                <tr>
                                    <td>世界的奇點<span class="is-hidden-desktop" style="font-size: 9px"><br>2017-07-15</span></td>
                                    <td>或者沒市場</td>
                                    <td>筆現實</td>
                                    <td class="is-hidden-mobile">2017-07-16</td>
                                </tr>

                            </tbody>
                        </table>
                    <nav class="pagination is-small">
  <a class="pagination-previous" title="This is the first page" disabled>Previous</a>
  <a class="pagination-next">Next page</a>
  <ul class="pagination-list ">
    <li>
      <a class="pagination-link  ">1</a>
    </li>
    <li>
      <a class="pagination-link  is-hidden-mobile">2</a>
    </li>
    <li>
      <a class="pagination-link  is-hidden-mobile">3</a>
    </li>
    <li>
      <a class="pagination-link  is-hidden-mobile">4</a>
    </li>
    <li>
      <a class="pagination-link  is-hidden-mobile">5</a>
    </li>
    <li><span class="pagination-ellipsis is-hidden-desktop">&hellip;</span></li>
    <li>
      <a class="pagination-link is-hidden-mobile">6</a>
    </li>
    <li>
      <a class="pagination-link is-current">7</a>
    </li>
    <li>
      <a class="pagination-link">8</a>
    </li>
    <li><span class="pagination-ellipsis is-hidden-desktop">&hellip;</span></li>
    <li>
      <a class="pagination-link  is-hidden-mobile">9</a>
    </li>
    <li>
      <a class="pagination-link  ">10</a>
    </li>
    
  </ul>
</nav>
                </section>
                <section class='section' style="">
                    <h1 class='title'>最受歡迎故事</h1>
                    <div class='columns  is-multiline'>
                        <div class='column is-4'>
                            <div class="card">
                                <div class="card-image">
                                  <figure class="image is-4by3">
                                    <img src="http://bulma.io/images/placeholders/1280x960.png" alt="Image">
                                  </figure>
                                </div>
                                <div class="card-content">
                                  <div class="media">
                                    <div class="media-content">
                                      <p class="title is-4">世界的奇點</p>
                                      <p class="subtitle is-6">@筆現實</p>
                                    </div>
                                  </div>

                                  <div class="content">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Phasellus nec iaculis mauris. 
                                    <br>
                                    <small>節總數: 15</small><br>
                                    <small>節層數: 7</small>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </body>
    <script>
        Vue.use(Buefy.default);
        Vue.use(VueAwesomeSwiper);

        var App = new Vue({
            el: '#app',
            data: {
                switchState: true,
                checkboxState: true,
                navbarActive:false,
                swiperOption: {
              
              autoplay:5000,
            }
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
