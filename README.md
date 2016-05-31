# Twig uSort plugin for Craft CMS

Implements uSort into Twig.

## Installation

To install Twig uSort, follow these steps:

1. Download & unzip the file and place the `twigusort` directory into your `craft/plugins` directory
2.  -OR- do a `git clone https://github.com/roberttolton/twigusort.git` directly into your `craft/plugins` folder.  You can then update it with `git pull`
3. Install plugin in the Craft Control Panel under Settings > Plugins
4. The plugin folder should be named `twigusort` for Craft to see it.  GitHub recently started appending `-master` (the branch name) to the name of the folder for zip file downloads.

Twig uSort works on Craft 2.4.x and Craft 2.5.x.

## Using Twig uSort

Example usage:

```
{% set entries = craft.entries.section('testEntries').find() | twigUsort( 'testField', '["Apple","Orange","Banana"]' ) %}

{% for entry in entries %}

	{{ entry.title }}<br/>
	{{ entry.testField }}<br/>

	<hr/>

{% endfor %}
```

The first parameter is a field handle, the second is a JSON encoded array of ALL the correct values in their desired order.

## Twig uSort Roadmap

Some things to do, and ideas for potential features:

* Don't know yet!

## Twig uSort Changelog

### 1.0.0 -- 2016.05.31

* Initial release

Brought to you by [Robert Tolton](http://fuelintegrated.com)