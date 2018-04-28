 <div class=nav-holder>
            .
            <div class=logo-holder>
                <img src={{asset ('assets/images/logo.png')}} alt="Stick Design">
            </div>
            <div class="btn-menu-wrapper elem call-menu transition2">
                <div id=btn-menu>
                    <span class=icon-container>
					<span class="line line01"></span>
                    <span class="line line02"></span>
                    <span class="line line03"></span>
                    <span class="line line04"></span>
                    </span>
                </div>
            </div>
            @if(isset($menu))
              <nav class=vis>
                @foreach ($menu as $item)
                    <a href=#{{$item['alias']}} class="swp"><span class=transition></span>{{$item['title']}}</a>
                @endforeach
           
              </nav>
            @endif
             
          
            <div class=arrow-nav>
                <a href=# class="arrow-right transition2"><i class="fa fa-angle-right"></i></a>
                <a href=# class="arrow-left transition2"><i class="fa fa-angle-left"></i></a>
            </div>
        </div>
        <div class=scroll-nav>
            <a href=#about><i class="fa fa-smile-o"></i><span>Обо мне</span></a>
            <a href=#facts><i class="fa fa-trophy"></i><span>Факты</span></a>
            <a href=#testimonials><i class="fa fa-comments-o"></i><span>Отзывы</span></a>
        </div>