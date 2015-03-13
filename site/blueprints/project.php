<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  projectCode:
    label: Project Code
    type:  text
    width: 1/2
    required: true
  year:
    label: Year
    type:  text
    width: 1/2
  website:
    label: Website
    type: url
    required: true
  summary:
    label: Summary
    type:  text
  text:
    label: Text
    type:  textarea
  quote:
    label: Quote
    type:  textarea
    width: 1/2
  quoteAuthor:
    label: Quote Author
    type:  text
    width: 1/2
  tags:
    label: Tags
    type:  tags