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
                <a class="navbar-item" href="http://bulma.io">
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
                    <a class="navbar-item">
                        Home
                    </a>
                     
                  </div>

                  <div class="navbar-end">
                    <!-- navbar items -->
                    <a class="navbar-item">
                        <i class='fa fa-share' > 分享</i>
                    </a>
                  </div>
              </div>
            </b-nav>
                <div class='container' id='book-intro'>
                    <div class='container'>
                        <div class='columns'>
                            <div class='column is-3'>
                                <image src="{{url('images/2eb90000f02646e9e71f.jfif')}}"></image>
                            </div>
                            <div class="column is-9">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td style='min-width:140px;'><b>世界的奇點</b></td>
                                    </tr>
                                    <tr>
                                            <td>第一節作者:</td>
                                            <td>筆現實</td>
                                    </tr>
                                    <tr>
                                            <td>活躍作者:</td>
                                            <td>筆現實 , 我醉狂 , 尋日食左屎</td>
                                    </tr>
                                    <tr>
                                            <td>背景:</td>
                                            <td><p>世界是由所有人一齊創造，人們不同的選擇會產生不同的影響，累積起來成為故事。我們每個人都會有自己的選擇，走自己的路。今天我選擇了創造這個新世界，但我不會成為唯一的創造者。</p></td>
                                    </tr>
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='section' id='articles-list'>
                    <div>
                        <table>
                            <thead>
                                <tr>
                                    <th>節名</th>
                                    <th>作者</th>
                                    <th>節數</th>
                                    <th>上一節</th>
                                    <th><i class="fa fa-eye fa-lg"></th>
                                    <th><i class="fa fa-heart-o fa-lg"></i></th>
                                    <th><i class="fa fa-comment fa-lg"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href='../static/content'>世界誕生了</a></td>
                                    <td>筆現實</td>
                                    <td>0</td>
                                    <td>--</td>
                                    <td>1800</td>
                                    <td>200</td>
                                    <td>14</td>
                                </tr>
                                                                <tr>
                                    <td>世界死亡了</td>
                                    <td>我醉狂</td>
                                    <td>1</td>
                                    <td>世界誕生了</td>
                                    <td>1800</td>
                                    <td>200</td>
                                </tr>
                                                                <tr>
                                    <td>亞當出世, 但夏娃卻沒有</td>
                                    <td>筆現實</td>
                                    <td>1</td>
                                    <td>世界誕生了</td>
                                    <td>1800</td>
                                    <td>200</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


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
