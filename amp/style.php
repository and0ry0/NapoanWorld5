<?php
// Get content width
$content_max_width       = absint( $this->get( 'content_max_width' ) );

// Get template colors
$theme_color             = $this->get_customizer_setting( 'theme_color' );
$text_color              = $this->get_customizer_setting( 'text_color' );
$muted_text_color        = $this->get_customizer_setting( 'muted_text_color' );
$border_color            = $this->get_customizer_setting( 'border_color' );
$link_color              = $this->get_customizer_setting( 'link_color' );
$header_background_color = $this->get_customizer_setting( 'header_background_color' );
$header_color            = $this->get_customizer_setting( 'header_color' );
?>
/* Generic WP styling */

.alignright {
float: right;
}

.alignleft {
float: left;
}

.aligncenter {
display: block;
margin-left: auto;
margin-right: auto;
}

.amp-wp-enforced-sizes {
/** Our sizes fallback is 100vw, and we have a padding on the container; the max-width here prevents the element from overflowing. **/
max-width: 100%;
margin: 0 auto;
}

.amp-wp-unknown-size img {
/** Worst case scenario when we can't figure out dimensions for an image. **/
/** Force the image into a box of fixed dimensions and use object-fit to scale. **/
object-fit: contain;
}

/* Template Styles */

.amp-wp-content,
.amp-wp-title-bar div {
<?php if ( $content_max_width > 0 ) : ?>
	margin: 0 auto;
	max-width: <?php echo sprintf( '%dpx', $content_max_width ); ?>;
<?php endif; ?>
}

html {
background: <?php echo sanitize_hex_color( $header_background_color ); ?>;
}

body {
background: <?php echo sanitize_hex_color( $theme_color ); ?>;
color: <?php echo sanitize_hex_color( $text_color ); ?>;
line-height: 1.7;
font-family: -apple-system, BlinkMacSystemFont, "Helvetica Neue", "Segoe UI","Noto Sans Japanese","ヒラギノ角ゴ ProN W3", Meiryo, sans-serif;
}

/* Custom Styles */

body svg.displaynone {
	display: none;
}


.amp-ad-box {
margin: 30px auto;
text-align: center;
background: #eee;
}
.amp-ad-box small {
font-size: 0.7em;
}
.amp-wp-article-footer p.comment-message {
	font-size: 18px;
	color: #000;
	font-weight: bold;
}
.amp-wp-article-footer p.comment-message a{
	text-decoration: underline;
	color: #000;
	font-size: 1.2em;
}
.amp-wp-article-footer p.comment-message a:visited{
	color: #000;
}



.amp-wp-article-content img {
max-width: 100%;
height: auto;
zoom: 1.4;
/* 横幅大きくなったから無理矢理大きくする */
}
.amp-wp-article-content img.border {
border: solid 1px #444;
}
.amp-wp-article-content .youtube-box {
position: relative;
width: 100%;
padding-top: 56.25%;
margin: 0px 0px 5px;
}
.amp-wp-article-content .youtube-box iframe {
position: absolute;
top: 0;
right: 0;
width: 100%;
height: 100%;
}
.amp-wp-article-content a {
text-decoration: underline;
color: #0066FF;
}
.amp-wp-article-content a:hover {
color: #3F99FF;
}
.amp-wp-article-content a:visited {
color: #723c94;
}
.amp-wp-article-content a.back-link {
float: left;
}
.amp-wp-article-content a.next-link {
float: right;
}
.amp-wp-article-content a.back-link, .amp-wp-article-content a.next-link {
display: block;
padding: 3px;
margin: 2px 2px 2px 10px;
background: #fff;
border: solid 1px #777;
text-decoration: none;
font-size: 14px;
font-weight: bold;
color: #000;
transition: all .4s;
border-radius: 5px;
}
.amp-wp-article-content a.back-link:hover, .amp-wp-article-content a.next-link:hover {
border-color: #000000;
color: #000000;
box-shadow: 0px 0px 5px #646464;
transition: all .4s;
}
.amp-wp-article-content a.napo-art-link {
display: block;
padding: 8px;
border: solid 2px #2687e8;
background: #2687e8;
font-size: 1.1em;
color: #fff;
border-radius: 5px;
box-shadow: 0px 5px 0px #0072D4;
text-align: center;
transition: all .3s;
}
.amp-wp-article-content a.napo-art-link:hover {
background: #fff;
color: #2687e8;
}
.amp-wp-article-content p {
line-height: 1.7;
margin: 0px 0px 1.4em;
}
.amp-wp-article-content h1, .amp-wp-article-content h2, .amp-wp-article-content h3, .amp-wp-article-content h4, .amp-wp-article-content h5, .amp-wp-article-content h6 {
font-weight: bold;
line-height: 1.3;
margin: 0.7em 0;
}
.amp-wp-article-content h1 {
font-size: 1.7em;
border-left: 5px solid #2687e8;
box-shadow: 0px 0px 6px rgba(100, 100, 100, 0.5);
padding: 5px 0px 6px 5px;
border-radius: 0px 3px 3px 0px;
position: relative;
}
.amp-wp-article-content h2 {
font-size: 1.4em;
border: solid 2px #BDBDBD;
padding: 6px 5px 6px 12px;
border-radius: 0px 5px 5px 0px;
box-shadow: 0px 3px 0px #848484;
position: relative;
}
.amp-wp-article-content h2:before {
content: "";
display: block;
position: absolute;
width: 4px;
height: 100%;
background: #2687e8;
left: -2px;
top: 0px;
}
.amp-wp-article-content h3 {
font-size: 1.25em;
border: solid 1px #AAA;
padding: 6px 5px 6px 12px;
border-radius: 5px;
box-shadow: 0px 2px 0px #888;
}
.amp-wp-article-content h4 {
font-size: 1.17em;
border-bottom: 2px solid #ccc;
border-left: 2px solid #ccc;
padding: 0px 0px 4px 6px;
}
.amp-wp-article-content h5 {
font-size: 1.13em;
border-bottom: 1px solid #ccc;
padding: 0px 0px 4px 0px;
}
.amp-wp-article-content #contents-list {
margin: 16px 6px;
padding: 0px 17px 10px;
border: solid 2px #6495ED;
border-radius: 10px;
box-shadow: 0px 5px 0px rgba(16, 78, 130, 0.3);
}
.amp-wp-article-content #contents-list ul li {
font-weight: bold;
}
.amp-wp-article-content #contents-list ul > li {
margin: 4px;
font-size: 24px;
}
.amp-wp-article-content #contents-list ul > li > ul > li {
font-size: 0.9em;
}
.amp-wp-article-content #contents-list ul > li > ul > li > ul > li {
font-size: 0.9em;
}
.amp-wp-article-content #contents-list ul > li > ul > li > ul > li > ul > li {
font-size: 0.9em;
}
.amp-wp-article-content dl {
margin: 30px 0px 10px;
padding: 0px 20px 12px;
border: solid 1px #A1A1A1;
box-shadow: 0px 3px 0px rgba(1, 1, 1, 0.1);
}
.amp-wp-article-content dl dt {
position: relative;
display: inline-block;
top: -10px;
background: #fff;
padding: 0 6px;
font-weight: bold;
font-size: 1.1em;
}
.amp-wp-article-content dl dd {
position: relative;
top: 0px;
margin: 0px;
}
.amp-wp-article-content small {
font-size: 0.8em;
}
.amp-wp-article-content strong {
font-weight: bold;
background: linear-gradient(transparent 80%, #ffff66 75%);
}
.amp-wp-article-content kbd {
padding: 4px 8px;
margin: 3px 6px;
background: #EFF0F2;
border-radius: 4px;
border-top: 1px solid #F5F5F5;
box-shadow: 0 1px 0 #c3c3c3, 0 2px 0 #c9c9c9, 0 2px 3px #333333;
color: #000;
text-align: center;
line-height: 1;
font-weight: bold;
display: inline-block;
vertical-align: middle;
zoom: 1;
position: relative;
bottom: 0.2em;
}
.amp-wp-article-content blockquote {
margin: 1em 0.5em 1em;
padding: 1em;
background: #eee;
border-radius: 8px;
}
.amp-wp-article-content table {
border: none;
margin-bottom: 10px;
}
.amp-wp-article-content table th, .amp-wp-article-content table td {
border: 1px solid #bbb;
padding: 4px 8px;
}
.amp-wp-article-content table th.big, .amp-wp-article-content table td.big {
font-size: 1.1em;
font-family: -apple-system, BlinkMacSystemFont, "Helvetica Neue", "Segoe UI","Noto Sans Japanese","ヒラギノ角ゴ ProN W3", Meiryo, sans-serif;
}
.amp-wp-article-content table th {
font-weight: bold;
background: #e1e1e1;
}
.amp-wp-article-content table td {
line-height: 1.6;
}
.amp-wp-article-content table td.enable {
background: #98FB98;
}
.amp-wp-article-content table td.disable {
background: #CD5C5C;
}
.amp-wp-article-content table .bottomB {
border-bottom: solid 2px #222;
}
.amp-wp-article-content table ul {
margin-left: 0px;
}
.amp-wp-article-content table thead th {
background: #D0D0D0;
border: solid 1px #9E9E9E;
}
.amp-wp-article-content table.map-table th {
padding: 12px 19px 11px;
font-weight: bold;
}
.amp-wp-article-content table.map-table td {
text-align: left;
padding: 8px;
}
.amp-wp-article-content table.item-list-table ul {
list-style-type: none;
}
.amp-wp-article-content .sprite {
display: inline-block;
vertical-align: middle;
height: 16px;
width: 16px;
background-repeat: no-repeat;
image-rendering: pixelated;
}
.amp-wp-article-content .inv-sprite {
background-image: url(https://napoan.com/wp-content/uploads/2017/06/InvSprite.png);
width: 32px;
height: 32px;
}
.amp-wp-article-content .item-sprite {
background-image: url(https://napoan.com/wp-content/uploads/2017/04/ItemCSS.png);
}
.amp-wp-article-content .entity-sprite {
background-image: url(https://napoan.com/wp-content/uploads/2016/08/EntityCSS.png);
}
.amp-wp-article-content .entity-sprite.entity-item {
background-position: -16px -0px;
}
.amp-wp-article-content .entity-sprite.entity-xp_orb {
background-position: -160px -64px;
}
.amp-wp-article-content .entity-sprite.entity-area_effect_cloud {
background-position: -144px -36px;
}
.amp-wp-article-content .entity-sprite.entity-leash_knot {
background-position: -144px -112px;
}
.amp-wp-article-content .entity-sprite.entity-painting {
background-position: -64px -80px;
}
.amp-wp-article-content .entity-sprite.entity-item_frame {
background-position: -112px -112px;
}
.amp-wp-article-content .entity-sprite.entity-evocation_fangs {
background-position: -128px -128px;
}
.amp-wp-article-content .entity-sprite.entity-armor_stand {
background-position: -0px -208px;
}
.amp-wp-article-content .entity-sprite.entity-ender_crystal {
background-position: -48px -64px;
}
.amp-wp-article-content .entity-sprite.entity-egg {
background-position: -96px -48px;
}
.amp-wp-article-content .entity-sprite.entity-arrow {
background-position: -64px -48px;
}
.amp-wp-article-content .entity-sprite.entity-snowball {
background-position: -80px -48px;
}
.amp-wp-article-content .entity-sprite.entity-fireball {
background-position: -112px -48px;
}
.amp-wp-article-content .entity-sprite.entity-small_fireball {
background-position: -112px -48px;
}
.amp-wp-article-content .entity-sprite.entity-ender_pearl {
background-position: -144px -48px;
}
.amp-wp-article-content .entity-sprite.entity-eye_of_ender_signal {
background-position: -160px -48px;
}
.amp-wp-article-content .entity-sprite.entity-potion {
background-position: -160px -112px;
}
.amp-wp-article-content .entity-sprite.entity-xp_bottle {
background-position: -112px -64px;
}
.amp-wp-article-content .entity-sprite.entity-wither_skull {
background-position: -176px -64px;
}
.amp-wp-article-content .entity-sprite.entity-fireworks_rocket {
background-position: -144px -192px;
}
.amp-wp-article-content .entity-sprite.entity-spectral_arrow {
background-position: -64px -48px;
}
.amp-wp-article-content .entity-sprite.entity-shulker_bullet {
background-position: -96px -96px;
}
.amp-wp-article-content .entity-sprite.entity-dragon_fireball {
background-position: -112px -96px;
}
.amp-wp-article-content .entity-sprite.entity-llama_spit {
background-position: -160px -128px;
}
.amp-wp-article-content .entity-sprite.entity-tnt {
background-position: -0px -64px;
}
.amp-wp-article-content .entity-sprite.entity-commandblock_minecart {
background-position: -80px -96px;
}
.amp-wp-article-content .entity-sprite.entity-boat {
background-position: -128px -32px;
}
.amp-wp-article-content .entity-sprite.entity-minecart {
background-position: -144px -32px;
}
.amp-wp-article-content .entity-sprite.entity-chest_minecart {
background-position: -160px -32px;
}
.amp-wp-article-content .entity-sprite.entity-furnace_minecart {
background-position: -176px -32px;
}
.amp-wp-article-content .entity-sprite.entity-tnt_minecart {
background-position: -128px -80px;
}
.amp-wp-article-content .entity-sprite.entity-hopper_minecart {
background-position: -144px -80px;
}
.amp-wp-article-content .entity-sprite.entity-spawner_minecart {
background-position: -160px -80px;
}
.amp-wp-article-content .entity-sprite.entity-evocation_illager {
background-position: -80px -128px;
}
.amp-wp-article-content .entity-sprite.entity-vex {
background-position: -96px -128px;
}
.amp-wp-article-content .entity-sprite.entity-vindication_illager {
background-position: -112px -128px;
}
.amp-wp-article-content .entity-sprite.entity-creeper {
background-position: -16px -16px;
}
.amp-wp-article-content .entity-sprite.entity-skeleton {
background-position: -144px -0px;
}
.amp-wp-article-content .entity-sprite.entity-wither_skeleton {
background-position: -64px -64px;
}
.amp-wp-article-content .entity-sprite.entity-stray {
background-position: -16px -128px;
}
.amp-wp-article-content .entity-sprite.entity-spider {
background-position: -160px -0px;
}
.amp-wp-article-content .entity-sprite.entity-giant {
background-position: -128px -0px;
}
.amp-wp-article-content .entity-sprite.entity-zombie {
background-position: -128px -0px;
}
.amp-wp-article-content .entity-sprite.entity-zombie_villager {
background-position: -16px -80px;
}
.amp-wp-article-content .entity-sprite.entity-husk {
background-position: -32px -128px;
}
.amp-wp-article-content .entity-sprite.entity-slime {
background-position: -32px -16px;
}
.amp-wp-article-content .entity-sprite.entity-ghast {
background-position: -48px -16px;
}
.amp-wp-article-content .entity-sprite.entity-zombie_pigman {
background-position: -64px -16px;
}
.amp-wp-article-content .entity-sprite.entity-enderman {
background-position: -128px -16px;
}
.amp-wp-article-content .entity-sprite.entity-cave_spider {
background-position: -0px -16px;
}
.amp-wp-article-content .entity-sprite.entity-silverfish {
background-position: -144px -16px;
}
.amp-wp-article-content .entity-sprite.entity-blaze {
background-position: -112px -32px;
}
.amp-wp-article-content .entity-sprite.entity-magma_cube {
background-position: -176px -16px;
}
.amp-wp-article-content .entity-sprite.entity-ender_dragon {
background-position: -64px -32px;
}
.amp-wp-article-content .entity-sprite.entity-wither {
background-position: -0px -80px;
}
.amp-wp-article-content .entity-sprite.entity-witch {
background-position: -80px -64px;
}
.amp-wp-article-content .entity-sprite.entity-endermite {
background-position: -16px -112px;
}
.amp-wp-article-content .entity-sprite.entity-guardian {
background-position: -32px -112px;
}
.amp-wp-article-content .entity-sprite.entity-elder_guardian {
background-position: -48px -112px;
}
.amp-wp-article-content .entity-sprite.entity-shulker {
background-position: -80px -32px;
}
.amp-wp-article-content .entity-sprite.entity-bat {
background-position: -48px -80px;
}
.amp-wp-article-content .entity-sprite.entity-pig {
background-position: 0px 0px;
}
.amp-wp-article-content .entity-sprite.entity-sheep {
background-position: -16px -0px;
}
.amp-wp-article-content .entity-sprite.entity-cow {
background-position: -32px -0px;
}
.amp-wp-article-content .entity-sprite.entity-chicken {
background-position: -48px -0px;
}
.amp-wp-article-content .entity-sprite.entity-squid {
background-position: -64px -0px;
}
.amp-wp-article-content .entity-sprite.entity-wolf {
background-position: -80px -16px;
}
.amp-wp-article-content .entity-sprite.entity-mooshroom {
background-position: -80px -0px;
}
.amp-wp-article-content .entity-sprite.entity-snowman {
background-position: -96px -32px;
}
.amp-wp-article-content .entity-sprite.entity-ocelot {
background-position: -0px -48px;
}
.amp-wp-article-content .entity-sprite.entity-villager_golem {
background-position: -176px -48px;
}
.amp-wp-article-content .entity-sprite.entity-horse {
background-position: -0px -96px;
}
.amp-wp-article-content .entity-sprite.entity-donkey {
background-position: -16px -96px;
}
.amp-wp-article-content .entity-sprite.entity-mule {
background-position: -32px -96px;
}
.amp-wp-article-content .entity-sprite.entity-zombie_horse {
background-position: -64px -96px;
}
.amp-wp-article-content .entity-sprite.entity-skeleton_horse {
background-position: -48px -96px;
}
.amp-wp-article-content .entity-sprite.entity-rabbit {
background-position: -64px -112px;
}
.amp-wp-article-content .entity-sprite.entity-polar_bear {
background-position: -0px -128px;
}
.amp-wp-article-content .entity-sprite.entity-llama {
background-position: -64px -128px;
}
.amp-wp-article-content .entity-sprite.entity-villager {
background-position: -96px -0px;
}
.amp-wp-article-content .entity-sprite.entity-player {
background-position: -112px -0px;
}
.amp-wp-article-content .entity-sprite.entity-lightning_bolt {
background-position: -144px -64px;
}
.amp-wp-article-content .block-sprite {
background-image: url(https://napoan.com/wp-content/uploads/2017/04/BlockCSS.png);
}
.amp-wp-article-content ul, .amp-wp-article-content ol {
margin: 0.5em 0 0.5em 2em;
}
.amp-wp-article-content ul li, .amp-wp-article-content ol li {
margin: 0.3em 0;
}
.amp-wp-article-content ul.update-content, .amp-wp-article-content ol.update-content {
padding-left: 1.5em;
list-style-type: none;
margin: 0px;
margin-bottom: 1.6em;
}
.amp-wp-article-content ul.update-content li, .amp-wp-article-content ol.update-content li {
position: relative;
margin: 15px 0;
}
.amp-wp-article-content ul.update-content li:after, .amp-wp-article-content ol.update-content li:after {
display: block;
content: '';
position: absolute;
top: .5em;
left: -1em;
width: 7px;
height: 7px;
background: #2687E8;
border-radius: 100%;
}
.amp-wp-article-content ul.update-content li > ul, .amp-wp-article-content ul.update-content li > ol, .amp-wp-article-content ol.update-content li > ul, .amp-wp-article-content ol.update-content li > ol {
list-style-type: none;
font-size: 0.9em;
margin-left: 1em;
margin-bottom: 1em;
}
.amp-wp-article-content pre.hljs {
border-radius: 6px;
background: #222;
font-family: Consolas, 'Courier New', Courier, Monaco, monospace, Noto Sans;
margin: 0px 0px 8px;
}
.amp-wp-article-content pre.hljs .highlightline {
background: #7B4000;
display: inline-block;
width: 100%;
}
.amp-wp-article-content b.command {
font-size: 1.1em;
display: inline-block;
margin: 3px 2px 3px;
padding: 3px;
border-radius: 3px;
font-weight: bold;
background: #dbdbdb;
word-break: break-word;
}
.amp-wp-article-content .command-highlight {
display: inline-block;
padding: 2px 5px;
margin: 0px 2px;
background: #ECECEC;
border-radius: 3px;
border: solid 1px #CCC;
}
.amp-wp-article-content .black-highlight {
display: inline-block;
padding: 2px 5px;
margin: 0px 2px;
background: #222;
color: #fff;
border-radius: 3px;
font-family: -apple-system, BlinkMacSystemFont, "Helvetica Neue", "Segoe UI","Noto Sans Japanese","ヒラギノ角ゴ ProN W3", Meiryo, sans-serif;
}
.amp-wp-article-content .code {
font-family: Consolas, 'Courier New', Courier, Monaco, monospace, Noto Sans;
}
.amp-wp-article-content .strong-notice {
margin: 10px 6px;
padding: 10px;
border: solid 2px red;
background-color: #ffdddd;
box-shadow: 0px 3px 0px rgba(250, 100, 100, 0.3);
}
.amp-wp-article-content .mode {
display: inline-block;
margin: 3px;
padding: 1px 5px 1px;
border-radius: 3px;
color: #fff;
font-weight: bold;
font-size: 1.1em;
}
.amp-wp-article-content .imp {
background: #FF3333;
border: solid 2px #FF3333;
}
.amp-wp-article-content .chain {
background: #48D1CC;
color: #000000;
border: solid 2px #48D1CC;
}
.amp-wp-article-content .repeat {
background: #68228B;
border: solid 2px #68228B;
}
.amp-wp-article-content .con {
background: #fff;
border: solid 2px #000000;
padding: 1px 3px 1px;
color: #000000;
}
.amp-wp-article-content .unc {
background: #000000;
border: solid 2px #000000;
}
.amp-wp-article-content .nee {
background: #DDD;
color: #000000;
border: solid 2px #DDD;
}
.amp-wp-article-content .alw {
background: #CD0000;
border: solid 2px #CD0000;
}
.amp-wp-article-content span.v8, .amp-wp-article-content span.v7, .amp-wp-article-content span.v9, .amp-wp-article-content span.v10 {
display: inline-block;
margin: 2px;
padding: 3px 6px;
color: #fff;
font-weight: bold;
}
.amp-wp-article-content span.v8 {
background: #C71585;
}
.amp-wp-article-content span.v7 {
background: #006400;
}
.amp-wp-article-content span.v9 {
background: #8B008B;
}
.amp-wp-article-content span.v10 {
background: #191970;
}
.amp-wp-article-content .mod-inst {
margin: 20px 10px;
padding: 12px 14px;
box-shadow: 0px 5px 0px #BBB;
border: solid 1px #CCC;
}
.amp-wp-article-content .mod-inst span.title {
font-size: 1.2em;
font-weight: bold;
}
.amp-wp-article-content .mod-inst p.note {
margin: 10px;
padding: 10px;
border-radius: 5px;
background: #DDD;
}
.amp-wp-article-content .mod-inst ol, .amp-wp-article-content .mod-inst ul {
margin-left: 20px;
}
.amp-wp-article-content .mod-inst ol li, .amp-wp-article-content .mod-inst ul li {
margin: 5px;
}
.amp-wp-article-content .mod-inst .stopmodreposts {
display: block;
background: blue;
color: #fff;
margin: 1.2em 0;
padding: 1.5em 1em 1.5em;
text-align: center;
overflow: hidden;
background: #2687e8;
text-decoration: none;
}
.amp-wp-article-content .mod-inst .stopmodreposts b {
font-size: 3em;
font-weight: normal;
text-shadow: 0px 5px 0px black;
line-height: 1.2;
display: block;
animation: textshadowmoco 5s ease 0s infinite normal;
}
@keyframes textshadowmoco {
0% {
text-shadow: 0px 0px 0px rgba(0, 0, 0, 0.8);
transform: translateY(0%);
}
20% {
text-shadow: 0px 5px 0px rgba(0, 0, 0, 0.8);
transform: translateY(-5px);
}
80% {
text-shadow: 0px 5px 0px rgba(0, 0, 0, 0.8);
transform: translateY(-5px);
}
100% {
text-shadow: 0px 0px 0px rgba(0, 0, 0, 0.8);
transform: translateY(0%);
}
}
.amp-wp-article-content a.back-button {
margin-left: auto;
display: table;
padding: 0.5em;
text-decoration: none;
border-radius: 5px;
background: #2687E8;
color: #fff;
font-size: 1.1em;
font-weight: bold;
}
.amp-wp-article-content ul#mokuzi {
list-style-type: none;
border: solid 2px #444;
border-top: solid 0px #fff;
padding: 0px;
margin: 10px;
box-shadow: 0px 3px 0px rgba(1, 1, 1, 0.3);
}
.amp-wp-article-content ul#mokuzi > li {
display: block;
margin-left: 0px;
}
.amp-wp-article-content ul#mokuzi > li > a {
margin-left: -3px;
margin-top: -1px;
display: block;
padding: 10px;
width: 98%;
font-size: 19px;
font-size: 1.2rem;
font-weight: bold;
background: #b5e8ff;
line-height: 1.2rem;
text-decoration: none;
box-shadow: 1px 3px 5px rgba(1, 1, 1, 0.4);
z-index: 2;
}
.amp-wp-article-content ul#mokuzi > li > ul {
list-style-type: none;
padding-left: 0px;
margin-left: 0px;
}
.amp-wp-article-content ul#mokuzi > li > ul > li {
position: relative;
padding-right: 15px;
border-bottom: solid 1px #333;
list-style-type: none;
margin-left: 0px;
}
.amp-wp-article-content ul#mokuzi > li > ul > li:last-child {
border-bottom: solid 0px #fff;
}
.amp-wp-article-content ul#mokuzi > li > ul > li a {
font-size: 17px;
font-size: 1rem;
display: block;
line-height: 20px;
line-height: 1.4rem;
padding: 8px;
text-decoration: none;
}
.amp-wp-article-content ul#mokuzi > li > ul > li a.big {
font-size: 19px;
font-size: 1.2rem;
line-height: 20px;
line-height: 1.4rem;
}
.amp-wp-article-content ul#mokuzi > li > ul > li a:before, .amp-wp-article-content ul#mokuzi > li > ul > li a:after {
content: "";
position: absolute;
border-top: solid 10px transparent;
border-right: solid 10px transparent;
border-bottom: solid 10px transparent;
width: 0px;
height: 0px;
bottom: 8px;
}
.amp-wp-article-content ul#mokuzi > li > ul > li a:before {
right: 0px;
border-left: solid 10px #000000;
}
.amp-wp-article-content ul#mokuzi > li > ul > li a:after {
right: 2px;
border-left: solid 10px #fff;
}
.amp-wp-article-content .quote-image {
display: inline-block;
margin: 8px 4px;
padding: 5px;
background: #2687e8;
color: #fff;
}
.amp-wp-article-content .quote-image a, .amp-wp-article-content .quote-image a:visited, .amp-wp-article-content .quote-image a:hover {
color: #fff;
}
@media screen and (max-width: 768px) {
.amp-wp-article-content dl {
padding: 0px 12px 10px;
}
}
@media screen and (max-width:500px) {
.amp-wp-article-content ul>li>ul {
margin-left: 0.4em;
}
}

/* ------------------------------------ */


/* Header */

.amp-wp-header {
background-color: <?php echo sanitize_hex_color( $header_background_color ); ?>;
}

.amp-wp-header div {
color: <?php echo sanitize_hex_color( $header_color ); ?>;
font-size: 1em;
font-weight: 400;
margin: 0 auto;
max-width: calc(840px - 32px);
padding: 0px 20px 16px;
position: relative;
}

.amp-wp-header a {
color: <?php echo sanitize_hex_color( $header_color ); ?>;
text-decoration: none;
}

.amp-wp-header p {
	font-size: 16px;
}
.amp-wp-header a#header-normal-link {
	display: block;
    background: #fff;
    color: #2687e8;
    font-size: 25px;
    padding: 5px;
    border-radius: 5px;
    font-weight: bold;
    text-align: center;
    box-shadow: 0px 5px 0px #14487b;
}
.amp-wp-header a#amp_logo2020 {
    display: block;
    margin: 30px 20px 0px;
}
.amp-wp-header a#amp_logo2020 svg {
	fill: #fff;
}


/* Site Icon */

.amp-wp-header .amp-wp-site-icon {
/** site icon is 32px **/
background-color: <?php echo sanitize_hex_color( $header_color ); ?>;
border: 1px solid <?php echo sanitize_hex_color(  $header_color ); ?>;
border-radius: 50%;
position: absolute;
right: 18px;
top: 10px;
}

/* Article */

.amp-wp-article {
color: <?php echo sanitize_hex_color( $text_color ); ?>;
font-weight: 400;
margin: 1.5em auto;
max-width: 840px;
overflow-wrap: break-word;
word-wrap: break-word;
}

/* Article Header */

.amp-wp-article-header {
align-items: center;
align-content: stretch;
display: flex;
flex-wrap: wrap;
justify-content: space-between;
margin: 1.5em 16px 1.5em;
}

.amp-wp-title {
color: <?php echo sanitize_hex_color( $text_color ); ?>;
display: block;
flex: 1 0 100%;
font-weight: 900;
margin: 0 0 .625em;
width: 100%;
}

/* Article Meta */

.amp-wp-meta {
color: <?php echo sanitize_hex_color( $muted_text_color ); ?>;
display: inline-block;
flex: 2 1 50%;
font-size: .875em;
line-height: 1.5em;
margin: 0;
padding: 0;
}

.amp-wp-article-header .amp-wp-meta:last-of-type {
text-align: right;
}

.amp-wp-article-header .amp-wp-meta:first-of-type {
text-align: left;
}

.amp-wp-byline amp-img,
.amp-wp-byline .amp-wp-author {
display: inline-block;
vertical-align: middle;
}

.amp-wp-byline amp-img {
border: 1px solid <?php echo sanitize_hex_color( $link_color ); ?>;
border-radius: 50%;
position: relative;
margin-right: 6px;
}

.amp-wp-posted-on {
text-align: right;
}

/* Featured image */

.amp-wp-article-featured-image {
margin: 0 0 1em;
}
.amp-wp-article-featured-image amp-img {
margin: 0 auto;
}
.amp-wp-article-featured-image.wp-caption .wp-caption-text {
margin: 0 18px;
}

/* Article Content */

..amp-wp-article-content {
margin: 0 16px;
}

..amp-wp-article-content ul,
..amp-wp-article-content ol {
margin-left: 1em;
}

..amp-wp-article-content amp-img {
margin: 0 auto;
}

..amp-wp-article-content amp-img.alignright {
margin: 0 0 1em 16px;
}

..amp-wp-article-content amp-img.alignleft {
margin: 0 16px 1em 0;
}

/* Captions */

.wp-caption {
padding: 0;
}

.wp-caption.alignleft {
margin-right: 16px;
}

.wp-caption.alignright {
margin-left: 16px;
}

.wp-caption .wp-caption-text {
border-bottom: 1px solid <?php echo sanitize_hex_color( $border_color ); ?>;
color: <?php echo sanitize_hex_color( $muted_text_color ); ?>;
font-size: .875em;
line-height: 1.5em;
margin: 0;
padding: .66em 10px .75em;
}

/* AMP Media */

amp-carousel {
background: <?php echo sanitize_hex_color( $border_color ); ?>;
margin: 0 -16px 1.5em;
}
amp-iframe,
amp-youtube,
amp-instagram,
amp-vine {
background: <?php echo sanitize_hex_color( $border_color ); ?>;
margin: 0 -16px 1.5em;
}

..amp-wp-article-content amp-carousel amp-img {
border: none;
}

amp-carousel > amp-img > img {
object-fit: contain;
}

.amp-wp-iframe-placeholder {
background: <?php echo sanitize_hex_color( $border_color ); ?> url( <?php echo esc_url( $this->get( 'placeholder_image_url' ) ); ?> ) no-repeat center 40%;
background-size: 48px 48px;
min-height: 48px;
}

/* Article Footer Meta */

.amp-wp-article-footer .amp-wp-meta {
display: block;
}

.amp-wp-tax-category,
.amp-wp-tax-tag {
color: <?php echo sanitize_hex_color( $muted_text_color ); ?>;
font-size: .875em;
line-height: 1.5em;
margin: 1.5em 16px;
}

.amp-wp-comments-link {
color: <?php echo sanitize_hex_color( $muted_text_color ); ?>;
font-size: .875em;
line-height: 1.5em;
text-align: center;
margin: 2.25em 0 1.5em;
}

.amp-wp-comments-link a {
border-style: solid;
border-color: <?php echo sanitize_hex_color( $border_color ); ?>;
border-width: 1px 1px 2px;
border-radius: 4px;
background-color: transparent;
color: <?php echo sanitize_hex_color( $link_color ); ?>;
cursor: pointer;
display: block;
font-size: 14px;
font-weight: 600;
line-height: 18px;
margin: 0 auto;
max-width: 200px;
padding: 11px 16px;
text-decoration: none;
width: 50%;
-webkit-transition: background-color 0.2s ease;
transition: background-color 0.2s ease;
}

/* AMP Footer */

.amp-wp-footer {
border-top: 1px solid <?php echo sanitize_hex_color( $border_color ); ?>;
margin: calc(1.5em - 1px) 0 0;
}

.amp-wp-footer div {
margin: 0 auto;
max-width: calc(840px - 32px);
padding: 1.25em 16px 1.25em;
position: relative;
}

.amp-wp-footer h2 {
font-size: 1em;
line-height: 1.375em;
margin: 0 0 .5em;
}

.amp-wp-footer p {
color: <?php echo sanitize_hex_color( $muted_text_color ); ?>;
font-size: .8em;
line-height: 1.5em;
margin: 0 85px 0 0;
}

.amp-wp-footer a {
text-decoration: none;
}

.back-to-top {
bottom: 1.275em;
font-size: .8em;
font-weight: 600;
line-height: 2em;
position: absolute;
right: 16px;
}
