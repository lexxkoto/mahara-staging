<?php

//This syntax is a workaround for creating a const array. Array constants
//are allowed from php 5.6 on, so once mahara upgrades, this code can be changed
//to take advantage of this.

//This table can take css and xpath locators, e.g:
//'Groups dropdown' => array("li.managegroups", "css_element"),
//OR
//'Groups dropdown' => array("//li[@class='managegroups']", "xpath_element"),
define ("LOCATOR_CONSTANTS", json_encode(array(
    'Admin home sub-menu'         => array(".adminhome", "css_element"),
    'Arrow-bar nav'               => array(".arrow-bar", "css_element"),
    'My portfolios'               => array(".bt-myviews", "css_element"),
    'Latest changes I can view'   => array(".bt-newviews", "css_element"),
    'Resume field block'          => array(".bt-resumefield", "css_element"),
    'Watched pages'               => array(".bt-watchlist", "css_element"),
    'Select'                      => array(".btn[title='Select']", "css_element"),
    'Comment preview'             => array(".commentreplyview", "css_element"),
    'Comment text'                => array(".comment-text", "css_element"),
    'Extensions sub-menu'         => array(".configextensions ul", "css_element"),
    'Configure site sub-menu'     => array(".configsite", "css_element"),
    'Users sub-menu'              => array(".configusers", "css_element"),
    'Content sub-menu'            => array(".content", "css_element"),
    'Comment feedbacktable'       => array(".feedbacktable", "css_element"),
    'File download heading 1'     => array(".filedownload-item:nth-of-type(1)>h4", "css_element"),
    'File download heading 2'     => array(".filedownload-item:nth-of-type(2)>h4", "css_element"),
    'Filelist table'              => array(".filelist", "css_element"),
    'Pages and Collections boxes' => array(".grouppageswrap", "css_element"),
    'Groups sub-menu'             => array(".groups", "css_element"),
    'Admin Groups sub-menu'       => array(".managegroups ul", "css_element"),
    'Institutions sub-menu'       => array(".manageinstitutions ul", "css_element"),
    'Options dialog'              => array(".modal-header", "css_element"),
    'Portfolio sub-menu'          => array(".myportfolio", "css_element"),
    'Web services sub-menu'       => array(".webservices", "css_element"),
    'H1 heading'                  => array("h1", "css_element"),
    'Collections text-box'        => array(".select2-selection__rendered", "css_element"),
    'Videojs time remaining'      =>  array(".vjs-remaining-time-display", "css_element"),
    'Annotation'                  => array("#activate_blocktype_annotation", "css_element"),
    'Smartevidence'               => array("#activate_module_framework", "css_element"),
    'Make comment public status'  => array("#add_feedback_form_ispublic_container", "css_element"),
    'Submissions to this group'   => array("#allsubmissionlist", "css_element"),
    'Blocktype sidebar'           => array("#content-editor-foldable", "css_element"),
    'Tags section'                => array("#edit_tags_container", "css_element"),
    'Upload dialog'               => array("#editgoalsandskills_filebrowser_upload_browse", "css_element"),
    'Filter by first name'        => array("#firstnamelist", "css_element"),
    'Find people results'         => array("#friendslist_pagination", "css_element"),
    'My groups box'               => array("#groups", "css_element"),
    'Group portfolios'            => array("#groupviewlist", "css_element"),
    'Main menu'                   => array("#main-nav", "css_element"),
    'Administration menu'         => array("#main-nav-admin", "css_element"),
    'Members without a submission to the group' => array("#nosubmissionslist", "css_element"),
    'Collections shared with this group' => array("#sharedcollectionlist", "css_element"),
    'Pages shared with this group'=> array("#sharedviewlist", "css_element"),
    'Shared with this group report'=> array("#sharedviewsreport", "css_element"),
    'Matrix table'                => array("#tablematrix", "css_element"),
    'Toolbar buttons'             => array("#toolbar-buttons", "css_element"),
    #xpath_elements
    'Secret urls - table row 1'   => array("//table/tbody/tr[1]/td[4]/a", "xpath_element"),
    'Multirecipientnotification'  => array("//li[@id='module.multirecipientnotification']", "xpath_element"),
    // xpath related to participation report
    'Group views report tr1 tc1'  => array("//*[@id='groupviewsreport']/tbody/tr[1]/td[1]", "xpath_element"),
    'Group views report tr1 tc2'  => array("//*[@id='groupviewsreport']/tbody/tr[1]/td[2]", "xpath_element"),
    'Group views report tr1 tc3'  => array("//*[@id='groupviewsreport']/tbody/tr[1]/td[3]", "xpath_element"),
    'Group views report tr3 tc1'  => array("//*[@id='groupviewsreport']/tbody/tr[3]/td[1]", "xpath_element"),
    )));

/**
* @param string $property
*/
function get_property($property, $location = null) {
  if (!$location) {
    $location = LOCATOR_CONSTANTS;
  }
  $location = json_decode($location, true);
  if (isset($location[ucfirst($property)])) {
     return $location[ucfirst($property)];
  }
  else {
    return null;
  }
}

 ?>
