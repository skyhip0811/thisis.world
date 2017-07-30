Vue.component('storycard',{
    template:'<div class="column is-4">\n\
                                <div class="card">\n\
                                <div class="card-image">\n\
                                  <figure class="image is-4by3">\n\
                                    <img src="http://bulma.io/images/placeholders/1280x960.png" alt="Image">\n\
                                  </figure>\n\
                                </div>\n\
                                <div class="card-content">\n\
                                  <div class="media">\n\
                                    <div class="media-content">\n\
                                      <p class="title is-4">{{story_name}}</p>\n\
                                      <p class="subtitle is-6">@{{aurthor}}</p>\n\
                                    </div>\n\
                                  </div>\n\
                                  <div class="content">{{description}}\n\
                                    <br>\n\
                                    <small>節總數: {{total_chapters}}</small><br>\n\
                                    <small>節層數: {{total_levels}}</small>\n\
                                  </div>\n\
                                </div>\n\
                            </div>\n\
</div>',
    props:['story_name','aurthor','description','total_chapters','total_levels'],
    
    data:function () {
        return{
    }}
})