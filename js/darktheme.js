document.getElementById('checkbox').addEventListener('click', function() {
    if (!night) {
        document.body.style.background='linear-gradient(to top, #484848, DimGray)'
        document.body.style.color='white'
        if (document.getElementById('prog') != null) {
            document.getElementById('prog').style.background='#484848'
            document.getElementById('prog').style.transition='0.5s'
        } 
        if (document.getElementById('news') != null) { 
            document.getElementById('news').style.background='#484848'
            document.getElementById('news').style.transition='0.5s'
        }
        if (document.getElementById('news_l') != null) {
            document.getElementById('news_l').style.background='#484848'
            document.getElementById('news_l').style.transition='0.5s'
        }
        if (document.getElementById('news_w') != null) {
            document.getElementById('news_w').style.background='#484848'
            document.getElementById('news_w').style.transition='0.5s'
        }
        if (document.getElementById('news_q') != null) {
            document.getElementById('news_q').style.background='#484848'
            document.getElementById('news_q').style.transition='0.5s'
        }
        if (document.getElementById('news_q') != null) {
            document.getElementById('news_aga').style.background='#484848'
        }
        if (document.getElementById('news_q') != null) {
            document.getElementById('chat').style.background='#484848'
            document.getElementById('chat').style.transition='0.5s'
        }
        if (document.getElementById('search_result') != null & searchnow) {
            document.getElementById('search_result').style.background='#484848'
            document.getElementById('search_result').style.transition='0.5s'
        }
        night = true
    }
    else {
        document.body.style.background='linear-gradient(to top, #cccccc, white)'
        document.body.style.color='black'
        if (document.getElementById('prog') != null) {
            document.getElementById('prog').style.background='white'
        }
        if (document.getElementById('news') != null) {
            document.getElementById('news').style.background='white'
        }
        if (document.getElementById('news_l') != null) {
            document.getElementById('news_l').style.background='white'
        }
        if (document.getElementById('news_w') != null) {
            document.getElementById('news_w').style.background='white'
        }
        if (document.getElementById('news_q') != null) {
            document.getElementById('news_q').style.background='white'
        }
        if (document.getElementById('news_aga') != null) {
            document.getElementById('news_aga').style.background='white'
        }
        if (document.getElementById('chat') != null) {
            document.getElementById('chat').style.background='#e4e4e4'
        }
        if (document.getElementById('search_result') != null & searchnow) {
            document.getElementById('search_result').style.background='white'
        }
        night = false
    }
})
