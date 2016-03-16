#Pymframe

##What is it?

Pymframe integrates NPR's excellent pym.js library into Wordpress. 

Pym.js allows for responsive iFrames by allowing a parent page and iframed child page to communicate. The child page communicates its height and the parent page adjusts the iframe's height accordingly.

This plugin allows easy embedding of pym.js enabled pages and loads the pym.js script automatically in pages that include the shortcode (Note: in pages that do not use the shortcode, pym.js is not loaded -- so no pointless web requests).

##Usage

###Preparation

Create a page, say a responsive d3 visualization and host it somewhere (e.g. http://myhost.com/example/index.html)
(An example viz is included in the repository)

At the bottom of your html file, after all other scripts, include the following lines:

```
<script type="text/javascript" src="./pym.min.js"></script>
<script type="text/javascript">var pymChild = new pym.Child({polling: 1000});</script>
```

###Installation and use

Install the plugin in wordpress. Now you can embed your viz using the following shortcode:

[pymframe url="http://myhost.com/example/index.html"]

Now, your iframe's height will adjust along with the iframed viz.

Pymframe's shortcode also accepts 'class' and 'id' attributes, so you can incorporate it into your theme.

[pymframe url="http://myhost.com/example/index.html" class="inset-layout" id="populationchart"]
 

