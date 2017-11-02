<script type="text/javascript">
@if (null !== \Auth::user())
    @if(\Auth::user()->type == 'admin')
        window.location = "admin-home";
    @elseif (\Auth::user()->type == 'development')
        window.location = "development-home";
    @elseif(\Auth::user()->type == 'finance')
        window.location = "finance-home";
@elseif(\Auth::user()->type == 'sales')
    window.location = "sales-home";
    @endif
@else
    window.location = "login";
@endif
</script>




