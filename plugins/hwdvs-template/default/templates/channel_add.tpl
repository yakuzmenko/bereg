{* 
//////
//    @version [ Nightly Build ]
//    @package hwdVideoShare
//    @copyright (C) 2007 - 2011 Highwood Design
//    @license http://creativecommons.org/licenses/by-nc-nd/3.0/
//////
*}

{include file='header.tpl'}

<form name="creategroup" action="{$form_add_channel}" method="post" onsubmit="return chkform()">
<div class="standard">
  <h2>{$smarty.const._HWDVIDS_WTYNC}, {$username}</h2>
  <table width="100%" cellpadding="0" cellspacing="4" border="0">
    <tr>
      <td width="150">{$smarty.const._HWDVIDS_YOURCHANNEL}</td>
      <td>{$channelUrl}</td>
    </tr>
    <tr>
      <td valign="top">{$smarty.const._HWDVIDS_DESC} <font class="required">*</font></td>
      <td valign="top"><textarea rows="4" cols="20" name="channel_description" class="inputbox" style="width: 200px;"></textarea><br /></td>
    </tr>
    <tr>
      <td colspan="2"><font class="required">*</font> {$smarty.const._HWDVIDS_INFO_REQUIREDFIELDS}</td>
    </tr>
  </table>
</div>

<div class="standard">
  <h2>{$smarty.const._HWDVIDS_YOURSTYLE}</h2>
</div>

<div class="standard">
  <h2>{$smarty.const._HWDVIDS_YOURPREFERENCES}</h2>
</div>

<div class="standard">
  <h2>{$smarty.const._HWDVIDS_TITLE_OPTIONS}</h2>
  <table width="100%" cellpadding="0" cellspacing="4" border="0">
    <tr>
      <td width="150">{$smarty.const._HWDVIDS_ACCESS}</td>
      <td>
        <select name="public_private">
          <option value="public" selected>{$smarty.const._HWDVIDS_SELECT_PUBLIC}</option>
          <option value="registered">{$smarty.const._HWDVIDS_SELECT_REG}</option>
        </select>
      </td>
    </tr>
  </table>
</div>

<div class="standard">
  <table width="100%" cellpadding="0" cellspacing="4" border="0">
    {if $print_captcha}
    <tr>
      <td width="150"></td>
      <td>{$captcha}</td>
    </tr>
    <tr>
      <td>{$smarty.const._HWDVIDS_INFO_SECURECODE} <font class="required">*</font></td>
      <td><input id="security_code" name="security_code" type="text" /></td>
    </tr>
    {/if}
    <tr>
      <td width="150"></td>
      <td><input type="submit" name="send" class="inputbox" value="{$smarty.const._HWDVIDS_BUTTON_SAVECHANNEL}" /></td>
    </tr>
  </table>
</div>
<input type="hidden" name="require_approval" value="0"/>
</form>

{include file='footer.tpl'}



