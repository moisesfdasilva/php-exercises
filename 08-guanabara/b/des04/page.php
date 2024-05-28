<?php
  $page= "<!DOCTYPE html><html lang='pt-br'><head><title>";
  $page .= $pageData->getTitle();
  $page .= "</title><meta http-equiv='Content-Type'
    content='text/html;charset=utf-8'/>";
  $page .= "</head><body>";
  $page .= $pageData->getContent();
  $page .= "</body></html>";
?>