<div class="item-data project-page">
    <div class="content">
        <div class="prject-ajax-box">
            <div class="left-colum elemajax">
                <div id="project-slider" class="owl-carousel">
                    <div class="item">
                        <img src="{{ asset('assets/images/folio/' . $portfolio->images) }}" class="respimg"></div>

                </div>
            </div>
            <div class="right-colum elemajax">
                <div class="project-discription">
                    <h3>{{ $portfolio->name }}</h3>
                    <h4>design / web</h4>
                    {{-- Описания пока нет в БД --}}
                    <p>{{ $portfolio->description }}</p>
                    <a href="{{ $portfolio->url }}" class="button float-button content-button   transition hide-icon"><i class="fa fa-angle-right transition2"></i> <span class="text transition color-bg">Посмотреть проект</span></a>
                </div>
            </div>
        </div>
    </div>
</div>