<div class="animate__animated animate__zoomIn grid-x grid-padding-x">
    <div class="medium-4 medium-offset-4 cell">
        <div class="callout small @if($type == "error") alert @else success @endif">
            <h6>{{ ucfirst($type) }}</h6>
            @if($errors)
                @foreach($errors as $error)
                    <div class="alert-text">
                        <small>{{ $error }}</small>
                    </div>
                @endforeach
            @else
                <h3>{{ $result }}</h3>
            @endif
        </div>
    </div>
</div>
