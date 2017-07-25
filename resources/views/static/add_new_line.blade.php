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
            <div class='container' style="padding:10px;">
                
            
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

                     
                  </div>

                  <div class="navbar-end">
                    <!-- navbar items -->
                    <a class="navbar-item">
                        提交
                    </a>
                  </div>
              </div>
            </b-nav>
                <div id='content_form'>
                <div class="field">
                    <h1 class='title'>世界的奇點</h1>
                                    <div class="field">
  <label class="label">上一節</label>
  <div class="control">
      <input class="input" type="text" placeholder="Text input" value="世界誕生了" disabled="">
  </div>
</div>
                                                        <div class="field">
  <label class="label">作者</label>
  <div class="control">
      <input class="input" type="text" placeholder="Text input" value="我醉狂" disabled="">
  </div>
</div>
                     <div class="field">
  <label class="label">上一節問題</label>
  <div class="control">
      <input class="input" type="text" placeholder="Text input" value="Rose 的反應是?" disabled="">
  </div>
</div>
              
                    <div class="field">
  <label class="label">簡短描述發展</label>
  <div class="control">
      <input class="input" type="text" placeholder="簡短描述發展" >
  </div>
</div>
                    
                    <div class="field">
  <label class="label">內容</label>
  <div class="control">
      <textarea class="input" type="text" placeholder="內容" style="height:500px;"></textarea>
  </div>
</div>
                     <div class="field">
  <label class="label">後續發展問題</label>
  <div class="control">
      <input class="input" type="text" placeholder="提出後續發展問題" >
      
  </div>
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
