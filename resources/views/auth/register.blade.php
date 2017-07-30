@extends('layouts.app2')
@section('content')
                    <div class='section'>
                    <div class="columns ">
                        <div class='column is-7'>
                            <swiper  ref="mySwiper" style="height:250px;" :options='swiperOption'>
                            <!-- slides -->
                            <swiper-slide><b>thisis.world </b>到底是什麼?<br> <br>這是一個共同創作平台 , 平台上的會員在這裡可以為任何一個故事增加新的支線.<br>透過新增更多選擇與支線，構成真正意義上的平行世界小說</swiper-slide>
                            <swiper-slide><b>共同創作不會很混亂嗎?</b><br><br>由於所有故事的支線都是不同選擇所構成的平行世界，一個篇章的發展是獨立一個作者所創作。並不會構成混亂。</swiper-slide>
                            <swiper-slide><b>著作權屬於</b><br><br>每一個篇章的著作權當然是屬於該作者。但由於整個作品來看很大機會是共同創作的結果，所以平台上所有故事的商業應用權應屬於本平台，但我們會將平台所得的70%利潤與作者們分享.</swiper-slide>
                            <!-- Optional controls -->
                            <div class="swiper-pagination"  slot="pagination"></div>
                          </swiper>
                        </div>

                        <div class='column is-5'>
                            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                                <div class="field">
                                        <b-field label="筆名" :message='name_field_message' v-bind:type="{'is-danger':name_field_success}">
                                        <b-input name="name" value="" maxlength="30"></b-input>
                                    </b-field>

                                    <b-field label="電郵" :message='email_field_message'  v-bind:type="{'is-danger':email_field_success}">
                                        <b-input name="email"  type="email"
                                            value=""
                                            maxlength="30">
                                        </b-input>

                                    </b-field>
                                    <b-field label="密碼" :message='password_field_message'  v-bind:type="{'is-danger':password_field_success}">
                                        <b-input name="password" type="password"
                                            value=""
                                            password-reveal >
                                        </b-input>
                                    </b-field>
                                    
                                    <b-field label="確認密碼" :message='password_confirmation_field_message'  v-bind:type="{'is-danger':password_confirmation_field_success}">
                                        <b-input  name="password_confirmation"  type="password"
                                            value=""
                                            password-reveal >
                                        </b-input>
                                    </b-field>

                                    <div class="block">
                                        <b-field required  :message='agreement_field_message'  v-bind:type="{'is-danger':agreement_field_success}">
                                                 <b-checkbox name='agreement' required>我同意連結中的<a href='http://google.com' target="_blank">這堆條文</a></b-checkbox>
                                        </b-field>
                                    </div>

                                    <button class="button" type="submit">
                                        提交
                                    </button>

                                 </div>
                            </form>


                        </div>
                    </div>
                    </div>
@endsection

@section('header-script')
<script src='{{url('js/swiper.js')}}'></script>
<script>
    Vue.config.debug = true;
    </script>

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
                password_field_message:'{{ $errors->first('password') }}',
                password_field_success:false,
                @if ($errors->has('name'))
                    name_field_success:true,
                @else
                    name_field_success:false,
                @endif
                @if ($errors->has('email'))
                    email_field_success:true,
                @else
                    email_field_success:false,
                @endif
                @if ($errors->has('password'))
                    password_field_success:true,
                @else
                    password_field_success:false,
                @endif
                @if ($errors->has('password'))
                    password_confirmation_field_success:true,
                @else
                    password_confirmation_field_success:false,
                @endif
                @if ($errors->has('agreement'))
                    agreement_field_success:true,
                @else
                    agreement_field_success:false,
                @endif
                name_field_message:'{{$errors->first('name')}}',
                password_confirmation_field_message:'{{$errors->first('password_confirmation')}}',
                email_field_message:'{{$errors->first('email')}}',
                agreement_field_message:'{{$errors->first('agreement')}}',
               swiperOption: {
              
              autoplay:10000,
            }
            },
            methods:{
              toggle_navbar:function(){
                  this.navbarActive = !this.navbarActive;
              }  
            }
        });
        Vue.config.debug = true;
    </script>

@endsection