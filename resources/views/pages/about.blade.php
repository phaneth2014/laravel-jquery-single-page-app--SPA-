<h1>I am about page</h1>
<script>
    var title = "{{ $title }}";
    document.title = title + " - {{ env('APP_NAME') }}";
</script>
