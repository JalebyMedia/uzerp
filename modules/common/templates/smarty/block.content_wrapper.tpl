{** 
 *	(c) 2000-2012 uzERP LLP (support#uzerp.com). All rights reserved. 
 * 
 *	Released under GPLv3 license; see LICENSE. 
 **}
{* $Revision: 1.4 $ *}

{foreach item=js from=$module_js}
	<script type="text/javascript">
		loadScript("{$js}")
	</script>
{/foreach}

<div {$block_content_wrapper.attrs} >

	{if $block_content_wrapper.title ne ''}
		<h1 class="page_title">{$block_content_wrapper.title}</h1>
	{/if}
	
	{if $block_content_wrapper.flash === TRUE}
		{flash}
	{/if}
	
	{$block_content_wrapper.content}

</div>