<?php

require( "config.php" );
$action = isset( $_GET['action'] ) ? $_GET['action'] : "";

switch ( $action ) {
  case 'archive':
    archive();
    break;
  case 'viewArticle':
    viewArticle();
    break;
  case 'About':
	About();
	break;
  case 'Team':
	Team();
	break;
  case 'Contact':
	Contact();
	break;
  case 'Media':
	Media();
	break;
  case 'Projects':
	Projects();
	break;
  case 'Palaash':
	Palaash();
	break;
  case 'Suvidha':
	Suvidha();
	break;
  case 'Utkarsh':
	Utkarsh();
	break;
  case 'SuccessStories':
	Story();
	break;
  default:
    homepage();
}


function archive() {
  $results = array();
  $data = Article::getList();
  $results['articles'] = $data['results'];
  $results['totalRows'] = $data['totalRows'];
  $results['pageTitle'] = "Article Archive | Widget News";
  require( TEMPLATE_PATH . "/archive.php" );
}

function viewArticle() {
  if ( !isset($_GET["articleId"]) || !$_GET["articleId"] ) {
    homepage();
    return;
  }

  $results = array();
  $results['article'] = Article::getById( (int)$_GET["articleId"] );
  $results['pageTitle'] = $results['article']->title . " | Widget News";
  require( TEMPLATE_PATH . "/viewArticle.php" );
}

function About(){
	require(TEMPLATE_PATH . "/WhatWeDo.php");
}
function Team(){
	require(TEMPLATE_PATH . "/Team.php");
}
function Contact(){
	require(TEMPLATE_PATH . "/Contact.php");
}
function Projects(){
	require(TEMPLATE_PATH . "/Projects.php");
}
function Palaash(){
	require(TEMPLATE_PATH . "/Projects/Palaash.php");
}
function Suvidha(){
	require(TEMPLATE_PATH . "/Projects/Suvidha.php");
}
function Utkarsh(){
	require(TEMPLATE_PATH . "/Projects/Utkarsh.php");
}
function Story() {
  $results = array();
  $data = Article::getList( HOMEPAGE_NUM_ARTICLES );
  $results['articles'] = $data['results'];
  $results['totalRows'] = $data['totalRows'];
  $results['pageTitle'] = "Stories";
  require( TEMPLATE_PATH . "/Story.php" );
}

function Media() {
  $results = array();
  $data = Article::getList( HOMEPAGE_NUM_ARTICLES );
  $results['articles'] = $data['results'];
  $results['totalRows'] = $data['totalRows'];
  $results['pageTitle'] = "Stories";
  require( TEMPLATE_PATH . "/MediaPage.php" );
}


function homepage() {
  $results = array();
  $data = Article::getList( HOMEPAGE_NUM_ARTICLES );
  $results['articles'] = $data['results'];
  $results['totalRows'] = $data['totalRows'];
  $results['pageTitle'] = "Widget News";
  require( TEMPLATE_PATH . "/homepage.php" );
}

?>



