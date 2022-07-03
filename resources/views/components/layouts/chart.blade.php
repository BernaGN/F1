<div class="col-sm-{{ $sizeColumn }}">
    <div class="card">
        <div class="card-header">{{ $value->options['chart_title'] }}</div>
        <div class="card-body">
            {!! $value->renderHtml() !!}
        </div>
    </div>
</div>
