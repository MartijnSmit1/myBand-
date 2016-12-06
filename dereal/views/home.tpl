<h1>Home</h1>
<div id="list">
    <ul>
        {for $i=1 to $total_nr_articles}
            <li id="li"><a href="?pagenr={$i}">{$i}</a> </li>
        {/for}
    </ul>
</div>

<section>
    {foreach from=$result3 item=oneItem}
        <div id="berichten">
    <article>
            <h1 id="titelH">{$oneItem.titel}</h1>
            <img id="imageH" src="{$oneItem.image}"></img>
            <p id="infoH">{$oneItem.informatie}</p>
            <p id="datumH">{$oneItem.datum|date_format:"%e, %B, %Y"}</p>
        </article>
    </div>

    {/foreach}
</section>
