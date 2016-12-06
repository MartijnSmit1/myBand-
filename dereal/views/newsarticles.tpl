<section>
{foreach from=$result item=oneItem}
    <article>
        <h1>{$oneItem.title}</h1>
        <p>{$oneItem.content|truncate:30}</p>
        <img src="images/{$oneItem.image}" style="width: 300px"></img>
        <p>{$oneItem.date_created|date_format:"%e, %B, %Y"}</p>
    </article>
{/foreach}
</section>
<ul>
    <li> <a href="home?pagenr=1">1</a></li>
    <li> <a href="home?pagenr=2">2</a></li>
    <li> <a href="home?pagenr=3">3</a></li>
    <li> <a href="home?pagenr=4">4</a></li>
    <li> <a href="home?pagenr=5">5</a></li>
</ul>