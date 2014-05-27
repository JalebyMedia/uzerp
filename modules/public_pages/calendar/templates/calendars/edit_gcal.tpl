{** 
 *	(c) 2000-2012 uzERP LLP (support#uzerp.com). All rights reserved. 
 * 
 *	Released under GPLv3 license; see LICENSE. 
 **}
{content_wrapper}
	{form controller="calendars" action="save"}
		{with model=$calendar}
			{input type='hidden' attribute='id'}
			{input type='hidden' attribute='type'}
			{view_section heading='calendar_details'}
				{input type='text' attribute='name'}
				{input type='text' attribute='gcal_url' label='feed_address'}
				<dt>Calendar Colour:</dt>
				<dd><ul class="calendar_colours">
					{foreach from=$colours key=key item=value}
						{if $calendar->colour == '' || $calendar->colour != $value}
							<li style="background-color: {$value};"><input name="Calendar[colour]" value="{$value}" type="radio" class="radio"></li>
						{elseif $calendar->colour == $value}
							<li style="background-color: {$value};"><input name="Calendar[colour]" value="{$value}" type="radio" checked class="radio"></li>
						{/if}
					{/foreach}
				</ul></dd>
			{/view_section}
		{/with}
		{with model=$models.CalendarShareCollection}
			{view_section heading="sharing"}
				<dt><label for="username">Shared users</label>:</dt><dd>
					<p>These users will have read access to this calendar.</p>
					<select id="username" name="CalendarShareCollection[username][]" multiple>
						{html_options options=$users selected=$shared_users}
					</select>
				</dd>
			{/view_section}
		{/with}
		{submit}
	{/form}
{/content_wrapper}