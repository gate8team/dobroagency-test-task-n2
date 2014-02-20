{* Partners template here *}
{* Consider that sponsors have isPartner flag = true or false *}
{* Consider that partners have isPartner flag = true *}
<h1 class="dark">{$generalSponsors}</h1>
<ul class="partnersTwoCols">
    {foreach from = $partners item = partner}
        {if $partner->isImportant}
        <li>
            <img src='http://placehold.it/450x120' /> {*In real system should be like this: <img src="{$partner->logo} />">*}
            <p>
                <b class="companyName dark">{$partner->name}</b><br/>
                {$partner->description}
            </p>
        </li>
        {/if}
    {/foreach}
</ul>

<br/><br/>

<h1 class="dark">{$sponsors}</h1>
<ul class="partnersThreeCols">
    {foreach from = $partners item = partner}
        {if !$partner->isImportant}
            <li>
                <img src='http://placehold.it/310x120' /> {*In real system should be like this: <img src="{$partner->logo} />">*}
                <p>
                    <b class="companyName dark">{$partner->name}</b>
                </p>
            </li>
        {/if}
    {/foreach}
</ul>

<br/><br/>

<h1 class="dark">{$ourPartners}</h1>
<ul class="partnersFourCols">
    {foreach from = $partners item = partner}
        {if !$partner->isPartner}
            <li>
                <img src='http://placehold.it/230x120' /> {*In real system should be like this: <img src="{$partner->logo} />">*}
            </li>
        {/if}
    {/foreach}
</ul>