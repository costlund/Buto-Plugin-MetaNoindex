# Buto-Plugin-MetaNoindex
Widget to render meta tag to provent search engins to index pages.
## Usage
Code and YML example.
### Code
```
wfPlugin::enable('meta/noindex');
$element = wfDocument::createWidget('meta/noindex', 'noindex');
```
### YML
```
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
