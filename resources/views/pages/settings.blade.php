<h1>I am settings page</h1>
<script>
    var title = "{{ $title }}";
    document.title = title + " - {{ env('APP_NAME') }}";
</script>
