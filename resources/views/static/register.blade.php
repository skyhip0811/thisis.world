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
                        聯絡我們
                    </a>
                  </div>
                
              </div>
            </b-nav>
                <div class='section'>
                    <div class="columns ">
                        <div class='column is-7'>
                            <swiper  ref="mySwiper" style="height:250px;" :options='swiperOption'>
                            <!-- slides -->
                            <swiper-slide><b>thisis.world </b>到底是什麼?<br> <br>這是一個共同創作平台 , 平台上的會員在這裡可以為任何一個故事增加新的支線.<br>透過新增更多選擇與支線，構成真正意義上的平行世界小說</swiper-slide>
                            <swiper-slide><b>共同創作不會很混亂嗎?</b><br><br>由於所有故事的支線都是不同選擇所構成的平行世界，一個篇章的發展是獨立一個作者所創作。並不會構成混亂。</swiper-slide>
                            <swiper-slide><b>著作權屬於</b><br><br>每一個篇章的著作權當然是屬於該作者。但由於整個作品來看很大機會是共同創作的結果，所以平台上所有故事的商業應用權應屬於本平台，但我們會將平台所得的70%利潤與作者們分享.</swiper-slide>
                            <!-- Optional controls -->斤
                            <div class="swiper-pagination"  slot="pagination"></div>
                          </swiper>
                        </div>

                        <div class='column is-5'>
                            <div class="field">
                            <b-field label="筆名">
                                <b-input value="Kevin Garvey" maxlength="30"></b-input>
                            </b-field>

                            <b-field label="電郵">
                                <b-input type="email"
                                    value="john@"
                                    maxlength="30">
                                </b-input>
                            </b-field>
                            <b-field label="密碼">
                                <b-input type="password"
                                    value="iwantmytreasure"
                                    password-reveal>
                                </b-input>
                            </b-field>
                                
<div class="block">
    <b-checkbox>我同意連結中的<a>這堆條文</a></b-checkbox>
</div>
                                
<button class="button" @click="select = ''">
    提交
</button>

</div>

                        </div>
                    </div>
                    </div>
                </div>
                
            </div>



        </div>
    </body>
    <script>
        Vue.use(Buefy.default,{
            defaultIconPack:'fa'
        });

        Vue.use(VueAwesomeSwiper);

        var App = new Vue({
            el: '#app',
            data: {
                switchState: true,
                checkboxState: true,
                navbarActive:false,
               swiperOption: {
              
              autoplay:10000,
            }
            },
            methods:{
              toggle_navbar:function(){
                  this.navbarActive = !this.navbarActive;
              }  
            }
        })
        

    </script>
</html>
