Controlled Chaos Fancybox
=========================
A WordPress plugin to add Fancybox 3 functionality to images and galleries.

Fancybox documentaion at: http://fancyapps.com/fancybox/3/docs/

## Default Behavior
The plugin sets the add image "Link to" field as "File" by default.

## Single Images
Links to single image files added via the content editor are detected automatically and open in Fancybox individually. Images linked to content or external sites will follow the link as expected.

## Gallery Images
Gallery images will open in Fancybox with the other images in the gallery. Galleries are segregated by ID for use with multiple galleries per post.

## Gallery Options
There is no user interface with this plugin, however there are several options available by editing the WordPress gallery shortcode created in the post.

<strong>Example:</strong><br />
`[gallery size="medium" columns="3" ids="12,14,22,35,11,32" link="file" captions="captions" infobar="true" arrows="false"]`

Following is a list of available shortcode parameters:

### Loop Images
Enable infinite gallery navigation. False by default.
* loop="false"
* loop="true"

### Infobar
Display counter and navigation arrows at the top. False by default.
* infobar="false"
* infobar="true"

### Toolbar
Display toolbar buttons at the top. True by default.
* toolbar="true"
* toolbar="false"

### Arrows
Display navigation arrows at the screen edges. True by default.
* arrows="true"
* arrows="false"

### Thumbnail Images
Display thumbnails on opening. False by default.
* thumbs="true"
* thumbs="false"

### Captions
Display image caption field, image title field, or hide captions. Title by default.
* captions="title"
* captions="captions"
* captions="hide"

### Protect Images
Discourge downloading by disabling right click. False by default.
* protected="false"
* protected="true"
