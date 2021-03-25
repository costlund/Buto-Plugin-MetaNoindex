# Buto-Plugin-MetaNoindex
Widget to render meta tag to prevent search engins to index pages.
## Usage
Code and YML example.
### Widget, Code
```
wfPlugin::enable('meta/noindex');
$element = wfDocument::createWidget('meta/noindex', 'noindex');
```
### Widget, YML
```
type: widget
data:
  plugin: 'meta/noindex'
  method: noindex
```
## HTML output
```
<meta name="robots" content="noindex">
```
## Google documentation
```
https://developers.google.com/search/docs/advanced/crawling/block-indexing
```
