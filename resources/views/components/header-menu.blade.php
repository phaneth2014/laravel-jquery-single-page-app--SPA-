<ul class="header-menu">
    <li><a href="/" components="home/navigate" class="{{ request()->path()=='/' ? 'active' : '' }}">Home</a></li>
    <li><a href="/about" components="about/navigate" class="{{ request()->path()=='about' ? 'active' : '' }}">About</a></li>
    <li><a href="/contact" components="contact/navigate" class="{{ request()->path()=='contact' ? 'active' : '' }}">Contact</a></li>
    <li><a href="/settings" components="settings/navigate" class="{{ request()->path()=='settings' ? 'active' : '' }}">Settings</a></li>
</ul>

<script>

    document.addEventListener('DOMContentLoaded', function(){
        {location.pathname === '/' ? navigatePage('/home/navigate') : navigatePage(location.pathname + '/navigate')}
    })

    document.querySelectorAll('[components]').forEach((a)=>{
        a.addEventListener('click', function(e){
            e.preventDefault();
            $('.navigate-loader').show();
            linkInActive();
            a.classList.add('active');
            navigatePage(a.getAttribute('components'));
            history.pushState(null,null,a.href);
        })
    })

    function navigatePage(component){
       $.get(component, function(data){
            $('#content').empty().append(data);
            $('.navigate-loader').hide();
       });
    }

    function linkInActive(){
        document.querySelectorAll('[components]').forEach((a)=>{
            a.classList.remove('active');
        });
    }
</script>
