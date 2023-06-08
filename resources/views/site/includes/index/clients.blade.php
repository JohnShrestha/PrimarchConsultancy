@if(isset($data['client']))
<div class="partner-area pt-3 pb-3">
    <div class="container">
        <div class="partner-wrap owl-carousel owl-theme">
            @foreach($data['client'] as $row)
            <div class="single-logo">
                <a href="{{ $row->url }}">
                    <img src="{{ asset($row->image )}}" alt="{{ $row->title }}">
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif