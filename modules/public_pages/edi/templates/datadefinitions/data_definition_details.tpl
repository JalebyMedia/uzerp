{** 
 *	(c) 2000-2012 uzERP LLP (support#uzerp.com). All rights reserved. 
 * 
 *	Released under GPLv3 license; see LICENSE. 
 **}
{content_wrapper}
	{* $Revision: 1.2 $ *}
		<ul id="collapsible_tree" class="collapsible_tree float-left">
			{with model=$models.DataDefinitionDetail legend="Data Definition Detail"}
				{include file='./definition_tree.tpl' collection=$items children=sub_definition }
			{/with}
		</ul>
{/content_wrapper}