@if(session()->has('message'))
<div id="flash-message" class="fixed top-0 left-1/2 transform -translate-x-1/2 bg-laravel text-white px-48 py-3">
    <p>
        {{ session('message') }}
    </p>
</div>

<script>
    setTimeout(function() {
        document.getElementById('flash-message').style.display = 'none';
    }, 3000); // The message will disappear after 3 seconds
</script>
@endif
