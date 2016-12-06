{*<div><h1>About</h1></div>*}
{foreach from=$result item=oneItem}

    <div class="containerAL">
        <div class="headA">
             <h2 id="h2">{$oneItem.titel}</h2>
        </div>
        <img src="{$oneItem.image}" style="height: 200px">
        <p id="info">{$oneItem.informatie}</p>
        <p>{{$oneItem.datum|date_format:"%e, %B, %Y"}}</p>
    </div>

{/foreach}