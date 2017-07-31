@extends('layouts.app2')

@section('content')
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
                                @foreach ($data['chpaters'] as $chapter)
                                <tr>
                                    <td>{{$chapter['story']['name']}}<span class="is-hidden-desktop" style="font-size: 9px"><br>2017-07-15</span></td>
                                    <td>{{$chapter['last_chapter']['name']}} @if($chapter['last_chapter']['name']) > @else -- > @endif {{$chapter['name']}}</td>
                                    <td>{{$chapter['aurthor']['name']}}</td>
                                    <td class="is-hidden-mobile">{{$chapter['created_at']}}</td>
                                </tr>   
                                @endforeach
                            </tbody>
                        </table>
                    <b-table :data="chapters">
                        <template scope="props">
                            <b-table-column field="story.name" label="故事" sortable>
                                @{{ props.row.story.name}}
                            </b-table-column>
                            <b-table-column field="name" label="章節" sortable>
                                @{{ props.row.name}}
                            </b-table-column>
                            <b-table-column field="last_chapter.name" label="上一章節" sortable>
                                <span v-if="props.row.last_chapter">props.row.last_chapter.name</span>
                                <span v-else>--</span>
                            </b-table-column>
                            <b-table-column field="aurthor.name" label="作者" sortable>
                                @{{ props.row.aurthor.name}}
                            </b-table-column>
                            <b-table-column field="created_at" label="作者" sortable>
                                @{{ props.row.aurthor.name}}
                            </b-table-column>


                        </template>
                        <div slot="empty" class="has-text-centered">
                            沒有更新...
                        </div>
                    </b-table>
                    <b-pagination
                    :total="total"
                    :current.sync="current"
                    :order="order"
                    :size="size"
                    :simple="isSimple"
                    :per-page="perPage">
                </b-pagination>
                </section>

                <section class='section' style="">
                    <h1 class='title'>最受歡迎故事</h1>
                    <div class='columns  is-multiline'>
                        @foreach ($data['storys'] as $story)
                        <storycard story_name='{{$story['name']}}' aurthor='{{$story['aurthor']}}' description='{{$story['description']}}' total_levels=12 total_chapters=1></storycard>
                        @endforeach
                    </div>
                </section>

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
                storys: {!! json_encode($data['storys']) !!},
                chapters:{!! json_encode($data['chpaters']) !!},
                swiperOption: {
              
              autoplay:5000,
            },
            total:100,
            current:3,
            order:'',
            size:'',
            isSimple:false  ,
            perPage:10,

            
            },
            methods:{
              toggle_navbar:function(){
                  this.navbarActive = !this.navbarActive;
              }  
            }
        })
    </script>

@endsection