<div class=swiper-container>
            <div class=swiper-wrapper>
                @if(isset($pages) && is_object($pages))
                
                @foreach($pages as $page)
                
                    @if($page->id=='1')
                    <div class=swiper-slide>
                    <div id=video-container>
                        <div class=mobile-bg style=background:url({{asset ('assets/images/bg/'.$page->images)}})></div>
                        <div id=P3 class="player video-container" data-property="{videoURL:'8LQSe_1D27I',containment:'#video-container',autoPlay:true, mute:true, startAt:0, opacity:1}"></div>
                    </div>
                    <div class=overlay></div>
                    <div class=container>
                            <section class="homeholder no-bg">
                            <div class=content id=home>
                                {!! $page->name !!}
                                <div class=home-separator><span></span></div>
                                <div class=tetx-rotator>
                                    <div class=tlt>
                                        <ul class=texts>
                                            {!! $page->text !!}
                                        </ul>
                                    </div>
                                </div>
                                <a href=# class="button start-button transition hide-icon"><i class="fa fa-angle-right transition2"></i><span class="text transition color-bg">Начнем?</span></a>
                            </div>
                            <div class=clearfix></div>
                        </section>
                        <footer>
                            <div class=row-fluid>
                                <div class=span6>
                                    <div class=contact-info>
                                        <ul>
                                            <li>
                                                <i class="fa fa-phone"></i>
                                                <a href=tel:7918750950 class=transition>+7(918)750-9500</a>
                                            </li>
                                            <li>
                                                <i class="fa fa-envelope-o"></i>
                                                <a href=mailto:info@stick-design.ru class=transition>info@stick-design.ru</a>
                                            </li>
                                            <li>
                                                <i class="fa fa-skype"></i>
                                                <a href=skype:stick_25 class=transition>stick_25</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=span6>
                                    <div class=social-list>
                                        <ul>
                                            <li><a href=https://t.me/stick_qwe target=_blank class="transition elem"><i class="fa fa-paper-plane"></i></a></li>
                                            <li><a href=https://twitter.com/stick_qwe target=_blank class="transition elem"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="https://www.instagram.com/stick_qwe/ " target=_blank class="transition elem"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href=https://vk.com/id383968 target=_blank class="transition elem"><i class="fa fa-vk"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
                    @elseif($page->id=='2')
                            
                            <div class="swiper-slide slide-bg" style=background:url({{asset ('assets/images/bg/'.$page->images)}})>
                    <div class=container>
                        <div class=page-title>
                            <div class=content>
                                {!! $page->name !!}
                                <div class=clearfix></div>
                                {!! $page->text !!}
                                <div class=clearfix></div>
                                <div class=color-separator></div>
                                <div class=clearfix></div>
                            </div>
                            <div class=overlay></div>
                        </div>
                        <section class="gray-bg subab">
                            <div class="row header-plus">
                                <h2>Плюсы моих проектов</h2>
                            </div>
                            <div class=content>
                                    <div class=row-fluid> 
                                @if(isset($services) && is_object($services))
                                    
                                    @foreach($services as $k=>$service)
                                   
                                        <div class=span4>
                                        {!! $service->name !!}
                                        <div class=clearfix></div>
                                        <div class=color-separator></div>
                                        <div class=clearfix></div>
                                        {!! $service->text !!}
                                        </div>
                                        
                                    @endforeach


                                @endif
                                 </div>
                                
                           
                        </section>
                        <section id=about>
                            <div class=left-colum>
                                <span class="about-button show-about cur"><i class="fa fa-user"></i><span class=tooltip>Обо мне</span></span>
                                <span class="about-button show-res"><i class="fa fa-rocket"></i><span class=tooltip>Навыки</span></span>
                                <span class="about-button show-ser"><i class="fa fa-cogs"></i><span class=tooltip>Услуги</span></span>
                                <div class=about-slider-holder>
                                    <div id=about-slider>
                                        <div class=item>
                                            <div class=item-box>
                                                <h3>Влад Булгаков</h3>
                                                <h4>WEB дизайнер & WEB разработчик из Ставрополя</h4>
                                                <div class=clearfix></div>
                                                <div class=float-separator></div>
                                                <div class=clearfix></div>
                                                <p>Я занимаюсь комплексной разработкой и продвижением сайтов, созданием логотипов и фирменных стилей, сопровождением сайтов любой сложности, SEO-продвижением, ведением рекламных компании в интернете.</p>
                                                <div class=clearfix></div>
                                                <a href=# class="button gw float-button content-button transition hide-icon"><i class="fa fa-angle-right transition2"></i><span class="text transition color-bg">Мои работы</span></a>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class=item-box>
                                                <h3>Мои навыки</h3>
                                                <div class=clearfix></div>
                                                <div class=float-separator></div>
                                                <div class=clearfix></div>
                                                <div class=custom-skillbar-holder>
                                                    <div class="skillbar-box animaper">
                                                        <div class=custom-skillbar-title><span>Photoshop</span></div>
                                                        <div class=skill-bar-percent>95%</div>
                                                        <div class=skillbar-bg data-percent=95%>
                                                            <div class=custom-skillbar></div>
                                                        </div>
                                                        <div class=custom-skillbar-title><span>Jquery</span></div>
                                                        <div class=skill-bar-percent>65%</div>
                                                        <div class=skillbar-bg data-percent=65%>
                                                            <div class=custom-skillbar></div>
                                                        </div>
                                                        <div class=custom-skillbar-title><span>HTML5</span></div>
                                                        <div class=skill-bar-percent>75%</div>
                                                        <div class=skillbar-bg data-percent=75%>
                                                            <div class=custom-skillbar></div>
                                                        </div>
                                                        <div class=custom-skillbar-title><span>CSS</span></div>
                                                        <div class=skill-bar-percent>75%</div>
                                                        <div class=skillbar-bg data-percent=75%>
                                                            <div class=custom-skillbar></div>
                                                        </div>
                                                        <div class=custom-skillbar-title><span>PHP</span></div>
                                                        <div class=skill-bar-percent>55%</div>
                                                        <div class=skillbar-bg data-percent=55%>
                                                            <div class=custom-skillbar></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class=item-box>
                                                <h3>Услуги</h3>
                                                <div class=clearfix></div>
                                                <div class=float-separator></div>
                                                <div class=clearfix></div>
                                                <div class=services-holder>
                                                    <ul>
                                                        <li class=transition2>
                                                            <a href=#serv-pop1 data-ser=modal>
<i class="fa fa-cloud transition"></i>
<h5><span>Дизайн</span></h5>
</a>
                                                        </li>
                                                        <li class=transition2>
                                                            <a href=#serv-pop2 data-ser=modal>
<i class="fa fa-code transition"></i>
<h5><span>Написание кода</span></h5>
</a>
                                                        </li>
                                                        <li class=transition2>
                                                            <a href=#serv-pop3 data-ser=modal>
<i class="fa fa-database transition"></i>
<h5><span>Обслуживание сайтов</span></h5>
</a>
                                                        </li>
                                                    </ul>
                                                    <div class=services-info id=serv-pop1>
                                                        <div class=serv-overlay></div>
                                                        <div class=row-fluid>
                                                            <div class=span3>
                                                                <i class="fa fa-cloud"></i>
                                                            </div>
                                                            <div class=span9>
                                                                <p>Ваш сайт посещают с разных устройств: стационарного компьютера или ноутбука, планшета, телефона, аудиоплеера или даже с часов. Важная часть работы над UX заключается в предоставлении каждому посетителю одинаковой версии сайта, независимо от устройства. </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=services-info id=serv-pop2>
                                                        <div class=serv-overlay></div>
                                                        <div class=row-fluid>
                                                            <div class=span3>
                                                                <i class="fa fa-code"></i>
                                                            </div>
                                                            <div class=span9>
                                                                <p>Я знаю такие Web языки программирования: PHP, JavaScript. Язык разметки HTML(5), таблицы стилей CSS(3), sass, язык запросов SQL, CMS WordPress, OpenCart, Bitrix, адаптивная верстка под мобильные устройства, фреймворк Bootstrap. ООП на PHP5, СУБД MySQL, библиотека jQuery.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=services-info id=serv-pop3>
                                                        <div class=serv-overlay></div>
                                                        <div class=row-fluid>
                                                            <div class=span3>
                                                                <i class="fa fa-database"></i>
                                                            </div>
                                                            <div class=span9>
                                                                <p>Готов вести и обслуживать ваши проекты, отлично знаю Appache, nginx администрирование Windows, Linux. </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=right-colum>
                                <div class=about-image>
                                    <div class=customNavigation>
                                        <a class="btn next-slide transition"><i class="fa fa-angle-right"></i></a>
                                        <a class="btn prev-slide transition"><i class="fa fa-angle-left"></i></a>
                                    </div>
                                    <div class="about-image-slider owl-carousel">
                                        <div class=item>
                                            <img src={{asset ('assets/images/1.jpg')}} alt class=respimg>
                                        </div>
                                        <div class=item>
                                            <img src={{asset ('assets/images/1.jpg')}} alt class=respimg>
                                        </div>
                                        <div class=item>
                                            <img src={{asset ('assets/images/1.jpg')}} alt class=respimg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section id=facts>
                            <div class=content>
                                <div class="facts row-fluid">
                                    <ul>
                                        <li class=span3>
                                            <h6> Проектов завершено</h6>
                                            <div class=num>257</div>
                                        </li>
                                        <li class=span3>
                                            <h6> Сайтов опубликовано</h6>
                                            <div class=num>95</div>
                                        </li>
                                        <li class=span3>
                                            <h6>Твиттов</h6>
                                            <div class=num>2195</div>
                                        </li>
                                        <li class=span3>
                                            <h5> Немного фактов </h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </section>

                        @if(isset($peoples)&& is_object($peoples))
                        <section id=testimonials>
                            <div class="overlay op8"></div>
                            <div class=bg style=background:url({{asset ('assets/images/bg/1.jpg')}})></div>
                            <div class=content>
                                <div class=testimonials-holder>
                                    <h3>Отзывы</h3>
                                    <div class=customNavigation>
                                        <a class="btn next-slide transition"><i class="fa fa-angle-right"></i></a>
                                        <a class="btn prev-slide transition"><i class="fa fa-angle-left"></i></a>
                                    </div>
                                    <div class=clearfix></div>
                                    <div id=testimonials-slider class=owl-carousel>
    
                                        @foreach($peoples as $people)
                                           <div class=item>
                                            <div class=row-fluid>
                                                <div class=span2>
                                                    <div class=testi-image>
                                                        {{Html::image('assets//images/clients/'.$people->images,'')}}
                                                    </div>
                                                </div>
                                                <div class=span10>
                                                    {!!$people->name!!}
                                                    {!!$people->text!!}
                                                    <a href=https://freelance.ru/reviews/stickpro/ class=testi-link>Посмотреть на Freelace.ru</a>
                                                </div>
                                            </div>
                                        </div> 
                                        @endforeach
                                        
                                        
                                    </div>
                                </div>
                                <div class=clearfix></div>
                            </div>
                        </section>    
                        @endif
                        
                    </div>
                </div>

           
                @elseif($page->id=='3')
                    
                 
                 <div class="swiper-slide slide-bg" style=background:url({{asset ('assets/images/bg/'.$page->images)}})>
                    <div class=container>
                        <div class=page-title>
                            <div class=content>
                                 {!! $page->name !!}
                                <div class=clearfix></div>
                                 {!! $page->text !!}
                                <div class=clearfix></div>
                                <div class=color-separator></div>
                                <div class=clearfix></div>
                            </div>
                            <div class=overlay></div>
                        </div>

                        @if($portfolios)
                            <section id="folio" class="gray-bg">
                                <div id="options">
                                    <ul id="filters" class="option-set" data-option-key="filter">
                                        <li class="filter actcat transition" data-filter="all">Все</li>
                                        @foreach($tags as $tag)
                                            <li class="filter transition" data-filter="{{$tag}}">{{$tag}}</li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div id="project-page-holder">
                                    <div class="clearfix"></div>
                                    <div id="project-page-data"></div>
                                    <div class="clearfix"></div>
                                    <div id="project-page-button" class="clearfix">
                                        <a id="project_close" class="transition" href="#"><i class="fa fa-times"></i></a>
                                    </div>
                                </div>

                                <div class=clearfix></div>

                                <div class="content">
                                    <div class="row-fluid">
                                        <div class="span12">
                                            <div id="folio_container">
                                               @foreach($portfolios as $portfolio)
                                                    <div class="box grid-2 notvisible open-project-link mix {{ $portfolio->filter }} mix_all">
                                                        <a href="{{ route('portfolio.details', ['id' => $portfolio->id]) }}" class="open-project">
                                                            <div class="folio-img-holder">
                                                                <img src="{{ asset('assets/images/folio/' . $portfolio->images) }}" class="respimg transition" alt="{{ $portfolio->name }}" title="{{ $portfolio->name }}">
                                                                <div class="folio-item">
                                                                    <div class="folio-overlay"></div>
                                                                    <span class="fol-but">Посмотреть</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class=box-details>
                                                            <h3>{{ $portfolio->name }}</h3>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        @endif
                    </div>
                </div>
                  
                @elseif($page->id=='4')
                <div class="swiper-slide slide-bg" style=background:url({{asset ('assets/images/bg/'.$page->images)}})>
                    <div class=container>
                        <div class=page-title>
                            <div class=content>
                                 {!! $page->name !!}
                                <div class=clearfix></div>
                                {!! $page->text !!}
                                <div class=clearfix></div>
                                <div class=color-separator></div>
                                <div class=clearfix></div>
                            </div>
                            <div class=overlay></div>
                        </div>
                        <section id=contact>
                            <div class=contact-header>
                                <h3>Написать</h3>
                            </div>
                            <div class=row>
                                <div id=contact-form>
                                    <div id=message></div>
                                    <form method=post action={{asset ('assets/php/contact.php')}} name=contactform id=contactform>
                                        <input name=name type=text id=name class=inputForm2 onclick=this.select() value=Имя>
                                        <input name=email type=text id=email onclick=this.select() value=E-mail>
                                        <textarea name=comments id=comments onclick=this.select()>Сообщение</textarea>
                                        <input type=submit class="send_message transition" id=submit value="Отправить сообщение" />
                                    </form>
                                </div>
                            </div>
                            <div class="contact-info gray-bg">
                                <ul>
                                    <li>
                                        <i class="fa fa-phone"></i>
                                        <a href=tel:79187509500 class=transition>+7(918)750 9500</a>
                                        <span class=contact-tooltip>Мой телефон</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o"></i>
                                        <a href=mailto:info@stick-design.com class=transition>info@stick-design.com</a>
                                        <span class=contact-tooltip>Мой email</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-paper-plane"></i>
                                        <a href=https://t.me/stick_qwe class=transition>@stick_qwe</a>
                                        <span class=contact-tooltip>Мой телеграм</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-skype"></i>
                                        <a href=skype:stick_25 class=transition>stick_25</a>
                                        <span class=contact-tooltip>Мой skype</span>
                                    </li>
                                </ul>
                            </div>
                        </section>
                        <section id=contact-social>
                            <h2>Social</h2>
                            <div class=overlay></div>
                            <div class="bg bg-parallax" style=background:url({{asset ('assets/images/bg/1.jpg')}})></div>
                            <div class=content>
                                <ul>
                                    <li><a href=https://vk.com/id383968 target=_blank class=transition>vkontakte</a></li>
                                    <li><a href=https://twitter.com/stick_qwe target=_blank class=transition>twitter</a></li>
                                    <li><a href=https://instagram.com/stick_qwe target=_blank class=transition>Instagram</a></li>
                                    <li><a href=https://t.me/stick_qwe target=_blank class=transition>telegram</a></li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
                    @endif

                @endforeach

                
                 @endif
                
               
            </div>
        </div>