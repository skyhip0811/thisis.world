@extends('layouts.app2')

@section('content')
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
                                            <td style='min-width:140px;'><b>{{$story->name}}</b></td>
                                    </tr>
                                    <tr>
                                            <td>最初作者:</td>
                                            <td>{{$story->aurthor->name}}</td>
                                    </tr>
                                    <tr>
                                            <td>活躍作者:</td>
                                            <td>@foreach($story->aurthors as $aurthor)
                                                {{$aurthor->aurthor}} 
                                                @endforeach
                                            </td>
                                    </tr>
                                    <tr>
                                            <td>背景:</td>
                                            <td><p>{{$story->description}}</p></td>
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
@endsection

@section('header-script')
<script src='{{url('js/swiper.js')}}'></script>
<script src='{{url('components/storycard.js')}}'></script>
@endsection

@section('footer-script')
        
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
                storys: {!! json_encode($story) !!},
            },
            methods:{
              toggle_navbar:function(){
                  this.navbarActive = !this.navbarActive;
              },
              test:function(e){
                  console.log('go to '+e.name);
              }
            }
        })
    </script>

@endsection