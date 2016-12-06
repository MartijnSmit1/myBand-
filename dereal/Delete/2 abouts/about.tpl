{*<div><h1>About</h1></div>*}
<div id="all">
{foreach from=$result2 item=oneItem}

    <div class="containerAL">
        <div class="headA">
             <h2 id="h2">{$oneItem.titel}</h2>
        </div>
        <img src="{$oneItem.image}" style="height: 200px">
        <p id="info">{$oneItem.informatie}</p>
        <p>{{$oneItem.datum|date_format:"%e, %B, %Y"}}</p>
    </div>

{/foreach}
{foreach from=$result3 item=oneItem}
    <div class="containerAR">
        <div class="headA">
             <h2>{$oneItem.titel}</h2>
        </div>
        <img src="{$oneItem.image}" style="height: 200px">
        <p id="info">{$oneItem.informatie}</p>
        <p>{{$oneItem.datum|date_format:"%e, %B, %Y"}}</p>
    </div>
{/foreach}
</div>


{*<style>*}
    {*.containerAL{*}
        {*width: 600px;*}
        {*height: 450px;*}
        {*background-color: red;*}
        {*/*float: left;*/*}
    {*}*}
    {*.containerAR{*}
        {*width: 600px;*}
        {*height: 450px;*}
        {*background-color: red;*}
        {*margin-left: 700px;*}
        {*position: absolute;*}
        {*top: 70px;;*}
    {*}*}
    {*.headA{*}
        {*background-color: green;*}
    {*}*}
{*</style>*}