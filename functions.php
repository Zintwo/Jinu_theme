<?php
	/**
	 * @package Jinu
	 */
	defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

	/**
	 * Theme CSS
	 */
	function theme_stylesheet() {
		wp_enqueue_style( 'theme', get_stylesheet_uri() );
		wp_enqueue_style( 'grid', get_theme_file_uri( '/css/grid.min.css' ), false, false, 'all' );
		wp_enqueue_style( 'nanumbarungothic', get_theme_file_uri( '/css/nanumbarungothic.css' ), false, false, 'all' );
	}
	add_action( 'wp_enqueue_scripts', 'theme_stylesheet' );

	/**
	 * Theme Script
	 */
	function theme_script() {

	}
	add_action( 'wp_enqueue_scripts', 'theme_script' );