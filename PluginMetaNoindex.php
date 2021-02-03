<?php
class PluginMetaNoindex{
  public function widget_noindex($data){
    wfPlugin::includeonce('wf/yml');
    $element = new PluginWfYml(__DIR__.'/element/widget_noindex.yml');
    wfDocument::renderElement($element->get());
  }
}
