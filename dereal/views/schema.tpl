<h1>Schema</h1>

<table>
<td style="border: 1px solid black; background-color: #d7d7d7" width='300px'>Titel</td><td width='100px' style="border: 1px solid black; background-color: #d7d7d7">Prijs</td><td width='200px' style="border: 1px solid black; background-color: #d7d7d7">Datum</td><td width='100px' style="border: 1px solid black; background-color: #d7d7d7">Locatie</td><td style="border: 1px solid black; background-color: #d7d7d7">Kopen</td>
{foreach from=$result2 item=oneItem}
    <tr><td style="border: 1px solid black">{$oneItem.titel}</td>
        <td style="border: 1px solid black">€ {$oneItem.prijs}</td>
        <td style="border: 1px solid black">{$oneItem.datum|date_format:"%e, %B, %Y"}</td>
        <td style="border: 1px solid black">{$oneItem.locatie}</td>
        <td ><button>Koop nu</button></td>
    </tr>
{/foreach}
</table>