<?php
/*
	Section: Greeking
	Author: Martyn Bowis
	Author URI: http://www.netdesign.co.nz
	Description: A simple section of "greeking" text of variable length and with optional heading. Great for mockups.
	Class Name: PageLinesGreeking
	Filter: component
	Loading: active
*/

class PageLinesGreeking extends PageLinesSection {

	function section_opts(){
		$opts = array(
	
			array(
				'title'	=> __( 'Greeking', 'pagelines' ), 
				'type'	=> 'multi',
				'span'	=> 2,
				'opts'	=> array(
					array(
						'default'		=> 'h1',
						'type' 			=> 'select',
						'title' 		=> __( 'Select Heading Type', 'pagelines' ),
						'key'			=> 'greeking_heading_type',
						'label' 		=> __( 'Heading Type', 'pagelines' ),
						'opts'=> array(
							'h1'			=> array( 'name' => __( 'h1', 'pagelines' ) ),
							'h2'	 		=> array( 'name' => __( 'h2' , 'pagelines' )),
							'h3'	 		=> array( 'name' => __( 'h3', 'pagelines' ) )
						),
					),
					array(
						'default'		=> '',
						'type' 			=> 'text',
						'key'			=> 'greeking_heading',
						'label' 		=> __( 'Heading', 'pagelines' ),
					),
					array(
						'default'		=> 50,
						'type' 			=> 'text',
						'key'			=> 'greeking_words',
						'label' 		=> __( 'Words', 'pagelines' ),
					),
					
				)
			),

		);

		return $opts;

	}

	function section_template() {
		
		$str_greeking = 'Lorem ipsum dolor sit amet, at ultrices velit tortor vitae morbi, lacus lacinia sem ad nullam dictum, vitae donec nunc nec id. Lectus ac amet pellentesque, non dis aliquet id ornare vestibulum praesent. Lectus pariatur urna elit sagittis, ipsum quis, aenean mauris tellus turpis ipsum dolor ut, nibh amet. A risus massa enim nulla, mauris potenti, wisi pellentesque molestie velit phasellus quam porttitor. Phasellus mauris sollicitudin luctus dui repellat hac. Aenean erat orci, nulla phasellus vestibulum euismod leo, mollis maecenas vehicula tortor exercitation sed ut. Feugiat condimentum sem neque orci, velit leo tortor ut non aliquam semper, in vitae eget. Nibh vivamus amet laborum. Dictum ut, vehicula pellentesque cras vehicula nulla nascetur. Ultricies maecenas a in animi pede, rutrum elementum amet praesent a turpis dapibus, est in ut risus duis quam, elit gravida risus magna mi morbi ullamcorper. Lorem a turpis id amet bibendum cum, ac vulputate in consectetuer auctor mi, bibendum tempus. Ut erat suspendisse feugiat ante ligula, eget a at tincidunt, ut aliquam porttitor et potenti non massa, nulla morbi velit feugiat ipsum proin scelerisque, in praesent magna vestibulum quis porttitor. Dolor vel ultrices tincidunt wisi donec placerat. Sed quis euismod sapien molestie fermentum lobortis, pulvinar sed fringilla sodales, nulla in mi bibendum ac dolor, non sociosqu, elit nisl. Sodales pellentesque risus. Tempor amet turpis vel a velit wisi, rutrum tellus torquent amet luctus, gravida est turpis phasellus commodo sollicitudin sed, vestibulum eget iusto quisque, consequat amet ut nulla. Pede mi libero justo, fusce odio. Adipiscing amet vehicula sem semper metus orci, libero purus. Tempus mauris orci fringilla aliquam montes pellentesque, faucibus sed commodo posuere ultricies sapien, vehicula magna convallis libero, turpis magna id id vehicula adipiscing. Ut et praesent nunc congue sit maecenas, consectetuer sollicitudin at in velit diam, nibh wisi libero lacinia enim mattis, nibh arcu eros, morbi nec interdum eros at qui. Consequat ut augue, quisque vehicula vestibulum dictum amet, egestas eget totam congue maecenas imperdiet est, praesent bibendum mollis. Tellus consequat nam elit in vestibulum. Volutpat quis nibh id dolor, a vivamus adipiscing tincidunt, vestibulum lobortis diam et luctus consectetuer, donec aliquam at, nulla magna. Nonummy et a. Est per vestibulum interdum risus, sed hac felis, sem mauris volutpat libero. Pellentesque semper nulla magna, amet praesent ut eu nullam libero. Wisi purus mollitia vivamus, quam scelerisque fusce sollicitudin, malesuada eu venenatis vitae congue. Metus sociis cras tellus sit id nisl. Quam gravida nec pellentesque porttitor neque montes. Condimentum per interdum urna ante phasellus litora, morbi laoreet gravida varius pellentesque et eu, wisi habitant eget. Sed et imperdiet, feugiat ipsum, purus lectus eu integer id elementum, sagittis morbi. Condimentum lorem at, urna quis nibh leo consectetuer ut, ligula vel, neque commodo. Sed adipiscing, sed dui, adipiscing nunc lorem tincidunt, amet tempus tempus, id tellus sed rutrum vestibulum ac. Blandit ante felis lorem tristique hymenaeos, aliquam nunc at odio fusce iaculis. Ultrices curabitur eros porta posuere vulputate, imperdiet metus pede in, nullam dis vel vestibulum magna libero, semper mattis. Vivamus ridiculus ac a.';
		
		$output = implode(' ', array_slice(explode(' ', $str_greeking), 0, $this->opt('greeking_words')));
		
		if($this->opt('greeking_heading') != '') {
			$output = '<' . $this->opt('greeking_heading_type') . '>' . $this->opt('greeking_heading') . '</' . $this->opt('greeking_heading_type') . '>' . $output;
		}
		
		printf('<div class="greeking-wrapper pl-animation-group">%s</div>', $output);
	
		
	}
}


