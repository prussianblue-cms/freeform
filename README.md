Freeform is a Drupal module, compatible con D9 and D10. It aims to help front-end developers and content editors collaborate and get along.

### What problem does freeform solve?

Freeform allows developers to avoid hardcoding content (text, images, links) in their themes. It allows editors to stop relying on developers (who hardcoded content) to change simple stuff. Developers can create markup via templates and style it however they need to, while getting content that editors can manage.

### What this can produce

There are two main ways in which a freeform can be used to build pages:

* **Stand-alone node**. Freeform nodes will have theme suggestion with the format `freeform--CODE` so you can create a template that matches that suggestion and put on it whatever you need as a developer.
* **A block**. The module includes a code sample to create a custom block that is linked to and gets its contents from a freeform node. Creating a custom block whose contents can be changed by editors using the UI becomes a simple task.

Additionally, a freeform embed paragraph is offered to, well, embed freeforms in content types that use Paragraphs. You'll need to enable the paragraph type in the field where you want to use it.

### Getting content from the node

A freeform node has two fields:

* **Code**. A simple text to identify the freeform. This will be used to provide a theme suggestion so you can write a template for the node.
* **Contents**. A Paragraphs field, where you can create image, plain text, formatted text or link items.

The module provides a [Twig macros](https://twig.symfony.com/doc/2.x/tags/macro.html) file, which contains macros to access the text, images and URLs entered in the node when writing the template file.

### Macros

The macros file is located at [templates/macros.twig](https://github.com/prussianblue-cms/freeform/blob/main/templates/macros.twig)

* `freeformPlainText(code, freeform)`
* `freeformEntityRender(code, freeform)` // renders an entity from an entity reference field
* `freeformText(code,freeform)`
* `freeformImage(code, freeform)`
* `freeformImageUri(code,freeform)`
* `freeformImageTitle(code,freeform)`
* `freeformImageStyle(code,styleName,freeform)`
* `freeformImageStyleUri(code,styleName,freeform)`
* `freeformLinkURL(code,freeform)`
* `freeformLinkTitle(code,freeform)`
* `freeformRenderEntity(code,freeform,entity_type,display_mode)` // renders an entity from a plain text ID

### To create a freeform node

* Create a freeform node and give it a code. The code must not use dashes, underscores or spaces. It's currently not validated, so stick to letters and you'll be fine. Let's assume that you used the code `nodesample`. 
* In that node, create a plain text paragraph, give it the code `first` and enter whatever text you want.
* In your theme, create `node--freeform--nodesample.html.twig`. You can copy from samples/templates/node--freeform--nodesample.html.twig.
* In your template, import the macros with `{% import '@m3_freeform/macros.twig' as freeformMacros %}`
* You can now use `{{ freeformMacros.freeformText('first', freeform }}` to output the text in your template.

### To create a freeform block

WIP. See the files in samples/sample_custom_blocks for some guidance.
