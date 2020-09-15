<!-- back to top floating button -->
<button onclick="topFunction()" id="floatBT" title="Go to top">
    <i class="fa fa-arrow-up"></i>
</button>
{{-- logout button --}}
<form class="icon-bar" style="z-index: 1000" method="post" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="facebook px-4 py-4"><i class="fa fa-sign-out-alt"></i></button>
</form>