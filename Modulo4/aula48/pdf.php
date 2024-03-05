<?php

require_once __DIR__ . '/vendor/autoload.php';
include_once 'models/LibHtml.php';
include_once 'models/Connect.php';
include_once 'models/Manager.php';

$lista = (new Manager)->select_common("produtos", null, null, null);


$html = '
    
<!DOCTYPE html>
<html lang="en" dir="ltr" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
<meta name="color-scheme" content="light dark">
<title>Starter Email Boilerplate</title>
<!--[if mso]>
<noscript>
<xml>
  <o:OfficeDocumentSettings>
    <o:PixelsPerInch>96</o:PixelsPerInch>
  </o:OfficeDocumentSettings>
</xml>
</noscript>
<![endif]-->
<style>
/* Dark mode settings */
:root {
  color-scheme: light dark;
}

/* Reset */
html,
body {
  margin: 0 auto !important;
  padding: 0 !important;
  height: 100% !important;
  width: 100% !important;
}

.main {
  box-sizing: border-box;
}

/* Responsive adjustments */
@media screen and (max-width: 480px) {
  .column {
    display: block !important;
    width: 100% !important;
    box-sizing: border-box;
    padding: 0 14px 14px 14px !important;
  }

  .column:last-child {
    padding-bottom: 0 !important;
  }

  .column.alt {
    padding-top: 14px !important;
    padding-bottom: 0 !important;
  }

  .column.alt:last-child {
    padding-bottom: 14px !important;
  }

  .column img.fill {
    width: 100% !important;
    height: auto !important;
  }

  .icons .column {
    width: 50% !important;
    float: left;
  }

  .icons .column:nth-child(3) {
    padding-bottom: 0 !important;
  }

  .icons .column.alt:nth-child(3) {
    padding-bottom: 14px !important;
  }
}

/* Dark mode adjustments */
@media (prefers-color-scheme: dark) {

  body,
  .wrapper {
    background-color: #222 !important;
  }

  h1,
  h2,
  h3,
  p,
  ul li,
  code {
    color: #f1f1f1 !important;
  }

  .column.alt {
    background-color: #1b1b1b !important;
  }

  .btn a {
    background: #a6a6a6 !important;
    color: #404040 !important;
  }
}
</style>
</head>

<body style="background: #ffffff;">
<div class="block-preview" style="display: none;">&nbsp;</div>
<div role="article" lang="en" dir="ltr" class="wrapper" style="background: #ffffff; font-size: 16px; font-family: Helvetica Neue, Helvetica, Arial, sans-serif;">

<!-- Container -->

<!--[if true]>
<table role="presentation" style="width: 600px;" align="center"><tr><td>
<![endif]-->
<div class="main" style="max-width: 600px; margin: 0 auto;">

  <!-- Header -->

  <div class="content" style="margin: 0; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 18px; line-height: 24px; color: #333333; text-align: left; font-weight: 300;">

    <div style="width: 100%; height: 14px">&nbsp;</div>
    <div class="block-region block-remove" data-group="header">
      <!--[if true]>
      <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%" style="all: unset; opacity: 0;">
        <tr>
      <![endif]-->
      <div style="display: table; width: 100%;">
        <!--[if true]><td width="33.3%"><![endif]-->
        <!--[if !true]><!-->
        <div class="column" style="display: table-cell; width: 33.3%;">
          <!--<![endif]-->
          <img class="block-edit" data-block="header-logo" height="auto" src="https://dummyimage.com/400x160/60bcde/ffffff&text=&nbsp;Logo&nbsp;" width="200" alt="" style="display: block; width: 200px; height: auto;">
          <!--[if !true]><!-->
        </div>
        <!--<![endif]-->
        <!--[if true]>
          </td>
          <td width="66.6%">
        <![endif]-->
        <!--[if !true]><!-->
        <div class="column" style="display: table-cell; width: 66.6%; vertical-align: middle; text-align: center;">
          <!--<![endif]-->
          <h1 class="block-edit block-maxchar-30 block-remove" data-block="header-tagline" style="margin: 0; font-family: Georgia, Times New Roman, serif; font-size: 18px; line-height: 24px; color: #333333; text-align: center; font-weight: normal;">Tagline/title</h1>
          <!--[if !true]><!-->
        </div>
        <!--<![endif]-->
        <!--[if true]></td><![endif]-->
      </div>
      <!--[if true]>
        </tr>
      </table>
      <![endif]-->
    </div>
    <div class="column block-region block-remove" data-group="header" style="text-align: center;">
      <img class="block-edit" data-block="header-logo" height="auto" src="https://dummyimage.com/400x160/60bcde/ffffff&text=&nbsp;Logo&nbsp;" width="200" alt="" style="display: block; margin: 0 auto; width: 200px; height: auto;">
      <h1 class="block-edit block-maxchar-30 block-remove" data-block="header-tagline" style="margin: 0; font-family: Georgia, Times New Roman, serif; font-size: 18px; line-height: 24px; color: #333333; text-align: center; font-weight: normal;">Tagline/title</h1>
    </div>

    <!-- Content -->

    <!-- Code block section -->
    <code class="block-section be-code-edit" data-group="section-code" data-title="Code" style="font-size: 16px; line-height: 18px;">/* Code block */ %%[ IF @member=="True" THEN ]%%</code>

    <!-- Spacer section -->
    <div class="block-section" data-group="section-spacer" data-title="Spacer" style="width: 100%;">
      <p style="float: left; margin: 0; margin-bottom: 14px; width: 100%; line-height: 0;">&nbsp;</p>
    </div>
    <div class="block-section" data-group="section-spacer" style="width: 100%;">
      <p style="float: left; margin: 0; margin-bottom: 28px; width: 100%; line-height: 0;">&nbsp;</p>
    </div>

    <!-- Featured image section -->
    <div class="block-section" data-group="featured-image" data-title="Featured image">
      <img src="https://dummyimage.com/1200x600/60bcde/ffffff&text=&nbsp;Feature+Image&nbsp;" width="600" height="auto" alt="" class="block-edit" data-block="featured-image-image" style="display: block; width: 100%; height: auto;">
    </div>

    <!-- Standard content section -->
    <div class="column block-section" data-group="content-standard" data-title="Standard content">
      <p class="block-edit block-remove" data-block="content-standard-text" style="margin: 0; font-family: Helvetica Neue, Helvetica, Arial, sans-serif;">Text copy goes here. Sometimes it includes email provider tokens to pull in audience info, like %%first_name%%. And some additional text that may also include a <a href="https://blocksedit.com/#" style="text-decoration: underline; color: #1467ac;" data-style="link-standard">link</a>.</p>

      <!-- Standalone Components -->

      <!-- Fluid image -->
      <div class="block-component" data-group="fluid-image" data-title="Fluid image">
        <img src="https://dummyimage.com/1200x600/60bcde/ffffff&text=&nbsp;Content+Image&nbsp;" width="600" height="auto" alt="" class="block-edit" data-block="fluid-image-image" style="display: block; width: 100%; height: auto;">
      </div>

      <!-- Code block -->
      <code class="block-component be-code-edit" data-group="component-code" data-title="Code" style="font-size: 16px; line-height: 18px;">/* Code block */ %%[ IF @member=="True" THEN ]%%</code>

      <!-- Spacer -->
      <p class="block-component" data-group="component-spacer" data-title="Spacer" style="display: inline-block; margin: 0; margin-bottom: 14px; width: 100%; line-height: 0;">&nbsp;</p>
      <p class="block-component" data-group="component-spacer" style="display: inline-block; margin: 0; margin-bottom: 28px; width: 100%; line-height: 0;">&nbsp;</p>

      <!-- Titles -->
      <div class="block-component" data-group="compontent-title" data-title="Title">
        <h2 class="block-edit" data-block="component-title-title" style="margin: 0; margin-bottom: 10px; font-family: Georgia, Times New Roman, serif; font-size: 28px; line-height: 32px; color: #333333; font-weight: normal;">Headline/primary title text</h2>
      </div>
      <div class="block-component" data-group="component-subtitle" data-title="Subtitle">
        <h3 class="block-edit" data-block="compontent-subtitle-subtitle" style="margin: 0; margin-bottom: 10px; font-family: Georgia, Times New Roman, serif; font-size: 22px; line-height: 28px; color: #333333; font-weight: normal;">Subheadline/secondary title text</h3>
      </div>

      <!-- Text -->
      <div class="block-component" data-group="component-text" data-title="Text">
        <p class="block-edit" data-block="component-text-text" style="margin: 0; font-family: Helvetica Neue, Helvetica, Arial, sans-serif;">More text copy goes here. It could be as long as you need it to be as there is plenty of room to let it flow!</p>
      </div>
      <div class="block-component" data-group="compontent-list" data-title="Unordered List">
        <ul style="margin: 0; padding-left: 30px;">
          <li class="block-edit" data-block="component-list-item">List item</li>
        </ul>
      </div>

      <!-- Button -->
      <table border="0" cellpadding="0" cellspacing="0" role="presentation" class="btn block-component" data-group="compontent-button" data-title="Button" style="display: inline-block; margin: 0 auto; border-collapse: separate; border-radius: 50px; line-height: 100%;">
        <tbody style="display: inline-block;">
          <tr>
            <td style="display: inline-block; border: none; border-radius: 50px; cursor: auto; mso-padding-alt: 12px 25px; background: #333333;"><a href="https://blocksedit.com/#" class="block-edit" data-block="component-button-cta" style="margin: 0; display: inline-block; border-radius: 50px; padding: 12px 25px; background: #333333; color: #ffffff; font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 1; text-decoration: none; mso-padding-alt: 0px; text-align: center;" target="_blank">Call to Action</a></td>
          </tr>
        </tbody>
      </table>

    </div>

    <!-- Standard content section with centered text -->
    <div class="column block-section" data-group="content-standard" style="text-align: center;">
      <p class="block-edit block-remove" data-block="content-standard-text" style="margin: 0; margin-bottom: 10px; font-family: Helvetica Neue, Helvetica, Arial, sans-serif;">More text copy goes here. It could be as long as you need it to be as there is plenty of room to let it flow!</p>
    </div>

    <!-- Standard content section with background color -->
    <div class="block-section" data-group="content-standard">
      <table role="presentation" width="100%" cellspacing="0" cellpadding="0">
        <tr>
          <td class="column alt block-bgcolor" style="background-color: #eeeeee; padding: 14px;">
            <p class="block-edit block-remove" data-block="content-standard-text" style="margin: 0; margin-bottom: 10px; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 18px; line-height: 24px; color: #333333; font-weight: 300;">More text copy goes here. It could be as long as you need it to be as there is plenty of room to let it flow!</p>
          </td>
        </tr>
      </table>
    </div>

    <!-- Standard content section with background color and centered text -->
    <div class="block-section" data-group="content-standard">
      <table role="presentation" width="100%" cellspacing="0" cellpadding="0">
        <tr>
          <td class="column alt block-bgcolor" style="background-color: #eeeeee; padding: 14px; text-align: center;">
            <p class="block-edit block-remove" data-block="content-standard-text" style="margin: 0; margin-bottom: 10px; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 18px; line-height: 24px; color: #333333; font-weight: 300;">More text copy goes here. It could be as long as you need it to be as there is plenty of room to let it flow!</p>
          </td>
        </tr>
      </table>
    </div>

    <!-- Featured section with background image -->
    <div class="block-section" data-group="feature-bg-image" data-title="Featured background image">
      <div class="block-background" data-block="feature-bg-image-image" style="background-image: url(https://dummyimage.com/1200x600/60bcde/ffffff&text=&nbsp;Background+Image&nbsp;); background-repeat: no-repeat; background-size: cover; background-position: top center; width: 100%; min-height: 300px; text-align: center;">
        <!--[if mso]><v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width: 450pt;"><v:fill type="frame" src="https://dummyimage.com/1200x600/60bcde/ffffff&text=&nbsp;Background+Image&nbsp;" color="#ffffff" aspect="atleast" data-block="feature-bg-image-image" /><v:textbox inset="0,0,0,0" style="mso-fit-shape-to-text: true;" /><![endif]-->
        <p style="display: inline-block; margin: 0; margin-bottom: 40px; width: 100%; line-height: 0;">&nbsp;</p>
        <h2 class="block-edit block-remove" data-block="feature-bg-image-title" style="margin: 0; font-family: Georgia, Times New Roman, serif; font-size: 28px; line-height: 32px; color: #333333; font-weight: normal; text-align: center;">Headline/primary title text</h2>
        <p style="display: inline-block; margin: 0; margin-bottom: 40px; width: 100%; line-height: 0;">&nbsp;</p>
        <!--[if mso]></v:textbox></v:rect><![endif]-->
      </div>
    </div>

    <!-- Two-column section with left image -->
    <div class="block-section" data-group="image-left" data-title="Two-column with left image">
      <!--[if true]>
      <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%" style="all: unset; opacity: 0;">
        <tr>
      <![endif]-->
      <div style="display: table; width: 100%;">
        <!--[if true]><td width="50%" style="padding-right: 0;"><![endif]-->
        <!--[if !true]><!-->
        <div class="column" style="display: table-cell; width: 50%; padding-right: 0;">
          <!--<![endif]-->
          <img height="auto" src="https://dummyimage.com/600x400/60bcde/ffffff&text=Content+Image" width="300" alt="" class="fill block-edit" data-block="image-left-image" style="display: block; width: 300px; height: auto;">
          <!--[if !true]><!-->
        </div>
        <!--<![endif]-->
        <!--[if true]>
          </td>
          <td width="50%" style="padding-left: 14px;">
        <![endif]-->
        <!--[if !true]><!-->
        <div class="column" style="display: table-cell; width: 50%; padding-left: 14px; vertical-align: middle;">
          <!--<![endif]-->
          <p class="block-edit block-remove" data-block="image-left-text" style="margin: 0; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 18px; line-height: 24px; color: #333333; font-weight: 300;">Text next to an image, in a two-colum section, split 50/50.</p>
          <!--[if !true]><!-->
        </div>
        <!--<![endif]-->
        <!--[if true]></td><![endif]-->
      </div>
      <!--[if true]>
        </tr>
      </table>
      <![endif]-->
    </div>

    <!-- Two-column section with left image and background color -->
    <div class="block-section" data-group="image-left">
      <!--[if true]>
      <table border="0" bgcolor="#eeeeee" data-block="image-left-bgcolor" cellpadding="0" cellspacing="0" role="presentation" width="100%" style="all: unset; opacity: 0;">
        <tr>
      <![endif]-->
      <div class="block-bgcolor" data-block="image-left-bgcolor" style="display: table; width: 100%; background-color: #eeeeee;">
        <!--[if true]><td width="50%" style="padding: 14px; padding-right: 0;"><![endif]-->
        <!--[if !true]><!-->
        <div class="column alt" style="display: table-cell; width: 50%; padding: 14px; padding-right: 0;">
          <!--<![endif]-->
          <img height="auto" src="https://dummyimage.com/600x400/60bcde/ffffff&text=Content+Image" width="286" alt="" class="fill block-edit" data-block="image-left-image" style="display: block; width: 286px; height: auto;">
          <!--[if !true]><!-->
        </div>
        <!--<![endif]-->
        <!--[if true]>
          </td>
          <td width="50%" style="padding: 14px;">
        <![endif]-->
        <!--[if !true]><!-->
        <div class="column alt" style="display: table-cell; width: 50%; padding: 14px; vertical-align: middle;">
          <!--<![endif]-->
          <p class="block-edit block-remove" data-block="image-left-text" style="margin: 0; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 18px; line-height: 24px; color: #333333; font-weight: 300;">Text next to an image, in a two-colum section, split 50/50.</p>
          <!--[if !true]><!-->
        </div>
        <!--<![endif]-->
        <!--[if true]></td><![endif]-->
      </div>
      <!--[if true]>
        </tr>
      </table>
      <![endif]-->
    </div>

    <!-- Two-column section with right image -->
    <div class="block-section" data-group="image-right" data-title="Two-column with right image" style="direction: rtl;">
      <!--[if true]>
      <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%" style="all: unset; opacity: 0; direction: rtl;">
        <tr>
      <![endif]-->
      <div style="display: table; width: 100%;">
        <!--[if true]><td width="50%" style="direction: ltr; padding-left: 7px;"><![endif]-->
        <!--[if !true]><!-->
        <div class="column" style="display: table-cell; direction: ltr; width: 50%; padding-left: 7px;">
          <!--<![endif]-->
          <img height="auto" src="https://dummyimage.com/600x400/60bcde/ffffff&text=Content+Image" width="300" alt="" class="fill block-edit" data-block="image-right-image" style="display: block; width: 300px; height: auto;">
          <!--[if !true]><!-->
        </div>
        <!--<![endif]-->
        <!--[if true]>
          </td>
          <td width="50%" style="direction: ltr; padding-right: 14px;">
        <![endif]-->
        <!--[if !true]><!-->
        <div class="column" style="display: table-cell; direction: ltr; width: 50%; padding-right: 14px; vertical-align: middle;">
          <!--<![endif]-->
          <p class="block-edit block-remove" data-block="image-right-text" style="margin: 0; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 18px; line-height: 24px; color: #333333; font-weight: 300;">Text next to an image, in a two-colum section, split 50/50.</p>
          <!--[if !true]><!-->
        </div>
        <!--<![endif]-->
        <!--[if true]></td><![endif]-->
      </div>
      <!--[if true]>
        </tr>
      </table>
      <![endif]-->
    </div>

    <!-- Two-column section with image on the right and background color -->
    <div class="block-section" data-group="image-right" style="direction: rtl;">
      <!--[if true]>
      <table border="0" bgcolor="#eeeeee" data-block="image-left-bgcolor" cellpadding="0" cellspacing="0" role="presentation" width="100%" style="all: unset; opacity: 0; direction: rtl;">
        <tr>
      <![endif]-->
      <div class="block-bgcolor" style="display: table; width: 100%; background-color: #eeeeee;">
        <!--[if true]><td width="50%" style="direction: ltr; padding: 14px; padding-left: 0;"><![endif]-->
        <!--[if !true]><!-->
        <div class="column alt" style="display: table-cell; direction: ltr; width: 50%; padding: 14px; padding-left: 0;">
          <!--<![endif]-->
          <img height="auto" src="https://dummyimage.com/600x400/60bcde/ffffff&text=Content+Image" width="286" alt="" class="fill block-edit" data-block="image-right-image" style="display: block; width: 286px; height: auto;">
          <!--[if !true]><!-->
        </div>
        <!--<![endif]-->
        <!--[if true]>
          </td>
          <td width="50%" style="direction: ltr; padding: 14px;">
        <![endif]-->
        <!--[if !true]><!-->
        <div class="column alt" style="display: table-cell; direction: ltr; width: 50%; padding: 14px; vertical-align: middle;">
          <!--<![endif]-->
          <p class="block-edit block-remove" data-block="image-right-text" style="margin: 0; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 18px; line-height: 24px; color: #333333; font-weight: 300;">Text next to an image, in a two-colum section, split 50/50.</p>
          <!--[if !true]><!-->
        </div>
        <!--<![endif]-->
        <!--[if true]></td><![endif]-->
      </div>
      <!--[if true]>
        </tr>
      </table>
      <![endif]-->
    </div>

    <!-- Two-column section with images -->
    <div class="block-section" data-group="two-column" data-title="Two-column with images">
      <!--[if true]>
      <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%" style="all: unset; opacity: 0;">
        <tr>
      <![endif]-->
      <div style="display: table; width: 100%;">
        <!--[if true]><td width="50%" style="padding-right: 7px;"><![endif]-->
        <!--[if !true]><!-->
        <div class="column" style="display: table-cell; width: 50%; padding-right: 7px;">
          <!--<![endif]-->
          <img height="auto" src="https://dummyimage.com/600x300/60bcde/ffffff&text=Content+Image" width="293" alt="" class="fill block-edit" data-block="two-column-image-1" style="display: block; width: 293px; height: auto;">
          <p class="block-edit block-remove" data-block="two-column-text-1" style="margin: 0; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 18px; line-height: 24px; color: #333333; font-weight: 300;">Text under an image, part of a two-column section, split 50/50.</p>
          <!--[if !true]><!-->
        </div>
        <!--<![endif]-->
        <!--[if true]>
          </td>
          <td width="50%" style="padding-left: 7px;">
        <![endif]-->
        <!--[if !true]><!-->
        <div class="column" style="display: table-cell; width: 50%; padding-left: 7px;">
          <!--<![endif]-->
          <img height="auto" src="https://dummyimage.com/600x300/60bcde/ffffff&text=Content+Image" width="293" alt="" class="fill block-edit" data-block="two-column-image-2" style="display: block; width: 293px; height: auto;">
          <p class="block-edit block-remove" data-block="two-column-text-2" style="margin: 0; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 18px; line-height: 24px; color: #333333; font-weight: 300;">Text under an image, part of a two-column section, split 50/50.</p>
          <!--[if !true]><!-->
        </div>
        <!--<![endif]-->
        <!--[if true]></td><![endif]-->
      </div>
      <!--[if true]>
        </tr>
      </table>
      <![endif]-->
    </div>

    <!-- Two-column section with images and background color -->
    <div class="block-section" data-group="two-column">
      <!--[if true]>
      <table border="0" bgcolor="#eeeeee" data-block="image-left-bgcolor" cellpadding="0" cellspacing="0" role="presentation" width="100%" style="all: unset; opacity: 0;">
        <tr>
      <![endif]-->
      <div class="block-bgcolor" style="display: table; width: 100%; background-color: #eeeeee;">
        <!--[if true]><td width="50%" style="padding: 14px; padding-right: 7px;"><![endif]-->
        <!--[if !true]><!-->
        <div class="column alt" style="display: table-cell; width: 50%; padding: 14px; padding-right: 7px;">
          <!--<![endif]-->
          <img height="auto" src="https://dummyimage.com/600x300/60bcde/ffffff&text=Content+Image" width="278" alt="" class="fill block-edit" data-block="two-column-image-1" style="display: block; width: 278px; height: auto;">
          <p class="block-edit block-remove" data-block="two-column-text-1" style="margin: 0; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 18px; line-height: 24px; color: #333333; font-weight: 300;">Text under an image, part of a two-column section, split 50/50.</p>
          <!--[if !true]><!-->
        </div>
        <!--<![endif]-->
        <!--[if true]>
          </td>
          <td width="50%" style="padding: 14px; padding-left: 7px;">
        <![endif]-->
        <!--[if !true]><!-->
        <div class="column alt" style="display: table-cell; width: 50%; padding: 14px; padding-left: 7px;">
          <!--<![endif]-->
          <img height="auto" src="https://dummyimage.com/600x300/60bcde/ffffff&text=Content+Image" width="278" alt="" class="fill block-edit" data-block="two-column-image-2" style="display: block; width: 278px; height: auto;">
          <p class="block-edit block-remove" data-block="two-column-text-2" style="margin: 0; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 18px; line-height: 24px; color: #333333; font-weight: 300;">Text under an image, part of a two-column section, split 50/50.</p>
          <!--[if !true]><!-->
        </div>
        <!--<![endif]-->
        <!--[if true]></td><![endif]-->
      </div>
      <!--[if true]>
        </tr>
      </table>
      <![endif]-->
    </div>

    <!-- Three-column section with images -->
    <div class="block-section" data-group="three-column" data-title="Three-column with images">
      <!--[if true]>
      <table border="0" data-block="image-left-bgcolor" cellpadding="0" cellspacing="0" role="presentation" width="100%" style="all: unset; opacity: 0;">
        <tr>
      <![endif]-->
      <div style="display: table; width: 100%;">
        <!--[if true]><td width="33.3%" style="padding-right: 7px;"><![endif]-->
        <!--[if !true]><!-->
        <div class="column" style="display: table-cell; width: 33.3%; padding-right: 7px;">
          <!--<![endif]-->
          <img height="auto" src="https://dummyimage.com/400x200/60bcde/ffffff&text=Content+Image" width="190" alt="" class="fill block-edit" data-block="three-column-image-1" style="display: block; width: 190px; height: auto;">
          <p class="block-edit block-remove" data-block="three-column-text-1" style="margin: 0; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 18px; line-height: 24px; color: #333333; font-weight: 300;">Text under an image, part of a three-column section, split into thirds.</p>
          <!--[if !true]><!-->
        </div>
        <!--<![endif]-->
        <!--[if true]>
          </td>
          <td width="33.3%" style="padding-right: 7px; padding-left: 7px;">
        <![endif]-->
        <!--[if !true]><!-->
        <div class="column" style="display: table-cell; width: 33.3%; padding-right: 7px; padding-left: 7px;">
          <!--<![endif]-->
          <img height="auto" src="https://dummyimage.com/400x200/60bcde/ffffff&text=Content+Image" width="190" alt="" class="fill block-edit" data-block="three-column-image-2" style="display: block; width: 190px; height: auto;">
          <p class="block-edit block-remove" data-block="three-column-text-2" style="margin: 0; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 18px; line-height: 24px; color: #333333; font-weight: 300;">Text under an image, part of a three-column section, split into thirds.</p>
          <!--[if !true]><!-->
        </div>
        <!--<![endif]-->
        <!--[if true]>
          </td>
          <td width="33.3%" style="padding-left: 7px;">
        <![endif]-->
        <!--[if !true]><!-->
        <div class="column" style="display: table-cell; width: 33.3%; padding-left: 7px;">
          <!--<![endif]-->
          <img height="auto" src="https://dummyimage.com/400x200/60bcde/ffffff&text=Content+Image" width="190" alt="" class="fill block-edit" data-block="three-column-image-3" style="display: block; width: 190px; height: auto;">
          <p class="block-edit block-remove" data-block="three-column-text-3" style="margin: 0; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 18px; line-height: 24px; color: #333333; font-weight: 300;">Text under an image, part of a three-column section, split into thirds.</p>
          <!--[if !true]><!-->
        </div>
        <!--<![endif]-->
        <!--[if true]></td><![endif]-->
      </div>
      <!--[if true]>
        </tr>
      </table>
      <![endif]-->
    </div>

    <!-- Three-column section with images and background color -->
    <div class="block-section" data-group="three-column">
      <!--[if true]>
      <table border="0" bgcolor="#eeeeee" data-block="image-left-bgcolor" cellpadding="0" cellspacing="0" role="presentation" width="100%" style="all: unset; opacity: 0;">
        <tr>
      <![endif]-->
      <div class="block-bgcolor" style="display: table; width: 100%; background-color: #eeeeee;">
        <!--[if true]><td width="33.3%" style="padding: 14px; padding-right: 7px;"><![endif]-->
        <!--[if !true]><!-->
        <div class="column alt" style="display: table-cell; width: 33.3%; padding: 14px; padding-right: 7px;">
          <!--<![endif]-->
          <img height="auto" src="https://dummyimage.com/400x200/60bcde/ffffff&text=Content+Image" width="181" alt="" class="fill block-edit" data-block="three-column-image-1" style="display: block; width: 181px; height: auto;">
          <p class="block-edit block-remove" data-block="three-column-text-1" style="margin: 0; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 18px; line-height: 24px; color: #333333; font-weight: 300;">Text under an image, part of a three-column section, split into thirds.</p>
          <!--[if !true]><!-->
        </div>
        <!--<![endif]-->
        <!--[if true]>
          </td>
          <td width="33.3%" style="padding: 14px; padding-right: 7px; padding-left: 7px;">
        <![endif]-->
        <!--[if !true]><!-->
        <div class="column alt" style="display: table-cell; width: 33.3%; padding: 14px; padding-right: 7px; padding-left: 7px;">
          <!--<![endif]-->
          <img height="auto" src="https://dummyimage.com/400x200/60bcde/ffffff&text=Content+Image" width="181" alt="" class="fill block-edit" data-block="three-column-image-2" style="display: block; width: 181px; height: auto;">
          <p class="block-edit block-remove" data-block="three-column-text-2" style="margin: 0; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 18px; line-height: 24px; color: #333333; font-weight: 300;">Text under an image, part of a three-column section, split into thirds.</p>
          <!--[if !true]><!-->
        </div>
        <!--<![endif]-->
        <!--[if true]>
          </td>
          <td width="33.3%" style="padding: 14px; padding-left: 7px;">
        <![endif]-->
        <!--[if !true]><!-->
        <div class="column alt" style="display: table-cell; width: 33.3%; padding: 14px; padding-left: 7px;">
          <!--<![endif]-->
          <img height="auto" src="https://dummyimage.com/400x200/60bcde/ffffff&text=Content+Image" width="181" alt="" class="fill block-edit" data-block="three-column-image-3" style="display: block; width: 181px; height: auto;">
          <p class="block-edit block-remove" data-block="three-column-text-3" style="margin: 0; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 18px; line-height: 24px; color: #333333; font-weight: 300;">Text under an image, part of a three-column section, split into thirds.</p>
          <!--[if !true]><!-->
        </div>
        <!--<![endif]-->
        <!--[if true]></td><![endif]-->
      </div>
      <!--[if true]>
        </tr>
      </table>
      <![endif]-->
    </div>

    <!-- Four-column icons section -->
    <div class="icons block-section" data-group="icons-column" data-title="Four-column icons">
      <!--[if true]>
      <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%" style="all: unset; opacity: 0;">
        <tr>
      <![endif]-->
      <div style="display: table; width: 100%;">
        <!--[if true]><td width="25%" style="padding-right: 7px; text-align: center;"><![endif]-->
        <!--[if !true]><!-->
        <div class="column" style="display: table-cell; width: 25%; padding-right: 7px; text-align: center;">
          <!--<![endif]-->
          <img src="https://dummyimage.com/160x160/60bcde/ffffff&text=Icon" width="80" height="80" alt="" class="block-edit" data-block="icons-column-image-1" style="display: block; margin: 0 auto; width: 80px; height: 80px;">
          <p class="block-edit block-remove" data-block="icons-column-text-1" style="margin: 0; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 18px; line-height: 24px; color: #333333; font-weight: 300;">Text with icons</p>
          <!--[if !true]><!-->
        </div>
        <!--<![endif]-->
        <!--[if true]>
          </td>
          <td width="25%" style="padding-right: 7px; padding-left: 7px; text-align: center;">
        <![endif]-->
        <!--[if !true]><!-->
        <div class="column" style="display: table-cell; width: 25%; padding-right: 7px; padding-left: 7px; text-align: center;">
          <!--<![endif]-->
          <img src="https://dummyimage.com/160x160/60bcde/ffffff&text=Icon" width="80" height="80" alt="" class="block-edit" data-block="icons-column-image-2" style="display: block; margin: 0 auto; width: 80px; height: 80px;">
          <p class="block-edit block-remove" data-block="icons-column-text-2" style="margin: 0; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 18px; line-height: 24px; color: #333333; font-weight: 300;">Text with icons</p>
          <!--[if !true]><!-->
        </div>
        <!--<![endif]-->
        <!--[if true]>
          </td>
          <td width="25%" style="padding-right: 7px; padding-left: 7px; text-align: center;">
        <![endif]-->
        <!--[if !true]><!-->
        <div class="column" style="display: table-cell; width: 25%; padding-right: 7px; padding-left: 7px; text-align: center;">
          <!--<![endif]-->
          <img src="https://dummyimage.com/160x160/60bcde/ffffff&text=Icon" width="80" height="80" alt="" class="block-edit" data-block="icons-column-image-3" style="display: block; margin: 0 auto; width: 80px; height: 80px;">
          <p class="block-edit block-remove" data-block="icons-column-text-3" style="margin: 0; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 18px; line-height: 24px; color: #333333; font-weight: 300;">Text with icons</p>
          <!--[if !true]><!-->
        </div>
        <!--<![endif]-->
        <!--[if true]>
          </td>
          <td width="25%" style="padding-left: 7px; text-align: center;">
        <![endif]-->
        <!--[if !true]><!-->
        <div class="column" style="display: table-cell; width: 25%; padding-left: 7px; text-align: center;">
          <!--<![endif]-->
          <img src="https://dummyimage.com/160x160/60bcde/ffffff&text=Icon" width="80" height="80" alt="" class="block-edit" data-block="icons-column-image-4" style="display: block; margin: 0 auto; width: 80px; height: 80px;">
          <p class="block-edit block-remove" data-block="icons-column-text-4" style="margin: 0; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 18px; line-height: 24px; color: #333333; font-weight: 300;">Text with icons</p>
          <!--[if !true]><!-->
        </div>
        <!--<![endif]-->
        <!--[if true]></td><![endif]-->
      </div>
      <!--[if true]>
        </tr>
      </table>
      <![endif]-->
    </div>

    <!-- Four-column icons section with background color -->
    <div class="icons block-section" data-group="icons-column">
      <!--[if true]>
      <table border="0" bgcolor="#eeeeee" data-block="image-left-bgcolor" cellpadding="0" cellspacing="0" role="presentation" width="100%" style="all: unset; opacity: 0;">
        <tr>
      <![endif]-->
      <div class="block-bgcolor" style="display: table; width: 100%; background-color: #eeeeee;">
        <!--[if true]><td width="25%" style="padding: 14px; padding-right: 7px; text-align: center;"><![endif]-->
        <!--[if !true]><!-->
        <div class="column alt" style="display: table-cell; width: 25%; padding: 14px; padding-right: 7px; text-align: center;">
          <!--<![endif]-->
          <img src="https://dummyimage.com/160x160/60bcde/ffffff&text=Icon" width="80" height="80" alt="" class="block-edit" data-block="icons-column-image-1" style="display: block; margin: 0 auto; width: 80px; height: 80px;">
          <p class="block-edit block-remove" data-block="icons-column-text-1" style="margin: 0; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 18px; line-height: 24px; color: #333333; font-weight: 300;">Text with icons</p>
          <!--[if !true]><!-->
        </div>
        <!--<![endif]-->
        <!--[if true]>
          </td>
          <td width="25%" style="padding: 14px; padding-right: 7px; padding-left: 7px; text-align: center;">
        <![endif]-->
        <!--[if !true]><!-->
        <div class="column alt" style="display: table-cell; width: 25%; padding: 14px; padding-right: 7px; padding-left: 7px; text-align: center;">
          <!--<![endif]-->
          <img src="https://dummyimage.com/160x160/60bcde/ffffff&text=Icon" width="80" height="80" alt="" class="block-edit" data-block="icons-column-image-2" style="display: block; margin: 0 auto; width: 80px; height: 80px;">
          <p class="block-edit block-remove" data-block="icons-column-text-2" style="margin: 0; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 18px; line-height: 24px; color: #333333; font-weight: 300;">Text with icons</p>
          <!--[if !true]><!-->
        </div>
        <!--<![endif]-->
        <!--[if true]>
          </td>
          <td width="25%" style="padding: 14px; padding-right: 7px; padding-left: 7px; text-align: center;">
        <![endif]-->
        <!--[if !true]><!-->
        <div class="column alt" style="display: table-cell; width: 25%; padding: 14px; padding-right: 7px; padding-left: 7px; text-align: center;">
          <!--<![endif]-->
          <img src="https://dummyimage.com/160x160/60bcde/ffffff&text=Icon" width="80" height="80" alt="" class="block-edit" data-block="icons-column-image-3" style="display: block; margin: 0 auto; width: 80px; height: 80px;">
          <p class="block-edit block-remove" data-block="icons-column-text-3" style="margin: 0; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 18px; line-height: 24px; color: #333333; font-weight: 300;">Text with icons</p>
          <!--[if !true]><!-->
        </div>
        <!--<![endif]-->
        <!--[if true]>
          </td>
          <td width="25%" style="padding: 14px; padding-left: 7px; text-align: center;">
        <![endif]-->
        <!--[if !true]><!-->
        <div class="column alt" style="display: table-cell; width: 25%; padding: 14px; padding-left: 7px; text-align: center;">
          <!--<![endif]-->
          <img src="https://dummyimage.com/160x160/60bcde/ffffff&text=Icon" width="80" height="80" alt="" class="block-edit" data-block="icons-column-image-4" style="display: block; margin: 0 auto; width: 80px; height: 80px;">
          <p class="block-edit block-remove" data-block="icons-column-text-4" style="margin: 0; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 18px; line-height: 24px; color: #333333; font-weight: 300;">Text with icons</p>
          <!--[if !true]><!-->
        </div>
        <!--<![endif]-->
        <!--[if true]></td><![endif]-->
      </div>
      <!--[if true]>
        </tr>
      </table>
      <![endif]-->
    </div>

    <!-- Listings section -->
    <div class="block-section" data-group="listing" data-title="Listings">
      <!--[if true]>
      <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%" style="all: unset; opacity: 0;">
        <tr>
      <![endif]-->
      <div style="display: table; width: 100%;">
        <!--[if true]><td width="33.3%"><![endif]-->
        <!--[if !true]><!-->
        <div class="column" style="display: table-cell; width: 33.3%;">
          <!--<![endif]-->
          <img height="auto" src="https://dummyimage.com/400x200/60bcde/ffffff&text=Content+Image" width="200" alt="" class="fill block-edit" data-block="listing-image" style="display: block; width: 200px; height: auto;">
          <!--[if !true]><!-->
        </div>
        <!--<![endif]-->
        <!--[if true]>
          </td>
          <td width="66.6%" style="padding-left: 14px; vertical-align: middle;">
        <![endif]-->
        <!--[if !true]><!-->
        <div class="column" style="display: table-cell; width: 66.6%; padding-left: 14px; vertical-align: middle;">
          <!--<![endif]-->
          <p class="block-edit block-remove" data-block="listing-text" style="margin: 0; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 18px; line-height: 24px; color: #333333; font-weight: 300;">Text in a listing section, with an image a third of its width on the left.</p>
          <!--[if !true]><!-->
        </div>
        <!--<![endif]-->
        <!--[if true]></td><![endif]-->
      </div>
      <!--[if true]>
        </tr>
      </table>
      <![endif]-->
    </div>

    <!-- Listings section with background color -->
    <div class="block-section" data-group="listing">
      <!--[if true]>
      <table border="0" bgcolor="#eeeeee" data-block="image-left-bgcolor" cellpadding="0" cellspacing="0" role="presentation" width="100%" style="all: unset; opacity: 0;">
        <tr>
      <![endif]-->
      <div class="block-bgcolor" style="display: table; width: 100%; background-color: #eeeeee;">
        <!--[if true]><td width="33.3%" style="padding: 14px; padding-right: 0;"><![endif]-->
        <!--[if !true]><!-->
        <div class="column alt" style="display: table-cell; width: 33.3%; padding: 14px; padding-right: 0;">
          <!--<![endif]-->
          <img height="auto" src="https://dummyimage.com/400x200/60bcde/ffffff&text=Content+Image" width="200" alt="" class="fill block-edit" data-block="listing-image" style="display: block; width: 200px; height: auto;">
          <!--[if !true]><!-->
        </div>
        <!--<![endif]-->
        <!--[if true]>
          </td>
          <td width="66.6%" style="padding-right: 14px; padding-left: 14px; vertical-align: middle;">
        <![endif]-->
        <!--[if !true]><!-->
        <div class="column alt" style="display: table-cell; width: 66.6%; padding-right: 14px; padding-left: 14px; vertical-align: middle;">
          <!--<![endif]-->
          <p class="block-edit block-remove" data-block="listing-text" style="margin: 0; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 18px; line-height: 24px; color: #333333; font-weight: 300;">Text in a listing section, with an image a third of its width on the left.</p>
          <!--[if !true]><!-->
        </div>
        <!--<![endif]-->
        <!--[if true]></td><![endif]-->
      </div>
      <!--[if true]>
        </tr>
      </table>
      <![endif]-->
    </div>

  </div>

  <!-- Footer -->

  <div style="margin: 30px 20px;">
    <p class="block-edit" data-block="footer-reason" style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 18px; color: #333333; text-align:center">
      Reason for email being sent.<br>Mailing address<br>
      <a href="https://blocksedit.com/#" target="_blank" style="color: #1467ac; text-decoration: underline;">Unsubscribe</a>
    </p>
  </div>

</div>
<!--[if true]>
</td></tr></table>
<![endif]-->

</div>
</body>

</html>

';
//$html = htmlentities(LibHtml::criarTabela($lista,[]));

//echo $html;

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();
