stats = [
    {tags:['Мы','мы','обновили','дизайн','верхнего','меню','по','мобильные','устройста','Говоря','разработчикам','ссылки','гимароя'],title:'Мы обновили дизайн верхнего меню по',text:'причинам оптимизации на мобильные устройста. Говоря проще мы сделали вам и разработчикам гораздо проще. Мы думаем уже замечали проблемы в верхним меню. Теперь ссылки на другие страницы сайта не будут смещаться вверх, вниз и т.д, никакого гимароя для разработчиков. Так же это фиксит проблему того, что раньше у вас не было темной темы, теперь поиск и переключатель тем рядом, и не куда не улетает. Так же возможно обновиться эта статья про тему, т.к пишет разработчик без умения красиво говорить'},
    {tags:['Народ','мы','сделали','темную','тему','народ','Теперь','ваши','теперь','глаза','когда','вы','читайте','вы','читайте','новости','нашем','сайте','будут','болеть'],title:'Народ, мы сделали темную тему!',text:'Теперь ваши глаза, когда вы читайте новости на нашем сайте не будут болеть.'},
    {tags:['Мы','скоро','сделам','несколько','статей','добавить','просто','которые','планируем','сайт','можем','кучу','предложку','комментарии','чатик','добавлять','статьи','соответветствуют','они','модерацию','проходить','очень','интересно','этому','довольно','скоро','их','увидите',],title:'Мы скоро сделам несколько статей,',text:'пофиксим несколько багов и наш проект будет готов. Наверно скоро добавим чатик и комментарии. После этого будем добавлять предложку, где вы сами сможете добавлять статьи, они будут проходить модерацию, и если они соответветствуют правилам (которые мы тоже скоро добавим), статьи буду опубликованы. Будет скоро добавлена предложка того, что мы можем добавить на сайт. Еще планируем кучу идей, которые довольно просто реализуются, по этому вы скоро их увидите. Думаю это будет очень интересно.'}
]
    document.getElementById('search_result')
    search_result = document.getElementById('test2')
    help = [document.getElementById('test2'), document.getElementById('test2n')]
    document.getElementById('del_news').remove()
    stylechange = [document.getElementById('style_change'), document.getElementById('style_change2')]
    document.getElementById('style_change2').remove()
    night = false
    page = 1
    searchnow = false
    setInterval(function () {
    },1000/60)
    document.getElementById('href-1').addEventListener('click', function () {
        if (page!=1) {
            if (!searchnow) {
                document.getElementById('test2n').remove()
            }
            document.getElementById('home').className='nav-link active'
            document.getElementById('home').style.cursor='default'
            document.getElementById('news_1').style.cursor='pointer'
            document.getElementById('news_1').className='nav-link'
            if (search_result != null) {
                search_result.remove()
            }
            search_result = document.createElement('div')
            searchnow = false
            document.getElementById('test').prepend(help[0])
            page = 1
            document.getElementById('style_change2').remove()
            document.getElementById('sc').prepend(stylechange[0])
            if (night) {
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
                    }
            else {
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
            }
        }
    })
    document.getElementById('href-2').addEventListener('click', function () {
        if (page!=2) {
            if (!searchnow) {
                document.getElementById('test2').remove()
            }
            document.getElementById('news_1').className='nav-link active'
            document.getElementById('news_1').style.cursor='default'
            document.getElementById('home').style.cursor='pointer'
            document.getElementById('home').className='nav-link'
            if (search_result != null) {
                search_result.remove()
            }
            search_result = document.createElement('div')
            searchnow = false
            document.getElementById('test').prepend(help[1])
            page = 2
            document.getElementById('style_change').remove()
            document.getElementById('sc').prepend(stylechange[1])
            if (night) {
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
                    }
            else {
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
            }
        }
    })
    document.body.onkeydown = function (e) {
        if (e.key == 'Enter') {
            return false
        }
    }
    document.addEventListener('keydown', function(e) {
        if (e.key == 'Enter') {
            find()
        }
    })
    function find() {
        if (document.getElementById('test2') != null) {
            document.getElementById('test2').remove()
        }
        if (document.getElementById('test2n') != null) {
            document.getElementById('test2n').remove()
        }
        if (!searchnow) {
            search_result = document.getElementById('test2')
        }
        s = document.getElementById('search').value.split(' ')
        statsDraw=[]
        i = 0
        while (i < stats.length){
            m = 0
            i2 = 0
            while (i2 < stats[i]['tags'].length) {
                i3 = 0
                while (i3 < s.length) {
                    if (stats[i]['tags'][i2] == s[i3]) m++
                    i3++
                }
                i2++
            }
            statsDraw[statsDraw.length] = [m, i]
            i++
        }
        statsDraw.sort()
        if (search_result != null) {
            search_result.remove()
        }
        search_result = document.createElement('div')
        searchnow = true
        if (s.length == 1 & s[0] == '') {
            document.getElementById('test').prepend(help[page-1])
            if (night) {
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
                    }
            else {
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
            }
        }
        else {
            document.getElementById('test').prepend(search_result)
            i = 0
            ei = 0
            while (i < statsDraw.length) {
                if (statsDraw[i][0] > 0) {
                    search_result.insertAdjacentHTML("afterbegin", '<div id="search_result" class="card"><div class="card-body" id="back_prog"><h5 class="card-title">'+stats[statsDraw[i][1]]['title']+'</h5><p class="card-text">'+stats[statsDraw[i][1]]['text']+'</p><a href="'+stats[statsDraw[i][1]]['link']+'.html" class="card-link" id="button_1">Подробнее</a></div></div>')
                }
                else {
                    ei++
                }
                i++
            }
            if (ei == statsDraw.length) {
                search_result.insertAdjacentHTML("afterbegin", '<h1 id="search_result" class="card"><div class="card-body"><p class="card-text">По вашему запросу ничего не найдено :(</h1><br><h1 style="margin-left: 50px;">Совет по поиску, если вы не находите что вам нужно сделать:</h5><br><h2 style="margin-left: 50px;">-Следите за регистром, возможно проблема в этом. Просто поменяйте регистр первой буквы </h2>')
            }
            if (night) {
                document.getElementById('search_result').style.background='#484848'
                document.getElementById('search_result').style.transition='0.5s'
            }
            else {
                document.getElementById('search_result').style.background='white'
                document.getElementById('search_result').style.transition='0.5s'
            }
        }
    }
