<ul id='menu'>
	<li><a href='index.php'>صفحه اصلی</a></li>
	<li><a href='about.php'>درباره ما</a></li>
	<li><a href='admin/index.php'>مدیریت</a></li>	
</ul>

<script>
for (var i = 0; i < document.links.length; i++) {
    if (document.links[i].href == document.URL) {
        document.links[i].className = 'active';
    }
}
</script>