<div class="site-header">
    <span>TaskList</span>
    <div class="user-section">
        <img src="{{ Auth::user()->avatar }}">
        <span>{{ Auth::user()->name }}</span>
        <i class="fa fa-arrow-circle-down"id="profileMenu"></i>
    </div>
</div>
@section('scripts')
<script src="/js/menu.js"></script>
@endsection