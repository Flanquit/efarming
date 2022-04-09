@if(session('success'))
    <div class="alert alert-success mt-5">
        <i class="material-icons" data-notify="icon">add_alert</i>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="material-icons">close</i>
        </button>
        <span>
                <b> Success - </b>  {{ session('success') }}</span>
    </div>
@endif
@if(session('info'))
<div class="alert alert-info mt-5">
    <i class="material-icons" data-notify="icon">add_alert</i>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <i class="material-icons">close</i>
    </button>
    <span>
                <b> Info - </b> {{ session('info') }}</span>
</div>
@endif
@if(session('warning'))
<div class="alert alert-warning mt-5">
    <i class="material-icons" data-notify="icon">add_alert</i>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <i class="material-icons">close</i>
    </button>
    <span>
                <b> Warning - </b> {{ session('warning') }}</span>
</div>
@endif
@if(session('danger'))
<div class="alert alert-danger mt-5">
    <i class="material-icons" data-notify="icon">add_alert</i>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <i class="material-icons">close</i>
    </button>
    <span>
                <b> Danger - </b> {{ session('danger') }}</span>
</div>
@endif
@if(session('primary'))
<div class="alert alert-primary">
    <i class="material-icons" data-notify="icon">add_alert</i>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <i class="material-icons">close</i>
    </button>
    <span>
                {{ session('primary') }}</span>
</div>
@endif
