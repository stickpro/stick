<section>
 @if(isset($Portfolios) && is_object($Portfolios))   
  @foreach($Portfolios as $item)
<div class="item-data project-page">
    <div class="content">
        <div class="prject-ajax-box">
            <div class="left-colum elemajax">
                <div id="project-slider" class="owl-carousel">
                    <div class="item"><img src="images/folio/likwid.png" class="respimg"></div>
               
                </div>
            </div>
            <div class="right-colum elemajax">
                <div class="project-discription">
                    <h3>{{$item->name}}</h3>
                    <h4>design / web</h4>
                    <p>Сайт визитка, фирмы занимающейся ликвидацией прдприятий</p>
                    <a href="http://new.ub-pravoved.ru/" class="button float-button content-button   transition hide-icon"><i class="fa fa-angle-right transition2"></i> <span class="text transition color-bg">Посмотреть проект</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endif
</section>