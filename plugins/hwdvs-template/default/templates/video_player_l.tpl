{* 
//////
//    @version [ Nightly Build ]
//    @package hwdVideoShare
//    @copyright (C) 2007 - 2011 Highwood Design
//    @license http://creativecommons.org/licenses/by-nc-nd/3.0/
//////
*}

{include file='header.tpl'}

{if $print_nextprev or $print_videourl or $print_embedcode or $print_uservideolist or $print_relatedlist}
<div class="sic-container">
  
  <div class="sic-right">

    {if $print_ads}{if $advert4}<div class="standard"><div class="padding"><div id="hwdadverts-nopadding">{$advert4}</div></div></div>{/if}{/if}
    
    {if $print_uservideolist}
    <div class="standard">
      <h2>{$smarty.const._HWDVIDS_TITLE_MOREBYUSR} {$videoplayer->uploader}</h2>
      <div class="scoller">
      <div class="list">
        <div class="box">
          {foreach name=outer item=data from=$userlist}
	  {include file="video_list_small.tpl"}
	  <div style="clear:both;"></div>
          {/foreach}
        </div>
      </div>  
      </div>
    </div>
    {/if}
    
    {if $print_relatedlist}
    <div class="standard">
      <h2>{$smarty.const._HWDVIDS_RELATED}</h2>
      <div class="scoller">
      <div class="list">
        <div class="box">
          {foreach name=outer item=data from=$listrelated}
	  {include file="video_list_small.tpl"}
	  <div style="clear:both;"></div>
          {/foreach}
        </div>
      </div>  
      </div>
    </div>
    {/if}

    {if $print_categoryvideolist}
    <div class="standard">
      <h2>{$smarty.const._HWDVIDS_MORECATVIDS}</h2>
      <div class="scoller">
      <div class="list">
        <div class="box">
          {foreach name=outer item=data from=$categoryvideolist}
	  {include file="video_list_small.tpl"}
	  <div style="clear:both;"></div>
          {/foreach}
        </div>
      </div>  
      </div>
    </div>
    {/if}
    
  </div>
  
  <div class="sic-center">
{/if}  
    <div class="standard">
      <h2>{$videoplayer->title} {$videoplayer->editvideo} {$videoplayer->deletevideo} {$videoplayer->publishvideo} {$videoplayer->approvevideo}</h2>
      <div class="padding"><center>{$videoplayer->player}</center></div>
    </div>

    <div class="standard">
      <div class="padding">
        {include file='video_details.tpl'}
      </div>
    </div>

{if $print_nextprev or $print_videourl or $print_embedcode or $print_uservideolist or $print_relatedlist}
  </div>
</div>
{/if}

<div style="clear:both;"></div>
{if $print_comments}
    <div class="standard">
      <h2>{$smarty.const._HWDVIDS_TITLE_VIDCOMMS}</h2>
      {$videoplayer->comments}
    </div>
{/if} 
<div style="clear:both;"></div>

{include file='footer.tpl'}
